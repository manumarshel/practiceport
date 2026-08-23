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
                    composition_inter_state: {
                        required: true,
                        number:true
                    },
                    composition_intra_state: {
                        required: true,
                        number:true
                    },
                    nongst_inter_state: {
                        required: true,
                        number:true
                    },
                    nongst_intra_state: {
                        required: true,
                        number:true
                    },
                    interest_integrated: {
                        required: true,
                        number:true
                    },
                    interest_central: {
                        required: true,
                        number:true
                    },
                    interest_state: {
                        required: true,
                        number:true
                    },
                    interest_cess: {
                        required: true,
                        number:true
                    },
                    late_fee_integrated: {
                        required: true,
                        number:true
                    },
                    late_fee_central: {
                        required: true,
                        number:true
                    },
                    late_fee_state: {
                        required: true,
                        number:true
                    },
                    late_fee_cess: {
                        required: true,
                        number:true
                    },
                    outward_tax_non_zero_taxable_value: {
                        required: true,
                        number:true
                    },
                    outward_tax_non_zero_integrated_tax: {
                        required: true,
                        number:true
                    },
                    outward_tax_non_zero_central_tax: {
                        required: true,
                        number:true
                    },
                    outward_tax_non_zero_state_tax: {
                        required: true,
                        number:true
                    },
                    outward_tax_non_zero_cess: {
                        required: true,
                        number:true
                    },
                    outward_tax_zero_taxable_value: {
                        required: true,
                        number:true
                    },
                    outward_tax_zero_integrated_tax: {
                        required: true,
                        number:true
                    },
                    outward_tax_zero_cess: {
                        required: true,
                        number:true
                    },
                    other_outward_nill_taxable_value: {
                        required: true,
                        number:true
                    },
                    inward_supplies_reverse_charges_taxable_value: {
                        required: true,
                        number:true
                    },
                    inward_supplies_reverse_charges_intetrated_tax: {
                        required: true,
                        number:true
                    },
                    inward_supplies_reverse_charges_central_tax: {
                        required: true,
                        number:true
                    },
                    inward_supplies_reverse_charges_state_tax: {
                        required: true,
                        number:true
                    },
                    inward_supplies_reverse_charges_cess: {
                        required: true,
                        number:true
                    },
                    non_gst_outward_taxable_value: {
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