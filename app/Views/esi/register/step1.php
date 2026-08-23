<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head id="ctl00_Head1">
<meta http-equiv="content-type" content="text/html; charset=UTF-8"><title>
	ESIC
</title><link rel="stylesheet" type="text/css" href="../../public/assets/esi/register1/esicCSSglobal.css">
<link rel="stylesheet" type="text/css" href="../../public/assets/esi/register1/esiccsstaskhome.css">
<link rel="stylesheet" type="text/css" href="../../public/assets/esi/register1/esiclayout.css">




    <script type="text/javascript" src="../../public/assets/esi/register1/JavaScript1.js"></script>

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



    <link href="../../public/assets/esi/register1/WebResource.css" type="text/css" rel="stylesheet"><style type="text/css">
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
<input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value="">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKMTQ5NDI0OTEzMhBkZBYCZg9kFgICAQ9kFgYCAw9kFgICAQ9kFgJmD2QWAmYPZBYCZg9kFgQCAQ9kFgJmDw8WAh4EVGV4dAURNTQwMDAyNDkwNzAwMDA5OTlkZAIDD2QWBAICDxYCHgdWaXNpYmxlaGQCBA8WAh8BaGQCBQ9kFgICAQ9kFgJmD2QWAgIBD2QWAgIFD2QWAmYPZBYIAgkPZBYCAgEPDxYEHwAFETU0MDAwMjQ5MDcwMDAwOTk5HgdFbmFibGVkaGRkAg0PEGRkFgFmZAIPD2QWAgILDxBkZBYBZmQCIQ9kFgQCCw8QZGQWAWZkAg0PEA8WBh4ORGF0YVZhbHVlRmllbGQFAnBrHg1EYXRhVGV4dEZpZWxkBQpEZXZpY2VuYW1lHgtfIURhdGFCb3VuZGdkEBUDDiAtLSBTZWxlY3QgLS0gDU1hbnRyYSBNRlMxMTAgQWNjZXNzIEZNMjIwVSBMMSAvIEFjY2VzcyBBU1QzMDAVAwItMQExATIUKwMDZ2dnFgFmZAIHD2QWAmYPZBYCZg9kFgYCAQ8PFgIfAAUQSVAgQWRkcmVzcyA6IDQ0LmRkAgIPDxYCHwAFKUFTUCBTZXNzaW9uIElEIDogMDEzYTBpenBsZGpiZ3o1NWtyc2V6eTU1ZGQCAw8PFgIfAGVkZGQ=">
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


<script src="../../public/assets/esi/register1/WebResource.js" type="text/javascript"></script>


<script src="../../public/assets/esi/register1/ScriptResource_002.js" type="text/javascript"></script>
<script src="../../public/assets/esi/register1/ScriptResource_003.js" type="text/javascript"></script>
<script src="../../public/assets/esi/register1/ScriptResource.js" type="text/javascript"></script>
<script src="../../public/assets/esi/register1/ScriptResource_004.js" type="text/javascript"></script>
<script src="../../public/assets/esi/register1/jquery1.js" type="text/javascript"></script>
<script src="../../public/assets/esi/register1/esic.js" type="text/javascript"></script>
<script src="../../public/assets/esi/register1/ScriptResource_006.es" type="text/javascript"></script>
<script src="../../public/assets/esi/register1/ScriptResource_005.es" type="text/javascript"></script>
<script src="../../public/assets/esi/register1/ScriptResource_002.es" type="text/javascript"></script>
<script src="../../public/assets/esi/register1/ScriptResource.es" type="text/javascript"></script>
<script src="../../public/assets/esi/register1/ScriptResource_008.es" type="text/javascript"></script>
<script src="../../public/assets/esi/register1/ScriptResource_007.es" type="text/javascript"></script>
<script src="../../public/assets/esi/register1/ScriptResource_009.es" type="text/javascript"></script>
<script src="../../public/assets/esi/register1/ScriptResource_003.es" type="text/javascript"></script>
<script src="../../public/assets/esi/register1/ScriptResource_004.es" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
function WebForm_OnSubmit() {
if (typeof(ValidatorOnSubmit) == "function" && ValidatorOnSubmit() == false) return false;
return true;
}
//]]>
</script>

<div>

	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWEQLz7NTMBQLU3p7PCAKc1MrcAQLWtM++AgLOtOPBBQLZyPy/AgKCponNAgLGlPu0CQLz27n+AwLlj5PNDAL7j5PNDAL14LkjAs/n/oELArjz5doFAumUwfINApy9h6AMApvCsp8F">
</div>
   <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ctl00$ScriptManager1', document.getElementById('aspnetForm'));
Sys.WebForms.PageRequestManager.getInstance()._updateControls([], [], [], 90);
//]]>
</script>

    <div id="outer">
        <table id="ctl00_Table2" cellspacing="0" cellpadding="0" align="Center" border="0" style="border-width:0px;height:60px;width:100%;border-collapse:collapse;">
	<tbody><tr>
		<td class="tHeadImage" align="left"><img id="ctl00_ESICLogo" src="../../public/assets/esi/Small%20Logo.jpg" align="absmiddle" style="border-width:0px;"></td><td class="tHeadImage" align="center"></td><td class="tHeadImage" align="right"><img id="ctl00_Image1" src="../../public/assets/esi/IndianSymbol.jpg" align="absmiddle" style="border-width:0px;"></td>
	</tr><tr>
		<td align="center" colspan="3" style="height:25px;width:100%;"><table id="ctl00_Table3" cellspacing="0" cellpadding="0" border="0" style="height:100%;width:100%;border-collapse:collapse;">
			<tbody><tr>
				<td class="dataBlock" align="left" style="width:8%;">
                                    User Login:
                            </td><td class="dataBlock" align="left" style="width:58%;"><span id="ctl00_lbluserName" style="background-color:Transparent;"><?php echo session('emp_code'); ?></span></td><td class="dataBlock" style="width:23%;">
                                    <div id="raw"><?php echo date("D M j, Y h:i:s A"); ?></div>
                            </td>
                            <!--<td class="homelink" align="right">-->
                                <td class="homelink" align="right"><a href="<?= base_url('user/dashboard') ?>"><img src="<?= base_url('public/assets/esi/logout.gif') ?>" alt="Logout" style="border-width:0px;"></a></td>
   <!--                             &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;-->
   <!--                             <input type="submit" name="ctl00$Test" value="Button" onclick='javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions("ctl00$Test", "", true, "", "", false, false))' id="ctl00_Test" style="display: none;"><input type="submit" name="ctl00$dummybutton" value="" id="ctl00_dummybutton" style="border-width:0px;font-weight:bold;height:0px;width:0px;"></td>-->
			<!--</tr>-->
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

 <script type="text/javascript" src="../../public/assets/esi/aes.js"></script>
    <script type="text/javascript" language="javascript">

          
function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : evt.keyCode;
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
         return true;
      }

         function AadhaarCheckSum11(id) {
    var Aadhaar = document.getElementById(id).value;
    document.getElementById("ctl00_HomePageContent_hdnaadhaar").value=Aadhaar;
   if(!/^[0-9]+$/.test(Aadhaar)){
    //alert("Please enter numerics only.")
	document.getElementById(id).value = '';
	return;
  }
    Aadhaar = Aadhaar.replace(/[/]+/g, '');
    if(Aadhaar == "")
        return;
    if (isNaN(Aadhaar) == true) {
        document.getElementById(id).value = '';
        alert('Please enter a valid numeric value for Aadhaar-ID');
            document.getElementById("ctl00_HomePageContent_chkAadaaar").checked = false;

        return;
    }
   
    if (Aadhaar.length == 12) {
        
       // var result = ValidateAadhaarNumber(Aadhaar);
        /*if (result != "1") {
            document.getElementById(id).value = '';
            alert('Please enter a valid Aadhaar-ID');
            document.getElementById("ctl00_HomePageContent_chkAadaaar").checked = false;
          document.getElementById("ctl00_HomePageContent_LblMessage").style.display = "none";
        }
        else {
        document.getElementById("ctl00_HomePageContent_chkAadaaar").checked = true;
            return true;
        }*/
         document.getElementById("ctl00_HomePageContent_chkAadaaar").checked = true;
            return true;
    }
    else{
        document.getElementById(id).value = '';
         alert('Please enter a valid Aadhaar-ID');
        document.getElementById("ctl00_HomePageContent_LblMessage").style.display = "none";
         return;
    }
}

function ValidateAadhaarNumber12312(Aadhaar) {
    var Result;
    switch (true) {
        case Aadhaar == "":
            Result = "0";
            break;
        case AadhaarCheck(Aadhaar, 0) == 0:
            Result = "1";
            break;
        default:
            Result = "0";
    }
    return Result;
}
function AadhaarCheck12312(Aadhaar, OffVal) {

    var d = [[0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
           [1, 2, 3, 4, 0, 6, 7, 8, 9, 5],
           [2, 3, 4, 0, 1, 7, 8, 9, 5, 6],
           [3, 4, 0, 1, 2, 8, 9, 5, 6, 7],
           [4, 0, 1, 2, 3, 9, 5, 6, 7, 8],
           [5, 9, 8, 7, 6, 0, 4, 3, 2, 1],
           [6, 5, 9, 8, 7, 1, 0, 4, 3, 2],
           [7, 6, 5, 9, 8, 2, 1, 0, 4, 3],
           [8, 7, 6, 5, 9, 3, 2, 1, 0, 4],
           [9, 8, 7, 6, 5, 4, 3, 2, 1, 0]];

    var p = [[0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
           [1, 5, 7, 6, 2, 8, 3, 0, 9, 4],
           [5, 8, 0, 3, 7, 9, 6, 1, 4, 2],
           [8, 9, 1, 6, 0, 4, 3, 5, 2, 7],
           [9, 4, 5, 3, 1, 2, 6, 8, 7, 0],
           [4, 2, 8, 6, 5, 7, 3, 9, 0, 1],
           [2, 7, 9, 3, 8, 0, 6, 4, 1, 5],
           [7, 0, 4, 6, 9, 1, 3, 2, 5, 8]];

    var flag = 0;
    for (i = Aadhaar.length - 1; i >= 0; i = i - 1) {
        flag = d[flag][p[(Aadhaar.length - 1 - i + OffVal) % 8][parseInt(Aadhaar.substr(i, 1))]];
    }
    return flag;
}

  function myshowp(e) {

                txtBox = document.getElementById("ctl00_HomePageContent_txtAadhaarNo");//$('#txtAadhaarNo')

                if (e.checked) {
                  txtBox.type = "text";

                }
                else {
                   txtBox.type = "password";
                }
            }
        function onlyNumbers(event) {
            var charCode = (event.which) ? event.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;

            return true;
        }

        
    </script>
    <input type="hidden" name="ctl00$HomePageContent$hdndevicename" id="ctl00_HomePageContent_hdndevicename">
    <input type="hidden" name="ctl00$HomePageContent$hdndevicetype" id="ctl00_HomePageContent_hdndevicetype">
        <input type="hidden" name="ctl00$HomePageContent$hdnaadhaar" id="ctl00_HomePageContent_hdnaadhaar">
    <input type="hidden" name="ctl00$HomePageContent$hdnbio" id="ctl00_HomePageContent_hdnbio">
    <span id="ctl00_HomePageContent_lblmantraport"></span>
    <table width="97%" border="0" cellpadding="2" cellspacing="0">
        <tbody><tr id="ctl00_HomePageContent_trsubunit" class="lastData_Section">
			<td valign="top" align="left" class="contentTabletd">

                <table width="100%" border="0" cellpadding="2" cellspacing="0" class="formlevel">
                    <tbody><tr>
                        <td class="pageHeader" colspan="4">
                            <table width="100%">
                                <tbody><tr>
                                    <td class="pageHeaderText">
                                        Employee Registration with Aadhaar Number
                                    </td>
                                    <td valign="bottom" class="mandatoryField">
                                        &nbsp;
                                    </td>
                                    <td>
                                        <span id="ctl00_HomePageContent_lblErrorMsg"></span>
                                        <span id="ctl00_HomePageContent_lblmodal"></span>
                                        <span id="ctl00_HomePageContent_Label2"></span>
                                        <input type="hidden" name="ctl00$HomePageContent$hdnkey" id="ctl00_HomePageContent_hdnkey" value="8080808080607432">
                                    </td>
                                </tr>
                            </tbody></table>
                        </td>
                    </tr>
                </tbody></table>
                <div id="ctl00_HomePageContent_pnlEmprCode">

                        </div><table width="100%" border="0" cellpadding="2" cellspacing="0" class="formlevel border">
                    <tbody><tr class="lastData_Section" id="trGetEmprNo">
                            <td colspan="2" class="leftTopFormLabel">
                                Employer/Subunit Code No:<span class="mandatoryField">*</span>
                            </td>
                            <td colspan="2" class="lastFormValue">
                                <input name="ctl00$HomePageContent$txtEmployerCode" type="text" value="<?php echo session('emp_code'); ?>" maxlength="17" id="ctl00_HomePageContent_txtEmployerCode" disabled="disabled" class="txtbox numericAlignRight" onkeypress="return onlyNumbers(event)">
                                <span id="ctl00_HomePageContent_rfvEmployerCode" style="color:Red;display:none;">Please Enter Employer/Subunit Code No</span>

                            </td>
                        </tr>

                    <tr class="lastData_Section" id="RowForNew">
                        <td class="leftTopFormLabel" colspan="2" width="40%">
                            Do you want to register with Aadhaar number?**:
                        </td>
                        <td class="lastFormValue" colspan="2" width="60%">
                            <span id="ctl00_HomePageContent_ctrlLblCount" class="pageHeaderText" style="color:Red;"></span>
                            <table id="ctl00_HomePageContent_rbtnlistIsregistered" border="0">
				<tbody><tr>
					<td><input id="ctl00_HomePageContent_rbtnlistIsregistered_0" type="radio" name="ctl00$HomePageContent$rbtnlistIsregistered" value="0" checked="checked"><label for="ctl00_HomePageContent_rbtnlistIsregistered_0">Yes</label></td><td><input id="ctl00_HomePageContent_rbtnlistIsregistered_1" type="radio" name="ctl00$HomePageContent$rbtnlistIsregistered" value="2" onclick="javascript:setTimeout('__doPostBack(\'ctl00$HomePageContent$rbtnlistIsregistered$1\',\'\')', 0)"><label for="ctl00_HomePageContent_rbtnlistIsregistered_1">No</label></td>
				</tr>
			</tbody></table>
                        </td>
                    </tr>
                </tbody></table>


                <div class="pagesubmission" style="text-align: center">
                    <div class="primary">
                        <input type="submit" name="ctl00$HomePageContent$btnContinue" value="Continue" onclick='javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions("ctl00$HomePageContent$btnContinue", "", true, "Trackemployees", "", false, false))' id="ctl00_HomePageContent_btnContinue" class="btn">
                        <input type="submit" name="ctl00$HomePageContent$button" value="Cancel" onclick="window.close();" id="ctl00_HomePageContent_button" class="btn" onkeydown="if (event.keyCode == 13) document.getElementById('ctl00_HomePageContent_button').click()">
                    </div>
                </div>

                <span id="ctl00_HomePageContent_Label3"></span>



                <br>





<div id="ctl00_HomePageContent_pnlbiometric" style="margin: 0px auto; display: none; width: 1030px;">

        <table width="77%" border="0" align="center" cellpadding="2" cellspacing="0" class="internalTable">

            <tbody><tr>
                <td class="leftTopFormLabel" style="width: 41%;text-align:right;">Biometric Status :
                </td>
                <td class="leftTopFormLabel">
                    <span id="ctl00_HomePageContent_lblError"></span><br>
                    <div style="border-style: solid; border-width: 1px; height: 150px; text-align: -moz-center;
                        width: 120px">
                        <img id="ctl00_HomePageContent_imgStatus" src="" alt="Status" style="height:150px;width:120px;border-width:0px;">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="pageFooter1">
                    <input type="submit" name="ctl00$HomePageContent$btnvalidatebio" value="Validate Biometric" onclick='javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions("ctl00$HomePageContent$btnvalidatebio", "", true, "", "", false, false))' id="ctl00_HomePageContent_btnvalidatebio" title="Validate" class="btn_big">


                </td>
            </tr>

        </tbody></table>

			</div>





            </td>
		</tr>

        <tr>
            <td>
                &nbsp;
            </td>
        </tr>
    </tbody></table>






    <script src="../../public/assets/esi/jquery-1.12.4.js" type="text/javascript"></script>
    <script type="text/javascript" language="javascript">
    var finalUrl="";
		var MethodInfo="";
		var MethodCapture="";
		var OldPort=false;

		var count = 0;
        var actCount = 0;
        var isHTTPFound = false;
        var isHTTPSFound = false;
        var useHTTPS = false;
        var exceptionErr = '';
        var hostName = 'localhost';
        var accessPort="";

    function discoverAvdm()
		{
 			openNav();
			var SuccessFlag=0;
            var primaryUrl = "http://127.0.0.1:";

						 try {
							 var protocol = window.location.href;
							 if (protocol.indexOf("https") >= 0) {
								primaryUrl = "http://127.0.0.1:";
							}
						 } catch (e)
						{ }
            url = "";

			    for (var i = 11100; i <= 11120; i++)
                {
					if(primaryUrl=="http://127.0.0.1:" && OldPort==true)
					{
					   i="8005";
					}
						var verb = "RDSERVICE";
                        var err = "";
						SuccessFlag=0;
						var res;
						$.support.cors = true;
						var httpStaus = false;
						var jsonstr="";
						 var data = new Object();
						 var obj = new Object();
							$.ajax({
							type: "RDSERVICE",
							async: false,
							crossDomain: true,
							url: primaryUrl + i.toString(),
							contentType: "text/xml; charset=utf-8",
							processData: false,
							cache: false,
							crossDomain:true,
							success: function (data) {
								httpStaus = true;
								res = { httpStaus: httpStaus, data: data };
								finalUrl = primaryUrl + i.toString();
								var $doc = $.parseXML(data);
								var CmbData1 =  $($doc).find('RDService').attr('status');
								var CmbData2 =  $($doc).find('RDService').attr('info');
								if(RegExp('\\b'+ 'Mantra' +'\\b').test(CmbData2)==true)
								{
								    closeNav();
									if($($doc).find('Interface').eq(0).attr('path')=="/rd/capture")
									{
									  MethodCapture=$($doc).find('Interface').eq(0).attr('path');
									}
									if($($doc).find('Interface').eq(1).attr('path')=="/rd/capture")
									{
									  MethodCapture=$($doc).find('Interface').eq(1).attr('path');
									}
									if($($doc).find('Interface').eq(0).attr('path')=="/rd/info")
									{
									  MethodInfo=$($doc).find('Interface').eq(0).attr('path');
									}
									if($($doc).find('Interface').eq(1).attr('path')=="/rd/info")
									{
									  MethodInfo=$($doc).find('Interface').eq(1).attr('path');
									}


									SuccessFlag=1;
									 //alert("RDSERVICE Discover Successfully");

									return;
								}
							},
							error: function (jqXHR, ajaxOptions, thrownError) {
							if(i=="8005" && OldPort==true)
							{
								OldPort=false;
								i="11099";
							}
							},
						});
						if(SuccessFlag==1)
						{
						 document.getElementById('ctl00_HomePageContent_lblmantraport').value=data;
						 document.getElementById('ctl00_HomePageContent_btnGetOtp').value="Capture";

						  break;
						}
                }

				if(SuccessFlag==0)
				{
				document.getElementById('ctl00_HomePageContent_btnGetOtp').value="Get OTP";
				 alert("Connection failed Please try again.");
				}
				closeNav();

				return res;
		}


		function openNav() {

		}

		function closeNav() {

		}

		function deviceInfoAvdm()
		{


discoverAvdm();

            url = "";



						finalUrl = "http://127.0.0.1:" + $("#ddlAVDM").val();

						try {
							var protocol = window.location.href;
							if (protocol.indexOf("https") >= 0) {
								finalUrl = "http://127.0.0.1:" + $("#ddlAVDM").val();
							}
						} catch (e)
						{ }

					//
					 var verb = "DEVICEINFO";
                      //alert(finalUrl);

                        var err = "";

						var res;
						$.support.cors = true;
						var httpStaus = false;
						var jsonstr="";

							$.ajax({

							type: "DEVICEINFO",
							async: false,
							crossDomain: true,
							url: finalUrl+MethodInfo,
							contentType: "text/xml; charset=utf-8",
							processData: false,
							success: function (data) {
							//alert(data);
								httpStaus = true;
								res = { httpStaus: httpStaus, data: data };

								alert(data);
							},
							error: function (jqXHR, ajaxOptions, thrownError) {
							//alert(thrownError);
								res = { httpStaus: httpStaus, err: getHttpError(jqXHR) };
							},
						});

						return res;

		}


//		Capture Biometric Data

    function CaptureAvdm()
		{
		//document.getElementById('ctl00_HomePageContent_UpdateProgress1').style.display = "inline";
 discoverAvdm();

	    var Message='';
	    var $doc='';
	    var piddata='';
	    var Devicename='';
	    var Devicetype='';
		var XML='<' + '?xml version="1.0"?' + '> <PidOptions ver="1.0"> <Opts fCount="1" fType="2" iCount="0" pCount="0" format="0" pidVer="2.0" timeout="20000" otp="" wadh="" posh="UNKNOWN" env="P"/> </PidOptions>';
					 var verb = "CAPTURE";
                        var err = "";
						var res;
						$.support.cors = true;
						var httpStaus = false;
						var jsonstr="";
						;

							$.ajax({
							type: "CAPTURE",
							async: false,
							crossDomain: true,
							url: finalUrl+MethodCapture,
							data:XML,
							contentType: "text/xml; charset=utf-8",
							processData: false,
							success: function (data) {

							piddata=data;
								httpStaus = true;
								res = { httpStaus: httpStaus, data: data };
								$doc = $.parseXML(data);
								Message =  $($doc).find('Resp').attr('errInfo');
								Devicename =  $($doc).find('DeviceInfo').attr('dpId');
								Devicetype =  $($doc).find('DeviceInfo').attr('mi');



							},
							error: function (jqXHR, ajaxOptions, thrownError) {
							//$('#txtPidOptions').val(XML);
							//alert(thrownError);
								res = { httpStaus: httpStaus, err: getHttpError(jqXHR) };
							},
						});

			    document.getElementById('ctl00_HomePageContent_hdnbio').value='';
                            document.getElementById('ctl00_HomePageContent_hdnbio').value=piddata;
                            document.getElementById('ctl00_HomePageContent_hdndevicename').value=Devicename;
                            document.getElementById('ctl00_HomePageContent_hdndevicetype').value=Devicetype;
                            //alert(document.getElementById('ctl00_HomePageContent_hdnbio').value);

                            if(Message=="Success.")
						{
						alert(Message);
						   Enablecontrols("1");
						}
						else{
						   alert("Before capturing the data please connect the device");
						   Checking();
						   return;
						}
						return res;
		}

function Enablecontrols(message)
		{
		if(message=="1")
		{
		document.getElementById('ctl00_HomePageContent_lblError').innerHTML="Captured successfully...";
						   document.getElementById('ctl00_HomePageContent_pnlbiometric').style.display = "inline";
						   document.getElementById('ctl00_HomePageContent_btnGetOtp').style.display = "none";
						 //  document.getElementById('ctl00_HomePageContent_UpdateProgress1').style.display = "none";
						   document.getElementById('ctl00_HomePageContent_imgStatus').src="../App_Themes/Images/success.png";
		}
		else{
		     document.getElementById('ctl00_HomePageContent_pnlbiometric').style.display = "inline";
						    document.getElementById('ctl00_HomePageContent_lblError').innerHTML="Captured Failed...";
						    document.getElementById('ctl00_HomePageContent_imgStatus').setAttribute('src', '../../App_Themes/Images/failure.png');
		}
		}
//      End Capture





    //Aadhaar Biometric End--%>

//

function scanMultiPorts() {
//alert("port value");
            count = 0;
            var req = new Array(5);

            if (location.protocol === 'https1:') {

                scanForRDSrvcHTTPS(null, 11200);

                for (var jk = 0; jk < 5; jk++) {
                    var tmpPortNo = (11100 + jk);
//alert("tmpPortNo"+tmpPortNo);
                    if (window.XMLHttpRequest) {
                        try {
                            req[jk] = new XMLHttpRequest();
                            req[jk].open('DEVICEINFO', 'https://' + hostName + ':' + String(tmpPortNo) + '/rd/info?ts=' + Date.now(), true);
                        } catch (e) {
                            req[jk] = new ActiveXObject("Microsoft.XMLHTTP");
                            req[jk].open('DEVICEINFO', 'https://' + hostName + ':' + String(tmpPortNo) + '/rd/info?ts=' + Date.now(), true);
                        }

                    } else {
                        req[jk] = new ActiveXObject("Microsoft.XMLHTTP");
                        req[jk].open('DEVICEINFO', 'https://' + hostName + ':' + String(tmpPortNo) + '/rd/info?ts=' + Date.now(), true);
                    }

                    scanForRDSrvcHTTPS(req[jk], tmpPortNo);
                }
//alert("222");
            } //else if (location.protocol === 'http:') {
else{

                scanForRDSrvcHTTPS(null, 11200);

                for (var jk = 0; jk < 5; jk++) {
                    var tmpPortNo = (11100 + jk);
                    if (window.XMLHttpRequest) {
                        try {
                            req[jk] = new XMLHttpRequest();
                            req[jk].open('DEVICEINFO', 'http://' + hostName + ':' + String(tmpPortNo) + '/rd/info?ts=' + Date.now(), true);
                        } catch (e) {
                            req[jk] = new ActiveXObject("Microsoft.XMLHTTP");
                            req[jk].open('DEVICEINFO', 'http://' + hostName + ':' + String(tmpPortNo) + '/rd/info?ts=' + Date.now(), true);
                        }

                    } else {
                        req[jk] = new ActiveXObject("Microsoft.XMLHTTP");
                        req[jk].open('DEVICEINFO', 'http://' + hostName + ':' + String(tmpPortNo) + '/rd/info?ts=' + Date.now(), true);
                    }
                    scanForRDSrvc(req[jk], tmpPortNo);
                }
            }


        }
        function scanForRDSrvc(xhr, portNo) {
            try {
//alert("333");
                xhr.onreadystatechange = function () {

                    if (xhr.readyState == 4) {
                        if (xhr.status == 200) {
                            callbackScan(null, xhr.responseText, portNo);
                        } else {
                            callbackScan(xhr.status, null, portNo);
                        }
                    }
                };
                xhr.send();

            } catch (e) {
                if (e.message === exceptionErr) {
//alert("msg"+e.message);
                } else {
                    exceptionErr = e.message;
                    //alert("HTTP ERROR - " + exceptionErr);
                }
//alert("444");
                callbackScan(status);
            }
        }
          function callbackScan(err, data, portNoarg) {
            count++;
            if (err != null) {
                scanForRDSrvcHTTPS(null, portNoarg);
            } else {
                var retString = String(data).toUpperCase();
                if (retString.search("STARTEK.ACPL") > 0 ) {
                    actCount++;
                    isHTTPFound = true;
                    isHTTPSFound = false;//static
                    var opt = document.createElement("option");
                    if (retString.search("STARTEK.ACPL") > 0) {
                        var tmpStr = retString.substr(retString.search('MI="') + 4);
                        opt.text = portNoarg + ' : ' + tmpStr.substr(0,tmpStr.search('"'));
                    }
                    opt.value = portNoarg;

accessPort=portNoarg;
if(portNoarg!=null){

alert("Please keep the finger on device");}
 captureFPAuth();
//info();

                  //  scanForRDSrvcHTTPS(null, portNoarg);
                }
                if (isHTTPFound && isHTTPSFound) {
                    useHTTPS = true;
                } else if (isHTTPFound && !isHTTPSFound) {
                    useHTTPS = false;
                } else if (!isHTTPFound && isHTTPSFound) {
                    useHTTPS = true;
                }
            }

        }
 function scanForRDSrvcHTTPS(xhr, portNo) {
            try {
//alert("222");
                var xhr1 = null;
                if (xhr === null) {
                    if (window.XMLHttpRequest) {
                        try {
                            xhr1 = new XMLHttpRequest();
                            xhr1.open('DEVICEINFO', 'https://' + hostName + ':' + String(portNo) + '/rd/info?ts=' + Date.now(), true);
                        } catch (e) {
                            xhr1 = new ActiveXObject("Microsoft.XMLHTTP");
                            xhr1.open('DEVICEINFO', 'https://' + hostName + ':' + String(portNo) + '/rd/info?ts=' + Date.now(), true);
                        }

                    } else {
                        xhr1 = new ActiveXObject("Microsoft.XMLHTTP");
                        xhr1.open('DEVICEINFO', 'https://' + hostName + ':' + String(portNo) + '/rd/info?ts=' + Date.now(), true);
                    }
                } else {
                    xhr1 = xhr;
                }

                xhr1.onreadystatechange = function () {
                    if (xhr1.readyState == 4) {
                        if (xhr1.status == 200) {
                            callbackScanHTTPS(null, xhr1.responseText, portNo);
                        } else {
                            callbackScanHTTPS(xhr1.status, null, portNo);
                        }
                    }
                };
                xhr1.send();
            } catch (e) {
//alert(e.message);
                if (e.message === exceptionErr) {
                } else {
                    exceptionErr = e.message;
                    alert("HTTPS ERROR - " + portNo + exceptionErr);
                }

                callbackScanHTTPS(status);
            }
        }
          function callbackScanHTTPS(err, data, portNoarg) {
            if (err != null) {
                isHTTPFound = false;
            } else {
                var retString = String(data).toUpperCase();
                if (retString.search("STARTEK.ACPL") > 0 ) {
                    isHTTPSFound = true;
                    var opt = document.createElement("option");
                    if (retString.search("STARTEK.ACPL") > 0) {
                        var tmpStr = retString.substr(retString.search('MI="') + 4);
                        opt.text = portNoarg + ' : ' + tmpStr.substr(0,tmpStr.search('"'));
                    }
                    opt.value = portNoarg;

                    detectedFinalHTTPSPort = portNoarg;
                    useHTTPS = true;

                }
            }
        }
          function captureFPAuth() {
            var port;
            var urlStr = '';
            if (useHTTPS) {
                port = accessPort;
                urlStr = 'https://' + hostName + ':' + port + '/rd/capture?ts=' + Date.now();
            } else {
                port = accessPort;
                urlStr = 'http://' + hostName + ':' + port + '/rd/capture?ts=' + Date.now();
            }


            getJSONCapture(urlStr,
                function (err, data) {
                    if (err != null) {
                       // alert('Something went wrong: ' + err);
                        Enablecontrols("2");
                    } else {

                    $doc = $.parseXML(String(data));

								Devicename =  $($doc).find('DeviceInfo').attr('dpId');
								Devicetype =  $($doc).find('DeviceInfo').attr('mi');
                    if(Devicetype!="FM220U L1" && Devicetype !== "AST300")
                    {
                    alert("Before capturing the data please connect the device");
                    Checking();
                    return;
                    }

                    document.getElementById('ctl00_HomePageContent_hdnbio').value=String(data);
                     document.getElementById('ctl00_HomePageContent_hdndevicename').value=Devicename;
                            document.getElementById('ctl00_HomePageContent_hdndevicetype').value=Devicetype;
                            alert("Success.");
                       // alert('data: ' + String(data));
                        Enablecontrols("1");

                    }
                }
            );
        }

        var getJSON_rd = function (url, callback) {
            var xhr;
            if (window.XMLHttpRequest) {
                try {
                    xhr = new XMLHttpRequest();
                    xhr.open('RDSERVICE', url, true);
                } catch (e) {
                    xhr = new ActiveXObject("Microsoft.XMLHTTP");
                    xhr.open('RDSERVICE', url, true);
                }
            } else {
                xhr = new ActiveXObject("Microsoft.XMLHTTP");
                xhr.open('RDSERVICE', url, true);
            }

            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4) {
                    if (xhr.status == 200) {
                        callback(null, xhr.responseText);
                    } else {
                        callback(status);
                    }
                }
            };
            xhr.send();
        };

        var getJSON_info = function (url, callback) {
            var xhr;
            if (window.XMLHttpRequest) {
                try {
                    xhr = new XMLHttpRequest();
                    xhr.open('DEVICEINFO', url, true);
                } catch (e) {
                    xhr = new ActiveXObject("Microsoft.XMLHTTP");
                    xhr.open('DEVICEINFO', url, true);
                }
            } else {
                xhr = new ActiveXObject("Microsoft.XMLHTTP");
                xhr.open('DEVICEINFO', url, true);
            }

            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4) {
                    if (xhr.status == 200) {
                        callback(null, xhr.responseText);
                    } else {
                        callback(status);
                    }
                }
            };
            xhr.send();
        };




        var getJSONCapture = function (url, callback) {
            var xhr;

            if (window.XMLHttpRequest) {
                try {
                    xhr = new XMLHttpRequest();
                    xhr.open('CAPTURE', url, true);
                    xhr.responseType = 'text';
                } catch (e) {
                    xhr = new ActiveXObject("Microsoft.XMLHTTP");
                    xhr.open('CAPTURE', url, true);
                }
            } else {
                xhr = new ActiveXObject("Microsoft.XMLHTTP");
                xhr.open('CAPTURE', url, true);
            }


            var finalDemoStr = '<Demo></Demo>';

            var port;

            if (useHTTPS) {
                port = accessPort;
            } else {
                port = accessPort;
            }


                    var InputXml = "<PidOptions ver=\"1.0\"> <Opts fCount=\"1\" fType=\"2\" iCount=\"0\" pCount=\"0\" format=\"0\" pidVer=\"2.0\" timeout=\"20000\" otp=\"\" posh=\"UNKNOWN\" env=\"P\" wadh=\"E0jzJ/P8UopUHAieZn8CKqS4WPMi5ZSYXgfnlfkWjrc=\" /> " + finalDemoStr + "</PidOptions>";


            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4) {
                    if (xhr.status == 200) {
                        callback(null, xhr.responseText);
                    } else {
                        callback(status);
                    }
                }
            };
            xhr.send(InputXml);
        };

 function info() {
            var port;
            var urlStr = '';
            if (useHTTPS) {
                port =accessPort;
                urlStr = 'https://' + hostName + ':' + port + '/rd/info?ts=' + Date.now();
            } else {
                port =accessPort;
                alert('port: '+port);
                urlStr = 'http://' + hostName + ':' + port + '/rd/info?ts=' + Date.now();
            }


            getJSON_info(urlStr,
                function (err, data) {
                    if (err != null) {
                        alert('Something went wrong: ' + err);
                        Enablecontrols("2");
                    } else {
                    document.getElementById('ctl00_HomePageContent_hdnbio').value=String(data);
                  //alert('Device Info: ' + document.getElementById('ctl00_HomePageContent_hdnbio').value);
                  Enablecontrols("1");
                    }
                }
            );
        }

//


function Checking() {



if($('#ctl00_HomePageContent_rdlauth input[type=radio]:checked').val()=="1")
{
document.getElementById('ctl00_HomePageContent_ddldevice').value="-1";
document.getElementById('ctl00_HomePageContent_ddldevice').disabled= true;
						   document.getElementById('ctl00_HomePageContent_btnGetOtp').value = "Get Otp";
}

       else{


                            document.getElementById('ctl00_HomePageContent_ddldevice').disabled= false;
						   document.getElementById('ctl00_HomePageContent_btnGetOtp').value = "Capture";

       }
           //alert(document.getElementById('ctl00_HomePageContent_rdlauth').Value);ddldevice
           }




    </script>

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
                    in 1024 x 768 pixels, Designed and Developed by Wipro LTD.<span id="ctl00_lblIP" style="color:White;">IP Address : 44.</span><span id="ctl00_Label1" style="color:#742902;">ASP Session ID : 013a0izpldjbgz55krsezy55</span><span id="ctl00_Label2"></span></td>
	</tr>
</tbody></table>
    </div>
    <input type="hidden" name="ctl00$hdnhmedate" id="ctl00_hdnhmedate" value="2024 6 12">
    <input type="hidden" name="ctl00$hdnLogout" id="ctl00_hdnLogout" value="0">

<script type="text/javascript">
//<![CDATA[
var Page_Validators =  new Array(document.getElementById("ctl00_HomePageContent_rfvEmployerCode"));
//]]>
</script>

<script type="text/javascript">
//<![CDATA[
var ctl00_HomePageContent_rfvEmployerCode = document.all ? document.all["ctl00_HomePageContent_rfvEmployerCode"] : document.getElementById("ctl00_HomePageContent_rfvEmployerCode");
ctl00_HomePageContent_rfvEmployerCode.controltovalidate = "ctl00_HomePageContent_txtEmployerCode";
ctl00_HomePageContent_rfvEmployerCode.focusOnError = "t";
ctl00_HomePageContent_rfvEmployerCode.errormessage = "Please Enter Employer/Subunit Code No";
ctl00_HomePageContent_rfvEmployerCode.display = "Dynamic";
ctl00_HomePageContent_rfvEmployerCode.validationGroup = "Trackemployees";
ctl00_HomePageContent_rfvEmployerCode.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl00_HomePageContent_rfvEmployerCode.initialvalue = "";
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

document.getElementById('ctl00_HomePageContent_rfvEmployerCode').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_HomePageContent_rfvEmployerCode'));
}
Sys.Application.add_init(function() {
    $create(AjaxControlToolkit.ModalPopupBehavior, {"BackgroundCssClass":"modalBackground","PopupControlID":"ctl00_HomePageContent_panMessage","dynamicServicePath":"/InsuranceGlobalWebV4/Employee/Empe_ip_Abha.aspx","id":"ctl00_HomePageContent_mdlpopupbank"}, null, null, $get("ctl00_HomePageContent_Label3"));
});
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
    currentServerDate = '12-06-2024'
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


</body></html>