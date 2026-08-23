<?php include('layout/header.php'); ?>


<div class="row">

    <div class="col-12">

        <div class="custom-card py-5 px-5">

            <div class="card-body-custom"> 

                <!-- CURRENT SUBSCRIPTIONS -->
                <div class="text-center mb-5">

                    <h2 class="fw-bold">Current Subscription Packages</h2>
                    <p class="text-muted">
                        View your active and expired subscription plans
                    </p>

                </div>

                <div class="table-responsive mb-5">

                    <table class="table custom-table align-middle">

                        <thead>
                        <tr>
                            <th>Plan</th>
                            <!-- <th>Cost</th> -->
                            <th>Start Date</th>
                            <th>Duration</th>
                            <th>Status</th>
                        </tr>
                        </thead>

                        <tbody>

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

                                    <td>
                                        <div class="fw-semibold">
                                            <?= esc($current_subscription->display_title); ?>
                                        </div>
                                    </td>

                                    <!-- <td>
                                        ₹<?= $current_subscription->cost ?>
                                    </td> -->

                                    <td>
                                        <?= $current_subscription->start_date; ?>
                                    </td>

                                    <td>
                                        <?= $current_subscription->duration; ?>
                                    </td>

                                    <td>

                                        <?php if ($today > $end_date):

                                            $renewal_url = '<?= base_url('checkout') ?>' . $current_subscription->package_id;
                                            ?>

                                            <a href="#"
                                               class="btn btn-warning btn-sm custom-btn-warning">
                                                Renew
                                            </a>

                                        <?php else: ?>

                                            <span class="badge bg-success px-3 py-2">
                                                Active
                                            </span>

                                        <?php endif; ?>

                                    </td>

                                </tr>

                            <?php endforeach;

                        endif;
                        ?>

                        </tbody>

                    </table>

                </div>

                <!-- ALL PACKAGES -->
                <?php if($enroll_type=="0"){ ?>

                    <div class="text-center mb-5 mt-5">

                        <h2 class="fw-bold">All Packages</h2>

                        <p class="text-muted">
                            Subscribe to additional learning packages
                        </p>

                    </div>

                    <div class="table-responsive">

                        <table class="table custom-table align-middle">

                            <thead>
                            <tr>
                                <th>Plan</th>
                                <th>Cost</th>
                                <th>Duration</th>
                                <th>Status</th>
                            </tr>
                            </thead>

                            <tbody>

                            <?php
                            if (isset($packages) && !empty($packages)):

                                foreach ($packages as $package):

                                    if (!in_array($package['package_id'], $package_ids)):

                                        if($package['status'] =="1"){
                                            ?>

                                            <tr>

                                                <td>
                                                    <div class="fw-semibold">
                                                        <?= esc(!empty($package['custom_title']) ? $package['custom_title'] : $package['title']); ?>
                                                    </div>
                                                </td>

                                                <td>
                                                    ₹<?= $package['cost']; ?>
                                                </td>

                                                <td>
                                                    <?= $package['duration']; ?>
                                                </td>

                                                <td>

                                                    <?php
                                                    $renewal_url = '<?= base_url('checkout') ?>' . $package['package_id'];
                                                    ?>

                                                    <a href="<?php echo $renewal_url; ?>"
                                                       class="btn btn-orange btn-sm px-3 btn-run">
                                                        Subscribe
                                                    </a>

                                                </td>

                                            </tr>

                                        <?php }

                                    endif;

                                endforeach;

                            endif;
                            ?>

                            </tbody>

                        </table>

                    </div>

                <?php } ?>

            </div>

        </div>

    </div>

</div>

<?php include('layout/footer.php'); ?>