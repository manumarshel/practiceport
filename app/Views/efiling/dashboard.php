<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/efiling/css/index.css">
    <link rel="stylesheet" href="../public/assets/efiling/css/Dashboard.css">
    <link rel="stylesheet" href="../public/assets/efiling/css/Footer.css">
    <title>Dashboard</title>
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

<p class="heading">Dashboard</p>

<div class="subContainerTwo">
    <div class="dashContainer">
        <div class="subContainerOne">
            <h3>Welcome Back, <span><?php echo session('company_name'); ?></span></h3>
            <div class="dataHolderTop">
                <a href="#"><img src="../public/assets/efiling/images/userImageBlank.png" alt="img"></a>
                <ul>
                    <li><?php echo session('tan') ?? ''; ?></li>
                   
                    <li><?php echo session('phone') ?? ''; ?></li>
                    <li><?php echo session()->get('company_email'); ?></li>
                </ul>
            </div>
            <div class="dataHolderBottom">
                <div>
                    <h3 class="infoHeading">Contact Details</h3>
                    <a>Update</a>
                </div>
                <div>
                    <h3 class="infoHeading">Your account is not secure with e-vault</h3>
                    <a>Secure Account</a>
                </div>
            </div>
    
        </div>

        <div class="taxButton"> > Tax Calendar 
            <img class="taxCalender" src="../public/assets/efiling/images/taxCalender.png" />
        </div>

        <div class="controlContainer">
            <h2>Activity Log</h2>
            <div>
                <h3>Last log out</h3>
                <p><?php echo date('d/m/Y H:i A'); ?></p>
            </div>
            <div class="borderBottom">
                <h3>Last login</h3>
                <p><?php echo date('d/m/Y H:i A'); ?></p>
            </div>
            <h3>Last Password</h3>
            <h3>Change</h3>
        </div>
    </div>  

    <div class="formField">> Recent Forms Filed</div>
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
   <script src="../public/assets/efiling/js/navigate.js" ></script>
</body>
</html>