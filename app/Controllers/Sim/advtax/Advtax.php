<?php


namespace App\Controllers\Sim\advtax;


use App\Libraries\ProcessJsonFile;

class Advtax extends \App\Controllers\BaseController
{

    public function index() {
        helper(['common']);
        $company_id = session()->get('company_id');
        $jsonHandle = new ProcessJsonFile();
        $data = array();

        $page_slug = $this->request->uri->getSegment(2);

        $data = $jsonHandle->get_current_page_data($page_slug);
        $data['pos_list'] = get_pos_list();
        return view('sim/advtax/advtax', $data);
    }

    public function advtax_liability_add() {
        helper(['form', 'common']);
        $data['pos_list'] = get_pos_list();
        return view('sim/advtax/advtax-liability-add', $data);
    }
}
