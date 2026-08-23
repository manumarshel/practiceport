<?php


namespace App\Models\gstr1;


use CodeIgniter\Model;

class ItemDetailsModel extends Model
{
    protected $table = 'item_details';
    protected $primaryKey = 'item_detail_id';
    protected $allowedFields = [
        'rate_percent',
        'tax_value',
        'integrated_tax',
        'cgst',
        'sgst',
        'cess',
    ];
    protected $returnType     = 'array';
}
