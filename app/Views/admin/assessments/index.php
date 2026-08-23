<?= $this->extend('admin/layouts/main2'); ?>

<?= $this->section('main_content'); ?>
<div class="page-header">
    <h2 class="header-title">Assessments</h2>
    <div class="header-sub-title">
        <nav class="breadcrumb breadcrumb-dash">
            <a href="<?= base_url('admin/dashboard') ?>" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
            <span class="breadcrumb-item active">Assessments</span>
        </nav>
    </div>
</div>

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

<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="mb-0">All Assessments</h4>
            <button type="button" class="btn btn-primary" onclick="openAddModal()">
                <i class="anticon anticon-plus m-r-5"></i> Add New
            </button>
        </div>

        <div class="table-responsive m-t-20">
            <table class="table table-hover" id="assessmentsTable">
                <thead>
                    <tr>
                        <th style="width: 60px;">#</th>
                        <th>Category</th>
                        <th>Company</th>
                        <th>Question Preview</th>
                        <th>Created At</th>
                        <th style="width: 140px;" class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($assessments)): ?>
                        <?php $i = 1; foreach ($assessments as $item): ?>
                            <tr>
                                <td>#<?= $i++ ?></td>
                                <td>
                                    <span class="badge badge-pill badge-blue font-size-12">
                                        <?= esc($item['course_name'] ?: 'N/A') ?>
                                    </span>
                                </td>
                                <td>
                                    <strong><?= esc($item['company_name'] ?: 'N/A') ?></strong>
                                </td>
                                <td>
                                    <div class="text-truncate" style="max-width: 380px;">
                                        <?= strip_tags($item['question']) ?>
                                    </div>
                                </td>
                                <td><?= date('d M Y, h:i A', strtotime($item['created_at'] ?: 'now')) ?></td>
                                <td class="text-center">
                                    <button class="btn btn-icon btn-hover btn-sm btn-rounded text-primary" onclick="openEditModal(<?= $item['id'] ?>)" title="Edit">
                                        <i class="anticon anticon-edit"></i>
                                    </button>
                                    <a href="<?= base_url('admin/assessments/delete/' . $item['id']) ?>" class="btn btn-icon btn-hover btn-sm btn-rounded text-danger" onclick="return confirm('Are you sure you want to delete this assessment?');" title="Delete">
                                        <i class="anticon anticon-delete"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- ADD / EDIT ASSESSMENT MODAL -->
<div class="modal fade" id="assessmentModal" tabindex="-1" role="dialog" aria-labelledby="assessmentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="<?= base_url('admin/assessments/save') ?>" method="POST" enctype="multipart/form-data" id="assessmentForm">
                <?= csrf_field() ?>
                <input type="hidden" name="assessment_id" id="assessment_id" value="">

                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold" id="assessmentModalLabel">Add New Assessment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="form-row">
                        <!-- Category Dropdown with Search -->
                        <div class="form-group col-md-6">
                            <label for="course_id" class="font-weight-semibold">Select Category <span class="text-danger">*</span></label>
                            <select name="course_id" id="course_id" class="form-control select2-searchable" data-placeholder="-- Search Category --" required style="width: 100%;">
                                <option value=""></option>
                                <?php if (!empty($courses)): ?>
                                    <?php foreach ($courses as $c): ?>
                                        <option value="<?= $c['course_id'] ?>"><?= esc($c['course_name']) ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>

                        <!-- Company Dropdown with Search -->
                        <div class="form-group col-md-6">
                            <label for="company_id" class="font-weight-semibold">Select Company <span class="text-danger">*</span></label>
                            <select name="company_id" id="company_id" class="form-control select2-searchable" data-placeholder="-- Search Company --" required style="width: 100%;">
                                <option value=""></option>
                                <?php if (!empty($companies)): ?>
                                    <?php foreach ($companies as $comp): ?>
                                        <option value="<?= $comp['company_id'] ?>"><?= esc($comp['name']) ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>

                    <!-- Title (Optional) -->
                    <div class="form-group">
                        <label for="title" class="font-weight-semibold">Assessment Title / Heading</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="e.g. GSTR 1 Filing Assessment: Question 1">
                    </div>

                    <!-- Question with HTML Editor -->
                    <div class="form-group">
                        <label for="questionEditor" class="font-weight-semibold">Question <span class="text-danger">*</span></label>
                        <div id="summernoteContainer">
                            <textarea name="question" id="questionEditor" class="form-control" rows="6" required></textarea>
                        </div>
                        <small class="text-muted">Use the rich editor toolbar above to format text, bold/italic, lists, tables, etc.</small>
                    </div>

                    <!-- Optional Attachment File -->
                    <div class="form-group mb-0">
                        <label for="download_file" class="font-weight-semibold">Attach Sample / Problem File (Optional)</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="download_file" name="download_file">
                            <label class="custom-file-label" for="download_file">Choose file (.xlsx, .pdf, .zip, etc.)</label>
                        </div>
                        <div id="currentFileDisplay" class="mt-2 text-info small" style="display: none;"></div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" id="btnSaveAssessment">
                        <i class="anticon anticon-save m-r-5"></i> Save Assessment
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('page_js'); ?>
<!-- Include Select2 & Summernote CSS/JS for Searchable Dropdowns and Rich HTML Editor -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

<style>
/* Select2 Bootstrap Modern Theme Styling */
.select2-container--default .select2-selection--single {
    height: 40px !important;
    border: 1px solid #cbd5e1 !important;
    border-radius: 8px !important;
    padding: 6px 12px !important;
    display: flex !important;
    align-items: center !important;
    background-color: #ffffff !important;
}
.select2-container--default .select2-selection--single .select2-selection__rendered {
    line-height: 26px !important;
    color: #1e293b !important;
    padding-left: 0 !important;
    font-size: 13.5px !important;
}
.select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 38px !important;
    right: 8px !important;
}
.select2-dropdown {
    border: 1px solid #cbd5e1 !important;
    border-radius: 8px !important;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1) !important;
    overflow: hidden !important;
    z-index: 1060 !important;
}
.select2-container--default .select2-search--dropdown {
    padding: 8px !important;
}
.select2-container--default .select2-search--dropdown .select2-search__field {
    border: 1px solid #cbd5e1 !important;
    border-radius: 6px !important;
    padding: 6px 10px !important;
    font-size: 13px !important;
    outline: none !important;
}
.select2-container--default .select2-results__option--highlighted[aria-selected] {
    background-color: #2563eb !important;
    color: #ffffff !important;
}
.select2-results__option {
    padding: 8px 12px !important;
    font-size: 13.5px !important;
}
</style>

<script>
$(document).ready(function() {
    // Initialize DataTables
    if ($.fn.DataTable && !$.fn.DataTable.isDataTable('#assessmentsTable')) {
        $('#assessmentsTable').DataTable({
            "order": [[0, "asc"]],
            "pageLength": 10
        });
    }

    // Initialize Select2 Searchable Dropdowns
    if ($.fn.select2) {
        $('.select2-searchable').select2({
            dropdownParent: $('#assessmentModal'),
            width: '100%',
            allowClear: true,
            placeholder: function() {
                return $(this).data('placeholder');
            }
        });
    }

    // Initialize Summernote HTML Editor
    if ($.fn.summernote) {
        $('#questionEditor').summernote({
            placeholder: 'Enter detailed assessment question, instructions, and requirements here...',
            tabsize: 2,
            height: 220,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'italic', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    }

    // Display file name in custom-file input
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName || 'Choose file');
    });
});

function openAddModal() {
    $('#assessmentModalLabel').text('Add New Assessment');
    $('#assessment_id').val('');
    $('#course_id').val('').trigger('change');
    $('#company_id').val('').trigger('change');
    $('#title').val('');
    if ($.fn.summernote) {
        $('#questionEditor').summernote('code', '');
    } else {
        $('#questionEditor').val('');
    }
    $('#download_file').val('');
    $('.custom-file-label').text('Choose file');
    $('#currentFileDisplay').hide().html('');
    $('#assessmentModal').modal('show');
}

function openEditModal(id) {
    $('#assessmentModalLabel').text('Edit Assessment');
    $('#assessment_id').val(id);

    // Fetch assessment data via AJAX
    $.ajax({
        url: '<?= base_url("admin/assessments/get") ?>/' + id,
        type: 'GET',
        dataType: 'json',
        success: function(res) {
            if (res.status === 'success') {
                var d = res.data;
                $('#course_id').val(d.course_id).trigger('change');
                $('#company_id').val(d.company_id).trigger('change');
                $('#title').val(d.title);
                if ($.fn.summernote) {
                    $('#questionEditor').summernote('code', d.question);
                } else {
                    $('#questionEditor').val(d.question);
                }
                
                if (d.download_file) {
                    $('#currentFileDisplay').html('<strong>Current File:</strong> ' + d.download_file).show();
                } else {
                    $('#currentFileDisplay').hide().html('');
                }

                $('#assessmentModal').modal('show');
            } else {
                alert(res.message || 'Unable to load assessment details.');
            }
        },
        error: function() {
            alert('Error connecting to server.');
        }
    });
}
</script>
<?= $this->endSection(); ?>
