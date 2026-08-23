<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>3.1 Details of Outward Supplies and inward supplies liable to reverse charge</h5>
                    <div class="">
                        <a href="<?= base_url('admin/gstr3b/' . $question_id) ?>" class="btn btn-primary btn-sm">Back</a>
                    </div>
                </div>
                <div class="m-t-30">
                    <?php
                    if (session()->getFlashdata('success')) {
                        echo '<div class="alert alert-success"><strong>Success!</strong> Action has successful.'
                        . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
                    }
                    ?>


                    <form id="form_validation" action="<?= base_url() . '/admin/gstr3b/iosup/' . $question_id; ?>" method="post"  class="form">
                        <input type="hidden" name="question_id" value="<?= $question_id; ?>" /> 
                        <input type="hidden" name="pk_id" value="<?= ((!empty($form_data)) ? $form_data['outin_id'] : ''); ?>" />

                        <table class="table table-bordered">
                            <tr>
                                <th>Nature of Supplies</th>
                                <th>Total Taxable value (₹)</th>
                                <th>Integrated Tax (₹)</th>
                                <th>Central Tax (₹)</th>
                                <th>State/UT Tax (₹)</th>
                                <th>CESS (₹)</th>
                            </tr>
                            <tr>
                                <td>
                                    (a) Outward taxable supplies (other than zero rated, nil rated and exempted)
                                </td>
                                <td>
                                    <input name="outward_tax_non_zero_taxable_value" value="<?= set_value('outward_tax_non_zero_taxable_value', ((!empty($form_data['outward_tax_non_zero_taxable_value'])) ? $form_data['outward_tax_non_zero_taxable_value'] : '')); ?>" type="text" class="form-control">
                                </td>
                                <td>
                                    <input name="outward_tax_non_zero_integrated_tax" value="<?= set_value('outward_tax_non_zero_integrated_tax', ((!empty($form_data['outward_tax_non_zero_integrated_tax'])) ? $form_data['outward_tax_non_zero_integrated_tax'] : '')); ?>" type="text" class="form-control">
                                </td>
                                <td>
                                    <input name="outward_tax_non_zero_central_tax" value="<?= set_value('outward_tax_non_zero_central_tax', ((!empty($form_data['outward_tax_non_zero_central_tax'])) ? $form_data['outward_tax_non_zero_central_tax'] : '')); ?>" type="text" class="form-control">
                                </td>
                                <td>
                                    <input name="outward_tax_non_zero_state_tax" value="<?= set_value('outward_tax_non_zero_state_tax', ((!empty($form_data['outward_tax_non_zero_state_tax'])) ? $form_data['outward_tax_non_zero_state_tax'] : '')); ?>" type="text" class="form-control">
                                </td>
                                <td>
                                    <input name="outward_tax_non_zero_cess" value="<?= set_value('outward_tax_non_zero_cess', ((!empty($form_data['outward_tax_non_zero_cess'])) ? $form_data['outward_tax_non_zero_cess'] : '')); ?>" type="text" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    (b) Outward taxable supplies (zero rated )        
                                </td>
                                <td>
                                    <input name="outward_tax_zero_taxable_value" value="<?= set_value('outward_tax_zero_taxable_value', ((!empty($form_data['outward_tax_zero_taxable_value'])) ? $form_data['outward_tax_zero_taxable_value'] : '')); ?>" type="text" class="form-control">
                                </td>
                                <td>
                                    <input name="outward_tax_zero_integrated_tax" value="<?= set_value('outward_tax_zero_integrated_tax', ((!empty($form_data['outward_tax_zero_integrated_tax'])) ? $form_data['outward_tax_zero_integrated_tax'] : '')); ?>" type="text" class="form-control">
                                </td>
                                <td>
                                    <input type="text" class="form-control" disabled="">
                                </td>
                                <td>
                                    <input type="text" class="form-control" disabled="">
                                </td>
                                <td>
                                    <input name="outward_tax_zero_cess" value="<?= set_value('outward_tax_zero_cess', ((!empty($form_data['outward_tax_zero_cess'])) ? $form_data['outward_tax_zero_cess'] : '')); ?>" type="text" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    (c) Other outward supplies (Nil rated, exempted)         
                                </td>
                                <td>
                                    <input name="other_outward_nill_taxable_value" value="<?= set_value('other_outward_nill_taxable_value', ((!empty($form_data['other_outward_nill_taxable_value'])) ? $form_data['other_outward_nill_taxable_value'] : '')); ?>" type="text" class="form-control">
                                </td>
                                <td>
                                    <input type="text" class="form-control" disabled="">
                                </td>
                                <td>
                                    <input type="text" class="form-control" disabled="">
                                </td>
                                <td>
                                    <input type="text" class="form-control" disabled="">
                                </td>
                                <td>
                                    <input type="text" class="form-control" disabled="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    (d) Inward supplies (liable to reverse charge)        
                                </td>
                                <td>
                                    <input name="inward_supplies_reverse_charges_taxable_value" value="<?= set_value('inward_supplies_reverse_charges_taxable_value', ((!empty($form_data['inward_supplies_reverse_charges_taxable_value'])) ? $form_data['inward_supplies_reverse_charges_taxable_value'] : '')); ?>" type="text" class="form-control">
                                </td>
                                <td>
                                    <input name="inward_supplies_reverse_charges_intetrated_tax" value="<?= set_value('inward_supplies_reverse_charges_intetrated_tax', ((!empty($form_data['inward_supplies_reverse_charges_intetrated_tax'])) ? $form_data['inward_supplies_reverse_charges_intetrated_tax'] : '')); ?>" type="text" class="form-control">
                                </td>
                                <td>
                                    <input name="inward_supplies_reverse_charges_central_tax" value="<?= set_value('inward_supplies_reverse_charges_central_tax', ((!empty($form_data['inward_supplies_reverse_charges_central_tax'])) ? $form_data['inward_supplies_reverse_charges_central_tax'] : '')); ?>" type="text" class="form-control">
                                </td>
                                <td>
                                    <input name="inward_supplies_reverse_charges_state_tax" value="<?= set_value('inward_supplies_reverse_charges_state_tax', ((!empty($form_data['inward_supplies_reverse_charges_state_tax'])) ? $form_data['inward_supplies_reverse_charges_state_tax'] : '')); ?>" type="text" class="form-control">
                                </td>
                                <td>
                                    <input name="inward_supplies_reverse_charges_cess" value="<?= set_value('inward_supplies_reverse_charges_cess', ((!empty($form_data['inward_supplies_reverse_charges_cess'])) ? $form_data['inward_supplies_reverse_charges_cess'] : '')); ?>" type="text" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    (e) Non-GST outward supplies        
                                </td>
                                <td>
                                    <input name="non_gst_outward_taxable_value" value="<?= set_value('non_gst_outward_taxable_value', ((!empty($form_data['non_gst_outward_taxable_value'])) ? $form_data['non_gst_outward_taxable_value'] : '')); ?>" type="text" class="form-control">
                                </td>
                                <td>
                                    <input type="text" class="form-control" disabled="">
                                </td>
                                <td>
                                    <input type="text" class="form-control" disabled="">
                                </td>
                                <td>
                                    <input type="text" class="form-control" disabled="">
                                </td>
                                <td>
                                    <input type="text" class="form-control" disabled="">
                                </td>
                            </tr>
                        </table>
                        <button type="submit" class="btn btn-primary">Save Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>