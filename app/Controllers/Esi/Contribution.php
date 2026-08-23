<?php

namespace App\Controllers\Esi;

use App\Controllers\BaseController;

class Contribution extends BaseController
{
    public function __construct()
    {
    }

    public function index()
    {
        
       //$questionId = session('question_id');
    
        if ($this->request->getMethod() == 'post') {
            //print_r($_POST); exit;
            $data = [];

            $month = $_POST['ctl00$HomePageContent$CtrlDdlMcMonth'];

            $months = [
                1 => "Jan",
                2 => "Feb",
                3 => "Mar",
                4 => "Apr",
                5 => "May",
                6 => "Jun",
                7 => "Jul",
                8 => "Aug",
                9 => "Sep",
                10 => "Oct",
                11 => "Nov",
                12 => "Dec"
            ];

            $data['month'] = $months[(int)$month];
            $data['year'] = $_POST['ctl00$HomePageContent$CtrlDdlMcYear'];

            $data['type'] = $_POST['ctl00$HomePageContent$CtrlDdlMcType'];

            return view('esi/contribution/index1', $data);
        }

        $data = [];

        return view('esi/contribution/index', $data);
    }
}
