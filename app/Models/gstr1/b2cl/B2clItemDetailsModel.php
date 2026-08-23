<?php


namespace App\Models\gstr1\b2cl;


use CodeIgniter\Model;

class B2clItemDetailsModel extends Model
{
    protected $table = 'b2c_item_details';
    protected $primaryKey = 'b2c_id';
    protected $allowedFields = [
        'b2c_id',
        'item_detail_id'
    ];
    protected $returnType     = 'array';
}
