<?= $this->extend('institution/layouts/main'); ?>

<?= $this->section('main_content'); ?>
<div class="row justify-content-center">
    <div class="col-lg-9 col-md-11">
        <div class="card shadow-sm border-0" style="border-radius: 14px;">
            <div class="card-body p-4 p-md-5">
                
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <h3 class="font-weight-bold text-dark mb-1" style="font-size: 20px;">Bulk Student Import</h3>
                        <p class="text-muted mb-0" style="font-size: 13.5px;">Upload a CSV file to enroll multiple students at once.</p>
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

                <form action="<?= base_url('institution/user-import') ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>

                    <div class="form-group mb-4">
                        <label class="font-weight-semibold text-dark" for="packages">Select Target Package <span class="text-danger">*</span></label>
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

                    <!-- Instructions Card -->
                    <div class="p-4 mb-4 rounded" style="background-color: #f8fafc; border: 1px solid #e2e8f0;">
                        <h6 class="font-weight-bold text-dark mb-2">
                            <i class="anticon anticon-info-circle text-primary mr-1"></i> Instructions for CSV Import
                        </h6>
                        <ol class="text-muted small pl-3 mb-3" style="line-height: 1.8;">
                            <li>Prepare a CSV file formatted with the column headers below.</li>
                            <li>Ensure all email addresses are valid and unique.</li>
                            <li>Default password assigned to imported students is <code>12345678</code>.</li>
                        </ol>

                        <div class="table-responsive">
                            <table class="table table-sm table-bordered bg-white mb-0" style="font-size: 12.5px;">
                                <thead class="bg-light">
                                    <tr>
                                        <th>first_name</th>
                                        <th>last_name</th>
                                        <th>email</th>
                                        <th>phone</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Arun</td>
                                        <td>Kumar</td>
                                        <td>arun@example.com</td>
                                        <td>9876543210</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label class="font-weight-semibold text-dark" for="user_import">Select CSV File <span class="text-danger">*</span></label>
                        <div class="custom-file">
                            <input type="file" name="user_import" class="custom-file-input" id="user_import" accept=".csv" required>
                            <label class="custom-file-label" for="user_import">Choose CSV file...</label>
                        </div>
                    </div>

                    <div class="form-group mb-0 pt-2 border-top">
                        <button type="submit" class="btn btn-primary px-4 py-2" style="background-color: #1976d2; border-color: #1976d2;">
                            <i class="anticon anticon-upload mr-1"></i> Upload & Import Students
                        </button>
                        <a href="<?= base_url('institution/students') ?>" class="btn btn-default ml-2">Cancel</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var fileInput = document.getElementById('user_import');
        if (fileInput) {
            fileInput.addEventListener('change', function(e) {
                var fileName = e.target.files[0] ? e.target.files[0].name : 'Choose CSV file...';
                var label = document.querySelector('label[for="user_import"]');
                if (label) label.textContent = fileName;
            });
        }
    });
</script>
<?= $this->endSection(); ?>
