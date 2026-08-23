<?= $this->extend('admin/layouts/main2'); ?>

<?= $this->section('main_content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>All Videos</h5>
<!--                    <div>-->
<!--                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#AddnewModal">-->
<!--                            Add New-->
<!--                        </button>-->
<!--                    </div>-->
                </div>
                <?php if (session('msg')) : ?>
                    <div class="alert alert-info alert-dismissible">
                        <?= session('msg') ?>
                        <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                    </div>
                <?php endif ?>
                <div class="m-t-30">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Slot</th>
                                <th>Type</th>
                                <th>URL</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if ( isset( $videos) ):
                            foreach ( $videos as $index => $video ): ?>
                            <tr>
                                <td>#<?=$index+1; ?></td>
                                <td><?=$video['slot'];?></td>
                                <td><?=$video['catg'];?></td>
                                <td><a href="<?=$video['url'];?>" target="_blank"><?=$video['url'];?></a></td>
                                <td>
                                    <button class="btn btn-icon btn-hover btn-sm btn-rounded pull-right edit-modal-popup" data-url="<?php echo $video['url']; ?>" data-videoId="<?php echo $video['video_id']; ?>">
                                        <i class="anticon anticon-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            <?php endforeach;endif;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once ('modals/video_modal.php'); ?>
<?= $this->endSection(); ?>
