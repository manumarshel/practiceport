<?php


namespace App\Controllers\Sim\b2cl;


use App\Libraries\ProcessJsonFile;

class B2cl extends \App\Controllers\BaseController
{
    public function index()
    {
        $company_id = session()->get('company_id');
        $jsonHandle = new ProcessJsonFile();
        $data = array();

        $page_slug = $this->request->uri->getSegment(2);
        $data = $jsonHandle->get_current_page_data($page_slug);
//        echo "<pre>";
//        echo var_dump($data);
//        echo "</pre>";
//        exit;
        return view('sim/b2cl/b2cl', $data);
    }

    public function add_invoice()
    {
        helper(['form', 'common']);
        return view('sim/b2cl/b2cl-add-invoice');
    }
}
