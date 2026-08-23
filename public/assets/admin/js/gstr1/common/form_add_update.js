/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var addUpdateJS = function () {
    var addUpdateJS = {
        init: function () {
            this.validateForm();
            this.datePicker();
        },
        datePicker: function () {
            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd',
                //startDate: '-3d'
            });
        },
        validateForm: function () {
            validator = $('#form_validation').validate({
                errorElement: 'span', //default input error message container
                errorClass: 'text-danger', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                rules: {
                    receiver_gstin: {
                        required: true,
                    },
                    receiver_name: {
                        required: true,
                    },
                    invoice_number: {
                        required: true,
                    },
                    invoice_date: {
                        required: true,
                    },
                    pos: {
                        required: true,
                    },
                    total_invoce_value: {
                        required: true,
                    },
                    supply_type: {
                        required: true,
                    },
                    note_value: {
                        required: true,
                    },
                    note_type: {
                        required: true,
                    },
                    port_code: {
                        required: true,
                    },
                    billing_no: {
                        required: true,
                    },
                    shipping_date: {
                        required: true,
                    },
                    total_invoice_value: {
                        required: true,
                    },
                    gst_payment: {
                        required: true,
                    },
                    revised_invoice_number: {
                        required: true,
                    },
                    revised_invoice_date: {
                        required: true,
                    },
                    bill_number: {
                        required: true,
                    },
                    bill_date: {
                        required: true,
                    },
                    e_gstin: {
                        required: true
                    }
                },
                messages: {
                    receiver_gstin: {
                        required: 'This field is required.',
                    },
                    receiver_name: {
                        required: 'This field is required.',
                    },
                    invoice_number: {
                        required: 'This field is required.',
                    },
                    invoice_date: {
                        required: 'This field is required.',
                    },
                    pos: {
                        required: 'This field is required.',
                    },
                    total_invoce_value: {
                        required: 'This field is required.',
                    },
                    supply_type: {
                        required: 'This field is required.',
                    },
                    note_value: {
                        required: 'This field is required.',
                    },
                    note_type: {
                        required: 'This field is required.',
                    },
                    port_code: {
                        required: 'This field is required.',
                    },
                    billing_no: {
                        required: 'This field is required.',
                    },
                    shipping_date: {
                        required: 'This field is required.',
                    },
                    total_invoice_value: {
                        required: 'This field is required.',
                    },
                    gst_payment: {
                        required: 'This field is required.',
                    },
                    revised_invoice_number: {
                        required: 'This field is required.',
                    },
                    revised_invoice_date: {
                        required: 'This field is required.',
                    },
                    bill_number: {
                        required: 'This field is required.',
                    },
                    bill_date: {
                        required: 'This field is required.',
                    },
                    e_gstin: {
                        required: 'This field is required.'
                    }





                }
            });
        },
    }
    $(function () {
        addUpdateJS.init();
    });
    return addUpdateJS;
}();