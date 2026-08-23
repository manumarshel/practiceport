<!DOCTYPE html>
<!-- saved from url=(0037)https://ewaybillgst.gov.in/Login.aspx -->
<html xmlns="http://www.w3.org/1999/xhtml" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style data-merge-styles="true"></style><style data-merge-styles="true"></style><style data-merge-styles="true"></style><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><title>
	Login | E-WayBill System
</title><link rel="icon" href="public/assets/eway/favicon.ico" type="image/x-icon">

    <!-- cs files -->
    <link href="public/assets/eway/Login.css" rel="stylesheet"><link href="public/assets/eway/bootstrap.min.css" rel="stylesheet"><link href="public/assets/eway/css/fontawesome-all.min.css" rel="stylesheet">

    <!-- Js files -->
    <script type="text/javascript" src="public/assets/eway/jquery.min.js"></script>
    <script type="text/javascript" src="public/assets/eway/popper.min.js"></script>
    <script type="text/javascript" src="public/assets/eway/ValidateLoginNew2Ewb.js"></script>
    <script type="text/javascript" src="public/assets/eway/bootstrap.min.js"></script>

    <script type="text/javascript">
        function blockUserIdChar(a) {
            var b;
            return b = document.all ? a.keyCode : a.which, b > 64 && b < 91 || b > 96 && b < 123 || 8 == b || 64 == b || 35 == b || 36 == b || 45 == b || 127 == b || 95 == b || 39 == b || 35 == b || 36 == b || 46 == b || 32 == b || 9 == b || b >= 48 && b <= 57
        }
        $(document).keydown(function (event) {
            if (event.keyCode == 123) {
                return false;
            }
            else if (event.ctrlKey && event.shiftKey && event.altKey && event.keyCode == 73) {
                return false;
            }
        });

        $(document).on("contextmenu", function (e) {
            e.preventDefault();
        });
        function deleteAllCookies() {
            var cookies = document.cookie.split(";");

            for (var i = 0; i < cookies.length; i++) {
                var cookie = cookies[i];
                var eqPos = cookie.indexOf("=");
                var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
                document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
            }
        }
        $(document).ready(function () {
            deleteAllCookies();
            $("#myModal").modal('show');
        });
        $('.txt_password').bind("cut copy paste", function (e) {
            e.preventDefault();
        });

        $('.btnRefresh').click(function () {
            var src = 'Captcha.aspx'
            $('#imgcaptcha').attr("src", src);
        });
    </script>

</head>

<body class="h-100">
    <form name="form" method="post" action="" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;btnLogin&#39;)" id="form" autocomplete="off">
<div>
<input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value="">
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="isZMji74OqBOjWJ/BGDUEcnX9K6a5MRwdTVXZpIBMd9mNbQsyrIZ96+ZVO01yzHujFVJSUixNP7pPMKWqBbFyS7Oz02zsL37+JuKRtF7pUI=">
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['form'];
if (!theForm) {
    theForm = document.form;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<script src="public/assets/eway/WebResource.axd" type="text/javascript"></script>


<script src="public/assets/eway/WebResource(1).axd" type="text/javascript"></script>
<div>

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="C2EE9ABB">
	<input type="hidden" name="__SCROLLPOSITIONX" id="__SCROLLPOSITIONX" value="0">
	<input type="hidden" name="__SCROLLPOSITIONY" id="__SCROLLPOSITIONY" value="0">
	<input type="hidden" name="__VIEWSTATEENCRYPTED" id="__VIEWSTATEENCRYPTED" value="">
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="AY4OGmFfEWdesiNBHM1wrqhXugVAdCYkxtxtDFd3IaOJj44C2owa306xv2qGpcJmPizszwPUSf8F8ni36RHIGStNzLL+l8C4z1m0P3rhGHnxn94sefjZoT/XU4CzoX4qRYDkU3A0pHNB1Gb+oDK5Aw3mxiBa29HbTiYNgG5a4/7+MvFmunYv1V/LJi7qM8jRF2baNaY/W3oqGS0X9gl/hpKQimJ7sDUC1+fkYXDrLmkpk/lboyFPCdtPAzkC60iJ">
</div>
        <input type="hidden" name="HiddenField3" id="HiddenField3" value="MJmAcTO07Ky8huj">
        <div class="container-fluid full-bg h-100">
            <div class="loginboxdiv">
                <div class="bg-layer d-flex">
                    <div class="login-box row">
                        <div class="text-center" style="width: 100%">
                            <a href="#" class="close text-danger font-weight-bold" style="margin-right: -5%; margin-top: -1%;">X</a>
                            <img src="public/assets/eway/emblem_new.png" alt="" height="90">
                            <h3>E - Waybill System </h3>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input name="txt_username" type="text" id="txt_username" autocomplete="off" placeholder="Username" aria-label="Username" maxlength="20" class="form-control" tabindex="1" onkeypress="return blockUserIdChar(event);" xmlns:asp="#unknown" autofocus="" aria-describedby="basic-addon1" spellcheck="false" data-ms-editor="true">
</div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input name="txt_password" type="password" id="txt_password" class="txt_password form-control" onpaste="return false;" tabindex="2" placeholder="Password" autocomplete="off" aria-label="Username" aria-describedby="basic-addon1">
</div>

                        <div id="divCaptcha" class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-eye"></i></span>
                            </div>
                            <img id="imgcaptcha" alt="" src="public/assets/eway/Captcha.aspx" width="200" height="35">
                            <a href="eway-simulation">
                                <img src="public/assets/eway/refresh.png" alt="Refresh" class="btnRefresh"></a>
                        </div>

                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i>Enter Captcha</i></span>
                            </div>
                            <input name="txtCaptcha" type="text" maxlength="5" id="txtCaptcha" tabindex="3" class="form-control" style="text-transform: uppercase" spellcheck="false" data-ms-editor="true">
                        </div>

                        <div class="input-group mb-1">
                            <input type="submit" name="btnLogin" value="Login" onclick="return ValidateLgn(txt_username.value,txt_password.value);" id="btnLogin" tabindex="4" class="btn btn-info btn-sm">
                            <input name="hidSalt" type="hidden" id="hidSalt">
                            <span id="lbl_error" style="color:Red;font-family:Verdana;font-size:8.5pt;font-size: small"></span>
                        </div>

                        <p class="mb-3 mt-2">

                            <label class="text-left">
                                <a class="text-primary" href="#">New Registration ?</a>
                            </label>

                            <label class="float-right">
                                <a href="#" rel="noopener noreferrer">Forgot Credentials ?  </a>
                            </label>

                        </p>

                        <div class="foter-credit pt-0">
                            <a href="https://docs.ewaybillgst.gov.in/Documents/ewbClearCache.pptx" target="_blank">If you are unable to Login, you can follow the steps given in this document.</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    

<script type="text/javascript">
//<![CDATA[

theForm.oldSubmit = theForm.submit;
theForm.submit = WebForm_SaveScrollPositionSubmit;

theForm.oldOnSubmit = theForm.onsubmit;
theForm.onsubmit = WebForm_SaveScrollPositionOnSubmit;
WebForm_AutoFocus('txt_username');//]]>
</script>

<?php if (isset($message) && !empty($message)): ?>
        <script type="text/javascript">
            alert("<?php echo $message; ?>");
        </script>
    <?php endif; ?>
</form>