<?= $this->extend('admin/layouts/main2'); ?>

<?= $this->section('main_content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>All Coupons</h5>
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
                        <table class="table table-hover" id="data-table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Coupon Code</th>
                                <th>Coupon Type</th>
                                <th>Amount</th>
                                <th>Usage Limit</th>
                                <th>Current Usage</th>
                                <th>Expiry</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if ( isset( $coupons) ):
                                $ii =0;
                            foreach ( $coupons as $index => $coupon ):
                                $exp_date = '';
                                if ( $coupon['expiry_date'] && $coupon['expiry_date'] != '' ) {
                                    $exp_date = date('d M Y', strtotime($coupon['expiry_date']));
                                }
                                ?>
                            <tr>
                                <td>#<?php echo ++$ii; ?></td>
                                <td><?=$coupon['code']; ?></td>
                                <td><?=$coupon['type'];?></td>
                                <td><?=$coupon['amount'];?></td>
                                <td><?=$coupon['usage_limit'];?></td>
                                <td><?=$coupon['total_usage'];?></td>
                                <td><?=$exp_date;?></td>
                                <td>
                                    <button class="btn btn-icon btn-hover btn-sm btn-rounded delete-action" data-id="<?php echo $coupon['cpn_id']; ?>" data-action="ads/delete">
                                        <i class="anticon anticon-delete"></i>
                                    </button>
<!--                                    <div class="dropdown dropdown-animated scale-left">-->
<!--                                        <a class="text-gray font-size-18" href="javascript:void(0);" data-toggle="dropdown">-->
<!--                                            <i class="anticon anticon-ellipsis"></i>-->
<!--                                        </a>-->
<!--                                        <div class="dropdown-menu">-->
<!--                                            <button class="dropdown-item" type="button">-->
<!--                                                <i class="anticon anticon-edit"></i>-->
<!--                                                <span class="m-l-10">Edit</span>-->
<!--                                            </button>-->
<!--                                            <button class="dropdown-item" type="button">-->
<!--                                                <i class="anticon anticon-delete"></i>-->
<!--                                                <span class="m-l-10">Remove</span>-->
<!--                                            </button>-->
<!--                                        </div>-->
<!--                                    </div>-->
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
<?php include_once ('modals/coupon_model.php'); ?>
<?= $this->endSection(); ?>
