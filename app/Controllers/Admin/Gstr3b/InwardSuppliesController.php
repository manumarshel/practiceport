<?php

namespace App\Controllers\Admin\Gstr3b;

use App\Controllers\Admin\AdminBaseController;
use App\Models\gstr3b\inward_supplies\InwardsuppliesModel;
use Exception;

class InwardSuppliesController extends AdminBaseController {

    public function index() {
        helper(['form', 'common']);
        $session = \Config\Services::session();
        $data['question_id'] = $this->request->uri->getSegment(4);
        $primary_Model = new InwardsuppliesModel();
        if ($this->request->getMethod() == 'post') {
            $question_id = intval($this->request->getPost('question_id'));
            $pk_Id = intval($this->request->getPost('pk_id'));
            $formData = [
                'composition_inter_state' => $this->request->getPost('composition_inter_state'),
                'composition_intra_state' => $this->request->getPost('composition_intra_state'),
                'nongst_inter_state' => $this->request->getPost('nongst_inter_state'),
                'nongst_intra_state' => $this->request->getPost('nongst_intra_state'),
                'question_id' => $question_id,
            ];
            if ($pk_Id > 0) {
                $primary_Model->update($pk_Id, $formData);
            } else {
                $primary_Model->insert($formData);
            }

            $session->setFlashdata('success', 'Action has successfully completed');
            return redirect()->to('admin/gstr3b/inward-supplies/' . $question_id);
        } else {

            $data['form_data'] = (array) $primary_Model->select('*')->where(['question_id' => $data['question_id']])->get()->getRow();
          
            $data['load_js'] = array('vendors/jquery-validation/jquery.validate.min.js', 'js/gstr3b/common/form_add_update.js');
            $data['file_name'] = 'gstr3b/inward-supplies';
            return $this->admin_layout($data);
        }
    }

}
