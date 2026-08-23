<?php

namespace App\Models\gstr1\cdnr;

use CodeIgniter\Model;

class CdnrModel extends Model {

    protected $table = '9b_cd_notes';
    protected $primaryKey = '9bcdn_id';
    protected $allowedFields = [
        '9bcdn_id',
        'is_eligible',
        'receiver_gstin',
        'receiver__name',
        'dc_note_no',
        'dc_note_date',
        'note_type',
        'note_value',
        'supply_type',
        'pos',
        'data_type',
        'question_id',
    ];

}
