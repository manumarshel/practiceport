<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head id="ctl00_Head1">
<meta http-equiv="content-type" content="text/html; charset=UTF-8"><title>
	ESIC
</title><link rel="stylesheet" type="text/css" href="../../public/assets/esi/bank/esicCSSglobal.css"><link rel="stylesheet" type="text/css" href="../../public/assets/esi/bank/esiccsstaskhome.css"><link rel="stylesheet" type="text/css" href="../../public/assets/esi/bank/esiclayout.css">




    <script type="text/javascript" src="../../public/assets/esi/bank/JavaScript1.js"></script>

    <script type="text/javascript">
        var isClose = false;
        var closeCtr = 1;
        function disableBackButton() {
            window.history.forward();
        }
        setTimeout("disableBackButton()", 0);
        function getPage() {
            window.opener = self;
            window.close();

        }
        openWins = new Array();
        curWin = 0;

        function openWin(page) {
            openWins[curWin++] = window.open(page, '_blank', 'width=2000,height=2000, scrollbars=auto');
        }

        function closeAll() {

            for (i = 0; i < openWins.length; i++)
                if (openWins[i] && !openWins[i].closed) openWins[i].close();
        }
        function doClick(field, event) {
            var key;

            if (event.keyCode == 13) {
                var btn = document.getElementById(field);
                btn.click();

            }
        }
        getdate();
        javascript: window.history.forward(1);
        function doClick(field, event) {
            var key;

            if (event.keyCode == 13) {
                var btn = document.getElementById(field);
                btn.click();

            }
        }
        function rightclickControl() {
            var allElements = document.getElementsByTagName("*");
            if (allElements.length > 0) {
                for (j = 0; j < allElements.length; j++) {
                    if (allElements[j].tagName == "A") {
                        allElements[j].onmouseout = function() {
                            document.oncontextmenu = function() {
                                return true;
                            };
                        };
                        allElements[j].onmouseover = function() {
                            document.oncontextmenu = function() {
                                return false;
                            };
                        };
                    }
                }
            }
        }

    </script>


<style type="text/css">
	.ctl00_NavigationMenu_0 { background-color:white;visibility:hidden;display:none;position:absolute;left:0px;top:0px; }
	.ctl00_NavigationMenu_1 { text-decoration:none; }
	.ctl00_NavigationMenu_2 {  }
	.ctl00_NavigationMenu_3 {  }
	.ctl00_NavigationMenu_4 {  }
	.ctl00_NavigationMenu_5 { border-style:none; }
	.ctl00_NavigationMenu_6 {  }
	.ctl00_NavigationMenu_7 { border-style:none; }
	.ctl00_NavigationMenu_8 {  }
	.ctl00_NavigationMenu_9 { border-style:none; }
	.ctl00_NavigationMenu_10 {  }
	.ctl00_NavigationMenu_11 { border-style:none; }
	.ctl00_NavigationMenu_12 {  }
	.ctl00_NavigationMenu_13 { border-style:none; }
	.ctl00_NavigationMenu_14 {  }

</style></head>
<body onkeydown="checkForRefresh(event)" onload="actionsOnLoad();" oncontextmenu="return false" data-new-gr-c-s-check-loaded="8.912.0" data-gr-ext-installed="">
    <div id="minHeight">
    </div>
    <form name="aspnetForm" method="post" action="" onsubmit="javascript:return WebForm_OnSubmit();" onkeypress="javascript:return WebForm_FireDefaultButton(event, 'ctl00_Test')" id="aspnetForm">
<div>
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUHNTg3MzE4MBBkZBYCZg9kFgICAQ9kFgYCAw9kFgICAQ9kFgJmD2QWAmYPZBYCZg9kFgQCAQ9kFgJmDw8WAh4EVGV4dAURNTQwMDAyNDkwNzAwMDA5OTlkZAIDD2QWBAICDxYCHgdWaXNpYmxlaGQCBA8WAh8BaGQCBQ9kFgICAQ9kFgJmD2QWAgIBD2QWAgIBD2QWAmYPZBYCAgUPZBYCZg9kFgJmD2QWAgIXDxAPFgYeDURhdGFUZXh0RmllbGQFDGFjY291bnRfdHlwZR4ORGF0YVZhbHVlRmllbGQFAnBrHgtfIURhdGFCb3VuZGdkEBUEFy0tU2VsZWN0IEFjY291bnQgVHlwZS0tB1NhdmluZ3MHQ3VycmVudAZPdGhlcnMVBAEwATIBMwE0FCsDBGdnZ2cWAWZkAgcPZBYCZg9kFgJmD2QWBgIBDw8WAh8ABRBJUCBBZGRyZXNzIDogNDQuZGQCAg8PFgIfAAUpQVNQIFNlc3Npb24gSUQgOiA0eTF3bGE0NWRlY3lpcHVkZ3ppeWh3YjVkZAIDDw8WAh8AZWRkZA==">
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['aspnetForm'];
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<script src="../../public/assets/esi/bank/WebResource.js" type="text/javascript"></script>


<script src="../../public/assets/esi/bank/ScriptResource_004.js" type="text/javascript"></script>
<script src="../../public/assets/esi/bank/ScriptResource_003.js" type="text/javascript"></script>
<script src="../../public/assets/esi/bank/ScriptResource.js" type="text/javascript"></script>
<script src="../../public/assets/esi/bank/ScriptResource_002.js" type="text/javascript"></script>
<script src="../../public/assets/esi/bank/jquery1.js" type="text/javascript"></script>
<script src="../../public/assets/esi/bank/esic.js" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
function WebForm_OnSubmit() {
if (typeof(ValidatorOnSubmit) == "function" && ValidatorOnSubmit() == false) return false;
return true;
}
//]]>
</script>

<div>

	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWBwKik/LSBgLU3p7PCAKc1MrcAQKYn+r1BQKc6aeNDAKcvYegDAKbwrKfBQ==">
</div>
   <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ctl00$ScriptManager1', document.getElementById('aspnetForm'));
Sys.WebForms.PageRequestManager.getInstance()._updateControls(['fctl00$HomePageContent$UpdatePanel1'], [], [], 90);
//]]>
</script>

    <div id="outer">
        <table id="ctl00_Table2" cellspacing="0" cellpadding="0" align="Center" border="0" style="border-width:0px;height:60px;width:100%;border-collapse:collapse;">
	<tbody><tr>
		<td class="tHeadImage" align="left"><img id="ctl00_ESICLogo" src="../../public/assets/esi/bank/Small%20Logo.jpg" align="absmiddle" style="border-width:0px;"></td><td class="tHeadImage" align="center"></td><td class="tHeadImage" align="right"><img id="ctl00_Image1" src="../../public/assets/esi/bank/IndianSymbol.jpg" align="absmiddle" style="border-width:0px;"></td>
	</tr><tr>
		<td align="center" colspan="3" style="height:25px;width:100%;"><table id="ctl00_Table3" cellspacing="0" cellpadding="0" border="0" style="height:100%;width:100%;border-collapse:collapse;">
			<tbody><tr>
				<td class="dataBlock" align="left" style="width:8%;">
                                    User Login:
                            </td><td class="dataBlock" align="left" style="width:58%;"><span id="ctl00_lbluserName" style="background-color:Transparent;"><?php echo session('emp_code'); ?></span></td><td class="dataBlock" style="width:23%;">
                                    <div id="raw"><?php echo date("D M j, Y h:i:s A"); ?></div>
                            </td><td class="homelink" align="right">
                                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                <input type="submit" name="ctl00$Test" value="Button" id="ctl00_Test" style="display: none;"><input type="submit" name="ctl00$dummybutton" value="" id="ctl00_dummybutton" style="border-width:0px;font-weight:bold;height:0px;width:0px;"></td>
			</tr>
		</tbody></table></td>
	</tr>
</tbody></table>
        <table id="ctl00_Table5" cellspacing="0" cellpadding="0" align="Center" border="0" style="border-width:0px;width:100%;border-collapse:collapse;">
	<tbody><tr>
		<td colspan="5" style="background-color:White;width:100%;">
                    <div align="center" style="position:relative;">

                    </div>
                </td>
	</tr><tr>
		<td class="tContentPlace" colspan="5" style="background-color:White;width:100%;">
		   <div id="caldisp" style="position:relative;">

    <!-- <div id="ctl00_HomePageContent_UpdatePanel1">
			-->
    <table width="100%" border="0" align="center" cellpadding="3" cellspacing="0" class="internalTable" id="tblUser">
 <tbody><tr>
            <td class="pageHeader" colspan="4">
                <table width="100%">
                    <tbody><tr>
                        <td class="pageHeaderText" colspan="2">Bank Details of Insured Person
                        </td>
                        <td valign="bottom" class="mandatoryField" colspan="2">* Required Fields
                        </td>
                    </tr>
                </tbody></table>
            </td>
        </tr>
        <tr id="RowCreate">
            <td colspan="4" class="sectionHeader" style="height: 19px">

            </td>
        </tr>
        <tr>
            <td colspan="8" class="sectionHeader">
            </td>
        </tr>
    </tbody></table>
    <table width="100%" border="0" align="center" cellpadding="2" cellspacing="0" class="internalTable1" id="tblchallasn">
        <tbody><tr>
            <td>
                <table id="ctl00_HomePageContent_tblIfsc" width="100%" border="0" align="center" cellpadding="8" cellspacing="0" class="internalTable">
				<tbody><tr>
					<td class="leftTopFormLabel">
                            IFSC Code :<span class="mandatoryField">*</span>
                            <input name="ctl00$HomePageContent$txtIFSCcode" type="text" maxlength="11" id="ctl00_HomePageContent_txtIFSCcode" tabindex="106" class="txtbox">
                            <span id="ctl00_HomePageContent_RequiredFieldValidator4" style="color:Red;visibility:hidden;">Enter IFSC code</span>

                            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                            <input type="submit" name="ctl00$HomePageContent$btnIFSCcode" value="Search" onclick='javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions("ctl00$HomePageContent$btnIFSCcode", "", true, "search", "", false, false))' id="ctl00_HomePageContent_btnIFSCcode" class="btn">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                        </td>
				</tr>
			</tbody></table>

            </td>
        </tr>
    </tbody></table>

  <table width="100%" border="0" align="center" cellpadding="2" cellspacing="0" class="internalTable" id="tblFootnote">
				<tbody><tr>
					<td colspan="8" class="leftTopFormLabel">
					Every Insured Person should have unique Bank Account Number.
					</td>
				</tr>
<tr>
					<td colspan="8" class="leftTopFormLabel">
					Attested &amp; Signed by Employer copy of the front page of cheque
leaflet issued by Bank or the 1st 2 pages of passbook showing the Name
of the Account Holder, Account Number, Bank Name, Bank Branch, IFSC
Number should be uploaded here.	</td>
				</tr>
<tr>
					<td colspan="8" class="leftTopFormLabel">
					It shall be the responsibility of the Employer to provide the
correct Bank Credentials of the Employee to prevent legal and
administrative consequences in case of wrong or fraudulent entry. It is
recommended that each Insured Person should have unique Bank Account
Number.					</td>
				</tr>
			</tbody></table>
    <!--
		</div>-->

		   </div>
                </td>
	</tr>
</tbody></table>
        <div id="clearfooter">
        </div>
    </div>
    <div id="footersection">
        <table id="ctl00_Table1" cellspacing="0" cellpadding="0" align="Center" border="0" style="border-width:0px;height:60px;width:100%;border-collapse:collapse;">
	<tbody><tr class="dBlockFooter" style="background-color:White;">
		<td class="dBlockFooter" colspan="5">
                    DISCLAIMER: Content owned, maintained and updated by Employee's State Insurance
                    Corporation. Copyright © 2009, ESIC, India. All Rights Reserved. Best viewed
                    in 1024 x 768 pixels, Designed and Developed by Wipro LTD.<span id="ctl00_lblIP" style="color:White;">IP Address : 44.</span><span id="ctl00_Label1" style="color:#742902;">ASP Session ID : 4y1wla45decyipudgziyhwb5</span><span id="ctl00_Label2"></span></td>
	</tr>
</tbody></table>
    </div>
    <input type="hidden" name="ctl00$hdnhmedate" id="ctl00_hdnhmedate" value="2024 7 15">
    <input type="hidden" name="ctl00$hdnLogout" id="ctl00_hdnLogout" value="0">

<script type="text/javascript">
//<![CDATA[
var Page_Validators =  new Array(document.getElementById("ctl00_HomePageContent_RequiredFieldValidator4"));
//]]>
</script>

<script type="text/javascript">
//<![CDATA[
var ctl00_HomePageContent_RequiredFieldValidator4 = document.all ? document.all["ctl00_HomePageContent_RequiredFieldValidator4"] : document.getElementById("ctl00_HomePageContent_RequiredFieldValidator4");
ctl00_HomePageContent_RequiredFieldValidator4.controltovalidate = "ctl00_HomePageContent_txtIFSCcode";
ctl00_HomePageContent_RequiredFieldValidator4.errormessage = "Enter IFSC code";
ctl00_HomePageContent_RequiredFieldValidator4.validationGroup = "search";
ctl00_HomePageContent_RequiredFieldValidator4.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl00_HomePageContent_RequiredFieldValidator4.initialvalue = "";
//]]>
</script>


<script type="text/javascript">
//<![CDATA[
var ctl00_NavigationMenu_Data = new Object();
ctl00_NavigationMenu_Data.disappearAfter = 2000;
ctl00_NavigationMenu_Data.horizontalOffset = 0;
ctl00_NavigationMenu_Data.verticalOffset = 0;
ctl00_NavigationMenu_Data.hoverClass = 'ctl00_NavigationMenu_14 navsubmenustylehover';
ctl00_NavigationMenu_Data.hoverHyperLinkClass = 'ctl00_NavigationMenu_13 navsubmenustylehover';

var Page_ValidationActive = false;
if (typeof(ValidatorOnLoad) == "function") {
    ValidatorOnLoad();
}

function ValidatorOnSubmit() {
    if (Page_ValidationActive) {
        return ValidatorCommonOnSubmit();
    }
    else {
        return true;
    }
}
        Sys.Application.initialize();

document.getElementById('ctl00_HomePageContent_RequiredFieldValidator4').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_HomePageContent_RequiredFieldValidator4'));
}
//]]>
</script>
</form>

<script>


	// var contextPath = "http://www.esic.in/InsuranceGlobalWebV20/Digsig/docwebsigner4.6.jar";
               var contextPath = "../DigitalSigComponents/docwebsigner4.6.jar";

    if (deployJava.versionCheck("1.6+") == false) {
        var java_message = 'Websigner requires JRE1.5 or higher. Please download it from <a href="http://10.80.100.146:8088/websigner4.0/jre6u21.exe">Click here</a> to download jre. <br>Once Installation is done. Close the browser and relogin.';
        if (document.all) {
            javaRequiredDiv.innerHTML = java_message;
        } else if (document.getElementById) {
            rng = document.createRange();
            el = document.getElementById("javaRequiredDiv");
            rng.setStartBefore(el);
            htmlFrag = rng.createContextualFragment(java_message);
            while (el.hasChildNodes()) {
                el.removeChild(el.lastChild);
            }
            el.appendChild(htmlFrag);
        }
    } else {
        var attributes = {
            code: 'emas.WebsignerApplet.class',
            archive: contextPath,
            width: 1,
            height: 1,
            name: 'websignerapplet'
        };
        var parameters = {
            MAYSCRIPT: 'true',
            scriptable: 'true',
            enableExpiryCheck: 'true',
            regexFilterIssuerName: "e-Mudhra Sub CA for Class 3 Platinum Organisation 2011|e-Mudhra Sub CA for Class 2 Gold Individual 2011"
        };
        var version = '1.5';
        deployJava.runApplet(attributes, parameters, version);
    }

</script>


<script type="text/javascript">
    currentServerDate = '15-07-2024'
    dateSeperator = '-'


    var isClose = 1;
    window.onbeforeunload = function(e) {
        if ($('#ctl00_hdnLogout').val() == '1') {
            window.open("../Errors/SessionExpired.aspx", "_blank", "toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, copyhistory=yes, width=200, height=200");
            window.close();
        }

    }
    $("#ctl00_imgbtnLogout").click(function(event) {
        $('#ctl00_hdnLogout').val('1');
    });

    function checkForRefresh(event) {
        if (event.which == 116)
            isClose = 0;
    }
    function mouseDown(e) {
        var ctrlPressed = 0;
        var altPressed = 0;
        var shiftPressed = 0;
        if (parseInt(navigator.appVersion) > 3) {
            var evt = e ? e : window.event;
            if (document.layers && navigator.appName == "Netscape" && parseInt(navigator.appVersion) == 4) {
                var mString = (e.modifiers + 32).toString(2).substring(3, 6);
                shiftPressed = (mString.charAt(0) == "1");
                ctrlPressed = (mString.charAt(1) == "1");
                altPressed = (mString.charAt(2) == "1");
                self.status = "modifiers=" + e.modifiers + " (" + mString + ")"
            }
            else {
                shiftPressed = evt.shiftKey;
                altPressed = evt.altKey;
                ctrlPressed = evt.ctrlKey;
                self.status = "" + "shiftKey=" + shiftPressed + ", altKey=" + altPressed + ", ctrlKey=" + ctrlPressed
            }
            if (shiftPressed || altPressed || ctrlPressed)
                alert("Navigation Cancelled !\n" + (shiftPressed ? "" : "") + (altPressed ? "" : "") + (ctrlPressed ? "" : ""));
        }
        return true;
    }

    document.onmousedown = mouseDown;

    function actionsOnLoad() {
        rightclickControl();
        disableBackButton();
    }
</script>


</body><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration></html>