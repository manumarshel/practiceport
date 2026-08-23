<?php


namespace App\Controllers\User;


use App\Controllers\BaseController;
use App\Libraries\SendMail;
use App\Models\AddModel;
use App\Models\PackageModel;
use App\Models\MasterPackageModel;
use App\Models\MasterSubscriptionModel;
use App\Models\SubscriptionModel;
use App\Models\user\UserModel;
use App\Models\VideoModel;

class Authentication extends BaseController
{

    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        $data = [];
        helper(['form', 'url']);
        $vm = new VideoModel();
        $helpVideo = $vm->getVideo('slot1');
        $data['slot1'] = '#';
        if (count($helpVideo) > 0) {
            $data['slot1'] = $helpVideo[0]['url'];
        }

        // ad
        $data['ad_slot1'] = fetchCurrentAd();

        if ($this->request->getMethod() == 'post') {
            //let's do the validation here
            $rules = [
                'email' => 'required|min_length[6]|max_length[50]|valid_email',
                'password' => 'required|min_length[6]|max_length[255]|validateSubscriberUser[email,password]',
            ];

            $errors = [
                'password' => [
                    'validateSubscriberUser' => 'Email or Password does not match'
                ]
            ];

            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new UserModel();

                $user = $model->where('email', $this->request->getVar('email'))
                    ->first();

                if ($user && intval($user['active']) === 1) {
                    $this->setUserSession($user);
                    return redirect()->to('user/dashboard');
                } else {
//                    var_dump($user);
                    var_dump(intval($user['active']) === 1);
                }

                //$session->setFlashdata('success', 'Successful Registration');

            }
        }
        return view('user/login', $data);
    }
  

  /***********Demo to be remove***************************/
    public function create_user()
    {
        //Create user in disabled mode
        $data = [
            'first_name' => $_POST['first_name'],
            'last_name' => $_POST['last_name'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'active' => 0,
            'phone' => $_POST['mobile'],
            'date_registered' => date('Y-m-d'),
        ];

        $model = new UserModel();
        try {

            return $model->insert($data, true);

        } catch (\ReflectionException $e) {
            http_response_code(400);
            echo json_encode(array('msg' => $e->getMessage()));
            return 'exception';
        }
        die();
//


//        TODO: Send Email to the user
    }

    public function set_subscription($userId)
    {
        try {
            if ($userId) {
                $pkgModel = new MasterPackageModel();
                $package = $pkgModel->find(intval($_POST['package']));

                if ($package) {

                    $this->session->set('package_title', $package['title']);
//                    $this->session->set('package_cost', $package['cost']);

                    $paymentId = '';
                    if (isset($_POST['razorpay_payment_id']) && !empty($_POST['razorpay_payment_id'])) {
                        $paymentId = $_POST['razorpay_payment_id'];
                    }

                    $cost = $this->session->get('package_cost')/100;

                    if (!$cost) {
                        $cost = 0;
                    }

                    $data = [
                        'start_date' => date('Y-m-d'),
                        'cost' => $cost,//$package['cost'],
                        'coupon_used' => $this->session->get('applied_coupon'),
                        'end_date' => date('Y-m-d', strtotime("+" . $package['duration'], strtotime(date('Y-m-d')))),
                        'user_id' => $userId,
                        'payment_id' => $paymentId,
                        'package_id' => intval($_POST['package'])
                    ];
                    $subModel = new MasterSubscriptionModel();
                    $subscriptionId = $subModel->insert($data, true);
                    //Activate the USER
                    if ($subscriptionId) {
                        $model = new UserModel();
                        $model->update(['user_id' => $userId], ['active' => 1]);
                        http_response_code(200);
                        echo json_encode(array('msg' => 'Success'));
                        return 'Success';
                    } else {
                        http_response_code(400);
                        echo json_encode(array('msg' => 'Unexpected error occurred while creating subscription. Please try again later'));
                        return 'Failed';
                    }

                } else {
                    http_response_code(400);
                    echo json_encode(array('msg' => 'Invalid Package'));
                    return 'Invalid Package';
                }

                // Create Subscription

            } else {
                http_response_code(400);
                echo json_encode(array('msg' => 'Unexpected error occurred while creating user. Please try again later'));
                return 'Failed';
            }
        } catch (\ReflectionException $e) {
            http_response_code(400);
            echo json_encode(array('msg' => $e->getMessage()));
            return 'exception';
        }
        die();
    }

    private function setUserSession($user)
    {
        $data = [
            'id' => $user['user_id'],
            'user_role' => 'user',
            'user_email' => $user['email'],
            'first_name' => $user['first_name'],
            'last_name' => $user['last_name'],
            'isLoggedIn' => true,
        ];

        session()->set($data);
        return true;
    }

    public function forgot()
    {
        $data = [];

        if ($this->request->getMethod() == 'post') {
            //let's do the validation here
            $rules = ['email' => 'required|min_length[6]|max_length[50]|valid_email'];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new UserModel();

                $user = $model->where('email', $this->request->getVar('email'))
                    ->first();

                if ($user && intval($user['active']) === 1) {
                    $new_password = $this->password_generate(6);
                    $mail = new SendMail();
                    $to = $user['email'];
                    $subject = 'Reset Password';
                    $msg = '<p>Hi ' . $user['first_name'] . ' ' . $user['last_name'] . ',';
                    $msg .= '<br /><br />';
                    $msg .= '<p>Your account password has been reset. Your new password is <strong>' . $new_password .  '</strong></p>';
                    $msg .= '<br /><p>Thank You</p>';

                    try {
                        $model->update($user['user_id'], ['password' => $new_password]);
                        $data['email_feed_back'] = $mail->sendMail($to, $subject, $msg);
                        session()->setFlashdata('success', 'Password reset successfully. New password is send to your email');
                        $data['email_feed_back'] = '';
                        return redirect()->route('user');
                    } catch (\ReflectionException $e) {
                        session()->setFlashdata('message', 'Unexpected error occurred');
                        return view('user/forgot', $data);
                    }

                } else {
                    session()->setFlashdata('message', 'Invalid account.');
                }
            }
        }

        return view('user/forgot', $data);
    }

    public function reset_password()
    {
        $data = [];
        if ($this->request->getMethod() == 'post') { 
            //let's do the validation here
            $rules = [
                'current_password' => 'required|min_length[6]|max_length[255]',
                'password' => 'required|min_length[6]|max_length[255]',
                'confirm_password' => 'required|min_length[6]|max_length[255]|matches[password]',
            ];


            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new UserModel();
                $data['current_password'] = $this->request->getVar('current_password');
                $new_password = $this->request->getVar('password');
                $user = $model->where('email', $this->session->get('user_email'))
                    ->first();

                if ( $user ) {
                    if ( password_verify($data['current_password'], $user['password'])) {
                        try {
                            $model->update($user['user_id'], ['password' => $new_password]);
                            session()->setFlashdata('message', 'Password reset successful');
                        } catch (\ReflectionException $e) {
                            session()->setFlashdata('message', 'Unexpected error occurred');
                        }
                    } else {
                        session()->setFlashdata('message', 'Invalid current password');
                    }
                } else {
                    session()->setFlashdata('message', 'User not logged in');
                }



            }
        }
        return view('user/settings', $data);
//        return view('user/reset_password');
    }
    
     
    public function logout()
    {
        session()->destroy();
        return redirect()->to('user');
    }

    private function password_generate($chars)
    {
        $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz@#!';
        return substr(str_shuffle($data), 0, $chars);
    }
}
