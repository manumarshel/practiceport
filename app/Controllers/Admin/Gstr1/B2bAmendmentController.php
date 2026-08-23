<?php

namespace App\Controllers\Admin\Gstr1;

use App\Controllers\Admin\AdminBaseController;
use App\Libraries\DbFetchnProcess;
use App\Libraries\ItemDetails;
use App\Models\gstr1\ItemDetailsModel;
use App\Models\gstr1\b2b_amendment\B2bAmendmentModel;
use App\Models\gstr1\b2b_amendment\B2bAmendmentItemDetailsModel;
use Exception;

class B2bAmendmentController extends AdminBaseController {

    public function index() {

        helper(['common']);
        $Model = new B2bAmendmentModel();
        $data['pos_list'] = get_pos_list();
        $data['question_id'] = $this->request->uri->getSegment(4);
        $data['segment'] = '';
        $data['data_list'] = $Model->select('*')->where(['question_id' => $data['question_id'], 'data_type' => 0])->get()->getResult();
        $data['file_name'] = 'gstr1/b2b-amendment';
        return $this->admin_layout($data);
    }

    public function receiverUpload() {
        helper(['common']);
        $Model = new B2bAmendmentModel();
        $data['pos_list'] = get_pos_list();
        $data['question_id'] = $this->request->uri->getSegment(5);
        $data['segment'] = 'receiver-upload';
        $data['data_list'] = $Model->select('*')->where(['question_id' => $data['question_id'], 'data_type' => 1])->get()->getResult();
        $data['file_name'] = 'gstr1/b2b-amendment-receiver-uploded';
        return $this->admin_layout($data);
    }

    public function receiverModified() {
        helper(['common']);
        $Model = new B2bAmendmentModel();
        $data['pos_list'] = get_pos_list();
        $data['question_id'] = $this->request->uri->getSegment(5);
        $data['segment'] = 'receiver-modified';
        $data['data_list'] = $Model->select('*')->where(['question_id' => $data['question_id'], 'data_type' => 2])->get()->getResult();
        $data['file_name'] = 'gstr1/b2b-amendment-receiver-modified';
        return $this->admin_layout($data);
    }

    public function receiverRejected() {
        helper(['common']);
        $Model = new B2bAmendmentModel();
        $data['pos_list'] = get_pos_list();
        $data['question_id'] = $this->request->uri->getSegment(5);
        $data['segment'] = 'receiver-rejected';
        $data['data_list'] = $Model->select('*')->where(['question_id' => $data['question_id'], 'data_type' => 3])->get()->getResult();
        $data['file_name'] = 'gstr1/b2b-amendment-receiver-rejected';
        return $this->admin_layout($data);
    }

    public function add() {
        helper(['form', 'common']);
        $session = \Config\Services::session();
        $slug = $this->request->uri->getSegment(4);
        $data['question_id'] = $this->request->uri->getSegment(5);
        $data['pk_id'] = intval($this->request->uri->getSegment(6));

        if ($this->request->getMethod() == 'post') {
            $primary_Model = new B2bAmendmentModel();
            $question_id = intval($this->request->getPost('question_id'));
            $pk_Id = intval($this->request->getPost('pk_id'));
            $Idm = new B2bAmendmentItemDetailsModel();

            if ($slug == 'upload-add') {
                $data_type = 1;
                $path = 'b2b-amendment/receiver-upload/';
            } else if ($slug == 'modified-add') {
                $data_type = 2;
                $path = 'b2b-amendment/receiver-modified/';
            } else if ($slug == 'rejected-add') {
                $data_type = 3;
                $path = 'b2b-amendment/receiver-rejected/';
            } else {
                $data_type = 0;
                $path = 'b2b-amendment/';
            }

            $formData = [
                'eligible_to_taxed' => ($this->request->getPost('eligible_to_taxed') == 'on') ? 1 : 0,
                'is_igst' => ($this->request->getPost('is_igst') == 'on') ? 1 : 0,
                'receiver_gstin' => $this->request->getPost('receiver_gstin'),
                'receiver__name' => $this->request->getPost('receiver__name'),
                'invoice_no' => $this->request->getPost('invoice_no'),
                'invoice_date' => date('Y-m-d', strtotime($this->request->getPost('invoice_date'))),
                'reviced_invoice_no' => $this->request->getPost('reviced_invoice_no'),
                'reviced_invoice_date' =>  date('Y-m-d', strtotime($this->request->getPost('reviced_invoice_date'))),
                'supply_type' => $this->request->getPost('supply_type'),
                'pos' => $this->request->getPost('pos'),
                'total_invoice_value' => $this->request->getPost('total_invoice_value'),
                'data_type' => $data_type,
                'financial_year' => $this->request->getPost('financial_year'),
                'original_invoice_number' => $this->request->getPost('original_invoice_number'),
                'question_id' => $question_id,
            ];
            if ($pk_Id > 0) {
                $result = $this->addDataToDB('9a_b2b_id', $formData, $primary_Model, $Idm, $pk_Id);
            } else {
                $result = $this->addDataToDB('9a_b2b_id', $formData, $primary_Model, $Idm);
            }

            $session->setFlashdata('success', 'Action has successfully completed');
            return redirect()->to('admin/gstr1/' . $path . $question_id);
        } else {
            if ($slug == 'upload-add') {
                $path = 'b2b-amendment/upload-add';
            } else if ($slug == 'modified-add') {
                $path = 'b2b-amendment/modified-add';
            } else if ($slug == 'rejected-add') {
                $path = 'b2b-amendment/rejected-add';
            } else {
                $path = 'b2b-amendment/add';
            }
            $data['path'] = $path;
            $data['pos_list'] = get_pos_list();
            $data['form_data'] = $this->getFormData($data['question_id'], $data['pk_id']);
            $data['load_css'] = array('vendors/bootstrap-datepicker/bootstrap-datepicker.min.css');
            $data['load_js'] = array('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js', 'vendors/jquery-validation/jquery.validate.min.js', 'js/gstr1/common/form_add_update.js');
            $data['file_name'] = 'gstr1/b2b-amendment-add';
            return $this->admin_layout($data);
        }
    }

    public function remove() {
        if ($this->request->getMethod() == 'post') {
            if ($this->request->getPost('question_id') && $this->request->getPost('pk_id')) {
                $session = \Config\Services::session();
                $question_id = $this->request->getPost('question_id');
                $pk_id = $this->request->getPost('pk_id');
                $primaryModel = new B2bAmendmentModel();
                $secondaryModel = new B2bAmendmentItemDetailsModel();
                $this->removeData('9a_b2b_id', $question_id, $pk_id, $primaryModel, $secondaryModel);
                $session->setFlashdata('success', 'Action has successfully completed');
                $slug = $this->request->uri->getSegment(4);
                if ($slug == 'upload') {
                    $path = 'b2b-amendment/receiver-upload/';
                } else if ($slug == 'modified') {
                    $path = 'b2b-amendment/receiver-modified/';
                } else if ($slug == 'rejected') {
                    $path = 'b2b-amendment/receiver-rejected/';
                } else {
                    $path = 'b2b-amendment/';
                }

                return redirect()->to('admin/gstr1/' . $path . $question_id);
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

        $query = $dbProcess->fetchDataWithJoin($question_id, '9a_b2b_invoice',
                '9a_b2b_invoice_item_details',
                '9a_b2b_invoice_item_details.9a_b2b_id = 9a_b2b_invoice.9a_b2b_id AND 9a_b2b_invoice.9a_b2b_id=' . $pk_id,
                'item_details',
                'item_details.item_detail_id = 9a_b2b_invoice_item_details.item_detail_id');
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
