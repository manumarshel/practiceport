<?php

namespace App\Controllers\Vat;

use App\Controllers\BaseController;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\VatuserModel;

use App\Models\MasterQuestionModel;
use App\Models\VatCompanyModel;
use App\Models\VatactivityModel;

class Filing extends BaseController
{
    public function __construct()
    {
    }

    public function vat_registration()
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
     $activityModel = new VatactivityModel(); 
     $data['activities'] = $activityModel->findAll();
    
        return view('Vat/vat_register/index', $data);
    }
    public function success_registration()
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
     $activityModel = new VatactivityModel(); 
     $data['activities'] = $activityModel->findAll();
    
        return view('Vat/vat_register/vat_success', $data);
    }
    public function get_activity()
    {
        $aid = $_POST['aid'];
        $activityModel = new VatactivityModel();
        $activity_data = $activityModel->where('PKVatActivityID', $aid)->first(); 
       return $this->response->setJSON($activity_data);

          
    }
    
/********** Vat filing starts *********/

 /**  vat filing home page
 * */
    public function dashboard()
    {
         $data = [];
        $data['userid'] = $this->request->uri->getSegment(4);
           
         return view('Vat/vat_filing/home',$data);
    }
 
 /**  vat filing listing 
 * */
    public function listing()
    {
         $data = [];
        $data['userid'] = $this->request->uri->getSegment(4);
        
          $member_model = new VatuserModel(); 
         $data['user_data'] = $member_model->find( $data['userid']);
         
           $company_id=$data['user_data']['companyId'];
          $company_model = new VatCompanyModel();  
            $data['company_data'] = $company_model->find($company_id);
             
         // print_r( $data['user_data']); exit;
         return view('Vat/vat_filing/listing',$data);
    }
    
    public function declaration()
    {    $data = [];
    
      
        $data['userid'] = $this->request->uri->getSegment(4);
          return view('Vat/vat_filing/declaration',$data);
    }
    /** create new vat filing listing 
 * */
    public function create()
    {    $data = [];
    
       $questionId = session('question_id');
       $member_model = new VatuserModel(); 
         $qstn_model = new MasterQuestionModel();
       $qstn = $qstn_model->find($questionId); 
        $tax_person = $qstn['tax_person_id'];
        
          $data['user_data'] = $member_model->find( $tax_person);
           $company_id=$data['user_data']['companyId'];
          $company_model = new VatCompanyModel();  
            $data['company_data'] = $company_model->find($company_id);
           
        $data['userid'] = $this->request->uri->getSegment(4);
          return view('Vat/vat_filing/create',$data);
    }

  /** create new vat return reviewing 
 * */
    public function review()
    {  
        $data=[];
        session_start();
      $data['userid'] = $this->request->uri->getSegment(4);
         $member_model = new VatuserModel(); 
           $data['user_data'] = $member_model->find( $data['userid']);
           $company_id=$data['user_data']['companyId'];
          $company_model = new VatCompanyModel();  
            $data['company_data'] = $company_model->find($company_id);
             
              // Get all POST data into an array
              if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data['items'] = $this->request->getPost();
        
         $data['profitMargin'] = $_POST['profitMargin'] ?? 'No'; // Default to No
         
         /************* update template file *******************/
          
         $filePath = FCPATH . '/public/template.html'; // public/template.html

    if (!file_exists($filePath)) {
        die("File not found: " . $filePath);
    }

    $html = file_get_contents($filePath);

    // Load HTML into DOMDocument
    libxml_use_internal_errors(true);
    $dom = new \DOMDocument();
    $dom->loadHTML($html, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

    // Find and remove the first <div class="details-box">
    $xpath = new \DOMXPath($dom);
    $nodes = $xpath->query('//div[contains(@class, "details-box")]');
    if ($nodes->length > 0) {
        $node = $nodes->item(0);
        $parent = $node->parentNode;
        $parent->removeChild($node);

        // Create new details-box div
        $newDiv = $dom->createDocumentFragment();
        $newDiv->appendXML('
            <div class="details-box">
        <div><label>TRN :</label> 1042463693000003</div>
        <div><label>Registrant’s Name :</label> '.$data['company_data']['eng_name'].'</div>
        <div><label>Reference Number :</label> 230008411219</div>
        <div><label>Submission Date :</label> '.date('d/m/Y').'5</div>
        <div><label>VAT Return Period :</label> '.$data['company_data']['return_period'].'</div>
        <div><label>VAT Stagger :</label>'.$data['company_data']['stagger'].'</div>
        <div><label>Due Date :</label> '.$data['company_data']['due_date'].'</div>
        <div><label>Tax Year End :</label> '.$data['company_data']['year_end'].'</div>
        <div><label>Return Amount :</label> AED '.$data['items']['nettotal3'].'</div>
        <div><label>Due Amount :</label> AED 0.00</div></div>
        ');
        $parent->appendChild($newDiv);
    }

    // Save updated HTML
    $updatedHtml = $dom->saveHTML();
    file_put_contents($filePath, $updatedHtml);
     
     
setcookie("vat_filed", "1", time() + 3600, "/"); 

        
        /*************** Create file ************************/
        
        
          return view('Vat/vat_filing/review',$data);
              }
               return view('Vat/vat_filing/create',$data);
    }
      
      public function view()
    {  
        $data=[];
     setcookie("vat_filed", "1", time() + 3600, "/"); 
      $data['userid'] = $this->request->uri->getSegment(4);
         $member_model = new VatuserModel(); 
           $data['user_data'] = $member_model->find( $data['userid']);
           $company_id=$data['user_data']['companyId'];
          $company_model = new VatCompanyModel();  
            $data['company_data'] = $company_model->find($company_id);
             
       $data['value_amount'] = $_POST['value_amount']; 
        // $data['d_amount'] = $_POST['d_amount']; 
        // $data['d_vat_amount'] = $_POST['d_vat_amount'];
        // $data['total_amount'] = $_POST['total_amount'];
        // $data['total_vat_amount'] = $_POST['total_vat_amount']; 
        // $data['field1'] = $_POST['field1']; 
        // $data['field2'] = $_POST['field2'];
        // $data['diff']=$data['d_vat_amount']-$data['field2'];
        
         $data['profitMargin'] = $_POST['profitMargin'] ?? 'No'; // Default to No
       
        
          return view('Vat/vat_filing/view',$data);
    }
    
       public function viewpdf()
    {  
        $data=[];
      $data['userid'] = $this->request->uri->getSegment(4);
         $member_model = new VatuserModel(); 
           $data['user_data'] = $member_model->find( $data['userid']);
           $company_id=$data['user_data']['companyId'];
          $company_model = new VatCompanyModel();  
            $data['company_data'] = $company_model->find($company_id);
             
       $data['value_amount'] = $_POST['value_amount']; 
        // $data['d_amount'] = $_POST['d_amount']; 
        // $data['d_vat_amount'] = $_POST['d_vat_amount'];
        // $data['total_amount'] = $_POST['total_amount'];
        // $data['total_vat_amount'] = $_POST['total_vat_amount']; 
        // $data['field1'] = $_POST['field1']; 
        // $data['field2'] = $_POST['field2'];
        // $data['diff']=$data['d_vat_amount']-$data['field2'];
        
         $data['profitMargin'] = $_POST['profitMargin'] ?? 'No'; // Default to No
        
          return view('Vat/vat_filing/pdf',$data);
    }
    
      
}
