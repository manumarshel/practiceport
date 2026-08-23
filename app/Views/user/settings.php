<?php include('layout/header.php'); ?>

<div class="row g-4">

    <!-- PROFILE INFORMATION -->
   

    <!-- CHANGE PASSWORD -->
    <div class="col-12">

        <div class="custom-card mt-4">

            <div class="card-header-custom">
                <div>
                    <h4 class="mb-1">Change Password</h4>
                    <!--<p class="mb-0 text-muted">Keep your account secure</p>-->
                </div>
            </div>

            <div class="card-body-custom mt-3">

                <?php if (session()->getFlashdata('message')): ?>
                    <div class="alert alert-success custom-alert" role="alert">
                        <?= session()->getFlashdata('message') ?>
                    </div>
                <?php endif; ?>

                <form action="reset-password" method="post">

                    <div class="row g-4">

                        <div class="col-md-7">
                            <label class="form-label">Current Password</label>
                            <input type="password"
                                   class="form-control custom-input"
                                   id="current_password"
                                   name="current_password"
                                   placeholder="Current Password">
                        </div>

                        <div class="col-md-7">
                            <label class="form-label">New Password</label>
                            <input type="password"
                                   class="form-control custom-input"
                                   id="password"
                                   name="password"
                                   placeholder="New Password">
                        </div>

                        <div class="col-md-7">
                            <label class="form-label">Confirm Password</label>
                            <input type="password"
                                   class="form-control custom-input"
                                   id="confirm_password"
                                   name="confirm_password"
                                   placeholder="Confirm Password">
                        </div>

                    </div>

                    <div class="mt-4">
                        <button type="submit" class="btn btn-orange px-4 btn-run">
                            <i class="bi bi-shield-lock me-2 "></i>
                            Reset Password
                        </button>
                    </div>

                    <?php if (isset($validation)): ?>
                        <div class="mt-4">
                            <div class="alert alert-danger">
                                <?= $validation->listErrors() ?>
                            </div>
                        </div>
                    <?php endif; ?>

                </form>

            </div>

        </div>

    </div>

</div>
<?php include('layout/footer.php'); ?>

