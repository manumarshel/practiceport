<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/assets/efiling/css/index.css">
	<link rel="stylesheet" href="public/assets/efiling/css/LoginPassword.css">
    <title>Login</title>
</head>
<body>
    
    <nav>

        <div class="upperSection">
            <a href="#"><img src="public/assets/efiling/images/efiling_logo.svg" alt="logo"></a>

            <span>
                <ul>
                    <li>Call Us</li>
                    <span>|</span>
                    <li>English</li>
                    <span>|</span>
                    <li><img src="public/assets/efiling/images/reduceFont.svg"> <img src="public/assets/efiling/images/defaultFont.svg"> <img src="public/assets/efiling/images/increaseFont.svg"></li>
                    <span>|</span>
                    <li><img style="padding-top: 2px;" src="public/assets/efiling/images/contrast.svg"></li>
                    <li class="profile">
                        <img alt="profile">
                        <div>
                            <span style="font-weight:600;"><?php echo session('first_name'); ?></span>
                            <span>tds</span>
                        </div>
                    </li>
                </ul>
                <p>Do not have an account? <a href="#">Register</a> </p>
            </span>
        </div>

        <div class="menuWidthControl">
        <ul class="menu">
            <li>Home</li>
            <li>Individual/HUF</li>
            <li>Company</li>
            <li>Non-Company</li>
            <li>Tax Professionals & Others</li>
            <li>Downloads</li>
            <li>Help</li>
        </ul>
      </div>

    </nav>

    <div class="container">

        <p class="indicator"> * Indicates mandatory fields</p>
        <br/>

        <div class="mainHolder" id="login_form">

            <div class="loginHolder">

                <h2>Login</h2>

                <form>
                    <label class="label" for="user_id"> Enter your User ID *</label>
                    <input id="user_id" type="text" placeholder="PAN/ ADHAAR/ OTHER USER ID" data-userid="<?php echo session('username'); ?>">

                    <div class="noError" id="error_mandatory">Error : This is a Mandatory Field.</div>
                    <div class="noError" id="error_invalid">Error : Invalid User ID, Please Retry.</div>
                    <!-- change class to error from noError to show error message -->

                    <Button type="submit" id="submit_login" class="continueButton" disabled="disabled"> Continue > </Button>
                    <Button class="backButton" type="button"> < Back </Button>
                </form>

                <div class="paragraph">
                    <p>Other ways to access your account</p>
                    <div class="netBankingDiv">
                        <img alt="icon" class="netBanking" src="public/assets/efiling/images/netbanking.svg"> 
                        <p class="netBankingText">Net Banking</p>
                    </div>
                </div>

            </div>

            <div class="detailHolder">

            <p class="detailsHeading">Know about your <b>User ID</b></p>

            <div>
                <img src="public/assets/efiling/images/pan.svg" alt="icon">
                <p class="bottomDivider">
                    PAN (Permanent Account Number) <br>
                    Individuals (Salaried employee, Senior citizen, Freelancer, NRI)
                    Other Than Individuals (Company, Trust, AOP, AJP, BOI, Firm, HUF, Local Authority)
                </p>
            </div>
            <div>
                <img src="public/assets/efiling/images/adhaar.svg" alt="icon">
                <p class="bottomDivider">     
                    Aadhaar Number <br>
                    Individuals (Salaried employee, Senior citizen, Freelancer, NRI)
                </p>
            </div>
            <div>
                <img  src="public/assets/efiling/images/userId.svg" alt="icon">
                <p>
                    Other than PAN users <br>
                    CA, External Agency, ERI, Tax Deductor & Tax collector, TIN 2.0 Stakeholders, ITDREIN, Non-Residents not holding and not required to have PAN
                    ARCA (Authorised Representative Chartered Accountant) followed by 6 digit number
                    TAN (Tax Deductor & Collector)
                </p>
            </div>

            <a href="#">Show More</a>

</div>
        </div>

		<div class="mainHolder" id="password_form" style="display: none;">

            <div class="loginHolder">
                <div class="topBox">
                    <img src="public/assets/efiling/images/userImageBlank.png" alt="profile">
                    <div>
                        <h2>Login</h2>
                        <p>User ID : <b><?php echo session('username'); ?></b></p>
                    </div>
                </div>

                <div class="middleBox">
                    <p>Secure Access Message</p>
                    <span><b>Login</b></span>
                </div>

                <form>
                    <div>
                        <input type="checkbox" class="check" id="secure_check">
                        <label for="check" class="checkLabel"> Please confirm your secure access message displayed above*</label>
                    </div>
                    <p>Enter password for your e-Filing account</p>
                    <label for="password" class="label">Password*</label>
                    <input id="password" type="password" data-password="<?php echo session('password'); ?>">

                    <div class="noError" id="wrong_password">Error : Wrong Password.</div>
                    <!-- change class to error from noError to show error message -->

                    <div class="noError" id="invalid_password">Error : Invalid Password, Please retry.</div>
                    
                    <a>Forgot Password?</a>
                    <Button type="submit" id="submit_password" class="continueButton" disabled="disabled"> Continue > </Button>
                </form>
                <Button class="backButton" type="button"> < Back </Button>

                <!--<div class="paragraph">-->
                <!--    <p>Other ways to access your account</p>-->
                <!--    <div class="netBankingDiv">-->
                <!--        <img alt="icon" class="netBanking" src="public/assets/efiling/images/netbanking.svg"> -->
                <!--        <p class="netBankingText">Net Banking</p>-->
                <!--    </div>-->
                <!--</div>-->

            </div>

            <div class="detailHolder">
                <img src="public/assets/efiling/images/loginLock.svg" alt="?">
            </div>
        </div>

		<form id="login_submit" name="login_submit" method="POST" action="">
				<input type="hidden" name="login_id" value="<?php echo session('username'); ?>">
				<input type="hidden" name="login_password" value="<?php echo session('password'); ?>">
		</form>
    </div>
  
    <div class="footer footerLogin">

            <div class="footerContent">
                <ul>
                    <h3>About Us</h3>
                    <li>About the Portal</li>
                    <li>History of Direct Taxation</li>
                    <li>Vision, Mission, Values</li>
                    <li>Who We Are</li>
                    <li>Right to Information</li>
                    <li>Organizations & Functions</li>
                    <li>About the Media Reports</li>
                    <li>e-Filing Calendar 2021</li>
                    <li>About the Portal</li>
                </ul>
        
                <ul>
                    <h3>Contact Us</h3>
                    <li>Helpdesk Numbers</li>
                    <li>Grievances</li>
                    <li>View Grievance</li>
                    <li>Feedback</li>
                    <li>Help</li>
                </ul>
        
                <ul>
                    <h3>Using the Portal</h3>
                    <li>Website Policies</li>
                    <li>Accessibility Statement</li>
                    <li>Site Map</li>
                    <li>Browser Support</li>
                </ul>
        
                <ul>
                    <h3>Related Sites</h3>
                    <li>Income Tax India</li>
                    <li>Protean (previously NSDL)</li>
                    <li>TRACES</li>
                </ul>
            </div>

        <div class="credit">
            <h3>Follow us on :</h3>
            <div>
                <img src="public/assets/efiling/images/emblem_coloured.svg" alt="logo">
                <p>
                    Last reviewed and updated on : 06-Nov-2023
                    This site is best viewed in 1024 * 768 resolution with latest version of Chrome, Firefox, Safari and Microsoft Edge.
                    Copyright @ Income Tax Department, Ministry of Finance, Government of India. All Rights Reserved.
                </p>
            </div>
        </div>

    </div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="../public/assets/efiling/js/navigationBar.js" ></script>
    <script>
		$(document).ready(function(){
			$("#user_id").on('keyup', function(e){
				$("#error_mandatory").removeClass().addClass('noError');
				$("#error_invalid").removeClass().addClass('noError');
				var inputValue = $(this).val();
				if (inputValue == '') {
					$("#error_mandatory").addClass('error').removeClass('noError');
				} else {
					var userid = $(this).attr('data-userid');

					if (inputValue != userid) {
						$("#error_invalid").addClass('error').removeClass('noError');
					} else {
						$("#error_invalid").addClass('noError').removeClass('error');
						$("#submit_login").prop('disabled', false);
					}
				}
			});

			$("#submit_login").on('click', function(e){
				e.preventDefault();
				var userid = $("#user_id").attr('data-userid');

				if (userid == $("#user_id").val()) {
					$("#login_form").hide();

					$("#password_form").show('slow');
				}
			});

			$('#password, #secure_check').on('keyup change', function() {
  				var isChecked = $('#secure_check').is(':checked');
				var textFieldValue = $('#password').val();

				if (isChecked && $('#password').val() != "") {
					$('#submit_password').prop('disabled', !isChecked);
				} else {
					$('#submit_password').prop('disabled', 'disabled');
				}
			});

			$("#submit_password").on('click', function(e){
				e.preventDefault();
				$("#wrong_password").removeClass().addClass('noError');
				var password = $("#password").attr('data-password');

				if (password == $("#password").val()) {
					$("#login_submit").submit();
				} else {
					$("#wrong_password").addClass('error').removeClass('noError');
				}
			});
		})
		</script>
</body>
</html>