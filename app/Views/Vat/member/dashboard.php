<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Profile - SB Admin</title>
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

        .nav-link {
            font-size: 12px;
        }
        .sapMListTblRow {
    height: 22px;
}
.sapMColumnHeader {
    display: flex
;
    flex: 1 1 auto;
     padding: 0rem;  
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

        .box-header {
            display: flex;
            align-items: center;
            padding: 10px;
        }

        .box-header img {
            width: 40px;
            height: 40px;
            border-radius: 50%; /* Circular avatar */
            margin-right: 10px;
        }

        .box-footer {
            background-color: #00274d; /* Navy background */
            color: #fff; /* White text */
            padding: 10px;
            text-align: left;
        }
        .upload-button {
      display: inline-block;
      background-color: #1e3a56;
      color: white;
      padding: 7px 20px;
      border: none;
         margin-left: 15px;
      cursor: pointer;
      font-size: 16px;
    }

    .upload-button:hover {
      background-color: #1e3a56;
    }

    input[type="file"] {
      display: none;
    }
    .sb-sidenav .sb-sidenav-menu .nav .nav-link:hover{
    color:black; 
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
                <div class="nav" style="">


                    <a class="nav-link" href="<?= base_url('vat/dashboard') ?>" >
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        HOME
                    </a>
                    
                      <a class="nav-link " href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="true" aria-controls="collapseLayouts" style="background-color: #ab8240;color:#fff;">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                               <?php echo strtoupper($user['vat_username']); ?>
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse show" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <?php if($user_id !="0"){ ?>
                                    <a class="nav-link" href="/vat/filing/home/<?php echo $user_id; ?>">VAT</a>
                                    <?php }else{ ?>
                                    <a class="nav-link" href="$">VAT</a>
                                    <?php } ?>
                                   <a class="nav-link" href="#">EXCISE TAX</a>
                                    <a class="nav-link" href="#">CORPORATE TAX</a>
                                   <a class="nav-link" href="#">MY PAYMENTS</a>
                                    <a class="nav-link" href="#">MY CORRESPONDENCE</a>
                                   <a class="nav-link" href="#">USER AUTHORIZATION</a>
                                    <a class="nav-link" href="#">OTHER SERVICES</a> 
                                </nav>
                            </div>
                    <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages"-->
                    <!--   aria-expanded="false" aria-controls="collapsePages" style="background-color: #ab8240;color:#fff;">-->
                    <!--    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>-->
                    <!--    <?php echo strtoupper($user['vat_username']); ?>-->
                    <!--    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>-->
                    <!--</a>-->


                  

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
            <form action="" method="post" enctype="multipart/form-data" name="myForm">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button style="    margin-top: -35px;
    height: 42px;background-color: #f2f4f6;color:#000;" class="accordion-button" type="button">
                            <b> <?php echo strtoupper($user['vat_username']); ?> </b>
                        </button>
                    </h2>
                 
                </div>

            </div>
            

            <!-- profile Div ---->

            <div class="profileDiv" style="border:1px solid black;padding:15px;margin:15px;">
            
 <section id="__xmlview10--TaxablePersonPage-cont" class="sapMPageEnableScrolling" style="overflow: hidden auto;">
    <div id="__xmlview9--zHomeDashboardLayout" data-sap-ui="__xmlview9--zHomeDashboardLayout"
         class="sapUiBlockLayout zTaxPerDashboardTile sapUiBlockLayoutBackgroundDefault sapUiBlockLayoutSizeL">
        <div id="__xmlview9--pg_GoTop" data-sap-ui="__xmlview9--pg_GoTop"
             class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow sapUiBlockLayoutBackgroundColorSet1">
            <div style="display: flex;">
                <div id="__cell134" data-sap-ui="__cell134" style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                     class="sapUiBlockLayoutCell sapUiBlockLayoutOddCell sapUiBlockHorizontalCell">
                    <div class="sapUiBlockCellContent"><input id="__xmlview9--_footer_input"
                                                              data-sap-ui-preserve="__xmlview9--_footer_input"></div>
                </div>
            </div>
        </div>
        <span id="sap-ui-invisible-__xmlview9--idForMuwafaqRow"
              data-sap-ui="sap-ui-invisible-__xmlview9--idForMuwafaqRow" aria-hidden="true"
              class="sapUiHiddenPlaceholder"></span>
        <div id="__row92" data-sap-ui="__row92"
             class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow sapUiBlockLayoutBackgroundColorSet3">
            <div style="display: flex;">
                <div id="__cell136" data-sap-ui="__cell136" style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                     class="sapUiBlockLayoutCell zActionCell sapUiBlockLayoutOddCell sapUiBlockHorizontalCell">
                    <div class="sapUiBlockCellContent">
                        <div id="__hbox109" data-sap-ui="__hbox109"
                             class="sapMFlexBox sapMHBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent">
                            <div id="__data423" class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                 style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                <img id="__image40" data-sap-ui="__image40"
                                     src="https://eservices.tax.gov.ae/sap/bc/ui5_ui5/sap/zmcf_fmca/~0A4E59D1FAEE1EDC808772BF9A040252~/app_private/icons/req_actions_tile.png"
                                     role="presentation" aria-hidden="true" alt="" class="sapMImg"></div>
                            <div id="__data424" class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                 style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                <div id="__title36" data-sap-ui="__title36" role="heading" aria-level="2"
                                     class="sapMTitle sapMTitleStyleAuto sapMTitleNoWrap sapUiSelectable sapMTitleMaxWidth">
                                    <span id="__title36-inner">Required Actions</span></div>
                            </div>
                        </div>
                        <div id="__table9" data-sap-ui="__table9" data-sap-ui-fastnavgroup="true" role="application"
                             aria-labelledby="__text330" class="sapMList sapMListBGTranslucent sapMListTblCnt"
                             style="width: 100%;">
                            <div id="__table9-before" tabindex="-1" class="sapMListDummyArea"></div>
                            <table id="__table9-listUl" tabindex="0"
                                   class="sapMListTbl sapMListUl sapMListShowSeparatorsAll sapMListModeNone">
                                <thead>
                                <tr id="__table9-tblHeader" tabindex="-1"
                                    class="sapMListTblRow sapMLIBFocusable sapMListTblHeader">
                                    <th id="__table9-tblHeadHighlight" role="presentation" aria-hidden="true"
                                        class="sapMTableTH sapMListTblHighlightCol"></th>
                                    <th id="__column120" data-sap-ui="__column120" role="columnheader" data-sap-width=""
                                        class="sapMTableTH sapMListTblCell sapMListTblHeaderCell">
                                        <div class="sapMColumnHeader"
                                             style="justify-content: flex-start; text-align: left;"><span
                                                    id="__label240" data-sap-ui="__label240" aria-label="Due Date"
                                                    class="sapMLabel sapUiSelectable sapMLabelMaxWidth sapMColumnHeaderContent"
                                                    style="text-align: left;"><span id="__label240-text"
                                                                                    class="sapMLabelTextWrapper"><bdi
                                                            id="__label240-bdi">Due Date</bdi></span><span
                                                        class="sapMLabelColonAndRequired"></span></span></div>
                                    </th>
                                    <th id="__column121" data-sap-ui="__column121" role="columnheader" data-sap-width=""
                                        class="sapMTableTH sapMListTblCell sapMListTblHeaderCell">
                                        <div class="sapMColumnHeader"
                                             style="justify-content: flex-start; text-align: left;"><span
                                                    id="__label241" data-sap-ui="__label241" aria-label="Description"
                                                    class="sapMLabel sapUiSelectable sapMLabelMaxWidth sapMColumnHeaderContent"
                                                    style="text-align: left;"><span id="__label241-text"
                                                                                    class="sapMLabelTextWrapper"><bdi
                                                            id="__label241-bdi">Description</bdi></span><span
                                                        class="sapMLabelColonAndRequired"></span></span></div>
                                    </th>
                                    <th id="__table9-tblHeadNav" role="presentation" aria-hidden="true"
                                        class="sapMTableTH sapMListTblNavCol"></th>
                                    <th id="__table9-tblHeadNavigated" role="presentation" aria-hidden="true"
                                        class="sapMTableTH sapMListTblNavigatedCol"></th>
                                </tr>
                                </thead>
                                <tbody id="__table9-tblBody" class="sapMListItems sapMTableTBody">
                                <tr id="__item208-__table9-0" data-sap-ui="__item208-__table9-0" tabindex="-1"
                                    class="sapMLIB sapMLIB-CTX sapMLIBShowSeparator sapMLIBTypeInactive sapMLIBFocusable sapMListTblRow">
                                    <td role="presentation" aria-hidden="true" class="sapMListTblHighlightCell"></td>
                                    <td id="__item208-__table9-0_cell0" data-sap-ui-column="__column120"
                                        headers="__column120" class="sapMListTblCell" style="text-align: left;"><span
                                                id="__text222-__table9-0" data-sap-ui="__text222-__table9-0"
                                                class="sapMText sapUiSelectable sapMTextMaxWidth"
                                                style="text-align: left;">▪ 06/04/2020</span></td>
                                    <td id="__item208-__table9-0_cell1" data-sap-ui-column="__column121"
                                        headers="__column121" class="sapMListTblCell" style="text-align: left;"><a
                                                id="__link21-__table9-0" data-sap-ui="__link21-__table9-0" tabindex="0"
                                                href="" aria-labelledby="__label241 __link21-__table9-0"
                                                class="sapMLnk sapMLnkMaxWidth">Trade License Number 76831 belonging to
                                            VELI TECHNICAL CONTRACTING LLC has expired.</a></td>
                                    <td role="presentation" aria-hidden="true" class="sapMListTblNavCol"></td>
                                    <td role="presentation" aria-hidden="true" class="sapMListTblNavigatedCell"></td>
                                </tr>
                                <tr id="__item208-__table9-1" data-sap-ui="__item208-__table9-1" tabindex="-1"
                                    class="sapMLIB sapMLIB-CTX sapMLIBShowSeparator sapMLIBTypeInactive sapMLIBFocusable sapMListTblRow">
                                    <td role="presentation" aria-hidden="true" class="sapMListTblHighlightCell"></td>
                                    <td id="__item208-__table9-1_cell0" data-sap-ui-column="__column120"
                                        headers="__column120" class="sapMListTblCell" style="text-align: left;"><span
                                                id="__text222-__table9-1" data-sap-ui="__text222-__table9-1"
                                                class="sapMText sapUiSelectable sapMTextMaxWidth"
                                                style="text-align: left;">▪ 02/12/2022</span></td>
                                    <td id="__item208-__table9-1_cell1" data-sap-ui-column="__column121"
                                        headers="__column121" class="sapMListTblCell" style="text-align: left;"><a
                                                id="__link21-__table9-1" data-sap-ui="__link21-__table9-1" tabindex="0"
                                                href="" aria-labelledby="__label241 __link21-__table9-1"
                                                class="sapMLnk sapMLnkMaxWidth">Date of Incorporation / Date of
                                            Commencement of Business is missing.</a></td>
                                    <td role="presentation" aria-hidden="true" class="sapMListTblNavCol"></td>
                                    <td role="presentation" aria-hidden="true" class="sapMListTblNavigatedCell"></td>
                                </tr>
                                <tr id="__item208-__table9-2" data-sap-ui="__item208-__table9-2" tabindex="-1"
                                    class="sapMLIB sapMLIB-CTX sapMLIBShowSeparator sapMLIBTypeInactive sapMLIBFocusable sapMListTblRow">
                                    <td role="presentation" aria-hidden="true" class="sapMListTblHighlightCell"></td>
                                    <td id="__item208-__table9-2_cell0" data-sap-ui-column="__column120"
                                        headers="__column120" class="sapMListTblCell" style="text-align: left;"><span
                                                id="__text222-__table9-2" data-sap-ui="__text222-__table9-2"
                                                class="sapMText sapUiSelectable sapMTextMaxWidth"
                                                style="text-align: left;">▪ 30/07/2024</span></td>
                                    <td id="__item208-__table9-2_cell1" data-sap-ui-column="__column121"
                                        headers="__column121" class="sapMListTblCell" style="text-align: left;"><a
                                                id="__link21-__table9-2" data-sap-ui="__link21-__table9-2" tabindex="0"
                                                href="" aria-labelledby="__label241 __link21-__table9-2"
                                                class="sapMLnk sapMLnkMaxWidth">VAT Return Late Filing Penalty - Payment
                                            pending for 999.54 AED</a></td>
                                    <td role="presentation" aria-hidden="true" class="sapMListTblNavCol"></td>
                                    <td role="presentation" aria-hidden="true" class="sapMListTblNavigatedCell"></td>
                                </tr>
                                </tbody>
                            </table>
                            <div id="__table9-after" tabindex="0" class="sapMListDummyArea"></div>
                        </div>
                        <span id="sap-ui-invisible-__hbox110" data-sap-ui="sap-ui-invisible-__hbox110"
                              aria-hidden="true" class="sapUiHiddenPlaceholder"></span></div>
                </div>
                <div id="__cell137" data-sap-ui="__cell137" style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                     class="sapUiBlockLayoutCell zMostUsedCell sapUiBlockLayoutEvenCell sapUiBlockHorizontalCell">
                    <div class="sapUiBlockCellContent">
                        <div id="__hbox111" data-sap-ui="__hbox111"
                             class="sapMFlexBox sapMHBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent">
                            <div id="__data425" class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                 style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                <img id="__image41" data-sap-ui="__image41"
                                     src="https://eservices.tax.gov.ae/sap/bc/ui5_ui5/sap/zmcf_fmca/~0A4E59D1FAEE1EDC8087727B6B68A252~/app_private/icons/most_used_tile.png"
                                     role="presentation" aria-hidden="true" alt="" class="sapMImg"></div>
                            <div id="__data426" class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                 style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                <div id="__title37" data-sap-ui="__title37" role="heading" aria-level="2"
                                     class="sapMTitle sapMTitleStyleAuto sapMTitleNoWrap sapUiSelectable sapMTitleMaxWidth">
                                    <span id="__title37-inner">Most Used Services</span></div>
                            </div>
                        </div>
                        <div id="__list2" data-sap-ui="__list2" data-sap-ui-fastnavgroup="true"
                             class="sapMList sapMListBGSolid" style="width: 100%;">
                            <div id="__list2-before" tabindex="-1" class="sapMListDummyArea"></div>
                            <ul id="__list2-listUl" role="listbox" tabindex="0"
                                class="sapMListItems sapMListUl sapMListShowSeparatorsAll sapMListModeNone">
                                <li id="__item209-__list2-0" data-sap-ui="__item209-__list2-0" tabindex="-1"
                                    role="option"
                                    class="sapMLIB sapMLIB-CTX sapMLIBShowSeparator sapMLIBTypeNavigation sapMLIBActionable sapMLIBHoverable sapMLIBFocusable sapMSLI">
                                    <div id="__item209-__list2-0-content" class="sapMLIBContent"><span
                                                id="__item209-__list2-0-img" data-sap-ui="__item209-__list2-0-img"
                                                role="presentation" aria-hidden="true" data-sap-ui-icon-content=""
                                                class="sapUiIcon sapUiIconMirrorInRTL sapMSLIImgIcon"
                                                style="font-family: 'SAP\2dicons';"></span>
                                        <div class="sapMSLIDiv">
                                            <div class="sapMSLITitleOnly">VAT - New Registration</div>
                                        </div>
                                    </div>
                                    <span id="__item209-__list2-0-imgNav" data-sap-ui="__item209-__list2-0-imgNav"
                                          role="presentation" aria-hidden="true" data-sap-ui-icon-content=""
                                          class="sapUiIcon sapUiIconMirrorInRTL sapMLIBType sapMLIBImgNav"
                                          style="font-family: 'SAP\2dicons';"></span></li>
                                <li id="__item209-__list2-1" data-sap-ui="__item209-__list2-1" tabindex="-1"
                                    role="option"
                                    class="sapMLIB sapMLIB-CTX sapMLIBShowSeparator sapMLIBTypeNavigation sapMLIBActionable sapMLIBHoverable sapMLIBFocusable sapMSLI">
                                    <div id="__item209-__list2-1-content" class="sapMLIBContent"><span
                                                id="__item209-__list2-1-img" data-sap-ui="__item209-__list2-1-img"
                                                role="presentation" aria-hidden="true" data-sap-ui-icon-content=""
                                                class="sapUiIcon sapUiIconMirrorInRTL sapMSLIImgIcon"
                                                style="font-family: 'SAP\2dicons';"></span>
                                        <div class="sapMSLIDiv">
                                            <div class="sapMSLITitleOnly">VAT 201 VAT return</div>
                                        </div>
                                    </div>
                                    <span id="__item209-__list2-1-imgNav" data-sap-ui="__item209-__list2-1-imgNav"
                                          role="presentation" aria-hidden="true" data-sap-ui-icon-content=""
                                          class="sapUiIcon sapUiIconMirrorInRTL sapMLIBType sapMLIBImgNav"
                                          style="font-family: 'SAP\2dicons';"></span></li>
                            </ul>
                            <div id="__list2-after" tabindex="0" class="sapMListDummyArea"></div>
                        </div>
                        <span id="sap-ui-invisible-__hbox112" data-sap-ui="sap-ui-invisible-__hbox112"
                              aria-hidden="true" class="sapUiHiddenPlaceholder"></span></div>
                </div>
            </div>
        </div>
        <div id="__xmlview9--taxablePerson_iconTabBar_bRow" data-sap-ui="__xmlview9--taxablePerson_iconTabBar_bRow"
             class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow sapUiBlockLayoutBackgroundColorSet4">
            <div style="display: flex;">
                <div id="__cell174" data-sap-ui="__cell174" style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                     class="sapUiBlockLayoutCell sapUiBlockLayoutOddCell sapUiBlockHorizontalCell">
                    <div class="sapUiBlockCellContent">
                        <div id="__xmlview9--taxablePerson_iconTabBar"
                             data-sap-ui="__xmlview9--taxablePerson_iconTabBar"
                             class="sapMITB sapMITBBackgroundDesignSolid sapUiResponsiveContentPadding zsapFmcaIconTab z_taberror">
                            <div id="__xmlview9--taxablePerson_iconTabBar--header"
                                 data-sap-ui="__xmlview9--taxablePerson_iconTabBar--header" role="navigation"
                                 class="sapMITH sapContrastPlus sapMITHBackgroundDesignSolid sapMITBTextOnly sapMITBInLine"
                                 tabindex="0">
                                <div id="__xmlview9--taxablePerson_iconTabBar--header-head" role="tablist"
                                     aria-orientation="horizontal" class="sapMITBHead">
                                    <div id="__xmlview9--regoverview_IconTabFilter"
                                         data-sap-ui="__xmlview9--regoverview_IconTabFilter" role="tab"
                                         aria-controls="__xmlview9--taxablePerson_iconTabBar-content"
                                         aria-labelledby="__xmlview9--regoverview_IconTabFilter-text" aria-posinset="1"
                                         aria-setsize="4" aria-selected="true"
                                         class="sapMITBItem sapMITBItemNoCount sapMITBVertical sapMITBFilter sapMITBFilterDefault sapMITBSelected"
                                         tabindex="-1">
                                        <div class="sapMITBFilterWrapper">
                                            <div id="__xmlview9--regoverview_IconTabFilter-text" dir="ltr"
                                                 class="sapMITBText"><span class="sapMITHTextContent">Registration Overview</span>
                                            </div>
                                            <div class="sapMITBContentArrow"></div>
                                        </div>
                                    </div>
                                    <div id="__xmlview9--taxperson_IconTabFilter"
                                         data-sap-ui="__xmlview9--taxperson_IconTabFilter" role="tab"
                                         aria-controls="__xmlview9--taxablePerson_iconTabBar-content"
                                         aria-labelledby="__xmlview9--taxperson_IconTabFilter-text" aria-posinset="2"
                                         aria-setsize="4" aria-selected="false"
                                         class="sapMITBItem sapMITBItemNoCount sapMITBVertical sapMITBFilter sapMITBFilterDefault"
                                         tabindex="-1">
                                        <div class="sapMITBFilterWrapper">
                                            <div id="__xmlview9--taxperson_IconTabFilter-text" dir="ltr"
                                                 class="sapMITBText"><span class="sapMITHTextContent">Taxable Person Details (!)</span>
                                            </div>
                                            <div class="sapMITBContentArrow"></div>
                                        </div>
                                    </div>
                                    <div id="__xmlview9--accaccess_IconTabFilter"
                                         data-sap-ui="__xmlview9--accaccess_IconTabFilter" role="tab"
                                         aria-controls="__xmlview9--taxablePerson_iconTabBar-content"
                                         aria-labelledby="__xmlview9--accaccess_IconTabFilter-text" aria-posinset="3"
                                         aria-setsize="4" aria-selected="false"
                                         class="sapMITBItem sapMITBItemNoCount sapMITBVertical sapMITBFilter sapMITBFilterDefault"
                                         tabindex="-1">
                                        <div class="sapMITBFilterWrapper">
                                            <div id="__xmlview9--accaccess_IconTabFilter-text" dir="ltr"
                                                 class="sapMITBText"><span
                                                        class="sapMITHTextContent">Account Access</span></div>
                                            <div class="sapMITBContentArrow"></div>
                                        </div>
                                    </div>
                                    <div id="__xmlview9--pendingRequest_IconTabFilter"
                                         data-sap-ui="__xmlview9--pendingRequest_IconTabFilter" role="tab"
                                         aria-controls="__xmlview9--taxablePerson_iconTabBar-content"
                                         aria-labelledby="__xmlview9--pendingRequest_IconTabFilter-text"
                                         aria-posinset="4" aria-setsize="4" aria-selected="false"
                                         class="sapMITBItem sapMITBItemNoCount sapMITBVertical sapMITBFilter sapMITBFilterDefault"
                                         tabindex="-1">
                                        <div class="sapMITBFilterWrapper">
                                            <div id="__xmlview9--pendingRequest_IconTabFilter-text" dir="ltr"
                                                 class="sapMITBText"><span class="sapMITHTextContent">Pending Requests (0)</span>
                                            </div>
                                            <div class="sapMITBContentArrow"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sapMITHOverflow">
                                    <div id="__xmlview9--taxablePerson_iconTabBar--header-overflow"
                                         data-sap-ui="__xmlview9--taxablePerson_iconTabBar--header-overflow" role="tab"
                                         aria-controls="__xmlview9--taxablePerson_iconTabBar-content"
                                         aria-labelledby="__xmlview9--taxablePerson_iconTabBar--header-overflow-text"
                                         aria-selected="false" aria-haspopup="menu"
                                         class="sapMITBItem sapMITBItemNoCount sapMITBVertical sapMITBFilter sapMITBFilterDefault sapMITHUnselectable">
                                        <div class="sapMITBFilterWrapper">
                                            <div id="__xmlview9--taxablePerson_iconTabBar--header-overflow-text"
                                                 dir="ltr" class="sapMITBText"><span
                                                        class="sapMITHTextContent">More</span><span
                                                        id="__xmlview9--taxablePerson_iconTabBar--header-overflow-expandButton"
                                                        class="sapMITHShowSubItemsIcon"><span
                                                            data-sap-ui-icon-content="" role="presentation"
                                                            title="More" id="id-1737571167581-181" aria-label="More"
                                                            class="sapUiIcon sapUiIconMirrorInRTL"
                                                            style="font-family: 'SAP\2dicons';"></span></span></div>
                                            <div class="sapMITBContentArrow"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="__xmlview9--taxablePerson_iconTabBar-containerContent"
                                 class="sapMITBContainerContent">
                                <div id="__xmlview9--taxablePerson_iconTabBar-content" role="tabpanel"
                                     aria-labelledby="__xmlview9--regoverview_IconTabFilter" class="sapMITBContent">
                                    <div id="__xmlview9--regoverviewTable_vbox"
                                         data-sap-ui="__xmlview9--regoverviewTable_vbox"
                                         class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent">
                                        <div id="__data427"
                                             class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                             style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                            <div id="__xmlview9--regoverviewTable"
                                                 data-sap-ui="__xmlview9--regoverviewTable"
                                                 data-sap-ui-fastnavgroup="true" role="application"
                                                 aria-labelledby="__text330"
                                                 class="sapMList sapMListBGTranslucent sapMListTblCnt zTabletoolbar"
                                                 style="width: 100%;">
                                                <div id="__xmlview9--regoverviewTable-before" tabindex="-1"
                                                     class="sapMListDummyArea"></div>
                                                <table id="__xmlview9--regoverviewTable-listUl" tabindex="0"
                                                       class="sapMListTbl sapMListUl sapMListShowSeparatorsAll sapMListModeNone">
                                                    <thead>
                                                    <tr id="__xmlview9--regoverviewTable-tblHeader" tabindex="-1"
                                                        class="sapMListTblRow sapMLIBFocusable sapMListTblHeader">
                                                        <th id="__xmlview9--regoverviewTable-tblHeadHighlight"
                                                            role="presentation" aria-hidden="true"
                                                            class="sapMTableTH sapMListTblHighlightCol"></th>
                                                        <th id="__column122" data-sap-ui="__column122"
                                                            role="columnheader" data-sap-width="16%"
                                                            class="sapMTableTH sapMListTblCell sapMListTblHeaderCell"
                                                            style="width: 16%;">
                                                            <div class="sapMColumnHeader"
                                                                 style="justify-content: flex-start; text-align: left;">
                                                                <span id="__text223" data-sap-ui="__text223"
                                                                      class="sapMText sapUiSelectable sapMTextMaxWidth sapMColumnHeaderContent"
                                                                      style="text-align: left;">Registration Type</span>
                                                            </div>
                                                        </th>
                                                        <th id="__column123" data-sap-ui="__column123"
                                                            role="columnheader" data-sap-width="16%"
                                                            class="sapMTableTH sapMListTblCell sapMListTblHeaderCell"
                                                            style="width: 16%;">
                                                            <div class="sapMColumnHeader"
                                                                 style="justify-content: flex-start; text-align: left;">
                                                                <span id="__text224" data-sap-ui="__text224"
                                                                      class="sapMText sapUiSelectable sapMTextMaxWidth sapMColumnHeaderContent"
                                                                      style="text-align: left;">Registration Status</span>
                                                            </div>
                                                        </th>
                                                        <th id="__column124" data-sap-ui="__column124"
                                                            role="columnheader" data-sap-width="16%"
                                                            class="sapMTableTH sapMListTblCell sapMListTblHeaderCell"
                                                            style="width: 16%;">
                                                            <div class="sapMColumnHeader"
                                                                 style="justify-content: flex-start; text-align: left;">
                                                                <span id="__text225" data-sap-ui="__text225"
                                                                      class="sapMText sapUiSelectable sapMTextMaxWidth sapMColumnHeaderContent"
                                                                      style="text-align: left;">TRN/WHK No.</span></div>
                                                        </th>
                                                        <th id="__column125" data-sap-ui="__column125"
                                                            role="columnheader" data-sap-width="16%"
                                                            class="sapMTableTH sapMListTblCell sapMListTblHeaderCell"
                                                            style="width: 16%;">
                                                            <div class="sapMColumnHeader"
                                                                 style="justify-content: flex-start; text-align: left;">
                                                                <span id="__text226" data-sap-ui="__text226"
                                                                      class="sapMText sapUiSelectable sapMTextBreakWord sapMTextMaxWidth sapMColumnHeaderContent"
                                                                      style="text-align: left;">GIBAN</span></div>
                                                        </th>
                                                        <th id="__column126" data-sap-ui="__column126"
                                                            role="columnheader" data-sap-width="25%"
                                                            class="sapMTableTH sapMListTblCell sapMListTblHeaderCell"
                                                            style="width: 25%;">
                                                            <div class="sapMColumnHeader"
                                                                 style="justify-content: flex-start; text-align: left;">
                                                                <span id="__text227" data-sap-ui="__text227"
                                                                      class="sapMText sapUiSelectable sapMTextMaxWidth sapMColumnHeaderContent"
                                                                      style="text-align: left;">Effective Date of Registration</span>
                                                            </div>
                                                        </th>
                                                        <th id="__column129" data-sap-ui="__column129"
                                                            role="columnheader" data-sap-width="10%"
                                                            class="sapMTableTH sapMListTblCell sapMListTblHeaderCell"
                                                            style="width: 10%;">
                                                            <div class="sapMColumnHeader"
                                                                 style="justify-content: flex-start; text-align: left;">
                                                                <span id="__text230" data-sap-ui="__text230"
                                                                      class="sapMText sapUiSelectable sapMTextBreakWord sapMTextMaxWidth sapMColumnHeaderContent"
                                                                      style="text-align: left;">Action</span></div>
                                                        </th>
                                                        <th id="__xmlview9--regoverviewTable-tblHeadNav"
                                                            role="presentation" aria-hidden="true"
                                                            class="sapMTableTH sapMListTblNavCol"></th>
                                                        <th id="__xmlview9--regoverviewTable-tblHeadNavigated"
                                                            role="presentation" aria-hidden="true"
                                                            class="sapMTableTH sapMListTblNavigatedCol"></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="__xmlview9--regoverviewTable-tblBody"
                                                           class="sapMListItems sapMTableTBody">
                                                    <tr id="__item210-__xmlview9--regoverviewTable-0"
                                                        data-sap-ui="__item210-__xmlview9--regoverviewTable-0"
                                                        tabindex="-1"
                                                        class="sapMLIB sapMLIB-CTX sapMLIBShowSeparator sapMLIBTypeInactive sapMLIBFocusable sapMListTblRow">
                                                        <td role="presentation" aria-hidden="true"
                                                            class="sapMListTblHighlightCell"></td>
                                                        <td id="__item210-__xmlview9--regoverviewTable-0_cell0"
                                                            data-sap-ui-column="__column122" headers="__column122"
                                                            class="sapMListTblCell" style="text-align: left;"><span
                                                                    id="__text231-__xmlview9--regoverviewTable-0"
                                                                    data-sap-ui="__text231-__xmlview9--regoverviewTable-0"
                                                                    class="sapMText sapUiSelectable sapMTextMaxWidth"
                                                                    style="text-align: left;">Corporate Tax</span></td>
                                                        <td id="__item210-__xmlview9--regoverviewTable-0_cell1"
                                                            data-sap-ui-column="__column123" headers="__column123"
                                                            class="sapMListTblCell" style="text-align: left;">
                                                            <div id="__hbox113-__xmlview9--regoverviewTable-0"
                                                                 data-sap-ui="__hbox113-__xmlview9--regoverviewTable-0"
                                                                 class="sapMFlexBox sapMHBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsCenter sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent zStatusTD zTxtLeftAligned">
                                                                <div id="__data477"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                    <span id="__icon51-__xmlview9--regoverviewTable-0"
                                                                          data-sap-ui="__icon51-__xmlview9--regoverviewTable-0"
                                                                          role="presentation" aria-hidden="true"
                                                                          aria-label="circle-task-2"
                                                                          data-sap-ui-icon-content=""
                                                                          class="sapUiIcon sapUiIconMirrorInRTL"
                                                                          style="font-family: 'SAP\2dicons'; color: #5E696E;"></span>
                                                                </div>
                                                                <div id="__data478"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                    <span id="__label242-__xmlview9--regoverviewTable-0"
                                                                          data-sap-ui="__label242-__xmlview9--regoverviewTable-0"
                                                                          class="sapMLabel sapUiSelectable sapMLabelNoText"
                                                                          style="width: 0.5rem; text-align: left;"><span
                                                                                id="__label242-__xmlview9--regoverviewTable-0-text"
                                                                                class="sapMLabelTextWrapper"><bdi
                                                                                    id="__label242-__xmlview9--regoverviewTable-0-bdi"></bdi></span><span
                                                                                class="sapMLabelColonAndRequired"></span></span>
                                                                </div>
                                                                <div id="__data479"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                    <span id="__text232-__xmlview9--regoverviewTable-0"
                                                                          data-sap-ui="__text232-__xmlview9--regoverviewTable-0"
                                                                          class="sapMText sapUiSelectable sapMTextMaxWidth"
                                                                          style="text-align: left;">Not&nbsp;Registered</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td id="__item210-__xmlview9--regoverviewTable-0_cell2"
                                                            data-sap-ui-column="__column124" headers="__column124"
                                                            class="sapMListTblCell" style="text-align: left;"><span
                                                                    id="__text233-__xmlview9--regoverviewTable-0"
                                                                    data-sap-ui="__text233-__xmlview9--regoverviewTable-0"
                                                                    class="sapMText sapUiSelectable sapMTextBreakWord sapMTextMaxWidth"
                                                                    style="text-align: left;">-</span></td>
                                                        <td id="__item210-__xmlview9--regoverviewTable-0_cell3"
                                                            data-sap-ui-column="__column125" headers="__column125"
                                                            class="sapMListTblCell" style="text-align: left;"><span
                                                                    id="__text234-__xmlview9--regoverviewTable-0"
                                                                    data-sap-ui="__text234-__xmlview9--regoverviewTable-0"
                                                                    class="sapMText sapUiSelectable sapMTextBreakWord sapMTextMaxWidth"
                                                                    style="text-align: left;">-</span></td>
                                                        <td id="__item210-__xmlview9--regoverviewTable-0_cell4"
                                                            data-sap-ui-column="__column126" headers="__column126"
                                                            class="sapMListTblCell" style="text-align: left;"><span
                                                                    id="__text235-__xmlview9--regoverviewTable-0"
                                                                    data-sap-ui="__text235-__xmlview9--regoverviewTable-0"
                                                                    class="sapMText sapUiSelectable sapMTextBreakWord sapMTextMaxWidth"
                                                                    style="text-align: left;">-</span></td>
                                                        <td id="__item210-__xmlview9--regoverviewTable-0_cell7"
                                                            data-sap-ui-column="__column129" headers="__column129"
                                                            class="sapMListTblCell" style="text-align: left;"><span
                                                                    id="__xmlview9--regoverview_actionBtn-__xmlview9--regoverviewTable-0"
                                                                    data-sap-ui="__xmlview9--regoverview_actionBtn-__xmlview9--regoverviewTable-0"
                                                                    aria-labelledby="__text230" role="presentation"
                                                                    aria-hidden="true" data-sap-ui-icon-content=""
                                                                    title="More" tabindex="0"
                                                                    class="sapUiIcon sapUiIconMirrorInRTL sapUiIconPointer"
                                                                    style="font-family: 'SAP\2dicons';"></span></td>
                                                        <td role="presentation" aria-hidden="true"
                                                            class="sapMListTblNavCol"></td>
                                                        <td role="presentation" aria-hidden="true"
                                                            class="sapMListTblNavigatedCell"></td>
                                                    </tr>
                                                    <tr id="__item210-__xmlview9--regoverviewTable-1"
                                                        data-sap-ui="__item210-__xmlview9--regoverviewTable-1"
                                                        tabindex="-1"
                                                        class="sapMLIB sapMLIB-CTX sapMLIBShowSeparator sapMLIBTypeInactive sapMLIBFocusable sapMListTblRow">
                                                        <td role="presentation" aria-hidden="true"
                                                            class="sapMListTblHighlightCell"></td>
                                                        <td id="__item210-__xmlview9--regoverviewTable-1_cell0"
                                                            data-sap-ui-column="__column122" headers="__column122"
                                                            class="sapMListTblCell" style="text-align: left;"><span
                                                                    id="__text231-__xmlview9--regoverviewTable-1"
                                                                    data-sap-ui="__text231-__xmlview9--regoverviewTable-1"
                                                                    class="sapMText sapUiSelectable sapMTextMaxWidth"
                                                                    style="text-align: left;">Value Added Tax</span>
                                                        </td>
                                                        <td id="__item210-__xmlview9--regoverviewTable-1_cell1"
                                                            data-sap-ui-column="__column123" headers="__column123"
                                                            class="sapMListTblCell" style="text-align: left;">
                                                            <div id="__hbox113-__xmlview9--regoverviewTable-1"
                                                                 data-sap-ui="__hbox113-__xmlview9--regoverviewTable-1"
                                                                 class="sapMFlexBox sapMHBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsCenter sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent zStatusTD zTxtLeftAligned">
                                                                <div id="__data480"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                    <span id="__icon51-__xmlview9--regoverviewTable-1"
                                                                          data-sap-ui="__icon51-__xmlview9--regoverviewTable-1"
                                                                          role="presentation" aria-hidden="true"
                                                                          aria-label="circle-task-2"
                                                                          data-sap-ui-icon-content=""
                                                                          class="sapUiIcon sapUiIconMirrorInRTL"
                                                                          style="font-family: 'SAP\2dicons'; color: #2B7D2B;"></span>
                                                                </div>
                                                                <div id="__data481"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                    <span id="__label242-__xmlview9--regoverviewTable-1"
                                                                          data-sap-ui="__label242-__xmlview9--regoverviewTable-1"
                                                                          class="sapMLabel sapUiSelectable sapMLabelNoText"
                                                                          style="width: 0.5rem; text-align: left;"><span
                                                                                id="__label242-__xmlview9--regoverviewTable-1-text"
                                                                                class="sapMLabelTextWrapper"><bdi
                                                                                    id="__label242-__xmlview9--regoverviewTable-1-bdi"></bdi></span><span
                                                                                class="sapMLabelColonAndRequired"></span></span>
                                                                </div>
                                                                <div id="__data482"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                    <span id="vat_reg_id"
                                                                          data-sap-ui="__text232-__xmlview9--regoverviewTable-1"
                                                                          class="sapMText sapUiSelectable sapMTextBreakWord sapMTextMaxWidth"
                                                                          style="text-align: left;">  <?php  if(isset($_COOKIE['vat_reg_status'])){ echo "Registered"; }else{ echo "Not registered"; } ?></span></div>
                                                            </div>
                                                        </td>
                                                        <td id="__item210-__xmlview9--regoverviewTable-1_cell2"
                                                            data-sap-ui-column="__column124" headers="__column124"
                                                            class="sapMListTblCell" style="text-align: left;"><span
                                                                    id="__text233-__xmlview9--regoverviewTable-1"
                                                                    data-sap-ui="__text233-__xmlview9--regoverviewTable-1"
                                                                    class="sapMText sapUiSelectable sapMTextBreakWord sapMTextMaxWidth"
                                                                    style="text-align: left;">-</span>
                                                        </td>
                                                        <td id="__item210-__xmlview9--regoverviewTable-1_cell3"
                                                            data-sap-ui-column="__column125" headers="__column125"
                                                            class="sapMListTblCell" style="text-align: left;"><span
                                                                    id="__text234-__xmlview9--regoverviewTable-1"
                                                                    data-sap-ui="__text234-__xmlview9--regoverviewTable-1"
                                                                    class="sapMText sapUiSelectable sapMTextBreakWord sapMTextMaxWidth"
                                                                    style="text-align: left;">-</span>
                                                        </td>
                                                        <td id="__item210-__xmlview9--regoverviewTable-1_cell4"
                                                            data-sap-ui-column="__column126" headers="__column126"
                                                            class="sapMListTblCell" style="text-align: left;"><span
                                                                    id="__text235-__xmlview9--regoverviewTable-1"
                                                                    data-sap-ui="__text235-__xmlview9--regoverviewTable-1"
                                                                    class="sapMText sapUiSelectable sapMTextBreakWord sapMTextMaxWidth"
                                                                    style="text-align: left;">-</span></td>
                                                        <td class="sapMListTblCell"> 
                                                            
   <div class="dropdown">
    <span  data-bs-toggle="dropdown">
   <i style="font-size:24px" class="fa">&#xf141;</i>
    </span>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="/vat/vat_registration">Register</a></li> 
    </ul>
  </div>                                                    
                                                            </td>
                                                        <td role="presentation" aria-hidden="true"
                                                            class="sapMListTblNavCol"></td>
                                                        <td role="presentation" aria-hidden="true"
                                                            class="sapMListTblNavigatedCell"></td>
                                                    </tr>
                                                    <tr id="__item210-__xmlview9--regoverviewTable-2"
                                                        data-sap-ui="__item210-__xmlview9--regoverviewTable-2"
                                                        tabindex="-1"
                                                        class="sapMLIB sapMLIB-CTX sapMLIBShowSeparator sapMLIBTypeInactive sapMLIBFocusable sapMListTblRow">
                                                        <td role="presentation" aria-hidden="true"
                                                            class="sapMListTblHighlightCell"></td>
                                                        <td id="__item210-__xmlview9--regoverviewTable-2_cell0"
                                                            data-sap-ui-column="__column122" headers="__column122"
                                                            class="sapMListTblCell" style="text-align: left;"><span
                                                                    id="__text231-__xmlview9--regoverviewTable-2"
                                                                    data-sap-ui="__text231-__xmlview9--regoverviewTable-2"
                                                                    class="sapMText sapUiSelectable sapMTextMaxWidth"
                                                                    style="text-align: left;">Tax Group</span></td>
                                                        <td id="__item210-__xmlview9--regoverviewTable-2_cell1"
                                                            data-sap-ui-column="__column123" headers="__column123"
                                                            class="sapMListTblCell" style="text-align: left;">
                                                            <div id="__hbox113-__xmlview9--regoverviewTable-2"
                                                                 data-sap-ui="__hbox113-__xmlview9--regoverviewTable-2"
                                                                 class="sapMFlexBox sapMHBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsCenter sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent zStatusTD zTxtLeftAligned">
                                                                <div id="__data483"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                    <span id="__icon51-__xmlview9--regoverviewTable-2"
                                                                          data-sap-ui="__icon51-__xmlview9--regoverviewTable-2"
                                                                          role="presentation" aria-hidden="true"
                                                                          aria-label="circle-task-2"
                                                                          data-sap-ui-icon-content=""
                                                                          class="sapUiIcon sapUiIconMirrorInRTL"
                                                                          style="font-family: 'SAP\2dicons'; color: #5E696E;"></span>
                                                                </div>
                                                                <div id="__data484"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                    <span id="__label242-__xmlview9--regoverviewTable-2"
                                                                          data-sap-ui="__label242-__xmlview9--regoverviewTable-2"
                                                                          class="sapMLabel sapUiSelectable sapMLabelNoText"
                                                                          style="width: 0.5rem; text-align: left;"><span
                                                                                id="__label242-__xmlview9--regoverviewTable-2-text"
                                                                                class="sapMLabelTextWrapper"><bdi
                                                                                    id="__label242-__xmlview9--regoverviewTable-2-bdi"></bdi></span><span
                                                                                class="sapMLabelColonAndRequired"></span></span>
                                                                </div>
                                                                <div id="__data485"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                    <span id="__text232-__xmlview9--regoverviewTable-2"
                                                                          data-sap-ui="__text232-__xmlview9--regoverviewTable-2"
                                                                          class="sapMText sapUiSelectable sapMTextMaxWidth"
                                                                          style="text-align: left;">Not&nbsp;Registered</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td id="__item210-__xmlview9--regoverviewTable-2_cell2"
                                                            data-sap-ui-column="__column124" headers="__column124"
                                                            class="sapMListTblCell" style="text-align: left;"><span
                                                                    id="__text233-__xmlview9--regoverviewTable-2"
                                                                    data-sap-ui="__text233-__xmlview9--regoverviewTable-2"
                                                                    class="sapMText sapUiSelectable sapMTextBreakWord sapMTextMaxWidth"
                                                                    style="text-align: left;">-</span></td>
                                                        <td id="__item210-__xmlview9--regoverviewTable-2_cell3"
                                                            data-sap-ui-column="__column125" headers="__column125"
                                                            class="sapMListTblCell" style="text-align: left;"><span
                                                                    id="__text234-__xmlview9--regoverviewTable-2"
                                                                    data-sap-ui="__text234-__xmlview9--regoverviewTable-2"
                                                                    class="sapMText sapUiSelectable sapMTextBreakWord sapMTextMaxWidth"
                                                                    style="text-align: left;">-</span></td>
                                                        <td id="__item210-__xmlview9--regoverviewTable-2_cell4"
                                                            data-sap-ui-column="__column126" headers="__column126"
                                                            class="sapMListTblCell" style="text-align: left;"><span
                                                                    id="__text235-__xmlview9--regoverviewTable-2"
                                                                    data-sap-ui="__text235-__xmlview9--regoverviewTable-2"
                                                                    class="sapMText sapUiSelectable sapMTextBreakWord sapMTextMaxWidth"
                                                                    style="text-align: left;">-</span></td>
                                                        <td id="__item210-__xmlview9--regoverviewTable-2_cell7"
                                                            data-sap-ui-column="__column129" headers="__column129"
                                                            class="sapMListTblCell" style="text-align: left;"><span
                                                                    id="__xmlview9--regoverview_actionBtn-__xmlview9--regoverviewTable-2"
                                                                    data-sap-ui="__xmlview9--regoverview_actionBtn-__xmlview9--regoverviewTable-2"
                                                                    aria-labelledby="__text230" role="presentation"
                                                                    aria-hidden="true" data-sap-ui-icon-content=""
                                                                    title="More" tabindex="0"
                                                                    class="sapUiIcon sapUiIconMirrorInRTL sapUiIconPointer"
                                                                    style="font-family: 'SAP\2dicons';"></span></td>
                                                        <td role="presentation" aria-hidden="true"
                                                            class="sapMListTblNavCol"></td>
                                                        <td role="presentation" aria-hidden="true"
                                                            class="sapMListTblNavigatedCell"></td>
                                                    </tr>
                                                    <tr id="__item210-__xmlview9--regoverviewTable-3"
                                                        data-sap-ui="__item210-__xmlview9--regoverviewTable-3"
                                                        tabindex="-1"
                                                        class="sapMLIB sapMLIB-CTX sapMLIBShowSeparator sapMLIBTypeInactive sapMLIBFocusable sapMListTblRow">
                                                        <td role="presentation" aria-hidden="true"
                                                            class="sapMListTblHighlightCell"></td>
                                                        <td id="__item210-__xmlview9--regoverviewTable-3_cell0"
                                                            data-sap-ui-column="__column122" headers="__column122"
                                                            class="sapMListTblCell" style="text-align: left;"><span
                                                                    id="__text231-__xmlview9--regoverviewTable-3"
                                                                    data-sap-ui="__text231-__xmlview9--regoverviewTable-3"
                                                                    class="sapMText sapUiSelectable sapMTextMaxWidth"
                                                                    style="text-align: left;">VAT Clearing Company - TINCO</span>
                                                        </td>
                                                        <td id="__item210-__xmlview9--regoverviewTable-3_cell1"
                                                            data-sap-ui-column="__column123" headers="__column123"
                                                            class="sapMListTblCell" style="text-align: left;">
                                                            <div id="__hbox113-__xmlview9--regoverviewTable-3"
                                                                 data-sap-ui="__hbox113-__xmlview9--regoverviewTable-3"
                                                                 class="sapMFlexBox sapMHBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsCenter sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent zStatusTD zTxtLeftAligned">
                                                                <div id="__data486"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                    <span id="__icon51-__xmlview9--regoverviewTable-3"
                                                                          data-sap-ui="__icon51-__xmlview9--regoverviewTable-3"
                                                                          role="presentation" aria-hidden="true"
                                                                          aria-label="circle-task-2"
                                                                          data-sap-ui-icon-content=""
                                                                          class="sapUiIcon sapUiIconMirrorInRTL"
                                                                          style="font-family: 'SAP\2dicons'; color: #5E696E;"></span>
                                                                </div>
                                                                <div id="__data487"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                    <span id="__label242-__xmlview9--regoverviewTable-3"
                                                                          data-sap-ui="__label242-__xmlview9--regoverviewTable-3"
                                                                          class="sapMLabel sapUiSelectable sapMLabelNoText"
                                                                          style="width: 0.5rem; text-align: left;"><span
                                                                                id="__label242-__xmlview9--regoverviewTable-3-text"
                                                                                class="sapMLabelTextWrapper"><bdi
                                                                                    id="__label242-__xmlview9--regoverviewTable-3-bdi"></bdi></span><span
                                                                                class="sapMLabelColonAndRequired"></span></span>
                                                                </div>
                                                                <div id="__data488"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                    <span id="__text232-__xmlview9--regoverviewTable-3"
                                                                          data-sap-ui="__text232-__xmlview9--regoverviewTable-3"
                                                                          class="sapMText sapUiSelectable sapMTextMaxWidth"
                                                                          style="text-align: left;">Not&nbsp;Registered</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td id="__item210-__xmlview9--regoverviewTable-3_cell2"
                                                            data-sap-ui-column="__column124" headers="__column124"
                                                            class="sapMListTblCell" style="text-align: left;"><span
                                                                    id="__text233-__xmlview9--regoverviewTable-3"
                                                                    data-sap-ui="__text233-__xmlview9--regoverviewTable-3"
                                                                    class="sapMText sapUiSelectable sapMTextBreakWord sapMTextMaxWidth"
                                                                    style="text-align: left;">-</span></td>
                                                        <td id="__item210-__xmlview9--regoverviewTable-3_cell3"
                                                            data-sap-ui-column="__column125" headers="__column125"
                                                            class="sapMListTblCell" style="text-align: left;"><span
                                                                    id="__text234-__xmlview9--regoverviewTable-3"
                                                                    data-sap-ui="__text234-__xmlview9--regoverviewTable-3"
                                                                    class="sapMText sapUiSelectable sapMTextBreakWord sapMTextMaxWidth"
                                                                    style="text-align: left;">-</span></td>
                                                        <td id="__item210-__xmlview9--regoverviewTable-3_cell4"
                                                            data-sap-ui-column="__column126" headers="__column126"
                                                            class="sapMListTblCell" style="text-align: left;"><span
                                                                    id="__text235-__xmlview9--regoverviewTable-3"
                                                                    data-sap-ui="__text235-__xmlview9--regoverviewTable-3"
                                                                    class="sapMText sapUiSelectable sapMTextBreakWord sapMTextMaxWidth"
                                                                    style="text-align: left;">-</span></td>
                                                        <td id="__item210-__xmlview9--regoverviewTable-3_cell7"
                                                            data-sap-ui-column="__column129" headers="__column129"
                                                            class="sapMListTblCell" style="text-align: left;"><span
                                                                    id="__xmlview9--regoverview_actionBtn-__xmlview9--regoverviewTable-3"
                                                                    data-sap-ui="__xmlview9--regoverview_actionBtn-__xmlview9--regoverviewTable-3"
                                                                    aria-labelledby="__text230" role="presentation"
                                                                    aria-hidden="true" data-sap-ui-icon-content=""
                                                                    title="More" tabindex="0"
                                                                    class="sapUiIcon sapUiIconMirrorInRTL sapUiIconPointer"
                                                                    style="font-family: 'SAP\2dicons';"></span></td>
                                                        <td role="presentation" aria-hidden="true"
                                                            class="sapMListTblNavCol"></td>
                                                        <td role="presentation" aria-hidden="true"
                                                            class="sapMListTblNavigatedCell"></td>
                                                    </tr>
                                                    <tr id="__item210-__xmlview9--regoverviewTable-4"
                                                        data-sap-ui="__item210-__xmlview9--regoverviewTable-4"
                                                        tabindex="-1"
                                                        class="sapMLIB sapMLIB-CTX sapMLIBShowSeparator sapMLIBTypeInactive sapMLIBFocusable sapMListTblRow">
                                                        <td role="presentation" aria-hidden="true"
                                                            class="sapMListTblHighlightCell"></td>
                                                        <td id="__item210-__xmlview9--regoverviewTable-4_cell0"
                                                            data-sap-ui-column="__column122" headers="__column122"
                                                            class="sapMListTblCell" style="text-align: left;"><span
                                                                    id="__text231-__xmlview9--regoverviewTable-4"
                                                                    data-sap-ui="__text231-__xmlview9--regoverviewTable-4"
                                                                    class="sapMText sapUiSelectable sapMTextMaxWidth"
                                                                    style="text-align: left;">Excise Tax</span></td>
                                                        <td id="__item210-__xmlview9--regoverviewTable-4_cell1"
                                                            data-sap-ui-column="__column123" headers="__column123"
                                                            class="sapMListTblCell" style="text-align: left;">
                                                            <div id="__hbox113-__xmlview9--regoverviewTable-4"
                                                                 data-sap-ui="__hbox113-__xmlview9--regoverviewTable-4"
                                                                 class="sapMFlexBox sapMHBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsCenter sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent zStatusTD zTxtLeftAligned">
                                                                <div id="__data489"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                    <span id="__icon51-__xmlview9--regoverviewTable-4"
                                                                          data-sap-ui="__icon51-__xmlview9--regoverviewTable-4"
                                                                          role="presentation" aria-hidden="true"
                                                                          aria-label="circle-task-2"
                                                                          data-sap-ui-icon-content=""
                                                                          class="sapUiIcon sapUiIconMirrorInRTL"
                                                                          style="font-family: 'SAP\2dicons'; color: #5E696E;"></span>
                                                                </div>
                                                                <div id="__data490"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                    <span id="__label242-__xmlview9--regoverviewTable-4"
                                                                          data-sap-ui="__label242-__xmlview9--regoverviewTable-4"
                                                                          class="sapMLabel sapUiSelectable sapMLabelNoText"
                                                                          style="width: 0.5rem; text-align: left;"><span
                                                                                id="__label242-__xmlview9--regoverviewTable-4-text"
                                                                                class="sapMLabelTextWrapper"><bdi
                                                                                    id="__label242-__xmlview9--regoverviewTable-4-bdi"></bdi></span><span
                                                                                class="sapMLabelColonAndRequired"></span></span>
                                                                </div>
                                                                <div id="__data491"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                    <span id="__text232-__xmlview9--regoverviewTable-4"
                                                                          data-sap-ui="__text232-__xmlview9--regoverviewTable-4"
                                                                          class="sapMText sapUiSelectable sapMTextMaxWidth"
                                                                          style="text-align: left;">Not&nbsp;Registered</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td id="__item210-__xmlview9--regoverviewTable-4_cell2"
                                                            data-sap-ui-column="__column124" headers="__column124"
                                                            class="sapMListTblCell" style="text-align: left;"><span
                                                                    id="__text233-__xmlview9--regoverviewTable-4"
                                                                    data-sap-ui="__text233-__xmlview9--regoverviewTable-4"
                                                                    class="sapMText sapUiSelectable sapMTextBreakWord sapMTextMaxWidth"
                                                                    style="text-align: left;">-</span></td>
                                                        <td id="__item210-__xmlview9--regoverviewTable-4_cell3"
                                                            data-sap-ui-column="__column125" headers="__column125"
                                                            class="sapMListTblCell" style="text-align: left;"><span
                                                                    id="__text234-__xmlview9--regoverviewTable-4"
                                                                    data-sap-ui="__text234-__xmlview9--regoverviewTable-4"
                                                                    class="sapMText sapUiSelectable sapMTextBreakWord sapMTextMaxWidth"
                                                                    style="text-align: left;">-</span></td>
                                                        <td id="__item210-__xmlview9--regoverviewTable-4_cell4"
                                                            data-sap-ui-column="__column126" headers="__column126"
                                                            class="sapMListTblCell" style="text-align: left;"><span
                                                                    id="__text235-__xmlview9--regoverviewTable-4"
                                                                    data-sap-ui="__text235-__xmlview9--regoverviewTable-4"
                                                                    class="sapMText sapUiSelectable sapMTextBreakWord sapMTextMaxWidth"
                                                                    style="text-align: left;">-</span></td>
                                                        <td id="__item210-__xmlview9--regoverviewTable-4_cell7"
                                                            data-sap-ui-column="__column129" headers="__column129"
                                                            class="sapMListTblCell" style="text-align: left;"><span
                                                                    id="__xmlview9--regoverview_actionBtn-__xmlview9--regoverviewTable-4"
                                                                    data-sap-ui="__xmlview9--regoverview_actionBtn-__xmlview9--regoverviewTable-4"
                                                                    aria-labelledby="__text230" role="presentation"
                                                                    aria-hidden="true" data-sap-ui-icon-content=""
                                                                    title="More" tabindex="0"
                                                                    class="sapUiIcon sapUiIconMirrorInRTL sapUiIconPointer"
                                                                    style="font-family: 'SAP\2dicons';"></span></td>
                                                        <td role="presentation" aria-hidden="true"
                                                            class="sapMListTblNavCol"></td>
                                                        <td role="presentation" aria-hidden="true"
                                                            class="sapMListTblNavigatedCell"></td>
                                                    </tr>
                                                    <tr id="__item210-__xmlview9--regoverviewTable-5"
                                                        data-sap-ui="__item210-__xmlview9--regoverviewTable-5"
                                                        tabindex="-1"
                                                        class="sapMLIB sapMLIB-CTX sapMLIBShowSeparator sapMLIBTypeInactive sapMLIBFocusable sapMListTblRow">
                                                        <td role="presentation" aria-hidden="true"
                                                            class="sapMListTblHighlightCell"></td>
                                                        <td id="__item210-__xmlview9--regoverviewTable-5_cell0"
                                                            data-sap-ui-column="__column122" headers="__column122"
                                                            class="sapMListTblCell" style="text-align: left;"><span
                                                                    id="__text231-__xmlview9--regoverviewTable-5"
                                                                    data-sap-ui="__text231-__xmlview9--regoverviewTable-5"
                                                                    class="sapMText sapUiSelectable sapMTextMaxWidth"
                                                                    style="text-align: left;">Warehouse Keeper</span>
                                                        </td>
                                                        <td id="__item210-__xmlview9--regoverviewTable-5_cell1"
                                                            data-sap-ui-column="__column123" headers="__column123"
                                                            class="sapMListTblCell" style="text-align: left;">
                                                            <div id="__hbox113-__xmlview9--regoverviewTable-5"
                                                                 data-sap-ui="__hbox113-__xmlview9--regoverviewTable-5"
                                                                 class="sapMFlexBox sapMHBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsCenter sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent zStatusTD zTxtLeftAligned">
                                                                <div id="__data492"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                    <span id="__icon51-__xmlview9--regoverviewTable-5"
                                                                          data-sap-ui="__icon51-__xmlview9--regoverviewTable-5"
                                                                          role="presentation" aria-hidden="true"
                                                                          aria-label="circle-task-2"
                                                                          data-sap-ui-icon-content=""
                                                                          class="sapUiIcon sapUiIconMirrorInRTL"
                                                                          style="font-family: 'SAP\2dicons'; color: #5E696E;"></span>
                                                                </div>
                                                                <div id="__data493"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                    <span id="__label242-__xmlview9--regoverviewTable-5"
                                                                          data-sap-ui="__label242-__xmlview9--regoverviewTable-5"
                                                                          class="sapMLabel sapUiSelectable sapMLabelNoText"
                                                                          style="width: 0.5rem; text-align: left;"><span
                                                                                id="__label242-__xmlview9--regoverviewTable-5-text"
                                                                                class="sapMLabelTextWrapper"><bdi
                                                                                    id="__label242-__xmlview9--regoverviewTable-5-bdi"></bdi></span><span
                                                                                class="sapMLabelColonAndRequired"></span></span>
                                                                </div>
                                                                <div id="__data494"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                    <span id="__text232-__xmlview9--regoverviewTable-5"
                                                                          data-sap-ui="__text232-__xmlview9--regoverviewTable-5"
                                                                          class="sapMText sapUiSelectable sapMTextMaxWidth"
                                                                          style="text-align: left;">Not&nbsp;Registered</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td id="__item210-__xmlview9--regoverviewTable-5_cell2"
                                                            data-sap-ui-column="__column124" headers="__column124"
                                                            class="sapMListTblCell" style="text-align: left;"><span
                                                                    id="__text233-__xmlview9--regoverviewTable-5"
                                                                    data-sap-ui="__text233-__xmlview9--regoverviewTable-5"
                                                                    class="sapMText sapUiSelectable sapMTextBreakWord sapMTextMaxWidth"
                                                                    style="text-align: left;">-</span></td>
                                                        <td id="__item210-__xmlview9--regoverviewTable-5_cell3"
                                                            data-sap-ui-column="__column125" headers="__column125"
                                                            class="sapMListTblCell" style="text-align: left;"><span
                                                                    id="__text234-__xmlview9--regoverviewTable-5"
                                                                    data-sap-ui="__text234-__xmlview9--regoverviewTable-5"
                                                                    class="sapMText sapUiSelectable sapMTextBreakWord sapMTextMaxWidth"
                                                                    style="text-align: left;">-</span></td>
                                                        <td id="__item210-__xmlview9--regoverviewTable-5_cell4"
                                                            data-sap-ui-column="__column126" headers="__column126"
                                                            class="sapMListTblCell" style="text-align: left;"><span
                                                                    id="__text235-__xmlview9--regoverviewTable-5"
                                                                    data-sap-ui="__text235-__xmlview9--regoverviewTable-5"
                                                                    class="sapMText sapUiSelectable sapMTextBreakWord sapMTextMaxWidth"
                                                                    style="text-align: left;">-</span></td>
                                                        <td id="__item210-__xmlview9--regoverviewTable-5_cell7"
                                                            data-sap-ui-column="__column129" headers="__column129"
                                                            class="sapMListTblCell" style="text-align: left;"><span
                                                                    id="__xmlview9--regoverview_actionBtn-__xmlview9--regoverviewTable-5"
                                                                    data-sap-ui="__xmlview9--regoverview_actionBtn-__xmlview9--regoverviewTable-5"
                                                                    aria-labelledby="__text230" role="presentation"
                                                                    aria-hidden="true" data-sap-ui-icon-content=""
                                                                    title="More" tabindex="0"
                                                                    class="sapUiIcon sapUiIconMirrorInRTL sapUiIconPointer"
                                                                    style="font-family: 'SAP\2dicons';"></span></td>
                                                        <td role="presentation" aria-hidden="true"
                                                            class="sapMListTblNavCol"></td>
                                                        <td role="presentation" aria-hidden="true"
                                                            class="sapMListTblNavigatedCell"></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <div id="__xmlview9--regoverviewTable-after" tabindex="0"
                                                     class="sapMListDummyArea"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="__layout14" data-sap-ui="__layout14"
                                         class="sapUiBlockLayout sapUiBlockLayoutBackgroundDefault sapUiBlockLayoutSizeL">
                                        <div id="__row93" data-sap-ui="__row93"
                                             class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow sapUiBlockLayoutBackgroundColorSet1">
                                            <div style="display: flex;">
                                                <div id="__cell138" data-sap-ui="__cell138"
                                                     style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                                                     class="sapUiBlockLayoutCell sapUiBlockLayoutOddCell sapUiBlockHorizontalCell">
                                                    <div class="sapUiBlockCellContent"><span
                                                                id="sap-ui-invisible-__xmlview9--certificationTable_vbox"
                                                                data-sap-ui="sap-ui-invisible-__xmlview9--certificationTable_vbox"
                                                                aria-hidden="true"
                                                                class="sapUiHiddenPlaceholder"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="__layout15" data-sap-ui="__layout15"
                                         class="sapUiBlockLayout sapUiBlockLayoutBackgroundDefault sapUiBlockLayoutSizeL">
                                        <div id="__row94" data-sap-ui="__row94"
                                             class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow sapUiBlockLayoutBackgroundColorSet1">
                                            <div style="display: flex;">
                                                <div id="__cell139" data-sap-ui="__cell139"
                                                     style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                                                     class="sapUiBlockLayoutCell sapUiBlockLayoutOddCell sapUiBlockHorizontalCell">
                                                    <div class="sapUiBlockCellContent"><span
                                                                id="sap-ui-invisible-__xmlview9--PendingRequestTable_vbox"
                                                                data-sap-ui="sap-ui-invisible-__xmlview9--PendingRequestTable_vbox"
                                                                aria-hidden="true"
                                                                class="sapUiHiddenPlaceholder"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <span id="sap-ui-invisible-__xmlview9--tpdashboard_taxablepersonDetails"
                                          data-sap-ui="sap-ui-invisible-__xmlview9--tpdashboard_taxablepersonDetails"
                                          aria-hidden="true" class="sapUiHiddenPlaceholder"></span><span
                                            id="sap-ui-invisible-__xmlview9--tpdashboard_accaccess_bLayout"
                                            data-sap-ui="sap-ui-invisible-__xmlview9--tpdashboard_accaccess_bLayout"
                                            aria-hidden="true" class="sapUiHiddenPlaceholder"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <span id="sap-ui-invisible-__xmlview9--certificationTable_vbox2"
              data-sap-ui="sap-ui-invisible-__xmlview9--certificationTable_vbox2" aria-hidden="true"
              class="sapUiHiddenPlaceholder"></span><span id="sap-ui-invisible-__row118"
                                                          data-sap-ui="sap-ui-invisible-__row118" aria-hidden="true"
                                                          class="sapUiHiddenPlaceholder"></span>
        <div id="__row119" data-sap-ui="__row119"
             class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow sapUiBlockLayoutBackgroundColorSet3">
            <div style="display: flex;">
                <div id="__cell177" data-sap-ui="__cell177" style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                     class="sapUiBlockLayoutCell sapUiBlockLayoutOddCell sapUiBlockHorizontalCell">
                    <div class="sapUiBlockCellContent">
                        <div id="__xmlview9--homeScrollcontainer" data-sap-ui="__xmlview9--homeScrollcontainer"
                             class="sapMScrollContVH sapMScrollCont" style="width: 100%; height: 100%; overflow: auto;">
                            <div id="__xmlview9--homeScrollcontainer-scroll" class="sapMScrollContScroll">
                                <div id="__panel3-__xmlview9--homeScrollcontainer-0"
                                     data-sap-ui="__panel3-__xmlview9--homeScrollcontainer-0"
                                     data-sap-ui-fastnavgroup="true" role="form"
                                     class="sapMPanel sapMPanelExpandable zOverViewPanel zReportsPanel"
                                     style="width: 100%; height: auto;">
                                  
                                   
    
    </div></section>
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
