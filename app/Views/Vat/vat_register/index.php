<?php include('step1.php'); ?>
<style>
  #real-file {
      display: none;
    }

    /* Styled label to look like a button */
    #custom-button {
      display: inline-block;
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
      border-radius: 5px;
      font-size: 16px;
    }

    #custom-button:hover {
      background-color: #45a049;
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
            <div class="sapFDynamicPageHeaderContent" style="display: flex;">
                <div class="col-md-12">
                    <div class="step-bar-wrapper1">
                        <svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;"
                             version="1.1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                                <filter id="inset-shadow" x="-50%" y="-50%" width="200%" height="200%">
                                    <feComponentTransfer in="SourceAlpha">
                                        <feFuncA type="table" tableValues="1 0"/>
                                    </feComponentTransfer>
                                    <feGaussianBlur stdDeviation="1.2"/>
                                    <feOffset dx="0" dy="0.5" result="offsetblur"/>
                                    <feFlood flood-color="rgba(0, 0, 0, 0.5)" result="color"/>
                                    <feComposite in2="offsetblur" operator="in"/>
                                    <feComposite in2="SourceAlpha" operator="in"/>
                                    <feMerge>
                                        <feMergeNode in="SourceGraphic"/>
                                        <feMergeNode/>
                                    </feMerge>
                                </filter>
                                <symbol id="icon-left" viewBox="0 0 61 32">
                                    <title>left</title>
                                    <path id="first" fill="#ececec"
                                          d="M59.992 13.423h-23.73c-2.481 0-4.708-1.527-5.726-3.817-2.608-5.726-8.652-9.543-15.459-8.843-7.316 0.763-13.233 6.871-13.678 14.251-0.573 8.907 6.489 16.223 15.268 16.223 6.235 0 11.579-3.69 13.932-9.034 1.018-2.29 3.372-3.69 5.853-3.69h23.539v-5.089z"></path>
                                </symbol>
                                <symbol id="icon-mid" viewBox="0 0 89 32">
                                    <title>mid</title>
                                    <path id="mid" fill="#ececec"
                                          d="M64.26 13.501c-2.531 0-4.803-1.558-5.842-3.895-2.272-4.868-6.945-8.373-12.592-8.957-0.065 0-0.065 0-0.13 0s-0.065 0-0.13 0c-0.325 0-0.584-0.065-0.909-0.065-0.195 0-0.389 0-0.519 0-0.195 0-0.389 0-0.519 0-0.325 0-0.584 0-0.909 0.065-0.065 0-0.065 0-0.13 0s-0.065 0-0.13 0c-5.582 0.584-10.32 4.089-12.527 9.022-1.039 2.337-3.31 3.895-5.842 3.895h-24.146v5.193h24.016c2.531 0 4.933 1.428 5.972 3.765 2.207 4.998 6.945 8.568 12.592 9.152 0 0 0.065 0 0.065 0 0.195 0 0.454 0.065 0.649 0.065 0.26 0 0.454 0 0.714 0 0.065 0 0.13 0 0.195 0 0 0 0 0 0.065 0 0 0 0 0 0.065 0s0.13 0 0.195 0c0.26 0 0.454 0 0.714 0 0.195 0 0.454 0 0.649-0.065 0 0 0.065 0 0.065 0 5.647-0.584 10.385-4.154 12.592-9.152 1.039-2.337 3.44-3.765 5.972-3.765h24.016v-5.193h-24.211z"></path>
                                </symbol>
                                <symbol id="icon-right" viewBox="0 0 61 32">
                                    <title>right</title>
                                    <path id="last" fill="#ececec"
                                          d="M1.4 13.423h23.666c2.481 0 4.708-1.527 5.726-3.817 2.608-5.726 8.652-9.543 15.459-8.843 7.38 0.763 13.233 6.871 13.678 14.251 0.573 8.907-6.489 16.223-15.268 16.223-6.235 0-11.579-3.69-13.932-9.034-1.018-2.29-3.372-3.69-5.853-3.69h-23.539v-5.089z"></path>
                                </symbol>
                            </defs>
                        </svg>

                        <ul class="step-wrapper">
                            <!-- <li class="completed"> -->
                            <li class="active">

                                <a>
                                    <svg class="icon icon-left">
                                        <use xlink:href="#icon-left"></use>
                                    </svg>
                                </a>
                                <span><a>Entity Details</a></span>
                            </li>
                            <li class="">

                                <a>
                                    <svg class="step step-mid">
                                        <use xlink:href="#icon-mid"></use>
                                    </svg>
                                </a>
                                <span><a>Identification Details</a></span>
                            </li>
                            <li class=""><a>
                                    <svg class="step step-mid">
                                        <use xlink:href="#icon-mid"></use>
                                    </svg>
                                </a>
                                <span><a>Eligibility Details</a></span>

                            </li>
                            <li class="">
                                <a>
                                    <svg class="step step-mid">
                                        <use xlink:href="#icon-mid"></use>
                                    </svg>
                                </a>
                                <span><a>Contact Details</a></span>
                            </li>
                            <li class="">

                                <a>
                                    <svg class="step step-mid">
                                        <use xlink:href="#icon-mid"></use>
                                    </svg>
                                </a>
                                <span><a>Bank Details</a></span>
                            </li>
                            <li class="">

                                <a>
                                    <svg class="step step-mid">
                                        <use xlink:href="#icon-mid"></use>
                                    </svg>
                                </a>
                                <span><a>Additional Details</a></span>
                            </li>
                            <li class="">

                                <a>
                                    <svg class="step step-right">
                                        <use xlink:href="#icon-right"></use>
                                    </svg>
                                </a>
                                <span><a>Review and Declaration</a></span>
                            </li>
                        </ul>
                        <br><br>
                        <div class="form-wrapper">
                            <form class="step-form active" id="step1">
                                <div class="row">
                                    <div class="content-div">
                                        <div class="sapFDynamicPageContent">
                                            <div>
                                                <div class="sapUiBlockLayout sapUiBlockLayoutSizeL">
                                                    <h2 style="padding-left:25px;"><strong>Entity Details </strong></h2>

                                                    <div class="row" style="padding:15px 15px 0px 15px;">
                                                        <div class="col">
                                                            <label>Entity
                                                                type <?php /* if (isset($_COOKIE['entity_type'])) echo $_COOKIE['entity_type']; */ ?></label>
                                                            <select class="sapMInputBaseInner sapMComboBoxInner"
                                                                    name="entity_type" id="entity_type">
                                                                <option value="Natural Person - Individual">Natural
                                                                    Person - Individual
                                                                </option>
                                                                <option value="Natural Person - Other">Natural Person -
                                                                    Other
                                                                </option>
                                                                <option value="Natural Person - Partnership/Heirs of Natural Person">
                                                                    Natural Person - Partnership/Heirs of Natural Person
                                                                </option>
                                                                <option value="Legal Person - Incorporated - Public Joint Stock Company">
                                                                    Legal Person - Incorporated - Public Joint Stock
                                                                    Company
                                                                </option>

                                                                <option value="Legal Person
                                                                                        -Incorporated UAE Private company">
                                                                    Legal Person
                                                                    -Incorporated UAE Private company
                                                                </option>

                                                                <option value="Partnerships - Domestic Incorporated Partnership">
                                                                    Partnerships - Domestic Incorporated Partnership
                                                                </option>
                                                                <option value="Partnership- Domestic Incorporate Partnership">
                                                                    Partnership- Domestic
                                                                    Incorporate Partnership
                                                                </option>
                                                                <option value=" Legal Person - Foreign Business - Not holding license or permit issued by a UAE licensing body">
                                                                    Legal Person - Foreign Business - Not holding
                                                                    license or permit issued by a UAE licensing body
                                                                </option>
                                                                <option value="Partnerships - Foreign Incorporated Partnership">
                                                                    Partnerships - Foreign Incorporated Partnership
                                                                </option>
                                                                <option value="Legal Person - Association">Legal Person
                                                                    - Association
                                                                </option>
                                                                L
                                                                <option value="Legal Person - Incorporated Trust">Legal
                                                                    Person - Incorporated Trust
                                                                </option>
                                                                <option value="Legal Person - Charity">Legal Person -
                                                                    Charity
                                                                </option>
                                                                <option value="Legal Person - Society Institution">Legal
                                                                    Person - Society Institution
                                                                </option>
                                                                <option value="Legal Person - Incorporated - Foundation (As Per Foundations Law)">
                                                                    Legal Person - Incorporated - Foundation (As Per
                                                                    Foundations Law)
                                                                </option>
                                                                <option value="Legal Person - Federal Government Entity">
                                                                    Legal Person - Federal Government Entity
                                                                </option>
                                                                <option value="Legal Person - Emirate Government Entity">
                                                                    Legal Person - Emirate Government Entity
                                                                </option>
                                                                <option value="Legal Person -Foreign business - Not holding license or permit issued by a UAE licensing body">
                                                                    Legal Person -Foreign
                                                                    business - Not holding license or
                                                                    permit issued by a UAE licensing
                                                                    body
                                                                </option>
                                                                <option value="Partnership- Foreign
                                                                                        Incorporate Partnership">
                                                                    Partnership- Foreign
                                                                    Incorporate Partnership
                                                                </option>
                                                                <option value="Partnership- Foreign
                                                                                        business - Holding trade licence or
                                                                                        permit issued by a UAE licensing
                                                                                        body">Partnership- Foreign
                                                                    business - Holding trade licence or
                                                                    permit issued by a UAE licensing
                                                                    body
                                                                </option>
                                                                <option value="Legal Person - Club">Legal Person - Club
                                                                </option>
                                                                <option value="Legal Person - Other">Legal Person -
                                                                    Other
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="col">
                                                            <label>Description (others)</label>
                                                            <input placeholder=" " class="required-field"
                                                                   data-label="Description" type="text"
                                                                   style="width: 92%;" name="entity_desc"
                                                                   id="entity_desc">
                                                        </div>
                                                    </div>
                                                    <div class="row" style="padding:15px 15px 0px 15px;">
                                                        <div class="col">
                                                            <label>First Name in English</label>
                                                            <input placeholder=" " data-label="Name in English"
                                                                   type="text" style="width: 92%;" name="eng_fname"
                                                                   id="eng_fname" required>
                                                        </div>
                                                        <div class="col">
                                                            <label>Last Name in English</label>
                                                            <input placeholder=" " type="text" style="width: 92%;"
                                                                   name="eng_lname" id="eng_lname">
                                                        </div>
                                                    </div>
                                                    <div class="row" style="padding:15px 15px 0px 15px;">
                                                        <div class="col">
                                                            <label>First Name in Arabic</label>
                                                            <input placeholder=" " type="text" style="width: 92%;"
                                                                   name="ar_fname" id="ar_fname">
                                                        </div>
                                                        <div class="col">
                                                            <label>Last Name in Arabic</label>
                                                            <input placeholder=" " type="text" style="width: 92%;"
                                                                   name="ar_lname" id="ar_lname">
                                                        </div>
                                                    </div>
                                                    <?php
                                                    $today = date('m/d/y');
                                                    ?>
                                                    <div class="row" style="padding:15px 15px 0px 15px;">
                                                        <div class="col">
                                                            <label>Date Of Birth</label><br>
                                                            <input placeholder=" " class="my-datepicker" type="date"
                                                                   style="width: 92%; height:30px;" name="entity_dob"
                                                                   id="entity_dob">
                                                        </div>
                                                        <div class="col">
                                                        </div>

                                                    </div>

                                                    <div class="col-md-12"
                                                         style="    margin: 15px;    background-color: #e2e4ec; padding: 15px;    width: 95%;">
                                                        <div style="padding-left:15px;" class="col-md-6">
                                                            <p>Are you a Resident of UAE?</p>
                                                            <label>
                                                                <input type="radio" name="uae_resident"
                                                                       id="uae_resident" value="Yes"
                                                                       onclick="toggleDivs('A')" checked>Yes</label>
                                                            <label><input type="radio" name="uae_resident"
                                                                          id="uae_resident" value="No"
                                                                          onclick="toggleDivs('B')">No</label>

                                                        </div>
                                                    </div>
                                                    <div id="res_yes" style="display: block; ">
                                                        <div class="row" style="padding:15px 15px 0px 15px;">
                                                            <div class="col">
                                                                <label>Emirates ID Number</label>
                                                                <input placeholder=" " data-label="Emirates ID Number"
                                                                       class="required-field" type="text"
                                                                       style="width: 92%;" name="em_id" id="em_id">
                                                            </div>
                                                            <div class="col">
                                                                <p style="margon:0px;">Upload copy of your Emirates
                                                                    ID</p>
                                                                <label for="file-upload-1" class="file-label">Upload
                                                                    File</label>
                                                                <input type="file" id="file-upload-1"
                                                                       onchange="displayFileName(this, 'file-name-1')">
                                                                <span id="file-name-1"
                                                                      class="file-name">No file chosen</span>
                                                            </div>
                                                        </div>
                                                        <div class="row" style="padding:15px 15px 0px 15px;">
                                                            <div class="col">
                                                                <label>Emirates ID Expiry Date</label>
                                                                <input placeholder=" " class="required-field"
                                                                       data-label="Emirates ID Expiry Date" type="date"
                                                                       style="width: 92%;height:30px;" name="em_id_exp"
                                                                       id="em_id_exp">
                                                            </div>
                                                            <div class="col">
                                                                <label>Country of Nationality</label>
                                                                <select class="sapMInputBaseInner sapMComboBoxInner"
                                                                        style="width: 92%;height:30px;"
                                                                        name="nationality_country" id="nationality_country">
                                                                    <option value="India">India</option>
                                                                    <option value="Uae">Uae</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="row" style="padding:15px 15px 0px 15px;">-->
                                                        <!--   <div class="col">-->
                                                        <!--       <label>Emirates ID Number</label>-->
                                                        <!--        <input placeholder=" " type="text" style="width: 92%;" name="em_id" id="em_id" >-->
                                                        <!--   </div>-->
                                                        <!--   <div class="col">-->

                                                        <!--   </div>-->
                                                        <!--</div>-->

                                                    </div>
                                                    <div id="res_no" style="display: block;  ">
                                                        <div class="row" style="padding:15px 15px 0px 15px;">
                                                            <div class="col">
                                                                <label>Date of first supply in the UAE</label>
                                                                <input placeholder=" " type="date"
                                                                       style="width: 92%;height:30px;" name="s_date"
                                                                       id="s_date">
                                                            </div>
                                                            <div class="col">
                                                                <label>Country of Nationality</label>
                                                                <select class="sapMInputBaseInner sapMComboBoxInner"
                                                                        style="width: 92%;"
                                                                        name="nationality" id="nationality">
                                                                    <option value="India">India</option>
                                                                    <option value="Uae">Uae</option>
                                                                </select>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="row" style="padding:15px 15px 0px 15px;">
                                                        <div class="col">
                                                            <label>Passport Issuing Country</label>
                                                            <select class="sapMInputBaseInner sapMComboBoxInner"
                                                                    style="width: 92%;height:30px;"
                                                                    name="pass_country" id="pass_country">
                                                                <option value="India">India</option>
                                                                <option value="Uae">Uae</option>
                                                            </select>
                                                        </div>
                                                        <div class="col">
                                                            <p>Upload copy of Passport</p>
                                                            <div class="file-upload-container">
                                                                <label for="file-upload-2" class="file-label">Upload
                                                                    File</label>
                                                                <input type="file" id="file-upload-2"
                                                                       onchange="displayFileName(this, 'file-name-2')">
                                                                <span id="file-name-2"
                                                                      class="file-name">No file chosen</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row" style="padding:15px 15px 0px 15px;">
                                                        <div class="col">
                                                            <label>Passport No</label>
                                                            <input placeholder="" type="text"
                                                                   style="width: 92%;height:30px;" name="pass_no"
                                                                   id="pass_no">
                                                        </div>
                                                        <div class="col">
                                                            <label>Passport Expiry Date</label>
                                                            <input placeholder=" " class="required-field"
                                                                   data-label="Passport Expiry Date" type="date"
                                                                   style="width: 92%; height:30px;" name="pass_exp_date"
                                                                   id="pass_exp_date">
                                                        </div>
                                                    </div>


                                                    <div class="col-md-12" style="padding-top:15px;">
                                                        <div style="padding-left:15px;    float: left;"
                                                             class="col-md-6">
                                                            <p style="margin-bottom:2px;">Upload Certificate of
                                                                Incorporation</p>
                                                            <div class="file-upload-container">
                                                                <label for="incorporation_cert" class="file-label">Upload
                                                                    File</label>
                                                                <input type="file" id="incorporation_cert"
                                                                       onchange="displayFileName(this, 'incorporation_cert-cont')">
                                                                <span id="incorporation_cert-cont" class="file-name">No file chosen</span>
                                                            </div>

                                                        </div>

                                                    </div>


                                                    <div class="sapUiBlockCellContent">
                                                        <div class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                             style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                        </div>

                                                    </div>
                                                    <div class="sapMFlexBox sapMHBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent sapMFlexItem">
                                                        <div class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                             style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">

                                                        </div>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <form class="step-form" id="step2" style="display: none;">

                                <div class="content-div">
                                    <div class="sapFDynamicPageContent" style="border: 1px solid #676363;">
                                        <div class="sapUiBlockLayout sapUiBlockLayoutSizeL" style="margin-bottom:35px;">
                                            <h5>Identification details</h5>

                                            <div class="sapUiBlockLayoutCell zRadioBtnCell zVTopAlign sapUiBlockLayoutOddCell sapUiBlockHorizontalCell">
                                                <div class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent">
                                                    <div class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem">
                                                        Do you have a Trade License in the UAE?
                                                    </div>
                                                    <div class="sapMFlexBox sapMHBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent sapMFlexItem">
                                                        <div style="padding: 15px;">
                                                            <input type="radio" name="edoc" id="edoc"
                                                                   onclick="toggleDivEdoc('A')" checked>Yes
                                                        </div>
                                                        <div style="padding: 15px;">
                                                            <input type="radio" name="edoc" id="edoc"
                                                                   onclick="toggleDivEdoc('B')">No
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div id="edoc_yes">
                                                <div class="row">
                                                    <div class="col">
                                                        <label>Trade License Issuing Authority</label>
                                                        <select name="tl_issue_authority" id="tl_issue_authority"
                                                                class="form-control required-field">
                                                            <option value="Dubai Academic City">Dubai Academic City
                                                            </option>
                                                            <option value="Sharjah Economic Development Department">
                                                                Sharjah
                                                                Economic Development Department
                                                            </option>
                                                            <option value="Dubai Airport free zone">Dubai Airport free
                                                                zone
                                                            </option>
                                                            <option value="Dubai Aviation City Corporation City">Dubai
                                                                Aviation City Corporation City
                                                            </option>
                                                            <option value="Dubai Healthcare City">Dubai Healthcare City
                                                            </option>
                                                            <option value="Dubai Industrial Park">Dubai Industrial Park
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="col">
                                                        <label>Trade License Number</label>
                                                        <input type="text" class="form-control required-field"
                                                               name="t_l_name" data-label="Trade License Numbere"
                                                               id="t_l_name">
                                                    </div>

                                                </div>
                                                <div class="row" style="padding-top:15px;">
                                                    <div class="col">
                                                        <label>License Issue Date</label>
                                                        <input type="date" class="form-control required-field"
                                                               name="l_i_date" data-label="License Issue Date"
                                                               id="l_i_date">
                                                    </div>
                                                    <div class="col">
                                                        <label>License Expiry Date</label>
                                                        <input type="date" class="form-control required-field"
                                                               name="l_e_date" data-label="License Expiry Date"
                                                               id="l_e_date">
                                                    </div>
                                                </div>

                                                <div class="row" style="padding-top:15px;">
                                                    <div class="col">
                                                        <label>Trade Name in English (optional)</label>
                                                        <input type="text" class="form-control" name="tn_name_en"
                                                               id="tn_name_en">
                                                    </div>
                                                    <div class="col">
                                                        <label>Trade Name in Arabic (optional)</label>
                                                        <input type="text" class="form-control" name="tn_name_ar"
                                                               id="tn_name_ar">
                                                    </div>
                                                </div>
                                                <div class="row" style="padding-top:15px;">
                                                    <label>Upload copy of Trade license</label>
                                                    <div class="file-upload-container"
                                                         style="    margin-left: -15px;padding-top:10px;">
                                                        <label for="tl_file" class="upload-button  col-md-3">Upload
                                                            File</label>
                                                        <input type="file" id="tl_file"
                                                               onchange="displayFileName(this, 'tl_file-cont')"
                                                               class="required-field" data-label="Upload Trade license">
                                                        <span id="tl_file-cont" class="file-name">No file chosen</span>
                                                    </div>


                                                </div>
                                                <br>
                                                <hr>
                                                <h5>Business Activity Details</h5><br>
                                                <div class="row">
                                                    <div class="col-md-12" style="float:right">
                                                        <span id="myBtn" class="col-md-12"
                                                              style="text-align:right;float:right;">+ Add Business Details</span>

                                                    </div>
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                        <tr class="table-active">

                                                            <th scope="col">Industry</th>
                                                            <th scope="col">Main Group</th>
                                                            <th scope="col">Subgroup</th>
                                                            <th scope="col">Business Activities</th>
                                                            <th scope="col">Activity Code</th>

                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr id="modal-tbl">

                                                        </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <br>
                                            </div>
                                            <div id="edoc_no" style="display:none;">

                                                <div class="col">
                                                    <label>Commencement Date</label>
                                                    <input type="date" class="form-control" name="commencement_date"
                                                           id="commencement_date">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div id="myModal" class="modal">

                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Business Activities</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="autocomplete col-md-12">
                                                <select name="activitybusiness" id="activitybusiness"
                                                        class="form-control">
                                                    <?php foreach ($activities as $a) { ?>
                                                        <option value="<?php echo $a['PKVatActivityID']; ?>"><?php echo $a['subActivity']; ?></option>
                                                    <?php } ?>

                                                </select>
                                            </div>
                                            <br>
                                            <div id="actDiv" style="padding:20px;">
                                                <div class="form-row" style="display: flex;">
                                                    <div class="col-md-6" style="padding: 5px;">
                                                        <label>Industry</label>
                                                        <input type=text name="b_industry" id="b_industry" value=""
                                                               class="form-control">
                                                    </div>
                                                    <div class="col-md-6" style="padding: 5px;">
                                                        <label>main corp</label>

                                                        <input type=text name="main_corp" id="main_corp" value=""
                                                               class="form-control">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-row" style="display: flex;">
                                                    <div class="col-md-6" style="padding: 5px;">
                                                        <label>Sub-Group</label>

                                                        <input type=text name="sub_group" id="sub_group" value=""
                                                               class="form-control">
                                                    </div>
                                                    <div class="col-md-6" style="padding: 5px;">
                                                        <label>Activity</label>

                                                        <input type=text name="b_activity" id="b_activity" value=""
                                                               class="form-control">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-row" style="display: flex;">
                                                    <div class="col-md-6" style="padding: 5px;">
                                                        <label>Sub Activity</label>
                                                        <input type=text name="sub_act" id="sub_act" value=""
                                                               class="form-control">
                                                    </div>
                                                    <div class="col-md-6" style="padding: 5px;">
                                                        <label>Activity Code</label>
                                                        <input type=text name="act_code" id="act_code" value=""
                                                               class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" onclick="saveBusiness();"
                                                        style="background-color:#aa8140;color:#fff;">Add
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </form>
                            <form class="step-form" id="step3" style="display: none;">
                                <div class="col-md-12">
                                    <div id="__layout37" data-sap-ui="__layout37"
                                         class="sapUiBlockLayout sapUiBlockLayoutSizeL">
                                        <div id="pg_GoTop" data-sap-ui="pg_GoTop"
                                             class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow sapUiBlockLayoutBackgroundColorSet1">

                                        </div>

                                        <div id="__row278" data-sap-ui="__row278"
                                             class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow zInformationRow sapUiBlockLayoutBackgroundColorSet4">
                                            <div style="display: flex;">
                                                <div id="__cell418" data-sap-ui="__cell418"
                                                     style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                                                     class="sapUiBlockLayoutCell sapUiBlockLayoutOddCell sapUiBlockHorizontalCell">
                                                    <div class="sapUiBlockCellContent">
                                                        <div id="__vbox358" data-sap-ui="__vbox358"
                                                             class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent">
                                                            <p>Please ensure upload scanned copy of the following
                                                                documents to avoid resubmitting
                                                                your application:</p>
                                                            <p>1. Declaration of the monthly turnover sales:</p>
                                                            <div id="__data1133"
                                                                 class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                 style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                <ul>
                                                                    <li>If the entity is established prior to 2017, the
                                                                        declaration should include
                                                                        monthly turnover from Jan 2017 to the date of
                                                                        the submission.
                                                                    </li>
                                                                    <li>If the entity is established after 2017, the
                                                                        declaration should include
                                                                        monthly turnover from the date of establishment
                                                                        to the date of submission
                                                                    </li>
                                                                    <li>You may use declaration letter template in the
                                                                        following link
                                                                        (https://tax.gov.ae/-/media/Files/EN/Word/Turnover-Declaration-Letter.docx)
                                                                    </li>
                                                                    <li>The letter shall be stamped and signed by the
                                                                        Authorized Signatory.
                                                                    </li>
                                                                </ul>

                                                            </div>
                                                            <p>2. Invoices:</p>
                                                            <ul>
                                                                <li>
                                                                    Invoices shall be stamped and signed by the
                                                                    Authorized Signatory
                                                                </li>
                                                            </ul>
                                                            <p>3. Purchase Orders</p>

                                                            <ul>
                                                                <li> Purchase Order (PO) shall be stamped and signed by
                                                                    Authorized Signatory of both
                                                                    the supplier and the buyer.
                                                                </li>
                                                                <li> The PO shall include payment terms or delivery date
                                                                    within the next 30 days.
                                                                </li>
                                                            </ul>
                                                            <p>4. Any other supporting financial documents such as
                                                                contracts, title deeds, tenancy
                                                                contracts, etc.)</p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow zInformationRow sapUiBlockLayoutBackgroundColorSet4">
                                            <div style=" ">

                                                <p>Please download the template and then upload it after filling taxable
                                                    supplies details as
                                                    mentioned in the template</p>

                                                <a style="float:left;" id="_VTEC_T_SUP_MO_downloadLink"
                                                   data-sap-ui="_VTEC_T_SUP_MO_downloadLink"
                                                   tabindex="0"
                                                   href="<?= base_url('public/assets/vat/Taxable%20Supplies.xlsx') ?>"
                                                   class="sapMLnk sapMLnkMaxWidth sapUiTinyMarginBeginEnd">
                                                    <p style="color:green;font-size:14px;">Download Template</p></a>
                                                <span style="display: inline-block;"><p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Taxable Supplies.xlsx   last updated 23.01.2021</p></span>

                                                <div class="file-upload-container" style="float:right;">
                                                    <label for="tax_supply" class="file-label"
                                                           style="background-color:#1e3a56;">Upload Filled
                                                        Template</label>
                                                    <input type="file" id="tax_supply" class="required-field"
                                                           data-label="Upload Taxable Supplies"
                                                           onchange="displayFileName(this, 'tax_supply')">
                                                    <!--<span id="tax_supply" class="file-name">No file chosen</span>-->
                                                </div>


                                            </div>
                                        </div>

                                        <div id="A_03_SUP_AMT" data-sap-ui="A_03_SUP_AMT"
                                             class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow sapUiTinyMarginTop zDownloadTemplateRow sapUiBlockLayoutBackgroundColorSet1">
                                            <div style="display: flex;">
                                                <div id="__cell419" data-sap-ui="__cell419"
                                                     style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                                                     class="sapUiBlockLayoutCell sapUiBlockLayoutOddCell sapUiBlockHorizontalCell">
                                                    <div class="sapUiBlockCellContent">


                                                        <p>Taxable Supplies</p>
                                                        <div class="row" style="padding:15px;">
                                                            <table class="table " id="dataTable">
                                                                <thead style="background-color:#d9d9d9;">
                                                                <tr>
                                                                    <th>Month</th>
                                                                    <th>Amount(AED)</th>
                                                                    <th>Cumulative(AED)</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td colspan="3" style="text-align:center;">No Data
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div id="__row692" data-sap-ui="__row692"
                                                             lass="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow sapUiBlockLayoutBackgroundColorSet3">
                                                            <div style="display: flex;">

                                                                <div class="col" style="padding-right:15px;">
                                                                    <label>Taxable Supplies in any past period of 12
                                                                        months or less (AED).</label>
                                                                    <input type="text" class="form-control"
                                                                           name="supply_amount" readonly
                                                                           id="supply_amount">
                                                                </div>
                                                                <div class="col" style="padding-left:10px;">
                                                                    <label>Taxable Supplies - Next 30 days.</label>
                                                                    <input type="text" class="form-control"
                                                                           name="exp_supply_amount"
                                                                           id="exp_supply_amount">
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow zInformationRow sapUiBlockLayoutBackgroundColorSet4">
                                            <div style=" ">

                                                <p>Please download the template and then upload it after filling taxable
                                                    expenses details as
                                                    mentioned in the template</p>

                                                <a style="float:left;" id="_VTEC_T_SUP_MO_downloadLink"
                                                   data-sap-ui="_VTEC_T_SUP_MO_downloadLink"
                                                   tabindex="0"
                                                   href="<?= base_url('public/assets/vat/Taxable%20Expenses.xlsx') ?>"
                                                   class="sapMLnk sapMLnkMaxWidth sapUiTinyMarginBeginEnd">
                                                    <p style="color:green;font-size:14px;">Download Template</p></a>
                                                <span style="display: inline-block;"><p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Taxable Expenses.xlsx last updated 23.01.2021</p></span>

                                                <div class="file-upload-container" style="float:right;">
                                                    <label for="tax_exp" class="file-label"
                                                           style="background-color:#1e3a56;">Upload Filled
                                                        Template</label>
                                                    <input type="file" id="tax_exp"
                                                           onchange="displayFileName(this, 'tax_exp')">
                                                    <!--<span id="tax_supply" class="file-name">No file chosen</span>-->
                                                </div>


                                            </div>
                                        </div>

                                        <div class="row" style="padding:25px;">
                                            <h2>Taxable Expenses</h2>
                                            <div class="row" style="padding:15px;">
                                                <table class="table " id="dataTable_exp">
                                                    <thead style="background-color:#d9d9d9;">
                                                    <tr>
                                                        <th>Month</th>
                                                        <th>Amount(AED)</th>
                                                        <th>Cumulative(AED)</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td colspan="3" style="text-align:center;">No Data</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row" style="padding:20px;">
                                            <div id="__row692" data-sap-ui="__row692"
                                                 lass="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow sapUiBlockLayoutBackgroundColorSet3">
                                                <div style="display: flex;">

                                                    <div class="col" style="padding-right:15px;">
                                                        <label>Taxable Expenses in any past period of 12 months or less
                                                            (AED).</label>
                                                        <input type="text" class="form-control" name="exp_emt" readonly
                                                               id="exp_emt">
                                                    </div>
                                                    <div class="col" style="padding-left:10px;">
                                                        <label>Taxable expenses for next 30 days (AED)</label>
                                                        <input type="text" class="form-control" name="exp_emt_exp"
                                                               id="exp_emt_exp">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">

                                            <div style="">

                                                <div class="col col-md-6" style="padding-right:15px;">
                                                    <div style="padding-left:15px;    float: left;">
                                                        <p>Upload scanned copies of documentary proof - pdf version of
                                                            the uploaded excel template
                                                            with signature and seal of the Authorized signatory</p>

                                                        <label for="file-upload-4" class="file-label">Upload
                                                            File</label>
                                                        <input type="file" id="file-upload-4"
                                                               onchange="displayFileName(this, 'file-name-4')">
                                                        <span id="file-name-4" class="file-name">No file chosen</span>
                                                    </div>
                                                </div>
                                                <div class="col col-md-6" style="padding-left:10px;float:right;">
                                                    <div style="padding-left:15px;    float: left;">
                                                        <p>Upload scanned copies of documentary proof - Purchase orders,
                                                            contracts.<br> &nbsp;</p>
                                                        <label for="file-upload-5" class="file-label">Upload
                                                            File</label>
                                                        <input type="file" id="file-upload-5"
                                                               onchange="displayFileName(this, 'file-name-5')">
                                                        <span id="file-name-5" class="file-name">No file chosen</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">

                                            <div style="display: flex;">

                                                <div class="col" style="padding-right:15px;">
                                                    <div style="padding-left:15px;    float: left;">
                                                        <p>Upload scanned copies of documentary proof - Sample expenses
                                                            invoices</p>

                                                        <label for="file-upload-6" class="file-label">Upload
                                                            File</label>
                                                        <input type="file" id="file-upload-6"
                                                               onchange="displayFileName(this, 'file-name-6')">
                                                        <span id="file-name-6" class="file-name">No file chosen</span>
                                                    </div>
                                                </div>
                                                <div class="col" style="padding-left:10px;">
                                                    <div style="padding-left:15px;    float: left;">
                                                        <p>Upload scanned copies of documentary proof - Sample sales
                                                            invoices</p>
                                                        <label for="file-upload-7" class="file-label">Upload
                                                            File</label>
                                                        <input type="file" id="file-upload-7"
                                                               onchange="displayFileName(this, 'file-name-7')">
                                                        <span id="file-name-7" class="file-name">No file chosen</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow zInformationRow sapUiBlockLayoutBackgroundColorSet4"
                                             style="padding-top:30px;">
                                            <div style=" ">

                                                <p>VAT Registration : <span style="color:red;"> Voluntary</span></p>
                                                <p>Criteria</p>
                                                <p>Voluntary registration: You will be eligible to register for VAT
                                                    if:</p>
                                                <p>1. Either your taxable supplies or expenses (which will be subject to
                                                    VAT) were more than
                                                    AED187,500 in the last 12 months; or</p>
                                                <p>2.xzYou expect that either your taxable supplies or expenses (which
                                                    will be subject to VAT) will
                                                    be more than AED187,500 in the next 30 days.</p>

                                            </div>
                                        </div>

                                        <div class="row" style="padding:20px;">
                                            <div id="__row692" data-sap-ui="__row692"
                                                 lass="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow sapUiBlockLayoutBackgroundColorSet3">
                                                <div style="display: flex;">

                                                    <div class="col" style="padding-right:15px;height:20px;">
                                                        <label>Date on which the threshold limit for the taxable
                                                            supplies has exceeded/expected to
                                                            be exceeded</label>
                                                        <input type="date" class="form-control" name="tax_date_ex"
                                                               id="tax_date_ex">
                                                    </div>
                                                    <div class="col" style="padding-left:10px;">
                                                        <label>Reason for change in Obligation Date <br> &nbsp;</label>
                                                        <input type="text" class="form-control" name="obreason"
                                                               id="obreason">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="padding:20px;">
                                            <div id="__row692" data-sap-ui="__row692"
                                                 lass="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow sapUiBlockLayoutBackgroundColorSet3">
                                                <div style="display: flex;">

                                                    <div class="col" style="padding-right:15px;height:20px;">
                                                        <label>On what date would you like to be registered (prior to
                                                            the standard effective date as
                                                            per the law)</label>
                                                        <input type="date" class="form-control"
                                                               name="tax_datreg_datee_ex"
                                                               id="tax_datreg_datee_ex">
                                                    </div>
                                                    <div class="col" style="padding-left:10px;">
                                                        <label>Reason for change in Effective date</label>
                                                        <input type="text" class="form-control" name="effe_reason"
                                                               id="effe_reason">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div id="__row700" data-sap-ui="__row700"
                                             class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow zBlockLayoutRow sapUiBlockLayoutBackgroundColorSet4">
                                            <div style="display: flex;">

                                            </div>

                                            <div id="__row702" data-sap-ui="__row702"
                                                 class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow zBlockLayoutRow sapUiBlockLayoutBackgroundColorSet2">

                                                <div id="__row708" data-sap-ui="__row708"
                                                     class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow sapUiBlockLayoutBackgroundColorSet4">
                                                    <div style="display: flex;">
                                                        <div class="col-md-6" style="margin: 0px 0px 0px 20px;
    padding-right: 30px;">
                                                            <div class="sapUiBlockLayoutCell zRadioBtnCell zVTopAlign sapUiBlockLayoutOddCell sapUiBlockHorizontalCell">
                                                                <div class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent">
                                                                    <div class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem">
                                                                        Do you expect the VAT on your expenses to
                                                                        regularly exceed the VAT in your taxable
                                                                        supplies?

                                                                    </div>
                                                                    <div class="sapMFlexBox sapMHBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent sapMFlexItem">
                                                                        <div style="padding: 15px;">
                                                                            <input type="radio" name="tax_supplies"
                                                                                   checked>Yes
                                                                        </div>
                                                                        <div style="padding: 15px;">
                                                                            <input type="radio" name="tax_supplies">No
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="sapUiBlockLayoutCell zRadioBtnCell zVTopAlign sapUiBlockLayoutOddCell sapUiBlockHorizontalCell">
                                                                <div class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent">
                                                                    <div class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem">
                                                                        Do you expect to make exempt supplies?
                                                                    </div>
                                                                    <div class="sapMFlexBox sapMHBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent sapMFlexItem">
                                                                        <div style="padding: 15px;">
                                                                            <input type="radio" name="exem_supplies"
                                                                                   checked>Yes
                                                                        </div>
                                                                        <div style="padding: 15px;">
                                                                            <input type="radio" name="exem_supplies">No
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="__row710" data-sap-ui="__row710"
                                                     class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow sapUiBlockLayoutBackgroundColorSet2">
                                                    <div style="display: flex;">
                                                        <div id="A_03_VAT_EXCECPTION_RDB"
                                                             data-sap-ui="A_03_VAT_EXCECPTION_RDB"
                                                             style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                                                             class="sapUiBlockLayoutCell zRadioBtnCell sapUiBlockLayoutOddCell sapUiBlockHorizontalCell">
                                                            <div class="sapUiBlockCellContent">
                                                                <div class="sapUiBlockLayoutCell zRadioBtnCell zVTopAlign sapUiBlockLayoutOddCell sapUiBlockHorizontalCell">
                                                                    <div class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent">
                                                                        <div class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem">
                                                                            Do you wish to apply for Exception from VAT?
                                                                        </div>
                                                                        <div class="sapMFlexBox sapMHBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent sapMFlexItem">
                                                                            <div style="padding: 15px;">
                                                                                <input type="radio"
                                                                                       name="expense_excced_status"
                                                                                       id="expect_exempt_status_yes"
                                                                                       onclick="toggleDivException('A')"
                                                                                       checked>Yes
                                                                            </div>
                                                                            <div style="padding: 15px;">
                                                                                <input type="radio"
                                                                                       name="expense_excced_status"
                                                                                       id="expect_exempt_status_no"
                                                                                       onclick="toggleDivException('B')">No
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row" style="padding:20px;" id="exp_vat">
                                                    <div id="__row692" data-sap-ui="__row692"
                                                         lass="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow sapUiBlockLayoutBackgroundColorSet3">
                                                        <div style="display: flex;">

                                                            <div class="col" style="padding-right:15px;height:20px;">
                                                                <p>Upload copy of your detailed Business Flow Chart(To
                                                                    Be Signed And Stamped By Authorized Signatory)</p>

                                                                <label for="file-upload-10" class="file-label">Upload
                                                                    File</label>
                                                                <input type="file" id="file-upload-10"
                                                                       onchange="displayFileName(this, 'file-name-10')">
                                                                <span id="file-name-10"
                                                                      class="file-name">No file chosen</span>
                                                            </div>
                                                            <div class="col" style="padding-left:10px;">
                                                                <p class="para-label">Upload copy of your Sample
                                                                    invoices<br> &nbsp;</p>

                                                                <label for="file-upload-11" class="file-label">Upload
                                                                    File</label>
                                                                <input type="file" id="file-upload-11"
                                                                       onchange="displayFileName(this, 'file-name-11')">
                                                                <span id="file-name-11"
                                                                      class="file-name">No file chosen</span>
                                                            </div>

                                                        </div>
                                                        <div style=" padding-bottom:40px;">

                                                            <div class="col" style="padding-right:15px;height:20px;">
                                                                <p class="para-label">Upload copy of Declaration letter
                                                                    that the company has no standard Rated Supplies (To
                                                                    Be Signed And Stamped By Authorized Signatory)</p>

                                                                <label for="file-upload-12" class="file-label">Upload
                                                                    File</label>
                                                                <input type="file" id="file-upload-12"
                                                                       onchange="displayFileName(this, 'file-name-12')">
                                                                <span id="file-name-12"
                                                                      class="file-name">No file chosen</span>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>


                                            </div>


                                        </div>


                                    </div>


                                </div>
                            </form>
                            <form class="step-form" id="step4" style="display: none;">


                                <div id="INST_WizardContent_Page-contentFitContainer" class="">
                                    <div id="_ADDR_BlockLayOut" data-sap-ui="_ADDR_BlockLayOut"
                                         class="sapUiBlockLayout sapUiBlockLayoutSizeL" style="padding-bottom:20px;">
                                        <div id="pg_GoTop" data-sap-ui="pg_GoTop"
                                             class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow sapUiBlockLayoutBackgroundColorSet1">

                                            <div style="display: flex;">
                                                <div id="__cell852" data-sap-ui="__cell852"
                                                     style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                                                     class="sapUiBlockLayoutCell sapUiBlockLayoutOddCell sapUiBlockHorizontalCell">
                                                    <div class="sapUiBlockCellContent"><input id="_footer_input"
                                                                                              data-sap-ui-preserve="_footer_input">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow zInformationRow sapUiBlockLayoutBackgroundColorSet4"
                                             style="padding-top:30px;">
                                            <p><b>Contact Details</b></p>
                                            <div style=" ">

                                                <p>If you have a trade license in the UAE, please ensure that address
                                                    details that you type is identical to data in the trade license.</p>
                                                <p>If there is no trade license in the UAE, please ensure that address
                                                    details that you type is identical to data in the Certificate of
                                                    Incorporation.</p>
                                                <p>For Property owners, enter the address details that is mentioned in
                                                    the Title Deed.</p>
                                                <p>For natural persons, enter the address details of your house.</p>

                                            </div>
                                        </div>

                                        <span id="sap-ui-invisible-BlockLayRowInstrInfo"
                                              data-sap-ui="sap-ui-invisible-BlockLayRowInstrInfo"
                                              aria-hidden="true" class="sapUiHiddenPlaceholder"></span>
                                        <div id="__row578" data-sap-ui="__row578"
                                             class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow sapUiTinyMarginTop zBlockLayoutRow sapUiBlockLayoutBackgroundColorSet2">
                                            <div style="display: flex;">
                                                <div id="A_04_ADD_COUNTRY_COMBO" data-sap-ui="A_04_ADD_COUNTRY_COMBO"
                                                     style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                                                     class="sapUiBlockLayoutCell sapUiBlockLayoutOddCell sapUiBlockHorizontalCell">
                                                    <div class="sapUiBlockCellContent">
                                                        <div id="__vbox688" data-sap-ui="__vbox688"
                                                             class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent">
                                                            <div id="__data2424"
                                                                 class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                 style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                <span id="__label1816" data-sap-ui="__label1816" aria-label="Country"
                                      class="sapMLabel sapUiSelectable sapMLabelMaxWidth"
                                      style="text-align: left;"><span id="__label1816-text"
                                                                      class="sapMLabelTextWrapper"><bdi
                                                id="__label1816-bdi">Country</bdi></span><span
                                            class="sapMLabelColonAndRequired"></span></span></div>
                                                            <div id="__data2425"
                                                                 class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                 style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                <div id="_ADDR_A_04_ADD_COUNTRY_COMBO_combobox"
                                                                     data-sap-ui="_ADDR_A_04_ADD_COUNTRY_COMBO_combobox"
                                                                     class="sapMInputBaseNoWidth sapMInputBase sapMInputBaseHeightMargin sapMComboBoxBase sapMComboBoxBaseDisabled sapMComboBox sapMInputBaseDisabled sapMInputBaseHasEndIcons"
                                                                     style="max-width: 100%;">
                                                                    <div id="_ADDR_A_04_ADD_COUNTRY_COMBO_combobox-content"
                                                                         class="sapMInputBaseContentWrapper sapMInputBaseDisabledWrapper"
                                                                         style="width: 100%;"><input
                                                                                id="_ADDR_A_04_ADD_COUNTRY_COMBO_combobox-inner"
                                                                                disabled="disabled"
                                                                                value="United Arab Emirates"
                                                                                role="combobox" aria-haspopup="listbox"
                                                                                aria-autocomplete="both"
                                                                                aria-expanded="false"
                                                                                autocomplete="off" autocorrect="off"
                                                                                autocapitalize="off" type="text"
                                                                                class="sapMInputBaseInner sapMComboBoxInner"
                                                                                fdprocessedid="afkz4g">
                                                                        <div tabindex="-1"
                                                                             class="sapMInputBaseIconContainer"><span
                                                                                    id="_ADDR_A_04_ADD_COUNTRY_COMBO_combobox-arrow"
                                                                                    data-sap-ui="_ADDR_A_04_ADD_COUNTRY_COMBO_combobox-arrow"
                                                                                    role="button"
                                                                                    aria-label="Select Options"
                                                                                    data-sap-ui-icon-content=""
                                                                                    class="sapUiIcon sapUiIconMirrorInRTL sapUiIconPointer sapMInputBaseIcon"
                                                                                    style="font-family: 'SAP\2dicons';"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="A_04_ADD_BLDG_NM" data-sap-ui="A_04_ADD_BLDG_NM"
                                                     style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                                                     class="sapUiBlockLayoutCell sapUiBlockLayoutEvenCell sapUiBlockHorizontalCell">
                                                    <div class="sapUiBlockCellContent">
                                                        <div id="__vbox689" data-sap-ui="__vbox689"
                                                             class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent">
                                                            <div id="__data2413"
                                                                 class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                 style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                <span id="__label1817" data-sap-ui="__label1817" aria-label="Building Name &amp; Number"
                                      class="sapMLabel sapUiSelectable sapMLabelMaxWidth"
                                      style="text-align: left;"><span id="__label1817-text"
                                                                      class="sapMLabelTextWrapper"><bdi
                                                id="__label1817-bdi">Building Name &amp; Number</bdi></span><span
                                            class="sapMLabelColonAndRequired"></span></span></div>
                                                            <div id="__data2414"
                                                                 class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                 style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                <div id="_ADDR_A_04_ADD_BLDG_NM_input"
                                                                     data-sap-ui="_ADDR_A_04_ADD_BLDG_NM_input"
                                                                     class="sapMInputBase sapMInputBaseHeightMargin sapMInput"
                                                                     style="width: 100%;">
                                                                    <div id="_ADDR_A_04_ADD_BLDG_NM_input-content"
                                                                         class="sapMInputBaseContentWrapper"
                                                                         style="width: 100%;"><input
                                                                                id="_ADDR_A_04_ADD_BLDG_NM_input-inner"
                                                                                maxlength="40"
                                                                                value=""
                                                                                type="text"
                                                                                autocomplete="off"
                                                                                class="sapMInputBaseInner required-field"
                                                                                data-label="Building Name"
                                                                                fdprocessedid="cxptcj"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="__row579" data-sap-ui="__row579"
                                             class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow sapUiBlockLayoutBackgroundColorSet3">
                                            <div style="display: flex;">
                                                <div id="A_04_ADD_STREET" data-sap-ui="A_04_ADD_STREET"
                                                     style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                                                     class="sapUiBlockLayoutCell sapUiBlockLayoutOddCell sapUiBlockHorizontalCell">
                                                    <div class="sapUiBlockCellContent">
                                                        <div id="__vbox690" data-sap-ui="__vbox690"
                                                             class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent">
                                                            <div id="__data2435"
                                                                 class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                 style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                <span id="__label1818" data-sap-ui="__label1818" aria-label="Street"
                                      class="sapMLabel sapUiSelectable sapMLabelMaxWidth"
                                      style="text-align: left;"><span id="__label1818-text"
                                                                      class="sapMLabelTextWrapper"><bdi
                                                id="__label1818-bdi">Street</bdi></span><span
                                            class="sapMLabelColonAndRequired"></span></span></div>
                                                            <div id="__data2436"
                                                                 class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                 style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                <div id="_ADDR_A_04_ADD_STREET_input"
                                                                     data-sap-ui="_ADDR_A_04_ADD_STREET_input"
                                                                     class="sapMInputBase sapMInputBaseHeightMargin sapMInput"
                                                                     style="width: 100%;">
                                                                    <div id="_ADDR_A_04_ADD_STREET_input-content"
                                                                         class="sapMInputBaseContentWrapper"
                                                                         style="width: 100%;"><input
                                                                                id="_ADDR_A_04_ADD_STREET_input-inner"
                                                                                maxlength="60"
                                                                                value=""
                                                                                type="text" autocomplete="off"
                                                                                class="sapMInputBaseInner required-field"
                                                                                data-label="Street"
                                                                                fdprocessedid="omcfco">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="A_04_ADD_AREA" data-sap-ui="A_04_ADD_AREA"
                                                     style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                                                     class="sapUiBlockLayoutCell sapUiBlockLayoutEvenCell sapUiBlockHorizontalCell">
                                                    <div class="sapUiBlockCellContent">
                                                        <div id="__vbox691" data-sap-ui="__vbox691"
                                                             class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent">
                                                            <div id="__data2420"
                                                                 class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                 style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                <span id="__label1819" data-sap-ui="__label1819" aria-label="Area"
                                      class="sapMLabel sapUiSelectable sapMLabelMaxWidth"
                                      style="text-align: left;"><span id="__label1819-text"
                                                                      class="sapMLabelTextWrapper"><bdi
                                                id="__label1819-bdi">Area</bdi></span><span
                                            class="sapMLabelColonAndRequired"></span></span></div>
                                                            <div id="__data2421"
                                                                 class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                 style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                <div id="_ADDR_A_04_ADD_AREA_input"
                                                                     data-sap-ui="_ADDR_A_04_ADD_AREA_input"
                                                                     class="sapMInputBase sapMInputBaseHeightMargin sapMInput"
                                                                     style="width: 100%;">
                                                                    <div id="_ADDR_A_04_ADD_AREA_input-content"
                                                                         class="sapMInputBaseContentWrapper"
                                                                         style="width: 100%;"><input
                                                                                id="_ADDR_A_04_ADD_AREA_input-inner"
                                                                                maxlength="40"
                                                                                value="" type="text"
                                                                                autocomplete="off"
                                                                                class="sapMInputBaseInner required-field"
                                                                                data-label="Area"
                                                                                fdprocessedid="dmg2n"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="__row580" data-sap-ui="__row580"
                                             class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow zBlockLayoutRow sapUiBlockLayoutBackgroundColorSet4">
                                            <div style="display: flex;"><span id="sap-ui-invisible-__cell857"
                                                                              data-sap-ui="sap-ui-invisible-__cell857"
                                                                              aria-hidden="true"
                                                                              class="sapUiHiddenPlaceholder"></span>
                                                <div id="A_04_ADD_CITY" data-sap-ui="A_04_ADD_CITY"
                                                     style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                                                     class="sapUiBlockLayoutCell sapUiBlockLayoutEvenCell sapUiBlockHorizontalCell">
                                                    <div class="sapUiBlockCellContent">
                                                        <div id="__vbox693" data-sap-ui="__vbox693"
                                                             class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent">
                                                            <div id="__data2422"
                                                                 class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                 style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                <span id="__label1821" data-sap-ui="__label1821" aria-label="City"
                                      class="sapMLabel sapUiSelectable sapMLabelMaxWidth"
                                      style="text-align: left;"><span id="__label1821-text"
                                                                      class="sapMLabelTextWrapper"><bdi
                                                id="__label1821-bdi">City</bdi></span><span
                                            class="sapMLabelColonAndRequired"></span></span></div>
                                                            <div id="__data2423"
                                                                 class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                 style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                <div id="_ADDR_A_04_ADD_CITY_input"
                                                                     data-sap-ui="_ADDR_A_04_ADD_CITY_input"
                                                                     class="sapMInputBase sapMInputBaseHeightMargin sapMInput"
                                                                     style="width: 100%;">
                                                                    <div id="_ADDR_A_04_ADD_CITY_input-content"
                                                                         class="sapMInputBaseContentWrapper"
                                                                         style="width: 100%;"><input
                                                                                id="_ADDR_A_04_ADD_CITY_input-inner"
                                                                                maxlength="40"
                                                                                value="" type="text"
                                                                                autocomplete="off"
                                                                                class="sapMInputBaseInner"
                                                                                fdprocessedid="60vweq">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="__cell858" data-sap-ui="__cell858"
                                                     style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                                                     class="sapUiBlockLayoutCell sapUiBlockLayoutOddCell sapUiBlockHorizontalCell">
                                                    <div class="sapUiBlockCellContent">
                                                        <div id="__vbox694" data-sap-ui="__vbox694"
                                                             class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent">
                                                            <div id="__data2415"
                                                                 class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                 style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                <span id="__label1822" data-sap-ui="__label1822" aria-label="Emirates"
                                      class="sapMLabel sapUiSelectable sapMLabelMaxWidth"
                                      style="text-align: left;"><span id="__label1822-text"
                                                                      class="sapMLabelTextWrapper"><bdi
                                                id="__label1822-bdi">Emirates</bdi></span><span
                                            class="sapMLabelColonAndRequired"></span></span></div>
                                                            <div id="__data2416"
                                                                 class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                 style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                <div id="_ADDR_A_04_ADD_EMIRATE_COMBO_combobox"
                                                                     data-sap-ui="_ADDR_A_04_ADD_EMIRATE_COMBO_combobox"
                                                                     class="sapMInputBaseNoWidth sapMInputBase sapMInputBaseHeightMargin sapMComboBoxBase sapMComboBox sapMInputBaseHasEndIcons"
                                                                     style="max-width: 100%;">
                                                                    <select class="sapMInputBaseInner sapMComboBoxInner"
                                                                            style="width: 92%;height:30px;"
                                                                            name="emirates" id="emirates">
                                                                        <option value="Abu Dhabi">Abu Dhabi</option>
                                                                        <option value="Ajman">Ajman</option>
                                                                        <option value="Dubai">Dubai</option>
                                                                        <option value="Sharjah">Sharjah</option>
                                                                        <option value="Fujairah">Fujairah</option>
                                                                        <option value="Ras Al Khaimah">Ras Al Khaimah
                                                                        </option>
                                                                        <option value="Umm Al Quwain">Umm Al Quwain
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="__row581" data-sap-ui="__row581"
                                             class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow zBlockLayoutRow sapUiBlockLayoutBackgroundColorSet1">
                                            <div style="display: flex;">
                                                <div id="A_04_ADD_MOB_NUM" data-sap-ui="A_04_ADD_MOB_NUM"
                                                     style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                                                     class="sapUiBlockLayoutCell sapUiBlockLayoutOddCell sapUiBlockHorizontalCell">
                                                    <div class="sapUiBlockCellContent">
                                                        <div id="__hbox872" data-sap-ui="__hbox872"
                                                             class="sapMFlexBox sapMHBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent zTwoinOne">
                                                            <div id="__vbox695" data-sap-ui="__vbox695"
                                                                 class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent sapMFlexItem">
                                                                <div id="__data2428"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                    <span id="__label1823" data-sap-ui="__label1823" aria-label="Country Code"
                                          class="sapMLabel sapUiSelectable sapMLabelMaxWidth" style="text-align: left;"><span
                                                id="__label1823-text" class="sapMLabelTextWrapper"><bdi
                                                    id="__label1823-bdi">Country Code</bdi></span><span
                                                class="sapMLabelColonAndRequired"></span></span></div>
                                                                <div id="__data2429"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                    <div id="_ADDR_A_04_ADD_MOB_CTRY_COMBO_combobox"
                                                                         data-sap-ui="_ADDR_A_04_ADD_MOB_CTRY_COMBO_combobox"
                                                                         class="sapMInputBaseNoWidth sapMInputBase sapMInputBaseHeightMargin sapMComboBoxBase sapMComboBox sapMInputBaseHasEndIcons"
                                                                         style="max-width: 100%;">
                                                                        <div id="_ADDR_A_04_ADD_MOB_CTRY_COMBO_combobox-content"
                                                                             class="sapMInputBaseContentWrapper"
                                                                             style="width: 100%;"><input
                                                                                    id="_ADDR_A_04_ADD_MOB_CTRY_COMBO_combobox-inner"
                                                                                    value=""
                                                                                    role="combobox"
                                                                                    aria-haspopup="listbox"
                                                                                    aria-autocomplete="both"
                                                                                    aria-expanded="false"
                                                                                    autocomplete="off" autocorrect="off"
                                                                                    autocapitalize="off" type="text"
                                                                                    class="sapMInputBaseInner sapMComboBoxInner required-field"
                                                                                    data-label="Country Code"
                                                                                    fdprocessedid="6gz2gd">
                                                                            <div tabindex="-1"
                                                                                 class="sapMInputBaseIconContainer"><span
                                                                                        id="_ADDR_A_04_ADD_MOB_CTRY_COMBO_combobox-arrow"
                                                                                        data-sap-ui="_ADDR_A_04_ADD_MOB_CTRY_COMBO_combobox-arrow"
                                                                                        role="button"
                                                                                        aria-label="Select Options"
                                                                                        data-sap-ui-icon-content=""
                                                                                        class="sapUiIcon sapUiIconMirrorInRTL sapUiIconPointer sapMInputBaseIcon"
                                                                                        style="font-family: 'SAP\2dicons';"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="__vbox696" data-sap-ui="__vbox696"
                                                                 class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent sapMFlexItem">
                                                                <div id="__hbox871" data-sap-ui="__hbox871"
                                                                     class="sapMFlexBox sapMHBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent zWithHint sapMFlexItem">
                                                                    <div id="__data2430"
                                                                         class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                         style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                        <span id="_ADDR_A_04_ADD_MOB_NUM_Label"
                                              data-sap-ui="_ADDR_A_04_ADD_MOB_NUM_Label" aria-label="Mobile Number"
                                              class="sapMLabel sapUiSelectable sapMLabelMaxWidth"
                                              style="text-align: left;"><span id="_ADDR_A_04_ADD_MOB_NUM_Label-text"
                                                                              class="sapMLabelTextWrapper"><bdi
                                                        id="_ADDR_A_04_ADD_MOB_NUM_Label-bdi">Mobile Number</bdi></span><span
                                                    class="sapMLabelColonAndRequired"></span></span></div>
                                                                    <div id="__data2431"
                                                                         class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                         style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                        <span id="__icon361" data-sap-ui="__icon361" role="presentation"
                                              aria-hidden="true" data-sap-ui-icon-content=""
                                              title="Ensure to include a reachable contact number of the person who is submitting this online application"
                                              class="sapUiIcon" style="font-family: 'SAP\2dicons';"></span></div>
                                                                </div>
                                                                <div id="__data2432"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                    <div id="_ADDR_A_04_ADD_MOB_NUM_input"
                                                                         data-sap-ui="_ADDR_A_04_ADD_MOB_NUM_input"
                                                                         class="sapMInputBase sapMInputBaseHeightMargin sapMInput"
                                                                         style="width: 100%;">
                                                                        <div id="_ADDR_A_04_ADD_MOB_NUM_input-content"
                                                                             class="sapMInputBaseContentWrapper"
                                                                             style="width: 100%;"><input
                                                                                    id="_ADDR_A_04_ADD_MOB_NUM_input-inner"
                                                                                     name="_ADDR_A_04_ADD_MOB_NUM_input-inner"
                                                                                    maxlength="16"
                                                                                    value="" type="text"
                                                                                    autocomplete="off"
                                                                                    class="sapMInputBaseInner required-field"
                                                                                    data-label="Mobile number"
                                                                                    fdprocessedid="azlwv"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="C_COUNTRY" data-sap-ui="C_COUNTRY"
                                                     style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                                                     class="sapUiBlockLayoutCell sapUiBlockLayoutEvenCell sapUiBlockHorizontalCell">
                                                    <div class="sapUiBlockCellContent">
                                                        <div id="__hbox873" data-sap-ui="__hbox873"
                                                             class="sapMFlexBox sapMHBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent zTwoinOne">
                                                            <div id="__vbox697" data-sap-ui="__vbox697"
                                                                 class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent sapMFlexItem">
                                                                <div id="__data2437"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                    <span id="__label1824" data-sap-ui="__label1824" aria-label="Country Code"
                                          class="sapMLabel sapUiSelectable sapMLabelMaxWidth" style="text-align: left;"><span
                                                id="__label1824-text" class="sapMLabelTextWrapper"><bdi
                                                    id="__label1824-bdi">Country Code</bdi></span><span
                                                class="sapMLabelColonAndRequired"></span></span></div>
                                                                <div id="__data2438"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                    <div id="_ADDR_C_COUNTRY_combobox"
                                                                         data-sap-ui="_ADDR_C_COUNTRY_combobox"
                                                                         class="sapMInputBaseNoWidth sapMInputBase sapMInputBaseHeightMargin sapMComboBoxBase sapMComboBox sapMInputBaseHasEndIcons"
                                                                         style="max-width: 100%;">
                                                                        <div id="_ADDR_C_COUNTRY_combobox-content"
                                                                             class="sapMInputBaseContentWrapper"
                                                                             style="width: 100%;"><input
                                                                                    id="_ADDR_C_COUNTRY_combobox-inner"
                                                                                    value=""
                                                                                    role="combobox"
                                                                                    aria-haspopup="listbox"
                                                                                    aria-autocomplete="both"
                                                                                    aria-expanded="false"
                                                                                    autocomplete="off" autocorrect="off"
                                                                                    autocapitalize="off" type="text"
                                                                                    class="sapMInputBaseInner sapMComboBoxInner required-field"
                                                                                    data-label="Country Code"
                                                                                    fdprocessedid="00kmy">
                                                                            <div tabindex="-1"
                                                                                 class="sapMInputBaseIconContainer"><span
                                                                                        id="_ADDR_C_COUNTRY_combobox-arrow"
                                                                                        data-sap-ui="_ADDR_C_COUNTRY_combobox-arrow"
                                                                                        role="button"
                                                                                        aria-label="Select Options"
                                                                                        data-sap-ui-icon-content=""
                                                                                        class="sapUiIcon sapUiIconMirrorInRTL sapUiIconPointer sapMInputBaseIcon"
                                                                                        style="font-family: 'SAP\2dicons';"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="__vbox698" data-sap-ui="__vbox698"
                                                                 class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent sapMFlexItem">
                                                                <div id="__data2439"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                    <span id="__label1825" data-sap-ui="__label1825" aria-label="Landline Number"
                                          class="sapMLabel sapUiSelectable sapMLabelMaxWidth" style="text-align: left;"><span
                                                id="__label1825-text" class="sapMLabelTextWrapper"><bdi
                                                    id="__label1825-bdi">Landline Number</bdi></span><span
                                                class="sapMLabelColonAndRequired"></span></span></div>
                                                                <div id="__data2440"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                    <div id="_ADDR_C_PHON_input"
                                                                         data-sap-ui="_ADDR_C_PHON_input"
                                                                         class="sapMInputBase sapMInputBaseHeightMargin sapMInput"
                                                                         style="width: 100%;">
                                                                        <div id="_ADDR_C_PHON_input-content"
                                                                             class="sapMInputBaseContentWrapper"
                                                                             style="width: 100%;"><input
                                                                                    id="_ADDR_C_PHON_input-inner"
                                                                                    maxlength="16"
                                                                                    value="" type="text"
                                                                                    autocomplete="off"
                                                                                    class="sapMInputBaseInner"
                                                                                    fdprocessedid="4z9zik"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="__row582" data-sap-ui="__row582"
                                             class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow sapUiBlockLayoutBackgroundColorSet2">
                                            <div style="display: flex;">
                                                <div id="A_04_ADD_EMAIL" data-sap-ui="A_04_ADD_EMAIL"
                                                     style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                                                     class="sapUiBlockLayoutCell sapUiBlockLayoutOddCell sapUiBlockHorizontalCell">
                                                    <div class="sapUiBlockCellContent">
                                                        <div id="__vbox699" data-sap-ui="__vbox699"
                                                             class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent">
                                                            <div id="__data2426"
                                                                 class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                 style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                <span id="__label1826" data-sap-ui="__label1826" aria-label="Email ID"
                                      class="sapMLabel sapUiSelectable sapMLabelMaxWidth"
                                      style="text-align: left;"><span id="__label1826-text"
                                                                      class="sapMLabelTextWrapper"><bdi
                                                id="__label1826-bdi">Email ID</bdi></span><span
                                            class="sapMLabelColonAndRequired"></span></span></div>
                                                            <div id="__data2427"
                                                                 class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                 style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                <div id="_ADDR_A_04_ADD_EMAIL_input"
                                                                     data-sap-ui="_ADDR_A_04_ADD_EMAIL_input"
                                                                     class="sapMInputBase sapMInputBaseHeightMargin sapMInput"
                                                                     style="width: 100%;">
                                                                    <div id="_ADDR_A_04_ADD_EMAIL_input-content"
                                                                         class="sapMInputBaseContentWrapper"
                                                                         style="width: 100%;"><input
                                                                                id="_ADDR_A_04_ADD_EMAIL_input-inner"
                                                                                name="_ADDR_A_04_ADD_EMAIL_input-inner"
                                                                                maxlength="241"
                                                                                value=""
                                                                                type="text" autocomplete="off"
                                                                                class="sapMInputBaseInner required-field"
                                                                                data-label="email id"
                                                                                fdprocessedid="5d5gu">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="A_04_ADD_POBOX" data-sap-ui="A_04_ADD_POBOX"
                                                     style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                                                     class="sapUiBlockLayoutCell sapUiBlockLayoutEvenCell sapUiBlockHorizontalCell">
                                                    <div class="sapUiBlockCellContent">
                                                        <div id="__vbox700" data-sap-ui="__vbox700"
                                                             class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent">
                                                            <div id="__data2433"
                                                                 class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                 style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                <span id="__label1827" data-sap-ui="__label1827" aria-label="P.O. Box"
                                      class="sapMLabel sapUiSelectable sapMLabelMaxWidth"
                                      style="text-align: left;"><span id="__label1827-text"
                                                                      class="sapMLabelTextWrapper"><bdi
                                                id="__label1827-bdi">P.O. Box</bdi></span><span
                                            class="sapMLabelColonAndRequired"></span></span></div>
                                                            <div id="__data2434"
                                                                 class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                 style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                <div id="_ADDR_A_04_ADD_POBOX_input"
                                                                     data-sap-ui="_ADDR_A_04_ADD_POBOX_input"
                                                                     class="sapMInputBase sapMInputBaseHeightMargin sapMInput"
                                                                     style="width: 100%;">
                                                                    <div id="_ADDR_A_04_ADD_POBOX_input-content"
                                                                         class="sapMInputBaseContentWrapper"
                                                                         style="width: 100%;"><input
                                                                                id="_ADDR_A_04_ADD_POBOX_input-inner"
                                                                                maxlength="10" value="" type="text"
                                                                                autocomplete="off"
                                                                                class="sapMInputBaseInner required-field"
                                                                                data-label="P.O"
                                                                                fdprocessedid="gmp5gtj"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <span id="sap-ui-invisible-A_04_ADD_CDATE"
                                              data-sap-ui="sap-ui-invisible-A_04_ADD_CDATE" aria-hidden="true"
                                              class="sapUiHiddenPlaceholder"></span><span id="sap-ui-invisible-__row583"
                                                                                          data-sap-ui="sap-ui-invisible-__row583"
                                                                                          aria-hidden="true"
                                                                                          class="sapUiHiddenPlaceholder"></span><span
                                                id="sap-ui-invisible-__row584" data-sap-ui="sap-ui-invisible-__row584"
                                                aria-hidden="true"
                                                class="sapUiHiddenPlaceholder"></span><span
                                                id="sap-ui-invisible-ADDR_AdditionalNotes_row"
                                                data-sap-ui="sap-ui-invisible-ADDR_AdditionalNotes_row"
                                                aria-hidden="true" class="sapUiHiddenPlaceholder"></span>
                                    </div>
                                </div>
                            </form>
                            <form class="step-form" id="step5" style="display: none;">
                                <!--- step 5 -------->

                                <div id="INST_WizardContent_Page-content" class="sapFDynamicPageContent">
                                    <div id="INST_WizardContent_Page-contentFitContainer">
                                        <div id="_BANK_BlockLayOut" data-sap-ui="_BANK_BlockLayOut"
                                             class="sapUiBlockLayout sapUiBlockLayoutSizeL">
                                            <div id="pg_GoTop" data-sap-ui="pg_GoTop"
                                                 class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow sapUiBlockLayoutBackgroundColorSet1">
                                                <div style="display: flex;">
                                                    <div id="__cell910" data-sap-ui="__cell910"
                                                         style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                                                         class="sapUiBlockLayoutCell sapUiBlockLayoutOddCell sapUiBlockHorizontalCell">
                                                        <div class="sapUiBlockCellContent"><input id="_footer_input"
                                                                                                  data-sap-ui-preserve="_footer_input">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <span id="sap-ui-invisible-_BANK_Officer_Notes_Row"
                                                  data-sap-ui="sap-ui-invisible-_BANK_Officer_Notes_Row"
                                                  aria-hidden="true" class="sapUiHiddenPlaceholder"></span>
                                            <div id="_BANK_B_06_EDIT_RDB_Row" data-sap-ui="_BANK_B_06_EDIT_RDB_Row"
                                                 class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow sapUiBlockLayoutBackgroundColorSet3">
                                                <p><b>Bank Details (Optional)</b></p>
                                            </div>
                                            <div id="__row626" data-sap-ui="__row626"
                                                 class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow zBlockLayoutRow sapUiBlockLayoutBackgroundColorSet4">
                                                <div style="display: flex;">
                                                    <div id="__cell914" data-sap-ui="__cell914"
                                                         style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                                                         class="sapUiBlockLayoutCell sapUiBlockLayoutOddCell sapUiBlockHorizontalCell">
                                                        <div class="sapUiBlockCellContent">
                                                            <div id="__vbox760" data-sap-ui="__vbox760"
                                                                 class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent">
                                                                <div id="__data2701"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                    <span id="__label1907" data-sap-ui="__label1907" aria-label="Country"
                                          class="sapMLabel sapUiSelectable sapMLabelMaxWidth" style="text-align: left;"><span
                                                id="__label1907-text" class="sapMLabelTextWrapper"><bdi
                                                    id="__label1907-bdi">Country</bdi></span><span
                                                class="sapMLabelColonAndRequired"></span></span></div>
                                                                <div id="__data2702"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                    <div id="_BANK_A_06_COUNTRY_COMBO_combobox"
                                                                         data-sap-ui="_BANK_A_06_COUNTRY_COMBO_combobox"
                                                                         class="sapMInputBaseNoWidth sapMInputBase sapMInputBaseHeightMargin sapMComboBoxBase sapMComboBox sapMInputBaseHasEndIcons"
                                                                         style="max-width: 100%;">
                                                                        <div id="_BANK_A_06_COUNTRY_COMBO_combobox-content"
                                                                             class="sapMInputBaseContentWrapper"
                                                                             style="width: 100%;">

                                                                            <select class="sapMInputBaseInner sapMComboBoxInner"
                                                                                    style="width: 92%;height:30px;"
                                                                                    name="nationality" id="nationality"
                                                                                    onchange="setcurrency(this.value);">
                                                                                <!--<option value="INR">India</option>-->
                                                                                <option value="AED" selected>Uae</option>
                                                                            </select>
                                                                            <div tabindex="-1"
                                                                                 class="sapMInputBaseIconContainer"><span
                                                                                        id="_BANK_A_06_COUNTRY_COMBO_combobox-arrow"
                                                                                        data-sap-ui="_BANK_A_06_COUNTRY_COMBO_combobox-arrow"
                                                                                        role="button"
                                                                                        aria-label="Select Options"
                                                                                        data-sap-ui-icon-content=""
                                                                                        class="sapUiIcon sapUiIconMirrorInRTL sapUiIconPointer sapMInputBaseIcon"
                                                                                        style="font-family: 'SAP\2dicons';"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span id="sap-ui-invisible-_BANK_A_06_BANK_CD_bCell"
                                                          data-sap-ui="sap-ui-invisible-_BANK_A_06_BANK_CD_bCell"
                                                          aria-hidden="true"
                                                          class="sapUiHiddenPlaceholder"></span></div>
                                            </div>
                                            <span id="sap-ui-invisible-_BANK_A_06_IBAN_bRow"
                                                  data-sap-ui="sap-ui-invisible-_BANK_A_06_IBAN_bRow"
                                                  aria-hidden="true" class="sapUiHiddenPlaceholder"></span>
                                            <div id="__row627" data-sap-ui="__row627"
                                                 class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow sapUiBlockLayoutBackgroundColorSet2">
                                                <div style="display: flex;">
                                                    <div id="__cell915" data-sap-ui="__cell915"
                                                         style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                                                         class="sapUiBlockLayoutCell sapUiBlockLayoutOddCell sapUiBlockHorizontalCell">
                                                        <div class="sapUiBlockCellContent">
                                                            <div id="__vbox764" data-sap-ui="__vbox764"
                                                                 class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent">
                                                                <div id="__data2703"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                    <span id="__label1911" data-sap-ui="__label1911" aria-label="Bank Name"
                                          class="sapMLabel sapUiSelectable sapMLabelMaxWidth" style="text-align: left;"><span
                                                id="__label1911-text" class="sapMLabelTextWrapper"><bdi
                                                    id="__label1911-bdi">Bank Name</bdi></span><span
                                                class="sapMLabelColonAndRequired"></span></span></div>
                                                                <div id="__data2704"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                    <div id="_BANK_A_06_BANK_NAME_COMBO_input"
                                                                         data-sap-ui="_BANK_A_06_BANK_NAME_COMBO_input"
                                                                         class="sapMInputBase sapMInputBaseHeightMargin sapMInput"
                                                                         style="width: 100%;">
                                                                        <div id="_BANK_A_06_BANK_NAME_COMBO_input-content"
                                                                             class="sapMInputBaseContentWrapper"
                                                                             style="width: 100%;"><input
                                                                                    id="_BANK_A_06_BANK_NAME_COMBO_input-inner"
                                                                                    maxlength="60" value=""
                                                                                    type="text" autocomplete="off"
                                                                                    class="sapMInputBaseInner required-field"
                                                                                    data-label="Bank Name"
                                                                                    fdprocessedid="4kwrae"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="__cell916" data-sap-ui="__cell916"
                                                         style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                                                         class="sapUiBlockLayoutCell sapUiBlockLayoutEvenCell sapUiBlockHorizontalCell">
                                                        <div class="sapUiBlockCellContent">
                                                            <div id="__vbox765" data-sap-ui="__vbox765"
                                                                 class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent">
                                                                <div id="__data2705"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                    <span id="__label1912" data-sap-ui="__label1912" aria-label="Branch Name"
                                          class="sapMLabel sapUiSelectable sapMLabelMaxWidth" style="text-align: left;"><span
                                                id="__label1912-text" class="sapMLabelTextWrapper"><bdi
                                                    id="__label1912-bdi">Branch Name</bdi></span><span
                                                class="sapMLabelColonAndRequired"></span></span></div>
                                                                <div id="__data2706"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                    <div id="_BANK_A_06_BANK_BRANCH_COMBO_combobox"
                                                                         data-sap-ui="_BANK_A_06_BANK_BRANCH_COMBO_combobox" 
                                                                         class="sapMInputBase sapMInputBaseHeightMargin sapMInput"
                                                                         style="width: 100%;">
                                                                        <div id="_BANK_A_06_BANK_BRANCH_COMBO_combobox-content"
                                                                             class="sapMInputBaseContentWrapper"
                                                                             style="width: 100%;"><input
                                                                                    id="_BANK_A_06_BANK_BRANCH_COMBO_combobox-inner"
                                                                                    value=""
                                                                                    type="text" autocomplete="off"
                                                                                    class="sapMInputBaseInner required-field"
                                                                                    data-label="Branch"
                                                                                    fdprocessedid="t7rw0k"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="__row628" data-sap-ui="__row628"
                                                 class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow sapUiBlockLayoutBackgroundColorSet3">
                                                <div style="display: flex;">
                                                    <div id="__cell917" data-sap-ui="__cell917"
                                                         style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                                                         class="sapUiBlockLayoutCell sapUiBlockLayoutOddCell sapUiBlockHorizontalCell">
                                                        <div class="sapUiBlockCellContent">
                                                            <div id="__vbox766" data-sap-ui="__vbox766"
                                                                 class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent">
                                                                <div id="__hbox946" data-sap-ui="__hbox946"
                                                                     class="sapMFlexBox sapMHBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent zWithHint sapMFlexItem">
                                                                    <div id="__data2707"
                                                                         class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                         style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                        <span id="__label1913" data-sap-ui="__label1913"
                                              aria-label="Account Holder's Name"
                                              class="sapMLabel sapUiSelectable sapMLabelMaxWidth"
                                              style="text-align: left;"><span id="__label1913-text"
                                                                              class="sapMLabelTextWrapper"><bdi
                                                        id="__label1913-bdi">Account Holder's Name</bdi></span><span
                                                    class="sapMLabelColonAndRequired"></span></span></div>
                                                                    <div id="__data2708"
                                                                         class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                         style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                        <span id="__icon385" data-sap-ui="__icon385" role="presentation"
                                              aria-hidden="true" data-sap-ui-icon-content=""
                                              title="If your account is held with a bank established in the UAE, the account name must match the legal name of the entity you are registering with the FTA. You must also ensure that you enter the relevant details accurately. If you are in the pro+"
                                              class="sapUiIcon"
                                              style="font-family: 'SAP\2dicons'; font-size: 1rem;"></span></div>
                                                                </div>
                                                                <div id="__data2709"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                    <div id="_BANK_A_06_ACC_HOLDER_NM_input"
                                                                         data-sap-ui="_BANK_A_06_ACC_HOLDER_NM_input"
                                                                         class="sapMInputBase sapMInputBaseHeightMargin sapMInput"
                                                                         style="width: 100%;">
                                                                        <div id="_BANK_A_06_ACC_HOLDER_NM_input-content"
                                                                             class="sapMInputBaseContentWrapper"
                                                                             style="width: 100%;"><input
                                                                                    id="_BANK_A_06_ACC_HOLDER_NM_input-inner"
                                                                                    maxlength="60" value=""
                                                                                    type="text" autocomplete="off"
                                                                                    class="sapMInputBaseInner required-field"
                                                                                    data-label="Account Holder's Name"
                                                                                    fdprocessedid="7h2rka"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="__cell918" data-sap-ui="__cell918"
                                                         style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                                                         class="sapUiBlockLayoutCell sapUiBlockLayoutEvenCell sapUiBlockHorizontalCell">
                                                        <div class="sapUiBlockCellContent">
                                                            <div id="__vbox767" data-sap-ui="__vbox767"
                                                                 class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent">
                                                                <div id="__data2710"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                    <span id="__label1914" data-sap-ui="__label1914" aria-label="Account Number"
                                          class="sapMLabel sapUiSelectable sapMLabelMaxWidth" style="text-align: left;"><span
                                                id="__label1914-text" class="sapMLabelTextWrapper"><bdi
                                                    id="__label1914-bdi">Account Number</bdi></span><span
                                                class="sapMLabelColonAndRequired"></span></span></div>
                                                                <div id="__data2711"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                    <div id="_BANK_A_06_ACC_NUMBER_input"
                                                                         data-sap-ui="_BANK_A_06_ACC_NUMBER_input"
                                                                         class="sapMInputBase sapMInputBaseHeightMargin sapMInput"
                                                                         style="width: 100%;">
                                                                        <div id="_BANK_A_06_ACC_NUMBER_input-content"
                                                                             class="sapMInputBaseContentWrapper"
                                                                             style="width: 100%;"><input
                                                                                    id="_BANK_A_06_ACC_NUMBER_input-inner"
                                                                                    maxlength="18" value=""
                                                                                    type="number" autocomplete="off"
                                                                                    class="sapMInputBaseInner required-field"
                                                                                    data-label="Account number"
                                                                                    fdprocessedid="vxxrw"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <span id="sap-ui-invisible-__row629" data-sap-ui="sap-ui-invisible-__row629"
                                                  aria-hidden="true"
                                                  class="sapUiHiddenPlaceholder"></span>
                                            <div id="__row630" data-sap-ui="__row630"
                                                 class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow zBlockLayoutRow sapUiBlockLayoutBackgroundColorSet1">
                                                <div style="display: flex;">
                                                    <div id="__cell921" data-sap-ui="__cell921"
                                                         style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                                                         class="sapUiBlockLayoutCell sapUiBlockLayoutOddCell sapUiBlockHorizontalCell">
                                                        <div class="sapUiBlockCellContent">
                                                            <div id="__vbox770" data-sap-ui="__vbox770"
                                                                 class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent">
                                                                <div id="__data2712"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                    <span id="__label1917" data-sap-ui="__label1917"
                                          aria-label="Eligible Currency for Refund"
                                          class="sapMLabel sapUiSelectable sapMLabelMaxWidth" style="text-align: left;"><span
                                                id="__label1917-text" class="sapMLabelTextWrapper"><bdi
                                                    id="__label1917-bdi">Eligible Currency for Refund</bdi></span><span
                                                class="sapMLabelColonAndRequired"></span></span></div>
                                                                <div id="__data2713"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                    <div id="_BANK_A_06_CURR_COMBO_combobox"
                                                                         data-sap-ui="_BANK_A_06_CURR_COMBO_combobox"
                                                                         class="sapMInputBaseNoWidth sapMInputBase sapMInputBaseHeightMargin sapMComboBoxBase sapMComboBox sapMInputBaseHasEndIcons"
                                                                         style="max-width: 100%;">
                                                                        <div id="_BANK_A_06_CURR_COMBO_combobox-content"
                                                                             class="sapMInputBaseContentWrapper"
                                                                             style="width: 100%;"><input
                                                                                    id="_BANK_A_06_CURR_COMBO_combobox-inner"
                                                                                    value="" role="combobox"
                                                                                    aria-haspopup="listbox"
                                                                                    aria-autocomplete="both"
                                                                                    aria-expanded="false"
                                                                                    autocomplete="off" autocorrect="off"
                                                                                    autocapitalize="off" type="text"
                                                                                    class="sapMInputBaseInner sapMComboBoxInner"
                                                                                    fdprocessedid="ckcw1">
                                                                            <div tabindex="-1"
                                                                                 class="sapMInputBaseIconContainer"><span
                                                                                        id="_BANK_A_06_CURR_COMBO_combobox-arrow"
                                                                                        data-sap-ui="_BANK_A_06_CURR_COMBO_combobox-arrow"
                                                                                        role="button"
                                                                                        aria-label="Select Options"
                                                                                        data-sap-ui-icon-content=""
                                                                                        class="sapUiIcon sapUiIconMirrorInRTL sapUiIconPointer sapMInputBaseIcon"
                                                                                        style="font-family: 'SAP\2dicons';"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="_BANK_Attachment_Row" data-sap-ui="_BANK_Attachment_Row"
                                                 class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow zBlockLayoutRow sapUiBlockLayoutBackgroundColorSet2">
                                                <div style="display: flex;">
                                                    <div id="__cell922" data-sap-ui="__cell922"
                                                         style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                                                         class="sapUiBlockLayoutCell zAttachmentCell sapUiBlockLayoutOddCell sapUiBlockHorizontalCell">
                                                        <div class="sapUiBlockCellContent">
                                                            <div id="__vbox771" data-sap-ui="__vbox771"
                                                                 class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent">
                                                                <div id="__data2714"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                    <span id="BANK_Label" data-sap-ui="BANK_Label"
                                          aria-label="Upload Copy of Bank Validation Letter"
                                          class="sapMLabel sapUiSelectable sapMLabelMaxWidth" style="text-align: left;"><span
                                                id="BANK_Label-text" class="sapMLabelTextWrapper"><bdi
                                                    id="BANK_Label-bdi">Upload Copy of Bank Validation Letter</bdi></span><span
                                                class="sapMLabelColonAndRequired"></span></span></div>

                                                                <!--<label for="file-name-122"-->
                                                                <!--       class="upload-button  col-md-3">Upload-->
                                                                <!--    File</label>-->
                                                                <!--<input type="file" name="file-name-122"-->
                                                                <!--       id="file-name-122"-->
                                                                <!--       onchange="displayFileNames(this, 'file-name-122')">-->
                                                                <!--<span id="file-name-122"-->
                                                                <!--      class="file-name">No file chosen</span>-->

                                                                <!--<label for="file-upload-10" class="file-label">Upload-->
                                                                <!--    File</label>-->
                                                                <!--<input type="file" id="file-upload-101"-->
                                                                <!--       onchange="displayFileName(this, 'file-name-101')">-->
                                                                <!--<span id="file-name-101"-->
                                                                <!--      class="file-name">No file chosen</span> -->
                                                                      
                                                                <!-- Hidden file input -->
  <input type="file" id="real-file" class="col-md-2">

  <!-- Custom button -->
  <label for="real-file" id="custom-button" class="col-md-2">Upload File</label>

  <!-- File name display -->
  <div id="file-name" class="col-md-2">No file chosen</div>      
                                                                      
                                                                      
                                                                      
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <span id="sap-ui-invisible-__row631" data-sap-ui="sap-ui-invisible-__row631"
                                                  aria-hidden="true"
                                                  class="sapUiHiddenPlaceholder"></span><span
                                                    id="sap-ui-invisible-__row632"
                                                    data-sap-ui="sap-ui-invisible-__row632" aria-hidden="true"
                                                    class="sapUiHiddenPlaceholder"></span></div>
                                    </div>
                                </div>
                            </form>
                            <form class="step-form" id="step6" style="display: none;">
                                <!--- step 6 -------->
                                <div id="INST_WizardContent_Page-content" class="sapFDynamicPageContent">
                                    <div id="INST_WizardContent_Page-contentFitContainer" class="">
                                        <div id="__layout57" data-sap-ui="__layout57"
                                             class="sapUiBlockLayout sapUiBlockLayoutSizeL">
                                            <div id="pg_GoTop" data-sap-ui="pg_GoTop"
                                                 class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow sapUiBlockLayoutBackgroundColorSet1">
                                                <div style="display: flex;">
                                                    <div id="__cell923" data-sap-ui="__cell923"
                                                         style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                                                         class="sapUiBlockLayoutCell sapUiBlockLayoutOddCell sapUiBlockHorizontalCell">
                                                        <div class="sapUiBlockCellContent"><input id="_footer_input"
                                                                                                  data-sap-ui-preserve="_footer_input">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <span id="sap-ui-invisible-__row633" data-sap-ui="sap-ui-invisible-__row633"
                                                  aria-hidden="true"
                                                  class="sapUiHiddenPlaceholder"></span>
                                            <div id="__row634" data-sap-ui="__row634"
                                                 class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow sapUiBlockLayoutBackgroundColorSet3">
                                                <p><b>Additional Details</b></p>
                                            </div>
                                            <div id="__row635" data-sap-ui="__row635"
                                                 class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow sapUiBlockLayoutBackgroundColorSet4">
                                                <div style="display: flex;">
                                                    <div id="A_07_IMPORT" data-sap-ui="A_07_IMPORT"
                                                         style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                                                         class="sapUiBlockLayoutCell zRadioBtnCell sapUiBlockLayoutOddCell sapUiBlockHorizontalCell">
                                                        <div class="sapUiBlockCellContent">
                                                            <div id="__vbox774" data-sap-ui="__vbox774"
                                                                 class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent">
                                                                <div id="__data2765"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                    <span id="__label1925" data-sap-ui="__label1925"
                                          aria-label="Do you intend to import goods or services?"
                                          class="sapMLabel sapUiSelectable sapMLabelMaxWidth" style="text-align: left;"><span
                                                id="__label1925-text" class="sapMLabelTextWrapper"><bdi
                                                    id="__label1925-bdi">Do you intend to import goods or services?</bdi></span><span
                                                class="sapMLabelColonAndRequired"></span></span></div>
                                                               <input type="radio" value="Yes" name="a1235" style="margin:10px;">Yes
                                                                <input type="radio" name="a1235" value="No" style="margin:10px;">No
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span id="sap-ui-invisible-A_07_IMPORT_GCC_id"
                                                          data-sap-ui="sap-ui-invisible-A_07_IMPORT_GCC_id"
                                                          aria-hidden="true" class="sapUiHiddenPlaceholder"></span>
                                                </div>
                                            </div>
                                            <div id="__row636" data-sap-ui="__row636"
                                                 class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow sapUiBlockLayoutBackgroundColorSet1">
                                                <div style="display: flex;">
                                                    <div id="A_07_EXPORT" data-sap-ui="A_07_EXPORT"
                                                         style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                                                         class="sapUiBlockLayoutCell zRadioBtnCell sapUiBlockLayoutOddCell sapUiBlockHorizontalCell">
                                                        <div class="sapUiBlockCellContent">
                                                            <div id="__vbox776" data-sap-ui="__vbox776"
                                                                 class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent">
                                                                <div id="__data2762"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                    <span id="__label1927" data-sap-ui="__label1927"
                                          aria-label="Do you intend to export goods or services?"
                                          class="sapMLabel sapUiSelectable sapMLabelMaxWidth" style="text-align: left;"><span
                                                id="__label1927-text" class="sapMLabelTextWrapper"><bdi
                                                    id="__label1927-bdi">Do you intend to export goods or services?</bdi></span><span
                                                class="sapMLabelColonAndRequired"></span></span></div>
                                                                <input type="radio" value="Yes" name="a1234" style="margin:10px;">Yes
                                                                <input type="radio" name="a1234" value="No" style="margin:10px;">No
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span id="sap-ui-invisible-__cell927"
                                                          data-sap-ui="sap-ui-invisible-__cell927" aria-hidden="true"
                                                          class="sapUiHiddenPlaceholder"></span></div>
                                            </div>
                                            <span id="sap-ui-invisible-_ADET_T_GCC_ACT_table_row"
                                                  data-sap-ui="sap-ui-invisible-_ADET_T_GCC_ACT_table_row"
                                                  aria-hidden="true"
                                                  class="sapUiHiddenPlaceholder"></span><span
                                                    id="sap-ui-invisible-A_E7_ET_GCC_TRN"
                                                    data-sap-ui="sap-ui-invisible-A_E7_ET_GCC_TRN"
                                                    aria-hidden="true" class="sapUiHiddenPlaceholder"></span>
                                            <div id="__row637" data-sap-ui="__row637"
                                                 class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow sapUiBlockLayoutBackgroundColorSet4">
                                                <div style="display: flex;"><span id="sap-ui-invisible-A_07_ET_GCC"
                                                                                  data-sap-ui="sap-ui-invisible-A_07_ET_GCC"
                                                                                  aria-hidden="true"
                                                                                  class="sapUiHiddenPlaceholder"></span>
                                                </div>
                                            </div>
                                            <span id="sap-ui-invisible-A_E7_ET_GCC_STATE1"
                                                  data-sap-ui="sap-ui-invisible-A_E7_ET_GCC_STATE1"
                                                  aria-hidden="true" class="sapUiHiddenPlaceholder"></span>
                                            <div id="__row638" data-sap-ui="__row638"
                                                 class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow sapUiBlockLayoutBackgroundColorSet2">
                                                <div style="display: flex;">
                                                    <div id="A_07_CUST_NUMBER_RDB" data-sap-ui="A_07_CUST_NUMBER_RDB"
                                                         style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                                                         class="sapUiBlockLayoutCell zRadioBtnCell sapUiBlockLayoutOddCell sapUiBlockHorizontalCell">
                                                        <div class="sapUiBlockCellContent">
                                                            <div id="__vbox779" data-sap-ui="__vbox779"
                                                                 class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent">
                                                                <div id="__hbox963" data-sap-ui="__hbox963"
                                                                     class="sapMFlexBox sapMHBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent zWithHint sapMFlexItem">
                                                                    <div id="__data2758"
                                                                         class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                         style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                        <span id="__label1938" data-sap-ui="__label1938"
                                              aria-label="Do you have a customs registration number?"
                                              class="sapMLabel sapUiSelectable sapMLabelMaxWidth"
                                              style="text-align: left;"><span id="__label1938-text"
                                                                              class="sapMLabelTextWrapper"><bdi
                                                        id="__label1938-bdi">Do you have a customs registration number?</bdi></span><span
                                                    class="sapMLabelColonAndRequired"></span></span></div>
                                                                    <div id="__data2759"
                                                                         class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                         style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                        <span id="__icon390" data-sap-ui="__icon390" role="presentation"
                                              aria-hidden="true" data-sap-ui-icon-content=""
                                              title="If you are registered with any of the Customs Authorities in the UAE, please enter the details here.The information will assist the FTA and the relevant Customs departments to identify you accurately at the time of importing and exporting go+"
                                              class="sapUiIcon" style="font-family: 'SAP\2dicons';"></span></div>
                                                                </div>
                                                              <input type="radio" value="Yes" name="b1235" style="margin:10px;">Yes
                                                                <input type="radio" name="b1235" value="No" style="margin:10px;">No
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <span id="sap-ui-invisible-_ADET_T_CUS_NUM_table_row"
                                                  data-sap-ui="sap-ui-invisible-_ADET_T_CUS_NUM_table_row"
                                                  aria-hidden="true"
                                                  class="sapUiHiddenPlaceholder"></span><span
                                                    id="sap-ui-invisible-__row639"
                                                    data-sap-ui="sap-ui-invisible-__row639" aria-hidden="true"
                                                    class="sapUiHiddenPlaceholder"></span><span
                                                    id="sap-ui-invisible-__row640"
                                                    data-sap-ui="sap-ui-invisible-__row640" aria-hidden="true"
                                                    class="sapUiHiddenPlaceholder"></span></div>
                                    </div>
                                </div>
                            </form>
                            <form class="step-form" id="step7" style="display: none;">
                                <!--- step 7 -------->
                                <!--<input type="hidden" id="incorporation_cert1">-->
                                <!--<input type="hidden" id="file-upload-11">-->


                                <div id="accordionContainer">
                                    <button class="accordion active">Step 1 : Entity Details</button>
                                    <div class="panel">
                                        <div id="__layout46" data-sap-ui="__layout46"
                                             class="sapUiBlockLayout sapUiBlockLayoutSizeL">

                                            <div class="col-md-12">
                                                <label class="labelm">Entity Type</label>
                                                <p class="cookie-value entity_type1" id="entity_type1"> <?php if (isset($_COOKIE['entity_type1'])) echo $_COOKIE['entity_type1']; ?></p>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="labelm">Description (Others)</label>
                                                <p id="entity_desc1" class="cookie-value entity_desc1">  <?php 
                                                        if (isset($_COOKIE['entity_type1'])){ echo $_COOKIE['entity_desc1']; } ?></p>
                                            </div>

                                            <div class="col-md-12" style="display: flex;">
                                                <div class="col-md-6">
                                                    <label class="labelm">First Name in English</label>
                                                    <p id="eng_fname1" class="cookie-value eng_fname1"><?php if (isset($_COOKIE['eng_fname'])) echo $_COOKIE['eng_fname']; ?></p>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="labelm">Last Name in English</label>
                                                    <p id="eng_lname1" class="cookie-value eng_lname1"><?php if (isset($_COOKIE['eng_lname'])) echo $_COOKIE['eng_lname']; ?></p>
                                                </div>
                                            </div>
                                            <div class="col-md-12" style="display: flex;">
                                                <div class="col-md-6">
                                                    <label class="labelm">First Name in Arabic</label>
                                                    <p id="ar_fname1" class="cookie-value ar_fname1"><?php if (isset($_COOKIE['ar_fname'])) echo $_COOKIE['ar_fname']; ?></p>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="labelm">Last Name in Arabic</label>
                                                    <p id="ar_lname1" class="cookie-value ar_lname1"><?php if (isset($_COOKIE['ar_lname'])) echo $_COOKIE['ar_lname']; ?></p>
                                                </div>
                                            </div>
                                            <div class="col-md-12" style="display: flex;">
                                                <div class="col-md-6">
                                                    <label class="labelm">Date of birth</label>
                                                    <p id="entity_dob1" class="cookie-value entity_dob1"><?php if (isset($_COOKIE['entity_dob'])) echo $_COOKIE['entity_dob']; ?></p>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="labelm">Are you a Resident of UAE?</label>
                                                    <p id="uae_resident1" class="cookie-value uae_resident1"><?php if (isset($_COOKIE['uae_resident'])) echo $_COOKIE['uae_resident']; ?></p>
                                                </div>
                                            </div>
                                            <div class="col-md-12" style="display: flex;">
                                                <div class="col-md-6">
                                                    <label class="labelm"> Country of Nationality</label>
                                                    <p id="nationality_country1" class="cookie-value nationality_country1"><?php if (isset($_COOKIE['nationality_country'])) echo $_COOKIE['nationality_country']; ?></p>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="labelm">Emirates ID Number</label>
                                                    <p id="em_id1" class="cookie-value em_id1"><?php if (isset($_COOKIE['em_id'])) echo $_COOKIE['em_id']; ?></p>
                                                </div>
                                            </div>
                                            <div class="col-md-12" style="display: flex;">
                                                <div class="col-md-6">
                                                    <label class="labelm"> ID Expiry Date</label>
                                                    <p id="em_id_exp1" class="cookie-value em_id_exp1"><?php if (isset($_COOKIE['em_id_exp'])) echo $_COOKIE['em_id_exp']; ?></p>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="labelm">Passport Number</label>
                                                    <p id="pass_no1" class="cookie-value pass_no1"><?php if (isset($_COOKIE['pass_no'])) echo $_COOKIE['pass_no']; ?></p>
                                                </div>
                                            </div>
                                            <div class="col-md-12" style="display: flex;">
                                                <div class="col-md-6">
                                                    <label class="labelm"> Passport Expiry Date</label>
                                                    <p id="pass_exp_date1" class="cookie-value pass_exp_date1"><?php if (isset($_COOKIE['pass_exp_date'])) echo $_COOKIE['pass_exp_date']; ?></p>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    <button class="accordion">Step 2 : Identification Details</button>
                                    <div class="panel">
                                        <div class="sapUiBlockLayout sapUiBlockLayoutSizeL">
                                            <div class="col-md-12" style="display:inline-block;">
                                                <div class="col-md-6" style="float:left;">
                                                    <label class="labelm">Trade Name in English</label>
                                                    <p id="tn_name_en1" class="cookie-value tn_name_en1"></p>
                                                </div>
                                                <div class="col-md-6" style="float:left;">
                                                    <label class="labelm">Trade Name in Arabic</label>
                                                    <p id="tn_name_ar1" class="cookie-value ln_arabic1"></p>
                                                </div>
                                            </div>
                                            <!--<div class="col-md-12">-->
                                            <!--    <label class="labelm">Do you have a Trade License in the-->
                                            <!--        UAE?</label><br>-->
                                               
                                            <!--    <p id="edoc1" class="cookie-value ln_arabic1"></p>-->
                                                 
                                            <!--</div>-->
                                            <br>
                                            <div class="col-md-12" style="display:inline-block;">
                                                <div class="col-md-6" style="float:left;">
                                                    <label class="labelm">Trade License Issuing Authority</label>
                                                    <p id="tl_issue_authority1" class="cookie-value tl_issue_authority1"><?php if (isset($_COOKIE['tl_issue_authority'])) echo $_COOKIE['tl_issue_authority']; ?></p>
                                                </div>
                                                <div class="col-md-6" style="float:left;">
                                                    <label class="labelm">Trade License Number</label>
                                                    <p id="t_l_name1" class="cookie-value t_l_name1"><?php if (isset($_COOKIE['t_l_name'])) echo $_COOKIE['t_l_name']; ?></p>
                                                </div>
                                            </div>
                                            <div class="col-md-12" style="display:inline-block;">
                                                <div class="col-md-6" style="float:left;">
                                                    <label class="labelm">License Issue Date</label>
                                                    <p id="l_i_date1" class="cookie-value l_i_date1"><?php if (isset($_COOKIE['l_i_date'])) echo $_COOKIE['l_i_date']; ?></p>
                                                </div>
                                                <div class="col-md-6" style="float:left;">
                                                    <label class="labelm">License Expiry Date</label>
                                                    <p id="l_e_date1" class="cookie-value l_e_date1"><?php if (isset($_COOKIE['l_e_date'])) echo $_COOKIE['l_e_date']; ?></p>
                                                </div>
                                            </div>
                                            
                                            <br>
                                            <h5>Activities</h5><br>
                                            <div class="row">

                                                <table class="table">
                                                    <thead class="thead-light">
                                                    <tr class="table-active">
                                                        <th scope="col">Sl No</th>
                                                        <th scope="col">Industry</th>
                                                        <th scope="col">Main Group</th>
                                                        <th scope="col">Subgroup</th>
                                                        <th scope="col">Business Activities</th>
                                                        <th scope="col">Activity Code</th>
                                                        <th scope="col"><span id="actnBtn">Action</span></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr id="modal-tbl-1">

                                                    </tr>

                                                    </tbody>
                                                </table>
                                            </div>
 
                                        </div>
                                    </div>


                                    <button class="accordion">Step 3 : Eligibility Details</button>
                                    <div class="panel">

                                        <div class="col-md-12" style="display: flex;">
                                            <div class="col-md-6">
                                                <label class="labelm">Date on which the threshold limit for the taxable
                                                    supplies has exceeded/expected to be exceeded</label>
                                                <p id="tax_date_ex1" class="cookie-value tax_date_ex1"> </p>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="labelm">Reason for change in Obligation Date</label><br>
                                                <p id="obreason1" class="cookie-value reason1"> </p>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="display: flex;">
                                            <div class="col-md-6">
                                                <label class="labelm">On what date would you like to be registered
                                                    (prior to the standard effective date as per the law)
                                                </label>
                                                <p id="tax_datreg_datee_ex1" class="cookie-value tax_datreg_datee_ex1"> </p>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="labelm">Reason for change in Effective date</label><br>
                                                <p id="effe_reason1" class="cookie-value _VTEC_A_03_EFF_CHG_REASON_input1"> </p>
                                            </div>
                                        </div>
                                        <!--<div class="col-md-12" style="display: flex;">-->
                                        <!--    <div class="col-md-6">-->
                                        <!--        <label class="labelm">Do you expect the VAT on your expenses to-->
                                        <!--            regularly exceed the VAT in your taxable supplies?</label> <br>-->
                                                    
                                        <!--            <p id="tax_supplies1"></p>-->

                                        <!--    </div>-->
                                        <!--    <div class="col-md-6">-->
                                        <!--        <label class="labelm">Do you expect to make exempt supplies?</label><br>-->
                                        <!--       <p id="exem_supplies1"></p>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                    </div>

                                    <button class="accordion">Step 4 : Contact Details</button>
                                    <div class="panel">

                                        <div class="col-md-12" style="display: flex;">
                                            <div class="col-md-6">
                                                <label class="labelm">Country</label><br>
                                                <p>United Arab Emirates</p>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="labelm">Building Name & Number</label><br>
                                                <p id="_ADDR_A_04_ADD_BLDG_NM_input-inner1" class="cookie-value _ADDR_A_04_ADD_BLDG_NM_input-inner1"></p>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="display: flex;">
                                            <div class="col-md-6">
                                                <label class="labelm">Street</label>
                                                <p id="_ADDR_A_04_ADD_STREET_input-inner1" class="cookie-value _ADDR_A_04_ADD_STREET_input-inner1"></p>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="labelm">Area</label>
                                                <p id="_ADDR_A_04_ADD_AREA_input-inner1" class="cookie-value _ADDR_A_04_ADD_AREA_input-inner1"> </p>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="display: flex;">
                                            <div class="col-md-6">
                                                <label class="labelm">City</label>
                                                <p id="_ADDR_A_04_ADD_CITY_input-inner1" class="cookie-value _ADDR_A_04_ADD_CITY_input-inner1"> </p>
                                            </div>
                                            <!--<div class="col-md-6">-->
                                            <!--    <label class="labelm">Emirate</label>-->
                                            <!--    <p id="_ADDR_A_04_ADD_EMIRATE_COMBO_combobox-inner1" class="cookie-value _ADDR_A_04_ADD_EMIRATE_COMBO_combobox-inner1"> </p>-->
                                            <!--</div>-->
                                        </div>
                                        <div class="col-md-12" style="display: flex;">
                                            <div class="col-md-3">
                                                <label class="labelm">Country Code</label>
                                                <p id="_ADDR_C_COUNTRY_combobox-inner1" class="cookie-value _ADDR_C_COUNTRY_combobox-inner1"> </p>
                                            </div>
                                            <div class="col-md-3">
                                                <label class="labelm">Landline Number</label>
                                                <p id="_ADDR_C_PHON_input-inner1" class="cookie-value _ADDR_C_PHON_input-inner1"> </p>
                                            </div>
                                            <div class="col-md-3">
                                                <label class="labelm">Country Code</label>
                                                <p id="_ADDR_A_04_ADD_MOB_CTRY_COMBO_combobox-inner1" class="cookie-value _ADDR_A_04_ADD_MOB_CTRY_COMBO_combobox-inner1"> </p>
                                            </div>
                                            <div class="col-md-3">
                                                <label class="labelm">Mobile Number</label>
                                                <p id="_ADDR_A_04_ADD_MOB_NUM_input-inner1" class="cookie-value _ADDR_A_04_ADD_MOB_NUM_input-inner1"></p>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="display: flex;">
                                            <div class="col-md-6">
                                                <label class="labelm">Email ID</label>
                                                <p id="_ADDR_A_04_ADD_EMAIL_input-inner1" class="cookie-value _ADDR_A_04_ADD_EMAIL_input-inner1"><?php if (isset($_COOKIE['_ADDR_A_04_ADD_EMAIL_input-inner'])) echo $_COOKIE['_ADDR_A_04_ADD_EMAIL_input-inner']; ?></p>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="labelm">P.O. Box</label>
                                                <p id="_ADDR_A_04_ADD_POBOX_input-inner1" class="cookie-value _ADDR_A_04_ADD_POBOX_input-inner1"><?php if (isset($_COOKIE['_ADDR_A_04_ADD_POBOX_input-inner'])) echo $_COOKIE['_ADDR_A_04_ADD_POBOX_input-inner']; ?></p>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="accordion">Step 5 : Bank Details</button>
                                    <div class="panel">
                                        <div class="col-md-12" style="display: flex;">
                                            <div class="col-md-6">
                                                <label class="labelm">Country</label>
                                                <p id="_BANK_A_06_COUNTRY_COMBO_combobox-inner1" class="cookie-value _BANK_A_06_COUNTRY_COMBO_combobox-inner1"> <?php if (isset($_COOKIE['_BANK_A_06_COUNTRY_COMBO_combobox-inner'])) echo $_COOKIE['_BANK_A_06_COUNTRY_COMBO_combobox-inner']; ?></p>
                                            </div>

                                        </div>
                                        <div class="col-md-12" style="display: flex;">
                                            <div class="col-md-6">
                                                <label class="labelm">Bank Name</label>
                                                <p id="_BANK_A_06_BANK_NAME_COMBO_input-inner1" class="cookie-value _BANK_A_06_BANK_NAME_COMBO_input-inner1"> <?php if (isset($_COOKIE['_BANK_A_06_BANK_NAME_COMBO_input-inner'])) echo $_COOKIE['_BANK_A_06_BANK_NAME_COMBO_input-inner']; ?></p>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="labelm">Bank Branch</label>
                                                <p id="_BANK_A_06_BANK_BRANCH_COMBO_combobox-inner1" class="cookie-value _BANK_A_06_BANK_BRANCH_COMBO_combobox-inner1"> <?php if (isset($_COOKIE['_BANK_A_06_BANK_BRANCH_COMBO_combobox-inner'])) echo $_COOKIE['_BANK_A_06_BANK_BRANCH_COMBO_combobox-inner']; ?></p>
                                            </div>

                                        </div>
                                        <div class="col-md-12" style="display: flex;">
                                            <div class="col-md-6">
                                                <label class="labelm">Account Holder's Name</label>
                                                <p id="_BANK_A_06_ACC_HOLDER_NM_input-inner1" class="cookie-value _BANK_A_06_ACC_HOLDER_NM_input-inner1"> <?php if (isset($_COOKIE['_BANK_A_06_ACC_HOLDER_NM_input-inner'])) echo $_COOKIE['_BANK_A_06_ACC_HOLDER_NM_input-inner']; ?></p>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="labelm">Account Number</label>
                                                <p id="_BANK_A_06_ACC_NUMBER_input-inner1" class="cookie-value _BANK_A_06_ACC_NUMBER_input-inner1"> <?php if (isset($_COOKIE['_BANK_A_06_ACC_NUMBER_input-inner'])) echo $_COOKIE['_BANK_A_06_ACC_NUMBER_input-inner']; ?></p>
                                            </div>

                                        </div>
                                        <div class="col-md-12" style="display: flex;">
                                            <div class="col-md-6">
                                                <label class="labelm">Eligible Currency for Refund</label>
                                                <p id="_BANK_A_06_CURR_COMBO_combobox-inner1" class="cookie-value _BANK_A_06_CURR_COMBO_combobox-inner1"> <?php if (isset($_COOKIE['_BANK_A_06_CURR_COMBO_combobox-inner'])) echo $_COOKIE['_BANK_A_06_CURR_COMBO_combobox-inner']; ?></p>
                                            </div>

                                        </div>
                                    </div>
                                    <button class="accordion">Step 6 : Additional Details</button>
                                    <div class="panel">
                                        <div id="__layout54" data-sap-ui="__layout54"
                                             class="sapUiBlockLayout sapUiBlockLayoutSizeL">
                                            <div id="__row567" data-sap-ui="__row567"
                                                 class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow sapUiTinyMarginTop sapUiBlockLayoutBackgroundColorSet1">
                                                <div style="display: flex;">
                                                    <div id="__cell821" data-sap-ui="__cell821"
                                                         style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                                                         class="sapUiBlockLayoutCell sapUiBlockLayoutOddCell sapUiBlockHorizontalCell">
                                                        <div class="sapUiBlockCellContent">
                                                            <div id="__hbox753" data-sap-ui="__hbox753"
                                                                 class="sapMFlexBox sapMHBox sapMFlexBoxJustifySpaceBetween sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent">
                                                                <div id="__data1933"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                            <span id="__label1546" data-sap-ui="__label1546"
                                  class="sapMLabel sapUiSelectable sapMLabelMaxWidth sapMLabelNoText"
                                  style="text-align: left;"><span id="__label1546-text" class="sapMLabelTextWrapper"><bdi
                                            id="__label1546-bdi"></bdi></span><span
                                        class="sapMLabelColonAndRequired"></span></span></div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="A_07_IMPORT1" data-sap-ui="A_07_IMPORT1"
                                                 class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow sapUiBlockLayoutBackgroundColorSet2">
                                                <div style="display: flex;">
                                                    <div id="__cell822" data-sap-ui="__cell822"
                                                         style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                                                         class="sapUiBlockLayoutCell zRadioBtnCell sapUiBlockLayoutOddCell sapUiBlockHorizontalCell">
                                                        <div class="sapUiBlockCellContent">
                                                            <div id="__vbox744" data-sap-ui="__vbox744"
                                                                 class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent">
                                                                <div id="__data1935"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                            <span id="__label1547" data-sap-ui="__label1547"
                                  aria-label="Do you intend to import goods or services?"
                                  class="sapMLabel sapUiSelectable sapMLabelMaxWidth" style="text-align: left;"><span
                                        id="__label1547-text" class="sapMLabelTextWrapper"><bdi id="__label1547-bdi">Do you intend to import goods or services?</bdi></span><span
                                        class="sapMLabelColonAndRequired"></span></span></div>
                                                               <p id="a12351" name="a12351" style="margin-left:20px;"> </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span id="sap-ui-invisible-__cell823"
                                                          data-sap-ui="sap-ui-invisible-__cell823" aria-hidden="true"
                                                          class="sapUiHiddenPlaceholder"></span></div>
                                            </div>
                                            <div id="A_07_EXPORT1" data-sap-ui="A_07_EXPORT1"
                                                 class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow sapUiBlockLayoutBackgroundColorSet3">
                                                <div style="display: flex;">
                                                    <div id="__cell824" data-sap-ui="__cell824"
                                                         style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                                                         class="sapUiBlockLayoutCell zRadioBtnCell sapUiBlockLayoutOddCell sapUiBlockHorizontalCell">
                                                        <div class="sapUiBlockCellContent">
                                                            <div id="__vbox746" data-sap-ui="__vbox746"
                                                                 class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent">
                                                                <div id="__data1938"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                            <span id="__label1549" data-sap-ui="__label1549"
                                  aria-label="Do you intend to export goods or services?"
                                  class="sapMLabel sapUiSelectable sapMLabelMaxWidth" style="text-align: left;"><span
                                        id="__label1549-text" class="sapMLabelTextWrapper"><bdi id="__label1549-bdi">Do you intend to export goods or services?</bdi></span><span
                                        class="sapMLabelColonAndRequired"></span></span></div>
                                                                
                                                                <p id="a12341" name="1" style="margin-left:20px;"></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span id="sap-ui-invisible-__cell825"
                                                          data-sap-ui="sap-ui-invisible-__cell825" aria-hidden="true"
                                                          class="sapUiHiddenPlaceholder"></span></div>
                                            </div>
                                            <span id="sap-ui-invisible-__row568" data-sap-ui="sap-ui-invisible-__row568"
                                                  aria-hidden="true"
                                                  class="sapUiHiddenPlaceholder"></span>
                                            <div id="__row569" data-sap-ui="__row569"
                                                 class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow sapUiBlockLayoutBackgroundColorSet1">
                                                <div style="display: flex;"><span id="sap-ui-invisible-A_07_ET_GCC1"
                                                                                  data-sap-ui="sap-ui-invisible-A_07_ET_GCC1"
                                                                                  aria-hidden="true"
                                                                                  class="sapUiHiddenPlaceholder"></span>
                                                </div>
                                            </div>
                                            <div id="__row570" data-sap-ui="__row570"
                                                 class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow sapUiBlockLayoutBackgroundColorSet2">
                                                <div style="display: flex;"><span id="sap-ui-invisible-__cell827"
                                                                                  data-sap-ui="sap-ui-invisible-__cell827"
                                                                                  aria-hidden="true"
                                                                                  class="sapUiHiddenPlaceholder"></span>
                                                </div>
                                            </div>
                                            <div id="A_07_CUST_NUMBER_RDB_Summ" data-sap-ui="A_07_CUST_NUMBER_RDB_Summ"
                                                 class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow sapUiBlockLayoutBackgroundColorSet3">
                                                <div style="display: flex;">
                                                    <div id="__cell828" data-sap-ui="__cell828"
                                                         style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                                                         class="sapUiBlockLayoutCell zRadioBtnCell sapUiBlockLayoutOddCell sapUiBlockHorizontalCell">
                                                        <div class="sapUiBlockCellContent">
                                                            <div id="__vbox749" data-sap-ui="__vbox749"
                                                                 class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent">
                                                                <div id="__data1941"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                            <span id="__label1558" data-sap-ui="__label1558"
                                  aria-label="Do you have a customs registration number?"
                                  class="sapMLabel sapUiSelectable sapMLabelMaxWidth" style="text-align: left;"><span
                                        id="__label1558-text" class="sapMLabelTextWrapper"><bdi id="__label1558-bdi">Do you have a customs registration number?</bdi></span><span
                                        class="sapMLabelColonAndRequired"></span></span></div>
                                                               
                                                                <p id="b12351" name="b12351" style="margin:20px;"></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <span id="sap-ui-invisible-__row571" data-sap-ui="sap-ui-invisible-__row571"
                                                  aria-hidden="true"
                                                  class="sapUiHiddenPlaceholder"></span></div>
                                    </div>

                                </div>
                                <br>
                                <hr>
                                <br>

                                <p style="padding-top:25px;">Declaration</span></p>
                                <div id="__row577" data-sap-ui="__row577"
                                     class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow sapUiMediumMarginTop sapUiBlockLayoutBackgroundColorSet2">
                                    <div style="display: flex;">
                                        <div id="__cell835" data-sap-ui="__cell835"
                                             style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                                             class="sapUiBlockLayoutCell sapUiBlockLayoutOddCell sapUiBlockHorizontalCell">
                                            <div class="sapUiBlockCellContent">
                                                <div id="__vbox751" data-sap-ui="__vbox751"
                                                     class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent">
                                                    <p>First Name in English</p>
                                                    <input type="text" id="eng_fname2"
                                                           value=""
                                                           disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="__cell836" data-sap-ui="__cell836"
                                             style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                                             class="sapUiBlockLayoutCell sapUiBlockLayoutEvenCell sapUiBlockHorizontalCell">
                                            <div class="sapUiBlockCellContent">
                                                <div id="__vbox752" data-sap-ui="__vbox752"
                                                     class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent">
                                                    <p>First Name in Arabic</p>
                                                    <input type="text"   id="ar_fname2" 
                                                           value="<?php if (isset($_COOKIE['ar_fname'])) echo $_COOKIE['ar_fname']; ?>"
                                                           disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="__row578" data-sap-ui="__row578"
                                     class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow sapUiBlockLayoutBackgroundColorSet3">
                                    <div style="display: flex;">
                                        <div id="__cell837" data-sap-ui="__cell837"
                                             style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                                             class="sapUiBlockLayoutCell sapUiBlockLayoutOddCell sapUiBlockHorizontalCell">
                                            <div class="sapUiBlockCellContent">
                                                <div id="__vbox753" data-sap-ui="__vbox753"
                                                     class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent">
                                                    <p>Last Name in English</p>
                                                    <input type="text"  id="eng_lname2"
                                                           value=""
                                                           disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="__cell838" data-sap-ui="__cell838"
                                             style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                                             class="sapUiBlockLayoutCell sapUiBlockLayoutEvenCell sapUiBlockHorizontalCell">
                                            <div class="sapUiBlockCellContent">
                                                <div id="__vbox754" data-sap-ui="__vbox754"
                                                     class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent">
                                                    <p>Last Name in Arabic</p>
                                                    <input type="text"  id="ar_lname2"
                                                           value=""
                                                           disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="__row579" data-sap-ui="__row579"
                                     class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow sapUiBlockLayoutBackgroundColorSet4">
                                    <div style="display: flex;">
                                        <div id="__cell839" data-sap-ui="__cell839"
                                             style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                                             class="sapUiBlockLayoutCell sapUiBlockLayoutOddCell sapUiBlockHorizontalCell">
                                            <div class="sapUiBlockCellContent">
                                                <div id="__hbox763" data-sap-ui="__hbox763"
                                                     class="sapMFlexBox sapMHBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent">
                                                    <div id="__vbox755" data-sap-ui="__vbox755"
                                                         class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent sapMFlexItem"
                                                         style="width: 50%;">
                                                        <p>Country Code</p>
                                                        <div id="__data1825"
                                                             class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                             style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                            <div id="_AUSG_C_08_DEC_MOB_EXT_COMBO_input"
                                                                 data-sap-ui="_AUSG_C_08_DEC_MOB_EXT_COMBO_input"
                                                                 class="sapMInputBaseNoWidth sapMInputBase sapMInputBaseHeightMargin sapMComboBoxBase sapMComboBoxBaseDisabled sapMComboBox sapMInputBaseDisabled sapMInputBaseHasEndIcons"
                                                                 style="max-width: 100%;">
                                                                <div id="_AUSG_C_08_DEC_MOB_EXT_COMBO_input-content"
                                                                     class="sapMInputBaseContentWrapper sapMInputBaseDisabledWrapper"
                                                                     style="width: 100%;">
                                                                    <input id="_AUSG_C_08_DEC_MOB_EXT_COMBO_input-inner"
                                                                           disabled="disabled"
                                                                           value="+971 ( United Arab Emirates )"
                                                                           role="combobox"
                                                                           aria-haspopup="listbox"
                                                                           aria-autocomplete="both"
                                                                           aria-expanded="false" autocomplete="off"
                                                                           autocorrect="off" autocapitalize="off"
                                                                           type="text"
                                                                           class="sapMInputBaseInner sapMComboBoxInner"
                                                                           fdprocessedid="y0akhg">
                                                                    <div tabindex="-1"
                                                                         class="sapMInputBaseIconContainer"><span
                                                                                id="_AUSG_C_08_DEC_MOB_EXT_COMBO_input-arrow"
                                                                                data-sap-ui="_AUSG_C_08_DEC_MOB_EXT_COMBO_input-arrow"
                                                                                role="button"
                                                                                aria-label="Select Options"
                                                                                data-sap-ui-icon-content=""
                                                                                class="sapUiIcon sapUiIconMirrorInRTL sapUiIconPointer sapMInputBaseIcon"
                                                                                style="font-family: 'SAP\2dicons';"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="__vbox756" data-sap-ui="__vbox756"
                                                         class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent sapUiMediumMarginBegin sapMFlexItem"
                                                         style="width: 50%;">
                                                        <p>Mobile Number</p>
                                                        <div id="__data1827"
                                                             class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                             style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                            <div id="_AUSG_C_08_DEC_MOB_NUMBER_input"
                                                                 data-sap-ui="_AUSG_C_08_DEC_MOB_NUMBER_input"
                                                                 class="sapMInputBase sapMInputBaseHeightMargin sapMInput sapMInputBaseDisabled"
                                                                 style="width: 100%;">
                                                                <div id="_AUSG_C_08_DEC_MOB_NUMBER_input-content"
                                                                     class="sapMInputBaseContentWrapper sapMInputBaseDisabledWrapper"
                                                                     style="width: 100%;"><input
                                                                            id="_ADDR_A_04_ADD_MOB_NUM_input-inner2"
                                                                            disabled="disabled" 
                                                                            type="text"  
                                                                            autocomplete="off" 
                                                                            class="sapMInputBaseInner"
                                                                            fdprocessedid="7axnov"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="__cell840" data-sap-ui="__cell840"
                                             style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                                             class="sapUiBlockLayoutCell sapUiBlockLayoutEvenCell sapUiBlockHorizontalCell">
                                            <div class="sapUiBlockCellContent">
                                                <div id="__vbox757" data-sap-ui="__vbox757"
                                                     class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent">
                                                    <div id="__data1828"
                                                         class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                         style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                        <span id="__label1573" data-sap-ui="__label1573" aria-label="Email"
                              class="sapMLabel sapUiSelectable sapMLabelMaxWidth" style="text-align: left;"><span
                                    id="__label1573-text" class="sapMLabelTextWrapper"><bdi
                                        id="__label1573-bdi">Email</bdi></span><span
                                    class="sapMLabelColonAndRequired"></span></span></div>
                                                    <div id="__data1829"
                                                         class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                         style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                        <div id="_AUSG_C_08_DEC_EMAIL_input"
                                                             data-sap-ui="_AUSG_C_08_DEC_EMAIL_input"
                                                             class="sapMInputBase sapMInputBaseHeightMargin sapMInput sapMInputBaseDisabled"
                                                             style="width: 100%;">
                                                            <div id="_AUSG_C_08_DEC_EMAIL_input-content"
                                                                 class="sapMInputBaseContentWrapper sapMInputBaseDisabledWrapper"
                                                                 style="width: 100%;">
                                                                <input id="_ADDR_A_04_ADD_EMAIL_input-inner2"
                                                                       disabled="disabled"  
                                                                       type="text" 
                                                                       autocomplete="off"
                                                                       class="sapMInputBaseInner"
                                                                       fdprocessedid="a1phd2"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="__row580" data-sap-ui="__row580"
                                     class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow zBlockLayoutRow sapUiBlockLayoutBackgroundColorSet1">
                                    <div style="display: flex;">
                                        <div id="__cell841" data-sap-ui="__cell841"
                                             style="-webkit-flex: 1; -ms-flex: 1; flex: 1;"
                                             class="sapUiBlockLayoutCell sapUiBlockLayoutOddCell sapUiBlockHorizontalCell">
                                            <div class="sapUiBlockCellContent">
                                                <div id="__vbox758" data-sap-ui="__vbox758"
                                                     class="sapMFlexBox sapMVBox sapMFlexBoxJustifyStart sapMFlexBoxAlignItemsStretch sapMFlexBoxWrapNoWrap sapMFlexBoxAlignContentStretch sapMFlexBoxBGTransparent">
                                                    <div id="__data1830"
                                                         class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                         style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                        <span id="__label1574" data-sap-ui="__label1574" aria-label="Submission Date"
                              class="sapMLabel sapUiSelectable sapMLabelMaxWidth" style="text-align: left;"><span
                                    id="__label1574-text" class="sapMLabelTextWrapper"><bdi id="__label1574-bdi">Submission Date</bdi></span><span
                                    class="sapMLabelColonAndRequired"></span></span></div>
                                                    <div id="__data1831"
                                                         class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                         style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                        <div id="_AUSG_C_08_SUBMISSION_DT_date"
                                                             data-sap-ui="_AUSG_C_08_SUBMISSION_DT_date"
                                                             class="sapMInputBaseNoWidth sapMInputBase sapMInputBaseHeightMargin sapMInputBaseDisabled sapMInputBaseHasEndIcons"
                                                             style="width: 100%;">
                                                            <div id="_AUSG_C_08_SUBMISSION_DT_date-content"
                                                                 class="sapMInputBaseContentWrapper sapMInputBaseDisabledWrapper"
                                                                 style="width: 100%;">
                                                                <input id="_AUSG_C_08_SUBMISSION_DT_date-inner"
                                                                       placeholder="DD/MM/YYYY"
                                                                       disabled="disabled"
                                                                       value="<?php echo date("d/m/Y"); ?>"
                                                                       role="combobox"
                                                                       aria-describedby="_AUSG_C_08_SUBMISSION_DT_date-describedby"
                                                                       aria-autocomplete="none" aria-haspopup="true"
                                                                       aria-expanded="false" type="text"
                                                                       class="sapMInputBaseInner"
                                                                       fdprocessedid="v65eoe">
                                                                <div tabindex="-1"
                                                                     class="sapMInputBaseIconContainer"><span
                                                                            id="_AUSG_C_08_SUBMISSION_DT_date-icon"
                                                                            data-sap-ui="_AUSG_C_08_SUBMISSION_DT_date-icon"
                                                                            role="presentation"
                                                                            aria-hidden="true"
                                                                            data-sap-ui-icon-content=""
                                                                            title="Open Picker"
                                                                            class="sapUiIcon sapUiIconMirrorInRTL sapUiIconPointer sapMInputBaseIcon"
                                                                            style="font-family: 'SAP\2dicons';"></span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="__row581" data-sap-ui="__row581"
                                         class="sapUiBlockLayoutRow sapUiBlockHorizontalCellsRow sapUiBlockLayoutBackgroundColorSet2">
                                        <div style="display: flex;padding-bottom:20px;">
                                            <input type="checkbox" name="decla" id="decla"
                                                   value="I declare that all information provided is true , accurate and complete to the best of my knowledge and belief">I
                                            declare that all information provided is true , accurate and complete to the
                                            best of my knowledge and belief
                                        </div>
                                    </div>
                            </form>
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
<script>


    $(document).ready(function () {
        $(".step-form").hide(); // hide all
        $(".step-form").first().addClass("active").show(); // show the first
        
          $('input[name="ar_lname"]').on('change', function () {
        
    $('#ar_lname2').val($(this).val());
});
$('input[name="ar_fname"]').on('change', function () {
    
    $('#ar_fname2').val($(this).val());
});

$('input[name="_ADDR_A_04_ADD_MOB_NUM_input-inner"]').on('change', function () {
     
    
    $('#_ADDR_A_04_ADD_MOB_NUM_input-inner2').val($(this).val());
});
$('input[name="_ADDR_A_04_ADD_EMAIL_input-inner"]').on('change', function () {
    
    $('#_ADDR_A_04_ADD_EMAIL_input-inner2').val($(this).val());
});

$('input[name="eng_fname"]').on('change', function () {
   
    $('#eng_fname2').val($(this).val());
   var tt_name = $(this).val();
document.cookie = "username1=" + encodeURIComponent(tt_name) + "; path=/";

    
});

$('input[name="eng_lname"]').on('change', function () {
    
    $('#eng_lname2').val($(this).val());
});
       
        
        
    });
       

    function toggleDiv(show) {
        const div = document.getElementById("myDiv");
        div.style.display = show ? "block" : "none";
    }

    document.getElementById("tl_file").addEventListener("change", function (event) {
        alert(`Selected file: ${event.target.files[0] ?.name}`);
    });

    // Get the modal
    var modal = document.getElementById("myModal");
    // var partnermodal = document.getElementById("partnerModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");
    // var partnerbtn = document.getElementById("partnerBtn");
    var actnbtn = document.getElementById("actnBtn");
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    //   var partnerspan = document.getElementsByClassName("partnerclose")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function () {
        modal.style.display = "block";
    }

    actnbtn.onclick = function () {
        modal.style.display = "block";
    }
    // partnerbtn.onclick = function () {
    //     partnermodal.style.display = "block";
    // }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }
    // partnerspan.onclick = function () {
    //     partnermodal.style.display = "none";
    // }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
<script>
  const sessionData = <?php echo json_encode($_SESSION); ?>;
</script>
 
<script>
   

    $(".next").click(function () {
        

        const activeStep = $(".step-wrapper li.active");
        const activeIndex = activeStep.index(); // 0-based index
        const activeForm = $(".step-form").eq(activeIndex); // current form

         
     // Validate only current form
        // const validation = validateForm(activeForm);

        // if (!validation.isValid) {
        //     Swal.fire({
        //         icon: 'error',
        //         title: 'Required Field Missing',
        //         text: `Please fill in the required field: ${validation.firstInvalidLabel}`,
        //     });
        //     return;
        // }

        if (activeForm == "1") {

            if ($("#modal-tbl").is(':empty')) {
                Swal.fire({
                    icon: 'error',
                    title: 'Empty Business Activity',
                    text: `Please fill business activity`,
                });
                return;
            }
        }
        
        if (activeIndex === 5) {
            
         populateSummaryStep();
        }

        // Save form data (if applicable)
        saveFormDataToCookies(activeForm);

        // If it's the last step (before submit), change button text
        if (activeStep.next("li").is(":last-child")) {
            $(".button.next span").text("Submit");
            setCookie("vat_reg_status", 1, 1);
        }

        // If it's the final step, submit
        if ($(".step-wrapper li:last-child").hasClass("active")) {
            alert("Form submitted successfully!");
           window.location.href = "<?= base_url('vat/vat-success') ?>";

            //return;
        }

        // Move to the next step
        activeStep.addClass("completed").removeClass("active").next("li").addClass("active");

        // Show next form
        $(".step-form").removeClass("active").hide();
        $(".step-form").eq(activeIndex + 1).addClass("active").fadeIn();
    });


    $(".previous").click(function () {
        const activeStep = $(".step-wrapper li.active");
        const activeForm = $(".step-form:visible");

        if ($(".step-wrapper li:first-child").hasClass("active")) {
            alert("Already on the first step");
            return;
        }

        // Move to the previous step
        activeStep.removeClass("active completed").prev("li").addClass("active");

        // Show the previous form and hide the current one
        activeForm.hide().prev(".step-form").fadeIn();
    });
    
    
  
 function populateSummaryStep() {
      
    // List of input field IDs you want to show in summary (without the '1' suffix)
    const summaryFields = ['entity_type', 'entity_desc', 'eng_fname', 'eng_lname', 'ar_fname','ar_lname','entity_dob',
    'uae_resident','nationality_country','em_id','em_id_exp','pass_no','pass_exp_date','tn_name_en','tn_name_ar','edoc','tl_issue_authority','t_l_name','l_i_date','l_e_date','obreason',
    'effe_reason','tax_supplies','exem_supplies','expense_excced_status','tax_date_ex','tax_datreg_datee_ex','_ADDR_A_04_ADD_BLDG_NM_input-inner','_ADDR_A_04_ADD_STREET_input-inner','_ADDR_A_04_ADD_AREA_input-inner',
    '_ADDR_A_04_ADD_CITY_input-inner','_ADDR_A_04_ADD_EMIRATE_COMBO_combobox-inner','_ADDR_C_COUNTRY_combobox-inner','_ADDR_C_PHON_input-inner','_ADDR_A_04_ADD_MOB_CTRY_COMBO_combobox-inner',
    '_ADDR_A_04_ADD_MOB_NUM_input-inner','_ADDR_A_04_ADD_EMAIL_input-inner','_ADDR_A_04_ADD_POBOX_input-inner','nationality','_BANK_A_06_BANK_NAME_COMBO_input-inner',
    '_BANK_A_06_BANK_BRANCH_COMBO_combobox-inner','_BANK_A_06_ACC_HOLDER_NM_input-inner','_BANK_A_06_ACC_NUMBER_input-inner','_BANK_A_06_CURR_COMBO_combobox-inner','_ADDR_A_04_ADD_MOB_NUM_input-inner','_AUSG_C_08_DEC_EMAIL_input-inner']; // example

    // List of radio input names (not IDs)
    const radioFields = ['uae_resident','edoc','b1235','a1235','a1234'];
    //const radioFields = ['b1235'];

    // Process regular inputs
    summaryFields.forEach(function(id) {
        const field = document.getElementById(id);
        const summaryElement = document.getElementById(id + '1');

        if (!field || !summaryElement) return;

        let value = '';

        if (field.type === 'file') {
            value = field.files.length > 0 ? field.files[0].name : 'No file selected';
        } else {
            value = field.value;
        }

        summaryElement.textContent = value;
    });

    // Process radio inputs
    radioFields.forEach(function(name) {
        const selected = document.querySelector('input[name="' + name + '"]:checked');
        
        const summaryElement = document.getElementById(name + '1');
        
        if (summaryElement) {
             
            summaryElement.textContent = selected.value;
        }
//         const selectedGender = document.querySelector('input[name="gender"]:checked');

// if (selectedGender) {
//     console.log("Selected gender is:", selectedGender.value);
// } else {
//     console.log("No option selected");
// }
        
        
    });
    
  
}
 
    function validateForm(formElement) {
        let isValid = true;
        let firstInvalid = null;
        let firstInvalidLabel = '';

        formElement.find(".required-field").each(function () {
            const $input = $(this);
            if (!$input.val().trim()) {
                $input.css("border", "2px solid red");

                if (!firstInvalid) {
                    firstInvalid = $input;
                    firstInvalidLabel = $input.data("label") || $input.attr("name") || $input.attr("id") || "This field";
                }

                isValid = false;
            } else {
                $input.css("border", "");
            }
        });

        return {
            isValid,
            firstInvalidLabel
        };
    }


    function saveFormDataToCookies(formElement) {
        formElement.find(":input").each(function () {
            const id = $(this).attr("id");
            if (id) {
                if ($(this).attr("type") === "file") {
                    const files = $(this)[0].files;
                    if (files.length > 0) {
                        setCookie(id, files[0].name, 1); // Save file name
                    }
                } else {
                    setCookie(id, $(this).val(), 1); // Save individual field value
                }
            }
        });
    }

    function loadFormDataFromCookies(formElement) {
        formElement.find(":input").each(function () {
            const id = $(this).attr("id");
            if (id) {
                const value = getCookie(id);
                if (value !== null) {
                    if ($(this).attr("type") === "file") {
                        $(this).after(`<span class='file-info'>${value}</span>`);
                    } else {
                        $(this).val(value);
                    }
                }
            }
        });
    }

    function setCookie(name, value, days) {
        const expires = new Date(Date.now() + days * 864e5).toUTCString();
        document.cookie = `${encodeURIComponent(name)}=${encodeURIComponent(value)}; expires=${expires}; path=/`;
    }

    function getCookie(name) {
        const cookies = document.cookie.split("; ").reduce((acc, cookie) => {
            const [key, val] = cookie.split("=");
            acc[decodeURIComponent(key)] = decodeURIComponent(val);
            return acc;
        }, {});

        return cookies[name] || null;
    }


    // Load data when the forms are initially rendered
    $(".step-form").each(function () {
       // loadFormDataFromCookies($(this));
    });


    function populateAccordion() {
        const accordion = $("#dataAccordion"); // Assume you have an accordion element

        $(".step-form").each(function () {
            const stepKey = $(this).attr("id");

            const formData = JSON.parse(getCookie(stepKey) || "{}");

            if (Object.keys(formData).length > 0) {
                // Create accordion section for each form
                const title = `<h3>${stepKey}</h3>`;
                let content = `<div><ul>`;

                // Populate form fields inside the accordion section
                for (const [id, value] of Object.entries(formData)) {
                    content += `<li><strong>${id}:</strong> ${value || "No Value"}</li>`;
                }

                content += `</ul></div>`;

                // Append to accordion
                $("#accordian_" + stepKey).html(content);

                accordion.append(title + content);
            }
        });

        // Initialize the accordion (if using jQuery UI)
        accordion.accordion();
    }

    function saveBusiness() {
        var b_industry = $('#b_industry').val();
        var main_corp = $('#main_corp').val();
        var sub_group = $('#sub_group').val();
        var b_activity = $('#b_activity').val();
        var act_code = $('#act_code').val();
        var primary_activity = $('#primary_activity').val();

        setCookie(b_industry, b_industry, 1);
        setCookie(main_corp, main_corp, 1);
        setCookie(sub_group, sub_group, 1);
        setCookie(b_activity, b_activity, 1);
        setCookie(act_code, act_code, 1);
        setCookie(primary_activity, primary_activity, 1);

        var text1 = '<td>1</td> <td>' + b_industry + '</td><td>' + main_corp + '</td><td>' + sub_group + '</td><td>' + b_activity + '</td><td>' + act_code + '</td>';

        $('#modal-tbl').html(text1);
        $('#modal-tbl-1').html(text1);
        $('#myModal').hide();
    }
    // Call the function on page load
    //populateAccordion();
    let accordionContainer = document.getElementById('accordionContainer');

    accordionContainer.addEventListener('click', (event) => {
        event.preventDefault();
        if (event.target.classList.contains('accordion')) {
            let accordion = event.target;
            let panel = accordion.nextElementSibling;

            accordion.classList.toggle('active');

            if (panel.style.display === 'block') {
                panel.style.display = 'none';

            } else {
                panel.style.display = 'block';
            }
        }
    })


    function displayFileName(inputElement, fileNameId) {
        const fileNameDisplay = document.getElementById(fileNameId);

        if (inputElement.files.length > 0) {
            fileNameDisplay.textContent = inputElement.files[0].name; // Show file name
        } else {
            fileNameDisplay.textContent = "No file chosen"; // Reset text if no file is selected
        }

        if (fileNameId == "tax_supply" || fileNameId == "tax_exp") {
            const file = event.target.files[0]; // Get the uploaded file
            if (!file) return;

            const reader = new FileReader();
            reader.onload = function (e) {
                const data = new Uint8Array(e.target.result);
                const workbook = XLSX.read(data, {type: 'array'});
                const sheetName = workbook.SheetNames[0]; // Get the first sheet
                const sheet = workbook.Sheets[sheetName];
                const jsonData = XLSX.utils.sheet_to_json(sheet, {header: 1}); // Convert sheet to array of arrays
                if (fileNameId == "tax_supply") {
                    calculateTotal(jsonData);
                    populateTable(jsonData);
                } else {
                    calculateTotal_exp(jsonData);
                    populateTable_exp(jsonData);
                }

            };
            reader.readAsArrayBuffer(file);

        }

    }
    // function populateTable(data) {
    //     let tableBody = $("#dataTable tbody");
    //     tableBody.empty(); // Clear existing rows

    //     for (let i = 1; i < data.length; i++) { // Skip the header row
    //         let row = `<tr>
    //                     <td> ${ formatDate(data[i][0]) || ''}</td>  <!-- Date -->
    //             <td>${data[i][1] || '0'}</td>  <!-- Amount -->
    //             <td>${data[i][2] || '0'}</td>  <!-- Description -->
    //             </tr>`

    //             ;
    //                                 tableBody.append(row);
    //                             }
    //                         }
                            
                            
                            function formatDate(dateString) {
                    const months = [
                        "January", "February", "March", "April", "May", "June",
                        "July", "August", "September", "October", "November", "December"
                    ];

                    let [day, month, year] = dateString.split("/"); // Split the date (DD/MM/YYYY)
                    day = parseInt(day, 10); // Convert day to integer
                    month = parseInt(month, 10) - 1; // Convert month (0-based index)

                    return

            `${day}${getDaySuffix(day)} ${months[month]} ${year}`

                ;
                }

                // Function to get the correct suffix (st, nd, rd, th)
                function getDaySuffix(day) {
                    if (day >= 11 && day <= 13) return "th";
                    switch (day % 10) {
                        case 1: return "st";
                        case 2: return "nd";
                        case 3: return "rd";
                        default: return "th";
                    }
                }
                //  function toggleDivs(selected) {

                //         document.getElementById("res_yes").style.display = selected === 'A' ? "block" : "none";
                //     document.getElementById("res_no").style.display = selected === 'B' ? "block" : "none";
                //       }



                      /*****Step 1******/
                      function toggleDivs(selected) {
                    const resYesDiv = document.getElementById("res_yes");
                    const resNoDiv = document.getElementById("res_no");

                    // List of input IDs for each section that need the 'custom-req' class
                    const yesInputs = ['em_id', 'em_id_exp']; // Replace with your actual input IDs in res_yes
                  //  const noInputs = ['no_input_1', 'no_input_2'];     // Replace with your actual input IDs in res_no

                    if (selected === 'A') {
                        resYesDiv.style.display = "block";
                        resNoDiv.style.display = "none";

                        // Add 'custom-req' to YES inputs
                        yesInputs.forEach(id => {
                            const el = document.getElementById(id);
                            if (el) el.classList.add("required-field");
                        });


                    } else if (selected === 'B') {
                        resYesDiv.style.display = "none";
                        resNoDiv.style.display = "block";

                        // Remove 'custom-req' from YES inputs
                        yesInputs.forEach(id => {
                            const el = document.getElementById(id);
                            if (el) el.classList.remove("required-field");
                        });
                    }
                }
                        /*****step 2******/
                       function toggleDivEdoc(selected) {
                    const resYesDiv = document.getElementById("edoc_yes");
                    const resNoDiv = document.getElementById("edoc_no");

                    // List of input IDs for each section that need the 'custom-req' class
                    const yesInputs = ['t_l_name', 'l_i_date', 'l_e_date', 'tl_file']; // Replace with your actual input IDs in res_yes
                  //  const noInputs = ['no_input_1', 'no_input_2'];     // Replace with your actual input IDs in res_no

                    if (selected === 'A') {
                        resYesDiv.style.display = "block";
                        resNoDiv.style.display = "none";

                        // Add 'custom-req' to YES inputs
                        yesInputs.forEach(id => {
                            const el = document.getElementById(id);
                            if (el) el.classList.add("required-field");
                        });


                    } else if (selected === 'B') {
                        resYesDiv.style.display = "none";
                        resNoDiv.style.display = "block";

                        // Remove 'custom-req' from YES inputs
                        yesInputs.forEach(id => {
                            const el = document.getElementById(id);
                            if (el) el.classList.remove("required-field");
                        });
                    }
                }
                // Populate inputs and selects from cookies
        function populateFormFromCookies() {
           
         
            console.log("Session Data:", sessionData);
        
            for (let key in sessionData) {
                if (!sessionData.hasOwnProperty(key)) continue;
        
                const targetId = key + "1";
                const targetElement = document.getElementById(targetId);
        
                if (targetElement) {
                    console.log(`Populating #${targetId} with value: ${sessionData[key]}`);
                    targetElement.textContent = sessionData[key];
                } else {
                    console.warn(`Element with ID '${targetId}' not found.`);
                }
            }
      
        }


                       function toggleDivException(selected) {
                        document.getElementById("exp_vat").style.display = selected === 'A' ? "block" : "none";
                      }

                      function setcode()
                      {
                          document.getElementById("act_code").value = "3206";

                      }

                         function calculateTotal(data) {
                            let total = 0;
                            for (let i = 1; i < data.length; i++) { // Skip the header row (index 0)
                                if (data[i].length >= 2) { // Ensure at least 2 columns exist
                                    const amount = parseFloat(data[i][1]); // Get the 2nd column (B column)
                                    if (!isNaN(amount)) {
                                        total += amount;
                                    }
                                }
                            }
                             $("#supply_amount").val(total);

                        }
                        function calculateTotal_exp(data) {
                            let total = 0;
                            for (let i = 1; i < data.length; i++) { // Skip the header row (index 0)
                                if (data[i].length >= 2) { // Ensure at least 2 columns exist
                                    const amount = parseFloat(data[i][1]); // Get the 2nd column (B column)
                                    if (!isNaN(amount)) {
                                        total += amount;
                                    }
                                }
                            }
                             $("#exp_emt").val(total);

                        }
                        function populateTable_exp(data) {

                                let tableBody = $("#dataTable_exp tbody");
                                tableBody.empty(); // Clear existing rows

                                for (let i = 1; i < data.length; i++) { // Skip the header row
                                    let row =

            `<tr>
                <td> ${ data[i][0] || ''}</td>  <!-- Date -->
                <td>${data[i][1] || '0'}</td>  <!-- Amount -->
                <td>${data[i][2] || '0'}</td>  <!-- Description -->
                </tr>`

                ;
                                    tableBody.append(row);
                                }
                            }
                             flatpickr(".my-datepicker", {
                    dateFormat: "m/d/y"  // This sets MM/DD/YY format automatically
                  });


                  function setcurrency(c_code){

                      $('#_BANK_A_06_CURR_COMBO_combobox-inner').val(c_code);
                  }



                  $('#activitybusiness').on('change', function() {
                  let selected = $(this).val();
                  $.ajax({
                            url: '/vat/get_activity', // Adjust URL
                            type: 'POST',
                            data: {aid:selected},
                             dataType: 'json',
                            success: function(response) {

                                 $('#b_industry').val(response.industry).prop('disabled', true);;
                                  $('#main_corp').val(response.main_group).prop('disabled', true);;
                                   $('#sub_group').val(response.sub_group).prop('disabled', true);;
                                   $('#b_activity').val(response.activity).prop('disabled', true);;
                                   $('#sub_act').val(response.subActivity).prop('disabled', true);;
                                   $('#act_code').val(response.code).prop('disabled', true);;


                            },

                        });
                });

                function displayFileNames(input, spanId) {st
            const span = document.getElementById(spanId);
            alert("selected file "+input.files[0].name);
                document.getElementById("file-name-122").textContent= input.files[0].name;

        }
        
         function getCookies1() {
            return document.cookie.split('; ').reduce((cookies1, pair) => {
              const [name, value] = pair.split('=');
              cookies1[decodeURIComponent(name)] = decodeURIComponent(value);
              return cookies;
            }, {});
          }
        
          // Get all cookies as an object
       

</script>
<script>
    // Helper function to get cookie by name
    function getCookie(name) {
        const match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
        if (match) return decodeURIComponent(match[2]);
        return null;
    }
    
    const realFileInput = document.getElementById("real-file");
    const fileNameDisplay = document.getElementById("file-name");

    realFileInput.addEventListener("change", function () {
      if (realFileInput.files.length > 0) {
        fileNameDisplay.textContent = realFileInput.files[0].name;
      } else {
        fileNameDisplay.textContent = "No file chosen";
      }
    }); 
    // Call on page load or tab switch

</script>

<script src="/public/assets/vat/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="/public/assets/vat/assets/demo/chart-area-demo.js"></script>
<script src="/public/assets/vat/assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
<script src="/public/assets/vat/js/datatables-simple-demo.js"></script>


</body>
</html>