<?php


namespace App\Controllers\Sim;


use App\Libraries\ProcessJsonFile;
use App\Models\gstr1\documents_issues\documents_issues;
use Exception;

class Document extends \App\Controllers\BaseController
{
    public function index() {
//        $primary_Model = new documents_issues();
//        $question_id = $_COOKIE['question_id'];
        $jsonHandle = new ProcessJsonFile();

        $data = [];

        $data = $jsonHandle->get_doc_json_array();

        return view('sim/document/document', $data);
    }

    public function process_document() {
        helper(['form', 'common']);
        $session = \Config\Services::session();
        $primary_data = [];
        $primary_Model = new documents_issues();
        $question_id = intval($this->request->getPost('question_id'));
        $data_type = intval($this->request->getPost('data_type'));
        $jsonHandle = new ProcessJsonFile();

        for ($i = 0; $i <= 5; $i++) {
            $doc_no = ($this->request->getPost('type' . $data_type . '_no' . $i)) ? $this->request->getPost('type' . $data_type . '_no' . $i) : '';
            if ( $doc_no && ! empty( $doc_no ) ) {
                // Fetch other form data
                $doc_from =  ($this->request->getPost('type' . $data_type . '_from' . $i)) ? $this->request->getPost('type' . $data_type . '_from' . $i) : '';
                $doc_to = ($this->request->getPost('type' . $data_type . '_to' . $i)) ? $this->request->getPost('type' . $data_type . '_to' . $i) : '';
                $total_number = ($this->request->getPost('type' . $data_type . '_total_number' . $i)) ? $this->request->getPost('type' . $data_type . '_total_number' . $i) : null;
                $cancelled = ($this->request->getPost('type' . $data_type . '_cancelled' . $i)) ? $this->request->getPost('type' . $data_type . '_cancelled' . $i) : null;
                $net_issues = ($this->request->getPost('type' . $data_type . '_net_issues' . $i)) ? $this->request->getPost('type' . $data_type . '_net_issues' . $i) : null;

                $primary_data['doc_no'] = $doc_no;
                $primary_data['doc_from'] = $doc_from;
                $primary_data['doc_to'] = $doc_to;
                $primary_data['total_number'] = $total_number;
                $primary_data['cancelled'] = $cancelled;
                $primary_data['net_issues'] = $net_issues;
                $db_data = (array)$primary_Model->select('*')->where(['question_id' => $question_id, 'data_type' => $data_type, 'doc_no' => $doc_no])->get()->getResult('array');
            // compare form data with $db_data
//var_dump($db_data);
                if ( $db_data ) {
                    $db_data = $db_data[0];
                    if ( $doc_from != $db_data['doc_from'] ) {
//                        return error;
                        $this->response->setStatusCode(401);
                        return json_encode(array("resp" => 'Error Occurred'));
                    }
                    if ( $doc_to != $db_data['doc_to'] ) {
//                        return error;
                        $this->response->setStatusCode(401);
                        return json_encode(array("resp" => 'Error Occurred'));
                    }
                    if ( $total_number != $db_data['total_number'] ) {
//                        return error;
                        $this->response->setStatusCode(401);
                        return json_encode(array("resp" => 'Error Occurred'));
                    }
                    if ( $cancelled != $db_data['cancelled'] ) {
//                        return error;
                        $this->response->setStatusCode(401);
                        return json_encode(array("resp" => 'Error Occurred'));
                    }
                    if ( $net_issues != $db_data['net_issues'] ) {
//                        return error;
                        $this->response->setStatusCode(401);
                        return json_encode(array("resp" => 'Error Occurred'));
                    }
                } else {
                    // return error
                    $this->response->setStatusCode(401);
                    return json_encode(array("resp" => 'Error Occurred'));
                }

                $company_id = session()->get('company_id');
                $userId = session()->get('id');
                $arr = array(
                    'question_id' => $question_id,
                    'company_id' => $company_id,
                    'user_id' => $userId,
                    'doc_type'.$data_type => [$primary_data],
                );


                $jsonHandle->save_doc($arr, $data_type, $primary_data);

            } else {
                break;
            }
        }

        $this->response->setStatusCode(200);//->setJSON($data[0]);
        return json_encode(array('resp' => 'Success'));

        // return error
    }


}
