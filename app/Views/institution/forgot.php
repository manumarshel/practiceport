<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Forgot Password | PracticePot GST Simulation</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../public/assets/frontend/images/pp-fav.png">

    <!-- page css -->

    <!-- Core css -->
    <link href="../../public/assets/user/css/app.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../public/assets/user/css/style.css">
    <style>
        .btn-primary {
            background-color: #fc9202;
            border-color: #fc9202;
            color: #fff;
        }
        .btn-primary:hover, .btn-primary:focus {
            color: #fff;
            background-color: #fdc100;
            border-color: #fdc100;
        }
        a {
            color: #fc9202;
        }
        a:hover{
            color: #fdc100;
        }
    </style>

</head>

<body>
<div class="app">
    <div class="container-fluid">
        <div class="d-flex full-height p-v-15 flex-column justify-content-between">
            <div class="d-none d-md-flex p-h-40">
                <a href="<?= base_url() ?>/">
                    <img src="<?= base_url('public/assets/frontend/images/pp-logo.png') ?>" alt="" class="logo" width="90">
                </a>
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="m-t-20">Forgot Password</h2>
                                <?php if (session()->getFlashdata('message')): ?>
                                    <div class="alert alert-info" role="alert">
                                        <?= session()->getFlashdata('message') ?>
                                    </div>
                                <?php endif; ?>
                                <p class="m-b-30">Request a new password</p>
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="userName">Email:</label>
                                        <div class="input-affix">
                                            <i class="prefix-icon anticon anticon-user"></i>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <button class="btn btn-primary">Request Password</button>
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
                    <div class="offset-md-1 col-md-6 d-none d-md-block">
                        <img class="img-fluid" src="../public/assets/user/images/others/login-2.png" alt="">
                    </div>
                </div>
            </div>
            <div class="d-none d-md-flex  p-h-40 justify-content-between">
                <span class=""></span>
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
<script src="../public/assets/user/js/vendors.min.js"></script>

<!-- page js -->

<!-- Core JS -->
<script src="../public/assets/user/js/app.min.js"></script>

</body>

</html>
