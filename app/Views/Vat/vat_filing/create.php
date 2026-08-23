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
      .stepper-wrapper {
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: relative;
      margin: 40px 0;
    }

    .stepper-wrapper::before {
      content: "";
      position: absolute;
      top: 50%;
      left: 10%;
      right: 10%;
      height: 2px;
      background-color: #ccc;
      z-index: 0;
    }

    .step {
      position: relative;
      text-align: center;
      width: 15%;
      z-index: 1;
    }

    .step .circle {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background-color: #23455D;
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 10px;
      font-weight: bold;
      box-shadow: 0 0 6px rgba(0,0,0,0.2);
    }

    .step.inactive .circle {
      background-color: #e0e0e0;
      color: #333;
    }

    .step p {
      margin: 0;
      font-size: 14px;
    }

    .title {
      font-size: 20px;
      font-weight: bold;
      color: #23455D;
      margin-bottom: 20px;
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

    .vat-section {
      background-color: #fff;
      margin-top: 20px;
      border: 1px solid #ccc;
      padding:15px;
    }

    .vat-section h3 {
      padding: 15px 20px 0;
      margin: 0;
      font-size: 18px;
    }

    .vat-note {
      background-color: #fef6e3;
      margin: 15px 20px 20px;
      border: 1px dashed #aaa;
      padding: 15px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
    }

    .vat-note-left {
      max-width: 70%;
    }

    .vat-note a {
      color: green;
      font-weight: bold;
      text-decoration: none;
      margin-right: 10px;
    }

    .upload-wrapper {
      position: relative;
      overflow: hidden;
      display: inline-block;
    }

    .upload-label {
      background-color: #153952;
      color: white;
      padding: 10px 20px;
      font-weight: bold;
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      border-radius: 4px;
    }

    .upload-label::before {
      content: "↑";
      font-size: 16px;
    }

    .upload-input {
      position: absolute;
      left: 0;
      top: 0;
      opacity: 0;
      cursor: pointer;
      height: 100%;
      width: 100%;
    }
     table {
      width: 100%;
      border-collapse: collapse;
      background-color: #fff;
    }

    th, td {
      border: 1px solid #ccc;
      padding: 10px;
      text-align: left;
      vertical-align: middle;
    }

    th {
      background-color: #e2e2e2;
    }

    th i, td i {
      font-style: normal;
      display: inline-block;
      width: 20px;
      height: 20px;
      background-color: #888;
      color: white;
      text-align: center;
      border-radius: 50%;
      font-size: 14px;
      line-height: 20px;
      margin-left: 5px;
    }

    input[type="text"] {
      width: 90%;
      padding: 6px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .adjustment-group {
      display: flex;
      gap: 5px;
    }

    .adjustment-group select {
      width: 40px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .adjustment-group input {
      width: 80px;
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
    </style>
</head>
<?php
 

// Helper function to get saved value
function olds($field) {
    return isset($_SESSION['form_data'][$field]) ? htmlspecialchars($_SESSION['form_data'][$field]) : '';
}
?>
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
         <form action="<?= base_url(); ?>/vat/filing/review/<?php echo $userid; ?>" method="post" id="myForm">
                      <div class="" style="padding:20px;"> 
             <h5> Vat 201 Return</h5>
             
         </div>
   <div class="stepper-wrapper">
    <div class="step active">
      <div class="circle">1</div>
      <p>VAT Return</p>
    </div>
    <div class="step inactive">
      <div class="circle">2</div>
      <p>Review &amp; Declaration</p>
    </div>
  </div>

<div class="header-box">
    <div>📅 Filing Period</div>
    <div><strong>VAT Return Period:</strong><br><?php echo $company_data['return_period'].'-'.$company_data['return_end'];?></div>
    <div><strong>VAT Stagger:</strong><br><?php echo $company_data['stagger'];?></div>
    <div><strong>VAT Return Due Date:</strong><br><?php echo $company_data['due_date'];?></div>
    <div><strong>Tax Year End:</strong><br><?php echo $company_data['year_end'];?></div>
  </div>

  <div class="vat-section">
    <h3>VAT Return</h3>
    <div class="vat-note">
      <div class="vat-note-left">
        <p>
          You have the option to file returns offline. You can download the template given below and then upload it after filing as mentioned in the template.
        </p>
        <a href="<?= base_url('public/assets/vat/VAT Return Template.xlsx') ?>">⬇️ Download Template</a>
        <span>VAT Return Template.xlsx last updated 06/09/2022</span>
      </div>
      <div class="upload-wrapper">
        <label class="upload-label">
          Upload Filled Template
          <input type="file" class="upload-input">
        </label>
      </div>
    </div>
  </div>
    <div class="fillings" style="padding:15px;">
        <h3>VAT on Sales and All Other Outputs</h3>

  <table id="vat-table">
    <thead>
      <tr>
        <th>Description</th>
        <th>Amount (AED) <i>i</i></th>
        <th>VAT Amount (AED) <i>i</i></th>
        <th>Adjustment (AED) <i>i</i></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1a Standard rated supplies in Abu Dhabi</td>
        <td><input type="text" value="0.00" id="d_amount1" name="d_amount1"  value="<?php echo olds('d_amount1'); ?>"></td>
        <td><input type="text" value="0.00" id="d_vat_amount1" name="d_vat_amount1" value="<?php echo olds('d_vat_amount1'); ?>"></td>
        <td class="adjustment-group">
           
          <input type="text" value="0.00">
        </td>
      </tr>
      <tr>
        <td>1b Standard rated supplies in Dubai</td>
        <td><input type="text" class="decimal-field" value="0.00" id="d_amount2" name="d_amount2" value="<?php echo olds('d_amount2'); ?>"></td>
        <td><input type="text" class="decimal-field" value="0.00" id="d_vat_amount2" name="d_vat_amount2" value="<?php echo olds('d_vat_amount2'); ?>"></td>
        <td class="adjustment-group">
          
          <input type="text" value="0.00">
        </td>
      </tr> 
      <tr>
        <td>1c Standard rated supplies in Sharjah</td>
        <td><input type="text" value="0.00"  id="d_amount3" name="d_amount3" value="<?php echo olds('d_amount3'); ?>"></td>> </td>
        <td><input type="text" value="0.00" id="d_vat_amount3" name="d_vat_amount3" value="<?php echo olds('d_vat_amount3'); ?>"></td>></td>
        <td class="adjustment-group">
           
          <input type="text" value="0.00">
        </td>
      </tr>
      <tr>
        <td>1d Standard rated supplies in Ajman</td>
        <td><input type="text" value="0.00" id="d_amount4" name="d_amount4" value="<?php echo olds('d_amount4'); ?>"></td>
        <td><input type="text" value="0.00" id="d_vat_amount4" name="d_vat_amount4" value="<?php echo olds('d_vat_amount4'); ?>"></td>
        <td class="adjustment-group">
          
          <input type="text" value="0.00">
        </td>
      </tr>
       <tr>
        <td> 1e
Standard rated supplies in Umm al Quwain</td>
        <td><input type="text" value="0.00" id="d_amount5" name="d_amount5" value="<?php echo olds('d_amount5'); ?>"></td>
        <td><input type="text" value="0.00" id="d_vat_amount5" name="d_vat_amount5" value="<?php echo olds('d_vat_amount5'); ?>"></td>
        <td class="adjustment-group">
          
          <input type="text" value="0.00">
        </td>
     </tr>
      <tr>
        <td>1f Standard rated supplies in Ras Al Khaimah</td>
        <td><input type="text" value="0.00" id="d_amount6" name="d_amount6" value="<?php echo olds('d_amount6'); ?>"></td>
        <td><input type="text" value="0.00" id="d_vat_amount6" name="d_vat_amount6" value="<?php echo olds('d_vat_amount6'); ?>"></td>
        <td class="adjustment-group">
           
          <input type="text" value="0.00">
        </td>
      </tr>
      <tr>
        <td>1g Standard rated supplies in Fujairah</td>
        <td><input type="text" value="0.00" id="d_amount7" name="d_amount7" value="<?php echo olds('d_amount7'); ?>"></td>
        <td><input type="text" value="0.00" id="d_vat_amount7" name="d_vat_amount7" value="<?php echo olds('d_vat_amount7'); ?>"></td>
        <td class="adjustment-group">
          
          <input type="text" value="0.00">
        </td>
      </tr>
      <tr>
        <td>2 Tax refunds provided to tourists under the Tax Refunds for tourists scheme</td>
        <td class="adjustment-group">
           
          <input type="text" value="0.00" id="d_amount8" name="d_amount8" value="<?php echo olds('d_amount8'); ?>"></td>
        </td>
        <td class="adjustment-group">
           
          <input type="text" value="0.00" d="d_amount80" name="d_amount80" value="<?php echo olds('d_amount80'); ?>"></td>
        </td>
        <td>
          <a href="#" class="view-link">View Details</a>
        </td>
      </tr>
      <tr>
        <td>3 Supplies subject to reverse charge provisions</td>
        <td><input type="text" class="decimal-field" value="0.00"  id="d_amount9" name="d_amount9" value="<?php echo olds('d_amount9'); ?>"></td>
        <td><input type="text" class="decimal-field" value="0.00" id="d_vat_amount9" name="d_vat_amount9" value="<?php echo olds('d_vat_amount9'); ?>"></td>
        <td></td>
      </tr>
      <tr>
        <td>4 Zero rated supplies</td>
        <td><input type="text" class="decimal-field" value="0.00"  id="d_amount9" name="d_amount10" value="<?php echo olds('d_amount10'); ?>"></td>
        <td><input type="text" class="decimal-field" value="0.00" id="d_vat_amount9" name="d_vat_amount10" value="<?php echo olds('d_vat_amount10'); ?>"></td>
        <td></td>
      </tr>
      <tr>
        <td>5 Exempt Supplies</td>
        <td><input type="text" class="decimal-field" value="0.00" id="d_amount14" name="d_amount14" value="<?php echo olds('d_amount14'); ?>"></td>
        <td><input type="hidden" class="decimal-field" value="0.00" id="d_vat_amount14" name="d_vat_amount14" value="<?php echo olds('d_vat_amount14'); ?>"></td>
        <td></td>
      </tr>
      <tr>
        <td>6 Goods imported into the UAE</td>
        <td><input type="text" class="decimal-field readtext" value="0.00" disabled></td>
        <td><input type="text" class="decimal-field readtext" value="0.00"></td>
        <td><a href="#" class="view-link">View Details</a></td>
      </tr>
      <tr>
        <td>7 Adjustments to goods imported into the UAE</td>
        <td><input type="text" class="decimal-field" value="0" id="d_amount11" name="d_amount11" value="<?php echo olds('d_amount11'); ?>"></td>></td>
        <td><input type="text" class="decimal-field" value="0.00" id="d_vat_amount11" name="d_vat_amount11" value="<?php echo olds('d_vat_amount11'); ?>"></td>></td>
        <td></td>
      </tr>
      <tr class="total-row">
        <td>8 Totals</td>
        <td><input type="text" class="readtext decimal-field" value="0.00" id="total_amount" name="total_amount" readonly value="<?php echo olds('total_amount'); ?>"></td>
        <td><input type="text" class="readtext decimal-field" value="0.00" id="total_vat_amount"  name="total_vat_amount" readonly value="<?php echo olds('total_vat_amount'); ?>"></td>
        <td><input type="text" class="readtext decimal-field" value="0.00"></td>
      </tr>
    </tbody>
  </table>
  <br>
  <h3>VAT on Expenses and All Other Inputs</h3>

<table id="vat-table-2">
  <thead>
    <tr>
      <th>Description</th>
      <th>Amount (AED) <i>i</i></th>
      <th>VAT Amount (AED) <i>i</i></th>
      <th>Adjustment (AED) <i>i</i></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>9 Standard rated expenses</td>
      <td><input type="text" value="0.00" class="decimal-field" id="d_amount12"  name="d_amount12" value="<?php echo olds('d_amount12'); ?>"></td>
      <td><input type="text" value="0.00" class="decimal-field" id="d_vat_amount12"  name="d_vat_amount12" value="<?php echo olds('d_vat_amount12'); ?>"></td>
      <td><input type="text" value="0.00"></td>
    </tr>
    <tr>
      <td>10 Supplies subject to the reverse charge provisions</td>
      <td><input type="text" value="0.00"  class="decimal-field" id="d_amount13"  name="d_amount13" value="<?php echo olds('d_amount13'); ?>"></td>
      <td><input type="text" value="0.00" class="decimal-field" id="d_vat_amount13"  name="d_vat_amount13" value="<?php echo olds('d_vat_amount13'); ?>"></td>
      <td></td>
    </tr>
    <tr class="total-row">
      <td>11 Totals</td>
      <td><input type="text" value="0.00" class="decimal-field readtext" readonly id="total_field1" name="total_field1" value="<?php echo olds('total_field1'); ?>"></td>
      <td><input type="text" value="0.00" class="decimal-field readtext" readonly id="total_field2" name="total_field2" value="<?php echo olds('total_field2'); ?>"></td>
      <td><input type="text" value="0.00" class="decimal-field readtext" readonly></td>
    </tr>
  </tbody>
</table>
   <div class="vat-section">
  <label><strong>12</strong> Total value of tax due for the period (AED)</label><br>
  <input type="text" value="0.00" id="nettotal1" name="nettotal1" value="<?php echo olds('nettotal1'); ?>" readonly class="readonly-field readtext col-md-6" style="width: 35%;" ><br><br>

  <label><strong>13</strong> Total value of recoverable tax for the period (AED)</label><br>
  <input type="text" value="0.00" id="nettotal2" name="nettotal2" value="<?php echo olds('nettotal2'); ?>" readonly class="readonly-field readtext col-md-6" style="width: 35%;"><br><br>

  <label><strong>14</strong> Payable tax for the period (AED)</label><br>
  <input type="text" value="0.00" id="nettotal3" name="nettotal3" value="<?php echo olds('nettotal3'); ?>" readonly class="readonly-field readtext col-md-6" style="width: 35%;">
</div>

<br>
<h5>Profit Margin Scheme</h5>

<div class="profit-margin-section" style="background-color: #e7e9f0; padding: 20px; border: 1px solid #ccc; width:100%;">
  <label><strong>Did you apply the Profit Margin Scheme in respect of any supplies made during the tax period?</strong></label><br><br>

  <input type="radio" id="profitMarginYes" name="profitMargin" value="Yes">
  <label for="profitMarginYes">Yes</label>&nbsp;&nbsp;

  <input type="radio" id="profitMarginNo" name="profitMargin" value="No" checked>
  <label for="profitMarginNo">No</label>
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
  function formatToTwoDecimal(value) {
    let num = parseFloat(value);
    if (isNaN(num)) return "0.00";
    return num.toFixed(2);
  }
  function updateNetTotals() {
    const totalVatAmount = parseFloat(document.getElementById('total_vat_amount')?.value) || 0;
    const totalField2 = parseFloat(document.getElementById('total_field2')?.value) || 0;

    // Set nettotal1 and nettotal2
    const net1 = document.getElementById('nettotal1');
    const net2 = document.getElementById('nettotal2');
    const net3 = document.getElementById('nettotal3');

    if (net1) net1.value = totalVatAmount.toFixed(2);
    if (net2) net2.value = totalField2.toFixed(2);
    if (net3) net3.value = (totalVatAmount - totalField2).toFixed(2);
  }

  function calculateTableTotals(tableId) {
    const table = document.getElementById(tableId);
    const amountFields = table.querySelectorAll('input[id^="d_amount"]');
    const vatFields = table.querySelectorAll('input[id^="d_vat_amount"]');

    let totalAmount = 0;
    let totalVAT = 0;

    amountFields.forEach(field => {
      const value = parseFloat(field.value) || 0;
      totalAmount += value;
    });

    vatFields.forEach(field => {
      const value = parseFloat(field.value) || 0;
      totalVAT += value;
    });

    // Set correct total fields per table
    const totalAmountField = table.querySelector('#total_amount') || table.querySelector('#total_field1');
    const totalVATField = table.querySelector('#total_vat_amount') || table.querySelector('#total_field2');

    if (totalAmountField) totalAmountField.value = totalAmount.toFixed(2);
    if (totalVATField) totalVATField.value = totalVAT.toFixed(2);

    // Update net totals after any table update
    updateNetTotals();
  }

  function bindLiveCalculation(tableId) {
    const table = document.getElementById(tableId);
    const inputs = table.querySelectorAll('input[id^="d_amount"], input[id^="d_vat_amount"]');

    inputs.forEach(input => {
      input.addEventListener('input', () => calculateTableTotals(tableId));
    });
  }

  document.addEventListener('DOMContentLoaded', () => {
    bindLiveCalculation('vat-table');    // Table 1
    bindLiveCalculation('vat-table-2');  // Table 2
  });

  // On blur, fix formatting in source field too
  sourceField.addEventListener('blur', function () {
    this.value = formatToTwoDecimal(this.value);
  });
   function formatToTwoDecimal(value) {
    let num = parseFloat(value);
    if (isNaN(num)) return "0.00";
    return num.toFixed(2);
  }

  function applyFormattingToAllFields() {
    const fields = document.querySelectorAll('.decimal-field');

    fields.forEach(field => {
      // Format on input and copy value to itself
      field.addEventListener('input', function () {
        let formatted = formatToTwoDecimal(this.value);
        this.value = formatted;
      });

      // Ensure proper format on blur
      field.addEventListener('blur', function () {
        this.value = formatToTwoDecimal(this.value);
      });
    });
  }
function submitForm() {
  document.getElementById("myForm").submit();
}
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
