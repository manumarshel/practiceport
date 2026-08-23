<?php


namespace App\Controllers\Admin;


use App\Controllers\BaseController;
use App\Models\MasterPackageModel;
use App\Models\PackageCourseModel;
use App\Models\CourseModel;
use Config\Database; 

class Packages extends BaseController
{
    public function index()
    {
        $data = [];
        $db = Database::connect();
        $builder = $db->table('mst_packages');
        $builder->select('*');
        $builder->join('courses', 'mst_packages.course_id = courses.course_id');
         $builder->where('status', 1);
        $query = $builder->get();

 $all_courses = new CourseModel();
        $data['course_items']= $all_courses->findAll();

//        $pkg = new PackageModel();
     //   $data['packages'] = $query->getResultArray();
        
        
        
         $builder = $db->table('mst_packages p'); // Add an alias to the 'packages' table
    $builder->select('p.*, GROUP_CONCAT(DISTINCT c.course_name SEPARATOR ", ") as course_names, GROUP_CONCAT(DISTINCT pc.PKCourseID SEPARATOR ",") as course_ids');
    $builder->join('package_course_mapping pc', 'pc.PKPackageID = p.package_id'); // Add alias 'pc' for 'package_courses'
    $builder->join('courses c', 'c.course_id = pc.PKCourseID'); // Add alias 'c' for 'courses'
    $builder->groupBy('p.package_id'); // Group by the unique package ID
      //$builder->groupBy('pc.PKCourseID'); // Group by the unique package ID
      $builder->where('p.status', 1);
    $query = $builder->get();
         $data['packages'] = $query->getResult();
       // print_r($data['packages']); exit;
        return view('admin/packages', $data);
    }

    public function add() {
        if ($this->request->getMethod() == 'post') {
            helper(['form', 'url']);

            $validated = $this->validate([
                'title' => ['label' => 'Package Title', 'rules' => 'required'],
                'course_id' => ['label' => 'Course Type', 'rules' => 'required'],
                'cost' => ['label' => 'Cost', 'rules' => 'required|decimal'],
                'duration' => ['label' => 'Duration', 'rules' => 'required'],
            ]);

            if ($validated) {
                $pkg = new MasterPackageModel();
                  $pkg_course = new PackageCourseModel();
                try {
                     $data = [
                            'title' =>  $this->request->getPost('title'),
                            'custom_title' => $this->request->getPost('custom_title'),
                           'course_id'  => 1,
                            'cost' => $this->request->getPost('cost'),
                            'duration' => $this->request->getPost('duration'),
                            'date_created' => date('Y-m-d'),
                            'description' => $this->request->getPost('description'),
                        ];
                        
                        
                         $pkg->insert($data);
                         $lastInsertedId = $pkg->insertID();
                         
                    $selectedOptions = $this->request->getPost('course_id');
                    if ($selectedOptions && is_array($selectedOptions)) {
                        foreach ($selectedOptions as $optionId) {
                       
                         
                          $data1 = [
                            'PKCourseID'  => $optionId,
                            'PKPackageID' =>$lastInsertedId
                        ]; 
                        $pkg_course->insert($data1);

                        }
                    }
                   
                    
                } catch (\ReflectionException $e) {
                    $msg = $e->getMessage();
                    return redirect()->to( base_url('/admin/packages') )->with('msg', $msg);
                }

                $msg = 'Package Created Successfully';
            } else {
                $msg = implode(" ", $this->validator->getErrors());
            }
            return redirect()->to( base_url('/admin/packages') )->with('msg', $msg);
        }

    }

    public function update($id)
    {
        $model = new MasterPackageModel();
        $pkg_course = new PackageCourseModel();

        $model->update($id, [
            'title' => $this->request->getPost('title'),
            'custom_title' => $this->request->getPost('custom_title'),
            'cost' => $this->request->getPost('cost'),
            'duration' => $this->request->getPost('duration'),
            'description' => $this->request->getPost('description'),
        ]);

        $pkg_course->where('PKPackageID', $id)->delete();

        $selectedOptions = $this->request->getPost('course_id');
        if ($selectedOptions && is_array($selectedOptions)) {
            foreach ($selectedOptions as $optionId) {
                $data1 = [
                    'PKCourseID'  => $optionId,
                    'PKPackageID' => $id
                ];
                $pkg_course->insert($data1);
            }
        }

        return redirect()->to('/admin/packages')->with('msg', 'Package updated successfully');
    }
    
    public function change_status($question_id) {
         
          //$question_id = $_POST['package_id'];
        $qm = new MasterPackageModel();
        if ( $question_id && intval($question_id) ) {
            try {
                //$qm->delete($question_id);
                 $qm->update($question_id, ['active' => 1]);
                return redirect()->to( base_url('/admin/packages') )->with('msg', "successfully updated");
            } catch (DatabaseException $e) {
                 
                 return redirect()->to( base_url('/admin/packages') )->with('msg', $e->getMessage());
            }

        }
        return $this->response->setStatusCode(401, "invalid package_id");
//        echo "questionId: " . $question_id;
    }

      public function change_status_deactivate($question_id) {
         
          //$question_id = $_POST['package_id'];
        $qm = new MasterPackageModel();
        if ( $question_id && intval($question_id) ) {
            try {
                //$qm->delete($question_id);
                 $qm->update($question_id, ['active' => 0]);
                return redirect()->to( base_url('/admin/packages') )->with('msg', "successfully updated");
            } catch (DatabaseException $e) {
                 
                 return redirect()->to( base_url('/admin/packages') )->with('msg', $e->getMessage());
            }

        }
        return $this->response->setStatusCode(401, "invalid package_id");
//        echo "questionId: " . $question_id;
    }
     public function delete_package($question_id) {
         
          //$question_id = $_POST['package_id'];
        $qm = new MasterPackageModel();
        if ( $question_id && intval($question_id) ) {
            try {
                //$qm->delete($question_id);
                 $qm->update($question_id, ['status' => 0]);
                return redirect()->to( base_url('/admin/packages') )->with('msg', "successfully deleted");
            } catch (DatabaseException $e) {
                 
                 return redirect()->to( base_url('/admin/packages') )->with('msg', $e->getMessage());
            }

        }
        return $this->response->setStatusCode(401, "invalid package_id");
//        echo "questionId: " . $question_id;
    }

}
