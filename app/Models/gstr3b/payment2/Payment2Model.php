<?php

namespace App\Models\gstr3b\payment2;

use CodeIgniter\Model;

class Payment2Model extends Model {

    protected $table = 'gstr3b_payment_of_tax_second';
    protected $primaryKey = 'payment_id';
    protected $allowedFields = [
        'payment_id',
        'integrated_other_reverse_payable',
        'integrated_itc_integrated_tax',
        'integrated_itc_central_tax',
        'integrated_itc_state',
        'integrated_other_reverse_paid_cash',
        'integrated_reverse_payable',
        'integrated_reverse_paid_cash',
        'integrated_interest_payable',
        'integrated_interest_paid_cash',
        'integrated_utilize_cash_balance',
        'integrated_additional_cash_required',
        'central_other_reverse_payable',
        'central_itc_integrated_tax',
        'central_itc_central_tax',
        'central_other_reverse_paid_cash',
        'central_reverse_payable',
        'central_reverse_paid_cash',
        'central_interest_payable',
        'central_interest_paid_cash',
        'central_late_fee_payable',
        'central_late_fee_paid_cash',
        'central_utilize_cash_balance',
        'central_additional_cash_required',
        'state_other_reverse_payable',
        'state_itc_integrated_tax',
        'state_itc_state_tax',
        'state_other_reverse_paid_cash',
        'state_reverse_payable',
        'state_reverse_paid_cash',
        'state_interest_payable',
        'state_interest_paid_cash',
        'state_late_fee_payable',
        'state_late_fee_paid_cash',
        'state_utilize_cash_balance',
        'state_additional_cash_required',
        'cess_other_reverse_payable',
        'cess_itc_cess',
        'cess_other_reverse_paid_cash',
        'cess_reverse_payable',
        'cess_reverse_paid_cash',
        'cess_interest_payable',
        'cess_interest_paid_cash',
        'cess_utilize_cash_balance',
        'cess_additional_cash_required',
        'question_id'
    ];

}
