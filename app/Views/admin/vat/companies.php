<?= $this->extend('admin/layouts/main2'); ?>

<?= $this->section('main_content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>All Users</h5>
                    <div>
                         <a href="<?= base_url('admin/add-vat-company')?>" class="btn btn-sm btn-primary">Create Company</a>  
                    </div>
                </div>
                <div class="m-t-30">
                    <div class="table-responsive">
                        <table class="table table-hover" id="data-table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Phone</th> 
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php 
                            if(!empty($companies)){
                        if (isset($companies)) {
                           
                                $ii = 1;
                                foreach ($companies as $company){ ?>
                                 
                                <tr>
                                    
                                    <td>
                                        <?=$company['eng_name']; ?> 
                                         
                                    </td>
                                    <td>
                                         <?=$company['address']; ?> 
                                    </td>
                                    <td> <?=$company['email']; ?> <td>
                                         <td> <?=$company['phone1']; ?> <td>
                                             <td>
                                            <div class="dropdown dropdown-animated scale-left">
                                                <a class="text-gray font-size-18" href="javascript:void(0);" data-toggle="dropdown">
                                                    <i class="anticon anticon-ellipsis"></i>
                                                </a>
                                                <div class="dropdown-menu"> 
                                                  
                                                  <a href="<?= base_url(); ?>/admin/add-vat-company/<?php echo $company['id'];?>" class="dropdown-item" type="button"><i class="anticon anticon-delete"></i>
                                                        <span class="m-l-10">Edit</span></a>
                                                        
                                                     <a href="<?= base_url(); ?>/admin/delete_company/<?php echo $company['id'];?>" class="dropdown-item" type="button"><i class="anticon anticon-delete"></i> 
                                                         <span class="m-l-10">Remove</span></a> 
                                                      
                                                </div>
                                            </div>
                                     </td>
                                     
                                </tr>
            <?php }
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
