<?php


namespace App\Models\gstr1\_9CAmendedCreditDebitNotesRegistered;


use CodeIgniter\Model;

class _9CAmendedCreditDebitNotesUnregistered extends Model
{
    protected $table = '9c_cd_notes_unregistered';
    protected $primaryKey = '9c_cdnur_id';
    protected $allowedFields = [
        'financial_year',
        'invoice_no',
        'question_id',
    ];
}
