<?php

namespace App\Controllers\Admin\Gstr1;

use App\Controllers\Admin\AdminBaseController;
use Exception;

class CndrController extends AdminBaseController {

    public function index() {
        $data['file_name'] = 'gstr1/cdnr';
        return $this->admin_layout($data);
    }

    public function receiverUpload() {
        $data['file_name'] = 'gstr1/cdnr-receiver-uploded';
        return $this->admin_layout($data);
    }

    public function receiverModified() {
        $data['file_name'] = 'gstr1/cdnr-receiver-modified';
        return $this->admin_layout($data);
    }

    public function receiverRejected() {
        $data['file_name'] = 'gstr1/cdnr-receiver-rejected';
        return $this->admin_layout($data);
    }

    public function receiverAdd() {
        //$num = $this->request->uri->getSegment(5);
        $data['file_name'] = 'gstr1/cdnr-add';
        return $this->admin_layout($data);
    }

}
