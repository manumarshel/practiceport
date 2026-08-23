<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../public/assets/efiling/css/index.css">
    <link rel="stylesheet" href="../public/assets/efiling/css/IncomeTaxForm.css">
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

  <!-- <div class="container">

<p class="heading">Dashboard > Income Tax Forms</p>

<div class="headerSection">
  <h1>File Income Tax forms</h1>
  <p class="fontSize">
    For assigning the below list of forms to CA, Go to <b>“Authorized partner >
    My CA > Assign Form”</b>
  </p>
  <p class="boldPara">10CCB, 15CB, 10BBC, 10BC, 10-IJ, 10-IL, 5BA</p>
</div>

<div class="formContainer">
  <p class="formContainerHeading">Persons not dependent on any Source of Income (Source of Income not relevant)</p>

  <form>
    <div>
      <h5>Deduction of tax at source (Form 15CA)</h5>
      <p>
        Information to be furnished for payments to a non-resident not being a
        company, or to a foreign company
      </p>
    </div>
    <div>
      <a href="#">File Now</a>
    </div>
  </form>

  <form>
    <div>
      <h5>Deduction of tax at source (Form 15CA)</h5>
    <p>
      Information to be furnished for payments to a non-resident not being a
      company, or to a foreign company
    </p>
    </div>
    <a href="#">File Now</a>
  </form>

  <form>
    <div>
      <h5>Deduction of tax at source (Form 15CA)</h5>
      <p>
        Information to be furnished for payments to a non-resident not being a
        company, or to a foreign company
      </p>
    </div>
    <a href="#">File Now</a>
  </form>

  <form>
    <div>
      <h5>Deduction of tax at source (Form TDS)</h5>
    <p>
      Quaterly TDS/TCS Return (24Q,26Q,27Q,27EQ)
    </p>
    </div>
    <a href="/e-filing/tax-instruction">File Now</a>
  </form>

</div>

<button class="backButton"><a href="/e-filing/dashboard">< Back</a></button>
</div> -->


<div class="container">

<p class="heading">Dashboard > Income Tax Forms</p>

<div class="headerSection">
  <h1>File Income Tax forms</h1>
  <p class="fontSize">
    For assigning the below list of forms to CA, Go to <b>“Authorized partner >
    My CA > Assign Form”</b>
  </p>
  <p class="boldPara">10CCB, 15CB, 10BBC, 10BC, 10-IJ, 10-IL, 5BA</p>
</div>

<div class="formContainer">
  <p class="formContainerHeading">Persons not dependent on any Source of Income (Source of Income not relevant)</p>

  <form class="formControl">
    <div class="textHolder">
      <h5>Deduction of tax at source <span class="changeColor">(Form 15CA)</span></h5>
      <p>
        Information to be furnished for payments to a non-resident not being a
        company, or to a foreign company
      </p>
    </div>
    <div>
      <a href="#">File Now</a>
    </div>
  </form>

  <form class="formControl">
    <div class="textHolder">
      <h5>Deduction of tax at source <span class="changeColor">(Form 15G)</span></h5>
    <p>
      Declaration under section 197A(1) and section 197A(1A) to be made by an Individual or a person (not being a company or a firm) claiming certain receipts without deduction of tax 
    </p>
    </div>
    <a href="#">File Now</a>
  </form>

  <form class="formControl">
    <div class="textHolder">
      <h5>Deduction of tax at source <span class="changeColor">(Form 15H)</span></h5>
      <p>
        Declaration under section 197A(1C) to be made by an Individual who is of the age of sixty years or more claiming certain incomes without deduction of tax 
      </p>
    </div>
    <a href="#">File Now</a>
  </form>

  <form class="formControl">
    <div class="textHolder">
      <h5>Deduction of tax at source <span class="changeColor">(Form 26A)</span></h5>
      <p>
        Form for furnishing accountant certificate under the first proviso to sub-section (1) of section 201 of the Income Tax Act, 1961 
      </p>
    </div>
    <a href="#">File Now</a>
  </form>

  <form class="formControl">
    <div class="textHolder">
      <h5>Collection of tax at source <span class="changeColor">(Form 27BA)</span></h5>
      <p>
        Form for furnishing accountant certificate under first proviso to sub-section (6A) of section 206C of the Income Tax Act, 1961 
      </p>
    </div>
    <a href="#">File Now</a>
  </form>

  <form class="formControl">
    <div class="textHolder">
      <h5>Collection and Recovery of tax <span class="changeColor">(Form 27C)</span></h5>
      <p>
        Declaration under sub-section (1A) of section 206C of the Income-tax Act, 1961 to be made by a buyer for obtaining goods without collection of tax           </p>
    </div>
    <a href="#">File Now</a>
  </form>

  <form class="formControl">
    <div class="textHolder">
      <h5>Appeals (Form 35)</h5>
      <p>
        Appeal to the Joint Commissioner (Appeals) or the Commissioner of Income-tax (Appeals)
      </p>
    </div>
    <a href="#">File Now</a>
  </form>

  <form class="formControl">
    <div class="textHolder">
      <h5>Vivad Se Vishwas Act, 2020 <span class="changeColor">(Form 4 DTVSV)</span></h5>
      <p>
        Intimation of Payment under sub-section (2) of Section 5 of The Direct Tax Vivad Se Vishwas Act, 2020 (3 of 2020)
      </p>
    </div>
    <a href="#">File Now</a>
  </form>

  <form class="formControl">
    <div class="textHolder">
      <h5> VI-The Black Money (Undisclosed Foreign Income and Assets) and Imposition of Tax Act, 2015 <span class="changeColor">(Form 6)</span> </h5>
      <p>
        Form of declaration of undisclosed asset located outside India under section 59 of the Black Money (Undisclosed Foreign Income and Assets) and Imposition of Tax Act, 2015           </p>
    </div>
    <a href="#">File Now</a>
  </form>

  <form class="bottomformControl">
    <div class="textHolder">
      <h5>Deduction of tax at source <span class="changeColor">(Form TDS)</span></h5>
    <p>
      Quarterly TDS/TCS Return (24Q,26Q,27Q,27EQ)
    </p>
    </div>
    <a href="/e-filing/tax-instruction">File Now</a>
  </form>

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
   <script src="../public/assets/efiling/js/navigate.js" ></script>
  </body>
</html>
