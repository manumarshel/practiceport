<?php

namespace App\Controllers\Admin\Gstr1;

use App\Controllers\Admin\AdminBaseController;
use App\Libraries\DbFetchnProcess;
use App\Libraries\ItemDetails;
use App\Models\gstr1\ItemDetailsModel;
use App\Models\gstr1\b2cl_amendment\B2cl_amendmentModel;
use App\Models\gstr1\b2cl_amendment\B2cl_amendmentItemDetailsModel;
use Exception;

class B2clAmendmentController extends AdminBaseController {

    public function index() {
        helper(['common']);
        $Model = new B2cl_amendmentModel();
        $data['question_id'] = $this->request->uri->getSegment(4);
        $data['data_list'] = $Model->select('*')->where('question_id', $data['question_id'])->get()->getResult();
        $data['file_name'] = 'gstr1/b2cl-amendment';
        $data['pos_list'] = get_pos_list();
        return $this->admin_layout($data);
    }

    public function add() {
        helper(['form', 'common']);
        $session = \Config\Services::session();
        $data['question_id'] = $this->request->uri->getSegment(5);
        $data['pk_id'] = intval($this->request->uri->getSegment(6));

        if ($this->request->getMethod() == 'post') {
            $primary_Model = new B2cl_amendmentModel();
            $question_id = intval($this->request->getPost('question_id'));
            $pk_Id = intval($this->request->getPost('pk_id'));
            $Idm = new B2cl_amendmentItemDetailsModel();
            $formData = [
                'eligible_to_taxed' => ($this->request->getPost('eligible_to_taxed') == 'on') ? 1 : 0,
                'is_igst' => ($this->request->getPost('is_igst') == 'on') ? 1 : 0,
                'invoice_number' => $this->request->getPost('invoice_number'),
                'invoice_date' => date('Y-m-d', strtotime($this->request->getPost('invoice_date'))),
                'revised_invoice_number' => $this->request->getPost('revised_invoice_number'),
                'revised_invoice_date' => date('Y-m-d', strtotime($this->request->getPost('revised_invoice_date'))),
                'total_invoice_value' => $this->request->getPost('total_invoice_value'),
                'pos' => $this->request->getPost('pos'),
                'supply_type' => $this->request->getPost('supply_type'),
                'financial_year' => $this->request->getPost('financial_year'),
                'original_invoice_number' => $this->request->getPost('original_invoice_number'),
                'question_id' => $question_id,
            ];
            if ($pk_Id > 0) {
                $result = $this->addDataToDB('9a_b2c_id', $formData, $primary_Model, $Idm, $pk_Id);
            } else {
                $result = $this->addDataToDB('9a_b2c_id', $formData, $primary_Model, $Idm);
            }

            $session->setFlashdata('success', 'Action has successfully completed');
            return redirect()->to('admin/gstr1/b2cl-amendment/' . $question_id);
        } else {
            $data['pos_list'] = get_pos_list();
            $data['form_data'] = $this->getFormData($data['question_id'], $data['pk_id']);
            $data['load_css'] = array('vendors/bootstrap-datepicker/bootstrap-datepicker.min.css');
            $data['load_js'] = array('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js', 'vendors/jquery-validation/jquery.validate.min.js', 'js/gstr1/common/form_add_update.js');
            $data['file_name'] = 'gstr1/b2cl-amendment-add';
            return $this->admin_layout($data);
        }
    }

    public function remove() {
        if ($this->request->getMethod() == 'post') {
            if ($this->request->getPost('question_id') && $this->request->getPost('pk_id')) {
                $session = \Config\Services::session();
                $question_id = $this->request->getPost('question_id');
                $pk_id = $this->request->getPost('pk_id');
                $primaryModel = new B2cl_amendmentModel();
                $secondaryModel = new B2cl_amendmentItemDetailsModel();
                $this->removeData('9a_b2c_id', $question_id, $pk_id, $primaryModel, $secondaryModel);
                $session->setFlashdata('success', 'Action has successfully completed');
                return redirect()->to('admin/gstr1/b2cl-amendment/' . $question_id);
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

    private function getFormData($question_id, $pk_id = 0) {
        $data = [];
        $dbProcess = new DbFetchnProcess();

        $query = $dbProcess->fetchDataWithJoin($question_id, '9a_b2c_large_invoice',
                '9a_b2c_large_invoice_item_details',
                '9a_b2c_large_invoice_item_details.9a_b2c_id = 9a_b2c_large_invoice.9a_b2c_id AND 9a_b2c_large_invoice.9a_b2c_id=' . $pk_id,
                'item_details',
                'item_details.item_detail_id = 9a_b2c_large_invoice_item_details.item_detail_id');
        $b2bResults = $query->getResult();
        $data = $dbProcess->getProcessedData($b2bResults);
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
            } else
                return null;
        } catch (\ReflectionException $e) {
            return array('error' => $e->getMessage());
        }
    }

}
