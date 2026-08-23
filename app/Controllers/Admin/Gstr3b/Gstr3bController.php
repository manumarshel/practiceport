<?php

namespace App\Controllers\Admin\Gstr3b;

use App\Controllers\Admin\AdminBaseController;
use Exception;

class Gstr3bController extends AdminBaseController {

    public function index() {
        $data['question_id'] = $this->request->uri->getSegment(3);
        $data['file_name'] = 'gstr3b/gstr3b';
        return $this->admin_layout($data);
    }

}
