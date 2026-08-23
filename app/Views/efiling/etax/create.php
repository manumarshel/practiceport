<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../public/assets/efiling/css/index.css">
    <link rel="stylesheet" href="../public/assets/efiling/css/FormTDS.css">
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


  <div class="container">

<p class="heading">Dashboard > Income Tax Forms >Form TDS</p>
<div class="mainContainer">

  <div>
  <form id="tds_submit" name="tds_form" method="POST" action="/e-filing/tax-submit" enctype="multipart/form-data">

    <div class="containerOne containerSpecific">
      <div class="topContainer">
        <p>Please Select Form</p>
        <select name="form_type" id="form_type">
              <option value="">Select</option>
              <option value="24Q">24Q (Salary)</option>
              <option value="26Q">26Q (Other than salary)</option>
              <option value="27Q">27Q (Non Resident-Other than Salary)</option>
              <option value="27EQ">27EQ (TCS)</option>
            </select>
      </div>
      <div id="24Q" class="sideContainer">
        <p class="boldText">
          <span>24Q</span>
          <span>(Salary) </span>
          <span>Quarterly statement of deduction of tax under sub-section (3) of section 200 of the Income-tax Act, 1961 in respect of salary for the quarter ended…(June/September/December/March) … (Financial year)</span>
        </p>
      </div>
      <div id="26Q" class="sideContainer">
        <p class="boldText">
          <span>26Q</span>
          <span>(Other than Salary)</span> 
          <span>Quarterly statement of deduction of tax under sub-section (3) of section 200 of the Income-tax Act, 1961 in respect of payments other than salary for the quarter ended… (June/September/December/March) …(Financial year)</span>
        </p>
      </div>
      <div id="27Q" class="sideContainer">
        <p class="boldText">
          <span>27Q</span> 
          <span>(Non- Resident - Other than Salary)</span> 
          <span>Quarterly statement of deduction of tax under sub-section (3) of section 200 of the Income-tax Act, 1961 in respect of payments other than Salary made to non-residents for the quarter ended… June/September/December/March …(Financial year)</span>
        </p>
      </div>
      <div id="27EQ" class="sideContainer">
        <p class="boldText">
          <span>27EQ</span> 
          <span>(TCS)</span> 
          <span>Quarterly statement of collection of tax at Source under section 206C of Income-tax Act, 1961 for the quarter ended… June/September/December/March …(Financial year)</span>
        </p>
      </div>
    </div>

    <div class="containerOne">
      <p>TAN</p>
      <p><?php echo session('tan'); ?></p>
      <div>
        <p>Select Financial Year and Quarter*</p>

        <select name="year" id="years">
              <option value="">Select</option>
                <option value="2010-11">2010-11</option>
                <option value="2011-12">2011-12</option>
                <option value="2012-13">2012-13</option>
                <option value="2013-14">2013-14</option>
                <option value="2014-15">2014-15</option>
                <option value="2015-16">2015-16</option>
                <option value="2016-17">2016-17</option>
                <option value="2017-18">2017-18</option>
                <option value="2018-19">2018-19</option>
                <option value="2019-20">2019-20</option>
                <option value="2020-21">2020-21</option>
                <option value="2021-22">2021-22</option>
                <option value="2022-23">2022-23</option>
                <option value="2023-24">2023-24</option>
                <option value="2024-25">2024-25</option>
              </select>

       
        <select class="marginLeft" name="quarter" id="quarter">
              <option value="">Select Quarter</option>
                <option value="Q1">Q1</option>
                <option value="Q2">Q2</option>
                <option value="Q3">Q3</option>
                <option value="Q4">Q4</option>
              </select>
        
        <div class="noError leftAlign">Error : Please select an option from the drop down menu.</div>
        <!-- change class to error from noError to show error message -->

        <p>Upload type</p>
        <div class="radioButtons">
                <input type="radio" id="Regular" name="upload_type" value="Regular">
                <label for="Regular" class="regular">Regular</label>
                <input type="radio" id="Correction" name="upload_type" value="Correction">
                <label for="Correction">Correction</label>

          <div class="noError leftAlign extraMargin">Error : Please choose an option</div>
          <!-- change class to error from noError to show error message -->

          <div id="correctionDiv" class="correctionDiv">
            <div class="inputHolder">
              <label for="originalRRR">Original RRR No*</label>
              <input class="extraMargin inputPadding" type="text" id="originalRRR">
            </div>
            <div class="inputHolder">
              <label for="previousRRR">Previous RRR No*</label>
              <input class="extraMargin inputPadding" type="text" id="previousRRR">
            </div>
          </div>
        </div>           
      </div>
    </div>

    <div class="containerTwo">
      <div>
        <label for="myfile">Upload TDS(zip) File</label>
        <span class="upload-btn-wrapper">        
          <button class="btn" id="file_name"> <img class="attachIcon" src="../public/assets/efiling/images/icons8-paperclip-48.png"> Attach file</button>
          <input type="file" id="myfile" name="tds_file" accept="zip,application/octet-stream,application/zip,application/x-zip,application/x-zip-compressed" />
        </span>
      </div>

      <p class="marginBottom">FVU version ( 8.5 )</p>

      <h5>Note:</h5>

      <p class="marginControl">
        1, If “Proceed to e-Verify” is not getting enabled even after filling
        all the mandatory details, please check if your profile is completely
        updated. Basic details, Contact details, key person Details etc need to
        be updated mandatoriliy for the “E-verification” functionality to get
        enabled.
      </p>

      <p class="marginControl">
        2, After filing TDS return, please check processing status of TDS return
        in “view filed forms” service after two days. If the TDS return gets
        rejected for any reason at E-filing/ CPC-TDS, same may be checked then
        and the TDS return can be filed again.
      </p>
    </div>

  </form>

  </div>
</div>

<button class="backButton">< Back</button>
    <button class="continueButton" style="cursor: pointer;" disabled="disabled">Proceed to e-Verify</button>

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
<script src="../public/assets/efiling/js/navigate.js" ></script>
<script src="../public/assets/efiling/js/formTDS.js"></script>
<script>
    $(document).ready(function(){
        $("#form_type").change(function(){
            if($(this).val() != ""){
                checkForm();
            }
        });

        $("#years").change(function(){
          if($(this).val() != ""){
            checkForm();
          }
        });

        $("#quarter").change(function(){
          if($(this).val() != ""){
            checkForm();
          }
        });

        $('input[name="upload_type"]').change(function(){
            checkForm();
        });

        $("#myfile").change(function(){
          if($(this).val() != ""){
            checkForm();
          }
        });

        $("#previousRRR").keyup(function(){
          if($(this).val() != ""){
            checkForm();
          }
        });


        $("#originalRRR").keyup(function(){
          if($(this).val() != ""){
            checkForm();
          }
        });

        $(".continueButton").click(function(){
            $("#tds_submit").submit();
        });
        
        $('#myfile').on('change', function(){ 
          // Get the file name
          var fileName = $(this).val().split('\\').pop(); // This will remove the path and only keep the file name
          // Replace the "Choose a file..." label
          $('#file_name').text(fileName); // Update the text of the #file-name element
        });
    });

    function checkForm ()
    {
      $(".continueButton").prop('disabled', true);
        var form_type = $("#form_type").val();
        if (form_type == "") {
            return false;
        }

        var years = $("#years").val();
        if (years == "") {
            return false;
        }

        var quarter = $("#quarter").val();
        if (quarter == "") {
            return false;
        }

        if ($('#Regular').prop('checked') || $('#Correction').prop('checked')) {
        } else {
          return false;
        }

        if ($('#Correction').prop('checked')) {
          var originalRRR = $("#originalRRR").val();
          if (originalRRR == "") {
              return false;
          }

          var previousRRR = $("#previousRRR").val();
          if (previousRRR == "") {
              return false;
          }
        }

        if ($("#myfile").prop('files').length <= 0) {
          return false;
        }

        $(".continueButton").prop('disabled', false);
    }
  </script>
  </body>
</html>
