<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login - PracticePot</title>
 <!-- Favicon -->
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url('public/assets/frontend/images/pp-fav.png') ?>">
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
<div class="container-fluid">
<div class="row mb-5 g-4 px-3 px-md-5">

    <!-- LEFT -->
    <div class="col-lg-7 col-12 mt-4 mt-lg-5 hero-left">
        <div>
            <h1>Welcome Back to <br><span>PracticePot</span></h1>

            <p>
                Continue your journey to master accounting and auditing through
                practical simulations and real-world experience.
            </p>

            <div class="feature">
                <div class="feature-icon">✔</div>
                <div>Access 100+ GST filing simulations</div>
            </div>

            <div class="feature">
                <div class="feature-icon">✔</div>
                <div>Track your learning progress</div>
            </div>

            <div class="feature">
                <div class="feature-icon">✔</div>
                <div>Earn certificates and credentials</div>
            </div>
        </div>
    </div>

    <!-- RIGHT -->
    <div class="col-lg-5 col-12 d-flex mt-4 mt-lg-5 justify-content-center">

        <div class="login-card">

            <h3>Login to Your Account</h3>
            <p class="text-muted">Enter your credentials to access your learning dashboard</p>
                                 <?php if (session()->get('success')): ?>
                                    <div class="alert alert-success" role="alert">
                                        <?= session()->get('success') ?>
                                    </div>
                                <?php endif; ?>
            <form action="<?= base_url('demo_user') ?>" method="post">
                <div class="mb-3">
                    <label>Email Address</label> 
                    <input type="email" class="form-control" id="email" name="email" placeholder="email">
                </div>
<div class="mb-3">
    <label>Password</label>

    <div class="input-group">
        <input type="password" 
               class="form-control" 
               id="password" 
               name="password" 
               placeholder="Password">

        <button class="btn btn-outline-secondary" 
                type="button" 
                id="togglePassword">
            <i class="bi bi-eye text-dark" id="toggleIcon"></i>
        </button>
    </div>
</div>

                <div class="d-flex justify-content-between mb-3">
                   <div>
                        <input type="checkbox"> Remember me
                    </div>
                    <a href="<?= base_url('user/forgot') ?>" style="color:#ff7a00;">Forgot Password?</a>
                </div>

                <button class="login-btn">Login →</button>

                <!--<div class="text-center mt-4 mb-2 text-muted">Or continue with</div>-->

                <!--<div class="d-flex justify-content-between">-->
                <!--    <div class="social-btn">Google</div>-->
                <!--    <div class="social-btn">Facebook</div>-->
                <!--</div>-->

                <div class="text-center mt-3">
                    Don't have an account?
                    <a href="#" style="color:#ff7a00;">Sign up</a>
                </div>

            </form>

        </div>

    </div>

</div>
</div>

<script> 
document.getElementById("togglePassword").addEventListener("click", function () {
    let password = document.getElementById("password");
    let icon = document.getElementById("toggleIcon");

    if (password.type === "password") {
        password.type = "text";
        icon.classList.remove("bi-eye");
        icon.classList.add("bi-eye-slash");
    } else {
        password.type = "password";
        icon.classList.remove("bi-eye-slash");
        icon.classList.add("bi-eye");
    }
}); 
</script>
<?php include('layout/footer.php'); ?>
 

 