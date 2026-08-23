<?php


namespace App\Controllers\Pf;


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
// echo $questionId; exit;


       $qstn_model = new MasterQuestionModel();
       $qstn = $qstn_model->find($questionId); 
      // print_r($qstn); exit;

       $companyId = $qstn['company_id'];

        $cmpny_model = new CompanyModel();
        $cmpny = $cmpny_model->find($companyId);

        $data['username'] = $cmpny['username'];
        $data['password'] = $cmpny['password'];

        session()->set($data);
  
  
   $sessionData = $_SESSION;

        // Print all session data
        // echo '<pre>';
        // print_r($sessionData);
        // echo '</pre>'; exit;
  
        return redirect()->to('pf');
    }

    public function login()
    {
        $data = [];
        helper(['form']);

        $questionId = session('question_id');

       $qstn_model = new MasterQuestionModel();
       $qstn = $qstn_model->find($questionId);

       $companyId = $qstn['company_id'];

       $company_ecrId = $qstn['ecr_file'];
        $cmpny_model = new CompanyModel();
        $cmpny = $cmpny_model->find($companyId);

        if ($this->request->getMethod() == 'post') {

            

            if ($cmpny['username'] != $_POST['txtUserName'] || $cmpny['password'] != $_POST['txtPassword']) {
                $data['authError'] = 'Authentication Failed.';

                return view('pf/login', $data);
            }

            $this->setUserSession($cmpny, $questionId,$company_ecrId);
            return redirect()->to('pf/dashboard');
         }

        return view('pf/login', $data);
    }

    private function setUserSession($cmpny,$questionId,$company_ecrId){

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
              'company_ecr' => $company_ecrId,
            'first_name' => $user['first_name'] ?? '',
            'phone' => $cmpny['phone'] ?? '',
            'company_email' => $cmpny['email'],
            'esi_code' => $cmpny['esi_code'],
            'establishment_id' => $cmpny['establishment_id'],
            'lin_id' => $cmpny['lin_id']
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
            setcookie('u_name', null, -1, '/');
        }
//        session()->destroy();
        return redirect()->to('user/dashboard');
    }
}
