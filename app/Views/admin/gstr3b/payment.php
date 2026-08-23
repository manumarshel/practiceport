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

                               <form id="form_validation" action="<?= base_url() . '/admin/gstr3b/payment/' . $question_id; ?>" method="post"  class="form">
                        <input type="hidden" name="question_id" value="<?= $question_id; ?>" /> 
                        <input type="hidden" name="pk_id" value="<?= ((!empty($form_data)) ? $form_data['payment_id'] : ''); ?>" />

                        <div class="table-responsive">
                            <table class="table-bordered table gst3b-payment">
                                <tr>
                                    <th rowspan="2">Description</th>
                                    <th colspan="5">Cash Ledger Balance</th>
                                    <th colspan="5">Credit Ledger Balance(including current month's credit)</th>
                                </tr>
                                <tr>
                                    <th>Integrated Tax</th>
                                    <th>Central Tax</th>
                                    <th>State/UT Tax</th>
                                    <th>CESS</th>
                                    <th>Total</th>
                                    <th>Integrated Tax</th>
                                    <th>Central Tax</th>
                                    <th>State/UT Tax</th>
                                    <th>CESS</th>
                                    <th>Total</th>
                                </tr>
                                <tr>
                                    <td>Tax</td>
                                    <td><input name="tax_cash_integrated_tax" value="<?= set_value('tax_cash_integrated_tax', ((!empty($form_data['tax_cash_integrated_tax'])) ? $form_data['tax_cash_integrated_tax'] : '')); ?>" type="text" class="form-control"></td>
                                    <td><input name="tax_cash_central_tax" value="<?= set_value('tax_cash_central_tax', ((!empty($form_data['tax_cash_central_tax'])) ? $form_data['tax_cash_central_tax'] : '')); ?>" type="text" class="form-control"></td>
                                    <td><input name="tax_cash_state_tax" value="<?= set_value('tax_cash_state_tax', ((!empty($form_data['tax_cash_state_tax'])) ? $form_data['tax_cash_state_tax'] : '')); ?>" type="text" class="form-control"></td>
                                    <td><input name="tax_cash_cess" value="<?= set_value('tax_cash_cess', ((!empty($form_data['tax_cash_cess'])) ? $form_data['tax_cash_cess'] : '')); ?>" type="text" class="form-control"></td>
                                    <td><input name="tax_cash_total" value="<?= set_value('tax_cash_total', ((!empty($form_data['tax_cash_total'])) ? $form_data['tax_cash_total'] : '')); ?>" type="text" class="form-control"></td>
                                    <td><input name="tax_credit_integrated_tax" value="<?= set_value('tax_credit_integrated_tax', ((!empty($form_data['tax_credit_integrated_tax'])) ? $form_data['tax_credit_integrated_tax'] : '')); ?>" type="text" class="form-control"></td>
                                    <td><input name="tax_credit_central_tax" value="<?= set_value('tax_credit_central_tax', ((!empty($form_data['tax_credit_central_tax'])) ? $form_data['tax_credit_central_tax'] : '')); ?>" type="text" class="form-control"></td>
                                    <td><input name="tax_credit_state_tax" value="<?= set_value('tax_credit_state_tax', ((!empty($form_data['tax_credit_state_tax'])) ? $form_data['tax_credit_state_tax'] : '')); ?>" type="text" class="form-control"></td>
                                    <td><input name="tax_credit_cess" value="<?= set_value('tax_credit_cess', ((!empty($form_data['tax_credit_cess'])) ? $form_data['tax_credit_cess'] : '')); ?>" type="text" class="form-control"></td>
                                    <td><input name="tax_credit_total" value="<?= set_value('tax_credit_total', ((!empty($form_data['tax_credit_total'])) ? $form_data['tax_credit_total'] : '')); ?>" type="text" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Interest</td>
                                    <td><input name="interest_cash_integrated_tax" value="<?= set_value('interest_cash_integrated_tax', ((!empty($form_data['interest_cash_integrated_tax'])) ? $form_data['interest_cash_integrated_tax'] : '')); ?>" type="text" class="form-control"></td>
                                    <td><input name="interest_cash_central_tax" value="<?= set_value('interest_cash_central_tax', ((!empty($form_data['interest_cash_central_tax'])) ? $form_data['interest_cash_central_tax'] : '')); ?>" type="text" class="form-control"></td>
                                    <td><input name="interest_cash_state_tax" value="<?= set_value('interest_cash_state_tax', ((!empty($form_data['interest_cash_state_tax'])) ? $form_data['interest_cash_state_tax'] : '')); ?>" type="text" class="form-control"></td>
                                    <td><input name="interest_cash_cess" value="<?= set_value('interest_cash_cess', ((!empty($form_data['interest_cash_cess'])) ? $form_data['interest_cash_cess'] : '')); ?>" type="text" class="form-control"></td>
                                    <td><input name="interest_cash_total" value="<?= set_value('interest_cash_total', ((!empty($form_data['interest_cash_total'])) ? $form_data['interest_cash_total'] : '')); ?>" type="text" class="form-control"></td>
                                    <td><input name="interest_credit_integrated_tax" value="<?= set_value('interest_credit_integrated_tax', ((!empty($form_data['interest_credit_integrated_tax'])) ? $form_data['interest_credit_integrated_tax'] : '')); ?>" type="text" class="form-control"></td>
                                    <td><input name="interest_credit_central_tax" value="<?= set_value('interest_credit_central_tax', ((!empty($form_data['interest_credit_central_tax'])) ? $form_data['interest_credit_central_tax'] : '')); ?>" type="text" class="form-control"></td>
                                    <td><input type="text" class="form-control" disabled=""></td>
                                    <td><input type="text" class="form-control" disabled=""></td>
                                    <td><input type="text" class="form-control" disabled=""></td>
                                </tr>
                                <tr>
                                    <td>Late Fees</td>
                                    <td><input type="text" class="form-control" disabled=""></td>
                                    <td><input name="late_fee_cash_central_tax" value="<?= set_value('late_fee_cash_central_tax', ((!empty($form_data['late_fee_cash_central_tax'])) ? $form_data['late_fee_cash_central_tax'] : '')); ?>" type="text" class="form-control"></td>
                                    <td><input name="late_fee_cash_state_tax" value="<?= set_value('late_fee_cash_state_tax', ((!empty($form_data['late_fee_cash_state_tax'])) ? $form_data['late_fee_cash_state_tax'] : '')); ?>" type="text" class="form-control"></td>
                                    <td><input type="text" class="form-control" disabled=""></td>
                                    <td><input name="late_fee_cash_total" value="<?= set_value('late_fee_cash_total', ((!empty($form_data['late_fee_cash_total'])) ? $form_data['late_fee_cash_total'] : '')); ?>" type="text" class="form-control"></td>
                                    <td><input name="late_fee_credit_integrated_tax" value="<?= set_value('late_fee_credit_integrated_tax', ((!empty($form_data['late_fee_credit_integrated_tax'])) ? $form_data['late_fee_credit_integrated_tax'] : '')); ?>" type="text" class="form-control"></td>
                                    <td><input name="late_fee_credit_central_tax" value="<?= set_value('late_fee_credit_central_tax', ((!empty($form_data['late_fee_credit_central_tax'])) ? $form_data['late_fee_credit_central_tax'] : '')); ?>" type="text" class="form-control"></td>
                                    <td><input type="text" class="form-control" disabled=""></td>
                                    <td><input type="text" class="form-control" disabled=""></td>
                                    <td><input type="text" class="form-control" disabled=""></td>
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