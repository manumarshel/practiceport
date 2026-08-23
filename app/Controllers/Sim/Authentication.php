<?php


namespace App\Controllers\Sim;


use App\Controllers\BaseController;
use App\Models\QuestionModel;
use App\Models\sim\CompanyModel;
use App\Models\user\UserModel;

class Authentication extends BaseController
{
    public function index()
    {
        $data = [];
        helper(['form', 'url']);

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'username' => 'required|min_length[6]|max_length[50]',
                'password' => 'required|min_length[8]|max_length[255]|validateCompanyUser[username,password]',
            ];
//            validateCompanyUser
            $errors = [
                'password' => [
                    'validateCompanyUser' => 'Username or Password don\'t match'
                ]
            ];

            if (! $this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            }else{
                $model = new CompanyModel();

                $company = $model->where('username', $this->request->getVar('username'))
                    ->first();

                if ( $company ) {

                    $question_id = '';
                    $qstn_type = '';
                    if ( isset($_COOKIE['question_id']) ) {
                        $question_id = $_COOKIE['question_id'];
                        $qstn_model = new QuestionModel();
                        $qstn = $qstn_model->find($question_id);
                        $qstn_type = $qstn['category'];
                    }


                    $this->setUserSession($company, $qstn_type);
                    return redirect()->to('simulation/dashboard/' . $question_id);
                }
            }
        }
        return view('sim/login', $data);
    }

    private function setUserSession($company, $qstn_type){
        $data = [
            'company_id' => $company['company_id'],
            'company_role' => 'company',
            'user_id' => session()->get('id'),
            'user_role' => 'user',
            'user_email' => session()->get('user_email'),
            'name' => $company['name'],
            'qstn_type' => $qstn_type,
            'gst_number' => $company['name'],
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
