<?php


namespace App\Models;


use CodeIgniter\Model;

class VatuserModel extends Model
{
    protected $table = 'vat_user';
    protected $primaryKey = 'PKVatUserID';
//    protected $allowedFields = ['user_name', 'user_email', 'user_password', 'user_role', 'last_login'];
    protected $allowedFields = [
        'vat_username',
        'language',
        'channel',
        'image',
        'status',
        'companyId'
    ];
    
 

    public function get_current_user_info() {
        $session = session();
        $userId = $session->get('PKVatUserID');
        return $this->find($userId);
    }

    public function get_user_Id() {
        $session = session();
        return $session->get('PKVatUserID');
    }
 
}
