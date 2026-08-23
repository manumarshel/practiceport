<?= $this->extend('admin/layouts/main2'); ?>

<?= $this->section('main_content'); ?>

<!-- DASHBOARD PAGE HEADER -->
<div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
    <div>
        <h3 class="font-weight-bold text-dark mb-1" style="font-size: 22px; letter-spacing: -0.5px;">Dashboard Overview</h3>
        <p class="text-muted mb-0" style="font-size: 13.5px;">Welcome to PracticePot Admin Console. Monitor student activity, assessments, and content.</p>
    </div>
    <div class="d-flex align-items-center gap-2">
        <a href="<?= base_url('admin/assessments') ?>" class="btn btn-primary d-inline-flex align-items-center gap-2 shadow-sm">
            <i class="anticon anticon-form"></i> Manage Assessments
        </a>
        <a href="<?= base_url('admin/reports') ?>" class="btn btn-outline-primary d-inline-flex align-items-center gap-2">
            <i class="anticon anticon-line-chart"></i> View Reports
        </a>
    </div>
</div>

<!-- 6 KEY METRIC STAT CARDS (3 Per Row) -->
<div class="row mb-3">
    <!-- Total Students -->
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="stat-card-modern stat-card-blue">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <div class="stat-label">Total Students</div>
                    <div class="stat-value"><?= number_format($users_count ?? 0) ?></div>
                </div>
                <div class="stat-icon-wrap">
                    <i class="anticon anticon-team"></i>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center pt-2 border-top" style="border-color: #f1f5f9 !important;">
                <span class="text-success font-weight-bold" style="font-size: 12.5px;">
                    <i class="anticon anticon-check-circle mr-1"></i> Active Enrolled
                </span>
                <a href="<?= base_url('admin/users') ?>" class="text-primary font-weight-semibold" style="font-size: 12px;">
                    View Students <i class="anticon anticon-arrow-right ml-1"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Simulation Questions -->
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="stat-card-modern stat-card-green">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <div class="stat-label">Simulation Tasks</div>
                    <div class="stat-value"><?= number_format($question_count ?? 0) ?></div>
                </div>
                <div class="stat-icon-wrap">
                    <i class="anticon anticon-file-unknown"></i>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center pt-2 border-top" style="border-color: #f1f5f9 !important;">
                <span class="text-success font-weight-bold" style="font-size: 12.5px;">
                    <i class="anticon anticon-check-circle mr-1"></i> Interactive Practice
                </span>
                <a href="<?= base_url('admin/questions') ?>" class="text-success font-weight-semibold" style="font-size: 12px;">
                    View Tasks <i class="anticon anticon-arrow-right ml-1"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Partner Companies -->
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="stat-card-modern stat-card-orange">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <div class="stat-label">Simulated Companies</div>
                    <div class="stat-value"><?= number_format($company_count ?? 0) ?></div>
                </div>
                <div class="stat-icon-wrap">
                    <i class="anticon anticon-project"></i>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center pt-2 border-top" style="border-color: #f1f5f9 !important;">
                <span class="text-muted font-weight-bold" style="font-size: 12.5px;">
                    <i class="anticon anticon-bank mr-1"></i> Enterprise Entities
                </span>
                <a href="<?= base_url('admin/companies') ?>" class="text-orange font-weight-semibold" style="font-size: 12px; color: #ea580c;">
                    View Companies <i class="anticon anticon-arrow-right ml-1"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Assessments -->
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="stat-card-modern stat-card-purple">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <div class="stat-label">Course Assessments</div>
                    <div class="stat-value"><?= number_format($assessments_count ?? 0) ?></div>
                </div>
                <div class="stat-icon-wrap">
                    <i class="anticon anticon-form"></i>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center pt-2 border-top" style="border-color: #f1f5f9 !important;">
                <span class="text-purple font-weight-bold" style="font-size: 12.5px; color: #7c3aed;">
                    <i class="anticon anticon-file-text mr-1"></i> Active Tests
                </span>
                <a href="<?= base_url('admin/assessments') ?>" class="font-weight-semibold" style="font-size: 12px; color: #7c3aed;">
                    Manage Assessments <i class="anticon anticon-arrow-right ml-1"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Student Submissions -->
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="stat-card-modern stat-card-rose">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <div class="stat-label">Student Submissions</div>
                    <div class="stat-value"><?= number_format($submissions_count ?? 0) ?></div>
                </div>
                <div class="stat-icon-wrap">
                    <i class="anticon anticon-upload"></i>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center pt-2 border-top" style="border-color: #f1f5f9 !important;">
                <span class="text-danger font-weight-bold" style="font-size: 12.5px;">
                    <i class="anticon anticon-cloud-upload mr-1"></i> Submitted Answers
                </span>
                <a href="<?= base_url('admin/assessments') ?>" class="text-danger font-weight-semibold" style="font-size: 12px;">
                    Review Submissions <i class="anticon anticon-arrow-right ml-1"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Partner Institutions -->
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="stat-card-modern stat-card-indigo">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <div class="stat-label">Partner Institutions</div>
                    <div class="stat-value"><?= number_format($institutions_count ?? 0) ?></div>
                </div>
                <div class="stat-icon-wrap">
                    <i class="anticon anticon-solution"></i>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center pt-2 border-top" style="border-color: #f1f5f9 !important;">
                <span class="text-indigo font-weight-bold" style="font-size: 12.5px; color: #4f46e5;">
                    <i class="anticon anticon-apartment mr-1"></i> B2B Colleges
                </span>
                <a href="<?= base_url('admin/institutions') ?>" class="font-weight-semibold" style="font-size: 12px; color: #4f46e5;">
                    View Institutions <i class="anticon anticon-arrow-right ml-1"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- ACTIVITY TABLES (RECENT REGISTERED STUDENTS & ASSESSMENT SUBMISSIONS) -->
<div class="row">
    <!-- LEFT: RECENT REGISTERED STUDENTS -->
    <div class="col-lg-7 mb-4">
        <div class="admin-table-card d-flex flex-column h-100" style="min-height: 420px;">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge-soft badge-soft-primary p-2 rounded-3 mr-2">
                            <i class="anticon anticon-usergroup-add font-size-16"></i>
                        </span>
                        <div>
                            <h5 class="font-weight-bold text-dark mb-0">Latest Registered Students</h5>
                            <small class="text-muted">Recent account enrollments</small>
                        </div>
                    </div>
                    <a href="<?= base_url('admin/users') ?>" class="btn btn-sm btn-outline-primary font-weight-semibold" style="border-radius: 6px;">
                        View All <i class="anticon anticon-arrow-right ml-1"></i>
                    </a>
                </div>

                <div class="table-responsive-fixed mt-3" style="max-height: 330px; border: 1px solid #f1f5f9; border-radius: 10px;">
                    <table class="table table-hover align-middle mb-0" style="font-size: 13.5px;">
                        <thead>
                            <tr>
                                <th style="width: 50px;">ID</th>
                                <th>Student</th>
                                <th>Package</th>
                                <th>Joined</th>
                                <th class="text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($users)): ?>
                                <?php $idx = 1; foreach ($users as $u): ?>
                                    <tr>
                                        <td class="font-weight-bold text-muted">#<?= $idx++; ?></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="user-avatar-badge mr-2" style="background: <?= in_array($idx % 3, [0, 1]) ? 'linear-gradient(135deg, #3b82f6, #1d4ed8)' : 'linear-gradient(135deg, #10b981, #047857)' ?>; width: 32px; height: 32px; font-size: 11px;">
                                                    <?= strtoupper(substr($u['first_name'] ?? 'U', 0, 1) . substr($u['last_name'] ?? '', 0, 1)) ?>
                                                </div>
                                                <div>
                                                    <span class="font-weight-bold text-dark d-block"><?= esc($u['first_name'] . ' ' . $u['last_name']); ?></span>
                                                    <span class="text-muted small"><?= esc($u['email']); ?></span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <?php if (!empty($u['package_name'])): ?>
                                                <span class="badge-soft badge-soft-info"><?= esc($u['package_name']) ?></span>
                                            <?php else: ?>
                                                <span class="badge-soft badge-soft-warning">Standard</span>
                                            <?php endif; ?>
                                        </td>
                                        <td style="font-size: 12.5px; color: #64748b;">
                                            <?= date('M d, Y', strtotime($u['date_registered'] ?? 'now')); ?>
                                        </td>
                                        <td class="text-center">
                                            <span class="badge-soft badge-soft-success">
                                                <i class="anticon anticon-check-circle" style="font-size: 10px;"></i> Active
                                            </span>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="5" class="text-center py-5 text-muted">No students registered yet.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- RIGHT: RECENT ASSESSMENT SUBMISSIONS TABLE -->
    <div class="col-lg-5 mb-4">
        <div class="admin-table-card d-flex flex-column h-100" style="min-height: 420px;">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge-soft badge-soft-success p-2 rounded-3 mr-2">
                            <i class="anticon anticon-form font-size-16"></i>
                        </span>
                        <div>
                            <h5 class="font-weight-bold text-dark mb-0">Assessment Activity</h5>
                            <small class="text-muted">Student test uploads & reviews</small>
                        </div>
                    </div>
                    <a href="<?= base_url('admin/assessments') ?>" class="btn btn-sm btn-outline-success font-weight-semibold" style="border-radius: 6px;">
                        All <i class="anticon anticon-arrow-right ml-1"></i>
                    </a>
                </div>

                <div class="table-responsive-fixed mt-3" style="max-height: 330px; border: 1px solid #f1f5f9; border-radius: 10px;">
                    <table class="table table-hover align-middle mb-0" style="font-size: 13.5px;">
                        <thead>
                            <tr>
                                <th>Student &amp; Module</th>
                                <th>File</th>
                                <th class="text-right pr-3">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($recent_assessments)): ?>
                                <?php foreach ($recent_assessments as $asmt): ?>
                                    <tr>
                                        <td>
                                            <div class="font-weight-bold text-dark d-block" style="font-size: 13px;">
                                                <?= esc($asmt['first_name'] . ' ' . $asmt['last_name']) ?>
                                            </div>
                                            <small class="text-muted">
                                                <?= esc($asmt['course_name'] ?: 'Assessment') ?> &bull; <?= date('M d', strtotime($asmt['submitted_at'] ?? 'now')) ?>
                                            </small>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('public/assets/uploads/assessments/' . $asmt['answer_file']) ?>" target="_blank" 
                                               class="d-inline-flex align-items-center text-success font-weight-semibold text-truncate" 
                                               style="max-width: 120px;" title="Download <?= esc($asmt['answer_file']) ?>">
                                                <i class="anticon anticon-file-excel mr-1"></i>
                                                <span class="text-truncate"><?= esc($asmt['answer_file']) ?></span>
                                            </a>
                                        </td>
                                        <td class="text-right pr-3">
                                            <?php if ($asmt['status'] === 'Pending Review'): ?>
                                                <span class="badge-soft badge-soft-warning font-size-11">Pending</span>
                                            <?php else: ?>
                                                <span class="badge-soft badge-soft-success font-size-11"><?= esc($asmt['status']) ?></span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="3" class="text-center py-5 text-muted">
                                        <i class="anticon anticon-inbox font-size-28 text-muted mb-2 d-block"></i>
                                        <span>No student assessment submissions yet.</span>
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
