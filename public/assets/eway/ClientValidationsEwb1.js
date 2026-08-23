function blockSpecialChar(a) {
    var b;
    return b = document.all ? a.keyCode : a.which, b > 64 && b < 91 || b > 96 && b < 123 || 8 == b || 32 == b || b >= 48 && b <= 57
}
/*
function IsAlphaNumeric(e) {
    
        var key = e.keyCode;
        if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90) || (key >= 48 && key <= 57) || (key >= 96 && key <= 105))) {
            e.preventDefault();
        }
    
}*/
function isNumberKey(evt) {
    
    var charCode = (evt.which) ? evt.which : event.keyCode

    if (charCode > 31 && (charCode < 48 || charCode > 57) || charCode == 32) //charCode == 8 || - back space
        return false;

    return true;
}
function isDecimalNo(evt) {

    var charCode = (evt.which) ? evt.which : event.keyCode

    if (charCode > 31 && ((charCode < 48 && charCode != 46) || charCode > 57) || charCode == 32)
        return false;

    return true;
}
function isDecimalNoHsn(evt) {

    var charCode = (evt.which) ? evt.which : event.keyCode

    if (charCode > 30 && ((charCode < 48 && charCode !=46) || charCode > 57) ||  charCode == 32)
        return false;

    return true;
}

function isDecimalNoWithNeg(evt) {

    var charCode = (evt.which) ? evt.which : event.keyCode

    if (charCode > 31 && charCode != 45 && ((charCode < 48 && charCode != 46) || charCode > 57) || charCode == 32)
        return false;

    return true;
}
function blockalphabetsandnumbers(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode

    if (((keyCode >= 48 && keyCode <= 57) && isShift == false) ||
               (keyCode >= 65 && keyCode <= 90) || keyCode == 8 ||
               (keyCode >= 96 && keyCode <= 122))
        return false;

    return true;
}
function blockSpecialChar(evt) {
   
    var k = (evt.which) ? evt.which : event.keyCode;
    return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || k == 46 || (k >= 48 && k <= 57));
}
function blockSpecialCharWithoutDashandBackSlash(evt) {

    var k = (evt.which) ? evt.which : event.keyCode;
    return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 46  || (k >= 48 && k <= 57) || k == 45 || k == 47);
}
function validAddress(evt) {

    var k = (evt.which) ? evt.which : event.keyCode;
    return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || k == 46 || (k >= 48 && k <= 57) || k == 45 || k == 47 || k==35 || k == 44);
}
function validateVehicleStateCode(vehStateCode) {
    //alert(vehStateCode);
    var arStateCodes = new Array("AN", "AP", "AR", "AS", "BR", "CH", "CG", "CT", "DD", "DL","DH",
                    "DN", "GA", "GJ", "HR", "HP", "JH", "JK", "KA", "KL", "LD","LA", "MH", "MN", "MP", "MI", "ME","MZ", "NL", "OD", "PB", "PY",
                    "RJ", "SK", "TN", "TR", "TS", "UT", "UP","UK", "WB", "OR", "UA","ML","BP");
    for (var i = 0; i < arStateCodes.length; i++) {
        if (arStateCodes[i] == vehStateCode)
            return true;
    }
    return false;
}
