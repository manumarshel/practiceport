<?php

namespace App\Models;

class EpaytaxModel extends \CodeIgniter\Model
{
    protected $table = 'epay_tax';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'assesment_year',
        'section',
        'code',
        'tax',  
        'supercharge',
        'cess',
        'interest',
        'penalty',
        'fee',
        'total',
        'words_total',
        'company_id',
        'question_id',
        'user_id',
        'type',
        'status',
        'cin'
    ];
}
