<?php


namespace App\Models\gstr1\_9bcdnotes;


use CodeIgniter\Model;

class _9bcdnotesModel extends Model
{
    protected $table = '9b_cd_notes';
    protected $primaryKey = '9bcdn_id';
    protected $allowedFields = [
        'is_eligible',
        'receiver_gstin',
        'receiver__name',
        'dc_note_no',
        'dc_note_date',
        'note_type',
        'note_value',
        'supply_type',
        'pos',
        'is_igst',
        'question_id',
    ];
}
