<?= $this->extend('institution/layouts/main'); ?>

<?= $this->section('main_content'); ?> 

<style>
    .inst-stat-card {
        background: #ffffff;
        border: 1px solid #eef2f6;
        border-radius: 14px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
        padding: 24px;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .inst-stat-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
    }

    .package-plan-card {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 14px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
        padding: 22px;
        transition: all 0.2s ease;
        position: relative;
        overflow: hidden;
    }
    .package-plan-card:hover {
        transform: translateY(-2px);
        border-color: #2563eb;
        box-shadow: 0 10px 25px rgba(37, 99, 235, 0.08);
    }
    .package-plan-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 5px;
        height: 100%;
        background: linear-gradient(180deg, #1d4ed8, #3b82f6);
    }

    .table-feed-card {
        background: #ffffff;
        border: 1px solid #eef2f6;
        border-radius: 14px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
        padding: 24px;
    }

    .icon-badge-blue {
        width: 46px;
        height: 46px;
        border-radius: 12px;
        background: #eff6ff;
        color: #1d4ed8;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
        flex-shrink: 0;
    }

    .icon-badge-green {
        width: 46px;
        height: 46px;
        border-radius: 12px;
        background: #ecfdf5;
        color: #059669;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
        flex-shrink: 0;
    }

    .icon-badge-amber {
        width: 46px;
        height: 46px;
        border-radius: 12px;
        background: #fffbeb;
        color: #d97706;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
        flex-shrink: 0;
    }

    .progress-bar-custom {
        height: 8px;
        border-radius: 6px;
        background-color: #f1f5f9;
        overflow: hidden;
    }
</style>

<!-- HERO WELCOME BANNER -->
<div class="row mb-4">
    <div class="col-12">
        <div class="p-4 rounded-3 d-flex justify-content-between align-items-center flex-wrap gap-3" 
             style="background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%); color: #ffffff; border-radius: 16px;">
            <div>
                <span class="badge badge-warning text-dark font-weight-bold mb-2 px-3 py-1 text-uppercase" style="font-size: 11px; letter-spacing: 0.5px; background-color: #f59e0b; color: #000 !important;">
                    <i class="anticon anticon-appstore mr-1"></i> Institution Console
                </span>
                <h2 class="font-weight-bold mb-1 text-white" style="font-size: 24px;">
                    Welcome, <?= esc($institution['title'] ?? 'Institution Admin') ?>! 👋
                </h2>
                <p class="mb-0" style="color: #cbd5e1; font-size: 14px;">
                    Manage student enrollments, track package usage, and evaluate simulation assessments in real-time.
                </p>
            </div>
            <div class="d-flex align-items-center flex-wrap gap-2">
                <a href="<?= base_url('institution/create-user') ?>" class="btn btn-primary font-weight-semibold d-inline-flex align-items-center gap-1 shadow-sm" style="background: linear-gradient(135deg, #1d4ed8, #3b82f6); border: none; border-radius: 8px; padding: 9px 18px;">
                    <i class="anticon anticon-user-add mr-1"></i> Add Student
                </a>
                <a href="<?= base_url('institution/add-user') ?>" class="btn btn-outline-light font-weight-semibold d-inline-flex align-items-center gap-1" style="border-radius: 8px; padding: 9px 18px;">
                    <i class="anticon anticon-upload mr-1"></i> Import CSV
                </a>
                <a href="<?= base_url('institution/students') ?>" class="btn btn-success font-weight-semibold d-inline-flex align-items-center gap-1 position-relative" style="background-color: #2e7d32; border-color: #2e7d32; border-radius: 8px; padding: 9px 18px;">
                    <i class="anticon anticon-file-text mr-1"></i> Review Assessments
                    <?php if (!empty($pending_reviews) && $pending_reviews > 0): ?>
                        <span class="badge badge-danger badge-pill ml-1" style="background-color: #e53935;"><?= $pending_reviews ?></span>
                    <?php endif; ?>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- KEY METRIC CARDS (3-IN-A-ROW) -->
<div class="row mb-4">
    <!-- Stat 1: Total Enrolled Students -->
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="inst-stat-card h-100">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <div class="text-muted small text-uppercase font-weight-bold" style="letter-spacing: 0.5px;">Enrolled Students</div>
                    <h2 class="font-weight-bold text-dark mb-0 mt-1" style="font-size: 30px;"><?= number_format($totalStudents ?? 0) ?></h2>
                </div>
                <div class="icon-badge-blue">
                    <i class="anticon anticon-team"></i>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center pt-2 border-top">
                <span class="text-success font-weight-semibold small">
                    <i class="anticon anticon-check-circle mr-1"></i> Active Enrolled
                </span>
                <a href="<?= base_url('institution/students') ?>" class="text-primary font-weight-semibold small">
                    View Student List <i class="anticon anticon-arrow-right ml-1"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Stat 2: Active Packages -->
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="inst-stat-card h-100">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <div class="text-muted small text-uppercase font-weight-bold" style="letter-spacing: 0.5px;">Active Packages</div>
                    <h2 class="font-weight-bold text-dark mb-0 mt-1" style="font-size: 30px;"><?= number_format($activePackages ?? 0) ?></h2>
                </div>
                <div class="icon-badge-green">
                    <i class="anticon anticon-audit"></i>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center pt-2 border-top">
                <span class="text-success font-weight-semibold small">
                    <i class="anticon anticon-safety mr-1"></i> B2B Subscriptions
                </span>
                <a href="<?= base_url('institution/packages') ?>" class="text-success font-weight-semibold small">
                    Manage Packages <i class="anticon anticon-arrow-right ml-1"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Stat 3: Pending Assessment Reviews -->
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="inst-stat-card h-100">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <div class="text-muted small text-uppercase font-weight-bold" style="letter-spacing: 0.5px;">Pending Reviews</div>
                    <h2 class="font-weight-bold text-dark mb-0 mt-1" style="font-size: 30px;"><?= number_format($pending_reviews ?? 0) ?></h2>
                </div>
                <div class="icon-badge-amber">
                    <i class="anticon anticon-form"></i>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center pt-2 border-top">
                <span class="text-warning font-weight-semibold small" style="color: #d97706 !important;">
                    <i class="anticon anticon-clock-circle mr-1"></i> Awaiting Grading
                </span>
                <a href="<?= base_url('institution/students') ?>" class="font-weight-semibold small" style="color: #d97706;">
                    Review Now <i class="anticon anticon-arrow-right ml-1"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- ACTIVE PACKAGES & SEAT CAPACITY SECTION -->
<?php if (!empty($packages_list)): ?>
    <div class="mb-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="font-weight-bold text-dark mb-0">Subscription Packages &amp; Seat Usage</h5>
            <a href="<?= base_url('institution/packages') ?>" class="text-primary font-weight-semibold small">
                View All Packages <i class="anticon anticon-arrow-right ml-1"></i>
            </a>
        </div>

        <div class="row">
            <?php foreach (array_slice($packages_list, 0, 2) as $pkg): ?>
                <div class="col-lg-6 mb-3">
                    <div class="package-plan-card h-100">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <div>
                                <span class="badge badge-light border mb-2 font-weight-semibold px-2 py-1" style="font-size: 11px;">
                                    <i class="anticon anticon-calendar text-primary mr-1"></i> <?= esc($pkg['duration'] ?? '1 Year') ?>
                                </span>
                                <h5 class="font-weight-bold text-dark mb-1" style="font-size: 17px;">
                                    <?= esc($pkg['display_title']) ?>
                                </h5>
                                <small class="text-muted">
                                    Validity: <?= date('M d, Y', strtotime($pkg['start_date'])) ?> - <?= date('M d, Y', strtotime($pkg['end_date'])) ?>
                                </small>
                            </div>
                            <div class="text-right">
                                <span class="badge badge-pill <?= $pkg['status'] === 'active' ? 'badge-success' : 'badge-danger' ?> px-2.5 py-1" style="font-size: 11.5px;">
                                    <?= strtoupper($pkg['status']) ?>
                                </span>
                            </div>
                        </div>

                        <!-- Progress Bar & Capacity -->
                        <div class="d-flex justify-content-between align-items-center mt-3 mb-1 small font-weight-semibold">
                            <span class="text-muted">Enrolled: <?= $pkg['used_students'] ?> / <?= $pkg['max_students'] ?> Students</span>
                            <span class="text-primary"><?= $pkg['usage_percent'] ?>% Full</span>
                        </div>
                        <div class="progress progress-bar-custom mb-3">
                            <div class="progress-bar" role="progressbar" 
                                 style="width: <?= $pkg['usage_percent'] ?>%; background: linear-gradient(90deg, #1d4ed8, #3b82f6);" 
                                 aria-valuenow="<?= $pkg['usage_percent'] ?>" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center pt-2 border-top">
                            <span class="badge badge-pill badge-green text-success font-weight-bold" style="background-color: #ecfdf5; font-size: 12px;">
                                <?= $pkg['remaining_seats'] ?> Seats Available
                            </span>
                            <a href="<?= base_url('institution/packages/packageStudent/' . $pkg['PKInstitutionPackageID']) ?>" class="btn btn-sm btn-outline-primary font-weight-semibold d-inline-flex align-items-center gap-1" style="border-radius: 6px;">
                                <span>Manage Students</span>
                                <i class="anticon anticon-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>

<!-- SPLIT ACTIVITY TABLES (RECENT STUDENTS & ASSESSMENT SUBMISSIONS) -->
<div class="row">
    <!-- LEFT: RECENT ENROLLED STUDENTS TABLE -->
    <div class="col-lg-7 mb-4">
        <div class="table-feed-card d-flex flex-column h-100" style="min-height: 420px;">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <h5 class="font-weight-bold text-dark mb-0">Recent Enrolled Students</h5>
                    <small class="text-muted">Latest students registered under your institution</small>
                </div>
                <a href="<?= base_url('institution/students') ?>" class="btn btn-sm btn-outline-primary font-weight-semibold" style="border-radius: 6px;">
                    View All (<?= $totalStudents ?>)
                </a>
            </div>

            <div class="table-responsive flex-grow-1" style="max-height: 330px; overflow-y: auto; border: 1px solid #f1f5f9; border-radius: 10px;">
                <table class="table table-hover align-middle mb-0" style="font-size: 13.5px;">
                    <thead class="bg-light" style="font-size: 12px; text-transform: uppercase; letter-spacing: 0.5px; color: #64748b; border-bottom: 2px solid #e2e8f0; position: sticky; top: 0; z-index: 2;">
                        <tr>
                            <th class="pl-3 py-3" style="width: 45px;">ID</th>
                            <th class="py-3">Student Name</th>
                            <th class="py-3">Enrolled Package</th>
                            <th class="py-3">Joined Date</th>
                            <th class="text-right pr-3 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($recent_students)): ?>
                            <?php $s_idx = 1; foreach ($recent_students as $st): ?>
                                <tr>
                                    <td class="pl-3 font-weight-bold text-muted">#<?= $s_idx++; ?></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-image avatar-sm bg-primary text-white rounded-circle d-flex align-items-center justify-content-center mr-2" style="width: 32px; height: 32px; font-size: 12px; font-weight: bold; background: linear-gradient(135deg, #1d4ed8, #3b82f6) !important;">
                                                <?= strtoupper(substr($st['first_name'] ?? 'S', 0, 1) . substr($st['last_name'] ?? '', 0, 1)) ?>
                                            </div>
                                            <div>
                                                <span class="font-weight-bold text-dark d-block"><?= esc($st['first_name'] . ' ' . $st['last_name']); ?></span>
                                                <small class="text-muted"><?= esc($st['email']); ?></small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge badge-light border px-2 py-1 font-weight-semibold" style="font-size: 11px;">
                                            <?= esc($st['package_name'] ?: 'Standard Package') ?>
                                        </span>
                                    </td>
                                    <td class="text-muted small">
                                        <?= date('M d, Y', strtotime($st['date_registered'] ?? 'now')); ?>
                                    </td>
                                    <td class="text-right pr-3">
                                        <a href="<?= base_url('institution/students') ?>" class="btn btn-sm btn-outline-primary px-2 py-1" title="View Student Progress">
                                            <i class="anticon anticon-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5" class="text-center py-5 text-muted">
                                    <i class="anticon anticon-user-delete font-size-24 text-muted mb-2 d-block"></i>
                                    <span>No students enrolled yet. Click "Add Student" above to start!</span>
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- RIGHT: RECENT ASSESSMENT SUBMISSIONS & GRADING TABLE -->
    <div class="col-lg-5 mb-4">
        <div class="table-feed-card d-flex flex-column h-100" style="min-height: 420px;">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <h5 class="font-weight-bold text-dark mb-0">Assessment Uploads</h5>
                    <small class="text-muted">Student test answers for evaluation</small>
                </div>
                <a href="<?= base_url('institution/students') ?>" class="btn btn-sm btn-outline-success font-weight-semibold" style="border-radius: 6px;">
                    Review All (<?= $pending_reviews ?>)
                </a>
            </div>

            <div class="table-responsive flex-grow-1" style="max-height: 330px; overflow-y: auto; border: 1px solid #f1f5f9; border-radius: 10px;">
                <table class="table table-hover align-middle mb-0" style="font-size: 13.5px;">
                    <thead class="bg-light" style="font-size: 12px; text-transform: uppercase; letter-spacing: 0.5px; color: #64748b; border-bottom: 2px solid #e2e8f0; position: sticky; top: 0; z-index: 2;">
                        <tr>
                            <th class="pl-3 py-3">Student &amp; Module</th>
                            <th class="py-3">File</th>
                            <th class="py-3">Date</th>
                            <th class="text-right pr-3 py-3">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($recent_submissions)): ?>
                            <?php foreach ($recent_submissions as $sub): ?>
                                <tr>
                                    <td class="pl-3">
                                        <div class="font-weight-bold text-dark d-block" style="font-size: 13px;">
                                            <?= esc($sub['first_name'] . ' ' . $sub['last_name']) ?>
                                        </div>
                                        <span class="badge badge-light border px-1.5 py-0.5 small" style="font-size: 10.5px;">
                                            <?= esc($sub['course_name'] ?: 'Simulation') ?>
                                        </span>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('public/assets/uploads/assessments/' . $sub['answer_file']) ?>" target="_blank" 
                                           class="d-inline-flex align-items-center gap-1 text-success font-weight-semibold text-truncate" 
                                           style="max-width: 110px;" title="Download <?= esc($sub['answer_file']) ?>">
                                            <i class="anticon anticon-file-excel mr-1"></i>
                                            <span class="text-truncate"><?= esc($sub['answer_file']) ?></span>
                                        </a>
                                    </td>
                                    <td class="text-muted small">
                                        <?= date('M d', strtotime($sub['submitted_at'] ?? 'now')) ?>
                                    </td>
                                    <td class="text-right pr-3">
                                        <?php if ($sub['status'] === 'Pending Review'): ?>
                                            <a href="<?= base_url('institution/students') ?>" class="badge badge-warning text-white px-2 py-1 font-weight-semibold" style="background-color: #d97706; font-size: 11px;">
                                                Pending
                                            </a>
                                        <?php else: ?>
                                            <span class="badge badge-primary px-2 py-1 font-weight-semibold" style="font-size: 11px;">
                                                <?= esc($sub['status']) ?>
                                            </span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="4" class="text-center py-5 text-muted">
                                    <i class="anticon anticon-inbox font-size-24 text-muted mb-2 d-block"></i>
                                    <span>No student assessments uploaded yet.</span>
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
