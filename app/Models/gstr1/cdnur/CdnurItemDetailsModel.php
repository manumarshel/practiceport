<?php


namespace App\Models\gstr1\cdnur;


use CodeIgniter\Model;

class CdnurItemDetailsModel extends Model
{
    protected $table = '9bcd_unregistred';
    protected $primaryKey = '9bcdn_id';
    protected $allowedFields = [
        '9bcdn_id',
        'item_detail_id'
    ];
    protected $returnType     = 'array';
}
