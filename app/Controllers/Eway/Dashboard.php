<?php

namespace App\Controllers\Eway;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function __construct()
    {
    }

    public function index()
    {
        $data = [];
        
        return view('eway/dashboard', $data);
    }
}
