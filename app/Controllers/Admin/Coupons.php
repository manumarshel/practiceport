<?php


namespace App\Controllers\Admin;


use App\Controllers\BaseController;
use App\Models\CouponModel;
use CodeIgniter\Database\Exceptions\DatabaseException;
use Config\Database;
use CodeIgniter\Cookie\Cookie;

class Coupons extends BaseController
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        $data = [];
        $cpnm = new CouponModel();
        $data['coupons'] = $cpnm->findAll();
        return view('admin/coupons', $data);
    }

    public function add() {
        if ($this->request->getMethod() == 'post') {
            helper(['form', 'url']);

            $validated = $this->validate([
                'code' => ['label' => 'Code', 'rules' => 'required'],
                'type' => ['label' => 'Type', 'rules' => 'required'],
                'amount' => ['label' => 'Amount', 'rules' => 'required|decimal'],
            ]);

            if ($validated) {
                $exp_date = $this->request->getPost('expiry_date');
                if ( isset($exp_date) && ! empty($exp_date)) {
                    $exp_date = date('Y-m-d', strtotime($exp_date));
                } else {
                    $exp_date = null;;
                }
                $cpnm = new CouponModel();
                $data = [
                    'code' =>  $this->request->getPost('code'),
                    'type'  => $this->request->getPost('type'),
                    'amount' => $this->request->getPost('amount'),
                    'usage_limit' => $this->request->getPost('usage_limit'),
                    'expiry_date' => $exp_date,
                ];
                try {
                    $cpnm->insert($data);
                } catch (\ReflectionException $e) {
                    $msg = $e->getMessage();
                    return redirect()->to( base_url('/admin/coupons') )->with('msg', $msg);
                }

                $msg = 'Coupon Created Successfully';
            } else {
                $msg = implode(" ", $this->validator->getErrors());
            }
            return redirect()->to( base_url('/admin/coupons') )->with('msg', $msg);
        }

    }


    public function delete() {
        $id = $_POST['id'];
        $model = new CouponModel();
        if ( $id && intval($id) ) {
            try {
                $model->delete($id);
                return $this->response->setStatusCode(200)->setBody("Success");
            } catch (DatabaseException $e) {
                return $this->response->setStatusCode(401, $e->getMessage());
            }

        }
        return $this->response->setStatusCode(401, "invalid questionId");
//        echo "questionId: " . $question_id;
    }

    public function check_coupon() {
        $coupon = $_POST['coupon'];
        $productId = $_POST['productId'];
        $model = new CouponModel();
        if ( $coupon && $productId && intval($productId) ) {
            // Fetch the coupon
            $result = $model->where('code', $coupon)->get()->getResultArray();
            if ( $result && count($result) > 0 ) {
                $cpn_info = $result[0];
                if ( $cpn_info['expiry_date'] ) {
                    $expiry_date = date('Y-m-d', strtotime($cpn_info['expiry_date']));
                } else {
                    $expiry_date = null;
                }
                
                // $expiry_date_d = strtotime($cpn_info['expiry_date']);
                
                $today = date('Y-m-d');
                // $today_d = strtotime($cpn_info['expiry_date']);
                $total_usage = $cpn_info['total_usage'];
                $usage_limit = $cpn_info['usage_limit'];

                if ( $expiry_date && ($expiry_date && $today >  $expiry_date)) {
                    return $this->response->setStatusCode(401)->setJSON(array('msg' => "Coupon expired"));
                }

                if ( $usage_limit && $total_usage >= $usage_limit ) {
                    return $this->response->setStatusCode(401)->setJSON(array('msg' => "Coupon expired " . $usage_limit));
                }
                $price = $this->getCoursePrice($productId);
                if (  $price ) {
                    if ( $cpn_info['type'] == 'percent' ) {
                        $percent = intval($cpn_info['amount']);
                        $discount = ($price * $cpn_info['amount'])/100;
                        $new_price = $price - $discount;
                    } else {
                        $discount = $cpn_info['amount'];
                        $new_price = $price - $cpn_info['amount'];
                    }

                    if ( $new_price < 0 ) {
                        $new_price = 0;
                    }

                    if ( $discount > $price ) {
                        $discount = $price;
                    }
                } else {
                    return $this->response->setStatusCode(401, )->setJSON(array('msg' => "Unexpected error occurred."));
                }
                $data = [
                    'cid' => $cpn_info['cpn_id'],
                    'coupon' => $coupon,
                    'offer' => $new_price,
                    'discount' => $discount
                ];
                $this->response->setCookie('applied_coupon', $coupon, time() + 1800);
                $this->session->set('applied_coupon', $coupon);
                // return coupon info
                // else return limit exceed / expired
                return $this->response->setStatusCode(200)->setJSON($data);
            } else {
                return $this->response->setStatusCode(401)->setJSON(array('msg' => "Invalid coupon"));
            }

        }

        return $this->response->setStatusCode(401)->setJSON(array('msg' => "Invalid coupon"));
    }

    private function getCoursePrice($productId) {
        $page_slug = $productId;
        $db = Database::connect();
        $builder = $db->table('packages');
        $builder->select('*');
        $builder->where('package_id', $page_slug);
//        $builder->join('courses', 'packages.course_id = courses.course_id');
        $query = $builder->get();
        $data = [];
        $package_info = $query->getResultArray();
        if ( $package_info && is_array($package_info)) {
            return $package_info[0]['cost'];
        }

        return null;
    }
}
