<?= $this->extend('admin/layouts/main2'); ?>

<?= $this->section('main_content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5><?= esc($title) ?></h5>
                    <a href="<?= base_url('admin/courses') ?>" class="btn btn-default btn-sm">
                        <i class="anticon anticon-arrow-left m-r-5"></i> Back to List
                    </a>
                </div>

                <?php if (isset($validation)) : ?>
                    <div class="alert alert-danger">
                        <?= $validation->listErrors() ?>
                    </div>
                <?php endif; ?>

                <form action="<?= base_url('admin/courses/' . ($course ? 'edit/' . $course['course_id'] : 'add')) ?>" method="POST">
                    <div class="form-group row">
                        <label for="course_name" class="col-sm-2 col-form-label">Course Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="course_name" name="course_name" 
                                value="<?= set_value('course_name', $course ? $course['course_name'] : '') ?>" 
                                placeholder="Enter course name" required>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-sm-10 offset-sm-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="anticon anticon-save m-r-5"></i> Save Course
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
