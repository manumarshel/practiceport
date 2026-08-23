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
    
    <style>
        .side-nav-menu li.active > a {
            color: #ffffff !important;
            background: linear-gradient(135deg, #1d4ed8 0%, #3b82f6 100%) !important;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.25);
        }
        .side-nav-menu li.active > a .icon-holder {
            color: #ffffff !important;
        }
        .side-nav-menu li.active > a .title {
            color: #ffffff !important;
            font-weight: 600;
        }
        .side-nav .side-nav-inner .side-nav-menu > li {
            padding: 4px 12px;
        }
        .side-nav .side-nav-inner .side-nav-menu > li > a {
            border-radius: 8px;
            transition: all 0.2s ease;
        }
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
            <div class="logo logo-dark adf">
                
                <?php if(session()->get('logo') != null){
                    $logo_url=session()->get('logo');
                ?>
                    <a href="<?= base_url() ?>/institution/dashboard">
                    <img src="<?=base_url(); ?>/uploads/institutions/<?php echo $logo_url ; ?>" alt="Logo" width="110">
                    <img class="logo-fold" src="<?=base_url(); ?>/uploads/institutions/<?php echo $logo_url ; ?>" alt="Logo">
                </a>
               <?php }else{ ?>
                     <a href="<?= base_url() ?>/institution/dashboard">
                    <img src="<?=base_url(); ?>/public/assets/admin/images/logo/pp-logo.png" alt="Logo" width="110">
                    <img class="logo-fold" src="<?=base_url(); ?>/public/assets/admin/images/logo/pp-fold.png" alt="Logo">
                </a>
               <?php } ?>
                
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
                                                <p class="m-b-0 text-dark font-weight-semibold"><?php echo session()->get('first_name').' '. session()->get('last_name') ?></p>
                                                <p class="m-b-0 opacity-07"><?php echo session()->get('user_email') ; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="py-2">
                                             <div> 
                                                <span class="m-l-10"><a href="<?= base_url('institution/reset-password'); ?>">Account Setting</a></span> 
                                            </div>
                                            <div>
                                                
                                                <span class="m-l-10"><a href="<?= base_url('institution/logout'); ?>">Logout</a></span>
                                            </div>
                                     </div>
                                     
                                </div>
                            </li>
                    
                    
                </ul>
            </div>
        </div>
        <!-- Header END -->

        <!-- Side Nav START -->
        <?php
            $uri = service('uri');
            $seg2 = $uri->getTotalSegments() >= 2 ? $uri->getSegment(2) : 'dashboard';
        ?>
        <div class="side-nav">
            <div class="side-nav-inner">
                <ul class="side-nav-menu scrollable">
                    <li class="nav-item <?= ($seg2 == 'dashboard' || $seg2 == '') ? 'active' : '' ?>">
                        <a href="<?= base_url('institution/dashboard') ?>">
                            <span class="icon-holder">
                                <i class="anticon anticon-appstore"></i>
                            </span>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item <?= in_array($seg2, ['packages', 'packageStudent']) ? 'active' : '' ?>">
                        <a href="<?= base_url('institution/packages') ?>">
                            <span class="icon-holder">
                                <i class="anticon anticon-audit"></i>
                            </span>
                            <span class="title">Packages</span>
                        </a>
                    </li>
                    <li class="nav-item <?= in_array($seg2, ['students', 'create-user', 'user-import', 'add-user']) ? 'active' : '' ?>">
                        <a href="<?= base_url('institution/students') ?>">
                            <span class="icon-holder">
                                <i class="anticon anticon-team"></i>
                            </span>
                            <span class="title">Students</span>
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
    const baseUrl = '<?php echo base_url(); ?>' + '/institution';
</script>
<!-- Core JS -->
<script src="<?=base_url(); ?>/public/assets/user/js/app.min.js"></script>
<script src="<?=base_url(); ?>/public/assets/user/js/main.js?version=<?=time(); ?>"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" ></script>

</body>

</html>
