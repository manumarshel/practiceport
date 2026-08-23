<?php


namespace App\Models\gstr1\cdnur;


use CodeIgniter\Model;

class CdnurModel extends Model
{
    protected $table = '9b_cd_notes_unregistered';
    protected $primaryKey = '9bcdn_id';
    protected $allowedFields = [
        '9bcdn_id',
        'eligible_to_taxed',
        'dc_note_no',
        'dc_note_date',
        'note_type',
        'note_value',
        'supply_type',
        'pos',
        'question_id'
    ];
}
