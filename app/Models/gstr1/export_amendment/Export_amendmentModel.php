<?php


namespace App\Models\gstr1\export_amendment;


use CodeIgniter\Model;

class Export_amendmentModel extends Model
{
    protected $table = '9a_exports';
    protected $primaryKey = '9a_exports_id';
    protected $allowedFields = [
        '9a_exports_id',
        'is_igst',
        'financial_year',
        'original_invoice_number',
        'invoice_number',
        'invoice_date',
        'revised_invoice_number',
        'revised_invoice_date',
        'port_code',
        'bill_number',
        'bill_date',
        'total_invoice_value',
        'supply_type',
        'gst_payment',
        'question_id'
    ];
}
