// JScript File

// trim functionality
String.prototype.trim = function()
{
    a = this.replace(/^\s+/, '');
    return a.replace(/\s+$/, '');
}; 

// required field validation function
function validate_required(field,alerttxt1, vcase, alerttxt2) 
{
//alert("inside validate_required");
    var check="";
    var fvalue = field.value.trim();
    if (fvalue == null || fvalue == "")
        return alerttxt1;
    else
    {
        check = validate_expression(field, vcase, alerttxt2);
        return check;            
    }
}

// regular expression check function

function validate_expression(field, vcase, alerttxt)
{
    var regex = "";
    switch(vcase)
    { 
        case 'otp':
            regex="^[0-9]{4}$";
            break;
        case 'pin':    // Only Digits
                regex = "^[0-9]{6}$";
                break;   
        case 'spChar': 
                regex="^(?=.*[$-\/:-?{-~!^_'\[\]]{2,}).{8,}$";
                 break;
        case 'alphanum': 
                regex="^(?=.*\w{4,}).{8,}$";
                break;
        case 'a':    // Only alphabets and space(s)
            regex = "^[a-zA-Z ]*$";
            break;
        case 'pan': // For PAN number
            regex = "[A-Za-z]{5}\\d{4}[A-Za-z]{1}";
//             regex = "[A-Za-z]{3}[pP]{1}[A-Za-z]{1}\\d{4}[A-Za-z]{1}";     
            break;
        case 'memId': //member id
            regex="^[a-zA-Z0-9]{1,22}$";
            break;
        case 'estbId': //est id
            regex = "^[a-zA-Z0-9]{1,15}$";
            break;
        case 'establishmentId':  //Establishment ID //Added by Akshay
            regex="^[A-Z]{5}[0-9]{7}[A-Z0-9]{3}$";
            break;
        case 'preOlreEstbId': //est id
            regex = "^[A-Z]{5}0{1}[0-9]{6}[A-Z0-9]{3}$";
            break;
        case 'd':    // Only Digits
            regex = "^[0-9]*$";
            break;
         case 'd10':    // maximum 10 Digits - pranshu
            regex = "^[0-9]{1,10}$";
            break;
        case 'd1':    // 12 Digits
            //regex = "^[0-9]*.{12}$"
            regex = "^[0-9]{12}$";
            break;
        case 'd2':    // 10 Digits
            //regex = "^[0-9]*.{12}$"
            regex = "^[0-9]{10}$";
            break;
        case 'e':    // Only alphabets and space(s) and period only 85 characters
            regex = "^[a-zA-Z. ]{85}*$";
            break; 
        case 'f':   // floating point numbers
            //regex = "^[0-9]+$|[0-9]+(?:(.|))[0-9]+$";
            regex = "^[0-9]+$|^[0-9]+(?:(\\.|))[0-9]+$";
            break;
        case 'address':    // Only alphabets and space(s) and period only 100 characters
            regex = "^[a-zA-Z0-9\\s,.'-\/]*$";
            break;
        case 'city':    // Only alphabets and space(s) and dash
            regex = "^[a-zA-Z\\s-]*$";
            break;
        case 'g':  // Email Validation C
//            regex= "^([a-zA-Z0-9]+[._-])*[a-zA-Z0-9]+\@[a-zA-Z0-9]+[\\.]([a-zA-Z]{2,5}|[a-zA-z]{2,5}[\\.][a-zA-Z]{2,5})$";    // commented by shiwani on 01/04/2019 for allowing special chars 
//            regex="^([a-zA-Z0-9]+[._-])*[a-zA-Z0-9]+\@[a-zA-Z0-9]+[\\.\\-\\_]([a-zA-Z]{2,5}|[a-zA-z]{2,5}[\\.][a-zA-Z]{2,5})$";  //refer comment EC01 in version.jspf
//            regex="^([a-zA-Z0-9]+[._-])*[a-zA-Z0-9]+\@[a-zA-Z0-9-]+[\\.\\-\\_]([a-zA-Z]{2,5}|[a-zA-z]{2,5}[\\.][a-zA-Z]{2,5})$";      //ADDED BY AKSHAY IN PLACE OF ABOVE REGEX
           // regex = '^(([^<>()\\[\\]\\\\.,;:\\s@"]+(\\.[^<>()\\[\\]\\\\.,;:\\s@"]+)*)|(".+"))@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}])|(([a-zA-Z\\-0-9]+\\.)+[a-zA-Z]{2,}))$'; //refer comment EC02 in version.jspf
                regex='^[a-zA-Z0-9._+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$';//added by akash kolte STQC Changes

            break;
        case 'h':    // Aplphanumeric [Alphabets+Digits] + space(s) + hyphen
            regex = "^[a-zA-Z0-9 -]*$";
            break;
        case 'passport': //Passport number by C
            regex = "^[a-zA-Z0-9]{8,10}$";
            break;
        case 'n':    // Aplphanumeric [Alphabets+Digits] (Space Not Allowed)
            //regex = "^[a-zA-Z0-9 ]"
            regex = "^[a-zA-Z0-9 ]*$";
            break;   
        case 'o':    // Only alphabets and space(s) and period
            regex = "^[a-zA-Z. ]*$";
            break;
        case 'p':    // Everything except < > ' ;
            regex = "^[^<>';]*$";
            break;
        case 't':   // used for date validation in dd/mm/yyyy format
	     //regex = "^(?:(31)(/)(0?[13578]|1[02])\\2|(29|30)(/)(0?[13-9]|1[0-2])\\5|(0?[1-9]|1\\d|2[0-8])(/)(0?[1-9]|1[0-2])\\8)((?:1[6-9]|[2-9]\\d)?\\d{2})$|^(29)(/)(0?2)\\12((?:1[6-9]|[2-9]\\d)?(?:0[48]|[2468][048]|[13579][26])|(?:16|[2468][048]|[3579][26])00)$";
             //	     regex = "^(?:(31)(/)(0?[13578]|1[02])\\2|(29|30)(/)(0?[13-9]|1[0-2])\\5|(0?[1-9]|1\\d|2[0-8])(/)(0?[1-9]|1[0-2])\\8)((?:1[6-9]|[2-9]\\d)?\\d{2})$|^(29)(/)(0?2)\\12((?:1[6-9]|[2-9]\\d)?(?:0[48]|[2468][048]|[13579][26])|(?:16|[2468][048]|[3579][26])00)$";
            regex = "^(((0[1-9]|[12]\\d|3[01])\\/(0[13578]|1[02])\\/((19|[2-9]\\d)\\d{2}))|((0[1-9]|[12]\\d|30)\\/(0[13456789]|1[012])\\/((19|[2-9]\\d)\\d{2}))|((0[1-9]|1\\d|2[0-8])\\/02\\/((19|[2-9]\\d)\\d{2}))|(29\\/02\\/((1[6-9]|[2-9]\\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$"; 
            break;
        case 'w':
            regex = "^[]{0,35}$";
            break;
        case 'y':   // used for having clause in drg for numbers
            regex = "^[1-9][0-9]*$";
            break;
        case 'z':   // used for having clause in drg for between and not between
            regex = "^[1-9][0-9]* (?:(and|AND)) [1-9][0-9]*$";
            break;
        case 'email':   // Email validation
            regex = ".+@.+\\.[a-z]+";
            break;
        case 'aadhaar':   // Aadhaar
               regex = "^[0-9]{12}$";
               break;
        case 'ifsc':   // IFSC validation
               //regex = "[a-zA-Z]{4}\\d{7}";
               regex = "[A-Z|a-z]{4}[0][A-Z|a-z|0-9]{6}$";
               break;
        case 'pponum': //added to validate Pensioner Number
            regex = "^[a-zA-Z0-9]{13}$";
            break;
        case 'vdrnum':  //added to validate vdr number
            regex = "^[a-zA-Z]{5}[0-9]{6}$";
            break;
        case 'estbname':  //added to validate estb name
            regex = "^[A-Za-z0-9 +(){}\\[\\]#$&*/,'.\\-]*$";
            break;
        case 'branchname':  //added to validate bank branch name
            regex = "^[a-zA-Z0-9. ()&@:,\-]*$";
            break;
        case 'challanRemarks':    // Challan Remarks
//            regex ="^[a-zA-Z0-9.$&*,@:;#?+(){}\[\]\"\/\-]*$";
            regex = "^[a-zA-Z0-9. $&*,@:;#?+(){}\\[\\]\"\/\-]*$";
            break;
        case "remark":  //remark can contain alphabets, digits, spaces, period(.), comma and /'&-
            regex = "^[a-zA-Z0-9 .,&\\/'-]*$";
            break;               
        case 'space':   // string containing space only
               regex = "^\s*$";
               break;
        case 'bank':    // Aplphanumeric [Alphabets+Digits] (Space Not Allowed)
               regex = "^[a-zA-Z0-9]{10,20}$";
               break;
        case 'ownEstMemberId':    // Only 7 Digits
                //regex = "^[0-9]{7}$";
                //regex = "\\d{7}";
                regex = "^[0-9]{7}$";
                break;   
        case "memberIdNew":    //Added By Rahul
                regex = "^[A-Za-z]{5}[0-9]{17}$";
                break;          
        case "remark":  //remark can contain alphabets, digits, spaces, period(.), comma and /'&-
            regex = "^[a-zA-Z0-9 .,&\\/'-]*$";
            break;
//	case 'nameWithApostrophe':    // Only alphabets, space(s) and apostrophe
		case 'nameWithApostrophe':    // Only alphabets, space(s), apostrophe and round brackets
//            regex = "^[a-zA-Z' ]*$"  //COMMENTED ON 27/06/2019
//            regex = "^[a-zA-Z'() ]*$";  //ADDED ON 27/06/2019 TO ALLOW ROUND BRACKETS
            regex = "^[a-zA-Z'.() ]*$";  //ADDED ON 01/04/2022 TO ALLOW DOT
            break;
        case "nameWithHyphen":  //added to allow hyphen in name field in member registration
            regex = "^[a-zA-Z'.() -]*$";
            break;
	case "uan": //added by pranshu
            regex = "^[0-9]{12}$";   //only 12 digits
            break;
        case "estId":
//            regex = "^[A-Za-z]{5}\\d{9}[A-Za-z0-9]{1}$"; //Commented on 26/02/2021
            regex = "^[A-Za-z]{5}\\d{7}[A-Za-z0-9]{3}$";  // Allowed Est ID having alphanumeric Est Extension code
            break;
        case "pfaccountnumber":
            regex = "^[a-zA-Z0-9]+[a-zA-Z0-9\s\/\-]*$";
            break;         
        case "memberId":
            regex = "^[A-Za-z]{5}[0-9]{7}[a-zA-Z0-9]{3}[0-9]{7}$" ;
            break;
        case 'estExt':  //added to validate Est Extension name
            regex = "^[0-9]{2}[0-9A-Z]{1}$";
            break;            
        case "remarkETUT": //alphanumeric and space only - no sql words
            regex="^(?![\\w\\W]*(select|insert|update|delete|merge|drop|create|trunc)[\\w\\W]*)([A-Za-z 0-9]{1,40})$";
            break;
        case "singledigit":
            regex = "^[0-9]{1}$"; //only one digit
            break;
        case "noOfEmp":
            regex = "^[0-9]*$"; 
            break;
           
    }
    var fvalue = field.value.trim();
    if(fvalue.length >0)
    {
        var re = new RegExp(regex);
        var str = fvalue.match(re);
        if (str != null && str != "")
            return "";
        else
            return alerttxt;
    }
    else
        return "";
}

// function to retrieve url parametes using regular expressions.
function Get_Parameter(name)
{
  var regexS = "[\\?&]"+name+"=([^&#]*)";
  var regex = new RegExp(regexS);
  var winUrl = window.location.href;
  var results = regex.exec(winUrl);
  if( results == null )
    return "";
  else
    return results[1];
}

function SearchEmpId(priv,idtxtbox){
    if(priv == "E"){
		alert('You don\'t have rights to see the list of employees.'); 
    }else{
		var mine = window.open('/menumodule/svr/MiscellaneousServlet?status=EmpIdSearchView&idtxtbox='+idtxtbox,'','top=10,left=10,resizable=1,height=500,width=740, scrollbars=1, status=yes');
        if(!mine)
            alert("Popup Blocked. Please Disable Pop Up Blocker.");
	}
}

function SearchGroupEmpId(priv,idtxtbox){
    if(priv == "E"){
        alert('You don\'t have rights to see the list of employees.'); 
    }else{
        //var mine = window.open('/menumodule/jsp/SearchEmployee/SearchEmployee.jsp?status=first&idtxtbox='+idtxtbox,'','top=10,left=10,resizable=1,height=500,width=740, scrollbars=1, status=yes');
		var mine = window.open('/menumodule/svr/MiscellaneousServlet?status=EmpIdSearchView&idtxtbox='+idtxtbox,'','top=10,left=10,resizable=1,height=500,width=740, scrollbars=1, status=yes');
        if(!mine)
            alert("Popup Blocked. Please Disable Pop Up Blocker.");
    }
}

function SearchITSPNewId(priv,idtxtbox){
    if(priv == "E"){
            alert('You don\'t have rights to see the list of employees.');
    }else{
          //  var mine = window.open('/menumodule/jsp/SearchEmployee/ITSPSearchEmployee.jsp?status=first&idtxtbox='+idtxtbox,'','top=10,left=10,resizable=1,height=500,width=740, scrollbars=1, status=yes');
          var mine = window.open('/menumodule/svr/ITSPAttendanceServlet?status=ITSPEmpSearchListView&idtxtbox='+idtxtbox,'','top=10,left=10,resizable=1,height=500,width=740, scrollbars=1, status=yes');

        if(!mine)
            alert("Popup Blocked. Please Disable Pop Up Blocker.");
	}
}

function validateRequiredEmpId(field, alerttxt1, alerttxt2) {
    if(alerttxt1 == '') alerttxt1 = "Enter employee Id.\n";
    if(alerttxt2 == '') alerttxt2 = "Enter valid employee Id.\n";   
   return validate_required(field,alerttxt1,'d',alerttxt2);
}

function validateMemberNameAndNameAsPerDoc(memberName, nameAsPerDoc, alertText) {
    if(memberName.replace(/\s/g,"").toUpperCase() === nameAsPerDoc.replace(/\s/g,"").toUpperCase())
        return "";
    else
        return alertText;
}

function validateEmpId(field, alerttxt) {
   if(alerttxt == '') alerttxt = "Enter valid employee Id.\n";
   return validate_expression(field, 'd',alerttxt);
}
function setAndRemoveErrorMsg(object,msg){
    if(msg !==''){
       $(object).parent().find("P").remove();
       $(object).parent().append('<p style="color:red;">'+msg+'</p>');
       object.focus(function() {$(object).parent().find("P").remove(); });
    }
 }
 var toastPanCaptcha = '<span id="message_disabled_key" style="position:absolute; bottom: 45px; left: 50%;"><div class="inner-span" style="position:relative;left:-50%; padding:5px 10px; background-color:rgba(0,0,0,0.8); border-radius:5px; /*letter-spacing:0.05em*/; color:white;">Cut Copy or Paste action is not allowed !</div></span>';

$(document).ready(function () {
    $("#captcha").bind("cut copy paste", function (e) {
        e.preventDefault();
        _showToast();
    });
});

_showToast = function () {
    $("#message_disabled_key").remove();
    $("body").append(toastPanCaptcha);
    var animationDuration = 500;
    setTimeout(function () {
        $("#message_disabled_key").fadeOut(animationDuration);
        setTimeout(function () {
            $("#message_disabled_key").remove();
        }, animationDuration);
    }, animationDuration);
};