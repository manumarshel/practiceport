<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../public/assets/efiling/css/index.css">
    <link rel="stylesheet" href="../../public/assets/efiling/css/EpayTaxNewPaymentPage2.css">
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
        <a href="#"><img src="../../../public/assets/efiling/images/efiling_logo.svg" alt="logo"></a>

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
      <h1>New Payment</h1>
      <h2>TAN:<?php $value = session('tan'); echo substr($value, 0, 2) . str_repeat('*', max(0, strlen($value) - 2)); ?>**</h2>

      <p class="marginBottom">Type of Payment (Minor Head)</p>
      <p class="boldPara">TDS/TCS Payable by Taxpayer (200)</p>
    </div>

    <div class="paymentListHolder">
      <div class="filter">
        <form>
        <input type="text" placeholder="Search by Description"/>
        <button>Filter</button>
        </form>
      </div>

      <form class="listForm" id="listForm" action="/e-filing/new-epaytax-breakup" method="post">
          <div class="descriptionHolder">
            
              <input type="radio" name="nature" id="92A" value="192-92A"/>
              <div class="descriptionWidth">
                <p>Description</p>
                <p class="boldPara">
                Payment to Govt. Employees other than Union Government Employees
                </p>
              </div>
              <div>
                <p>section</p>
                <p class="boldPara">192</p>
              </div>
              <div>
                <p>code</p>
                <p class="boldPara">92A</p>
              </div>
    
          </div>

        <div class="descriptionHolder">
          
            <input type="radio" name="nature" id="92B" value="192-92B"/>
            <div class="descriptionWidth">
            <p>Description</p>
            <p class="boldPara">
              Payment of Employees other than Govt. Employees
            </p>
          </div>
          <div>
            <p>section</p>
            <p class="boldPara">192</p>
          </div>
          <div>
            <p>code</p>
            <p class="boldPara">92B</p>
          </div>
          
        </div>
      </form>
    </div>

    <button class="backButton"><a href="/e-filing/new-epaytax">< Back</a></button>

    <button type="button" id="continueButton" style="cursor: pointer;" class="continueButton" disabled>Continue</button>
  </div> -->

  <div class="container">
    <p class="heading">Dashboard > e-payTax > New Payment</p>

    <div class="paymentDetails" style="width:100%;">

      <div class="statusContainer">
        <div class="statusHolder mr-1">
          <div class="statusIconText">1</div>
          <p class="statusText">Add Nature Of Payment Details</p>
        </div>
        <div  class="statusHolder mr-1">
          <div class="statusIconText statusDisabled statusDisabledBoreder">2</div>
          <p class="statusText statusDisabled">Add Tax Break Up Details</p>
        </div>
        <div class="statusHolder">
          <div class="statusIconText statusDisabled statusDisabledBoreder">3</div>
          <p class="statusText statusDisabled">Add Payment Details</p>
        </div>
      </div>

      <h1>New Payment</h1>
      <h2>TAN:<?php $value = session('tan'); echo $value; ?></h2>
    <?php //substr($value, 0, 2) . str_repeat('*', max(0, strlen($value) - 2)); ?>
    <br>
    <p style="color:#dc3545;">Please note that if the collectee’s/deductee’s PAN is inoperative, then a higher rate of TCS/TDS will be collectible/deductible in accordance with section 206CC/206AA of the Income-tax Act, 1961 read with CBDT Notification No. 15 of 2023 dated 28th March 2023 and Circular No.3 of 2023 dated 28th March 2023.</p><br>
    <p style="color:#dc3545;">Please verify the status of PAN by accessing “Verify PAN Status” Pre-login service available under ‘Quick Links’ on e-Filing portal. Please make sure to mention the correct amount of TCS/TDS.</p>
    </br>
      <p class="marginBottom">Type of Payment (Minor Head)</p>
      <p class="boldPara">TDS/TCS Payable by Taxpayer (200)</p>
    </div>

    <div class="paymentListHolder">
      <div class="filter">
        <form>
        <input type="text" placeholder="Search by Description"/>
        <button>Filter</button>
        </form>
      </div>

        <!-- Pages in divs -->
        <form class="listForm" id="listForm" action="/e-filing/edit-epaytax-breakup/<?php echo $id; ?>" method="post">

        <!-- Page 1 -->

        <div id="page1" class="pageContent active">
          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="92A" value="192-92A" <?php if($code == "92A") { echo "checked"; } ?>/></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Payment to Govt. Employees other than Union Government Employees
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">192</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">92A</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="92B" value="192-92B" <?php if($code == "92B") { echo "checked"; } ?>/></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Payment of Employees other than Govt. Employees
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">192</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">92B</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="193" value="193-193" <?php if($code == "193") { echo "checked"; } ?>/></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Interest on securities
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">193</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">193</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

          <!-- <form class="listForm" id="dividendForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio"  name="nature" id="194" value="194-194" <?php if($code == "194") { echo "checked"; } ?>/></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Dividend
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">194</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">194</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="194A" value="194A-94A" <?php if($code == "94A") { echo "checked"; } ?> /></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Interest other than interest on securities
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">194A</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">94A</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="194B" value="194B-94B" <?php if($code == "94B") { echo "checked"; } ?>/></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Winnings from lotteries and crossword puzzles
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">194B</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">94B</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="194BB" value="194BB-4BB" <?php if($code == "4BB") { echo "checked"; } ?>/></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Winnings from horse race
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">194BB</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">4BB</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="194DA" value="194DA-4DA" <?php if($code == "4DA") { echo "checked"; } ?>/></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Payment in respect of Life Insurance Policy
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">194DA</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">4DA</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="194LA" value="194LA-4LA" <?php if($code == "4LA") { echo "checked"; } ?>/></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Payment of Compensation on Acquisition of Certain Immovable Property
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">194LA</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">4LA</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="194LB" value="194LB-4LB" <?php if($code == "4LB") { echo "checked"; } ?> /></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Income by way of Interest from Infrastructure debt fund payable to a Non-Resident
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">194LB</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">4LB</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

        </div>

        <!-- Page 2 -->
        <div id="page2" class="pageContent">
          <div class="dividerGray"></div>
        
          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="194LC" value="194LC-4LC" <?php if($code == "4LC") { echo "checked"; } ?> /></td>
      
                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Income by way of Interest from Indian Company
                      </p>
                  </td>
      
                  <td>
                      <p>Section</p>
                      <p class="boldPara">194LC</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">4LC</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->
      
          <div class="dividerGray"></div>
      
          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio"  name="nature" id="194LD" value="194LD-4LD" <?php if($code == "4LD") { echo "checked"; } ?>  /></td>
      
                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Income by way of interest on certain bonds and Government securities
                      </p>
                  </td>
      
                  <td>
                      <p>Section</p>
                      <p class="boldPara">194LD</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">4LD</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->
      
          <div class="dividerGray"></div>
      
          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="194C" value="194C-94C" <?php if($code == "94C") { echo "checked"; } ?>/></td>
      
                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Payment of contractors and sub-contractors
                      </p>
                  </td>
      
                  <td>
                      <p>Section</p>
                      <p class="boldPara">194C</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">94C</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->
      
         <div class="dividerGray"></div>
      
         <!-- <form class="listForm"> -->
           <table>
             <tbody class="descriptionHolder">
               <tr>
                 <td><input type="radio" name="nature" id="194D" value="194D-4LD" <?php if($code == "94D") { echo "checked"; } ?>/></td>
      
                 <td>
                     <p>Description</p>
                     <p class="boldPara">
                       Insurance Commission
                     </p>
                 </td>
      
                 <td>
                     <p>Section</p>
                     <p class="boldPara">194D</p>
                 </td>
                 <td>
                     <p>Code</p>
                     <p class="boldPara">94D</p>     
                 </td>
               </tr>
             </tbody>
           </table>
         <!-- </form> -->
      
         <div class="dividerGray"></div>
      
         <!-- <form class="listForm"> -->
           <table>
             <tbody class="descriptionHolder">
               <tr>
                 <td><input type="radio" name="nature" id="194E" value="194E-94E" <?php if($code == "94E") { echo "checked"; } ?> /></td>
      
                 <td>
                     <p>Description</p>
                     <p class="boldPara">
                       Payments to non-resident Sportsmen/Sport Associations
                     </p>
                 </td>
      
                 <td>
                     <p>Section</p>
                     <p class="boldPara">194E</p>
                 </td>
                 <td>
                     <p>Code</p>
                     <p class="boldPara">94E</p>     
                 </td>
               </tr>
             </tbody>
           </table>
         <!-- </form> -->

         <div class="dividerGray"></div>

         <!-- <form class="listForm"> -->
           <table>
             <tbody class="descriptionHolder">
               <tr>
                 <td><input type="radio" name="nature" id="194EE" value="194EE-4EE" <?php if($code == "4EE") { echo "checked"; } ?> /></td>

                 <td>
                     <p>Description</p>
                     <p class="boldPara">
                       Payments in respect of Deposits under National Savings Schemes
                     </p>
                 </td>

                 <td>
                     <p>Section</p>
                     <p class="boldPara">194EE</p>
                 </td>
                 <td>
                     <p>Code</p>
                     <p class="boldPara">4EE</p>     
                 </td>
               </tr>
             </tbody>
           </table>
         <!-- </form> -->

         <div class="dividerGray"></div>

         <!-- <form class="listForm"> -->
           <table>
             <tbody class="descriptionHolder">
               <tr>
                 <td><input type="radio" name="nature" id="194F" value="194F-94F" <?php if($code == "94F") { echo "checked"; } ?>/></td>

                 <td>
                     <p>Description</p>
                     <p class="boldPara">
                       Payments on account of Re-purchase of Units by Mutual Funds or UTI
                     </p>
                 </td>

                 <td>
                     <p>Section</p>
                     <p class="boldPara">194F</p>
                 </td>
                 <td>
                     <p>Code</p>
                     <p class="boldPara">94F</p>     
                 </td>
               </tr>
             </tbody>
           </table>
         <!-- </form> -->

         <div class="dividerGray"></div>

         <!-- <form class="listForm"> -->
           <table>
             <tbody class="descriptionHolder">
               <tr>
                 <td><input type="radio" name="nature" id="194G" value="194G-94G" <?php if($code == "94G") { echo "checked"; } ?>/></td>

                 <td>
                     <p>Description</p>
                     <p class="boldPara">
                       Commission, prize etc., on sale of Lottery tickets
                     </p>
                 </td>

                 <td>
                     <p>Section</p>
                     <p class="boldPara">194G</p>
                 </td>
                 <td>
                     <p>Code</p>
                     <p class="boldPara">94G</p>     
                 </td>
               </tr>
             </tbody>
           </table>
         <!-- </form> -->

         <div class="dividerGray"></div>

         <!-- <form class="listForm"> -->
           <table>
             <tbody class="descriptionHolder">
               <tr>
                 <td><input type="radio"  name="nature" id="194H" value="194H-94H" <?php if($code == "94H") { echo "checked"; } ?>/></td>

                 <td>
                     <p>Description</p>
                     <p class="boldPara">
                       Commission or Brokerage
                     </p>
                 </td>

                 <td>
                     <p>Section</p>
                     <p class="boldPara">194H</p>
                 </td>
                 <td>
                     <p>Code</p>
                     <p class="boldPara">94H</p>     
                 </td>
               </tr>
             </tbody>
           </table>
         <!-- </form> -->

         <div class="dividerGray"></div>

         <!-- <form class="listForm"> -->
           <table>
             <tbody class="descriptionHolder">
               <tr>
                 <td><input type="radio" name="nature" id="194I" value="194I-94I" <?php if($code == "94I") { echo "checked"; } ?>/></td>

                 <td>
                     <p>Description</p>
                     <p class="boldPara">
                       Rent
                     </p>
                 </td>

                 <td>
                     <p>Section</p>
                     <p class="boldPara">194I</p>
                 </td>
                 <td>
                     <p>Code</p>
                     <p class="boldPara">94I</p>     
                 </td>
               </tr>
             </tbody>
           </table>
         <!-- </form> -->

         <div class="dividerGray"></div>

        </div>

        <!-- Page 3 -->
        <div id="page3" class="pageContent">

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="194IC" value="194IC-4IC" <?php if($code == "4IC") { echo "checked"; } ?>/></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Payment under Specified Agreement
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">194IC</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">4IC</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="194J" value="194J-94J" <?php if($code == "94J") { echo "checked"; } ?> /></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Fees for Professional or Technical Services
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">194J</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">94J</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="194LBA" value="194LBA-LBA" <?php if($code == "LBA") { echo "checked"; } ?> /></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Certain income from units of a business trust
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">194LBA</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">LBA</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio"  name="nature" id="194LBB" value="194LBB-LBB" <?php if($code == "LBB") { echo "checked"; } ?> /></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Income in respect of Units of Investment Fund
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">194LBB</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">LBB</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="194LBC" value="194LBC-LBC" <?php if($code == "LBC") { echo "checked"; } ?>/></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Income in respect of Investment in Securitization Trust
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">194LBC</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">LBC</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio"  name="nature" id="194N" value="194N-94N" <?php if($code == "94N") { echo "checked"; } ?>/></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Payment of certain Amount in Cash
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">194N</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">94N</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="194O" value="194O-94O" <?php if($code == "94O") { echo "checked"; } ?>/></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Payment of certain sums by e-commerce operator to e-commerce participant
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">194O</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">94O</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="195" value="195-195" <?php if($code == "195") { echo "checked"; } ?>/></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Other sums
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">195</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">195</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="196A" value="196A-96A" <?php if($code == "96A") { echo "checked"; } ?>/></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Income in respect of units of Non-Residents
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">196A</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">96A</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="206CA" value="206C-6CA" <?php if($code == "6CA") { echo "checked"; } ?>/></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Collection at source from Alcoholic Liquor for Human Consumption
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">206C</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">6CA</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

        </div>

        <!-- Page 4 -->

        <div id="page4" class="pageContent">

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="206CB" value="206C-6CB" <?php if($code == "6CB") { echo "checked"; } ?>/></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Collection at source from Timber obtained under Forest lease
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">206C</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">6CB</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="206CC" value="206C-6CC" <?php if($code == "6CC") { echo "checked"; } ?> /></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Collection at source from Timber obtained by any Mode other than a Forest Lease
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">206C</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">6CC</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="206CD" value="206C-6CD" <?php if($code == "6CD") { echo "checked"; } ?>/></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Collection at source from any other Forest Produce (not being timber or tendu leaves)
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">206C</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">6CD</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="206CE" value="206C-6CE" <?php if($code == "6CE") { echo "checked"; } ?>/></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Collection at source from Scrap
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">206C</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">6CE</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="206CF" value="206C-6CF" <?php if($code == "6CF") { echo "checked"; } ?>/></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Collection at source from contractors or licensee or lease relating to Parking lots
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">206C</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">6CF</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="206CG" value="206C-6CG" <?php if($code == "6CG") { echo "checked"; } ?>/></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Collection at source from contractors or licensee or lease relating to toll plaza
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">206C</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">6CG</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="206CH" value="206C-6CH" <?php if($code == "6CH") { echo "checked"; } ?> /></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Collection at source from contractors or licensee or lease relating to mining or quarrying
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">206C</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">6CH</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="206CI" value="206C-6CI" <?php if($code == "6CI") { echo "checked"; } ?>/></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Collection at source from tendu leaves
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">206C</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">6CI</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="206JC" value="206C-6CJ" <?php if($code == "6CJ") { echo "checked"; } ?>/></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Minerals
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">206C</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">6CJ</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio"  name="nature" id="206CK" value="206C-6CK" <?php if($code == "6CK") { echo "checked"; } ?>/></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Bullion and Jewellery
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">206C</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">6CK</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

        </div>

        <!-- Page 5 -->

        <div id="page5" class="pageContent">

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio"  name="nature" id="192" value="192-2AA" <?php if($code == "2AA") { echo "checked"; } ?>/></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Payment of accumulated balance due to an employee
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">192</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">2AA</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio"  name="nature" id="206CL" value="206C-6CL" <?php if($code == "6CL") { echo "checked"; } ?> /></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        TCS on sale of Motor Vehicle
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">206C</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">6CL</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="206CM" value="206C-6CM"  <?php if($code == "6CM") { echo "checked"; } ?> /></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        CTCS on sale in cash of any goods (other than bullion/jewellery)
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">206C</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">6CM</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="206CN" value="206C-6CN"  <?php if($code == "6CN") { echo "checked"; } ?> /></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        TCS on providing of any services (other than Ch-XVII-B)
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">206C</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">6CN</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="206CO" value="206C-6CO" <?php if($code == "6CO") { echo "checked"; } ?>/></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        TCS on Foreign Remittance
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">206C</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">6CO</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="194K" value="194K-94K"  <?php if($code == "94K") { echo "checked"; } ?>/></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Income payable to a resident assessee in respect of Units of a specified Mutual Fund specified u/s 10(23D) or units from the Administrator of the specified undertaking or units from specified company
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">194K</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">94K</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="196B" value="196B-96B" <?php if($code == "96B") { echo "checked"; } ?>/></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Payments in respect of Units to an Offshore Fund
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">196B</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">96B</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="196C" value="196C-96C" <?php if($code == "96C") { echo "checked"; } ?>/></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Income from foreign Currency Bonds or shares of Indian Company
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">196C</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">96C</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="196D" value="196D-96D" <?php if($code == "96D") { echo "checked"; } ?>/></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Income of foreign institutional investors from securities
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">196D</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">96D</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="194P" value="194P-94P" <?php if($code == "94P") { echo "checked"; } ?> /></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Deduction of tax in case of specified senior citizens
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">194P</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">94P</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>
          
        </div>

        <!-- Page 6 -->

        <div id="page6" class="pageContent">

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="194Q" value="194Q-94Q" <?php if($code == "94Q") { echo "checked"; } ?>  /></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Deduction of tax at source on payment of certain sum for purchase of goods
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">194Q</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">94Q</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="1946DA" value="196D(1A)-6DA" <?php if($code == "6DA") { echo "checked"; } ?>/></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Income of specified fund from securities referred to in clause (a) of sub-section (1) of section 115AD (other than interest income referred to in section 194LD)
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">196D(1A)</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">6DA</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="206CP" value="206C-6CP" <?php if($code == "6CP") { echo "checked"; } ?>/></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Remittance under LRS for educational loan taken from financial institution mentioned in Section 80E
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">206C</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">6CP</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="206CQ" value="206C-6CQ" <?php if($code == "6CQ") { echo "checked"; } ?>/></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Remittance under LRS for purpose other than for purchase of overseas tour package or for educational loan taken from financial institution
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">206C</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">6CQ</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="206CR" value="206C-6CR" <?php if($code == "6CR") { echo "checked"; } ?>/></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        TCS on sale of goods
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">206C</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">6CR</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="194R" value="194R-94R" <?php if($code == "94R") { echo "checked"; } ?>/></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Deduction of tax on benefit or perquisite in respect of business or profession
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">194R</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">94R</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="194S" value="194S-94S"  <?php if($code == "94S") { echo "checked"; } ?>/></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Payment on transfer of virtual digital asset
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">194S</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">94S</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>
          
          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="194BA" value="194BA-4BA" <?php if($code == "4BA") { echo "checked"; } ?>/></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Winnings for online games
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">194BA</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">4BA</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>
          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="194BA2" value="194BA(2)-BAP" <?php if($code == "BAP") { echo "checked"; } ?>/></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                       Net Winnings from online games where the net winnings are made in kind or cash is not sufficient to meet the tax liability and tax has been paid before such net winnings are released
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">194BA(2)</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">BAP</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio"  name="nature" id="194BP" value="194BP-4BP" <?php if($code == "4BP") { echo "checked"; } ?>/></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Winnings from lotteries and crossword puzzles where consideration is made in kind or cash is not sufficient to meet the tax liability and tax has been paid before such winnings are released
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">194B-P</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">4BP</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

         
          <!-- </form> -->

          <div class="dividerGray"></div>

        </div>
        
        <div id="page7" class="pageContent">

          <div class="dividerGray"></div>

           <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="194RP" value="194RP-4RP" <?php if($code == "4RP") { echo "checked"; } ?>/></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Benefits or perquisites of business or profession where such benefit is provided in kind or where part in cash is not sufficient to meet tax liability and tax required to be deducted is paid before such benefit is released
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">194R-P</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">4RP</p>     
                  </td>
                </tr>
              </tbody>
            </table>
          <!-- </form> -->

          <div class="dividerGray"></div>

          <!-- <form class="listForm"> -->
            <table>
              <tbody class="descriptionHolder">
                <tr>
                  <td><input type="radio" name="nature" id="194SP" value="194SP-4SP" <?php if($code == "4SP") { echo "checked"; } ?>/></td>

                  <td>
                      <p>Description</p>
                      <p class="boldPara">
                        Payment for transfer of virtual digital asset where payment is in kind or in exchange of another virtual digital asset and tax required to be deducted is paid before such payment is released
                      </p>
                  </td>

                  <td>
                      <p>Section</p>
                      <p class="boldPara">194S-P</p>
                  </td>
                  <td>
                      <p>Code</p>
                      <p class="boldPara">4SP</p>     
                  </td>
                </tr>
              </tbody>
            </table>

          <div class="dividerGray"></div>
        </div>

      <div class="pageHolder">
        <button class="pageBtn selectedBtn" onclick="event.preventDefault(); showPage(1)">1</button>
        <button class="pageBtn" onclick="event.preventDefault(); showPage(2)">2</button>
        <button class="pageBtn" onclick="event.preventDefault(); showPage(3)">3</button>
        <button class="pageBtn" onclick="event.preventDefault(); showPage(4)">4</button>
        <button class="pageBtn" onclick="event.preventDefault(); showPage(5)">5</button>
        <button class="pageBtn" onclick="event.preventDefault(); showPage(6)">6</button>
        <button class="pageBtn" onclick="event.preventDefault(); showPage(7)">7</button>
      </div>

    </div>

    <button class="backButton"><a href="/e-filing/edit-epaytax/<?php echo $id; ?>">< Back</a></button>

    <button type="button" id="continueButton" style="cursor: pointer;" class="continueButton">Continue</button>
  </form>
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
<script src="../../public/assets/efiling/js/navigate.js" ></script>
  <script src="../../public/assets/efiling/js/newPaymentPage2.js"></script>
<script>
    $(document).ready(function(){
      $('input[type="radio"]').change(function() {
      if ($(this).is(':checked')) {
        $('#continueButton').prop('disabled', false);
      } else {
        $('#continueButton').prop('disabled', true);
      }
    });
    
    $('#continueButton').on('click', function(e){
      e.preventDefault();
      $("#listForm").submit();
    });
    });
  </script>
  </body>
</html>
