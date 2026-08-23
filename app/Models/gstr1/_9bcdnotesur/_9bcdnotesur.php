<?php


namespace App\Models\gstr1\_9bcdnotesur;


use CodeIgniter\Model;

class _9bcdnotesur extends Model
{
    protected $table = '9b_cd_notes_unregistered';
    protected $primaryKey = '9bcdn_id';
    protected $allowedFields = [
        'dc_note_no',
        'dc_note_date',
        'note_type',
        'note_value',
        'supply_type',
        'pos',
        'is_igst',
        'question_id'
    ];
}
