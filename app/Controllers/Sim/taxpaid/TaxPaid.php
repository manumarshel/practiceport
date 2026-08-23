<?php


namespace App\Controllers\Sim\taxpaid;


use App\Libraries\ProcessJsonFile;

class TaxPaid extends \App\Controllers\BaseController
{
    public function index() {
        $company_id = session()->get('company_id');
        $jsonHandle = new ProcessJsonFile();
        $data = array();

        $page_slug = $this->request->uri->getSegment(2);

        $data = $jsonHandle->get_current_page_data($page_slug);

        return view('sim/taxpaid/taxpaid', $data);
    }

    public function taxpaid_add() {
        helper(['form', 'common']);
        $data['pos_list'] = get_pos_list();
        return view('sim/taxpaid/taxpaid-add', $data);
    }
}
