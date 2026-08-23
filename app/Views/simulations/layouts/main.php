<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="image/png" href="<?=base_url(); ?>/public/assets/admin/assets/user/img/favicon.ico" sizes="16x16">

    <link rel="stylesheet" href="<?=base_url(); ?>/public/assets/admin/assets/simulation/css/fa-bootstrap1.1.css">
    <link rel="stylesheet" href="<?=base_url(); ?>/public/assets/admin/assets/simulation/css/staticapp1.2.css" title="app-css"/>
    <link rel="stylesheet" href="<?=base_url(); ?>/public/assets/admin/assets/simulation/css/style.css">

    <title>Goods & Services Tax (GST)</title>

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
                <a href="javascript:void(0)" title="Goods and Services Tax Home" id="emblemDis" class="menuList" data-toggle="tooltip" data-placement="top"">
                    <img src="//static.gst.gov.in/uiassets/images/Emblem_of_India-white.svg" class="logo" alt="Goods and Services Tax Home"  width="35px" height="56px" src="//static.gst.gov.in/uiassets/images/Emblem_of_India-white.svg">
                </a>
                <h1 class="site-title"><a href="javascript:void(0)" id="emblemTitDis" class="menuList" data-toggle="tooltip" data-placement="top"  data-original-title="" title="">Goods and Services Tax</a></h1>
                <ul class="list-inline mlinks">
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

<?= $this->renderSection('main_content'); ?>

<footer class="">
    <div class="expbtn">
        <i class="fa fa-angle-down" title="Expand/Collapse Footer"></i>
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
                                <span class="contact">Log/Track Your Issue:<br></span><a data-popup="true" href="https://selfservice.gstsystem.in/" title="Grievance Redressal Portal for GST" target="_blank"  rel="noopener noreferrer">Grievance Redressal Portal for GST <i class="fa fa-external-link-square"></i></a>
                            </li>
                            <li class="social">
                                <a data-popup="true" href="//www.facebook.com/Goods-and-Services-Tax-1674179706229522/?fref=ts" title="Facebook" ><i class="fa fa-facebook-square"></i>.</a>
                                <a data-popup="true" href="//www.youtube.com/channel/UCFYpOk92qurlO5t-Z_y-bOQ" title="Youtube" ><i class="fa fa-youtube-play"></i>.</a>
                                <a data-popup="true" href="//twitter.com/Infosys_GSTN" ><i class="fa fa-twitter" title="Twitter"></i>.</a>
                                <a data-popup="true" href="//www.linkedin.com/company/gstn-official/about/?viewAsMember=true" title="Linkedin" ><i class="fa fa-linkedin"></i>.</a>
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

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
-->
</body>
</html>
