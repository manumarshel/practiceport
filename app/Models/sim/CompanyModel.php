<?php

namespace App\Models\sim;

use CodeIgniter\Model;

class CompanyModel extends Model
{
    protected $table = 'companies';
    protected $primaryKey = 'company_id';
//    protected $allowedFields = ['user_name', 'user_email', 'user_password', 'user_role', 'last_login'];
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
        'gstr3b_return_period3_status',
        'gstr3b_return_period4',
        'gstr3b_return_period4_status',
        'gstr3b_return_period5',
        'gstr3b_return_period5_status',
        'financial_year',
        'quarter',
        'period',
        'status',
    ];
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];

    protected function beforeInsert(array $data)
    {
        return $this->passwordHash($data);
    }

    protected function beforeUpdate(array $data)
    {
        return $this->passwordHash($data);
    }

    protected function passwordHash(array $data)
    {
        if (isset($data['data']['password'])) {
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
            return $data;
        }
    }
}
