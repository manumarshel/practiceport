<?php

namespace App\Controllers\Admin\Gstr1;

use App\Controllers\Admin\AdminBaseController;
use App\Libraries\DbFetchnProcess;
use App\Libraries\ItemDetails;
use App\Models\gstr1\ItemDetailsModel;
use App\Models\gstr1\cdnr\CdnrModel;
use App\Models\gstr1\cdnr\CdnrItemDetailsModel;
use Exception;

class CdnrController extends AdminBaseController {

    public function index() {

        helper(['common']);
        $Model = new CdnrModel();
        $data['pos_list'] = get_pos_list();
        $data['question_id'] = $this->request->uri->getSegment(4);
        $data['segment'] = '';
        $data['data_list'] = $Model->select('*')->where(['question_id' => $data['question_id'], 'data_type' => 0])->get()->getResult();
        $data['file_name'] = 'gstr1/cdnr';
        return $this->admin_layout($data);
    }

    public function receiverUpload() {
        helper(['common']);
        $Model = new CdnrModel();
        $data['pos_list'] = get_pos_list();
        $data['question_id'] = $this->request->uri->getSegment(5);
        $data['segment'] = 'receiver-upload';
        $data['data_list'] = $Model->select('*')->where(['question_id' => $data['question_id'], 'data_type' => 1])->get()->getResult();
        $data['file_name'] = 'gstr1/cdnr-receiver-uploded';
        return $this->admin_layout($data);
    }

    public function receiverModified() {
        helper(['common']);
        $Model = new CdnrModel();
        $data['pos_list'] = get_pos_list();
        $data['question_id'] = $this->request->uri->getSegment(5);
        $data['segment'] = 'receiver-modified';
        $data['data_list'] = $Model->select('*')->where(['question_id' => $data['question_id'], 'data_type' => 2])->get()->getResult();
        $data['file_name'] = 'gstr1/cdnr-receiver-modified';
        return $this->admin_layout($data);
    }

    public function receiverRejected() {
        helper(['common']);
        $Model = new CdnrModel();
        $data['pos_list'] = get_pos_list();
        $data['question_id'] = $this->request->uri->getSegment(5);
        $data['segment'] = 'receiver-rejected';
        $data['data_list'] = $Model->select('*')->where(['question_id' => $data['question_id'], 'data_type' => 3])->get()->getResult();
        $data['file_name'] = 'gstr1/cdnr-receiver-rejected';
        return $this->admin_layout($data);
    }

    public function add() {
        helper(['form', 'common']);
        $session = \Config\Services::session();
        $slug = $this->request->uri->getSegment(4);
        $data['question_id'] = $this->request->uri->getSegment(5);
        $data['pk_id'] = intval($this->request->uri->getSegment(6));

        if ($this->request->getMethod() == 'post') {
            $primary_Model = new CdnrModel();
            $question_id = intval($this->request->getPost('question_id'));
            $pk_Id = intval($this->request->getPost('pk_id'));
            $Idm = new CdnrItemDetailsModel();

            if ($slug == 'upload-add') {
                $data_type = 1;
                $path = 'cdnr/receiver-upload/';
            } else if ($slug == 'modified-add') {
                $data_type = 2;
                $path = 'cdnr/receiver-modified/';
            } else if ($slug == 'rejected-add') {
                $data_type = 3;
                $path = 'cdnr/receiver-rejected/';
            } else {
                $data_type = 0;
                $path = 'cdnr/';
            }

            $formData = [
                'is_eligible' => $this->request->getPost('is_eligible'),
                'receiver_gstin' => $this->request->getPost('receiver_gstin'),
                'receiver__name' => $this->request->getPost('receiver__name'),
                'dc_note_no' => $this->request->getPost('dc_note_no'),
                'dc_note_date' => date('Y-m-d', strtotime($this->request->getPost('dc_note_date'))),
                'note_type' => $this->request->getPost('note_type'),
                'note_value' => $this->request->getPost('note_value'),
                'supply_type' => $this->request->getPost('supply_type'),
                'pos' => $this->request->getPost('pos'),
                'data_type' => $data_type,
                'question_id' => $question_id,
            ];
            if ($pk_Id > 0) {
                $result = $this->addDataToDB('9bcdn_id', $formData, $primary_Model, $Idm, $pk_Id);
            } else {
                $result = $this->addDataToDB('9bcdn_id', $formData, $primary_Model, $Idm);
            }

            $session->setFlashdata('success', 'Action has successfully completed');
            return redirect()->to('admin/gstr1/' . $path . $question_id);
        } else {
            if ($slug == 'upload-add') {
                $path = 'cdnr/upload-add';
            } else if ($slug == 'modified-add') {
                $path = 'cdnr/modified-add';
            } else if ($slug == 'rejected-add') {
                $path = 'cdnr/rejected-add';
            } else {
                $path = 'cdnr/add';
            }
            $data['path'] = $path;
            $data['pos_list'] = get_pos_list();
            $data['form_data'] = $this->getFormData($data['question_id'], $data['pk_id']);
            $data['load_css'] = array('vendors/bootstrap-datepicker/bootstrap-datepicker.min.css');
            $data['load_js'] = array('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js', 'vendors/jquery-validation/jquery.validate.min.js', 'js/gstr1/common/form_add_update.js');
            $data['file_name'] = 'gstr1/cdnr-add';
            return $this->admin_layout($data);
        }
    }

    public function remove() {
        if ($this->request->getMethod() == 'post') {
            if ($this->request->getPost('question_id') && $this->request->getPost('pk_id')) {
                $session = \Config\Services::session();
                $question_id = $this->request->getPost('question_id');
                $pk_id = $this->request->getPost('pk_id');
                $primaryModel = new CdnrModel();
                $secondaryModel = new CdnrItemDetailsModel();
                $this->removeData('9bcdn_id', $question_id, $pk_id, $primaryModel, $secondaryModel);
                $session->setFlashdata('success', 'Action has successfully completed');
                $slug = $this->request->uri->getSegment(4);
                if ($slug == 'upload') {
                    $path = 'cdnr/receiver-upload/';
                } else if ($slug == 'modified') {
                    $path = 'cdnr/receiver-modified/';
                } else if ($slug == 'rejected') {
                    $path = 'cdnr/receiver-rejected/';
                } else {
                    $path = 'cdnr/';
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

        $query = $dbProcess->fetchDataWithJoin($question_id, '9b_cd_notes',
                '9bcd_item_details',
                '9bcd_item_details.9bcdn_id = 9b_cd_notes.9bcdn_id AND 9b_cd_notes.9bcdn_id=' . $pk_id,
                'item_details',
                'item_details.item_detail_id = 9bcd_item_details.item_detail_id');
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
