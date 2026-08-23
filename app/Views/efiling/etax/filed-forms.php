<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../public/assets/efiling/css/index.css">
    <link rel="stylesheet" href="../public/assets/efiling/css/FiledForm.css">
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
        <p class="heading">Dashboard>e-file>Income tax Forms>View Filed Forms</p>

        <div class="introHolder">
            <h2>View Filed Forms</h2>

            <form class="controlForm">
                <input class="search" type="text" placeholder="Search by Form/No">
                <button class="filter">Filter</button>
            </form>
        </div>

        <div class="mainContainer">
            <p class="boldPara"> You have filed</p>

            <div class="boxContainer">
                <div class="partOne">
                    <h3>Quarterly statement of deduction...</h3>
                    <p>Form 26Q</p>
                </div>
                <div class="partTwo">
                    <p><b>13</b> Filings till date</p>
                </div>
                <div class="partThree">
                    <p>Recently filed F.Y</p>
                    <div>
                        <h4>2023-24</h4>
                        <h4>2022-23</h4>
                        <h4>2021-22</h4>
                        <h4>2020-21</h4>
                        <a href="/e-filing/filed-forms-details"> View All</a>
                    </div>
                </div>
            </div>

        </div>

        <button class="backButton"><a href="/e-filing/dashboard">< Back</a></button>
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
<script>
    $(document).ready(function(){
      
    });
  </script>
  </body>
</html>
