<?php


namespace App\Controllers\Admin;


use App\Models\AdminModel;

class Authentication extends \App\Controllers\BaseController
{
    public function index()
    {
        $data = [];
        helper(['form']);

//        if ( session()->get('isLoggedIn') ) {
//            return redirect()->to('admin/dashboard');
//        }

        if ($this->request->getMethod() == 'post') {
            //let's do the validation here
            $rules = [
                'email' => 'required|min_length[6]|max_length[50]|valid_email',
                'password' => 'required|min_length[8]|max_length[255]|validateUser[email,password]',
            ];

            $errors = [
                'password' => [
                    'validateUser' => 'Email or Password does not match'
                ]
            ];

            if (! $this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            }else{
                $model = new AdminModel();

                $user = $model->where('admin_email', $this->request->getVar('email'))
                    ->first();

                $this->setUserSession($user);
                //$session->setFlashdata('success', 'Successful Registration');
                return redirect()->to('admin/dashboard');

            }
        }
        return view('admin/login', $data);
    }

    private function setUserSession($user){
        $data = [
            'id' => $user['admin_id'],
            'admin_name' => $user['admin_name'],
            'admin_role' => $user['admin_role'],
            'admin_email' => $user['admin_email'],
            'isLoggedIn' => true,
        ];

        session()->set($data);
        return true;
    }

    public function logout(){
        session()->destroy();
        return redirect()->to('admin');
    }
}
