<?php


namespace App\Models\gstr1\_9aAmendedExportsInvoices;


use CodeIgniter\Model;

class _9aAmendedExportsInvoices extends Model
{
    protected $table = '9a_exports';
    protected $primaryKey = '9a_exports_id';
    protected $allowedFields = [
        'financial_year',
        'invoice_no',
        'question_id',
    ];
}
