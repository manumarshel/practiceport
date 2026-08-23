<?php

namespace App\Controllers\Institution;

use App\Controllers\BaseController;
use Config\Database;

class Packages extends BaseController
{
    public function index()
    {
        $db = Database::connect();
        $instId = session()->get('id');

        $builder = $db->table('institution_packages ip');
        $builder->select('ip.*, p.title, p.custom_title, COALESCE(NULLIF(p.custom_title, ""), p.title) as display_title, p.duration, p.cost');
        $builder->join('b2b_packages p', 'p.PKPackageID = ip.PKPackageID', 'left');
        if (!empty($instId)) {
            $builder->where('ip.PKInstitutionID', $instId);
        }
        $packages = $builder->get()->getResult();

        foreach ($packages as &$pkg) {
            $max = intval($pkg->max_students);
            $used = intval($pkg->used_students);
            $pkg->remaining_students = max(0, $max - $used);
            $endDate = !empty($pkg->end_date) && $pkg->end_date !== '0000-00-00' ? $pkg->end_date : date('Y-m-d', strtotime('+1 year'));
            $pkg->end_date = $endDate;
            $pkg->start_date = !empty($pkg->start_date) && $pkg->start_date !== '0000-00-00' ? $pkg->start_date : date('Y-m-d');
            $pkg->expiry_status = (strtotime($endDate) >= strtotime(date('Y-m-d'))) ? 'Active' : 'Expired';
            $pkg->renewal_count = 1;
        }

        $data = [
            'packages' => $packages,
            'title'    => 'Institution Packages'
        ];

        return view('institution/packages', $data);
    }

    public function packageStudent($packageId)
    {
        $db = Database::connect();
        $instId = session()->get('id');

        $instPkg = $db->table('institution_packages')->where('PKInstitutionPackageID', $packageId)->get()->getRowArray();
        $realPkgId = $instPkg ? $instPkg['PKPackageID'] : $packageId;
        $instPkgId = $instPkg ? $instPkg['PKInstitutionPackageID'] : 0;

        $builder = $db->table('users');
        $builder->select('users.*, mst_subscriptions.start_date, mst_subscriptions.end_date');
        $builder->join('mst_subscriptions', 'mst_subscriptions.user_id = users.user_id');
        if (!empty($instId)) {
            $builder->where('users.institutionID', $instId);
        }
        $builder->groupStart()
            ->where('mst_subscriptions.package_id', $realPkgId)
            ->orWhere('mst_subscriptions.institution_package_id', $instPkgId)
            ->groupEnd();
        $builder->where('users.deleted', 0);
        $students = $builder->get()->getResult();

        $data = [
            'students'   => $students,
            'package_id' => $packageId,
            'title'      => 'Package Students'
        ];

        return view('institution/package-students', $data);
    }
}
