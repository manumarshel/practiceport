<?php include('layout/header.php'); ?>

<style>
    .student-stat-card {
        background: #ffffff;
        border: 1px solid #eef2f6;
        border-radius: 14px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
        padding: 24px;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .student-stat-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
    }

    .package-hero-card {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 14px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
        padding: 24px;
        transition: all 0.2s ease;
        position: relative;
        overflow: hidden;
    }
    .package-hero-card:hover {
        transform: translateY(-2px);
        border-color: #ff7a00;
        box-shadow: 0 10px 25px rgba(255, 122, 0, 0.1);
    }

    .package-hero-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 5px;
        height: 100%;
        background: linear-gradient(180deg, #ff7a00, #ea580c);
    }

    .activity-feed-card {
        background: #ffffff;
        border: 1px solid #eef2f6;
        border-radius: 14px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
        padding: 24px;
    }

    .activity-item {
        padding: 14px 0;
        border-bottom: 1px solid #f1f5f9;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .activity-item:last-child {
        border-bottom: none;
    }

    .icon-badge-orange {
        width: 44px;
        height: 44px;
        border-radius: 12px;
        background: #fff7ed;
        color: #ff7a00;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        flex-shrink: 0;
    }

    .icon-badge-blue {
        width: 44px;
        height: 44px;
        border-radius: 12px;
        background: #eff6ff;
        color: #2563eb;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        flex-shrink: 0;
    }

    .icon-badge-green {
        width: 44px;
        height: 44px;
        border-radius: 12px;
        background: #ecfdf5;
        color: #059669;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        flex-shrink: 0;
    }

    .progress-bar-custom {
        height: 9px;
        border-radius: 6px;
        background-color: #f1f5f9;
        overflow: hidden;
    }
</style>

<!-- HERO WELCOME BANNER -->
<div class="row pt-4 mb-4">
    <div class="col-12">
        <div class="p-4 rounded-3 d-flex justify-content-between align-items-center flex-wrap gap-3" 
             style="background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%); color: #ffffff; border-radius: 16px;">
            <div>
                <span class="badge bg-warning text-dark fw-bold mb-2 px-3 py-1 text-uppercase" style="font-size: 11px; letter-spacing: 0.5px;">
                    <i class="bi bi-mortarboard-fill me-1"></i> Learning Dashboard
                </span>
                <h2 class="fw-bold mb-1" style="font-size: 26px;">
                    Welcome back, <?php if (isset($user_info['first_name'])) echo esc($user_info['first_name'] . ' ' . ($user_info['last_name'] ?? '')); ?>! 👋
                </h2>
                <p class="mb-0 text-slate-300" style="color: #cbd5e1; font-size: 14px;">
                    Track your simulation learning journey, view completed exercises, and review your assessment submissions.
                </p>
            </div>
            <?php if (!empty($packages)): ?>
                <div>
                    <a href="<?= base_url('user/package-courses/' . $packages[0]['package_id']) ?>" class="btn btn-warning fw-bold px-4 py-2 text-dark d-inline-flex align-items-center gap-2 shadow-sm" style="background-color: #ff7a00; border-color: #ff7a00; color: #ffffff !important;">
                        <span>Resume Learning</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- KEY METRIC CARDS (3-IN-A-ROW) -->
<div class="row mb-4 g-3">
    <!-- Stat 1: Enrolled Packages -->
    <div class="col-lg-4 col-md-6">
        <div class="student-stat-card h-100">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <div class="text-muted small text-uppercase fw-bold" style="letter-spacing: 0.5px;">Enrolled Packages</div>
                    <h2 class="fw-bold text-dark mb-0 mt-1" style="font-size: 32px;"><?= count($packages ?? []) ?></h2>
                </div>
                <div class="icon-badge-orange">
                    <i class="bi bi-box-seam-fill"></i>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center pt-2 border-top">
                <span class="text-success small fw-semibold">
                    <i class="bi bi-check-circle-fill me-1"></i> Active Subscriptions
                </span>
                <span class="text-muted small">
                    <?= !empty($packages[0]['course_count']) ? $packages[0]['course_count'] : 6 ?> Learning Modules
                </span>
            </div>
        </div>
    </div>

    <!-- Stat 2: Completed Lessons & Tasks -->
    <div class="col-lg-4 col-md-6">
        <div class="student-stat-card h-100">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <div class="text-muted small text-uppercase fw-bold" style="letter-spacing: 0.5px;">Tasks & Lessons Done</div>
                    <h2 class="fw-bold text-dark mb-0 mt-1" style="font-size: 32px;"><?= $total_tasks_done ?? 0 ?></h2>
                </div>
                <div class="icon-badge-blue">
                    <i class="bi bi-check-all"></i>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center pt-2 border-top">
                <span class="text-primary small fw-semibold">
                    <?= $total_completed_simulations ?? 0 ?> Simulations Solved
                </span>
                <span class="text-muted small">
                    <?= $total_completed_videos ?? 0 ?> Videos Watched
                </span>
            </div>
        </div>
    </div>

    <!-- Stat 3: Assessments Submitted -->
    <div class="col-lg-4 col-md-6">
        <div class="student-stat-card h-100">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <div class="text-muted small text-uppercase fw-bold" style="letter-spacing: 0.5px;">Assessments Submitted</div>
                    <h2 class="fw-bold text-dark mb-0 mt-1" style="font-size: 32px;"><?= count($assessment_submissions ?? []) ?></h2>
                </div>
                <div class="icon-badge-green">
                    <i class="bi bi-file-earmark-check-fill"></i>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center pt-2 border-top">
                <span class="text-success small fw-semibold">
                    <i class="bi bi-shield-check me-1"></i> Tests Submitted
                </span>
                <span class="text-muted small">
                    Instructor Evaluated
                </span>
            </div>
        </div>
    </div>
</div>

<!-- ENROLLED PACKAGES SECTION -->
<div class="mb-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="fw-bold text-dark mb-0">My Subscribed Courses & Packages</h4>
    </div>

    <?php if (!empty($packages)): ?>
        <div class="row g-3">
            <?php foreach ($packages as $pkg): 
                $pId = $pkg['package_id'];
                $runLink = base_url('user/package-courses/' . $pId);
            ?>
                <div class="col-lg-6">
                    <div class="package-hero-card h-100">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <span class="badge bg-light text-dark border mb-2 fw-semibold px-2 py-1" style="font-size: 11.5px;">
                                    <i class="bi bi-journal-code text-warning me-1"></i> <?= esc($pkg['duration'] ?? '12 Months') ?> Access
                                </span>
                                <h4 class="fw-bold text-dark mb-1" style="font-size: 18px;">
                                    <?= esc(strtoupper($pkg['package_name'])) ?>
                                </h4>
                                <p class="text-muted small mb-0">
                                    Interactive Simulation Portal & Comprehensive Practice
                                </p>
                            </div>
                            <div class="text-end">
                                <span class="fw-bold text-dark fs-5"><?= $pkg['progress'] ?>%</span>
                                <span class="text-muted d-block small">Completed</span>
                            </div>
                        </div>

                        <!-- Progress Bar -->
                        <div class="progress progress-bar-custom mb-3">
                            <div class="progress-bar" role="progressbar" 
                                 style="width: <?= max(0, min(100, $pkg['progress'])) ?>%; background: linear-gradient(90deg, #ff7a00, #ea580c);" 
                                 aria-valuenow="<?= $pkg['progress'] ?>" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center pt-2 border-top flex-wrap gap-2">
                            <span class="text-muted small">
                                <i class="bi bi-grid-3x3-gap-fill text-muted me-1"></i> <?= $pkg['course_count'] ?> Specialized Modules
                            </span>
                            <a href="<?= $runLink ?>" class="btn btn-sm btn-outline-warning fw-semibold px-3 d-inline-flex align-items-center gap-1" style="color: #ea580c; border-color: #ff7a00;">
                                <span>Open Modules</span>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <div class="text-center p-5 bg-white border rounded-3 shadow-sm">
            <i class="bi bi-box-seam text-muted mb-3" style="font-size: 48px;"></i>
            <h5 class="fw-bold">No Subscribed Packages</h5>
            <p class="text-muted">You are currently not enrolled in any active subscription packages.</p>
        </div>
    <?php endif; ?>
</div>

<!-- SPLIT ACTIVITY SECTION (RECENT LEARNING & ASSESSMENT SUBMISSIONS) -->
<div class="row g-4 mb-4">
    
    <!-- LEFT: RECENT LEARNING ACTIVITY -->
    <div class="col-lg-7">
        <div class="activity-feed-card h-100">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <h5 class="fw-bold text-dark mb-0">Recent Learning Activity</h5>
                    <small class="text-muted">Your latest completed video tutorials and simulations</small>
                </div>
                <i class="bi bi-clock-history text-muted fs-5"></i>
            </div>

            <?php if (!empty($recent_activity)): ?>
                <div class="activity-list">
                    <?php foreach ($recent_activity as $act): ?>
                        <div class="activity-item">
                            <div class="d-flex align-items-center gap-3">
                                <?php if (!empty($act['video_tutorial_id'])): ?>
                                    <div class="avatar avatar-sm rounded-circle bg-light d-flex align-items-center justify-content-center text-primary" style="width: 36px; height: 36px;">
                                        <i class="bi bi-play-circle-fill fs-5"></i>
                                    </div>
                                    <div>
                                        <span class="fw-semibold text-dark d-block" style="font-size: 13.5px;">
                                            <?= esc($act['video_title'] ?: 'Watched Video Lesson') ?>
                                        </span>
                                        <small class="text-muted">
                                            <span class="badge bg-light text-dark border px-1"><?= esc($act['course_name'] ?: 'Video Tutorial') ?></span> &bull; 
                                            <?= date('M d, Y', strtotime($act['created_at'] ?? 'now')) ?>
                                        </small>
                                    </div>
                                <?php else: ?>
                                    <div class="avatar avatar-sm rounded-circle bg-light d-flex align-items-center justify-content-center text-success" style="width: 36px; height: 36px;">
                                        <i class="bi bi-check-circle-fill fs-5"></i>
                                    </div>
                                    <div>
                                        <span class="fw-semibold text-dark d-block" style="font-size: 13.5px;">
                                            <?= esc($act['question_title'] ?: 'Completed Simulation Question') ?>
                                        </span>
                                        <small class="text-muted">
                                            <span class="badge bg-light text-dark border px-1"><?= esc($act['course_name'] ?: 'Simulation') ?></span> &bull; 
                                            <?= date('M d, Y', strtotime($act['created_at'] ?? 'now')) ?>
                                        </small>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <span class="badge bg-success-subtle text-success border border-success-subtle px-2 py-1 small fw-semibold">
                                Completed
                            </span>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="text-center py-5 text-muted">
                    <i class="bi bi-journal-x fs-1 text-muted mb-2 d-block"></i>
                    <span>No recent activity yet. Start your first lesson to see your progress!</span>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- RIGHT: MY ASSESSMENT SUBMISSIONS & RESULTS -->
    <div class="col-lg-5">
        <div class="activity-feed-card h-100">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <h5 class="fw-bold text-dark mb-0">Assessment Submissions</h5>
                    <small class="text-muted">Uploaded answers and evaluation scores</small>
                </div>
                <i class="bi bi-file-earmark-check text-muted fs-5"></i>
            </div>

            <?php if (!empty($assessment_submissions)): ?>
                <div class="activity-list">
                    <?php foreach ($assessment_submissions as $sub): ?>
                        <div class="activity-item">
                            <div class="d-flex align-items-center gap-3">
                                <div class="avatar avatar-sm rounded-circle bg-light d-flex align-items-center justify-content-center text-success" style="width: 36px; height: 36px;">
                                    <i class="bi bi-file-earmark-spreadsheet-fill fs-5"></i>
                                </div>
                                <div>
                                    <span class="fw-semibold text-dark d-block" style="font-size: 13.5px;">
                                        <?= esc($sub['course_name'] ?: 'Course Assessment') ?>
                                    </span>
                                    <small class="text-muted d-block">
                                        <a href="<?= base_url('public/assets/uploads/assessments/' . $sub['answer_file']) ?>" target="_blank" class="text-success text-decoration-none fw-semibold">
                                            <?= esc($sub['answer_file']) ?>
                                        </a>
                                    </small>
                                    <?php if (!empty($sub['remarks'])): ?>
                                        <small class="text-muted fst-italic">"<?= esc($sub['remarks']) ?>"</small>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="text-end">
                                <?php if ($sub['status'] === 'Pending Review'): ?>
                                    <span class="badge bg-warning text-dark px-2 py-1 small fw-semibold">Pending</span>
                                <?php else: ?>
                                    <span class="badge bg-primary px-2 py-1 small fw-semibold"><?= esc($sub['status']) ?></span>
                                <?php endif; ?>
                                <small class="text-muted d-block mt-1" style="font-size: 11px;">
                                    <?= date('M d', strtotime($sub['submitted_at'] ?? 'now')) ?>
                                </small>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="text-center py-5 text-muted">
                    <i class="bi bi-inbox fs-1 text-muted mb-2 d-block"></i>
                    <span>No assessments submitted yet. Upload answers in your course modules.</span>
                </div>
            <?php endif; ?>
        </div>
    </div>

</div>

<?php include('layout/footer.php'); ?>
