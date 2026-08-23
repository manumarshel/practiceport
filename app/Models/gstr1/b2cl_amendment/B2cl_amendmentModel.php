<?php


namespace App\Models\gstr1\b2cl_amendment;


use CodeIgniter\Model;

class B2cl_amendmentModel extends Model
{
    protected $table = '9a_b2c_large_invoice';
    protected $primaryKey = '9a_b2c_id';
    protected $allowedFields = [
        '9a_b2c_id',
        'eligible_to_taxed',
        'is_igst',
        'invoice_number',
        'invoice_date',
        'revised_invoice_number',
        'revised_invoice_date',
        'supply_type',
        'pos',
        'total_invoice_value',
        'financial_year',
        'original_invoice_number',
//        'original_invoice_date', //add to db
        'question_id'
    ];
}
