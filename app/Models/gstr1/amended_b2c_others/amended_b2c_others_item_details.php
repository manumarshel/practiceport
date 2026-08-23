<?php


namespace App\Models\gstr1\amended_b2c_others;


class amended_b2c_others_item_details extends \CodeIgniter\Model
{
    protected $table = 'amend_b2c_item_details';
    protected $primaryKey = 'amend_b2c';
    protected $allowedFields = [
        'amend_b2c',
        'item_detail_id'
    ];
    protected $returnType     = 'array';
}
