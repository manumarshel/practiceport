<?php


namespace App\Models\gstr1\adv_tax;


use CodeIgniter\Model;

class AdvtaxModel extends Model
{
    protected $table = '11a_tax_liabilities';
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
