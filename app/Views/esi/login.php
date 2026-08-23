<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head id="Head1">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>
        ESIC : Portal Application
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png"
        href="https://www.esic.in/EmployerPortal/ESICInsurancePortal/App_Themes/E_login/images/favicon.png">
    <link rel="stylesheet" type="text/css" href="public/assets/esi/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="public/assets/esi/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="public/assets/esi/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="public/assets/esi/animate.css">
    <link rel="stylesheet" type="text/css" href="public/assets/esi/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="public/assets/esi/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="public/assets/esi/select2.min.css">
    <link rel="stylesheet" type="text/css" href="public/assets/esi/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="public/assets/esi/util.css">
    <link rel="stylesheet" type="text/css" href="public/assets/esi/main.css">
    <style type="text/css">
        .login100-form-btn-gou {
            font-family: Poppins-Medium;
            font-size: 16px;
            color: #fff;
            background-color: #A52A2A;
            line-height: 1.2;
            text-transform: uppercase;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 20px;
            width: 100%;
            height: 50px;
        }
    </style>

    <script type="text/javascript" src="public/assets/esi/jquery-3.2.1.min.js"></script>

    <script type="text/javascript" src="public/assets/esi/animsition.min.js"></script>

    <script type="text/javascript" src="public/assets/esi/popper.js"></script>

    <script type="text/javascript" src="public/assets/esi/bootstrap.min.js"></script>

    <script type="text/javascript" src="public/assets/esi/select2.min.js"></script>

    <script type="text/javascript" src="public/assets/esi/moment.min.js"></script>

    <script type="text/javascript" src="public/assets/esi/daterangepicker.js"></script>

    <script type="text/javascript" src="public/assets/esi/countdowntime.js"></script>

    <script type="text/javascript" src="public/assets/esi/main.js"></script>

    <script type="text/javascript">
        function EchallanCaptcha() {
            var img = document.getElementById("img1");
            img.src = "../ChallanHandler.ashx?query=" + Math.random();
        }


    </script>

</head>

<body style="background-color: #FFFFFF;" data-new-gr-c-s-check-loaded="8.912.0" data-gr-ext-installed="">
    <form name="form1" method="post" action="" id="form1" style="background: #fff !important;">
        <div>
            <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
            <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
            <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE"
                value="/wEPDwUKMTcyODQ2NTczNhBkZBYCAgMPZBYEAksPDxYCHgRUZXh0BQlFU0lDIDIwMjRkZAJPDw8WAh8ABWNTaXRlIG1haW50YWluZWQgYnkgOiBFU0lDLiBEZXNpZ25lZCBhbmQgRGV2ZWxvcGVkIGJ5IENNUyBDb21wdXRlcnMgTFRELiB8IFZpc2l0b3JzIENvdW50OiAyMzU4NzEwNThkZGQ=">
        </div>

        <script type="text/javascript">
            //<![CDATA[
            var theForm = document.forms['form1'];
            function __doPostBack(eventTarget, eventArgument) {
                if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
                    theForm.__EVENTTARGET.value = eventTarget;
                    theForm.__EVENTARGUMENT.value = eventArgument;
                    theForm.submit();
                }
            }
            //]]>
        </script>


        <div>

            <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION"
                value="/wEWCAKc047SBgLG1rugDAKl1bKzCQK1qbSRCwKj9ufNCgLXq76WAwKC3IeGDAKf7eAP">
        </div>
        <div class="container" id="header" style="background: #fff !important;">
            <div class="row" style="background: #fff !important;">
                <div class="col-lg-6">
                    <a href="#"><span>
                            <img src="public/assets/esi/logo.jpg" alt="MainLogo"
                                style="margin-top: 9px;" title="Home"></span></a>
                </div>
                <div class="col-lg-6">
                    <div class="search-container" style="float: right; margin-top: 5px;">
                        <a href="#" id="a1" target="_blank" style="color: #fff !important;">
                            <img src="public/assets/esi/India_gov_symbol.png" alt="images"
                                style="float: right;" title="Minister of Labour &amp; Employment"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="loginpageadd">
            <div class="hedaparaddada">
                <div class="col-md-12" style="margin-left: 50px;">
                    <p style="margin-top: 10px; color: red; font-size: 13px; font-weight: 600;">
                        <span id="lblphysical">No physical processing of
                            paper is undertaken by ESIC for registration of Employer. If there is
                            any complaint to the contrary, the same may be made on </span>
                        <a href="">help-shramsuvidha@gov.in</a>
                        <span id="lblphysical1"></span>
                    </p>
                    <br>
                    <p style="color: #ab3734; font-size: 13px; font-weight: 600;">
                        <span id="lblmig1">We Are Migrating To One Unit One Identifier</span><br>
                        <span id="lblmig2">Government of India plans to do away with all employer codes being issued by
                            separate
                            labour enforcement agencies such as ESIC, EPFO, O/O ClC(C) and DGMS etc by replacing
                            them with new Labour Identification Number (LIN). Your unit has already been allotted
                            a LIN and the same can be obtained online using</span>
                        <a href="">http://tinyurl.com/whatismylin</a>
                        <span id="lblmig3">Please verify the information associated with your LIN before the current
                            employer
                            codes are rendered useless. The procedure to verify the information is given in</span>
                        <a href="">http://tinyurl.com/shramsuvidhahowto</a>
                        <span id="lblmig4">For any support please contact</span>
                        <a href="">help-shramsuvidha@gov.in</a>
                    </p>
                </div>
            </div>
            <div id="preloader">
            </div>
            <div class="limiter">

                <a id="lnkhindi" class="back-to-top" href="">
                    <i class="fa fa-play"><u>
                            <span id="lbllonguage">Hindi</span>
                        </u></i>
                </a>

                <div class="container-login100" style="background-color: #FFFFFF;">
                    <div class="wrap-login100 p-l-55 p-r-55 p-t-25 p-b-25">

                        <span class="login100-form-title p-b-25">
                            <span id="lblUserLogin">Employer Login</span>
                        </span>
                        <div class="wrap-input100 validate-input m-b-1" data-validate="Username is reauired">
                            <span class="label-input100">
                                <span id="lblUsername" class="label-input100">Username/LIN</span>
                            </span>
                            <input name="txtUserName" type="text" id="txtUserName" placeholder="Type your username"
                                class="input100" value="">
                            <span class="focus-input100" data-symbol=""></span>
                        </div>
                        <div class="wrap-input100 validate-input m-b-1" data-validate="password is reauired">
                            <span class="label-input100">
                                <span id="lblPassword" class="label-input100">Password</span>
                            </span>
                            <input name="txtPassword" type="password" id="txtPassword" class="input100"
                                placeholder="Type your password">
                            <span class="focus-input100" data-symbol=""></span>
                            <span id="lblMessage" style="color:Red;font-weight:bold;"><?php if (isset($authError) && !empty($authError)): echo $authError; endif ?></span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            <span class="label-input100">
                                <span id="lblCaptcha" class="label-input100">Captcha</span>
                                *<span id="rightcaptch"><img src="public/assets/esi/ChallanHandler.jpeg"
                                        id="img1" style="width: 190px;
                                height: 45px;">
                                    <a href="" onclick="javascript:void;">
                                        <img src="public/assets/esi/refresh.png" style="width: 20px; border-radius: 2px;
                                        background: #fff !important; padding: 3px;"></a></span></span>
                            <input name="txtChallanCaptcha" type="text" id="txtChallanCaptcha" class="input100"
                                placeholder="Type your Captcha">
                            <span class="focus-input100" data-symbol=""></span>
                            <span id="lblChallanMessage" style="color:Red;"><?php if (isset($capError) && !empty($capError)): echo $capError; endif ?> </span>
                            <input type="hidden" name="hdnipaddress" id="hdnipaddress">
                        </div>
                        <div class="text-right p-t-8 p-b-15">
                            <a href="#" style="width: 50%;
                            float: left; text-align: left;">
                                <span id="lblSignUp">Sign Up</span>
                            </a><a href="#">
                                <span id="lblforgotpassword">Forgot password?</span>
                            </a>
                        </div>
                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn">
                                </div>
                                <input type="submit" name="btnLogin" value="Login" id="btnLogin"
                                    class="login100-form-btn-gou">
                            </div>
                        </div>
                        <div class="text-right p-t-8 p-b-1">
                            <a href="https://www.esic.in/ESICInsurance1/ESICInsurancePortal/Empr_C11.aspx" style="width: 50%;
                            float: left; text-align: left;">
                                <span id="lblusername1">Username</span>
                            </a><a href="https://www.esic.in/ESICInsurance1/ESICInsurancePortal/PasswprdPolicy.aspx">
                                <span id="lblchkpasswd">Check Password Policy</span>
                            </a>
                        </div>
                        <div class="text-right p-t-1 p-b-15">
                            <a href="https://registration.shramsuvidha.gov.in/" style="width: 100%; float: left;
                            text-align: left; color: green; font-weight: 600;">
                                <span id="lblcommonesicepfo">Common Registration Link For ESIC / EPFO</span>
                            </a>
                        </div>
                        <div class="text-right p-t-1 p-b-15">
                            <a href="https://return.shramsuvidha.gov.in/" style="width: 100%; float: left; text-align: left;
                            color: green; font-weight: 600;">
                                <span id="lblunified">Unified ECR link for ESIC/EPFO</span>
                            </a><a
                                href="https://www.esic.in/EmployerPortal/ESICInsurancePortal/Employer_Employee_registration_through_portal.pdf"
                                style="width: 100%; float: left; text-align: left;">
                                <span id="lblmanualempr">Manual for Employer and Employee Registration through
                                    Portal</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
    <footer>

        <div class="footer-area-bottom">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-12">

                        <div class="copyright1" style="text-align: center;">

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                            <a href="https://www.esic.in/EmployerPortal/ESICInsurancePortal/TermsandConditions.aspx"
                                visible="false"></a>
                            <a href="https://www.esic.in/EmployerPortal/ESICInsurancePortal/PrivacyPolicy.aspx"
                                visible="false"></a>
                            <a href="https://www.esic.in/EmployerPortal/ESICInsurancePortal/WebsitePolicy.aspx"
                                visible="false"></a>
                            <a href="https://www.esic.in/EmployerPortal/ESICInsurancePortal/HyperLinkPolocy.aspx"
                                visible="false"></a>
                            <a href="https://www.esic.in/EmployerPortal/ESICInsurancePortal/CopyRightPolocy.aspx"
                                visible="false"></a>
                            <a href="https://www.esic.in/EmployerPortal/ESICInsurancePortal/SiteMap.aspx"
                                visible="false"></a>
                            <a href="https://www.esic.in/EmployerPortal/ESICInsurancePortal/ContactUs.aspx"
                                visible="false"></a>
                            <a href="https://www.esic.in/EmployerPortal/ESICInsurancePortal/Help.aspx"
                                visible="false"></a>

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span id="lbllastupdate">Last
                                Updated : 28/10/2020</span>

                        </div>

                    </div>

                </div>
                <br>
                <div class="row" style="padding: 0px 40px;">
                    <div class="col-lg-4">
                        <div class="copyright">
                            <input type="hidden" name="hdncount" id="hdncount" value="235871058">
                            © <span id="lblCopyright">Copyright</span> <strong><span><span id="lblESIC">ESIC
                                        2024</span></span></strong>. <span id="lblAllRightsReserved">All Rights
                                Reserved</span>
                        </div>
                    </div>

                    <div class="col-lg-8" style="text-align: right !important;">
                        <div class="copyright4"><span id="lblsitemaintained">Site maintained by : ESIC. Designed and
                                Developed by CMS Computers LTD. | Visitors Count: 235871058</span></div>

                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- End  Footer -->
    <div id="dropDownSelect1">
    </div>
    <!--===============================================================================================-->



</body>

</html>