<?php


namespace App\Controllers\Sim\Dash;


use App\Models\sim\CompanyModel;
use App\Models\VideoModel;

class ReturnsDashboard extends \App\Controllers\BaseController
{
    public function index()
    {
        helper(['form','common']);
        $data = [];
        $company_id = session()->get('company_id');
        $cmpny = new CompanyModel();
        $data = $cmpny->find($company_id);
        $vm = new VideoModel();
        $helpVideo = $vm->getVideo('slot4');
        $data['slot4'] = '#';
        if ( count($helpVideo) > 0 ) {
            $data['slot4'] = $helpVideo[0]['url'];
        }
        $helpVideo = $vm->getVideo('slot5');
        $data['slot5'] = '#';
        if ( count($helpVideo) > 0 ) {
            $data['slot5'] = $helpVideo[0]['url'];
        }

        $helpVideo = $vm->getVideo('slot6');
        $data['slot6'] = '#';
        if ( count($helpVideo) > 0 ) {
            $data['slot6'] = $helpVideo[0]['url'];
        }

        $helpVideo = $vm->getVideo('slot30');
        $data['slot30'] = '#';
        if (count($helpVideo) > 0) {
            $data['slot30'] = $helpVideo[0]['url'];
        }

        $data['financial_period_list'] = get_financial_period();
        $data['quarter_list'] = get_financial_quarter_list();
        return view('sim/dash/returns-dashboard', $data);
    }

}
