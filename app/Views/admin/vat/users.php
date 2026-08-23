<?= $this->extend('admin/layouts/main2'); ?>

<?= $this->section('main_content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>All Users</h5>
                    <div>
                         <a href="<?= base_url('admin/add-vatuser')?>" class="btn btn-sm btn-primary">Create Users</a>  
                    </div>
                </div>
                <div class="m-t-30">
                    <div class="table-responsive">
                        <table class="table table-hover" id="data-table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>image</th>
                                <th>User</th>
                                <th>Language</th>
                                <th>Communication channel</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php 
                            if(!empty($users)){
                        if (isset($users)) {
                           
                                $ii = 1;
                                foreach ($users as $user):
                                 $img=""; ?>
                                  <?php if($user['image'] == ""){ $img=""; }else{ $img="/public/assets/uploads/vat_user/".$user['image']; } ?>
                                <tr>
                                    <td style="width:10px;">#<?= $ii++; ?></td>
                                    <td> 
                                         <img src="<?php echo $img; ?>" class="img-responsive" style="width:50px;">
                                    </td>
                                    <td>
                                        <?=$user['vat_username']; ?> 
                                        <span><?=$user['vat_arabic_username']; ?></span>
                                    </td>
                                    <td>
                                        <?php if($user['language'] == "1"){ echo "English"; }else{ echo "Arabic"; } ?>
                                    </td>
                                    <td><?php if($user['language'] == "1"){ echo "Email"; }else{ echo "Both Email and SMS"; } ?>

                                     <td>
                                            <div class="dropdown dropdown-animated scale-left">
                                                <a class="text-gray font-size-18" href="javascript:void(0);" data-toggle="dropdown">
                                                    <i class="anticon anticon-ellipsis"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                 
                                                  <!--<a href="<?= base_url(); ?>/admin/vat_registration/<?php echo $user['PKVatUserID'];?>" class="dropdown-item" type="button"><i class="anticon anticon-delete"></i> -->
                                                  <!--       <span class="m-l-10">Add VAT Registration</span></a> -->
                                                  <a href="<?= base_url(); ?>/admin/add-vatuser/<?php echo $user['PKVatUserID'];?>" class="dropdown-item" type="button"><i class="anticon anticon-delete"></i>
                                                        <span class="m-l-10">Edit</span></a>
                                                        
                                                     <a href="<?= base_url(); ?>/admin/vat_users/delete_user/<?php echo $user['PKVatUserID'];?>" class="dropdown-item" type="button"><i class="anticon anticon-delete"></i> 
                                                         <span class="m-l-10">Remove</span></a> 
                                                      
                                                </div>
                                            </div>
                                     </td>
                                     
                                </tr>
            <?php endforeach;
                            } }else{ ?>
                            <tr><td> <strong style="padding:20px;color:red;">No result found </strong></td></tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
