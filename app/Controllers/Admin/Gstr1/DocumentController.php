<?php

namespace App\Controllers\Admin\Gstr1;

use App\Controllers\Admin\AdminBaseController;
use App\Models\gstr1\documents_issues\documents_issues;
use Exception;

class DocumentController extends AdminBaseController {

    public function index() {
        helper(['form', 'common']);
        $session = \Config\Services::session();
        $data['question_id'] = $this->request->uri->getSegment(4);
//        $data['pk_id'] = 0;
        $primary_Model = new documents_issues();
        if ($this->request->getMethod() == 'post') {
            $question_id = intval($this->request->getPost('question_id'));

            for ($i = 0; $i <= 5; $i++) {
                $formData1 = [
                    'doc_no' => ($this->request->getPost('type1_no' . $i)) ? $this->request->getPost('type1_no' . $i) : '',
                    'doc_from' => ($this->request->getPost('type1_from' . $i)) ? $this->request->getPost('type1_from' . $i) : '',
                    'doc_to' => ($this->request->getPost('type1_to' . $i)) ? $this->request->getPost('type1_to' . $i) : '',
                    'total_number' => ($this->request->getPost('type1_total_number' . $i)) ? $this->request->getPost('type1_total_number' . $i) : null,
                    'cancelled' => ($this->request->getPost('type1_cancelled' . $i)) ? $this->request->getPost('type1_cancelled' . $i) : null,
                    'net_issues' => ($this->request->getPost('type1_net_issues' . $i)) ? $this->request->getPost('type1_net_issues' . $i) : null,
                    'question_id' => $question_id,
                    'data_type' => 1
                ];

                $type1_pk_Id = intval($this->request->getPost('type1_pk_id' . $i));

                if ($type1_pk_Id > 0) {
                    $primary_Model->update($type1_pk_Id, $formData1);
                } else {
                    $primary_Model->insert($formData1);
                }
                $formData2 = [
                    'doc_no' => ($this->request->getPost('type2_no' . $i)) ? $this->request->getPost('type2_no' . $i) : '',
                    'doc_from' => ($this->request->getPost('type2_from' . $i)) ? $this->request->getPost('type2_from' . $i) : '',
                    'doc_to' => ($this->request->getPost('type2_to' . $i)) ? $this->request->getPost('type2_to' . $i) : '',
                    'total_number' => ($this->request->getPost('type2_total_number' . $i)) ? $this->request->getPost('type2_total_number' . $i) : null,
                    'cancelled' => ($this->request->getPost('type2_cancelled' . $i)) ? $this->request->getPost('type2_cancelled' . $i) : null,
                    'net_issues' => ($this->request->getPost('type2_net_issues' . $i)) ? $this->request->getPost('type2_net_issues' . $i) : null,
                    'question_id' => $question_id,
                    'data_type' => 2
                ];
                $type2_pk_Id = intval($this->request->getPost('type2_pk_id' . $i));
                if ($type2_pk_Id > 0) {
                    $primary_Model->update($type2_pk_Id, $formData2);
                } else {
                    $primary_Model->insert($formData2);
                }
                $formData3 = [
                    'doc_no' => ($this->request->getPost('type3_no' . $i)) ? $this->request->getPost('type3_no' . $i) : '',
                    'doc_from' => ($this->request->getPost('type3_from' . $i)) ? $this->request->getPost('type3_from' . $i) : '',
                    'doc_to' => ($this->request->getPost('type3_to' . $i)) ? $this->request->getPost('type3_to' . $i) : '',
                    'total_number' => ($this->request->getPost('type3_total_number' . $i)) ? $this->request->getPost('type3_total_number' . $i) : null,
                    'cancelled' => ($this->request->getPost('type3_cancelled' . $i)) ? $this->request->getPost('type3_cancelled' . $i) : null,
                    'net_issues' => ($this->request->getPost('type3_net_issues' . $i)) ? $this->request->getPost('type3_net_issues' . $i) : null,
                    'question_id' => $question_id,
                    'data_type' => 3
                ];
                $type3_pk_Id = intval($this->request->getPost('type3_pk_id' . $i));
                if ($type3_pk_Id > 0) {
                    $primary_Model->update($type3_pk_Id, $formData3);
                } else {
                    $primary_Model->insert($formData3);
                }
                $formData4 = [
                    'doc_no' => ($this->request->getPost('type4_no' . $i)) ? $this->request->getPost('type4_no' . $i) : '',
                    'doc_from' => ($this->request->getPost('type4_from' . $i)) ? $this->request->getPost('type4_from' . $i) : '',
                    'doc_to' => ($this->request->getPost('type4_to' . $i)) ? $this->request->getPost('type4_to' . $i) : '',
                    'total_number' => ($this->request->getPost('type4_total_number' . $i)) ? $this->request->getPost('type4_total_number' . $i) : null,
                    'cancelled' => ($this->request->getPost('type4_cancelled' . $i)) ? $this->request->getPost('type4_cancelled' . $i) : null,
                    'net_issues' => ($this->request->getPost('type4_net_issues' . $i)) ? $this->request->getPost('type4_net_issues' . $i) : null,
                    'question_id' => $question_id,
                    'data_type' => 4
                ];
                $type4_pk_Id = intval($this->request->getPost('type4_pk_id' . $i));
                if ($type4_pk_Id > 0) {
                    $primary_Model->update($type4_pk_Id, $formData4);
                } else {
                    $primary_Model->insert($formData4);
                }


                $formData5 = [
                    'doc_no' => ($this->request->getPost('type5_no' . $i)) ? $this->request->getPost('type5_no' . $i) : '',
                    'doc_from' => ($this->request->getPost('type5_from' . $i)) ? $this->request->getPost('type5_from' . $i) : '',
                    'doc_to' => ($this->request->getPost('type5_to' . $i)) ? $this->request->getPost('type5_to' . $i) : '',
                    'total_number' => ($this->request->getPost('type5_total_number' . $i)) ? $this->request->getPost('type5_total_number' . $i) : null,
                    'cancelled' => ($this->request->getPost('type5_cancelled' . $i)) ? $this->request->getPost('type5_cancelled' . $i) : null,
                    'net_issues' => ($this->request->getPost('type5_net_issues' . $i)) ? $this->request->getPost('type5_net_issues' . $i) : null,
                    'question_id' => $question_id,
                    'data_type' => 5
                ];
                $type5_pk_Id = intval($this->request->getPost('type5_pk_id' . $i));
                if ($type5_pk_Id > 0) {
                    $primary_Model->update($type5_pk_Id, $formData5);
                } else {
                    $primary_Model->insert($formData5);
                }
            }


            $session->setFlashdata('success', 'Action has successfully completed');
            return redirect()->to('admin/gstr1/document/' . $question_id);
        } else {

            $data['form_data1'] = (array) $primary_Model->select('*')->where(['question_id' => $data['question_id'], 'data_type' => 1])->get()->getResult('array');
            $data['form_data2'] = (array) $primary_Model->select('*')->where(['question_id' => $data['question_id'], 'data_type' => 2])->get()->getResult('array');
            $data['form_data3'] = (array) $primary_Model->select('*')->where(['question_id' => $data['question_id'], 'data_type' => 3])->get()->getResult('array');
            $data['form_data4'] = (array) $primary_Model->select('*')->where(['question_id' => $data['question_id'], 'data_type' => 4])->get()->getResult('array');
            $data['form_data5'] = (array) $primary_Model->select('*')->where(['question_id' => $data['question_id'], 'data_type' => 5])->get()->getResult('array');
            //            if (!empty($data['form_data'])) {
//                $v = (array) $data['form_data'];
//                $data['pk_id'] = $v['document_id'];
//            }
            $data['load_css'] = array('vendors/bootstrap-datepicker/bootstrap-datepicker.min.css');
            $data['load_js'] = array('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js', 'vendors/jquery-validation/jquery.validate.min.js', 'js/gstr1/common/form_add_update.js');
            $data['file_name'] = 'gstr1/document';
            return $this->admin_layout($data);
        }
    }

}
