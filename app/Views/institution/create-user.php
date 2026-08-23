<?= $this->extend('institution/layouts/main'); ?>

<?= $this->section('main_content'); ?>
<div class="row justify-content-center">
    <div class="col-lg-8 col-md-10">
        <div class="card shadow-sm border-0" style="border-radius: 14px;">
            <div class="card-body p-4 p-md-5">
                
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <h3 class="font-weight-bold text-dark mb-1" style="font-size: 20px;">Add New Student</h3>
                        <p class="text-muted mb-0" style="font-size: 13.5px;">Register a student and enroll them in a subscription package.</p>
                    </div>
                    <a href="<?= base_url('institution/students') ?>" class="btn btn-sm btn-outline-secondary">
                        <i class="anticon anticon-arrow-left mr-1"></i> Back to Students
                    </a>
                </div>

                <?php if(session()->getFlashdata('error')): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error:</strong> <?= session()->getFlashdata('error'); ?>
                    </div>
                <?php endif; ?>

                <?php if(session()->getFlashdata('msg')): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success:</strong> <?= session()->getFlashdata('msg'); ?>
                    </div>
                <?php endif; ?>

                <?php if (isset($validation)): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $validation->listErrors() ?>
                    </div>
                <?php endif; ?>
                    
                <form action="<?= base_url('institution/create-user') ?>" method="post">
                    <?= csrf_field() ?>

                    <div class="form-group mb-3">
                        <label class="font-weight-semibold text-dark" for="packages">Assigned Course Package <span class="text-danger">*</span></label>
                        <select name="packages" id="packages" class="form-control" required>
                            <?php if (!empty($packages)): ?>
                                <?php foreach ($packages as $pkg): ?>
                                    <option value="<?= is_object($pkg) ? $pkg->PKInstitutionPackageID : $pkg['PKInstitutionPackageID'] ?>">
                                        <?= esc(is_object($pkg) ? ($pkg->display_title ?? $pkg->title) : ($pkg['display_title'] ?? $pkg['title'])) ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <option value="">No active packages available</option>
                            <?php endif; ?>
                        </select>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6 mb-3">
                            <label class="font-weight-semibold text-dark" for="first_name">First Name <span class="text-danger">*</span></label>
                            <input type="text" name="first_name" class="form-control" id="first_name" placeholder="e.g. Arun" value="<?= set_value('first_name') ?>" required> 
                        </div>

                        <div class="form-group col-md-6 mb-3">
                            <label class="font-weight-semibold text-dark" for="last_name">Last Name</label>
                            <input type="text" name="last_name" class="form-control" id="last_name" placeholder="e.g. Kumar" value="<?= set_value('last_name') ?>"> 
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6 mb-3">
                            <label class="font-weight-semibold text-dark" for="email">Email Address <span class="text-danger">*</span></label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="student@example.com" value="<?= set_value('email') ?>" required> 
                        </div>

                        <div class="form-group col-md-6 mb-4">
                            <label class="font-weight-semibold text-dark" for="phone">Mobile Number</label>
                            <input type="tel" name="phone" class="form-control" id="phone" placeholder="9876543210" value="<?= set_value('phone') ?>"> 
                        </div>
                    </div>

                    <div class="form-group mb-0 pt-2 border-top">
                        <button type="submit" class="btn btn-primary px-4 py-2" style="background-color: #1976d2; border-color: #1976d2;">
                            <i class="anticon anticon-check mr-1"></i> Save & Enroll Student
                        </button>
                        <a href="<?= base_url('institution/students') ?>" class="btn btn-default ml-2">Cancel</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
