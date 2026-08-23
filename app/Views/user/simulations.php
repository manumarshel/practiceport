<?php include('layout/header.php'); ?>

<div class="row pt-2 mb-3">
    <div class="col-12">
        <h2 class="fw-bold mb-1 text-dark">Simulations</h2>
    </div>
</div>

<!-- ENROLLED COURSES SECTION -->
<div class="sim-table-wrapper p-4 bg-white border rounded-3 shadow-sm mb-4" style="border-radius: 16px;">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="mb-0 fw-bold text-dark" style="font-size: 19px;">Enrolled Courses</h4>
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
                $runLink = base_url('user/package-courses/' . $pId);
        ?>
            <!-- Package Row Item Card matching screenshot -->
            <a href="<?= $runLink; ?>" class="text-decoration-none text-dark">
                <div class="course-card-item p-4 bg-white rounded-3 border d-flex align-items-center justify-content-between shadow-sm position-relative overflow-hidden" 
                     style="border: 1px solid #e2e8f0; border-radius: 12px; transition: all 0.2s ease;">
                    <div class="d-flex align-items-center gap-3 flex-grow-1">
                        <!-- Info Section -->
                        <div class="flex-grow-1 pe-4">
                            <h5 class="fw-bold mb-1 text-dark" style="font-size: 16.5px; letter-spacing: 0.3px;">
                                <?= htmlspecialchars(strtoupper($package['package_name'])) ?>
                            </h5>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="text-muted" style="font-size: 13.5px;">Click to view Modules</span>
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
                <p class="text-muted">You are currently not subscribed to any active simulation packages. Please check your Subscription page.</p>
                <a href="<?= base_url('user/packages'); ?>" class="btn btn-warning text-white fw-semibold mt-2" style="background-color: #ff7a00; border-color: #ff7a00;">View Packages</a>
            </div>
        <?php endif; ?>
    </div>
</div>

<style>
    .course-card-item {
        transition: transform 0.2s ease, box-shadow 0.2s ease, border-color 0.2s ease;
        border-color: #e2e8f0 !important;
        cursor: pointer;
    }
    .course-card-item:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.06) !important;
        border-color: #ff7a00 !important;
    }
</style>

<?php include('layout/footer.php'); ?>
