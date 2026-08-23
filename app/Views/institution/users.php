<?= $this->extend('institution/layouts/main'); ?>

<?= $this->section('main_content'); ?>

<style>
    /* Screenshot matching styles */
    .assessment-card {
        background: #ffffff;
        border: 1px solid #eef2f6;
        border-radius: 14px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        padding: 28px;
    }

    .main-heading-title {
        font-size: 24px;
        font-weight: 700;
        color: #1e293b;
        letter-spacing: -0.5px;
        line-height: 1.3;
    }

    .btn-top-group {
        display: flex;
        align-items: center;
        gap: 10px;
        flex-wrap: wrap;
    }

    .btn-review-asmt {
        background-color: #43a047;
        border-color: #43a047;
        color: #ffffff;
        font-weight: 600;
        font-size: 14px;
        border-radius: 8px;
        padding: 8px 18px;
        position: relative;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        transition: all 0.2s ease;
    }
    .btn-review-asmt:hover, .btn-review-asmt.active {
        background-color: #2e7d32;
        border-color: #2e7d32;
        color: #ffffff;
    }

    .btn-progress-asmt {
        background-color: #1976d2;
        border-color: #1976d2;
        color: #ffffff;
        font-weight: 600;
        font-size: 14px;
        border-radius: 8px;
        padding: 8px 18px;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        transition: all 0.2s ease;
    }
    .btn-progress-asmt:hover, .btn-progress-asmt.active {
        background-color: #1565c0;
        border-color: #1565c0;
        color: #ffffff;
    }

    .btn-add-student {
        background-color: #1e88e5;
        border-color: #1e88e5;
        color: #ffffff;
        font-weight: 600;
        font-size: 14px;
        border-radius: 8px;
        padding: 8px 18px;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        transition: all 0.2s ease;
    }
    .btn-add-student:hover {
        background-color: #1565c0;
        color: #ffffff;
    }

    .btn-import-student {
        background-color: #1565c0;
        border-color: #1565c0;
        color: #ffffff;
        font-weight: 600;
        font-size: 14px;
        border-radius: 8px;
        padding: 8px 18px;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        transition: all 0.2s ease;
    }
    .btn-import-student:hover {
        background-color: #0d47a1;
        color: #ffffff;
    }

    .badge-counter-float {
        position: absolute;
        top: -6px;
        right: -6px;
        background-color: #e53935;
        color: #ffffff;
        font-size: 11px;
        font-weight: 700;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 2px solid #ffffff;
        box-shadow: 0 2px 4px rgba(0,0,0,0.2);
    }

    /* Table styling */
    .table-assessment {
        width: 100%;
        margin-bottom: 0;
        border-collapse: separate;
        border-spacing: 0;
    }

    .table-assessment th {
        font-size: 14px;
        font-weight: 700;
        color: #0f172a;
        padding: 16px 20px;
        border-top: none;
        border-bottom: 1px solid #e2e8f0;
        background-color: transparent;
    }

    .table-assessment td {
        font-size: 14px;
        color: #1e293b;
        padding: 16px 20px;
        vertical-align: middle;
        border-bottom: 1px solid #f1f5f9;
    }

    .badge-status-pending {
        background-color: #d97706;
        color: #ffffff;
        font-weight: 600;
        font-size: 12.5px;
        padding: 7px 16px;
        border-radius: 6px;
        display: inline-block;
    }

    .badge-status-graded {
        background-color: #2563eb;
        color: #ffffff;
        font-weight: 600;
        font-size: 12.5px;
        padding: 7px 16px;
        border-radius: 6px;
        display: inline-block;
    }

    .btn-grade-action {
        background-color: #2e7d32;
        border-color: #2e7d32;
        color: #ffffff;
        font-weight: 600;
        font-size: 13.5px;
        border-radius: 6px;
        padding: 6px 24px;
        transition: all 0.2s ease;
    }
    .btn-grade-action:hover {
        background-color: #1b5e20;
        color: #ffffff;
    }

    .btn-view-details {
        background-color: #ffffff;
        border: 1px solid #cbd5e1;
        color: #334155;
        font-weight: 600;
        font-size: 13.5px;
        border-radius: 6px;
        padding: 6px 18px;
        transition: all 0.2s ease;
    }
    .btn-view-details:hover {
        background-color: #f8fafc;
        border-color: #94a3b8;
        color: #0f172a;
    }

    .excel-icon-box {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 24px;
        height: 24px;
        background-color: #2e7d32;
        color: #ffffff;
        font-weight: bold;
        font-size: 12px;
        border-radius: 4px;
        margin-right: 8px;
    }
</style>

<div class="row">
    <div class="col-md-12">
        
        <?php if (session()->getFlashdata('msg')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> <?= session()->getFlashdata('msg') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> <?= session()->getFlashdata('error') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>

        <div class="assessment-card">
            
            <!-- TOP BAR MATCHING SCREENSHOT -->
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
                <div>
                    <h3 class="main-heading-title mb-0" id="mainHeaderTitle">
                        Review Student Assessments:<br class="d-none d-md-block"> 
                        <span style="font-weight: 600; font-size: 22px;"><?= !empty($submissions[0]['course_name']) ? esc($submissions[0]['course_name']) : 'GSTR 1 Filing' ?> | Question 1</span>
                    </h3>
                </div>

                <div class="btn-top-group">
                    <!-- Review Assessments Button with Red Badge Counter -->
                    <button type="button" class="btn btn-review-asmt active" id="btnReviewTab" onclick="switchView('reviews')">
                        <i class="anticon anticon-file-text"></i> Review Assessments
                        <?php if (!empty($pending_count) && $pending_count > 0): ?>
                            <span class="badge-counter-float"><?= $pending_count ?></span>
                        <?php else: ?>
                            <span class="badge-counter-float" style="display:none;" id="badgeFloat">0</span>
                        <?php endif; ?>
                    </button>

                    <!-- Progress Button -->
                    <button type="button" class="btn btn-progress-asmt" id="btnProgressTab" onclick="switchView('students')">
                        <i class="anticon anticon-line-chart"></i> Progress
                    </button>

                    <!-- Add Student Button -->
                    <a href="<?= base_url('institution/create-user') ?>" class="btn btn-add-student">
                        Add Student
                    </a>

                    <!-- Import Students Button -->
                    <a href="<?= base_url('institution/add-user') ?>" class="btn btn-import-student">
                        Import Students
                    </a>

                    <!-- Export All Students CSV Button -->
                    <a href="<?= base_url('institution/export-csv') ?>" class="btn btn-outline-primary d-inline-flex align-items-center gap-1 font-weight-semibold" style="border-radius: 8px; padding: 8px 16px; font-size: 14px;">
                        <i class="anticon anticon-download"></i> Export CSV
                    </a>
                </div>
            </div>

            <!-- FILTER & EXPORT BAR -->
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-3 p-3 rounded" style="background-color: #f8fafc; border: 1px solid #e2e8f0;">
                <div class="d-flex align-items-center gap-2 flex-wrap">
                    <label for="packageFilter" class="font-weight-semibold text-muted small mb-0 mr-1">Filter by Package:</label>
                    <select id="packageFilter" class="form-control form-control-sm d-inline-block" style="width: 240px;" onchange="filterByPackage(this.value)">
                        <option value="">-- All Packages --</option>
                        <?php if (!empty($packages)): ?>
                            <?php foreach ($packages as $pkg): ?>
                                <option value="<?= $pkg->PKPackageID ?>"><?= esc($pkg->package_name ?? $pkg->title ?? '') ?></option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </div>
                <div>
                    <a href="<?= base_url('institution/export-csv') ?>" id="btnDownloadFilteredCsv" class="btn btn-sm btn-success d-inline-flex align-items-center gap-1 font-weight-semibold" style="background-color: #2e7d32; border-color: #2e7d32;">
                        <i class="anticon anticon-file-excel"></i> Download Full Student Gradebook (.CSV)
                    </a>
                </div>
            </div>

            <!-- VIEW 1: REVIEWS TABLE (MATCHING SCREENSHOT UI) -->
            <div id="reviewsContainer">
                <div class="table-responsive">
                    <table class="table table-assessment" id="reviewsTable">
                        <thead>
                            <tr>
                                <th style="width: 70px;">ID</th>
                                <th>Student Name</th>
                                <th>Submission Date</th>
                                <th>Submitted File</th>
                                <th>Status</th>
                                <th style="width: 170px;">Review Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($submissions)): ?>
                                <?php $j = 1; foreach ($submissions as $sub): ?>
                                    <tr id="row-submission-<?= $sub['id'] ?>">
                                        <td class="font-weight-bold">#<?= $j++; ?></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-image avatar-md mr-3 rounded-circle d-flex align-items-center justify-content-center text-white" 
                                                     style="width: 38px; height: 38px; background: linear-gradient(135deg, #1e40af, #3b82f6); font-weight: 700; font-size: 14px;">
                                                    <?= strtoupper(substr($sub['first_name'] ?? 'S', 0, 1) . substr($sub['last_name'] ?? '', 0, 1)) ?>
                                                </div>
                                                <span class="font-weight-bold text-dark" style="font-size: 14.5px;">
                                                    <?= esc($sub['first_name'] . ' ' . $sub['last_name']) ?>
                                                </span>
                                            </div>
                                        </td>
                                        <td class="text-muted font-weight-medium">
                                            <?= date('M d, Y', strtotime($sub['submitted_at'] ?? 'now')); ?>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('public/assets/uploads/assessments/' . $sub['answer_file']) ?>" target="_blank" class="d-inline-flex align-items-center text-dark text-decoration-none font-weight-semibold">
                                                <span class="excel-icon-box"><i class="anticon anticon-file-excel"></i></span>
                                                <span style="color: #0f172a; font-size: 14px;"><?= esc($sub['answer_file']) ?></span>
                                            </a>
                                        </td>
                                        <td id="status-badge-<?= $sub['id'] ?>">
                                            <?php if ($sub['status'] === 'Pending Review'): ?>
                                                <span class="badge-status-pending">
                                                    Pending Review
                                                </span>
                                            <?php else: ?>
                                                <span class="badge-status-graded">
                                                    <?= esc($sub['status']) ?>
                                                </span>
                                            <?php endif; ?>
                                        </td>
                                        <td id="action-btn-cell-<?= $sub['id'] ?>">
                                            <?php if ($sub['status'] === 'Pending Review'): ?>
                                                <button type="button" class="btn btn-grade-action" 
                                                        onclick="openGradeModal(<?= $sub['id'] ?>, '<?= esc($sub['first_name'] . ' ' . $sub['last_name']) ?>', '<?= esc($sub['answer_file']) ?>', '<?= esc($sub['score'] ?? '') ?>', '<?= esc($sub['remarks'] ?? '') ?>')">
                                                    Grade
                                                </button>
                                            <?php else: ?>
                                                <button type="button" class="btn btn-view-details" 
                                                        onclick="openGradeModal(<?= $sub['id'] ?>, '<?= esc($sub['first_name'] . ' ' . $sub['last_name']) ?>', '<?= esc($sub['answer_file']) ?>', '<?= esc($sub['score'] ?? '') ?>', '<?= esc($sub['remarks'] ?? '') ?>')">
                                                    View Details
                                                </button>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="6" class="text-center py-5 text-muted">
                                        <i class="anticon anticon-inbox font-size-36 text-muted mb-2 d-block"></i>
                                        No student assessment submissions found for review.
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- VIEW 2: STUDENTS PROGRESS TABLE (ACTIVE WHEN CLICKING PROGRESS) -->
            <div id="studentsContainer" style="display: none;">
                <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
                    <h5 class="font-weight-bold text-dark mb-0">Enrolled Students & Activity</h5>
                    <a href="<?= base_url('institution/export-csv') ?>" class="btn btn-sm btn-outline-primary">
                        <i class="anticon anticon-download mr-1"></i> Export CSV
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover align-middle" id="studentsTable">
                        <thead class="bg-light">
                            <tr>
                                <th style="width: 70px;">ID</th>
                                <th>Student</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Registered</th>
                                <th style="width: 140px;" class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($students)): ?>
                                <?php $i = 1; foreach ($students as $user): ?>
                                    <tr>
                                        <td class="font-weight-bold">#<?= $i++; ?></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-image avatar-sm bg-primary text-white rounded-circle d-flex align-items-center justify-content-center mr-2" style="width: 32px; height: 32px; font-size: 13px; font-weight: bold;">
                                                    <?= strtoupper(substr($user->first_name, 0, 1) . substr($user->last_name, 0, 1)) ?>
                                                </div>
                                                <span class="font-weight-bold text-dark"><?= esc($user->first_name . ' ' . $user->last_name); ?></span>
                                            </div>
                                        </td>
                                        <td class="text-muted"><?= esc($user->email); ?></td>
                                        <td class="text-muted"><?= esc($user->phone ?: 'N/A'); ?></td>
                                        <td class="text-muted"><?= date('M d, Y', strtotime($user->date_registered)); ?></td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-outline-warning view-progress-btn" data-userid="<?= $user->user_id ?>" title="View Activity & Progress">
                                                <i class="anticon anticon-eye"></i>
                                            </button>
                                            <a href="<?= base_url('institution/students/delete_user/' . $user->user_id); ?>" class="btn btn-sm btn-outline-danger ml-1" onclick="return confirm('Are you sure you want to delete this student?');" title="Delete">
                                                <i class="anticon anticon-delete"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="6" class="text-center py-4 text-muted">No students found.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- GRADE / REVIEW MODAL -->
<div class="modal fade" id="gradeModal" tabindex="-1" role="dialog" aria-labelledby="gradeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 12px; overflow: hidden; border: none; box-shadow: 0 10px 30px rgba(0,0,0,0.15);">
            <div class="modal-header bg-light py-3">
                <h5 class="modal-title font-weight-bold text-dark" id="gradeModalLabel">Review Student Assessment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="gradeForm" onsubmit="submitGradeForm(event)">
                <?= csrf_field() ?>
                <input type="hidden" name="submission_id" id="gradeSubmissionId" value="">

                <div class="modal-body p-4">
                    <div class="mb-3">
                        <label class="text-muted small font-weight-bold mb-1">Student:</label>
                        <div class="font-weight-bold text-dark" style="font-size: 16px;" id="gradeStudentName">Student Name</div>
                    </div>

                    <div class="mb-3">
                        <label class="text-muted small font-weight-bold mb-1">Submitted Document:</label>
                        <div>
                            <a href="#" id="gradeFileLink" target="_blank" class="btn btn-sm btn-outline-success d-inline-flex align-items-center gap-1 font-weight-semibold">
                                <i class="anticon anticon-download mr-1"></i> <span id="gradeFileName">Download Answer Document</span>
                            </a>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="gradeScoreInput" class="font-weight-semibold text-dark">Assign Score / Grade <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="score" id="gradeScoreInput" placeholder="e.g. 90/100 or A+" required>
                    </div>

                    <div class="form-group mb-0">
                        <label for="gradeRemarksInput" class="font-weight-semibold text-dark">Instructor Feedback / Remarks</label>
                        <textarea class="form-control" name="remarks" id="gradeRemarksInput" rows="3" placeholder="Add helpful comments or evaluation remarks for the student..."></textarea>
                    </div>
                </div>

                <div class="modal-footer bg-light py-3">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success px-4" id="btnSubmitGrade" style="background-color: #2e7d32; border-color: #2e7d32;">
                        <i class="anticon anticon-check mr-1"></i> Save Grade
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- STUDENT DETAILED PROGRESS MODAL -->
<div class="modal fade" id="progressModal" tabindex="-1" role="dialog" aria-labelledby="progressModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 12px; overflow: hidden;">
            <div class="modal-header bg-light py-3">
                <h5 class="modal-title font-weight-bold text-dark" id="progressModalLabel">Student Learning Progress</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-4" id="progressModalBody">
                <div class="text-center py-5">
                    <div class="spinner-border text-primary" role="status"></div>
                    <br><span class="text-muted mt-2 d-inline-block">Loading progress details...</span>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
function filterByPackage(pkgId) {
    var exportUrl = '<?= base_url("institution/export-csv") ?>';
    if (pkgId) {
        exportUrl += '?package_id=' + pkgId;
    }
    $('#btnDownloadFilteredCsv').attr('href', exportUrl);
}

function switchView(view) {
    if (view === 'reviews') {
        $('#studentsContainer').hide();
        $('#reviewsContainer').show();
        $('#btnReviewTab').addClass('active');
        $('#btnProgressTab').removeClass('active');
    } else {
        $('#reviewsContainer').hide();
        $('#studentsContainer').show();
        $('#btnProgressTab').addClass('active');
        $('#btnReviewTab').removeClass('active');
    }
}

function openGradeModal(subId, studentName, fileName, score, remarks) {
    $('#gradeSubmissionId').val(subId);
    $('#gradeStudentName').text(studentName);
    $('#gradeFileName').text(fileName);
    $('#gradeFileLink').attr('href', '<?= base_url('public/assets/uploads/assessments/') ?>/' + fileName);
    $('#gradeScoreInput').val(score || '');
    $('#gradeRemarksInput').val(remarks || '');
    $('#gradeModal').modal('show');
}

function submitGradeForm(e) {
    e.preventDefault();
    var subId = $('#gradeSubmissionId').val();
    var score = $('#gradeScoreInput').val();
    var remarks = $('#gradeRemarksInput').val();

    $('#btnSubmitGrade').prop('disabled', true).html('<i class="anticon anticon-loading mr-1"></i> Saving...');

    $.ajax({
        url: '<?= base_url("institution/students/grade_assessment") ?>',
        type: 'POST',
        data: {
            submission_id: subId,
            score: score,
            remarks: remarks,
            status: score ? ('Graded: ' + score) : 'Graded'
        },
        dataType: 'json',
        success: function(res) {
            $('#btnSubmitGrade').prop('disabled', false).html('<i class="anticon anticon-check mr-1"></i> Save Grade');
            if (res.status === 'success') {
                $('#gradeModal').modal('hide');
                
                // Update Row UI
                var statusText = score ? ('Graded: ' + score) : 'Graded';
                $('#status-badge-' + subId).html('<span class="badge-status-graded">' + statusText + '</span>');
                $('#action-btn-cell-' + subId).html('<button type="button" class="btn btn-view-details" onclick="openGradeModal(' + subId + ', \'' + $('#gradeStudentName').text() + '\', \'' + $('#gradeFileName').text() + '\', \'' + score + '\', \'' + remarks + '\')">View Details</button>');
            } else {
                alert(res.message || 'Unable to save grade.');
            }
        },
        error: function() {
            $('#btnSubmitGrade').prop('disabled', false).html('<i class="anticon anticon-check mr-1"></i> Save Grade');
            alert('Error connecting to server.');
        }
    });
}

// Student progress modal handler
$(document).ready(function() {
    $(document).on('click', '.view-progress-btn', function() {
        var userId = $(this).data('userid');
        $('#progressModal').modal('show');
        $('#progressModalBody').html('<div class="text-center py-5"><div class="spinner-border text-primary" role="status"></div><br><span class="text-muted mt-2 d-inline-block">Loading progress details...</span></div>');

        $.ajax({
            url: '<?= base_url("institution/students/progress") ?>/' + userId,
            type: 'GET',
            success: function(res) {
                $('#progressModalBody').html(res);
            },
            error: function() {
                $('#progressModalBody').html('<div class="alert alert-danger">Unable to load progress.</div>');
            }
        });
    });
});
</script>

<?= $this->endSection(); ?>
