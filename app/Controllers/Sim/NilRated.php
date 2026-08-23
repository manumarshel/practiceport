<?php


namespace App\Controllers\Sim;


use App\Libraries\ProcessJsonFile;

class NilRated extends \App\Controllers\BaseController
{
    public function index() {
        $jsonHandle = new ProcessJsonFile();
        $data = array();

        $page_slug = $this->request->uri->getSegment(2);

        $data = $jsonHandle->get_current_page_data($page_slug);
        return view('sim/nil-rated/nil-rated', $data);
    }
}
