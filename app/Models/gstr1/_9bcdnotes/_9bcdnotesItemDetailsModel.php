<?php


namespace App\Models\gstr1\_9bcdnotes;


use CodeIgniter\Model;

class _9bcdnotesItemDetailsModel extends Model
{
    protected $table = '9bcd_item_details';
    protected $primaryKey = '9bcdn_id';
    protected $allowedFields = [
        '9bcdn_id',
        'item_detail_id'
    ];
    protected $returnType     = 'array';
}
