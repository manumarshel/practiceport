<?php

namespace App\Controllers\Pf;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function __construct()
    {
    }

    public function index()
    {
        $data = [];
        
        return view('pf/dashboard', $data);
    }
}
