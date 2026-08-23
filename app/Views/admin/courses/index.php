<?= $this->extend('admin/layouts/main2'); ?>

<?= $this->section('main_content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5>Courses</h5>
                    <a href="<?= base_url('admin/courses/add') ?>" class="btn btn-primary btn-sm">
                        <i class="anticon anticon-plus m-r-5"></i> Add New Course
                    </a>
                </div>

                <?php if (session()->getFlashdata('msg')) : ?>
                    <div class="alert alert-success alert-dismissible fade show m-t-15">
                        <?= session()->getFlashdata('msg') ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>

                <?php if (session()->getFlashdata('error')) : ?>
                    <div class="alert alert-danger alert-dismissible fade show m-t-15">
                        <?= session()->getFlashdata('error') ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>

                <div class="m-t-30">
                    <div class="table-responsive">
                        <table class="table table-hover" id="data-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Course Name</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($courses)) : ?>
                                    <?php foreach ($courses as $c) : ?>
                                        <tr>
                                            <td><?= $c['course_id'] ?></td>
                                            <td><?= htmlspecialchars($c['course_name']) ?></td>
                                            <td class="text-right">
                                                <a href="<?= base_url('admin/courses/edit/' . $c['course_id']) ?>" class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
                                                    <i class="anticon anticon-edit"></i>
                                                </a>
                                                <button class="btn btn-icon btn-hover btn-sm btn-rounded pull-right btn-delete" data-id="<?= $c['course_id'] ?>">
                                                    <i class="anticon anticon-delete"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
window.onload = function() {
    $(document).ready(function() {
        $('.btn-delete').on('click', function() {
            if (confirm('Are you sure you want to delete this course?')) {
                var id = $(this).data('id');
                var btn = $(this);
                
                $.ajax({
                    url: '<?= base_url('admin/courses/delete') ?>',
                    type: 'POST',
                    data: { id: id },
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === 'success') {
                            btn.closest('tr').fadeOut('slow', function() { $(this).remove(); });
                        } else {
                            alert(response.message || 'Error deleting course');
                        }
                    },
                    error: function() {
                        alert('Server error while deleting.');
                    }
                });
            }
        });
    });
};
</script>

<?= $this->endSection(); ?>
