<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../public/assets/efiling/css/index.css">
    <link rel="stylesheet" href="../../public/assets/efiling/css/EpayTaxNewPaymentPage3.css">
    <link rel="stylesheet" href="../../public/assets/efiling/css/Footer.css">
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

  <div class="container">
    <p class="heading">Dashboard > e-payTax > New Payment</p>

    <div class="paymentDetails" style="width:100%;">
    <div class="statusContainer">
        <div class="statusHolder mr-1">
          <img class="statusIcon" src="../../public/assets/efiling/images/icons8-tick-480.png">
          <p class="statusText">Add Nature Of Payment Details</p>
        </div>
        <div  class="statusHolder mr-1">
          <div class="statusIconText">2</div>
          <p class="statusText">Add Tax Break Up Details</p>
        </div>
        <div class="statusHolder">
          <div class="statusIconText statusDisabled statusDisabledBoreder">3</div>
          <p class="statusText statusDisabled">Add Payment Details</p>
        </div>
      </div>

      <h1>New Payment</h1>
      <h2>TAN:<?php $value = session('tan'); echo $value; ?></h2>
        <br>
    <p style="color:#dc3545;">Please note that if the collectee’s/deductee’s PAN is inoperative, then a higher rate of TCS/TDS will be collectible/deductible in accordance with section 206CC/206AA of the Income-tax Act, 1961 read with CBDT Notification No. 15 of 2023 dated 28th March 2023 and Circular No.3 of 2023 dated 28th March 2023.</p><br>
    <p style="color:#dc3545;">Please verify the status of PAN by accessing “Verify PAN Status” Pre-login service available under ‘Quick Links’ on e-Filing portal. Please make sure to mention the correct amount of TCS/TDS.</p>
    </br>
      <p>Type of Payment (Minor Head)</p>
      <p class="boldPara">TDS/TCS Payable by Taxpayer (200)</p>
    </div>
    
    <p class="marginTop">Tax Applicable (Major Head)</p>
    <input  type="radio" id="radio" class="extraMarginTop" name="type" value="1" <?php if($type == 1) { echo "checked"; } ?>>
    <label class="radioLabel" for="radio">Other than Company Deductee – Income Tax (Other than Companies) (0021)</label>

    <br>

    <input  type="radio" id="radioTwo" class="extraMarginTop" name="type" value="2" <?php if($type == 2) { echo "checked"; } ?>>
    <label class="radioLabel" for="radio">Company Deductee – Corporation Tax (0020)</label>

    <div class="formContainer">
      <form id="form_breakup" name="" action="/e-filing/edit-epaytax-submit/<?php echo $id; ?>" method="post">
        <input type="hidden" name="status" id="status" value="0" />
        <input type="hidden" name="form_type" id="form_type" value="<?php echo $type; ?>" />
        <div>
          <label>(a) Tax</label>
          <input type="number" class="input-number" name="tax"  placeholder="Rs 0" value="<?php echo $tax;?>"/>
        </div>
        <div>
          <label>(b) Surcharge</label>
          <input type="number" class="input-number" name="supercharge" placeholder="Rs 0" value="<?php echo $supercharge;?>"/>
        </div>
        <div>
          <label>(c) Cess</label>
          <input type="number" class="input-number" name="cess" placeholder="Rs 0" value="<?php echo $cess;?>"/>
        </div>
        <div>
          <label>(d) Interest</label>
          <input type="number" class="input-number" name="interest" placeholder="Rs 0" value="<?php echo $interest;?>"/>
        </div>
        <div>
          <label>(e) Penalty</label>
          <input type="number" class="input-number" name="penalty" placeholder="Rs 0" value="<?php echo $penalty;?>"/>
        </div>
        <div>
          <label>(f) Fee Under Section 234E</label>
          <input type="number" class="input-number" name="fees" placeholder="Rs 0" value="<?php echo $fee;?>"/>
        </div>

        <input type="hidden" name="total_amount" id="total_amount" value="<?php echo $total;?>">
        <input type="hidden" name="total_amount_words" id="total_amount_words" value="<?php echo $words_total;?>">
      </form>
      <div class="formFooter">
        <p>Total (a+b+c+d+e+f)</p>
        <p>&#x20B9; <span id="total"><?php echo number_format($total, 2);?></span></p>
      </div>
      <div class="formFooter">
        <p>In Words</p>
        <p id="wordsTotal"><?php echo $words_total;?></p>
      </div>
    </div>

    <button class="backButton" style="cursor:pointer;"><a href="/e-filing/edit-epaytax-nature/<?php echo $id; ?>">< Back</a></button>
    <button class="continueButton" style="cursor:pointer;">Continue ></button>
    <button class="backButton saveButton" style="cursor:pointer;">Save as Draft</button>
    
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/accounting.js/0.4.1/accounting.min.js"></script>
<script src="../../public/assets/efiling/js/navigate.js" ></script>
<script>
    $(document).ready(function(){
        $('.input-number').on('input', function() {
            // Calculate the sum of all input values
            let total = 0;
            $('.input-number').each(function() {
                let inputValue = parseFloat($(this).val()) || 0;
                total += inputValue;
            });

            // Format the total using accounting.js
            let formattedTotal = accounting.formatMoney(total, {
                symbol: "",
                precision: 2,
                thousand: ",",
            });

            // Display the formatted total in the 'total' div
            $('#total').text(formattedTotal);

            $("#total_amount").val(total);

            // Convert numeric total to words and display in another div
            let wordsRepresentation = numberToWords(accounting.unformat(formattedTotal));
            $('#wordsTotal').text("Rupees "+wordsRepresentation+" only");
            $("#total_amount_words").val("Rupees "+wordsRepresentation+" only");
            });

            $(".continueButton").click(function(){
                var total = $("#total_amount").val();

                if (total == 0) {
                    alert("Total amount paid cannot be zero");

                    return false;
                }

                $("#status").val(1);

                var selectedValue = $('input[name="type"]:checked').val();

                $("#form_type").val(selectedValue);

                $("#form_breakup").submit();
            });

            $(".saveButton").click(function(){
                var total = $("#total_amount").val();

                $("#status").val(0);

                var selectedValue = $('input[name="type"]:checked').val();

                $("#form_type").val(selectedValue);

                $("#form_breakup").submit();
            });
            
            $('input[type="radio"]').change(function() {
                // Update hidden field value with selected radio button's value
                $('#form_type').val($(this).val());
            });
    });


    // Function to convert a number to words
    function numberToWords(number) {
        const ones = ['', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine'];
        const teens = ['', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen'];
        const tens = ['', 'ten', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety'];

        function convertLessThanThousand(n) {
            if (n === 0) return '';
            if (n < 10) return ones[n];
            if (n == 10) return tens[n - 9];
            if (n < 20) return teens[n - 10];
            if (n < 100) return tens[Math.floor(n / 10)] + ' ' + ones[n % 10];
            return ones[Math.floor(n / 100)] + ' hundred ' + convertLessThanThousand(n % 100);
        }

        if (number === 0) return 'zero';
        let result = '';
        if (number < 0) {
            result += 'negative ';
            number = Math.abs(number);
        }

        // Billions
        if (Math.floor(number / 1000000000) > 0) {
            result += convertLessThanThousand(Math.floor(number / 1000000000)) + ' billion ';
            number %= 1000000000;
        }

        // Millions
        if (Math.floor(number / 1000000) > 0) {
            result += convertLessThanThousand(Math.floor(number / 1000000)) + ' million ';
            number %= 1000000;
        }

        // Thousands
        if (Math.floor(number / 1000) > 0) {
            result += convertLessThanThousand(Math.floor(number / 1000)) + ' thousand ';
            number %= 1000;
        }

        // Hundreds and less than a thousand
        result += convertLessThanThousand(number);

        return result.trim();
    }
  </script>
  </body>
</html>
