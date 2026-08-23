<?php


namespace App\Controllers\Admin;


use App\Controllers\BaseController;
use App\Models\InstitutionModel;  

use App\Models\MasterB2bPackageModel; 
use Config\Database; 

class Institution extends BaseController
{
    public function index()
    {
        $data = [];
        $db = \Config\Database::connect();

        $builder = $db->table('mst_institutions i');

        $builder->select("
            i.*,
            ip.PKInstitutionPackageID,
            ip.start_date,
            ip.end_date,
            ip.max_students,
            ip.used_students,
            ip.status as package_status,
            COALESCE(NULLIF(p.custom_title, ''), p.title) as package_title
        ");

        $builder->join(
            'institution_packages ip',
            'ip.PKInstitutionID = i.PKInstitutionID AND (ip.status = "active" OR ip.status = "1" OR ip.status = 1)',
            'left'
        );

        $builder->join(
            'b2b_packages p',
            'p.PKPackageID = ip.PKPackageID',
            'left'
        );

        $builder->orderBy('i.PKInstitutionID', 'DESC');

        $data['instututions'] = $builder->get()->getResult();

        $all_courses = new MasterB2bPackageModel();
        $data['packages'] = $all_courses->findAll();

        return view('admin/institution/index', $data);
    }

    public function reset_password()
    {
        $institutionId = $this->request->getPost('institution_id');
        $newPassword = $this->request->getPost('new_password');

        if (empty($institutionId) || empty($newPassword) || strlen($newPassword) < 4) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Password must be at least 4 characters.'
            ]);
        }

        $instModel = new InstitutionModel();
        $institution = $instModel->find($institutionId);
        if (!$institution) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Institution not found.'
            ]);
        }

        // InstitutionModel beforeUpdate automatically hashes the password
        $instModel->update($institutionId, ['password' => $newPassword]);

        return $this->response->setJSON([
            'status' => 'success',
            'message' => 'Password reset successfully for ' . esc($institution['title'])
        ]);
    }

    public function toggle_status($id)
    {
        $instModel = new InstitutionModel();
        $inst = $instModel->find($id);

        if (!$inst) {
            return redirect()->back()->with('msg', 'Institution not found');
        }

        $newStatus = ($inst['status'] == 1 || $inst['status'] == '1') ? 0 : 1;
        $instModel->update($id, ['status' => $newStatus]);

        $statusText = ($newStatus == 1) ? 'activated' : 'temporarily deactivated';
        return redirect()->to(base_url('/admin/institutions'))
                         ->with('msg', 'Institution "' . esc($inst['title']) . '" has been ' . $statusText . ' successfully.');
    }

    public function indexold()
    {
        $data = [];
        $db = Database::connect();
    //     $builder = $db->table('b2b_packages');
    //     $builder->select('*');
    //      $builder->where('status', 1);
    //     $query = $builder->get();

       $all_courses = new MasterB2bPackageModel();
          $data['packages']= $all_courses->findAll();
 
        
//     $builder = $db->table('mst_institutions i');
// $builder->select('
//     i.*,
//     GROUP_CONCAT(
//         CONCAT(p.title, " (", ip.start_date, " - ", ip.end_date, ")")
//         SEPARATOR "<br>"
//     ) as packages
// ');
// $builder->join('institution_packages ip', 'ip.PKInstitutionID = i.PKInstitutionID', 'left');
// $builder->join('b2b_packages p', 'p.PKPackageID = ip.PKPackageID', 'left');
// $builder->where('i.status', 1);
// $builder->groupBy('i.PKInstitutionID');

// $data['instututions'] = $builder->get()->getResult(); 


$db = \Config\Database::connect();

$builder = $db->table('mst_institutions i');

$builder->select("
    i.*,
    GROUP_CONCAT(
        CONCAT(
            '<span>',
            p.title,
            ' (',
            ip.max_students,
            ' Students)',
            ' <a href=\"javascript:void(0)\" 
                 onclick=\"deleteAssignedPackage(', ip.PKInstitutionPackageID, ')\"
                 style=\"color:red;margin-left:6px;\"
                 title=\"Delete\">
                 <i class=\"anticon anticon-delete\"></i>
              </a>',
            '</span>'
        )
        SEPARATOR '<br>'
    ) AS packages
");


$builder->join(
    'institution_packages ip',
    'ip.PKInstitutionID = i.PKInstitutionID',
    'left'
);

$builder->join(
    'b2b_packages p',
    'p.PKPackageID = ip.PKPackageID',
    'left'
);

$builder->where('i.status', 1);
$builder->groupBy('i.PKInstitutionID');

$query = $builder->get();
$data['instututions'] = $query->getResult();


        return view('admin/institution/index', $data);
    }

    public function add() { 
        if ($this->request->getMethod() == 'post') {
            helper(['form', 'url']);

            $validated = $this->validate([
                'title' => ['label' => 'Package Title', 'rules' => 'required'],
                'email' => ['label' => 'Email', 'rules' => 'required|valid_email'],
                // 'package_id' => ['label' => 'Package', 'rules' => 'required'],
                'mobile' => ['label' => 'Mobile', 'rules' => 'required|numeric'], 
            ]);

            if ($validated) {
                $inst = new InstitutionModel(); 
                try {
                      // ✅ IMAGE UPLOAD (NEW)
                $logo = $this->request->getFile('logo');
                $fileName = '';

                if ($logo && $logo->isValid() && !$logo->hasMoved()) {
                    $fileName = $logo->getRandomName();
                    $logo->move('uploads/institutions/', $fileName);
                } 
                     $data = [
                            'title' =>  $this->request->getPost('title'), 
                            'email' => $this->request->getPost('email'),
                            'mobile' => $this->request->getPost('mobile'),
                            // 'package_id' => $this->request->getPost('package_id'),
                            'location' => $this->request->getPost('location'),
                            'status' => 1,
                            'password' => 123456,
                             'logo'     => $fileName,
                        ];
                         $inst->insert($data);
                         $lastInsertedId = $inst->insertID();
                         
                   
                    
                } catch (\ReflectionException $e) {
                    $msg = $e->getMessage();
                    return redirect()->to( base_url('/admin/institutions') )->with('msg', $msg);
                }

                $msg = 'Institution Created Successfully';
            } else {
                $msg = implode(" ", $this->validator->getErrors());
            }
            return redirect()->to( base_url('/admin/institutions') )->with('msg', $msg);
        }

    }
    
public function assign_package()
{
    $institutionId = $this->request->getPost('institution_id');
    $packageId     = $this->request->getPost('package_id');

    $pkgModel = new MasterB2bPackageModel();
    $pkg = $pkgModel->find($packageId);

    if (!$pkg) {
        return redirect()->back()->with('msg', 'Invalid package');
    }

    $startDate = date('Y-m-d');
    $endDate   = date('Y-m-d', strtotime("+{$pkg['duration']}", strtotime($startDate)));
 
    $db = \Config\Database::connect();

  $db->table('institution_packages')->insert([
    'PKInstitutionID' => $institutionId,
    'PKPackageID'     => $packageId,

    'purchase_date'  => date('Y-m-d'),
    'start_date'     => $startDate,
    'end_date'       => $endDate,

    'max_students'   => $pkg['license_number'],
    'used_students'  => 0,
    'status'         => 'active',
    'created_at'     => date('Y-m-d H:i:s')
]);


    return redirect()
        ->to('/admin/institutions')
        ->with('msg', 'Package assigned successfully');
}

 public function edit($institutionPackageId)
{
    $institutions= new InstitutionModel();
$data['institution'] = $institutions->find($institutionPackageId);
print_r($data['institution'] ); exit;
  // return redirect()->to( base_url('/admin/institutions') )->with('data', $data);
}
public function update($id)
{
    $inst = new InstitutionModel();

    $logo = $this->request->getFile('logo');
    $oldLogo = $this->request->getPost('old_logo');

    if ($logo && $logo->isValid() && !$logo->hasMoved()) {
        $newName = $logo->getRandomName();
        $logo->move('uploads/institutions/', $newName);
    } else {
        $newName = $oldLogo;
    }

    $inst->update($id, [
        'title'    => $this->request->getPost('title'),
        'email'    => $this->request->getPost('email'),
        'mobile'   => $this->request->getPost('mobile'),
        'location' => $this->request->getPost('location'),
        'logo'     => $newName,
    ]);

    return redirect()->to(base_url('/admin/institutions'))
                     ->with('msg', 'Institution Updated Successfully');
}
public function delete($id)
{
    $inst = new InstitutionModel();

    // Optional: get logo before delete
    $institution = $inst->find($id);

    if ($institution) {

        // ✅ Delete logo file if exists
        if (!empty($institution['logo']) && file_exists('uploads/institutions/' . $institution['logo'])) {
            unlink('uploads/institutions/' . $institution['logo']);
        }

        // ✅ Delete DB record
        $inst->delete($id);

        return redirect()->to(base_url('/admin/institutions'))
                         ->with('msg', 'Institution Deleted Successfully');
    }

    return redirect()->to(base_url('/admin/institutions'))
                     ->with('msg', 'Institution Not Found');
}

   public function delete_package($institutionPackageId)
{
    $db = \Config\Database::connect();

    $exists = $db->table('institution_packages')
                 ->where('PKInstitutionPackageID', $institutionPackageId)
                 ->get()
                 ->getRow();

    if (!$exists) {
        return redirect()->back()->with('msg', 'Invalid package record');
    }

    $db->table('institution_packages')
       ->where('PKInstitutionPackageID', $institutionPackageId)
       ->delete();

    return redirect()
        ->to('/admin/institutions')
        ->with('msg', 'Assigned package deleted successfully');
}

public function renewPackage()
{
    $id = $this->request->getPost('id');

    if (!$id) {
        return $this->response->setJSON([
            'status' => 'error',
            'message' => 'Invalid ID'
        ]);
    }

    $db = \Config\Database::connect();

    $builder = $db->table('institution_packages ip');
    $builder->select('ip.*, p.duration');
    $builder->join('b2b_packages p', 'p.PKPackageID = ip.PKPackageID');
    $builder->where('ip.PKInstitutionPackageID', $id);
    $row = $builder->get()->getRow();

    if (!$row) {
        return $this->response->setJSON([
            'status' => 'error',
            'message' => 'Package not found'
        ]);
    }

    $today = date('Y-m-d');

    if ($row->end_date >= $today) {
        $newStart = $row->end_date;
    } else {
        $newStart = $today;
    }
  $duration = (int) $row->duration;

if ($duration <= 0) {
    return $this->response->setJSON([
        'status' => 'error',
        'message' => 'Invalid package duration'
    ]);
}

$today = date('Y-m-d');

if ($row->end_date == '0000-00-00' || empty($row->end_date)) {
    $newStart = $today;
} 
elseif ($row->end_date >= $today) {
    $newStart = $row->end_date;
} 
else {
    $newStart = $today;
}

$startDate = new \DateTime($newStart);
$startDate->modify("+{$duration} months");
$newEnd = $startDate->format('Y-m-d');

 

    // Expire old package
    $db->table('institution_packages')
        ->where('PKInstitutionPackageID', $id)
        ->update(['status' => 0]);

    // Insert new package row
    $db->table('institution_packages')->insert([
        'PKInstitutionID' => $row->PKInstitutionID,
        'PKPackageID'     => $row->PKPackageID,
        'start_date'      => $newStart,
        'end_date'        => $newEnd,
        'max_students'    => $row->max_students,
        'status'          => 1,
        'created_at'      => date('Y-m-d H:i:s')
    ]);

    return $this->response->setJSON([
        'status' => 'success',
        'message' => 'Package Renewed Successfully'
    ]);
}



}
