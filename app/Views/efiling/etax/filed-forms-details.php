<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../public/assets/efiling/css/index.css">
    <link rel="stylesheet" href="../public/assets/efiling/css/FiledFormPage2.css">
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

      <ul class="menu">
          <li>Dashboard</li>
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
      </ul>

  </nav>

  <div class="container">

<div class="introHolder">
    <div class="extraMarginBottom">
        <h1>Quarterly statement of deduction of tax under sub-section (3) of section 200 of the Income-tax Act, 1961 in respect of payments other than salary for the quarter ended June/September/December/March (Financial year)</h1>
        
        <!-- <span>
            <button class="exportButton">Export to excel</button>
            <button class="filter">Filter</button>
        </span> -->

    </div>
    <p>Form 26Q</p>
    <p class="boldPara">13 filings till date</p>
</div>

<div class="mainContainer">
    <?php foreach ($companies as $company) { ?>
        <div class="listHolder">

            <div class="listHeader">
                <h3>F.Y.<?php echo $company['financial_year'] ?? ''; ?> (<?php echo $company['quarter'] ?? ''; ?>)</h3>
                <a href="/e-filing/filed-forms-view/<?php echo $company['id'];?>">View Details</a>
            </div>

            <div class="listSection">

                <div>
                    <p class="marginControlPara subDetailTitle">Filing Date</p>
                    <h4><?php echo date('d-M-Y', strtotime($company['created_at'])); ?></h4>
                </div>

                <div class="leftBorder">
                    <div class="statusHolder">
                        <img src="../public/assets/efiling/images/correct.png" alt="success" class="correctImage displayControl">
                        <div class="statusData displayControl">
                            <p class="marginControlPara subDetailTitle">Accepted at CPC</p>
                            <h4 class="subDetailData"><?php echo date('d-M-Y', strtotime($company['created_at'])); ?></h4>
                        </div>
                    </div>

                    <div class="statusHolder">
                        <img src="../public/assets/efiling/images/correct.png" alt="success" class="correctImage displayControl">
                        <div class="statusData displayControl">
                            <p class="marginControlPara subDetailTitle">Accepted at e-filing</p>
                            <h4 class="subDetailData"><?php echo date('d-M-Y', strtotime($company['created_at'])); ?></h4>
                        </div>
                    </div>

                    <div class="statusHolder">
                        <img src="../public/assets/efiling/images/correct.png" alt="success" class="correctImage displayControl">
                        <div class="statusData displayControl">
                            <p class="marginControlPara subDetailTitle">Form submitted</p>
                            <h4 class="subDetailData"><?php echo date('d-M-Y', strtotime($company['created_at'])); ?></h4>
                        </div>
                    </div>
                </div>

                <div class="leftBorder">
                    <p class="marginControlPara"><span class="subDetailTitle">Filing Type:</span><b class="subDetailData"><?php echo $company['upload_type'] ?? ''; ?></b></p>
                    <p class="marginControlPara"><span class="subDetailTitle">Status:</span> <b class="subDetailData">Form verified</b></p>
                    <p class="subDetailTitle">Acknowledgement No:</p>
                    <p class="marginControlPara subDetailData"><b><?php echo $company['acknowledgement_no'] ?? ''; ?></b></p>
                    <p class="marginControlPara"><span class="subDetailTitle">RRR Number:</span> <span class="subDetailData"> View</span></p>
                    <p><span class="subDetailTitle">Filed By:</span> <bclass="subDetailData">SELF</b></p>
                </div>
                <div>
                    <button class="backButton downloadButton" id="recipt">Download Receipt</button>
                </div>

            </div>
        </div>
    <?php } ?>

    <!-- <div class="listHolder">

        <div class="listHeader">
            <h3>F.Y.2023-24 (Q1)</h3>
            <a href="#">View Details</a>
        </div>

        <div class="listSection">

            <div>
                <p class="marginControlPara subDetailTitle">Flling Date</p>
                <h4>31-Oct-2023</h4>
            </div>

            <div class="leftBorder">
                <div class="statusHolder">
                    <img src="images/correct.png" alt="success" class="correctImage displayControl">
                    <div class="statusData displayControl">
                        <p class="marginControlPara subDetailTitle">Accepted at CPC</p>
                        <h4 class="subDetailData">31-Oct-2023</h4>
                    </div>
                </div>

                <div class="statusHolder">
                    <img src="images/correct.png" alt="success" class="correctImage displayControl">
                    <div class="statusData displayControl">
                        <p class="marginControlPara subDetailTitle">Accepted at e-filling</p>
                        <h4 class="subDetailData">31-Oct-2023</h4>
                    </div>
                </div>

                <div class="statusHolder">
                    <img src="images/correct.png" alt="success" class="correctImage displayControl">
                    <div class="statusData displayControl">
                        <p class="marginControlPara subDetailTitle">Form submitted</p>
                        <h4 class="subDetailData">31-Oct-2023</h4>
                    </div>
                </div>
            </div>

            <div class="leftBorder">
                <p class="marginControlPara"><span class="subDetailTitle">Filing Type:</span><b class="subDetailData">Regular</b></p>
                <p class="marginControlPara"><span class="subDetailTitle">Status:</span> <b class="subDetailData">Form verified</b></p>
                <p class="subDetailTitle">Acknowledgement No:</p>
                <p class="marginControlPara subDetailData"><b>491164670311023</b></p>
                <p class="marginControlPara"><span class="subDetailTitle">RRR Numver:</span> <span class="subDetailData"> View</span></p>
                <p><span class="subDetailTitle">Filed By:</span> <bclass="subDetailData">SELF</b></p>
            </div>
            <div>
                <button class="backButton downloadButton">Download Recipt</button>
            </div>

        </div>
    </div>

    <div class="listHolder">

        <div class="listHeader">
            <h3>F.Y.2023-24 (Q4)</h3>
            <a>View Details</a>
        </div>

        <div class="listSection">

            <div>
                <p class="marginControlPara subDetailTitle">Flling Date</p>
                <h4>31-Oct-2023</h4>
            </div>

            <div class="leftBorder">
                <div class="statusHolder">
                    <img src="images/correct.png" alt="success" class="correctImage displayControl">
                    <div class="statusData displayControl">
                        <p class="marginControlPara subDetailTitle">Accepted at CPC</p>
                        <h4 class="subDetailData">31-Oct-2023</h4>
                    </div>
                </div>

                <div class="statusHolder">
                    <img src="images/correct.png" alt="success" class="correctImage displayControl">
                    <div class="statusData displayControl">
                        <p class="marginControlPara subDetailTitle">Accepted at e-filling</p>
                        <h4 class="subDetailData">31-Oct-2023</h4>
                    </div>
                </div>

                <div class="statusHolder">
                    <img src="images/correct.png" alt="success" class="correctImage displayControl">
                    <div class="statusData displayControl">
                        <p class="marginControlPara subDetailTitle">Form submitted</p>
                        <h4 class="subDetailData">31-Oct-2023</h4>
                    </div>
                </div>
            </div>

            <div class="leftBorder">
                <p class="marginControlPara"><span class="subDetailTitle">Filing Type:</span><b class="subDetailData">Regular</b></p>
                <p class="marginControlPara"><span class="subDetailTitle">Status:</span> <b class="subDetailData">Form verified</b></p>
                <p class="subDetailTitle">Acknowledgement No:</p>
                <p class="marginControlPara subDetailData"><b>491164670311023</b></p>
                <p class="marginControlPara"><span class="subDetailTitle">RRR Numver:</span> <span class="subDetailData"> View</span></p>
                <p><span class="subDetailTitle">Filed By:</span> <bclass="subDetailData">SELF</b></p>
            </div>
            <div>
                <button class="backButton downloadButton">Download Recipt</button>
            </div>

        </div>
    </div> -->

</div>

<button class="backButton" id="filedForm"><a href="/e-filing/filed-forms">< Back</a></button>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function(){
      
    });
  </script>
  </body>
</html>
