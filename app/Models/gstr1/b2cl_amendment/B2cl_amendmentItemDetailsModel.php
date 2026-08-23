<?php


namespace App\Models\gstr1\b2cl_amendment;


use CodeIgniter\Model;

class B2cl_amendmentItemDetailsModel extends Model
{
    protected $table = '9a_b2c_large_invoice_item_details';
    protected $primaryKey = '9a_b2c_id';
    protected $allowedFields = [
        '9a_b2c_id',
        'item_detail_id'
    ];
    protected $returnType     = 'array';
}
