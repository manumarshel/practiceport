<?php


namespace App\Controllers\Sim\b2b;


use App\Libraries\ItemDetails;
use App\Libraries\ProcessJsonFile;
use App\Models\gstr1\b2b\B2bModel;
use App\Models\sim\CompanyModel;
use CodeIgniter\Files\Exceptions\FileNotFoundException;
use CodeIgniter\Files\File;
use Exception;

class B2b extends \App\Controllers\BaseController
{

    public function index()
    {
        $company_id = session()->get('company_id');
        $jsonHandle = new ProcessJsonFile();
        $data = array();

        $page_slug = $this->request->uri->getSegment(2);

        $data = $jsonHandle->get_current_page_data($page_slug);

//        echo count($data);
//        echo "<pre>";
//        echo var_dump($data);
//        echo "</pre>";
//        exit;
        $cmpny = new CompanyModel();
        $data['company'] = $cmpny->find($company_id);
        return view('sim/b2b/b2b', $data);
    }


    public function add_invoice()
    {
        helper(['form', 'common']);
        $company_id = session()->get('company_id');
        $cmpny = new CompanyModel();
        $data = $cmpny->find($company_id);
        $data['pos_list'] = get_pos_list();
        return view('sim/b2b/b2b-add-invoice', $data);
    }

    public function process()
    {
        if ($this->request->isAJAX() && isset($_COOKIE['question_id'])) {
            $value = $this->request->getPost('value');
            $action = $this->request->getPost('action');
            if ($action === 'get_receiver_details' && $value) {
                $data = $this->get_receiver_details($value);
                if ($data) {
                    $this->response->setStatusCode(200);//->setJSON($data[0]);
                    return json_encode($data[0]);
                } else {
                    $this->response->setStatusCode(401);
                    return json_encode(array("resp" => 'Invalid Receiver GSTIN'));
                }
            } else if ($action === 'get_inv_no' && $value) {
                $data = $this->get_inv_no($value);
                if ($data) {
                    $this->response->setStatusCode(200);//->setJSON($data[0]);
                    return json_encode(array('resp' => 'success'));
                } else {
                    $this->response->setStatusCode(401);
                    return json_encode(array("resp" => 'Invalid Invoice Number'));
                }
            } else if ($action === 'get_total_inv_val' && $value) {
                $data = $this->get_total_inv_val($value);
                if ($data) {
                    $this->response->setStatusCode(200);//->setJSON($data[0]);
                    return json_encode(array('resp' => 'success'));
                } else {
                    $this->response->setStatusCode(401);
                    return json_encode(array("resp" => 'Invalid Total Invoice Value'));
                }
            } else if ($action === 'get_receiver_inv_date' && $value) {
                $data = $this->get_receiver_inv_date($value);
                if ($data) {
                    $this->response->setStatusCode(200);//->setJSON($data[0]);
                    return json_encode(array('resp' => 'success'));
                } else {
                    $this->response->setStatusCode(401);
                    return json_encode(array("resp" => 'Invalid Invoice Date'));
                }
            } //            else {
            else if ($action === 'save_b2b_transaction') {
                $data = $this->save_b2b_transaction($_POST);
                if ($data) {
                    $this->response->setStatusCode(200);//->setJSON($data[0]);
                    return $data; //json_encode();
                } else {
                    $this->response->setStatusCode(401);
                    return json_encode(array("resp" => 'Error Occurred'));
                }
            }
        }
    }

    private function get_receiver_details($rgstId)
    {
        $b2bModel = new B2bModel();
        $question_id = $_COOKIE['question_id'];
        $result = $b2bModel->
        where(array('receiver_gstin' => $rgstId, 'question_id' => $question_id))->limit(1)->findAll();
        return $result;
    }

    private function get_inv_no($iv_no)
    {
        $b2bModel = new B2bModel();
        $question_id = $_COOKIE['question_id'];
        $result = $b2bModel->
        where(array('invoice_number' => $iv_no, 'question_id' => $question_id))->limit(1)->findAll();
        return $result;
    }

    private function get_total_inv_val($inv_val)
    {
        $b2bModel = new B2bModel();
        $question_id = $_COOKIE['question_id'];
        $result = $b2bModel->
        where(array('total_invoce_value' => $inv_val, 'question_id' => $question_id))->limit(1)->findAll();
        return $result;
    }

    private function get_receiver_inv_date($inv_date)
    {
        $inv_date = date('Y-m-d', strtotime($inv_date));
        $b2bModel = new B2bModel();
        $question_id = $_COOKIE['question_id'];
        $result = $b2bModel->
        where(array('invoice_date' => $inv_date, 'question_id' => $question_id))->limit(1)->findAll();
        return $result;
    }

    private function save_b2b_transaction($data)
    {
        $session = session();
        $idl = new ItemDetails($data);
        $results = $idl->processResult();
        $question_id = $_COOKIE['question_id'];
        $company_id = $session->get('company_id');
        $userId = $session->get('id');

        $b2b = [
            'receiver_gstin' => $this->request->getPost('ruid'),
            'eligible_to_taxed' => $this->request->getPost('eligible_to_taxed'),
//            'is_igst' => $this->request->getPost('is_igst'),
            'receiver_name' => $this->request->getPost('u_name'),
            'invoice_number' => $this->request->getPost('inv_no'),
            'invoice_date' => date('Y-m-d', strtotime($this->request->getPost('invdate'))),
            'pos' => $this->request->getPost('pos'),
            'total_invoce_value' => $this->request->getPost('invval'),
            'supply_type' => $this->request->getPost('supplyty'),
        ];

        if ($results) {
            $arr = array(
                'question_id' => $question_id,
                'company_id' => $company_id,
                'user_id' => $userId,
                'b2b' => [$b2b],
                'b2b_item_details' => $results
            );

            $jsonHandle = new ProcessJsonFile();
            if ($jsonHandle->is_json_exists()) {
                $jsonOp = $jsonHandle->get_current_json();
                if ($jsonOp !== '') {
                    $jsonArr = json_decode($jsonOp, true);
                    $jsonArr = $jsonHandle->update_json($jsonArr, 'b2b', $b2b, 'b2b_item_details', $results);
                    try {

                        return $jsonHandle->save_json($jsonArr);
                    } catch (Exception $e) {
                        echo $e->getMessage();
                    }
                }
            } else {
                try {
                    return $jsonHandle->save_json($arr);
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
            }
            return null;

        }
        return null;
    }
}
