<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Vat return New</title>
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
.readtext{
    background-color:#757474a8;
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
  
   .info-container {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
      margin-bottom: 20px;
    }

    .info-box {
      flex: 1;
      min-width: 250px;
      background-color: #e3e7ed;
      padding: 20px;
      border-radius: 8px;
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .info-box.green {
      background-color: #d7ede3;
    }

    .info-box .icon {
      font-size: 30px;
    }

    .info-box .text {
      line-height: 1.4;
    }

    .text .label {
      font-weight: bold;
    }

    .materials-container {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
    }

    .box {
      flex: 1;
      min-width: 250px;
      background-color: #fff;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 8px;
    }

    .box h4 {
      margin-top: 0;
      margin-bottom: 10px;
      font-size: 16px;
    }

    .box ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .box ul li {
      margin-bottom: 8px;
    }

    .box ul li a {
      color: #007BFF;
      text-decoration: none;
    }

    .box ul li a:hover {
      text-decoration: underline;
    }

    .box p {
      margin: 5px 0;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .info-box, .box {
        flex: 1 1 100%;
      }
    }
    .bottom-buttons {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px;
  border-top: 1px solid #ccc;
  background-color: #f8f8f8;
  position: sticky;
  bottom: 0;
  z-index: 999;
}

.bottom-buttons button {
  padding: 10px 20px;
  font-weight: bold;
  border-radius: 4px;
  cursor: pointer;
  font-size: 14px;
}

.btn-prev {
  background-color: white;
  border: 1px solid #999;
  color: #333;
}

.right-buttons {
  display: flex;
  gap: 10px;
}

.btn-draft {
  background-color: white;
  border: 1px solid #2a7a68;
  color: #2a7a68;
}

.btn-next {
  background-color: #a36915;
  border: 1px solid #a36915;
  color: white;
}
.accordion {
      background-color: #eef0f3;
      color: #2c3e50;
      cursor: pointer;
      padding: 15px 20px;
      width: 100%;
      text-align: left;
      border: none;
      outline: none;
      transition: background-color 0.2s ease;
      font-size: 16px;
      border-top: 1px solid #ccc;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .accordion:last-of-type {
      border-bottom: 1px solid #ccc;
    }

    .accordion:hover {
      background-color: #e0e3e8;
    }

    .accordion .arrow {
      transition: transform 0.3s ease;
      font-size: 14px;
    }

    .accordion.active .arrow {
      transform: rotate(180deg);
    }

    .panel {
      padding: 0 20px 15px;
      background-color: white;
      display: none;
      overflow: hidden;
      border-left: 1px solid #ccc;
      border-right: 1px solid #ccc;
    }

    .checkbox-container {
      margin-top: 30px;
      padding: 15px 0;
      border-top: 1px solid #ccc;
      font-size: 15px;
      display: flex;
      align-items: center;
    }

    .checkbox-container input[type="checkbox"] {
      width: 18px;
      height: 18px;
      margin-right: 10px;
    }
     
    .faq h3 {
      margin: 0 0 10px;
      font-size: 14px; 
    }
    .faq p, .faq ul {
      margin: 0 0 10px;
      line-height: 1.6;
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
    

    <div class="input-group">
        <span>HOME</span> > <span>Company Name</span> > <span>Vat</span> > <span>My Filings</span>

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
             <form action="<?= base_url(); ?>/vat/filing/create/<?php echo $userid; ?>" method="post" id="myForm">
       <h2>VAT 201 Return</h2>

  <div class="info-container">
    <div class="info-box">
      <div class="icon">⚙️</div>
      <div class="text">
        <div class="label">No. of form steps</div>
        <div>2 Steps</div>
      </div>
    </div>

    <div class="info-box green">
      <div class="icon">⏱️</div>
      <div class="text">
        <div class="label">Expected time to fill this form</div>
        <div>20 minutes</div>
      </div>
    </div>

    <div class="info-box">
      <div class="icon">💵</div>
      <div class="text">
        <div class="label">Expected fees for this service</div>
        <div>Free of Charge</div>
      </div>
    </div>
  </div>

  <div class="materials-container">
    <div class="box">
      <h4>Tutorial Materials</h4>
      <ul>
        <li>> <a href="#">Watch Video Tutorial</a></li>
        <li>> <a href="#">Download User Manual</a></li>
      </ul>
      <p><strong>Required Templates</strong><br>NA</p>
    </div>

    <div class="box">
      <h4>Required Documents</h4>
      <p>NA</p>
    </div>
  </div>
  <hr> 
  <div class="accpr_div" style="margin:15px;">`  
  <h3>Service Details</h3>

  <button class="accordion">
    About the Service
    <span class="arrow">▼</span>
  </button>
  <div class="panel">
    <p>Use this service to submit your periodical VAT returns. If you are registered with the FTA, it is mandatory to submit your VAT return based on the allotted tax period. The VAT return needs to be submitted no later than 28th day following the end of the tax period. Failure to file the VAT return within the time period will lead to late filing penalties. You shall receive a confirmation email from the FTA once you have submitted the VAT return of the tax period. If you are a “Qualifying Registrant” for e-commerce purposes, then you will submit your VAT Return under e-commerce reporting</p>
  </div>

  <button class="accordion">
    Eligibility Criteria
    <span class="arrow">▼</span>
  </button>
  <div class="panel">
    <p>The information given below is intended to help determine your eligibility to apply for this service. The conditions for requesting for filing a VAT return are as follows:  </p>
  <ul>
      <li>You can file your VAT Return if you are registered for VAT and you have a valid Tax Registration Number (TRN). You may also submit the application on behalf of a registrant if you are the Registrant’s Tax Agent or Legal    Representative. </li>
      <li>VAT return due for tax periods prior to the current tax period are already submitted. </li>
      <li>VAT return form for the current tax period is generated on the portal in the VAT 201 - VAT Returns section.  </li>
  </ul>
  </div>

  <button class="accordion">
    Your service journey
    <span class="arrow">▼</span>
  </button>
  <div class="panel">
    <p>1. Please check the Eligibility criteria and Frequently asked questions. </p>
    <p>2. Please have the required documents to submit including any required templates. </p>
    <p>3. Complete and submit the online application form   </p>
    <p><span>Note: You can save your application as a draft and continue working on it in your own time.</span></p>
  </div>

  <button class="accordion">
    FAQ
    <span class="arrow">▼</span>
  </button>
  <div class="panel"><br>
      <h5>VAT Return Frequently Asked Questions</h5><br>

<!-- FAQs -->
<div class="faq">
  <h3>1. When are you required to submit a VAT return?</h3>
  <p>You are required to submit VAT returns when you are registered with the FTA for VAT purposes.</p>
</div>

<div class="faq">
  <h3>2. What is the Return Filing Period in UAE VAT?</h3>
  <p>The standard VAT return filing period is on a quarterly basis. Only few businesses are expected to file their VAT returns on a monthly or half yearly basis.</p>
  <p>The standard tax period shall be a period of three calendar months ending on the date that the FTA determines. The FTA may, at its discretion, assign a different Tax Period other than the standard one i.e. monthly or half yearly, to a certain group of Taxable Persons.</p>
</div>

<div class="faq">
  <h3>3. Is it Mandatory for you to submit a VAT return if you are registered with the FTA?</h3>
  <p>Yes, it is mandatory for all the registered businesses to submit the VAT return, therefore you are required to submit VAT return for each tax period.</p>
</div>

<div class="faq">
  <h3>4. How to submit the VAT returns?</h3>
  <p>All VAT returns should be submitted using the portal. The return can be submitted by you or another person who has the right to do so on your behalf (for example, a Tax Agent or a Legal Representative). VAT returns should be completed and verified before submitted.</p>
</div>

<div class="faq">
  <h3>5. Would you be able to edit VAT returns after submission?</h3>
  <p>Yes, in case if any discrepancies are identified, you will be able to edit a submitted VAT Return of a tax period before the filing due date of each tax period.</p>
</div>

<div class="faq">
  <h3>6. What if the due date for the submission of the VAT Return and the corresponding payment falls on a weekend or a national holiday?</h3>
  <p>Where the due date for the submission of the VAT Return and the corresponding payment falls on a weekend or a national holiday, the deadline for filing the VAT Return or making a payment is extended to the first business day thereafter.</p>
</div>

<div class="faq">
  <h3>7. What happens when input VAT exceeds output VAT in the VAT return?</h3>
  <p>You will be able to request a VAT refund after submission of the VAT return.</p>
</div>

<div class="faq">
  <h3>8. Should you file a VAT Return if there is no business transaction in a tax period?</h3>
  <p>Yes, if there is no business transaction in a tax period, you should submit a “nil” VAT Return by the respective due date.</p>
</div>

<div class="faq">
  <h3>9. What details are required to be reported in the VAT return?</h3>
  <p>Details regarding the supplies made and received during a tax period are required to be reported in the VAT return of each tax period.</p>
</div>

<div class="faq">
  <h3>10. What are the different categories under which supplies made can be classified in a VAT return?</h3>
  <p>The supplies made can be classified as standard rated sales, zero rated sales or as an exempt sales.</p>
</div>
    <div class="faq"><h3>11. What are exempt supplies?</h3><p>Exempt supplies are those supplies of goods and services which are not subject to VAT and for which associated input VAT cannot be recovered.</p></div>
<div class="faq"><h3>12. What are zero-rated supplies?</h3><p>Zero-rated supplies are taxable supplies which are charged VAT at 0%. Input VAT related to zero-rated supplies can be recovered.</p></div>
<div class="faq"><h3>13. Can input VAT be recovered for all business expenses?</h3><p>No, input VAT cannot be recovered for some specific expenses such as entertainment, motor vehicles used for personal purposes, etc.</p></div>
<div class="faq"><h3>14. What is a tax invoice?</h3><p>A tax invoice is a document issued by a VAT registered supplier when making a taxable supply. It includes details such as VAT amount, total amount, supplier and customer details.</p></div>
<div class="faq"><h3>15. Do you need to submit original tax invoices for VAT returns?</h3><p>No, original tax invoices are not submitted along with VAT return. However, they should be kept in your records.</p></div>
<div class="faq"><h3>16. Can you claim VAT on imported goods?</h3><p>Yes, VAT on imports can be claimed in the VAT return provided the goods are used for making taxable supplies.</p></div>
<div class="faq"><h3>17. What is the deadline to submit a VAT return?</h3><p>The VAT return must be filed by the 28th day following the end of the tax period.</p></div>
<div class="faq"><h3>18. What if VAT return is not filed on time?</h3><p>A late filing penalty and late payment penalty may be applied by the FTA.</p></div>
<div class="faq"><h3>19. What is voluntary disclosure?</h3><p>Voluntary Disclosure is a form that enables the taxpayer to voluntarily disclose errors or omissions in a VAT return submitted to the FTA.</p></div>
<div class="faq"><h3>20. When should a voluntary disclosure be submitted?</h3><p>Voluntary disclosure should be submitted if the taxpayer becomes aware of any error or omission in a previously submitted VAT return that resulted in a difference of AED 10,000 or more.</p></div>
<div class="faq"><h3>21. What are the consequences of not submitting a voluntary disclosure?</h3><p>The FTA may impose penalties on taxpayers who do not disclose errors or omissions voluntarily.</p></div>
<div class="faq"><h3>22. Can VAT returns be amended after submission?</h3><p>Yes, through submission of a voluntary disclosure if the error meets the threshold, or correction in the subsequent return if allowed.</p></div>
<div class="faq"><h3>23. Is it necessary to make payment at the time of VAT return submission?</h3><p>Yes, any payable VAT must be settled before or on the due date of the return submission.</p></div>
<div class="faq"><h3>24. What are standard rated expenses?</h3><p>Standard rated expenses are those expenses that are subject to the standard VAT rate (currently 5%) in the UAE.</p></div>
<div class="faq"><h3>25. What if your input VAT is more than output VAT?</h3><p>You will be in a refund position and can either request a refund or carry it forward to the next tax period.</p></div>
<div class="faq"><h3>26. What is reverse charge mechanism?</h3><p>The reverse charge mechanism is used when the recipient of goods or services accounts for VAT instead of the supplier.</p></div>
<div class="faq"><h3>27. Is reverse charge applicable on all imports?</h3><p>No, reverse charge is applicable only on certain categories of goods and services imported into the UAE.</p></div>
<div class="faq"><h3>28. What are the records required to be maintained for VAT?</h3><p>Records such as tax invoices, customs documents, accounting books, and records of imported/exported goods must be maintained.</p></div>
<div class="faq"><h3>29. How long should VAT records be retained?</h3><p>VAT records must be retained for at least 5 years.</p></div>
<div class="faq"><h3>30. Can VAT registered businesses deal in exempt goods?</h3><p>Yes, but they cannot claim input VAT related to exempt goods/services.</p></div>
<div class="faq"><h3>31. What are designated zones?</h3><p>Designated zones are specific areas in the UAE considered outside the UAE for VAT purposes, with special VAT treatment.</p></div>
<div class="faq"><h3>32. Are supplies within designated zones VAT exempt?</h3><p>Yes, in most cases, but subject to certain conditions. Check FTA guidance for specifics.</p></div>
<div class="faq"><h3>33. Is VAT applicable on exports?</h3><p>VAT on exports is zero-rated provided the conditions specified in the VAT law are met.</p></div>
<div class="faq"><h3>34. Can you adjust VAT paid in error?</h3><p>Yes, if VAT is paid in error, adjustments can be made in the return or via a refund depending on the case.</p></div>
<div class="faq"><h3>35. What is input VAT apportionment?</h3><p>When input VAT relates to both taxable and exempt supplies, only a portion of the VAT can be recovered.</p></div>
<div class="faq"><h3>36. What is the difference between input and output VAT?</h3><p>Input VAT is the VAT paid on purchases. Output VAT is the VAT charged on sales.</p></div>
<div class="faq"><h3>37. How are penalties for non-compliance with VAT regulations determined?</h3><p>Penalties depend on the nature and severity of the non-compliance and are defined in the UAE VAT legislation.</p></div>
<div class="faq"><h3>38. What is the process to deregister for VAT?</h3><p>You can apply for VAT deregistration through the FTA portal, subject to meeting certain conditions.</p></div>
<div class="faq"><h3>39. How do you check the status of your VAT return submission?</h3><p>Log in to the FTA portal, go to your dashboard, and check the status under the VAT return section.</p></div>

  </div>

  <div class="checkbox-container">
    <input type="checkbox" id="declarationCheckbox" required>
    <label for="declarationCheckbox">I confirm that I have read the above instructions and guidelines</label>
  </div>   
 </div>
 </form>
</main>
<div class="bottom-buttons">
  <button class="btn-prev">Previous Step</button>
  <div class="right-buttons">
    <!--<button class="btn-draft">Save as Draft</button>-->
    <button class="btn-next" onclick="submitForm()">Next Step</button>
  </div>
</div>
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
function submitForm() {
     var isChecked = document.getElementById('declarationCheckbox').checked;
    if (isChecked) {
      document.getElementById("myForm").submit();
      // continue form submission or logic here
    } else {
      alert("Please agree to the terms before proceeding.");
    }
 
}
  const accordions = document.querySelectorAll('.accordion');
    accordions.forEach(acc => {
      acc.addEventListener('click', function () {
        this.classList.toggle('active');
        const panel = this.nextElementSibling;
        if (panel.style.display === 'block') {
          panel.style.display = 'none';
        } else {
          panel.style.display = 'block';
        }
      });
    });
  // Run after DOM is loaded
  document.addEventListener('DOMContentLoaded', applyFormattingToAllFields);
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
