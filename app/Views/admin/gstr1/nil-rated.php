<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>8A, 8B, 8C, 8D - Nil Rated Supplies</h5>
                    <a href="<?= base_url('admin/gstr1/' . $question_id) ?>" class="btn btn-primary btn-sm">Back</a>
                </div>
                <div class="m-t-30">
                    <?php
                    if (session()->getFlashdata('success')) {
                        echo '<div class="alert alert-success"><strong>Success!</strong> Action has successful.'
                        . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
                    }
                    ?>
                    <form id="form_validation" action="<?= base_url() . '/admin/gstr1/nil-rated/' . $question_id; ?>" method="post"  class="form">
                        <input type="hidden" name="question_id" value="<?= $question_id; ?>" /> 
                        <input type="hidden" name="pk_id" value="<?= $pk_id; ?>" />
                        <table class="table table-bordered">
                            <tr>
                                <th>Description</th>
                                <th>Nil Rated Supplies (₹)</th>
                                <th>Exempted (Other than Nil rated/non-GST supply) (₹)</th>
                                <th>Non-GST Supplies (₹)</th>
                            </tr>
                            <tr>
                                <td>Inter-state supplies to registered person</td>
                                <td>
                                    <input type="text" name="inter_reg_nill_rated_supplies" value="<?= set_value('inter_reg_nill_rated_supplies', ((!empty($form_data)) ? $form_data['inter_reg_nill_rated_supplies'] : '')); ?>" class="form-control">
                                </td>
                                <td>
                                    <input type="text" name="inter_reg_exempted" value="<?= set_value('inter_reg_exempted', ((!empty($form_data)) ? $form_data['inter_reg_exempted'] : '')); ?>" class="form-control">
                                </td>
                                <td>
                                    <input type="text" name="inter_reg_non_gst_supplies" value="<?= set_value('inter_reg_non_gst_supplies', ((!empty($form_data)) ? $form_data['inter_reg_non_gst_supplies'] : '')); ?>" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Inter-state supplies to unregistered person</td>
                                <td>
                                    <input type="text" name="inter_unreg_nill_rated_supplies" value="<?= set_value('inter_unreg_nill_rated_supplies', ((!empty($form_data)) ? $form_data['inter_unreg_nill_rated_supplies'] : '')); ?>" class="form-control">
                                </td>
                                <td>
                                    <input type="text" name="inter_unreg_exempted" value="<?= set_value('inter_unreg_exempted', ((!empty($form_data)) ? $form_data['inter_unreg_exempted'] : '')); ?>" class="form-control">
                                </td>
                                <td>
                                    <input type="text" name="inter_unreg_non_gst_supplies" value="<?= set_value('inter_unreg_non_gst_supplies', ((!empty($form_data)) ? $form_data['inter_unreg_non_gst_supplies'] : '')); ?>" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Intra-state supplies to registered person</td>
                                <td>
                                    <input type="text" name="intra_reg_nill_rated_supplies" value="<?= set_value('intra_reg_nill_rated_supplies', ((!empty($form_data)) ? $form_data['intra_reg_nill_rated_supplies'] : '')); ?>" class="form-control">
                                </td>
                                <td>
                                    <input type="text" name="intra_reg_exempted" value="<?= set_value('intra_reg_exempted', ((!empty($form_data)) ? $form_data['intra_reg_exempted'] : '')); ?>" class="form-control">
                                </td>
                                <td>
                                    <input type="text" name="intra_reg_non_gst_supplies" value="<?= set_value('intra_reg_non_gst_supplies', ((!empty($form_data)) ? $form_data['intra_reg_non_gst_supplies'] : '')); ?>" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Intra-state supplies to unregistered person</td>
                                <td>
                                    <input type="text" name="intra_unreg_nill_rated_supplies" value="<?= set_value('intra_unreg_nill_rated_supplies', ((!empty($form_data)) ? $form_data['intra_unreg_nill_rated_supplies'] : '')); ?>" class="form-control">
                                </td>
                                <td>
                                    <input type="text" name="intra_unreg_exempted" value="<?= set_value('intra_unreg_exempted', ((!empty($form_data)) ? $form_data['intra_unreg_exempted'] : '')); ?>" class="form-control">
                                </td>
                                <td>
                                    <input type="text" name="intra_unreg_non_gst_supplies" value="<?= set_value('intra_unreg_non_gst_supplies', ((!empty($form_data)) ? $form_data['intra_unreg_non_gst_supplies'] : '')); ?>" class="form-control">
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