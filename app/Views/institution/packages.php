<?= $this->extend('institution/layouts/main'); ?>

<?= $this->section('main_content'); ?>

<style>
    .packages-card {
        background: #ffffff;
        border: 1px solid #eef2f6;
        border-radius: 14px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        padding: 28px;
    }

    .table-packages {
        width: 100%;
        margin-bottom: 0;
        border-collapse: separate;
        border-spacing: 0;
    }

    .table-packages th {
        font-size: 13.5px;
        font-weight: 700;
        color: #0f172a;
        padding: 16px 18px;
        border-top: none;
        border-bottom: 1px solid #e2e8f0;
        background-color: #f8fafc;
    }

    .table-packages td {
        font-size: 14px;
        color: #1e293b;
        padding: 18px;
        vertical-align: middle;
        border-bottom: 1px solid #f1f5f9;
    }

    .package-icon-box {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        background: #eff6ff;
        color: #1d4ed8;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        flex-shrink: 0;
    }

    .badge-status-active {
        background-color: #059669;
        color: #ffffff;
        font-weight: 600;
        font-size: 12px;
        padding: 5px 14px;
        border-radius: 6px;
        display: inline-block;
    }

    .badge-status-expired {
        background-color: #dc2626;
        color: #ffffff;
        font-weight: 600;
        font-size: 12px;
        padding: 5px 14px;
        border-radius: 6px;
        display: inline-block;
    }

    .badge-status-full {
        background-color: #d97706;
        color: #ffffff;
        font-weight: 600;
        font-size: 12px;
        padding: 5px 14px;
        border-radius: 6px;
        display: inline-block;
    }

    .badge-cycle {
        background-color: #7c3aed;
        color: #ffffff;
        font-weight: 600;
        font-size: 12px;
        padding: 5px 12px;
        border-radius: 6px;
        display: inline-block;
    }

    .progress-custom {
        height: 8px;
        border-radius: 10px;
        background-color: #f1f5f9;
        overflow: hidden;
    }
</style>

<div class="row">
    <div class="col-md-12">

        <!-- HEADER & ACTIONS -->
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
            <div>
                <h3 class="font-weight-bold text-dark mb-1" style="font-size: 22px; letter-spacing: -0.5px;">My Subscription Packages</h3>
                <p class="text-muted mb-0" style="font-size: 13.5px;">Manage and monitor your institution's active seat licenses, validity, and student enrollments.</p>
            </div>
            <div class="d-flex align-items-center gap-2">
                <a href="<?= base_url('institution/create-user') ?>" class="btn btn-primary d-inline-flex align-items-center gap-2" style="background-color: #1976d2; border-color: #1976d2;">
                    <i class="anticon anticon-user-add"></i> Add Student
                </a>
                <a href="<?= base_url('institution/add-user') ?>" class="btn btn-outline-primary d-inline-flex align-items-center gap-2">
                    <i class="anticon anticon-upload"></i> Import CSV
                </a>
            </div>
        </div>

        <div class="packages-card">
            <div class="table-responsive">
                <table class="table table-packages align-middle">
                    <thead>
                        <tr>
                            <th>Package</th>
                            <th>Validity</th>
                            <th class="text-center">Student Limit</th>
                            <th class="text-center">Used</th>
                            <th class="text-center">Remaining</th>
                            <th style="min-width: 150px;">Usage Progress</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Cycle</th>
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
                                    $daysLeft = (strtotime($pkg->end_date) - strtotime(date('Y-m-d'))) / (60 * 60 * 24);
                                ?>
                                <tr>
                                    <!-- Package Info -->
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="package-icon-box mr-3">
                                                <i class="anticon anticon-appstore"></i>
                                            </div>
                                            <div>
                                                <span class="font-weight-bold text-dark d-block" style="font-size: 15px;">
                                                    <?= esc($pkg->display_title) ?>
                                                </span>
                                                <span class="badge badge-light text-muted font-weight-normal mt-1" style="font-size: 12px; background: #f1f5f9;">
                                                    <?= esc($pkg->duration ?: '1 Month') ?>
                                                </span>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- Validity -->
                                    <td>
                                        <div class="text-dark font-weight-medium" style="font-size: 13.5px;">
                                            <?= date('d M Y', strtotime($pkg->start_date)) ?>
                                        </div>
                                        <div class="text-muted small">to <?= date('d M Y', strtotime($pkg->end_date)) ?></div>
                                        <?php if ($pkg->expiry_status === 'Active') : ?>
                                            <small class="text-success font-weight-semibold">
                                                <?= max(0, floor($daysLeft)) ?> days left
                                            </small>
                                        <?php else: ?>
                                            <small class="text-danger font-weight-semibold">Expired</small>
                                        <?php endif; ?>
                                    </td>

                                    <!-- Student Limit -->
                                    <td class="text-center font-weight-bold text-dark fs-6">
                                        <?= $pkg->max_students ?>
                                    </td>

                                    <!-- Used Students with Link -->
                                    <td class="text-center">
                                        <a href="<?= base_url('institution/packageStudent/' . $pkg->PKInstitutionPackageID) ?>" 
                                           class="btn btn-sm btn-outline-primary d-inline-flex align-items-center gap-1 font-weight-semibold px-2 py-1"
                                           title="View Enrolled Students">
                                            <span><?= $pkg->used_students ?></span>
                                            <i class="anticon anticon-eye"></i>
                                        </a>
                                    </td>

                                    <!-- Remaining Seats -->
                                    <td class="text-center">
                                        <span class="badge badge-pill <?= $isFull ? 'badge-danger' : 'badge-success' ?> px-3 py-1 font-weight-bold" 
                                              style="<?= $isFull ? 'background-color: #ef4444;' : 'background-color: #10b981;' ?> font-size: 12.5px;">
                                            <?= $pkg->remaining_students ?>
                                        </span>
                                    </td>

                                    <!-- Usage Progress -->
                                    <td>
                                        <div class="progress progress-custom mb-1">
                                            <div class="progress-bar" role="progressbar" 
                                                 style="width: <?= min(100, $percentage) ?>%; background: linear-gradient(90deg, #3b82f6, #1d4ed8);">
                                            </div>
                                        </div>
                                        <div class="text-muted small font-weight-semibold">
                                            <?= round($percentage) ?>% seats occupied
                                        </div>
                                    </td>

                                    <!-- Status Badge -->
                                    <td class="text-center">
                                        <?php if ($pkg->expiry_status === 'Active') : ?>
                                            <span class="badge-status-active">Active</span>
                                        <?php else : ?>
                                            <span class="badge-status-expired">Expired</span>
                                        <?php endif; ?>

                                        <?php if ($isFull) : ?>
                                            <div class="mt-1">
                                                <span class="badge-status-full">Full</span>
                                            </div>
                                        <?php endif; ?>
                                    </td>

                                    <!-- Renewal Cycle -->
                                    <td class="text-center">
                                        <span class="badge-cycle">
                                            <?= ($pkg->renewal_count > 1) ? ('Cycle ' . $pkg->renewal_count) : 'First Cycle' ?>
                                        </span>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="8" class="text-center py-5 text-muted">
                                    <i class="anticon anticon-inbox font-size-36 text-muted mb-2 d-block"></i>
                                    No subscription packages assigned yet.
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<?= $this->endSection(); ?>
