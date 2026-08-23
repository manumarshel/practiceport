<?php


namespace App\Models\gstr1\_6aExports;


class _6aExportsModel extends \CodeIgniter\Model
{
    protected $table = '6a_exports';
    protected $primaryKey = '6a_id';
    protected $allowedFields = [
        'invoice_no',
        'invoice_date',
        'port_code',
        'billing_no',
        'shipping_date',
        'total_invoice_value',
        'supply_type',
        'gst_payment',
        'question_id',
    ];
}
