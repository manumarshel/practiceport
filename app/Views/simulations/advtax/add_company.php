<?= $this->extend('admin/layouts/main'); ?>

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
                        <div class="col-md-12">
                            <form action="add-company" method="post" class="form">
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Company Name</label>
                                        <input name="name" type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">GST number</label>
                                        <input name="gst_number" type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Username</label>
                                        <input name="username" type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Password</label>
                                        <input name="password" type="password" class="form-control" placeholder="">
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
                                        <input name="gstr1_return_period1" type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Retrun Period 2</label>
                                        <input name="gstr1_return_period2" type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Retrun Period 3</label>
                                        <input name="gstr1_return_period3" type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Retrun Period 4</label>
                                        <input name="gstr1_return_period4" type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Retrun Period 5</label>
                                        <input name="gstr1_return_period5" type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Retrun Period 1 Status</label>
                                        <select name="gstr1_return_period1_status" id="" class="form-control">
                                            <option value="">Filed</option>
                                            <option value="">Not Filed</option>
                                            <option value="">To Be Filed</option>
                                        </select>
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Retrun Period 2 Status</label>
                                        <select name="gstr1_return_period2_status" id="" class="form-control">
                                            <option value="">Filed</option>
                                            <option value="">Not Filed</option>
                                            <option value="">To Be Filed</option>
                                        </select>
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Retrun Period 3 Status</label>
                                        <select name="gstr1_return_period3_status" id="" class="form-control">
                                            <option value="">Filed</option>
                                            <option value="">Not Filed</option>
                                            <option value="">To Be Filed</option>
                                        </select>
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Retrun Period 4 Status</label>
                                        <select name="gstr1_return_period4_status" id="" class="form-control">
                                            <option value="">Filed</option>
                                            <option value="">Not Filed</option>
                                            <option value="">To Be Filed</option>
                                        </select>
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Retrun Period 5 Status</label>
                                        <select name="gstr1_return_period5_status" id="" class="form-control">
                                            <option value="">Filed</option>
                                            <option value="">Not Filed</option>
                                            <option value="">To Be Filed</option>
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
                                        <input name="gstr3b_return_period1" type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Retrun Period 2</label>
                                        <input name="gstr3b_return_period2" type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Retrun Period 3</label>
                                        <input name="gstr3b_return_period3" type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Retrun Period 4</label>
                                        <input name="gstr3b_return_period4" type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Retrun Period 5</label>
                                        <input name="gstr3b_return_period5" type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Retrun Period 1 Status</label>
                                        <select name="gstr3b_return_period1_status" id="" class="form-control">
                                            <option value="">Filed</option>
                                            <option value="">Not Filed</option>
                                            <option value="">To Be Filed</option>
                                        </select>
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Retrun Period 2 Status</label>
                                        <select name="gstr3b_return_period2_status" id="" class="form-control">
                                            <option value="">Filed</option>
                                            <option value="">Not Filed</option>
                                            <option value="">To Be Filed</option>
                                        </select>
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Retrun Period 3 Status</label>
                                        <select name="gstr3b_return_period3_status" id="gstr3b_return_period3_status" class="form-control">
                                            <option value="">Filed</option>
                                            <option value="">Not Filed</option>
                                            <option value="">To Be Filed</option>
                                        </select>
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Retrun Period 4 Status</label>
                                        <select name="gstr3b_return_period4_status" id="" class="form-control">
                                            <option value="">Filed</option>
                                            <option value="">Not Filed</option>
                                            <option value="">To Be Filed</option>
                                        </select>
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Retrun Period 5 Status</label>
                                        <select name="gstr3b_return_period5_status" id="" class="form-control">
                                            <option value="">Filed</option>
                                            <option value="">Not Filed</option>
                                            <option value="">To Be Filed</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Financial Year</label>
                                        <input name="financial_year" type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Quarter</label>
                                        <input name="quarter" type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Period</label>
                                        <input name="period" type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">GST Return Period</label>
                                        <select name=return_period" id="" class="form-control">
                                            <option value="">Monthly</option>
                                            <option value="">Quarterly</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">GSTR1 Due Date</label>
                                        <input name="gstr1_due_date" type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">GSTR3B Due Date</label>
                                        <input name="gstr3b_due_date" type="text" class="form-control" placeholder="">
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
                                        <input type="text" name="legal_name" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Trade Name</label>
                                        <input type="text" name="trade_name" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Status</label>
                                        <input type="text" name="status" id="" class="form-control">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Signatory </label>
                                        <input type="text" name="signatory" id="" class="form-control">
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
