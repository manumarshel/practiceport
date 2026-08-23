<?php

namespace App\Models\gstr1\b2b_amendment;

use CodeIgniter\Model;

class B2bAmendmentModel extends Model {

    protected $table = '9a_b2b_invoice';
    protected $primaryKey = '9a_b2b_id';
    protected $allowedFields = [
        '9a_b2b_id',
        'is_eligible',
        'is_igst',
        'receiver_gstin',
        'receiver__name',
        'invoice_no',
        'invoice_date',
        'reviced_invoice_no',
        'reviced_invoice_date',
        'supply_type',
        'pos',
        'total_invoice_value',
        'data_type',
        'financial_year',
        'original_invoice_number',
        'question_id',
    ];

}
