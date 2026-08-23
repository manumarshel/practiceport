<?php


namespace App\Models\gstr1\b2c_others;


use CodeIgniter\Model;

class b2c_others extends Model
{
    protected $table = 'b2c_others';
    protected $primaryKey = 'b2c_others_id';
    protected $allowedFields = [
        'pos',
        'taxable_value',
        'supply_type',
        'rate',
        'is_igst',
        'integrated_tax',
        'cess',
        'central_tax',
        'state_tax',
        'question_id',
    ];
}
