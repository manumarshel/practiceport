<?php


namespace App\Models\gstr1\b2c_others;


use CodeIgniter\Model;

class B2c_othersItemDetailsModel extends Model
{
    protected $table = 'b2c_others_item_details';
    protected $primaryKey = 'b2c_others_id';
    protected $allowedFields = [
        'b2c_others_id',
        'item_detail_id',
    ];
}
