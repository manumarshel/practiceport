<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PracticePot</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?=base_url(); ?>/public/assets/user/images/logo/favicon.png">
    <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <!-- page css -->

    <!-- Core css -->
    <link href="<?=base_url(); ?>/public/assets/user/css/app.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url(); ?>/public/assets/user/css/style.css">

</head>

<body>
<div class="app">
    <div class="layout">
        <!-- Header START -->
        <div class="header">
            <div class="logo logo-dark">
                <a href="<?= base_url() ?>">
                    <img src="<?=base_url(); ?>/public/assets/admin/images/logo/pp-logo.png" alt="Logo" width="110">
                    <img class="logo-fold" src="<?=base_url(); ?>/public/assets/admin/images/logo/pp-fold.png" alt="Logo">
                </a>
            </div>
            <!--            <div class="logo logo-white">-->
            <!--                <a href="--><?//= base_url('admin') ?><!--">-->
            <!--                    <img src="../public/assets/admin/images/logo/logo-white.png" alt="Logo">-->
            <!--                    <img class="logo-fold" src="../public/assets/admin/images/logo/logo-fold-white.png" alt="Logo">-->
            <!--                </a>-->
            <!--            </div>-->
            <div class="nav-wrap">
                <ul class="nav-left">
                    <li class="desktop-toggle">
                        <a href="javascript:void(0);">
                            <i class="anticon"></i>
                        </a>
                    </li>
                    <li class="mobile-toggle">
                        <a href="javascript:void(0);">
                            <i class="anticon"></i>
                        </a>
                    </li>
                </ul>
                <ul class="nav-right">
                    <li class="dropdown dropdown-animated scale-left">
                        <div class="pointer" data-toggle="dropdown">
                            <div class="avatar avatar-image  m-h-10 m-r-15 badge-primary">
                                <?php
                                if (session()->get('user_email') != null):
                                    $ff = substr(session()->get('user_email'), 0, 2);
                                    $disp = strtoupper($ff);
                                    ?>
                                    <span><?php echo $disp; ?></span>
                                <?php else:
                                    $ff = 'OT';
                                    $disp = strtoupper($ff);
                                    ?>
                                <span><?php echo $disp; ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="p-b-15 p-t-20 dropdown-menu pop-profile">
                            <div class="p-h-20 p-b-15 m-b-10 border-bottom">
                                <div class="d-flex m-r-50">
                                    <div class="avatar avatar-lg avatar-image badge-primary">
                                        <?php
                                        if (session()->get('user_email') != null):
                                            $ff = substr(session()->get('user_email'), 0, 2);
                                            $disp = strtoupper($ff);
                                            ?>
                                            <span><?php echo $disp; ?></span>
                                        <?php else:
                                            $ff = 'OT';
                                            $disp = strtoupper($ff);
                                            ?>
                                            <span><?php echo $disp; ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="m-l-10">
                                        <p class="m-b-0 text-dark font-weight-semibold"><?php if (isset($user_info['first_name']) && isset($user_info['last_name'])) echo $user_info['first_name'] . ' ' . $user_info['last_name']; ?></p>
                                        <p class="m-b-0 opacity-07"><?php if (isset($user_info['email'])) echo $user_info['email']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="dropdown-item d-block p-h-15 p-v-10">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <i class="anticon opacity-04 font-size-16 anticon-logout"></i>
                                        <span class="m-l-10"><a href="<?= base_url('user/logout'); ?>">Logout</a></span>
                                    </div>
                                    <i class="anticon font-size-10 anticon-right"></i>
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Header END -->

        <!-- Side Nav START -->
        <div class="side-nav">
            <div class="side-nav-inner">
                <ul class="side-nav-menu scrollable">
                    <li class="nav-item dropdown">
                        <a href="<?= base_url('user/dashboard') ?>">
                                <span class="icon-holder">
                                    <i class="anticon anticon-appstore"></i>
                                </span>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="<?= base_url('user/packages') ?>">
                                <span class="icon-holder">
                                    <i class="anticon anticon-audit"></i>
                                </span>
                            <span class="title">Subscription</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="<?= base_url('user/settings') ?>">
                                <span class="icon-holder">
                                    <i class="anticon anticon-lock"></i>
                                </span>
                            <span class="title">Settings</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Side Nav END -->

        <!-- Page Container START -->
        <div class="page-container">

            <!-- Content Wrapper START -->
            <div class="main-content">
                <?= $this->renderSection('main_content'); ?>
            </div>
            <!-- Content Wrapper END -->

            <!-- Footer START -->
            <footer class="footer">
                <div class="footer-content">
                    <p class="m-b-0">Copyright © 2019 Finprov. All rights reserved.</p>
                    <span>
                            <a href="" class="text-gray m-r-15">Term &amp; Conditions</a>
                            <a href="" class="text-gray">Privacy &amp; Policy</a>
                        </span>
                </div>
            </footer>
            <!-- Footer END -->

        </div>
        <!-- Page Container END -->

    </div>
</div>

<!-- Core Vendors JS -->
<script src="<?=base_url(); ?>/public/assets/user/js/vendors.min.js"></script>

<!-- page js -->
<script>
    const baseUrl = '<?php echo base_url(); ?>' + '/user';
</script>
<!-- Core JS -->
<script src="<?=base_url(); ?>/public/assets/user/js/app.min.js"></script>
<script src="<?=base_url(); ?>/public/assets/user/js/main.js?version=<?=time(); ?>"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" ></script>

</body>

</html>
