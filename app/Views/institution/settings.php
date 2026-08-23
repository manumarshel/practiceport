<?= $this->extend('institution/layouts/main'); ?>

<?= $this->section('main_content'); ?>
<style>
  .text-dark{
      color:#000;
  }
</style>
<div class="row">
    <div class="col-md-12">
        <!--<div class="card">-->
        <!--    <div class="card-header">-->
        <!--        <h4 class="card-title">Basic Infomation</h4>-->
        <!--    </div>-->
        <!--    <div class="card-body">-->
        <!--        <form>-->
        <!--            <div class="form-row">-->
        <!--                <div class="form-group col-md-12">-->
        <!--                    <label class="font-weight-semibold" for="userName">Title:</label>-->
        <!--                    <input type="text" class="form-control" name="title" id="title" placeholder="First Name" value="<?php if(isset($user_info['title'])) echo $user_info['title']; ?>">-->
        <!--                </div> -->
        <!--            </div>-->
        <!--            <div class="form-row">-->
        <!--                <div class="form-group col-md-6">-->
        <!--                    <label class="font-weight-semibold" for="phoneNumber">Phone Number:</label>-->
        <!--                    <input type="text" class="form-control" name="phoneNumber" id="phoneNumber" placeholder="Phone Number" value="<?php if(isset($user_info['phone'])) echo $user_info['phone']; ?>">-->
        <!--                </div>-->
        <!--                <div class="form-group col-md-6">-->
        <!--                    <label class="font-weight-semibold" for="email">Email:</label>-->
        <!--                    <input type="text" class="form-control" name="email" id="email" placeholder="email" value="<?php if(isset($user_info['email'])) echo $user_info['email']; ?>">-->
        <!--                </div> -->
        <!--            </div>-->
        <!--            <div class="form-group col-md-3">-->
        <!--                <button class="btn btn-primary m-t-30">Update</button>-->
        <!--            </div>-->
        <!--        </form>-->
        <!--    </div>-->
        <!--</div>-->
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Change Password</h4>
            </div>
            <div class="card-body">
                <?php if (session()->getFlashdata('message')): ?>
                    <div class="alert alert-info" role="alert">
                        <?= session()->getFlashdata('message') ?>
                    </div>
                <?php endif; ?>
                <form action="reset-password" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-7 ">
                            <label class="font-weight-semibold" for="current_password">Current Password:</label>
                            <input type="password" class="form-control text-dark" id="current_password" name="current_password" placeholder="Current Password" >
                        </div>
                        <div class="form-group col-md-7 ">
                            <label class="font-weight-semibold" for="password">New Password:</label>
                            <input type="password" class="form-control text-dark" id="password" name="password" placeholder="New Password">
                        </div>
                        <div class="form-group col-md-7 ">
                            <label class="font-weight-semibold" for="confirm_password">Confirm Password:</label>
                            <input type="password" class="form-control text-dark" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
                        </div>
                        <br>
                        <div class="form-group col-md-3">
                            <button class="btn btn-primary m-t-30">Reset</button>
                        </div>
                    </div>

                    <?php if (isset($validation)): ?>
                        <div class="col-12">
                            <div class="alert alert-danger" role="alert">
                                <?= $validation->listErrors() ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </form>
            </div>
        </div>
<!--        <div class="card">-->
<!--            <div class="card-header">-->
<!--                <h4 class="card-title">Address Details</h4>-->
<!--            </div>-->
<!--            <div class="card-body">-->
<!--                <form>-->
<!--                    <div class="form-row">-->
<!--                        <div class="form-group col-md-12">-->
<!--                            <label class="font-weight-semibold" for="fullAddress">Full Address:</label>-->
<!--                            <input type="text" class="form-control" id="fullAddress" placeholder="Full Address">-->
<!--                        </div>-->
<!--                        <div class="form-group col-md-6">-->
<!--                            <label class="font-weight-semibold" for="stateCity">City:</label>-->
<!--                            <input type="text" class="form-control" id="stateCity" placeholder="State & City">-->
<!--                        </div>-->
<!--                        <div class="form-group col-md-6">-->
<!--                            <label class="font-weight-semibold" for="language">State</label>-->
<!--                            <select id="language-2" class="form-control">-->
<!--                                <option>Kerala</option>-->
<!--                                <option>TamilNadu</option>-->
<!--                                <option>Karnataka</option>-->
<!--                            </select>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
    </div>
</div>
<?= $this->endSection(); ?>

