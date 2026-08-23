<?php

namespace App\Controllers\Esi;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function __construct()
    {
    }

    public function index()
    {
        $data = [];
        
        return view('esi/dashboard', $data);
    }
}
