<?= $this->extend('institution/layouts/main'); ?>

<?= $this->section('main_content'); ?> 

<!-- DASHBOARD HEADER -->
<div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
    <div>
        <h3 class="font-weight-bold text-dark mb-1" style="font-size: 22px; letter-spacing: -0.5px;">Institution Dashboard</h3>
        <p class="text-muted mb-0" style="font-size: 13.5px;">Welcome to <?= esc($institution['title'] ?? 'Institution') ?> Management Console.</p>
    </div>
    <div class="d-flex align-items-center gap-2">
        <a href="<?= base_url('institution/create-user') ?>" class="btn btn-primary d-inline-flex align-items-center gap-2 shadow-sm" style="background-color: #1976d2; border-color: #1976d2;">
            <i class="anticon anticon-user-add"></i> Add Student
        </a>
        <a href="<?= base_url('institution/students') ?>" class="btn btn-success d-inline-flex align-items-center gap-2" style="background-color: #2e7d32; border-color: #2e7d32;">
            <i class="anticon anticon-file-text"></i> Review Assessments
            <?php if (!empty($pending_reviews) && $pending_reviews > 0): ?>
                <span class="badge badge-danger badge-pill ml-1" style="background-color: #e53935;"><?= $pending_reviews ?></span>
            <?php endif; ?>
        </a>
    </div>
</div>

<!-- STAT CARDS ROW (3 In a Row Layout) -->
<div class="row mb-4">
    <!-- Total Students -->
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100 shadow-sm border-0" style="border-radius: 14px; border-left: 4px solid #1976d2 !important;">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <div class="text-muted small text-uppercase font-weight-bold" style="letter-spacing: 0.5px;">Total Students</div>
                        <h2 class="font-weight-bold text-dark mb-0 mt-1" style="font-size: 30px;"><?= number_format($totalStudents ?? 0) ?></h2>
                    </div>
                    <div class="avatar avatar-icon avatar-lg rounded-circle d-flex align-items-center justify-content-center" style="background: #eff6ff; color: #1976d2; width: 50px; height: 50px; font-size: 22px;">
                        <i class="anticon anticon-team"></i>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center pt-2 border-top">
                    <span class="text-success font-weight-semibold small">
                        <i class="anticon anticon-check-circle mr-1"></i> Active Enrolled
                    </span>
                    <a href="<?= base_url('institution/students') ?>" class="text-primary font-weight-semibold small">
                        View All <i class="anticon anticon-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Active Packages -->
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100 shadow-sm border-0" style="border-radius: 14px; border-left: 4px solid #059669 !important;">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <div class="text-muted small text-uppercase font-weight-bold" style="letter-spacing: 0.5px;">Active Packages</div>
                        <h2 class="font-weight-bold text-dark mb-0 mt-1" style="font-size: 30px;"><?= number_format($activePackages ?? 0) ?></h2>
                    </div>
                    <div class="avatar avatar-icon avatar-lg rounded-circle d-flex align-items-center justify-content-center" style="background: #ecfdf5; color: #059669; width: 50px; height: 50px; font-size: 22px;">
                        <i class="anticon anticon-audit"></i>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center pt-2 border-top">
                    <span class="text-success font-weight-semibold small">
                        <i class="anticon anticon-safety mr-1"></i> Assigned B2B
                    </span>
                    <a href="<?= base_url('institution/packages') ?>" class="text-success font-weight-semibold small">
                        View Packages <i class="anticon anticon-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Reviews -->
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100 shadow-sm border-0" style="border-radius: 14px; border-left: 4px solid #d97706 !important;">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <div class="text-muted small text-uppercase font-weight-bold" style="letter-spacing: 0.5px;">Pending Reviews</div>
                        <h2 class="font-weight-bold text-dark mb-0 mt-1" style="font-size: 30px;"><?= number_format($pending_reviews ?? 0) ?></h2>
                    </div>
                    <div class="avatar avatar-icon avatar-lg rounded-circle d-flex align-items-center justify-content-center" style="background: #fffbeb; color: #d97706; width: 50px; height: 50px; font-size: 22px;">
                        <i class="anticon anticon-form"></i>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center pt-2 border-top">
                    <span class="text-warning font-weight-semibold small" style="color: #d97706 !important;">
                        <i class="anticon anticon-clock-circle mr-1"></i> Awaiting Grading
                    </span>
                    <a href="<?= base_url('institution/students') ?>" class="font-weight-semibold small" style="color: #d97706;">
                        Grade Now <i class="anticon anticon-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ACTIVITY SPLIT SECTIONS -->
<div class="row">
    <!-- LEFT: RECENT STUDENTS -->
    <div class="col-lg-7 mb-4">
        <div class="card h-100 shadow-sm border-0" style="border-radius: 14px;">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <h5 class="font-weight-bold text-dark mb-0">Enrolled Students</h5>
                        <small class="text-muted">Recent students registered under your institution</small>
                    </div>
                    <a href="<?= base_url('institution/students') ?>" class="btn btn-sm btn-outline-primary">
                        View All <i class="anticon anticon-arrow-right ml-1"></i>
                    </a>
                </div>

                <div class="table-responsive mt-3">
                    <table class="table table-hover align-middle">
                        <thead class="bg-light">
                            <tr>
                                <th style="width: 50px;">ID</th>
                                <th>Student</th>
                                <th>Email</th>
                                <th>Joined</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($recent_students)): ?>
                                <?php $s_idx = 1; foreach ($recent_students as $st): ?>
                                    <tr>
                                        <td class="font-weight-semibold text-muted">#<?= $s_idx++; ?></td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="avatar avatar-image avatar-sm bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; font-size: 12px; font-weight: bold;">
                                                    <?= strtoupper(substr($st['first_name'] ?? 'S', 0, 1) . substr($st['last_name'] ?? '', 0, 1)) ?>
                                                </div>
                                                <span class="font-weight-bold text-dark ml-2"><?= esc($st['first_name'] . ' ' . $st['last_name']); ?></span>
                                            </div>
                                        </td>
                                        <td class="text-muted"><?= esc($st['email']); ?></td>
                                        <td class="text-muted" style="font-size: 12.5px;"><?= date('M d, Y', strtotime($st['date_registered'] ?? 'now')); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="4" class="text-center py-4 text-muted">No students enrolled yet.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- RIGHT: RECENT ASSESSMENT SUBMISSIONS -->
    <div class="col-lg-5 mb-4">
        <div class="card h-100 shadow-sm border-0" style="border-radius: 14px;">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <h5 class="font-weight-bold text-dark mb-0">Assessment Uploads</h5>
                        <small class="text-muted">Student test answers for evaluation</small>
                    </div>
                    <a href="<?= base_url('institution/students') ?>" class="btn btn-sm btn-outline-success">
                        Review <i class="anticon anticon-arrow-right ml-1"></i>
                    </a>
                </div>

                <div class="mt-3">
                    <?php if (!empty($recent_submissions)): ?>
                        <div class="list-group list-group-flush">
                            <?php foreach ($recent_submissions as $sub): ?>
                                <div class="list-group-item px-0 py-3 border-bottom d-flex justify-content-between align-items-center" style="border-color: #f1f5f9 !important;">
                                    <div class="d-flex align-items-center mr-2">
                                        <div class="avatar avatar-image avatar-sm bg-success text-white rounded-circle d-flex align-items-center justify-content-center mr-3" style="width: 36px; height: 36px; font-size: 14px;">
                                            <i class="anticon anticon-file-excel"></i>
                                        </div>
                                        <div>
                                            <span class="font-weight-bold text-dark d-block" style="font-size: 13.5px;">
                                                <?= esc($sub['first_name'] . ' ' . $sub['last_name']) ?>
                                            </span>
                                            <small class="text-muted d-block">
                                                <?= esc($sub['course_name'] ?: 'Assessment') ?> &bull; 
                                                <a href="<?= base_url('public/assets/uploads/assessments/' . $sub['answer_file']) ?>" target="_blank" class="text-success font-weight-semibold">
                                                    <?= esc($sub['answer_file']) ?>
                                                </a>
                                            </small>
                                        </div>
                                    </div>
                                    <div class="text-right flex-shrink-0" style="text-align: right;">
                                        <?php if ($sub['status'] === 'Pending Review'): ?>
                                            <span class="badge badge-warning text-white px-2 py-1" style="background-color: #d97706; font-size: 11px;">Pending</span>
                                        <?php else: ?>
                                            <span class="badge badge-primary px-2 py-1" style="font-size: 11px;"><?= esc($sub['status']) ?></span>
                                        <?php endif; ?>
                                        <div class="text-muted mt-1" style="font-size: 11px;">
                                            <?= date('M d', strtotime($sub['submitted_at'] ?? 'now')) ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php else: ?>
                        <div class="text-center py-5 text-muted">
                            <i class="anticon anticon-inbox font-size-36 text-muted mb-2 d-block"></i>
                            <span>No student assessment submissions yet.</span>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
