<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>GST Simulation</title>

    <!-- Favicon -->
<!--    <link rel="shortcut icon" href="../public/assets/admin/images/logo/favicon.png">-->
    <link rel="shortcut icon" href="<?=base_url(); ?>/public/assets/admin/images/logo/favicon.png">
    <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css" rel="stylesheet">


    <!-- page css -->
    <link href="<?=base_url(); ?>/public/assets/admin/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url(); ?>/public/assets/admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
    <!-- Core css -->
    <link href="<?=base_url(); ?>/public/assets/admin/css/app.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url(); ?>/public/assets/admin/css/style.css">
    
    <style>
        @media (min-width: 992px) {
            .side-nav {
                position: fixed !important;
                top: 70px !important;
                left: 0 !important;
                bottom: 0 !important;
                width: 240px !important;
                z-index: 1000 !important;
                overflow-y: auto !important;
            }
            .header {
                position: fixed !important;
                top: 0 !important;
                left: 0 !important;
                right: 0 !important;
                z-index: 1010 !important;
            }
            .page-container {
                padding-left: 240px !important;
                padding-top: 70px !important;
                min-height: 100vh !important;
            }
        }
    </style>
</head>

<body>
<div class="app">
    <div class="layout">
        <!-- Header START -->
        <div class="header">
            <div class="logo logo-dark">
                <a href="<?= base_url('admin') ?>">
                    <img src="<?=base_url(); ?>/public/assets/admin/images/logo/pp-logo.png" alt="Logo" width="130">
                    <img class="logo-fold" src="<?=base_url(); ?>/public/assets/admin/images/logo/logo-fold.png" alt="Logo">
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
                                <span>AV</span>
                            </div>
                        </div>
                        <div class="p-b-15 p-t-20 dropdown-menu pop-profile">
                            <div class="p-h-20 p-b-15 m-b-10 border-bottom">
                                <div class="d-flex m-r-50">
                                    <div class="avatar avatar-lg avatar-image badge-primary">
                                        <span>AV</span>
                                    </div>
                                    <div class="m-l-10">
                                        <p class="m-b-0 text-dark font-weight-semibold">Abin Varghese</p>
                                        <p class="m-b-0 opacity-07">Finprov LTD</p>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="dropdown-item d-block p-h-15 p-v-10">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <i class="anticon opacity-04 font-size-16 anticon-lock"></i>
                                        <span class="m-l-10">Account Setting</span>
                                    </div>
                                    <i class="anticon font-size-10 anticon-right"></i>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item d-block p-h-15 p-v-10">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <i class="anticon opacity-04 font-size-16 anticon-project"></i>
                                        <span class="m-l-10">Companies</span>
                                    </div>
                                    <i class="anticon font-size-10 anticon-right"></i>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item d-block p-h-15 p-v-10">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <i class="anticon opacity-04 font-size-16 anticon-logout"></i>
                                        <span class="m-l-10"><a href="<?= base_url('admin/logout'); ?>">Logout</a></span>
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
        <?php
            $uri = service('uri');
            $seg1 = $uri->getTotalSegments() >= 1 ? $uri->getSegment(1) : '';
            $seg2 = $uri->getTotalSegments() >= 2 ? $uri->getSegment(2) : '';
            $seg3 = $uri->getTotalSegments() >= 3 ? $uri->getSegment(3) : '';
            if (empty($seg2)) $seg2 = 'dashboard';
        ?>
        <div class="side-nav">
            <div class="side-nav-inner">
                <ul class="side-nav-menu scrollable">
                    <li class="nav-item <?= ($seg2 === 'dashboard') ? 'active' : '' ?>">
                        <a href="<?= base_url('admin/dashboard') ?>">
                            <span class="icon-holder">
                                <i class="anticon anticon-appstore"></i>
                            </span>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item <?= ($seg2 === 'reports') ? 'active' : '' ?>">
                        <a href="<?= base_url('admin/reports') ?>">
                            <span class="icon-holder">
                                <i class="anticon anticon-idcard"></i>
                            </span>
                            <span class="title">Reports</span>
                        </a>
                    </li>
                    <li class="nav-item <?= in_array($seg2, ['users', 'user', 'add-user']) ? 'active' : '' ?>">
                        <a href="<?= base_url('admin/users') ?>">
                            <span class="icon-holder">
                                <i class="anticon anticon-team"></i>
                            </span>
                            <span class="title">Users</span>
                        </a>
                    </li>
                    <li class="nav-item <?= in_array($seg2, ['questions', 'add-question']) ? 'active' : '' ?>">
                        <a href="<?= base_url('admin/questions') ?>">
                            <span class="icon-holder">
                                <i class="anticon anticon-file-unknown"></i>
                            </span>
                            <span class="title">Questions</span>
                        </a>
                    </li>
                    <li class="nav-item <?= ($seg2 === 'courses') ? 'active' : '' ?>">
                        <a href="<?= base_url('admin/courses') ?>">
                            <span class="icon-holder">
                                <i class="anticon anticon-book"></i>
                            </span>
                            <span class="title">Courses</span>
                        </a>
                    </li>
                    <li class="nav-item <?= in_array($seg2, ['companies', 'add-company']) ? 'active' : '' ?>">
                        <a href="<?= base_url('admin/companies') ?>">
                            <span class="icon-holder">
                                <i class="anticon anticon-project"></i>
                            </span>
                            <span class="title">Companies</span>
                        </a>
                    </li>
                    <li class="nav-item <?= in_array($seg2, ['packages', 'add-packages']) ? 'active' : '' ?>">
                        <a href="<?= base_url('admin/packages') ?>">
                            <span class="icon-holder">
                                <i class="anticon anticon-audit"></i>
                            </span>
                            <span class="title">Packages</span>
                        </a>
                    </li>
                    <li class="nav-item <?= in_array($seg2, ['ads', 'add-ads']) ? 'active' : '' ?>">
                        <a href="<?= base_url('admin/ads') ?>">
                            <span class="icon-holder">
                                <i class="anticon anticon-notification"></i>
                            </span>
                            <span class="title">Ads</span>
                        </a>
                    </li>
                    <li class="nav-item <?= in_array($seg2, ['videos', 'add-videos']) ? 'active' : '' ?>">
                        <a href="<?= base_url('admin/videos') ?>">
                            <span class="icon-holder">
                                <i class="anticon anticon-play-circle"></i>
                            </span>
                            <span class="title">Videos</span>
                        </a>
                    </li>
                    <li class="nav-item <?= ($seg2 === 'video-tutorials' && $seg3 !== 'sequence') ? 'active' : '' ?>">
                        <a href="<?= base_url('admin/video-tutorials') ?>">
                            <span class="icon-holder">
                                <i class="anticon anticon-video-camera"></i>
                            </span>
                            <span class="title">Video Tutorial</span>
                        </a>
                    </li>
                    <li class="nav-item <?= ($seg2 === 'video-tutorials' && $seg3 === 'sequence') ? 'active' : '' ?>">
                        <a href="<?= base_url('admin/video-tutorials/sequence') ?>">
                            <span class="icon-holder">
                                <i class="anticon anticon-ordered-list"></i>
                            </span>
                            <span class="title">Course Sequence</span>
                        </a>
                    </li>
                    <li class="nav-item <?= ($seg2 === 'assessments') ? 'active' : '' ?>">
                        <a href="<?= base_url('admin/assessments') ?>">
                            <span class="icon-holder">
                                <i class="anticon anticon-form"></i>
                            </span>
                            <span class="title">Assessments</span>
                        </a>
                    </li>
                    <li class="nav-item <?= in_array($seg2, ['coupons', 'add-coupons']) ? 'active' : '' ?>">
                        <a href="<?= base_url('admin/coupons') ?>">
                            <span class="icon-holder">
                                <i class="anticon anticon-tags"></i>
                            </span>
                            <span class="title">Coupons</span>
                        </a>
                    </li>
                    <li class="nav-item <?= in_array($seg2, ['vat_users', 'add-vatuser']) ? 'active' : '' ?>">
                        <a href="<?= base_url('admin/vat_users') ?>">
                            <span class="icon-holder">
                                <i class="anticon anticon-team"></i>
                            </span>
                            <span class="title">Vat users</span>
                        </a>
                    </li>
                    <li class="nav-item <?= in_array($seg2, ['vat_companies', 'add-vat-company']) ? 'active' : '' ?>">
                        <a href="<?= base_url('admin/vat_companies') ?>">
                            <span class="icon-holder">
                                <i class="anticon anticon-bank"></i>
                            </span>
                            <span class="title">Vat Reg Companies</span>
                        </a>
                    </li>
                    <li class="nav-item <?= in_array($seg2, ['b2b_packages', 'b2b_package_add']) ? 'active' : '' ?>">
                        <a href="<?= base_url('admin/b2b_packages') ?>">
                            <span class="icon-holder">
                                <i class="anticon anticon-folder-open"></i>
                            </span>
                            <span class="title">B2B Packages</span>
                        </a>
                    </li>
                    <li class="nav-item <?= in_array($seg2, ['institutions', 'institution']) ? 'active' : '' ?>">
                        <a href="<?= base_url('admin/institutions') ?>">
                            <span class="icon-holder">
                                <i class="anticon anticon-solution"></i>
                            </span>
                            <span class="title">Institutions</span>
                        </a>
                    </li>
                    <li class="nav-item <?= ($seg2 === 'settings') ? 'active' : '' ?>">
                        <a href="<?= base_url('admin/settings') ?>">
                            <span class="icon-holder">
                                <i class="anticon anticon-setting"></i>
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
<script src="<?=base_url(); ?>/public/assets/admin/js/vendors.min.js"></script>
<script src="<?=base_url(); ?>/public/assets/admin/vendors/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url(); ?>/public/assets/admin/vendors/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?=base_url(); ?>/public/assets/admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<!-- page js -->
<script>
    const baseUrl = '<?php echo base_url(); ?>' + '/admin';
    $('.datepicker-input').datepicker();
    $('#data-table').DataTable();
</script>
<!-- Core JS -->
<script src="<?=base_url(); ?>/public/assets/admin/js/app.min.js"></script>
<script src="<?=base_url(); ?>/public/assets/admin/js/main.js?version=<?=time(); ?>"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" ></script>

<?= $this->renderSection('page_js'); ?>

</body>

</html>
