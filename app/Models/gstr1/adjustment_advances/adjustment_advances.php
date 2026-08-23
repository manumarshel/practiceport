<?php


namespace App\Models\gstr1\adjustment_advances;


class adjustment_advances extends \CodeIgniter\Model
{
    protected $table = 'adjustment_advances';
    protected $primaryKey = '11a_tax_id';
    protected $allowedFields = [
        'pos',
        'supply_type',
        'is_eligible'
    ];
}
