<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml"><head id="Head1"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>
	ESIC
</title><link media="screen" href="../public/assets/esi/layout.css" rel="stylesheet" type="text/css"><link rel="stylesheet" type="text/css" href="../public/assets/esi/CSSglobal_002.css"><link rel="stylesheet" type="text/css" href="../public/assets/esi/csstaskhome.css"><link rel="stylesheet" type="text/css" href="../public/assets/esi/CSSglobal.css"><link rel="stylesheet" type="text/css" href="../public/assets/esi/calendar.css"><link rel="stylesheet" type="text/css" href="../public/assets/esi/calpopup.css">
    <style type="text/css">
        body {
            font-family: arial;
        }

        .alertPopUpContainer {
            border: 2px solid #003980;
            background: #d3eaf8;
            width: 750px;
        }

        .alertPopHeader {
            height: 96px;
        }

        .alertPopUpFooter {
            background: #003980;
            padding: 8px 0;
            font-size: 12px;
            color: #fff;
            text-align: center;
        }

        .alertAttentionTxt {
            color: #e34832;
            font-size: 2.3em;
            padding: 19px 0 0 0;
        }

        .alertBodyTxt {
            background: #fff;
            padding: 10px;
        }

        .logoSide {
            width: 30%;
            float: left;
        }

        .headerSide {
            width: 70%;
            float: right;
        }

        .paddingLeft30 {
            padding-left: 30px;
        }

        .clear {
            clear: both;
        }

        a {
            color: #2a80b9;
        }

        .modalBackground {
            background-color: Black;
            filter: alpha(opacity=80);
            opacity: 0.8;
        }

        .modalPopup {
            background-color: #ffffdd;
            border-width: 3px;
            border-style: solid;
            border-color: Gray;
            padding: 5px;
            width: 350px;
            height: 300px;
        }

        .style4 {
            color: #363033;
            text-align: center;
            font-family: Verdana, Arial, sans-serif;
            font-size: 10pt;
        }

        .leftTopFormLabelhome {
            font-family: Arial, Verdana;
            font-size: 14px;
            color: #742902;
            font-weight: bolder;
            background-color: #FBFAC2;
            border-left: #b5b48a solid 1px;
            border-right: #F2F1B9 outset 0px; /*radha edited on 25th sep 2009 2.45 pm*/
            border-top: #b5b48a solid 1px;
            border-bottom: #F2F1B9 outset 0px;
            padding-left: 9px;
        }

        #btnpnlPwdcolse {
            display: inline-block;
            font-weight: 300;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            padding: 4px 14px;
            font-size: 1rem;
            line-height: 1.1;
            border-radius: .25rem;
            color: #fff;
            background-color: #28a745;
            border-color: #28a745;
            font-family: Arial;
        }
    </style>

    <script language="javascript" type="text/javascript" src="../public/assets/esi/Clock.js"></script>

    <script type="text/javascript">
        function disableBackButton() {
            window.history.forward();
        }
        setTimeout("disableBackButton()", 0);

    </script>

    <script language="JavaScript" type="text/javascript">
        openWins = new Array();
        openWins1 = new Array();
        curWin = 0;

        function openWin(page) {
            openWins[curWin++] = window.open(page, '_blank', 'width=2000,height=900, scrollbars=yes');
        }




        function openWin1(page, id) {
            openWins1[curWin++] = window.open(page, id, 'width=2000,height=900,resizable=yes,scrollbars=yes');

        }


        function closeAll() {
            PageMethods.CtrlBtn();
            for (i = 0; i < openWins.length; i++)
                if (openWins[i] && !openWins[i].closed) openWins[i].close();

            for (i = 0; i < openWins1.length; i++)
                if (openWins1[i] && !openWins1[i].closed) openWins1[i].close();
        }



        function OpenNewbankpopup() {
            $find('mpbank').show();
        }
        function OpenNewPasswordpopup() {
            $find('mpPwdPolicy').show();
        }
        //eSanjeevani
        function OpenSanjeevanipopup() {
            $find('mpeSanjeevani').show();
        }
        //End eSanjeevani
    </script>
    <script type="text/javascript" language="javascript">
        function my_onkeydown_handler(event) {
            switch (event.keyCode) {
                case 116: // 'F5'
                    event.preventDefault();
                    event.keyCode = 0;
                    window.status = "F5 disabled";
                    break;
            }
        }
        document.addEventListener("keydown", my_onkeydown_handler);
    </script>

    <script src="../public/assets/esi/logoutjquery.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(function () {
            $("body").on('click keypress', function () {
                ResetThisSession();
            });
        });

        var timeInSecondsAfterSessionOut = 1200; // change this to change session time out (in seconds).
        var secondTick = 0;

        function ResetThisSession() {
            secondTick = 0;
        }

        function StartThisSessionTimer() {
            secondTick++;
            var timeLeft = ((timeInSecondsAfterSessionOut - secondTick) / 1200).toFixed(0); // in minutes
            timeLeft = timeInSecondsAfterSessionOut - secondTick; // override, we have 30 secs only

            $("#spanTimeLeft").html(timeLeft);

            if (secondTick > timeInSecondsAfterSessionOut) {
                clearTimeout(tick);
                window.location = "https://www.esic.in/ESICInsurance1/ESICInsurancePortal/PortalLogin.aspx";
                return;
            }
            tick = setTimeout("StartThisSessionTimer()", 1000);
        }

        StartThisSessionTimer();

    </script>
</head>
<body onload="disableBackButton();" onbeforeunload="javascript:closeAll();" style="" data-new-gr-c-s-check-loaded="8.912.0" data-gr-ext-installed="">
    <div id="minHeight">
    </div>
    <form name="Form2" method="post" action="PortalHome.aspx?UserName=XnUBQWLv2ClMGcDMhZatAywZM+Qy2nOG&amp;lupk=aIP8YHlvbak%3d&amp;to=&amp;ipaddress=hE90c9q2NH4XaZxnQq0Eig%3d%3d" id="Form2">
<div>
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" tabindex="-1">
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" tabindex="-1">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKLTU3NzU0NzA4MRAWAh4MTGFzdExvZ1BvcHVwBQVGYWxzZWQWAgIDD2QWCgIDD2QWAgIBD2QWAmYPZBYCZg9kFgJmD2QWAgIBD2QWAmYPDxYIHglGb250X0JvbGRnHglGb250X1NpemUoKiJTeXN0ZW0uV2ViLlVJLldlYkNvbnRyb2xzLkZvbnRVbml0AzhwdB4EVGV4dAURNTQwMDAyNDkwNzAwMDA5OTkeBF8hU0ICgBhkZAIFDxYCHglpbm5lcmh0bWwFYjxiPjxmb250IGNvbG9yOlJlZD5MYXN0IExvZ2dlZCBJbiA8L2ZvbnQ+U3VuZGF5LCBNYXkgMjYsIDIwMjQgPGI+PGZvbnQgY29sb3I6UmVkPmF0PGZvbnQ+IDEwOjM2IEFNZAIHD2QWBGYPZBYCZg9kFgICAQ8WAh8DBacCPEI+PE1BUlFVRUUgc3R5bGU9InRleHQtYWxpZ246IGNlbnRlcjtiYWNrZ3JvdW5kLWNvbG9yOndoaXRlOyBjb2xvcjpncmVlbiIgZGlyZWN0aW9uPSJsZWZ0IiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMCUiIHNjcm9sbGRlbGF5ID0gMyBzY3JvbGxhbW91bnQ9MyA+PEZvbnQgIHNpemU9IjUiPkFsbCBlbXBsb3llcnMgYXJlIHJlcXVlc3RlZCB0byB1cGRhdGUgTmF0aW9uYWwgSW5kdXN0cmlhbCBDbGFzc2lmaWNhdGlvbiBDb2RlIHRocm91Z2ggIlVwZGF0ZSBOSUMgQ29kZSIgbGluazwvRm9udD48L01BUlFVRUU+PC9CPmQCAQ9kFgJmD2QWAgIBD2QWAmYPZBYGZg9kFhYCAQ8WAh4Hb25DbGljawVsb3BlbldpbignLi8uLi9FbXBsb3llci9lbXBsb3llcl9pbml0aWF0ZWRfcmVxdWVzdF9mb3JfY2hhbmdlLmFzcHg/dXNlclBrPVhuVUJRV0x2MkNsTUdjRE1oWmF0QXl3Wk0rUXkybk9HJyk7ZAIDD2QWAgIBDxYCHwYFWm9wZW5XaW4oJy4vLi4vRW1wbG95ZXIvU3ViVW5pdFJlZ2lzdHJhdGlvbi5hc3B4P3VzZXJQaz1YblVCUVdMdjJDbE1HY0RNaFphdEF5d1pNK1F5Mm5PRycpO2QCBQ8WAh8GBWVvcGVuV2luKCcuLy4uL0JlbmVmaXRzL0NlcnRpZmljYXRlcy9pbnB1dF9pcG5vX2FjY2RudC5hc3B4P3VzZXJQaz1YblVCUVdMdjJDbE1HY0RNaFphdEF5d1pNK1F5Mm5PRycpO2QCBw8WAh8GBXJvcGVuV2luKCcuLy4uL0JlbmVmaXRzL0NlcnRpZmljYXRlcy9BY2NpZGVudFJlcG9ydF9yZWdpc3Rlcl9wb3J0YWwuYXNweD91c2VyUGs9WG5VQlFXTHYyQ2xNR2NETWhaYXRBeXdaTStReTJuT0cnKTtkAgkPFgIfBgWPAW9wZW5XaW4oJy4vLi4vQmVuZWZpdHMvQ2VydGlmaWNhdGVzL2lucHV0X2lwbm9fYWNjZG50LmFzcHg/dXNlclBrPVhuVUJRV0x2MkNsTUdjRE1oWmF0QXl3Wk0rUXkybk9HJmdldFBhZ2U9dlo1U2NqODJRSm0xaGFKVVEvN0xSMWEwWS9vSFQ4U3ggJyk7ZAILDxYCHwYFYm9wZW5XaW4oJy4vLi4vQmVuZWZpdHMvQVYvQVZfRW1wbG95ZXJfTGFuZGluZ19QYWdlLmFzcHg/dXNlclBrPVhuVUJRV0x2MkNsTUdjRE1oWmF0QXl3Wk0rUXkybk9HJyk7ZAIND2QWAgIBDxYCHwYFVm9wZW5XaW4oJy4uL0VtcGxveWVyL0VtcHJfdmlld19zdWJ1bml0LmFzcHg/dXNlclBrPVhuVUJRV0x2MkNsTUdjRE1oWmF0QXl3Wk0rUXkybk9HJyk7ZAIPD2QWAgIBDxYCHwYFTm9wZW5XaW4oJy4uL0VtcGxveWVyL1VwZGF0ZU5JQy5hc3B4P3VzZXJQaz1YblVCUVdMdjJDbE1HY0RNaFphdEF5d1pNK1F5Mm5PRycpO2QCEQ8WAh8GBV5vcGVuV2luKCcuLi9FU0lDSW5zdXJhbmNlUG9ydGFsL0NoYW5nZVBhc3N3b3JkLmFzcHg/dXNlclBrPVhuVUJRV0x2MkNsTUdjRE1oWmF0QXl3Wk0rUXkybk9HJyk7ZAIVD2QWAgIBDxYCHwYFWW9wZW5XaW4oJy4uL0VTSUNJbnN1cmFuY2VQb3J0YWwvSGVscEZpbGVzLmFzcHg/dXNlclBrPVhuVUJRV0x2MkNsTUdjRE1oWmF0QXl3Wk0rUXkybk9HJyk7ZAIXDxYCHwYFZm9wZW5XaW4oJy4vLi4vRW1wbG95ZXIvRW1wcl9SZWR1Y2VDb250cmlidXRpb25fUmVxdWVzdC5hc3B4P3VzZXJQaz1YblVCUVdMdjJDbE1HY0RNaFphdEF5d1pNK1F5Mm5PRycpO2QCAQ9kFiICAQ8WAh8GBWZvcGVuV2luKCcuLy4uL0RhdGFNaWdyYXRpb24vRE1fRW1wbG95ZXJJUERldGFpbHMuYXNweD91c2VyUGs9WG5VQlFXTHYyQ2xNR2NETWhaYXRBeXdaTStReTJuT0cmY3RsPTEnKTtkAgMPFgIfBgVzb3BlbldpbignLi8uLi9FbXBsb3llZS9FbXBlX2lwX0FiaGEuYXNweD91c2VyUGs9WG5VQlFXTHYyQ2xNR2NETWhaYXRBeXdaTStReTJuT0cmTW9iaWxlPTJrT01Ra09qNFN4ZEdHYXBUUVpJaWc9PScpO2QCBQ8WAh8GBYQBb3BlbldpbignLi8uLi9FbXBsb3llZS9WaWV3QWxsUmVnaXN0ZXJlZEVtcGxveWVlc1BhZ2UuYXNweD91c2VyUGs9WG5VQlFXTHYyQ2xNR2NETWhaYXRBeXdaTStReTJuT0cmTW9iaWxlMmtPTVFrT2o0U3hkR0dhcFRRWklpZz09Jyk7ZAIHDxYCHwYFXG9wZW5XaW4oJy4vLi4vRW1wbG95ZWUvRW1wZV9JUF9Nb2JpbGVzZWVkaW5nLmFzcHg/dXNlclBrPVhuVUJRV0x2MkNsTUdjRE1oWmF0QXl3Wk0rUXkybk9HJyk7ZAIJDxYCHwYFWW9wZW5XaW4oJy4vLi4vRW1wbG95ZWUvVXBsb2FkTW9iaWxlTnVtYmVyLmFzcHg/dXNlclBrPVhuVUJRV0x2MkNsTUdjRE1oWmF0QXl3Wk0rUXkybk9HJyk7ZAILDxYCHwYFWG9wZW5XaW4oJy4vLi4vRW1wbG95ZWUvVXBsb2FkQmFua0FjY291bnQuYXNweD91c2VyUGs9WG5VQlFXTHYyQ2xNR2NETWhaYXRBeXdaTStReTJuT0cnKTtkAg0PFgIfBgVdb3BlbldpbignLi8uLi9FbXBsb3llci9JUEFjY291bnREb2NCdWxrVXBsb2FkLmFzcHg/dXNlclBrPVhuVUJRV0x2MkNsTUdjRE1oWmF0QXl3Wk0rUXkybk9HJyk7ZAIPDxYCHwYFVm9wZW5XaW4oJy4vLi4vRW1wbG95ZWUvVmlld0NvdW50ZXJGb2lsLmFzcHg/dXNlclBrPVhuVUJRV0x2MkNsTUdjRE1oWmF0QXl3Wk0rUXkybk9HJyk7ZAITDxYCHwYFUG9wZW5XaW4oJy4vLi4vRW1wbG95ZWUvRm9ybVRocmVlLmFzcHg/dXNlclBrPVhuVUJRV0x2MkNsTUdjRE1oWmF0QXl3Wk0rUXkybk9HJyk7ZAIVDxYCHwYFQm9wZW5XaW4oJy4vLi4vUmV2ZW51ZU9uZS9BY3Rpb24gT24gRGVmYXVsdGVyL0VNVURJUERldGFpbHMuYXNweCcpO2QCFw8WAh8GBV1vcGVuV2luKCcuLy4uL0VtcGxveWVlL01lZDExSVBTZWFyY2hfRW1wbG95ZXIuYXNweD91c2VyUGs9WG5VQlFXTHYyQ2xNR2NETWhaYXRBeXdaTStReTJuT0cnKTtkAhkPFgIfBgUzb3BlbldpbignLi8uLi9FbXBsb3llZS9FbXBsb3llck5vdGlmaWNhdGlvbi5hc3B4Jyk7ZAIbD2QWAgIBDxYCHwYFK29wZW5XaW4oJy4vLi4vRW1wbG95ZWUvZW1wZXRhc2tsaXN0LmFzcHgnKTtkAh0PFgIfBgVYb3BlbldpbignLi8uLi9FbXBsb3llZS9FbXBlX0lQX1VBTk51bWJlci5hc3B4P3VzZXJQaz1YblVCUVdMdjJDbE1HY0RNaFphdEF5d1pNK1F5Mm5PRycpO2QCHw8WAh8GBVxvcGVuV2luKCcuLy4uL0VtcGxveWVlL2VtcGVSZWdUYXNrTGlzdGVkaXRpcC5hc3B4P3VzZXJQaz1YblVCUVdMdjJDbE1HY0RNaFphdEF5d1pNK1F5Mm5PRycpO2QCIQ8WAh8GBVdvcGVuV2luKCcuLy4uL0VtcGxveWVlL0lQQWFkaGFhclNlZWRpbmcuYXNweD91c2VyUGs9WG5VQlFXTHYyQ2xNR2NETWhaYXRBeXdaTStReTJuT0cnKTtkAiMPFgIfBgVkb3BlbldpbignLi8uLi9FbXBsb3llZS9FbXBlX0lQX05ld2RlcGVuZGFudF9BcHByb3ZhbC5hc3B4P3VzZXJQaz1YblVCUVdMdjJDbE1HY0RNaFphdEF5d1pNK1F5Mm5PRycpO2QCAg9kFiQCAQ8WAh8GBaYBb3BlbldpbjEoJ2h0dHBzOi8vd3d3LmVzaWMuaW4vSW5zdXJhbmNlR2xvYmFsV2ViVjQvUmV2ZW51ZU9uZS9Nb250aGx5JTIwQ29udHJpYnV0aW9uL01vbnRobHlDb250cmlidXRpb25Ib21lLmFzcHg/dXNlclBrPVhuVUJRV0x2MkNsTUdjRE1oWmF0QXl3Wk0rUXkybk9HJywnY2hhbGxhbicpO2QCAw8WAh8GBa8Bb3BlbldpbjEoJ2h0dHBzOi8vd3d3LmVzaWMuaW4vSW5zdXJhbmNlR2xvYmFsV2ViVjQvUmV2ZW51ZU9uZS9Nb250aGx5JTIwQ29udHJpYnV0aW9uL01vbnRobHlDb250cmlidXRpb25QYXltZW50LmFzcHg/RW1wbG95ZWVDb2RlPVhuVUJRV0x2MkNsTUdjRE1oWmF0QXl3Wk0rUXkybk9HJywnY2hhbGxhbicpO2QCBQ8WAh8GBW1vcGVuV2luKCcuLy4uL1JldmVudWVPbmUvTW9udGhseSUyMENvbnRyaWJ1dGlvbi9Nb2RpZnlDaGFsbGFuLmFzcHg/dXNlclBrPVhuVUJRV0x2MkNsTUdjRE1oWmF0QXl3Wk0rUXkybk9HJyk7ZAIHDxYCHwYFd29wZW5XaW4oJy4vLi4vUmV2ZW51ZU9uZS9Nb250aGx5JTIwQ29udHJpYnV0aW9uL1ZpZXdDb250cmlidXRpb25IaXN0b3J5LmFzcHg/dXNlclBrPVhuVUJRV0x2MkNsTUdjRE1oWmF0QXl3Wk0rUXkybk9HJyk7ZAIJDxYCHwYFc29wZW5XaW4oJy4vLi4vUmV2ZW51ZU9uZS9Nb250aGx5JTIwQ29udHJpYnV0aW9uL0NoYWxsYW5DcmVhdGlvbl9OZXcuYXNweD91c2VyUGs9WG5VQlFXTHYyQ2xNR2NETWhaYXRBeXdaTStReTJuT0cnKTtkAgsPFgIfBgVTb3BlbldpbignLi8uLi9MZWRnZXIvQ29udHJhY3RNYXN0ZXIuYXNweD91c2VyUGs9WG5VQlFXTHYyQ2xNR2NETWhaYXRBeXdaTStReTJuT0cnKTtkAg0PFgIfBgVVb3BlbldpbignLi8uLi9MZWRnZXIvQ29udHJhdG9yTWFwcGluZy5hc3B4P3VzZXJQaz1YblVCUVdMdjJDbE1HY0RNaFphdEF5d1pNK1F5Mm5PRycpO2QCDw8WAh8GBVhvcGVuV2luKCcuLy4uL0xlZGdlci9CdWxrRW1wbG95ZWVNYXBwaW5nLmFzcHg/dXNlclBrPVhuVUJRV0x2MkNsTUdjRE1oWmF0QXl3Wk0rUXkybk9HJyk7ZAIRDxYCHwYFcW9wZW5XaW4oJy4vLi4vUmV2ZW51ZU9uZS9Nb250aGx5JTIwQ29udHJpYnV0aW9uL2NvbnRyYWN0b3JIaXN0b3J5LmFzcHg/dXNlclBrPVhuVUJRV0x2MkNsTUdjRE1oWmF0QXl3Wk0rUXkybk9HJyk7ZAITDxYCHwYFcW9wZW5XaW4oJy4vLi4vUmV2ZW51ZU9uZS9Nb250aGx5JTIwQ29udHJpYnV0aW9uL1NlbGZDZXJ0aWZpY2F0aW9uLmFzcHg/dXNlclBrPVhuVUJRV0x2MkNsTUdjRE1oWmF0QXl3Wk0rUXkybk9HJyk7ZAIVDxYCHwYFcG9wZW5XaW4oJy4vLi4vUmV2ZW51ZU9uZS9Nb250aGx5JTIwQ29udHJpYnV0aW9uL0Zvcm0tNVN1Ym1pc3Npb24uYXNweD91c2VyUGs9WG5VQlFXTHYyQ2xNR2NETWhaYXRBeXdaTStReTJuT0cnKTtkAhcPFgIfBgV0b3BlbldpbignLi8uLi9SZXZlbnVlT25lL01vbnRobHklMjBDb250cmlidXRpb24vQ2hhbGxhblBheW1lbnQuYXNweD9FbXBsb3llZWNvZGU9WG5VQlFXTHYyQ2xNR2NETWhaYXRBeXdaTStReTJuT0cnKTtkAhkPFgIfBgVsb3BlbldpbignLi8uLi9SZXZlbnVlT25lL01vbnRobHklMjBDb250cmlidXRpb24vQ2hhbGxhbkVudHJ5LmFzcHg/dXNlclBrPVhuVUJRV0x2MkNsTUdjRE1oWmF0QXl3Wk0rUXkybk9HJyk7ZAIbDxYCHwYFtAFvcGVuV2luKCdodHRwczovL3d3dy5lc2ljLmluL0luc3VyYW5jZUdsb2JhbFdlYlY0L1JldmVudWVPbmUvTW9udGhseSUyMENvbnRyaWJ1dGlvbi9DaGFsbGFuRG91YmxlVmVyaWZpY2F0aW9uLmFzcHg/dXNlclBrPVhuVUJRV0x2MkNsTUdjRE1oWmF0QXl3Wk0rUXkybk9HJmNoYWxsYW5Obz1KVUdtMVJiajRnTT0nKTtkAh0PFgIfBgV1b3BlbldpbignLi8uLi9SZXZlbnVlT25lL01vbnRobHklMjBDb250cmlidXRpb24vSW50ZXJlc3RQYXltZW50LmFzcHg/RW1wbG95ZWVjb2RlPVhuVUJRV0x2MkNsTUdjRE1oWmF0QXl3Wk0rUXkybk9HJyk7ZAIfDxYCHwYFqQFvcGVuV2luMSgnaHR0cHM6Ly93d3cuZXNpYy5pbi9JbnN1cmFuY2VHbG9iYWxXZWJWNC9SZXZlbnVlT25lL01vbnRobHklMjBDb250cmlidXRpb24vTW9udGhseUNvbnRyaWJ1dGlvbkNvbkhvbWUuYXNweD91c2VyUGs9WG5VQlFXTHYyQ2xNR2NETWhaYXRBeXdaTStReTJuT0cnLCdjaGFsbGFuJyk7ZAIhDxYCHwYFmAFvcGVuV2luMSgnaHR0cHM6Ly93d3cuZXNpYy5pbi9JbnN1cmFuY2VHbG9iYWxXZWJWNC9SZXZlbnVlT25lL01vbnRobHklMjBDb250cmlidXRpb24vQ29uc29saWRhdGVkQ2hhbGxhbi5hc3B4P3VzZXJQaz1YblVCUVdMdjJDbE1HY0RNaFphdEF5d1pNK1F5Mm5PRycpO2QCIw8WAh8GBZ8Bb3BlbldpbjEoJ2h0dHBzOi8vd3d3LmVzaWMuaW4vSW5zdXJhbmNlR2xvYmFsV2ViVjQvUmV2ZW51ZU9uZS9Nb250aGx5JTIwQ29udHJpYnV0aW9uL1ZpZXdDb25Db250cmlidXRpb25IaXN0b3J5LmFzcHg/dXNlclBrPVhuVUJRV0x2MkNsTUdjRE1oWmF0QXl3Wk0rUXkybk9HJyk7ZAIJDw8WAh4HVmlzaWJsZWhkZAITD2QWAmYPZBYCZg9kFgICAQ8PFgIfAwURSVAgQWRkcmVzcyA6IDQ0LiBkZBgBBR5fX0NvbnRyb2xzUmVxdWlyZVBvc3RCYWNrS2V5X18WAQUMaW1nYnRuTG9nb3V0" tabindex="-1">
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['Form2'];
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<script src="../public/assets/esi/dashboard/WebResource.js" type="text/javascript"></script>


<script src="../public/assets/esi/dashboard/ScriptResource.js" type="text/javascript"></script>
<script src="../public/assets/esi/dashboard/ScriptResource_002.js" type="text/javascript"></script>
<script src="../public/assets/esi/dashboard/ScriptResource_005.es" type="text/javascript"></script>
<script src="../public/assets/esi/dashboard/ScriptResource_004.es" type="text/javascript"></script>
<script src="../public/assets/esi/dashboard/ScriptResource.es" type="text/javascript"></script>
<script src="../public/assets/esi/dashboard/ScriptResource_008.es" type="text/javascript"></script>
<script src="../public/assets/esi/dashboard/ScriptResource_007.es" type="text/javascript"></script>
<script src="../public/assets/esi/dashboard/ScriptResource_006.es" type="text/javascript"></script>
<script src="../public/assets/esi/dashboard/ScriptResource_009.es" type="text/javascript"></script>
<script src="../public/assets/esi/dashboard/ScriptResource_002.es" type="text/javascript"></script>
<script src="../public/assets/esi/dashboard/ScriptResource_003.es" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
var PageMethods = function() {
PageMethods.initializeBase(this);
this._timeout = 0;
this._userContext = null;
this._succeeded = null;
this._failed = null;
}
PageMethods.prototype = {
_get_path:function() {
 var p = this.get_path();
 if (p) return p;
 else return PageMethods._staticInstance.get_path();},
CtrlBtn:function(succeededCallback, failedCallback, userContext) {
return this._invoke(this._get_path(), 'CtrlBtn',false,{},succeededCallback,failedCallback,userContext); },
CtrLogout:function(succeededCallback, failedCallback, userContext) {
return this._invoke(this._get_path(), 'CtrLogout',false,{},succeededCallback,failedCallback,userContext); }}
PageMethods.registerClass('PageMethods',Sys.Net.WebServiceProxy);
PageMethods._staticInstance = new PageMethods();
PageMethods.set_path = function(value) { PageMethods._staticInstance.set_path(value); }
PageMethods.get_path = function() { return PageMethods._staticInstance.get_path(); }
PageMethods.set_timeout = function(value) { PageMethods._staticInstance.set_timeout(value); }
PageMethods.get_timeout = function() { return PageMethods._staticInstance.get_timeout(); }
PageMethods.set_defaultUserContext = function(value) { PageMethods._staticInstance.set_defaultUserContext(value); }
PageMethods.get_defaultUserContext = function() { return PageMethods._staticInstance.get_defaultUserContext(); }
PageMethods.set_defaultSucceededCallback = function(value) { PageMethods._staticInstance.set_defaultSucceededCallback(value); }
PageMethods.get_defaultSucceededCallback = function() { return PageMethods._staticInstance.get_defaultSucceededCallback(); }
PageMethods.set_defaultFailedCallback = function(value) { PageMethods._staticInstance.set_defaultFailedCallback(value); }
PageMethods.get_defaultFailedCallback = function() { return PageMethods._staticInstance.get_defaultFailedCallback(); }
PageMethods.set_path("/InsuranceGlobalWebV4/ESICInsurancePortal/PortalHome.aspx");
PageMethods.CtrlBtn= function(onSuccess,onFailed,userContext) {PageMethods._staticInstance.CtrlBtn(onSuccess,onFailed,userContext); }
PageMethods.CtrLogout= function(onSuccess,onFailed,userContext) {PageMethods._staticInstance.CtrLogout(onSuccess,onFailed,userContext); }
//]]>
</script>

<div>

	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWEQKTgoeSDwLU0J3mBwK35P7ZCQKLk41kAoGTreoJAv2amY8BAprUxcQJAqCki+gKAtC6qoQFAoWRr6gCApKiqpYPArursYYIAoznisYGAoXZ9dsDAqDCk/ENAoWT7YQDAua6xNAE" tabindex="-1">
</div>
        <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ScriptManager1', document.getElementById('Form2'));
Sys.WebForms.PageRequestManager.getInstance()._updateControls([], [], [], 90);
//]]>
</script>

        <div id="outer">
            <table id="Table2" cellspacing="0" cellpadding="0" align="Center" border="0" style="border-width:0px;width:100%;border-collapse:collapse;">
	<tbody><tr>
		<td class="tHeadImage" align="left"><img id="ESICLogo" src="../public/assets/esi/Small%20Logo.jpg" align="absmiddle" style="border-width:0px;"></td><td class="tHeadImage" align="center"></td><td class="tHeadImage" align="right"><img id="Image1" src="../public/assets/esi/IndianSymbol.jpg" align="absmiddle" style="border-width:0px;"></td>
	</tr><tr>
		<td align="center" colspan="3" style="height:25px;width:100%;"><table id="Table3" cellspacing="0" cellpadding="0" border="0" style="height:100%;width:100%;border-collapse:collapse;">
			<tbody><tr>
				<td class="dataBlock" align="left" style="width:8%;">
                                    User Login:
                                </td><td class="dataBlock" align="left" style="width:58%;"><span id="lbluserName" style="background-color:Transparent;font-size:8pt;font-weight:bold;"><?php echo session('emp_code'); ?></span></td><td class="dataBlock" style="width:23%;">
                                <div id="raw"></div>
                                </td><td class="homelink" align="right"><a href="<?= base_url('user/dashboard') ?>"><img src="../public/assets/esi/logout.gif" alt="Logout" style="border-width:0px;"></a></td>
			</tr>
		</tbody></table></td>
	</tr>
</tbody></table>
            <div class="style4">
                <span id="lastlog"><b><font color:red="">Last Logged In </font>Sunday, May 26, 2024 <b><font color:red="">at<font> 10:36 AM</font></font></b></b></span><b><b><font color:red=""><font>
            </font></font></b></b></div><b><b><font color:red=""><font>
            <table id="Table5" cellspacing="0" cellpadding="0" align="Center" border="0" style="border-width:0px;width:100%;border-collapse:collapse;">
	<tbody><tr>
		<td colspan="5" style="background-color:White;width:100%;"><b><marquee style="text-align: center;background-color:white; color:green" direction="left" width="100%" height="10%" scrolldelay="3" scrollamount="3"><font size="5">All employers are requested to update National Industrial Classification Code through "Update NIC Code" link</font></marquee></b></td>
	</tr><tr>
		<td colspan="5" style="background-color:White;width:100%;">
                        <table width="100%" border="0" cellpadding="0" align="center" cellspacing="0" id="tblUser" class="tabBackStyle">
                            <tbody><tr class="navlastData_Section">
                                <td class="navcontentTabletd" align="left" valign="top">
                                    <table id="Table1121" width="100%" border="1" cellspacing="30">
			<tbody><tr valign="top" class="leftTopFormLabel">
				<td class="navLinkText" width="34%">
                                                <br>
                                                <span class="navheaderStyle">Employer </span>
                                                <ul class="listStyle">
                                                    <li><span class="innerText"><a href="#" id="lnkUpdateEmployer" cssclass="submenu" font-bold="false" style="color: blue" onclick="openWin('./../Employer/employer_initiated_request_for_change.aspx?userPk=XnUBQWLv2ClMGcDMhZatAywZM+Qy2nOG');" tabindex="-1">Update Employer Details</a> </span>
                                                        <br>
                                                        <br>
                                                    </li>
                                                    <li id="licreatesub"><span class="innerText"><a href="#" id="lnkcreateSubunit" cssclass="submenu" font-bold="false" style="color: blue" onclick="openWin('./../Employer/SubUnitRegistration.aspx?userPk=XnUBQWLv2ClMGcDMhZatAywZM+Qy2nOG');" tabindex="-1">Create Subunit Registration</a> </span>
                                                        <br>
                                                        <br>
                                                    </li>


                                                    <li><span class="innerText"><a href="#" id="lnkAccidentReport" cssclass="submenu" font-bold="false" style="color: blue" onclick="openWin('./../Benefits/Certificates/input_ipno_accdnt.aspx?userPk=XnUBQWLv2ClMGcDMhZatAywZM+Qy2nOG');" tabindex="-1">Accident Report (Form 12)</a> </span>
                                                        <br>
                                                        <br>
                                                    </li>
                                                    <li><span class="innerText"><a href="#" id="lnkAccidentPdf" cssclass="submenu" font-bold="false" style="color: blue" onclick="openWin('./../Benefits/Certificates/AccidentReport_register_portal.aspx?userPk=XnUBQWLv2ClMGcDMhZatAywZM+Qy2nOG');" tabindex="-1">Accident Report Print / PDF Form</a>
                                                    </span>
                                                        <br>
                                                        <br>
                                                    </li>
                                                    <li><span class="innerText"><a href="#" id="lnkWageContributoryRecord" cssclass="submenu" font-bold="false" style="color: blue" onclick="openWin('./../Benefits/Certificates/input_ipno_accdnt.aspx?userPk=XnUBQWLv2ClMGcDMhZatAywZM+Qy2nOG&amp;getPage=vZ5Scj82QJm1haJUQ/7LR1a0Y/oHT8Sx ');" tabindex="-1">Wage Contributory
                                                    Record </a></span>
                                                        <br>
                                                        <br>
                                                    </li>
                                                    <li><span class="innerText"><a href="#" id="lnkAbstnVerification" cssclass="submenu" font-bold="false" style="color: blue" onclick="openWin('./../Benefits/AV/AV_Employer_Landing_Page.aspx?userPk=XnUBQWLv2ClMGcDMhZatAywZM+Qy2nOG');" tabindex="-1">Reply For Abstention Verification</a>
                                                    </span>
                                                        <br>
                                                        <br>
                                                    </li>
                                                    <li id="lisub"><span class="innerText"><a href="#" id="hlviesubunit" cssclass="submenu" font-bold="false" style="color: blue" onclick="openWin('../Employer/Empr_view_subunit.aspx?userPk=XnUBQWLv2ClMGcDMhZatAywZM+Qy2nOG');" tabindex="-1">View Subunit Details</a><img alt="" src="../public/assets/esi/Esic_new.gif" style="height: 20px; width: 35px"></span>
                                                        <br>
                                                        <br>
                                                    </li>
                                                    <li id="linic"><span class="innerText"><a href="#" id="hlniccode" cssclass="submenu" font-bold="false" style="color: blue" onclick="openWin('../Employer/UpdateNIC.aspx?userPk=XnUBQWLv2ClMGcDMhZatAywZM+Qy2nOG');" tabindex="-1">Update NIC Code</a><img alt="" src="../public/assets/esi/Esic_new.gif" style="height: 20px; width: 35px"></span>
                                                        <br>
                                                        <br>
                                                    </li>
                                                    <li><span class="innerText"><a href="#" id="hlChangepassword" cssclass="submenu" font-bold="false" style="color: blue" onclick="openWin('../ESICInsurancePortal/ChangePassword.aspx?userPk=XnUBQWLv2ClMGcDMhZatAywZM+Qy2nOG');" tabindex="-1">Change Password </a></span>
                                                        <br>
                                                        <br>
                                                    </li>


                                                    <li id="li1"><span class="innerText"><a href="#" id="lnkHelpFiles" cssclass="submenu" font-bold="false" style="color: blue" onclick="openWin('../ESICInsurancePortal/HelpFiles.aspx?userPk=XnUBQWLv2ClMGcDMhZatAywZM+Qy2nOG');" tabindex="-1">Employer Help files</a> </span>
                                                        <img alt="" src="../public/assets/esi/star-re-s.gif" style="height: 20px; width: 20px">
                                                        <br>
                                                        <br>
                                                    </li>
                                                    <li style="visibility: hidden"><span class="innerText">
                                                        <br>
                                                        <br></span></li>
                                                    <li style="visibility: hidden"><span class="innerText"><a href="https://www.esic.in/InsuranceGlobalWebV4/ESICInsurancePortal/MC_51b.pdf" target="_blank" class="submenu" font-bold="true" style="color: blue" visible="false" tabindex="-1"><b>Help for Request for Reduce Rate of Contribution
                                                        </b></a>
                                                        <img alt="" src="../public/assets/esi/star-re-s.gif" style="height: 20px; width: 20px">
                                                    </span>
                                                        <br>
                                                        <br>
                                                    </li>

                                                </ul>
                                            </td>
				<td class="navLinkText" width="33%">
                                                <br>
                                                <span class="navheaderStyle">Employee </span>
                                                <ul class="listStyle">
                                                    <li><span class="innerText"><a href="#" id="lnkInsertIPDetails" cssclass="submenu" font-bold="false" style="color: blue" onclick="openWin('./../DataMigration/DM_EmployerIPDetails.aspx?userPk=XnUBQWLv2ClMGcDMhZatAywZM+Qy2nOG&amp;ctl=1');" tabindex="-1">Enroll Employee with previously allotted
                                                    ESI Number</a> </span>
                                                        <br>
                                                        <br>
                                                    </li>
                                                    <li><span class="innerText"><a href="#" id="lnkRegisterNewIP" cssclass="submenu" font-bold="false" style="color: blue; background-color: cyan" onclick="openWin('./employee/register');" tabindex="-1">Register/Enroll New Employee</a>
                                                    </span>
                                                        <br>
                                                        <br>
                                                    </li>
                                                    <li><span class="innerText"><a href="#" id="lnkUpdateIP" cssclass="submenu" font-bold="false" style="color: blue; background-color: cyan" onclick="openWin('./../Employee/ViewAllRegisteredEmployeesPage.aspx?userPk=XnUBQWLv2ClMGcDMhZatAywZM+Qy2nOG&amp;Mobile2kOMQkOj4SxdGGapTQZIig==');" tabindex="-1">Update Particulars
                                                    of Insured Person</a>

                                                    </span>
                                                        <br>
                                                        <br>
                                                    </li>
                                                    <li><span class="innerText"><a href="#" id="lnkmobileseedingEmployees" cssclass="submenu" font-bold="false" style="color: blue; background-color: cyan" onclick="openWin('./../Employee/Empe_IP_Mobileseeding.aspx?userPk=XnUBQWLv2ClMGcDMhZatAywZM+Qy2nOG');" tabindex="-1">Update Mobile Number of Insured Person</a></span>
                                                        <br>
                                                        <br>
                                                    </li>
                                                    <li><span class="innerText"><a href="#" id="lnkbulkmobileseedingEmployees" cssclass="submenu" font-bold="false" style="color: blue; background-color: cyan" onclick="openWin('./../Employee/UploadMobileNumber.aspx?userPk=XnUBQWLv2ClMGcDMhZatAywZM+Qy2nOG');" tabindex="-1">Bulk Upload of Mobile Number</a></span>
                                                        <br>
                                                        <br>
                                                    </li>
                                                    <li><span class="innerText"><a href="#" id="lnkbulkBankAccountEmployees" cssclass="submenu" font-bold="false" style="color: blue; background-color: cyan" onclick="openWin('./../Employee/UploadBankAccount.aspx?userPk=XnUBQWLv2ClMGcDMhZatAywZM+Qy2nOG');" tabindex="-1">Bulk Upload of Account Number</a></span>
                                                        <br>
                                                        <br>
                                                    </li>
                                                    <li><span class="innerText"><a href="#" id="lnkUploadAccountDoc" cssclass="submenu" font-bold="false" style="color: blue" onclick="openWin('./../Employer/IPAccountDocBulkUpload.aspx?userPk=XnUBQWLv2ClMGcDMhZatAywZM+Qy2nOG');" tabindex="-1">Upload Bank Account related Document of Insured Person</a>
                                                    </span>
                                                        <br>
                                                        <br>
                                                    </li>
                                                    <li><span class="innerText"><a href="#" id="lnkCounterFoil" cssclass="submenu" font-bold="false" style="color: blue" onclick="openWin('./../Employee/ViewCounterFoil.aspx?userPk=XnUBQWLv2ClMGcDMhZatAywZM+Qy2nOG');" tabindex="-1">e-Pehchan Card</a> </span>
                                                        <br>
                                                        <br>
                                                    </li>
                                                    <!-- <li><span class="innerText">
                                                   <a href="#" id="lnkPendingRegistration" CssClass="submenu" Text="Pending IP Registration" Font-Bold="false" Style="color: blue"></a>
                                                </span>
                                                    <br />
                                                    <br />
                                                </li> -->
                                                    <li><span class="innerText"><a href="#" id="lnkListofEmployees" cssclass="submenu" font-bold="false" style="color: blue" onclick="openWin('./../Employee/FormThree.aspx?userPk=XnUBQWLv2ClMGcDMhZatAywZM+Qy2nOG');" tabindex="-1">List of Employees </a></span>
                                                        <br>
                                                        <br>
                                                    </li>


                                                    <li><span class="innerText"><a href="#" id="lnkhealthpassbook" cssclass="submenu" font-bold="false" style="color: blue" onclick="openWin('./../RevenueOne/Action On Defaulter/EMUDIPDetails.aspx');" tabindex="-1">Health Passbook</a></span>
                                                        <br>
                                                        <br>
                                                    </li>
                                                    <li><span class="innerText"><a href="#" id="lnkmed11Certificate" cssclass="submenu" font-bold="true" style="color: blue" onclick="openWin('./../Employee/Med11IPSearch_Employer.aspx?userPk=XnUBQWLv2ClMGcDMhZatAywZM+Qy2nOG');" tabindex="-1">View Med11 Certificate</a><img src="../public/assets/esi/Esic_new.gif" border="0" width="35" height="20" alt="animated-star-image-0013"></span>
                                                        <br>
                                                        <br>
                                                    </li>
                                                    <li><span class="innerText"><a href="#" id="lnknotification" cssclass="submenu" font-bold="true" style="color: blue" onclick="openWin('./../Employee/EmployerNotification.aspx');" tabindex="-1">Notification</a>
                                                        <br>
                                                        <br></span></li>

                                                    <li><span class="innerText"><a href="#" id="lnkUAN" cssclass="submenu" font-bold="true" style="color: blue" onclick="openWin('./../Employee/Empe_IP_UANNumber.aspx?userPk=XnUBQWLv2ClMGcDMhZatAywZM+Qy2nOG');" tabindex="-1">Employee UAN Seeding</a><img src="../public/assets/esi/Esic_new.gif" border="0" width="35" height="20" alt="animated-star-image-0013"></span>
                                                        <br>
                                                        <br>
                                                        <br>
                                                    </li>
                                                    <li><span class="innerText"><a href="#" id="lnkeditip" cssclass="submenu" font-bold="true" style="color: blue" onclick="openWin('./../Employee/empeRegTaskListeditip.aspx?userPk=XnUBQWLv2ClMGcDMhZatAywZM+Qy2nOG');" tabindex="-1">Edit Employee Workflow</a><img src="../public/assets/esi/Esic_new.gif" border="0" width="35" height="20" alt="animated-star-image-0013"></span>
                                                        <br>
                                                        <br>
                                                    </li>
                                                    <li><span class="innerText"><a href="#" id="lnkaadhaar" cssclass="submenu" font-bold="true" style="color: blue" onclick="openWin('./../Employee/IPAadhaarSeeding.aspx?userPk=XnUBQWLv2ClMGcDMhZatAywZM+Qy2nOG');" tabindex="-1">Aadhaar Seeding for IP and Dependents</a><img src="../public/assets/esi/Esic_new.gif" border="0" width="35" height="20" alt="animated-star-image-0013"></span>
                                                        <br>
                                                        <br>
                                                    </li>
                                                    <li><span class="innerText"><a href="#" id="lnkdepip" cssclass="submenu" font-bold="true" style="color: blue" onclick="openWin('./../Employee/Empe_IP_Newdependant_Approval.aspx?userPk=XnUBQWLv2ClMGcDMhZatAywZM+Qy2nOG');" tabindex="-1">New Born Baby Details for Approval</a><img src="../public/assets/esi/Esic_new.gif" border="0" width="35" height="20" alt="animated-star-image-0013"></span>
                                                        <br>
                                                        <br>

                                                    </li>

                                                    <li style="visibility: hidden"><span class="innerText"> </span>
                                                        <br>
                                                        <br>
                                                    </li>

                                                </ul>
                                            </td>
				<td class="navLinkText" width="33%">
                                                <br>
                                                <span class="navheaderStyle">Monthly Contribution</span>
                                                <ul class="listStyle">

                                                    <li><span class="innerText"><a href="#" id="lnkMonthlyContribution" cssclass="submenu" font-bold="false" style="color: blue; background-color: cyan" onclick="openWin1('./monthly-contribution','challan');" tabindex="-1">File Monthly
                                                    Contributions</a> </span>
                                                        <br>
                                                        <br>
                                                    </li>
                                                    <li><span class="innerText"><a href="#" id="lnkGenerateChallan" cssclass="submenu" font-bold="false" style="color: blue; background-color: cyan" onclick="openWin1('./generate-challan','challan');" tabindex="-1">Generate
                                                    Challan</a> </span>
                                                        <br>
                                                        <br>
                                                    </li>
                                                    <li><span class="innerText"><a href="#" id="lnkModifyChallan" cssclass="submenu" font-bold="false" style="color: blue" onclick="openWin('./../RevenueOne/Monthly%20Contribution/ModifyChallan.aspx?userPk=XnUBQWLv2ClMGcDMhZatAywZM+Qy2nOG');" tabindex="-1">Modify Challan</a> </span>
                                                        <br>
                                                        <br>
                                                    </li>
                                                    <li><span class="innerText"><a href="#" id="LnkViewContributionHistory" cssclass="submenu" font-bold="false" style="color: blue" onclick="openWin('./../RevenueOne/Monthly%20Contribution/ViewContributionHistory.aspx?userPk=XnUBQWLv2ClMGcDMhZatAywZM+Qy2nOG');" tabindex="-1">ViewContributionHistory</a>
                                                    </span>
                                                        <br>
                                                        <br>
                                                    </li>
                                                    <li><span class="innerText"><a href="#" id="lnkInServiceList" cssclass="submenu" font-bold="false" style="color: blue" onclick="openWin('./../RevenueOne/Monthly%20Contribution/ChallanCreation_New.aspx?userPk=XnUBQWLv2ClMGcDMhZatAywZM+Qy2nOG');" tabindex="-1">Omitted Wages Challan</a>
                                                    </span>
                                                        <br>
                                                        <br>
                                                    </li>
                                                    <li><span class="innerText"><a href="#" id="lnlledgercontractmaster" cssclass="submenu" font-bold="false" style="color: blue" onclick="openWin('./../Ledger/ContractMaster.aspx?userPk=XnUBQWLv2ClMGcDMhZatAywZM+Qy2nOG');" tabindex="-1">Contractor/Principal Employer Master
                                                    </a></span>
                                                        <br>
                                                        <br>
                                                    </li>
                                                    <li><span class="innerText"><a href="#" id="lnlledgeripmapping" cssclass="submenu" font-bold="false" style="color: blue" onclick="openWin('./../Ledger/ContratorMapping.aspx?userPk=XnUBQWLv2ClMGcDMhZatAywZM+Qy2nOG');" tabindex="-1">IP Mapping with Contractor/Principal
                                                    Employer </a></span>
                                                        <br>
                                                        <br>
                                                    </li>
                                                    <li><span class="innerText"><a href="#" id="lnlledgerbulkipmapping" cssclass="submenu" font-bold="false" style="color: blue" onclick="openWin('./../Ledger/BulkEmployeeMapping.aspx?userPk=XnUBQWLv2ClMGcDMhZatAywZM+Qy2nOG');" tabindex="-1">Bulk IP Mapping with Contractor/Principal
                                                    Employer </a></span>
                                                        <br>
                                                        <br>
                                                    </li>
                                                    <li><span class="innerText"><a href="#" id="LnkViewContractorHistory" cssclass="submenu" font-bold="false" style="color: blue" onclick="openWin('./../RevenueOne/Monthly%20Contribution/contractorHistory.aspx?userPk=XnUBQWLv2ClMGcDMhZatAywZM+Qy2nOG');" tabindex="-1">View Contribution History(Contractor/Principal
                                                    Employer Wise)</a> </span>
                                                        <br>
                                                        <br>
                                                    </li>
                                                    <li><span class="innerText"><a href="#" id="lnkSelfCertification" cssclass="submenu" font-bold="false" style="color: blue" onclick="openWin('./../RevenueOne/Monthly%20Contribution/SelfCertification.aspx?userPk=XnUBQWLv2ClMGcDMhZatAywZM+Qy2nOG');" tabindex="-1">Self Certification</a> </span>
                                                        <br>
                                                        <br>
                                                    </li>
                                                    <li><span class="innerText"><a href="#" id="lnkForm5" cssclass="submenu" font-bold="false" style="color: blue" onclick="openWin('./../RevenueOne/Monthly%20Contribution/Form-5Submission.aspx?userPk=XnUBQWLv2ClMGcDMhZatAywZM+Qy2nOG');" tabindex="-1">View RC</a> </span>
                                                        <br>
                                                        <br>
                                                    </li>
                                                    <li><span class="innerText"><a href="#" id="lnkRecDef" cssclass="submenu" font-bold="false" style="color: blue" onclick="openWin('./../RevenueOne/Monthly%20Contribution/ChallanPayment.aspx?Employeecode=XnUBQWLv2ClMGcDMhZatAywZM+Qy2nOG');" tabindex="-1">Recovery/Defaulter Challan</a> </span>
                                                        <br>
                                                        <br>
                                                    </li>
                                                    <li><span class="innerText"><a href="#" id="lnkUrcd" cssclass="submenu" font-bold="false" style="color: blue; background-color: cyan" onclick="openWin('./../RevenueOne/Monthly%20Contribution/ChallanEntry.aspx?userPk=XnUBQWLv2ClMGcDMhZatAywZM+Qy2nOG');" tabindex="-1">Updation of Unrealized
                                                    Challan Details</a> </span>
                                                        <br>
                                                        <br>
                                                    </li>
                                                    <li><span class="innerText"><a href="#" id="lnkCD" cssclass="submenu" font-bold="false" style="color: blue; background-color: cyan" onclick="openWin('https://www.esic.in/InsuranceGlobalWebV4/RevenueOne/Monthly%20Contribution/ChallanDoubleVerification.aspx?userPk=XnUBQWLv2ClMGcDMhZatAywZM+Qy2nOG&amp;challanNo=JUGm1Rbj4gM=');" tabindex="-1">OnlineChallan Doubleverification</a>
                                                    </span>
                                                        <br>
                                                        <br>
                                                    </li>

                                                    <li><span class="innerText"><a href="#" id="lnkInterestPayment" cssclass="submenu" font-bold="false" style="color: blue" onclick="openWin('./../RevenueOne/Monthly%20Contribution/InterestPayment.aspx?Employeecode=XnUBQWLv2ClMGcDMhZatAywZM+Qy2nOG');" tabindex="-1">Interest For Delay Payment</a> </span>
                                                        <br>
                                                        <br>
                                                    </li>


                                                    <li><span class="innerText"><a href="#" id="lnkCosoleMC" cssclass="submenu" font-bold="false" style="color: blue; background-color: cyan" onclick="openWin1('https://www.esic.in/InsuranceGlobalWebV4/RevenueOne/Monthly%20Contribution/MonthlyContributionConHome.aspx?userPk=XnUBQWLv2ClMGcDMhZatAywZM+Qy2nOG','challan');" tabindex="-1">File Consolidated
                                                    Monthly Contributions</a> </span>
                                                        <br>
                                                        <br>
                                                    </li>
                                                    <li><span class="innerText"><a href="#" id="lnkCosoleChallan" cssclass="submenu" font-bold="false" style="color: blue; background-color: cyan" onclick="openWin1('https://www.esic.in/InsuranceGlobalWebV4/RevenueOne/Monthly%20Contribution/ConsolidatedChallan.aspx?userPk=XnUBQWLv2ClMGcDMhZatAywZM+Qy2nOG');" tabindex="-1">Consolidated
                                                    Monthly Contribution Challan</a> </span>
                                                        <br>
                                                        <br>
                                                    </li>
                                                    <li><span class="innerText"><a href="#" id="LnkConsolHistory" cssclass="submenu" font-bold="false" style="color: blue" onclick="openWin1('https://www.esic.in/InsuranceGlobalWebV4/RevenueOne/Monthly%20Contribution/ViewConContributionHistory.aspx?userPk=XnUBQWLv2ClMGcDMhZatAywZM+Qy2nOG');" tabindex="-1">Consolidated View Contribution History</a>
                                                    </span>
                                                        <br>
                                                        <br>
                                                    </li>

                                                </ul>
                                            </td>
			</tr>
		</tbody></table>

                                </td>
                            </tr>
                        </tbody></table>
                    </td>
	</tr>
</tbody></table>

            <table border="0">
                <tbody><tr>
                    <td class="leftTopFormLabel">

                    </td>
                </tr>
            </tbody></table>
            <!--<div id="clearfooter">
        </div>-->
        </font></font></b></b></div><b><b><font color:red=""><font>
        <div id="Div1" style="position: fixed; z-index: 100001; left: 600px; top: 0px;">
            <table id="table7" width="350px">
	<tbody><tr>
		<td colspan="2" bgcolor="PapayaWhip" class="style1" style="border: 1px groove #000000; font-family: Arial, Helvetica, sans-serif; color: #070000; text-align: left;">Either last logged-in session was not closed/logged-out OR another user is already
                    logged in. Please check last logged in time.
                    </td>
		<td style="width: 30px;" align="right" bgcolor="PapayaWhip">
                        <input type="submit" name="div1_close" value="X" onclick="javascript:OpenSanjeevanipopup();" id="div1_close" style="font-weight:bold;width:30px;">
                    </td>
	</tr>
</tbody></table>

        </div>
        <div id="panel1_pop" align="center" style="width: 70%; display: none; position: fixed; z-index: 100001;">

            <div class="alertPopUpContainer">
                <div class="alertPopHeader">
                    <div class="logoSide">
                        <img src="../public/assets/esi/NCS_Logo.png" class="altAttrib" alt="National Career Service Logo" title="National Career Service">
                    </div>
                    <div class="headerSide">
                        <div class="alertAttentionTxt paddingLeft30">
                            <u>Register on NCS</u>
                        </div>
                    </div>
                    <div class="clear">
                    </div>
                </div>
                <div class="alertBodyTxt" style="text-align: left;">
                    <p class="alert-text">
                        <strong>Interested employers can register and avail free of cost services on the National
                        Career Service(NCS) Portal !</strong>
                    </p>
                    <p class="alert-text">
                        National Career Service (NCS) is a mission mode project implemented by the Ministry
                    of Labour and Employment with an aim to provide a variety of employment related
                    services. Employers who wish to register on the National Career Service Portal can
                    share their consent and they will be registered on the NCS Portal <a href="https://www.ncs.gov.in/" target="_blank" tabindex="-1">(www.ncs.gov.in)</a>.
                    </p>
                    <p class="alert-text" style="color: red">
                        If already registered directly on NCS portal or via EPFO, then you need not register
                    again.
                    </p>
                    <p class="alert-text">
                        Free of cost services offered by NCS for Employers:<br>
                        <strong>
                            </strong></p><ul class="alert-text"><strong>
                                <li>Post New Jobs</li>
                                <li>Search and Shortlist Suitable Candidates</li>
                                <li>Send Interview Invites</li>
                                <li>Hire from a pool of 1 Crore+ Jobseekers</li>
                                <li>Participate in Events and Job Fairs</li>
                            </strong></ul><strong>
                        </strong>
                    <p></p>
                </div>
                <div>
                    <input type="button" name="btnYes" value="YES" onclick="this.disabled = true; this.value = 'Submitting...';__doPostBack('btnYes','')" id="btnYes" title="Yes" tabindex="-1">
                    <input type="button" name="btnNo" value="NO" onclick="this.disabled = true; this.value = 'Submitting...';__doPostBack('btnNo','')" id="btnNo" title="No" tabindex="-1">
                </div>
                <div class="alertPopUpFooter">
                    © Content Owned and Updated by Ministry of Labour &amp; Employment
                </div>
            </div>
            </div>






        <div id="panel1_sub" style="display: none; position: fixed; z-index: 100001;">
            <table id="tableid" width="450px">
                <tbody><tr>
                    <td colspan="2" bgcolor="PapayaWhip" class="style5" style="background-color: #FBFAC2; border: 1px groove #000000; font-family: Arial, Helvetica, sans-serif; height: 40px; width=350px;">
                        <b>It is recommended to close the browser for security purposes</b>
                    </td>
                </tr>
                <tr>
                    <td style="background-color: #CCCCCC; border: 1px groove #000000; text-align: center;">
                        <input type="submit" name="BtnOK" value="OK" id="BtnOK" class="style3" tabindex="-1">
                    </td>
                </tr>
            </tbody></table>
        </div>
        <div id="footersection">
            <table id="Table111" cellspacing="0" cellpadding="0" align="Center" border="0" style="border-width:0px;height:60px;width:100%;border-collapse:collapse;">
	<tbody><tr class="dBlockFooter" style="background-color:White;">
		<td class="dBlockFooter" colspan="5">
                        DISCLAIMER:Copyright © 2021, ESIC, India. All Rights Reserved. Best viewed in 1024 x 768 pixels,
                    Site maintained by : ESIC. Designed and Developed by CMS Computers LTD.
                        <span id="lblIP" style="color:White;">IP Address : 44. </span>
                        <br>
                        Release Version No.: V2.5.423
                    </td>
	</tr>
</tbody></table>
        </div>


        <div id="Panelbank2" align="center" style="width: 70%; display: none; position: fixed; z-index: 100001;">

            <table style="background-color: #FBFAC2 !important; padding: 12px; border-radius: 25px;" border="1" cellpadding="2" cellspacing="0">
                <tbody><tr>
                    <td style="text-align: left; font-size: 14px; font-family: Arial; color: #742902; border-bottom: hidden;">
                        <br>
                        <u>Attention Dear Employers!!</u>
                        <br>

                        <ol style="text-align: justify">
                            <li>Insurance Number is unique and is valid for the lifetime of the employee. The employee
                            should not be issued a new Insurance Number for change in employment or location.
                            It shall be your responsibility to ensure that the employee is not already having
                            an Insurance number. Registering again for a New Insurance number is illegal. The
                            employee may be debarred from benefits for the contributions made in the previous
                            Insurance Number. </li>
                            <br>
                            <li>Submission of valid &amp; correct Mobile Number as well as Bank Account details of the
                            employees has been made mandatory. </li>
                            <br>
                            <li>It shall be responsibility of Employer to provide correct information to prevent
                            any fraudulent activity and avoid any legal or administrative consequences thereof.</li>
                        </ol>

                        <u>ध्यान
                        दें प्रिय नियोक्ता !!</u>
                        <ol style="text-align: justify">
                            <li>बीमा संख्या अद्वितीय है और कर्मचारी के जीवनकाल के लिए मान्य है। कर्मचारी को रोजगार
                            या स्थान में परिवर्तन के लिए एक नया बीमा नंबर जारी नहीं किया जाना चाहिए। यह सुनिश्चित
                            करना आपकी ज़िम्मेदारी होगी कि कर्मचारी के पास पहले से बीमा संख्या (इंश्योरेंस नंबर)
                            नहीं है। नए बीमा नंबर के लिए फिर से पंजीकरण करना अवैध है। कर्मचारी को पिछले बीमा
                            संख्या में किए गए योगदान के लिए लाभ से वंचित किया जा सकता है।</li>
                            <br>
                            <li>कर्मचारियों के वैध और सही मोबाइल नंबर के साथ-साथ बैंक खाता विवरण प्रस्तुत करना अनिवार्य
                            कर दिया गया है। </li>
                            <br>

                            <li>किसी भी धोखाधड़ी की गतिविधि को रोकने और उसके किसी भी कानूनी या प्रशासनिक परिणामों
                            से बचने के लिए सही जानकारी प्रदान करना नियोक्ता की जिम्मेदारी होगी।</li>
                        </ol>
                        <br>

                    </td>
                </tr>
                <tr>
                    <td style="text-align: center; border-top: hidden">
                        <input type="submit" name="btnpnlcolse" value="I Agree" onclick="javascript:OpenNewPasswordpopup();" id="btnpnlcolse" title="I Agree" tabindex="-1"><br>
                    </td>
                </tr>
            </tbody></table>

</div>
        <div id="pnlPwdPolicy" align="center" style="width: 70%; display: none; position: fixed; z-index: 100001;">

            <table style="background-color: #FBFAC2 !important; padding: 12px; border-radius: 25px;" border="1" cellpadding="2" cellspacing="0">
                <tbody><tr>
                    <td style="text-align: left; font-size: 14px; font-family: Arial; color: #742902; font: bold; border-bottom: hidden">
                        <br>
                        <u>Attention Dear Employers!!</u>
                        <br>
                        <ol style="text-align: justify">
                            <li>Register Employees online within 10 days from the date of appointment.</li>
                            <br>
                            <li>Contribution must be deposited within the due date. Contribution cannot be made
                            online after 42 days from the end date of the contribution period.</li>
                            <br>
                            <li>ESIC is about to implement a Password Policy so as to facilitate employers login
                            to <a href="https://www.esic.gov.in/" id="A1" font-bold="true" style="color: #742902;" tabindex="-1">www.esic.gov.in </a>, more securely. Auto-resetting of the Password in a fixed time
                            interval shall be one of the rules. The employer shall be required to reset / renew
                            password, mandatorily, through a mobile OTP based authentication process. OTP shall
                            be sent to the valid, unique, registered mobile number. Hence, you are requested
                            to update your correct &amp; valid mobile number in ESIC database to prevent any login
                            related issues.</li>
                        </ol>
                        <u>ध्यान
                        दें प्रिय नियोक्ता !!</u><br>

                        <ol style="text-align: justify">
                            <li>नियुक्ति की तारीख से 10 दिनों के भीतर कर्मचारियों को ऑनलाइन पंजीकृत करें।</li>
                            <br>
                            <li>अंशदान नियत तिथि के भीतर जमा करना होगा। अंशदान अवधि की अंतिम तिथि से 42 दिनों के
                            बाद अंशदान ऑनलाइन नहीं किया जा सकता है।</li>
                            <br>
                            <li>ESIC अधिक सुरक्षित रूप से <a href="https://www.esic.gov.in/" id="A10" font-bold="true" style="color: #742902;" tabindex="-1">www.esic.gov.in </a>पर नियोक्ताओं के लॉगिन
                            की सुविधा प्रदान करने के लिए एक पासवर्ड नीति लागू करने वाला है। निश्चित समय अंतराल
                            में पासवर्ड का ऑटो-रीसेट करना नियमों में से एक होगा। नियोक्ता को मोबाइल OTP आधारित
                            प्रमाणीकरण प्रक्रिया के माध्यम से अनिवार्य रूप से पासवर्ड रीसेट / नवीनीकृत करने
                            की आवश्यकता होगी। OTP को वैध, अद्वितीय, पंजीकृत मोबाइल नंबर पर भेजा जाएगा। इसलिए,
                            आपसे अनुरोध है कि किसी भी लॉगिन से संबंधित समस्याओं को रोकने के लिए ESIC डेटाबेस
                            में अपना सही और मान्य मोबाइल नंबर अपडेट करें। </li>
                        </ol>
                        <br>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center; border-top: hidden">
                        <input type="submit" name="btnpnlPwdcolse" value="I Agree" id="btnpnlPwdcolse" title="I Agree" tabindex="-1"><br>
                    </td>
                </tr>
            </tbody></table>

</div>



        <div id="pnleSanjeevani" align="center" style="width: 70%; display: none; position: fixed; z-index: 100001;">

            <table style="background-color: red !important; padding: 12px; border-radius: 25px;" border="1" cellpadding="2" cellspacing="0">
                <tbody><tr>
                    <td style="text-align: left; font-size: 14px; font-family: Arial; color: white; font: bold; border-bottom: hidden">
                        <br>
                        <u>Attention Dear Employers!!</u>
                        <br>
                        <ol style="text-align: justify">
                            <p>
                                ESIC has recently introduced Aadhaar Seeding of Insured Persons and their family
                            members in ESIC Portal on voluntary basis. All Employers are requested to seed Aadhaar
                            Number of Insured Persons and their family members registered in ESIC. Benefits
                            of Aadhaar Seeding are:
                            </p>
                            <br>
                            <li>Easy registration of employees through Aadhaar Number. Personal details will get
                            auto populated saving time and effort </li>
                            <li>Seeding of Aadhaar of existing IPs will eliminate the anomalies in their personal
                            details thereby reducing the requirement of frequent changes in personal details
                            by employee. </li>
                            <li>Aadhaar seeding of employees will eliminate the possibility of multiple registration
                            number of any employee </li>
                        </ol>
                        <u>ध्यान दें प्रिय नियोक्ता !!</u><br>
                        <ol style="text-align: justify">
                            <p>
                                ईएसआईसी ने हाल ही में स्वैच्छिक आधार पर बीमाकृत व्यक्तियों और उनके परिवार के सदस्यों
                            के लिए आधार सीडिंग शुरू की है। सभी नियोक्ताओं से अनुरोध है कि वे पंजीकृत बीमाकृत
                            व्यक्तियों और उनके परिवार के सदस्यों की आधार संख्या को सीड करें। आधार सीडिंग के
                            निम्नलिखित लाभ हैं:<br>
                            </p>
                            <br>
                            <li>आधार संख्या के माध्यम से कर्मचारियों का आसान पंजीकरण। व्यक्तिगत विवरण स्वचालित रूप
                            से पॉप्युलेट होने से समय और श्रम की बचत होगी।</li>
                            <li>मौजूदा बीमाकृत व्यक्तियों के आधार को जोड़ने से उनके व्यक्तिगत विवरण में विसंगतियां
                            समाप्त हो जाएंगी जिससे कर्मचारी द्वारा व्यक्तिगत विवरण में बार-बार बदलाव की आवश्यकता
                            कम हो जाएगी।</li>
                            <li>कर्मचारियों की आधार सीडिंग किसी भी कर्मचारी के एक से अधिक पंजीकरण संख्या की संभावना
                            को समाप्त कर देगी।</li>
                        </ol>
                        <br>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center; border-top: hidden">
                        <input type="submit" name="btnpnlSanjeevanicolse" value="Close" onclick="javascript:OpenNewbankpopup();" id="btnpnlSanjeevanicolse" title="Close" tabindex="-1"><br>
                    </td>
                </tr>
            </tbody></table>

</div>


        <div id="pnlpopup" align="center" style="width: 70%; display: none; position: fixed; z-index: 100001;">


            <div class="alertPopUpContainer">

                <div class="alertBodyTxt" style="text-align: left">
                    <p class="alert-text">

                    </p>
                    <p class="alert-text">
                        Registration Status:
                        <span id="lblStatus"></span>
                    </p>
                    <p class="alert-text">


                    </p>


                    <p class="alert-text">
                        Application Form ID:
                        <span id="lblFormId"></span>
                    </p>
                    <p class="alert-text">
                        NCS Registration ID:
                        <span id="lblRegitrstionId"></span>
                    </p>
                    <p class="alert-text">
                        <span id="lbllogincred"></span>
                        <span id="lblloginmsg" style="color:Black;"></span>
                    </p>


                </div>

                <div class="alertPopUpFooter">
                    <input type="submit" name="btnncsclose" value="I Agree" id="btnncsclose" title="I Agree" tabindex="-1">
                </div>
            </div>

</div>
        <input type="submit" name="btn" value="" id="btn" style="display: none" tabindex="-1">
        <input type="submit" name="Button2" value="" id="Button2" style="display: none" tabindex="-1">
        <input type="submit" name="Button1" value="" id="Button1" style="display: none" tabindex="-1">
        <input type="submit" name="Button4" value="" id="Button4" style="display: none" tabindex="-1">

        <input type="submit" name="Button5" value="" id="Button5" style="display: none" tabindex="-1">

        <input type="submit" name="btnncp" value="" id="btnncp" style="display: none" tabindex="-1">
        <span id="Label2"></span>
        <span id="Label3"></span>










        <input type="hidden" name="hfPopup" id="hfPopup" value="True" tabindex="-1">


<script type="text/javascript">
//<![CDATA[
;(function() {var fn = function() {AjaxControlToolkit.ModalPopupBehavior.invokeViaServer('popup', true); Sys.Application.remove_load(fn);};Sys.Application.add_load(fn);})();Sys.Application.initialize();
Sys.Application.add_init(function() {
    $create(AjaxControlToolkit.ModalPopupBehavior, {"BackgroundCssClass":"modalBackground","PopupControlID":"panel1_pop","dynamicServicePath":"/InsuranceGlobalWebV4/ESICInsurancePortal/PortalHome.aspx","id":"ModalPopupExtender1"}, null, null, $get("Label3"));
});
Sys.Application.add_init(function() {
    $create(AjaxControlToolkit.ModalPopupBehavior, {"BackgroundCssClass":"modalBackground","PopupControlID":"panel1_sub","dynamicServicePath":"/InsuranceGlobalWebV4/ESICInsurancePortal/PortalHome.aspx","id":"ModalPopupExtender3"}, null, null, $get("Label2"));
});
Sys.Application.add_init(function() {
    $create(AjaxControlToolkit.ModalPopupBehavior, {"BackgroundCssClass":"modalBackground","PopupControlID":"pnlpopup","dynamicServicePath":"/InsuranceGlobalWebV4/ESICInsurancePortal/PortalHome.aspx","id":"ModalPopupExtender2"}, null, null, $get("btnncp"));
});
Sys.Application.add_init(function() {
    $create(AjaxControlToolkit.ModalPopupBehavior, {"CancelControlID":"div1_close","PopupControlID":"Div1","X":600,"Y":0,"dynamicServicePath":"/InsuranceGlobalWebV4/ESICInsurancePortal/PortalHome.aspx","id":"popup","repositionMode":1}, null, null, $get("btn"));
});
Sys.Application.add_init(function() {
    $create(AjaxControlToolkit.ModalPopupBehavior, {"CancelControlID":"btnpnlcolse","PopupControlID":"Panelbank2","dynamicServicePath":"/InsuranceGlobalWebV4/ESICInsurancePortal/PortalHome.aspx","id":"mpbank","repositionMode":1}, null, null, $get("Button2"));
});
Sys.Application.add_init(function() {
    $create(AjaxControlToolkit.ModalPopupBehavior, {"CancelControlID":"btnpnlPwdcolse","PopupControlID":"pnlPwdPolicy","dynamicServicePath":"/InsuranceGlobalWebV4/ESICInsurancePortal/PortalHome.aspx","id":"mpPwdPolicy","repositionMode":1}, null, null, $get("Button4"));
});
Sys.Application.add_init(function() {
    $create(AjaxControlToolkit.ModalPopupBehavior, {"CancelControlID":"btnpnlSanjeevanicolse","PopupControlID":"pnleSanjeevani","dynamicServicePath":"/InsuranceGlobalWebV4/ESICInsurancePortal/PortalHome.aspx","id":"mpeSanjeevani","repositionMode":1}, null, null, $get("Button5"));
});
//]]>
</script>


    <script type="text/javascript">
        godate();
        javascript: window.history.forward(1);
    imgbtnLogout
    </script>
<script type="text/javascript">
 $("#imgbtnLogout").click(function(event) {
      window.location.href = "<?= base_url('esi/logout') ?>";
    });
</script>

<script type="text/javascript">
    function preventBack() { window.history.forward(); }
    setTimeout("preventBack()", 10);
    window.onunload = function () { null };
</script>


</font></font></b></b></form></body></html>