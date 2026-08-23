<?php
namespace App\Models;
use CodeIgniter\Model;

class InstitutionModel extends Model
{
    protected $table = 'mst_institutions';
    protected $primaryKey = 'PKInstitutionID';
    protected $allowedFields = [
        'title',
        'password', 
        'email',
        'mobile', 
        'logo',
        'location', 
        'status',  
    ];
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];

    protected function beforeInsert(array $data) {
        return $this->passwordHash($data);
    }

    protected function beforeUpdate(array $data) {
        return $this->passwordHash($data);
    }

    protected function passwordHash(array $data)
    {
        if ( isset($data['data']['password']) ) {
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
            return $data;
        }

        return $data;
    }

    public function get_current_institution_info() {
        $session = session();
        $userId = $session->get('id');
        return $this->find($userId);
    }

    public function get_institution_Id() {
        $session = session();
        return $session->get('id');
    }

//    protected function passwordHash2(array $data)
//    {
//
//
//        if ( $data && isset($data['data']) && isset($data['data']['password']) ) {
//            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
//            return $data;
//        }
//        return $data;
//    }
}
