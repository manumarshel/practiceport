<?php


namespace App\Controllers\Admin;


use App\Controllers\BaseController;
use App\Libraries\DbFetchnProcess;
use App\Libraries\ItemDetails;
use App\Models\gstr1\_9bcdnotes\_9bcdnotesItemDetailsModel;
use App\Models\gstr1\_9bcdnotes\_9bcdnotesModel;
use App\Models\gstr1\b2b\b2bItemDetailsModel;
use App\Models\gstr1\b2b\B2bModel;
use App\Models\gstr1\b2cl\B2clItemDetailsModel;
use App\Models\gstr1\b2cl\B2clModel;
use App\Models\gstr1\ItemDetailsModel;
use CodeIgniter\HTTP\IncomingRequest;
use Config\Database;

class Gstr1 extends BaseController
{

    private function getFormData($question_id)
    {
        $data = [];
        $dbProcess = new DbFetchnProcess();
        // B2b
        $b2bQuery = $dbProcess->fetchDataWithJoin($question_id, 'b2b',
            'b2b_item_details',
            'b2b_item_details.b2b_id = b2b.b2b_id',
            'item_details',
            'item_details.item_detail_id = b2b_item_details.item_detail_id');
        $b2bResults = $b2bQuery->getResult();
        $data = $dbProcess->getProcessedB2b($b2bResults);

        // B2c Large
        $query = $dbProcess->fetchDataWithJoin($question_id, 'b2c_large',
            'b2c_item_details',
            'b2c_item_details.b2c_id = b2c_large.b2c_id',
            'item_details',
            'item_details.item_detail_id = b2c_item_details.item_detail_id');
        $queryResults = $query->getResult();
        $dummy = $dbProcess->getProcessedB2cl($queryResults);
        if (count($dummy)) $data = array_merge($data, $dummy);


        return $data;
    }

    public function add()
    {
        $data = [];
        $question_id = $this->request->uri->getSegment(3);
        if (!$question_id ||
            (0 == (int)$question_id)
        ) {

            return redirect()->to('admin/questions');
        }

        $data = $this->getFormData($question_id);

        if ($this->request->getMethod() == 'post') {
            echo "<pre>";
            var_dump($_POST['zper']);
            echo "</pre>";

        } else {
            $data['question_id'] = $question_id;
            return view('admin/_gstr1', $data);
        }

    }

    public function edit()
    {
        $data = [];
        $question_id = $this->request->uri->getSegment(4);
        if (!$question_id ||
            (0 == (int)$question_id)
        ) {

            return redirect()->to('admin/questions');
        }
        $b2bQuery = $this->fetchB2b($question_id);
        $b2bResults = $b2bQuery->getResult();

        $data = $this->getProcessedB2b($b2bResults);

        if ($this->request->getMethod() == 'post') {
            echo "<pre>";
            var_dump($_POST['zper']);
            echo "</pre>";

        } else {

            return view('admin/_gstr1', $data);
        }

    }

    private function addDataToDB($primaryKey, $formData, $primaryModel, $secondaryModel)
    {
        try {
            $primaryModel->insert($formData);
            $pk = $primaryModel->getInsertID();
            $idl = new ItemDetails($_POST);
            $idm = new ItemDetailsModel();

            $results = $idl->processResult();
            if ($results) {
                $itemKeys = array();
                foreach ($results as $key => $result) {
                    $idm->insert($result);
                    $item_detail_id = $idm->getInsertID();
                    $itemKeys[$key] = $item_detail_id;
                    $b2bItem = [
                        $primaryKey => $pk,
                        'item_detail_id' => $item_detail_id
                    ];

                    $secondaryModel->insert($b2bItem);
                }
                return array(
                    $primaryKey => $pk,
                    'itemKeys' => $itemKeys,
                    'responseMsg' => 'Created'
                );
            } else return null;
        } catch (\ReflectionException $e) {
            return array('error' => $e->getMessage());

        }
    }

    public function b2b()
    {
        $data = [];

        if ($this->request->isAJAX()) {

            $b2bModel = new B2bModel();

            $b2bId = $this->request->getPost('b2b_id');
            $b2bIdm = new b2bItemDetailsModel();
            $formData = [
                'eligible_to_taxed' => $this->request->getPost('eligible_to_taxed'),
                'receiver_gstin' => $this->request->getPost('receiver_gstin'),
                'receiver_name' => $this->request->getPost('receiver_name'),
                'invoice_number' => $this->request->getPost('invoice_number'),
                'invoice_date' => date('Y-m-d', strtotime($this->request->getPost('invoice_date'))),
                'pos' => $this->request->getPost('pos'),
                'total_invoce_value' => $this->request->getPost('total_invoce_value'),
                'supply_type' => $this->request->getPost('supply_type'),
                'question_id' => $this->request->getPost('question_id'),
            ];
            if (!$b2bId) {

                $result = $this->addDataToDB('b2b_id', $formData, $b2bModel, $b2bIdm);

                if ($result) return json_encode($result);
                return null;
            } else {
                $b2bModel->update($b2bId, $formData);
                return json_encode(array("responseMsg" => 'Updated'));
            }
        }
        return json_encode(array("responseMsg" => 'Error'));
    }

    public function b2cl()
    {
        $data = [];

        if ($this->request->isAJAX()) {
            echo $this->request->getMethod();

            $b2c = new B2clModel();
            $b2bIdm = new B2clItemDetailsModel();

            $b2c_id = $this->request->getPost('b2c_id');
            $formData = [
                'is_eligible' => $this->request->getPost('is_eligible'),
                'invoice_no' => $this->request->getPost('invoice_no'),
                'invoice_date' => date('Y-m-d', strtotime($this->request->getPost('invoice_date'))),
                'pos' => $this->request->getPost('pos'),
                'total_invoice_value' => $this->request->getPost('total_invoice_value'),
                'supply_type' => $this->request->getPost('supply_type'),
                'question_id' => $this->request->getPost('question_id'),
            ];
            if (!$b2c_id) {
                $result = $this->addDataToDB('b2c_id', $formData, $b2c, $b2bIdm);

                if ($result) return json_encode($result);
                return null;
            } else {
                $b2c->update($b2c_id, $formData);
                return json_encode(array("responseMsg" => 'Updated'));
            }
        }

        return json_encode(array("responseMsg" => 'Error'));
    }

    public function _9bcdn()
    {
        $data = [];
//        _9bcdn
        if ($this->request->isAJAX()) {
            echo $this->request->getMethod();

            $pm = new _9bcdnotesModel();
            $sm = new _9bcdnotesItemDetailsModel();

            $_9bcdn_id = $this->request->getPost('9bcdn_id');
            $formData = [
                'is_eligible' => $this->request->getPost('is_eligible'),
                'receiver_gstin' => $this->request->getPost('receiver_gstin'),
                'receiver__name' => $this->request->getPost('receiver__name'),
                'dc_note_date' => date('Y-m-d', strtotime($this->request->getPost('dc_note_date'))),
                'dc_note_no' => $this->request->getPost('dc_note_no'),
                'note_type' => $this->request->getPost('note_type'),
                'note_value' => $this->request->getPost('note_value'),
                'supply_type' => $this->request->getPost('supply_type'),
                'pos' => $this->request->getPost('pos'),
                'question_id' => $this->request->getPost('question_id'),
            ];
            if (!$_9bcdn_id) {
                $result = $this->addDataToDB('9bcdn_id', $formData, $pm, $sm);

                if ($result) return json_encode($result);
                return null;
            } else {
                $pm->update($_9bcdn_id, $formData);
                return json_encode(array("responseMsg" => 'Updated'));
            }
        }

        return json_encode(array("responseMsg" => 'Error'));
    }
}
