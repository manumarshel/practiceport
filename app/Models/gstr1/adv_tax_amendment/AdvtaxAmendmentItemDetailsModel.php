<?php


namespace App\Models\gstr1\adv_tax_amendment;


use CodeIgniter\Model;

class AdvtaxAmendmentItemDetailsModel extends Model
{
    protected $table = 'amend_tax_liability_item_details';
    protected $primaryKey = 'atl_id';
    protected $allowedFields = [
        'atl_id',
        'item_detail_id'
    ];
    protected $returnType     = 'array';
}
