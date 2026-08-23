<?php


namespace App\Models\gstr1\_11a_tax_liabilities;


class _11aItemDetails
{
    protected $table = '11a_tax_liabilities_item_details';
    protected $primaryKey = '11a_tax_id';
    protected $allowedFields = [
        '11a_tax_id',
        'item_detail_id'
    ];
    protected $returnType     = 'array';
}
