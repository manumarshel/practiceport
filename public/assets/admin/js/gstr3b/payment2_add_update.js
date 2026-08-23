/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var addUpdateJS = function () {
    var addUpdateJS = {
        init: function () {
            this.validateForm();

        },

        validateForm: function () {
            validator = $('#form_validation').validate({
                errorElement: 'span', //default input error message container
                errorClass: 'text-danger', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                rules: {
                    integrated_other_reverse_payable: {
                        required: true,
                        number: true
                    },
                    integrated_itc_integrated_tax: {
                        required: true,
                        number: true
                    },
                    integrated_itc_central_tax: {
                        required: true,
                        number: true
                    },
                    integrated_itc_state: {
                        required: true,
                        number: true
                    },
                    integrated_other_reverse_paid_cash: {
                        required: true,
                        number: true
                    },
                    integrated_reverse_payable: {
                        required: true,
                        number: true
                    },
                    integrated_reverse_paid_cash: {
                        required: true,
                        number: true
                    },
                    integrated_interest_payable: {
                        required: true,
                        number: true
                    },
                    integrated_interest_paid_cash: {
                        required: true,
                        number: true
                    },
                    integrated_utilize_cash_balance: {
                        required: true,
                        number: true
                    },
                    integrated_additional_cash_required: {
                        required: true,
                        number: true
                    },
                    central_other_reverse_payable: {
                        required: true,
                        number: true
                    },
                    central_itc_integrated_tax: {
                        required: true,
                        number: true
                    },
                    central_itc_central_tax: {
                        required: true,
                        number: true
                    },
                    central_other_reverse_paid_cash: {
                        required: true,
                        number: true
                    },
                    central_reverse_payable: {
                        required: true,
                        number: true
                    },
                    central_reverse_paid_cash: {
                        required: true,
                        number: true
                    },
                    central_interest_payable: {
                        required: true,
                        number: true
                    },
                    central_interest_paid_cash: {
                        required: true,
                        number: true
                    },
                    central_late_fee_payable: {
                        required: true,
                        number: true
                    },
                    central_late_fee_paid_cash: {
                        required: true,
                        number: true
                    },
                    central_utilize_cash_balance: {
                        required: true,
                        number: true
                    },
                    central_additional_cash_required: {
                        required: true,
                        number: true
                    },
                    state_other_reverse_payable: {
                        required: true,
                        number: true
                    },
                    state_itc_integrated_tax: {
                        required: true,
                        number: true
                    },
                    state_itc_state_tax: {
                        required: true,
                        number: true
                    },
                    state_other_reverse_paid_cash: {
                        required: true,
                        number: true
                    },
                    state_reverse_payable: {
                        required: true,
                        number: true
                    },
                    state_reverse_paid_cash: {
                        required: true,
                        number: true
                    },
                    state_interest_payable: {
                        required: true,
                        number: true
                    },
                    state_interest_paid_cash: {
                        required: true,
                        number: true
                    },
                    state_late_fee_payable: {
                        required: true,
                        number: true
                    },
                    state_late_fee_paid_cash: {
                        required: true,
                        number: true
                    },
                    state_utilize_cash_balance: {
                        required: true,
                        number: true
                    },
                    state_additional_cash_required: {
                        required: true,
                        number: true
                    },
                    cess_other_reverse_payable: {
                        required: true,
                        number: true
                    },
                    cess_itc_cess: {
                        required: true,
                        number: true
                    },
                    cess_other_reverse_paid_cash: {
                        required: true,
                        number: true
                    },
                    cess_reverse_payable: {
                        required: true,
                        number: true
                    },
                    cess_reverse_paid_cash: {
                        required: true,
                        number: true
                    },
                    cess_interest_payable: {
                        required: true,
                        number: true
                    },
                    cess_interest_paid_cash: {
                        required: true,
                        number: true
                    },
                    cess_utilize_cash_balance: {
                        required: true,
                        number: true
                    },
                    cess_additional_cash_required: {
                        required: true,
                        number: true
                    },
                    

                },
                messages: {

                }
            });
        },
    }
    $(function () {
        addUpdateJS.init();
    });
    return addUpdateJS;
}();