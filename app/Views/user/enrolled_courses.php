<?php include('layout/header.php'); ?>

<div class="row" style="padding-top: 30px;">
    <!-- Welcome Text -->
    <h2 class="fw-bold mb-1">
        Welcome back, <?php if (isset($user_info['first_name']) && isset($user_info['last_name'])) echo $user_info['first_name'] . ' ' . $user_info['last_name']; ?>! 👋
    </h2>
    <p class="text-muted mb-0">
        Continue your learning journey and master accounting simulations
    </p>
</div>

<!-- ENROLLED COURSES SECTION -->
<div class="sim-table-wrapper mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="mb-0 fw-bold">Enrolled Courses / Topics</h4>
        <a href="#" class="text-decoration-none fw-semibold" style="color: #ff7a00; font-size: 14px;">View all</a>
    </div>

    <!-- Alert Message if any -->
    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
            <?= session()->getFlashdata('error') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <div class="d-flex flex-column gap-3">
        <?php if (!empty($courses)): 
            // Theme mapping for course categories
            $themes = [
                1 => ['icon' => 'bi-file-earmark-spreadsheet-fill', 'color' => '#198754', 'bg' => '#e8f5e9'], // Gstr1 (Green)
                2 => ['icon' => 'bi-file-earmark-text-fill', 'color' => '#ff9800', 'bg' => '#fff3e0'],        // Gstr3B (Orange)
                3 => ['icon' => 'bi-percent', 'color' => '#0d6efd', 'bg' => '#e3f2fd'],                 // TDS (Blue)
                8 => ['icon' => 'bi-truck', 'color' => '#0dcaf0', 'bg' => '#e0f7fa'],                   // Eway Bill (Cyan)
                9 => ['icon' => 'bi-building-fill', 'color' => '#6f42c1', 'bg' => '#f3e5f5'],                // ESI (Purple)
                10 => ['icon' => 'bi-safe2-fill', 'color' => '#e91e63', 'bg' => '#fce4ec'],                 // PF (Pink)
                11 => ['icon' => 'bi-receipt-cutoff', 'color' => '#fd7e14', 'bg' => '#fff3e0'],             // VAT (Dark Orange)
                12 => ['icon' => 'bi-calculator-fill', 'color' => '#20c997', 'bg' => '#e0f2f1'],            // ACCOUNTING (Teal)
            ];

            foreach ($courses as $course):
                $cId = $course['course_id'];
                // Fallback theme if not in mapping
                $theme = isset($themes[$cId]) ? $themes[$cId] : ['icon' => 'bi-mortarboard-fill', 'color' => '#666666', 'bg' => '#eeeeee'];
                $runLink = base_url('user/course-lessons/' . $cId);
        ?>
            <!-- Course Row Item Card -->
            <a href="<?= $runLink; ?>" class="text-decoration-none text-dark">
                <div class="course-card-item p-4 bg-white rounded-3 border d-flex align-items-center justify-content-between shadow-sm position-relative overflow-hidden">
                    <div class="d-flex align-items-center gap-3 flex-grow-1">
                        <!-- Round Icon Wrapper -->
                        <div class="course-icon-wrap rounded-circle d-flex align-items-center justify-content-center" 
                             style="width: 54px; height: 54px; background-color: <?= $theme['bg'] ?>; color: <?= $theme['color'] ?>;">
                            <i class="bi <?= $theme['icon'] ?> fs-4"></i>
                        </div>

                        <!-- Info & Progress Section -->
                        <div class="flex-grow-1 pe-4">
                            <h5 class="fw-bold mb-1" style="font-size: 17px;"><?= $course['course_name'] ?></h5>
                            
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="text-muted fw-semibold" style="font-size: 13px;">Progress <?= $course['progress'] ?>%</span>
                                <span class="text-muted" style="font-size: 12px;"><?= $course['total_videos'] ?> Lessons &amp; <?= $course['total_questions'] ?> Simulations</span>
                            </div>

                            <!-- Progress Bar Container -->
                            <div class="progress" style="height: 8px; background-color: #f0f2f5; border-radius: 4px;">
                                <div class="progress-bar" role="progressbar" 
                                     style="width: <?= $course['progress'] ?>%; background-color: <?= $theme['color'] ?>; border-radius: 4px;" 
                                     aria-valuenow="<?= $course['progress'] ?>" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Chevron Icon -->
                    <div class="text-muted ps-2">
                        <i class="bi bi-chevron-right fs-4"></i>
                    </div>
                </div>
            </a>
        <?php endforeach; else: ?>
            <!-- empty state -->
            <div class="text-center p-5 bg-white border rounded-3 shadow-sm">
                <i class="bi bi-mortarboard text-muted mb-3" style="font-size: 48px;"></i>
                <h5 class="fw-bold">No Enrolled Courses Found</h5>
                <p class="text-muted">You are currently not subscribed to any active package courses. Please check your Subscription page to buy courses.</p>
                <a href="<?= base_url('user/packages'); ?>" class="btn filter-btn mt-2">View Packages</a>
            </div>
        <?php endif; ?>
    </div>
</div>

<style>
    /* Styling for premium micro-animations */
    .course-card-item {
        transition: transform 0.2s ease, box-shadow 0.2s ease, border-color 0.2s ease;
        border-color: #eaeaea !important;
        cursor: pointer;
    }

    .course-card-item:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.06) !important;
        border-color: #ff9800 !important;
    }
    
    .course-icon-wrap {
        transition: transform 0.3s ease;
    }
    
    .course-card-item:hover .course-icon-wrap {
        transform: scale(1.05);
    }
</style>

<?php include('layout/footer.php'); ?>
