<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>Amended Credit/Debit Notes</h5>
                    <div>
                        <a href="<?= base_url('admin/gstr1/cdn-amendment/rejected-add/'.$question_id) ?>" class="btn btn-primary btn-sm">
                            Add New
                        </a>
                        <a href="<?= base_url('admin/gstr1/' . $question_id) ?>" class="btn btn-primary btn-sm">Back</a>
                    </div>
                </div>
                <div class="m-t-30">
                    <?php echo view('admin/gstr1/cdn_amendment_navbar'); ?>
                    <?php
                    if (session()->getFlashdata('success')) {
                        echo '<div class="alert alert-success"><strong>Success!</strong> Action has successful.'
                        . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
                    }
                    if (empty($data_list)) {
                        echo '<div class="alert alert-primary">There are no invoices to be displayed.</div>';
                    } else {
                        ?>

                    <div class="table-responsive">
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>Revised Invoice No</th>
                                        <th>Original Invoice No</th>
                                        <th>Revised/Original Invoice Date</th>
                                        <th>Receiver GSTIN/UIN</th>
                                        <th>Receiver Name</th>
                                        <th>Supply Type</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($data_list as $value) {
                                        $v = (array) $value;
                                        ?>
                                        <tr>
                                            <td><a href="javascript:void(0);"><?= $value->reviced_invoice_no; ?></a></td>
                                            <td><?= $value->invoice_no; ?></td>
                                            <td><?= display_date($value->reviced_invoice_date); ?></td>
                                            <td><?= $value->receiver_gstin; ?></td>
                                            <td><?= $value->receiver__name; ?></td>
                                            <td><?= $value->supply_type; ?></td>
                                            <td>
                                                <a class="btn btn-icon btn-primary btn-tone" href="<?= base_url() . '/admin/gstr1/cdn-amendment/rejected-add/' . $value->question_id . '/' . $v['9c_cdnr_id']; ?>">
                                                    <i class="anticon anticon-edit"></i>
                                                </a>
                                                <button class="btn btn-icon btn-danger btn-tone common_remove" data-question_id="<?= $value->question_id; ?>" data-pk_id="<?= $v['9c_cdnr_id']; ?>">
                                                    <i class="anticon anticon-delete"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal fade" id="delete_item">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="<?= base_url() . '/admin/gstr1/cdn-amendment/rejected/remove' ?>" method="post">
                                        <input type="hidden" value="0" name="question_id" id="remove_question_id" />
                                        <input type="hidden" value="0" name="pk_id" id="remove_pk_id" />
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                            <button type="button" class="close" data-dismiss="modal">
                                                <i class="anticon anticon-close"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Are you sure you want to Delete?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger remove_now">Delete</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>