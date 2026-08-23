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

     .vat-container {
      border: 1px solid #ccc;
      padding: 20px;
    }

    .stepper {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 30px;
    }

    .step {
      text-align: center;
      flex: 1;
    }
    .value1{
         background-color: #bab6b6b8;
         padding:8px;
    }

    .step-number {
      width: 30px;
      height: 30px;
      border-radius: 50%;
      background-color: #008060;
      color: white;
      font-weight: bold;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 5px;
    }

    .step-label {
      font-weight: bold;
    }

    .vat-info {
      display: flex;
      flex-wrap: wrap;
      border: 1px solid #ccc;
    }

    .vat-info div {
      padding: 10px 15px;
      border-right: 1px solid #ccc;
      flex: 1 1 18%;
    }

    .vat-info div:last-child {
      border-right: none;
    }

    .vat-info .title {
      font-weight: bold;
      margin-bottom: 5px;
      display: block;
    }
    
    .header-box {
      display: flex;
      flex-wrap: wrap;
      border: 1px solid #ccc;
      background-color: #fff;
    }

    .header-box div {
      padding: 12px 20px;
      border-right: 1px solid #ccc;
      min-width: 200px;
      flex-grow: 1;
    }

    .header-box div:first-child {
      background-color: #153952;
      color: #fff;
      font-weight: bold;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .header-box div:last-child {
      border-right: none;
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
.field-group input[type="checkbox"] {
  margin-right: 10px;
  transform: scale(1.2);
}
.btn-next {
  background-color: #a36915;
  border: 1px solid #a36915;
  color: white;
}

    .vat-box {
      border: 1px solid #ccc;
      padding: 20px;
      margin-bottom: 30px;
    }

    .vat-info {
      display: flex;
      flex-wrap: wrap;
      border: 1px solid #ccc;
    }
 

    .vat-info div:first-child {
      background-color: #103b5c;
      color: white;
      font-weight: bold;
    }

    .vat-info div:last-child {
      border-right: none;
    }

    .section-heading {
      font-size: 20px;
      font-weight: bold;
      margin-top: 40px;
      margin-bottom: 10px;
    }
  .accordion {
    border: 1px solid #ccc;
    margin-bottom: 30px;
  }

  .accordion-header {
    background-color: #f1f1f1;
    padding: 10px 15px;
    font-weight: bold;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .accordion-content {
    padding: 15px;
    border-top: 1px solid #ccc;
  }

  .section-heading {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 15px;
  }

  .field-group {
    margin-bottom: 12px;
  }

  .label {
    font-weight: bold;
    color: #333;
    display: block;
    margin-bottom: 3px;
  }

  .value {
    color: #555;
  }

  .two-col {
    display: flex;
    justify-content: space-between;
    gap: 50px;
  }

  .left-col, .right-col {
    flex: 1;
  }

  .name-row {
    display: flex;
    justify-content: space-between;
    gap: 40px;
  }

  .name-col {
    flex: 1;
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
       <form action="<?= base_url(); ?>/vat/filing/view/<?php echo $userid; ?>" method="post" id="myForm"> 
      
<div class="vat-box">
    <div class="vat-info">
      
      <div>📅 Filing Period</div>
    <div><strong>VAT Return Period:</strong><br><?php echo $company_data['return_period'].'-'.$company_data['return_end'];?></div>
    <div><strong>VAT Stagger:</strong><br><?php echo $company_data['stagger'];?></div>
    <div><strong>VAT Return Due Date:</strong><br><?php echo $company_data['due_date'];?></div>
    <div><strong>Tax Year End:</strong><br><?php echo $company_data['year_end'];?></div>
    </div>
  </div>

  <div class="accordion" style="padding:15px;">
      
<!-- Taxable Person Details Section (previous one) -->
<div class="accordion" style="padding:15px;">
  <div class="accordion-header" onclick="toggleAccordion(this)">
    Taxable Person Details
    <span>â–¾</span>
  </div>
  
  <div class="accordion-content" style="display: block;">
    <div class="section-heading">Taxable Person Details</div>
    
    <div class="field-group">
      <span class="label">TRN</span>
      <div class="value">104246369300003</div>
    </div>

    <div class="name-row">
      <div class="name-col">
        <div class="field-group">
          <span class="label">First Name in English</span>
          <div class="value"> <?php echo $user_data['vat_username']; ?></div>
        </div>
        <div class="field-group">
          <span class="label">First Name in Arabic</span>
          <div class="value"><?php echo $user_data['vat_arabic_username']; ?></div>
        </div>
      </div>
      <div class="name-col">
        <div class="field-group">
          <span class="label"><?php echo $user_data['vat_arabic_username']; ?></span>
          <div class="value">&nbsp;</div>
        </div>
        <div class="field-group">
          <span class="label"><?php echo $user_data['vat_arabic_username']; ?></span>
          <div class="value">&nbsp;</div>
        </div>
      </div>
    </div>
  </div>
</div>
  <div class="accordion-header" onclick="toggleAccordion(this)">
    Address Details
    <span>â–¾</span>
  </div>
  <div class="accordion-content" style="display: block;">
    <div class="section-heading">Address Details</div> 
    <div class="two-col">
      <div class="left-col">
        <div class="field-group">
          <span class="label">Country</span>
          <div class="value">United Arab Emirates</div>
        </div>
        <div class="field-group">
          <span class="label">Street</span>
          <div class="value"><?php echo $company_data['street']; ?></div>
        </div>
        <div class="field-group">
          <span class="label">City</span>
          <div class="value"><?php echo $company_data['City']; ?></div>
        </div>
        <div class="field-group">
          <span class="label">Country Code</span>
          <div class="value"><?php echo $company_data['code']; ?></div>
        </div>
        <div class="field-group">
          <span class="label">Phone Number</span>
          <div class="value"><?php echo $company_data['phone1']; ?></div>
        </div>
        <div class="field-group">
          <span class="label">Email ID</span>
          <div class="value"><?php echo $company_data['email']; ?></div>
        </div>
      </div>

      <div class="right-col">
        <div class="field-group">
          <span class="label">Building Name & Number</span>
          <div class="value"><?php echo $company_data['address']; ?></div>
        </div>
        <div class="field-group">
          <span class="label">Area</span>
          <div class="value"><?php echo $company_data['Area']; ?></div>
        </div>
        <div class="field-group">
          <span class="label">Emirates</span>
          <div class="value"><?php echo $company_data['Emirates']; ?></div>
        </div>
        <div class="field-group">
          <span class="label">Country Code</span>
          <div class="value"><?php echo $company_data['code']; ?></div>
        </div>
        <div class="field-group">
          <span class="label">Landline Number</span>
          <div class="value"><?php echo $company_data['phone2']; ?></div>
        </div>
        <div class="field-group">
          <span class="label">PO Box</span>
          <div class="value"><?php echo $company_data['po']; ?></div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="accordion" style="padding:15px;">
  <div class="accordion-header" onclick="toggleAccordion(this)">
    VAT Return Details
    <span>â–¾</span>
  </div>
  <div class="accordion-content" style="display: block;">
    <div class="section-heading">VAT on Sales and All Other Outputs</div>

    <table style="width: 100%; border-collapse: collapse; margin-top: 15px;">
      <thead style="background-color: #f1f1f1;">
        <tr>
          <th style="text-align: left; padding: 8px;">Description</th>
          <th style="text-align: right; padding: 8px;">Amount (AED)</th>
          <th style="text-align: right; padding: 8px;">VAT Amount (AED)</th>
          <th style="text-align: right; padding: 8px;">Adjustment (AED)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td style="padding: 8px;">1a Standard rated supplies in Abu Dhabi</td>
          <td style="padding: 8px; text-align: right;"><?php echo $items['d_amount1'];?></td> 
          <td style="padding: 8px; text-align: right;"><?php echo $items['d_vat_amount1'];?></td>
          <td style="padding: 8px; text-align: right;">0.00</td>
        </tr>
        <tr>
          <td style="padding: 8px;">1b Standard rated supplies in Dubai</td>
         <td style="padding: 8px; text-align: right;"><?php echo $items['d_amount2'];?></td> 
          <td style="padding: 8px; text-align: right;"><?php echo $items['d_vat_amount2'];?></td>
          <td style="padding: 8px; text-align: right;">0.00</td>
        </tr>
        <tr>
          <td style="padding: 8px;">1c Standard rated supplies in Sharjah</td>
          <td style="padding: 8px; text-align: right;"><?php echo $items['d_amount3'];?></td> 
          <td style="padding: 8px; text-align: right;"><?php echo $items['d_vat_amount3'];?></td>
          <td style="padding: 8px; text-align: right;">0.00</td>
        </tr>
        <tr>
          <td style="padding: 8px;">1d Standard rated supplies in Ajman</td>
        <td style="padding: 8px; text-align: right;"><?php echo $items['d_amount4'];?></td> 
          <td style="padding: 8px; text-align: right;"><?php echo $items['d_vat_amount4'];?></td>
          <td style="padding: 8px; text-align: right;">0.00</td>
        </tr>
        <tr>
          <td style="padding: 8px;">1e Standard rated supplies in Umm al Quwain</td>
        <td style="padding: 8px; text-align: right;"><?php echo $items['d_amount5'];?></td> 
          <td style="padding: 8px; text-align: right;"><?php echo $items['d_vat_amount5'];?></td>
          <td style="padding: 8px; text-align: right;">0.00</td>
        </tr>
        <tr>
          <td style="padding: 8px;">1f Standard rated supplies in Ras Al Khaimah</td>
         <td style="padding: 8px; text-align: right;"><?php echo $items['d_amount6'];?></td> 
          <td style="padding: 8px; text-align: right;"><?php echo $items['d_vat_amount6'];?></td>
          <td style="padding: 8px; text-align: right;">0.00</td>
        </tr>
        <tr>
          <td style="padding: 8px;">1g Standard rated supplies in Fujairah</td>
          <td style="padding: 8px; text-align: right;"><?php echo $items['d_amount7'];?></td> 
          <td style="padding: 8px; text-align: right;"><?php echo $items['d_vat_amount7'];?></td>
          <td style="padding: 8px; text-align: right;">0.00</td>
        </tr>
        <tr>
          <td style="padding: 8px;">2 Tax refunds provided to tourists under the Tax Refunds for tourists scheme</td>
          <td style="padding: 8px; text-align: right;">-</td>
          <td style="padding: 8px; text-align: right;"><?php echo $items['d_amount8'];?></td>
          <td style="padding: 8px; text-align: right;">-</td>
        </tr>
        <tr>
          <td style="padding: 8px;">3 Supplies subject to reverse charge provisions</td>
          <td style="padding: 8px; text-align: right;"><?php echo $items['d_amount9'];?></td> 
          <td style="padding: 8px; text-align: right;"><?php echo $items['d_vat_amount9'];?></td>
          <td style="padding: 8px; text-align: right;">0.00</td>
        </tr>
        <tr>
     
    <td style="padding: 8px; ">4 Zero rated supplies</td>
     <td style="padding: 8px; text-align: right;"><?php echo $items['d_amount10'];?></td> 
          <td style="padding: 8px; text-align: right;"><?php echo $items['d_vat_amount10'];?></td>
    <td style="padding: 8px; text-align: right;"></td>
  </tr>
  <tr>
    
    <td style="padding: 8px; ">5 Exempt Supplies</td>
     <td style="padding: 8px; text-align: right;"><?php echo $items['d_amount14'];?></td> 
          <td style="padding: 8px; text-align: right;"><?php echo $items['d_vat_amount14'];?></td>
    <td style="padding: 8px; text-align: right;"></td>
  </tr>
  <tr>
    
    <td style="padding: 8px; ">6 Goods imported into the UAE</td>
    <td style="padding: 8px; text-align: right;">0.00</td>
    <td style="padding: 8px; text-align: right;">0.00</td>
    <td style="padding: 8px; text-align: right;"></td>
  </tr>
  <tr>
     
    <td style="padding: 8px; ">7 Adjustments to goods imported into the UAE</td>
   <td style="padding: 8px; text-align: right;"><?php echo $items['d_amount11'];?></td> 
          <td style="padding: 8px; text-align: right;"><?php echo $items['d_vat_amount11'];?></td>
    <td style="padding: 8px; text-align: right;"></td>
    <td></td>
  </tr>
  <tr>
    
    <td style="padding: 8px;">8 Totals</td>
    <td style="padding: 8px; text-align: right;"><?php echo $items['total_amount'];?></td>
    <td style="padding: 8px; text-align: right;"><?php echo $items['total_vat_amount'];?></td>
    <td style="padding: 8px; text-align: right;">0.00</td>
  </tr>
      </tbody>
    </table>

    <!--<div style="margin-top: 10px; text-align: right;">-->
    <!--  <button style="padding: 6px 12px; background-color: #003d66; color: #fff; border: none; cursor: pointer;">-->
    <!--    Edit-->
    <!--  </button>-->
    <!--</div>-->
  </div>
</div>

<div class="accordion" style="padding:15px;">
  <div class="accordion-header" onclick="toggleAccordion(this)">
   VAT on Expenses and All Other Inputs
    <span>â–¾</span>
  </div>
  <div class="accordion-content" style="display: block;">
    <!--<div class="section-heading">VAT on Sales and All Other Outputs</div>-->

    <table style="width: 100%; border-collapse: collapse; margin-top: 15px;">
      <thead style="background-color: #f1f1f1;">
        <tr>
          <th style="text-align: left; padding: 8px;">Description</th>
          <th style="text-align: right; padding: 8px;">Amount (AED)</th>
          <th style="text-align: right; padding: 8px;">VAT Amount (AED)</th>
          <th style="text-align: right; padding: 8px;">Adjustment (AED)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td style="padding: 8px;">  9 Standard rated expenses </td>
          <td style="padding: 8px; text-align: right;"><?php echo $items['d_amount12'];?></td>
          <td style="padding: 8px; text-align: right;"><?php echo $items['d_vat_amount12'];?></td>
          <td style="padding: 8px; text-align: right;">0.00</td>
        </tr>
        <tr>
          <td style="padding: 8px;">10 Supplies subject to the reverse charge provisions</td>
          <td style="padding: 8px; text-align: right;"><?php echo $items['d_amount13'];?></td>
          <td style="padding: 8px; text-align: right;"><?php echo $items['d_vat_amount13'];?></td>
          <td style="padding: 8px; text-align: right;">0.00</td>
        </tr>
        <tr>
          <td style="padding: 8px;">11 Totals</td>
          <td style="padding: 8px; text-align: right;"><?php echo $items['total_field1'];?></td> 
          <td style="padding: 8px; text-align: right;"><?php echo $items['total_field2'];?></td>
          <td style="padding: 8px; text-align: right;">0.00</td>
        </tr>
         
       
      </tbody>
    </table>

  </div>
</div>

<div class="vat-box">
 <h3>Net VAT Due</h3>

<table border="1" cellspacing="0" cellpadding="8">
  <tr>
    <th>#</th>
    <th>Description</th>
    <th>Amount (AED)</th>
  </tr>
  <tr>
    <td>12</td>
    <td style="width: 750px;">Total value of tax due for the period</td>
    <td><?php echo $items['nettotal1']; ?></td>
  </tr>
  <tr>
    <td>13</td>
    <td>Total value of recoverable tax for the period</td>
    <td><?php echo $items['nettotal2']; ?></td>
  </tr>
  <tr>
    <td>14</td>
    <td>Payable tax for the period</td>
    <td><?php echo $items['nettotal3']; ?></td>
    <input type="hidden" value="<?php echo $items['nettotal3']; ?>" name="value_amount">
  </tr>
</table>

<hr>

<h3>Profit Margin Scheme</h3>
<p>Did you apply the Profit Margin Scheme in respect of any supplies made during the tax period?</p>
 
  <input type="radio" id="profitMarginYes" name="profitMargin" value="Yes"
    <?php if ($profitMargin === 'Yes') echo 'checked'; ?>>
  <label for="profitMarginYes">Yes</label>&nbsp;&nbsp;

  <input type="radio" id="profitMarginNo" name="profitMargin" value="No"
    <?php if ($profitMargin === 'No') echo 'checked'; ?>>
  <label for="profitMarginNo">No</label>
 
</div>
<div class="accordion" style="padding:15px;">
  <div class="accordion-header" onclick="toggleAccordion(this)">
    Declaration and Authorized Signatory
    <span>â–¾</span>
  </div>

  <div class="accordion-content" style="display: block;">
    <div class="section-heading">Authorized Signatory List</div>

    <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
      <thead style="background-color: #f1f1f1;">
        <tr>
          <th style="text-align: left; padding: 8px;">Name in English</th>
          <th style="text-align: left; padding: 8px;">Name in Arabic</th>
          <th style="text-align: left; padding: 8px;">Email ID</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td style="padding: 8px;"><?php echo $company_data['eng_name']; ?></td>
          <td style="padding: 8px;"><?php echo $company_data['arabic_name']; ?></td>
          <td style="padding: 8px;"><?php echo $company_data['email']; ?></td>
        </tr>
      </tbody>
    </table>

    <div class="name-row">
      <div class="name-col">
        <div class="field-group">
          <span class="label">First Name in English</span>
          <div class="value value1" ><?php echo $company_data['eng_name']; ?></div>
        </div>
        <div class="field-group">
          <span class="label">First Name in Arabic</span>
          <div class="value value1"><?php echo $company_data['arabic_name']; ?></div>
        </div>
        <div class="field-group">
          <span class="label">Country Code</span>
          <div class="value value1"><?php echo $company_data['code']; ?></div>
        </div>
        <div class="field-group">
          <span class="label">Date of Submission</span>
          <div class="value value1"><?php echo date('d/m/Y'); ?></div>
        </div>
      </div>

      <div class="name-col">
        <div class="field-group">
          <span class="label">Last Name in English</span>
          <div class="value value1"><?php echo $company_data['last_eng']; ?></div>
        </div>
        <div class="field-group">
          <span class="label">Last Name in Arabic</span>
          <div class="value value1"><?php echo $company_data['last_arabic']; ?></div>
        </div>
        <div class="field-group">
          <span class="label">Phone Number</span>
          <div class="value value1"><?php echo $company_data['phone1']; ?></div>
        </div>
        <div class="field-group">
          <span class="label">Email ID</span>
          <div class="value value1"><?php echo $company_data['email']; ?></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="field-group" style="margin-top: 20px;padding:20px;">
  <label>
    <input type="checkbox" id="declarationCheckbox" name="declarationCheckbox" required />
    I declare that all information provided is true, accurate and complete to the best of my knowledge and belief.
  </label>
</div>
</form>  
</main>
<div class="bottom-buttons">
  <a class="btn-prev" href="<?= base_url(); ?>/vat/filing/create/<?php echo $userid; ?>">Previous Step</a>
  <div class="right-buttons">
    <!--<button class="btn-draft">Save as Draft</button>-->
    <button class="btn-next"id="nextButton" onclick="submitForm()" disabled style="background-color:#918d89;">Submit</button>
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
                                                                    data-sap-ui-icon-content="î‡º" role="presentation"
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
                                                                    data-sap-ui-icon-content="î‡º" role="presentation"
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
                                                                    data-sap-ui-icon-content="î‡º" role="presentation"
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
                                                                              data-sap-ui-icon-content="î€¡"
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
                                                                              data-sap-ui-icon-content="î€¡"
                                                                              class="sapUiIcon sapUiIconMirrorInRTL"
                                                                              style="font-family: 'SAP\2dicons'; color: #AB8240;"></span>
                                                                </div>
                                                                <div id="__data71"
                                                                     class="sapMFlexItemAlignAuto sapMFlexBoxBGTransparent sapMFlexItem"
                                                                     style="order: 0; flex-grow: 0; flex-shrink: 1; flex-basis: auto; min-height: auto; min-width: auto;">
                                                                        <span id="__text12" data-sap-ui="__text12"
                                                                              class="sapMText sapUiSelectable sapMTextMaxWidth zGoldText"
                                                                              style="text-align: left;">Central Park Business Towers â€“ DIFC, P.O. Box 2440, Dubai, U.A.E</span>
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
                                                                              data-sap-ui-icon-content="îˆ—"
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
                                                                              data-sap-ui-icon-content="î€·"
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
            <p>ï¿½ 2023 Federal Tax Authority. All rights reserved.</p>

        </div>
    </footer>
</div>
</div>
</div>
 <script>
 function submitForm() {
  document.getElementById("myForm").submit();
}
  document.getElementById('declarationCheckbox').addEventListener('change', function () {
    const nextButton = document.getElementById('nextButton');
    nextButton.disabled = !this.checked;
    
    
     if (this.checked) {
    nextButton.disabled = false;
    nextButton.style.backgroundColor = '#ab8240'; // Blue (or your desired color)
    nextButton.style.color = 'white';
    nextButton.style.cursor = 'pointer';
  } else {
    nextButton.disabled = true;
    nextButton.style.backgroundColor = '#bab6b6b8;'; // Gray (disabled look)
    nextButton.style.color = '#666';
    nextButton.style.cursor = 'not-allowed';
  }
    
  });
     function toggleAccordion(header) {
    const content = header.nextElementSibling;
    const isVisible = content.style.display === "block";
    content.style.display = isVisible ? "none" : "block";
    header.querySelector("span").textContent = isVisible ? "v" : "v";
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
