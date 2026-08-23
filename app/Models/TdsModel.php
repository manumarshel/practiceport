<?php

namespace App\Models;

class TdsModel extends \CodeIgniter\Model
{
    protected $table = 'epay_tds';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'form_type',
        'financial_year',
        'quarter',
        'upload_type',  
        'tds_file',
        'company_id',
        'question_id',
        'user_id',
        'original_rrr',
        'previous_rrr',
        'status',
        'transaction_id',
        'acknowledgement_no',
        'verify_type',
        'evc_code'
    ];
}
