<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>GST Simulation</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url('public/assets/admin/images/logo/favicon.png') ?>">

    <!-- page css -->

    <!-- Core css -->
    <link href="<?= base_url('public/assets/admin/css/app.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('public/assets/admin/css/style.css') ?>">
    <style>
        .field-icon {
            float: right;
            margin-left: -25px;
            margin-top: 15px;
            position: relative;
            z-index: 2;
        }

        .container{
            padding-top:50px;
            margin: auto;
        }
    </style>
</head>

<body>
<div class="app">
    <div class="container-fluid">
        <div class="d-flex full-height p-v-15 flex-column justify-content-between">
            <div class="d-none d-md-flex p-h-40">
                <img src="<?= base_url('public/assets/admin/images/logo/pp-logo.png') ?>" alt="" width="90">
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="m-t-20">Sign In</h2>
                                <?php if (session()->get('success')): ?>
                                    <div class="alert alert-success" role="alert">
                                        <?= session()->get('success') ?>
                                    </div>
                                <?php endif; ?>
                                <p class="m-b-30">Enter your credential to get access</p>
                                <form action="<?= base_url('admin') ?>" method="post">
                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="userName">Email:</label>
                                        <div class="input-affix">
                                            <i class="prefix-icon anticon anticon-user"></i>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="password">Password:</label>
<!--                                        <a class="float-right font-size-13 text-muted" href="">Forget Password?</a>-->
                                        <div class="input-affix m-b-10">
                                            <i class="prefix-icon anticon anticon-lock"></i>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                            <span data-toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <button class="btn btn-primary">Sign In</button>
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
                    </div>
                    <div class="offset-md-1 col-md-6 d-none d-md-block text-center">
                        <img class="img-fluid" src="<?= base_url('public/assets/frontend/images/dashboard.png') ?>" alt="" style="max-height: 420px; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                    </div>
                </div>
            </div>
            <div class="d-none d-md-flex  p-h-40 justify-content-between">
                <span class="">© 2025 PracticePot</span>
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a class="text-dark text-link" href="">Legal</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="text-dark text-link" href="">Privacy</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<!-- Core Vendors JS -->
<script src="<?= base_url('public/assets/admin/js/vendors.min.js') ?>"></script>

<!-- page js -->

<!-- Core JS -->
<script src="<?= base_url('public/assets/admin/js/app.min.js') ?>"></script>
<script>
    $(document).ready(function() {
        $(".toggle-password").click(function() {

            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("data-toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    });
</script>
</body>

</html>
