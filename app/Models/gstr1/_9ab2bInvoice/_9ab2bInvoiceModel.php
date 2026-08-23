<?php


namespace App\Models\gstr1\_9ab2bInvoice;


use CodeIgniter\Model;

class _9ab2bInvoiceModel extends Model
{
    protected $table = '9a_b2b_invoice';
    protected $primaryKey = '9a_b2b_id';
    protected $allowedFields = [
        'financial_year',
        'invoice_no',
        'question_id',
    ];
}
