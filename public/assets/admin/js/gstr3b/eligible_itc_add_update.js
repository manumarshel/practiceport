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
                    available_import_goods_integrated_tax: {
                        required: true,
                        number:true
                    },
                    available_import_services_integrated_tax: {
                        required: true,
                        number:true
                    },
                    available_import_services_cess: {
                        required: true,
                        number:true
                    },
                    available_reverse_integrated_tax: {
                        required: true,
                        number:true
                    },
                    available_reverse_central_tax: {
                        required: true,
                        number:true
                    },
                     available_reverse_state_tax: {
                        required: true,
                        number:true
                    },
                    available_reverse_cess: {
                        required: true,
                        number:true
                    },
                    available_isd_integrated_tax: {
                        required: true,
                        number:true
                    },
                    available_isd_central_tax: {
                        required: true,
                        number:true
                    },
                    available_isd_state_tax: {
                        required: true,
                        number:true
                    },
                     available_isd_cess: {
                        required: true,
                        number:true
                    },
                    available_itc_integrated_tax: {
                        required: true,
                        number:true
                    },
                    available_itc_central_tax: {
                        required: true,
                        number:true
                    },
                    available_itc_state_tax: {
                        required: true,
                        number:true
                    },
                    available_itc_cess: {
                        required: true,
                        number:true
                    },
                     itc_rules_integrated_tax: {
                        required: true,
                        number:true
                    },
                    itc_rules_central_tax: {
                        required: true,
                        number:true
                    },
                    itc_rules_statet_tax: {
                        required: true,
                        number:true
                    },
                    itc_rules_cess: {
                        required: true,
                        number:true
                    },
                    itc_others_integrated_tax: {
                        required: true,
                        number:true
                    },
                     itc_others_central_tax: {
                        required: true,
                        number:true
                    },
                    itc_others_state_tax: {
                        required: true,
                        number:true
                    },
                    itc_others_cess: {
                        required: true,
                        number:true
                    },
                    itc_available_ab_integrated_tax: {
                        required: true,
                        number:true
                    },
                    itc_available_ab_central_tax: {
                        required: true,
                        number:true
                    },
                     itc_available_ab_state_tax: {
                        required: true,
                        number:true
                    },
                    itc_available_ab_cess: {
                        required: true,
                        number:true
                    },
                    IneligIble_itc_sec17_integrated_tax: {
                        required: true,
                        number:true
                    },
                    IneligIble_itc_sec17_central_tax: {
                        required: true,
                        number:true
                    },
                    IneligIble_itc_sec17_state_tax: {
                        required: true,
                        number:true
                    },
                     IneligIble_itc_sec17_cess: {
                        required: true,
                        number:true
                    },
                    IneligIble_itc_others_integrated_tax: {
                        required: true,
                        number:true
                    },
                    IneligIble_itc_others_central_tax: {
                        required: true,
                        number:true
                    },
                    IneligIble_itc_others_state_tax: {
                        required: true,
                        number:true
                    },
                    IneligIble_itc_others_cess: {
                        required: true,
                        number:true
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