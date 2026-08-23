<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>5.1 Interest & late fee payable </h5>
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


                    <form id="form_validation" action="<?= base_url() . '/admin/gstr3b/insterest-late-fee/' . $question_id; ?>" method="post"  class="form">
                        <input type="hidden" name="question_id" value="<?= $question_id; ?>" />
                        <input type="hidden" name="pk_id" value="<?= ((!empty($form_data)) ? $form_data['interest_id'] : ''); ?>" />

                        <table class="table table-bordered">
                            <tr>
                                <th>Description</th>
                                <th>Integrated Tax (₹)</th>
                                <th>Central Tax (₹)</th>
                                <th>State/UT Tax (₹)</th>
                                <th>CESS (₹)</th>
                            </tr>
                            <tr>
                                <td>Interest</td>
                                <td><input name="interest_integrated" value="<?= set_value('interest_integrated', ((!empty($form_data['interest_integrated'])) ? $form_data['interest_integrated'] : '')); ?>" type="text" class="form-control"></td>
                                <td><input name="interest_central" value="<?= set_value('interest_central', ((!empty($form_data['interest_central'])) ? $form_data['interest_central'] : '')); ?>" type="text" class="form-control"></td>
                                <td><input name="interest_state" value="<?= set_value('interest_state', ((!empty($form_data['interest_state'])) ? $form_data['interest_state'] : '')); ?>" type="text" class="form-control"></td>
                                <td><input name="interest_cess" value="<?= set_value('interest_cess', ((!empty($form_data['interest_cess'])) ? $form_data['interest_cess'] : '')); ?>" type="text" class="form-control" disabled=""></td>
                            </tr>
                            <tr>
                                <td>Late Fees</td>
                                <td><input name="late_fee_integrated" value="<?= set_value('late_fee_integrated', ((!empty($form_data['late_fee_integrated'])) ? $form_data['late_fee_integrated'] : '')); ?>" type="text" class="form-control"></td>
                                <td><input name="late_fee_central" value="<?= set_value('late_fee_central', ((!empty($form_data['late_fee_central'])) ? $form_data['late_fee_central'] : '')); ?>" type="text" class="form-control"></td>
                                <td><input name="late_fee_state" value="<?= set_value('late_fee_state', ((!empty($form_data['late_fee_state'])) ? $form_data['late_fee_state'] : '')); ?>" type="text" class="form-control"></td>
                                <td><input name="late_fee_cess" value="<?= set_value('late_fee_cess', ((!empty($form_data['late_fee_cess'])) ? $form_data['late_fee_cess'] : '')); ?>" type="text" class="form-control" disabled=""></td>
                            </tr>
                        </table>
                        <button type="submit" class="btn btn-primary">Save Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
