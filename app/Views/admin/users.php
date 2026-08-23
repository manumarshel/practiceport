<?= $this->extend('admin/layouts/main2'); ?>

<?= $this->section('main_content'); ?>
<div class="row">
    <div class="col-md-12">
        <!-- PAGE TITLE BAR -->
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
            <div>
                <h3 class="font-weight-bold text-dark mb-1" style="font-size: 22px;">All Registered Users</h3>
                <p class="text-muted mb-0" style="font-size: 13.5px;">Manage enrolled students, subscriptions, and learning analytics.</p>
            </div>
            <div class="d-flex align-items-center gap-2">
                <a href="<?= base_url('admin/add-user')?>" class="btn btn-primary d-inline-flex align-items-center gap-1 font-weight-semibold shadow-sm" style="background: linear-gradient(135deg, #1d4ed8, #3b82f6); border: none; border-radius: 8px; padding: 8px 18px;">
                    <i class="anticon anticon-upload mr-1"></i> Import Users
                </a>
            </div>
        </div>

        <div class="admin-table-card">
            <div class="card-body p-4">
                <div class="table-responsive-fixed">
                    <table class="table table-hover align-middle mb-0" id="users-ajax-table">
                        <thead>
                            <tr>
                                <th style="width: 50px;">ID</th>
                                <th>Student / User</th>
                                <th>Email</th>
                                <th>Joined Date</th>
                                <th class="text-right pr-3" style="width: 140px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Progress Modal -->
<div class="modal fade" id="progressModal" tabindex="-1" role="dialog" aria-labelledby="progressModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-bold" id="progressModalLabel">Student Progress Analysis</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="progressModalBody">
         <!-- Content loaded via AJAX -->
      </div>
    </div>
  </div>
</div>

<!-- Reset Password Modal -->
<div class="modal fade" id="resetPasswordModal" tabindex="-1" role="dialog" aria-labelledby="resetPasswordModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form id="resetPasswordForm">
        <?= csrf_field() ?>
        <input type="hidden" name="user_id" id="reset_user_id">
        <div class="modal-header">
          <h5 class="modal-title font-weight-bold" id="resetPasswordModalLabel">
            <i class="anticon anticon-key text-warning mr-1"></i> Reset User Password
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="alert alert-light border mb-3">
            <div class="small text-muted">User Account:</div>
            <strong class="text-dark d-block" id="reset_user_name"></strong>
            <small class="text-muted" id="reset_user_email"></small>
          </div>

          <div class="form-group mb-3">
            <label class="font-weight-bold">New Password</label>
            <div class="input-group">
              <input type="text" class="form-control" name="new_password" id="new_password_input" placeholder="Enter new password" required minlength="4">
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" id="generatePasswordBtn">
                  <i class="anticon anticon-sync"></i> Generate
                </button>
              </div>
            </div>
            <small class="text-muted">Minimum 4 characters.</small>
          </div>

          <div id="resetAlertPlaceholder"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary" id="savePasswordBtn">
            <i class="anticon anticon-check"></i> Update Password
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    
    var usersTable = $('#users-ajax-table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "<?= base_url('admin/users/get_users_ajax') ?>",
            "type": "GET"
        },
        "columns": [
            { "data": 0, "orderable": true },
            { "data": 1, "orderable": true },
            { "data": 2, "orderable": true },
            { "data": 3, "orderable": true },
            { "data": 4, "orderable": false }
        ],
        "order": [[ 0, "desc" ]]
    });

    $(document).on('click', '.view-progress-btn', function(e) {
        e.preventDefault();
        var userId = $(this).data('userid');
        
        $('#progressModalBody').html('<div class="text-center py-5"><div class="spinner-border text-primary" role="status"></div><br>Loading progress...</div>');
        $('#progressModal').modal('show');
        
        $.ajax({
            url: '<?= base_url("admin/users/student_progress_ajax") ?>/' + userId,
            type: 'GET',
            success: function(response) {
                $('#progressModalBody').html(response);
            },
            error: function() {
                $('#progressModalBody').html('<div class="alert alert-danger">Failed to load progress data. Please try again.</div>');
            }
        });
    });

    // Reset Password Click
    $(document).on('click', '.reset-password-btn', function(e) {
        e.preventDefault();
        var userId = $(this).data('userid');
        var userName = $(this).data('username');
        var userEmail = $(this).data('email');

        $('#reset_user_id').val(userId);
        $('#reset_user_name').text(userName);
        $('#reset_user_email').text(userEmail);
        $('#new_password_input').val('');
        $('#resetAlertPlaceholder').html('');
        $('#resetPasswordModal').modal('show');
    });

    // Generate random password
    $('#generatePasswordBtn').on('click', function() {
        var chars = 'ABCDEFGHJKMNPQRSTUVWXYZabcdefghjkmnpqrstuvwxyz23456789!@#$';
        var password = '';
        for (var i = 0; i < 8; i++) {
            password += chars.charAt(Math.floor(Math.random() * chars.length));
        }
        $('#new_password_input').val(password);
    });

    // Submit Reset Password
    $('#resetPasswordForm').on('submit', function(e) {
        e.preventDefault();
        var btn = $('#savePasswordBtn');
        btn.prop('disabled', true).html('<span class="spinner-border spinner-border-sm" role="status"></span> Updating...');

        $.ajax({
            url: '<?= base_url("admin/users/reset-password") ?>',
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function(res) {
                btn.prop('disabled', false).html('<i class="anticon anticon-check"></i> Update Password');
                if (res.status === 'success') {
                    $('#resetAlertPlaceholder').html('<div class="alert alert-success">' + res.message + '</div>');
                    setTimeout(function() {
                        $('#resetPasswordModal').modal('hide');
                    }, 1500);
                } else {
                    $('#resetAlertPlaceholder').html('<div class="alert alert-danger">' + res.message + '</div>');
                }
            },
            error: function() {
                btn.prop('disabled', false).html('<i class="anticon anticon-check"></i> Update Password');
                $('#resetAlertPlaceholder').html('<div class="alert alert-danger">An unexpected error occurred.</div>');
            }
        });
    });
});
</script>

<?= $this->endSection(); ?>
