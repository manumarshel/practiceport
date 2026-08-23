<?php

namespace App\Controllers\EFiling;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function __construct()
    {
    }

    public function index()
    {
        $data = [];
        
        return view('efiling/dashboard', $data);
    }
}
