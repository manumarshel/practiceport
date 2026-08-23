<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head id="ctl00_Head1">
<meta http-equiv="content-type" content="text/html; charset=UTF-8"><title>
	NomineeDetails
</title><link media="screen" href="../../public/assets/esi/nominee/layout.css" rel="stylesheet" type="text/css"><link rel="stylesheet" type="text/css" href="../../public/assets/esi/nominee/CSSglobal.css"><link rel="stylesheet" type="text/css" href="../../public/assets/esi/nominee/csstaskhome.css">
    <!-- base href="https://www.esic.in/InsuranceGlobalWebV4/Employee/NomineeDetails.aspx" -->

     <script type="text/javascript">
        
      function disableBackButton() {
                window.history.forward();
            }
            setTimeout("disableBackButton()", 0);
    </script>
    <script language="javascript" type="text/javascript">

        function getPage() {
            window.opener = self;
            window.close();

        }
        openWins = new Array();
        curWin = 0;

        function openWin(page) {
            openWins[curWin++] = window.open(page, '_blank','width=2000,height=2000, scrollbars=auto');
        }

        function closeAll() {
            
            for (i = 0; i < openWins.length; i++)
                if (openWins[i] && !openWins[i].closed) openWins[i].close();
        }
     </script>
<script type="text/javascript" language="javascript">
    
     // New code to control right Click.
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


     function mouseDown(e) {


         var ctrlPressed = 0;
         var altPressed = 0;
         var shiftPressed = 0;

         if (parseInt(navigator.appVersion) > 3) {

             var evt = e ? e : window.event;

             if (document.layers && navigator.appName == "Netscape" && parseInt(navigator.appVersion) == 4) {
                 // NETSCAPE 4 CODE
                 var mString = (e.modifiers + 32).toString(2).substring(3, 6);
                 shiftPressed = (mString.charAt(0) == "1");
                 ctrlPressed = (mString.charAt(1) == "1");
                 altPressed = (mString.charAt(2) == "1");
                 self.status = "modifiers=" + e.modifiers + " (" + mString + ")"
             }
             else {
                 // NEWER BROWSERS [CROSS-PLATFORM]
                 shiftPressed = evt.shiftKey;
                 altPressed = evt.altKey;
                 ctrlPressed = evt.ctrlKey;
                 self.status = "" + "shiftKey=" + shiftPressed + ", altKey=" + altPressed + ", ctrlKey=" + ctrlPressed
             }
             if (shiftPressed || altPressed || ctrlPressed)
                 alert("Navigation Cancelled !\n" + (shiftPressed ? "" : "") + (altPressed ? "" : "") + (ctrlPressed ? "" : ""))
         }
         return true;
     }
     if (parseInt(navigator.appVersion) > 3) {
         document.onmousedown = mouseDown;
         if (navigator.appName == "Netscape")
             document.captureEvents(Event.MOUSEDOWN);
     }

   //  rightclickControl();

     //End New code to control right click.
        
    </script>
   


<script type="text/Javascript" language="javascript" src="../../public/assets/esi/nominee/esic.js"></script>
</head>
<body onload="rightclickControl()" onunload="closeAll()" oncontextmenu="return false" data-new-gr-c-s-check-loaded="8.912.0" data-gr-ext-installed="">
<div id="minHeight"></div>
    <form name="aspnetForm" method="post" action="nominee-details" onsubmit="javascript:return WebForm_OnSubmit();" onkeypress="javascript:return WebForm_FireDefaultButton(event, 'ctl00_Test')" id="aspnetForm">
<div>
<input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value="">
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKLTMyNzI2NDkwMRBkZBYCZg9kFgICAQ9kFgYCAQ9kFgICAQ9kFgJmD2QWAmYPZBYCZg9kFgQCAQ9kFgJmDw8WAh4EVGV4dAURNTQwMDAyNDkwNzAwMDA5OTlkZAIDD2QWBAICDxYCHgdWaXNpYmxlaGQCBA8WAh8BaGQCAw9kFgRmD2QWAmYPZBYCAgEPPCsADQEADxYCHwFoZGQCAQ9kFgJmD2QWAmYPZBYCAgEPZBYEAjcPZBYCAgEPEGRkFgFmZAI5D2QWAgIJDw8WAh8AZWRkAgUPZBYCZg9kFgJmD2QWBAIBDw8WAh8ABRFJUCBBZGRyZXNzIDogNDQuIGRkAgIPDxYCHwAFKUFTUCBTZXNzaW9uIElEIDogdmFwZXVsenNybXZxemE1NTN4NW5rdjIxZGRk">
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


<script src="../../public/assets/esi/nominee/WebResource_002.js" type="text/javascript"></script>


<script src="../../public/assets/esi/nominee/ScriptResource_002.js" type="text/javascript"></script>
<script src="../../public/assets/esi/nominee/ScriptResource.js" type="text/javascript"></script>
<script src="../../public/assets/esi/nominee/ScriptResource_003.js" type="text/javascript"></script>
<script src="../../public/assets/esi/nominee/ScriptResource_002.es" type="text/javascript"></script>
<script src="../../public/assets/esi/nominee/ScriptResource.es" type="text/javascript"></script>
<script src="../../public/assets/esi/nominee/ScriptResource_003.es" type="text/javascript"></script>
<script src="../../public/assets/esi/nominee/WebResource.js" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
function WebForm_OnSubmit() {
if (typeof(ValidatorOnSubmit) == "function" && ValidatorOnSubmit() == false) return false;
return true;
}
//]]>
</script>

    <div id="outer">
    
   
    <table id="ctl00_Table2" cellspacing="0" cellpadding="0" align="Center" border="0" style="border-width:0px;height:60px;width:100%;border-collapse:collapse;">
	<tbody><tr>
		<td class="tHeadImage" align="left"><img id="ctl00_ESICLogo" src="../../public/assets/esi/nominee/Small%20Logo.jpg" align="absmiddle" style="border-width:0px;"></td><td class="tHeadImage" align="center"></td><td class="tHeadImage" align="right"><img id="ctl00_Image1" src="../../public/assets/esi/nominee/IndianSymbol.jpg" align="absmiddle" style="border-width:0px;"></td>
	</tr><tr>
		<td align="center" colspan="3" style="height:25px;width:100%;"><table id="ctl00_Table3" cellspacing="0" cellpadding="0" border="0" style="height:100%;width:100%;border-collapse:collapse;">
			<tbody><tr>
				<td class="dataBlock" align="left" style="width:8%;">
                                    User Login:    
                                    </td><td class="dataBlock" align="left" style="width:58%;"><span id="ctl00_lbluserName" style="background-color:Transparent;"><?php echo session('emp_code'); ?></span></td><td class="dataBlock" style="width:23%;">
                                    <div id="raw"><?php echo date("D M j, Y h:i:s A"); ?></div>
                                    <div id="Div1">0</div>
                                    </td><td class="homelink" align="right">

                                    
                                            &nbsp;&nbsp;
                                        &nbsp;&nbsp;
                                        
&nbsp;&nbsp;

                                            <input type="submit" name="ctl00$Test" value="Button" onclick='javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions("ctl00$Test", "", true, "", "", false, false))' id="ctl00_Test" style="display:none;"><input type="submit" name="ctl00$dummybutton" value="" id="ctl00_dummybutton" style="border-width:0px;font-weight:bold;height:0px;width:0px;"></td>
			</tr>
		</tbody></table></td>
	</tr>
</tbody></table>

                        <table id="ctl00_Table5" cellspacing="0" cellpadding="0" align="Center" border="0" style="border-width:0px;width:100%;border-collapse:collapse;">
	<tbody><tr>
		<td colspan="5" style="background-color:White;width:100%;">
                            
                            
                            <div align="center">
                                
                            </div>
                            
                            
                            
                        </td>
	</tr><tr>
		<td colspan="5" style="background-color:White;width:100%;">

    <script src="../../public/assets/esi/nominee/stateDist.js" type="text/javascript"></script>

    <script src="../../public/assets/esi/nominee/jquery1.js" type="text/javascript">
    </script>

    <script type="text/javascript" src="../../public/assets/esi/nominee/jquery.min.js"></script>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

    <script type="text/javascript" src="../../public/assets/esi/nominee/jquery.maskedinput-1.3.js"></script>

    <script type="text/javascript" language="JavaScript">

        function checkTime() {

            var timestamp = document.getElementById('ctl00_HomePageContent_txteiddate').value;
            var Idnum = document.getElementsByName('timezone2');
            if (validateTimestamp(timestamp)) {

            } else {
                return false;
            }
            if (Idnum.value == "") {
                alert("Please Enter Enrolment ID");
                Idnum.focus();
                return false;
            }
        }
        function validateTimestamp(timestamp) {
            var parts = timestamp.split('/');
            var partdiff1 = timestamp.split(':');

            if (parts.length < 3)
                return false;
            else {
                var day = parseInt(parts[0]);
                var month = parseInt(parts[1]);
                var year = parseInt(parts[2]);
                if (isNaN(day) || isNaN(month) || isNaN(year)) {
                    return false;
                }

                if (day < 1 || year < 1)
                    return false;
                if (month > 12 || month < 1)
                    return false;
                if ((month == 1 || month == 3 || month == 5 || month == 7 || month == 8 || month == 10 || month == 12) && day > 31)
                    return false;
                if ((month == 4 || month == 6 || month == 9 || month == 11) && day > 30)
                    return false;
                if (month == 2) {
                    if (((year % 4) == 0 && (year % 100) != 0) || ((year % 400) == 0 && (year % 100) == 0)) {
                        if (day > 29)
                            return false;
                    } else {
                        if (day > 28)
                            return false;
                    }
                }
                return true;
            }
        }
    </script>

    <script type="text/javascript" language="javascript">
        $(document).ready(function() {
            $('input[id*="rbtnlist"]').click(function() {
                if ($(this).val() == 0) {
                    $('#ctl00_HomePageContent_txtAadhaarID').attr('disabled', true).val('').css("background-color", "#E0E0E0");
                }
                else {
                    $('#ctl00_HomePageContent_txtAadhaarID').attr('disabled', false).css("background-color", "white");
                }
            });
        });       
    </script>
<script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ctl00$HomePageContent$ScriptManager1', document.getElementById('aspnetForm'));
Sys.WebForms.PageRequestManager.getInstance()._updateControls([], [], [], 90);
		//]]>
</script>

    <div id="ctl00_HomePageContent_Panel1" onkeypress="javascript:return WebForm_FireDefaultButton(event, 'ctl00_HomePageContent_Save')">
			
        <table width="100%" border="0" cellpadding="1" cellspacing="0" class="internalTable">
            <tbody><tr>
                <td class="pageHeader">
                    <table width="100%" id="tblNew2">
                        <tbody><tr>
                            <td class="pageHeaderText">
                                Details of Nominee u/s 71 of ESI Act 1948/Rule 56(2) of ESI (Central) Rules,1950
                                for Payment of Cash Benefit in the Event of Death
                            </td>
                            <td valign="bottom" class="mandatoryField">
                                * Required Fields
                            </td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>
            <tr id="RowCreate">
                <td class="sectionHeader">
                    <br>
                    <span id="ctl00_HomePageContent_ErrorsData" style="color:Red;font-weight:bold;"></span>
                    <span id="ctl00_HomePageContent_ctrlLabelSaved" style="color:Green;font-weight:bold;"> <?php if ($nominee_status ?? null) { ?>Data saved successfully <?php } ?></span>
                    
                </td>
            </tr>
        </tbody></table>
        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="formlevel">
            <tbody><tr align="left" class="lastData_Section">
                <td class="leftTopFormLabel" width="15%">
                    Name :<span class="mandatoryField">*</span>
                </td>
                <td class="lastFormValue" width="30%">
                    
                    <input name="ctl00$HomePageContent$ctrlTextUserName" type="text" maxlength="45" id="ctl00_HomePageContent_ctrlTextUserName" tabindex="1" class="txtbox" onchange="RestrictSpace(this);">
                    <span id="ctl00_HomePageContent_RequiredFieldValidator1" class="errordisplay" style="color:Red;display:none;">Please Enter Name</span>
                    
                </td>
                <td class="leftTopFormLabel" nowrap="nowrap" width="15%">
                    Relationship with I.P :<span class="mandatoryField">*</span>
                </td>
                <td class="lastFormValue" width="35%" nowrap="nowrap">
                    <select name="ctl00$HomePageContent$RelationShipWithIp" id="ctl00_HomePageContent_RelationShipWithIp" tabindex="2" class="txtbox">
				<option value="-1" selected="selected">---Please Select---</option>
				<option value="1">Spouse</option>
				<option value="2">Minor dependant son</option>
				<option value="3">Dependant unmarried daughter</option>
				<option value="4">Dependant son receiving education</option>
				<option value="5">Dependant infirm son</option>
				<option value="6">Dependant infirm unmarried daughter</option>
				<option value="7">Dependant father</option>
				<option value="8">Dependant mother</option>
				<option value="39">Brother</option>
				<option value="40">Sister</option>
				<option value="41">DEPENDANT SON- RECEIVING EDUCATION</option>
				<option value="99">Others</option>

			</select>
                    <span id="ctl00_HomePageContent_RequiredFieldValidator5" class="errordisplay" style="color:Red;visibility:hidden;">Please Select</span>
                </td>
            </tr>
            <tr>
                <td class="sectionHeader" colspan="4">
                    Address of Nominee
                </td>
            </tr>
            <tr align="left">
                <td class="leftTopFormLabel">
                    Address :<span class="mandatoryField">*</span>
                </td>
                <td class="lastFormValue" nowrap="nowrap">
                    
                    <input name="ctl00$HomePageContent$ctrlTextAddress1" type="text" maxlength="100" id="ctl00_HomePageContent_ctrlTextAddress1" tabindex="3" class="txtbox" onchange="RestrictSpace(this);">
                    <span id="ctl00_HomePageContent_RequiredFieldValidator3" class="errordisplay" style="color:Red;display:none;">Please Enter Address</span>
                    <span id="ctl00_HomePageContent_Address1RegularExpressionVal" class="errordisplay" style="color:Red;display:none;">Enter upto 100 characters</span>
                </td>
                <td class="leftTopFormLabel">
                    State :<span class="mandatoryField">*</span>
                </td>
                <td class="lastFormValue" style="float: left;" nowrap="nowrap">
                    <select name="ctl00$HomePageContent$States" id="ctl00_HomePageContent_States" tabindex="6" class="txtbox" onchange="selectPStates();">

			<option value="-1">---Please Select---</option><option>Andaman and  Nicobar</option><option>Andhra Pradesh</option><option>Arunachal Pradesh</option><option>Assam</option><option>Bihar</option><option>Chandigarh</option><option>Chattishgarh</option><option>Dadra and Nagar Haveli </option><option>Daman and  Diu  </option><option>Delhi</option><option>Goa</option><option>Gujarat</option><option>Haryana</option><option>Himachal Pradesh</option><option>Jammu &amp; Kashmir</option><option>Jharkhand</option><option>Karnataka</option><option selected="selected">Kerala</option><option>Lakshadweep</option><option>Madhya Pradesh</option><option>Maharashtra</option><option>Manipur</option><option>Meghalaya</option><option>Mizoram</option><option>Nagaland</option><option>Odisha</option><option>Pondicherry</option><option>Punjab</option><option>Rajasthan</option><option>Sikkim</option><option>Tamilnadu</option><option>Telangana</option><option>Tripura</option><option>Uttar Pradesh</option><option>Uttarakhand</option><option>West Bengal</option><option>Outside India</option></select>
                    <span id="ctl00_HomePageContent_RequiredFieldValidatorState" class="errordisplay" style="color:Red;display:none;">Please Select State</span>
                </td>
            </tr>
            <tr align="left">
                <td class="leftTopFormLabel">
                </td>
                <td class="lastFormValue" nowrap="nowrap">
                    
                    <input name="ctl00$HomePageContent$ctrlTextAddress2" type="text" maxlength="45" id="ctl00_HomePageContent_ctrlTextAddress2" tabindex="4" class="txtbox" onchange="RestrictSpace(this);">
                    <span id="ctl00_HomePageContent_Address2RegularExpressionVal" class="errordisplay" style="color:Red;display:none;">Please Enter  Valid Characters</span>
                </td>
                <td class="leftTopFormLabel">
                    District :<span class="mandatoryField">*</span>
                </td>
                <td class="lastFormValue" align="left">
                    <select name="ctl00$HomePageContent$Districts" id="ctl00_HomePageContent_Districts" tabindex="7" class="txtbox" onchange="selectpDistrict()">

			<option value="-1">---Please Select---</option><option selected="selected">Alappuzha</option><option>Ernakulam</option><option>Idukki</option><option>Kannur</option><option>Kasaragod</option><option>Kollam</option><option>Kottayam</option><option>Kozhikode</option><option>Malappuram</option><option>Palakkad</option><option>Pathanamthitta</option><option>Thiruvananthapuram</option><option>Thrissur</option><option>Wayanad</option></select>
                    <span id="ctl00_HomePageContent_DistrictsRequiredFieldVal" class="errordisplay" style="color:Red;display:none;">Please Select District</span>
                </td>
            </tr>
            <tr align="left">
                <td class="leftTopFormLabel">
                </td>
                <td class="lastFormValue" nowrap="nowrap">
                    
                    <input name="ctl00$HomePageContent$ctrlTextAddress3" type="text" maxlength="45" id="ctl00_HomePageContent_ctrlTextAddress3" tabindex="5" class="txtbox" onchange="RestrictSpace(this);">
                    <span id="ctl00_HomePageContent_Address3RegularExpressionVal" class="errordisplay" style="color:Red;display:none;">Please Enter  Valid Characters</span>
                </td>
                <td class="leftTopFormLabel">
                    Pincode :
                </td>
                <td class="lastFormValue" align="left">
                    <input name="ctl00$HomePageContent$ctrlTextPin" type="text" maxlength="6" id="ctl00_HomePageContent_ctrlTextPin" tabindex="8" class="txtbox numericAlignRight" onkeypress="return checkNumeric(event)">
                    <span id="ctl00_HomePageContent_RegularExpressionValidator3" class="errordisplay" style="color:Red;display:none;">Please Enter Valid Pin Code</span>
                </td>
            </tr>
            <tr align="left">
                <td class="leftTopFormLabel">
                    Phone No. :
                </td>
                <td class="lastFormValue" align="left">
                    <input name="ctl00$HomePageContent$ctrlTextPhoneExt" type="text" maxlength="5" id="ctl00_HomePageContent_ctrlTextPhoneExt" tabindex="9" class="txtbox_small" onkeypress="return checkNumeric(event)">
                    -
                    <input name="ctl00$HomePageContent$ctrlTextPhoneNumber" type="text" maxlength="10" id="ctl00_HomePageContent_ctrlTextPhoneNumber" tabindex="10" class="txtbox numericAlignRight" onkeypress="return checkNumeric(event)">
                    
                </td>
                <td class="leftTopFormLabel">
                    Mobile No. :
                </td>
                <td class="lastFormValue" align="left">
                    <input name="ctl00$HomePageContent$ctrlTextMobileExt" type="text" value="91" id="ctl00_HomePageContent_ctrlTextMobileExt" disabled="disabled" class="txtboxdisabled_small numericAlignRight">
                    -
                    <input name="ctl00$HomePageContent$ctrlTextMobileNumber" type="text" maxlength="10" id="ctl00_HomePageContent_ctrlTextMobileNumber" tabindex="11" class="txtbox numericAlignRight" onkeypress="return checkNumeric(event)">
                    <span id="ctl00_HomePageContent_RegularExpressionValidator6" class="errordisplay" style="color:Red;display:none;">Please Enter Only Digits</span>
                </td>
            </tr>
            <tr>
                <td class="leftTopFormLabel">
                    Is Nominee a Family Member :
                </td>
                <td class="lastFormValue" align="left" colspan="4">
                    <table id="ctl00_HomePageContent_rbtnlistNomneeAkaFamily" border="0">
				<tbody><tr>
					<td><input id="ctl00_HomePageContent_rbtnlistNomneeAkaFamily_0" type="radio" name="ctl00$HomePageContent$rbtnlistNomneeAkaFamily" value="0" tabindex="12"><label for="ctl00_HomePageContent_rbtnlistNomneeAkaFamily_0">Yes</label></td><td><input id="ctl00_HomePageContent_rbtnlistNomneeAkaFamily_1" type="radio" name="ctl00$HomePageContent$rbtnlistNomneeAkaFamily" value="1" checked="checked" tabindex="12"><label for="ctl00_HomePageContent_rbtnlistNomneeAkaFamily_1">No</label></td>
				</tr>
			</tbody></table>
                </td>
                
                
                
            </tr>
            <tr id="Tr2">
                <td colspan="4" class="sectionHeader">
                    
                </td>
            </tr>
        </tbody></table>
        <div class="pagesubmission" style="text-align: center">
            <div class="primary">
                <input type="submit" name="ctl00$HomePageContent$Save" value="Save" onclick='javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions("ctl00$HomePageContent$Save", "", true, "", "", false, false))' id="ctl00_HomePageContent_Save" tabindex="16" class="btn" onkeydown="if (event.keyCode == 13) document.getElementById('ctl00_HomePageContent_Save').click()">
                <input type="submit" name="ctl00$HomePageContent$btnClose" value="Close" onclick="window.close();" id="ctl00_HomePageContent_btnClose" tabindex="16" class="btn" onkeydown="if (event.keyCode == 13) document.getElementById('ctl00_HomePageContent_btnClose').click()">
                
            </div>
        </div>
    
		</div>
    <div class="hiddenfields">
        <input type="hidden" name="ctl00$HomePageContent$HideData1" id="ctl00_HomePageContent_HideData1">
        <input type="hidden" name="ctl00$HomePageContent$hidpresentdenState" id="ctl00_HomePageContent_hidpresentdenState" value="">
        <input type="hidden" name="ctl00$HomePageContent$hiddenpresentdistrict" id="ctl00_HomePageContent_hiddenpresentdistrict" value="">
        <input type="hidden" name="ctl00$HomePageContent$hiddenpresentdistrictNo" id="ctl00_HomePageContent_hiddenpresentdistrictNo">
        <input type="hidden" name="ctl00$HomePageContent$hidpresentdenState1" id="ctl00_HomePageContent_hidpresentdenState1" value="">
        <input type="hidden" name="ctl00$HomePageContent$hiddenpresentdistrict1" id="ctl00_HomePageContent_hiddenpresentdistrict1" value="">
        
        <input type="hidden" name="ctl00$HomePageContent$Xmldatahidden" id="ctl00_HomePageContent_Xmldatahidden" value="&lt;NewDataSet&gt;
  &lt;getdata&gt;
    &lt;TransactionPK&gt;1284&lt;/TransactionPK&gt;
    &lt;ControlID&gt;ctl00_HomePageContent_ctrlTextUserName&lt;/ControlID&gt;
    &lt;FeatureName&gt;UserName&lt;/FeatureName&gt;
    &lt;ControlLabelData&gt;ctrlTextUserName&lt;/ControlLabelData&gt;
    &lt;SwitchData&gt;1&lt;/SwitchData&gt;
    &lt;Page_Name&gt;NomineeDetails&lt;/Page_Name&gt;
  &lt;/getdata&gt;
  &lt;getdata&gt;
    &lt;TransactionPK&gt;1285&lt;/TransactionPK&gt;
    &lt;ControlID&gt;ctl00_HomePageContent_RelationShipWithIp&lt;/ControlID&gt;
    &lt;FeatureName&gt;RelationShipWithIp&lt;/FeatureName&gt;
    &lt;ControlLabelData&gt;RelationShipWithIp&lt;/ControlLabelData&gt;
    &lt;SwitchData&gt;6&lt;/SwitchData&gt;
    &lt;Page_Name&gt;NomineeDetails&lt;/Page_Name&gt;
  &lt;/getdata&gt;
  &lt;getdata&gt;
    &lt;TransactionPK&gt;1286&lt;/TransactionPK&gt;
    &lt;ControlID&gt;ctl00_HomePageContent_ctrlTextAddress1&lt;/ControlID&gt;
    &lt;FeatureName&gt;NomineeAddress1&lt;/FeatureName&gt;
    &lt;ControlLabelData&gt;ctrlTextAddress1&lt;/ControlLabelData&gt;
    &lt;SwitchData&gt;1&lt;/SwitchData&gt;
    &lt;Page_Name&gt;NomineeDetails&lt;/Page_Name&gt;
  &lt;/getdata&gt;
  &lt;getdata&gt;
    &lt;TransactionPK&gt;1287&lt;/TransactionPK&gt;
    &lt;ControlID&gt;ctl00_HomePageContent_States&lt;/ControlID&gt;
    &lt;FeatureName&gt;NomineeStates&lt;/FeatureName&gt;
    &lt;ControlLabelData&gt;States&lt;/ControlLabelData&gt;
    &lt;SwitchData&gt;5&lt;/SwitchData&gt;
    &lt;Page_Name&gt;NomineeDetails&lt;/Page_Name&gt;
  &lt;/getdata&gt;
  &lt;getdata&gt;
    &lt;TransactionPK&gt;1288&lt;/TransactionPK&gt;
    &lt;ControlID&gt;ctl00_HomePageContent_ctrlTextAddress2&lt;/ControlID&gt;
    &lt;FeatureName&gt;NomineeAddress2&lt;/FeatureName&gt;
    &lt;ControlLabelData&gt;ctrlTextAddress2&lt;/ControlLabelData&gt;
    &lt;SwitchData&gt;1&lt;/SwitchData&gt;
    &lt;Page_Name&gt;NomineeDetails&lt;/Page_Name&gt;
  &lt;/getdata&gt;
  &lt;getdata&gt;
    &lt;TransactionPK&gt;1289&lt;/TransactionPK&gt;
    &lt;ControlID&gt;ctl00_HomePageContent_Districts&lt;/ControlID&gt;
    &lt;FeatureName&gt;NomineeDistricts&lt;/FeatureName&gt;
    &lt;ControlLabelData&gt;Districts&lt;/ControlLabelData&gt;
    &lt;SwitchData&gt;5&lt;/SwitchData&gt;
    &lt;Page_Name&gt;NomineeDetails&lt;/Page_Name&gt;
  &lt;/getdata&gt;
  &lt;getdata&gt;
    &lt;TransactionPK&gt;1290&lt;/TransactionPK&gt;
    &lt;ControlID&gt;ctl00_HomePageContent_ctrlTextAddress3&lt;/ControlID&gt;
    &lt;FeatureName&gt;NomineeAddress3&lt;/FeatureName&gt;
    &lt;ControlLabelData&gt;ctrlTextAddress3&lt;/ControlLabelData&gt;
    &lt;SwitchData&gt;1&lt;/SwitchData&gt;
    &lt;Page_Name&gt;NomineeDetails&lt;/Page_Name&gt;
  &lt;/getdata&gt;
  &lt;getdata&gt;
    &lt;TransactionPK&gt;1291&lt;/TransactionPK&gt;
    &lt;ControlID&gt;ctl00_HomePageContent_ctrlTextPin&lt;/ControlID&gt;
    &lt;FeatureName&gt;NomineePin&lt;/FeatureName&gt;
    &lt;ControlLabelData&gt;ctrlTextPin&lt;/ControlLabelData&gt;
    &lt;SwitchData&gt;1&lt;/SwitchData&gt;
    &lt;Page_Name&gt;NomineeDetails&lt;/Page_Name&gt;
  &lt;/getdata&gt;
  &lt;getdata&gt;
    &lt;TransactionPK&gt;1292&lt;/TransactionPK&gt;
    &lt;ControlID&gt;ctl00_HomePageContent_ctrlTextPhoneExt&lt;/ControlID&gt;
    &lt;FeatureName&gt;PhoneExt&lt;/FeatureName&gt;
    &lt;ControlLabelData&gt;ctrlTextPhoneExt&lt;/ControlLabelData&gt;
    &lt;SwitchData&gt;1&lt;/SwitchData&gt;
    &lt;Page_Name&gt;NomineeDetails&lt;/Page_Name&gt;
  &lt;/getdata&gt;
  &lt;getdata&gt;
    &lt;TransactionPK&gt;1293&lt;/TransactionPK&gt;
    &lt;ControlID&gt;ctl00_HomePageContent_ctrlTextPhoneNumber&lt;/ControlID&gt;
    &lt;FeatureName&gt;NomineePhoneNumber&lt;/FeatureName&gt;
    &lt;ControlLabelData&gt;ctrlTextPhoneNumber&lt;/ControlLabelData&gt;
    &lt;SwitchData&gt;1&lt;/SwitchData&gt;
    &lt;Page_Name&gt;NomineeDetails&lt;/Page_Name&gt;
  &lt;/getdata&gt;
  &lt;getdata&gt;
    &lt;TransactionPK&gt;1295&lt;/TransactionPK&gt;
    &lt;ControlID&gt;ctl00_HomePageContent_ctrlTextMobileNumber&lt;/ControlID&gt;
    &lt;FeatureName&gt;NomineeMobileNumber&lt;/FeatureName&gt;
    &lt;ControlLabelData&gt;ctrlTextMobileNumber&lt;/ControlLabelData&gt;
    &lt;SwitchData&gt;1&lt;/SwitchData&gt;
    &lt;Page_Name&gt;NomineeDetails&lt;/Page_Name&gt;
  &lt;/getdata&gt;
  &lt;getdata&gt;
    &lt;TransactionPK&gt;1298&lt;/TransactionPK&gt;
    &lt;ControlID&gt;ctl00_HomePageContent_txtAadhaarID&lt;/ControlID&gt;
    &lt;FeatureName&gt;NomineeAadhaarID&lt;/FeatureName&gt;
    &lt;ControlLabelData&gt;txtAadhaarID&lt;/ControlLabelData&gt;
    &lt;SwitchData&gt;1&lt;/SwitchData&gt;
    &lt;Page_Name&gt;NomineeDetails&lt;/Page_Name&gt;
  &lt;/getdata&gt;
  &lt;getdata&gt;
    &lt;TransactionPK&gt;1299&lt;/TransactionPK&gt;
    &lt;ControlID&gt;ctl00_HomePageContent_txteidnum&lt;/ControlID&gt;
    &lt;FeatureName&gt;Nomineeeidnum&lt;/FeatureName&gt;
    &lt;ControlLabelData&gt;txteidnum&lt;/ControlLabelData&gt;
    &lt;SwitchData&gt;1&lt;/SwitchData&gt;
    &lt;Page_Name&gt;NomineeDetails&lt;/Page_Name&gt;
  &lt;/getdata&gt;
  &lt;getdata&gt;
    &lt;TransactionPK&gt;1300&lt;/TransactionPK&gt;
    &lt;ControlID&gt;ctl00_HomePageContent_txteiddate&lt;/ControlID&gt;
    &lt;FeatureName&gt;Nomineeeiddate&lt;/FeatureName&gt;
    &lt;ControlLabelData&gt;txteiddate&lt;/ControlLabelData&gt;
    &lt;SwitchData&gt;1&lt;/SwitchData&gt;
    &lt;Page_Name&gt;NomineeDetails&lt;/Page_Name&gt;
  &lt;/getdata&gt;
&lt;/NewDataSet&gt;">
        <input type="hidden" name="ctl00$HomePageContent$NomineeXmldata" id="ctl00_HomePageContent_NomineeXmldata">
        <input type="hidden" name="ctl00$HomePageContent$NomineeButtonIDHash" id="ctl00_HomePageContent_NomineeButtonIDHash">
        <input type="hidden" name="ctl00$HomePageContent$hdnXMLValidData" id="ctl00_HomePageContent_hdnXMLValidData">
    </div>

    <script src="../../public/assets/esi/nominee/JavaScript1.js" type="text/javascript"></script>

    <script type="text/javascript">

        window.onload = function() {
            var myObject = window.dialogArguments;

            if (myObject != undefined) {
                if (myObject.districtname == "Edit") {
                }
                else {
                    if (myObject.state != "-1") {

                        if (document.getElementById("ctl00_HomePageContent_hidpresentdenState1").value == "")
                            document.getElementById("ctl00_HomePageContent_hidpresentdenState1").value = myObject.state;
                    }
                }
                if (myObject.districtname == "Edit") {
                }
                else {
                    if (myObject.district != "-1") {
                        if (document.getElementById("ctl00_HomePageContent_hiddenpresentdistrict1").value == "") {
                            document.getElementById("ctl00_HomePageContent_hiddenpresentdistrict1").value = myObject.district;
                        }
                    }
                }
                if (myObject.districtNo != "") {
                    document.getElementById("ctl00_HomePageContent_hiddenpresentdistrict").value = myObject.districtNo;
                }
                if (myObject.districtname == "Edit") {
                    loadstate();
                }
                else {
                    loadstates();
                }
            }
        } 
    </script>

    

    <script type="text/javascript">
        $(document).ready(function() {
            fnbindingcontrols();
        });

        function fnbindingcontrols() {
            $("#ctl00_HomePageContent_txtAadhaarID").mask("9999/9999/9999");
            $("#ctl00_HomePageContent_txteiddate").mask("99/99/9999 99:99:99");
            $("#ctl00_HomePageContent_txteidnum").mask("9999/99999/99999");
        }
    </script>

    <script type="text/javascript" language="javascript">
        function assignAadhaarEID(rdlAdhaar) {
            document.getElementById("ctl00_HomePageContent_lblmsg").style.display = "none";
            var list = document.getElementById("ctl00_HomePageContent_rdlAdhaar");
            var rdbtnLstValues = list.getElementsByTagName("input");
            for (var i = 0; i < rdbtnLstValues.length; i++) {
                if (rdbtnLstValues[i].checked) {
                    Checkdvalue = rdbtnLstValues[i].value;
                    break;
                }
            }
            if (Checkdvalue == "2") {
                document.getElementById("ctl00_HomePageContent_txteidnum").style.display = document.getElementById("ctl00_HomePageContent_txteiddate").style.display
                    = "none";
                document.getElementById("ctl00_HomePageContent_txtAadhaarID").style.display = "block";
                document.getElementById("ctl00_HomePageContent_txteidnum").value = document.getElementById("ctl00_HomePageContent_txteiddate").value = '';
            }
            else {
                document.getElementById("ctl00_HomePageContent_txteidnum").style.display = document.getElementById("ctl00_HomePageContent_txteiddate").style.display
                    = "inline-block";
                document.getElementById("ctl00_HomePageContent_txtAadhaarID").style.display = "none";
                document.getElementById("ctl00_HomePageContent_txtAadhaarID").value = '';
            }
        }
    </script>

    

    <script type="text/javascript" language="javascript">
        function GetEmployeeNomineeData() {
            alert("Hello");
            var fileName1 = location.pathname.split("/").slice(-1);
            var dd = document.getElementById('ctl00_HomePageContent_Xmldatahidden').value;
            var xmlChild = GenerateXMLDocument_Javascript(dd);
            PageMethods.EmployeeNomineeData(xmlChild);
        }
    </script>

</td>
	</tr>
</tbody></table>
                   <div id="clearfooter"></div>
                    </div>

                    <div id="footersection">
                        <table id="ctl00_Table1" cellspacing="0" cellpadding="0" align="Center" border="0" style="border-width:0px;height:60px;width:100%;border-collapse:collapse;">
	<tbody><tr class="dBlockFooter" style="background-color:White;">
		<td class="dBlockFooter" colspan="5">
             DISCLAIMER: Content owned, maintained and updated by 
Employee's State Insurance Corporation. Copyright © 2009, ESIC, India. 
All Rights Reserved. Best viewed in 1024 x 768 pixels, Designed and 
Developed by Wipro LTD, Release Version No.: V2.5.427. <span id="ctl00_lblIP" style="color:White;">IP Address : 44. </span><span id="ctl00_Label1" style="color:#742902;">ASP Session ID : vapeulzsrmvqza553x5nkv21</span></td>
	</tr>
</tbody></table>
           </div>
         <input type="hidden" name="ctl00$hdnhmedate" id="ctl00_hdnhmedate" value="2024 6 24"> 
    
<script type="text/javascript">
//<![CDATA[
var Page_Validators =  new Array(document.getElementById("ctl00_HomePageContent_RequiredFieldValidator1"), document.getElementById("ctl00_HomePageContent_RequiredFieldValidator5"), document.getElementById("ctl00_HomePageContent_RequiredFieldValidator3"), document.getElementById("ctl00_HomePageContent_Address1RegularExpressionVal"), document.getElementById("ctl00_HomePageContent_RequiredFieldValidatorState"), document.getElementById("ctl00_HomePageContent_Address2RegularExpressionVal"), document.getElementById("ctl00_HomePageContent_DistrictsRequiredFieldVal"), document.getElementById("ctl00_HomePageContent_Address3RegularExpressionVal"), document.getElementById("ctl00_HomePageContent_RegularExpressionValidator3"), document.getElementById("ctl00_HomePageContent_RegularExpressionValidator6"));
//]]>
</script>

<script type="text/javascript">
//<![CDATA[
var ctl00_HomePageContent_RequiredFieldValidator1 = document.all ? document.all["ctl00_HomePageContent_RequiredFieldValidator1"] : document.getElementById("ctl00_HomePageContent_RequiredFieldValidator1");
ctl00_HomePageContent_RequiredFieldValidator1.controltovalidate = "ctl00_HomePageContent_ctrlTextUserName";
ctl00_HomePageContent_RequiredFieldValidator1.focusOnError = "t";
ctl00_HomePageContent_RequiredFieldValidator1.errormessage = "Please Enter Name";
ctl00_HomePageContent_RequiredFieldValidator1.display = "Dynamic";
ctl00_HomePageContent_RequiredFieldValidator1.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl00_HomePageContent_RequiredFieldValidator1.initialvalue = "";
var ctl00_HomePageContent_RequiredFieldValidator5 = document.all ? document.all["ctl00_HomePageContent_RequiredFieldValidator5"] : document.getElementById("ctl00_HomePageContent_RequiredFieldValidator5");
ctl00_HomePageContent_RequiredFieldValidator5.controltovalidate = "ctl00_HomePageContent_RelationShipWithIp";
ctl00_HomePageContent_RequiredFieldValidator5.focusOnError = "t";
ctl00_HomePageContent_RequiredFieldValidator5.errormessage = "Please Select";
ctl00_HomePageContent_RequiredFieldValidator5.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl00_HomePageContent_RequiredFieldValidator5.initialvalue = "-1";
var ctl00_HomePageContent_RequiredFieldValidator3 = document.all ? document.all["ctl00_HomePageContent_RequiredFieldValidator3"] : document.getElementById("ctl00_HomePageContent_RequiredFieldValidator3");
ctl00_HomePageContent_RequiredFieldValidator3.controltovalidate = "ctl00_HomePageContent_ctrlTextAddress1";
ctl00_HomePageContent_RequiredFieldValidator3.focusOnError = "t";
ctl00_HomePageContent_RequiredFieldValidator3.errormessage = "Please Enter Address";
ctl00_HomePageContent_RequiredFieldValidator3.display = "Dynamic";
ctl00_HomePageContent_RequiredFieldValidator3.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl00_HomePageContent_RequiredFieldValidator3.initialvalue = "";
var ctl00_HomePageContent_Address1RegularExpressionVal = document.all ? document.all["ctl00_HomePageContent_Address1RegularExpressionVal"] : document.getElementById("ctl00_HomePageContent_Address1RegularExpressionVal");
ctl00_HomePageContent_Address1RegularExpressionVal.controltovalidate = "ctl00_HomePageContent_ctrlTextAddress1";
ctl00_HomePageContent_Address1RegularExpressionVal.focusOnError = "t";
ctl00_HomePageContent_Address1RegularExpressionVal.errormessage = "Enter upto 100 characters";
ctl00_HomePageContent_Address1RegularExpressionVal.display = "Dynamic";
ctl00_HomePageContent_Address1RegularExpressionVal.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
ctl00_HomePageContent_Address1RegularExpressionVal.validationexpression = "^[^~]{1,100}$";
var ctl00_HomePageContent_RequiredFieldValidatorState = document.all ? document.all["ctl00_HomePageContent_RequiredFieldValidatorState"] : document.getElementById("ctl00_HomePageContent_RequiredFieldValidatorState");
ctl00_HomePageContent_RequiredFieldValidatorState.controltovalidate = "ctl00_HomePageContent_States";
ctl00_HomePageContent_RequiredFieldValidatorState.focusOnError = "t";
ctl00_HomePageContent_RequiredFieldValidatorState.errormessage = "Please Select State";
ctl00_HomePageContent_RequiredFieldValidatorState.display = "Dynamic";
ctl00_HomePageContent_RequiredFieldValidatorState.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl00_HomePageContent_RequiredFieldValidatorState.initialvalue = "-1";
var ctl00_HomePageContent_Address2RegularExpressionVal = document.all ? document.all["ctl00_HomePageContent_Address2RegularExpressionVal"] : document.getElementById("ctl00_HomePageContent_Address2RegularExpressionVal");
ctl00_HomePageContent_Address2RegularExpressionVal.controltovalidate = "ctl00_HomePageContent_ctrlTextAddress2";
ctl00_HomePageContent_Address2RegularExpressionVal.focusOnError = "t";
ctl00_HomePageContent_Address2RegularExpressionVal.errormessage = "Please Enter  Valid Characters";
ctl00_HomePageContent_Address2RegularExpressionVal.display = "Dynamic";
ctl00_HomePageContent_Address2RegularExpressionVal.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
ctl00_HomePageContent_Address2RegularExpressionVal.validationexpression = "^[^~]{1,100}$";
var ctl00_HomePageContent_DistrictsRequiredFieldVal = document.all ? document.all["ctl00_HomePageContent_DistrictsRequiredFieldVal"] : document.getElementById("ctl00_HomePageContent_DistrictsRequiredFieldVal");
ctl00_HomePageContent_DistrictsRequiredFieldVal.controltovalidate = "ctl00_HomePageContent_Districts";
ctl00_HomePageContent_DistrictsRequiredFieldVal.focusOnError = "t";
ctl00_HomePageContent_DistrictsRequiredFieldVal.errormessage = "Please Select District";
ctl00_HomePageContent_DistrictsRequiredFieldVal.display = "Dynamic";
ctl00_HomePageContent_DistrictsRequiredFieldVal.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl00_HomePageContent_DistrictsRequiredFieldVal.initialvalue = "-1";
var ctl00_HomePageContent_Address3RegularExpressionVal = document.all ? document.all["ctl00_HomePageContent_Address3RegularExpressionVal"] : document.getElementById("ctl00_HomePageContent_Address3RegularExpressionVal");
ctl00_HomePageContent_Address3RegularExpressionVal.controltovalidate = "ctl00_HomePageContent_ctrlTextAddress3";
ctl00_HomePageContent_Address3RegularExpressionVal.focusOnError = "t";
ctl00_HomePageContent_Address3RegularExpressionVal.errormessage = "Please Enter  Valid Characters";
ctl00_HomePageContent_Address3RegularExpressionVal.display = "Dynamic";
ctl00_HomePageContent_Address3RegularExpressionVal.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
ctl00_HomePageContent_Address3RegularExpressionVal.validationexpression = "^[^~]{1,100}$";
var ctl00_HomePageContent_RegularExpressionValidator3 = document.all ? document.all["ctl00_HomePageContent_RegularExpressionValidator3"] : document.getElementById("ctl00_HomePageContent_RegularExpressionValidator3");
ctl00_HomePageContent_RegularExpressionValidator3.controltovalidate = "ctl00_HomePageContent_ctrlTextPin";
ctl00_HomePageContent_RegularExpressionValidator3.focusOnError = "t";
ctl00_HomePageContent_RegularExpressionValidator3.errormessage = "Please Enter Valid Pin Code";
ctl00_HomePageContent_RegularExpressionValidator3.display = "Dynamic";
ctl00_HomePageContent_RegularExpressionValidator3.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
ctl00_HomePageContent_RegularExpressionValidator3.validationexpression = "^[0-9]{6}$";
var ctl00_HomePageContent_RegularExpressionValidator6 = document.all ? document.all["ctl00_HomePageContent_RegularExpressionValidator6"] : document.getElementById("ctl00_HomePageContent_RegularExpressionValidator6");
ctl00_HomePageContent_RegularExpressionValidator6.controltovalidate = "ctl00_HomePageContent_ctrlTextMobileNumber";
ctl00_HomePageContent_RegularExpressionValidator6.focusOnError = "t";
ctl00_HomePageContent_RegularExpressionValidator6.errormessage = "Please Enter Only Digits";
ctl00_HomePageContent_RegularExpressionValidator6.display = "Dynamic";
ctl00_HomePageContent_RegularExpressionValidator6.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
ctl00_HomePageContent_RegularExpressionValidator6.validationexpression = "^[0-9]{10}$";
//]]>
</script>


<script type="text/javascript">
//<![CDATA[
javascript:loadstates();
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
        WebForm_AutoFocus('ctl00_HomePageContent_ctrlTextUserName');Sys.Application.initialize();

document.getElementById('ctl00_HomePageContent_RequiredFieldValidator1').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_HomePageContent_RequiredFieldValidator1'));
}
Sys.Application.add_init(function() {
    $create(AjaxControlToolkit.FilteredTextBoxBehavior, {"FilterType":13,"ValidChars":".\u0027 ","id":"ctl00_HomePageContent_ftbUserName"}, null, null, $get("ctl00_HomePageContent_ctrlTextUserName"));
});

document.getElementById('ctl00_HomePageContent_RequiredFieldValidator5').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_HomePageContent_RequiredFieldValidator5'));
}

document.getElementById('ctl00_HomePageContent_RequiredFieldValidator3').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_HomePageContent_RequiredFieldValidator3'));
}

document.getElementById('ctl00_HomePageContent_Address1RegularExpressionVal').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_HomePageContent_Address1RegularExpressionVal'));
}

document.getElementById('ctl00_HomePageContent_RequiredFieldValidatorState').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_HomePageContent_RequiredFieldValidatorState'));
}

document.getElementById('ctl00_HomePageContent_Address2RegularExpressionVal').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_HomePageContent_Address2RegularExpressionVal'));
}

document.getElementById('ctl00_HomePageContent_DistrictsRequiredFieldVal').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_HomePageContent_DistrictsRequiredFieldVal'));
}

document.getElementById('ctl00_HomePageContent_Address3RegularExpressionVal').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_HomePageContent_Address3RegularExpressionVal'));
}

document.getElementById('ctl00_HomePageContent_RegularExpressionValidator3').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_HomePageContent_RegularExpressionValidator3'));
}

document.getElementById('ctl00_HomePageContent_RegularExpressionValidator6').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_HomePageContent_RegularExpressionValidator6'));
}
//]]>
</script>
</form>
  


<script type="text/javascript">
    javascript: window.history.forward(1);
    function doClick(field, event) {
        var key;

        if (event.keyCode == 13) {
            //Get the button the user wants to have clicked
            var btn = document.getElementById(field);
            //alert(btn.id);
            btn.click();

        }
    }
    currentServerDate = '24-06-2024'
    dateSeperator = '-'
//    MRID-2175
    getdate(); 
    javascript: window.history.forward(1);
    function doClick(field, event) {
        var key;

        if (event.keyCode == 13) {
            //Get the button the user wants to have clicked
            var btn = document.getElementById(field);
            //alert(btn.id);
            btn.click();

        }
    }
</script>



</body></html>