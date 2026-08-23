<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../public/assets/efiling/css/index.css">
    <link rel="stylesheet" href="../public/assets/efiling/css/EpayTax.css">
    <link rel="stylesheet" href="../public/assets/efiling/css/Footer.css">
    <title>E-Pay Tax</title>
    <style>
        .fileIncomeTaxSubmenu {
    display: none;
    position: absolute;
    top: 0;
    left: 100%; 
        margin: 0; width:100%;
        min-width:350px!important;
    }
    
    .submenu {
        min-width:250px;
    }
    
/* Style for the vertical three dots menu */
.dot {
    height: 3px;
    width: 3px;
    background-color: #555;
    border-radius: 50%;
    display: block;
    margin-bottom: 4px;
}

.dropdown-toggle {
    background-color: transparent;
    border: none;
}

.dropdown-menu {
    display: none;
    position: absolute;
    background-color: #fff;
    min-width: 150px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-item {
    padding: 8px 16px;
    text-decoration: none;
    display: block;
    color: #333;
    margin-left:0px;
}

.dropdown-item:hover {
    background-color: #f1f1f1;
}


    </style>
    <style>
  footer {
    background-color: #f4f4f4; /* Adjust the color as needed */
    color: #333; /* Adjust text color as needed */
    padding: 20px 20px;
    font-size: 14px;
}



.footer-content {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.footer-logo img {
    width: auto; /* Adjust as needed */
    height: 40px; /* Adjust as needed */
}

.footer-text {
    text-align: right;
}

.footer-text p {
    margin: 5px 0;
}

.footer-text a {
    color: #333; /* Adjust link color as needed */
    text-decoration: none;
}

.footer-text a:hover {
    text-decoration: underline;
}

</style>
  </head>
  <body>
    <nav>

      <div class="upperSection">
        <a href="#"><img src="../public/assets/efiling/images/efiling_logo.svg" alt="logo"></a>

          <span>
              <ul>
                  <li>Call Us</li>
                  <span>|</span>
                  <li>English</li>
                  <span>|</span>
                  <li><img src="../public/assets/efiling/images/reduceFont.svg"> <img src="../public/assets/efiling/images/defaultFont.svg"> <img src="../public/assets/efiling/images/increaseFont.svg"></li>
                  <span>|</span>
                  <li><img style="padding-top: 2px;" src="../public/assets/efiling/images/contrast.svg"></li>
                  <li class="profile">
                      <img style="height: 2rem;" src="../public/assets/efiling/images/userImageBlank.png" alt="profile">
                      <div>
                          <span style="font-weight:600;"><?php echo session('company_name'); ?></span>
                          <span>tds</span>
                      </div>
                  </li>
              </ul>
              <p>Do not have an account? <a href="#">Register</a> </p>
          </span>
      </div>

      <div class="menuWidthControl">
        <ul class="menu">
            <li><a class="dropDownLink" href="/e-filing/dashboard">Dashboard</a></li>
            <li class="dropDown">e-File
                <ul class="submenu">
                    <a class="dropDownLink font-black fileIncomeTaxLink"  href="#"><li>Income Tax Forms</li></a>
                    <ul class="submenu fileIncomeTaxSubmenu">
                         <a class="dropDownLink font-black"  href="/e-filing/income-tax"><li>File Income Tax Forms</li></a>
                        <a class="dropDownLink font-black" href="/e-filing/filed-forms"><li>View Filed Forms</li></a>
                        <a class="dropDownLink font-black" href="#"><li>View 15CA Bulk Filed Forms Status</li></a>
                    </ul>
                    
                    <a class="dropDownLink font-black" href="/e-filing/epaytax"><li>E-Pay Tax</li></a>
                </ul>
            </li>
            <li>Authorised Partners</li>
            <li>Services</li>
            <li>Pending Actions</li>
            <li>Grievances</li>
            <li>Help</li>
            <li><a class="dropDownLink" href="/e-filing/logout">Logout</a></li>
        </ul>
      </div>

  </nav>

      <!-- <div class="container">

        <h3 class="heading">Dashboard > e-payTax</h3>

        <div class="headerComponent">
          <h1>e-Pay Tax</h1>
          <button><a href="/e-filing/new-epaytax">+ New Payment</a></button>
        </div>

        <p class="linkHolder">
            Please click on New Payment for tax payment through (i) Net Banking (ii)
            Debit Card (iii) Over the Counter (iv) NEFT/RTGS (v) Payment Gateway for
            <a href="#">these banks</a>
        </p> 

        <p class="colorChangeBlue">
          Please Note if the amount is debited from your bank account and the status
          is not yet updated, then please wait for the status update before
          generating another challan for payment. It takes some time to reconcile
          and update the CRN status with bank.
        </p>

        <div class="formContainer">
          <div class="formHeader">
            <ul>
              <li>Saved Draft</li>
              <li>Generated Challens</li>
              <li>Payment History</li>
              <li>Challan Status Inquiry (CSI) Files</li>
            </ul>
            <div>
              <button>Delete</button>
              <button class="filterButton">Filter</button>
            </div>
          </div>

          <div class="formHolder">

            <table>
              <thead>
                <form>
                <tr>
                  <th><input type="checkbox" /></th>
                  <th>Type of Payment</th>
                  <th>Assessement Year</th>
                  <th>Saved On</th>
                  <th>Action(s)</th>
                </tr>
                </form>
              </thead>

              <tbody>
               
              </tbody>
            </table>

          </div>

        </div>
        <button class="backButton"><a href="/e-filing/dashboard">Go To Dashboard</a></button>
        <h4 class="bottomDivider">Need Help?</h4>
        <ul class="lastLinkHolder">
          <li><a class="lastLink">What is Assessignment year?</a></li>
        </ul>
      </div> -->

      <div class="container">

<h3 class="heading">Dashboard > e-payTax</h3>

<div class="headerComponent">
  <h1>e-Pay Tax</h1>
  <button><a href="/e-filing/new-epaytax">+ New Payment</a></button>
</div>

<p class="linkHolder">
    Please click on New Payment for tax payment through (i) Net Banking (ii)
    Debit Card (iii) Over the Counter (iv) NEFT/RTGS (v) Payment Gateway for
    <a href="#">these banks</a>
</p> 

<p class="colorChangeBlue">
  Please Note if the amount is debited from your bank account and the status
  is not yet updated, then please wait for the status update before
  generating another challan for payment. It takes some time to reconcile
  and update the CRN status with bank.
</p>

<div class="formContainer">
  <div class="formHeader">
    <ul id="navigationList">
      <li class="titleColor titleSelected" data-target="savedDraftDiv">Saved Draft</li>
      <li class="titleColor" data-target="generatedChallanDiv">Generated Challans</li>
      <li class="titleColor" data-target="paymentHistoryDiv">Payment History</li>
      <li class="titleColor">Challan Status Inquiry (CSI) Files</li>
    </ul>
    <div>
      <button>Delete</button>
      <button class="filterButton">Filter</button>
    </div>
  </div>

  <div class="formHolder contentDiv" id="savedDraftDiv">

    <table>
      <thead>
        <form>
        <tr>
          <th><input type="checkbox" /></th>
          <th>Type of Payment</th>
          <th>Assessment Year</th>
          <th>Saved On</th>
          <th>Action(s)</th>
        </tr>
        </form>
      </thead>

      <tbody>
        <!-- <form>
        <tr>
          <td><input type="checkbox" /></td>
          <td>TDS/TCS Payable by Taxpayer(200)</td>
          <td>2024-2025</td>
          <td>06-Nov-2023</td>
          <td>
            <button id="editButton" class="optionButton">Edit</button> 
            <button id="deleteButton" class="optionButton deleteColor">Delete</button>
          </td>

          Add class empty to other td elements and remove from no rows found 

          <td class="text-center empty">No Rows Found</td>
        </tr>
        </form> -->

        <?php if($taxes ?? null) { foreach($taxes as $epaytax): ?>
                  <form>
                  <tr>
                    <td><input type="checkbox" /></td>
                    <td>TDS/TCS Payable by Taxpayer(200)</td>
                    <td><?=$epaytax['assesment_year'];?></td>
                    <td><?=date('d-M-Y', strtotime($epaytax['created_at']));?></td>
                    <td>
            <button id="editButton" class="optionButton"><a href="/e-filing/edit-epaytax/<?=$epaytax['id'];?>">Edit</a></button> 
            <button id="deleteButton" class="optionButton deleteColor"><a href="/e-filing/delete-epaytax/<?=$epaytax['id'];?>">Delete</a></button>
          </td>
                  </tr>
                  </form>
                <?php endforeach; } ?>
      </tbody>
    </table>

  </div>
  
   <div class="formHolder contentDiv" id="generatedChallanDiv">

    <table>
      <thead>
        <form>
        <tr>
          <th>CRN</th>
          <th>Type of Payment</th>
          <th>Assessment Year</th>
          <th>Amount()</th>
          <th>Mode</th>
          <th>Status</th>
          <th>Created On</th>
          <th>Valid Till</th>
          <th>Actions</th>
        </tr>
        </form>
      </thead>

      <tbody>
        <tr>
            <td colspan="9">No rows to show</td>
        </tr>
      </tbody>
    </table>

  </div>

  <div id="paymentHistoryDiv" class="formHolder contentDiv">
    <table>
      <thead>
        <form>
        <tr>
          <th><input type="checkbox" /></th>
          <th>CIN</th>
          <th>Bank Reference Number</th>
          <th>Assessment Year</th>
          <th>Type Of Payment</th>
          <th>Amount</th>
          <th>Payment Date and Time</th>
          <th>Actions</th>
        </tr>
        </form>
      </thead>

      <tbody>
        <?php if($payments ?? null) { foreach($payments as $payment): ?>
            <form>
              <tr>
                <td><input type="checkbox" /></td>
                <td class="fontSizeControl"><?php echo $payment['cin']; ?></td>
                <td class="fontSizeControl">521544694</td>
                <td class="fontSizeControl"><?php echo $payment['assesment_year']; ?></td>
                <td class="fontSizeControl">TDS/TCS Payable by Taxpayer(200)</td>
                <td class="fontSizeControl"><?php echo $payment['total']; ?></td>
                <td class="fontSizeControl"><?php echo date('d-M-Y H:i:s', strtotime($payment['created_at'])); ?></td>
                <td>
                  <!--<button id="download" class="optionButton fontSizeControl"><a target="_blank" href="/e-filing/income-tax-receipt/<?php echo $payment['id']?>">Download</a></button> -->
                  <!--<button id="copy" class="optionButton fontSizeControl">Copy</button>-->
                  <!--<button id="viewDetails" class="optionButton fontSizeControl">View Details</button>-->
                  
                  <div class="dropdown">
                    <button class="optionButton fontSizeControl dropdown-toggle" type="button" id="dropdownMenuButton">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" target="_blank" href="/e-filing/income-tax-receipt/<?php echo $payment['id']?>">Download</a>
        <a class="dropdown-item" id="copy" href="#">Copy</a>
        <a class="dropdown-item" id="" href="/e-filing/income-tax-detail/<?php echo $payment['id']?>">View Details</a>
    </div>
                </div>

                </td>
              </tr>
            </form>
        <?php endforeach; } ?>
        <!-- <form>
          <tr>
            <td><input type="checkbox" /></td>
            <td class="fontSizeControl">23120701163356UBIN</td>
            <td class="fontSizeControl">521544694</td>
            <td class="fontSizeControl">2024-25</td>
            <td class="fontSizeControl">TDS/TCS Payable by Taxpayer(200)</td>
            <td class="fontSizeControl">400</td>
            <td class="fontSizeControl">06-Dec-2023 19:07:41</td>
            <td>
              <button id="optionButton" class="optionButton fontSizeControl">Download</button> 
              <button id="optionButton" class="optionButton fontSizeControl">Copy</button>
              <button id="optionButton" class="optionButton fontSizeControl">View Details</button>
            </td>
          </tr>
          </form>

          <form>
            <tr>
              <td><input type="checkbox" /></td>
              <td class="fontSizeControl">23120701163356UBIN</td>
              <td class="fontSizeControl">521544694</td>
              <td class="fontSizeControl">2024-25</td>
              <td class="fontSizeControl">TDS/TCS Payable by Taxpayer(200)</td>
              <td class="fontSizeControl">400</td>
              <td class="fontSizeControl">06-Dec-2023 19:07:41</td>
              <td>
                <button id="optionButton" class="optionButton fontSizeControl">Download</button> 
                <button id="optionButton" class="optionButton fontSizeControl">Copy</button>
                <button id="optionButton" class="optionButton fontSizeControl">View Details</button>
              </td>
            </tr>
            </form> -->
      </tbody>
    </table>

    
  </div>

</div>


<button class="backButton" id="goDashboard"><a href="/e-filing/dashboard">Go To Dashboard</a></button>
<h4 class="bottomDivider">Need Help?</h4>
<ul class="lastLinkHolder">
  <li><a class="lastLink">What is Assessment Year?</a></li>
</ul>

</div>

<footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo">
                <img src="../../public/assets/efiling/images/emblem.svg" alt="Logo" />
            </div>
            <div class="footer-text">
                 <p>
                    <a href="#">Feedback</a> | 
                    <a href="#">Website Policies</a> | 
                    <a href="#">Accessibility Statement</a> | 
                    <a href="#">Site Map</a> | 
                    <a href="#">Browser Support</a> | 
                    <a href="#">CoBrowse Help</a>
                </p>
                <p>Last reviewed and updated on: <?php echo date("j-M-Y"); ?></p>
                <p>This site is best viewed in 1024 x 768 resolution with the latest version of Chrome, Firefox, Safari, and Internet Explorer.</p>
                <p>Copyright © Income Tax Department, Ministry of Finance, Government of India. All Rights Reserved</p>
            </div>
        </div>
   </div>
</footer>
    
    <script src="../public/assets/efiling/js/navigate.js" ></script>
    <script src="../public/assets/efiling/js/E-pay_Tax.js"></script>
    <script>
     document.addEventListener("DOMContentLoaded", function() {
    // Query all dropdown buttons if there are multiple, otherwise query a single button
    var dropdownButtons = document.querySelectorAll(".optionButton"); // Use . for class
    var dropdownMenus = document.querySelectorAll(".dropdown-menu");

    // Add click event listener to each dropdown button
    dropdownButtons.forEach(function(dropdownButton, index) {
        dropdownButton.addEventListener("click", function(event) {
            event.stopPropagation(); // Prevent click from immediately bubbling to document

            // Toggle the corresponding dropdown menu
            if (dropdownMenus[index].style.display === "block") {
                dropdownMenus[index].style.display = "none";
            } else {
                // Hide all other dropdowns
                dropdownMenus.forEach(function(menu, idx) {
                    if (index !== idx) {
                        menu.style.display = "none";
                    }
                });
                // Show this dropdown
                dropdownMenus[index].style.display = "block";
            }
        });
    });

    // Hide all dropdown menus when clicking outside of them
    document.addEventListener("click", function(event) {
        dropdownMenus.forEach(function(menu) {
            if (!menu.contains(event.target)) {
                menu.style.display = "none";
            }
        });
    });
});

    </script>
  </body>
</html>
