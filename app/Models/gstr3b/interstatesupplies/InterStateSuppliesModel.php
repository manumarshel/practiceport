<?php

namespace App\Models\gstr3b\interstatesupplies;

use CodeIgniter\Model;

class InterStateSuppliesModel extends Model {

    protected $table = 'gstr3b_inter_state_supplies';
    protected $primaryKey = 'iss_id ';
    protected $allowedFields = [
        'iss_id ',
        'place_of_supply',
        'total_taxable_value',
        'amount_of_integrated_tax',
        'data_type',
        'question_id'
    ];

}
