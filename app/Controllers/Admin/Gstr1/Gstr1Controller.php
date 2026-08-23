<?php

namespace App\Controllers\Admin\Gstr1;

use App\Controllers\Admin\AdminBaseController;
use Exception;

class Gstr1Controller extends AdminBaseController {

    public function index() {
        $data['question_id'] = $this->request->uri->getSegment(3);
        $data['file_name'] = 'gstr1/gstr1';
        return $this->admin_layout($data);
    }

    public function getTemplate() {
        helper(['form']);
        if ( $_GET['templateName'] == 'igst') {
            return view('admin/gstr1/cmps/item-details-igst', ['alternate_title' => $_GET['alternate_title']]);
        } else {
            return view('admin/gstr1/cmps/item-details-cgst-sgst', ['alternate_title' => $_GET['alternate_title']]);
        }
    }
//    public function gstr11() {
//        $data['file_name'] = 'gstr1/gstr11';
//        return $this->admin_layout($data);
//    }
}
