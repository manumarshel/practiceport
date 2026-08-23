<?php


namespace App\Models\gstr1\amended_b2c_others;


use CodeIgniter\Model;

class amended_b2c_others extends Model
{
    protected $table = 'amended_b2c_others';
    protected $primaryKey = 'amend_b2c';
    protected $allowedFields = [
        'amend_b2c',
        'original_pos',
        'revised_pos',
        'financial_year',
        'supply_type',
        'return_filing_period',
        'e_gstin',
        'is_igst',
        'data_type',
        'question_id',
    ];
}
