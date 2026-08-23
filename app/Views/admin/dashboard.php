<?= $this->extend('admin/layouts/main2'); ?>

<?= $this->section('main_content'); ?>
<div class="row">
    <div class="col-md-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="m-b-0">Revenue</p>
                        <h2 class="m-b-0">
                            <span>₹0</span>
                        </h2>
                    </div>
                    <div class="avatar avatar-icon avatar-lg avatar-blue">
                        <i class="anticon anticon-bank"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="m-b-0">Users</p>
                        <h2 class="m-b-0">
                            <span><?= /** @var TYPE_NAME $users_count */
                                $users_count; ?></span>
                        </h2>
                    </div>
                    <div class="avatar avatar-icon avatar-lg avatar-cyan">
                        <i class="anticon anticon-team"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="m-b-0">Companies</p>
                        <h2 class="m-b-0">
                            <span><?= /** @var TYPE_NAME $company_count */
                                $company_count; ?></span>
                        </h2>
                    </div>
                    <div class="avatar avatar-icon avatar-lg avatar-red">
                        <i class="anticon anticon-project"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="m-b-0">Questions</p>
                        <h2 class="m-b-0">
                            <span><?= /** @var TYPE_NAME $question_count */
                                $question_count; ?></span>
                        </h2>
                    </div>
                    <div class="avatar avatar-icon avatar-lg avatar-gold">
                        <i class="anticon anticon-audit"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>Latest Users</h5>
                    <div>
                        <a href="javascript:void(0);" class="btn btn-sm btn-default">View All</a>
                    </div>
                </div>
                <div class="m-t-30">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>User</th>
                                <th>Email</th>
                                <th>Joined</th>

<!--                                <th>Duration</th>-->
                            </tr>
                            </thead>
                            <tbody>
                            <?php if (isset($users)) {
                                $ii = 1;
                                foreach ($users as $user): ?>
                                    <tr>
                                        <td>#<?= $ii++; ?></td>
                                        <td>
                                            <?=$user['first_name']; ?> <?=$user['last_name']; ?>
                                        </td>
                                        <td>
                                            <?=$user['email']; ?>
                                        </td>
                                        <td><?=date('M d Y', strtotime($user['date_registered'])); ?></td>
<!--                                        <td>GST</td>-->
<!--                                        <td>-->
<!--                                            1 Year-->
<!--                                        </td>-->
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
