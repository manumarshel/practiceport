<?= $this->extend('admin/layouts/main2'); ?>

<?= $this->section('main_content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Basic Infomation</h4>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="font-weight-semibold" for="userName">User Name:</label>
                            <input type="text" class="form-control" id="userName" placeholder="User Name" value="Marshall Nichols">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="font-weight-semibold" for="email">Email:</label>
                            <input type="password" class="form-control" id="email" placeholder="email" value="@marshallnich">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label class="font-weight-semibold" for="phoneNumber">Phone Number:</label>
                            <input type="text" class="form-control" id="phoneNumber" placeholder="Phone Number">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="font-weight-semibold" for="dob">Company Name</label>
                            <input type="text" class="form-control" id="dob" placeholder="Date of Birth">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="font-weight-semibold" for="language">State</label>
                            <select id="language" class="form-control">
                                <option>Kerala</option>
                                <option>TamilNadu</option>
                                <option>Karnataka</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Change Password</h4>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label class="font-weight-semibold" for="oldPassword">Old Password:</label>
                            <input type="password" class="form-control" id="oldPassword" placeholder="Old Password">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="font-weight-semibold" for="newPassword">New Password:</label>
                            <input type="password" class="form-control" id="newPassword" placeholder="New Password">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="font-weight-semibold" for="confirmPassword">Confirm Password:</label>
                            <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password">
                        </div>
                        <div class="form-group col-md-3">
                            <button class="btn btn-primary m-t-30">Change</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Address Details</h4>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label class="font-weight-semibold" for="fullAddress">Full Address:</label>
                            <input type="text" class="form-control" id="fullAddress" placeholder="Full Address">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="font-weight-semibold" for="stateCity">City:</label>
                            <input type="text" class="form-control" id="stateCity" placeholder="State & City">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="font-weight-semibold" for="language">State</label>
                            <select id="language-2" class="form-control">
                                <option>Kerala</option>
                                <option>TamilNadu</option>
                                <option>Karnataka</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>

