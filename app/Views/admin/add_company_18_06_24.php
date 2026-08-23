<?= $this->extend('admin/layouts/main2'); ?>

<?= $this->section('main_content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="page-header">
                    <h2 class="header-title">Add New Company</h2>
                    <div class="header-sub-title">
                        <nav class="breadcrumb breadcrumb-dash">
                            <a href="<?= base_url('admin/add-company')?>" class="breadcrumb-item active"><i class="anticon anticon-project m-r-5"></i>Company Details</a>
                        </nav>
                    </div>
                </div>
                <!-- <div class="d-flex justify-content-between align-items-center">
                    <h5>Companies</h5>
                    <div>
                        <a href="javascript:void(0);" class="btn btn-sm btn-primary">Add New</a>
                    </div>
                </div> -->
                <div class="m-t-30">
                    <div class="row">
                        <?php if (isset($validation)): ?>
                            <div class="col-12">
                                <div class="alert alert-danger" role="alert">
                                    <?= $validation->listErrors() ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php
                        $company_id = '';
                        $name = '';
                        $username = '';
                        $password = '';
                        $address1 = '';
                        $address2 = '';
                        $city = '';
                        $state = '';
                        $pincode = '';
                        $gst_number = '';
                        $legal_name = '';
                        $trade_name = '';
                        $signatory = '';
                        $return_period = '';
                        $gstr1_due_date = '';
                        $gstr3b_due_date = '';
                        $gstr1_return_period1 = '';
                        $gstr1_return_period1_status = '';
                        $gstr1_return_period2 = '';
                        $gstr1_return_period2_status = '';
                        $gstr1_return_period3 = '';
                        $gstr1_return_period3_status = '';
                        $gstr1_return_period4 = '';
                        $gstr1_return_period4_status = '';
                        $gstr1_return_period5 = '';
                        $gstr1_return_period5_status = '';
                        $gstr3b_return_period1 = '';
                        $gstr3b_return_period1_status = '';
                        $gstr3b_return_period2 = '';
                        $gstr3b_return_period2_status = '';
                        $gstr3b_return_period3 = '';
                        $gstr3b_return_period3_status = '';
                        $gstr3b_return_period4 = '';
                        $gstr3b_return_period4_status = '';
                        $gstr3b_return_period5 = '';
                        $gstr3b_return_period5_status = '';
                        $financial_year = '';
                        $quarter = '';
                        $period = '';
                        $status = '';
                        $tan = '';
                        $pan = '';
                        $phone = '';
                        $email = '';
                        
                        if (isset($company_) && !empty($company_)):

                            $company_id = $company_['company_id'];
                            $name =  $company_['name'];
                            $username =  $company_['username'];
                            $password =  $company_['password'];
                            $gst_number =  $company_['gst_number'];
                            $city =  $company_['city'];
                            $state =  $company_['state'];
                            $address1 =  $company_['address1'];
                            $address2 =  $company_['address2'];
                            $pincode =  $company_['pincode'];
                            $legal_name =  $company_['legal_name'];
                            $trade_name =  $company_['trade_name'];
                            $signatory =  $company_['signatory'];
                            $return_period =  $company_['return_period'];
                            $gstr1_due_date =  $company_['gstr1_due_date'];
                            $gstr3b_due_date =  $company_['gstr3b_due_date'];
                            $gstr1_return_period1 =  $company_['gstr1_return_period1'];
                            $gstr1_return_period1_status =  $company_['gstr1_return_period1_status'];
                            $gstr1_return_period2 =  $company_['gstr1_return_period2'];
                            $gstr1_return_period2_status =  $company_['gstr1_return_period2_status'];
                            $gstr1_return_period3 =  $company_['gstr1_return_period3'];
                            $gstr1_return_period3_status =  $company_['gstr1_return_period3_status'];
                            $gstr1_return_period4 =  $company_['gstr1_return_period4'];
                            $gstr1_return_period4_status =  $company_['gstr1_return_period4_status'];
                            $gstr1_return_period5 =  $company_['gstr1_return_period5'];
                            $gstr1_return_period5_status =  $company_['gstr1_return_period5_status'];
                            $gstr3b_return_period1 =  $company_['gstr3b_return_period1'];
                            $gstr3b_return_period1_status =  $company_['gstr3b_return_period1_status'];
                            $gstr3b_return_period2 =  $company_['gstr3b_return_period2'];
                            $gstr3b_return_period2_status =  $company_['gstr3b_return_period2_status'];
                            $gstr3b_return_period3 =  $company_['gstr3b_return_period3'];
                            $gstr3b_return_period3_status =  $company_['gstr3b_return_period3_status'];
                            $gstr3b_return_period4 =  $company_['gstr3b_return_period4'];
                            $gstr3b_return_period4_status =  $company_['gstr3b_return_period4_status'];
                            $gstr3b_return_period5 =  $company_['gstr3b_return_period5'];
                            $gstr3b_return_period5_status =  $company_['gstr3b_return_period5_status'];
                            $financial_year =  $company_['financial_year'];
                            $quarter =  $company_['quarter'];
                            $period =  $company_['period'];
                            $status =  $company_['status'];
                            $tan =  $company_['tan'] ?? '';
                            $pan =  $company_['pan'] ?? '';
                            $phone =  $company_['phone'] ?? '';
                            $email =  $company_['email'] ?? '';
                        endif;
                        ?>
                        <div class="col-md-12">
                            <?php if (isset($company_) && !empty($company_)): ?>
                            <form action="<?= base_url(); ?>/admin/add-company/<?= $company_id; ?>" method="post" class="form">
                                <?php else: ?>
                                <form action="add-company" method="post" class="form">
                                <?php endif; ?>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Company Name</label>
                                        <input name="name" type="text" class="form-control" placeholder="" value="<?= $name; ?>">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">GST number</label>
                                        <input name="gst_number" type="text" class="form-control" placeholder="" value="<?= $gst_number; ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Tan Number</label>
                                        <input name="tan" type="text" class="form-control" placeholder="" value="<?= $tan; ?>">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Pan Number</label>
                                        <input name="pan" type="text" class="form-control" placeholder="" value="<?= $pan; ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Username</label>
                                        <input name="username" type="text" class="form-control" placeholder="" value="<?= $username; ?>">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Password</label>
                                        <input name="password" type="password" class="form-control" placeholder="" value="<?= $password; ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Address 1</label>
                                        <input name="address1" type="text" class="form-control" placeholder="" value="<?= $address1; ?>">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Address 2</label>
                                        <input name="address2" type="text" class="form-control" placeholder="" value="<?= $address2; ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">City</label>
                                        <input name="city" type="text" class="form-control" placeholder="" value="<?= $city; ?>">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">State</label>
                                        <input name="state" type="text" class="form-control" placeholder="" value="<?= $state; ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Pincode</label>
                                        <input name="pincode" type="text" class="form-control" placeholder="" value="<?= $pincode; ?>">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Phone No:</label>
                                        <input name="phone" type="text" class="form-control" placeholder="" value="<?= $phone; ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    
                                     <div class="col form-group">
                                        <label for="">Email:</label>
                                        <input name="email" type="text" class="form-control" placeholder="" value="<?= $email; ?>">
                                    </div>
                                    <div class="col form-group">
                                        </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col">
                                        <h4 class="form-title">GSTR1 Return Calender</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Retrun Period 1</label>
                                        <input name="gstr1_return_period1" type="text" class="form-control" placeholder="" value="<?= $gstr1_return_period1; ?>">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Retrun Period 2</label>
                                        <input name="gstr1_return_period2" type="text" class="form-control" placeholder="" value="<?= $gstr1_return_period2; ?>">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Retrun Period 3</label>
                                        <input name="gstr1_return_period3" type="text" class="form-control" placeholder="" value="<?= $gstr1_return_period3; ?>">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Retrun Period 4</label>
                                        <input name="gstr1_return_period4" type="text" class="form-control" placeholder="" value="<?= $gstr1_return_period4; ?>">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Retrun Period 5</label>
                                        <input name="gstr1_return_period5" type="text" class="form-control" placeholder="" value="<?= $gstr1_return_period5; ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Retrun Period 1 Status</label>
                                        <select name="gstr1_return_period1_status" id="" class="form-control">
                                            <option value="Filed" <?php if ($gstr1_return_period1_status === 'Filed') echo "selected"; ?>>Filed</option>
                                            <option value="Not Filed" <?php if ($gstr1_return_period1_status === 'Not Filed') echo "selected"; ?>>Not Filed</option>
                                            <option value="To Be Filed" <?php if ($gstr1_return_period1_status === 'To Be Filed') echo "selected"; ?>>To Be Filed</option>
                                        </select>
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Retrun Period 2 Status</label>
                                        <select name="gstr1_return_period2_status" id="" class="form-control">
                                            <option value="Filed" <?php if ($gstr1_return_period2_status === 'Filed') echo "selected"; ?>>Filed</option>
                                            <option value="Not Filed" <?php if ($gstr1_return_period2_status === 'Not Filed') echo "selected"; ?>>Not Filed</option>
                                            <option value="To Be Filed" <?php if ($gstr1_return_period2_status === 'To Be Filed') echo "selected"; ?>>To Be Filed</option>
                                        </select>
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Retrun Period 3 Status</label>
                                        <select name="gstr1_return_period3_status" id="" class="form-control">
                                            <option value="Filed" <?php if ($gstr1_return_period3_status === 'Filed') echo "selected"; ?>>Filed</option>
                                            <option value="Not Filed" <?php if ($gstr1_return_period3_status === 'Not Filed') echo "selected"; ?>>Not Filed</option>
                                            <option value="To Be Filed" <?php if ($gstr1_return_period3_status === 'To Be Filed') echo "selected"; ?>>To Be Filed</option>
                                        </select>
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Retrun Period 4 Status</label>
                                        <select name="gstr1_return_period4_status" id="" class="form-control">
                                            <option value="Filed" <?php if ($gstr1_return_period4_status === 'Filed') echo "selected"; ?>>Filed</option>
                                            <option value="Not Filed" <?php if ($gstr1_return_period4_status === 'Not Filed') echo "selected"; ?>>Not Filed</option>
                                            <option value="To Be Filed" <?php if ($gstr1_return_period4_status === 'To Be Filed') echo "selected"; ?>>To Be Filed</option>
                                        </select>
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Retrun Period 5 Status</label>
                                        <select name="gstr1_return_period5_status" id="" class="form-control">
                                            <option value="Filed" <?php if ($gstr1_return_period5_status === 'Filed') echo "selected"; ?>>Filed</option>
                                            <option value="Not Filed" <?php if ($gstr1_return_period5_status === 'Not Filed') echo "selected"; ?>>Not Filed</option>
                                            <option value="To Be Filed" <?php if ($gstr1_return_period5_status === 'To Be Filed') echo "selected"; ?>>To Be Filed</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h4 class="form-title">GSTR3B Return Calender</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Retrun Period 1</label>
                                        <input name="gstr3b_return_period1" type="text" class="form-control" placeholder="" value="<?= $gstr3b_return_period1; ?>">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Retrun Period 2</label>
                                        <input name="gstr3b_return_period2" type="text" class="form-control" placeholder="" value="<?= $gstr3b_return_period2; ?>">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Retrun Period 3</label>
                                        <input name="gstr3b_return_period3" type="text" class="form-control" placeholder="" value="<?= $gstr3b_return_period3; ?>">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Retrun Period 4</label>
                                        <input name="gstr3b_return_period4" type="text" class="form-control" placeholder="" value="<?= $gstr3b_return_period4; ?>">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Retrun Period 5</label>
                                        <input name="gstr3b_return_period5" type="text" class="form-control" placeholder="" value="<?= $gstr3b_return_period5; ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Retrun Period 1 Status</label>
                                        <select name="gstr3b_return_period1_status" id="" class="form-control">
                                            <option value="Filed" <?php if ($gstr3b_return_period1_status === 'Filed') echo "selected"; ?>>Filed</option>
                                            <option value="Not Filed" <?php if ($gstr3b_return_period1_status === 'Not Filed') echo "selected"; ?>>Not Filed</option>
                                            <option value="To Be Filed" <?php if ($gstr3b_return_period1_status === 'To Be Filed') echo "selected"; ?>>To Be Filed</option>
                                        </select>
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Retrun Period 2 Status</label>
                                        <select name="gstr3b_return_period2_status" id="" class="form-control">
                                            <option value="Filed" <?php if ($gstr3b_return_period2_status === 'Filed') echo "selected"; ?>>Filed</option>
                                            <option value="Not Filed" <?php if ($gstr3b_return_period2_status === 'Not Filed') echo "selected"; ?>>Not Filed</option>
                                            <option value="To Be Filed" <?php if ($gstr3b_return_period2_status === 'To Be Filed') echo "selected"; ?>>To Be Filed</option>
                                        </select>
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Retrun Period 3 Status</label>
                                        <select name="gstr3b_return_period3_status" id="gstr3b_return_period3_status" class="form-control">
                                            <option value="Filed" <?php if ($gstr3b_return_period3_status === 'Filed') echo "selected"; ?>>Filed</option>
                                            <option value="Not Filed" <?php if ($gstr3b_return_period3_status === 'Not Filed') echo "selected"; ?>>Not Filed</option>
                                            <option value="To Be Filed" <?php if ($gstr3b_return_period3_status === 'To Be Filed') echo "selected"; ?>>To Be Filed</option>
                                        </select>
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Retrun Period 4 Status</label>
                                        <select name="gstr3b_return_period4_status" id="" class="form-control">
                                            <option value="Filed" <?php if ($gstr3b_return_period4_status === 'Filed') echo "selected"; ?>>Filed</option>
                                            <option value="Not Filed" <?php if ($gstr3b_return_period4_status === 'Not Filed') echo "selected"; ?>>Not Filed</option>
                                            <option value="To Be Filed" <?php if ($gstr3b_return_period4_status === 'To Be Filed') echo "selected"; ?>>To Be Filed</option>
                                        </select>
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Retrun Period 5 Status</label>
                                        <select name="gstr3b_return_period5_status" id="" class="form-control">
                                            <option value="Filed" <?php if ($gstr3b_return_period5_status === 'Filed') echo "selected"; ?>>Filed</option>
                                            <option value="Not Filed" <?php if ($gstr3b_return_period5_status === 'Not Filed') echo "selected"; ?>>Not Filed</option>
                                            <option value="To Be Filed" <?php if ($gstr3b_return_period5_status === 'To Be Filed') echo "selected"; ?>>To Be Filed</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Financial Year</label>
                                        <select name="financial_year" class="form-control" id="pos">
                                            <option value="" disabled="" <?= ((empty($financial_year)) ? 'selected' : ''); ?>>Select</option>
                                            <?php
                                            foreach ($financial_period_list as $k => $value) {
                                                echo '<option value="' . $k . '" ' . set_value('financial_year', ((!empty($financial_year)) ? (($financial_year == $k) ? 'selected' : '') : '')) . '>' . $value . '</option>';
                                            }
                                            ?>
                                        </select>
<!--                                        <input name="financial_year" type="text" class="form-control" placeholder="" value="--><?//= $financial_year; ?><!--">-->
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Quarter</label>
                                        <select name="quarter" class="form-control" id="pos">
                                            <option value="" disabled="" <?= ((empty($quarter)) ? 'selected' : ''); ?>>Select</option>
                                            <?php
                                            foreach ($quarter_list as $k => $value) {
                                                echo '<option value="' . $k . '" ' . set_value('quarter', ((!empty($quarter)) ? (($quarter == $k) ? 'selected' : '') : '')) . '>' . $value . '</option>';
                                            }
                                            ?>
                                        </select>
<!--                                        <input name="quarter" type="text" class="form-control" placeholder="" value="--><?//= $quarter; ?><!--">-->
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Period</label>
                                        <input name="period" type="text" class="form-control" placeholder="" value="<?= $period; ?>">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">GST Return Period</label>
                                        <select name="return_period" id="" class="form-control">
                                            <option value="Monthly" <?php if ($return_period === 'Monthly') echo "selected"; ?>>Monthly</option>
                                            <option value="Quarterly" <?php if ($return_period === 'Quarterly') echo "selected"; ?>>Quarterly</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">GSTR1 Due Date</label>
                                        <input name="gstr1_due_date" type="text" class="form-control" placeholder="" value="<?= $gstr1_due_date; ?>">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">GSTR3B Due Date</label>
                                        <input name="gstr3b_due_date" type="text" class="form-control" placeholder="" value="<?= $gstr3b_due_date; ?>">
                                    </div>
<!--                                    <div class="col form-group">-->
<!--                                        <label for="">GSTR2B Data</label>-->
<!--                                        <div class="custom-file">-->
<!--                                            <input type="file" class="custom-file-input" id="customFile">-->
<!--                                            <label class="custom-file-label" for="customFile">Choose file</label>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                </div>
                                <div class="row">
<!--                                    <div class="col form-group">-->
<!--                                        <label for="">FY</label>-->
<!--                                        <input type="text" name="financial_year" class="form-control" placeholder="">-->
<!--                                    </div>-->
                                    <div class="col form-group">
                                        <label for="">Legal Name</label>
                                        <input type="text" name="legal_name" class="form-control" placeholder="" value="<?= $legal_name; ?>">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Trade Name</label>
                                        <input type="text" name="trade_name" class="form-control" placeholder="" value="<?= $trade_name; ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Status</label>
                                        <select name="status" id="" class="form-control">
                                            <option value="Individual" <?php if ($status === 'Individual') echo "selected"; ?>>Individual</option>
                                            <option value="Firm" <?php if ($status === 'Firm') echo "selected"; ?>>Firm</option>
                                            <option value="LLP" <?php if ($status === 'LLP') echo "selected"; ?>>LLP</option>
                                            <option value="Company" <?php if ($status === 'Company') echo "selected"; ?>>Company</option>
                                            <option value="Trust" <?php if ($status === 'Trust') echo "selected"; ?>>Trust</option>
                                            <option value="AOI" <?php if ($status === 'AOI') echo "selected"; ?>>AOI</option>
                                            <option value="BOI" <?php if ($status === 'BOI') echo "selected"; ?>>BOI</option>
                                        </select>
<!--                                        <input type="text" name="status" id="" class="form-control" value="--><?//= $status; ?><!--">-->
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Signatory </label>
                                        <input type="text" name="signatory" id="" class="form-control" value="<?= $signatory; ?>">
                                    </div>
                                    <div class="col"></div>
                                </div>
                                <button type="submit" class="btn btn-primary">Save Company</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
