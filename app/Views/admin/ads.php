<?= $this->extend('admin/layouts/main2'); ?>

<?= $this->section('main_content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>All Ads</h5>
                    <div>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#AddnewModal">
                            Add New
                        </button>
                    </div>
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
                                <th>Image</th>
                                <th>URL</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if ( isset( $ads) ):
                                $base_ad_dir = base_url() . '/public/assets/uploads/ads/';//WRITEPATH . 'uploads/ads/';
                                foreach ( $ads as $index => $ad ): ?>
                            <tr>
                                <td>#<?=$index+1;?></td>
                                <td>
                                    <img class="img-fluid rounded" src="<?= $base_ad_dir . $ad['image']; ?>" style="max-width: 60px" alt="">
                                </td>
                                <td><?=$ad['ad_url'];?></td>
                                <td class="">
<!--                                    <button class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">-->
<!--                                        <i class="anticon anticon-edit"></i>-->
<!--                                    </button>-->
                                    <button class="btn btn-icon btn-hover btn-sm btn-rounded delete-action" data-id="<?php echo $ad['ad_id']; ?>" data-action="ads/delete">
                                        <i class="anticon anticon-delete"></i>
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
<?php include_once ('modals/ad_modal.php'); ?>
<?= $this->endSection(); ?>

