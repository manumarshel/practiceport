<?php


namespace App\Controllers\Sim\b2cs;


use App\Libraries\ProcessJsonFile;

class B2cs extends \App\Controllers\BaseController
{
    public function index()
    {
        helper(['common']);
        $company_id = session()->get('company_id');
        $jsonHandle = new ProcessJsonFile();
        $data = array();

        $page_slug = $this->request->uri->getSegment(2);

        $data = $jsonHandle->get_current_page_data($page_slug);
//        echo "<pre>";
//        var_dump($data);
//        echo "</pre>";
//        exit;
        $data['pos_list'] = get_pos_list();



        return view('sim/b2cs/b2cs', $data);
    }

    public function b2cs_add()
    {
        helper(['form', 'common']);
        $data = array();
        $data['pos_list'] = get_pos_list();
        $data['quarter_list'] = get_quarter_list();
        return view('sim/b2cs/b2cs-add', $data);
    }
}
