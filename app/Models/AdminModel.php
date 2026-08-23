<?php


namespace App\Models;


use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admin_users';
    protected $primaryKey = 'admin_id';
//    protected $allowedFields = ['admin_name', 'admin_email', 'admin_password', 'admin_role', 'last_login'];
    protected $allowedFields = ['admin_name', 'admin_password', 'admin_role', 'last_login'];
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
    }
}
