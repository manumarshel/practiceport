<?php include('step1.php'); ?>
<style>
   
    .sapFDynamicPageHeaderContent {
      width: 100%;
      text-align: center;
      padding: 30px 0;
      background-color: #f9f9f9;
    }

    .sapFDynamicPageHeaderContent h4 {
      margin-bottom: 10px;
    }

    .sapFDynamicPageHeaderContent table {
      margin: 0 auto; /* centers table */
    }

    .sapFDynamicPageHeaderContent a {
      display: inline-block;
      margin-top: 15px;
      text-decoration: none;
      color: #007bff;
    }
</style>
<body class="sb-nav-fixed1">
<header class="sapMPageHeader">
    <div class="row">
        <div class="col-md-6"><img id="__image1"
                                   data-sap-ui="__image1"
                                   src="/public/assets/vat/images/FTA_logo_new.png"
                                   role="presentation"
                                   aria-hidden="true" alt=""
                                   class="sapMImg sapMBarChild"></div>
        <div class="col-md-6"><img id="__image0"
                                   data-sap-ui="__image0"
                                   src="/public/assets/vat/images/FTA_merged_logo1.png"
                                   role="presentation"
                                   aria-hidden="true" alt=""
                                   class="sapMImg sapMBarChild" style="float: right;"></div>
    </div>


</header>
<nav class="sb-topnav navbar navbar-expand ">
    <!-- Navbar Brand-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4" style="background-color: #1e3a56; color:#fff;width:18%;">
        <li class="nav-item dropdown">
            <a style="color:#fff;" class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
               data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i> user@gmail.com</a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown"
                style="background-color: #00679e;color:#fff;width:100%;">

             <li><a class="dropdown-item" href="/vat/logout">Logout</a></li>
            </ul>
        </li>
    </ul>
    <!--    <a class="navbar-brand ps-3" href="index.html" style="background-color: #1e3a56; color:#fff;">Start Bootstrap</a>-->
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-search"></i></button>
    <!-- Navbar Search-->

    <div class="input-group">
        <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
               aria-describedby="btnNavbarSearch"/>

    </div>

    <!-- Navbar-->

</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav" style="z-index:0;">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu" style="background-color:#f2f4f6">
                <div class="nav">

                    <a class="nav-link" href="<?= base_url('vat/dashboard') ?>"
                       style="background-color: #ab8240;color:#fff;">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        HOME
                    </a>

                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
                       aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        NATURAL PERSONAL TAX AGENT

                    </a>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
                       aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        OTHER SERVICES

                    </a>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
                       aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        MY CORRESPONDENCE

                    </a>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
                       aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        INQUIRIES, COMPLAINTS AND SUGGESTIONS

                    </a>

                    <!--<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages"-->
                    <!--   aria-expanded="false" aria-controls="collapsePages">-->
                    <!--    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>-->
                    <!--    Pages-->
                    <!--    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>-->
                    <!--</a>-->

                </div>
            </div>

        </nav>
    </div>
    <div id="layoutSidenav_content" class="flex-shrink-0">
        <main>
            <div class="row">
                <h4 style="color:#224261">VAT - New Registration</h4>
            </div>
            <br><br>
            <div class="center-wrapper">
  <div class="sapFDynamicPageHeaderContent">
    <h4>Application Submitted Successfully</h4>
    <table>
      <tbody>
        <tr><td>Name:</td><td><?php if (isset($_COOKIE['eng_fname'])) echo $_COOKIE['eng_fname']; ?>&nbsp;<?php if (isset($_COOKIE['eng_lname'])) echo $_COOKIE['eng_lname']; ?>   </td></tr>
        <tr><td>Reference Number:</td><td>123456789</td></tr>
        <tr><td>Submitted Date:</td><td><?php echo date('d-m-Y'); ?></td></tr>
      </tbody>
    </table>

    <a href="<?= base_url('vat/dashboard') ?>" class="btn btn-default" style="background-color: #ab8240;color: #fff;">Back to Dashboard</a>
  </div>
</div>
        </main>


    </div>
</div>


<!-- footer  ---->
<footer class="sapMPageFooter" style="position:relative;">
    <div id="__xmlview15--idFooterBar" data-sap-ui="__xmlview15--idFooterBar" data-sap-ui-fastnavgroup="true"
         role="toolbar"
         class="sapMIBar sapMIBar-CTX sapMBar sapMContent-CTX sapMBar-CTX sapMFooter-CTX sapContrast sapContrastPlus">
        <div id="__xmlview15--idFooterBar-BarLeft" class="sapMBarLeft sapMBarContainer">
            <a href="javascript:void(0)" class="button previous" style="background-color:#fff;color:#000;"><span
                        style="background-color:#fff;color:#000;">Previous</span></a>

        </div>

        <div id="__xmlview15--idFooterBar-BarRight" class="sapMBarRight sapMBarContainer">

            <a href="javascript:void(0)" class="button next"><span>Next</span></a>

        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
 

<script src="/public/assets/vat/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="/public/assets/vat/assets/demo/chart-area-demo.js"></script>
<script src="/public/assets/vat/assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
<script src="/public/assets/vat/js/datatables-simple-demo.js"></script>


</body>
</html>