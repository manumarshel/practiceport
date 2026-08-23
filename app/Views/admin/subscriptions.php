<?= $this->extend('admin/layouts/main2'); ?>

<?= $this->section('main_content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>All Users</h5>
                    <div>
                        <!-- <a href="javascript:void(0);" class="btn btn-sm btn-default">View All</a> -->
                    </div>
                </div>
                <div class="m-t-30">
                    <div class="table-responsive">
                        <table class="table table-hover" id="data-table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>License</th>
                                <th>User</th>
                                <th>Date</th>
                                <th>Package</th>
                                <th>Duration</th>
                                <!--                                <th>Details</th>-->
                            </tr>
                            </thead>
                            <tbody>
                            <?php if (isset($users)) {
                                $ii = 1;
                                foreach ($users as $user): ?>
                                    <tr>
                                        <td>#<?= $ii++; ?></td>
                                        <td><?=substr(md5($user['subscription_id']), 0, 10); ?></td>
                                        <td>
                                            <?= $user['first_name']; ?> <?= $user['last_name']; ?>
                                        </td>
                                        <td><?= date('M d Y', strtotime($user['start_date'])); ?></td>
                                        <td> <?= $user['title']; ?></td>
                                        <td>
                                            <?= $user['duration']; ?>
                                        </td>
                                        <!--                                    <td>-->
                                        <!--                                        <button class="btn btn-primary m-r-5 btn-sm">View Details</button>-->
                                        <!--                                    </td>-->
                                    </tr>
                                <?php endforeach;
                            } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
