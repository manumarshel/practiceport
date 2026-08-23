<?php include('layout/header.php'); ?>

<?php if (!isset($hide_welcome) || !$hide_welcome): ?>
<div class="row" style="padding-top: 30px;">
    <!-- Welcome Text -->
    <h2 class="fw-bold mb-1">
        Welcome back, <?php if (isset($user_info['first_name']) && isset($user_info['last_name'])) echo $user_info['first_name'] . ' ' . $user_info['last_name']; ?>! 👋
    </h2>
    <p class="text-muted mb-0">
        Continue your learning journey and master accounting simulations
    </p>
</div>
<?php else: ?>
<div class="row" style="padding-top: 30px;">
    <h2 class="fw-bold mb-1">Simulations</h2>
</div>
<?php endif; ?>

<!-- ENROLLED COURSES SECTION -->
<div class="sim-table-wrapper mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="mb-0 fw-bold">Enrolled Courses </h4>
        <!-- <a href="#" class="text-decoration-none fw-semibold" style="color: #ff7a00; font-size: 14px;">View all</a> -->
    </div>

    <!-- Alert Message if any -->
    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
            <?= session()->getFlashdata('error') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <div class="d-flex flex-column gap-3">
        <?php if (!empty($packages)): 
            foreach ($packages as $package):
                $pId = $package['package_id'];
                // Use a default theme for packages, or cycle through colors if needed
                $theme = ['icon' => 'bi-box-seam', 'color' => '#6f42c1', 'bg' => '#f3e5f5'];
                $runLink = base_url('user/package-courses/' . $pId);
        ?>
            <!-- Package Row Item Card -->
            <a href="<?= $runLink; ?>" class="text-decoration-none text-dark">
                <div class="course-card-item p-4 bg-white rounded-3 border d-flex align-items-center justify-content-between shadow-sm position-relative overflow-hidden">
                    <div class="d-flex align-items-center gap-3 flex-grow-1">
                        <!-- Round Icon Wrapper -->
                       <!--  <div class="course-icon-wrap rounded-circle d-flex align-items-center justify-content-center" 
                             style="width: 54px; height: 54px; background-color: <?= $theme['bg'] ?>; color: <?= $theme['color'] ?>;">
                             <i class="bi <?= $theme['icon'] ?> fs-4"></i>
                        </div> -->

                        <!-- Info Section -->
                        <div class="flex-grow-1 pe-4">
                            <h5 class="fw-bold mb-1" style="font-size: 17px; text-transform: uppercase;">
                                <?= htmlspecialchars(strtoupper($package['package_name'])) ?>
                            </h5>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="text-muted" style="font-size: 13px;">Click to view Modules</span>
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
                <i class="bi bi-box-seam text-muted mb-3" style="font-size: 48px;"></i>
                <h5 class="fw-bold">No Subscribed Packages Found</h5>
                <p class="text-muted">You are currently not subscribed to any active packages. Please check your Subscription page to buy a package.</p>
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
