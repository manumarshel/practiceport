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

        <!-- SIDEBAR -->
        <div class="col-lg-2 col-md-3 sidebar d-flex flex-column p-0">

            <!-- Logo Area -->
            <div class="p-4 border-bottom">
                <a href="<?= base_url(); ?>"> <img
                            src="<?= base_url() ; ?>/public/assets/frontend/images/pp-logo.png" alt="Logo"
                            style="height:65px;"></a>
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

        <!-- MAIN CONTENT -->
        <div class="col-lg-10 col-md-9 p-4">

            <!-- TOP BAR -->
            <div class="dashboard-header">

                <div class="d-flex justify-content-between align-items-start">

                    <!-- LEFT SIDE -->
                    <div class="header-left">

                        <!-- Search Box -->
                        <!--<div class="search-box mb-4">-->
                        <!--    <i class="bi bi-search"></i>-->
                        <!--    <input type="text" placeholder="Search simulations">-->
                        <!--</div>-->

                    </div>

                    <!-- RIGHT SIDE -->
                    <div class="d-flex align-items-center gap-3">

                        <div class="text-end">
                            <div class="fw-semibold"><?php if (isset($user_info['first_name']) && isset($user_info['last_name'])) echo $user_info['first_name'] . ' ' . $user_info['last_name']; ?></div>
                            <small class="text-muted"><?php if (isset($user_info['email'])) echo $user_info['email']; ?></small>
                        </div> 

                    </div> 
                </div> 

            </div>