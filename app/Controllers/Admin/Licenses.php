<?php


namespace App\Controllers\Admin;


use App\Controllers\BaseController;

class Licenses extends BaseController
{
    public function index()
    {
        return view('admin/licenses');
    }
}
