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
                    tax_cash_integrated_tax: {
                        required: true,
                        number: true
                    },
                    tax_cash_central_tax: {
                        required: true,
                        number: true
                    },
                    tax_cash_state_tax: {
                        required: true,
                        number: true
                    },
                    tax_cash_cess: {
                        required: true,
                        number: true
                    },
                    tax_cash_total: {
                        required: true,
                        number: true
                    },
                    tax_credit_integrated_tax: {
                        required: true,
                        number: true
                    },
                    tax_credit_central_tax: {
                        required: true,
                        number: true
                    },
                    tax_credit_state_tax: {
                        required: true,
                        number: true
                    },
                    tax_credit_cess: {
                        required: true,
                        number: true
                    },
                    tax_credit_total: {
                        required: true,
                        number: true
                    },
                    interest_cash_integrated_tax: {
                        required: true,
                        number: true
                    },
                    interest_cash_central_tax: {
                        required: true,
                        number: true
                    },
                    interest_cash_state_tax: {
                        required: true,
                        number: true
                    },
                    interest_cash_cess: {
                        required: true,
                        number: true
                    },
                    interest_cash_total: {
                        required: true,
                        number: true
                    },
                    interest_credit_integrated_tax: {
                        required: true,
                        number: true
                    },
                    interest_credit_central_tax: {
                        required: true,
                        number: true
                    },
                    late_fee_cash_central_tax: {
                        required: true,
                        number: true
                    },
                    late_fee_cash_state_tax: {
                        required: true,
                        number: true
                    },
                    late_fee_cash_total: {
                        required: true,
                        number: true
                    },
                    late_fee_credit_integrated_tax: {
                        required: true,
                        number: true
                    },
                    late_fee_credit_central_tax: {
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