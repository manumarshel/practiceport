<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head id="ctl00_Head1">
<meta http-equiv="content-type" content="text/html; charset=UTF-8"><title>
	MonthlyContributionHome
</title><link rel="stylesheet" type="text/css" href="../../public/assets/esi/monthcontribution/esicCSSglobal.css"><link rel="stylesheet" type="text/css" href="../../public/assets/esi/monthcontribution/esiccsstaskhome.css"><link rel="stylesheet" type="text/css" href="../../public/assets/esi/monthcontribution/esiclayout.css">




    <script type="text/javascript" src="../../public/assets/esi/monthcontribution/JavaScript1.js"></script>

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



    </head>
<body onkeydown="checkForRefresh(event)" onload="actionsOnLoad();" oncontextmenu="return false" data-new-gr-c-s-check-loaded="8.912.0" data-gr-ext-installed="">
    <div id="minHeight">
    </div>
    <form name="aspnetForm" method="post" action="" onsubmit="javascript:return WebForm_OnSubmit();" onkeypress="javascript:return WebForm_FireDefaultButton(event, 'ctl00_Test')" id="aspnetForm">
<div>
<input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value="">
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
<input type="hidden" name="__VSTATE" id="__VSTATE" value="H4sIAAAAAAAEAO29B2AcSZYlJi9tynt/SvVK1+B0oQiAYBMk2JBAEOzBiM3mkuwdaUcjKasqgcplVmVdZhZAzO2dvPfee++999577733ujudTif33/8/XGZkAWz2zkrayZ4hgKrIHz9+fB8/Iv7vX/M3nf2mv26y+3D34cP9Bw/u3//NZrPf5tc6/03pn1+Lvvptfr1f69e2v8vH9p9fx3z4m/42v9Yv+HXe5O/aX/c3v7+/s7Ozt/9w5wH93Hn48OFsxgB+nV/r10KrX/8ni6aYlPl89mv9OvT37/Jrzhm0/EpNf100db3QV48/+TV+41/z17ANHBryq/vgN+Bffx3q7Tf7TX+bX+8X/MZPszYDTs+KvJz9ur/O75Nn9S/4TfDhT2blOvc//Q1//98Vnz+p1svZxew3/W1+h1/r1/y1fq1f69f+tX6dX+vX/bV+vV/r1/+1foNf68d+reTX+g1/rd/o1/qNf63f5Nf6TX+t3+zX+s1/rd/i1/otf63f6tf6rX+t3+bX+m1/rd/u1/rtf63f4bf5HX6zX/fX2aOhy78X8tc9+Vf/2pN/9a9d+Vf/2pF/5a/dh/Kv/nUg/+pfD+Rf/etT+Vf/ui//6l/78q/+dU/+1b/25F/9a1f+1b925F/5a+eh/Kt/Hci/+tcD+Vf/+lT+1b/uy7/61778q3/dk3/1rz35V//alX/1rx35F38Rhz6Ufy+IE35D4ppf5xf8Rl8Uy2KxXvCk8pcH9Fn2zvsM06FcCHYBf/+av9avCV5jjjxdZsSQs7nPUgT5d/k1Isz8C36DV3k2+3JZXgODX9+HeK5/W+b99ZSvf41f9zc7e5kez2Z13jTpo3R/f0zv/lr63Z3j1y/T1/RNUS3Ts6f0/S+6v6p38/v367eX1S/6ResfTM9/cPG2nKx5CPxSPpv9P/QGcAW2AwAA">
<input type="hidden" name="__VIEWSTATE" id="
__VIEWSTATE" value="">
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


<script src="../../public/assets/esi/monthcontribution/WebResource_002.js" type="text/javascript"></script>


<script src="../../public/assets/esi/monthcontribution/ScriptResource_002.js" type="text/javascript"></script>
<script src="../../public/assets/esi/monthcontribution/ScriptResource.js" type="text/javascript"></script>
<script src="../../public/assets/esi/monthcontribution/ScriptResource_003.js" type="text/javascript"></script>
<script src="../../public/assets/esi/monthcontribution/jquery1.js" type="text/javascript"></script>
<script src="../../public/assets/esi/monthcontribution/esic.js" type="text/javascript"></script>
<script src="../../public/assets/esi/monthcontribution/WebResource.js" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
function WebForm_OnSubmit() {
if (typeof(ValidatorOnSubmit) == "function" && ValidatorOnSubmit() == false) return false;
return true;
}
//]]>
</script>

<div>

	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWNwL+raDpAgLU3p7PCAKc1MrcAQLajL3BBQLajPHCBQLajPXCBQLajMnCBQLajM3CBQLajMHCBQLajMXCBQLajNnCBQLajJ3BBQLajJHBBQLFjP3CBQLFjPHCBQLFjPXCBQKO/rLfDALAkaH0AQLAkdWRCgLAkfnKAgLAke3nCwLAkZGDBALdhu+rBwLdhpPHDwLdhsevDQLdhuvIBQLdhp/kDgLdhoOBBwLdhrc6At2G29cIAt2Gz/ABAt2G860KAra/wbQNAra/9dEFAra/2bgDAra/zdULAra/8Y4EAra/5asNAra/iccFAra/veAOAra/oZ0HAra/1TYC8ty8wAUC1Y2r3AcCxeKBsgsC2uKBsgsC2+KBsgsCsb+akQMCire2rA8C3YijsAkC/KPdwwwCt4O54wkC//DA2wkCnL2HoAwCm8KynwU=">
</div>
   <script type="text/javascript">
//<![CDATA[
//Sys.WebForms.PageRequestManager._initialize('ctl00$ScriptManager1', document.getElementById('aspnetForm'));
Sys.WebForms.PageRequestManager.getInstance()._updateControls(['tctl00$HomePageContent$CtrlUpdtPanel'], [], [], 90);
//]]>
</script>

    <div id="outer">
        <table id="ctl00_Table2" cellspacing="0" cellpadding="0" align="Center" border="0" style="border-width:0px;height:60px;width:100%;border-collapse:collapse;">
	<tbody><tr>
		<td class="tHeadImage" align="left"><img id="ctl00_ESICLogo" src="../../public/assets/esi/monthcontribution/Small%20Logo.jpg" align="absmiddle" style="border-width:0px;"></td><td class="tHeadImage" align="center"></td><td class="tHeadImage" align="right"><img id="ctl00_Image1" src="../../public/assets/esi/monthcontribution/IndianSymbol.jpg" align="absmiddle" style="border-width:0px;"></td>
	</tr><tr>
		<td align="center" colspan="3" style="height:25px;width:100%;"><table id="ctl00_Table3" cellspacing="0" cellpadding="0" border="0" style="height:100%;width:100%;border-collapse:collapse;">
			<tbody><tr>
				<td class="dataBlock" align="left" style="width:8%;">
                                    User Login:
                            </td><td class="dataBlock" align="left" style="width:58%;"><span id="ctl00_lbluserName" style="background-color:Transparent;"><?php echo session('emp_code'); ?></span></td><td class="dataBlock" style="width:23%;">
                                    <div id="raw">Tuesday, July 16, 2024 9:32:13 AM</div>
                            </td><td class="homelink" align="right">
                                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                <input type="submit" name="ctl00$Test" value="Button" onclick='javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions("ctl00$Test", "", true, "", "", false, false))' id="ctl00_Test" style="display: none;"><input type="submit" name="ctl00$dummybutton" value="" id="ctl00_dummybutton" style="border-width:0px;font-weight:bold;height:0px;width:0px;"></td>
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

 <script language="javascript" type="text/javascript">
     function Change() {
         var month = document.getElementById('ctl00_HomePageContent_CtrlLblNoData');
         month.innerHTML = "";
     }
   </script>
    <table width="100%" border="0" cellpadding="0" align="center" cellspacing="0" id="Table6">
        <tbody><tr class="lastData_Section">
            <td valign="top" align="left">
                <table>
                    <tbody><tr>
                        <td class="bread">
                            <b>Employer</b> &gt; <span class="breadtitle">Monthly Contribution</span>
                        </td>
                    </tr>
                </tbody></table>
            </td>
        </tr>
    </tbody></table>
    <table width="100%" border="0" cellpadding="2" align="center" cellspacing="0" class="separator" id="tblUser1">
        <tbody><tr class="lastData_Section">
            <td valign="top" align="left">

                <div id="ctl00_HomePageContent_CtrlUpdtPanel">

                        <div id="ctl00_HomePageContent_CtrlPanelPeriod">

                                </div><div id="ctl00_HomePageContent_CtrlPanelType">

                                </div><div id="ctl00_HomePageContent_EmprCodePanel" disabled="disabled">

                                </div><div id="ctl00_HomePageContent_UploadFunction">

                                </div><table width="100%" border="0" align="center" cellpadding="2" cellspacing="0" class="internalTable" id="tblUser2">
                            <tbody><tr>
                                <td class="pageHeader" colspan="8">
                                    <table width="100%">
                                        <tbody><tr>
                                            <td class="pageHeaderText">
                                                Monthly Contribution
                                            </td>
                                            <td valign="bottom" class="mandatoryField">
                                                * Required Fields
                                            </td>
                                        </tr>
                                    </tbody></table>
                                </td>
                            </tr>
                            <tr id="RowCreate">
                                <td colspan="8" class="sectionHeader">
                                    &nbsp;
                                </td>
                            </tr>
                            <tr class="lastData_Section" id="RowForNew">
                                    <td colspan="2" class="leftTopFormLabel">
                                        Contribution Details for:<span class="mandatoryField">*</span>
                                    </td>
                                    <td colspan="2" class="lastFormValue">
                                        <select name="ctl00$HomePageContent$CtrlDdlMcMonth" id="ctl00_HomePageContent_CtrlDdlMcMonth" class="txtbox">
					<option selected="selected" value="0">Select</option>
					<option value="01">Jan</option>
					<option value="02">Feb</option>
					<option value="03">Mar</option>
					<option value="04">Apr</option>
					<option value="05">May</option>
					<option value="06">Jun</option>
					<option value="07">Jul</option>
					<option value="08">Aug</option>
					<option value="09">Sep</option>
					<option value="10">Oct</option>
					<option value="11">Nov</option>
					<option value="12">Dec</option>

				</select>

                                        <select name="ctl00$HomePageContent$CtrlDdlMcYear" id="ctl00_HomePageContent_CtrlDdlMcYear" class="txtbox">
					<option selected="selected" value="0">Select</option>
					<option value="2024">2024</option>
					<option value="2023">2023</option>
					<option value="2022">2022</option>
					<option value="2021">2021</option>
					<option value="2020">2020</option>
					<option value="2019">2019</option>
					<option value="2018">2018</option>
					<option value="2017">2017</option>
					<option value="2016">2016</option>
					<option value="2015">2015</option>
					<option value="2014">2014</option>
					<option value="2013">2013</option>
					<option value="2012">2012</option>
					<option value="2011">2011</option>
					<option value="2010">2010</option>
					<option value="2009">2009</option>
					<option value="2008">2008</option>
					<option value="2007">2007</option>
					<option value="2006">2006</option>
					<option value="2005">2005</option>
					<option value="2004">2004</option>
					<option value="2003">2003</option>
					<option value="2002">2002</option>
					<option value="2001">2001</option>
					<option value="2000">2000</option>
					<option value="1999">1999</option>

				</select>

                                       <span id="ctl00_HomePageContent_CtrlRfvDdlMcMonth" style="color:Red;display:none;">Please Select Month</span>&nbsp;&nbsp;
                                        <span id="ctl00_HomePageContent_CtrlRfvDdlMcYear" style="color:Red;display:none;">Please Select Year</span>


                                             <span id="ctl00_HomePageContent_CtrlRvDdlMcMonth" style="color:Red;visibility:hidden;"></span>
                                        <span id="ctl00_HomePageContent_CtrlRvDdlMcYear" style="color:Red;visibility:hidden;"></span>


                                    </td>

                                </tr>


                            <tr class="lastData_Section" id="trlipno">
                                    <td colspan="2" class="leftTopFormLabel">
                                        Contribution Details Type:<span class="mandatoryField">*</span>
                                    </td>
                                    <td colspan="6" class="lastFormValue">
                                        <select name="ctl00$HomePageContent$CtrlDdlMcType" onchange="javascript:setTimeout('__doPostBack(\'ctl00$HomePageContent$CtrlDdlMcType\',\'\')', 0)" id="ctl00_HomePageContent_CtrlDdlMcType" class="txtbox">
					<option value="0">---Please Select---</option>
					<option selected="selected" value="1">MonthlyContribution</option>
					<option value="2">SupplementaryContribution</option>

				</select>
                                        <span id="ctl00_HomePageContent_CtrlRfvDdlMcType" style="color:Red;display:none;">Please Select Contribution Details  Type</span>


                                            <span id="ctl00_HomePageContent_CtrlRvDdlMcType" style="color:Red;visibility:hidden;"></span>

                                    </td>
                                </tr>


                            <tr>
                                    <td colspan="2" class="leftTopFormLabel">
                                        Employer's Code No.:<span class="mandatoryField">*</span>
                                    </td>
                                    <td colspan="9" class="lastFormValue">
                                    <div id="ctl00_HomePageContent_Panel1" onkeypress="javascript:return WebForm_FireDefaultButton(event, 'ctl00_HomePageContent_CtrlBtnSubmit')">

                                        <input name="ctl00$HomePageContent$CtrlTxtEmplrCode" type="text" value="<?php echo session('emp_code'); ?>" maxlength="17" readonly="readonly" disabled="disabled" id="ctl00_HomePageContent_CtrlTxtEmplrCode" class="txtbox">
                                        <span id="ctl00_HomePageContent_CtrlLblEmprCodeCheck" style="display:inline-block;color:Red;border-style:None;"></span>
                                   <span id="ctl00_HomePageContent_RequiredFieldValidator1" style="color:Red;display:none;">Please Enter Employer Code</span>

				</div>
                                    </td>
                                </tr>




                            <tr>
                                    <td colspan="2" class="leftTopFormLabel">
                                        Upload Your Data Using Excel file<span class="mandatoryField">*</span>
                                    </td>
                                    <td colspan="9" class="lastFormValue" align="left">
                                        <a id="ctl00_HomePageContent_CntrlUploadLink" href='javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions("ctl00$HomePageContent$CntrlUploadLink", "", true, "", "", false, true))' style="font-size:small;font-weight:bold;">Upload Excel</a>&nbsp;&nbsp;&nbsp;
                                           <a href="<?= base_url('public/assets/admin/ESI_Format.xlsx') ?>" style="font-size:small;font-weight:bold;">Sample MC excel template</a>
                                    </td>
                                </tr>



                        </tbody></table>

                        <table width="100%" border="0" cellpadding="0" align="center" cellspacing="0" id="tblCheckExcel" class="internalTable">

                        </table>


		</div>
                <table width="100%" border="0" align="center" cellpadding="2" cellspacing="0" class="internalTable" id="Table1">

                    <tbody><tr>
                        <td class="pageFooter1">
                            <input type="submit" name="ctl00$HomePageContent$CtrlBtnSubmit" value="Submit" onclick='javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions("ctl00$HomePageContent$CtrlBtnSubmit", "", true, "", "", false, false))' id="ctl00_HomePageContent_CtrlBtnSubmit" class="btn" onkeydown="if (event.keyCode == 13) document.getElementById('ctl00_HomePageContent_CtrlBtnSubmit').click();">


                            <input type="submit" name="ctl00$HomePageContent$CtrlBtnReset" value="Reset" id="ctl00_HomePageContent_CtrlBtnReset" class="btn" onkeydown="if (event.keyCode == 13) document.getElementById('ctl00_HomePageContent_CtrlBtnReset').click();">


                            <input type="submit" name="ctl00$HomePageContent$CtrlBtnCancel" value="Cancel" id="ctl00_HomePageContent_CtrlBtnCancel" class="btn" onkeydown="if (event.keyCode == 13) document.getElementById('ctl00_HomePageContent_CtrlBtnCancel').click();">
                            <input type="submit" name="ctl00$HomePageContent$CtrlBtnClose" value="Close" id="ctl00_HomePageContent_CtrlBtnClose" class="btn" onkeydown="if (event.keyCode == 13) document.getElementById('ctl00_HomePageContent_CtrlBtnClose').click();">
                        </td>
                    </tr>
			<tr>
                        <td class="pageFooter1">
                            <span id="ctl00_HomePageContent_Label2" style="color:Red;font-weight:bold;">Revised exemption of contribution for average daily wages of Rs. 176 or less has been made effective from 1st September, 2019.</span>
                        </td>
                    </tr>
                </tbody></table>
            </td>
        </tr>
    </tbody></table>

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
                    in 1024 x 768 pixels, Designed and Developed by Wipro LTD.<span id="ctl00_lblIP" style="color:White;">IP Address : 44.</span><span id="ctl00_Label1" style="color:#742902;">ASP Session ID : q5pr1e55rkvoqquzcfzgklbu</span><span id="ctl00_Label2"></span></td>
	</tr>
</tbody></table>
    </div>
    <input type="hidden" name="ctl00$hdnhmedate" id="ctl00_hdnhmedate" value="2024 7 16">
    <input type="hidden" name="ctl00$hdnLogout" id="ctl00_hdnLogout" value="0">

<script type="text/javascript">
//<![CDATA[
var Page_Validators =  new Array(document.getElementById("ctl00_HomePageContent_CtrlRfvDdlMcMonth"), document.getElementById("ctl00_HomePageContent_CtrlRfvDdlMcYear"), document.getElementById("ctl00_HomePageContent_CtrlRvDdlMcMonth"), document.getElementById("ctl00_HomePageContent_CtrlRvDdlMcYear"), document.getElementById("ctl00_HomePageContent_CtrlRfvDdlMcType"), document.getElementById("ctl00_HomePageContent_CtrlRvDdlMcType"), document.getElementById("ctl00_HomePageContent_RequiredFieldValidator1"));
//]]>
</script>

<script type="text/javascript">
//<![CDATA[
var ctl00_HomePageContent_CtrlRfvDdlMcMonth = document.all ? document.all["ctl00_HomePageContent_CtrlRfvDdlMcMonth"] : document.getElementById("ctl00_HomePageContent_CtrlRfvDdlMcMonth");
ctl00_HomePageContent_CtrlRfvDdlMcMonth.controltovalidate = "ctl00_HomePageContent_CtrlDdlMcMonth";
ctl00_HomePageContent_CtrlRfvDdlMcMonth.focusOnError = "t";
ctl00_HomePageContent_CtrlRfvDdlMcMonth.errormessage = "Please Select Month";
ctl00_HomePageContent_CtrlRfvDdlMcMonth.display = "Dynamic";
ctl00_HomePageContent_CtrlRfvDdlMcMonth.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl00_HomePageContent_CtrlRfvDdlMcMonth.initialvalue = "0";
var ctl00_HomePageContent_CtrlRfvDdlMcYear = document.all ? document.all["ctl00_HomePageContent_CtrlRfvDdlMcYear"] : document.getElementById("ctl00_HomePageContent_CtrlRfvDdlMcYear");
ctl00_HomePageContent_CtrlRfvDdlMcYear.controltovalidate = "ctl00_HomePageContent_CtrlDdlMcYear";
ctl00_HomePageContent_CtrlRfvDdlMcYear.focusOnError = "t";
ctl00_HomePageContent_CtrlRfvDdlMcYear.errormessage = "Please Select Year";
ctl00_HomePageContent_CtrlRfvDdlMcYear.display = "Dynamic";
ctl00_HomePageContent_CtrlRfvDdlMcYear.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl00_HomePageContent_CtrlRfvDdlMcYear.initialvalue = "0";
var ctl00_HomePageContent_CtrlRvDdlMcMonth = document.all ? document.all["ctl00_HomePageContent_CtrlRvDdlMcMonth"] : document.getElementById("ctl00_HomePageContent_CtrlRvDdlMcMonth");
ctl00_HomePageContent_CtrlRvDdlMcMonth.controltovalidate = "ctl00_HomePageContent_CtrlDdlMcMonth";
ctl00_HomePageContent_CtrlRvDdlMcMonth.type = "Integer";
ctl00_HomePageContent_CtrlRvDdlMcMonth.evaluationfunction = "RangeValidatorEvaluateIsValid";
ctl00_HomePageContent_CtrlRvDdlMcMonth.maximumvalue = "12";
ctl00_HomePageContent_CtrlRvDdlMcMonth.minimumvalue = "1";
var ctl00_HomePageContent_CtrlRvDdlMcYear = document.all ? document.all["ctl00_HomePageContent_CtrlRvDdlMcYear"] : document.getElementById("ctl00_HomePageContent_CtrlRvDdlMcYear");
ctl00_HomePageContent_CtrlRvDdlMcYear.controltovalidate = "ctl00_HomePageContent_CtrlDdlMcYear";
ctl00_HomePageContent_CtrlRvDdlMcYear.type = "Integer";
ctl00_HomePageContent_CtrlRvDdlMcYear.evaluationfunction = "RangeValidatorEvaluateIsValid";
ctl00_HomePageContent_CtrlRvDdlMcYear.maximumvalue = "2024";
ctl00_HomePageContent_CtrlRvDdlMcYear.minimumvalue = "1998";
var ctl00_HomePageContent_CtrlRfvDdlMcType = document.all ? document.all["ctl00_HomePageContent_CtrlRfvDdlMcType"] : document.getElementById("ctl00_HomePageContent_CtrlRfvDdlMcType");
ctl00_HomePageContent_CtrlRfvDdlMcType.controltovalidate = "ctl00_HomePageContent_CtrlDdlMcType";
ctl00_HomePageContent_CtrlRfvDdlMcType.focusOnError = "t";
ctl00_HomePageContent_CtrlRfvDdlMcType.errormessage = "Please Select Contribution Details  Type";
ctl00_HomePageContent_CtrlRfvDdlMcType.display = "Dynamic";
ctl00_HomePageContent_CtrlRfvDdlMcType.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl00_HomePageContent_CtrlRfvDdlMcType.initialvalue = "0";
var ctl00_HomePageContent_CtrlRvDdlMcType = document.all ? document.all["ctl00_HomePageContent_CtrlRvDdlMcType"] : document.getElementById("ctl00_HomePageContent_CtrlRvDdlMcType");
ctl00_HomePageContent_CtrlRvDdlMcType.controltovalidate = "ctl00_HomePageContent_CtrlDdlMcType";
ctl00_HomePageContent_CtrlRvDdlMcType.type = "Integer";
ctl00_HomePageContent_CtrlRvDdlMcType.evaluationfunction = "RangeValidatorEvaluateIsValid";
ctl00_HomePageContent_CtrlRvDdlMcType.maximumvalue = "2";
ctl00_HomePageContent_CtrlRvDdlMcType.minimumvalue = "1";
var ctl00_HomePageContent_RequiredFieldValidator1 = document.all ? document.all["ctl00_HomePageContent_RequiredFieldValidator1"] : document.getElementById("ctl00_HomePageContent_RequiredFieldValidator1");
ctl00_HomePageContent_RequiredFieldValidator1.controltovalidate = "ctl00_HomePageContent_CtrlTxtEmplrCode";
ctl00_HomePageContent_RequiredFieldValidator1.focusOnError = "t";
ctl00_HomePageContent_RequiredFieldValidator1.errormessage = "Please Enter Employer Code";
ctl00_HomePageContent_RequiredFieldValidator1.display = "Dynamic";
ctl00_HomePageContent_RequiredFieldValidator1.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl00_HomePageContent_RequiredFieldValidator1.initialvalue = "";
//]]>
</script>

<script language="javascript">window.alert('Please update mobile number in 2  months otherwise you won’t be allowed to fill contribution next time'); </script>
<script type="text/javascript">
//<![CDATA[

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
        WebForm_AutoFocus('ctl00_HomePageContent_CtrlDdlMcMonth');Sys.Application.initialize();

document.getElementById('ctl00_HomePageContent_CtrlRfvDdlMcMonth').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_HomePageContent_CtrlRfvDdlMcMonth'));
}

document.getElementById('ctl00_HomePageContent_CtrlRfvDdlMcYear').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_HomePageContent_CtrlRfvDdlMcYear'));
}

document.getElementById('ctl00_HomePageContent_CtrlRvDdlMcMonth').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_HomePageContent_CtrlRvDdlMcMonth'));
}

document.getElementById('ctl00_HomePageContent_CtrlRvDdlMcYear').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_HomePageContent_CtrlRvDdlMcYear'));
}

document.getElementById('ctl00_HomePageContent_CtrlRfvDdlMcType').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_HomePageContent_CtrlRfvDdlMcType'));
}

document.getElementById('ctl00_HomePageContent_CtrlRvDdlMcType').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_HomePageContent_CtrlRvDdlMcType'));
}

document.getElementById('ctl00_HomePageContent_RequiredFieldValidator1').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_HomePageContent_RequiredFieldValidator1'));
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
    currentServerDate = '16-07-2024'
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