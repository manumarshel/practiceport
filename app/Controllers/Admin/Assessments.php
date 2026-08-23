<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AssessmentModel;
use App\Models\CourseModel;
use App\Models\CompanyModel;
use Config\Database;

class Assessments extends BaseController
{
    public function index()
    {
        $db = Database::connect();
        
        $builder = $db->table('assessments');
        $builder->select('assessments.*, courses.course_name, companies.name as company_name');
        $builder->join('courses', 'courses.course_id = assessments.course_id', 'left');
        $builder->join('companies', 'companies.company_id = assessments.company_id', 'left');
        $builder->orderBy('assessments.id', 'DESC');
        $assessments = $builder->get()->getResultArray();

        $courseModel = new CourseModel();
        $courses = $courseModel->orderBy('course_name', 'ASC')->findAll();

        $companyModel = new CompanyModel();
        $companies = $companyModel->orderBy('name', 'ASC')->findAll();

        $data = [
            'assessments' => $assessments,
            'courses'     => $courses,
            'companies'   => $companies,
            'title'       => 'Assessments'
        ];

        return view('admin/assessments/index', $data);
    }

    public function save()
    {
        $assessmentId = $this->request->getPost('assessment_id');
        $courseId = $this->request->getPost('course_id');
        $companyId = $this->request->getPost('company_id');
        $title = $this->request->getPost('title');
        $question = $this->request->getPost('question');

        if (empty($courseId) || empty($companyId) || empty($question)) {
            return redirect()->back()->withInput()->with('error', 'Please fill in all required fields (Category, Company, Question).');
        }

        $assessmentModel = new AssessmentModel();

        $saveData = [
            'course_id'  => $courseId,
            'company_id' => $companyId,
            'title'      => !empty($title) ? $title : 'Assessment Question',
            'question'   => $question,
            'status'     => 1
        ];

        // Handle optional download file upload
        $file = $this->request->getFile('download_file');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(FCPATH . 'public/assets/uploads/questions', $newName);
            $saveData['download_file'] = $newName;
        }

        if (!empty($assessmentId)) {
            $assessmentModel->update($assessmentId, $saveData);
            return redirect()->to(base_url('admin/assessments'))->with('msg', 'Assessment updated successfully!');
        } else {
            $assessmentModel->insert($saveData);
            return redirect()->to(base_url('admin/assessments'))->with('msg', 'Assessment created successfully!');
        }
    }

    public function get_assessment($id)
    {
        $assessmentModel = new AssessmentModel();
        $assessment = $assessmentModel->find($id);

        if (!$assessment) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Assessment not found.']);
        }

        return $this->response->setJSON([
            'status' => 'success',
            'data'   => $assessment
        ]);
    }

    public function delete($id)
    {
        $assessmentModel = new AssessmentModel();
        if ($assessmentModel->delete($id)) {
            return redirect()->to(base_url('admin/assessments'))->with('msg', 'Assessment deleted successfully!');
        } else {
            return redirect()->to(base_url('admin/assessments'))->with('error', 'Failed to delete assessment.');
        }
    }
}
