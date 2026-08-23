<?= $this->extend('user/layouts/main'); ?>

<?= $this->section('main_content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>GST Simulations</h5>
                    <a href="<?php echo $slot2; ?>" class="v-help" target="_blank"><i class="fa fa-info-circle"></i> Help</a>
                </div>
                <div class="m-t-30">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Type</th>
                                <th>Question</th>
                                <th>Category</th>
                                <th>Company</th>
                                <th>Data</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if ( isset($questions) ):
                                $ii = 1;
                            foreach ( $questions as $index => $question ):
                                $filePath = base_url() . '/public/assets/uploads/questions/' . $question['questionscol'];
                                $run = base_url() . '/simulation/dashboard/' . $question['question_id'];
                                
                                if ($question['category'] == "ewaybill") {
                                    $run = base_url() . '/eway-load/' . $question['question_id'];
                                }
                                
                                 if ($question['category'] == "efiling") {
                                    $run = base_url() . '/efiling-load/' . $question['question_id'];
                                }
                            ?>
                            <tr>
                                <td>#<?=$ii++; ?></td>
                                <td>
                                    <span class="badge badge-pill badge-cyan font-size-12"><?=strtoupper($question['question_type']); ?></span>
                                </td>
                                <td>
                                    <?=$question['question']; ?>
                                </td>
                                <td><?=strtoupper($question['category']); ?></td>
                                <td><?=$question['name']; ?></td>
                                <td> <a href="<?=$filePath; ?>" class="btn btn-success btn-sm">Download</a></td>
                                <td>
                                    <a href="<?php echo $run; ?>" class="btn btn-primary btn-sm">Run</a>
                                </td>

                            </tr>
                            <?php endforeach;endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
