<?php

namespace App\Controllers\Admin;
use App\Libraries\DbFetchnProcess;
class Subscriptions extends \App\Controllers\BaseController
{
    public function index()
    {
        $data = [];
//        $um = new UserModel();
//        $data['users'] = $um->findAll();
        $dbProcess = new DbFetchnProcess();
        // B2b
        $usersQuery = $dbProcess->fetchWithJoinGeneral('users',
            'subscriptions',
            'subscriptions.user_ids = users.user_id',
            'packages',
            'packages.package_id = subscriptions.package_id');
        $data['users'] =$usersQuery->getResult('array');

        return view('admin/subscriptions', $data);
    }
}
