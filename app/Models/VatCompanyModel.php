<?php


namespace App\Models;


use CodeIgniter\Model;

class VatCompanyModel extends Model
{
    protected $table = 'vat_company';
    protected $primaryKey = 'id';
    //    protected $allowedFields = ['user_name', 'user_email', 'user_password', 'user_role', 'last_login'];
    
    protected $allowedFields = [
        'address',
        'street',
        'city',
        'area',
        'phone1',
        'phone2',
           'eng_name',
                        'arabic_name', 
                        'po',
                        'Emirates',
                        'code',
                        'email',
                        'last_eng',
                        'last_arabic',
                        'return_period',
                        'return_end',
                        'stagger',
                        'due_date',
    ];

    // public function get_current_user_info() {
    //     $session = session();
    //     $userId = $session->get('PKVatUserID');
    //     return $this->find($userId);
    // }

    // public function get_user_Id() {
    //     $session = session();
    //     return $session->get('PKVatUserID');
    // }
 
}
