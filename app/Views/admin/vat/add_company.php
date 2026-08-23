<?= $this->extend('admin/layouts/main2'); ?>

<?= $this->section('main_content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="page-header">
                    <h2 class="header-title">Add VAT Registered Company</h2>
                  
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
                             $vat_username=$vat_arabic_username=$address=$street=$area=$city=$po=$code=$phone1=$phone2=$email=$emirates=$vat_last_username=$vat_last_arabic_username=$year_end=$due_date=$stagger=$return_period=$return_end="";
                             if (isset($companies) && !empty($companies)):

                                $PKVatUserID = $companies['id'];
                                $vat_username = $companies['eng_name'];
                                $address = $companies['address'];
                                $street = $companies['street'];
                                $area = $companies['Area'];
                                $city = $companies['City'];
                                $po = $companies['po'];
                                $code = $companies['code'];
                                $phone1 = $companies['phone1'];
                                $phone2 = $companies['phone2'];
                                $email = $companies['email'];
                                $emirates = $companies['Emirates'];
                                $vat_last_username=$companies['last_eng'];
                                $vat_last_arabic_username=$companies['last_arabic']; 
                                $return_period= $companies['return_period'];
                                $return_end= $companies['return_end'];
                                $stagger= $companies['stagger'];
                                $year_end= $companies['year_end'];
                                $due_date= $companies['due_date'];
                                
                            endif;
                             ?>
                                
                                    <!--<form action="add-vatuser" method="post" class="form" enctype="multipart/form-data" id="questionForm">-->
 
                               <?php if (isset($companies) && !empty($companies)){ ?>
                                <form action="<?= base_url(); ?>/admin/add-vat-company/<?= $PKVatUserID; ?>" method="post" class="form" enctype="multipart/form-data" id="questionForm">
                                    <?php }else{ ?>
                                    <form action="<?= base_url(); ?>/admin/add-vat-company" method="post" class="form" enctype="multipart/form-data" id="questionForm">
<?php } ?>
                                   
 
                                    <div class="form-group">
                                        <label for="">First Name In English</label>
                                         <input type="text" name="eng_name" class="form-control" id="eng_name" value="<?= $vat_username ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">First Name In Arabic</label>
                                         <input type="text" name="arabic_name" class="form-control" id="arabic_name" value="<?= $vat_arabic_username ?>">
                                    </div>
                                     <div class="form-group">
                                        <label for="">Last Name In English</label>
                                         <input type="text" name="last_eng" class="form-control" id="last_eng" value="<?= $vat_last_username ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Last Name In Arabic</label>
                                         <input type="text" name="last_arabic" class="form-control" id="last_arabic" value="<?= $vat_last_arabic_username ?>">
                                    </div>
                                     
                                    <div class="form-group">
                                        <label for="">Address</label>
                                         <input type="text" name="address" class="form-control" id="address" value="<?= $address ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Street</label>
                                         <input type="text" name="street" class="form-control" id="street" value="<?= $street ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Area</label>
                                         <input type="text" name="area" class="form-control" id="area" value="<?= $area ?>">
                                    </div>
                                     <div class="form-group">
                                        <label for="">City</label>
                                         <input type="text" name="city" class="form-control" id="city" value="<?= $city ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">P O</label>
                                         <input type="text" name="po" class="form-control" id="po" value="<?= $po ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Code</label>
                                         <input type="text" name="code" class="form-control" id="code" value="<?= $code ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Mobile NUmber</label>
                                         <input type="text" name="phone1" class="form-control" id="phone1" value="<?= $phone1 ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Landline NUmber</label>
                                         <input type="text" name="phone2" class="form-control" id="phone2" value="<?= $phone2 ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                         <input type="email" name="email" class="form-control" id="email" value="<?= $email ?>">
                                    </div> 
                                    <div class="form-group">
                                        <label for="">Emirates</label>
                                         <input type="text" name="Emirates" class="form-control" id="Emirates" value="<?= $emirates ?>">
                                    </div>
                                    <hr>
                                    <div class="row" style="display:flex;gap: 45px;">
                                        <div class="form-group ">
                                            <label for="">Vat Return From period</label>
                                             <input type="text" name="return_period" class="form-control" id="return_period" value="<?= $return_period ?>">
                                        </div>
                                        
                                         <div class="form-group ">
                                            <label for="">Vat Return End period</label>
                                             <input type="text" name="return_end" class="form-control" id="return_end" value="<?= $return_end ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Vat Stagger </label>
                                             <input type="text" name="stagger" class="form-control" id="stagger" value="<?= $stagger ?>">
                                        </div> 
                                        <div class="form-group">
                                            <label for="">Vat Return Due Date</label>
                                             <input type="text" name="due_date" class="form-control" id="due_date" value="<?= $due_date ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tax Year End</label>
                                             <input type="text" name="year_end" class="form-control" id="year_end" value="<?= $year_end ?>">
                                        </div>
                                    </div>
                                    
                                    <!----- modification on 23-9-24 by geethu  ---------------->
                                    
                                    
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

