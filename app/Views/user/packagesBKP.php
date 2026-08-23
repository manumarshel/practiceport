<?= $this->extend('user/layouts/main'); ?>

<?= $this->section('main_content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center hide">
                    <h5>Companies</h5>
                    <div>
                        <a href="javascript:void(0);" class="btn btn-sm btn-primary">Add New</a>
                    </div>
                </div>
                <div class="m-t-30">
                    <div class="text-center m-t-30 m-b-40">
                        <h2>Current Subscription Packages</h2>
                        <!--                        <p class="w-45 m-h-auto m-b-30">Active Plan : <strong> GSTR 1, 3 months - ₹2999.00</strong></p>-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 offset-3">
                        <table class="table table-hover">
                            <tr>
                                <td>Plan</td>
                                <td>Cost</td>
                                <td>Start Date</td>
                                <td>Duration</td>
                                <td>Status</td>
                            </tr>
                            <?php
                            $package_ids = [];
                            if (isset($current_subscriptions) && !empty($current_subscriptions)):
                                $today = date('y-m-d');
                                $renewal_url = '<?= base_url('checkout') ?>';
                                foreach ($current_subscriptions as $current_subscription):
                                    $package_ids[] = $current_subscription->package_id;
                                    $end_date = date('y-m-d', strtotime($current_subscription->end_date));

                                    ?>

                                    <tr>
                                        <td><?= $current_subscription->title; ?></td>
                                        <td>₹<?= $current_subscription->cost ?></td>
                                        <td><?= $current_subscription->start_date; ?></td>
                                        <td><?= $current_subscription->duration; ?></td>
                                        <td>
                                            <?php if ($today > $end_date):
                                                $renewal_url = '<?= base_url('checkout') ?>' . $current_subscription->package_id;

                                                ?>
                                                <a href="<?php echo $renewal_url; ?>"
                                                   class="btn btn-info btn-sm">Renew</a>
                                            <?php else: ?>
                                                <a href="#" class="btn btn-success btn-sm">Active</a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach;endif; ?>
                        </table>
                    </div>
                </div>
                
                <?php if($enroll_type=="0"){ ?>
                <div class="m-t-30">
                    <div class="text-center m-t-30 m-b-40">
                        <h2>All Packages</h2>
                        <!--                        <p class="w-45 m-h-auto m-b-30">Active Plan : <strong> GSTR 1, 3 months - ₹2999.00</strong></p>-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 offset-3">
                        <table class="table table-hover">
                            <tr>
                                <td>Plan</td>
                                <td>Cost</td>
                                <td>Duration</td>
                                <td>Status</td>
                            </tr>
                            <?php if (isset($packages) && !empty($packages)):
                                foreach ($packages as $package):
                                    if (!in_array($package['package_id'], $package_ids)):
                                        if($package['status'] =="1"){
                                        ?>
                                        <tr>
                                            <td><?= $package['title']; ?></td>
                                            <td>₹<?= $package['cost']; ?></td>
                                            <td><?= $package['duration']; ?></td>
                                            <td>
                                                <?php $renewal_url = '<?= base_url('checkout') ?>' . $package['package_id']; ?>
                                                <a href="<?php echo $renewal_url; ?>" class="btn btn-primary btn-sm">Subscribe</a>
                                            </td>
                                        </tr>
                                    <?php }
                                    endif; endforeach;endif; ?>

                        </table>
                    </div>
                </div>
                
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>

