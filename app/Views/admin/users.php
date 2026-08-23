<?= $this->extend('admin/layouts/main2'); ?>

<?= $this->section('main_content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>All Users</h5>
                    <div>
                         <a href="<?= base_url('admin/add-user')?>" class="btn btn-sm btn-primary">Import Users</a>  
                    </div>
                </div>
                <div class="m-t-30">
                    <div class="table-responsive">
                        <table class="table table-hover" id="users-ajax-table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>User</th>
                                <th>Email</th>
                                <th>Joined</th>
                                <th>Actions</th>
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
