<?= $this->extend('institution/layouts/main'); ?>

<?= $this->section('main_content'); ?>
<div class="row">
    <div class="col-md-12">
         <div class="container mt-4">

   <div class="container mt-4">

    <h4 class="mb-3">Students in Package</h4>

    <a href="<?= base_url('institution/packages') ?>" class="btn btn-secondary mb-3">
        ← Back to Packages
    </a>

    <div class="card">
        <div class="card-body">

            <table class="table table-bordered table-4striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                    </tr>
                </thead>

                <tbody>

                <?php if (!empty($students)) : ?>
                    <?php $i = 1; ?>
                    <?php foreach ($students as $stu) : ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= esc($stu->first_name . ' ' . $stu->last_name) ?></td>
                            <td><?= esc($stu->email) ?></td>
                            <td><?= esc($stu->phone) ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>

                    <tr>
                        <td colspan="4" class="text-center">
                            No students assigned to this package.
                        </td>
                    </tr>

                <?php endif; ?>

                </tbody>
            </table>

        </div>
    </div>

</div>


</div>

    </div>
</div>
<?= $this->endSection(); ?>

