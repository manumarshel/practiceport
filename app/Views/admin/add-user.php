<?= $this->extend('admin/layouts/main2'); ?>

<?= $this->section('main_content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="page-header">
                    <h2 class="header-title">User Import</h2>
                  
                </div>
                <!-- <div class="d-flex justify-content-between align-items-center">
                    <h5>Companies</h5>
                    <div>
                        <a href="javascript:void(0);" class="btn btn-sm btn-primary">Add New</a>
                    </div>
                </div> -->
                <div class="m-t-30">
                    <div class="row">
                        <div class="col-md-12">
                            <?php if (isset($validation)){ ?>
                                <div class="col-12">
                                    <div class="alert alert-danger" role="alert">
                                        <?= $validation->listErrors() ?>
                                    </div>
                                </div>
                             <?php }  ?>
                                
                                    <form action="add-user" method="post" class="form" enctype="multipart/form-data" id="questionForm">
 
                                    
                                    <div class="form-group">
                                        <label for="">Packages</label>
                                        <select name="packages" id="packages" class="form-control" onchange="showDiv(this.value);">
                                            <?php foreach($packages as $package){ ?>
                                            
                                            <option value="<?php echo $package['package_id']; ?>"><?php echo $package['title']; ?></option> 
                                            
                                            <?php }  ?>
                                        </select>
                                    </div>

                                    <!-- ✅ Instructions Box -->
                                    <div class="alert alert-info border border-info rounded p-4 mb-4 mt-3" style="background-color:#f0f8ff;">
                                        <h5 class="fw-bold mb-3">
                                            <i class="fa fa-info-circle me-2"></i> How to Import Students via CSV
                                        </h5>

                                        <ol class="mb-3 ps-3" style="line-height: 2;">
                                            <li>Download the <strong>Sample CSV</strong> file using the button below.</li>
                                            <li>Open the file in <strong>Microsoft Excel</strong> or <strong>Google Sheets</strong>.</li>
                                            <li>Fill in the student details — <strong>do not change the column headers</strong>.</li>
                                            <li>Save the file in <strong>.CSV format</strong> before uploading.</li>
                                            <li>Select the correct <strong>Package</strong> from the dropdown above.</li>
                                            <li>Upload the filled CSV file and click <strong>"Save &amp; Continue"</strong>.</li>
                                        </ol>

                                        <hr class="my-3">

                                        <p class="mb-2 fw-semibold">📋 Required CSV Columns:</p>
                                        <div class="table-responsive">
                                            <table class="table table-sm table-bordered mb-3" style="font-size:0.9rem;">
                                                <thead class="table-primary">
                                                    <tr>
                                                        <th>Column Name</th>
                                                        <th>Description</th>
                                                        <th>Example</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><code>first_name</code></td>
                                                        <td>Student's First Name</td>
                                                        <td>Arun</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>last_name</code></td>
                                                        <td>Student's Last Name</td>
                                                        <td>Kumar</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>email</code></td>
                                                        <td>Valid Email Address (must be unique)</td>
                                                        <td>arun@example.com</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>phone</code></td>
                                                        <td>10-digit Mobile Number (must be unique)</td>
                                                        <td>9876543210</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="alert alert-warning py-2 px-3 mb-3" style="font-size:0.88rem;">
                                            <i class="fa fa-exclamation-triangle me-1"></i>
                                            <strong>Important:</strong> Students who already exist in the system (same email or phone) will be <strong>skipped</strong> — no duplicates will be created.
                                        </div>

                                        <!-- Sample CSV Download Button -->
                                        <a href="https://drive.google.com/uc?export=download&id=1IR5xpRACgU1PP0kA2ZrTXHH_hBC4ZOLZ"
                                           target="_blank"
                                           class="btn btn-success btn-sm">
                                            <i class="fa fa-download me-1"></i> Download Sample CSV
                                        </a>
                                    </div>
                                    <!-- ✅ End Instructions Box -->
                                    <!----- modification on 23-9-24 by geethu  ---------------->
                                    
                                    
                                    <div class="form-group">
                                        <label for="">User CSV File</label>
                                        <div class="custom-file1">
                                             
                                            <input type="file" name="user_import" class=" " id="user_import"  accept=".csv">
                                            
                                        </div>
                                        <p class="upload-info"></p>
                                    </div>
                                    <!--<button type="submit" name="submit" value="submit" class="btn btn-primary btn-tone">Save</button>-->
                                    <button type="submit" name="submit" value="submit_continue" class="btn btn-primary">Save & Continue</button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 
<?= $this->endSection(); ?>

