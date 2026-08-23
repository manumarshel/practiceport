<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>5. Exempt, nil and Non GST inward supplies </h5>
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

                    <form id="form_validation" action="<?= base_url() . '/admin/gstr3b/inward-supplies/' . $question_id; ?>" method="post"  class="form">
                        <input type="hidden" name="question_id" value="<?= $question_id; ?>" /> 
                        <input type="hidden" name="pk_id" value="<?= ((!empty($form_data)) ? $form_data['inward_id'] : ''); ?>" />

                        <table class="table table-bordered">
                            <tr>
                                <th>Nature of Supplies</th>
                                <th>Inter-State Supplies (₹)</th>
                                <th>Intra-State Supplies (₹)</th>
                            </tr>
                            <tr>
                                <td>From a supplier under composition scheme, Exempt and Nil rated supply</td>
                                <td><input name="composition_inter_state" value="<?= set_value('composition_inter_state', ((!empty($form_data['composition_inter_state'])) ? $form_data['composition_inter_state'] : '')); ?>" type="text" class="form-control"></td>
                                <td><input name="composition_intra_state" value="<?= set_value('composition_intra_state', ((!empty($form_data['composition_intra_state'])) ? $form_data['composition_intra_state'] : '')); ?>" type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Non GST supply</td>
                                <td><input name="nongst_inter_state" value="<?= set_value('nongst_inter_state', ((!empty($form_data['nongst_inter_state'])) ? $form_data['nongst_inter_state'] : '')); ?>" type="text" class="form-control"></td>
                                <td><input name="nongst_intra_state" value="<?= set_value('nongst_intra_state', ((!empty($form_data['nongst_intra_state'])) ? $form_data['nongst_intra_state'] : '')); ?>" type="text" class="form-control"></td>
                            </tr>
                        </table>
                        <button type="submit" class="btn btn-primary">Save Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>