<?php


namespace App\Models\gstr1\hsn;


class hsn extends \CodeIgniter\Model
{
    protected $table = 'hsn_wise_summary';
    protected $primaryKey = 'hsn_id';
    protected $allowedFields = [
        'hsn',
        'description',
        'uqc',
        'hsn',
        'total_quantity',
        'total_taxable_value',
        'rate',
        'integrated_tax',
        'central_tax',
        'state_tax',
        'cess',
        'question_id',
    ];
}
