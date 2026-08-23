<?php

namespace App\Controllers\Admin\Gstr3b;

use App\Controllers\Admin\AdminBaseController;
use App\Models\gstr3b\eligible_itc\EligibleItcModel;
use Exception;

class EligibleITCController extends AdminBaseController {

    public function index() {
        helper(['form', 'common']);
        $session = \Config\Services::session();
        $data['question_id'] = $this->request->uri->getSegment(4);
        $primary_Model = new EligibleItcModel();
        if ($this->request->getMethod() == 'post') {
            $question_id = intval($this->request->getPost('question_id'));
            $pk_Id = intval($this->request->getPost('pk_id'));
            $formData = [
                'available_import_goods_integrated_tax' => $this->request->getPost('available_import_goods_integrated_tax'),
                'available_import_goods_cess' => $this->request->getPost('available_import_goods_cess'),
                'available_import_services_integrated_tax' => $this->request->getPost('available_import_services_integrated_tax'),
                'available_import_services_cess' => $this->request->getPost('available_import_services_cess'),
                'available_reverse_integrated_tax' => $this->request->getPost('available_reverse_integrated_tax'),
                'available_reverse_central_tax' => $this->request->getPost('available_reverse_central_tax'),
                'available_reverse_state_tax' => $this->request->getPost('available_reverse_state_tax'),
                'available_reverse_cess' => $this->request->getPost('available_reverse_cess'),
                'available_isd_integrated_tax' => $this->request->getPost('available_isd_integrated_tax'),
                'available_isd_central_tax' => $this->request->getPost('available_isd_central_tax'),
                'available_isd_state_tax' => $this->request->getPost('available_isd_state_tax'),
                'available_isd_cess' => $this->request->getPost('available_isd_cess'),
                'available_itc_integrated_tax' => $this->request->getPost('available_itc_integrated_tax'),
                'available_itc_central_tax' => $this->request->getPost('available_itc_central_tax'),
                'available_itc_state_tax' => $this->request->getPost('available_itc_state_tax'),
                'available_itc_cess' => $this->request->getPost('available_itc_cess'),
                'itc_rules_integrated_tax' => $this->request->getPost('itc_rules_integrated_tax'),
                'itc_rules_central_tax' => $this->request->getPost('itc_rules_central_tax'),
                'itc_rules_statet_tax' => $this->request->getPost('itc_rules_statet_tax'),
                'itc_rules_cess' => $this->request->getPost('itc_rules_cess'),
                'itc_others_integrated_tax' => $this->request->getPost('itc_others_integrated_tax'),
                'itc_others_central_tax' => $this->request->getPost('itc_others_central_tax'),
                'itc_others_state_tax' => $this->request->getPost('itc_others_state_tax'),
                'itc_others_cess' => $this->request->getPost('itc_others_cess'),
                'itc_available_ab_integrated_tax' => $this->request->getPost('itc_available_ab_integrated_tax'),
                'itc_available_ab_central_tax' => $this->request->getPost('itc_available_ab_central_tax'),
                'itc_available_ab_state_tax' => $this->request->getPost('itc_available_ab_state_tax'),
                'itc_available_ab_cess' => $this->request->getPost('itc_available_ab_cess'),
                'IneligIble_itc_sec17_integrated_tax' => $this->request->getPost('IneligIble_itc_sec17_integrated_tax'),
                'IneligIble_itc_sec17_central_tax' => $this->request->getPost('IneligIble_itc_sec17_central_tax'),
                'IneligIble_itc_sec17_state_tax' => $this->request->getPost('IneligIble_itc_sec17_state_tax'),
                'IneligIble_itc_sec17_cess' => $this->request->getPost('IneligIble_itc_sec17_cess'),
                'IneligIble_itc_others_integrated_tax' => $this->request->getPost('IneligIble_itc_others_integrated_tax'),
                'IneligIble_itc_others_central_tax' => $this->request->getPost('IneligIble_itc_others_central_tax'),
                'IneligIble_itc_others_state_tax' => $this->request->getPost('IneligIble_itc_others_state_tax'),
                'IneligIble_itc_others_cess' => $this->request->getPost('IneligIble_itc_others_cess'),
                'question_id' => $question_id,
            ];
            if ($pk_Id > 0) {
                $primary_Model->update($pk_Id, $formData);
            } else {
                $primary_Model->insert($formData);
            }

            $session->setFlashdata('success', 'Action has successfully completed');
            return redirect()->to('admin/gstr3b/eligible-itc/' . $question_id);
        } else {

            $data['form_data'] = (array) $primary_Model->select('*')->where(['question_id' => $data['question_id']])->get()->getRow();
          
            $data['load_js'] = array('vendors/jquery-validation/jquery.validate.min.js', 'js/gstr3b/eligible_itc_add_update.js');
            $data['file_name'] = 'gstr3b/eligible-ITC';
            return $this->admin_layout($data);
        }
    }

}
