<?php


namespace App\Models\user;


use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'user_id';
//    protected $allowedFields = ['user_name', 'user_email', 'user_password', 'user_role', 'last_login'];
    protected $allowedFields = [
        'email',
        'password',
        'first_name',
        'last_name',
        'phone',
        'active',
        'deleted',
        'enroll_type',
        'institutionID',
        'reset_password',
        'date_registered'
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

    public function get_current_user_info() {
        $session = session();
        $userId = $session->get('id');
        return $this->find($userId);
    }

    public function get_user_Id() {
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
