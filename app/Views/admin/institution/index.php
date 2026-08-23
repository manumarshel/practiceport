<?= $this->extend('admin/layouts/main2'); ?>

<?= $this->section('main_content'); ?>

<div class="row">
    <div class="col-md-12">
        <!-- PAGE TITLE BAR -->
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
            <div>
                <h3 class="font-weight-bold text-dark mb-1" style="font-size: 22px;">Partner Institutions (B2B)</h3>
                <p class="text-muted mb-0" style="font-size: 13.5px;">Manage affiliated colleges, license allocations, and access status.</p>
            </div>
            <div class="d-flex align-items-center gap-2">
                <button type="button" class="btn btn-primary d-inline-flex align-items-center gap-1 font-weight-semibold shadow-sm" style="background: linear-gradient(135deg, #1d4ed8, #3b82f6); border: none; border-radius: 8px; padding: 8px 18px;" onclick="resetForm();" data-toggle="modal" data-target="#AddnewModal">
                    <i class="anticon anticon-plus mr-1"></i> Add Institution
                </button>
            </div>
        </div>

        <?php if (session('msg')) : ?>
            <div class="alert alert-info alert-dismissible fade show mb-4" role="alert">
                <i class="anticon anticon-info-circle mr-1"></i> <?= session('msg') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif ?>

        <div class="admin-table-card">
            <div class="card-body p-4">
                <div class="table-responsive-fixed">
                    <table class="table table-hover align-middle mb-0" id="data-table">
                        <thead>
                            <tr>
                                <th style="width: 50px;">ID</th>
                                <th>Institution</th>
                                <th>Contact Info</th>
                                <th>Assigned B2B Package</th>
                                <th class="text-center" style="width: 110px;">Status</th>
                                <th class="text-right pr-3" style="width: 140px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($instututions)): ?>
                                <?php $ii = 1; foreach ($instututions as $inst): ?>
                                    <tr>
                                        <td class="font-weight-bold text-muted">#<?= $ii++; ?></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-image mr-3" style="width: 40px; height: 40px; border-radius: 10px; background: #eff6ff; border: 1px solid #dbeafe; display: flex; align-items: center; justify-content: center; font-weight: bold; color: #1d4ed8;">
                                                    <?php if (!empty($inst->logo) && file_exists('uploads/institutions/' . $inst->logo)): ?>
                                                        <img src="<?= base_url('uploads/institutions/' . $inst->logo) ?>" alt="<?= esc($inst->title) ?>" style="width: 100%; height: 100%; object-fit: contain; border-radius: 10px;">
                                                    <?php else: ?>
                                                        <?= strtoupper(substr($inst->title, 0, 2)) ?>
                                                    <?php endif; ?>
                                                </div>
                                                <div>
                                                    <span class="font-weight-bold text-dark d-block" style="font-size: 14px;"><?= esc($inst->title); ?></span>
                                                    <small class="text-muted"><i class="anticon anticon-environment mr-1"></i><?= esc($inst->location ?: 'Location N/A') ?></small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="font-weight-medium text-dark"><?= esc($inst->email); ?></div>
                                            <small class="text-muted"><i class="anticon anticon-phone mr-1"></i><?= esc($inst->mobile ?: 'N/A'); ?></small>
                                        </td>
                                        <td>
                                            <?php if (!empty($inst->PKInstitutionPackageID)): ?>
                                                <div class="p-2 rounded border" style="background: #f8fafc; font-size: 12.5px;">
                                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                                        <strong class="text-dark"><?= esc($inst->package_title) ?></strong>
                                                        <span class="badge badge-pill badge-info font-size-11">
                                                            <?= $inst->max_students ?> Seats
                                                        </span>
                                                    </div>
                                                    <div class="text-muted small mb-1.5">
                                                        <i class="anticon anticon-calendar mr-1"></i> <?= date('d M Y', strtotime($inst->start_date)) ?> - <?= date('d M Y', strtotime($inst->end_date)) ?>
                                                    </div>
                                                    
                                                    <?php $daysLeft = (strtotime($inst->end_date) - time()) / 86400; ?>
                                                    <?php if ($daysLeft > 0): ?>
                                                        <span class="badge badge-soft-success font-size-11"><?= floor($daysLeft) ?> days left</span>
                                                    <?php else: ?>
                                                        <span class="badge badge-soft-danger font-size-11">Expired</span>
                                                    <?php endif; ?>

                                                    <div class="d-flex align-items-center gap-1 mt-2">
                                                        <button class="btn btn-xs btn-warning text-dark font-weight-bold px-2 py-0.5" style="border-radius: 4px; font-size: 11px;" onclick="renewPackage(<?= $inst->PKInstitutionPackageID ?>)" title="Renew Package">
                                                            <i class="anticon anticon-sync"></i> Renew
                                                        </button>
                                                        <button class="btn btn-xs btn-danger text-white font-weight-bold px-2 py-0.5 ml-1" style="border-radius: 4px; font-size: 11px;" onclick="deleteAssignedPackage(<?= $inst->PKInstitutionPackageID ?>)" title="Remove this assigned package">
                                                            <i class="anticon anticon-close-circle"></i> Remove Package
                                                        </button>
                                                    </div>
                                                </div>
                                            <?php else: ?>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="text-muted small fst-italic">No Package Assigned</span>
                                                    <button class="btn btn-xs btn-outline-primary px-2 py-0.5 ml-2" style="font-size: 11px; border-radius: 4px;" onclick="openAssignModal(<?= $inst->PKInstitutionID ?>)">
                                                        <i class="anticon anticon-plus"></i> Assign
                                                    </button>
                                                </div>
                                            <?php endif; ?>
                                        </td>
                                        <td class="text-center">
                                            <?php if (intval($inst->status) === 1): ?>
                                                <span class="badge badge-pill badge-success font-weight-bold px-2.5 py-1">
                                                    <i class="anticon anticon-check-circle mr-1"></i> Active
                                                </span>
                                            <?php else: ?>
                                                <span class="badge badge-pill badge-danger font-weight-bold px-2.5 py-1" style="background-color: #ef4444;">
                                                    <i class="anticon anticon-stop mr-1"></i> Deactivated
                                                </span>
                                            <?php endif; ?>
                                        </td>
                                        <td class="text-right pr-3">
                                            <div class="d-flex align-items-center justify-content-end">
                                                <button class="btn-action-icon btn-action-edit mr-1" onclick="editInstitution(
                                                    <?= $inst->PKInstitutionID ?>,
                                                    '<?= esc($inst->title, 'js') ?>',
                                                    '<?= esc($inst->email, 'js') ?>',
                                                    '<?= esc($inst->mobile, 'js') ?>',
                                                    '<?= esc($inst->location, 'js') ?>',
                                                    '<?= esc($inst->logo, 'js') ?>'
                                                )" title="Edit Institution Details">
                                                    <i class="anticon anticon-edit"></i>
                                                </button>
                                                
                                                <button class="btn-action-icon text-warning mr-1" style="background: #fef3c7;" onclick="openResetPasswordModal(<?= $inst->PKInstitutionID ?>, '<?= esc($inst->title, 'js') ?>', '<?= esc($inst->email, 'js') ?>')" title="Reset Password">
                                                    <i class="anticon anticon-key"></i>
                                                </button>

                                                <div class="dropdown dropdown-animated scale-left">
                                                    <a class="btn-action-icon text-gray" href="javascript:void(0);" data-toggle="dropdown" title="More Options">
                                                        <i class="anticon anticon-ellipsis"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a href="javascript:void(0)" class="dropdown-item" onclick="openAssignModal(<?= $inst->PKInstitutionID ?>)">
                                                            <i class="anticon anticon-plus"></i>
                                                            <span class="m-l-10">Assign Package</span>
                                                        </a>

                                                        <?php if (intval($inst->status) === 1): ?>
                                                            <a href="javascript:void(0)" class="dropdown-item text-warning" onclick="toggleInstitutionStatus(<?= $inst->PKInstitutionID ?>, 'deactivate', '<?= esc($inst->title, 'js') ?>')">
                                                                <i class="anticon anticon-pause-circle"></i>
                                                                <span class="m-l-10">Temporarily Deactivate</span>
                                                            </a>
                                                        <?php else: ?>
                                                            <a href="javascript:void(0)" class="dropdown-item text-success" onclick="toggleInstitutionStatus(<?= $inst->PKInstitutionID ?>, 'activate', '<?= esc($inst->title, 'js') ?>')">
                                                                <i class="anticon anticon-play-circle"></i>
                                                                <span class="m-l-10">Activate Institution</span>
                                                            </a>
                                                        <?php endif; ?>

                                                        <?php if (empty($inst->PKInstitutionPackageID)): ?>
                                                            <div class="dropdown-divider"></div>
                                                            <a href="javascript:void(0)" class="dropdown-item text-danger" onclick="deleteInstitution(<?= $inst->PKInstitutionID ?>)">
                                                                <i class="anticon anticon-delete"></i>
                                                                <span class="m-l-10">Delete Institution</span>
                                                            </a>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="6" class="text-center py-5 text-muted">No institutions registered yet.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ASSIGN PACKAGE MODAL -->
<div class="modal fade" id="assignPackageModal" tabindex="-1">
    <div class="modal-dialog">
        <form method="post" action="<?= base_url('admin/assign_package') ?>" class="modal-content">
            <?= csrf_field() ?>
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold">Assign B2B Package</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <i class="anticon anticon-close"></i>
                </button>
            </div>

            <div class="modal-body">
                <input type="hidden" name="institution_id" id="institution_id">
                <div class="form-group">
                    <label class="font-weight-bold">Select Package Template</label>
                    <select name="package_id" class="form-control" required>
                        <?php foreach ($packages as $p): ?>
                            <option value="<?= $p['PKPackageID'] ?>">
                                <?= esc(!empty($p['custom_title']) ? $p['custom_title'] : $p['title']) ?> |
                                <?= $p['duration'] ?> months |
                                <?= $p['license_number'] ?> students
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Assign Package</button>
            </div>
        </form>
    </div>
</div>

<!-- ADD / EDIT INSTITUTION MODAL -->
<div class="modal fade" id="AddnewModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Add New Institution</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <i class="anticon anticon-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/add') ?>" method="post" enctype="multipart/form-data" id="create_package_form">
                    <?= csrf_field() ?>
                    <input type="hidden" name="id" id="edit_id">
                    <input type="hidden" name="old_logo" id="old_logo">

                    <div class="form-group">
                        <label class="font-weight-bold">Institution Name / Title</label>
                        <input name="title" id="title" type="text" class="form-control" placeholder="e.g. Cambridge Business School" required>
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Official Email (Login ID)</label>
                        <input name="email" id="email" type="email" class="form-control" placeholder="e.g. admin@college.edu" required>
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Mobile / Phone</label>
                        <input name="mobile" id="mobile" type="text" class="form-control" placeholder="e.g. +91 9876543210" required>
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Campus Location / Address</label>
                        <input name="location" id="location" type="text" class="form-control" placeholder="e.g. Mumbai, Maharashtra">
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Institution Logo</label>
                        <input name="logo" id="logo" type="file" class="form-control-file">
                        <div id="logo_preview" class="mt-2"></div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" id="action_btn" onclick="submitForm();" class="btn btn-primary">Add Now</button>
            </div>
        </div>
    </div>
</div>

<!-- RESET INSTITUTION PASSWORD MODAL -->
<div class="modal fade" id="resetInstPasswordModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form id="resetInstPasswordForm">
                <?= csrf_field() ?>
                <input type="hidden" name="institution_id" id="reset_inst_id">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold">
                        <i class="anticon anticon-key text-warning mr-1"></i> Reset Institution Password
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-light border mb-3">
                        <div class="small text-muted">Institution:</div>
                        <strong class="text-dark d-block" id="reset_inst_title"></strong>
                        <small class="text-muted" id="reset_inst_email"></small>
                    </div>

                    <div class="form-group mb-3">
                        <label class="font-weight-bold">New Password</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="new_password" id="new_inst_password_input" placeholder="Enter new password" required minlength="4">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="generateInstPasswordBtn">
                                    <i class="anticon anticon-sync"></i> Generate
                                </button>
                            </div>
                        </div>
                        <small class="text-muted">Minimum 4 characters.</small>
                    </div>

                    <div id="resetInstAlertPlaceholder"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" id="saveInstPasswordBtn">
                        <i class="anticon anticon-check"></i> Update Password
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
function submitForm() {
    $('#create_package_form').submit();
}

function openAssignModal(institutionId) {
    document.getElementById('institution_id').value = institutionId;
    $('#assignPackageModal').modal('show');
}

function deleteAssignedPackage(institutionPackageId) {
    Swal.fire({
        title: 'Remove Assigned Package?',
        text: 'This package will be removed from this institution. Students enrolled under this package will no longer have access!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#64748b',
        confirmButtonText: 'Yes, remove package'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "<?= base_url('admin/delete_package') ?>/" + institutionPackageId;
        }
    });
}

function toggleInstitutionStatus(institutionId, action, institutionTitle) {
    var isDeactivating = (action === 'deactivate');
    Swal.fire({
        title: isDeactivating ? 'Deactivate Institution?' : 'Activate Institution?',
        text: isDeactivating ? 
              'Temporarily deactivating "' + institutionTitle + '" will block its administrator and students from accessing the portal until reactivated.' :
              'Activating "' + institutionTitle + '" will restore login access for its administrator and students.',
        icon: isDeactivating ? 'warning' : 'question',
        showCancelButton: true,
        confirmButtonColor: isDeactivating ? '#e11d48' : '#16a34a',
        cancelButtonColor: '#64748b',
        confirmButtonText: isDeactivating ? 'Yes, Deactivate' : 'Yes, Activate'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "<?= base_url('admin/toggle_institution_status') ?>/" + institutionId;
        }
    });
}

function openResetPasswordModal(instId, instTitle, instEmail) {
    $('#reset_inst_id').val(instId);
    $('#reset_inst_title').text(instTitle);
    $('#reset_inst_email').text(instEmail);
    $('#new_inst_password_input').val('');
    $('#resetInstAlertPlaceholder').html('');
    $('#resetInstPasswordModal').modal('show');
}

$('#generateInstPasswordBtn').on('click', function() {
    var chars = 'ABCDEFGHJKMNPQRSTUVWXYZabcdefghjkmnpqrstuvwxyz23456789!@#$';
    var password = '';
    for (var i = 0; i < 8; i++) {
        password += chars.charAt(Math.floor(Math.random() * chars.length));
    }
    $('#new_inst_password_input').val(password);
});

$('#resetInstPasswordForm').on('submit', function(e) {
    e.preventDefault();
    var btn = $('#saveInstPasswordBtn');
    btn.prop('disabled', true).html('<span class="spinner-border spinner-border-sm" role="status"></span> Updating...');

    $.ajax({
        url: '<?= base_url("admin/institutions/reset-password") ?>',
        type: 'POST',
        data: $(this).serialize(),
        dataType: 'json',
        success: function(res) {
            btn.prop('disabled', false).html('<i class="anticon anticon-check"></i> Update Password');
            if (res.status === 'success') {
                $('#resetInstAlertPlaceholder').html('<div class="alert alert-success">' + res.message + '</div>');
                setTimeout(function() {
                    $('#resetInstPasswordModal').modal('hide');
                }, 1500);
            } else {
                $('#resetInstAlertPlaceholder').html('<div class="alert alert-danger">' + res.message + '</div>');
            }
        },
        error: function() {
            btn.prop('disabled', false).html('<i class="anticon anticon-check"></i> Update Password');
            $('#resetInstAlertPlaceholder').html('<div class="alert alert-danger">An unexpected error occurred.</div>');
        }
    });
});

function renewPackage(id) {
    if (confirm("Are you sure you want to renew this package?")) {
        fetch("<?= base_url('admin/renew-package') ?>", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded",
            },
            body: "id=" + id
        })
        .then(response => response.json())
        .then(data => {
            if (data.status == "success") {
                alert("Package Renewed Successfully!");
                location.reload();
            } else {
                alert("Something went wrong!");
            }
        });
    }
}

function editInstitution(id, title, email, mobile, location, logo) {
    $('#edit_id').val(id);
    $('#title').val(title);
    $('#email').val(email);
    $('#mobile').val(mobile);
    $('#location').val(location);
    $('#old_logo').val(logo);

    if (logo) {
        $('#logo_preview').html(
           '<img src="<?= base_url('uploads/institutions') ?>/' + logo + '" width="80" class="rounded border p-1">'
        );
    } else {
        $('#logo_preview').html('');
    }

    $('#create_package_form').attr(
        'action',
        "<?= base_url('admin/update') ?>/" + id
    );

    $('#action_btn').text('Update');
    $('#AddnewModal .modal-title').text('Edit Institution');
    $('#AddnewModal').modal('show');
}

function resetForm() {
    $('#create_package_form')[0].reset();
    $('#edit_id').val('');
    $('#old_logo').val('');
    $('#logo_preview').html('');

    $('#create_package_form').attr(
        'action',
        "<?= base_url('admin/add') ?>"
    );

    $('#action_btn').text('Add Now');
    $('#AddnewModal .modal-title').text('Add New Institution');
}

function deleteInstitution(id) {
    Swal.fire({
        title: 'Delete Institution?',
        text: 'This institution will be permanently deleted!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#64748b',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "<?= base_url('admin/delete') ?>/" + id;
        }
    });
}
</script>

<?= $this->endSection(); ?>
