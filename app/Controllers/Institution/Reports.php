<?php

namespace App\Controllers\Institution;

use App\Controllers\BaseController;
use Config\Database;

class Reports extends BaseController
{
    public function index()
    {
        $db = Database::connect();
        $instId = session()->get('id');

        $packages = $db->table('institution_packages ip')
            ->select('p.PKPackageID, COALESCE(NULLIF(p.custom_title, ""), p.title) as title')
            ->join('b2b_packages p', 'p.PKPackageID = ip.PKPackageID')
            ->where('ip.PKInstitutionID', $instId)
            ->where('ip.status', 'active')
            ->get()->getResult();

        if (empty($packages)) {
            $packages = $db->table('b2b_packages')
                ->select('PKPackageID, COALESCE(NULLIF(custom_title, ""), title) as title')
                ->where('status', 1)
                ->get()->getResult();
        }

        $data = [
            'packages' => $packages,
            'title'    => 'Institution Reports'
        ];

        return view('institution/reports', $data);
    }

    public function export()
    {
        $packageId = $this->request->getPost('package_id');
        $instId = session()->get('id');
        $db = Database::connect();

        $builder = $db->table('users u')
            ->select('u.user_id, u.first_name, u.last_name, u.email, u.phone, u.date_registered')
            ->join('mst_subscriptions s', 's.user_id = u.user_id')
            ->where('u.institutionID', $instId)
            ->where('u.deleted', 0);

        if (!empty($packageId)) {
            $builder->where('s.package_id', $packageId);
        }

        $students = $builder->get()->getResultArray();

        $filename = "Institution_Students_Report_" . date('Ymd_His') . ".csv";
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="' . $filename . '"');

        $output = fopen('php://output', 'w');
        fputcsv($output, ['ID', 'First Name', 'Last Name', 'Email', 'Phone', 'Date Registered']);

        $i = 1;
        foreach ($students as $row) {
            fputcsv($output, [
                $i++,
                $row['first_name'],
                $row['last_name'],
                $row['email'],
                $row['phone'],
                $row['date_registered']
            ]);
        }

        fclose($output);
        exit;
    }
}
