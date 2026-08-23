<?php

namespace App\Controllers\Admin\Gstr3b;

use App\Controllers\Admin\AdminBaseController;
use App\Models\gstr3b\iosup\IosupModel;
use Exception;

class IosupController extends AdminBaseController {

    public function index() {
        helper(['form', 'common']);
        $session = \Config\Services::session();
        $data['question_id'] = $this->request->uri->getSegment(4);
        $primary_Model = new IosupModel();
        if ($this->request->getMethod() == 'post') {
            $question_id = intval($this->request->getPost('question_id'));
            $pk_Id = intval($this->request->getPost('pk_id'));
            $formData = [
                'outward_tax_non_zero_taxable_value' => $this->request->getPost('outward_tax_non_zero_taxable_value'),
                'outward_tax_non_zero_integrated_tax' => $this->request->getPost('outward_tax_non_zero_integrated_tax'),
                'outward_tax_non_zero_central_tax' => $this->request->getPost('outward_tax_non_zero_central_tax'),
                'outward_tax_non_zero_state_tax' => $this->request->getPost('outward_tax_non_zero_state_tax'),
                'outward_tax_non_zero_cess' => $this->request->getPost('outward_tax_non_zero_cess'),
                'outward_tax_zero_taxable_value' => $this->request->getPost('outward_tax_zero_taxable_value'),
                'outward_tax_zero_integrated_tax' => $this->request->getPost('outward_tax_zero_integrated_tax'),
                'outward_tax_zero_cess' => $this->request->getPost('outward_tax_zero_cess'),
                'other_outward_nill_taxable_value' => $this->request->getPost('other_outward_nill_taxable_value'),
                'inward_supplies_reverse_charges_taxable_value' => $this->request->getPost('inward_supplies_reverse_charges_taxable_value'),
                'inward_supplies_reverse_charges_intetrated_tax' => $this->request->getPost('inward_supplies_reverse_charges_intetrated_tax'),
                'inward_supplies_reverse_charges_central_tax' => $this->request->getPost('inward_supplies_reverse_charges_central_tax'),
                'inward_supplies_reverse_charges_state_tax' => $this->request->getPost('inward_supplies_reverse_charges_state_tax'),
                'inward_supplies_reverse_charges_cess' => $this->request->getPost('inward_supplies_reverse_charges_cess'),
                'non_gst_outward_taxable_value' => $this->request->getPost('non_gst_outward_taxable_value'),
                'question_id' => $question_id,
            ];
            if ($pk_Id > 0) {
                $primary_Model->update($pk_Id, $formData);
            } else {
                $primary_Model->insert($formData);
            }

            $session->setFlashdata('success', 'Action has successfully completed');
            return redirect()->to('admin/gstr3b/iosup/' . $question_id);
        } else {

            $data['form_data'] = (array) $primary_Model->select('*')->where(['question_id' => $data['question_id']])->get()->getRow();

            $data['load_js'] = array('vendors/jquery-validation/jquery.validate.min.js', 'js/gstr3b/common/form_add_update.js');
            $data['file_name'] = 'gstr3b/iosup';
            return $this->admin_layout($data);
        }
    }

}
