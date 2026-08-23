<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head id="ctl00_Head1">
<meta http-equiv="content-type" content="text/html; charset=UTF-8"><title>
	ESIC
</title><link rel="stylesheet" type="text/css" href="../../public/assets/esi/bank1/esicCSSglobal.css"><link rel="stylesheet" type="text/css" href="../../public/assets/esi/bank1/esiccsstaskhome.css"><link rel="stylesheet" type="text/css" href="../../public/assets/esi/bank1/esiclayout.css">




    <script type="text/javascript" src="../../public/assets/esi/bank1/JavaScript1.js"></script>

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
    <form name="aspnetForm" method="post" action="" onsubmit="javascript:return WebForm_OnSubmit();" onkeypress="javascript:return WebForm_FireDefaultButton(event, 'ctl00_Test')" id="aspnetForm" enctype="multipart/form-data">
<div>
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUHNTg3MzE4MBBkZBYCZg9kFgICAQ8WAh4HZW5jdHlwZQUTbXVsdGlwYXJ0L2Zvcm0tZGF0YRYGAgMPZBYCAgEPZBYCZg9kFgJmD2QWAmYPZBYEAgEPZBYCZg8PFgIeBFRleHQFETU0MDAwMjQ5MDcwMDAwOTk5ZGQCAw9kFgQCAg8WAh4HVmlzaWJsZWhkAgQPFgIfAmhkAgUPZBYCAgEPZBYCZg9kFgICAQ9kFgICAQ9kFgJmD2QWAgIFDxYCHwJnFgJmD2QWAmYPZBYKAgEPDxYCHwEFE1NUQVRFIEJBTksgT0YgSU5ESUFkZAIFDw8WAh8BBQxQQUxBUklWQVRUT01kZAIPDw8WAh8BBQtTQklOMDA3MDQwM2RkAhcPEA8WBh4NRGF0YVRleHRGaWVsZAUMYWNjb3VudF90eXBlHg5EYXRhVmFsdWVGaWVsZAUCcGseC18hRGF0YUJvdW5kZ2QQFQQXLS1TZWxlY3QgQWNjb3VudCBUeXBlLS0HU2F2aW5ncwdDdXJyZW50Bk90aGVycxUEATABMgEzATQUKwMEZ2dnZ2RkAhsPZBYCAgcPFgQeCWlubmVyaHRtbGUfAmhkAgcPZBYCZg9kFgJmD2QWBgIBDw8WAh8BBRBJUCBBZGRyZXNzIDogNDQuZGQCAg8PFgIfAQUpQVNQIFNlc3Npb24gSUQgOiA0eTF3bGE0NWRlY3lpcHVkZ3ppeWh3YjVkZAIDDw8WAh8BZWRkGAEFHl9fQ29udHJvbHNSZXF1aXJlUG9zdEJhY2tLZXlfXxYCBRBjdGwwMCRpbWdidG5Ib21lBRJjdGwwMCRpbWdidG5Mb2dvdXQ=">
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


<script src="../../public/assets/esi/bank1/WebResource.js" type="text/javascript"></script>


<script src="../../public/assets/esi/bank1/ScriptResource_002.js" type="text/javascript"></script>
<script src="../../public/assets/esi/bank1/ScriptResource_003.js" type="text/javascript"></script>
<script src="../../public/assets/esi/bank1/ScriptResource.js" type="text/javascript"></script>
<script src="../../public/assets/esi/bank1/ScriptResource_004.js" type="text/javascript"></script>
<script src="../../public/assets/esi/bank1/jquery1.js" type="text/javascript"></script>
<script src="../../public/assets/esi/bank1/esic.js" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
function WebForm_OnSubmit() {
if (typeof(ValidatorOnSubmit) == "function" && ValidatorOnSubmit() == false) return false;
return true;
}
//]]>
</script>

<div>

	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWFwK/qOsSArL3gesGAtTens8IAszHqKcBApzUytwBApif6vUFApzpp40MAvjn1qMGAtLv7+oNAvDBwJALApfUmuMIAsnz+fwMApeU5pgMAomU5pgMAoqU5pgMAouU5pgMArXbygECwZ2qmgYCiMb4kggCzJ3t8w0Cos3ClwkCnL2HoAwCm8KynwU=">
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
		<td class="tHeadImage" align="left"><img id="ctl00_ESICLogo" src="../../public/assets/esi/bank1/Small%20Logo.jpg" align="absmiddle" style="border-width:0px;"></td><td class="tHeadImage" align="center"></td><td class="tHeadImage" align="right"><img id="ctl00_Image1" src="../../public/assets/esi/bank1/IndianSymbol.jpg" align="absmiddle" style="border-width:0px;"></td>
	</tr><tr>
		<td align="center" colspan="3" style="height:25px;width:100%;"><table id="ctl00_Table3" cellspacing="0" cellpadding="0" border="0" style="height:100%;width:100%;border-collapse:collapse;">
			<tbody><tr>
				<td class="dataBlock" align="left" style="width:8%;">
                                    User Login:
                            </td><td class="dataBlock" align="left" style="width:58%;"><span id="ctl00_lbluserName" style="background-color:Transparent;"><?php echo session('emp_code'); ?></span></td><td class="dataBlock" style="width:23%;">
                                    <div id="raw"><?php echo date("D M j, Y h:i:s A"); ?></div>
                            </td><td class="homelink" align="right"><input type="image" name="ctl00$imgbtnHome" id="ctl00_imgbtnHome" tabindex="50" src="../../public/assets/esi/bank1/home.gif" alt="Home" onclick="aspnetForm.target ='_self';" style="border-width:0px;">
                                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                <input type="submit" name="ctl00$Test" value="Button" id="ctl00_Test" style="display: none;"><input type="image" name="ctl00$imgbtnLogout" id="ctl00_imgbtnLogout" tabindex="50" src="../../public/assets/esi/bank1/logout.gif" alt="Close" onclick="aspnetForm.target ='_self';" style="border-width:0px;"><input type="submit" name="ctl00$dummybutton" value="" id="ctl00_dummybutton" style="border-width:0px;font-weight:bold;height:0px;width:0px;"></td>
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
                            <input name="ctl00$HomePageContent$txtIFSCcode" type="text" value="<?php echo $bank['ifsc']; ?>" maxlength="11" id="ctl00_HomePageContent_txtIFSCcode" tabindex="106" class="txtbox">
                            <span id="ctl00_HomePageContent_RequiredFieldValidator4" style="color:Red;visibility:hidden;">Enter IFSC code</span>

                            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                            <input type="submit" name="ctl00$HomePageContent$btnIFSCcode" value="Search" onclick='javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions("ctl00$HomePageContent$btnIFSCcode", "", true, "search", "", false, false))' id="ctl00_HomePageContent_btnIFSCcode" class="btn">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                        </td>
				</tr>
			</tbody></table>

            </td>
        </tr>
    </tbody></table>
    <table id="ctl00_HomePageContent_Table1" width="100%" border="0" align="center" cellspacing="0" cellpadding="3" class="internalTable">
				<tbody><tr id="ctl00_HomePageContent_Tr3" align="center">
					<td>
                <table width="100%" border="1" align="center" cellpadd="" ing="0" cellspacing="0" id="Table4">
                    <tbody><tr>
                        <td colspan="8" align="center">
                           Bank Details of Insured Person
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="leftTopFormLabel">
                            Bank Name :<span class="mandatoryField">*</span>
                        </td>
                        <td colspan="2" class="lastFormValue">
                            <textarea name="ctl00$HomePageContent$txt_Bank_Name_in_Records" rows="2" cols="20" id="ctl00_HomePageContent_txt_Bank_Name_in_Records" disabled="disabled" tabindex="104" class="txtbox numericAlignRight" style="background-color:#CCCCCC;width:150px;">STATE BANK OF INDIA</textarea>
                            <span id="ctl00_HomePageContent_RequiredFieldValidator1" style="color:Red;visibility:hidden;">Enter Bank Name </span>

                        </td>
                        <td colspan="2" class="leftTopFormLabel">
                            Branch Name:<span class="mandatoryField">*</span>
                        </td>
                        <td colspan="2" class="lastFormValue">
                            <textarea name="ctl00$HomePageContent$txtbranch_name" rows="2" cols="20" id="ctl00_HomePageContent_txtbranch_name" disabled="disabled" tabindex="104" class="txtbox numericAlignRight" style="background-color:#CCCCCC;width:150px;">PALARIVATTOM</textarea>
                            <span id="ctl00_HomePageContent_rfvBranch_Name" style="color:Red;visibility:hidden;">Enter Branch Name</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="leftTopFormLabel">
                            Account Number:<span class="mandatoryField">*</span>
                        </td>
                        <td colspan="2" class="lastFormValue">
                            <input name="ctl00$HomePageContent$txtacc_number" type="text" maxlength="20" id="ctl00_HomePageContent_txtacc_number" tabindex="105" class="txtbox numericAlignRight" <?php if(isset($bank['account_number'])) echo 'value="'.$bank['account_number'].'"'; ?>>
                            <span id="ctl00_HomePageContent_RequiredFieldValidator2" style="color: red; visibility: hidden;">Enter Account Number</span>
                            <span id="ctl00_HomePageContent_valAccNo" class="errordisplay" style="color:Red;display:none;">Please Enter only numerics</span>
                        </td>
                        <td colspan="2" class="leftTopFormLabel">
                            IFSC :<span class="mandatoryField">*</span>
                        </td>
                        <td colspan="2" class="lastFormValue">
                            <input name="ctl00$HomePageContent$txtifsc" type="text" value="<?php echo $bank['ifsc']; ?>" maxlength="11" id="ctl00_HomePageContent_txtifsc" disabled="disabled" tabindex="106" class="txtbox numericAlignRight" style="background-color:#CCCCCC;">
                            <span id="ctl00_HomePageContent_RequiredFieldValidator3" style="color:Red;visibility:hidden;">Enter IFSC Code</span>

                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="leftTopFormLabel">
                            MICR Code:
                        </td>
                        <td colspan="2" class="lastFormValue">
                            <input name="ctl00$HomePageContent$txtmicr" type="text" maxlength="20" id="ctl00_HomePageContent_txtmicr" tabindex="107" class="txtbox" <?php if(isset($bank['micr_code'])) echo 'value="'.$bank['micr_code'].'"'; ?>>
                            <span id="ctl00_HomePageContent_valmicr" class="errordisplay" style="color:Red;display:none;">Enter only nuemeric</span>
                        </td>
                        <td colspan="2" class="leftTopFormLabel">
                            Account Type:<span class="mandatoryField">*</span>
                        </td>
                        <td colspan="2" class="lastFormValue">
                            <select name="ctl00$HomePageContent$ddlAccountType" id="ctl00_HomePageContent_ddlAccountType">
						<option selected="selected" value="0">--Select Account Type--</option>
						<option <?php if(isset($bank['account_type']) && $bank['account_type'] == 2) echo "selected";?> value="2">Savings</option>
						<option <?php if(isset($bank['account_type']) && $bank['account_type'] == 3) echo "selected";?> value="3">Current</option>
						<option <?php if(isset($bank['account_type']) && $bank['account_type'] == 4) echo "selected";?> value="4">Others</option>

					</select>
                            <span id="ctl00_HomePageContent_RequiredFieldValidator5" style="color: red; visibility: hidden;">Select Account Type</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="leftTopFormLabel">Document:
                        </td>
                        <td colspan="4" class="lastFormValue">
                            <div id="ctl00_HomePageContent_pnlUpload">

                                <input type="file" name="ctl00$HomePageContent$ctrlFISelectFile" id="ctl00_HomePageContent_ctrlFISelectFile">
                                <input type="submit" name="ctl00$HomePageContent$btnUpload" value="Upload" id="ctl00_HomePageContent_btnUpload" class="btn">
                                <span id="ctl00_HomePageContent_StatusLabel"></span>


                                <input type="hidden" name="ctl00$HomePageContent$ctrlFileName" id="ctl00_HomePageContent_ctrlFileName">


					</div>


                             <br>
                            <span id="ctl00_HomePageContent_lblfooterMessage1" style="color:Red;font-weight:bold;">Note:Document type allowed pdf, jpg &amp; jpeg.</span>
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <span id="ctl00_HomePageContent_lblfooterMessage2" style="color:Red;font-weight:bold;">Maximum Size is 200 KB for uploading documents.</span>

                        </td>
                    </tr>
                </tbody></table>
            </td>
				</tr>
				<tr>
					<td colspan="8" class="pageFooter1">
                <input type="submit" name="ctl00$HomePageContent$btnsubmit" value="Submit" onclick='javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions("ctl00$HomePageContent$btnsubmit", "", true, "submit", "", false, false))' id="ctl00_HomePageContent_btnsubmit" class="btn">
                <input type="submit" name="ctl00$HomePageContent$Button1" value="Reset" id="ctl00_HomePageContent_Button1" class="btn">
                <input type="hidden" name="ctl00$HomePageContent$hdndate" id="ctl00_HomePageContent_hdndate">
                <input type="button" class="btn" title="Close" value="Close" id="btnCancel" onkeydown="return doClick(this.id,event);" onclick="window.close();">
                <br>
            </td>
				</tr>
				<tr id="ctl00_HomePageContent_Tr1">
					<td colspan="8" class="sectionHeader">
                <?php if(isset($bank['success'])) { ?>
                    <span id="ctl00_HomePageContent_ctrlLabelSaved" style="color:Green;font-weight:bold;">Details are saved successfully</span>
                <?php } ?>
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
var Page_Validators =  new Array(document.getElementById("ctl00_HomePageContent_RequiredFieldValidator4"), document.getElementById("ctl00_HomePageContent_RequiredFieldValidator1"), document.getElementById("ctl00_HomePageContent_rfvBranch_Name"), document.getElementById("ctl00_HomePageContent_RequiredFieldValidator2"), document.getElementById("ctl00_HomePageContent_valAccNo"), document.getElementById("ctl00_HomePageContent_RequiredFieldValidator3"), document.getElementById("ctl00_HomePageContent_valmicr"), document.getElementById("ctl00_HomePageContent_RequiredFieldValidator5"));
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
var ctl00_HomePageContent_RequiredFieldValidator1 = document.all ? document.all["ctl00_HomePageContent_RequiredFieldValidator1"] : document.getElementById("ctl00_HomePageContent_RequiredFieldValidator1");
ctl00_HomePageContent_RequiredFieldValidator1.controltovalidate = "ctl00_HomePageContent_txt_Bank_Name_in_Records";
ctl00_HomePageContent_RequiredFieldValidator1.errormessage = "Enter Bank Name ";
ctl00_HomePageContent_RequiredFieldValidator1.validationGroup = "submit";
ctl00_HomePageContent_RequiredFieldValidator1.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl00_HomePageContent_RequiredFieldValidator1.initialvalue = "";
var ctl00_HomePageContent_rfvBranch_Name = document.all ? document.all["ctl00_HomePageContent_rfvBranch_Name"] : document.getElementById("ctl00_HomePageContent_rfvBranch_Name");
ctl00_HomePageContent_rfvBranch_Name.controltovalidate = "ctl00_HomePageContent_txtbranch_name";
ctl00_HomePageContent_rfvBranch_Name.errormessage = "Enter Branch Name";
ctl00_HomePageContent_rfvBranch_Name.validationGroup = "submit";
ctl00_HomePageContent_rfvBranch_Name.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl00_HomePageContent_rfvBranch_Name.initialvalue = "";
var ctl00_HomePageContent_RequiredFieldValidator2 = document.all ? document.all["ctl00_HomePageContent_RequiredFieldValidator2"] : document.getElementById("ctl00_HomePageContent_RequiredFieldValidator2");
ctl00_HomePageContent_RequiredFieldValidator2.controltovalidate = "ctl00_HomePageContent_txtacc_number";
ctl00_HomePageContent_RequiredFieldValidator2.errormessage = "Enter Account Number";
ctl00_HomePageContent_RequiredFieldValidator2.validationGroup = "submit";
ctl00_HomePageContent_RequiredFieldValidator2.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl00_HomePageContent_RequiredFieldValidator2.initialvalue = "";
var ctl00_HomePageContent_valAccNo = document.all ? document.all["ctl00_HomePageContent_valAccNo"] : document.getElementById("ctl00_HomePageContent_valAccNo");
ctl00_HomePageContent_valAccNo.controltovalidate = "ctl00_HomePageContent_txtacc_number";
ctl00_HomePageContent_valAccNo.errormessage = "Please Enter only numerics";
ctl00_HomePageContent_valAccNo.display = "Dynamic";
ctl00_HomePageContent_valAccNo.validationGroup = "submit";
ctl00_HomePageContent_valAccNo.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
ctl00_HomePageContent_valAccNo.validationexpression = "^[0-9]{3,20}$";
var ctl00_HomePageContent_RequiredFieldValidator3 = document.all ? document.all["ctl00_HomePageContent_RequiredFieldValidator3"] : document.getElementById("ctl00_HomePageContent_RequiredFieldValidator3");
ctl00_HomePageContent_RequiredFieldValidator3.controltovalidate = "ctl00_HomePageContent_txtifsc";
ctl00_HomePageContent_RequiredFieldValidator3.errormessage = "Enter IFSC Code";
ctl00_HomePageContent_RequiredFieldValidator3.validationGroup = "submit";
ctl00_HomePageContent_RequiredFieldValidator3.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl00_HomePageContent_RequiredFieldValidator3.initialvalue = "";
var ctl00_HomePageContent_valmicr = document.all ? document.all["ctl00_HomePageContent_valmicr"] : document.getElementById("ctl00_HomePageContent_valmicr");
ctl00_HomePageContent_valmicr.controltovalidate = "ctl00_HomePageContent_txtmicr";
ctl00_HomePageContent_valmicr.errormessage = "Enter only nuemeric";
ctl00_HomePageContent_valmicr.display = "Dynamic";
ctl00_HomePageContent_valmicr.validationGroup = "submit";
ctl00_HomePageContent_valmicr.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
ctl00_HomePageContent_valmicr.validationexpression = "^[0-9]{1,20}$";
var ctl00_HomePageContent_RequiredFieldValidator5 = document.all ? document.all["ctl00_HomePageContent_RequiredFieldValidator5"] : document.getElementById("ctl00_HomePageContent_RequiredFieldValidator5");
ctl00_HomePageContent_RequiredFieldValidator5.controltovalidate = "ctl00_HomePageContent_ddlAccountType";
ctl00_HomePageContent_RequiredFieldValidator5.errormessage = "Select Account Type";
ctl00_HomePageContent_RequiredFieldValidator5.validationGroup = "submit";
ctl00_HomePageContent_RequiredFieldValidator5.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl00_HomePageContent_RequiredFieldValidator5.initialvalue = "0";
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

document.getElementById('ctl00_HomePageContent_RequiredFieldValidator1').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_HomePageContent_RequiredFieldValidator1'));
}

document.getElementById('ctl00_HomePageContent_rfvBranch_Name').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_HomePageContent_rfvBranch_Name'));
}

document.getElementById('ctl00_HomePageContent_RequiredFieldValidator2').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_HomePageContent_RequiredFieldValidator2'));
}

document.getElementById('ctl00_HomePageContent_valAccNo').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_HomePageContent_valAccNo'));
}

document.getElementById('ctl00_HomePageContent_RequiredFieldValidator3').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_HomePageContent_RequiredFieldValidator3'));
}

document.getElementById('ctl00_HomePageContent_valmicr').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_HomePageContent_valmicr'));
}

document.getElementById('ctl00_HomePageContent_RequiredFieldValidator5').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_HomePageContent_RequiredFieldValidator5'));
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