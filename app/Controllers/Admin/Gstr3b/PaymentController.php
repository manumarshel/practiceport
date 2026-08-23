<?php

namespace App\Controllers\Admin\Gstr3b;

use App\Controllers\Admin\AdminBaseController;
use App\Models\gstr3b\payment\PaymentModel;
use Exception;

class PaymentController extends AdminBaseController {


 public function index() {
        helper(['form', 'common']);
        $session = \Config\Services::session();
        $data['question_id'] = $this->request->uri->getSegment(4);
        $primary_Model = new PaymentModel();
        if ($this->request->getMethod() == 'post') {
            $question_id = intval($this->request->getPost('question_id'));
            $pk_Id = intval($this->request->getPost('pk_id'));
            $formData = [
                'tax_cash_integrated_tax' => $this->request->getPost('tax_cash_integrated_tax'),
                'tax_cash_central_tax' => $this->request->getPost('tax_cash_central_tax'),
                'tax_cash_state_tax' => $this->request->getPost('tax_cash_state_tax'),
                'tax_cash_cess' => $this->request->getPost('tax_cash_cess'),
                'tax_cash_total' => $this->request->getPost('tax_cash_total'),
                'tax_credit_integrated_tax' => $this->request->getPost('tax_credit_integrated_tax'),
                'tax_credit_central_tax' => $this->request->getPost('tax_credit_central_tax'),
                'tax_credit_state_tax' => $this->request->getPost('tax_credit_state_tax'),
                'tax_credit_cess' => $this->request->getPost('tax_credit_cess'),
                'tax_credit_total' => $this->request->getPost('tax_credit_total'),
                'interest_cash_integrated_tax' => $this->request->getPost('interest_cash_integrated_tax'),
                'interest_cash_central_tax' => $this->request->getPost('interest_cash_central_tax'),
                'interest_cash_state_tax' => $this->request->getPost('interest_cash_state_tax'),
                'interest_cash_cess' => $this->request->getPost('interest_cash_cess'),
                'interest_cash_total' => $this->request->getPost('interest_cash_total'),
                'interest_credit_integrated_tax' => $this->request->getPost('interest_credit_integrated_tax'),
                'interest_credit_central_tax' => $this->request->getPost('interest_credit_central_tax'),
                'late_fee_cash_central_tax' => $this->request->getPost('late_fee_cash_central_tax'),
                'late_fee_cash_state_tax' => $this->request->getPost('late_fee_cash_state_tax'),
                'late_fee_cash_total' => $this->request->getPost('late_fee_cash_total'),
                'late_fee_credit_integrated_tax' => $this->request->getPost('late_fee_credit_integrated_tax'),
                'late_fee_credit_central_tax' => $this->request->getPost('late_fee_credit_central_tax'),
                'question_id' => $question_id,
            ];
            if ($pk_Id > 0) {
                $primary_Model->update($pk_Id, $formData);
            } else {
                $primary_Model->insert($formData);
            }

            $session->setFlashdata('success', 'Action has successfully completed');
            return redirect()->to('admin/gstr3b/payment/' . $question_id);
        } else {

            $data['form_data'] = (array) $primary_Model->select('*')->where(['question_id' => $data['question_id']])->get()->getRow();
          
            $data['load_js'] = array('vendors/jquery-validation/jquery.validate.min.js', 'js/gstr3b/payment_add_update.js');
            $data['file_name'] = 'gstr3b/payment';
            return $this->admin_layout($data);
        }
    }
}
