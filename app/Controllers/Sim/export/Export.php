<?php


namespace App\Controllers\Sim\export;


use App\Libraries\ProcessJsonFile;

class Export extends \App\Controllers\BaseController
{
    public function index()
    {
        $company_id = session()->get('company_id');
        $jsonHandle = new ProcessJsonFile();
        $data = array();

        $page_slug = $this->request->uri->getSegment(2);

        $data = $jsonHandle->get_current_page_data($page_slug);
        return view('sim/export/export', $data);
    }

    public function export_add()
    {
        helper(['form', 'common']);
        return view('sim/export/export-add');
    }
}
