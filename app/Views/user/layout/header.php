<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practicepot User Dashboard</title>

    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <link href="<?= base_url('public/assets/user/css/new_custom.css') ?>" rel="stylesheet">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        body {
            overflow-x: hidden;
            background-color: #f8fafc;
        }
        @media (min-width: 992px) {
            .sidebar {
                position: fixed !important;
                top: 0;
                left: 0;
                bottom: 0;
                width: 16.666667% !important;
                height: 100vh !important;
                z-index: 1020;
                overflow-y: auto;
                overflow-x: hidden;
            }
            .main-content-col {
                margin-left: 16.666667% !important;
                width: 83.333333% !important;
                min-height: 100vh;
            }
        }
        @media (min-width: 768px) and (max-width: 991.98px) {
            .sidebar {
                position: fixed !important;
                top: 0;
                left: 0;
                bottom: 0;
                width: 25% !important;
                height: 100vh !important;
                z-index: 1020;
                overflow-y: auto;
                overflow-x: hidden;
            }
            .main-content-col {
                margin-left: 25% !important;
                width: 75% !important;
                min-height: 100vh;
            }
        }
        .dashboard-header {
            position: sticky;
            top: 0;
            z-index: 1010;
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var path = window.location.pathname;
            var links = document.querySelectorAll(".sidebar-menu .nav-link");
            links.forEach(function(link) {
                var href = link.getAttribute("href");
                if (href) {
                    var cleanHref = href;
                    try {
                        // If it's a relative URL, resolve it against base URL
                        cleanHref = new URL(href, window.location.origin).pathname;
                    } catch(e) {}
                    
                    var isExact = (path === cleanHref);
                    var isCourseLessonsMatch = (cleanHref.indexOf('/user/dashboard') !== -1 && path.indexOf('/user/course-lessons') !== -1);
                    var isSimulationMatch = (cleanHref.indexOf('/user/simulations') !== -1 && (path.indexOf('/user/simulations') !== -1 || path.indexOf('/simulation/dashboard') !== -1));
                    
                    if (isExact || isCourseLessonsMatch || isSimulationMatch) {
                        link.classList.add("active");
                    }
                }
            });
        });
    </script>
</head>
<body>

<div class="container-fluid">
    <div class="row min-vh-100">

        <!-- SIDEBAR (FIXED ON LEFT) -->
        <div class="col-lg-2 col-md-3 sidebar d-flex flex-column p-0">

            <!-- Logo Area -->
            <div class="px-4 border-bottom d-flex align-items-center bg-white" style="height: 72px;">
                <a href="<?= base_url(); ?>" class="d-inline-flex align-items-center">
                    <img src="<?= base_url() ; ?>/public/assets/frontend/images/pp-logo.png" alt="Practicepot Logo" style="height: 42px; width: auto; object-fit: contain;">
                </a>
            </div>

            <!-- Top Menu -->
            <div class="flex-grow-1 p-3">

                <ul class="nav flex-column gap-2 sidebar-menu">

                    <li class="nav-item">
                        <a href="<?php echo base_url(); ?>/user/dashboard" class="nav-link ">
                            <i class="bi bi-house-door"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?php echo base_url(); ?>/user/simulations" class="nav-link">
                            <i class="bi bi-play-circle"></i>
                            <span>My Simulations</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?php echo base_url(); ?>/user/packages" class="nav-link">
                            <i class="bi bi-bookmark"></i>
                            <span>Subscription</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url(); ?>/user/settings" class="nav-link mb-2">
                            <i class="bi bi-gear"></i>
                            <span>Settings</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('user/logout'); ?>" class="nav-link logout">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>

            </div>

            <!-- Bottom Menu -->
            <div class="p-3 border-top sidebar-bottom">

            </div>

        </div>

        <!-- MAIN CONTENT (SCROLLABLE RIGHT SECTION) -->
        <div class="col-lg-10 col-md-9 p-0 main-content-col" style="background-color: #f8fafc; min-height: 100vh;">

            <!-- TOP BAR -->
            <div class="dashboard-header bg-white px-4 border-bottom d-flex justify-content-between align-items-center" style="height: 72px;">

                <!-- LEFT SIDE TITLE/BRANDING -->
                <div class="header-left d-flex align-items-center gap-2">
                    <span class="badge bg-light text-dark border px-2.5 py-1.5 fw-semibold d-inline-flex align-items-center gap-1.5" style="font-size: 13px;">
                        <i class="bi bi-mortarboard-fill text-warning"></i>
                        <span>Student Learning Portal</span>
                    </span>
                </div>

                <!-- RIGHT SIDE USER PROFILE & LOGOUT -->
                <div class="d-flex align-items-center gap-3">
                    
                    <div class="d-flex align-items-center gap-2.5">
                        <div class="rounded-circle text-white d-flex align-items-center justify-content-center fw-bold shadow-sm" 
                             style="width: 40px; height: 40px; font-size: 15px; background: linear-gradient(135deg, #ff7a00, #ea580c);">
                            <?= strtoupper(substr($user_info['first_name'] ?? 'U', 0, 1) . substr($user_info['last_name'] ?? '', 0, 1)) ?>
                        </div>
                        <div class="text-end d-none d-sm-block">
                            <div class="fw-bold text-dark" style="font-size: 14px; line-height: 1.2;">
                                <?= esc(($user_info['first_name'] ?? '') . ' ' . ($user_info['last_name'] ?? '')) ?>
                            </div>
                            <small class="text-muted" style="font-size: 12px;"><?= esc($user_info['email'] ?? '') ?></small>
                        </div>
                    </div>

                    <div class="vr mx-1 text-secondary opacity-25" style="height: 28px;"></div>

                    <!-- Header Default Logout Button -->
                    <a href="<?= base_url('user/logout'); ?>" class="btn btn-sm btn-outline-danger d-inline-flex align-items-center gap-1.5 fw-semibold px-3 py-1.5" style="border-radius: 8px; font-size: 13px;">
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Logout</span>
                    </a>

                </div> 
            </div>

            <!-- Page Container Wrapper -->
            <div class="p-4">