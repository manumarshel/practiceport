<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\CompanyModel;
use App\Models\QuestionModel;
use CodeIgniter\Database\Exceptions\DatabaseException;
use CodeIgniter\Model;
use Config\Database;
use Config\Services;

class Question extends BaseController
{

    public function index()
    {
        $data = [];
        $question = new QuestionModel();
        $db = Database::connect();
        $builder = $db->table('questions');
        $builder->select('*');
        $builder->where('active', 1);
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

                $qstn = new QuestionModel();

                $formData = [
                    'question' => $_POST['question'],
                    'category' => $_POST['category'],
                    'question_type' => $_POST['question_type'],
                    'company_id' => $_POST['company_id'],
                    'questionscol' => $question_file_name
                ];

                try {
                    if (!$question_id) {
                        $qstn->insert($formData);
                        $question_id = $qstn->getInsertID();
                    } else {
                        $qstn->update($question_id, $formData);
                    }

                    if (intval($question_id)) {
                        switch ($_POST['category']) {
                            case 'gstr1':
                                return redirect()->to('admin/gstr1/' . $question_id);
                                break;
                            case 'gstr3b':
                                return redirect()->to('admin/gstr3b/' . $question_id);
                                break;
                            case 'ewaybill':
                                return redirect()->to('admin/questions');
                                break;
                              case 'efiling':
                                    return redirect()->to('admin/questions');
                                    break;
                            case 'tds':
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
                $qstn = new QuestionModel();
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

    public function add_question()
    {
        $data = [];
        $data['companies'] = $this->get_companies();
        helper(['form', 'url']);
        if ($this->request->getMethod() == 'post') {
            $question_id = $this->request->uri->getSegment(3);
            $validation = Services::validation();
            if (!$question_id) {

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

                if (!$this->validate($validation->getRules())) {
                    $data['validation'] = $this->validator;
                    return view('admin/question/add_question', $data);
                } else {
                    $question_data = $this->request->getFile('question_data');
                    $question_file_name = $question_data->getRandomName();
                    $question_data->move(ROOTPATH . 'public/assets/uploads/questions/', $question_file_name);

                    $qstn = new QuestionModel();

                    $formData = [
                        'question' => $_POST['question'],
                        'category' => $_POST['category'],
                        'question_type' => $_POST['question_type'],
                        'company_id' => $_POST['company_id'],
                        'questionscol' => $question_file_name
                    ];

                    try {
                        $qstn->insert($formData);
                        $question_id = $qstn->getInsertID();
                    } catch (\ReflectionException $e) {
                        echo $e->getMessage();
                    }
                }
            } else {
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
                    ];

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

                    $qstn = new QuestionModel();

                    try {
                        $qstn->update($question_id, $formData);
                    } catch (\ReflectionException $e) {
                        echo $e->getMessage();
                    }
                }
            }

            if (intval($question_id)) {
                switch ($_POST['category']) {
                    case 'gstr1':
                        return redirect()->to('admin/gstr1/' . $question_id);
                        break;
                    case 'gstr3b':
                        return redirect()->to('admin/gstr3b/' . $question_id);
                        break;
                    case 'ewaybill':
                        return redirect()->to('admin/questions');
                        break;
                      case 'efiling':
                                    return redirect()->to('admin/questions');
                                    break;
                    case 'tds':
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
                $qstn = new QuestionModel();
                $question = $qstn->find($question_id);
                $data['question_'] = $question;
            }
            return view('admin/question/add_question', $data);
        } else {
            return redirect()->to('admin/questions');
        }
    }


    private function get_companies()
    {
        $company = new CompanyModel();
        return $company->findAll();
    }

    public function delete() {
        $question_id = $_POST['questionId'];
        $qm = new QuestionModel();
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
