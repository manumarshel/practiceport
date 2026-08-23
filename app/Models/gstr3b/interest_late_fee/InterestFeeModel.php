<?php


namespace App\Models\gstr3b\interest_late_fee;


use CodeIgniter\Model;

class InterestFeeModel extends Model
{
    protected $table = 'gstr3b_interest_late_fee';
    protected $primaryKey = 'interest_id';
    protected $allowedFields = [
        'interest_id',
        'interest_integrated',
        'interest_central',
        'interest_state',
        'interest_cess',
        'late_fee_integrated',
        'late_fee_central',
        'late_fee_state',
        'late_fee_cess',
        'question_id'
    ];
}
