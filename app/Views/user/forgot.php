<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login - PracticePot</title>
 <!-- Favicon -->
    <link rel="shortcut icon" href="../public/assets/frontend/images/pp-fav.png">
<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="<?= base_url('public/assets/user/css/custom.css') ?>" rel="stylesheet">
<style>
 body {
    background: #f5f5f5;
    font-family: 'Segoe UI', sans-serif;
}

/* LEFT SECTION */
.hero-left {
    padding: 40px;
}

.hero-left h1 {
    font-size: 42px;
    font-weight: 700;
}

.hero-left span {
    color: #ff7a00;
}

.hero-left p {
    color: #666;
    margin-top: 15px;
    max-width: 500px;
    font-size: 15px;
}

/* Feature */
.feature {
    display: flex;
    align-items: center;
    margin-top: 18px;
}

.feature-icon {
    width: 35px;
    height: 35px;
    background: #ffe5cc;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 12px;
    color: #ff7a00;
    font-size: 14px;
}

/* LOGIN CARD */
.login-card {
    background: #fff;
    padding: 30px;
    border-radius: 16px;
    box-shadow: 0px 8px 25px rgba(0,0,0,0.08);
    width: 100%;
    max-width: 420px;
}

.login-card h3 {
    font-weight: 700;
}

.login-btn {
    background: #ff7a00;
    border: none;
    width: 100%;
    padding: 12px;
    border-radius: 8px;
    color: #fff;
    font-weight: 600;
}

.login-btn:hover {
    background: #e86d00;
}

/* INPUT GROUP FIX */
.input-group .btn {
    border-left: 0;
}

/* MOBILE RESPONSIVE */
@media (max-width: 992px) {
    .hero-left {
        text-align: center;
        padding: 20px;
    }

    .hero-left h1 {
        font-size: 30px;
    }

    .hero-left p {
        margin: 10px auto;
    }
}

@media (max-width: 768px) {
    .hero-left {
        display: block !important; /* show content */
        margin-bottom: 30px;
    }

    .row {
        padding: 0 15px !important;
    }

    .login-card {
        padding: 20px;
    }
}

@media (max-width: 480px) {
    .hero-left h1 {
        font-size: 24px;
    }

    .login-card {
        padding: 18px;
    }
}
</style>

</head>

<body>
    
 <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3">
        <div class="container">

            <!-- Logo (Left) -->
            <a class="navbar-brand" href="<?= base_url() ?>">
                <img src="<?= base_url('public/assets/frontend/images/pp-logo.png') ?>" alt="Logo" height="70">
            </a>

            <!-- Mobile Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu + Button -->
            <div class="collapse navbar-collapse justify-content-between" id="mainNavbar">

                <!-- Center Menu -->
                <!--<ul class="navbar-nav mx-auto text-center">-->
                <!--    <li class="nav-item">-->
                <!--        <a class="nav-link px-3" href="#">Explore</a>-->
                <!--    </li>-->
                <!--    <li class="nav-item">-->
                <!--        <a class="nav-link px-3" href="#">Internship</a>-->
                <!--    </li>-->
                <!--    <li class="nav-item">-->
                <!--        <a class="nav-link px-3" href="#">Simulation</a>-->
                <!--    </li>-->
                <!--    <li class="nav-item">-->
                <!--        <a class="nav-link px-3" href="#">Blog</a>-->
                <!--    </li>-->
                <!--    <li class="nav-item">-->
                <!--        <a class="nav-link px-3" href="#">For Enterprise</a>-->
                <!--    </li>-->
                <!--    <li class="nav-item">-->
                <!--        <a class="nav-link px-3" href="#">For Educators</a>-->
                <!--    </li>-->
                <!--    <li class="nav-item">-->
                <!--        <a class="nav-link px-3" href="#">Support</a>-->
                <!--    </li>-->
                <!--</ul>-->

                <!-- Right Button -->
                <div class="ms-auto d-flex align-items-center">

                    <!-- Login -->
                    <a href="<?= base_url('user') ?>" class="nav-link fw-medium me-4 login-link">
                        Login
                    </a>

                    <!-- Get Started Button -->
                    <!--<a href="<?= base_url('user') ?>" class="btn get-started-btn">-->
                    <!--    Get Started-->
                    <!--</a>-->

                </div>

            </div>
        </div>
    </nav>
    <div class="container py-5">
    <div class="row align-items-center justify-content-center g-5">

        <!-- LEFT CONTENT -->
        <div class="col-lg-6">
            <div class="hero-left">

                <span class="badge bg-warning text-dark px-3 py-2 mb-3 rounded-pill">
                    Secure Account Recovery
                </span>

                <h1>
                    Forgot Your <span>Password?</span>
                </h1>

                <p>
                    Don’t worry. Enter your registered email address and we’ll send you instructions to reset your password securely.
                </p>

                <!-- FEATURES -->
                <div class="mt-4">

                    <div class="feature">
                        <div class="feature-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                        <div>
                            <strong>Secure Recovery</strong><br>
                            <small class="text-muted">Your account stays protected.</small>
                        </div>
                    </div>

                    <div class="feature">
                        <div class="feature-icon">
                            <i class="bi bi-envelope-check"></i>
                        </div>
                        <div>
                            <strong>Email Verification</strong><br>
                            <small class="text-muted">Reset link sent instantly.</small>
                        </div>
                    </div>

                    <div class="feature">
                        <div class="feature-icon">
                            <i class="bi bi-lightning-charge"></i>
                        </div>
                        <div>
                            <strong>Quick Access</strong><br>
                            <small class="text-muted">Get back to learning fast.</small>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- RIGHT CARD -->
        <div class="col-lg-5 col-md-8">

            <div class="login-card">

                <div class="text-center mb-4">
                    <div class="mb-3">
                        <div style="
                            width:70px;
                            height:70px;
                            background:#fff3e6;
                            border-radius:50%;
                            display:inline-flex;
                            align-items:center;
                            justify-content:center;
                            color:#ff7a00;
                            font-size:28px;
                        ">
                            <i class="bi bi-key"></i>
                        </div>
                    </div>

                    <h3 class="mb-2">Reset Password</h3>

                    <p class="text-muted mb-0">
                        Enter your email to receive password reset instructions.
                    </p>
                </div>

                <?php if (session()->getFlashdata('message')): ?>
                    <div class="alert alert-info rounded-3 border-0">
                        <?= session()->getFlashdata('message') ?>
                    </div>
                <?php endif; ?>

                <form action="" method="post">

                    <div class="mb-4">
                        <label class="form-label fw-semibold">
                            Email Address
                        </label>

                        <div class="input-group">

                            <span class="input-group-text bg-white border-end-0">
                                <i class="bi bi-envelope text-muted"></i>
                            </span>

                            <input
                                type="email"
                                class="form-control border-start-0 ps-0"
                                id="email"
                                name="email"
                                placeholder="Enter your registered email"
                                required
                            >
                        </div>
                    </div>

                    <button class="login-btn">
                        <i class="bi bi-send me-2"></i>
                        Request Password Reset
                    </button>

                    <?php if (isset($validation)): ?>
                        <div class="alert alert-danger mt-4 rounded-3">
                            <?= $validation->listErrors() ?>
                        </div>
                    <?php endif; ?>

                </form>

                <!-- EXTRA LINKS -->
                <div class="text-center mt-4">

                    <a href="<?= base_url('user'); ?>"
                       class="text-decoration-none fw-semibold"
                       style="color:#ff7a00;">
                        <i class="bi bi-arrow-left me-1"></i>
                        Back to Login
                    </a>

                </div>

            </div>

        </div>

    </div>
</div>

    
    
    
    
    
<!--<div class="app">-->
<!--    <div class="container-fluid">-->
<!--        <div class="d-flex full-height p-v-15 flex-column justify-content-between">-->
             
<!--            <div class="container mt-5">-->
<!--                <div class="row align-items-center">-->
<!--                    <div class="col-md-5">-->
<!--                        <div class="card">-->
<!--                            <div class="card-body">-->
<!--                                <h2 class="m-t-20">Forgot Password</h2>-->
<!--                                <?php if (session()->getFlashdata('message')): ?>-->
<!--                                    <div class="alert alert-info" role="alert">-->
<!--                                        <?= session()->getFlashdata('message') ?>-->
<!--                                    </div>-->
<!--                                <?php endif; ?>-->
<!--                                <p class="m-b-30 mt-2">Request a new password</p>-->
<!--                                <form action="" method="post">-->
<!--                                    <div class="form-group">-->
<!--                                        <label class="font-weight-semibold" for="userName">Email:</label>-->
<!--                                        <div class="input-affix">-->
<!--                                            <i class="prefix-icon anticon anticon-user"></i>-->
<!--                                            <input type="email" class="form-control" id="email" name="email" placeholder="email">-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="form-group mt-4">-->
<!--                                        <div class="d-flex align-items-center justify-content-between">-->
<!--                                            <button class="btn btn-orange btn-run">Request Password</button>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <?php if (isset($validation)): ?>-->
<!--                                        <div class="col-12">-->
<!--                                            <div class="alert alert-danger" role="alert">-->
<!--                                                <?= $validation->listErrors() ?>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    <?php endif; ?>-->
<!--                                </form>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                    <!--<div class="offset-md-1 col-md-6 d-none d-md-block">-->
                    <!--    <img class="img-fluid" src="../public/assets/user/images/others/login-2.png" alt="">-->
                    <!--</div>-->
<!--                </div>-->
<!--            </div>-->
            <!--<div class="d-none d-md-flex  p-h-40 justify-content-between">-->
            <!--    <span class=""></span>-->
            <!--    <ul class="list-inline">-->
            <!--        <li class="list-inline-item">-->
            <!--            <a class="text-dark text-link" href="">Legal</a>-->
            <!--        </li>-->
            <!--        <li class="list-inline-item">-->
            <!--            <a class="text-dark text-link" href="">Privacy</a>-->
            <!--        </li>-->
            <!--    </ul>-->
            <!--</div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->


<?php include('layout/footer.php'); ?>
