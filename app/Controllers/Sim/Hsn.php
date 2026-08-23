<?php


namespace App\Controllers\Sim;


use App\Libraries\ProcessJsonFile;
use App\Models\sim\CompanyModel;

class Hsn extends \App\Controllers\BaseController
{
    public function index() {
        $company_id = session()->get('company_id');
        $jsonHandle = new ProcessJsonFile();
        $data = array();

        $page_slug = $this->request->uri->getSegment(2);

        $data = $jsonHandle->get_current_page_data($page_slug);
        $cmpny = new CompanyModel();
        $data['company'] = $cmpny->find($company_id);
        return view('sim/hsn/hsn', $data);
    }
}
