<?php


namespace App\Controllers\Sim\cdnr;


use App\Libraries\ProcessJsonFile;

class Cdnr extends \App\Controllers\BaseController
{
    public function index()
    {
        $company_id = session()->get('company_id');
        $jsonHandle = new ProcessJsonFile();
        $data = array();

        $page_slug = $this->request->uri->getSegment(2);

        $data = $jsonHandle->get_current_page_data($page_slug);
        return view('sim/cdnr/cdnr', $data);
    }

    public function cdnr_receiver_uploded()
    {
        return view('sim/cdnr/cdnr-receiver-uploded');
    }

    public function cdnr_receiver_modified()
    {
        return view('sim/cdnr/cdnr-receiver-modified');
    }

    public function cdnr_receiver_rejected()
    {
        return view('sim/cdnr/cdnr-receiver-rejected');
    }

    public function cdnr_add()
    {
        helper(['form', 'common']);
        $data = [];
        $data['pos_list'] = get_pos_list();
        return view('sim/cdnr/cdnr-add', $data);
    }
}
