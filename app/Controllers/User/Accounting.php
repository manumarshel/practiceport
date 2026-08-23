<?php


namespace App\Controllers\User;


use App\Controllers\BaseController;
use App\Libraries\DbFetchnProcess;
use App\Models\MasterUserNotesModel; 
use App\Models\MasterQuestionModel;
use App\Models\user\UserModel;
use Config\Database;

class Accounting extends BaseController
{
    protected $data;
    protected $userId;
     protected $db;

    public function __construct()
    {
        $um = new UserModel();
        $this->data['user_info'] = $um->get_current_user_info();
    }
    public function index()
    {
        
//        $data = []; 
        $um = new UserModel(); 
        $userId = $um->get_user_Id();
        $this->data['current_subscriptions'] = '';
        $question_id  = $this->request->uri->getSegment(3);
        
        $question = new MasterQuestionModel();
        $db = Database::connect();
        $builder = $db->table('mst_questions');
        $builder->select('*');
        $builder->where('mst_questions.question_id', $question_id);
        $query = $builder->get();
        $question_details= $query->getRowArray();
        
      
        $answerModel = new MasterUserNotesModel();
        $scormPath = base_url().'/public/assets/uploads/srum/question_'.$question_id.'/res/index.html'; 
         //echo $scormPath; exit;
         $existingAnswer=array();
         // Check if an answer already exists for this user and question
        $existingAnswer = $answerModel->where('user_id',$userId)
                                     ->where('question_id', $question_id)
                                     ->first();
                                    
       // echo  $existingAnswer['notes']; exit;
        return view('scorm/player', ['scormPath' => $scormPath, 'user_id' =>$userId , 'question_id' =>$question_id,'existingAnswer'=> $existingAnswer]);
        
         

    }
     public function store()
    {
        
         $formData = [];
        if ($this->request->getMethod() == 'post') { 
            $formData['userId'] = $this->request->getPost('user_id'); 
            $formData['question_id'] = $this->request->getPost('question_id');  
            $formData['notes'] = $this->request->getPost('notes');  
            
           
        }
           
        $answerModel = new MasterUserNotesModel();
        
        // Check if an answer already exists for this user and question
        $existingAnswer = $answerModel->where('user_id',  $formData['userId'])
                                     ->where('question_id', $formData['question_id'])
                                     ->first();
        
        $data = [
            'user_id' =>  $formData['userId'],
            'question_id' => $formData['question_id'],
            'notes' => $formData['notes']
        ];
        
   
        try {
            if ($existingAnswer) {
                 
                // Update existing answer
                $res=$answerModel->update($existingAnswer['PKNoteID'], $data);
                 return $this->response->setJSON(['status' => 'success']);
                 
            } else {
                // Create new answer
                $answerModel->insert($data);
                 return $this->response->setJSON(['status' => 'success']);
            }
            
            $msg='Note saved successfully';
        } catch (\Exception $e) { 
            $msg=$e->getMessage; 
             return $this->response->setJSON(['status' => $msg]);
        }
        
       // return view('scorm/player', ['scormPath' => $scormPath, 'user_id' =>$formData['userId'] , 'question_id' =>$formData['question_id']]);
        
         

    }
}
