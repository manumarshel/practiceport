<?php


namespace App\Models\gstr1\_9CAmendedCreditDebitNotesRegistered;


class _9CAmendedCreditDebitNotesRegistered extends \CodeIgniter\Model
{
    protected $table = '9c_cd_notes_registered';
    protected $primaryKey = '9c_cdnr_id';
    protected $allowedFields = [
        'financial_year',
        'invoice_no',
        'question_id',
    ];
}
