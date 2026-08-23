<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\CourseModel;

class Courses extends BaseController
{
    public function index()
    {
        $courseModel = new CourseModel();
        
        $data = [
            'courses' => $courseModel->findAll(),
            'title' => 'Manage Courses'
        ];

        return view('admin/courses/index', $data);
    }

    public function add()
    {
        helper(['form', 'url']);
        $data = [
            'title' => 'Add Course',
            'course' => null // For shared add/edit view
        ];

        if ($this->request->getMethod() == 'post') {
            $validation = \Config\Services::validation();
            $validation->setRules([
                'course_name' => ['label' => 'Course Name', 'rules' => 'required|min_length[3]|max_length[255]']
            ]);

            if (!$validation->withRequest($this->request)->run()) {
                return view('admin/courses/add_edit', [
                    'title' => 'Add Course',
                    'course' => null,
                    'validation' => $validation
                ]);
            } else {
                $courseModel = new CourseModel();
                $courseModel->save([
                    'course_name' => $this->request->getPost('course_name')
                ]);
                return redirect()->to(base_url('admin/courses'))->with('msg', 'Course created successfully');
            }
        }

        return view('admin/courses/add_edit', $data);
    }

    public function edit($id = null)
    {
        helper(['form', 'url']);
        $courseModel = new CourseModel();
        
        $course = $courseModel->find($id);
        if (!$course) {
            return redirect()->to(base_url('admin/courses'))->with('error', 'Course not found');
        }

        $data = [
            'title' => 'Edit Course',
            'course' => $course
        ];

        if ($this->request->getMethod() == 'post') {
            $validation = \Config\Services::validation();
            $validation->setRules([
                'course_name' => ['label' => 'Course Name', 'rules' => 'required|min_length[3]|max_length[255]']
            ]);

            if (!$validation->withRequest($this->request)->run()) {
                $data['validation'] = $validation;
                return view('admin/courses/add_edit', $data);
            } else {
                $courseModel->update($id, [
                    'course_name' => $this->request->getPost('course_name')
                ]);
                return redirect()->to(base_url('admin/courses'))->with('msg', 'Course updated successfully');
            }
        }

        return view('admin/courses/add_edit', $data);
    }

    public function delete()
    {
        $id = $this->request->getPost('id');
        if ($id) {
            $courseModel = new CourseModel();
            $course = $courseModel->find($id);
            if ($course) {
                // Warning: We might want to check if the course has lessons before deleting, 
                // but for simple CRUD, we'll just delete. 
                $courseModel->delete($id);
                return $this->response->setJSON(['status' => 'success', 'message' => 'Course deleted successfully']);
            }
        }
        return $this->response->setJSON(['status' => 'error', 'message' => 'Failed to delete course']);
    }
}
