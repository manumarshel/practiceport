<?php


namespace App\Controllers\Admin;


use App\Controllers\BaseController;
use App\Models\VideoModel;
use CodeIgniter\Model;

class Videos extends BaseController
{
    public function index()
    {
        $data = [];
        $vdm = new VideoModel();
        $data['videos'] = $vdm->findAll();
        return view('admin/videos', $data);
    }

    public function add() {
        if ($this->request->getMethod() == 'post') {
            helper(['form', 'url']);

            $validated = $this->validate([
                'name' => ['label' => 'Name', 'rules' => 'required'],
                'url' => ['label' => 'URL', 'rules' => 'required'],
            ]);

            if ($validated) {
                $vdm = new VideoModel();
                $data = [
                    'name' =>  $this->request->getPost('name'),
                    'url'  => $this->request->getPost('url')
                ];

                try {
                    $vdm->insert($data);
                } catch (\ReflectionException $e) {
                    $msg = $e->getMessage();
                    return redirect()->to( base_url('/admin/videos') )->with('msg', $msg);
                }
                $msg = 'Video has been uploaded';
            } else {
                $msg = implode(" ", $this->validator->getErrors());
            }
            return redirect()->to( base_url('/admin/videos') )->with('msg', $msg);
        }

    }

    public function update() {
        if ($this->request->getMethod() == 'post') {
            helper(['form', 'url']);

            $validated = $this->validate([
                'videoId' => ['label' => 'Video Id', 'rules' => 'required'],
                'youtubeUrl' => ['label' => 'URL', 'rules' => 'required'],
            ]);

            if ($validated) {
                $vdm = new VideoModel();
                $data = [
                    'url'  => $this->request->getPost('youtubeUrl')
                ];

                $videoId = $this->request->getPost('videoId');

                try {
                    $vdm->update($videoId, $data);
                } catch (\ReflectionException $e) {
                    $msg = $e->getMessage();
                    return redirect()->to( base_url('/admin/videos') )->with('msg', $msg);
                }
                $msg = 'Video has been updated';
            } else {
                $msg = implode(" ", $this->validator->getErrors());
            }
            return redirect()->to( base_url('/admin/videos') )->with('msg', $msg);
        }

    }
}
