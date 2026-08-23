<?php

namespace App\Models;
use CodeIgniter\Model;

class CompanyModel extends Model
{
    protected $table = 'companies';
    protected $primaryKey = 'company_id';
//    protected $allowedFields = ['admin_name', 'admin_email', 'admin_password', 'admin_role', 'last_login'];
    protected $allowedFields = [
        'name',
        'username',
        'password',
        'gst_number',
        'legal_name',
        'trade_name',
        'signatory',
        'return_period',
        'gstr1_due_date',
        'gstr3b_due_date',
        'gstr1_return_period1',
        'gstr1_return_period1_status',
        'gstr1_return_period2',
        'gstr1_return_period2_status',
        'gstr1_return_period3',
        'gstr1_return_period3_status',
        'gstr1_return_period4',
        'gstr1_return_period4_status',
        'gstr1_return_period5',
        'gstr1_return_period5_status',
        'gstr3b_return_period1',
        'gstr3b_return_period1_status',
        'gstr3b_return_period2',
        'gstr3b_return_period2_status',
        'gstr3b_return_period3',
        'gstr3b_return_period3_status',
        'gstr3b_return_period4',
        'gstr3b_return_period4_status',
        'gstr3b_return_period5',
        'gstr3b_return_period5_status',
        'financial_year',
        'quarter',
        'period',
        'status',
        'tan',
        'pan',
        'phone',
        'email',
        'state',
        'pincode', 
        'city',
        'address1',
        'address2',
        'esi_code',
        'establishment_id',
        'lin_id'
    ];
    protected $returnType     = 'array';
}
