<?php


namespace App\Models\gstr1\adjustment_advances;


use CodeIgniter\Model;

class adjustment_advances_item_details extends Model
{
    protected $table = 'adjustment_advance_item_details';
    protected $primaryKey = '9c_cdnur_id';
    protected $allowedFields = [
        '9c_cdnur_id',
        'item_detail_id'
    ];
    protected $returnType     = 'array';
}
