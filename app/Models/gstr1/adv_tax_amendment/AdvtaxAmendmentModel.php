<?php


namespace App\Models\gstr1\adv_tax_amendment;


use CodeIgniter\Model;

class AdvtaxAmendmentModel extends Model
{
    protected $table = 'amend_tax_liability';
    protected $primaryKey = 'atl_id';
    protected $allowedFields = [
        'atl_id',
        'eligible_to_taxed',
        'supply_type',
        'pos',
        'financial_year',
        'return_filing_period',
        'is_igst',
        'question_id'
    ];
}
