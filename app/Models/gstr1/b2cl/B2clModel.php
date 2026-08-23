<?php


namespace App\Models\gstr1\b2cl;


use CodeIgniter\Model;

class B2clModel extends Model
{
    protected $table = 'b2c_large';
    protected $primaryKey = 'b2c_id';
    protected $allowedFields = [
        'invoice_no',
        'invoice_date',
        'supply_type',
        'total_invoice_value',
        'question_id',
        'is_eligible',
        'is_igst',
        'pos'
    ];
}
