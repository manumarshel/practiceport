<?php


namespace App\Controllers\Admin;


use App\Controllers\BaseController;
use App\Libraries\DbFetchnProcess;
use App\Libraries\GroceryCrud;
use App\Models\CompanyModel;
use App\Models\QuestionModel;
use App\Models\user\UserModel;

class Reports extends BaseController
{
    private  $crud;

    public function __construct()
    {
        $this->crud = new GroceryCrud();
        $this->crud->setTheme('enlink');
    }

    public function index()
    {
        $data = [];
        $dbProcess = new DbFetchnProcess();
        // B2b
        $usersQuery = $dbProcess->fetchWithJoinGeneral('users',
            'subscriptions',
            'subscriptions.user_ids = users.user_id',
            'packages',
            'packages.package_id = subscriptions.package_id');
        $data['users'] =$usersQuery->getResult('array');

        return view('admin/reports', $data);
    }

    public function download() {
        $dbProcess = new DbFetchnProcess();
        // B2b
        $usersQuery = $dbProcess->fetchWithJoinGeneral('users',
            'subscriptions',
            'subscriptions.user_ids = users.user_id',
            'packages',
            'packages.package_id = subscriptions.package_id');
        $reports =$usersQuery->getResult('array');


//        $f = fopen('php://output', 'w');
//        foreach ($reports as $report) {
//            fputcsv($f, $report);
//        }

//        fseek($f, 0);
        // tell the browser it's going to be a csv file
        header("Content-type: text/csv");
        header("Content-Disposition: attachment; filename=report.csv");
        header("Pragma: no-cache");
        header("Expires: 0");
        // make php send the generated csv lines to the browser
//        fpassthru($f);

        $head = array('License', 'User', 'Date', 'Package', 'Duration', 'Coupon', 'Amount');
        $f = fopen('php://output', 'w');
        fputcsv($f, $head);
        $ii = 1;
        foreach ($reports as $report) {
            $temp = [];
            $full_name = $report['first_name'] . ' ' . $report['last_name'];
            $start = date('M d Y', strtotime($report['start_date']));
            array_push($temp, substr(md5($report['subscription_id']), 0, 10), $full_name, $start, $report['title'], $report['duration'], $report['coupon_used'], $report['cost']);
            fputcsv($f, $temp);
        }
    }
}
