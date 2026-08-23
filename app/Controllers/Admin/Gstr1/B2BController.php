<?php

namespace App\Controllers\Admin\Gstr1;

use App\Controllers\Admin\AdminBaseController;
use App\Libraries\DbFetchnProcess;
use App\Libraries\ItemDetails;
use App\Models\gstr1\ItemDetailsModel;
use App\Models\gstr1\b2b\B2bModel;
use App\Models\gstr1\b2b\b2bItemDetailsModel;
use Exception;

class B2BController extends AdminBaseController {

    public function index() {
        helper(['common']);
        $b2bModel = new B2bModel();
        $data['question_id'] = $this->request->uri->getSegment(4);
        $data['data_list'] = $b2bModel->select('*')->where('question_id', $data['question_id'])->get()->getResult();
        $data['file_name'] = 'gstr1/b2b';

        return $this->admin_layout($data);
    }

    public function addInvoice() {
        helper(['form', 'common']);
        $session = \Config\Services::session();
        $data['question_id'] = $this->request->uri->getSegment(5);
        $data['b2b_id'] = intval($this->request->uri->getSegment(6));
        $data['pos_list'] = get_pos_list();
        if ($this->request->getMethod() == 'post') {
            $b2bModel = new B2bModel();
            $question_id = intval($this->request->getPost('question_id'));
            $b2bId = intval($this->request->getPost('b2b_id'));
            $b2bIdm = new b2bItemDetailsModel();
            $formData = [
                'eligible_to_taxed' => ($this->request->getPost('eligible_to_taxed') == 'on') ? 1 : 0,
                'is_igst' => ($this->request->getPost('is_igst') == 'on') ? 1 : 0,
                'receiver_gstin' => $this->request->getPost('receiver_gstin'),
                'receiver_name' => $this->request->getPost('receiver_name'),
                'invoice_number' => $this->request->getPost('invoice_number'),
                'invoice_date' => date('Y-m-d', strtotime($this->request->getPost('invoice_date'))),
                'pos' => $this->request->getPost('pos'),
                'total_invoce_value' => $this->request->getPost('total_invoce_value'),
                'supply_type' => $this->request->getPost('supply_type'),
                'question_id' => $question_id,
            ];

            if ($b2bId > 0) {
                // $b2bModel->update($b2bId, $formData);
                $result = $this->addDataToDB('b2b_id', $formData, $b2bModel, $b2bIdm, $b2bId);
            } else {
                $result = $this->addDataToDB('b2b_id', $formData, $b2bModel, $b2bIdm);
            }

            $session->setFlashdata('success', 'Action has successfully completed');
            return redirect()->to('admin/gstr1/b2b/' . $question_id);
        } else {
            $data['form_data'] = $this->getFormData($data['question_id'], $data['b2b_id']);
            $data['load_css'] = array('vendors/bootstrap-datepicker/bootstrap-datepicker.min.css');
            $data['load_js'] = array('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js', 'vendors/jquery-validation/jquery.validate.min.js', 'js/gstr1/common/form_add_update.js');
            $data['file_name'] = 'gstr1/b2b-add-invoice';

//
            return $this->admin_layout($data);
        }
    }

    public function remove() {
        if ($this->request->getMethod() == 'post') {
            if ($this->request->getPost('question_id') && $this->request->getPost('pk_id')) {
                $session = \Config\Services::session();
                $question_id = $this->request->getPost('question_id');
                $pk_id = $this->request->getPost('pk_id');
                $primaryModel = new B2bModel();
                $secondaryModel = new b2bItemDetailsModel();
                $this->removeData('b2b_id', $question_id, $pk_id, $primaryModel, $secondaryModel);
                $session->setFlashdata('success', 'Action has successfully completed');
                return redirect()->to('admin/gstr1/b2b/' . $question_id);
            }
        }
        return redirect()->to('admin/gstr1');
    }

    private function removeData($primaryKey, $question_id, $pk_Id, $primaryModel, $secondaryModel) {
        $idm = new ItemDetailsModel();
        $item_list = $secondaryModel->select('*')->where($primaryKey, $pk_Id)->get()->getResult();
        $secondaryModel->where([$primaryKey => $pk_Id])->delete();
        foreach ($item_list as $val) {
            $idm->where(['item_detail_id' => $val->item_detail_id])->delete();
        }
        $primaryModel->where([$primaryKey => $pk_Id, 'question_id' => $question_id])->delete();
        return;
    }

    private function getFormData($question_id, $b2b_id = 0) {
        $data = [];
        $dbProcess = new DbFetchnProcess();
        // B2b
        $b2bQuery = $dbProcess->fetchDataWithJoin($question_id, 'b2b',
                'b2b_item_details',
                'b2b_item_details.b2b_id = b2b.b2b_id AND b2b.b2b_id=' . $b2b_id,
                'item_details',
                'item_details.item_detail_id = b2b_item_details.item_detail_id');
        $b2bResults = $b2bQuery->getResult();
        $data = $dbProcess->getProcessedB2b($b2bResults);

        // B2c Large
//        $query = $dbProcess->fetchDataWithJoin($question_id, 'b2c_large',
//                'b2c_item_details',
//                'b2c_item_details.b2c_id = b2c_large.b2c_id',
//                'item_details',
//                'item_details.item_detail_id = b2c_item_details.item_detail_id');
//        $queryResults = $query->getResult();
//        $dummy = $dbProcess->getProcessedB2cl($queryResults);
//        if (count($dummy)) {
//            $data = array_merge($data, $dummy);
//        }

        return $data;
    }

    private function addDataToDB($primaryKey, $formData, $primaryModel, $secondaryModel, $pk_Id = 0) {
        try {

            $idl = new ItemDetails($_POST);
            $idm = new ItemDetailsModel();

            if ($pk_Id > 0) {
                $primaryModel->update($pk_Id, $formData);
                $item_list = $secondaryModel->select('*')->where($primaryKey, $pk_Id)->get()->getResult();
                $secondaryModel->where([$primaryKey => $pk_Id])->delete();
                foreach ($item_list as $val) {
                    $idm->where(['item_detail_id' => $val->item_detail_id])->delete();
                }
                $pk = $pk_Id;
            } else {
                $primaryModel->insert($formData);
                $pk = $primaryModel->getInsertID();
            }

            $results = $idl->processResult();


//
//
            if ($results) {
                $itemKeys = array();
                foreach ($results as $key => $result) {
//                    echo "<pre>";
//                    var_dump($key);
//                    echo "</pre>";
//                    echo "<pre>";
//                    var_dump($result);
//                    echo "</pre>";
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
            } else
                return null;
        } catch (\ReflectionException $e) {
            return array('error' => $e->getMessage());
        }
    }

}
