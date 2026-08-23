<?php


namespace App\Controllers\Admin;

use App\Models\VatCompanyModel; 
use App\Models\VatuserModel; 

use Config\Services;

class Vat extends \App\Controllers\BaseController
{
    public function index()
    {
        $data = [];
        $um = new VatuserModel();
        $data['users'] =  $um->orderBy('PKVatUserID', 'ASC')->findAll();
        
        return view('admin/vat/users', $data);
    }
    public function company_listing()
    {
        $data = [];
        $um = new VatCompanyModel();
        $data['companies'] =  $um->orderBy('id', 'ASC')->findAll();
        
        return view('admin/vat/companies', $data);
    }
    
     public function create()
    {
         
        $data = [];
        $um = new VatuserModel(); 
         $cm = new VatCompanyModel();
         $data['vat_companies']=$cm->findAll();
        if ($this->request->getMethod() == 'post') { 
             $PKVatUserID = $this->request->uri->getSegment(3);
             
            $validation = Services::validation();
            
            if (!$PKVatUserID) {
                $validation->setRules([
                    'vat_username' => ['label' => 'Profile Name', 'rules' => 'required'], 
                ]);

                if (!$this->validate($validation->getRules())) {
                    $data['validation'] = $this->validator;
                    return view('admin/vat/add_user', $data);
                } else {
                    
                    $profile_image= $this->request->getFile('profile_image');
                    $file_name = $profile_image->getRandomName();
                    
                      
                    $profile_image->move(ROOTPATH . 'public/assets/uploads/vat_user/', $file_name);   
                                 
                    $uv = new VatuserModel();

                    $formData = [
                        'vat_username' => $_POST['vat_username'],
                        'vat_arabic_username' => $_POST['vat_arabic_username'],
                        'language' => $_POST['language'],
                        'channel' => $_POST['channel'],
                         'companyId' => $_POST['companyId'],
                        'image' => $file_name
                    ]; 
                 
                    try {
                        $uv->insert($formData);
                        $user_id = $uv->getInsertID();
                        
                    } catch (\ReflectionException $e) {
                        echo $e->getMessage();
                    }            
                                    
                    return redirect()->to('admin/vat_users');
                                   
                    
                }
            }else{
                
                   $file_name=$_POST['profile_image12']; 
                $validation->setRules([
                   'vat_username' => ['label' => 'Profile Name', 'rules' => 'required'], 
                ]);
                if (!$this->validate($validation->getRules())) {
                    $data['validation'] = $this->validator;
                    return view('admin/vat/add_user', $data);
                } else {
                    
                     $profile_image = $this->request->getFile('profile_image');

                        if ($profile_image && $profile_image->isValid() && !$profile_image->hasMoved()) {
                            $file_name=$profile_image->getName(); 
                              $profile_image->move(ROOTPATH . 'public/assets/uploads/vat_user/', $file_name);   
                            
                        } 
                    $formData = [
                         'vat_username' => $_POST['vat_username'],
                        'vat_arabic_username' => $_POST['vat_arabic_username'],
                        'language' => $_POST['language'],
                        'channel' => $_POST['channel'],
                        'companyId' => $_POST['companyId'],
                        'image' => $file_name
                    ];
                  
                  
                     
                    try {
                           $uv = new VatuserModel();
                        $uv->update($PKVatUserID, $formData);
                    } catch (\ReflectionException $e) {
                        echo $e->getMessage();
                    }
                }
            }
             return redirect()->to('admin/add-vatuser/' . $PKVatUserID);
        } else if ($this->request->getMethod() == 'get') {
//            $data['question'] = '';
            $PKVatUserID = $this->request->uri->getSegment(3);
            if ($PKVatUserID) {
                $um = new VatuserModel();
                $vat_user1 = $um->find($PKVatUserID);
                $data['users_'] = $vat_user1;
            }
            return view('admin/vat/add_user', $data);
        } else {
            return redirect()->to('admin/add-vatuser');
        }
             
            
        // }else {
        //     return view('admin/vat/add_user', $data);
        // }
        
       
    }
    
    public function sendmail_notification($name, $email)
    {
        
                  //  $to = "geethuag2015@gmail.com"; // Replace $userEmail with the actual user's email
                      $to = $email;
            
            // Subject
            $subject = "Registration Confirmation";
            
            // Generate a unique confirmation link
            $token = bin2hex(random_bytes(16)); // Generates a secure random token
            $confirmationLink = "12345678";
            
            // Email message
            $message = "
            <html>
            <head>
                <title>Registration Successfull</title>
            </head>
            <body>
                <h2>Dear $name, Welcome to Practicepot</h2>
                <p>Thank you for registering at Practicepot. Your account has been successfully created!</p>
                <p>Here are your login credentials:</p>
                    <ul>
                        <li><strong>Email:</strong> $email</li>
                        <li><strong>Password:</strong> $confirmationLink</li>
                    </ul>
                    <p>You can log in to your account by visiting <a href='https://practicepot.com/'>https://practicepot.com</a>.</p>
                    <p>If you have any questions or need assistance, feel free to contact our support team.</p>
                    <br>
            </body>
            </html>
            ";
            
            // Headers
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "From: contact@practicepot.com" . "\r\n"; // Replace with your sender email
            
            $res= mail($to, $subject, $message, $headers);
            // Send email
            if ($res) {
                return true;
            } else {
                return 2;
            }
      
    }
      public function delete_user() {
         $user_id = $this->request->uri->getSegment(3);
          //$question_id = $_POST['package_id'];
        $qm = new VatuserModel();
          $sm = new MasterSubscriptionModel();
        if ( $user_id && intval($user_id) ) {
            try {
                $qm->delete($user_id);
                  $deleted = $sm->where('user_id', $user_id) // Match user ID
                      ->delete();
                 
                // $qm->update($user_id, ['active' => 0]);
                return redirect()->to( base_url('/admin/users') )->with('msg', "successfully deleted");
            } catch (DatabaseException $e) {
                 
                 return redirect()->to( base_url('/admin/users') )->with('msg', $e->getMessage());
            }

        }
        return $this->response->setStatusCode(401, "invalid user_id");
//        echo "questionId: " . $question_id;
    }
     
    
    
    //***************VAT Registration***************************/
    
    public function vat_registrations()
    {
         $data['PKVatUserID'] = $this->request->uri->getSegment(3);
          
        return view('admin/vat/add_registration', $data);
     
    }
    
    /*************VAT COMPANY*******************/
    
      public function create_company()
    {
         
        $data = [];
        $um = new VatCompanyModel(); 
        if ($this->request->getMethod() == 'post') { 
             $PKVatUserID = $this->request->uri->getSegment(3);
             
            $validation = Services::validation();
            
            if (!$PKVatUserID) {
                                 
                    $uv = new VatCompanyModel();

                    $formData = [
                        'eng_name' => $_POST['eng_name'],
                        'arabic_name' => $_POST['arabic_name'],
                        'address' => $_POST['address'],
                        'street' => $_POST['street'],
                        'City' => $_POST['city'],
                        'Area' => $_POST['area'],
                        'phone1' => $_POST['phone1'],
                        'phone2' => $_POST['phone2'],
                        'po' => $_POST['po'],
                        'Emirates' => $_POST['Emirates'],
                        'code' => $_POST['code'],
                        'email' => $_POST['email'],
                        'last_eng' => $_POST['last_eng'],
                        'last_arabic' => $_POST['last_arabic'],
                        'return_period' => $_POST['return_period'], 
                        'stagger' => $_POST['stagger'],
                        'year_end' => $_POST['year_end'],
                        'due_date' => $_POST['due_date']
                    ]; 
                   // print_r($formData); exit;
                    try {
                        $uv->insert($formData);
                        $user_id = $uv->getInsertID();
                        
                    } catch (\ReflectionException $e) {
                        echo $e->getMessage();
                    }            
                                    
                    return redirect()->to('admin/vat_companies');
                                   
                    
                
            }else{
              
                  $formData = [
                        'eng_name' => $_POST['eng_name'],
                        'arabic_name' => $_POST['arabic_name'],
                        'address' => $_POST['address'],
                        'street' => $_POST['street'],
                        'City' => $_POST['city'],
                        'Area' => $_POST['area'],
                        'phone1' => $_POST['phone1'],
                        'phone2' => $_POST['phone2'],
                        'po' => $_POST['po'],
                        'Emirates' => $_POST['Emirates'],
                        'code' => $_POST['code'],
                        'email' => $_POST['email'], 
                        'last_eng' => $_POST['last_eng'],
                        'last_arabic' => $_POST['last_arabic'],
                        'return_period' => $_POST['return_period'], 
                        'stagger' => $_POST['stagger'],
                        'year_end' => $_POST['year_end'],
                        'due_date' => $_POST['due_date']
                    ]; 
                  
                     
                    try {
                           $uv = new VatCompanyModel();
                        $uv->update($PKVatUserID, $formData);
                    } catch (\ReflectionException $e) {
                        echo $e->getMessage();
                    }
                
            }
             return redirect()->to('admin/add-vat-company/' . $PKVatUserID);
        } else if ($this->request->getMethod() == 'get') {
//            $data['question'] = '';
            $PKVatUserID = $this->request->uri->getSegment(3);
            if ($PKVatUserID) {
                $um = new VatCompanyModel();
                $vat_user1 = $um->find($PKVatUserID);
                $data['companies'] = $vat_user1;
            }
             
            $data['PKVatUserID']=$PKVatUserID;
            return view('admin/vat/add_company', $data);
        } else {
            return redirect()->to('admin/add_company');
        }
             
            
        // }else {
        //     return view('admin/vat/add_user', $data);
        // }
        
       
    }
     
      public function delete_company() {
           $company_id = $this->request->uri->getSegment(3);
          //$question_id = $_POST['package_id'];
        $qm = new VatCompanyModel(); 
        if ( $company_id && intval($company_id) ) {
            try {
                $qm->delete($company_id);
                 
                // $qm->update($user_id, ['active' => 0]);
                return redirect()->to( base_url('/admin/vat_companies') )->with('msg', "successfully deleted");
            } catch (DatabaseException $e) {
                 
                 return redirect()->to( base_url('/admin/vat_companies') )->with('msg', $e->getMessage());
            }

        }
        return $this->response->setStatusCode(401, "invalid company_id");
//        echo "questionId: " . $question_id;
    }
}
