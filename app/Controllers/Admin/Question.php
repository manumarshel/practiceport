<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\CompanyModel;
use App\Models\VatuserModel;
use App\Models\MasterQuestionModel;
use CodeIgniter\Database\Exceptions\DatabaseException;
use CodeIgniter\Model;
use ZipArchive;
use Config\Database;
use Config\Services;

class Question extends BaseController
{

    public function index()
    {
        $data = [];
        $question = new MasterQuestionModel();
        $db = Database::connect();
        $builder = $db->table('mst_questions');
        $builder->select('*');
        $builder->join('courses', 'mst_questions.category = courses.course_id', 'left'); // Join with the courses table
        $builder->where('mst_questions.active', 1);
        $query = $builder->get();
        $data['questions'] = $query->getResultArray();
        return view('admin/question/questions', $data);
    }

    public function add_question2()
    {
        $data = [];
        $data['companies'] = $this->get_companies();
        helper(['form', 'url']);
        if ($this->request->getMethod() == 'post') {
            $question_id = $this->request->uri->getSegment(3);

            $validation = Services::validation();
            $validation->setRules([
                'question' => ['label' => 'Question', 'rules' => 'required'],
                'category' => ['label' => 'Category', 'rules' => 'required'],
                'question_type' => ['label' => 'Question Type', 'rules' => 'required'],
                'company_id' => ['label' => 'Company', 'rules' => 'required'],
                        'emp_code' => $_POST['emp_code'],
                'submit' => ['label' => 'Key', 'rules' => 'required'],
                'question_data' => [
                    'uploaded[question_data]',
                    'mime_in[question_data,application/zip, application/octet-stream, application/x-zip-compressed, multipart/x-zip]',
//                    'mime_in[question_data,image/jpg,image/jpeg,image/gif,image/png]',
                    'max_size[question_data,4096]',
                ],
            ]);

            if (!$this->validate($validation->getRules())) {
                $data['validation'] = $this->validator;
                return view('admin/question/add_question', $data);
            } else {
                $question_data = $this->request->getFile('question_data');
                $question_file_name = $question_data->getRandomName();
                $question_data->move(ROOTPATH . 'public/assets/uploads/questions/', $question_file_name);

                $qstn = new MasterQuestionModel();

                $formData = [
                    'question' => $_POST['question'],
                    'category' => $_POST['category'],
                    'question_type' => $_POST['question_type'],
                    'company_id' => $_POST['company_id'],
                        'emp_code' => $_POST['emp_code'],
                    'questionscol' => $question_file_name
                ];

                try {
                    if (!$question_id) {
                        $qstn->insert($formData);
                        $question_id = $qstn->getInsertID();
                    } else {
                        print_r($formData); exit;
                        $qstn->update($question_id, $formData);
                    }

                    if (intval($question_id)) {
                        switch ($_POST['category']) {
                            case '1':
                                return redirect()->to('admin/gstr1/' . $question_id);
                                break;
                            case '2':
                                return redirect()->to('admin/gstr3b/' . $question_id);
                                break;
                            case '8':
                                return redirect()->to('admin/questions');
                                break;
                              case '3':
                                    return redirect()->to('admin/questions');
                                    break;
                                    case '9':
                                        return redirect()->to('admin/questions');
                                        break;
                            case '3':
                            default:
                                return redirect()->to('admin/questions/' . $question_id);
                                break;
                        }
                    }
                    return redirect()->to('admin/questions/' . $question_id);
                } catch (\ReflectionException $e) {
                    echo $e->getMessage();
                }
            }
        } else if ($this->request->getMethod() == 'get') {
//            $data['question'] = '';
            $question_id = $this->request->uri->getSegment(3);
            if ($question_id) {
                $qstn = new MasterQuestionModel();
                $question = $qstn->find($question_id);
                $data['question_'] = $question;
            }
//            echo "<pre>";
//            var_dump($data);
//            echo "<pre>";

            return view('admin/question/add_question', $data);
        } else {
            return redirect()->to('admin/questions');
        }
    }

    public function add_question() // add question 
    {
        $data = [];
        $ecr_file_name="";
         $data['companies'] = $this->get_companies();
           $data['tax_persons'] = $this->get_taxable_person();
         $db = Database::connect(); 
         $builder1 = $db->table('courses');
    $query1 = $builder1->get(); // Get all rows 
    // Fetch results as an array
    $data['courses'] = $query1->getResultArray();
        helper(['form', 'url']);
        if ($this->request->getMethod() == 'post') {
            
            $question_id = $this->request->uri->getSegment(3);
            $validation = Services::validation();
            
         
            if (!$question_id) { // new question 
                
 
                $validation->setRules([
                    'question' => ['label' => 'Question', 'rules' => 'required'],
                    'category' => ['label' => 'Category', 'rules' => 'required'],
                    'question_type' => ['label' => 'Question Type', 'rules' => 'required'],
                    'company_id' => ['label' => 'Company', 'rules' => 'required'],
                    'submit' => ['label' => 'Key', 'rules' => 'required'],
                    'emp_code' => ['label' => 'Employee Code', 'rules' => 'required'],
                    'question_data' => [
                        'uploaded[question_data]',
                        'mime_in[question_data,application/zip, application/octet-stream, application/x-zip-compressed, multipart/x-zip]',
//                    'mime_in[question_data,image/jpg,image/jpeg,image/gif,image/png]',
                        'max_size[question_data,4096]',
                    ],
                ]);

                if (!$this->validate($validation->getRules())) {
                    $data['validation'] = $this->validator;
                    return view('admin/question/add_question', $data);
                } else {
                     
                  
                    $question_data = $this->request->getFile('question_data');
                    $question_file_name = $question_data->getRandomName();
                    $question_data->move(ROOTPATH . 'public/assets/uploads/questions/', $question_file_name);
                    
                     
                     
                   if($_POST['category'] == "10"){   //pf
                     
                       $file1 = $this->request->getFile('ecr_file');

                        if ($file1 && $file1->isValid() ) {
                              $ecr_file_name=$file1->getName(); 
                             
                           $file1->move(ROOTPATH . 'public/assets/uploads/pf/',$ecr_file_name);
                           
                        }  
                    } 
                   
                    if($_POST['category'] == "12"){   //srum
                       $srumfile1 = $this->request->getFile('srum_file');

                        if ($srumfile1 && $srumfile1->isValid() ) {
                              $srum_file_name=$srumfile1->getName();  
                               $uploadDir = ROOTPATH . 'public/assets/uploads/srum/';
                                $srumfile1->move($uploadDir, $srum_file_name);
                            //$srumfile1->move(ROOTPATH . 'public/assets/uploads/srum/',$srum_file_name);
                            $uploadedZipPath = $uploadDir . $srum_file_name;
                             
                        } 
                     
                        //echo $srum_file_name; exit;
                    } 

                    $qstn = new MasterQuestionModel();

                    $formData = [
                        'question' => $_POST['question'],
                        'category' => $_POST['category'],
                        'question_type' => $_POST['question_type'],
                        'company_id' => $_POST['company_id'],
                        'questionscol' => $question_file_name,
                        'ecr_file' => $ecr_file_name,
                        'emp_code' => $_POST['emp_code']
                    ];
                      if ($_POST['category'] == '9') {
                         $formData['emp_contribution'] = $_POST['emp_contribution'];
                         $formData['ip_contribution'] = $_POST['ip_contribution'];
                     }
                      if ($_POST['category'] == '11') {
                         $formData['tax_person_id'] = $_POST['tax_person_id']; 
                         $formData['vat_type'] = $_POST['vat_type']; 
                     }
                      
                    
                    try {
                        $qstn->insert($formData);
                        $question_id = $qstn->getInsertID();
                        
                        if ($_POST['category'] == '12') {
                            
                             /*************************************************************/
                             $zip = new \ZipArchive;

                                if ($zip->open($uploadedZipPath) === TRUE) {
                                    $extractPath = ROOTPATH . 'public/assets/uploads/srum/question_' . $question_id;
                            
                                    // Make directory if it doesn't exist
                                    if (!is_dir($extractPath)) {
                                        mkdir($extractPath, 0755, true);
                                    }
                            
                                    $zip->extractTo($extractPath);
                                    $zip->close();
                            
                                    // ✅ Update DB here as needed
                            
                                    
                                }
                            /**************************************************************/
                            
                         $formData1['srum_file'] = $extractPath.$question_id; 
                          $qstn->update($question_id, $formData1);
                          
                         
                         }
                        
                        
                    } catch (\ReflectionException $e) {
                        echo $e->getMessage(); exit;
                    }
                }
            } else {
                  $ecr_file_name="";
                $validation->setRules([
                    'question' => ['label' => 'Question', 'rules' => 'required'],
                    'category' => ['label' => 'Category', 'rules' => 'required'],
                    'question_type' => ['label' => 'Question Type', 'rules' => 'required'],
                    'company_id' => ['label' => 'Company', 'rules' => 'required'],
                    'submit' => ['label' => 'Key', 'rules' => 'required'],
                ]);
                if (!$this->validate($validation->getRules())) {
                    $data['validation'] = $this->validator;
                    return view('admin/question/add_question', $data);
                } else {
                    $formData = [
                        'question' => $_POST['question'],
                        'category' => $_POST['category'],
                        'question_type' => $_POST['question_type'],
                        'company_id' => $_POST['company_id'], 
                        'emp_code' => $_POST['emp_code']
                    ];
                    if ($_POST['category'] == '9') { //esi
                         $formData['emp_contribution'] = $_POST['emp_contribution'];
                         $formData['ip_contribution'] = $_POST['ip_contribution'];
                     }
                      if ($_POST['category'] == '11') {
                         $formData['tax_person_id'] = $_POST['tax_person_id'];  
                         $formData['vat_type'] = $_POST['vat_type']; 
                     }
                    
                    $question_data = $this->request->getFile('question_data');
//                    echo "<pre>";
//                    var_dump($question_data);
//                    echo "<pre>";
//
//                    echo "name:" . $question_data->getFilename();
//                    exit;
                    if ($question_data->getFilename()) {
                        $question_file_name = $question_data->getRandomName();
                        $question_data->move(ROOTPATH . 'public/assets/uploads/questions/', $question_file_name);

                        $formData['questionscol'] = $question_file_name;
                    }
                    
                      $ecr_data = $this->request->getFile('ecr_file');
                       if ($ecr_data->getFilename()) {
                        $ecr_file_name = $ecr_data->getRandomName();
                        $ecr_data->move(ROOTPATH . 'public/assets/uploads/pf/', $ecr_file_name);
                         $formData['ecr_file'] = $ecr_file_name;
                          
                       }
                       
                      /* $scrum_data = $this->request->getFile('srum_file');
                       if ($scrum_data->getFilename()) {
                            $scrum_file_name = $scrum_data->getRandomName();
                            $scrum_data->move(ROOTPATH . 'public/assets/uploads/srum/', $scrum_file_name);
                            $formData['scrum_file'] = $scrum_file_name;
                       } */
                       
                       if($_POST['category'] == "12"){   //srum
                       $srumfile1 = $this->request->getFile('srum_file');

                        if ($srumfile1 && $srumfile1->isValid() ) {
                              $srum_file_name=$srumfile1->getName();  
                               $uploadDir = ROOTPATH . 'public/assets/uploads/srum/';
                                $srumfile1->move($uploadDir, $srum_file_name);
                            //$srumfile1->move(ROOTPATH . 'public/assets/uploads/srum/',$srum_file_name);
                            $uploadedZipPath = $uploadDir . $srum_file_name;
                        } 
                     
                        //echo $srum_file_name; exit;
                    } 

                       

                    $qstn = new MasterQuestionModel(); 
                     
                    try {
                         
                        $qstn->update($question_id, $formData);
                        
                        if ($_POST['category'] == '12') {
                            
                             /*************************************************************/
                             $zip = new \ZipArchive;

                                if ($zip->open($uploadedZipPath) === TRUE) {
                                    $extractPath = ROOTPATH . 'public/assets/uploads/srum/question_' . $question_id;
                            
                                    // Make directory if it doesn't exist
                                    if (!is_dir($extractPath)) {
                                        mkdir($extractPath, 0755, true);
                                    }
                            
                                    $zip->extractTo($extractPath);
                                    $zip->close();
                            
                                    // ✅ Update DB here as needed
                            
                                    
                                }
                            /**************************************************************/
                            
                         $formData1['srum_file'] = $extractPath.$question_id; 
                          $qstn->update($question_id, $formData1);
                          
                         
                         }
                        
                        
                    } catch (\ReflectionException $e) {
                        echo $e->getMessage();
                    }
                }
            }

            if (intval($question_id)) {
                switch ($_POST['category']) {
                    case '1':
                        return redirect()->to('admin/gstr1/' . $question_id);
                        break;
                    case '2':
                        return redirect()->to('admin/gstr3b/' . $question_id);
                        break;
                    case '8':
                        return redirect()->to('admin/questions');
                        break;
                      case '3':
                                    return redirect()->to('admin/questions');
                                    break;
                        case '9':
                            return redirect()->to('admin/questions');
                            break;
                            case '10':
                            return redirect()->to('admin/questions');
                            break; case '11':
                            return redirect()->to('admin/questions');
                            break; case '12':
                            return redirect()->to('admin/questions');
                            break;
                    case '3':
                    default:
                        return redirect()->to('admin/questions/' . $question_id);
                        break;
                }
            }
            return redirect()->to('admin/questions/' . $question_id);
        } else if ($this->request->getMethod() == 'get') {
//            $data['question'] = '';
            $question_id = $this->request->uri->getSegment(3);
            if ($question_id) {
                $qstn = new MasterQuestionModel();
                $question = $qstn->find($question_id);
                $data['question_'] = $question;
            }
            return view('admin/question/add_question', $data);
        } else {
            return redirect()->to('admin/questions');
        }
    }
 private function get_taxable_person()
    {
        $tax_persons = new VatuserModel();
        return $tax_persons->findAll();
    }

    private function get_companies()
    {
        $company = new CompanyModel();
        return $company->findAll();
    }

    public function delete() {
        $question_id = $_POST['questionId'];
        $qm = new MasterQuestionModel();
        if ( $question_id && intval($question_id) ) {
            try {
                $qm->delete($question_id);
                return $this->response->setStatusCode(200)->setBody("Success");
            } catch (DatabaseException $e) {
                return $this->response->setStatusCode(401, $e->getMessage());
            }

        }
        return $this->response->setStatusCode(401, "invalid questionId");
//        echo "questionId: " . $question_id;
    }

}
