<?php


namespace App\Models\gstr1\cdnur_amendment;


use CodeIgniter\Model;

class Cdnur_amendmentItemDetailsModel extends Model
{
    protected $table = '9c_cd_notes_unregistered_item_details';
    protected $primaryKey = '9c_cdnur_id';
    protected $allowedFields = [
        '9c_cdnur_id',
        'item_detail_id'
    ];
    protected $returnType     = 'array';
}
