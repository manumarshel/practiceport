<?= $this->extend('institution/layouts/main'); ?>

<?= $this->section('main_content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>All Students</h5>
                    <div class="d-flex" style="gap:15px;">
                         <a href="<?= base_url('institution/create-user')?>" class="btn btn-sm btn-primary">Add Student</a>  
                         <a href="<?= base_url('institution/import-student')?>" class="btn btn-sm btn-primary">Import Students</a>  
                    </div>
                </div>
                <div class="m-t-30">
                    <div class="table-responsive">
                        <table class="table table-hover" id="data-table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>User</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Joined</th>
<!--                                <th>Package</th>-->
<!--                                <th>Duration</th>-->
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php 
                if (isset($students)) {
                                $ii = 1;
                                foreach ($students as $user): ?>
                                <tr>
                                    <td>#<?= $ii++; ?></td>
                                    <td>
                                        <?=$user->first_name; ?> <?=$user->last_name; ?>
                                    </td>
                                    <td>
                                        <?=$user->email; ?>
                                    </td><td>
                                        <?=$user->phone; ?>
                                    </td>
                                    <td><?=date('M d Y', strtotime($user->date_registered)); ?></td>
<!--                                    <td> --><?//=$user['title']; ?><!--</td>-->
<!--                                    <td>-->
<!--                                        --><?//=$user['duration']; ?>
<!--                                    </td>-->

                                     <td>
                                        <button class="btn btn-sm btn-primary view-progress-btn mb-1" data-userid="<?= $user->user_id ?>" title="View Progress">
                                            <i class="anticon anticon-line-chart"></i> Progress
                                        </button>
                                        <a href="<?= base_url(); ?>/institution/students/delete_user/<?php echo $user->user_id;?>" class="btn btn-sm btn-danger" type="button" onclick="return confirm('Are you sure you want to delete this student?');" title="Delete">
                                            <i class="anticon anticon-delete"></i>
                                        </a>
                                     </td>
                                     
                                </tr>
            <?php endforeach;
                            }else{
                            ?>
                             <tr><td> No Students</td>
                                 </tr>
                            <?php } ?>
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
    $('.view-progress-btn').click(function(e) {
        e.preventDefault();
        var userId = $(this).data('userid');
        
        $('#progressModalBody').html('<div class="text-center py-5"><div class="spinner-border text-primary" role="status"></div><br>Loading progress...</div>');
        $('#progressModal').modal('show');
        
        $.ajax({
            url: '<?= base_url("institution/students/student_progress_ajax") ?>/' + userId,
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
