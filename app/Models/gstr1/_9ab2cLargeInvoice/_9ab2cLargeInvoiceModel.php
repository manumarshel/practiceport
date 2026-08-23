<?php


namespace App\Models\gstr1\_9ab2cLargeInvoice;


class _9ab2cLargeInvoiceModel extends \CodeIgniter\Model
{
    protected $table = '9a_b2c_large_invoice';
    protected $primaryKey = '9a_b2c_id';
    protected $allowedFields = [
        'financial_year',
        'invoice_no',
        'question_id',
    ];
}
