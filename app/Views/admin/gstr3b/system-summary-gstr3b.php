<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>B2B Invoices</h5>
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

                    <form id="form_validation" action="<?= base_url() . '/admin/gstr3b/system-summary/' . $question_id; ?>" method="post"  class="form">
                        <input type="hidden" name="question_id" value="<?= $question_id; ?>" /> 
                        <input type="hidden" name="pk_id" value="<?= ((!empty($form_data)) ? $form_data['system_id'] : ''); ?>" />
                        <table class="table table-bordered">
                            <tr>
                                <th>GSTR-3B Table</th>
                                <th>Source Form</th>
                                <th>Form Status</th>
                                <th>Summary Status</th>
                            </tr>
                            <tr>
                                <td>3.1(a,b,c,e), 3.2 Liability</td>
                                <td>GSTR-1</td>
                                <td>
                                    <select name="liability_gstr1_form_status" class="form-control">
                                        <option value="1" <?= set_value('liability_gstr1_form_status', ((!empty($form_data)) ? (($form_data['liability_gstr1_form_status'] == 1) ? 'selected' : '') : '')); ?>>Filed</option>
                                        <option value="0" <?= set_value('liability_gstr1_form_status', ((!empty($form_data)) ? (($form_data['liability_gstr1_form_status'] == 0) ? 'selected' : '') : '')); ?>>Generated</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="liability_gstr1_summary_status" class="form-control">
                                        <option value="1" <?= set_value('liability_gstr1_summary_status', ((!empty($form_data)) ? (($form_data['liability_gstr1_summary_status'] == 1) ? 'selected' : '') : '')); ?>>Yes</option>
                                        <option value="0" <?= set_value('liability_gstr1_summary_status', ((!empty($form_data)) ? (($form_data['liability_gstr1_summary_status'] == 0) ? 'selected' : '') : '')); ?>>No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>3.1(d) Reverse Charge</td>
                                <td>GSTR-2B</td>
                                <td>
                                    <select name="reverse_gstr2b_form_status" class="form-control">
                                        <option value="1" <?= set_value('reverse_gstr2b_form_status', ((!empty($form_data)) ? (($form_data['reverse_gstr2b_form_status'] == 1) ? 'selected' : '') : '')); ?>>Filed</option>
                                        <option value="0" <?= set_value('reverse_gstr2b_form_status', ((!empty($form_data)) ? (($form_data['reverse_gstr2b_form_status'] == 0) ? 'selected' : '') : '')); ?>>Generated</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="reverse_gstr2b_summary_status" class="form-control">
                                        <option value="1" <?= set_value('reverse_gstr2b_summary_status', ((!empty($form_data)) ? (($form_data['reverse_gstr2b_summary_status'] == 1) ? 'selected' : '') : '')); ?>>Yes</option>
                                        <option value="0" <?= set_value('reverse_gstr2b_summary_status', ((!empty($form_data)) ? (($form_data['reverse_gstr2b_summary_status'] == 0) ? 'selected' : '') : '')); ?>>No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>4A(1,3,4,5), 4B(2) Input Tax Credit</td>
                                <td>GSTR-2B</td>
                                <td>
                                    <select name="tax_credit_gstr2b_form_status" class="form-control">
                                        <option value="1" <?= set_value('tax_credit_gstr2b_form_status', ((!empty($form_data)) ? (($form_data['tax_credit_gstr2b_form_status'] == 1) ? 'selected' : '') : '')); ?>>Filed</option>
                                        <option value="0" <?= set_value('tax_credit_gstr2b_form_status', ((!empty($form_data)) ? (($form_data['tax_credit_gstr2b_form_status'] == 0) ? 'selected' : '') : '')); ?>>Generated</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="tax_credit_gstr2b_summary_status" class="form-control">
                                        <option value="1" <?= set_value('tax_credit_gstr2b_summary_status', ((!empty($form_data)) ? (($form_data['tax_credit_gstr2b_summary_status'] == 1) ? 'selected' : '') : '')); ?>>Yes</option>
                                        <option value="0" <?= set_value('tax_credit_gstr2b_summary_status', ((!empty($form_data)) ? (($form_data['tax_credit_gstr2b_summary_status'] == 0) ? 'selected' : '') : '')); ?>>No</option>
                                    </select>
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