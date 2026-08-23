<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../public/assets/efiling/css/index.css">
    <link rel="stylesheet" href="../../public/assets/efiling/css/EpayTaxNewPayment.css">
    <link rel="stylesheet" href="../../public/assets/efiling/css/Footer.css">
    <title>New Payment</title>
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
<style>
.details-section {
  margin-bottom: 20px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  background-color: #fff; /* Add background color if you want the shadow to stand out more */
  padding-top:20px;
  padding-left:10px;
  padding-right:10px;
  padding-bottom:20px;
}
  .receipt-section, .details-section {
  margin-bottom: 20px;
}

.receipt-section h2, .details-section h3 {
  padding: 10px;
}

.details-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
  gap: 10px;
  padding: 10px;
}

.details-grid p {
  padding: 10px;
  padding-bottom:20px;
}

.buttons {
  display: flex;
  justify-content: space-between;
}

button {
  padding: 10px 20px;
  cursor: pointer;
  background-color: #333;
  color: white;
  border: none;
  border-radius: 4px;
  transition: background-color 0.3s;
}

button:hover {
  background-color: #555;
}

h1, h2, h3 {
  color: #333;
}

.download-button {
  display: inline-block;
  padding: 10px 20px;
  background-color: #007bff; /* Bootstrap primary blue by default */
  color: #ffffff;
  text-align: center;
  text-decoration: none;
  border-radius: 5px;
  font-size: 16px;
  font-weight: bold;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
  transition: all 0.3s ease;
}

.download-button:hover,
.download-button:focus {
  background-color: #0056b3; /* A darker blue for hover state */
  text-decoration: none;
  color: #ffffff;
}

</style>
  </head>
  <body>
    <nav>

      <div class="upperSection">
        <a href="#"><img src="../../public/assets/efiling/images/efiling_logo.svg" alt="logo"></a>

          <span>
              <ul>
                  <li>Call Us</li>
                  <span>|</span>
                  <li>English</li>
                  <span>|</span>
                  <li><img src="../../public/assets/efiling/images/reduceFont.svg"> <img src="../../public/assets/efiling/images/defaultFont.svg"> <img src="../../public/assets/efiling/images/increaseFont.svg"></li>
                  <span>|</span>
                  <li><img style="padding-top: 2px;" src="../../public/assets/efiling/images/contrast.svg"></li>
                  <li class="profile">
                      <img style="height: 2rem;" src="../../public/assets/efiling/images/userImageBlank.png" alt="profile">
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



  
  <div class="container">
    <div class="container">
  <h1>Challan Receipt</h1>
  
  <div class="receipt-section">
    <h2>CIN - 24030701243529UBIN</h2>
  </div>
  
  <?php 
        // Split the string into parts
$years = explode('-', $assesment_year);

// Subtract one year from each part
$adjusted_years = array_map(function($year) {
    return $year - 1;
}, $years);

// Combine back into a string
$adjusted_year_string = implode('-', $adjusted_years);
  ?>
  
  <div class="details-section">
    <h3>Taxpayer Details</h3>
    <div class="details-grid">
      <p><strong>PAN</strong><br><?php echo session('pan');?></p>
      <p><strong>Name</strong><br><?php echo session('company_name');?></p>
      <p><strong>Assessment Year</strong><br><?php echo $assesment_year; ?></p>
      <p><strong>Financial Year</strong><br><?php echo $adjusted_year_string; ?></p>
      <p><strong>Tax Applicable (Major Head)</strong><br>Income Tax (Other than Companies) (0021)</p>
      <p><strong>Type of Payment (Minor Head)</strong><br>TDS/TCS Payable by Taxpayer (200)</p>
      <p><strong>Amount (in ₹)</strong><br>₹ <?php echo $total; ?></p>
      <p><strong>Amount (in words)</strong><br><?php echo $words_total; ?></p>
    </div>
  </div>

  <div class="details-section">
    <h3>Payment Details</h3>
    <div class="details-grid">
      <p><strong>CIN</strong><br><?php echo $cin;?></p>
      <p><strong>Alternate CIN</strong><br><?php echo $cin;?></p>
      
<p><strong>Payment Mode</strong><br>Net Banking</p>
<p><strong>Bank Name</strong><br>Union Bank Of India</p>
<p><strong>Bank Reference Number</strong><br>523189190</p>
<p><strong>Date of Payment</strong><br><?php echo date('d/m/Y', strtotime($created_at)); ?></p>
<p><strong>BSR code</strong><br>0290071</p>
<p><strong>Tender Date</strong><br><?php echo date('d/m/Y', strtotime($created_at)); ?></p>
<p><strong>Challan Number</strong><br>26020</p>
<p><strong>Nature of Payment</strong><br><?php echo $code; ?></p>
</div>

  </div>
  <div class="buttons">
    <button onclick="window.history.back();">Back</button>
    <a href="/e-filing/income-tax-receipt/<?php echo $id?>" target="_blank" class="download-button">Download</a>
  </div>
</div>
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
<script src="../../public/assets/efiling/js/navigate.js" ></script>
<script src="../../public/assets/efiling/js/newPayment.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  $(document).ready(function(){
      $("#year").on('change', function(e){
        $("#yearText").hide();
        $("#tds_button").prop('disabled', true);
        var inputValue = $(this).val();

        if(inputValue != "") {
          var selectedOption = $(this).find(':selected');
          var dataAttribute = selectedOption.attr('data-year');

          $("#yearSpan").text($(this).val());
          $("#taxYearSpan").text(dataAttribute);
          $("#yearText").show();
          $("#tds_button").prop('disabled', false);
        }
      });

    $("#tds_button").on('click', function(e){
		e.preventDefault();

		var year = $("#year").val();

		if (year != "") {
			$("#newPaymentSector").submit();
		}
	});
  });
</script>
  </body>
</html>
