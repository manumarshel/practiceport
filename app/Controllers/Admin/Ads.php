<?php


namespace App\Controllers\Admin;


use App\Models\AddModel;
use CodeIgniter\Database\Exceptions\DatabaseException;

class Ads extends \App\Controllers\BaseController
{

    public function index()
    {
        $data = [];
        $adm = new AddModel();
        $data['ads'] = $adm->findAll();
        return view('admin/ads', $data);
    }

    public function add() {
        if ($this->request->getMethod() == 'post') {
            helper(['form', 'url']);

            $validated = $this->validate([
                'ad_img' => [
                    'uploaded[ad_img]',
                    'mime_in[ad_img,image/jpg,image/jpeg,image/gif,image/png]',
                    'max_size[ad_img,4096]',
                ],
            ]);
            if ( $this->validator->hasError('ad_img')) {
                $msg = implode(" ", $this->validator->getErrors());
            }
            //'Please select a valid file';
            if ($validated) {
                $ad_img = $this->request->getFile('ad_img');
                $ad_name = $ad_img->getRandomName();
//                $ad_img->move(WRITEPATH . 'uploads/ads', $ad_name);
                $ad_img->move(ROOTPATH.'public/assets/uploads/ads', $ad_name);

                $adm = new AddModel();
                $data = [
                    'ad_url' =>  $this->request->getPost('ad_name'),
                    'image'  => $ad_name,
                    'type' => $ad_img->getClientMimeType()
                ];
                $adm->insert($data);

                $msg = 'File has been uploaded';
            }
            return redirect()->to( base_url('/admin/ads') )->with('msg', $msg);
//            echo "<pre>";
//            var_dump($_POST);
//            echo "<pre>";
//
//            echo "<pre>";
//            var_dump($_FILES);
//            echo "<pre>";
        }

    }

    public function delete() {
        $ad_id = $_POST['id'];
        $adm = new AddModel();
        if ( $ad_id && intval($ad_id) ) {
            try {
                $adm->delete($ad_id);
                return $this->response->setStatusCode(200)->setBody("Success");
            } catch (DatabaseException $e) {
                return $this->response->setStatusCode(401, $e->getMessage());
            }

        }
        return $this->response->setStatusCode(401, "invalid questionId");
//        echo "questionId: " . $question_id;
    }
}
