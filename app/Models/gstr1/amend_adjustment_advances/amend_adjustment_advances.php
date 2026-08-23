<?php


namespace App\Models\gstr1\amend_adjustment_advances;


use CodeIgniter\Model;

class amend_adjustment_advances extends Model
{
    protected $table = 'amend_adjustment_advances';
    protected $primaryKey = 'aaa_id';
    protected $allowedFields = [
        'financial_year',
        'return_filing_period',
        'pos',
        'question_id',
        'is_eligible'
    ];
}
