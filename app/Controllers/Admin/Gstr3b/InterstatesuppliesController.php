<?php

namespace App\Controllers\Admin\Gstr3b;

use App\Controllers\Admin\AdminBaseController;
use App\Models\gstr3b\interstatesupplies\InterStateSuppliesModel;
use Exception;

class InterstatesuppliesController extends AdminBaseController {

    public function index() {
        helper(['form', 'common']);
        $session = \Config\Services::session();
        $data['question_id'] = $this->request->uri->getSegment(4);
        $primary_Model = new InterStateSuppliesModel();
        if ($this->request->getMethod() == 'post') {
            $question_id = intval($this->request->getPost('question_id'));

            for ($i = 0; $i <= 10; $i++) {
                $this->insertData($i, 0);
                $this->insertData($i, 1);
                $this->insertData($i, 2);
            }

            $session->setFlashdata('success', 'Action has successfully completed');
            return redirect()->to('admin/gstr3b/inter-statement-supplies/' . $question_id);
        } else {
            $data['pos_list'] = get_pos_list();
            $data['form_data_0'] = (array) $primary_Model->select('*')->where(['question_id' => $data['question_id'],'data_type' =>0])->get()->getResult('array');
            $data['form_data_1'] = (array) $primary_Model->select('*')->where(['question_id' => $data['question_id'],'data_type' =>1])->get()->getResult('array');
            $data['form_data_2'] = (array) $primary_Model->select('*')->where(['question_id' => $data['question_id'],'data_type' =>2])->get()->getResult('array');
            //     $data['load_js'] = array('vendors/jquery-validation/jquery.validate.min.js', 'js/gstr3b/payment_add_update.js');
            $data['file_name'] = 'gstr3b/interstatesupplies';

//            echo "<pre>";
//
//            var_dump($data['form_data_0']);
//            echo "</pre>";
//            exit;
            return $this->admin_layout($data);
        }
    }

    private function insertData($i, $data_type) {
        $question_id = intval($this->request->getPost('question_id'));
        $primary_Model = new InterStateSuppliesModel();
        $pk_Id = intval($this->request->getPost('pk_id_' . $data_type . '_' . $i));
        $formData = [
            'place_of_supply' => ($this->request->getPost('place_of_supply_' . $data_type . '_' . $i)) ? $this->request->getPost('place_of_supply_' . $data_type . '_' . $i) : '',
            'total_taxable_value' => ($this->request->getPost('total_taxable_value_' . $data_type . '_' . $i)) ? $this->request->getPost('total_taxable_value_' . $data_type . '_' . $i) : '',
            'amount_of_integrated_tax' => ($this->request->getPost('amount_of_integrated_tax_' . $data_type . '_' . $i)) ? $this->request->getPost('amount_of_integrated_tax_' . $data_type . '_' . $i) : '',
            'data_type' => $data_type,
            'question_id' => $question_id,
        ];

        if ($pk_Id > 0) {
            $primary_Model->update($pk_Id, $formData);
        } else {
            $primary_Model->insert($formData);
        }
        return;
    }

}
