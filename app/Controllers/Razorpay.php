<?php

namespace App\Controllers;

use App\Controllers\User\Authentication;
use App\Models\user\UserModel;
use Config\Database;
use Exception;

class Razorpay extends BaseController
{


    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        $page_slug = $this->request->uri->getSegment(2);
        $db = Database::connect();
        $builder = $db->table('mst_packages');
        $builder->select('*');
        $builder->where('package_id', $page_slug);
//        $builder->join('courses', 'packages.course_id = courses.course_id');
        $query = $builder->get();
        $data = [];
        $package_info = $query->getResultArray();
        if ($package_info && is_array($package_info)) {
            $data['title'] = 'Checkout payment | practicepot.com';
            if ($page_slug == 9) {
                $data['callback_url'] = base_url() . '/razorpay/free_user';
            } else {
                $data['callback_url'] = base_url() . '/razorpay/callback';
            }

            $data['surl'] = base_url() . '/razorpay/success';;
            $data['furl'] = base_url() . '/razorpay/failed';;
            $data['currency_code'] = 'INR';
            $data['productId'] = $page_slug;
            $data['productPrice'] = $package_info[0]['cost'];
            $data['productTitle'] = $package_info[0]['title'];
        }

        $user_email = $this->session->get('user_email');
        $userId = $this->session->get('id');
        if ($user_email != '' && $userId != '') {
            $um = new UserModel();
            $user_ = $um->find($userId);

            $data['first_name'] = $user_['first_name'];
            $data['last_name'] = $user_['last_name'];
            $data['u_email'] = $user_['email'];
            $data['mobile'] = $user_['phone'];
            $data['isLoggedIn'] = true;
        } else {
            $data['first_name'] = '';
            $data['last_name'] = '';
            $data['u_email'] = '';
            $data['mobile'] = '';
            $data['isLoggedIn'] = false;
        }
        echo view("checkout", $data);
    }

// initialized cURL Request
    private function curl_handler($payment_id, $amount)
    {
        $url = 'https://api.razorpay.com/v1/payments/' . $payment_id . '/capture';
        // $key_id = "rzp_test_6eXNb4JTupd6NC";    //test
        // $key_secret = "0Rpp2wFSmNX3bOf2BtCpiE50"; //test
        
          $key_id = "rzp_live_tQzwGA6vZNFch2";
        $key_secret = "CskE1w7iAG9QHKH56m3pQsUL";
        
        $fields_string = "amount=$amount";
//cURL Request
        $ch = curl_init();
//set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERPWD, $key_id . ':' . $key_secret);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        return $ch;
    }


    public function free_user()
    {
        
        $auth_instance = new Authentication();
        $userId = $this->session->get('id');
         
        if ( ! $userId ) {
            $userId = $auth_instance->create_user();
        }

        $feed_back = $auth_instance->set_subscription($userId);

        if ($feed_back == 'Success') {
            $this->session->set('registration_status', true);
        } else {
            $this->session->set('registration_status', false);
        }
        return redirect()->to($this->request->getPost('merchant_surl_id'));
    }

// callback method
    public function callback()
    {
        
        if (!empty($this->request->getPost('razorpay_payment_id')) && !empty($this->request->getPost('merchant_order_id'))) {
            $auth_instance = new Authentication();
            $package_id = $this->request->getPost('package');
            
            
            $razorpay_payment_id = $this->request->getPost('razorpay_payment_id');


//            $merchant_order_id = $this->request->getPost('merchant_order_id');
            $this->session->set('razorpay_payment_id', $this->request->getPost('razorpay_payment_id'));
            $this->session->set('merchant_order_id', $this->request->getPost('merchant_order_id'));
            $this->session->set('package_cost', $this->request->getPost('merchant_total'));
            $currency_code = 'INR';
            $amount = $this->request->getPost('merchant_total');
            $success = false;
            $error = '';
            try {
                $ch = $this->curl_handler($razorpay_payment_id, $amount);
//execute post
                $result = curl_exec($ch);
                $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                if ($result === false) {
                    $success = false;
                    $error = 'Curl error: ' . curl_error($ch);
                } else {
                    $response_array = json_decode($result, true);
//Check success response
// echo "<pre>";
// var_dump($response_array);
// echo "</pre>";
                    if ($http_status === 200 and isset($response_array['error']) === false) {
                        $success = true;
                    } else {
                        $success = false;
                        if (!empty($response_array['error']['code'])) {
                            $error = $response_array['error']['code'] . ':' . $response_array['error']['description'];
                        } else {
                            $error = 'RAZORPAY_ERROR:Invalid Response <br/>' . $result;
                        }
                    }
                }
//close curl connection
                curl_close($ch);
            } catch (Exception $e) {
                $success = false;
                $error = 'Request to Razorpay Failed';
            }
            if ($success === true) {
                if (!empty($this->session->get('ci_subscription_keys'))) {
                    $this->session->unset('ci_subscription_keys');
                }
                  $userId = $this->session->get('id');
         
        if ( ! $userId ) {
            $userId = $auth_instance->create_user();
        }
               // $userId = $auth_instance->create_user();
                // echo "USer:" . $userId . "<br />";
                if ( $userId ) {
                    $feed_back = $auth_instance->set_subscription($userId);
                    // echo "feed_back:" . $feed_back . "<br />";
                    if ($feed_back == 'Success') {
                        
                        $this->session->set('registration_status', true);
                        return redirect()->to($this->request->getPost('merchant_surl_id'));
                    } else {
                        $this->session->set('registration_status', false);
                        return redirect()->to($this->request->getPost('merchant_surl_id'));
                    }
                }
                
            } else {
                /*
                $feed_back = $auth_instance->create_user();
                if ($feed_back == 'Success') {
                    $this->session->set('registration_status', true);
                    return redirect()->to($this->request->getPost('merchant_furl_id'));
                } else {
                    $this->session->set('registration_status', false);
                    return redirect()->to($this->request->getPost('merchant_furl_id'));
                }
                */
            }
        } else {
            // echo "<pre>";
            // var_dump($_POST);
            // echo "</pre>";
            echo 'An error occured. Contact site administrator, please!';
        }
    }

    public function success()
    {
        $data['transaction_id'] = $this->session->get('razorpay_payment_id');
//        $data['order_id'] = $this->session->get('merchant_order_id');
        $data['reg_status'] = $this->session->get('registration_status');
        $data['package_title'] = $this->session->get('package_title');
        $data['package_cost'] = $this->session->get('package_cost') ?? 0;
        echo view("payment_success", $data);
//        echo "<h4>Your transaction is successful</h4>";
//        echo "<br/>";
//        echo "Transaction ID: " . $this->session->get('razorpay_payment_id');
//        echo "<br/>";
//        echo "Order ID: " . $this->session->get('merchant_order_id');
    }

    public function failed()
    {
        $data['transaction_id'] = $this->session->get('razorpay_payment_id');
//        $data['order_id'] = $this->session->get('merchant_order_id');
        $data['reg_status'] = $this->session->get('registration_status');
        echo view("payment_failed", $data);
    }
}
