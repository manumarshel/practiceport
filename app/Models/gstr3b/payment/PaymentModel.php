<?php

namespace App\Models\gstr3b\payment;

use CodeIgniter\Model;

class PaymentModel extends Model {

    protected $table = 'gstr3b_payment_of_tax';
    protected $primaryKey = 'payment_id';
    protected $allowedFields = [
        'payment_id',
        'tax_cash_integrated_tax',
        'tax_cash_central_tax',
        'tax_cash_state_tax',
        'tax_cash_cess',
        'tax_cash_total',
        'tax_credit_integrated_tax',
        'tax_credit_central_tax',
        'tax_credit_state_tax',
        'tax_credit_cess',
        'tax_credit_total',
        'interest_cash_integrated_tax',
        'interest_cash_central_tax',
        'interest_cash_state_tax',
        'interest_cash_cess',
        'interest_cash_total',
        'interest_credit_integrated_tax',
        'interest_credit_central_tax',
        'late_fee_cash_central_tax',
        'late_fee_cash_state_tax',
        'late_fee_cash_total',
        'late_fee_credit_integrated_tax',
        'late_fee_credit_central_tax',
        'question_id'
    ];

}
