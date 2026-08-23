<?php

namespace App\Controllers\Admin\Gstr1;

use App\Controllers\Admin\AdminBaseController;
use App\Models\gstr1\nil_rated\NilModel;
use Exception;

class NilRatedController extends AdminBaseController {

    public function index() {
        helper(['form', 'common']);
        $session = \Config\Services::session();
        $data['question_id'] = $this->request->uri->getSegment(4);
        $data['pk_id'] = 0;
        $primary_Model = new NilModel();
        if ($this->request->getMethod() == 'post') {
            $question_id = intval($this->request->getPost('question_id'));
            $pk_Id = intval($this->request->getPost('pk_id'));
            $formData = [
                'inter_reg_nill_rated_supplies' => $this->request->getPost('inter_reg_nill_rated_supplies'),
                'inter_reg_exempted' => $this->request->getPost('inter_reg_exempted'),
                'inter_reg_non_gst_supplies' => $this->request->getPost('inter_reg_non_gst_supplies'),
                'inter_unreg_nill_rated_supplies' => $this->request->getPost('inter_unreg_nill_rated_supplies'),
                'inter_unreg_exempted' => $this->request->getPost('inter_unreg_exempted'),
                'inter_unreg_non_gst_supplies' => $this->request->getPost('inter_unreg_non_gst_supplies'),
                'intra_reg_nill_rated_supplies' => $this->request->getPost('intra_reg_nill_rated_supplies'),
                'intra_reg_exempted' => $this->request->getPost('intra_reg_exempted'),
                'intra_reg_non_gst_supplies' => $this->request->getPost('intra_reg_non_gst_supplies'),
                'intra_unreg_nill_rated_supplies' => $this->request->getPost('intra_unreg_nill_rated_supplies'),
                'intra_unreg_exempted' => $this->request->getPost('intra_unreg_exempted'),
                'intra_unreg_non_gst_supplies' => $this->request->getPost('intra_unreg_non_gst_supplies'),
                'question_id' => $question_id,
            ];
            if ($pk_Id > 0) {
                $primary_Model->update($pk_Id, $formData);
            } else {
                $primary_Model->insert($formData);
            }

            $session->setFlashdata('success', 'Action has successfully completed');
            return redirect()->to('admin/gstr1/nil-rated/' . $question_id);
        } else {

            $data['form_data'] = (array) $primary_Model->select('*')->where(['question_id' => $data['question_id']])->get()->getRow();
            if (!empty($data['form_data'])) {
                $v = (array) $data['form_data'];
                $data['pk_id'] = $v['8baced_detail_id'];
            }

            $data['load_js'] = array( 'vendors/jquery-validation/jquery.validate.min.js', 'js/gstr1/nil_rated_add_update.js');
            $data['file_name'] = 'gstr1/nil-rated';
            return $this->admin_layout($data);
        }
    }

}
