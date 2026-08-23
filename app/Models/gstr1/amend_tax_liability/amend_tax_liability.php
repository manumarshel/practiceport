<?php


namespace App\Models\gstr1\amend_tax_liability;


use CodeIgniter\Model;

class amend_tax_liability extends Model
{
    protected $table = 'amend_tax_liability';
    protected $primaryKey = 'atl_id';
    protected $allowedFields = [
        'financial_year',
        'return_filing_period',
        'pos',
        'is_igst',
        'question_id',
    ];
}
