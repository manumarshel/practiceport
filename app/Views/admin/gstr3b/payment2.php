<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>6.1 Payment of tax </h5>
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

                    <div class="table-responsive">
                        <form id="form_validation" action="<?= base_url() . '/admin/gstr3b/payment2/' . $question_id; ?>" method="post"  class="form">
                            <input type="hidden" name="question_id" value="<?= $question_id; ?>" /> 
                            <input type="hidden" name="pk_id" value="<?= ((!empty($form_data)) ? $form_data['payment_id'] : ''); ?>" />

                            <div class="table-responsive">
                                <table class="table-bordered table gst3b-payment">
                                    <tr>
                                        <th rowspan="2">Description</th>
                                        <th rowspan="2">Other than reverse charge Tax payable (₹)</th>
                                        <th colspan="4">Paid through ITC</th>
                                        <th rowspan="2">Other than reverse charge Tax to be paid in Cash(₹)</th>
                                        <th rowspan="2">Reverse charge Tax payable (₹)</th>
                                        <th rowspan="2">Reverse charge Tax to be paid in Cash(₹)</th>
                                        <th rowspan="2">Interest Payable (₹)</th>
                                        <th rowspan="2">Interest to be paid in cash (₹)</th>
                                        <th rowspan="2">Late Fee Payable (₹)</th>
                                        <th rowspan="2">Late Fee to be paid in cash (₹)</th>
                                        <th rowspan="2">Utilizable Cash balance(₹)</th>
                                        <th rowspan="2">Additional Cash required(₹)</th>
                                    </tr>
                                    <tr>
                                        <th width="85px">Integrated Tax</th>
                                        <th width="85px">Central Tax</th>
                                        <th width="85px">State/UT Tax</th>
                                        <th width="85px">CESS</th>
                                    </tr>
                                    <tr>
                                        <td>Integrated Tax</td>
                                        <td><input name="integrated_other_reverse_payable" value="<?= set_value('integrated_other_reverse_payable', ((!empty($form_data['integrated_other_reverse_payable'])) ? $form_data['integrated_other_reverse_payable'] : '')); ?>" type="text" class="form-control"></td>
                                        <td><input name="integrated_itc_integrated_tax" value="<?= set_value('integrated_itc_integrated_tax', ((!empty($form_data['integrated_itc_integrated_tax'])) ? $form_data['integrated_itc_integrated_tax'] : '')); ?>" type="text" class="form-control"></td>
                                        <td><input name="integrated_itc_central_tax" value="<?= set_value('integrated_itc_central_tax', ((!empty($form_data['integrated_itc_central_tax'])) ? $form_data['integrated_itc_central_tax'] : '')); ?>" type="text" class="form-control"></td>
                                        <td><input name="integrated_itc_state" value="<?= set_value('integrated_itc_state', ((!empty($form_data['integrated_itc_state'])) ? $form_data['integrated_itc_state'] : '')); ?>" type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control" disabled=""></td>
                                        <td><input name="integrated_other_reverse_paid_cash" value="<?= set_value('integrated_other_reverse_paid_cash', ((!empty($form_data['integrated_other_reverse_paid_cash'])) ? $form_data['integrated_other_reverse_paid_cash'] : '')); ?>" type="text" class="form-control"></td>
                                        <td><input name="integrated_reverse_payable" value="<?= set_value('integrated_reverse_payable', ((!empty($form_data['integrated_reverse_payable'])) ? $form_data['integrated_reverse_payable'] : '')); ?>" type="text" class="form-control"></td>
                                        <td><input name="integrated_reverse_paid_cash" value="<?= set_value('integrated_reverse_paid_cash', ((!empty($form_data['integrated_reverse_paid_cash'])) ? $form_data['integrated_reverse_paid_cash'] : '')); ?>" type="text" class="form-control"></td>
                                        <td><input name="integrated_interest_payable" value="<?= set_value('integrated_interest_payable', ((!empty($form_data['integrated_interest_payable'])) ? $form_data['integrated_interest_payable'] : '')); ?>" type="text" class="form-control"></td>
                                        <td><input name="integrated_interest_paid_cash" value="<?= set_value('integrated_interest_paid_cash', ((!empty($form_data['integrated_interest_paid_cash'])) ? $form_data['integrated_interest_paid_cash'] : '')); ?>" type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control" disabled=""></td>
                                        <td><input type="text" class="form-control" disabled=""></td>
                                        <td><input name="integrated_utilize_cash_balance" value="<?= set_value('integrated_utilize_cash_balance', ((!empty($form_data['integrated_utilize_cash_balance'])) ? $form_data['integrated_utilize_cash_balance'] : '')); ?>" type="text" class="form-control"></td>
                                        <td><input name="integrated_additional_cash_required" value="<?= set_value('integrated_additional_cash_required', ((!empty($form_data['integrated_additional_cash_required'])) ? $form_data['integrated_additional_cash_required'] : '')); ?>" type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Central Tax</td>
                                        <td><input name="central_other_reverse_payable" value="<?= set_value('central_other_reverse_payable', ((!empty($form_data['central_other_reverse_payable'])) ? $form_data['central_other_reverse_payable'] : '')); ?>" type="text" class="form-control"></td>
                                        <td><input name="central_itc_integrated_tax" value="<?= set_value('central_itc_integrated_tax', ((!empty($form_data['central_itc_integrated_tax'])) ? $form_data['central_itc_integrated_tax'] : '')); ?>" type="text" class="form-control"></td>
                                        <td><input name="central_itc_central_tax" value="<?= set_value('central_itc_central_tax', ((!empty($form_data['central_itc_central_tax'])) ? $form_data['central_itc_central_tax'] : '')); ?>" type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control" disabled=""></td>
                                        <td><input type="text" class="form-control" disabled=""></td>
                                        <td><input name="central_other_reverse_paid_cash" value="<?= set_value('central_other_reverse_paid_cash', ((!empty($form_data['central_other_reverse_paid_cash'])) ? $form_data['central_other_reverse_paid_cash'] : '')); ?>" type="text" class="form-control"></td>
                                        <td><input name="central_reverse_payable" value="<?= set_value('central_reverse_payable', ((!empty($form_data['central_reverse_payable'])) ? $form_data['central_reverse_payable'] : '')); ?>" type="text" class="form-control"></td>
                                        <td><input name="central_reverse_paid_cash" value="<?= set_value('central_reverse_paid_cash', ((!empty($form_data['central_reverse_paid_cash'])) ? $form_data['central_reverse_paid_cash'] : '')); ?>" type="text" class="form-control"></td>
                                        <td><input name="central_interest_payable" value="<?= set_value('central_interest_payable', ((!empty($form_data['central_interest_payable'])) ? $form_data['central_interest_payable'] : '')); ?>" type="text" class="form-control"></td>
                                        <td><input name="central_interest_paid_cash" value="<?= set_value('central_interest_paid_cash', ((!empty($form_data['central_interest_paid_cash'])) ? $form_data['central_interest_paid_cash'] : '')); ?>" type="text" class="form-control"></td>
                                        <td><input name="central_late_fee_payable" value="<?= set_value('central_late_fee_payable', ((!empty($form_data['central_late_fee_payable'])) ? $form_data['central_late_fee_payable'] : '')); ?>" type="text" class="form-control"></td>
                                        <td><input name="central_late_fee_paid_cash" value="<?= set_value('central_late_fee_paid_cash', ((!empty($form_data['central_late_fee_paid_cash'])) ? $form_data['central_late_fee_paid_cash'] : '')); ?>" type="text" class="form-control"></td>
                                        <td><input name="central_utilize_cash_balance" value="<?= set_value('central_utilize_cash_balance', ((!empty($form_data['central_utilize_cash_balance'])) ? $form_data['central_utilize_cash_balance'] : '')); ?>" type="text" class="form-control"></td>
                                        <td><input name="central_additional_cash_required" value="<?= set_value('central_additional_cash_required', ((!empty($form_data['central_additional_cash_required'])) ? $form_data['central_additional_cash_required'] : '')); ?>" type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>State/UT Tax</td>
                                        <td><input name="state_other_reverse_payable" value="<?= set_value('state_other_reverse_payable', ((!empty($form_data['state_other_reverse_payable'])) ? $form_data['state_other_reverse_payable'] : '')); ?>" type="text" class="form-control"></td>
                                        <td><input name="state_itc_integrated_tax" value="<?= set_value('state_itc_integrated_tax', ((!empty($form_data['state_itc_integrated_tax'])) ? $form_data['state_itc_integrated_tax'] : '')); ?>" type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control" disabled=""></td>
                                        <td><input name="state_itc_state_tax" value="<?= set_value('state_itc_state_tax', ((!empty($form_data['state_itc_state_tax'])) ? $form_data['state_itc_state_tax'] : '')); ?>" type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control" disabled=""></td>
                                        <td><input name="state_other_reverse_paid_cash" value="<?= set_value('state_other_reverse_paid_cash', ((!empty($form_data['state_other_reverse_paid_cash'])) ? $form_data['state_other_reverse_paid_cash'] : '')); ?>" type="text" class="form-control"></td>
                                        <td><input name="state_reverse_payable" value="<?= set_value('state_reverse_payable', ((!empty($form_data['state_reverse_payable'])) ? $form_data['state_reverse_payable'] : '')); ?>" type="text" class="form-control"></td>
                                        <td><input name="state_reverse_paid_cash" value="<?= set_value('state_reverse_paid_cash', ((!empty($form_data['state_reverse_paid_cash'])) ? $form_data['state_reverse_paid_cash'] : '')); ?>" type="text" class="form-control"></td>
                                        <td><input name="state_interest_payable" value="<?= set_value('state_interest_payable', ((!empty($form_data['state_interest_payable'])) ? $form_data['state_interest_payable'] : '')); ?>" type="text" class="form-control"></td>
                                        <td><input name="state_interest_paid_cash" value="<?= set_value('state_interest_paid_cash', ((!empty($form_data['state_interest_paid_cash'])) ? $form_data['state_interest_paid_cash'] : '')); ?>" type="text" class="form-control"></td>
                                        <td><input name="state_late_fee_payable" value="<?= set_value('state_late_fee_payable', ((!empty($form_data['state_late_fee_payable'])) ? $form_data['state_late_fee_payable'] : '')); ?>" type="text" class="form-control"></td>
                                        <td><input name="state_late_fee_paid_cash" value="<?= set_value('state_late_fee_paid_cash', ((!empty($form_data['state_late_fee_paid_cash'])) ? $form_data['state_late_fee_paid_cash'] : '')); ?>" type="text" class="form-control"></td>
                                        <td><input name="state_utilize_cash_balance" value="<?= set_value('state_utilize_cash_balance', ((!empty($form_data['state_utilize_cash_balance'])) ? $form_data['state_utilize_cash_balance'] : '')); ?>" type="text" class="form-control"></td>
                                        <td><input name="state_additional_cash_required" value="<?= set_value('state_additional_cash_required', ((!empty($form_data['state_additional_cash_required'])) ? $form_data['state_additional_cash_required'] : '')); ?>" type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>CESS</td>
                                        <td><input name="cess_other_reverse_payable" value="<?= set_value('cess_other_reverse_payable', ((!empty($form_data['cess_other_reverse_payable'])) ? $form_data['cess_other_reverse_payable'] : '')); ?>" type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control" disabled=""></td>
                                        <td><input type="text" class="form-control" disabled=""></td>
                                        <td><input type="text" class="form-control" disabled=""></td>
                                        <td><input name="cess_itc_cess" value="<?= set_value('cess_itc_cess', ((!empty($form_data['cess_itc_cess'])) ? $form_data['cess_itc_cess'] : '')); ?>" type="text" class="form-control"></td>
                                        <td><input name="cess_other_reverse_paid_cash" value="<?= set_value('cess_other_reverse_paid_cash', ((!empty($form_data['cess_other_reverse_paid_cash'])) ? $form_data['cess_other_reverse_paid_cash'] : '')); ?>" type="text" class="form-control"></td>
                                        <td><input name="cess_reverse_payable" value="<?= set_value('cess_reverse_payable', ((!empty($form_data['cess_reverse_payable'])) ? $form_data['cess_reverse_payable'] : '')); ?>" type="text" class="form-control"></td>
                                        <td><input name="cess_reverse_paid_cash" value="<?= set_value('cess_reverse_paid_cash', ((!empty($form_data['cess_reverse_paid_cash'])) ? $form_data['cess_reverse_paid_cash'] : '')); ?>" type="text" class="form-control"></td>
                                        <td><input name="cess_interest_payable" value="<?= set_value('cess_interest_payable', ((!empty($form_data['cess_interest_payable'])) ? $form_data['cess_interest_payable'] : '')); ?>" type="text" class="form-control"></td>
                                        <td><input name="cess_interest_paid_cash" value="<?= set_value('cess_interest_paid_cash', ((!empty($form_data['cess_interest_paid_cash'])) ? $form_data['cess_interest_paid_cash'] : '')); ?>" type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control" disabled=""></td>
                                        <td><input type="text" class="form-control" disabled=""></td>
                                        <td><input name="cess_utilize_cash_balance" value="<?= set_value('cess_utilize_cash_balance', ((!empty($form_data['cess_utilize_cash_balance'])) ? $form_data['cess_utilize_cash_balance'] : '')); ?>" type="text" class="form-control"></td>
                                        <td><input name="cess_additional_cash_required" value="<?= set_value('cess_additional_cash_required', ((!empty($form_data['cess_additional_cash_required'])) ? $form_data['cess_additional_cash_required'] : '')); ?>" type="text" class="form-control"></td>
                                    </tr>
                                </table>
                            </div>
                            <button type="submit" class="btn btn-primary m-t-20">Save Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>