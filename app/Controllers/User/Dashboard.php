<?php


namespace App\Controllers\User;


use App\Controllers\BaseController;
use App\Libraries\DbFetchnProcess;
use App\Libraries\GroceryCrud;
use App\Models\QuestionModel;
use App\Models\user\UserModel;
use App\Models\SubscriptionModel;  
use App\Models\CourseModel;
use App\Models\PackageModel;
use App\Models\PackageCourseModel;
use App\Models\VideoModel;
use App\Models\VideoTutorialModel;
use App\Models\UserVideoProgressModel;
use CodeIgniter\Database\Exceptions\DatabaseException;
use CodeIgniter\Model;
use Config\Database;

class Dashboard extends BaseController
{
    private  $crud;
    protected $data;
    protected $userId;

    public function __construct()
    {
        $this->crud = new GroceryCrud();
        $this->crud->setTheme('enlink');
        $um = new UserModel();
        $this->data['user_info'] = $um->get_current_user_info();
    }
    
  
    public function index()
    {
        $data = $this->data;
        $userId = $this->data['user_info']['user_id'];
        $user_enroll_type = $this->data['user_info']['enroll_type'];
        $db = Database::connect();

        if ($user_enroll_type == "1") {
            $builder = $db->table('mst_subscriptions');
            // B2B: Use PKPackageID and PackageName (prefer custom_title)
            $builder->select('b2b_packages.PKPackageID as package_id, COALESCE(NULLIF(b2b_packages.custom_title, ""), b2b_packages.title) as package_name, b2b_packages.duration, mst_subscriptions.start_date, mst_subscriptions.end_date');
            $builder->join('b2b_packages', 'b2b_packages.PKPackageID = mst_subscriptions.package_id');
            $builder->where('mst_subscriptions.user_id', $userId);
            $builder->where('mst_subscriptions.start_date <= CURDATE()');
            $builder->where('mst_subscriptions.end_date >= CURDATE()');
            $builder->distinct(true);
        } else {
            $builder = $db->table('mst_subscriptions');
            // B2C: Use package_id and title (prefer custom_title)
            $builder->select('mst_packages.package_id as package_id, COALESCE(NULLIF(mst_packages.custom_title, ""), mst_packages.title) as package_name, mst_packages.duration, mst_subscriptions.start_date, mst_subscriptions.end_date');
            $builder->join('mst_packages', 'mst_packages.package_id = mst_subscriptions.package_id');
            $builder->where('mst_subscriptions.user_id', $userId);
            $builder->where('mst_subscriptions.start_date <= CURDATE()');
            $builder->where('mst_subscriptions.end_date >= CURDATE()');
            $builder->distinct(true);
        }

        $packages = $builder->get()->getResultArray();
        $uvpm = new UserVideoProgressModel();

        $totalCompletedVideos = $uvpm->where('user_id', $userId)->where('video_tutorial_id IS NOT NULL')->countAllResults();
        $totalCompletedSimulations = $uvpm->where('user_id', $userId)->where('question_id IS NOT NULL')->countAllResults();
        $totalTasksDone = $totalCompletedVideos + $totalCompletedSimulations;

        // Calculate progress for each package
        foreach ($packages as &$pkg) {
            $pId = $pkg['package_id'];
            if ($user_enroll_type == "1") {
                $courseCount = $db->table('b2b_package_course_mapping')->where('PKPackageID', $pId)->countAllResults();
            } else {
                $courseCount = $db->table('package_course_mapping')->where('PKPackageID', $pId)->countAllResults();
            }
            $pkg['course_count'] = $courseCount > 0 ? $courseCount : 6;

            $packageItems = $db->table('package_lessons_mapping')->where('package_id', $pId)->countAllResults();
            $packageCompleted = $uvpm->where('user_id', $userId)->where('package_id', $pId)->countAllResults();
            
            $pkg['progress'] = $packageItems > 0 ? round(($packageCompleted / $packageItems) * 100) : 0;
            $pkg['total_items'] = $packageItems;
            $pkg['completed_items'] = $packageCompleted;
        }

        // Fetch recent assessment submissions for this user
        $asmtSubmissions = $db->table('student_assessments sa')
            ->select('sa.*, c.course_name, a.title as assessment_title, comp.name as company_name')
            ->join('courses c', 'c.course_id = sa.course_id', 'left')
            ->join('assessments a', 'a.id = sa.assessment_id', 'left')
            ->join('companies comp', 'comp.company_id = a.company_id', 'left')
            ->where('sa.user_id', $userId)
            ->orderBy('sa.id', 'DESC')
            ->limit(6)
            ->get()->getResultArray();

        // Fetch recent learning activity stream for this user
        $recentActivity = $db->table('user_video_progress uvp')
            ->select('uvp.*, vt.title as video_title, mq.question as question_title, c.course_name')
            ->join('video_tutorials vt', 'vt.id = uvp.video_tutorial_id', 'left')
            ->join('mst_questions mq', 'mq.question_id = uvp.question_id', 'left')
            ->join('courses c', 'c.course_id = uvp.course_id', 'left')
            ->where('uvp.user_id', $userId)
            ->orderBy('uvp.id', 'DESC')
            ->limit(8)
            ->get()->getResultArray();

        $data['packages']                   = $packages;
        $data['total_completed_videos']     = $totalCompletedVideos;
        $data['total_completed_simulations']= $totalCompletedSimulations;
        $data['total_tasks_done']           = $totalTasksDone;
        $data['assessment_submissions']     = $asmtSubmissions;
        $data['recent_activity']            = $recentActivity;
        $data['title']                      = 'Student Dashboard';
        
        return view('user/dashboard', $data);
    }
    
    public function packageCourses($packageId)
    {
        $data = $this->data;
        $userId = $this->data['user_info']['user_id'];
        $user_enroll_type = $this->data['user_info']['enroll_type'];
        $db = Database::connect();

        if ($user_enroll_type == "1") {
            $builder = $db->table('mst_subscriptions');
            $builder->select('courses.*');
            $builder->join('b2b_packages', 'b2b_packages.PKPackageID = mst_subscriptions.package_id');
            $builder->join('b2b_package_course_mapping', 'b2b_package_course_mapping.PKPackageID = b2b_packages.PKPackageID');
            $builder->join('courses', 'courses.course_id = b2b_package_course_mapping.PKCourseID');
            $builder->where('mst_subscriptions.user_id', $userId);
            $builder->where('mst_subscriptions.package_id', $packageId);
            $builder->where('mst_subscriptions.start_date <= CURDATE()');
            $builder->where('mst_subscriptions.end_date >= CURDATE()');
            $builder->distinct(true);
        } else {
            $builder = $db->table('mst_subscriptions');
            $builder->select('courses.*');
            $builder->join('mst_packages', 'mst_packages.package_id = mst_subscriptions.package_id');
            $builder->join('package_course_mapping', 'package_course_mapping.PKPackageID = mst_packages.package_id');
            $builder->join('courses', 'courses.course_id = package_course_mapping.PKCourseID');
            $builder->where('mst_subscriptions.user_id', $userId);
            $builder->where('mst_subscriptions.package_id', $packageId);
            $builder->where('mst_subscriptions.start_date <= CURDATE()');
            $builder->where('mst_subscriptions.end_date >= CURDATE()');
            $builder->distinct(true);
        }

        $courses = $builder->get()->getResultArray();
        
        $vtm = new VideoTutorialModel();
        $uvpm = new UserVideoProgressModel();

        foreach ($courses as &$course) {
            $courseId = $course['course_id'];
            
            $completedVideoIds = $uvpm->where('user_id', $userId)
                                      ->where('course_id', $courseId)
                                      ->where('video_tutorial_id IS NOT NULL')
                                      ->groupStart()
                                          ->where('package_id', $packageId)
                                          ->orWhere('package_id IS NULL')
                                          ->orWhere('package_id', 0)
                                      ->groupEnd()
                                      ->findColumn('video_tutorial_id') ?: [];

            $completedQuestionIds = $uvpm->where('user_id', $userId)
                                         ->where('course_id', $courseId)
                                         ->where('question_id IS NOT NULL')
                                         ->groupStart()
                                             ->where('package_id', $packageId)
                                             ->orWhere('package_id IS NULL')
                                             ->orWhere('package_id', 0)
                                         ->groupEnd()
                                         ->findColumn('question_id') ?: [];

            // Get mapped lessons for this package and course
            $sequenceBuilder = $db->table('package_lessons_mapping');
            $sequenceBuilder->where('course_id', $courseId);
            $sequenceBuilder->where('package_id', $packageId);
            if ($user_enroll_type == "1") {
                $sequenceBuilder->groupStart()
                    ->where('package_type', 'b2b')
                    ->orWhere('package_type', 'normal')
                    ->groupEnd();
            }
            $sequenceEntries = $sequenceBuilder->get()->getResultArray();
            
            $totalVideos = 0;
            $totalQuestions = 0;
            $completedCount = 0;
            
            if (!empty($sequenceEntries)) {
                foreach ($sequenceEntries as $seq) {
                    if ($seq['item_type'] === 'video') {
                        $totalVideos++;
                        if (in_array($seq['item_id'], $completedVideoIds)) {
                            $completedCount++;
                        }
                    } elseif ($seq['item_type'] === 'question') {
                        $totalQuestions++;
                        if (in_array($seq['item_id'], $completedQuestionIds)) {
                            $completedCount++;
                        }
                    }
                }
                $totalItems = count($sequenceEntries);
            } else {
                $allVideos = $db->table('video_tutorials')->where('course_id', $courseId)->where('status', 1)->get()->getResultArray();
                $allQuestions = $db->table('mst_questions')->where('category', $courseId)->where('active', 1)->get()->getResultArray();
                $totalVideos = count($allVideos);
                $totalQuestions = count($allQuestions);
                $totalItems = $totalVideos + $totalQuestions;
                
                foreach ($allVideos as $v) {
                    if (in_array($v['id'], $completedVideoIds)) $completedCount++;
                }
                foreach ($allQuestions as $q) {
                    if (in_array($q['question_id'], $completedQuestionIds)) $completedCount++;
                }
            }
            
            $course['progress'] = $totalItems > 0 ? round(($completedCount / $totalItems) * 100) : 0;
            $course['total_videos'] = $totalVideos;
            $course['total_questions'] = $totalQuestions;
            $course['completed_count'] = $completedCount;
            $course['total_items'] = $totalItems;
        }

        $data['courses'] = $courses;
        $data['package_id'] = $packageId;
        $data['title'] = 'Package Courses';
        
        return view('user/package_courses', $data);
    }
    
    public function getquestions()
    {
        $data = $this->data;
        $userId = $this->data['user_info']['user_id'];
        $user_enroll_type = $this->data['user_info']['enroll_type'];
        $db = Database::connect();

        if ($user_enroll_type == "1") {
            $builder = $db->table('mst_subscriptions');
            // B2B: Use PKPackageID and PackageName (prefer custom_title)
            $builder->select('b2b_packages.PKPackageID as package_id, COALESCE(NULLIF(b2b_packages.custom_title, ""), b2b_packages.title) as package_name');
            $builder->join('b2b_packages', 'b2b_packages.PKPackageID = mst_subscriptions.package_id');
            $builder->where('mst_subscriptions.user_id', $userId);
            $builder->where('mst_subscriptions.start_date <= CURDATE()');
            $builder->where('mst_subscriptions.end_date >= CURDATE()');
            $builder->distinct(true);
        } else {
            $builder = $db->table('mst_subscriptions');
            // B2C: Use package_id and title (prefer custom_title)
            $builder->select('mst_packages.package_id as package_id, COALESCE(NULLIF(mst_packages.custom_title, ""), mst_packages.title) as package_name');
            $builder->join('mst_packages', 'mst_packages.package_id = mst_subscriptions.package_id');
            $builder->where('mst_subscriptions.user_id', $userId);
            $builder->where('mst_subscriptions.start_date <= CURDATE()');
            $builder->where('mst_subscriptions.end_date >= CURDATE()');
            $builder->distinct(true);
        }

        $packages = $builder->get()->getResultArray();

        $data['packages'] = $packages;
        $data['title'] = 'Simulations';
        $data['hide_welcome'] = true;
        
        return view('user/dashboard', $data);
    }
    
      
    
      public function index_filter(){
        
        $data = $this->data; 
        $db = Database::connect(); 
        $cat=  $this->request->getPost('category');
        $cat_type= $this->request->getPost('mode_id');
        
        $um = new UserModel();
        $userId = $um->get_user_Id();
        $dbProcess = new DbFetchnProcess();
        
       
            $student_new = $um->find($userId);
            $enroll_type=$student_new['enroll_type'];
            if($enroll_type =="0"){
        
                    // Normal student working
                    $builder = $db->table('mst_subscriptions');
                     $builder->select('mst_questions.*, courses.course_name,companies.name'); 
                    $builder->join('mst_packages', 'mst_packages.package_id = mst_subscriptions.package_id');
                    $builder->join('package_lessons_mapping', 'package_lessons_mapping.package_id = mst_packages.package_id AND package_lessons_mapping.package_type = "normal" AND package_lessons_mapping.item_type = "question"');
                    $builder->join('mst_questions', 'mst_questions.question_id = package_lessons_mapping.item_id');
                    $builder->join('courses', 'courses.course_id = mst_questions.category'); // Join with courses table
                    $builder->join('companies', 'companies.company_id = mst_questions.company_id', 'left'); // Join with companies table
                    $builder->where('mst_subscriptions.user_id', $userId); // Filter by user
                    
                    if ($cat!="") {
                          $builder->where('courses.course_id', $cat); // Filter by user
                        }
                        if ($cat_type!="") {
                             $builder->where('mst_questions.question_type', $cat_type); // Filter by user
                        }
                        $builder->distinct(true);
                    $builder-> where('mst_questions.active', 1);
                    $builder->where('mst_subscriptions.start_date <= CURDATE()'); // Active subscriptions
                    $builder->where('mst_subscriptions.end_date >= CURDATE()');  // Active subscriptions
                    $builder->orderBy('mst_questions.question_id', 'ASC'); 
                  //  $builder->group_by('mst_questions.question_id'); 
                    $query = $builder->get();
                
                    // Fetch results as an array
                    $data['questions'] = $query->getResultArray(); 
                  //  print_r($data['questions']); exit;
                  
            }else{
                 
                 // institution student working
                  $builder = $db->table('mst_subscriptions');
     $builder->select('mst_questions.*, courses.course_name,companies.name'); 
    $builder->join('b2b_packages', 'b2b_packages.PKPackageID  = mst_subscriptions.package_id'); 
    $builder->join('package_lessons_mapping', 'package_lessons_mapping.package_id = b2b_packages.PKPackageID AND package_lessons_mapping.package_type = "b2b" AND package_lessons_mapping.item_type = "question"');
    $builder->join('mst_questions', 'mst_questions.question_id = package_lessons_mapping.item_id');
        $builder->join('courses', 'courses.course_id = mst_questions.category'); // Join with courses table
        $builder->join('companies', 'companies.company_id = mst_questions.company_id', 'left'); // Join with companies table
    $builder->where('mst_subscriptions.user_id', $userId); // Filter by user
    $builder->where('mst_subscriptions.start_date <= CURDATE()'); // Active subscriptions
    $builder->where('mst_subscriptions.end_date >= CURDATE()');  // Active subscriptions
  $builder-> where('mst_questions.active', 1);
     $builder->orderBy('mst_questions.question_id', 'ASC'); 
    // $builder->group_by('mst_questions.question_id'); 
     if ($cat!="") {
                          $builder->where('courses.course_id', $cat); // Filter by user
                        }
                        if ($cat_type!="") {
                             $builder->where('mst_questions.question_type', $cat_type); // Filter by user
                        }
     $builder->distinct(true);
                 
                 
                 
                 
                 
                //     $builder = $db->table('mst_subscriptions');
                //      $builder->select('mst_questions.*, courses.course_name,companies.name'); 
                //     $builder->join('b2b_packages', 'b2b_packages.PKPackageID = mst_subscriptions.package_id');
                //     $builder->join('package_course_mapping', 'package_course_mapping.PKPackageID = b2b_packages.PKPackageID');
                //     $builder->join('mst_questions', 'mst_questions.category = package_course_mapping.PKCourseID');
                //     $builder->join('courses', 'courses.course_id = mst_questions.category'); // Join with courses table
                //     $builder->join('companies', 'companies.company_id = mst_questions.company_id'); // Join with courses table
                //   // $builder->where('mst_subscriptions.user_id', $userId); // Filter by user
                    
                //     if ($cat!="") {
                //           $builder->where('courses.course_id', $cat); // Filter by user
                //         }
                //         if ($cat_type!="") {
                //              $builder->where('mst_questions.question_type', $cat_type); // Filter by user
                //         }
                //         $builder->distinct(true);
                //     $builder-> where('mst_questions.active', 1);
                //     $builder->where('mst_subscriptions.start_date <= CURDATE()'); // Active subscriptions
                //     $builder->where('mst_subscriptions.end_date >= CURDATE()');  // Active subscriptions
                //     $builder->orderBy('mst_questions.question_id', 'ASC'); 
                //   //  $builder->group_by('mst_questions.question_id'); 
                //     $query = $builder->get();
                 $query = $builder->get();
                    // Fetch results as an array
                    $data['questions'] = $query->getResultArray(); 
                  //  print_r($data['questions']); exit;
                
            }
          
          
          
              $msg="";
        $ii = 1;
        if(!empty($data['questions'])){
           foreach ( $data['questions'] as  $question){
               
                $filePath = base_url() . '/public/assets/uploads/questions/' . $question['questionscol'];
                                    $run = base_url() . '/simulation/dashboard/' . $question['question_id'];
                                    
                                    if ($question['category'] == "8") {
                                        $run = base_url() . '/eway-load/' . $question['question_id'];
                                    }
    
                                    if ($question['category'] == "3") {
                                        $run = base_url() . '/efiling-load/' . $question['question_id'];
                                        $question['category'] = "TDS FILING";
                                    }
    
                                    if ($question['category'] == "9") {
                                        $run = base_url() . '/esi-load/' . $question['question_id'];
                                    }
                                     if ($question['category'] == "10") {
                                        $run = base_url() . '/pf-load/' . $question['question_id'];
                                    } if ($question['category'] == "11") {
                                        $run = base_url() . '/vat-load/' . $question['question_id'];
                                    }
                                    if ($question['category'] == "12") {
                                        $run = base_url() . '/user/accounting/'. $question['question_id'];
                                    }
               
                 $msg.='
                                            <tr>
                                            <td>#'.$ii++.'</td>
                                            <td>
                                                <span class="badge badge-easy">'.strtoupper($question['question_type']).' </span>
                                            </td>
                                            <td>
                                                '.$question['question'].'
                                            </td>
                                            <td>'.strtoupper($question['course_name']).'</td>
                                            <td>'.$question['name'].'</td>';
                                             if($question['category']=="12") {
                                              $msg.='  <td> <a href="'.$filePath.'" class="btn btn-success btn-sm" disabled>Download</a></td>';
                                             }else{
                                                 $msg.='  <td> <a href="'.$filePath.'" class="btn btn-success btn-sm" >Download</a></td>';
                                             }
                                            $msg.=' <td>
                                                <a href="'.$run.'" class="btn btn-primary btn-sm">Run</a>
                                            </td>
            
                                        </tr>';
           }
        }else{
              $msg.='<tr> <td colspan="3" style="color:red;">Not subscribed to this package.</td></tr>';
        }
           echo $msg; exit;
      }
      
     
      
    
     public function index_filter1(){
        
        $data = $this->data; 
        $db = Database::connect(); 
        $cat= $_POST['cate'];
        $cat_type=$_POST['type1'];  
            
            $builder = $db->table('mst_subscriptions');
            $builder->select('mst_questions.*, courses.course_name'); 
            $builder->join('mst_packages', 'mst_packages.package_id = mst_subscriptions.package_id');
            $builder->join('package_lessons_mapping', 'package_lessons_mapping.package_id = mst_packages.package_id AND package_lessons_mapping.package_type = "normal" AND package_lessons_mapping.item_type = "question"');
            $builder->join('mst_questions', 'mst_questions.question_id = package_lessons_mapping.item_id');
            $builder->join('courses', 'courses.course_id = mst_questions.category'); // Join with courses table
            $builder->where('mst_subscriptions.user_id', $userId); // Filter by user
            if ($cat!="") {
                   $builder->where('courses.course_id', $cat); // Filter by user
                }
                if ($cat_type!="") {
                     $builder->where('mst_questions.question_type', $cat_type); // Filter by user
                }
           
            $builder->where('mst_subscriptions.start_date <= CURDATE()'); // Active subscriptions
            $builder->where('mst_subscriptions.end_date >= CURDATE()');  // Active subscriptions
            $builder->orderBy('mst_questions.question_id', 'ASC'); 
        
            // Execute the query
            $query = $builder->get();
        
            // Fetch results as an array
            $data['questions'] = $query->getResultArray();
          
        $msg="";
        $ii = 1;
       foreach ( $data['questions'] as $index => $question){
         
               
                 
                             
                                $filePath = base_url() . '/public/assets/uploads/questions/' . $question['questionscol'];
                                $run = base_url() . '/simulation/dashboard/' . $question['question_id'];
                                
                                if ($question['category'] == "8") {
                                    $run = base_url() . '/eway-load/' . $question['question_id'];
                                }

                                if ($question['category'] == "3") {
                                    $run = base_url() . '/efiling-load/' . $question['question_id'];
                                   // $question['category'] = "TDS FILING";
                                }

                                if ($question['category'] == "9") {
                                    $run = base_url() . '/esi-load/' . $question['question_id'];
                                }
                                 if ($question['category'] == "10") {
                                    $run = base_url() . '/pf-load/' . $question['question_id'];
                                }
                                
                                  if($cat!="" && $cat_type!=""){
                                         if($question['category'] ==$cat && $question['question_type'] ==$cat_type){
                                          
                                         $msg.='
                                        <tr>
                                        <td>#'.$ii++.'</td>
                                        <td>
                                            <span class="badge badge-pill badge-cyan font-size-12">'.strtoupper($question['question_type']).' </span>
                                        </td>
                                        <td>
                                            '.$question['question'].'
                                        </td>
                                        <td>'.strtoupper($question['category']).'</td>
                                        <td>'.$question['name'].'</td>
                                        <td> <a href="'.$filePath.'" class="btn btn-success btn-sm">Download</a></td>
                                        <td>
                                            <a href="'.$run.'" class="btn btn-primary btn-sm">Run</a>
                                        </td>
        
                                    </tr>';
                                         }
               
                                 }elseif($cat!="" && $cat_type ==""){
                                  if($question['category'] ==$cat){
                                 $msg.='
                                <tr>
                                <td>#'.$ii++.'</td>
                                <td>
                                    <span class="badge badge-pill badge-cyan font-size-12">'.strtoupper($question['question_type']).' </span>
                                </td>
                                <td>
                                    '.$question['question'].'
                                </td>
                                <td>'.strtoupper($question['category']).'</td>
                                <td>'.$question['name'].'</td>
                                <td> <a href="'.$filePath.'" class="btn btn-success btn-sm">Download</a></td>
                                <td>
                                    <a href="'.$run.'" class="btn btn-primary btn-sm">Run</a>
                                </td>

                            </tr>';
                                  }
               
                                 }elseif($cat=="" && $cat_type !=""){
                                       if($question['question_type'] ==$cat_type){
                                     $msg.='
                                    <tr>
                                    <td>#'.$ii++.'</td>
                                    <td>
                                        <span class="badge badge-pill badge-cyan font-size-12">'.strtoupper($question['question_type']).' </span>
                                    </td>
                                    <td>
                                        '.$question['question'].'
                                    </td>
                                    <td>'.strtoupper($question['category']).'</td>
                                    <td>'.$question['name'].'</td>
                                    <td> <a href="'.$filePath.'" class="btn btn-success btn-sm">Download</a></td>
                                    <td>
                                        <a href="'.$run.'" class="btn btn-primary btn-sm">Run</a>
                                    </td>
    
                                </tr>';
                                       }
               
                                 }
     }
        return $msg;
    }

    public function settings(): string
    {

        return view('user/settings', $this->data);
    }

    public function enrolledCourses()
    {
        return redirect()->to(base_url('user/dashboard'));
    }

    public function courseLessons($courseId = null, $packageId = null)
    {
        if (empty($courseId)) {
            return redirect()->to(base_url('user/dashboard'))->with('error', 'Invalid Course.');
        }

        $data = $this->data;
        $userId = $this->data['user_info']['user_id'];
        $user_enroll_type = $this->data['user_info']['enroll_type'];
        $db = Database::connect();

        // 1. Verify user subscription to this course
        if ($user_enroll_type == "1") {
            $builder = $db->table('mst_subscriptions');
            $builder->select('courses.course_id, mst_subscriptions.package_id');
            $builder->join('b2b_packages', 'b2b_packages.PKPackageID = mst_subscriptions.package_id');
            $builder->join('b2b_package_course_mapping', 'b2b_package_course_mapping.PKPackageID = b2b_packages.PKPackageID');
            $builder->join('courses', 'courses.course_id = b2b_package_course_mapping.PKCourseID');
            $builder->where('mst_subscriptions.user_id', $userId);
            $builder->where('courses.course_id', $courseId);
            if ($packageId) {
                $builder->where('mst_subscriptions.package_id', $packageId);
            }
            $builder->where('mst_subscriptions.start_date <= CURDATE()');
            $builder->where('mst_subscriptions.end_date >= CURDATE()');
        } else {
            $builder = $db->table('mst_subscriptions');
            $builder->select('courses.course_id, mst_subscriptions.package_id');
            $builder->join('mst_packages', 'mst_packages.package_id = mst_subscriptions.package_id');
            $builder->join('package_course_mapping', 'package_course_mapping.PKPackageID = mst_packages.package_id');
            $builder->join('courses', 'courses.course_id = package_course_mapping.PKCourseID');
            $builder->where('mst_subscriptions.user_id', $userId);
            $builder->where('courses.course_id', $courseId);
            if ($packageId) {
                $builder->where('mst_subscriptions.package_id', $packageId);
            }
            $builder->where('mst_subscriptions.start_date <= CURDATE()');
            $builder->where('mst_subscriptions.end_date >= CURDATE()');
        }

        $isSubscribed = $builder->get()->getRowArray();
        if (!$isSubscribed) {
            return redirect()->to(base_url('user/dashboard'))->with('error', 'You are not subscribed to this course.');
        }

        // 2. Fetch course details
        $courseModel = new CourseModel();
        $course = $courseModel->find($courseId);
        if (!$course) {
            return redirect()->to(base_url('user/dashboard'))->with('error', 'Course not found.');
        }

        // 3. Fetch lessons (videos) under this course
        $vtm = new VideoTutorialModel();
        $videos = $vtm->where('category_id', $courseId)->orderBy('id', 'ASC')->findAll();

        // 4. Fetch questions (simulations) under this course
        $qBuilder = $db->table('mst_questions');
        $qBuilder->select('mst_questions.*, companies.name as company_name, courses.course_name');
        $qBuilder->join('companies', 'companies.company_id = mst_questions.company_id', 'left');
        $qBuilder->join('courses', 'courses.course_id = mst_questions.category', 'left');
        $qBuilder->where('mst_questions.category', $courseId);
        $qBuilder->where('mst_questions.active', 1);
        $qBuilder->orderBy('mst_questions.question_id', 'ASC');
        $questions = $qBuilder->get()->getResultArray();

        // 5. Fetch user's completed items progress
        $uvpm = new UserVideoProgressModel();
        $packageId = $isSubscribed['package_id'];
        $completedVideoIds = $uvpm->where('user_id', $userId)->where('package_id', $packageId)->where('course_id', $courseId)->where('video_tutorial_id IS NOT NULL')->findColumn('video_tutorial_id') ?: [];
        $completedQuestionIds = $uvpm->where('user_id', $userId)->where('package_id', $packageId)->where('course_id', $courseId)->where('question_id IS NOT NULL')->findColumn('question_id') ?: [];

        $items = [];
        $completedCount = 0;

        // 6. Format videos array
        $formattedVideos = [];
        foreach ($videos as $video) {
            $isCompleted = in_array($video['id'], $completedVideoIds);
            $formattedVideos[$video['id']] = [
                'id' => $video['id'],
                'type' => 'video',
                'title' => $video['title'],
                'description' => $video['description'],
                'video_platform' => $video['video_platform'],
                'video_url' => $video['video_url'],
                'completed' => $isCompleted
            ];
        }

        // 7. Format questions array
        $formattedQuestions = [];
        foreach ($questions as $q) {
            $isCompleted = in_array($q['question_id'], $completedQuestionIds);

            // Generate Run URL logic
            $run = base_url() . '/simulation/dashboard/' . $q['question_id'];
            if ($q['category'] == "8") {
                $run = base_url() . '/eway-load/' . $q['question_id'];
            }
            if ($q['category'] == "3") {
                $run = base_url() . '/efiling-load/' . $q['question_id'];
            }
            if ($q['category'] == "9") {
                $run = base_url() . '/esi-load/' . $q['question_id'];
            }
            if ($q['category'] == "10") {
                $run = base_url() . '/pf-load/' . $q['question_id'];
            }
            if ($q['category'] == "11") {
                $run = base_url() . '/vat-load/' . $q['question_id'];
            }
            if ($q['category'] == "12") {
                $run = base_url() . '/user/accounting/' . $q['question_id'];
            }

            $filePath = base_url() . '/public/assets/uploads/questions/' . $q['questionscol'];

            $formattedQuestions[$q['question_id']] = [
                'id' => $q['question_id'],
                'type' => 'question',
                'title' => $q['question'],
                'description' => 'Difficulty: ' . strtoupper($q['question_type']) . ' | Company: ' . ($q['company_name'] ?: 'N/A'),
                'company_name' => $q['company_name'] ?: 'N/A',
                'question_type' => $q['question_type'],
                'category_id' => $q['category'],
                'download_url' => $filePath,
                'run_url' => $run,
                'completed' => $isCompleted
            ];
        }

        // 8. Fetch sequence and order items
        $packageId = $isSubscribed['package_id'];
        $sequenceBuilder = $db->table('package_lessons_mapping');
        $sequenceBuilder->where('course_id', $courseId);
        $sequenceBuilder->where('package_id', $packageId);
        $sequenceBuilder->where('package_type', $user_enroll_type == "1" ? 'b2b' : 'normal');
        $sequenceBuilder->orderBy('position', 'ASC');
        $sequenceEntries = $sequenceBuilder->get()->getResultArray();

        if (!empty($sequenceEntries)) {
            $completedCount = 0; // Reset and count only mapped items
            foreach ($sequenceEntries as $seq) {
                if ($seq['item_type'] === 'video' && isset($formattedVideos[$seq['item_id']])) {
                    $items[] = $formattedVideos[$seq['item_id']];
                    if ($formattedVideos[$seq['item_id']]['completed']) $completedCount++;
                } elseif ($seq['item_type'] === 'question' && isset($formattedQuestions[$seq['item_id']])) {
                    $items[] = $formattedQuestions[$seq['item_id']];
                    if ($formattedQuestions[$seq['item_id']]['completed']) $completedCount++;
                }
            }
        }

        // Fallback: If no sequence is configured, load all videos then questions
        if (empty($items)) {
            foreach ($formattedVideos as $v) {
                $items[] = $v;
                if ($v['completed']) $completedCount++;
            }
            foreach ($formattedQuestions as $q) {
                $items[] = $q;
                if ($q['completed']) $completedCount++;
            }
        }

        // 9. Fetch Assessments for this Course/Category
        $assessmentsBuilder = $db->table('assessments');
        $assessmentsBuilder->select('assessments.*, companies.name as company_name, courses.course_name');
        $assessmentsBuilder->join('companies', 'companies.company_id = assessments.company_id', 'left');
        $assessmentsBuilder->join('courses', 'courses.course_id = assessments.course_id', 'left');
        $assessmentsBuilder->where('assessments.course_id', $courseId);
        $assessmentsBuilder->where('assessments.status', 1);
        $assessmentsBuilder->orderBy('assessments.id', 'ASC');
        $courseAssessments = $assessmentsBuilder->get()->getResultArray();

        if (!empty($courseAssessments)) {
            // Check student submissions for these assessments
            $subBuilder = $db->table('student_assessments');
            $subBuilder->where('user_id', $userId);
            $subBuilder->where('course_id', $courseId);
            $userSubs = $subBuilder->get()->getResultArray();
            
            $subsMap = [];
            foreach ($userSubs as $sub) {
                $subsMap[$sub['assessment_id']] = $sub;
            }

            $allSubmitted = true;
            foreach ($courseAssessments as &$asmt) {
                $asmt['submitted'] = isset($subsMap[$asmt['id']]);
                $asmt['submission'] = isset($subsMap[$asmt['id']]) ? $subsMap[$asmt['id']] : null;
                if (!$asmt['submitted']) {
                    $allSubmitted = false;
                }

                $run = base_url() . '/simulation/dashboard/' . $asmt['id'];
                if ($courseId == "8") $run = base_url() . '/eway-load/' . $asmt['id'];
                if ($courseId == "3") $run = base_url() . '/efiling-load/' . $asmt['id'];
                if ($courseId == "9") $run = base_url() . '/esi-load/' . $asmt['id'];
                if ($courseId == "10") $run = base_url() . '/pf-load/' . $asmt['id'];
                if ($courseId == "11") $run = base_url() . '/vat-load/' . $asmt['id'];
                if ($courseId == "12") $run = base_url() . '/user/accounting/' . $asmt['id'];

                $asmt['run_url'] = $run;
                $asmt['download_url'] = !empty($asmt['download_file']) ? base_url() . '/public/assets/uploads/questions/' . $asmt['download_file'] : '#';
            }

            // Append Assessment as the last lesson in the category
            $items[] = [
                'id' => 999999,
                'type' => 'assessment',
                'title' => 'Assessment',
                'description' => 'Course Assessment & Practical Evaluation',
                'completed' => $allSubmitted,
                'assessments' => $courseAssessments
            ];
            if ($allSubmitted) $completedCount++;
        }

        // Determine active item: check if specific lesson requested or first uncompleted item
        $activeItem = null;
        if (!empty($itemId)) {
            foreach ($items as $item) {
                if ($item['id'] == $itemId || ($itemId == 999999 && $item['type'] === 'assessment')) {
                    $activeItem = $item;
                    break;
                }
            }
        }

        if ($activeItem === null) {
            foreach ($items as $item) {
                if (!$item['completed']) {
                    $activeItem = $item;
                    break;
                }
            }
        }
        if ($activeItem === null && !empty($items)) {
            $activeItem = $items[0];
        }

        $totalItems = count($items);
        $progressPercent = $totalItems > 0 ? round(($completedCount / $totalItems) * 100) : 0;

        $data['course'] = $course;
        $data['packageId'] = $packageId;
        $data['lessons'] = $items;
        $data['active_lesson'] = $activeItem;
        $data['progress_percent'] = $progressPercent;
        $data['title'] = $course['course_name'] . ' - Lessons';

        return view('user/course_lessons', $data);
    }

    public function uploadAssessmentAnswer()
    {
        $userId = $this->data['user_info']['user_id'];
        if (empty($userId)) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Unauthorized.']);
        }

        $assessmentId = $this->request->getPost('assessment_id');
        $courseId = $this->request->getPost('course_id');
        $packageId = $this->request->getPost('package_id');
        $file = $this->request->getFile('answer_file');

        if (empty($assessmentId) || empty($courseId) || !$file || !$file->isValid()) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Please select a valid document to upload.']);
        }

        $allowedExtensions = ['png', 'jpg', 'jpeg', 'pdf', 'doc', 'docx', 'xls', 'xlsx', 'zip', 'csv', 'txt'];
        $ext = strtolower($file->getClientExtension());
        if (!in_array($ext, $allowedExtensions)) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Invalid file format. Allowed types: ' . implode(', ', $allowedExtensions)]);
        }

        $uploadDir = FCPATH . 'public/assets/uploads/assessments/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $originalName = $file->getClientName();
        $newName = time() . '_' . $file->getRandomName();
        $file->move($uploadDir, $newName);

        $db = Database::connect();
        $userRecord = $db->table('users')->where('user_id', $userId)->get()->getRowArray();
        $institutionId = isset($userRecord['institutionID']) ? intval($userRecord['institutionID']) : 0;

        $studentAssessmentModel = new \App\Models\StudentAssessmentModel();
        $existing = $studentAssessmentModel->where('user_id', $userId)->where('assessment_id', $assessmentId)->first();

        $submissionData = [
            'user_id'        => $userId,
            'institution_id' => $institutionId,
            'package_id'     => $packageId,
            'course_id'      => $courseId,
            'assessment_id'  => $assessmentId,
            'answer_file'    => $newName,
            'status'         => 'Pending Review',
            'submitted_at'   => date('Y-m-d H:i:s')
        ];

        if ($existing) {
            $studentAssessmentModel->update($existing['id'], $submissionData);
        } else {
            $studentAssessmentModel->insert($submissionData);
        }

        return $this->response->setJSON([
            'status'    => 'success',
            'message'   => 'Assessment answer submitted successfully!',
            'file_name' => $originalName
        ]);
    }

    public function toggleProgress()
    {
        $userId = $this->data['user_info']['user_id'];
        if (empty($userId)) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Unauthorized.']);
        }

        $itemId = $this->request->getPost('video_id'); // Kept as 'video_id' parameter name for compatibility with original request
        $itemType = $this->request->getPost('item_type') ?: 'video'; // 'video' or 'question'
        $completed = $this->request->getPost('completed'); // '1' or '0'
        $packageId = $this->request->getPost('package_id');
        $courseIdPost = $this->request->getPost('course_id');

        if (empty($itemId) || empty($packageId) || empty($courseIdPost)) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Invalid parameters.']);
        }

        $uvpm = new UserVideoProgressModel();
        $db = Database::connect();

        if ($itemType === 'video') {
            $vtm = new VideoTutorialModel();
            $video = $vtm->find($itemId);
            if (!$video) {
                return $this->response->setJSON(['status' => 'error', 'message' => 'Video not found.']);
            }
            $courseId = $courseIdPost;

            if ($completed === '0') {
                $uvpm->where('user_id', $userId)
                     ->where('package_id', $packageId)
                     ->where('course_id', $courseId)
                     ->where('video_tutorial_id', $itemId)
                     ->delete();
            } else {
                $exists = $uvpm->where('user_id', $userId)
                               ->where('package_id', $packageId)
                               ->where('course_id', $courseId)
                               ->where('video_tutorial_id', $itemId)
                               ->countAllResults();
                if ($exists === 0) {
                    $uvpm->insert([
                        'user_id' => $userId,
                        'package_id' => $packageId,
                        'course_id' => $courseId,
                        'video_tutorial_id' => $itemId
                    ]);
                }
            }
        } else {
            // question/simulation
            $q = $db->table('mst_questions')->where('question_id', $itemId)->get()->getRowArray();
            if (!$q) {
                return $this->response->setJSON(['status' => 'error', 'message' => 'Question not found.']);
            }
            $courseId = $courseIdPost;

            if ($completed === '0') {
                $uvpm->where('user_id', $userId)
                     ->where('package_id', $packageId)
                     ->where('course_id', $courseId)
                     ->where('question_id', $itemId)
                     ->delete();
            } else {
                $exists = $uvpm->where('user_id', $userId)
                               ->where('package_id', $packageId)
                               ->where('course_id', $courseId)
                               ->where('question_id', $itemId)
                               ->countAllResults();
                if ($exists === 0) {
                    $uvpm->insert([
                        'user_id' => $userId,
                        'package_id' => $packageId,
                        'course_id' => $courseId,
                        'question_id' => $itemId
                    ]);
                }
            }
        }

        // Recalculate progress for the mapped items in this course
        $user_enroll_type = $this->data['user_info']['enroll_type'];
        if ($user_enroll_type == "1") {
            $builder = $db->table('mst_subscriptions');
            $builder->select('mst_subscriptions.package_id');
            $builder->join('b2b_packages', 'b2b_packages.PKPackageID = mst_subscriptions.package_id');
            $builder->join('b2b_package_course_mapping', 'b2b_package_course_mapping.PKPackageID = b2b_packages.PKPackageID');
            $builder->join('courses', 'courses.course_id = b2b_package_course_mapping.PKCourseID');
            $builder->where('mst_subscriptions.user_id', $userId);
            $builder->where('courses.course_id', $courseId);
            $builder->where('mst_subscriptions.start_date <= CURDATE()');
            $builder->where('mst_subscriptions.end_date >= CURDATE()');
        } else {
            $builder = $db->table('mst_subscriptions');
            $builder->select('mst_subscriptions.package_id');
            $builder->join('mst_packages', 'mst_packages.package_id = mst_subscriptions.package_id');
            $builder->join('package_course_mapping', 'package_course_mapping.PKPackageID = mst_packages.package_id');
            $builder->join('courses', 'courses.course_id = package_course_mapping.PKCourseID');
            $builder->where('mst_subscriptions.user_id', $userId);
            $builder->where('courses.course_id', $courseId);
            $builder->where('mst_subscriptions.start_date <= CURDATE()');
            $builder->where('mst_subscriptions.end_date >= CURDATE()');
        }
        $isSubscribed = $builder->get()->getRowArray();
        
        $progressPercent = 0;
        if ($isSubscribed) {
            $packageId = $isSubscribed['package_id'];
            
            $packageType = $user_enroll_type == "1" ? 'b2b' : 'normal';
            $sequenceEntries = $db->table('package_lessons_mapping')
                                  ->where('course_id', $courseId)
                                  ->where('package_id', $packageId)
                                  ->where('package_type', $packageType)
                                  ->get()->getResultArray();
                                  
            $totalItems = count($sequenceEntries);
            $completedCount = 0;
            
            if ($totalItems > 0) {
                $mappedVideoIds = [];
                $mappedQuestionIds = [];
                foreach ($sequenceEntries as $seq) {
                    if ($seq['item_type'] === 'video') $mappedVideoIds[] = $seq['item_id'];
                    elseif ($seq['item_type'] === 'question') $mappedQuestionIds[] = $seq['item_id'];
                }
                
                if (!empty($mappedVideoIds)) {
                    $completedCount += $uvpm->where('user_id', $userId)
                                            ->where('package_id', $packageId)
                                            ->where('course_id', $courseId)
                                            ->whereIn('video_tutorial_id', $mappedVideoIds)
                                            ->countAllResults();
                }
                if (!empty($mappedQuestionIds)) {
                    $completedCount += $uvpm->where('user_id', $userId)
                                            ->where('package_id', $packageId)
                                            ->where('course_id', $courseId)
                                            ->whereIn('question_id', $mappedQuestionIds)
                                            ->countAllResults();
                }
                
                $progressPercent = round(($completedCount / $totalItems) * 100);
            }
        }

        return $this->response->setJSON([
            'status' => 'success',
            'progress' => $progressPercent
        ]);
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
