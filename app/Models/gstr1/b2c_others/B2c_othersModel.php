<?php


namespace App\Models\gstr1\b2c_others;


use CodeIgniter\Model;

class B2c_othersModel extends Model
{
    protected $table = 'b2c_others';
    protected $primaryKey = 'b2c_others_id';
    protected $allowedFields = [
        'b2c_others_id',
        'pos',
        'financial_year',
        'supply_type',
        'return_filing_period',
        'e_gstin',
        'data_type',
        'rate',
        'total_invoice_value',
        'igst',
        'cgst',
        'sgst',
        'is_igst',
        'cess',
        'question_id',
    ];
}
