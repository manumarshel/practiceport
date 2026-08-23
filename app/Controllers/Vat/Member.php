<?php

namespace App\Controllers\Vat;

use App\Controllers\BaseController;
use App\Models\VatuserModel;

class Member extends BaseController
{
    public function __construct()
    {
    }
   public function show()
    {
        $data = []; 
        
         $data['user_type'] ="1"; // session user
         
        $data['user'] = [
                        'vat_username' => session('vat_username'),
                        'vat_arabic_username' => session('vat_arabic_username'),
                        'language' => session('language'),
                        'channel' => session('channel'),
                        'image' => session('image'),
                        'vat_user_added' => session('vat_user_added'),
                    ]; 
  $data['user_id']="0";
        return view('Vat/member/dashboard', $data);
    }
    public function show_user()
    {
        $data = []; 
        $data['user_type'] ="2"; // database user
        $user_id = $this->request->uri->getSegment(3);
         $member_model = new VatuserModel(); 
           $user_data = $member_model->find($user_id);
                $data['user'] = $user_data;
                $data['user_id']=$user_id;
 
        return view('Vat/member/dashboard', $data);
    }
    public function register()
    {
         $data=array();
              
        return view('pf/register/pending', $data);
    }
     public function register_save()
    {
         $data=array(); 
         helper('cookie');
        $wages= $this->request->getPost('wages');
         
          setcookie("wages12", "$wages", time() + 3600);
            setcookie('dob',  $this->request->getPost('dob'),time() + 3600); 
            setcookie('doj',  $this->request->getPost('doj'), time() + 3600); 
              setcookie('guardian',  $this->request->getPost('guardian'), time() + 3600); 
            setcookie('relation',  $this->request->getPost('relation'), time() + 3600);  
              setcookie('name',  $this->request->getPost('name'), time() + 3600);  
              setcookie('emailId',  $this->request->getPost('emailId'), time() + 3600);  
            setcookie('maritalStatus',  $this->request->getPost('maritalStatus'), time() + 3600);  
            setcookie('mobileNo',  $this->request->getPost('mobileNo'), time() + 3600);  
             setcookie('u_status', "0", time() + 3600);  
              
              
        echo $this->request->getPost('wages'); exit;
    }

    public function registerPending()
    {
        $data = []; 
        
         $member_model = new VatuserModel(); 

         $data['users'] = $member_model->getInactiveUsers(); 
        // echo $data['users']['memberID']; exit;
        
       

        return view('pf/register/pending', $data);
    }
     public function regApproval()
    {
        $data = [];
        
    
      
        
         $member_model = new VatuserModel(); 

         $data['users'] = $member_model->getInactiveUsers(); 
         $data['users_count']=count($data['users']);

        return view('pf/register/approval', $data);
    }
    public function updateMemberStatus()
    {
          $db = \Config\Database::connect();
        $member_model = new VatuserModel(); 
        $status= $_POST['id'];
        $MemberId= $_POST['mid'];
           
            $builder = $db->table('pf_members');
            $builder->set('active_status', $status);
            $builder->where('PKMemberID', $MemberId);
            $builder->update();
        // Update user status in the database
       //  $member_model->update($MemberId, ['active_status' => $status]);
         
                echo "1"; exit;


    }
      public function regRejected()
    {
        $data = [];
        
         $member_model = new VatuserModel(); 

         $data['users'] = $member_model->getRejectedUsers(); 
  $data['users_count']=count($data['users']);
        return view('pf/register/rejected', $data);
    }
       public function regApproved()
    {
        $data = [];
        
         $member_model = new VatuserModel(); 

         $data['users'] = $member_model->getApprovedUsers(); 
  $data['users_count']=count($data['users']);
        return view('pf/register/approved', $data);
    }
    
      
    public function view_profile_search()
    {
        $data = []; 
        
         $member_model = new VatuserModel(); 
 
        return view('pf/register/member-profile', $data);
    }

 

    public function uansearch()
    {
        $data = [];
        $member_model = new VatuserModel(); 
       // $uan_no= $_POST['uan_no'];
        $uan_no=$this->request->getPost('uan_no');
       

        $user = $member_model->where('uan', $uan_no)->first();
       // print_r($user); exit;
          if ($user) {
            return $this->response->setJSON($user);
        } else {
            return $this->response->setJSON(['message' => 'Member not found']);
        }
           
    }

    public function enterBankDetails()
    {
        $data = [];

        if ($this->request->getMethod() == 'post') {
            //print_r($_POST); exit;

            if(isset($_POST['ctl00$HomePageContent$btnIFSCcode']) && $_POST['ctl00$HomePageContent$btnIFSCcode'] == "Search") {
                $data['bank'] = [
                    'ifsc' => $_POST['ctl00$HomePageContent$txtIFSCcode']
                ];

                session()->set($data);

                return view('esi/register/bank1', $data);
            }

            if (isset($_POST['ctl00$HomePageContent$btnsubmit']) && $_POST['ctl00$HomePageContent$btnsubmit'] == "Submit") {

                $data['bank']['account_number'] = $_POST['ctl00$HomePageContent$txtacc_number'];
                $data['bank']['account_type'] = $_POST['ctl00$HomePageContent$ddlAccountType'];
                $data['bank']['ifsc'] = $_POST['ctl00$HomePageContent$txtIFSCcode'];

                $data['bank']['micr_code'] = $_POST['ctl00$HomePageContent$txtmicr'];

                $data['bank']['success'] = 1;


                session()->set($data);

                return view('esi/register/bank1', $data);
            }
        }

        return view('esi/register/bank', $data);
    }
}
