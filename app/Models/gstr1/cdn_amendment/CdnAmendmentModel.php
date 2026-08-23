<?php

namespace App\Models\gstr1\cdn_amendment;

use CodeIgniter\Model;

class CdnAmendmentModel extends Model {

    protected $table = '9c_cd_notes_registered';
    protected $primaryKey = '9c_cdnr_id';
    protected $allowedFields = [
        '9c_cdnr_id',
        'is_eligible',
        'is_igst',
        'financial_year',
        'original_invoice_number',
        'receiver_gstin',
        'receiver__name',
        'invoice_no',
        'invoice_date',
        'reviced_invoice_no',
        'reviced_invoice_date',
        'supply_type',
        'pos',
        'note_type',
        'note_value',
        'data_type',
        'question_id',
    ];

}
