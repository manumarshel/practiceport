<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>GST Simulation</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url('public/assets/user/images/logo/favicon.png') ?>">

    <!-- Core css -->
    <link rel="stylesheet" href="<?= base_url('public/assets/simulation/css/fa-bootstrap1.1.css') ?>">
    <link rel="stylesheet" href="<?= base_url('public/assets/simulation/css/staticapp1.2.css') ?>" title="app-css"/>
    <link rel="stylesheet" href="<?= base_url('public/assets/simulation/css/style.css') ?>">

</head>

<body>
<header class="main-header">
    <div class="skip">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="skip list-inline">
                        <li><a tabindex="-1" class="accessible" href="javascript:void(0)">Skip to Main Content</a></li>
                        <li class="high-low"><i class="fa fa-adjust"></i></li>
                        <li class="fresize f-up">A<sup>+</sup></li>
                        <li class="fresize f-down">A<sup>-</sup></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row branding">
            <div class="col-xs-12">
                <a href="javascript:void(0)" title="Goods and Services Tax Home" id="emblemDis" class="menuList" data-toggle="tooltip" data-placement="top" data-ng-class="{'disabled' :udata.disableMenu}">
                    <img data-ng-src="//static.gst.gov.in/uiassets/images/Emblem_of_India-white.svg" class="logo" alt="Goods and Services Tax Home"  width="35px" height="56px" src="//static.gst.gov.in/uiassets/images/Emblem_of_India-white.svg">
                </a>
                <h1 class="site-title"><a href="javascript:void(0)" id="emblemTitDis" class="menuList" data-toggle="tooltip" data-placement="top" data-ng-class="{'disabled' :udata.disableMenu}" data-original-title="" title="">Goods and Services Tax</a></h1>
                <ul class="list-inline mlinks">
<!--                    <li ng-if="!udata">-->
                    <li>
                        <a target="_self" href="javascript:void(0)"><i class="fa fa-sign-in"></i> Login</a>
                    </li>
                </ul>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="sr-only">Toggle navigation</span>
                </button>
            </div>
        </div>
    </div>
</header>
<nav class="navbar navbar-default collapsed">
    <div class="container">
        <div id="main" class="navbar-collapse collapse">
            <ul class="nav navbar-nav" link="">
                <li class="menuList"><a href="javascript:void(0)">Home</a></li>
                <li class="menuList"><a href="javascript:void(0)">Services <span class="caret"></a></li>
                <li class="menuList"><a href="javascript:void(0)">GST Law</a></li>
                <li class="has-sub drpdwn menuList"><a href="javascript:void(0)">Downloads <span class="caret"></span></a></li>
                <li class="has-sub drpdwn menuList"><a href="javascript:void(0)">Search Taxpayer <span class="caret"></span></a></li>
                <li class="menuList"><a href="javascript:void(0)">Help and Taxpayer Facilities</a></li>
                <li class="menuList"><a href="javascript:void(0)">e-Invoice</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="content-wrapper">
    <div class="container">
        <div class="mypage">
            <!-- breadcrumbs -->
            <div class="row" data-ng-controller="transctrl" data-ng-init="init('services')">
                <div class="col-xs-10">
                    <div data-breadcrumb="" data-path="//www.gst.gov.in/" data-name="Home">
                        <ol class="breadcrumb" data-ng-controller="crumbCtrl">
                            <li><a target="" href="javascript:void(0)" data-ng-bind="name">Home</a></li>
                            <li data-ng-repeat="breadcrumb in breadcrumbs.getAll()">
                                <ng-switch on="$last"><span ng-switch-when="true">Login</span></ng-switch>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- breadcrumbs ends -->

            <div class="content-pane" style="min-height: 433.2px;">
                <div data-ng-view="">
                    <div class="row">
                        <div class="col-sm-offset-2 col-md-offset-3 col-md-6 col-sm-8 col-xs-12">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h4 class="mar-t-0" data-ng-bind="trans.HEAD_LOGIN">Login</h4>
                                    <hr>
                                    <?php if (session()->get('success')): ?>
                                        <div class="alert alert-success" role="alert">
                                            <?= session()->get('success') ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (isset($validation)): ?>
                                        <div class="col-12">
                                            <div class="alert alert-danger" role="alert">
                                                <?= $validation->listErrors() ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <p class="mand-text" data-ng-bind="trans.HLP_MAND_FIELD">indicates mandatory fields</p>
                                    <form action="<?= base_url('simulation') ?>" method="post">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <label for="" class="m-cir reg">Username</label>
                                                <input type="text" class="form-control pad-r-0 ng-pristine ng-empty" id="username" name="username" placeholder="Enter Username">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <label for="" class="m-cir reg">Password</label>
                                                <input type="password" class="form-control pad-r-0 ng-pristine ng-empty" id="password" name="password" placeholder="Enter Password">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <button type="submit" class="btn  btn-primary" data-ng-bind="trans.HEAD_LOGIN">Login</button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <a class="link" href="javascript:void(0)" data-ng-bind="trans.HEAD_FORGT_USERNAME">Forgot Username</a>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="pull-right">
                                                    <a class="link" href="javascript:void(0)" data-ng-bind="trans.HEAD_FORGT_PWD">Forgot Password</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <p class="help-block"><i class="fa fa-info-circle"></i><strong> First time login:</strong> If you are logging in for the first time, click <a href="javascript:void(0)"><u>here</u></a> to log in.</p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<footer class="" ng-controller="footerCtrl">
    <div class="expbtn">
        <i ng-click="fexpand()" ng-class="{'fa-angle-up': expanded, 'fa-angle-down': !expanded}" class="fa fa-angle-down" title="Expand/Collapse Footer"></i>
    </div>

    <div class="ifooter " id="demo">
        <div class="f1 menuList">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 no-mobile">
                        <a class="fhead" href="">About GST</a>
                        <ul>
                            <li><a href="javascript:void(0)">GST Council Structure</a></li>
                            <li><a href="javascript:void(0)">GST History</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 no-mobile">
                        <a class="fhead" href="javascript:void(0)">Website Policies</a>
                        <ul>
                            <li><a href="javascript:void(0)">Website Policy</a></li>
                            <li><a href="javascript:void(0)">Terms and Conditions</a></li>
                            <li><a href="javascript:void(0)">Hyperlink Policy</a></li>
                            <li><a href="javascript:void(0)">Disclaimer</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 no-mobile">
                        <a class="fhead" href="javascript:void(0)">Related Sites</a>
                        <ul>
                            <li><a href="javascript:void(0)">Central Board of Indirect Taxes and Customs <i class="fa fa-external-link-square"></i></a></li>
                            <li><a href="javascript:void(0)">State Tax Websites <i class="fa fa-external-link-square"></i></a></li>
                            <li><a href="javascript:void(0)">National Portal <i class="fa fa-external-link-square"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 no-mobile">
                        <a class="fhead" href="javascript:void(0)">Help and Taxpayer Facilities</a>
                        <ul>
                            <li><a href="javascript:void(0)">System Requirements</a></li>
                            <li><a href="javascript:void(0)">GST Knowledge Portal</a></li>
                            <li><a href="javascript:void(0)">GST Media <i class="fa fa-external-link-square"></i></a></li>
                            <li><a href="javascript:void(0)">Site Map</a></li>
                            <li><a href="javascript:void(0)">Grievance Nodal Officers</a></li>
                            <li><a href="javascript:void(0)">Free Accounting and Billing Services <i class="fa fa-external-link-square"></i></a></li>
                            <li><a href="javascript:void(0)">GST Suvidha Providers <i class="fa fa-external-link-square"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 no-mobile">
                        <a class="fhead" href="javascript:void(0)">Contact Us</a>
                        <ul>
                            <li>
                                <span class="contact">Help Desk Number: <br>1800-103-4786</span>
                            </li>
                            <li>
                                <span class="contact">Log/Track Your Issue:<br></span><a data-popup="true" href="https://selfservice.gstsystem.in/" title="Grievance Redressal Portal for GST" target="_blank" data-ng-class="{'disabledanchor' :udata.disableMenu}" rel="noopener noreferrer">Grievance Redressal Portal for GST <i class="fa fa-external-link-square"></i></a>
                            </li>
                            <li class="social">
                                <a data-popup="true" href="//www.facebook.com/Goods-and-Services-Tax-1674179706229522/?fref=ts" title="Facebook" data-ng-class="{'disabledanchor' :udata.disableMenu}"><i class="fa fa-facebook-square"></i>.</a>
                                <a data-popup="true" href="//www.youtube.com/channel/UCFYpOk92qurlO5t-Z_y-bOQ" title="Youtube" data-ng-class="{'disabledanchor' :udata.disableMenu}"><i class="fa fa-youtube-play"></i>.</a>
                                <a data-popup="true" href="//twitter.com/Infosys_GSTN" data-ng-class="{'disabledanchor' :udata.disableMenu}"><i class="fa fa-twitter" title="Twitter"></i>.</a>
                                <a data-popup="true" href="//www.linkedin.com/company/gstn-official/about/?viewAsMember=true" title="Linkedin" data-ng-class="{'disabledanchor' :udata.disableMenu}"><i class="fa fa-linkedin"></i>.</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="f2">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <p>© 2018-19 Goods and Services Tax Network</p>
                        <p>Site Last Updated on 22-07-2021</p>
                        <p>Designed &amp; Developed by GSTN</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="f3">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <p class="site">Site best viewed at 1024 x 768 resolution in Internet Explorer 10+, Google Chrome 49+, Firefox 45+ and Safari 6+</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>
<!-- Core Vendors JS -->
<!--<script src="./public/assets/user/js/vendors.min.js"></script>-->

<!-- page js -->

<!-- Core JS -->
<!--<script src="./public/assets/user/js/app.min.js"></script>-->


</body>

</html>
