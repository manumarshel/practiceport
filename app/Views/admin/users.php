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
        <h5 class="modal-title" id="progressModalLabel">Student Progress Analysis</h5>
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    
    $('#users-ajax-table').DataTable({
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
});
</script>

<?= $this->endSection(); ?>
