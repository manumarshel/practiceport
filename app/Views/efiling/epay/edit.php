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

  <!-- <div class="container">
    <p class="heading">Dashboard > e-payTax > New Payment</p>

    <div class="paymentDetails">
      <h4>New Payment</h4>
      <form id="newPaymentSector" class="newPaymentSector" method="POST" action="/e-filing/new-epaytax-payment-nature">
        <p>TAN:<?php $value = session('tan'); echo substr($value, 0, 2) . str_repeat('*', max(0, strlen($value) - 2)); ?>**</p>
        <label>Assessment Year*</label>
        <select name="year" id="year">
          <option value="">Select</option>
          <option value="2024-2025" data-year="2023-2024">2024-2025</option>
          <option value="2023-2024" data-year="2022-2023">2023-2024</option>
          <option value="2022-2023" data-year="2021-2022">2022-2023</option>
          <option value="2021-2022" data-year="2020-2021">2021-2022</option>
          <option value="2021-2022" data-year="2020-2021">2020-2021</option>
        </select>
      </form>
    </div>
    <p class="listText" id="yearText" style="display: none;">
        Financial Year is <span id="taxYearSpan"></span> fo the selected assissignment year <span id="yearSpan"></span>
    </p>
      <div class="instruction"> * Indicates mandatory fields</div>
    <div>
      
      <div class="paymentListHolder">

        <div class="subHolder">
          <div class="textHolder">
            <p class="title">Pay TDS</p>
            
            <p class="listText">
              Section 192, Section 193, Section 194, Section 194A,Section 194B,
              Section 194BA, Section… <a title="Section 192, Section 193, Section 194, Section 194A,Section 194B, Section 194BB, Section 194DA, Section 194LA, Section 194LB, Section 194LC, Section 194LD, Section 194C, Section 194D, Section 194E, Section 194EE, Section 194F, Section 194G, Section 194H, Section 194I, Section 194IC, Section 194J, Section 194K, Section 194LBA, Section 194LBB, Section 194LBC, Section 194N, Section 194O, Section 194P, Section 194Q, Section 195, Section 196A, Section 196B, Section 196C, Section 196D, Section 196D(1A), Section 206C.">Read More </a>
            </p>
          </div>
          <div class="proceedButtonHolder">
            <button id="tds_button" style="cursor: pointer;" class="proceedButton" disabled>Proceed</button>
          </div>
        </div>
  
        <div class="subHolder">
          <div class="textHolder">
          <p class="title">Pay Outstanding Demand</p>
          <p class="listText">Payment of demand raised against previous years</p>
          </div>
          <div class="proceedButtonHolder">
            <button class="proceedButton" style="cursor: pointer;" disabled>Proceed</button>
          </div>
        </div>
  
        <div class="subHolder">
          <div class="textHolder">
          <p class="title">Pay Fee [Other Receipts (500)]</p>
          <p>Appeal Fee</p>
          </div>
          <div class="proceedButtonHolder">
            <button style="cursor: pointer;" class="proceedButton" disabled>Proceed</button>
          </div>
        </div>
        
      </div>
    </div>

    <button class="backButton"><a href="/e-filing/epaytax">< Back</a></button>
    <h4 class="bottomDivider">Need Help?</h4>
    <ul class="lastLinkHolder">
      <li><a class="lastLink">What is Assessignment year?</a></li>
    </ul>

  </div> -->
   <?php 
        function decrementYearRange($yearRange) {
    // Split the year range into an array
    $years = explode('-', $yearRange);

    // Check if we have exactly two elements (two years)
    if (count($years) == 2) {
        // Decrement each year
        $years[0] = $years[0] - 1;
        $years[1] = $years[1] - 1;

        // Join the years back into a string
        return implode('-', $years);
    }

    // Return original string if format is not as expected
    return $yearRange;
} ?>

  
  <div class="container">
    <p class="heading">Dashboard > e-payTax > New Payment</p>

    <div class="paymentDetails">
      <h4>New Payment</h4>
      <form id="newPaymentSector" class="newPaymentSector" method="POST" action="/e-filing/edit-epaytax-payment-nature/<?php echo $id; ?>">
        <p>TAN:<?php $value = session('tan'); echo $value; ?></p>
        <label>Assessment Year*</label>
        <select name="year" id="year">
          <option value="">Select</option>
          <option value="2025-2026" data-year="2024-2025" <?php if($assesment_year == "2025-2026") { echo "selected"; } ?>>2025-2026</option>
          <option value="2024-2025" data-year="2023-2024" <?php if($assesment_year == "2024-2025") { echo "selected"; } ?>>2024-2025</option>
          <option value="2023-2024" data-year="2022-2023" <?php if($assesment_year == "2023-2024") { echo "selected"; } ?>>2023-2024</option>
          <option value="2022-2023" data-year="2021-2022" <?php if($assesment_year == "2022-2023") { echo "selected"; } ?>>2022-2023</option>
          <option value="2021-2022" data-year="2020-2021" <?php if($assesment_year == "2021-2022") { echo "selected"; } ?>>2021-2022</option>
          <option value="2020-2021" data-year="2019-2020" <?php if($assesment_year == "2020-2021") { echo "selected"; } ?>>2020-2021</option>
        </select>

        <div id="yearText" class="optionDetails" style="display:block;">
        <p >
        Financial Year is <span id="taxYearSpan"><?php echo decrementYearRange($assesment_year); ?></span> for the selected assessment year <span id="yearSpan"><?php echo $assesment_year; ?></span>
    </p>
        </div>

        <!-- <div id="2022-2023" class="optionDetails">
          <p>Financial Year is 2022-23 for the selected Assessment Year 2023-24</p>
        </div>

        <div id="2021-2022" class="optionDetails">
          <p>Financial Year is 2021-22 for the selected Assessment Year 2022-23</p>
        </div> -->

      </form>
    </div>

      <div class="instruction"> * Indicates mandatory fields</div>
    <div>
      
      <div class="paymentListHolder">

        <div class="subHolder">
          <div class="textHolder">
            <p class="title">Pay TDS/TCS</p>
            <!--<p class="listText">-->
            <!--  Financial Year is 2023-2024 fo the selected assissignment year 20xx-20xx-->
            <!--</p>-->
            <p class="listText">
              Section 192, Section 193, Section 194, Section 194A,Section 194B,
              Section 194BA, Section… <a title="Section 192, Section 193, Section 194, Section 194A,Section 194B, Section 194BB, Section 194DA, Section 194LA, Section 194LB, Section 194LC, Section 194LD, Section 194C, Section 194D, Section 194E, Section 194EE, Section 194F, Section 194G, Section 194H, Section 194I, Section 194IC, Section 194J, Section 194K, Section 194LBA, Section 194LBB, Section 194LBC, Section 194N, Section 194O, Section 194P, Section 194Q, Section 195, Section 196A, Section 196B, Section 196C, Section 196D, Section 196D(1A), Section 206C.">Read More </a>
            </p>
          </div>
          <div class="proceedButtonHolder">
            <button id="tds_button" style="cursor: pointer;" class="proceedButton">Proceed</button>
          </div>
        </div>
  
        <div class="subHolder">
          <div class="textHolder">
          <p class="title">Pay Outstanding Demand</p>
          <p class="listText">Payment of demand raised against previous years</p>
          </div>
          <div class="proceedButtonHolder">
            <button class="proceedButton">Proceed</button>
          </div>
        </div>
  
        <div class="subHolder">
          <div class="textHolder">
          <p class="title">Pay Fee [Other Receipts (500)]</p>
          <p>Appeal Fee</p>
          </div>
          <div class="proceedButtonHolder">
            <button class="proceedButton">Proceed</button>
          </div>
        </div>
        
      </div>
    </div>

    <button class="backButton" id="epayTax">< Back</button>
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
