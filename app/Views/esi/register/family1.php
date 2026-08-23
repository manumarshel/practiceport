<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head id="ctl00_Head1">
<meta http-equiv="content-type" content="text/html; charset=UTF-8"><title>
	FamilyDetails
</title><link media="screen" href="../../public/assets/esi/family/layout.css" rel="stylesheet" type="text/css"><link rel="stylesheet" type="text/css" href="../../public/assets/esi/family/CSSglobal.css"><link rel="stylesheet" type="text/css" href="../../public/assets/esi/family/csstaskhome.css">
    <!-- base href="https://www.esic.in/InsuranceGlobalWebV4/Employee/FamilyDetails_New.aspx" -->

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
   


<script type="text/Javascript" language="javascript" src="../../public/assets/esi/family/esic.js"></script>
<link href="../../public/assets/esi/family/WebResource.css" type="text/css" rel="stylesheet"></head>
<body onload="rightclickControl()" onunload="closeAll()" oncontextmenu="return false" data-new-gr-c-s-check-loaded="8.912.0" data-gr-ext-installed="">
<div id="minHeight"></div>
    <form name="aspnetForm" method="post" action="family-details" onsubmit="javascript:return WebForm_OnSubmit();" onkeypress="javascript:return WebForm_FireDefaultButton(event, 'ctl00_Test')" id="aspnetForm">
<div>
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
<input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value="">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKMTczOTM4NjA4OBAWAh4Ecm9sZQUBN2QWAmYPZBYCAgEPZBYGAgEPZBYCAgEPZBYCZg9kFgJmD2QWAmYPZBYEAgEPZBYCZg8PFgIeBFRleHQFETU0MDAwMjQ5MDcwMDAwOTk5ZGQCAw9kFgQCAg8WAh4HVmlzaWJsZWhkAgQPFgIfAmhkAgMPZBYEZg9kFgJmD2QWAgIBDzwrAA0BAA8WAh8CaGRkAgEPZBYCZg9kFgJmD2QWAgIBD2QWAgIBD2QWAmYPZBYOAgEPDxYCHwFlZGQCBQ88KwANAQAPFgQeC18hRGF0YUJvdW5kZx4LXyFJdGVtQ291bnRmZGQCFw8QZGQWAWZkAhsPEGRkFgBkAiUPEGRkFgFmZAIvDw8WAh8BZWRkAj0PDxYCHwJnZGQCBQ9kFgJmD2QWAmYPZBYEAgEPDxYCHwEFEUlQIEFkZHJlc3MgOiA0NC4gZGQCAg8PFgIfAQUpQVNQIFNlc3Npb24gSUQgOiB2YXBldWx6c3JtdnF6YTU1M3g1bmt2MjFkZBgBBSNjdGwwMCRIb21lUGFnZUNvbnRlbnQkR3JpZHZpZXdJc3N1ZQ88KwAKAgYVAQlSb3dOdW1iZXIIZmQ=">
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


<script src="../../public/assets/esi/family/WebResource.js" type="text/javascript"></script>


<script src="../../public/assets/esi/family/ScriptResource_005.js" type="text/javascript"></script>
<script src="../../public/assets/esi/family/ScriptResource_002.js" type="text/javascript"></script>
<script src="../../public/assets/esi/family/ScriptResource_004.js" type="text/javascript"></script>
<script src="../../public/assets/esi/family/ScriptResource_006.es" type="text/javascript"></script>
<script src="../../public/assets/esi/family/ScriptResource_004.es" type="text/javascript"></script>
<script src="../../public/assets/esi/family/ScriptResource_005.es" type="text/javascript"></script>
<script src="../../public/assets/esi/family/ScriptResource.js" type="text/javascript"></script>
<script src="../../public/assets/esi/family/ScriptResource_008.es" type="text/javascript"></script>
<script src="../../public/assets/esi/family/ScriptResource_007.es" type="text/javascript"></script>
<script src="../../public/assets/esi/family/ScriptResource.es" type="text/javascript"></script>
<script src="../../public/assets/esi/family/ScriptResource_003.es" type="text/javascript"></script>
<script src="../../public/assets/esi/family/ScriptResource_003.js" type="text/javascript"></script>
<script src="../../public/assets/esi/family/ScriptResource_002.es" type="text/javascript"></script>
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
		<td class="tHeadImage" align="left"><img id="ctl00_ESICLogo" src="../../public/assets/esi/family/Small%20Logo.jpg" align="absmiddle" style="border-width:0px;"></td><td class="tHeadImage" align="center"></td><td class="tHeadImage" align="right"><img id="ctl00_Image1" src="../../public/assets/esi/family/IndianSymbol.jpg" align="absmiddle" style="border-width:0px;"></td>
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
<script type="text/javascript">
//<![CDATA[
//Sys.WebForms.PageRequestManager._initialize('ctl00$HomePageContent$ScriptManager1', document.getElementById('aspnetForm'));
//Sys.WebForms.PageRequestManager.getInstance()._updateControls(['tctl00$HomePageContent$UpdatePanel1'], [], [], 90);
		//]]>
</script>

    <script src="../../public/assets/esi/family/stateDist.js" type="text/javascript"></script>

    <script src="../../public/assets/esi/family/jquery1.js" type="text/javascript">
    </script>

    <script type="text/javascript" src="../../public/assets/esi/family/jquery.min.js"></script>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

    <script type="text/javascript" src="../../public/assets/esi/family/jquery.maskedinput-1.3.js"></script>

    <script type="text/javascript" language="JavaScript">

        function clearHiddenvalue() {
            document.getElementById("ctl00_HomePageContent_hidpermenantState").value = "";
            document.getElementById("ctl00_HomePageContent_hiddenpermenantdistrict").value = "";
        }

        function checkFutureDate(sender, args) {
            if (sender._selectedDate > new Date()) {
                sender._textbox.set_Value("");
                alert("Future date is not allowed");
                sender._selectedDate = new Date();
            }
        }

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

    <script language="javascript" type="text/javascript">

        function valid(btnAdd, rbtn, ddlsts, ddldis) {
            return false;
            var Yrbutton = document.getElementById(btnAdd.substring(0, btnAdd.lastIndexOf('_') + 1) + rbtn + '_0');
            var Nrbutton = document.getElementById(btnAdd.substring(0, btnAdd.lastIndexOf('_') + 1) + rbtn + '_1');
            var ddlstate = document.getElementById(btnAdd.substring(0, btnAdd.lastIndexOf('_') + 1) + ddlsts);
            var ddldist = document.getElementById(btnAdd.substring(0, btnAdd.lastIndexOf('_') + 1) + ddldis);

            if (Yrbutton.checked) {
                ddlstate.disabled = true;
                ddldist.disabled = true;
                loadpermanentstates();
                ddlstate.options[0].selected = true;
                ddldist.options[0].selected = true;
            }
            else {

                ddlstate.disabled = false;
                ddldist.disabled = false;
                loadpermanentstates();
                ddlstate.options[0].selected = true;
                ddldist.options[0].selected = true;
            }
        }

        function assignDis(ddlGender, ddlsts, ddldis) {

            var Yrbutton = document.getElementById(ddlGender + '_0');
            var Nrbutton = document.getElementById(ddlGender + '_1');
            var ddlstate = document.getElementById(ddlGender.substring(0, ddlGender.lastIndexOf('_') + 1) + ddlsts);
            var ddldist = document.getElementById(ddlGender.substring(0, ddlGender.lastIndexOf('_') + 1) + ddldis);

            if (Yrbutton.checked) {
                ddlstate.disabled = true;
                ddldist.disabled = true;
                document.getElementById("ctl00_HomePageContent_hidpermenantStateName").value = "";
                document.getElementById("ctl00_HomePageContent_hiddenpermenantdistrictName").value = "";
                ddlstate.options[0].selected = true;
                ddldist.options[0].selected = true;
            }
            else {

                ddlstate.disabled = false;
                ddldist.disabled = false;
                loadpermanentstates();
                ddlstate.options[0].selected = true;
                ddldist.options[0].selected = true;
            }

        }
        function selectPermanentStates() {

            var selectedval = document.getElementById("ctl00_HomePageContent_ctrlTextPermanentState").selectedIndex - 1;

            document.getElementById("ctl00_HomePageContent_hidpermenantState").value = states[selectedval][1];
            document.getElementById("ctl00_HomePageContent_hidpermenantState1").value = selectedval;
            document.getElementById("ctl00_HomePageContent_hidpermenantStateName").value = states[selectedval][0];
            var distElem = document.getElementById("ctl00_HomePageContent_ctrlTextPermanentDistrict");

            if (selectedval >= 0) {
                var j = 0;
                clearpermanentDistricts();
                distElem.options[j] = new Option("---Please Select---"); j++;
                for (var i = 0; i < districts[selectedval].length; i++) {
                    distElem.options[j] = new Option(districts[selectedval][i][0]);
                    j++;
                }
            }
        }
        function clearpermanentDistricts() {

            for (var i = (document.getElementById("ctl00_HomePageContent_ctrlTextPermanentDistrict")).options.length - 1; i >= 1; i--) {
                document.getElementById("ctl00_HomePageContent_ctrlTextPermanentDistrict").options[i] = null;

            }
        }

        function selectpermanentDistrict() {
            var distselectedindx = document.getElementById("ctl00_HomePageContent_ctrlTextPermanentDistrict").selectedIndex - 1;

            var stateselectedindx = document.getElementById("ctl00_HomePageContent_ctrlTextPermanentState").selectedIndex - 1;


            document.getElementById("ctl00_HomePageContent_hiddenpermenantdistrict").value = districts[stateselectedindx][distselectedindx][1];
            document.getElementById("ctl00_HomePageContent_hiddenpermenantdistrict1").value = distselectedindx;
            document.getElementById("ctl00_HomePageContent_hiddenpermenantdistrictName").value = districts[stateselectedindx][distselectedindx][0];

        }
        function loadpermanentstates() {
            var statesdd = document.getElementById("ctl00_HomePageContent_ctrlTextPermanentState");
            var Districtsdd = document.getElementById("ctl00_HomePageContent_ctrlTextPermanentDistrict");
            var j = 0;
            statesdd.options[j] = new Option("---Please Select---");

            j++;
            for (i = 0; i < states.length; i++) {
                statesdd.options[j] = new Option(states[i][0]);
                j++;
            }

        }

        function Check_Click(objRef) {
            //Get the Row based on checkbox

            var key;
            if (window.event) {

                key = window.event.keyCode;     //IE
            }
            else {

                key = event.which;     //firefox
            }
            var row = objRef.parentNode.parentNode;
            var removeBtn = document.getElementById(gv.substring(0, gv.lastIndexOf('_') + 1) + rem);


            //Get the reference of GridView
            var GridView = row.parentNode;

            //Get all input elements in Gridview
            var inputList = GridView.getElementsByTagName("input");
            var count = 0;
            for (var i = 1; i < inputList.length; i++) {
                //The First element is the Header Checkbox
                var headerCheckBox = inputList[0];

                var checked = true;
                if (inputList[i].type == "checkbox" && inputList[i] != headerCheckBox) {
                    if (!inputList[i].checked) {
                        checked = false;
                        break;
                    }
                }

            }

            for (var i = 1; i < inputList.length; i++) {
                if (inputList[i].type == "checkbox" && inputList[i] != headerCheckBox) {
                    if (inputList[i].checked) {
                        count = 2;

                    }

                    if (count == 0) {
                        removeBtn.style.display = 'none';
                    }
                    else {
                        removeBtn.style.display = 'inline';
                    }

                }

            }
            headerCheckBox.checked = checked;



        }
        function CheckTabVal(e) {
            return (e.keyCode == 9 || e.keyCode == 8);
        }
        function num(e) {
            if (e.shiftKey == 1 || e.altkey == 1)
            { return false; }
            var k;
            document.all ? k = e.keyCode : k = e.which;
            return ((k > 47 && k < 58) || k == 46 || k == 26 || k == 27 || k == 8 || k == 37 || k == 39 || k == 0);
        }
        function checkAll(objRef) {

            var GridView = objRef.parentNode.parentNode.parentNode;
            var removeBtn = document.getElementById('ctl00_HomePageContent_ctrlButtonRemove');

            var inputList = GridView.getElementsByTagName("input");
            for (var i = 0; i < inputList.length; i++) {
                var row = inputList[i].parentNode.parentNode;
                if (inputList[i].type == "checkbox" && objRef != inputList[i]) {
                    if (objRef.checked) {


                        inputList[i].checked = true;
                        removeBtn.style.display = 'inline';

                    }
                    else {

                        // inputList[i].checked = false;
                        // removeBtn.style.display = 'none';
                    }
                }
            }
        }      
        
    </script>

    
        <table width="100%" align="center" cellpadding="0" cellspacing="0" rules="none">
            <tbody><tr class="lastData_Section">
                <td valign="top" class="contentTabletd" align="left">
                    <div id="ctl00_HomePageContent_UpdatePanel1">
			
                            <table width="100%" border="0" cellpadding="2" cellspacing="0" class="internalTable">
                                <tbody><tr>
                                    <td class="pageHeader" colspan="8">
                                        <table width="100%">
                                            <tbody><tr>
                                                <td class="pageHeaderText">
                                                    Add Family Particulars Of Insured Person - Form 1A
                                                </td>
                                                <td valign="bottom" class="mandatoryField">
                                                    *Required Fields
                                                </td>
                                            </tr>
                                        </tbody></table>
                                    </td>
                                </tr>
                                <tr id="RowCreate">
                                    <td colspan="8" class="sectionHeader">
                                        
                                        <span id="ctl00_HomePageContent_rev_ctrlTxtIpDate" style="color:Red;visibility:hidden;">Please check date format(dd/mm/yyyy)</span>
                                    </td>
                                </tr>
                            </tbody></table>
                            <h2 class="leftTopFormLabelgrid">
                                Family Details
                            </h2>
                            <div>
                            <table cellspacing="0" rules="all" border="1" id="ctl00_HomePageContent_GridviewIssue" style="border-width:1px;border-style:Solid;width:100%;border-collapse:collapse;">
		<tbody><tr>
			<td class="leftTopFormLabel" colspan="1">Remove <input id="changeCheckStateId" onclick="checkAll(this);" runat="server" type="checkbox"></td><td class="leftTopFormLabel" colspan="1">Name<span class="mandatoryField">*</span></td><td class="leftTopFormLabel" colspan="1">Date of Birth<span class="mandatoryField">*</span></td><td class="leftTopFormLabel" colspan="1">Relationship with the Employee<span class="mandatoryField">*</span></td><td class="leftTopFormLabel" colspan="1">Whether Residing with Him / Her?</td><td class="leftTopFormLabel" colspan="1">State</td><td class="leftTopFormLabel" colspan="1">District</td>
		</tr>
        <?php 
        $familyRelationOptions = [
            "1"  => "Spouse",
            "2"  => "Minor dependant son",
            "3"  => "Dependant unmarried daughter",
            "4"  => "Dependant son receiving education",
            "5"  => "Dependant infirm son",
            "6"  => "Dependant infirm unmarried daughter",
            "7"  => "Dependant father",
            "8"  => "Dependant mother",
            "39" => "Brother",
            "40" => "Sister",
            "41" => "DEPENDANT SON- RECEIVING EDUCATION",
            "99" => "Others"
        ];
        
        ?>
        <?php foreach ($family as $familySingle) { ?>
        <tr>
			<td class="lastFormValue" style="width:10px;">
                                            <span title="0" onchange="Check_Click(this)"><input id="ctl00_HomePageContent_GridviewIssue_ctl03_CheckBx" type="checkbox" name="ctl00$HomePageContent$GridviewIssue$ctl03$CheckBx"></span>
                                            <input type="hidden" name="ctl00$HomePageContent$GridviewIssue$ctl03$HideData" id="ctl00_HomePageContent_GridviewIssue_ctl03_HideData">
                                            <input type="hidden" name="ctl00$HomePageContent$GridviewIssue$ctl03$hfCapturedphoto" id="ctl00_HomePageContent_GridviewIssue_ctl03_hfCapturedphoto">
                                            <input type="hidden" name="ctl00$HomePageContent$GridviewIssue$ctl03$hfstatus" id="ctl00_HomePageContent_GridviewIssue_ctl03_hfstatus">
                                            <input type="hidden" name="ctl00$HomePageContent$GridviewIssue$ctl03$HideDataID" id="ctl00_HomePageContent_GridviewIssue_ctl03_HideDataID">
                                        </td><td class="lastFormValue" style="width:150px;">
                                            <span id="ctl00_HomePageContent_GridviewIssue_ctl03_lblName"><?php echo $familySingle['name']; ?></span>
                                        </td><td class="lastFormValue" style="width:100px;">
                                            <span id="ctl00_HomePageContent_GridviewIssue_ctl03_lblDob"><?php echo $familySingle['dob']; ?></span>
                                        </td><td class="lastFormValue" style="width:150px;">
                                            <span id="ctl00_HomePageContent_GridviewIssue_ctl03_lblRelation"><?php echo $familyRelationOptions[$familySingle['relation']] ?? ''; ?></span>
                                        </td><td class="lastFormValue" style="width:100px;">
                                            <span id="ctl00_HomePageContent_GridviewIssue_ctl03_lblResiding"><?php echo $familySingle['residing']; ?></span>
                                        </td><td class="lastFormValue" style="width:150px;">
                                            <span id="ctl00_HomePageContent_GridviewIssue_ctl03_lblStates"><?php echo $familySingle['state']; ?></span>
                                        </td><td class="lastFormValue" style="width:150px;">
                                            <span id="ctl00_HomePageContent_GridviewIssue_ctl03_lblDistricts"><?php echo $familySingle['district']; ?></span>
                                        </td>
		</tr>
        <?php } ?>
	</tbody></table>
			</div>
                            <br>
                            <h2 class="leftTopFormLabelgrid">
                                Add Family Particulars
                            </h2>
                            <table width="100%" border="0" cellpadding="2" cellspacing="0" class="internalTable">
                                <tbody><tr align="center">
                                    <td class="leftTopFormLabelgrid">
                                        Name<span class="mandatoryField">*</span>
                                    </td>
                                    <td class="leftTopFormLabelgrid">
                                        Date of Birth<span class="mandatoryField">*</span>
                                    </td>
                                    <td class="leftTopFormLabelgrid">
                                        Relationship with the Employee<span class="mandatoryField">*</span>
                                    </td>
                                    <td class="leftTopFormLabelgrid">
                                        Whether Residing with Him / Her?
                                    </td>
                                    <td colspan="2" class="leftTopFormLabelgrid">
                                        If No,State Place of Residence
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td class="leftTopFormLabelgrid">
                                        <input name="ctl00$HomePageContent$txtName" type="text" maxlength="45" id="ctl00_HomePageContent_txtName" tabindex="1" class="txtbox">
                                        <span id="ctl00_HomePageContent_RequiredFieldValidatorName" class="errordisplay" style="color:Red;display:none;">Please Enter Name</span>
                                        
                                    </td>
                                    <td class="leftTopFormLabelgrid">
                                        <input name="ctl00$HomePageContent$CtrlDOB" type="text" maxlength="10" id="ctl00_HomePageContent_CtrlDOB" tabindex="2" class="txtbox_mid numericAlignRight" onkeypress="return CheckTabVal(event)">
                                        
                                        <span id="ctl00_HomePageContent_errorLabel" style="color:Red;"></span>
                                        <input type="hidden" name="ctl00$HomePageContent$hfErrEmpeDOB" id="ctl00_HomePageContent_hfErrEmpeDOB">
                                        <span id="ctl00_HomePageContent_DOBRequiredVal" class="errordisplay" style="color:Red;display:none;">Please Enter A Valid Date (dd/mm/yyyy)</span>
                                    </td>
                                    <td class="leftTopFormLabelgrid">
                                        <select name="ctl00$HomePageContent$CtrlRelation" onchange="" id="ctl00_HomePageContent_CtrlRelation" tabindex="3" class="txtbox">
				<option selected="selected" value="-1">---Please Select---</option>
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
                                        <span id="ctl00_HomePageContent_RequiredFieldValidator1" class="errordisplay" style="color:Red;display:none;">Please Select Relation</span>
                                        
                                        <span id="ctl00_HomePageContent_rfvCtrlTrans" class="errordisplay" style="color:Red;display:none;"></span>
                                    </td>
                                    <td class="leftTopFormLabelgrid">
                                        <table id="ctl00_HomePageContent_ctrlRDIpDisable" onclick="assignDis(this.id,'ctrlTextPermanentState','ctrlTextPermanentDistrict');" border="0">
				<tbody><tr>
					<td><input id="ctl00_HomePageContent_ctrlRDIpDisable_0" type="radio" name="ctl00$HomePageContent$ctrlRDIpDisable" value="Yes" tabindex="4"><label for="ctl00_HomePageContent_ctrlRDIpDisable_0">Yes</label></td><td><input id="ctl00_HomePageContent_ctrlRDIpDisable_1" type="radio" name="ctl00$HomePageContent$ctrlRDIpDisable" value="No" checked="checked" tabindex="4"><label for="ctl00_HomePageContent_ctrlRDIpDisable_1">No</label></td>
				</tr>
			</tbody></table>
                                    </td>
                                    <td class="leftTopFormLabelgrid">
                                        <select name="ctl00$HomePageContent$ctrlTextPermanentState" id="ctl00_HomePageContent_ctrlTextPermanentState" tabindex="5" class="txtbox" onchange="selectPermanentStates();">
				<option>---Please Select---</option>

			<option>Andaman and  Nicobar</option><option>Andhra Pradesh</option><option>Arunachal Pradesh</option><option>Assam</option><option>Bihar</option><option>Chandigarh</option><option>Chattishgarh</option><option>Dadra and Nagar Haveli </option><option>Daman and  Diu  </option><option>Delhi</option><option>Goa</option><option>Gujarat</option><option>Haryana</option><option>Himachal Pradesh</option><option>Jammu &amp; Kashmir</option><option>Jharkhand</option><option>Karnataka</option><option selected="selected">Kerala</option><option>Lakshadweep</option><option>Madhya Pradesh</option><option>Maharashtra</option><option>Manipur</option><option>Meghalaya</option><option>Mizoram</option><option>Nagaland</option><option>Odisha</option><option>Pondicherry</option><option>Punjab</option><option>Rajasthan</option><option>Sikkim</option><option>Tamilnadu</option><option>Telangana</option><option>Tripura</option><option>Uttar Pradesh</option><option>Uttarakhand</option><option>West Bengal</option><option>Outside India</option></select>
                                    </td>
                                    <td class="leftTopFormLabelgrid">
                                        <select name="ctl00$HomePageContent$ctrlTextPermanentDistrict" id="ctl00_HomePageContent_ctrlTextPermanentDistrict" tabindex="6" class="txtbox" onchange="selectpermanentDistrict();">
				<option>---Please Select---</option>

			<option selected="selected">Alappuzha</option><option>Ernakulam</option><option>Idukki</option><option>Kannur</option><option>Kasaragod</option><option>Kollam</option><option>Kottayam</option><option>Kozhikode</option><option>Malappuram</option><option>Palakkad</option><option>Pathanamthitta</option><option>Thiruvananthapuram</option><option>Thrissur</option><option>Wayanad</option></select>
                                    </td>
                                    
                                    <td class="leftTopFormLabel">
                                        
                                    </td>
                                    <td class="leftTopFormLabelgrid">
                                        
                                        
                                        
                                        
                                        <span id="ctl00_HomePageContent_lblmsg" style="color: Red;"></span>
                                    </td>
                                </tr>
                            </tbody></table>
                            <table width="100%" align="center" cellpadding="0" cellspacing="0" rules="none" class="internalTable">
                                <tbody><tr>
                                    <td class="sectionHeader">
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td class="sectionHeader">
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        
                                        <div class="pagesubmission">
                                            <div class="primary">
                                                <input type="submit" name="ctl00$HomePageContent$ctrlButtonAdd" value="Add" onclick='fnbindingcontrols();WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions("ctl00$HomePageContent$ctrlButtonAdd", "", true, "submit", "", false, false))' id="ctl00_HomePageContent_ctrlButtonAdd" class="btn" onkeydown="if (event.keyCode == 13){ document.getElementById('ctl00_HomePageContent_ctrlButtonAdd').click();}">
                                                <input type="submit" name="ctl00$HomePageContent$ctrlButtonRemove" value="Remove" id="ctl00_HomePageContent_ctrlButtonRemove" class="btn" onkeydown="if (event.keyCode == 13){ document.getElementById('ctl00_HomePageContent_ctrlButtonRemove').click();}">
                                                <input type="submit" name="ctl00$HomePageContent$ctrlButtonSave" value="Submit" id="ctl00_HomePageContent_ctrlButtonSave" class="btn" onkeydown="if (event.keyCode == 13){ document.getElementById('ctl00_HomePageContent_ctrlButtonSave').click();}">
                                                
                                                <input type="button" onclick="window.close();" class="btn" name="close_btn" value="Close">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody></table>
                        
		</div>
                </td>
            </tr>
        </tbody></table>
    
    <div class="hiddenfields">
        <input type="hidden" name="ctl00$HomePageContent$hidpermenantState" id="ctl00_HomePageContent_hidpermenantState" value="4">
        <input type="hidden" name="ctl00$HomePageContent$hiddenpermenantdistrict" id="ctl00_HomePageContent_hiddenpermenantdistrict" value="326">
        <input type="hidden" name="ctl00$HomePageContent$hiddenpermenantdistrictName" id="ctl00_HomePageContent_hiddenpermenantdistrictName" value="Alappuzha">
        <input type="hidden" name="ctl00$HomePageContent$hidpermenantStateName" id="ctl00_HomePageContent_hidpermenantStateName" value="Kerala">
        <input type="hidden" name="ctl00$HomePageContent$hidpermenantState1" id="ctl00_HomePageContent_hidpermenantState1" value="17">
        <input type="hidden" name="ctl00$HomePageContent$hiddenpermenantdistrict1" id="ctl00_HomePageContent_hiddenpermenantdistrict1" value="0">
        
        <input type="hidden" name="ctl00$HomePageContent$Xmldatahidden" id="ctl00_HomePageContent_Xmldatahidden">
        <input type="hidden" name="ctl00$HomePageContent$OrginalXMLContent" id="ctl00_HomePageContent_OrginalXMLContent">
        <input type="hidden" name="ctl00$HomePageContent$Xmldatahidden_Child" id="ctl00_HomePageContent_Xmldatahidden_Child">
        <input type="hidden" name="ctl00$HomePageContent$HashDataValue" id="ctl00_HomePageContent_HashDataValue">
        <input type="hidden" name="ctl00$HomePageContent$ButtonIDHash" id="ctl00_HomePageContent_ButtonIDHash">
    </div>
    

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
var Page_Validators =  new Array(document.getElementById("ctl00_HomePageContent_rev_ctrlTxtIpDate"), document.getElementById("ctl00_HomePageContent_RequiredFieldValidatorName"), document.getElementById("ctl00_HomePageContent_DOBRequiredVal"), document.getElementById("ctl00_HomePageContent_RequiredFieldValidator1"), document.getElementById("ctl00_HomePageContent_rfvCtrlTrans"));
//]]>
</script>

<script type="text/javascript">
//<![CDATA[
var ctl00_HomePageContent_rev_ctrlTxtIpDate = document.all ? document.all["ctl00_HomePageContent_rev_ctrlTxtIpDate"] : document.getElementById("ctl00_HomePageContent_rev_ctrlTxtIpDate");
ctl00_HomePageContent_rev_ctrlTxtIpDate.controltovalidate = "ctl00_HomePageContent_CtrlDOB";
ctl00_HomePageContent_rev_ctrlTxtIpDate.focusOnError = "t";
ctl00_HomePageContent_rev_ctrlTxtIpDate.errormessage = "Please check date format(dd/mm/yyyy)";
ctl00_HomePageContent_rev_ctrlTxtIpDate.validationGroup = "submit";
ctl00_HomePageContent_rev_ctrlTxtIpDate.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
ctl00_HomePageContent_rev_ctrlTxtIpDate.validationexpression = "^(((0[1-9]|[12]\\d|3[01])\\/(0[13578]|1[02])\\/((19|[2-9]\\d)\\d{2}))|((0[1-9]|[12]\\d|30)\\/(0[13456789]|1[012])\\/((19|[2-9]\\d)\\d{2}))|((0[1-9]|1\\d|2[0-8])\\/02\\/((19|[2-9]\\d)\\d{2}))|(29\\/02\\/((1[6-9]|[2-9]\\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$";
var ctl00_HomePageContent_RequiredFieldValidatorName = document.all ? document.all["ctl00_HomePageContent_RequiredFieldValidatorName"] : document.getElementById("ctl00_HomePageContent_RequiredFieldValidatorName");
ctl00_HomePageContent_RequiredFieldValidatorName.controltovalidate = "ctl00_HomePageContent_txtName";
ctl00_HomePageContent_RequiredFieldValidatorName.focusOnError = "t";
ctl00_HomePageContent_RequiredFieldValidatorName.errormessage = "Please Enter Name";
ctl00_HomePageContent_RequiredFieldValidatorName.display = "Dynamic";
ctl00_HomePageContent_RequiredFieldValidatorName.validationGroup = "submit";
ctl00_HomePageContent_RequiredFieldValidatorName.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl00_HomePageContent_RequiredFieldValidatorName.initialvalue = "";
var ctl00_HomePageContent_DOBRequiredVal = document.all ? document.all["ctl00_HomePageContent_DOBRequiredVal"] : document.getElementById("ctl00_HomePageContent_DOBRequiredVal");
ctl00_HomePageContent_DOBRequiredVal.controltovalidate = "ctl00_HomePageContent_CtrlDOB";
ctl00_HomePageContent_DOBRequiredVal.focusOnError = "t";
ctl00_HomePageContent_DOBRequiredVal.errormessage = "Please Enter A Valid Date (dd/mm/yyyy)";
ctl00_HomePageContent_DOBRequiredVal.display = "Dynamic";
ctl00_HomePageContent_DOBRequiredVal.validationGroup = "submit";
ctl00_HomePageContent_DOBRequiredVal.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl00_HomePageContent_DOBRequiredVal.initialvalue = "";
var ctl00_HomePageContent_RequiredFieldValidator1 = document.all ? document.all["ctl00_HomePageContent_RequiredFieldValidator1"] : document.getElementById("ctl00_HomePageContent_RequiredFieldValidator1");
ctl00_HomePageContent_RequiredFieldValidator1.controltovalidate = "ctl00_HomePageContent_CtrlRelation";
ctl00_HomePageContent_RequiredFieldValidator1.focusOnError = "t";
ctl00_HomePageContent_RequiredFieldValidator1.errormessage = "Please Select Relation";
ctl00_HomePageContent_RequiredFieldValidator1.display = "Dynamic";
ctl00_HomePageContent_RequiredFieldValidator1.validationGroup = "submit";
ctl00_HomePageContent_RequiredFieldValidator1.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl00_HomePageContent_RequiredFieldValidator1.initialvalue = "-1";
var ctl00_HomePageContent_rfvCtrlTrans = document.all ? document.all["ctl00_HomePageContent_rfvCtrlTrans"] : document.getElementById("ctl00_HomePageContent_rfvCtrlTrans");
ctl00_HomePageContent_rfvCtrlTrans.controltovalidate = "ctl00_HomePageContent_CtrlTrans";
ctl00_HomePageContent_rfvCtrlTrans.focusOnError = "t";
ctl00_HomePageContent_rfvCtrlTrans.display = "Dynamic";
ctl00_HomePageContent_rfvCtrlTrans.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl00_HomePageContent_rfvCtrlTrans.initialvalue = "-1";
//]]>
</script>


<script type="text/javascript">
//<![CDATA[
javascript:loadpermanentstates();javascript:fnbindingcontrols();
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

document.getElementById('ctl00_HomePageContent_rev_ctrlTxtIpDate').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_HomePageContent_rev_ctrlTxtIpDate'));
}

document.getElementById('ctl00_HomePageContent_RequiredFieldValidatorName').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_HomePageContent_RequiredFieldValidatorName'));
}
Sys.Application.add_init(function() {
    $create(AjaxControlToolkit.FilteredTextBoxBehavior, {"FilterType":15,"ValidChars":".\u0027-,.()& ","id":"ctl00_HomePageContent_ftbName"}, null, null, $get("ctl00_HomePageContent_txtName"));
});
Sys.Application.add_init(function() {
    $create(AjaxControlToolkit.CalendarBehavior, {"format":"dd/MM/yyyy","id":"ctl00_HomePageContent_cEDOA"}, {"dateSelectionChanged":checkFutureDate}, null, $get("ctl00_HomePageContent_CtrlDOB"));
});

document.getElementById('ctl00_HomePageContent_DOBRequiredVal').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_HomePageContent_DOBRequiredVal'));
}

document.getElementById('ctl00_HomePageContent_RequiredFieldValidator1').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_HomePageContent_RequiredFieldValidator1'));
}

document.getElementById('ctl00_HomePageContent_rfvCtrlTrans').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl00_HomePageContent_rfvCtrlTrans'));
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