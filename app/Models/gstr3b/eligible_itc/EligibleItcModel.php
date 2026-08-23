<?php

namespace App\Models\gstr3b\eligible_itc;

use CodeIgniter\Model;

class EligibleItcModel extends Model {

    protected $table = 'gstr3b_eligible_itc';
    protected $primaryKey = 'itc_id';
    protected $allowedFields = [
        'itc_id',
        'available_import_goods_integrated_tax',
        'available_import_goods_cess',
        'available_import_services_integrated_tax',
        'available_import_services_cess',
        'available_reverse_integrated_tax',
        'available_reverse_central_tax',
        'available_reverse_state_tax',
        'available_reverse_cess',
        'available_isd_integrated_tax',
        'available_isd_central_tax',
        'available_isd_state_tax',
        'available_isd_cess',
        'available_itc_integrated_tax',
        'available_itc_central_tax',
        'available_itc_state_tax',
        'available_itc_cess',
        'itc_rules_integrated_tax',
        'itc_rules_central_tax',
        'itc_rules_statet_tax',
        'itc_rules_cess',
        'itc_others_integrated_tax',
        'itc_others_central_tax',
        'itc_others_state_tax',
        'itc_others_cess',
        'itc_available_ab_integrated_tax',
        'itc_available_ab_central_tax',
        'itc_available_ab_state_tax',
        'itc_available_ab_cess',
        'IneligIble_itc_sec17_integrated_tax',
        'IneligIble_itc_sec17_central_tax',
        'IneligIble_itc_sec17_state_tax',
        'IneligIble_itc_sec17_cess',
        'IneligIble_itc_others_integrated_tax',
        'IneligIble_itc_others_central_tax',
        'IneligIble_itc_others_state_tax',
        'IneligIble_itc_others_cess',
        'question_id'
    ];

}
