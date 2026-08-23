<?php


namespace App\Models;


use CodeIgniter\Model;

class VatactivityModel extends Model
{
    protected $table = 'vat_activity';
    protected $primaryKey = 'PKVatActivityID';
//    protected $allowedFields = ['user_name', 'user_email', 'user_password', 'user_role', 'last_login'];
    protected $allowedFields = [
        'subActivity',
        'industry',
        'main_group',
        'sub_group',
        'activity',
        'code',
        'status',
    ];
    
 
 
}
