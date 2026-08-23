<?php


namespace App\Models\gstr1\hsn;


class HsnModel extends \CodeIgniter\Model
{
    protected $table = 'hsn_wise_summary';
    protected $primaryKey = 'hsn_id';
    protected $allowedFields = [
        'hsn_id',
        'hsn',
        'description',
        'uqc',
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
