<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet"/>
    <link href="/public/assets/vat/css/styles.css" rel="stylesheet"/>

    <link href="/public/assets/vat/css/common.css" rel="stylesheet"/>
    <link href="/public/assets/vat/css/common2.css" rel="stylesheet"/>
    <link href="/public/assets/vat/css/library.css" rel="stylesheet"/>
    <link href="/public/assets/vat/css/nuance-c2c-button.css" rel="stylesheet"/>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        .sapMPageHeader {
            padding: 10px;
        }

        .sapMPageHeader img {
            width: Auto !important;
            max-height: 3rem;
        }
.dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
        .nav-link {
            font-size: 12px;
        }

        .sb-sidenav-dark .sb-sidenav-menu .nav-link {
            color: #000;
        }

        .sb-sidenav-dark .sb-sidenav-menu .nav-link svg {
            color: #000;
        }

        .sapMInputBaseContentWrapper {
            border: 1px solid #ffffff;
        }

        .box {
            border: 1px solid #000; /* Border for the box */
            border-radius: 5px; /* Rounded corners */
            overflow: hidden; /* Prevent overflow for child elements */
        }
 
    table {
      width: 100%;
      border-collapse: collapse;
    }

    thead {
      background-color: #f2f4f8;
    }

    th, td {
      padding: 12px 15px;
      text-align: left;
      font-size: 14px;
      border-bottom: 1px solid #ccc;
    }

    .status-dot {
      height: 10px;
      width: 10px;
      border-radius: 50%;
      display: inline-block;
      margin-right: 6px;
    }

    .status-draft { background: #aaa; }
    .status-submitted { background: #003366; }

    .red { color: red; }
    .green { color: green; }

    .pagination {
      display: flex;
      align-items: center;
      padding: 15px;
      justify-content: flex-start;
      gap: 10px;
    }

    .pagination button, .pagination select, .pagination input {
      padding: 6px 10px;
      font-size: 14px;
    }

    .pagination .active {
      background: #133b5c;
      color: white;
      border: none;
    }

    .action-btn {
      cursor: pointer;
      font-size: 18px;
    }
     
    </style>
</head>
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
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu" style="background-color:#f2f4f6">
                <div class="nav">

                    <a class="nav-link" href="<?= base_url('vat/dashboard') ?>" style="background-color: #ab8240;color:#fff;">
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

            

                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                Start Bootstrap
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
           <div class="table-wrapper" style="padding:10px;">
    <table>
      <thead>
        <tr>
          <th>Type</th>
          <th>VAT Reference Number</th>
          <th>Period From</th>
          <th>Period To</th>
          <th>Original Return Due Date</th>
          <th>Tax Year End</th>
          <th>Submitted Date</th>
          <th>Net VAT Position</th>
          <th>Exemption</th>
          <th>Exemption Failed</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
          
        <tr>
          <td>VAT Return</td>
          <td>230008411219</td>
          <td><?php echo ($company_data['return_period'] ? '' : ''); ?></td>
          <td><?php echo ($company_data['return_end'] ? '' : ''); ?></td>
          <td class="green"><?php echo ($company_data['due_date'] ? '' : ''); ?></td>
          <td><?php echo ($company_data['year_end'] ? '' : '') ?></td>
          <td><?php if(isset($_COOKIE['vat_filed'])){ echo date('d/m/Y'); }else{ echo " "; } ?></td>
          <td>0.00</td>
          <td></td>
          <td></td>
          <td><span class="status-dot status-draft"></span>
          <?php if(isset($_COOKIE['vat_filed'])){
                                    if($_COOKIE['vat_filed'] == '0'){
                                        $ms="Open";
                                    }else{
                                         $ms="Submitted";
                                    }
                                }else{
                                     $ms="Open";
                                }
                                ?>
                               <?php echo $ms; ?></td>
          <td> <?php if(isset($_COOKIE['vat_filed'])){ ?> ... <?php }else{ ?><span class="action-btn"><a href="/vat/filing/declaration/<?php echo $userid; ?>">File</a> <?php } ?>
          <!--<a href="/vat/filing/create/<?php echo $userid; ?>">File</a>-->
          </span>
        
              </td>
        </tr>
         
       
      </tbody>
    </table>
  </div>

   

</main>

<!-- footer starts --->
<div id="__row9" data-sap-ui="__row9"
     class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow sapUiBlockLayoutBackgroundColorSet1">
    <div style="display: flex;">
        <div id="__cell9" data-sap-ui="__cell9" style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
             class="sapUiBlockLayoutCell zGlobalFooter sapUiBlockLayoutOddCell sapUiBlockHorizontalCell">
            <div class="sapUiBlockCellContent">
                <div id="__xmlview1" data-sap-ui="__xmlview1" data-sap-ui-preserve="__xmlview1"
                     class="sapUiView sapUiXMLView sapUiViewDisplayBlock" style="width: 100%; height: 100%;">
                    <div id="__layout3" data-sap-ui="__layout3"
                         class="sapUiBlockLayout zFooterLayout sapUiBlockLayoutBackgroundDefault sapUiBlockLayoutSizeXL">
                        <div id="__row8" data-sap-ui="__row8"
                             class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow sapUiBlockLayoutBackgroundColorSet1">
                            <div style="display: flex;">
                                <div id="__cell8" data-sap-ui="__cell8"
                                     style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                                     class="sapUiBlockLayoutCell sapUiBlockLayoutOddCell sapUiBlockHorizontalCell">
                                    <div class="sapUiBlockCellContent">
                                        <div id="__vbox12" data-sap-ui="__vbox12"
                                             class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent">
                                            <div id="__data55"
                                                 class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                 style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                <img id="__image3" data-sap-ui="__image3" src="" role="presentation"
                                                     aria-hidden="true" alt="" class="sapMImg sapMNoImg"></div>
                                            <div id="__data56"
                                                 class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                 style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                <div id="__splitter1" data-sap-ui="__splitter1"
                                                     class="sapUiLoSplitter sapUiLoSplitterH zFooterSplitter"
                                                     style="width: 100%; height: 100%;">
                                                    <section id="__splitter1-content-0" style="width: 379px;"
                                                             class="sapUiLoSplitterContent">
                                                        <div id="__vbox7" data-sap-ui="__vbox7"
                                                             class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent">
                                                            <div id="__data57"
                                                                 class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                 style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                <img id="__image4" data-sap-ui="__image4"
                                                                     src="https://eservices.tax.gov.ae/sap/public/bc/ui2/zmcf_fmca_public/user_management/img/footer-logo.png"
                                                                     role="presentation" aria-hidden="true" alt=""
                                                                     class="sapMImg"></div>
                                                        </div>
                                                    </section>
                                                    <div id="__splitter1-splitbar-0" role="separator"
                                                         title="Press ARROW keys to move" class="sapUiLoSplitterBar"
                                                         aria-orientation="vertical" tabindex="0"
                                                         style="height: 192px;">
                                                        <div class="sapUiLoSplitterBarDecorationBefore"></div>
                                                        <div class="sapUiLoSplitterBarGrip"><span
                                                                    data-sap-ui-icon-content="" role="presentation"
                                                                    id="id-1736580232258-21"
                                                                    aria-label="vertical-grip"
                                                                    class="sapUiLoSplitterBarGripIcon sapUiIcon sapUiIconMirrorInRTL"
                                                                    style="font-family: 'SAP\2dicons';"></span>
                                                        </div>
                                                        <div class="sapUiLoSplitterBarDecorationAfter"></div>
                                                    </div>
                                                    <section id="__splitter1-content-1" style="width: 379px;"
                                                             class="sapUiLoSplitterContent">
                                                        <div id="__vbox8" data-sap-ui="__vbox8"
                                                             class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent">
                                                            <div id="__data58"
                                                                 class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                 style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                <div id="__title0" data-sap-ui="__title0"
                                                                     role="heading" aria-level="2"
                                                                     class="sapMTitle sapMTitleStyleAuto sapMTitleNoWrap sapUiSelectable sapMTitleMaxWidth">
                                                                    <span id="__title0-inner">QUICK LINKS</span>
                                                                </div>
                                                            </div>
                                                            <div id="__data59"
                                                                 class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                 style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                <a id="__xmlview1--idFTAGovAE"
                                                                   data-sap-ui="__xmlview1--idFTAGovAE" tabindex="0"
                                                                   href=""
                                                                   class="sapMLnk sapMLnkMaxWidth sapUiMediumMarginTop zExtLinkIcn">tax.gov.ae</a>
                                                            </div>
                                                            <div id="__hbox8" data-sap-ui="__hbox8"
                                                                 class="sapMFlexBox sapMHBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent sapMFlexItem"></div>
                                                            <div id="__data60"
                                                                 class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                 style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                <a id="__xmlview1--idGlossary"
                                                                   data-sap-ui="__xmlview1--idGlossary" tabindex="0"
                                                                   href=""
                                                                   class="sapMLnk sapMLnkMaxWidth zExtLinkIcn">Glossary</a>
                                                            </div>
                                                            <div id="__data61"
                                                                 class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem sapUiHiddenPlaceholder"
                                                                 style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                    <span id="sap-ui-invisible-__xmlview1--idSiteMap1"
                                                                          data-sap-ui="sap-ui-invisible-__xmlview1--idSiteMap1"
                                                                          aria-hidden="true"
                                                                          class="sapUiHiddenPlaceholder"></span></div>
                                                        </div>
                                                    </section>
                                                    <div id="__splitter1-splitbar-1" role="separator"
                                                         title="Press ARROW keys to move" class="sapUiLoSplitterBar"
                                                         aria-orientation="vertical" tabindex="0"
                                                         style="height: 192px;">
                                                        <div class="sapUiLoSplitterBarDecorationBefore"></div>
                                                        <div class="sapUiLoSplitterBarGrip"><span
                                                                    data-sap-ui-icon-content="" role="presentation"
                                                                    id="id-1736580232259-22"
                                                                    aria-label="vertical-grip"
                                                                    class="sapUiLoSplitterBarGripIcon sapUiIcon sapUiIconMirrorInRTL"
                                                                    style="font-family: 'SAP\2dicons';"></span>
                                                        </div>
                                                        <div class="sapUiLoSplitterBarDecorationAfter"></div>
                                                    </div>
                                                    <section id="__splitter1-content-2" style="width: 379px;"
                                                             class="sapUiLoSplitterContent">
                                                        <div id="__vbox9" data-sap-ui="__vbox9"
                                                             class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent">
                                                            <div id="__data62"
                                                                 class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                 style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                <div id="__title1" data-sap-ui="__title1"
                                                                     role="heading" aria-level="2"
                                                                     class="sapMTitle sapMTitleStyleAuto sapMTitleNoWrap sapUiSelectable sapMTitleMaxWidth">
                                                                    <span id="__title1-inner">OTHER LINKS</span>
                                                                </div>
                                                            </div>
                                                            <div id="__data63"
                                                                 class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                 style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                <a id="__xmlview1--idWhatsNew"
                                                                   data-sap-ui="__xmlview1--idWhatsNew" tabindex="0"
                                                                   href=""
                                                                   class="sapMLnk sapMLnkMaxWidth sapUiMediumMarginTop zExtLinkIcn">What's
                                                                    New</a></div>
                                                            <div id="__data64"
                                                                 class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                 style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                <a id="__xmlview1--idFaqs"
                                                                   data-sap-ui="__xmlview1--idFaqs" tabindex="0"
                                                                   href=""
                                                                   class="sapMLnk sapMLnkMaxWidth zExtLinkIcn">FAQs</a>
                                                            </div>
                                                            <div id="__data65"
                                                                 class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                 style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                <a id="__xmlview1--idContactUs"
                                                                   data-sap-ui="__xmlview1--idContactUs"
                                                                   tabindex="0" href=""
                                                                   class="sapMLnk sapMLnkMaxWidth zExtLinkIcn">Contact
                                                                    Us</a></div>
                                                            <div id="__data66"
                                                                 class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem sapUiHiddenPlaceholder"
                                                                 style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                    <span id="sap-ui-invisible-__link3"
                                                                          data-sap-ui="sap-ui-invisible-__link3"
                                                                          aria-hidden="true"
                                                                          class="sapUiHiddenPlaceholder"></span></div>
                                                        </div>
                                                    </section>
                                                    <div id="__splitter1-splitbar-2" role="separator"
                                                         title="Press ARROW keys to move" class="sapUiLoSplitterBar"
                                                         aria-orientation="vertical" tabindex="0"
                                                         style="height: 192px;">
                                                        <div class="sapUiLoSplitterBarDecorationBefore"></div>
                                                        <div class="sapUiLoSplitterBarGrip"><span
                                                                    data-sap-ui-icon-content="" role="presentation"
                                                                    id="id-1736580232260-23"
                                                                    aria-label="vertical-grip"
                                                                    class="sapUiLoSplitterBarGripIcon sapUiIcon sapUiIconMirrorInRTL"
                                                                    style="font-family: 'SAP\2dicons';"></span>
                                                        </div>
                                                        <div class="sapUiLoSplitterBarDecorationAfter"></div>
                                                    </div>
                                                    <section id="__splitter1-content-3" style="width: 379px;"
                                                             class="sapUiLoSplitterContent">
                                                        <div id="__vbox10" data-sap-ui="__vbox10"
                                                             class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent">
                                                            <div id="__data67"
                                                                 class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                 style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                <div id="__title2" data-sap-ui="__title2"
                                                                     role="heading" aria-level="2"
                                                                     class="sapMTitle sapMTitleStyleAuto sapMTitleNoWrap sapUiSelectable sapMTitleMaxWidth">
                                                                    <span id="__title2-inner">OUR LOCATION</span>
                                                                </div>
                                                            </div>
                                                            <div id="__hbox9" data-sap-ui="__hbox9"
                                                                 class="sapMFlexBox sapMHBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent sapUiTinyMarginTop sapMFlexItem">
                                                                <div id="__data68"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                        <span id="__icon2" data-sap-ui="__icon2"
                                                                              role="presentation" aria-hidden="true"
                                                                              aria-label="map"
                                                                              data-sap-ui-icon-content=""
                                                                              class="sapUiIcon sapUiIconMirrorInRTL"
                                                                              style="font-family: 'SAP\2dicons'; color: #AB8240;"></span>
                                                                </div>
                                                                <div id="__data69"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                        <span id="__text11" data-sap-ui="__text11"
                                                                              class="sapMText sapUiSelectable sapMTextMaxWidth zGoldText"
                                                                              style="text-align: left;">Emirates Property Investment Company Building, P.O. Box 2440, Abu Dhabi, U.A.E</span>
                                                                </div>
                                                            </div>
                                                            <div id="__hbox10" data-sap-ui="__hbox10"
                                                                 class="sapMFlexBox sapMHBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent sapUiTinyMarginTop sapMFlexItem">
                                                                <div id="__data70"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                        <span id="__icon3" data-sap-ui="__icon3"
                                                                              role="presentation" aria-hidden="true"
                                                                              aria-label="map"
                                                                              data-sap-ui-icon-content=""
                                                                              class="sapUiIcon sapUiIconMirrorInRTL"
                                                                              style="font-family: 'SAP\2dicons'; color: #AB8240;"></span>
                                                                </div>
                                                                <div id="__data71"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                        <span id="__text12" data-sap-ui="__text12"
                                                                              class="sapMText sapUiSelectable sapMTextMaxWidth zGoldText"
                                                                              style="text-align: left;">Central Park Business Towers – DIFC, P.O. Box 2440, Dubai, U.A.E</span>
                                                                </div>
                                                            </div>
                                                            <div id="__hbox11" data-sap-ui="__hbox11"
                                                                 class="sapMFlexBox sapMHBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent sapUiTinyMarginTop sapMFlexItem">
                                                                <div id="__data72"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                        <span id="__icon4" data-sap-ui="__icon4"
                                                                              role="presentation" aria-hidden="true"
                                                                              aria-label="call"
                                                                              data-sap-ui-icon-content=""
                                                                              class="sapUiIcon sapUiIconMirrorInRTL"
                                                                              style="font-family: 'SAP\2dicons'; color: #AB8240;"></span>
                                                                </div>
                                                                <div id="__data73"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                        <span id="__text13" data-sap-ui="__text13"
                                                                              class="sapMText sapUiSelectable sapMTextMaxWidth zGoldText"
                                                                              style="text-align: left;">800 82923</span>
                                                                </div>
                                                            </div>
                                                            <div id="__hbox12" data-sap-ui="__hbox12"
                                                                 class="sapMFlexBox sapMHBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent sapUiTinyMarginTop sapMFlexItem">
                                                                <div id="__data74"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                        <span id="__icon5" data-sap-ui="__icon5"
                                                                              role="presentation" aria-hidden="true"
                                                                              aria-label="email"
                                                                              data-sap-ui-icon-content=""
                                                                              class="sapUiIcon sapUiIconMirrorInRTL"
                                                                              style="font-family: 'SAP\2dicons'; color: #AB8240;"></span>
                                                                </div>
                                                                <div id="__data75"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                        <span id="__text14" data-sap-ui="__text14"
                                                                              class="sapMText sapUiSelectable sapMTextBreakWord sapMTextMaxWidth zGoldText"
                                                                              style="text-align: left;">info@tax.gov.ae</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                            <div class="sapMFlexBox sapMHBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent zFooterIcon sapMFlexItem">
                                                <div class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                    <img src="https://eservices.tax.gov.ae/sap/public/bc/ui2/zmcf_fmca_public/user_management/img/UAE-02.png"
                                                         class="sapMImg"></div>
                                                <div class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                    <img src="https://eservices.tax.gov.ae/sap/public/bc/ui2/zmcf_fmca_public/user_management/img/UAE-01.png"
                                                    ></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="layoutAuthentication_footer" style="color:#fff;">
    <footer class="py-4 bg-light mt-auto" style="background-color: #122537 !important;">
        <div class="container-fluid px-4">
            <!--                <div class="d-flex align-items-center justify-content-between small">-->
            <p>This site is best viewed in Screen Resolution 1024 x 764</p>
            <p>Supports Microsoft Edge, Firefox 92+, Chrome 93+
            </p>
            <p>� 2023 Federal Tax Authority. All rights reserved.</p>

        </div>
    </footer>
</div>
</div>
</div>
<script>
 function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
<script src="/public/assets/vat/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="/public/assets/vat/assets/demo/chart-area-demo.js"></script>
<script src="/public/assets/vat/assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
<script src="/public/assets/vat/js/datatables-simple-demo.js"></script>
</body>
</html>
