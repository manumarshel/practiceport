<?php


namespace App\Models\gstr1\tax_paid;


use CodeIgniter\Model;

class TaxpaidModel extends Model
{
    protected $table = 'adjustment_advances';
    protected $primaryKey = '11a_tax_id';
    protected $allowedFields = [
        '11a_tax_id',
        'eligible_to_taxed',
        'is_igst',
        'supply_type',
        'pos',
        'question_id'
    ];
}
