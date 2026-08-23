<?php


namespace App\Models\gstr1\tax_paid_amendment;


use CodeIgniter\Model;

class TaxpaidAmendmentModel extends Model
{
    protected $table = 'amend_adjustment_advances';
    protected $primaryKey = 'aaa_id';
    protected $allowedFields = [
        'aaa_id',
        'eligible_to_taxed',
//        'is_igst',
//        'original_invoice_number',
        'supply_type',
        'pos',
        'financial_year',
        'return_filing_period',
        'question_id'
    ];
}
