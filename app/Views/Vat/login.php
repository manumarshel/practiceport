<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Login - SB Admin</title>
    <link href="public/assets/vat/css/styles.css" rel="stylesheet"/>
    <link href="public/assets/vat/css/common.css" rel="stylesheet"/>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        .sapMPageHeader {
            padding: 10px;
        }

        .sapMPageHeader img {
            width: Auto !important;
            max-height: 3rem;
        }

        .sapMPageHeader {
            background-color: #fff;
        }

        .sapMPageSubHeader .sapMIBar-CTX .sapMBarRight > .sapMVBox > .sapMHBox:nth-child(2) {
            background: linear-gradient(-45deg, var(--white), var(--skyblue), var(--white), var(--skyblue));
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
        }

        .sapMPageSubHeader .sapMIBar-CTX .sapMBarRight > .sapMVBox > .sapMHBox:nth-child(2) {
            display: inline-block;
            height: auto;
            float: left;
            width: 100%;
            background: var(--white);
            border-top: 1px solid #ddd;
            box-shadow: 0px 5px 6px 0rem var(--inputborder);
            z-index: 1001;
        }
    </style>
</head>
<body class="bg-primary">
<div id="layoutAuthentication">
    <header class="sapMPageHeader">
        <div class="row">
            <div class="col-md-6"><img id="__image1"
                                       data-sap-ui="__image1"
                                       src="public/assets/vat/images/FTA_logo_new.png"
                                       role="presentation"
                                       aria-hidden="true" alt=""
                                       class="sapMImg sapMBarChild"></div>
            <div class="col-md-6"><img id="__image0"
                                       data-sap-ui="__image0"
                                       src="public/assets/vat/images/FTA_merged_logo1.png"
                                       role="presentation"
                                       aria-hidden="true" alt=""
                                       class="sapMImg sapMBarChild" style="float: right;"></div>
        </div>


    </header>
    <div id="__hbox4" style="background-color: #f5f6f8;" data-sap-ui="__hbox4"
         class="sapMFlexBox sapMHBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent sapMFlexItem">
        <div id="__data28" class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
             style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;"><span
                    id="__xmlview0--welcomeBox" data-sap-ui="__xmlview0--welcomeBox"
                    class="sapMText sapUiSelectable sapMTextMaxWidth zWelcomeText zDisplayNone"
                    style="text-align: left;">Are you an existing e-Services user?</span></div>
        <div id="__xmlview0--resetPasswordBox" data-sap-ui="__xmlview0--resetPasswordBox"
             class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent zMigratedUser sapMFlexItem">
            <div id="__hbox3" data-sap-ui="__hbox3"
                 class="sapMFlexBox sapMHBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent sapMFlexItem">
                <div id="__vbox1" data-sap-ui="__vbox1"
                     class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent sapMFlexItem">
                    <div id="__data29" class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                         style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                        <span id="__text2" data-sap-ui="__text2" class="sapMText sapUiSelectable sapMTextMaxWidth"
                              style="text-align: left;">Are you an existing e-Services user?</span></div>
                    <div id="__hbox2" data-sap-ui="__hbox2"
                         class="sapMFlexBox sapMHBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent sapMFlexItem">
                        <div id="__data30" class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                             style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                            <span id="__text3" data-sap-ui="__text3" class="sapMText sapUiSelectable sapMTextMaxWidth"
                                  style="text-align: left;">If you already have an account with the FTA you will need to reset your password before you can login to EmaraTax for the first time. If you have already successfully reset your password please login to EmaraTax with your new credentials.</span>
                        </div>
                        <div id="__data31" class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                             style="order: 0;color:#00679e !important;font-size:10px !important; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                            <a id="__link0" data-sap-ui="__link0" tabindex="0" href=""
                               class="sapMLnk sapMLnkMaxWidth sapUiTinyMarginBegin">Please reset your password here</a>
                        </div>
                    </div>
                </div>
                <div id="__data32" class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                    <img id="__image2" data-sap-ui="__image2"
                         src="https://eservices.tax.gov.ae/sap/public/bc/ui2/zmcf_fmca_public/user_management/img/resetPasswordIcon.png"
                         role="presentation" aria-hidden="true" alt="" class="sapMImg"></div>
            </div>
        </div>
        <div id="__data33" class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
             style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;"><span
                    id="__icon0" data-sap-ui="__icon0" role="presentation" aria-hidden="true"
                    aria-label="navigation-down-arrow" data-sap-ui-icon-content="" tabindex="0"
                    class="sapUiIcon sapUiIconMirrorInRTL sapUiIconPointer sapUiSmallMarginBegin"
                    style="font-family: 'SAP\2dicons';"></span></div>
    </div>
    <div id="layoutAuthentication_content">
        <main>
            <div class="container1">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <img src="public/assets/vat/images/11.png" class="img-responsive" style="width:100%;">
                    </div>
                    <div class="col-lg-4">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                            <div class="card-body">
                                <form name="form1" method="post" action="" id="form1" class="form-signin form-horizontal"  autocomplete="off">
                                    <div class="form-floating mb-3">
<!--                                        <input class="form-control" id="inputEmail" type="email"-->
<!--                                               placeholder="name@example.com"/>-->
                                        <input type="text" class="form-control" autocomplete="off" placeholder="Username" name="txtUserName"  id="txtUserName" maxlength="35" required="true" />
                                        <label for="inputEmail">Email address</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input id="txtPassword" name="txtPassword" placeholder="Enter Password" class="form-control" required="true" type="password" value="" maxlength="20" autocomplete="off"/>

                                       
                                        <label for="inputPassword">Password</label>
                                    </div>
                                     
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0" style="background-color:#ab8240;color:#fff;text-align:center;">
                                     <input type="submit" name="btnLogin" value="Login" id="btnLogin"
                                    class="btn btn-block">
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center py-3">
                                <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <img src="public/assets/vat/images/12.png" class="img-responsive" style="width:100%;">
                    </div>
                </div>
            </div>
        </main>
    </div>
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
                                                <div id="__hbox13" data-sap-ui="__hbox13"
                                                     class="sapMFlexBox sapMHBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent zFooterIcon sapMFlexItem">
                                                    <div id="__data76"
                                                         class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                         style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                        <img id="__image5" data-sap-ui="__image5"
                                                             src="https://eservices.tax.gov.ae/sap/public/bc/ui2/zmcf_fmca_public/user_management/img/UAE-02.png"
                                                             role="presentation" aria-hidden="true" alt=""
                                                             class="sapMImg"></div>
                                                    <div id="__data77"
                                                         class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                         style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                        <img id="__image6" data-sap-ui="__image6"
                                                             src="https://eservices.tax.gov.ae/sap/public/bc/ui2/zmcf_fmca_public/user_management/img/UAE-01.png"
                                                             role="presentation" aria-hidden="true" alt=""
                                                             class="sapMImg"></div>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
<script src="public/assets/vat/js/scripts.js"></script>
</body>
</html>
