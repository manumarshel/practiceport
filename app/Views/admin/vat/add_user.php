<?= $this->extend('admin/layouts/main2'); ?>

<?= $this->section('main_content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="page-header">
                    <h2 class="header-title">Add VAT User</h2>
                  
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
                             
                             <?php 
                             $vat_username=$vat_arabic_username=$language=$channel=$image=$companyId="";
                             if (isset($users_) && !empty($users_)):

                                $PKVatUserID = $users_['PKVatUserID'];
                                $vat_username = $users_['vat_username'];
                                $vat_arabic_username = $users_['vat_arabic_username'];
                                $language = $users_['language'];
                                $channel = $users_['channel'];
                                $image = $users_['image'];
                                $companyId=$users_['companyId'];
                                
                            endif;
                             ?>
                                
                                    <!--<form action="add-vatuser" method="post" class="form" enctype="multipart/form-data" id="questionForm">-->
 
                                     <?php if (isset($users_) && !empty($users_)){ ?>
                                <form action="<?= base_url(); ?>/admin/add-vatuser/<?= $PKVatUserID; ?>" method="post" class="form" enctype="multipart/form-data" id="questionForm">
                                    <?php }else{ ?>
                                    <form action="<?= base_url(); ?>/admin/add-vatuser" method="post" class="form" enctype="multipart/form-data" id="questionForm">
<?php } ?>
<input type="hidden" name="profile_image12" value="<?php echo $image; ?>">
                                    <div class="form-group">
                                        <label for="">Profile Name In English</label>
                                         <input type="text" name="vat_username" class="form-control" id="vat_username" value="<?= $vat_username ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Profile Name In Arabic</label>
                                         <input type="text" name="vat_arabic_username" class="form-control" id="vat_arabic_username" value="<?= $vat_arabic_username ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Prefrerred Language</label>
                                        <select class="form-control" name="language">
                                            <option value="1" <?php if ($language === '1') echo "selected"; ?>>English</option>
                                            <option value="2" <?php if ($language === '2') echo "selected"; ?>>Arabic</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Prefrerred Communication channel</label>
                                        <select class="form-control" name="channel">
                                            <option value="1" <?php if ($channel === '1') echo "selected"; ?>>Email</option>
                                            <option value="2" <?php if ($channel === '1') echo "selected"; ?>>Both Email & SMS</option>
                                        </select>
                                    </div>
                                    <!----- modification on 23-9-24 by geethu  ---------------->
                                    
                                    
                                    <div class="form-group">
                                        <label for="">User Profile Image</label>
                                        <div class="custom-file1">
                                              <?php if (isset($users_) && !empty($users_)){ ?>
                                            <input type="file" name="profile_image" class=" " id="profile_image"  accept="image/*" >
                                            <?php }else{ ?>
                                            <input type="file" name="profile_image" class=" " id="profile_image"  accept="image/*" required>
                                            <?php } ?>
                                        </div><br>
                                        <p class="upload-info">
                                              <?php if (isset($users_) && !empty($users_)){ ?>
                                                <?php if($users_['image'] == ""){ $img=""; }else{ $img="/public/assets/uploads/vat_user/".$users_['image']; } ?>
                                              <img src="<?php echo $img; ?>" class="img responsive" style="width:100px;">
                                              <?php } ?>
                                        </p>
                                    </div>
                                    
                                    <div id="divcompany" >
                                         <div class="form-group">
                                            <label for="">Vat reg Company </label>
                                             <div class="custom-file">
                                               <select name="companyId" id="companyId" class="form-control">
                                                    <?php foreach($vat_companies as $v){ ?>
                                                <option value="<?php echo $v['id'];?>" <?php if($companyId === $v['id']) echo "selected"; ?>><?php echo $v['eng_name'];?></option> 
                                                <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                     </div>
                                    <!--<button type="submit" name="submit" value="submit" class="btn btn-primary btn-tone">Save</button>-->
                                    <button type="submit" name="submit" value="submit_continue" class="btn btn-primary">Save  </button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 
<?= $this->endSection(); ?>

