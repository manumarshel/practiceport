<?php

namespace App\Controllers\Admin\Gstr1;

use App\Controllers\Admin\AdminBaseController;
use App\Models\gstr1\hsn\HsnModel;
use Exception;

class HsnController extends AdminBaseController {

    public function index() {
        helper(['common']);
        $Model = new HsnModel();
        $data['pos_list'] = get_pos_list();
        $data['question_id'] = $this->request->uri->getSegment(4);
        $data['segment'] = '';
        $data['data_list'] = $Model->select('*')->where(['question_id' => $data['question_id']])->get()->getResult();
        $data['file_name'] = 'gstr1/hsn';
        return $this->admin_layout($data);
    }

    public function add() {
        helper(['form', 'common']);
        $session = \Config\Services::session();
        $data['question_id'] = $this->request->uri->getSegment(5);
        $data['pk_id'] = intval($this->request->uri->getSegment(6));
        $primary_Model = new HsnModel();
        if ($this->request->getMethod() == 'post') {
            $question_id = intval($this->request->getPost('question_id'));
            $pk_Id = intval($this->request->getPost('pk_id'));
            $formData = [
                'hsn' => $this->request->getPost('hsn'),
                'description' => $this->request->getPost('description'),
                'uqc' => $this->request->getPost('uqc'),
                'total_quantity' => $this->request->getPost('total_quantity'),
                'total_taxable_value' => $this->request->getPost('total_taxable_value'),
                'rate' => $this->request->getPost('rate'),
                'integrated_tax' => $this->request->getPost('integrated_tax'),
                'central_tax' => $this->request->getPost('central_tax'),
                'state_tax' => $this->request->getPost('state_tax'),
                'cess' => $this->request->getPost('cess'),
                'question_id' => $question_id,
            ];
            if ($pk_Id > 0) {
                $primary_Model->update($pk_Id,$formData);
            } else {
                $primary_Model->insert($formData);
            }

            $session->setFlashdata('success', 'Action has successfully completed');
            return redirect()->to('admin/gstr1/hsn/' . $question_id);
        } else {
            if ($data['pk_id'] > 0) {
                $data['form_data'] = $primary_Model->select('*')->where(['question_id' => $data['question_id'], 'hsn_id' => $data['pk_id']])->get()->getRow();
            } else {
                $data['form_data'] = array();
            }

            // $data['load_css'] = array('vendors/bootstrap-datepicker/bootstrap-datepicker.min.css');
            $data['load_js'] = array('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js', 'vendors/jquery-validation/jquery.validate.min.js', 'js/gstr1/common/form_add_update.js');
            $data['file_name'] = 'gstr1/hsn-add';
            return $this->admin_layout($data);
        }
    }

    public function remove() {
        if ($this->request->getMethod() == 'post') {
            if ($this->request->getPost('question_id') && $this->request->getPost('pk_id')) {
                $session = \Config\Services::session();
                $question_id = $this->request->getPost('question_id');
                $pk_id = $this->request->getPost('pk_id');
                $primaryModel = new HsnModel();
                $primaryModel->where(['hsn_id' => $pk_id, 'question_id' => $question_id])->delete();
                $session->setFlashdata('success', 'Action has successfully completed');
                return redirect()->to('admin/gstr1/hsn/' . $question_id);
            }
        }
        return redirect()->to('admin/gstr1');
    }

}
