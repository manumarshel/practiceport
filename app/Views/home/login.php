<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sign In | PracticePot Simulation</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url('public/assets/frontend/images/pp-fav.png') ?>">

    <!-- Google Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #f8fafc;
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            color: #1e293b;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .auth-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
            padding: 38px 34px;
        }

        .portal-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            background: #fff7ed;
            color: #ea580c;
            border: 1px solid #ffedd5;
            margin-bottom: 14px;
        }

        .form-control {
            height: 46px;
            border-radius: 9px;
            border: 1px solid #cbd5e1;
            padding-left: 42px;
            font-size: 14px;
            transition: all 0.2s ease;
        }

        .form-control:focus {
            border-color: #ff7a00;
            box-shadow: 0 0 0 3px rgba(255, 122, 0, 0.15);
        }

        .input-icon-wrap {
            position: relative;
        }

        .input-icon-wrap .prefix-icon {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #94a3b8;
            font-size: 16px;
            z-index: 4;
        }

        .field-icon {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #94a3b8;
            cursor: pointer;
            z-index: 4;
            font-size: 16px;
            transition: color 0.2s ease;
        }

        .field-icon:hover {
            color: #334155;
        }

        .btn-auth-submit {
            background: linear-gradient(135deg, #ff7a00 0%, #ea580c 100%);
            border: none;
            color: #ffffff;
            font-weight: 600;
            padding: 12px 24px;
            border-radius: 9px;
            font-size: 14.5px;
            transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 12px rgba(234, 88, 12, 0.25);
        }

        .btn-auth-submit:hover {
            background: linear-gradient(135deg, #e86d00 0%, #c2410c 100%);
            color: #ffffff;
            transform: translateY(-1px);
            box-shadow: 0 6px 16px rgba(234, 88, 12, 0.35);
        }

        .feature-bullet {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 16px;
        }

        .feature-bullet-icon {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            background: #fff7ed;
            color: #ea580c;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            flex-shrink: 0;
        }

        .footer-auth {
            border-top: 1px solid #e2e8f0;
            padding: 18px 40px;
            font-size: 13px;
            color: #64748b;
        }
    </style>
</head>

<body>

    <!-- TOP NAV -->
    <header class="py-3 px-4 px-md-5 d-flex justify-content-between align-items-center">
        <a href="<?= base_url() ?>">
            <img src="<?= base_url('public/assets/frontend/images/pp-logo.png') ?>" alt="PracticePot" width="130">
        </a>
        <div>
            <a href="<?= base_url() ?>" class="btn btn-sm btn-outline-secondary d-inline-flex align-items-center gap-1 font-weight-semibold">
                <i class="bi bi-box-arrow-left"></i> Back to Main Site
            </a>
        </div>
    </header>

    <!-- MAIN BODY -->
    <main class="container my-auto py-4">
        <div class="row align-items-center justify-content-center">
            
            <!-- LEFT: HERO DESCRIPTION -->
            <div class="col-lg-6 mb-4 mb-lg-0 pe-lg-4">
                <div class="p-2">
                    <h1 class="font-weight-bold text-dark mb-3" style="font-size: 32px; line-height: 1.25; font-weight: 800;">
                        Master Practical Tax & Accounting <br><span style="color: #ff7a00;">Through Real Simulations</span>
                    </h1>
                    <p class="text-muted mb-4" style="font-size: 15px; line-height: 1.6;">
                        Step into live enterprise portals. Practice real filings, solve real-world tax cases, and earn career-ready experience on PracticePot.
                    </p>

                    <div class="feature-bullet">
                        <div class="feature-bullet-icon">
                            <i class="bi bi-play-btn-fill"></i>
                        </div>
                        <div>
                            <span class="fw-bold text-dark d-block">Structured Video Lessons & Walkthroughs</span>
                            <small class="text-muted">High-definition step-by-step practical guides</small>
                        </div>
                    </div>

                    <div class="feature-bullet">
                        <div class="feature-bullet-icon">
                            <i class="bi bi-laptop"></i>
                        </div>
                        <div>
                            <span class="fw-bold text-dark d-block">Interactive Enterprise Portals</span>
                            <small class="text-muted">GST, TDS, UAE VAT, ESIC, PF & Tally live simulation</small>
                        </div>
                    </div>

                    <div class="feature-bullet">
                        <div class="feature-bullet-icon">
                            <i class="bi bi-award-fill"></i>
                        </div>
                        <div>
                            <span class="fw-bold text-dark d-block">Real-World Case Assessments</span>
                            <small class="text-muted">Upload solution sheets and receive instructor grading</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT: SIGN IN CARD -->
            <div class="col-lg-5 offset-lg-1 col-md-8">
                <div class="auth-card">
                    <div class="portal-badge">
                        <i class="bi bi-person-fill"></i> Student Portal
                    </div>

                    <h3 class="font-weight-bold text-dark mb-1" style="font-size: 22px; letter-spacing: -0.3px; font-weight: 700;">Student Sign In</h3>
                    <p class="text-muted mb-4" style="font-size: 13.5px;">Sign in to access your modules, simulations, and assessments.</p>

                    <?php if (session()->getFlashdata('success') || session()->get('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?= session()->getFlashdata('success') ?: session()->get('success') ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <?php if (session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?= session()->getFlashdata('error') ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <?php if (isset($validation)): ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $validation->listErrors() ?>
                        </div>
                    <?php endif; ?>

                    <form action="<?= base_url('user') ?>" method="post">
                        <?= csrf_field() ?>

                        <div class="mb-3">
                            <label class="form-label fw-semibold text-dark small mb-1" for="email">Student Email Address</label>
                            <div class="input-icon-wrap">
                                <i class="bi bi-envelope prefix-icon"></i>
                                <input type="email" class="form-control" id="email" name="email" placeholder="student@example.com" value="<?= set_value('email') ?>" required autofocus>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <label class="form-label fw-semibold text-dark small mb-0" for="password">Password</label>
                            </div>
                            <div class="input-icon-wrap">
                                <i class="bi bi-lock prefix-icon"></i>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                                <i class="bi bi-eye field-icon toggle-password" data-toggle="#password"></i>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-4" style="font-size: 13px;">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="rememberMe">
                                <label class="form-check-label text-muted" for="rememberMe">Remember me</label>
                            </div>
                            <a href="<?= base_url('user/forgot') ?>" class="text-decoration-none fw-semibold" style="color: #ea580c;">Forgot Password?</a>
                        </div>

                        <div class="mb-0">
                            <button type="submit" class="btn btn-auth-submit w-100 d-flex align-items-center justify-content-center gap-2">
                                <span>Sign In to Learning Dashboard</span>
                                <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </main>

    <!-- FOOTER -->
    <footer class="footer-auth d-flex justify-content-between align-items-center flex-wrap gap-2">
        <span>&copy; <?= date('Y') ?> PracticePot. All rights reserved.</span>
        <div>
            <span class="text-muted">Secured Learning Portal</span>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".toggle-password").click(function() {
                $(this).toggleClass("bi-eye bi-eye-slash");
                var input = $($(this).attr("data-toggle"));
                if (input.attr("type") === "password") {
                    input.attr("type", "text");
                } else {
                    input.attr("type", "password");
                }
            });
        });
    </script>
</body>

</html>