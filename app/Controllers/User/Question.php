<?php


namespace App\Controllers\User;


use App\Controllers\BaseController;
use App\Models\CompanyModel;
use App\Models\QuestionModel;
use CodeIgniter\Model;
use Config\Database;
use Config\Services;

class Question extends BaseController
{
    public function index()
    {
        $data = [];
//        $question = new QuestionModel();
//        $data['questions'] = $question->findAll();
        $db = Database::connect();
        $builder = $db->table('questions');
        $builder->select('*');
        $builder->where('active', 1);
        $query = $builder->get();
        $data['questions'] = $query->getResultArray();
        return view('user/question/questions', $data);
    }

    public function add_question()
    {
        $data = [];
        $data['companies'] = $this->get_companies();
        helper(['form', 'url']);
        if ($this->request->getMethod() == 'post') {
            $question_id = $this->request->uri->getSegment(3);

            $validation =  Services::validation();
            $validation->setRules([
                'question' => ['label' => 'Question', 'rules' => 'required'],
                'category' => ['label' => 'Category', 'rules' => 'required'],
                'question_type' => ['label' => 'Question Type', 'rules' => 'required'],
                'company_id' => ['label' => 'Company', 'rules' => 'required'],
                'submit' => ['label' => 'Key', 'rules' => 'required'],
                'question_data' => [
                    'uploaded[question_data]',
                    'mime_in[question_data,application/zip, application/octet-stream, application/x-zip-compressed, multipart/x-zip]',
//                    'mime_in[question_data,image/jpg,image/jpeg,image/gif,image/png]',
                    'max_size[question_data,4096]',
                ],
            ]);

            if (! $this->validate($validation->getRules())) {
                $data['validation'] = $this->validator;
                return view('user/question/add_question', $data);
            } else {
                $question_data = $this->request->getFile('question_data');
                $question_file_name = $question_data->getRandomName();
                $question_data->move(ROOTPATH.'public/assets/uploads/questions/', $question_file_name);

                $qstn = new QuestionModel();

                $formData = [
                    'question' => $_POST['question'],
                    'category' => $_POST['category'],
                    'question_type' => $_POST['question_type'],
                    'company_id' => $_POST['company_id'],
                    'questionscol' => $question_file_name
                ];

                try {
                    if ( !$question_id ) {
                        $qstn->insert($formData);
                        $question_id = $qstn->getInsertID();
                    } else {
                        $qstn->update($question_id, $formData);
                    }

                    if ( intval($question_id) ) {
                        if ( $this->request->getPost('submit') === 'submit_continue' ) {
                            return redirect()->to('user/_gstr1/' . $question_id);
                        } else {
                            return redirect()->to('user/questions');
                        }
                    }

                } catch (\ReflectionException $e) {
                    echo $e->getMessage();
                }

            }
        }
        else if ($this->request->getMethod() == 'get') {
//            $data['question'] = '';
            $question_id = $this->request->uri->getSegment(3);
            if ( $question_id ) {
                $qstn = new QuestionModel();
                $question = $qstn->find($question_id);
                $data['question_'] = $question;
            }
//            echo "<pre>";
//            var_dump($data);
//            echo "<pre>";

            return view('user/question/add_question', $data);
        } else {
            return redirect()->to('user/questions');
        }

    }

    public function edit_question() {

    }

    private function get_companies()
    {
        $company = new CompanyModel();
        return $company->findAll();
    }
}
