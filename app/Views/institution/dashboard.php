<?= $this->extend('institution/layouts/main'); ?>

<?= $this->section('main_content'); ?> 
<div class="row">
    <div class="col-md-12">
       
       <div class="container mt-4">

    <h3 class="mb-4">Dashboard</h3>

    <div class="row g-4">

        <!-- Total Students -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h6>Total Students</h6>
                    <h3 class="fw-bold text-primary">
                        <?= $totalStudents ?>
                    </h3>
                </div>
            </div>
        </div>

        <!-- Active Packages -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h6>Active Packages</h6>
                    <h3 class="fw-bold text-success">
                        <?= $activePackages ?>
                    </h3>
                </div>
            </div>
        </div>

      
    </div>

</div>

    </div>
</div> 
<?= $this->endSection(); ?>
