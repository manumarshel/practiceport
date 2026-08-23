<?php


namespace App\Models\gstr1\adv_tax;


use CodeIgniter\Model;

class AdvtaxItemDetailsModel extends Model
{
    protected $table = '11a_tax_liabilities_item_details';
    protected $primaryKey = '11a_tax_id';
    protected $allowedFields = [
        '11a_tax_id',
        'item_detail_id'
    ];
    protected $returnType     = 'array';
}
