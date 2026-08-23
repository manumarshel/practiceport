<?php

namespace App\Controllers\Admin\Gstr3b;

use App\Controllers\Admin\AdminBaseController;
use App\Models\gstr3b\payment2\Payment2Model;
use Exception;

class Payment2Controller extends AdminBaseController {

    public function index() {
        helper(['form', 'common']);
        $session = \Config\Services::session();
        $data['question_id'] = $this->request->uri->getSegment(4);
        $primary_Model = new Payment2Model();
        if ($this->request->getMethod() == 'post') {
            $question_id = intval($this->request->getPost('question_id'));
            $pk_Id = intval($this->request->getPost('pk_id'));
            $formData = [
                'integrated_other_reverse_payable' => $this->request->getPost('integrated_other_reverse_payable'),
                'integrated_itc_integrated_tax' => $this->request->getPost('integrated_itc_integrated_tax'),
                'integrated_itc_central_tax' => $this->request->getPost('integrated_itc_central_tax'),
                'integrated_itc_state' => $this->request->getPost('integrated_itc_state'),
                'integrated_other_reverse_paid_cash' => $this->request->getPost('integrated_other_reverse_paid_cash'),
                'integrated_reverse_payable' => $this->request->getPost('integrated_reverse_payable'),
                'integrated_reverse_paid_cash' => $this->request->getPost('integrated_reverse_paid_cash'),
                'integrated_interest_payable' => $this->request->getPost('integrated_interest_payable'),
                'integrated_interest_paid_cash' => $this->request->getPost('integrated_interest_paid_cash'),
                'integrated_utilize_cash_balance' => $this->request->getPost('integrated_utilize_cash_balance'),
                'integrated_additional_cash_required' => $this->request->getPost('integrated_additional_cash_required'),
                'central_other_reverse_payable' => $this->request->getPost('central_other_reverse_payable'),
                'central_itc_integrated_tax' => $this->request->getPost('central_itc_integrated_tax'),
                'central_itc_central_tax' => $this->request->getPost('central_itc_central_tax'),
                'central_other_reverse_paid_cash' => $this->request->getPost('central_other_reverse_paid_cash'),
                'central_reverse_payable' => $this->request->getPost('central_reverse_payable'),
                'central_reverse_paid_cash' => $this->request->getPost('central_reverse_paid_cash'),
                'central_interest_payable' => $this->request->getPost('central_interest_payable'),
                'central_interest_paid_cash' => $this->request->getPost('central_interest_paid_cash'),
                'central_late_fee_payable' => $this->request->getPost('central_late_fee_payable'),
                'central_late_fee_paid_cash' => $this->request->getPost('central_late_fee_paid_cash'),
                'central_utilize_cash_balance' => $this->request->getPost('central_utilize_cash_balance'),
                'central_additional_cash_required' => $this->request->getPost('central_additional_cash_required'),
                'state_other_reverse_payable' => $this->request->getPost('state_other_reverse_payable'),
                'state_itc_integrated_tax' => $this->request->getPost('state_itc_integrated_tax'),
                'state_itc_state_tax' => $this->request->getPost('state_itc_state_tax'),
                'state_other_reverse_paid_cash' => $this->request->getPost('state_other_reverse_paid_cash'),
                'state_reverse_payable' => $this->request->getPost('state_reverse_payable'),
                'state_reverse_paid_cash' => $this->request->getPost('state_reverse_paid_cash'),
                'state_interest_payable' => $this->request->getPost('state_interest_payable'),
                'state_interest_paid_cash' => $this->request->getPost('state_interest_paid_cash'),
                'state_interest_payable' => $this->request->getPost('state_interest_payable'),
                'state_interest_paid_cash' => $this->request->getPost('state_interest_paid_cash'),
                'state_late_fee_payable' => $this->request->getPost('state_late_fee_payable'),
                'state_late_fee_paid_cash' => $this->request->getPost('state_late_fee_paid_cash'),
                'state_utilize_cash_balance' => $this->request->getPost('state_utilize_cash_balance'),
                'state_additional_cash_required' => $this->request->getPost('state_additional_cash_required'),
                'cess_other_reverse_payable' => $this->request->getPost('cess_other_reverse_payable'),
                'cess_itc_cess' => $this->request->getPost('cess_itc_cess'),
                'cess_other_reverse_paid_cash' => $this->request->getPost('cess_other_reverse_paid_cash'),
                'cess_reverse_payable' => $this->request->getPost('cess_reverse_payable'),
                'cess_reverse_paid_cash' => $this->request->getPost('cess_reverse_paid_cash'),
                'cess_interest_payable' => $this->request->getPost('cess_interest_payable'),
                'cess_interest_paid_cash' => $this->request->getPost('cess_interest_paid_cash'),
                'cess_utilize_cash_balance' => $this->request->getPost('cess_utilize_cash_balance'),
                'cess_additional_cash_required' => $this->request->getPost('cess_additional_cash_required'),
                'question_id' => $question_id,
            ];
            if ($pk_Id > 0) {
                $primary_Model->update($pk_Id, $formData);
            } else {
                $primary_Model->insert($formData);
            }

            $session->setFlashdata('success', 'Action has successfully completed');
            return redirect()->to('admin/gstr3b/payment2/' . $question_id);
        } else {

            $data['form_data'] = (array) $primary_Model->select('*')->where(['question_id' => $data['question_id']])->get()->getRow();

            $data['load_js'] = array('vendors/jquery-validation/jquery.validate.min.js', 'js/gstr3b/payment2_add_update.js');
            $data['file_name'] = 'gstr3b/payment2';
            return $this->admin_layout($data);
        }
    }

}
