<?php


namespace App\Controllers\Eway;


use App\Controllers\BaseController;
use App\Models\MasterQuestionModel;
use App\Models\sim\CompanyModel;
use App\Models\user\UserModel;

class Authentication extends BaseController
{
    public function index()
    {
        $data = [];
        
        $data['question_id'] = $this->request->uri->getSegment(2);

        session()->set($data);

        return redirect()->to('eway-simulation');
    }

    public function login()
    {
        $data = [];
        helper(['form']);

        $questionId = session('question_id');

        $qstn_model = new MasterQuestionModel();
        $qstn = $qstn_model->find($questionId);

        $companyId = $qstn['company_id'];

        $cmpny_model = new CompanyModel();
        $cmpny = $cmpny_model->find($companyId);

        if ($this->request->getMethod() == 'post') {

            //print_r($_POST); exit;

            $qr_code = $_POST['txtCaptcha'];

            if ($qr_code != "Q3LGH") {
                $data['message'] = 'Invalid Captcha..Pl enter the correct CAPTCHA as displayed on the screen.';

                return view('eway/login', $data);
            }

            if ($cmpny['username'] != $_POST['txt_username'] || $cmpny['password'] != $_POST['txt_password']) {
                $data['message'] = 'Invalid Login Credentials, If you are facing login problem repeatedly, please clear the cache in the browser and continue.';

                return view('eway/login', $data);
            }

            $this->setUserSession($cmpny);
            return redirect()->to('eway-simulation/dashboard');
        }

        return view('eway/login', $data);
    }

    private function setUserSession($cmpny){
        $data = [
            'company_name' => $cmpny['name'],
            'address1' => $cmpny['address1'],
            'user_id' => session()->get('id'),
            'user_role' => 'user',
            'user_email' => session()->get('user_email'),
            'address2' => $cmpny['address2'],
            'gstin' => $cmpny['gst_number'],
            'city' => $cmpny['city'],
            'pincode' => $cmpny['pincode'],
            'state' => $cmpny['state'],
            'isLoggedIn' => true,
        ];
        session()->set($data);
        return true;
    }

    public function logout(){
        $data = [
            'company_id',
            'company_role',
            'name',
            'gst_number',
            'qstn_type'
        ];
        session()->remove($data);

        if (isset($_COOKIE['question_id'])) {
            unset($_COOKIE['question_id']);
            setcookie('question_id', null, -1, '/');
        }
//        session()->destroy();
        return redirect()->to('user/dashboard');
    }
}
