<?php


namespace App\Models\gstr1\b2b;


use CodeIgniter\Model;

class B2bModel extends Model
{
    protected $table = 'b2b';
    protected $primaryKey = 'b2b_id';
    protected $allowedFields = [
        'eligible_to_taxed',
        'receiver_gstin',
        'receiver_name',
        'invoice_number',
        'invoice_date',
        'is_igst',
        'pos',
        'total_invoce_value',
        'supply_type',
        'question_id',
    ];
    protected $returnType = 'array';

//    public function getPrimaryKey()
//    {
//        return $this->primaryKey;
//    }
}
