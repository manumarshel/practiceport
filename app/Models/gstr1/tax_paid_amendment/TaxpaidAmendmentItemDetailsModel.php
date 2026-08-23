<?php


namespace App\Models\gstr1\tax_paid_amendment;


use CodeIgniter\Model;

class TaxpaidAmendmentItemDetailsModel extends Model
{
    protected $table = 'amend_adjustment_advances_item_details';
    protected $primaryKey = 'aaa_id';
    protected $allowedFields = [
        'aaa_id',
        'item_detail_id'
    ];
    protected $returnType     = 'array';
}
