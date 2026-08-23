<?php


namespace App\Controllers\Sim;


class Interstatesupplies extends \App\Controllers\BaseController
{

    public function index() {
        helper(['form', 'common']);
        $data['pos_list'] = get_pos_list();
        return view('sim/interstatesupplies/interstatesupplies', $data);
    }
}
