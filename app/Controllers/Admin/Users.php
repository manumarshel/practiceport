<?php


namespace App\Controllers\Admin;



use App\Models\MasterPackageModel;
use App\Models\user\UserModel;
use App\Models\MasterSubscriptionModel;

use Config\Services;

class Users extends \App\Controllers\BaseController
{
    public function index()
    {
        $data = [];
        // Data will be loaded via AJAX for server-side processing
        return view('admin/users', $data);
    }
    
    public function get_users_ajax()
    {
        $request = \Config\Services::request();
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        
        // DataTables parameters
        $draw = intval($request->getGet('draw'));
        $start = intval($request->getGet('start'));
        $length = intval($request->getGet('length'));
        $search = $request->getGet('search');
        $searchValue = isset($search['value']) ? $search['value'] : '';
        $order = $request->getGet('order');
        $columns = $request->getGet('columns');
        
        $totalRecords = $builder->countAllResults(false);
        
        if (!empty($searchValue)) {
            $builder->groupStart()
                    ->like('first_name', $searchValue)
                    ->orLike('last_name', $searchValue)
                    ->orLike('email', $searchValue)
                    ->groupEnd();
        }
        
        $totalFiltered = $builder->countAllResults(false);
        
        // Sorting
        $columnNameArray = ['user_id', 'first_name', 'email', 'date_registered', 'user_id'];
        if (isset($order[0]['column']) && isset($columnNameArray[$order[0]['column']])) {
            $sortColumn = $columnNameArray[$order[0]['column']];
            $sortDir = $order[0]['dir'] === 'asc' ? 'asc' : 'desc';
            $builder->orderBy($sortColumn, $sortDir);
        } else {
            $builder->orderBy('user_id', 'DESC');
        }
        
        if ($length != -1) {
            $builder->limit($length, $start);
        }
        
        $query = $builder->get();
        $users = $query->getResult();
        
        $data = [];
        $ii = $start + 1;
        
        foreach ($users as $user) {
            $row = [];
            $row[] = '#' . $ii++;
            $row[] = $user->first_name . ' ' . $user->last_name;
            $row[] = $user->email;
            $row[] = date('M d Y', strtotime($user->date_registered));
            
            $actionHtml = '<div class="d-flex align-items-center">
                                <button class="btn btn-sm btn-primary view-progress-btn mr-2" data-userid="' . $user->user_id . '" title="View Progress">
                                    <i class="anticon anticon-line-chart"></i> Progress
                                </button>
                                <div class="dropdown dropdown-animated scale-left">
                                    <a class="text-gray font-size-18" href="javascript:void(0);" data-toggle="dropdown">
                                        <i class="anticon anticon-ellipsis"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a href="' . base_url('admin/users/delete_user/' . $user->user_id) . '" class="dropdown-item" type="button" onclick="return confirm(\'Are you sure you want to remove this user?\');"><i class="anticon anticon-delete"></i>
                                        <span class="m-l-10">Remove</span></a>
                                    </div>
                                </div>
                            </div>';
            $row[] = $actionHtml;
            
            $data[] = $row;
        }
        
        $response = [
            "draw" => $draw,
            "recordsTotal" => $totalRecords,
            "recordsFiltered" => $totalFiltered,
            "data" => $data
        ];
        
        return $this->response->setJSON($response);
    }
    
    
     public function user_import()
    {
        $data = [];
        $um = new UserModel(); 
         $pkg = new MasterPackageModel();
         $subscriptionModel = new MasterSubscriptionModel();
           $data['packages'] =$pkg->where(['status' => 1])->findAll();
           
        if ($this->request->getMethod() == 'post') {
             
            $validation = Services::validation();
                $validation->setRules([
                    'packages' => ['label' => 'Packages', 'rules' => 'required'], 
                ]);

                if (!$this->validate($validation->getRules())) {
                    $data['validation'] = $this->validator;
                    return view('admin/add-user', $data);
                } else {
                   
                    $pkg_id=$_POST['packages']; 
                    $question_data = $this->request->getFile('user_import');
                    $question_file_name = $question_data->getRandomName();
                    
                    $file = $this->request->getFile('user_import');

                               
                                
                                    // Check if the file is not a directory
                                    if ($file->isDir()) {
                                         return redirect()->back()->with('error', 'Uploaded file is not valid.');
                                    }
                                
                                    // Check the file type (ensure it's a CSV)
                                   $validMimeTypes = ['text/csv', 'application/csv', 'application/vnd.ms-excel','text/plain'];
                                        if (!in_array($file->getMimeType(), $validMimeTypes)) {
                                            return redirect()->back()->with('error', 'Please upload a valid CSV file.');
                                        }
                                         if (!$file->isValid()) {
                                              if ($file->getError() !== UPLOAD_ERR_OK) {
                                            echo 'Error: ' . $file->getErrorString();
                                        }
                                        echo 'Error: ' . $file->getErrorString();
                                        echo 'File upload failed.';exit;
                                    }
                                
                                    // Process the file
                                    $fileHandle = fopen($file->getTempName(), 'r');
                                    if (!$fileHandle) {
                                          return redirect()->back()->with('error', 'Unable to read the uploaded file.');
                                    }
                               
                               
                                    
                                    $subscriptionData = [];
                                    $studentData = [];
                                    $password = "12345678"; // Default password for all students
                                    
                                    // Read the first row as headers
                                    $fileHandle = fopen($file->getTempName(), 'r');
                                    if (!$fileHandle) {
                                        return redirect()->back()->with('error', 'Unable to read the uploaded file.');
                                    }
                                    
                                    $header = fgetcsv($fileHandle); // Read headers only once
                                    
                                    if ($header === false) {
                                        // Handle empty file
                                        fclose($fileHandle);
                                        return redirect()->back()->with('error', 'The uploaded CSV file is empty or invalid.');
                                    }
                                    
                                    // Loop through each row of the file
                                    while (($row = fgetcsv($fileHandle)) !== false) {
                                        // Validate the row (ensure it matches header columns)
                                        if (count($row) < count($header)) {
                                            continue; // Skip invalid or incomplete rows
                                        }
                                        // Prepare student data for insertion
                                        $studentData[] = [
                                            'first_name'       => trim($row[0]), // Assuming the first column is the first name
                                            'last_name'        => trim($row[1]), // Second column is the last name
                                            'email'            => trim($row[2]), // Third column is email
                                            'phone'            => trim($row[3]), // Fourth column is phone
                                            'password'         => $password, // Secure password
                                            'active'           => 1,
                                            'date_registered'  => date('Y-m-d'),
                                        ];
                                    }
                                    
                                    // Close the file
                                    fclose($fileHandle);
                                    
                               //    print_r($studentData); exit;
                                    foreach ($studentData as $student) {
                                        // Insert student and get the inserted ID
                                        
                                          $db = db_connect(); // Get the database connection
                                            $builder2 = $db->table('users');
                                            //  $exists = $builder2
                                            //     ->groupStart() // Start grouping conditions
                                            //         ->where('email', $student['email'])
                                            //         ->orWhere('phone', $student['phone'])
                                            //     ->groupEnd() // End grouping
                                            //     ->countAllResults() > 0;
                                                
                                                
                                                 $studentRecord = $builder2
                                                    ->select('user_id') // Fetch the ID
                                                    ->groupStart() // Start grouping conditions
                                                        ->where('email', $student['email'])
                                                        ->orWhere('phone', $student['phone'])
                                                    ->groupEnd() // End grouping
                                                    ->get()
                                                    ->getRow(); 
                                            
                                            if ($studentRecord) {
                                                $userId = $studentRecord->user_id;
                                               
                                                    $builderSubscriptions = $db->table('mst_subscriptions');
                                                    $existingSubscription = $builderSubscriptions
                                                        ->select('package_id')
                                                        ->where('user_id', $userId)
                                                        ->where('package_id', $pkg_id)
                                                        ->get()
                                                        ->getRow();
                                            
                                                    if ($existingSubscription) {
                                                        // Package already subscribed by the user
                                                      //  echo "User already subscribed to package ID: $pkg_id. Skipping import.";
                                                       // return;
                                                    }else{
                                            
                                                     $package = $pkg->find($_POST['packages']);
                                                    $duration = $package['duration']; // Duration in 'x months' format (e.g., '2 months')
                                                    $cost= $package['cost'];
                                                    $startDate = date('Y-m-d'); // Current date
                                                    $endDate = date('Y-m-d', strtotime("+$duration", strtotime($startDate)));
                                                    
                                                    // Package not subscribed, insert a new subscription
                                                    $builderSubscriptions->insert([
                                                        'user_id' => $userId,
                                                        'package_id' => $pkg_id,
                                                        'start_date' => $startDate,
                                                        'end_date' => $endDate,
                                                        'cost'   => $cost,// Or set a default end date
                                                    ]);
                                            
                                                   
                                                    }
                                               
                                               // already registered
                                            }else{
                                                 //no duplication
                                        
                                                $studentId = $um->insert($student);
                                                $this->sendmail_notification($student['first_name'],$student['email']);
                                
                                                if ($studentId) {
                                                    // Prepare subscription data for the student
                                                    $package = $pkg->find($_POST['packages']);
                                                    
                                                    $duration = $package['duration']; // Duration in 'x months' format (e.g., '2 months')
                                                    $cost= $package['cost'];
                                                    $startDate = date('Y-m-d'); // Current date
                                                    $endDate = date('Y-m-d', strtotime("+$duration", strtotime($startDate)));
        
                                                    $subscriptionData[] = [
                                                        'user_id'    => $studentId, // ID of the student
                                                        'package_id' => $_POST['packages'],         // Default package ID
                                                        'start_date' => $startDate, // Subscription start date
                                                        'end_date'   => $endDate, // Subscription end date
                                                        'cost'   => $cost, // Subscription end date
                                                    ];
                                                    $subscriptionModel->insertBatch($subscriptionData);
                                                    //il("geethuag2015@gmail.com", "fgh", "$messag, $mes"s
                                               
                                                    
                                                }
                                            }
                                    }
                        
                                    // Insert subscriptions into the database
                                     
                                       return redirect()->to('admin/users/');
                                  
                                       // return redirect()->back()->with('error', 'Failed to import subscriptions.');
                                    
                               
 
                       
                     
                    
                    
                }
            

             
            
        }else {
            return view('admin/add-user', $data);
        }
        
       
    }
    
    public function sendmail_notification($name, $email)
    {
        
                  //  $to = "geethuag2015@gmail.com"; // Replace $userEmail with the actual user's email
                      $to = $email;
            
            // Subject
            $subject = "Registration Confirmation";
            
            // Generate a unique confirmation link
            $token = bin2hex(random_bytes(16)); // Generates a secure random token
            $confirmationLink = "12345678";
            
            // Email message
            $message = "
            <html>
            <head>
                <title>Registration Successfull</title>
            </head>
            <body>
                <h2>Dear $name, Welcome to Practicepot</h2>
                <p>Thank you for registering at Practicepot. Your account has been successfully created!</p>
                <p>Here are your login credentials:</p>
                    <ul>
                        <li><strong>Email:</strong> $email</li>
                        <li><strong>Password:</strong> $confirmationLink</li>
                    </ul>
                    <p>You can log in to your account by visiting <a href='https://practicepot.com/'>https://practicepot.com</a>.</p>
                    <p>If you have any questions or need assistance, feel free to contact our support team.</p>
                    <br>
            </body>
            </html>
            ";
            
            // Headers
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "From: contact@practicepot.com" . "\r\n"; // Replace with your sender email
            
            $res= mail($to, $subject, $message, $headers);
            // Send email
            if ($res) {
                return true;
            } else {
                return 2;
            }
      
    }
      public function delete_user($user_id) {
         
          //$question_id = $_POST['package_id'];
        $qm = new UserModel();
          $sm = new MasterSubscriptionModel();
        if ( $user_id && intval($user_id) ) {
            try {
               
                  $deleted = $sm->where('user_id', $user_id) // Match user ID
                      ->delete();
                  $qm->delete($user_id);
                // $qm->update($user_id, ['active' => 0]);
                return redirect()->to( base_url('/admin/users') )->with('msg', "successfully deleted");
            } catch (DatabaseException $e) {
                 
                 return redirect()->to( base_url('/admin/users') )->with('msg', $e->getMessage());
            }

        }
        return $this->response->setStatusCode(401, "invalid user_id");
//        echo "questionId: " . $question_id;
    }
    public function student_progress_ajax($user_id)
    {
        $db = \Config\Database::connect();
        $um = new \App\Models\user\UserModel();
        $user = $um->find($user_id);
        
        if (!$user) {
            return view('institution/partials/student_progress_modal', ['courses' => []]);
        }
        
        // $user is an array
        $user_enroll_type = isset($user['enroll_type']) ? $user['enroll_type'] : 0;
        
        if ($user_enroll_type == "1") {
            $subs = $db->table('mst_subscriptions')
                ->select('mst_subscriptions.package_id, b2b_packages.title, b2b_packages.custom_title, b2b_packages.PKPackageID')
                ->join('b2b_packages', 'b2b_packages.PKPackageID = mst_subscriptions.package_id')
                ->where('mst_subscriptions.user_id', $user_id)
                ->where('mst_subscriptions.start_date <= CURDATE()')
                ->where('mst_subscriptions.end_date >= CURDATE()')
                ->where('mst_subscriptions.type', 1)
                ->groupBy('mst_subscriptions.package_id, b2b_packages.title, b2b_packages.custom_title, b2b_packages.PKPackageID')
                ->get()->getResultArray();
        } else {
            $subs = $db->table('mst_subscriptions')
                ->select('mst_subscriptions.package_id, mst_packages.title, mst_packages.custom_title, mst_packages.package_id as PKPackageID')
                ->join('mst_packages', 'mst_packages.package_id = mst_subscriptions.package_id')
                ->where('mst_subscriptions.user_id', $user_id)
                ->where('mst_subscriptions.start_date <= CURDATE()')
                ->where('mst_subscriptions.end_date >= CURDATE()')
                ->where('mst_subscriptions.type', 0)
                ->groupBy('mst_subscriptions.package_id, mst_packages.title, mst_packages.custom_title, mst_packages.package_id')
                ->get()->getResultArray();
        }
            
        if (empty($subs)) {
            return view('institution/partials/student_progress_modal', ['packages_data' => []]);
        }
        
        $package_type = ($user_enroll_type == "1") ? 'b2b' : 'normal';
        $uvpm = new \App\Models\UserVideoProgressModel();
        
        $packages_data = [];
        $totalItemsOverall = 0;
        $totalCompletedOverall = 0;
        
        foreach ($subs as $sub) {
            $packageId = $sub['PKPackageID'];
            $package_name = !empty($sub['custom_title']) ? $sub['custom_title'] : $sub['title'];
            
            if ($user_enroll_type == "1") {
                $courses = $db->table('b2b_package_course_mapping')
                    ->select('courses.course_id, courses.course_name as title')
                    ->join('courses', 'courses.course_id = b2b_package_course_mapping.PKCourseID')
                    ->where('b2b_package_course_mapping.PKPackageID', $packageId)
                    ->get()->getResultArray();
            } else {
                $courses = $db->table('package_course_mapping')
                    ->select('courses.course_id, courses.course_name as title')
                    ->join('courses', 'courses.course_id = package_course_mapping.PKCourseID')
                    ->where('package_course_mapping.PKPackageID', $packageId)
                    ->get()->getResultArray();
            }
            
            foreach ($courses as &$course) {
                $courseId = $course['course_id'];
                
                $completedVideos = $uvpm->where('user_id', $user_id)->where('package_id', $packageId)->where('course_id', $courseId)->where('video_tutorial_id IS NOT NULL')->findColumn('video_tutorial_id') ?: [];
                $completedQuestions = $uvpm->where('user_id', $user_id)->where('package_id', $packageId)->where('course_id', $courseId)->where('question_id IS NOT NULL')->findColumn('question_id') ?: [];
    
                $sequenceEntries = $db->table('package_lessons_mapping')
                    ->where('course_id', $courseId)
                    ->where('package_id', $packageId)
                    ->where('package_type', $package_type)
                    ->get()->getResultArray();
                
                $tVideos = 0;
                $tQuestions = 0;
                $cVideos = 0;
                $cQuestions = 0;
                
                if (!empty($sequenceEntries)) {
                    foreach ($sequenceEntries as $seq) {
                        if ($seq['item_type'] === 'video') {
                            $tVideos++;
                            if (in_array($seq['item_id'], $completedVideos)) {
                                $cVideos++;
                            }
                        } elseif ($seq['item_type'] === 'question') {
                            $tQuestions++;
                            if (in_array($seq['item_id'], $completedQuestions)) {
                                $cQuestions++;
                            }
                        }
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
                'package_name' => $package_name,
                'courses' => $courses
            ];
        }
        
        $data['user_id'] = $user_id;
        $data['packages_data'] = $packages_data;
        $data['total_items'] = $totalItemsOverall;
        $data['total_attempted'] = $totalCompletedOverall;
        $data['overall_progress'] = $totalItemsOverall > 0 ? round(($totalCompletedOverall / $totalItemsOverall) * 100) : 0;

        return view('institution/partials/student_progress_modal', $data);
    }

    public function export_student_progress($user_id)
    {
        $db = \Config\Database::connect();
        $um = new \App\Models\user\UserModel();
        $user = $um->find($user_id);
        
        if (!$user) {
            return redirect()->back()->with('error', 'User not found');
        }
        
        $user_enroll_type = isset($user['enroll_type']) ? $user['enroll_type'] : 0;
        
        if ($user_enroll_type == "1") {
            $subs = $db->table('mst_subscriptions')
                ->select('mst_subscriptions.package_id, b2b_packages.title, b2b_packages.custom_title, b2b_packages.PKPackageID')
                ->join('b2b_packages', 'b2b_packages.PKPackageID = mst_subscriptions.package_id')
                ->where('mst_subscriptions.user_id', $user_id)
                ->where('mst_subscriptions.start_date <= CURDATE()')
                ->where('mst_subscriptions.end_date >= CURDATE()')
                ->where('mst_subscriptions.type', 1)
                ->groupBy('mst_subscriptions.package_id, b2b_packages.title, b2b_packages.custom_title, b2b_packages.PKPackageID')
                ->get()->getResultArray();
        } else {
            $subs = $db->table('mst_subscriptions')
                ->select('mst_subscriptions.package_id, mst_packages.title, mst_packages.custom_title, mst_packages.package_id as PKPackageID')
                ->join('mst_packages', 'mst_packages.package_id = mst_subscriptions.package_id')
                ->where('mst_subscriptions.user_id', $user_id)
                ->where('mst_subscriptions.start_date <= CURDATE()')
                ->where('mst_subscriptions.end_date >= CURDATE()')
                ->where('mst_subscriptions.type', 0)
                ->groupBy('mst_subscriptions.package_id, mst_packages.title, mst_packages.custom_title, mst_packages.package_id')
                ->get()->getResultArray();
        }
            
        if (empty($subs)) {
            return redirect()->back()->with('error', 'No active packages found');
        }
        
        $package_type = ($user_enroll_type == "1") ? 'b2b' : 'normal';
        $uvpm = new \App\Models\UserVideoProgressModel();
        
        $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
        $sheetIndex = 0;
        
        foreach ($subs as $sub) {
            $packageId = $sub['PKPackageID'];
            $package_name = !empty($sub['custom_title']) ? $sub['custom_title'] : $sub['title'];
            
            // Limit sheet name to 31 chars as per Excel rules and remove invalid chars
            $safeSheetName = substr(str_replace(['*', ':', '/', '\\', '?', '[', ']'], '', $package_name), 0, 31);
            if(empty($safeSheetName)) $safeSheetName = "Package " . ($sheetIndex + 1);
            
            if ($sheetIndex > 0) {
                $spreadsheet->createSheet();
            }
            $sheet = $spreadsheet->setActiveSheetIndex($sheetIndex);
            $sheet->setTitle($safeSheetName);
            
            // Set Headers
            $sheet->setCellValue('A1', 'Student Name')
                  ->setCellValue('B1', 'Email')
                  ->setCellValue('C1', 'Package Name')
                  ->setCellValue('D1', 'Module (Course) Name')
                  ->setCellValue('E1', 'Total Lessons')
                  ->setCellValue('F1', 'Completed Lessons')
                  ->setCellValue('G1', 'Remaining Lessons')
                  ->setCellValue('H1', 'Videos Completed')
                  ->setCellValue('I1', 'Questions Completed')
                  ->setCellValue('J1', 'Progress (%)');
                  
            // Style Headers
            $sheet->getStyle('A1:J1')->getFont()->setBold(true);
            $sheet->getStyle('A1:J1')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFE0E0E0');
            
            if ($user_enroll_type == "1") {
                $courses = $db->table('b2b_package_course_mapping')
                    ->select('courses.course_id, courses.course_name as title')
                    ->join('courses', 'courses.course_id = b2b_package_course_mapping.PKCourseID')
                    ->where('b2b_package_course_mapping.PKPackageID', $packageId)
                    ->get()->getResultArray();
            } else {
                $courses = $db->table('package_course_mapping')
                    ->select('courses.course_id, courses.course_name as title')
                    ->join('courses', 'courses.course_id = package_course_mapping.PKCourseID')
                    ->where('package_course_mapping.PKPackageID', $packageId)
                    ->get()->getResultArray();
            }
            
            $row = 2;
            foreach ($courses as $course) {
                $courseId = $course['course_id'];
                
                $completedVideos = $uvpm->where('user_id', $user_id)->where('package_id', $packageId)->where('course_id', $courseId)->where('video_tutorial_id IS NOT NULL')->findColumn('video_tutorial_id') ?: [];
                $completedQuestions = $uvpm->where('user_id', $user_id)->where('package_id', $packageId)->where('course_id', $courseId)->where('question_id IS NOT NULL')->findColumn('question_id') ?: [];
    
                $sequenceEntries = $db->table('package_lessons_mapping')
                    ->where('course_id', $courseId)
                    ->where('package_id', $packageId)
                    ->where('package_type', $package_type)
                    ->get()->getResultArray();
                
                $tVideos = 0;
                $tQuestions = 0;
                $cVideos = 0;
                $cQuestions = 0;
                
                if (!empty($sequenceEntries)) {
                    foreach ($sequenceEntries as $seq) {
                        if ($seq['item_type'] === 'video') {
                            $tVideos++;
                            if (in_array($seq['item_id'], $completedVideos)) {
                                $cVideos++;
                            }
                        } elseif ($seq['item_type'] === 'question') {
                            $tQuestions++;
                            if (in_array($seq['item_id'], $completedQuestions)) {
                                $cQuestions++;
                            }
                        }
                    }
                }
                
                $total_items = $tVideos + $tQuestions;
                $completed_count = $cVideos + $cQuestions;
                $progress = $total_items > 0 ? round(($completed_count / $total_items) * 100) : 0;
                $remaining = $total_items - $completed_count;
                
                $sheet->setCellValue('A'.$row, $user['first_name'] . ' ' . $user['last_name'])
                      ->setCellValue('B'.$row, $user['email'])
                      ->setCellValue('C'.$row, $package_name)
                      ->setCellValue('D'.$row, $course['title'])
                      ->setCellValue('E'.$row, $total_items)
                      ->setCellValue('F'.$row, $completed_count)
                      ->setCellValue('G'.$row, $remaining)
                      ->setCellValue('H'.$row, $cVideos . '/' . $tVideos)
                      ->setCellValue('I'.$row, $cQuestions . '/' . $tQuestions)
                      ->setCellValue('J'.$row, $progress . '%');
                $row++;
            }
            
            // Auto size columns
            foreach (range('A', 'J') as $col) {
                $sheet->getColumnDimension($col)->setAutoSize(true);
            }
            
            $sheetIndex++;
        }
        
        $spreadsheet->setActiveSheetIndex(0);
        $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
        
        $fileName = 'Student_Progress_' . $user['first_name'] . '_' . date('Y-m-d') . '.xlsx';
        
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="'. urlencode($fileName).'"');
        header('Cache-Control: max-age=0');
        
        $writer->save('php://output');
        exit;
    }
}
