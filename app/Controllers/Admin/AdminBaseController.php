<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use Exception;

class AdminBaseController extends BaseController {

    public function __construct() {
    //Add authenticatin to act dynamically    
    }

    public function admin_layout($data) {
        return view('admin/layouts/main', $data);
    }

}
