<?php


namespace App\Controllers\EFiling;


use App\Controllers\BaseController;
use App\Models\MasterQuestionModel;
use App\Models\sim\CompanyModel;
use App\Models\user\UserModel;

class Authentication extends BaseController
{
    public function index()
    {
        $data = [];
        
       $questionId = $data['question_id'] = $this->request->uri->getSegment(2);
 

       $qstn_model = new MasterQuestionModel();
       $qstn = $qstn_model->find($questionId); 
       $companyId = $qstn['company_id'];

        $cmpny_model = new CompanyModel();
        $cmpny = $cmpny_model->find($companyId);

        $data['username'] = $cmpny['username'];
        $data['password'] = $cmpny['password'];

        session()->set($data);


        return redirect()->to('e-filing');
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



            // if ($cmpny['username'] != $_POST['txt_username'] || $cmpny['password'] != $_POST['txt_password']) {
            //     $data['message'] = 'Invalid Login Credentials, If you are facing login problem repeatedly, please clear the cache in the browser and continue.';

            //     return view('e-filing/login', $data);
            // }

            $this->setUserSession($cmpny, $questionId);
            return redirect()->to('e-filing/dashboard');
         }

        return view('efiling/login', $data);
    }

    private function setUserSession($cmpny,$questionId){

        $user_model = new UserModel();
        $user = $user_model->find(session('id'));

        $data = [
            'company_id' => $cmpny['company_id'],
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
            'tan' => $cmpny['tan'],
            'pan' => $cmpny['pan'],
            'isLoggedIn' => true,
            'question_id' => $questionId,
            'first_name' => $user['first_name'] ?? '',
            'phone' => $cmpny['phone'] ?? '',
            'company_email' => $cmpny['email'],
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
