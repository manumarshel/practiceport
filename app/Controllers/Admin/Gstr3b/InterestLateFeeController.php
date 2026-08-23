<?php

namespace App\Controllers\Admin\Gstr3b;

use App\Controllers\Admin\AdminBaseController;
use App\Models\gstr3b\interest_late_fee\InterestFeeModel;
use Exception;

class InterestLateFeeController extends AdminBaseController {

    public function index() {
        helper(['form', 'common']);
        $session = \Config\Services::session();
        $data['question_id'] = $this->request->uri->getSegment(4);
        $primary_Model = new InterestFeeModel();
        if ($this->request->getMethod() == 'post') {
            $question_id = intval($this->request->getPost('question_id'));
            $pk_Id = intval($this->request->getPost('pk_id'));
            $formData = [
                'interest_integrated' => $this->request->getPost('interest_integrated'),
                'interest_central' => $this->request->getPost('interest_central'),
                'interest_state' => $this->request->getPost('interest_state'),
                'interest_cess' => 0,//$this->request->getPost('interest_cess'),
                'late_fee_integrated' => $this->request->getPost('late_fee_integrated'),
                'late_fee_central' => $this->request->getPost('late_fee_central'),
                'late_fee_state' => $this->request->getPost('late_fee_state'),
                'late_fee_cess' => 0,//$this->request->getPost('late_fee_cess'),
                'question_id' => $question_id,
            ];
            if ($pk_Id > 0) {
                $primary_Model->update($pk_Id, $formData);
            } else {
                $primary_Model->insert($formData);
            }

            $session->setFlashdata('success', 'Action has successfully completed');
            return redirect()->to('admin/gstr3b/insterest-late-fee/' . $question_id);
        } else {

            $data['form_data'] = (array) $primary_Model->select('*')->where(['question_id' => $data['question_id']])->get()->getRow();

            $data['load_js'] = array('vendors/jquery-validation/jquery.validate.min.js', 'js/gstr3b/common/form_add_update.js');
            $data['file_name'] = 'gstr3b/interestLateFee';
            return $this->admin_layout($data);
        }
    }

}
