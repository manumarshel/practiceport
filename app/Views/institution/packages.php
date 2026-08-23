<?= $this->extend('institution/layouts/main'); ?>

<?= $this->section('main_content'); ?>
<div class="row">
    <div class="col-md-12">
         <div class="container mt-4">

    <h4 class="mb-4">My Subscription Packages</h4>

    <div class="card">
        <div class="card-body">

           <table class="table table-bordered align-middle">
    <thead>
        <tr>
            <th>Package</th>
            <th>Validity</th>
            <th>Student Limit</th>
            <th>Used</th>
            <th>Remaining</th>
            <th>Usage</th>
            <th>Status</th>
            <th>Renewals</th>
        </tr>
    </thead>

    <tbody>

                <?php if (!empty($packages)) : ?>
                    <?php foreach ($packages as $pkg) : ?>

                        <?php
                            $percentage = 0;
                            if ($pkg->max_students > 0) {
                                $percentage = ($pkg->used_students / $pkg->max_students) * 100;
                            }

                            $isFull = ($pkg->remaining_students <= 0);
                            $daysLeft = (strtotime($pkg->end_date) - strtotime(date('Y-m-d'))) / (60*60*24);
                        ?>

                        <tr class="table">

                            <!-- Package Title -->
                            <td>
                                <strong><?= esc($pkg->display_title) ?></strong>
                                <br>
                                <small><?= $pkg->duration ?> </small>
                            </td>

                            <!-- Validity -->
                            <td>
                                <?= date('d M Y', strtotime($pkg->start_date)) ?>
                                <br> to <br>
                                <?= date('d M Y', strtotime($pkg->end_date)) ?>

                                <?php if ($pkg->expiry_status == 'Active') : ?>
                                    <br>
                                    <small class="text-muted">
                                        <?= floor($daysLeft) ?> days left
                                    </small>
                                <?php endif; ?>
                            </td>

                            <!-- Limit -->
                            <td><?= $pkg->max_students ?></td>

                            <!-- Used -->
                           <td>
                                <span class="text-primary fw-bold">
                                    <?= $pkg->used_students ?>
                                </span>
                            
                                <a href="<?= base_url('institution/packageStudent/' . $pkg->PKInstitutionPackageID) ?>"
                                   class="ms-2 text-decoration-none"
                                   title="View Students">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </td>

                            <!-- Remaining -->
                            <td>
                                <span class="<?= $isFull ? 'text-danger fw-bold' : 'text-success fw-bold' ?>">
                                    <?= $pkg->remaining_students ?>
                                </span>
                            </td>

                            <!-- Progress -->
                            <td style="width:180px;">
                                <div class="progress" style="height:18px;">
                                    <div class="progress-bar"
                                         role="progressbar"
                                         style="width: <?= $percentage ?>%">
                                    </div>
                                </div>
                                <small><?= round($percentage) ?>% used</small>
                            </td>

                            <!-- Status -->
                            <td>
                                <?php if ($pkg->expiry_status == 'Active') : ?>
                                    <span class="badge bg-success">Active</span>
                                <?php elseif ($pkg->expiry_status == 'Inactive') : ?>
                                    <span class="badge bg-secondary">Inactive</span>
                                <?php else : ?>
                                    <span class="badge bg-danger">Expired</span>
                                <?php endif; ?>

                                <?php if ($isFull) : ?>
                                    <br>
                                    <span class="badge bg-warning text-dark mt-1">Full</span>
                                <?php endif; ?>
                            </td>

                            <!-- Renewals -->
                            <td>
                                <?php if ($pkg->renewal_count > 1) : ?>
                                    <span class="badge bg-info">
                                        Renewed <?= $pkg->renewal_count - 1 ?> Times
                                    </span>
                                <?php else : ?>
                                    <span class="badge bg-secondary">
                                        First Cycle
                                    </span>
                                <?php endif; ?>
                            </td>

                        </tr>

                    <?php endforeach; ?>

                <?php else : ?>

                    <tr>
                        <td colspan="8" class="text-center text-muted">
                            No packages assigned yet.
                        </td>
                    </tr>

                <?php endif; ?>

                </tbody>
            </table>

        </div>
    </div>

</div>

    </div>
</div>
<?= $this->endSection(); ?>

