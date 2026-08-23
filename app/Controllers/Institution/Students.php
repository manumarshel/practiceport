<?php

namespace App\Controllers\Institution;

use App\Controllers\BaseController;
use App\Models\MasterB2bPackageModel;
use App\Models\MasterSubscriptionModel;
use App\Models\user\UserModel;
use App\Models\UserVideoProgressModel;
use App\Models\StudentAssessmentModel;
use Config\Database;
use Config\Services;

class Students extends BaseController
{
    public function index()
    {
        $db = Database::connect();
        $instId = session()->get('id');

        $um = new UserModel();
        // Fetch students belonging to this institution
        $builder = $db->table('users');
        $builder->where('deleted', 0);
        if (!empty($instId)) {
            $builder->where('institutionID', $instId);
        }
        $builder->orderBy('user_id', 'DESC');
        $students = $builder->get()->getResult();

        // Fetch institution packages for filter
        $pkgBuilder = $db->table('institution_packages ip');
        $pkgBuilder->select('p.PKPackageID, COALESCE(NULLIF(p.custom_title, ""), p.title) as package_name');
        $pkgBuilder->join('b2b_packages p', 'p.PKPackageID = ip.PKPackageID');
        if (!empty($instId)) {
            $pkgBuilder->where('ip.PKInstitutionID', $instId);
        }
        $pkgBuilder->where('ip.status', 1);
        $packages = $pkgBuilder->get()->getResult();

        // If institution_packages is empty, fallback to b2b_packages
        if (empty($packages)) {
            $packages = $db->table('b2b_packages')
                ->select('PKPackageID, COALESCE(NULLIF(custom_title, ""), title) as package_name')
                ->where('status', 1)
                ->get()->getResult();
        }

        // Fetch student assessments submitted for review
        $asmtSubmissionsBuilder = $db->table('student_assessments sa');
        $asmtSubmissionsBuilder->select('sa.*, u.first_name, u.last_name, u.email, a.title as assessment_title, a.question as assessment_question, c.course_name, comp.name as company_name');
        $asmtSubmissionsBuilder->join('users u', 'u.user_id = sa.user_id', 'left');
        $asmtSubmissionsBuilder->join('assessments a', 'a.id = sa.assessment_id', 'left');
        $asmtSubmissionsBuilder->join('courses c', 'c.course_id = sa.course_id', 'left');
        $asmtSubmissionsBuilder->join('companies comp', 'comp.company_id = a.company_id', 'left');
        if (!empty($instId)) {
            $asmtSubmissionsBuilder->where('sa.institution_id', $instId);
        }
        $asmtSubmissionsBuilder->orderBy('sa.id', 'DESC');
        $submissions = $asmtSubmissionsBuilder->get()->getResultArray();

        // Count pending reviews for badge
        $pendingCount = 0;
        foreach ($submissions as $sub) {
            if ($sub['status'] === 'Pending Review') {
                $pendingCount++;
            }
        }

        $data = [
            'students'      => $students,
            'packages'      => $packages,
            'submissions'   => $submissions,
            'pending_count' => $pendingCount,
            'title'         => 'Institution Students & Assessments'
        ];

        return view('institution/users', $data);
    }

    public function grade_assessment()
    {
        $submissionId = $this->request->getPost('submission_id');
        $score = $this->request->getPost('score');
        $remarks = $this->request->getPost('remarks');
        $status = $this->request->getPost('status') ?: 'Graded';

        if (empty($submissionId)) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Invalid submission ID.']);
        }

        $studentAssessmentModel = new StudentAssessmentModel();
        $statusText = !empty($score) ? 'Graded: ' . $score : $status;

        $studentAssessmentModel->update($submissionId, [
            'score'       => $score,
            'remarks'     => $remarks,
            'status'      => $statusText,
            'reviewed_at' => date('Y-m-d H:i:s')
        ]);

        return $this->response->setJSON([
            'status'  => 'success',
            'message' => 'Assessment graded successfully!'
        ]);
    }

    public function user_import()
    {
        $data = [];
        $instId = session()->get('id');
        $db = Database::connect();

        $pkgBuilder = $db->table('institution_packages ip');
        $pkgBuilder->select('ip.PKInstitutionPackageID, p.PKPackageID, COALESCE(NULLIF(p.custom_title, ""), p.title) as title, COALESCE(NULLIF(p.custom_title, ""), p.title) as display_title, p.duration, p.cost');
        $pkgBuilder->join('b2b_packages p', 'p.PKPackageID = ip.PKPackageID');
        if (!empty($instId)) {
            $pkgBuilder->where('ip.PKInstitutionID', $instId);
        }
        $pkgBuilder->where('ip.status', 'active');
        $data['packages'] = $pkgBuilder->get()->getResult();

        if (empty($data['packages'])) {
            $data['packages'] = $db->table('b2b_packages')
                ->select('PKPackageID as PKInstitutionPackageID, PKPackageID, COALESCE(NULLIF(custom_title, ""), title) as title, COALESCE(NULLIF(custom_title, ""), title) as display_title, duration, cost')
                ->where('status', 1)
                ->get()->getResult();
        }

        if ($this->request->getMethod() === 'post') {
            $raw_pkg_id = $this->request->getPost('packages') ?: $this->request->getPost('package_id');
            $file = $this->request->getFile('user_import');

            if (!$file || !$file->isValid()) {
                return redirect()->back()->with('error', 'Please upload a valid CSV file.');
            }

            // Resolve real package ID and institution package ID
            $instPkg = $db->table('institution_packages')->where('PKInstitutionPackageID', $raw_pkg_id)->get()->getRowArray();
            $pkg_id = $instPkg ? $instPkg['PKPackageID'] : $raw_pkg_id;
            $instPkgId = $instPkg ? $instPkg['PKInstitutionPackageID'] : 0;

            $fileHandle = fopen($file->getTempName(), 'r');
            if (!$fileHandle) {
                return redirect()->back()->with('error', 'Unable to read the uploaded file.');
            }

            $header = fgetcsv($fileHandle);
            $um = new UserModel();
            $subscriptionModel = new MasterSubscriptionModel();
            $password = "12345678";

            $packageRecord = $db->table('b2b_packages')->where('PKPackageID', $pkg_id)->get()->getRowArray();
            $duration = !empty($packageRecord['duration']) ? $packageRecord['duration'] : '12 months';
            $cost = !empty($packageRecord['cost']) ? $packageRecord['cost'] : 0;
            $startDate = date('Y-m-d');
            $endDate = date('Y-m-d', strtotime("+$duration", strtotime($startDate)));

            while (($row = fgetcsv($fileHandle)) !== false) {
                if (count($row) < 3) continue;

                $firstName = trim($row[0]);
                $lastName  = isset($row[1]) ? trim($row[1]) : '';
                $email     = isset($row[2]) ? trim($row[2]) : '';
                $phone     = isset($row[3]) ? trim($row[3]) : '';

                if (empty($email)) continue;

                $existingUser = $um->where('email', $email)->first();
                $userId = null;

                if ($existingUser) {
                    $userId = $existingUser['user_id'];
                    $um->update($userId, ['institutionID' => $instId, 'enroll_type' => 1]);
                } else {
                    $userId = $um->insert([
                        'first_name'      => $firstName,
                        'last_name'       => $lastName,
                        'email'           => $email,
                        'phone'           => $phone,
                        'password'        => password_hash($password, PASSWORD_DEFAULT),
                        'active'          => 1,
                        'enroll_type'     => 1,
                        'institutionID'   => $instId,
                        'date_registered' => date('Y-m-d H:i:s')
                    ]);
                }

                if ($userId) {
                    $hasSub = $subscriptionModel->where('user_id', $userId)->where('package_id', $pkg_id)->first();
                    if (!$hasSub) {
                        $subscriptionModel->insert([
                            'user_id'                => $userId,
                            'package_id'             => $pkg_id,
                            'institution_package_id' => $instPkgId,
                            'type'                   => 1,
                            'start_date'             => $startDate,
                            'end_date'               => $endDate,
                            'cost'                   => $cost
                        ]);
                    }
                }
            }

            fclose($fileHandle);
            return redirect()->to(base_url('institution/students'))->with('msg', 'Students imported successfully!');
        }

        return view('institution/add-user', $data);
    }

    public function create_user()
    {
        $data = [];
        $instId = session()->get('id');
        $db = Database::connect();

        $pkgBuilder = $db->table('institution_packages ip');
        $pkgBuilder->select('ip.PKInstitutionPackageID, p.PKPackageID, COALESCE(NULLIF(p.custom_title, ""), p.title) as title, COALESCE(NULLIF(p.custom_title, ""), p.title) as display_title, p.duration, p.cost');
        $pkgBuilder->join('b2b_packages p', 'p.PKPackageID = ip.PKPackageID');
        if (!empty($instId)) {
            $pkgBuilder->where('ip.PKInstitutionID', $instId);
        }
        $pkgBuilder->where('ip.status', 'active');
        $data['packages'] = $pkgBuilder->get()->getResult();

        if (empty($data['packages'])) {
            $data['packages'] = $db->table('b2b_packages')
                ->select('PKPackageID as PKInstitutionPackageID, PKPackageID, COALESCE(NULLIF(custom_title, ""), title) as title, COALESCE(NULLIF(custom_title, ""), title) as display_title, duration, cost')
                ->where('status', 1)
                ->get()->getResult();
        }

        if ($this->request->getMethod() === 'post') {
            $firstName  = $this->request->getPost('first_name');
            $lastName   = $this->request->getPost('last_name');
            $email      = $this->request->getPost('email');
            $phone      = $this->request->getPost('phone');
            $password   = $this->request->getPost('password') ?: '12345678';
            $raw_pkg_id = $this->request->getPost('packages') ?: $this->request->getPost('package_id');

            $um = new UserModel();
            $existing = $um->where('email', $email)->first();
            if ($existing) {
                return redirect()->back()->withInput()->with('error', 'Student with this email already exists.');
            }

            $userId = $um->insert([
                'first_name'      => $firstName,
                'last_name'       => $lastName,
                'email'           => $email,
                'phone'           => $phone,
                'password'        => password_hash($password, PASSWORD_DEFAULT),
                'active'          => 1,
                'enroll_type'     => 1,
                'institutionID'   => $instId,
                'date_registered' => date('Y-m-d H:i:s')
            ]);

            if ($userId && !empty($raw_pkg_id)) {
                $instPkg = $db->table('institution_packages')->where('PKInstitutionPackageID', $raw_pkg_id)->get()->getRowArray();
                $pkg_id = $instPkg ? $instPkg['PKPackageID'] : $raw_pkg_id;
                $instPkgId = $instPkg ? $instPkg['PKInstitutionPackageID'] : 0;

                $packageRecord = $db->table('b2b_packages')->where('PKPackageID', $pkg_id)->get()->getRowArray();
                $duration = !empty($packageRecord['duration']) ? $packageRecord['duration'] : '12 months';
                $cost = !empty($packageRecord['cost']) ? $packageRecord['cost'] : 0;
                $startDate = date('Y-m-d');
                $endDate = date('Y-m-d', strtotime("+$duration", strtotime($startDate)));

                $subscriptionModel = new MasterSubscriptionModel();
                $subscriptionModel->insert([
                    'user_id'                => $userId,
                    'package_id'             => $pkg_id,
                    'institution_package_id' => $instPkgId,
                    'type'                   => 1,
                    'start_date'             => $startDate,
                    'end_date'               => $endDate,
                    'cost'                   => $cost
                ]);
            }

            return redirect()->to(base_url('institution/students'))->with('msg', 'Student created successfully!');
        }

        return view('institution/create-user', $data);
    }

    public function delete_user($user_id)
    {
        $um = new UserModel();
        $sm = new MasterSubscriptionModel();

        if ($user_id && intval($user_id)) {
            $sm->where('user_id', $user_id)->delete();
            $um->delete($user_id);
            return redirect()->to(base_url('institution/students'))->with('msg', 'Student deleted successfully.');
        }

        return redirect()->to(base_url('institution/students'))->with('error', 'Invalid student ID.');
    }

    public function student_progress_ajax($user_id)
    {
        $db = Database::connect();
        $um = new UserModel();
        $user = $um->find($user_id);

        if (!$user) {
            return '<div class="alert alert-danger">User not found</div>';
        }

        // Fetch subscriptions
        $subs = $db->table('mst_subscriptions')
            ->select('mst_subscriptions.package_id, b2b_packages.title, b2b_packages.custom_title, b2b_packages.PKPackageID')
            ->join('b2b_packages', 'b2b_packages.PKPackageID = mst_subscriptions.package_id')
            ->where('mst_subscriptions.user_id', $user_id)
            ->where('mst_subscriptions.type', 1)
            ->groupBy('mst_subscriptions.package_id, b2b_packages.title, b2b_packages.custom_title, b2b_packages.PKPackageID')
            ->get()->getResultArray();

        $uvpm = new UserVideoProgressModel();
        $packages_data = [];
        $totalItemsOverall = 0;
        $totalCompletedOverall = 0;

        foreach ($subs as $sub) {
            $packageId = $sub['PKPackageID'];
            $packageName = !empty($sub['custom_title']) ? $sub['custom_title'] : $sub['title'];

            $courses = $db->table('b2b_package_course_mapping')
                ->select('courses.course_id, courses.course_name as title')
                ->join('courses', 'courses.course_id = b2b_package_course_mapping.PKCourseID')
                ->where('b2b_package_course_mapping.PKPackageID', $packageId)
                ->get()->getResultArray();

            foreach ($courses as &$course) {
                $courseId = $course['course_id'];
                $completedVideos = $uvpm->where('user_id', $user_id)->where('package_id', $packageId)->where('course_id', $courseId)->where('video_tutorial_id IS NOT NULL')->findColumn('video_tutorial_id') ?: [];
                $completedQuestions = $uvpm->where('user_id', $user_id)->where('package_id', $packageId)->where('course_id', $courseId)->where('question_id IS NOT NULL')->findColumn('question_id') ?: [];

                $sequenceEntries = $db->table('package_lessons_mapping')
                    ->where('course_id', $courseId)
                    ->where('package_id', $packageId)
                    ->where('package_type', 'b2b')
                    ->get()->getResultArray();

                $tVideos = 0; $tQuestions = 0; $cVideos = 0; $cQuestions = 0;
                foreach ($sequenceEntries as $seq) {
                    if ($seq['item_type'] === 'video') {
                        $tVideos++;
                        if (in_array($seq['item_id'], $completedVideos)) $cVideos++;
                    } elseif ($seq['item_type'] === 'question') {
                        $tQuestions++;
                        if (in_array($seq['item_id'], $completedQuestions)) $cQuestions++;
                    }
                }

                $course['total_videos'] = $tVideos;
                $course['total_questions'] = $tQuestions;
                $course['completed_videos'] = $cVideos;
                $course['completed_questions'] = $cQuestions;
                $course['total_items'] = $tVideos + $tQuestions;
                $course['completed_count'] = $cVideos + $cQuestions;
                $course['progress'] = $course['total_items'] > 0 ? round(($course['completed_count'] / $course['total_items']) * 100) : 0;

                $totalItemsOverall += $course['total_items'];
                $totalCompletedOverall += $course['completed_count'];
            }

            $packages_data[] = [
                'package_name' => $packageName,
                'courses'      => $courses
            ];
        }

        // Fetch student assessments
        $assessments = $db->table('student_assessments sa')
            ->select('sa.*, a.title, c.course_name')
            ->join('assessments a', 'a.id = sa.assessment_id', 'left')
            ->join('courses c', 'c.course_id = sa.course_id', 'left')
            ->where('sa.user_id', $user_id)
            ->get()->getResultArray();

        $data = [
            'user'             => $user,
            'user_id'          => $user_id,
            'packages_data'    => $packages_data,
            'assessments'      => $assessments,
            'total_items'      => $totalItemsOverall,
            'total_attempted'  => $totalCompletedOverall,
            'overall_progress' => $totalItemsOverall > 0 ? round(($totalCompletedOverall / $totalItemsOverall) * 100) : 0
        ];

        return view('institution/partials/student_progress_modal', $data);
    }

    public function export_student_progress($user_id)
    {
        $db = Database::connect();
        $um = new UserModel();
        $user = $um->find($user_id);

        if (!$user) {
            return redirect()->back()->with('error', 'User not found');
        }

        $filename = "Student_Progress_" . $user['first_name'] . "_" . $user['last_name'] . "_" . date('Ymd') . ".csv";
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="' . $filename . '"');

        $output = fopen('php://output', 'w');
        fputcsv($output, ['Student Name', $user['first_name'] . ' ' . $user['last_name']]);
        fputcsv($output, ['Email', $user['email']]);
        fputcsv($output, ['Phone', $user['phone']]);
        fputcsv($output, []);
        fputcsv($output, ['Package', 'Course', 'Total Videos', 'Completed Videos', 'Total Simulations', 'Completed Simulations', 'Progress %']);

        $subs = $db->table('mst_subscriptions')
            ->select('mst_subscriptions.package_id, b2b_packages.title, b2b_packages.custom_title, b2b_packages.PKPackageID')
            ->join('b2b_packages', 'b2b_packages.PKPackageID = mst_subscriptions.package_id')
            ->where('mst_subscriptions.user_id', $user_id)
            ->where('mst_subscriptions.type', 1)
            ->get()->getResultArray();

        $uvpm = new UserVideoProgressModel();

        foreach ($subs as $sub) {
            $packageId = $sub['PKPackageID'];
            $packageName = !empty($sub['custom_title']) ? $sub['custom_title'] : $sub['title'];

            $courses = $db->table('b2b_package_course_mapping')
                ->select('courses.course_id, courses.course_name as title')
                ->join('courses', 'courses.course_id = b2b_package_course_mapping.PKCourseID')
                ->where('b2b_package_course_mapping.PKPackageID', $packageId)
                ->get()->getResultArray();

            foreach ($courses as $c) {
                $courseId = $c['course_id'];
                $completedVideos = $uvpm->where('user_id', $user_id)->where('package_id', $packageId)->where('course_id', $courseId)->where('video_tutorial_id IS NOT NULL')->findColumn('video_tutorial_id') ?: [];
                $completedQuestions = $uvpm->where('user_id', $user_id)->where('package_id', $packageId)->where('course_id', $courseId)->where('question_id IS NOT NULL')->findColumn('question_id') ?: [];

                $sequenceEntries = $db->table('package_lessons_mapping')
                    ->where('course_id', $courseId)
                    ->where('package_id', $packageId)
                    ->where('package_type', 'b2b')
                    ->get()->getResultArray();

                $tVideos = 0; $tQuestions = 0; $cVideos = 0; $cQuestions = 0;
                foreach ($sequenceEntries as $seq) {
                    if ($seq['item_type'] === 'video') {
                        $tVideos++;
                        if (in_array($seq['item_id'], $completedVideos)) $cVideos++;
                    } elseif ($seq['item_type'] === 'question') {
                        $tQuestions++;
                        if (in_array($seq['item_id'], $completedQuestions)) $cQuestions++;
                    }
                }

                $totalItems = $tVideos + $tQuestions;
                $completed = $cVideos + $cQuestions;
                $pct = $totalItems > 0 ? round(($completed / $totalItems) * 100) : 0;

                fputcsv($output, [
                    $packageName,
                    $c['title'],
                    $tVideos,
                    $cVideos,
                    $tQuestions,
                    $cQuestions,
                    $pct . '%'
                ]);
            }
        }

        fclose($output);
        exit;
    }

    public function export_csv()
    {
        $packageId = $this->request->getGet('package_id') ?: $this->request->getPost('package_id');
        $exportType = $this->request->getGet('type') ?: 'both'; // 'progress', 'assessments', or 'both'
        $instId = session()->get('id');
        $db = Database::connect();

        $filename = "Institution_Report_" . (!empty($packageId) ? "Pkg_" . $packageId . "_" : "") . date('Ymd_His') . ".csv";
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="' . $filename . '"');

        $output = fopen('php://output', 'w');

        // Header for Full Comprehensive Export
        fputcsv($output, [
            'Student ID',
            'First Name',
            'Last Name',
            'Email',
            'Mobile',
            'Package',
            'Course / Module',
            'Progress %',
            'Assessment Submitted File',
            'Assessment Status',
            'Assessment Score',
            'Assessment Submission Date'
        ]);

        $builder = $db->table('users u')
            ->select('u.user_id, u.first_name, u.last_name, u.email, u.phone, s.package_id, COALESCE(NULLIF(bp.custom_title, ""), bp.title) as package_name')
            ->join('mst_subscriptions s', 's.user_id = u.user_id', 'left')
            ->join('b2b_packages bp', 'bp.PKPackageID = s.package_id', 'left')
            ->where('u.deleted', 0);

        if (!empty($instId)) {
            $builder->where('u.institutionID', $instId);
        }
        if (!empty($packageId)) {
            $builder->where('s.package_id', $packageId);
        }

        $students = $builder->get()->getResultArray();
        $uvpm = new UserVideoProgressModel();

        foreach ($students as $stu) {
            $userId = $stu['user_id'];
            $pkgId = $stu['package_id'];

            // Get assessments submitted by this student
            $asmtSubs = $db->table('student_assessments sa')
                ->select('sa.*, c.course_name')
                ->join('courses c', 'c.course_id = sa.course_id', 'left')
                ->where('sa.user_id', $userId)
                ->get()->getResultArray();

            if (!empty($asmtSubs)) {
                foreach ($asmtSubs as $asmt) {
                    fputcsv($output, [
                        '#' . $stu['user_id'],
                        $stu['first_name'],
                        $stu['last_name'],
                        $stu['email'],
                        $stu['phone'],
                        $stu['package_name'] ?: 'N/A',
                        $asmt['course_name'] ?: 'N/A',
                        'N/A',
                        $asmt['answer_file'],
                        $asmt['status'],
                        $asmt['score'] ?: 'N/A',
                        $asmt['submitted_at']
                    ]);
                }
            } else {
                fputcsv($output, [
                    '#' . $stu['user_id'],
                    $stu['first_name'],
                    $stu['last_name'],
                    $stu['email'],
                    $stu['phone'],
                    $stu['package_name'] ?: 'N/A',
                    'All Courses',
                    '0%',
                    'None',
                    'No Submission',
                    'N/A',
                    'N/A'
                ]);
            }
        }

        fclose($output);
        exit;
    }
}
