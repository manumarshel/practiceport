<?php


namespace App\Models\gstr1\export_amendment;


use CodeIgniter\Model;

class Export_amendmentItemDetailsModel extends Model
{
    protected $table = '9a_exports_item_details';
    protected $primaryKey = '9a_exports_id';
    protected $allowedFields = [
        '9a_exports_id',
        'item_detail_id'
    ];
    protected $returnType     = 'array';
}
