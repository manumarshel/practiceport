var logoutUrl = "${logout}";
var validateSessionUrl = "${validateSession}";
var logoutFuncUrl = "${logoutFunc}";
function endSession(i) {
    //createCookie('_sec_sess_id', 'value', 0);
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
    };
    xhr.open('GET', logoutUrl);
    xhr.send();
}

//function createCookie(name, value, days) {
//    if (days) {
//        var date = new Date();
//        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
//        var expires = "; expires=" + date.toGMTString();
//    } else {
//        var expires = "";
//    }
//    document.cookie = name + "=" + value + expires + "; path=/epfo";
//}

var validNavigation = false;
$(document).ready(function () {
    var data = {};
    $.ajax({
        type: "POST",
        url: validateSessionUrl,
        data: JSON.stringify(data),
        dataType: 'html',
        async: true,
        contentType: "application/json; charset=utf-8",
        success: function (result) {
            if (result.indexOf("invalid") !== -1) {
                $('.session-disp').html(result);
                $.ajax({
                    url: logoutFuncUrl,
                    type: "POST",
                    async: true
                });
            }
        },
        error: function ()
        {
            alert("Session is expired or invalid.");
            location.reload();
        }
    });
    window.addEventListener('beforeunload', function (e) {
        if (!validNavigation === true)
        {
            endSession(1);
        }
    });
    $(window).bind('keydown', function (e) {
        if (e.keyCode === 115) {
//            createCookie('_sec_sess_id', 'value', 0);
            endSession(1);
        }
        if (e.keyCode === 116) {
            validNavigation = true;
        }
        if (e.keyCode === 13) {
            validNavigation = true;
        }

    });
    window.addEventListener("click", function (e) {
        validNavigation = true;
    });
    $("form").bind("submit", function (e) {
        validNavigation = true;
    });
    $("input[type=submit]").bind("click", function (e) {
        validNavigation = true;
    });
    window.addEventListener('mouseover', (function () {
        validNavigation = true;
    }));
    window.addEventListener('mouseout', (function () {
        validNavigation = false;
    }));
});