<?php

namespace App\Models\gstr1\export;

use CodeIgniter\Model;

class ExportModel extends Model {

    protected $table = '6a_exports';
    protected $primaryKey = '6a_id';
    protected $allowedFields = [
        '6a_id',
        'invoice_no',
        'invoice_date',
        'port_code',
        'billing_no',
        'shipping_date',
        'total_invoice_value',
        'supply_type',
        'gst_payment',
        'question_id'
    ];

}
