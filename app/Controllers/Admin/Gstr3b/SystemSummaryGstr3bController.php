<?php

namespace App\Controllers\Admin\Gstr3b;

use App\Controllers\Admin\AdminBaseController;
use App\Models\gstr3b\system_summary\SystemsummaryModel;
use Exception;

class SystemSummaryGstr3bController extends AdminBaseController {

    public function index() {
        helper(['form', 'common']);
        $session = \Config\Services::session();
        $data['question_id'] = $this->request->uri->getSegment(4);
        $primary_Model = new SystemsummaryModel();
        if ($this->request->getMethod() == 'post') {
            $question_id = intval($this->request->getPost('question_id'));
            $pk_Id = intval($this->request->getPost('pk_id'));
            $formData = [
                'liability_gstr1_form_status' => $this->request->getPost('liability_gstr1_form_status'),
                'liability_gstr1_summary_status' => $this->request->getPost('liability_gstr1_summary_status'),
                'reverse_gstr2b_form_status' => $this->request->getPost('reverse_gstr2b_form_status'),
                'reverse_gstr2b_summary_status' => $this->request->getPost('reverse_gstr2b_summary_status'),
                'tax_credit_gstr2b_form_status' => $this->request->getPost('tax_credit_gstr2b_form_status'),
                'tax_credit_gstr2b_summary_status' => $this->request->getPost('tax_credit_gstr2b_summary_status'),
                'question_id' => $question_id,
            ];
            if ($pk_Id > 0) {
                $primary_Model->update($pk_Id, $formData);
            } else {
                $primary_Model->insert($formData);
            }

            $session->setFlashdata('success', 'Action has successfully completed');
            return redirect()->to('admin/gstr3b/system-summary/' . $question_id);
        } else {

            $data['form_data'] = (array) $primary_Model->select('*')->where(['question_id' => $data['question_id']])->get()->getRow();
            $data['file_name'] = 'gstr3b/system-summary-gstr3b';
            return $this->admin_layout($data);
        }
    }

}
