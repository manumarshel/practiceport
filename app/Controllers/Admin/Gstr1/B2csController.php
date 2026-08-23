<?php

namespace App\Controllers\Admin\Gstr1;

use App\Controllers\Admin\AdminBaseController;
use App\Libraries\DbFetchnProcess;
use App\Libraries\ItemDetails;
use App\Models\gstr1\ItemDetailsModel;
use App\Models\gstr1\b2c_others\B2c_othersModel;
use App\Models\gstr1\b2c_others\B2c_othersItemDetailsModel;
use Exception;

class B2csController extends AdminBaseController {

    public function index() {
        helper(['common']);
        $Model = new B2c_othersModel();
        $data['pos_list'] = get_pos_list();
        $data['question_id'] = $this->request->uri->getSegment(4);
        $data['segment'] = '';
        $data['data_list'] = $Model->select('*')->where(['question_id' => $data['question_id'], 'data_type' => 0])->get()->getResult();
        $data['file_name'] = 'gstr1/b2cs';
        return $this->admin_layout($data);
    }

    public function add() {
        helper(['form', 'common']);
        $Model = new B2c_othersModel();
        $session = \Config\Services::session();
        $data['question_id'] = $this->request->uri->getSegment(5);
        $data['pk_id'] = intval($this->request->uri->getSegment(6));

        if ($this->request->getMethod() == 'post') {
            $primary_Model = new B2c_othersModel();
            $question_id = intval($this->request->getPost('question_id'));
            $pk_Id = intval($this->request->getPost('pk_id'));
            $Idm = new B2c_othersItemDetailsModel();
            $formData = [
                'financial_year' => $this->request->getPost('financial_year'),
                'pos' => $this->request->getPost('pos'),
                'supply_type' => $this->request->getPost('supply_type'),
                'total_invoice_value' => $this->request->getPost('total_invoice_value'),
                'cess' => $this->request->getPost('cess'),
                'rate' => $this->request->getPost('rate'),
                'igst' => $this->request->getPost('igst'),
                'cgst' => $this->request->getPost('cgst'),
                'sgst' => $this->request->getPost('sgst'),
                'is_igst' => ($this->request->getPost('is_igst') == 'on') ? 1 : 0,
                'return_filing_period' => $this->request->getPost('return_filing_period'),
                'data_type' => $this->request->getPost('data_type'),
                'question_id' => $question_id,
            ];
            if ($pk_Id > 0) {
                $result = $this->addDataToDB('b2c_others_id', $formData, $primary_Model, $Idm, $pk_Id);
            } else {
                $result = $this->addDataToDB('b2c_others_id', $formData, $primary_Model, $Idm);
            }
//            echo "<pre>";
//            var_dump($formData);
//            echo "<pre>";
//            exit;
            $session->setFlashdata('success', 'Action has successfully completed');
            return redirect()->to('admin/gstr1/b2cs/' . $question_id);
        } else {
            $data['pos_list'] = get_pos_list();
            $data['financial_period_list'] = get_financial_period();
            $data['quarter_list'] = get_quarter_list();
            $data['rate_list'] = get_rate_list();
            $data['form_data'] = $Model->select('*')->where(['question_id' => $data['question_id'], 'b2c_others_id' => $data['pk_id']])->get()->getResult('array');

            if ( isset($data['form_data']) && isset($data['form_data'][0]) && ! empty ( $data['form_data'] ) ) {
                $data['form_data'] = $data['form_data'][0];
            }
//            $data['form_data'] = $this->getFormData($data['question_id'], $data['pk_id']);
            $data['load_css'] = array('vendors/bootstrap-datepicker/bootstrap-datepicker.min.css');
            $data['load_js'] = array('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js', 'vendors/jquery-validation/jquery.validate.min.js', 'js/gstr1/common/form_add_update.js');
            $data['file_name'] = 'gstr1/b2cs-add';
//            echo "<pre>";
//            var_dump($data['form_data']);
//            echo "<pre>";
//            exit;
            return $this->admin_layout($data);
        }
    }

    public function remove() {
        if ($this->request->getMethod() == 'post') {
            if ($this->request->getPost('question_id') && $this->request->getPost('pk_id')) {
                $session = \Config\Services::session();
                $question_id = $this->request->getPost('question_id');
                $pk_id = $this->request->getPost('pk_id');
                $primaryModel = new B2c_othersModel();
                $secondaryModel = new B2c_othersItemDetailsModel();
                $this->removeData('b2c_others_id', $question_id, $pk_id, $primaryModel, $secondaryModel);
                $session->setFlashdata('success', 'Action has successfully completed');
                return redirect()->to('admin/gstr1/b2cs/' . $question_id);
            }
        }
        return redirect()->to('admin/gstr1');
    }

    public function ecomm() {
        helper(['common']);
        $Model = new B2c_othersModel();
        $data['pos_list'] = get_pos_list();
        $data['question_id'] = $this->request->uri->getSegment(5);
        $data['segment'] = $this->request->uri->getSegment(4);
        $data['data_list'] = $Model->select('*')->where(['question_id' => $data['question_id'], 'data_type' => 1])->get()->getResult();
        $data['file_name'] = 'gstr1/b2cs-ecomm';
        return $this->admin_layout($data);
    }

    public function ecommAdd() {
        helper(['form', 'common']);
        $session = \Config\Services::session();
        $data['question_id'] = $this->request->uri->getSegment(5);
        $data['pk_id'] = intval($this->request->uri->getSegment(6));

        if ($this->request->getMethod() == 'post') {
            $primary_Model = new B2c_othersModel();
            $question_id = intval($this->request->getPost('question_id'));
            $pk_Id = intval($this->request->getPost('pk_id'));
            $Idm = new B2c_othersItemDetailsModel();
            $formData = [
                'financial_year' => $this->request->getPost('financial_year'),
                'pos' => $this->request->getPost('pos'),
                'supply_type' => $this->request->getPost('supply_type'),
                'return_filing_period' => $this->request->getPost('return_filing_period'),
                'e_gstin' => $this->request->getPost('e_gstin'),
                'data_type' => 1,
                'question_id' => $question_id,
            ];
            if ($pk_Id > 0) {
                $result = $this->addDataToDB('b2c_others_id', $formData, $primary_Model, $Idm, $pk_Id);
            } else {
                $result = $this->addDataToDB('b2c_others_id', $formData, $primary_Model, $Idm);
            }

            $session->setFlashdata('success', 'Action has successfully completed');
            return redirect()->to('admin/gstr1/b2cs/ecomm/' . $question_id);
        } else {
             $data['pos_list'] = get_pos_list();
            $data['financial_period_list'] = get_financial_period();
            $data['quarter_list'] = get_quarter_list();
            $data['form_data'] = $this->getFormData($data['question_id'], $data['pk_id']);
            $data['load_css'] = array('vendors/bootstrap-datepicker/bootstrap-datepicker.min.css');
            $data['load_js'] = array('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js', 'vendors/jquery-validation/jquery.validate.min.js', 'js/gstr1/common/form_add_update.js');
            $data['file_name'] = 'gstr1/b2cs-ecomm-add';
            return $this->admin_layout($data);
        }
    }
        public function ecommRemove() {
        if ($this->request->getMethod() == 'post') {
            if ($this->request->getPost('question_id') && $this->request->getPost('pk_id')) {
                $session = \Config\Services::session();
                $question_id = $this->request->getPost('question_id');
                $pk_id = $this->request->getPost('pk_id');
                $primaryModel = new B2c_othersModel();
                $secondaryModel = new B2c_othersItemDetailsModel();
                $this->removeData('b2c_others_id', $question_id, $pk_id, $primaryModel, $secondaryModel);
                $session->setFlashdata('success', 'Action has successfully completed');
                return redirect()->to('admin/gstr1/b2cs/ecomm/' . $question_id);
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

        $query = $dbProcess->fetchDataWithJoin($question_id, 'b2c_others',
                'b2c_others_item_details',
                'b2c_others_item_details.b2c_others_id = b2c_others.b2c_others_id AND b2c_others.b2c_others_id=' . $pk_id,
                'item_details',
                'item_details.item_detail_id = b2c_others_item_details.item_detail_id');
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
                foreach ($item_list as $val) {
                    $idm->where(['item_detail_id' => $val->item_detail_id])->delete();
                }
                $secondaryModel->where([$primaryKey => $pk_Id])->delete();
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
