<?php

namespace App\Controllers\Institution;

use App\Controllers\BaseController;
use App\Models\InstitutionModel;
use App\Models\user\UserModel;
use Config\Database;

class Dashboard extends BaseController
{
    public function index()
    {
        $db = Database::connect();
        $instId = session()->get('id');

        $instModel = new InstitutionModel();
        $institution = $instModel->find($instId);

        // Count students belonging to this institution
        $um = new UserModel();
        $studentCount = $um->where('institutionID', $instId)->where('deleted', 0)->countAllResults();

        // Count packages assigned to this institution
        $packageCount = $db->table('institution_packages')
            ->where('PKInstitutionID', $instId)
            ->where('status', 'active')
            ->countAllResults();

        // Fetch active packages with usage details
        $packagesList = $db->table('institution_packages ip')
            ->select('ip.*, bp.title, bp.custom_title, bp.duration, bp.cost')
            ->join('b2b_packages bp', 'bp.PKPackageID = ip.PKPackageID', 'left')
            ->where('ip.PKInstitutionID', $instId)
            ->orderBy('ip.PKInstitutionPackageID', 'desc')
            ->get()->getResultArray();

        foreach ($packagesList as &$pkg) {
            $used = $pkg['used_students'] ?? 0;
            $max = $pkg['max_students'] ?? 1;
            $pkg['usage_percent'] = $max > 0 ? min(100, round(($used / $max) * 100)) : 0;
            $pkg['remaining_seats'] = max(0, $max - $used);
            $pkg['display_title'] = !empty($pkg['custom_title']) ? $pkg['custom_title'] : ($pkg['title'] ?? 'Standard Package');
        }

        // Count pending assessment reviews
        $pendingReviews = $db->table('student_assessments')
            ->where('status', 'Pending Review');
        if (!empty($instId)) {
            $pendingReviews->where('institution_id', $instId);
        }
        $pendingCount = $pendingReviews->countAllResults();

        // Fetch recent students
        $studentBuilder = $db->table('users u')
            ->select('u.*, COALESCE(NULLIF(bp.custom_title, ""), bp.title) as package_name')
            ->join('mst_subscriptions s', 's.user_id = u.user_id', 'left')
            ->join('b2b_packages bp', 'bp.PKPackageID = s.package_id', 'left')
            ->where('u.deleted', 0);
        if (!empty($instId)) {
            $studentBuilder->where('u.institutionID', $instId);
        }
        $recentStudents = $studentBuilder->orderBy('u.user_id', 'desc')->limit(8)->get()->getResultArray();

        // Fetch recent submissions
        $asmtBuilder = $db->table('student_assessments sa')
            ->select('sa.*, u.first_name, u.last_name, u.email, c.course_name')
            ->join('users u', 'u.user_id = sa.user_id', 'left')
            ->join('courses c', 'c.course_id = sa.course_id', 'left');
        if (!empty($instId)) {
            $asmtBuilder->where('sa.institution_id', $instId);
        }
        $recentSubmissions = $asmtBuilder->orderBy('sa.id', 'desc')->limit(8)->get()->getResultArray();

        $data = [
            'institution'        => $institution,
            'student_count'      => $studentCount,
            'package_count'      => $packageCount,
            'packages_list'      => $packagesList,
            'totalStudents'      => $studentCount,
            'activePackages'     => $packageCount,
            'pending_reviews'    => $pendingCount,
            'recent_students'    => $recentStudents,
            'recent_submissions' => $recentSubmissions,
            'title'              => 'Institution Dashboard'
        ];

        return view('institution/dashboard', $data);
    }
}
