<?php


namespace App\Models\gstr1\b2b;


use CodeIgniter\Model;

class b2bItemDetailsModel extends Model
{
    protected $table = 'b2b_item_details';
    protected $primaryKey = 'b2b_id';
    protected $allowedFields = [
        'b2b_id',
        'item_detail_id'
    ];
    protected $returnType     = 'array';
}
