<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head id="ctl00_Head1">
<meta http-equiv="content-type" content="text/html; charset=UTF-8"><title>
	EmployeeRegistration
</title><link rel="stylesheet" type="text/css" href="../../public/assets/esi/woaadhar/esicCSSglobal.css"><link rel="stylesheet" type="text/css" href="../../public/assets/esi/woaadhar/esiccsstaskhome.css"><link rel="stylesheet" type="text/css" href="../../public/assets/esi/woaadhar/esiclayout.css">




    <script type="text/javascript" src="../../public/assets/esi/woaadhar/JavaScript1.js"></script>

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

    
    
    <link href="../../public/assets/esi/woaadhar/WebResource.css" type="text/css" rel="stylesheet"></head>
<body onkeydown="checkForRefresh(event)" onload="actionsOnLoad();" oncontextmenu="return false" data-new-gr-c-s-check-loaded="8.912.0" data-gr-ext-installed="">
    <div id="minHeight">
    </div>
    <form name="aspnetForm" method="post" action="../employee/register" onsubmit="javascript:return WebForm_OnSubmit();" onkeypress="javascript:return WebForm_FireDefaultButton(event, 'ctl00_Test')" id="aspnetForm">
<div>
<input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value="">
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKLTEzMzQyNDA4MRBkZBYCZg9kFgICAQ9kFgYCAw9kFgICAQ9kFgJmD2QWAmYPZBYCZg9kFgQCAQ9kFgJmDw8WAh4EVGV4dAURNTQwMDAyNDkwNzAwMDA5OTlkZAIDD2QWBAICDxYCHgdWaXNpYmxlaGQCBA8WAh8BaGQCBQ9kFgRmD2QWAmYPZBYCAgEPPCsADQEADxYCHwFoZGQCAQ9kFgJmD2QWAgIBD2QWAgIBD2QWBAIBDxYCHwFnFgJmD2QWAgIBD2QWAmYPZBYMAgsPPCsADQBkAg0PZBYCAgEPDxYEHwAFETU0MDAwMjQ5MDcwMDAwOTk5HgdFbmFibGVkaGRkAhEPEGRkFgFmZAIbD2QWAgIPDw8WAh8AZWRkAh8PDxYCHwAFBUNsb3NlFgIeB29uY2xpY2sFD3dpbmRvdy5jbG9zZSgpO2QCKw8PFgIfAAUHMzgxNzQxMGRkAgMPFgIfAWhkAgcPZBYCZg9kFgJmD2QWBgIBDw8WAh8ABRBJUCBBZGRyZXNzIDogNDQuZGQCAg8PFgIfAAUpQVNQIFNlc3Npb24gSUQgOiAwMTNhMGl6cGxkamJnejU1a3JzZXp5NTVkZAIDDw8WAh8AZWRkGAEFMGN0bDAwJEhvbWVQYWdlQ29udGVudCRTdWJVbml0RGV0YWlsc0xpc3RHcmlkVmlldw88KwAKAgYVAQlTdWJVbml0UEsIAv////8PZA==">
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


<script src="../../public/assets/esi/woaadhar/WebResource_002.js" type="text/javascript"></script>


<script src="../../public/assets/esi/woaadhar/ScriptResource_004.js" type="text/javascript"></script>
<script src="../../public/assets/esi/woaadhar/ScriptResource_002.js" type="text/javascript"></script>
<script src="../../public/assets/esi/woaadhar/ScriptResource_005.js" type="text/javascript"></script>
<script src="../../public/assets/esi/woaadhar/jquery1.js" type="text/javascript"></script>
<script src="../../public/assets/esi/woaadhar/esic.js" type="text/javascript"></script>
<script src="../../public/assets/esi/woaadhar/ScriptResource_008.es" type="text/javascript"></script>
<script src="../../public/assets/esi/woaadhar/ScriptResource.js" type="text/javascript"></script>
<script src="../../public/assets/esi/woaadhar/ScriptResource.es" type="text/javascript"></script>
<script src="../../public/assets/esi/woaadhar/ScriptResource_009.es" type="text/javascript"></script>
<script src="../../public/assets/esi/woaadhar/ScriptResource_007.es" type="text/javascript"></script>
<script src="../../public/assets/esi/woaadhar/ScriptResource_005.es" type="text/javascript"></script>
<script src="../../public/assets/esi/woaadhar/ScriptResource_006.es" type="text/javascript"></script>
<script src="../../public/assets/esi/woaadhar/ScriptResource_003.js" type="text/javascript"></script>
<script src="../../public/assets/esi/woaadhar/ScriptResource_011.es" type="text/javascript"></script>
<script src="../../public/assets/esi/woaadhar/ScriptResource_002.es" type="text/javascript"></script>
<script src="../../public/assets/esi/woaadhar/ScriptResource_012.es" type="text/javascript"></script>
<script src="../../public/assets/esi/woaadhar/ScriptResource_010.es" type="text/javascript"></script>
<script src="../../public/assets/esi/woaadhar/ScriptResource_013.es" type="text/javascript"></script>
<script src="../../public/assets/esi/woaadhar/ScriptResource_003.es" type="text/javascript"></script>
<script src="../../public/assets/esi/woaadhar/ScriptResource_004.es" type="text/javascript"></script>
<script src="../../public/assets/esi/woaadhar/WebResource.js" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
function WebForm_OnSubmit() {
if (typeof(ValidatorOnSubmit) == "function" && ValidatorOnSubmit() == false) return false;
return true;
}
//]]>
</script>

<div>

	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWEwLKhPrDCALU3p7PCAKc1MrcAQLz27n+AwLlj5PNDAL6j5PNDAL14LkjAriyteMKAqjM9ZUKAoHdvvgGAs/n/oELArjz5doFAuKal4gJAsyd7fMNApaB9p8GArG9oZwHAoLjnPUNApy9h6AMApvCsp8F">
</div>
   <script type="text/javascript">
//<![CDATA[
//Sys.WebForms.PageRequestManager._initialize('ctl00$ScriptManager1', document.getElementById('aspnetForm'));
//Sys.WebForms.PageRequestManager.getInstance()._updateControls(['tctl00$HomePageContent$UpdatePanel1'], [], ['ctl00$HomePageContent$btnContinue','ctl00$HomePageContent$button'], 90);
//]]>
</script>

    <div id="outer">
        <table id="ctl00_Table2" cellspacing="0" cellpadding="0" align="Center" border="0" style="border-width:0px;height:60px;width:100%;border-collapse:collapse;">
	<tbody><tr>
		<td class="tHeadImage" align="left"><img id="ctl00_ESICLogo" src="../../public/assets/esi/woaadhar/Small%20Logo.jpg" align="absmiddle" style="border-width:0px;"></td><td class="tHeadImage" align="center"></td><td class="tHeadImage" align="right"><img id="ctl00_Image1" src="../../public/assets/esi/woaadhar/IndianSymbol.jpg" align="absmiddle" style="border-width:0px;"></td>
	</tr><tr>
		<td align="center" colspan="3" style="height:25px;width:100%;"><table id="ctl00_Table3" cellspacing="0" cellpadding="0" border="0" style="height:100%;width:100%;border-collapse:collapse;">
			<tbody><tr>
				<td class="dataBlock" align="left" style="width:8%;">
                                    User Login:    
                            </td><td class="dataBlock" align="left" style="width:58%;"><span id="ctl00_lbluserName" style="background-color:Transparent;"><?php echo session('emp_code'); ?></span></td><td class="dataBlock" style="width:23%;">
                                    <div id="raw"><?php echo date("D M j, Y h:i:s A"); ?></div>
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
                    
    <div id="ctl00_HomePageContent_Panel1" onkeypress="javascript:return WebForm_FireDefaultButton(event, 'ctl00_HomePageContent_btnContinue')">
			

        <script type="text/javascript" language="javascript">
            function validationIdp(source, args) {
                var Ip = document.getElementById("ctl00_HomePageContent_txtEmployerCode").value;
                if (Ip != null && Ip != "") {
                    if (parseInt(Ip.length) < 17 || parseInt(Ip.length) > 17) {
                        args.IsValid = false;
                    }
                    else {
                        args.IsValid = true;
                    }
                }
                else {
                    document.getElementById("ctl00_HomePageContent_txtEmployerCode").focus();

                }
            }
            
            function CheckTabVal(e) {
                return (e.keyCode == 9);
            }
            function ClosePopup(e){
            document.getElementById('ctl00_HomePageContent_ctrlTxtAppointmentDate').value='';
            $find("behUserDetail").hide();
            }
            debugger;
             function check_Date(sender, args) {
             
           
            if (sender._selectedDate > new Date()) {
                sender._textbox.set_Value("");
                alert("Future date is not allowed");
                sender._selectedDate = new Date();
            }
            else {
            
            var currentdate1=document.getElementById('ctl00_HomePageContent_hdncurrentdate').value;
            var parts =currentdate1.split('/');
        //var mydate = new Date(parts[2], parts[1] - 1, parts[0]);
            
            var currentdate= new Date(""+ parts[1]+"/"+ parts[0] +"/"+ parts[2] +"");//parts[1]'/'parts[0],'/' , parts[2]);
            var year=currentdate.getFullYear();
	    var month=parts[1];
	    var day=parts[0];
            var nextyear=year+1;
	        if(month=='11' || month=='12')
	        {
	         nextyear=year+1;
            }
	        else if (month >= 01 && month <= 5 && day<= 12){
		        nextyear=year;
		        year=year-1;
            }	
            else{
	     nextyear=year;
	   }	
            var contrnov=new Date("11/12/"+year+"");
            var contrmay=new Date("05/13/" + nextyear + "");
            var maycontr=new Date("05/12/" + year + "");
            var novcontr=new Date("11/12/" + year + "");
            var regdate = new Date();
                    regdate.setDate(regdate.getDate() - 10);
            if (currentdate > contrnov && currentdate < contrmay)
            {
                if(sender._selectedDate>new Date("03/31/" + year + ""))
                {
                                    if (sender._selectedDate < regdate) {
                                     $find("behUserDetail").show();
//if (confirm('You have not complied with the provisions of Regulation 10B read with Regulation 11 & 12 of the Employees’ State Insurance (General) Regulation, 1950, regarding registration of employee within 10 days of the Date of Appointment. Therefore, the Date of Appointment of this employee will be subject to confirmation by the concerned RO/SRO after due verification of relevant records. Until then, the date of registration shall be deemed as the date of appointment. Please submit the relevant records/documents to the designated RO/SRO within 15 days in the prescribed format. Please also take note that in case of failure to do the needful, the date of registration will be treated as the date of appointment, for all purposes.')) {
//   return;
//} else {
//    

//   

//                        sender._textbox.set_Value('')
//                       // alert("Restricted! The date of registration of an Employee must be within 10 days of the date of Appointment.");
//}
                    }  
                }
                else{
                sender._textbox.set_Value("");
                alert("You cannot select a date prior to 1st day of the previous contribution period.");
                }
            }
            else if (currentdate > maycontr && currentdate < novcontr)
            {
                var curryear = year - 1;
                if(sender._selectedDate>new Date("09/30/" + curryear + ""))
                {
                    if (sender._selectedDate < regdate) {
                     $find("behUserDetail").show();
//if (confirm('You have not complied with the provisions of Regulation 10B read with Regulation 11 & 12 of the Employees’ State Insurance (General) Regulation, 1950, regarding registration of employee within 10 days of the Date of Appointment. Therefore, the Date of Appointment of this employee will be subject to confirmation by the concerned RO/SRO after due verification of relevant records. Until then, the date of registration shall be deemed as the date of appointment. Please submit the relevant records/documents to the designated RO/SRO within 15 days in the prescribed format. Please also take note that in case of failure to do the needful, the date of registration will be treated as the date of appointment, for all purposes.')) {
//   return;
//} else {
//    

//   

//                        sender._textbox.set_Value('')
//                       // alert("Restricted! The date of registration of an Employee must be within 10 days of the date of Appointment.");
//}
                    }  
                
                }
                else{
                sender._textbox.set_Value("");
                alert("You cannot select a date prior to 1st day of the previous contribution period.");
                }
            }
            
            
                //var regdate = new Date();
                //regdate.setDate(regdate.getDate() - 10);
                //if (sender._selectedDate < regdate) {
                   // sender._textbox.set_Value('')
                  //  alert("Restricted! The date of registration of an Employee must be within 10 days of the date of Appointment.");
                //}
            }
        }
            
            
            //MRID 2423
            // added by Ramakrishna
            function check_Date3(sender, args) {
                var today = new Date();
                if (sender._selectedDate > today) {
                    sender._textbox.set_Value('')
                    alert("You cannot select a future date");
                }
                else {
                     var currentdate1=document.getElementById('ctl00_HomePageContent_hdncurrentdate').value;
            var parts =currentdate1.split('/');
        //var mydate = new Date(parts[2], parts[1] - 1, parts[0]);
            
            var currentdate= new Date(""+ parts[0]+"/"+ parts[1] +"/"+ parts[2] +"");//parts[1]'/'parts[0],'/' , parts[2]);
            var year=currentdate.getFullYear();
            var nextyear=year+1;
            var contrnov=new Date("12/11/"+year+"");
            var contrmay=new Date("13/05/" + nextyear + "");
            var maycontr=new Date("12/05/" + year + "");
            var novcontr=new Date("12/11/" + year + "");
            var regdate = new Date();
                    regdate.setDate(regdate.getDate() - 10);
            if (currentdate > contrnov && currentdate < contrmay)
            {
                if(sender._selectedDate>new Date("31/03/" + year + ""))
                {
                                    if (sender._selectedDate < regdate) {
if (confirm('You have not complied with the provisions of Regulation 10B read with Regulation 11 & 12 of the Employees’ State Insurance (General) Regulation, 1950, regarding registration of employee within 10 days of the Date of Appointment. Therefore, the Date of Appointment of this employee will be subject to confirmation by the concerned RO/SRO after due verification of relevant records. Until then, the date of registration shall be deemed as the date of appointment. Please submit the relevant records/documents to the designated RO/SRO within 15 days in the prescribed format. Please also take note that in case of failure to do the needful, the date of registration will be treated as the date of appointment, for all purposes.')) {
   return;
} else {
    

   

                        sender._textbox.set_Value('')
                       // alert("Restricted! The date of registration of an Employee must be within 10 days of the date of Appointment.");
}
                    }  
                }
                else{
                sender._textbox.set_Value("");
                alert("You cannot select a date prior to 1st day of the previous contribution period.");
                }
            }
            else if (currentdate > maycontr && currentdate < novcontr)
            {
                var curryear = year - 1;
                if(sender._selectedDate>new Date("30/09/" + curryear + ""))
                {
                    if (sender._selectedDate < regdate) {
if (confirm('You have not complied with the provisions of Regulation 10B read with Regulation 11 & 12 of the Employees’ State Insurance (General) Regulation, 1950, regarding registration of employee within 10 days of the Date of Appointment. Therefore, the Date of Appointment of this employee will be subject to confirmation by the concerned RO/SRO after due verification of relevant records. Until then, the date of registration shall be deemed as the date of appointment. Please submit the relevant records/documents to the designated RO/SRO within 15 days in the prescribed format. Please also take note that in case of failure to do the needful, the date of registration will be treated as the date of appointment, for all purposes.')) {
   return;
} else {
    

   

                        sender._textbox.set_Value('')
                       // alert("Restricted! The date of registration of an Employee must be within 10 days of the date of Appointment.");
}
                    }  
                
                }
                else{
                sender._textbox.set_Value("");
                alert("You cannot select a date prior to 1st day of the previous contribution period.");
                }
            }
            
            
                //var regdate = new Date();
                //regdate.setDate(regdate.getDate() - 10);
                //if (sender._selectedDate < regdate) {
                   // sender._textbox.set_Value('')
                  //  alert("Restricted! The date of registration of an Employee must be within 10 days of the date of Appointment.");
                //}
            }
        }
            //MRID 2423 End

            function checkIP(e) {
                var ip = document.getElementById("ctl00_HomePageContent_ctrlTxtIPNumber").value;
                if (ip.length < 10) {
                    alert("Please enter a valid 10 digit IP number");
                }
            }

            function SubmitConfirm() {
                //var radios = document.getElementById("ctl00_HomePageContent_rbtnlistIsregistered");
                if (document.getElementById("ctl00_HomePageContent_rbtnlistIsregistered_1").checked == true) {
                    var r = confirm("Be sure that the Employee being registered does not have any INSURANCE NUMBER generated earlier.");
                    if (r) { } else {
                        return false;
                    }
                }
            }

            function SubmitContinue() {
                if (document.getElementById("ctl00_HomePageContent_rbtnlistIsregistered_1").checked == true) {
                    var r = confirm("Please use earlier generated INSURANCE NUMBER, if any, in respect of the EMPLOYEE.");
                    if (r) { } else {
                        return false;
                    }
                }
            }
            debugger
             function startTimer()
            {
    
                 var timer = $find("Timer1");
                 Sys.Debug.trace(timer.get_interval());
                 timer.set_interval(100);
                Sys.Debug.trace(timer.get_interval());
                var timer = $find("Timer1");
                timer._startTimer();
            }
             //Except only numbers for textbox
        function onlyNumbers(event) {
            var charCode = (event.which) ? event.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;

            return true;
        }
        </script>

        <table width="100%" border="0" cellpadding="2" cellspacing="0">
            <tbody><tr id="ctl00_HomePageContent_trsubunit" class="lastData_Section">
				<td valign="top" align="left" class="contentTabletd">
                    <div id="ctl00_HomePageContent_UpdatePanel1">
					
                            <table width="100%" border="0" cellpadding="2" cellspacing="0" class="formlevel">
                                <tbody><tr>
                                    <td class="pageHeader" colspan="4">
                                        <table width="100%">
                                            <tbody><tr>
                                                <td class="pageHeaderText">
                                                    Track Registered Employees
                                                </td>
                                                <td valign="bottom" class="mandatoryField">
                                                    &nbsp;
                                                </td>
                                                <td>
                                                    <span id="ctl00_HomePageContent_lblErrorMsg"></span>
                                                    <span id="ctl00_HomePageContent_lblmodal"></span>
                                                    <span id="ctl00_HomePageContent_Label2"></span>
                                                </td>
                                            </tr>
                                        </tbody></table>
                                    </td>
                                </tr>
                                <tr align="center">
                                    <td>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td class="lastFormValue" colspan="4">
                                        &nbsp;
                                        
                                        <span class="errordisplay" id="diverror" style="display: none">Employee's Insurance
                                        No. Field Cannot be Empty.
                                    </span></td>
                                </tr>
                            </tbody></table>
                            <div id="ctl00_HomePageContent_pnlEmprCode">
						
                                    </div><table width="100%" border="0" cellpadding="2" cellspacing="0" class="formlevel border">
                                <tbody><tr>
                                    <td class="leftTopFormLabelgrid" colspan="4">
                                        <div>

					</div>
                                    </td>
                                </tr>
                                <tr class="lastData_Section" id="trGetEmprNo">
                                        <td colspan="2" class="leftTopFormLabel">
                                            Employer/Subunit Code No:<span class="mandatoryField">*</span>
                                        </td>
                                        <td colspan="2" class="lastFormValue">
                                            <input name="ctl00$HomePageContent$txtEmployerCode" type="text" value="<?php echo session('emp_code'); ?>" maxlength="17" id="ctl00_HomePageContent_txtEmployerCode" disabled="disabled" class="txtbox numericAlignRight" onkeyup="checkNumerOnly(this)">
                                            <span id="ctl00_HomePageContent_rfvEmployerCode" style="color:Red;display:none;">Please Enter Employer/Subunit Code No</span>
                                            
                                        </td>
                                    </tr>
                                
					
                                <tr class="lastData_Section" id="RowForNew">
                                    <td class="leftTopFormLabel" colspan="2" width="40%">
                                        Was the Employee ever allotted a ESI Number?**:
                                    </td>
                                    <td class="lastFormValue" colspan="2" width="60%">
                                        <span id="ctl00_HomePageContent_ctrlLblCount" class="pageHeaderText" style="color:Red;"></span>
                                        <table id="ctl00_HomePageContent_rbtnlistIsregistered" onchange="javascript:return SubmitConfirm();" border="0">
						<tbody><tr>
							<td><input id="ctl00_HomePageContent_rbtnlistIsregistered_0" type="radio" name="ctl00$HomePageContent$rbtnlistIsregistered" value="0" checked="checked"><label for="ctl00_HomePageContent_rbtnlistIsregistered_0">Yes</label></td><td><input id="ctl00_HomePageContent_rbtnlistIsregistered_1" type="radio" name="ctl00$HomePageContent$rbtnlistIsregistered" value="1" onclick="javascript:setTimeout('__doPostBack(\'ctl00$HomePageContent$rbtnlistIsregistered$1\',\'\')', 0)"><label for="ctl00_HomePageContent_rbtnlistIsregistered_1">No</label></td>
						</tr>
					</tbody></table>
                                    </td>
                                </tr>
                            </tbody></table>
                            
                            
                            
                            
                            <div id="ctl00_HomePageContent_pnlEnterDetails">
						
                                <table width="100%" border="0" cellpadding="2" cellspacing="0" class="internalTable3">
                                    <tbody><tr>
                                        <td colspan="4" class="sectionHeader">
                                            Enter Details
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="leftTopFormLabel" width="40%">
                                            Employee's Insurance No:<span class="mandatoryField">*</span>
                                        </td>
                                        <td colspan="2" class="lastFormValue" width="60%">
                                            <input value="<?php echo $ip_number ?? ''; ?>" name="ctl00$HomePageContent$ctrlTxtIPNumber" type="text" maxlength="10" id="ctl00_HomePageContent_ctrlTxtIPNumber" class="txtbox numericAlignRight" onkeyup="checkNumerOnly(this)" onchange="checkIP(this)">
                                            <span id="ctl00_HomePageContent_RequiredFieldValidator1" class="errordisplay" style="color:Red;"><?php echo $ip_required ?? ''; ?></span>
                                            <span id="ctl00_HomePageContent_RegularExpressionValidator2" class="errordisplay" style="color:Red;"><?php echo $ip_digit ?? ''; ?></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="leftTopFormLabel" width="40%">
                                            Date of Appointment:<span class="mandatoryField">*</span>
                                        </td>
                                        <td colspan="2" class="lastFormValue" width="60%">
                                            <input name="ctl00$HomePageContent$ctrlTxtAppointmentDate" type="text" maxlength="10" id="ctl00_HomePageContent_ctrlTxtAppointmentDate" class="txtbox_mid numericAlignRight" autocomplete="Off" onkeypress="return false;">
                                            
                                            <span id="ctl00_HomePageContent_RequiredFieldValidator2" class="errordisplay" style="color:Red;"><?php echo $date_required ?? ''; ?></span>
                                            <span id="ctl00_HomePageContent_rev_ctrlTxtAppointmentDate" style="color:Red;visibility:hidden;">Please check date format(dd/mm/yyyy)</span>
                                            <span id="ctl00_HomePageContent_lblerrTrckDOA" style="color:Red;"></span>
                                            <input type="hidden" name="ctl00$HomePageContent$hfErrTrckDOA" id="ctl00_HomePageContent_hfErrTrckDOA">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="lastFormValue" colspan="4">
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td cla="" ss="lastFormValue" colspan="4">

 <span id="ctl00_HomePageContent_lblfooterIPMessage" style="color:Red;font-weight:bold;">**
 One IP, One Insurance Number, One Nation. An employee shall have only 
One ESI Insurance Number in his/her lifetime irrespective of number of 
change of employment or Employer.</span> <br><br>
                                            <span id="ctl00_HomePageContent_lblfooterMessage" style="color:Red;font-weight:bold;">As
 per the provisions of Regulation 10B read with Regulation 11 &amp; 12 
of the Employees` State Insurance (General) Regulation, 1950, 
Registration of an employee is required to be done within 10 days from  
the Date of Appointment. Where, the Date of Registration of an employee 
is more than 10 days from the date of Appointment, the matter may be 
forwarded to the concerned RO/SRO for examination/verification. Until 
then, the date of registration shall be treated  as the date of 
appointment.</span>
                                        </td>
                                    </tr>
                                </tbody></table>
                            
					</div>
                            <div class="pagesubmission" style="text-align: center">
                                <div class="primary">
                                    <input type="submit" name="ctl00$HomePageContent$btnContinue" value="Continue" onclick='javascript:return SubmitContinue();WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions("ctl00$HomePageContent$btnContinue", "", true, "", "", false, false))' id="ctl00_HomePageContent_btnContinue" class="btn" onkeydown="if (event.keyCode == 13) document.getElementById('ctl00_HomePageContent_btnContinue').click()">
                                    <input type="submit" name="ctl00$HomePageContent$button" value="Close" onclick="window.close();" id="ctl00_HomePageContent_button" title="Go back to Main Menu" class="btn" onkeydown="if (event.keyCode == 13) document.getElementById('ctl00_HomePageContent_button').click()">
                                </div>
                            </div>
                            <table width="100%" border="0" cellpadding="2" cellspacing="0" id="Table5" class="internalTable3">
                                <tbody><tr class="lastData_Section" id="Tr11">
                                    <td colspan="4" class="leftTopFormLabel">
                                        <span id="ctl00_HomePageContent_ctrlLblCount1" class="pageHeaderText" style="color:Blue;"></span>
                                        <br>
                                        
                                        <span id="ctl00_HomePageContent_ctrlLblCount2" class="pageHeaderText" style="color:Red;"></span>
                                    </td>
                                </tr>
                            </tbody></table>
                            
                            
                            
                            
                            
                            
                            
                            <div id="ctl00_HomePageContent_panMessage" style="width: 70%; display: none; position: fixed; z-index: 100001;">
						
                                <table class="internalTable" border="0" cellpadding="2" cellspacing="0">
                                    <tbody><tr>
                                        <td class="leftTopFormLabelgrid">
                                            rned RO/SRO after due 
verification of relevant records. Until then, the date of
                                            registration shall be deemed
 as the date of appointment. Please submit the relevant
                                            records/documents to the 
designated RO/SRO within 15 days in the prescribed format.
                                            Please also take note that 
in case of failure to do the needful, the date of registration
                                            will be treated as the date 
of appointment, for all purposes.<br>
                                            <br>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="pageFooter1">
                                            <input type="submit" name="ctl00$HomePageContent$btnAgree" value="I Agree" onclick='javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions("ctl00$HomePageContent$btnAgree", "", true, "", "", false, false))' id="ctl00_HomePageContent_btnAgree" title="Close" class="btn">
                                            <input type="submit" name="ctl00$HomePageContent$Button1" value="Cancel" onclick='ClosePopup();WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions("ctl00$HomePageContent$Button1", "", true, "", "", false, false))' id="ctl00_HomePageContent_Button1" title="Close" class="btn">
                                        </td>
                                    </tr>
                                </tbody></table>
                            
					</div>
                            <div id="ctl00_HomePageContent_Panel3" style="width: 70%; display: none; position: fixed; z-index: 100001;">
						
                                <table class="internalTable" border="0" cellpadding="2" cellspacing="0">
                                    <tbody><tr>
                                        <td class="leftTopFormLabelgrid">
                                            <span id="ctl00_HomePageContent_lblpopup"></span>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="pageFooter1">
                                            <input type="submit" name="ctl00$HomePageContent$btncancel" value="Back" onclick='javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions("ctl00$HomePageContent$btncancel", "", true, "", "", false, false))' id="ctl00_HomePageContent_btncancel" title="Close" class="btn">
                                            <input type="submit" name="ctl00$HomePageContent$btnmobile" value="Proceed" onclick='javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions("ctl00$HomePageContent$btnmobile", "", true, "", "", false, false))' id="ctl00_HomePageContent_btnmobile" title="Close" class="btn">
                                        </td>
                                    </tr>
                                </tbody></table>
                            
					</div>
                        
				<div id="behUserDetail_backgroundElement" style="display: none; position: fixed; left: 0px; top: 0px; z-index: 10000;" class="modalBackground"></div><div id="behUserDetail1_backgroundElement" style="display: none; position: fixed; left: 0px; top: 0px; z-index: 10000;" class="modalBackground"></div></div>
                    <div id="ctl00_HomePageContent_UpdateProgress1" style="display:none;">
					
                            <iframe frameborder="0" src="../../public/assets/esi/woaadhar/a.html" style="border: 0px; position: absolute;
                                z-index: 9; left: 0px; top: 0px; width: expression(this.offsetParent.scrollWidth);
                                height: expression(this.offsetParent.scrollHeight); filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100, FinishOpacity=0, Style=0, StartX=0, FinishX=100, StartY=0, FinishY=100);">
                            </iframe>
                            <div style="position: absolute; z-index: 10; left: expression((this.offsetParent.clientWidth/2)-(this.clientWidth/2)+this.offsetParent.scrollLeft);
                                top: expression((this.offsetParent.clientHeight/2)-(this.clientHeight/2)+this.offsetParent.scrollTop);">
                                Please Wait...<br>
                                <img src="../../public/assets/esi/woaadhar/PleaseWait.gif">
                            </div>
                        
				</div>
                </td>
			</tr>
			
            
        </tbody></table>
    
		</div>
    <input type="hidden" name="ctl00$HomePageContent$hdncurrentdate" id="ctl00_HomePageContent_hdncurrentdate" value="12/06/2024">

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
var Page_Validators =  new Array(document.getElementById("ctl00_HomePageContent_rfvEmployerCode"), document.getElementById("ctl00_HomePageContent_RequiredFieldValidator1"), document.getElementById("ctl00_HomePageContent_RegularExpressionValidator2"), document.getElementById("ctl00_HomePageContent_RequiredFieldValidator2"), document.getElementById("ctl00_HomePageContent_rev_ctrlTxtAppointmentDate"));
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
var ctl00_HomePageContent_RequiredFieldValidator1 = document.all ? document.all["ctl00_HomePageContent_RequiredFieldValidator1"] : document.getElementById("ctl00_HomePageContent_RequiredFieldValidator1");
ctl00_HomePageContent_RequiredFieldValidator1.controltovalidate = "ctl00_HomePageContent_ctrlTxtIPNumber";
ctl00_HomePageContent_RequiredFieldValidator1.focusOnError = "t";
ctl00_HomePageContent_RequiredFieldValidator1.errormessage = "Please Enter I.P.No";
ctl00_HomePageContent_RequiredFieldValidator1.display = "Dynamic";
ctl00_HomePageContent_RequiredFieldValidator1.validationGroup = "Trackemployees";
ctl00_HomePageContent_RequiredFieldValidator1.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl00_HomePageContent_RequiredFieldValidator1.initialvalue = "";
var ctl00_HomePageContent_RegularExpressionValidator2 = document.all ? document.all["ctl00_HomePageContent_RegularExpressionValidator2"] : document.getElementById("ctl00_HomePageContent_RegularExpressionValidator2");
ctl00_HomePageContent_RegularExpressionValidator2.controltovalidate = "ctl00_HomePageContent_ctrlTxtIPNumber";
ctl00_HomePageContent_RegularExpressionValidator2.errormessage = "Please Enter Only Digits";
ctl00_HomePageContent_RegularExpressionValidator2.display = "Dynamic";
ctl00_HomePageContent_RegularExpressionValidator2.enabled = "False";
ctl00_HomePageContent_RegularExpressionValidator2.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
ctl00_HomePageContent_RegularExpressionValidator2.validationexpression = "^[0-9]{1,45}$";
var ctl00_HomePageContent_RequiredFieldValidator2 = document.all ? document.all["ctl00_HomePageContent_RequiredFieldValidator2"] : document.getElementById("ctl00_HomePageContent_RequiredFieldValidator2");
ctl00_HomePageContent_RequiredFieldValidator2.controltovalidate = "ctl00_HomePageContent_ctrlTxtAppointmentDate";
ctl00_HomePageContent_RequiredFieldValidator2.focusOnError = "t";
ctl00_HomePageContent_RequiredFieldValidator2.errormessage = "Please Enter Appointment Date";
ctl00_HomePageContent_RequiredFieldValidator2.display = "Dynamic";
ctl00_HomePageContent_RequiredFieldValidator2.validationGroup = "Trackemployees";
ctl00_HomePageContent_RequiredFieldValidator2.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl00_HomePageContent_RequiredFieldValidator2.initialvalue = "";
var ctl00_HomePageContent_rev_ctrlTxtAppointmentDate = document.all ? document.all["ctl00_HomePageContent_rev_ctrlTxtAppointmentDate"] : document.getElementById("ctl00_HomePageContent_rev_ctrlTxtAppointmentDate");
ctl00_HomePageContent_rev_ctrlTxtAppointmentDate.controltovalidate = "ctl00_HomePageContent_ctrlTxtAppointmentDate";
ctl00_HomePageContent_rev_ctrlTxtAppointmentDate.focusOnError = "t";
ctl00_HomePageContent_rev_ctrlTxtAppointmentDate.errormessage = "Please check date format(dd/mm/yyyy)";
ctl00_HomePageContent_rev_ctrlTxtAppointmentDate.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
ctl00_HomePageContent_rev_ctrlTxtAppointmentDate.validationexpression = "^(((0[1-9]|[12]\\d|3[01])\\/(0[13578]|1[02])\\/((19|[2-9]\\d)\\d{2}))|((0[1-9]|[12]\\d|30)\\/(0[13456789]|1[012])\\/((19|[2-9]\\d)\\d{2}))|((0[1-9]|1\\d|2[0-8])\\/02\\/((19|[2-9]\\d)\\d{2}))|(29\\/02\\/((1[6-9]|[2-9]\\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$";
//]]>
</script>


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
        WebForm_AutoFocus('ctl00_HomePageContent_txtEmployerCode');Sys.Application.initialize();

document.getElementById('ctl00_HomePageContent_rfvEmployerCode').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_HomePageContent_rfvEmployerCode'));
}

document.getElementById('ctl00_HomePageContent_RequiredFieldValidator1').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_HomePageContent_RequiredFieldValidator1'));
}

document.getElementById('ctl00_HomePageContent_RegularExpressionValidator2').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_HomePageContent_RegularExpressionValidator2'));
}
Sys.Application.add_init(function() {
    $create(AjaxControlToolkit.CalendarBehavior, {"format":"dd/MM/yyyy","id":"ctl00_HomePageContent_cEDOA"}, {"dateSelectionChanged":check_Date}, null, $get("ctl00_HomePageContent_ctrlTxtAppointmentDate"));
});

document.getElementById('ctl00_HomePageContent_RequiredFieldValidator2').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_HomePageContent_RequiredFieldValidator2'));
}

document.getElementById('ctl00_HomePageContent_rev_ctrlTxtAppointmentDate').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_HomePageContent_rev_ctrlTxtAppointmentDate'));
}
Sys.Application.add_init(function() {
    $create(AjaxControlToolkit.ModalPopupBehavior, {"BackgroundCssClass":"modalBackground","PopupControlID":"ctl00_HomePageContent_panMessage","dynamicServicePath":"/InsuranceGlobalWebV4/Employee/RegisteredEmployees.aspx","id":"behUserDetail"}, null, null, $get("ctl00_HomePageContent_lblmodal"));
});
Sys.Application.add_init(function() {
    $create(AjaxControlToolkit.ModalPopupBehavior, {"BackgroundCssClass":"modalBackground","PopupControlID":"ctl00_HomePageContent_Panel3","dynamicServicePath":"/InsuranceGlobalWebV4/Employee/RegisteredEmployees.aspx","id":"behUserDetail1"}, null, null, $get("ctl00_HomePageContent_Label2"));
});
Sys.Application.add_init(function() {
    $create(Sys.UI._UpdateProgress, {"associatedUpdatePanelId":"ctl00_HomePageContent_UpdatePanel1","displayAfter":500,"dynamicLayout":true}, null, null, $get("ctl00_HomePageContent_UpdateProgress1"));
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