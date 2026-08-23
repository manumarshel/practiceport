<?php


namespace App\Controllers\Admin;


class Ad_management extends \App\Controllers\BaseController
{

    public function index()
    {
        return view('admin/ads');
    }
}
