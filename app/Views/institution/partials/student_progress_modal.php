<?php if (empty($packages_data)): ?>
    <div class="alert alert-warning">
        No active packages or modules found for this student.
    </div>
<?php else: ?>

    <div class="mb-4">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <h6 class="fw-bold text-dark mb-0">Overall Progress Summary</h6>
            <?php
                // Build Export URL depending on segment (admin or institution)
                $uri = service('uri');
                $segment = $uri->getSegment(1);
                $userIdSegment = $uri->getSegment(3); // Assuming URL is admin/users/progress/{user_id} or something similar, actually let's pass $user_id from controller or use segment
                // To be safe, we should pass user_id to the view from the controller.
            ?>
            <?php if(isset($user_id)): ?>
                <a href="<?= base_url($segment.'/export-student-progress/'.$user_id) ?>" target="_blank" class="btn btn-sm btn-success">
                    <i class="anticon anticon-file-excel me-1"></i> Export Excel
                </a>
            <?php endif; ?>
        </div>
        <p class="mb-1 text-muted">
            <small>
                Total Completion: 
                <strong><?= $overall_progress ?>%</strong> 
                (<?= $total_attempted ?> / <?= $total_items ?> items across all packages)
            </small>
        </p>
        <div class="progress mt-2" style="height: 10px;">
            <div class="progress-bar bg-success" role="progressbar" style="width: <?= $overall_progress ?>%;" aria-valuenow="<?= $overall_progress ?>" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
    
    <hr>

    <div class="accordion pr-1" id="packagesAccordion" style="max-height: 450px; overflow-y: auto; overflow-x: hidden;">
        <?php foreach ($packages_data as $index => $package): ?>
            <?php $collapseId = 'collapsePackage' . $index; ?>
            <div class="card mb-2 shadow-sm border">
                <div class="card-header bg-light p-0" id="heading<?= $index ?>">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left text-dark fw-bold text-decoration-none <?= $index > 0 ? 'collapsed' : '' ?>" type="button" data-toggle="collapse" data-target="#<?= $collapseId ?>" aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>" aria-controls="<?= $collapseId ?>" style="padding: 12px 15px;">
                            <i class="anticon anticon-folder-open me-2 text-primary"></i> <?= esc($package['package_name']) ?>
                            <i class="anticon anticon-down float-right mt-1 text-muted" style="font-size: 0.8rem;"></i>
                        </button>
                    </h2>
                </div>

                <div id="<?= $collapseId ?>" class="collapse <?= $index === 0 ? 'show' : '' ?>" aria-labelledby="heading<?= $index ?>" data-parent="#packagesAccordion">
                    <div class="card-body p-0">
                        <div class="list-group list-group-flush">
                            <?php if (empty($package['courses'])): ?>
                                <div class="list-group-item text-muted"><small>No modules found in this package.</small></div>
                            <?php else: ?>
                                <?php foreach ($package['courses'] as $course): ?>
                                    <div class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between align-items-center">
                                            <h6 class="mb-1 text-dark fw-bold"><?= esc($course['title']) ?></h6>
                                            <small class="badge bg-<?= $course['progress'] == 100 ? 'success' : ($course['progress'] > 0 ? 'info' : 'secondary') ?> rounded-pill text-white" style="color: white !important;">
                                                <?= $course['progress'] ?>%
                                            </small>
                                        </div>
                                        <div class="mt-2 text-muted" style="font-size: 0.85rem;">
                                            <div class="row">
                                                <div class="col-6">
                                                    Total Items: <strong><?= $course['total_items'] ?></strong><br>
                                                    Completed: <strong><?= $course['completed_count'] ?></strong><br>
                                                    Remaining: <strong><?= $course['total_items'] - $course['completed_count'] ?></strong>
                                                </div>
                                                <div class="col-6 text-right" style="text-align: right;">
                                                    <small class="text-muted">
                                                        Videos: <?= $course['completed_videos'] ?>/<?= $course['total_videos'] ?><br>
                                                        Questions: <?= $course['completed_questions'] ?>/<?= $course['total_questions'] ?>
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress mt-2" style="height: 6px;">
                                            <div class="progress-bar bg-<?= $course['progress'] == 100 ? 'success' : 'info' ?>" role="progressbar" style="width: <?= $course['progress'] ?>%;" aria-valuenow="<?= $course['progress'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

<?php endif; ?>
