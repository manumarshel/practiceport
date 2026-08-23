<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\VideoTutorialModel;
use App\Models\CourseModel;
use CodeIgniter\Database\Exceptions\DatabaseException;

class VideoTutorials extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('video_tutorials');
        $builder->select('video_tutorials.*, courses.course_name');
        $builder->join('courses', 'video_tutorials.category_id = courses.course_id', 'left');
        $query = $builder->get();
        
        $data = [
            'video_tutorials' => $query->getResultArray(),
            'title' => 'Video Tutorials'
        ];

        // Format embed URLs for the listing preview
        foreach ($data['video_tutorials'] as &$video) {
            $video['embed_url'] = $this->getEmbedUrl($video['video_url']);
        }

        return view('admin/video_tutorials/index', $data);
    }

    public function add()
    {
        helper(['form', 'url']);
        $courseModel = new CourseModel();
        $data = [
            'courses' => $courseModel->findAll(),
            'title' => 'Add Video Tutorial',
            'video_tutorial' => null // to match unified edit/add view
        ];

        if ($this->request->getMethod() == 'post') {
            $validation = \Config\Services::validation();
            $validation->setRules([
                'category_id'    => ['label' => 'Category', 'rules' => 'required|is_natural_no_zero'],
                'title'          => ['label' => 'Title', 'rules' => 'required|min_length[3]|max_length[255]'],
                'description'    => ['label' => 'Description', 'rules' => 'permit_empty'],
                'video_platform' => ['label' => 'Video Platform', 'rules' => 'required|in_list[youtube,vimeo,bunny]'],
                'video_url'      => ['label' => 'Video URL', 'rules' => 'required|valid_url'],
            ]);

            if (!$this->validate($validation->getRules())) {
                $data['validation'] = $this->validator;
                return view('admin/video_tutorials/add', $data);
            } else {
                $vtm = new VideoTutorialModel();
                $formData = [
                    'category_id'    => $this->request->getPost('category_id'),
                    'title'          => $this->request->getPost('title'),
                    'description'    => $this->request->getPost('description'),
                    'video_platform' => $this->request->getPost('video_platform'),
                    'video_url'      => $this->request->getPost('video_url'),
                ];

                try {
                    $vtm->insert($formData);
                    return redirect()->to(base_url('admin/video-tutorials'))->with('msg', 'Video tutorial added successfully!');
                } catch (\ReflectionException $e) {
                    return redirect()->back()->withInput()->with('error', $e->getMessage());
                }
            }
        }

        return view('admin/video_tutorials/add', $data);
    }

    public function edit($id = null)
    {
        if (empty($id)) {
            return redirect()->to(base_url('admin/video-tutorials'))->with('error', 'Invalid video tutorial ID.');
        }

        helper(['form', 'url']);
        $vtm = new VideoTutorialModel();
        $videoTutorial = $vtm->find($id);

        if (!$videoTutorial) {
            return redirect()->to(base_url('admin/video-tutorials'))->with('error', 'Video tutorial not found.');
        }

        $courseModel = new CourseModel();
        $data = [
            'courses' => $courseModel->findAll(),
            'title' => 'Edit Video Tutorial',
            'video_tutorial' => $videoTutorial
        ];

        if ($this->request->getMethod() == 'post') {
            $validation = \Config\Services::validation();
            $validation->setRules([
                'category_id'    => ['label' => 'Category', 'rules' => 'required|is_natural_no_zero'],
                'title'          => ['label' => 'Title', 'rules' => 'required|min_length[3]|max_length[255]'],
                'description'    => ['label' => 'Description', 'rules' => 'permit_empty'],
                'video_platform' => ['label' => 'Video Platform', 'rules' => 'required|in_list[youtube,vimeo,bunny]'],
                'video_url'      => ['label' => 'Video URL', 'rules' => 'required|valid_url'],
            ]);

            if (!$this->validate($validation->getRules())) {
                $data['validation'] = $this->validator;
                return view('admin/video_tutorials/add', $data);
            } else {
                $formData = [
                    'category_id'    => $this->request->getPost('category_id'),
                    'title'          => $this->request->getPost('title'),
                    'description'    => $this->request->getPost('description'),
                    'video_platform' => $this->request->getPost('video_platform'),
                    'video_url'      => $this->request->getPost('video_url'),
                ];

                try {
                    $vtm->update($id, $formData);
                    return redirect()->to(base_url('admin/video-tutorials'))->with('msg', 'Video tutorial updated successfully!');
                } catch (\ReflectionException $e) {
                    return redirect()->back()->withInput()->with('error', $e->getMessage());
                }
            }
        }

        return view('admin/video_tutorials/add', $data);
    }

    public function delete()
    {
        $id = $this->request->getPost('id');
        if ($id && intval($id)) {
            $vtm = new VideoTutorialModel();
            try {
                $vtm->delete($id);
                return $this->response->setStatusCode(200)->setBody("Success");
            } catch (DatabaseException $e) {
                return $this->response->setStatusCode(400, $e->getMessage());
            }
        }
        return $this->response->setStatusCode(400, "Invalid ID");
    }

    /**
     * Helper to detect and extract proper iframe embed URLs for YouTube, Vimeo, and Bunny.net
     */
    private function getEmbedUrl($url)
    {
        // Trim whitespace
        $url = trim($url);

        // Handle case where user pasted direct iframe code
        if (preg_match('/src="([^"]+)"/', $url, $match)) {
            $url = $match[1];
        }

        // Check YouTube raw link
        if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/\s]{11})%i', $url, $match)) {
            return "https://www.youtube.com/embed/" . $match[1] . "?rel=0&modestbranding=1&iv_load_policy=3&showinfo=0";
        }

        // Check Vimeo raw link
        if (preg_match('%vimeo\.com/(?:video/)?([0-9]+)%i', $url, $match)) {
            return "https://player.vimeo.com/video/" . $match[1] . "?title=0&byline=0&portrait=0&badge=0";
        }

        // Check if it is already an embed URL (e.g., YouTube embed or Vimeo player URL)
        if (strpos($url, 'youtube.com/embed/') !== false || strpos($url, 'youtube-nocookie.com/embed/') !== false) {
            if (strpos($url, 'rel=') === false) {
                $separator = (strpos($url, '?') === false) ? '?' : '&';
                $url .= $separator . "rel=0&modestbranding=1&iv_load_policy=3&showinfo=0";
            }
            return $url;
        }

        if (strpos($url, 'player.vimeo.com/video/') !== false) {
            if (strpos($url, 'title=') === false) {
                $separator = (strpos($url, '?') === false) ? '?' : '&';
                $url .= $separator . "title=0&byline=0&portrait=0&badge=0";
            }
            return $url;
        }

        return $url;
    }

    public function sequence()
    {
        $packageModel = new \App\Models\MasterPackageModel();
        $b2bPackageModel = new \App\Models\MasterB2bPackageModel();
        $data = [
            'packages' => $packageModel->where('status', 1)->findAll(),
            'b2b_packages' => $b2bPackageModel->where('status', 1)->findAll(),
            'title' => 'Package Lessons Sequence'
        ];
        return view('admin/video_tutorials/sequence', $data);
    }

    public function getCategoriesByPackage($packageId)
    {
        $packageType = $this->request->getGet('package_type') ?: 'normal';
        
        $db = \Config\Database::connect();
        
        if ($packageType === 'b2b') {
            $builder = $db->table('b2b_package_course_mapping pc');
            $builder->select('c.course_id, c.course_name');
            $builder->join('courses c', 'c.course_id = pc.PKCourseID');
            $builder->where('pc.PKPackageID', $packageId);
        } else {
            $builder = $db->table('package_course_mapping pc');
            $builder->select('c.course_id, c.course_name');
            $builder->join('courses c', 'c.course_id = pc.PKCourseID');
            $builder->where('pc.PKPackageID', $packageId);
        }
        
        $courses = $builder->get()->getResultArray();

        return $this->response->setJSON(['status' => 'success', 'categories' => $courses]);
    }

    public function getCourseItems($packageId, $courseId)
    {
        $packageType = $this->request->getGet('package_type') ?: 'normal';
        
        if (empty($packageId) || empty($courseId)) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Invalid IDs']);
        }

        $db = \Config\Database::connect();
        
        // 1. Fetch sequence if exists
        $sequenceBuilder = $db->table('package_lessons_mapping');
        $sequenceBuilder->where('package_id', $packageId);
        $sequenceBuilder->where('package_type', $packageType);
        $sequenceBuilder->where('course_id', $courseId);
        $sequenceBuilder->orderBy('position', 'ASC');
        $sequenceEntries = $sequenceBuilder->get()->getResultArray();
        
        // 2. Fetch all videos for this course
        $vtm = new VideoTutorialModel();
        $videosData = $vtm->where('category_id', $courseId)->findAll();
        $videos = [];
        foreach ($videosData as $v) {
            $videos[$v['id']] = [
                'id' => $v['id'],
                'type' => 'video',
                'title' => $v['title']
            ];
        }

        // 3. Fetch all active questions for this course
        $qBuilder = $db->table('mst_questions');
        $qBuilder->where('category', $courseId);
        $qBuilder->where('active', 1);
        $questionsData = $qBuilder->get()->getResultArray();
        $questions = [];
        foreach ($questionsData as $q) {
            $questions[$q['question_id']] = [
                'id' => $q['question_id'],
                'type' => 'question',
                'title' => $q['question']
            ];
        }

        $availableItems = [];
        $selectedItems = [];
        
        // If sequence exists, build array in that exact order
        if (!empty($sequenceEntries)) {
            $processedVideoIds = [];
            $processedQuestionIds = [];
            
            foreach ($sequenceEntries as $seq) {
                if ($seq['item_type'] === 'video' && isset($videos[$seq['item_id']])) {
                    $selectedItems[] = $videos[$seq['item_id']];
                    $processedVideoIds[] = $seq['item_id'];
                } elseif ($seq['item_type'] === 'question' && isset($questions[$seq['item_id']])) {
                    $selectedItems[] = $questions[$seq['item_id']];
                    $processedQuestionIds[] = $seq['item_id'];
                }
            }
            
            // Append any newly added videos/questions not in sequence to available list
            foreach ($videos as $id => $v) {
                if (!in_array($id, $processedVideoIds)) {
                    $availableItems[] = $v;
                }
            }
            foreach ($questions as $id => $q) {
                if (!in_array($id, $processedQuestionIds)) {
                    $availableItems[] = $q;
                }
            }
        } else {
            // Fallback: all available, none selected
            foreach ($videos as $v) {
                $availableItems[] = $v;
            }
            foreach ($questions as $q) {
                $availableItems[] = $q;
            }
        }

        return $this->response->setJSON(['status' => 'success', 'available_items' => $availableItems, 'selected_items' => $selectedItems]);
    }

    public function saveSequence()
    {
        $packageId = $this->request->getPost('package_id');
        $packageType = $this->request->getPost('package_type') ?: 'normal';
        $courseId = $this->request->getPost('course_id');
        $sequenceJson = $this->request->getPost('sequence');
        
        if (empty($packageId) || empty($courseId) || empty($sequenceJson)) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Missing data.']);
        }
        
        $sequence = json_decode($sequenceJson, true);
        if (!is_array($sequence)) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Invalid sequence data.']);
        }

        $db = \Config\Database::connect();
        $db->transStart();
        
        // Delete old sequence
        $db->table('package_lessons_mapping')
           ->where('package_id', $packageId)
           ->where('package_type', $packageType)
           ->where('course_id', $courseId)
           ->delete();
        
        // Insert new sequence
        $insertData = [];
        $position = 1;
        foreach ($sequence as $item) {
            if (isset($item['item_id'], $item['item_type']) && in_array($item['item_type'], ['video', 'question'])) {
                $insertData[] = [
                    'package_id' => $packageId,
                    'package_type' => $packageType,
                    'course_id' => $courseId,
                    'item_type' => $item['item_type'],
                    'item_id' => $item['item_id'],
                    'position' => $position++
                ];
            }
        }
        
        if (!empty($insertData)) {
            $db->table('package_lessons_mapping')->insertBatch($insertData);
        }
        
        $db->transComplete();

        if ($db->transStatus() === false) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Database error while saving sequence.']);
        }

        return $this->response->setJSON(['status' => 'success']);
    }
}
