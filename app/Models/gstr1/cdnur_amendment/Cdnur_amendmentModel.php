<?php


namespace App\Models\gstr1\cdnur_amendment;


use CodeIgniter\Model;

class Cdnur_amendmentModel extends Model
{
    protected $table = '9c_cd_notes_unregistered';
    protected $primaryKey = '9c_cdnur_id';
    protected $allowedFields = [
        '9c_cdnur_id',
        'eligible_to_taxed',
        'is_igst',
        'financial_year',
        'original_invoice_number',
        'invoice_number',
        'invoice_date',
        'revised_invoice_number',
        'revised_invoice_date',
        'note_value',
        'note_type',
        'pos',
        'supply_type',
        'question_id'
    ];
}
