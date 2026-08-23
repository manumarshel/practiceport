<?php


namespace App\Controllers\Sim\cdnur;


use App\Libraries\ProcessJsonFile;

class Cdnur extends \App\Controllers\BaseController
{
    public function index()
    {
        $company_id = session()->get('company_id');
        $jsonHandle = new ProcessJsonFile();
        $data = array();

        $page_slug = $this->request->uri->getSegment(2);

        $data = $jsonHandle->get_current_page_data($page_slug);
        return view('sim/cdnur/cdnur', $data);
    }

//    public function cdnur_receiver_uploded()
//    {
//        return view('sim/cdnur/cdnur-receiver-uploded');
//    }
//
//    public function cdnur_receiver_modified()
//    {
//        return view('sim/cdnur/cdnur-receiver-modified');
//    }
//
//    public function cdnur_receiver_rejected()
//    {
//        return view('sim/cdnur/cdnur-receiver-rejected');
//    }

    public function cdnur_add()
    {
        helper(['form', 'common']);
        $data = [];
        $data['pos_list'] = get_pos_list();
        return view('sim/cdnur/cdnur-add', $data);
    }
}
