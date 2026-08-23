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

<style>
     table {
            border-collapse: collapse;  
        }
        th, td {
            border: 1px solid black; 
            text-align: left;
        }
        
        .demTable {
			border:1px solid #b3adad;
			padding:5px;
		}
		.demTable th {
			border:1px solid #b3adad;
			padding:5px;
			color: #ffffff;
		}
		.demTable td {
			border:1px solid #b3adad;
			text-align:left;
		 
			background: #ffffff;
			color: #742902;
		}
	 
</style>

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
   <?php  
       $ip_c = session('ip_c');
        $emp_c= session('emp_c');
        $total= $ip_c + $emp_c;
         
         
       
        ?>
       
<div class="content" style="padding:35px;color:#732703;font-weight:600;">
            <p>1. All the Employees must be registered before filing the Monthly Contribution.</p>
            <p>2. The Contribution should be filled in Excel sheet where following things must be mentioned.</p>
            <ol type="a">
                <li>Insurance Number (10 Digits)</li>
                <li>Insured Name</li>
                <li>No of Days for which wages paid/payable</li>
                <li>Total Monthly Wages</li>
                <li>Reason for zero workings days (if point (c) = 0)</li>
                <li>Last Working Day (The column format should be text and date should be in dd-mm-yyyy) (if point (e) is not equal to 1,7,8,9,11,12,13)</li>
            </ol>
          
            <table style="margin-left: 50px;border:1px solid black;">
                <thead>
                    <tr>
                        <th>Reason</th>
                        <th>Numeric Value in Excel Sheet</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>No Reason (when days and wages are provided)</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>On Leave</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Left Service</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Retired</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>Out of Coverage</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>Expired</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>Non Implemented Area</td>
                        <td>6</td>
                    </tr>
                    <tr>
                        <td>Compliance by Immediate Employer</td>
                        <td>7</td>
                    </tr>
                    <tr>
                        <td>Suspension of work</td>
                        <td>8</td>
                    </tr>
                    <tr>
                        <td>Strike/Lockout</td>
                        <td>9</td>
                    </tr>
                    <tr>
                        <td>Retrenchment</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>No Work</td>
                        <td>11</td>
                    </tr>
                    <tr>
                        <td>Doesn't Belong To This Employer</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td>Duplicate IP</td>
                        <td>13</td>
                    </tr>
                </tbody>
            </table>
            <div class="footer" style="margin-top :20px;background-color:#d8ca99;" id="footer-block">
                <form action="#" method="post" enctype="multipart/form-data">
                   <table style="width: 100%;">
                       <tr style=" border: none;">
                           <td style="color:#732703;border: none;">Upload Monthly Contribution:</td>
                            <td style=" border: none;">  <input type="file" id="file" name="file"> &nbsp;&nbsp;&nbsp;<input type="button" onclick="showTable()" value="Upload"></td>
                         
                       </tr>
                   </table>
                   <!-- <label for="file">Upload Monthly Contribution:</label>
                  
                    <br>-->
                   
                </form>
            </div>
            <div id="payemnt-history" style="display:none; margin-top:40px;">
                <table class="demTable">
		<thead style="background-color:#742902">
			<tr style="width:650px">
				<th>Payment History</th>
				<th><br></th>
			</tr>
		</thead>
		<tbody>
			<tr   style="background-color:#fff;">
				<td colspan="2">&nbsp;</td>
				 
			</tr> 
			<tr >
				<td   style="width:600px;background-color: #f2f1b9;">&nbsp;Total IP Contributions (Rs.)</td>
				<td style="background-color: #fff;">&nbsp;<?php echo $ip_c; ?></td>
			</tr>
			<tr  >
				<td  style="width:600px;background-color: #f2f1b9;">&nbsp;Total Employer Contributions (Rs.)</td>
				<td style="background-color: #fff;">&nbsp;<?php echo $emp_c; ?></td>
			</tr>
			<tr >
				<td style="width:600px;background-color: #f2f1b9;">&nbsp;Grand Total (Employee &amp; Employer Contribution) (Rs.)</td>
				<td style="background-color: #fff;">&nbsp;<?php echo $total; ?></td>
			</tr>
			<tr >
				<td style="color:#335c39;width:600px;background-color: #f2f1b9;">&nbsp;Total Central Gvernment Contributions(Rs.)</td>
				<td style="background-color: #fff;color:#335c39;">&nbsp;0</td>
			</tr>
			<tr >
				<td style="color:#335c39;width:600px;background-color: #f2f1b9;">&nbsp;Total Wages(Rs.)</td>
				<td style="background-color: #fff;color:#335c39;">&nbsp;<?php echo $total; ?></td>
			</tr>
			
			<tr> 
				<td colspan="2" style="color:#0000ff;font-size:18px;width:650px;background-color: #f2f1b9;">&nbsp;Contribution once submitted cannot be altered or deleted</td>
			</tr>
			 <tr id="savebtnDiv">
			 <td colspan="2" style="text-align:center;width:650px;background-color: #f2f1b9;"><input type="button" onclick="showverifyBtn()" value="Save"> &nbsp;<input type="button"  onclick="showverifyBtn()" value="Submit"><input type="button" value="Cancel"></td>
			</tr> 
	        <tr id="verifyDiv1" style="display:none;"> 
				<td colspan="2" style="font-size:14px;width:650px;background-color: #f2f1b9;">
				    <input type="checkbox" id="verifyBtn1" class="" required style="color:#f2f1b9;"> Data Verify &nbsp;&nbsp; <a href="#" id="downloadButton" style="color:#0000ff;">Verify Excel</a>
				</td>
			</tr>
    		 <tr id="verifyDiv2" style="display:none;">
    			 <td colspan="2" style="text-align:center;width:650px;background-color: #f2f1b9;"><input type="button" onclick="showTableMessage()" value="Save"> &nbsp;<input type="button"  onclick="showTableMessage()" value="Submit"><input type="button" value="Cancel"></td>
    			</tr>
			 
		</tbody>
	</table>
            </div>
        </div>
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
function showTableMessage()
{
     const checkbox = document.getElementById('verifyBtn1');
            
            
            if (checkbox.checked) {
                  alert("Monthly Contribution Uploaded successful");
    
     window.close();
            } else {
               alert('Data verify checkbox is not checked');
               return false;
            }
 
 //   return true;
}
function showverifyBtn()
{
     var verifyDiv1 = document.getElementById("verifyDiv1");
     var verifyDiv2 = document.getElementById("verifyDiv2");
    
      var savebtnDiv = document.getElementById("savebtnDiv");
      verifyDiv1.style.display = "block";
       verifyDiv2.style.display = "block";
      savebtnDiv.style.display = "none";
      
      
}
function showTable() {
    
   
     var footerdiv = document.getElementById("footer-block");
     var paydiv = document.getElementById("payemnt-history");
            footerdiv.style.display = "none";
                paydiv.style.display = "block";
                
 // document.getElementById("myForm").submit();
}

  document.getElementById('downloadButton').addEventListener('click', () => {
            const fileInput = document.getElementById('file');
            const file = fileInput.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function(event) {
                    const blob = new Blob([event.target.result], { type: file.type });
                    const url = URL.createObjectURL(blob);
                    const a = document.createElement('a');
                    a.href = url;
                    a.download = file.name;
                    document.body.appendChild(a);
                    a.click();
                    setTimeout(() => {
                        document.body.removeChild(a);
                        window.URL.revokeObjectURL(url);
                    }, 0); 
                };

                reader.readAsArrayBuffer(file);
            } else {
                alert('No file selected');
            }
        });

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