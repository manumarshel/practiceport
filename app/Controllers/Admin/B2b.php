<?php


namespace App\Controllers\Admin;


use App\Controllers\BaseController;
use App\Models\MasterB2bPackageModel; 
use App\Models\B2bPackageCourseModel; 
use App\Models\CourseModel;
use Config\Database; 

class B2b extends BaseController
{
    public function index()
    {
        $data = [];
        $db = Database::connect();
        $builder = $db->table('b2b_packages');
        $builder->select('*');
         $builder->where('status', 1);
        $query = $builder->get();

        $all_courses = new CourseModel();
        $data['course_items']= $all_courses->findAll();
 
        
    $builder = $db->table('b2b_packages p'); 
    $builder->select('p.*, GROUP_CONCAT(DISTINCT c.course_name SEPARATOR ", ") as course_names, GROUP_CONCAT(DISTINCT pc.PKCourseID SEPARATOR ",") as course_ids');
    $builder->join('b2b_package_course_mapping pc', 'pc.PKPackageID = p.PKPackageID', 'left');
    $builder->join('courses c', 'c.course_id = pc.PKCourseID', 'left'); 
    $builder->groupBy('p.PKPackageID'); // Group by the unique package ID
      //$builder->groupBy('pc.PKCourseID'); // Group by the unique package ID
      $builder->where('p.status', 1);
    $query = $builder->get();
         $data['packages'] = $query->getResult();
   //print_r($data['packages']); exit;
        return view('admin/b2b/packages', $data);
    }

    public function add() { 
        if ($this->request->getMethod() == 'post') {
            helper(['form', 'url']);

            $validated = $this->validate([
                'title' => ['label' => 'Package Title', 'rules' => 'required'],
                'course_id' => ['label' => 'Course Type', 'rules' => 'required'],
                'cost' => ['label' => 'Cost', 'rules' => 'required|decimal'],
                'duration' => ['label' => 'Duration', 'rules' => 'required'],
                'license_number' => ['label' => 'License', 'rules' => 'required'],
            ]);

            if ($validated) {
                $pkg = new MasterB2bPackageModel();
                  $pkg_course = new B2bPackageCourseModel();
                try {
                     $data = [
                            'title' =>  $this->request->getPost('title'),
                            'custom_title' => $this->request->getPost('custom_title'),
                           'course_id'  => 1,
                            'cost' => $this->request->getPost('cost'),
                            'license_number' => $this->request->getPost('license_number'),
                            'duration' => $this->request->getPost('duration'),
                            'date_created' => date('Y-m-d'),
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
                    return redirect()->to( base_url('/admin/b2b_packages') )->with('msg', $msg);
                }

                $msg = 'Package Created Successfully';
            } else {
                $msg = implode(" ", $this->validator->getErrors());
            }
            return redirect()->to( base_url('/admin/b2b_packages') )->with('msg', $msg);
        }

    }
    public function update($id)
    {
        $model = new MasterB2bPackageModel();
        $pkg_course = new B2bPackageCourseModel();

        $model->update($id, [
            'title' => $this->request->getPost('title'),
            'custom_title' => $this->request->getPost('custom_title'),
            'cost' => $this->request->getPost('cost'),
            'duration' => $this->request->getPost('duration'),
            'license_number' => $this->request->getPost('license_number'),
        ]);

        $selectedOptions = $this->request->getPost('course_id');
        if ($selectedOptions && is_array($selectedOptions)) {
            $db = Database::connect();
            $db->table('b2b_package_course_mapping')->where('PKPackageID', $id)->delete();
            foreach ($selectedOptions as $optionId) {
                $pkg_course->insert([
                    'PKCourseID'  => $optionId,
                    'PKPackageID' => $id
                ]);
            }
        }

        return redirect()->to('/admin/b2b_packages')
                         ->with('msg', 'Package updated successfully');
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
