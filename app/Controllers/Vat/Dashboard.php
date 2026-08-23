<?php

namespace App\Controllers\Vat;

use App\Controllers\BaseController;

use App\Models\VatuserModel; 
use App\Models\MasterQuestionModel; 
use Config\Services;

class Dashboard extends BaseController
{
    public function __construct()
    {
    }

    public function index()
    {
        $data = [];
         $um = new VatuserModel();
           $questionId = session('question_id');
             
            $qstn_model = new MasterQuestionModel();
               $qstn = $qstn_model->find($questionId);
                
        $data['users'] =  $um->find($qstn['tax_person_id']);
      $data['vat_type'] =$qstn['vat_type'];
 
         $validation = Services::validation();
         
        if ($this->request->getMethod() == 'post') {
            if(isset($_POST['newUserBtn'])){
                 
                  $validation->setRules([
                    'vat_username' => ['label' => 'Profile Name', 'rules' => 'required'], 
                ]);

                if (!$this->validate($validation->getRules())) {
                    $data['validation'] = $this->validator;
                    return view('Vat/dashboard', $data);
                } else {
                    
                    $profile_image= $this->request->getFile('profile_image');
                     if ($profile_image->isValid() && !$profile_image->hasMoved()) {
                    $file_name = $profile_image->getRandomName();
                    
                      
                    $profile_image->move(ROOTPATH . 'public/assets/uploads/vat_user/', $file_name);   
                                 
                     }else{
                         $file_name="";
                     }
                    $uv = new VatuserModel();

                    $formData = [
                        'vat_username' => $_POST['vat_username'],
                        'vat_arabic_username' => $_POST['vat_arabic_username'],
                        'language' => $_POST['language'],
                        'channel' => $_POST['channel'],
                        'image' => $file_name,
                        'vat_user_added' => "1",
                    ]; 
                    
                    // try {
                    //     $uv->insert($formData);
                    //     $user_id = $uv->getInsertID();
                        
                    // } catch (\ReflectionException $e) {
                    //     echo $e->getMessage();
                    // }         
                    
                     session()->set($formData);
                                    
                    return redirect()->to('Vat/dashboard');
                                   
                    
                }
                 
            }
        }
        
        return view('Vat/dashboard', $data);
    }
}
