<?php


namespace App\Controllers\Admin;


use App\Controllers\BaseController;
use App\Libraries\GroceryCrud;
use App\Models\CompanyModel;
use App\Models\QuestionModel;
use App\Models\user\UserModel;

class Dashboard extends BaseController
{
    private  $crud;

    public function __construct()
    {
        $this->crud = new GroceryCrud();
        $this->crud->setTheme('enlink');
    }

    public function index()
    {
        $db = \Config\Database::connect();
        $um = new UserModel();
        $cm = new CompanyModel();
        $qm = new QuestionModel();

        $data['company_count'] = $cm->countAll();
        $data['question_count'] = $qm->countAll();
        $data['users_count'] = $um->countAll();

        // Count assessments and submissions
        $data['assessments_count'] = $db->table('assessments')->countAllResults();
        $data['submissions_count'] = $db->table('student_assessments')->countAllResults();
        $data['institutions_count'] = $db->table('mst_institutions')->countAllResults();
        $data['courses_count'] = $db->table('courses')->countAllResults();

        // Fetch latest registered users with subscription info if available
        $builder = $db->table('users u')
            ->select('u.*, bp.title as package_name')
            ->join('mst_subscriptions s', 's.user_id = u.user_id', 'left')
            ->join('b2b_packages bp', 'bp.PKPackageID = s.package_id', 'left')
            ->orderBy('u.user_id', 'desc')
            ->limit(10);
        $data['users'] = $builder->get()->getResultArray();

        // Fetch recent student assessment submissions (activity feed)
        $asmtBuilder = $db->table('student_assessments sa')
            ->select('sa.*, u.first_name, u.last_name, u.email, c.course_name, a.title as assessment_title')
            ->join('users u', 'u.user_id = sa.user_id', 'left')
            ->join('assessments a', 'a.id = sa.assessment_id', 'left')
            ->join('courses c', 'c.course_id = sa.course_id', 'left')
            ->orderBy('sa.id', 'desc')
            ->limit(8);
        $data['recent_assessments'] = $asmtBuilder->get()->getResultArray();

        return view('admin/dashboard', $data);
    }

    public function settings(): string
    {
        return view('admin/settings');
    }


//    public function home()
//    {
////        $crud = new GroceryCrud();
//        $this->crud->setTable('actor');
//        $this->crud->setSubject('Actor', 'Actors');
//        $this->crud->columns(['actor_id','fullname','last_update']);
//
//        try {
//            $output = $this->crud->render();
////            echo "<pre>";
////            print_r($output);
////            echo "</pre>";
//            return $this->_exampleOutput($output);
//        } catch (\Exception $e) {
//            echo "<pre>";
//            print_r($e);
//            echo "</pre>";
////            return $this-
//        }
//
//
//
////        return view('la
//    }
//
//    private function _exampleOutput($output = null) {
//        return view('example', (array)$output);
//    }
//
//    public function edit($id) {
//        $this->crud->setTable('actor');
//        $this->crud->setSubject('Actor', 'Actors');
//        $output = $this->crud->render();
//        return $this->_exampleOutput($output);
////        echo "<pre>";
////        print_r($output);
////        echo "</pre>";
//    }
}
