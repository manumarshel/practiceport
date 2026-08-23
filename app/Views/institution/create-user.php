<?= $this->extend('institution/layouts/main'); ?>

<?= $this->section('main_content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="page-header">
                    <h2 class="header-title">Add Student</h2>
                  
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
                            <?php if(session()->getFlashdata('error')): ?>
                                <div class="alert alert-danger">
                                    <?= session()->getFlashdata('error'); ?>
                                </div>
                            <?php endif; ?>
                            <?php if (isset($validation)){ ?>
                                <div class="col-12">
                                    <div class="alert alert-danger" role="alert">
                                        <?= $validation->listErrors() ?>
                                    </div>
                                </div>
                             <?php }  ?>
                                
                                    <form action="create-user" method="post" class="form" enctype="multipart/form-data" id="questionForm">
 
                                    
                                    <div class="form-group">
                                        <label for="">Packages</label>
                                        <select name="packages" id="packages" class="form-control col-md-6" onchange="showDiv(this.value);">
                                             <?php foreach ($packages as $package): ?>
        <option value="<?= $package->PKInstitutionPackageID ?>">
            <?= $package->display_title ?>
        </option>
    <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <!----- modification on 23-9-24 by geethu  ---------------->
                                    <div class="form-group">
                                        <label for="">First Name</label>
                                        <div class="custom-file1"> 
                                            <input type="text" name="first_name" class="form-control col-md-6" id="first_name"  required> 
                                        </div>  
                                    </div>
                                     <div class="form-group">
                                        <label for="">Last Name</label>
                                        <div class="custom-file1"> 
                                            <input type="text" name="last_name" class="form-control col-md-6" id="last_name"  required> 
                                        </div>  
                                    </div> 
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <div class="custom-file1"> 
                                            <input type="eamil" name="email" class="form-control col-md-6" id="email"  required> 
                                        </div>  
                                    </div>
                                    <div class="form-group">
                                        <label for="">Mobile</label>
                                        <div class="custom-file1"> 
                                            <input type="eamil" name="phone" class="form-control col-md-6" id="phone"  required> 
                                        </div>  
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

