<!DOCTYPE html>
<!-- saved from url=(0080)https://ewaybillgst.gov.in/BillGeneration/EBPrint.aspx?ewb_no=571537098126&cal=1 -->
<html xmlns="http://www.w3.org/1999/xhtml" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style data-merge-styles="true"></style><style data-merge-styles="true"></style><style data-merge-styles="true"></style><meta name="viewport" content="width=device-width, initial-scale=1"><title>
	E-Way Bill System
</title><link rel="icon" href="../public/assets/eway/favicon.ico" type="image/x-icon">

    <!-- CSS Files-->
    <link href="../public/assets/eway/bootstrap.min.css" rel="stylesheet"><link href="../public/assets/eway/css/font-awesome.min.css" rel="stylesheet"><link href="../public/assets/eway/css/themify-icons.css" rel="stylesheet"><link href="../public/assets/eway/jquery-ui.css" rel="stylesheet">

    <!-- THEME STYLES-->
    <link href="../public/assets/eway/main.min.css" rel="stylesheet">

    <!-- Datatables css -->
    <link href="../public/assets/eway/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- CORE PLUGINS-->

    <!-- JS here -->
    <!-- Core Jquery,  Core Bootstrap -->
    <script src="../public/assets/eway/jquery.min.js" type="text/javascript"></script>
    <script src="../public/assets/eway/popper.min.js" type="text/javascript"></script>
    <script src="../public/assets/eway/bootstrap.min.js" type="text/javascript"></script>
    <script src="../public/assets/eway/jquery-ui.min.js" type="text/javascript"></script>
    <script src="../public/assets/eway/metisMenu.min.js" type="text/javascript"></script>
    <script src="../public/assets/eway/jquery.slimscroll.min.js" type="text/javascript"></script>

    <!-- CORE SCRIPTS-->
    <script src="../public/assets/eway/app.min.js" type="text/javascript"></script>

    <!-- Datatables css -->
    <script src="../public/assets/eway/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="../public/assets/eway/dataTables.bootstrap4.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function () { });
        $(document).keydown(function (event) {
            if (event.keyCode == 123) {
                return false;
            }
            else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) {
                return false;
            }
        });
        $(document).on("contextmenu", function (e) {
            e.preventDefault();
        });
    </script>
<?php //print_r(session()->get('eway-bill-'.$billNumber));?>
    
    <script type="text/javascript" src="../public/assets/eway/qrcode.js"></script>
    <script type="text/javascript" src="../public/assets/eway/jquery-barcode.min.js"></script>
    <link href="../public/assets/eway/Print.css" rel="stylesheet" media="print">
    <script type="text/javascript">
        $(document).ready(function () {
            generatebarcode();
            generateQRCode();                    
        });
        function generateQRCode() {

            var typeNumber = 4;
            var errorCorrectionLevel = 'L';
            var qr = qrcode(typeNumber, errorCorrectionLevel);
            qr.addData(document.getElementById('qrCodeGen').value);
            qr.make();
            document.getElementById('plBarCodeNew').innerHTML = qr.createImgTag(4, 2);
        }
        function generatebarcode() {
            $(".barcode").barcode(document.getElementById('barcodeGen').value, "code128");
        }
    </script>

    <script type="text/javascript">
        function expandtext(expand) {
            while (expand.rows > 1 && expand.scrollHeight < expand.offsetHeight) {
            }
        }
    </script>
</head>
<body class="has-animation">
    <form name="aspnetForm" method="post" action="../eway-simulation/print-detail-bill?ewb_no=<?php echo $billNumber; ?>&amp;cal=1" id="aspnetForm" autocomplete="off">
<div>
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="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">
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['aspnetForm'];
if (!theForm) {
    theForm = document.aspnetForm;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<script src="../public/assets/eway/WebResource.axd" type="text/javascript"></script>


<script type="text/javascript">
//<![CDATA[
javascript:generateQRCode();//]]>
</script>

<script src="../public/assets/eway/ScriptResource.axd" type="text/javascript"></script>
<script src="../public/assets/eway/ScriptResource(1).axd" type="text/javascript"></script>
<div>

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="E7FD9D6A">
	<input type="hidden" name="__SCROLLPOSITIONX" id="__SCROLLPOSITIONX" value="0">
	<input type="hidden" name="__SCROLLPOSITIONY" id="__SCROLLPOSITIONY" value="0">
	<input type="hidden" name="__VIEWSTATEENCRYPTED" id="__VIEWSTATEENCRYPTED" value="">
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="e8wM4Zb5nSz/3QbE698Wqd+7HtZ3V4ILJe1YBITvETlOoG4bjQBozRd/seTD6zbvu2hXWJcxSYErf+IkRbUPWP7pXDvs5BsBZ8OD7cwDV2fc8QZiYB2SkZ+qKWi/lQmp9cE1qGhNAEXyGEUT8eGKAvaZm6kCiZcjWuRpuZSxb3AORzpt1rRYKdwMSyZmE7t4Rg7HiBJe2zaHrqo8BzllWKGrxGktuTtl/9s0/KkJQnqwWyw6VoC5ay7iupMn5BU9q3QcFGtuFu/IR66Z/1oBWqwYAms8y9DEbclTxW7VNmR4/FRSRdEgLfPP5urGL2y2LVEUEilyMmgx524QsvvWh1m6BEvtCWHdtfaDWtfhHd+LYETO1kcJurolNaeUgT2KXxXM/hfHD5zT0JPDFxHTtw==">
</div>

        <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ctl00$ScriptManager1', 'aspnetForm', [], [], [], 90, 'ctl00');
//]]>
</script>


        <div class="page-wrapper">

            
                <!-- START HEADER-->
                <header class="header">
                    <div class="page-brand brandexceptmainmenu">
                        <ul class="nav navbar-toolbar">
                            <li>
                                <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
                            </li>
                        </ul>
                    </div>

                    <div class="flexbox flex-1">
                        <a class="link form-inline brandlink p-0" href="../eway-simulation/print-bill?ewb_no=<?php echo $billNumber; ?>&amp;cal=1#">
                            <img src="../public/assets/eway/ind.png" alt="Emblem" style="border-width:0px;">
                            <p class="logobrand">
                                Goods and Services Tax 
                            <br>
                                <span class="brand-tip">e - Way Bill System</span>
                            </p>
                            
                        </a>

                        <!-- START TOP-RIGHT TOOLBAR-->
                        <ul class="nav navbar-toolbar p-0">

                            <li class="dropdown dropdown-inbox">
                                <img src="../public/assets/eway/Gstlogo.png" alt="GST Logo" style="border-width:0px;">

                            </li>
                            <li class="dropdown dropdown-inbox">
                                <img src="../public/assets/eway/nic-logo.png" alt="NIC Logo" style="border-width:0px;">
                            </li>

                            <li class="dropdown dropdown-user">
                                <a class="nav-link dropdown-toggle link p-0" data-toggle="dropdown">
                                    <img src="../public/assets/eway/admin-avatar.png" alt="Profile" style="border-width:0px;">
                                    </a><ul class="dropdown-menu dropdown-menu-right"><a class="nav-link dropdown-toggle link p-0" data-toggle="dropdown">
                                        </a><a class="dropdown-item" data-toggle="modal" data-target="#profile"><i class="fa fa-user"></i>Profile</a>
                                        <li class="dropdown-divider"></li>
                                        <a id="ctl00_headercont_LinkButton1" class="dropdown-item" href="javascript:__doPostBack(&#39;ctl00$headercont$LinkButton1&#39;,&#39;&#39;)"><i class="fa fa-power-off"></i>Logout</a>
                                    </ul></li>
                        </ul>

                        <!-- END TOP-RIGHT TOOLBAR-->
                    </div>

                </header>
                <!-- END HEADER-->

                <div id="ctl00_headercont_headerbottom" class="container-fluid modultitle" style="width: 100%;">
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                            <ul class="nav navbar-nav navbarmodultitle" style="display:inline">
                                <li class="mr-2"><a id="ctl00_headercont_lnk_home" href="/dashboard"><i class="fa fa-home"></i></a></li>
                                <li><a id="ctl00_headercont_lnk_eInv" class="btn btn-sm btn-info py-0" href="/dashboard"><i class="fa fa-globe"></i><span class="font-14"> e-Invoice Portal</span></a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-sm-6 col-md-5 col-lg-6 p-0 m-auto text-center">
                            <span id="ctl00_headercont_user_log_details" class="userlogdetails">GSTIN :<?php echo $userGstin; ?> - Name : <?php echo $fromTrdName; ?> - User : Tax Payer</span>
                        </div>

                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 text-right">
                            <ul class="nav navbar-nav navbarmodultitle float-right" style="display: inline">
                                <li class="dropdown pr-3">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="../eway-simulation/print-bill?ewb_no=<?php echo $billNumber; ?>&amp;cal=1#"><i class="fa fa-question-circle"></i></a>
                                    <ul class="dropdown-menu helpsection">
                                        <li><a href="https://docs.ewaybillgst.gov.in/Documents/Generating%20EWB.pdf" target="_blank" rel="noopener noreferrer">Generating EWB</a></li>
                                        <li><a href="https://docs.ewaybillgst.gov.in/Documents/Generating%20CEWB.pdf" target="_blank" rel="noopener noreferrer">Generating CEWB</a></li>
                                        <li><a href="https://docs.ewaybillgst.gov.in/Documents/Modes%20of%20EWB%20generation.pdf" target="_blank" rel="noopener noreferrer">Modes of EWB generation</a></li>
                                        <li><a href="https://docs.ewaybillgst.gov.in/Documents/Rejecting%20EWB.pdf" target="_blank" rel="noopener noreferrer">Rejecting EWB</a></li>
                                        <li><a href="https://docs.ewaybillgst.gov.in/Documents/Managing%20Users.pdf" target="_blank" rel="noopener noreferrer">Managing Users</a></li>
                                        <li><a href="https://docs.ewaybillgst.gov.in/Documents/Managing%20Masters.pdf" target="_blank" rel="noopener noreferrer">Managing Masters</a></li>
                                    </ul>
                                </li>
                                <li style="display: none"><a href="../eway-simulation/print-bill?ewb_no=<?php echo $billNumber; ?>&amp;cal=1#" class="glyphicon glyphicon-phone-alt" data-toggle="modal" data-target="#contact"><i class="fa fa-phone"></i></a></li>
                                <li>
                                    <a id="ctl00_headercont_lnk_Signout" href="javascript:__doPostBack(&#39;ctl00$headercont$lnk_Signout&#39;,&#39;&#39;)"><i class="fa fa-sign-out"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            

            

    <div class="container">

        <div class="row justify-content-center align-items-center">
            <div class="card col-xl-8 col-lg-10 col-md-12 col-sm-12 col-12 mt-3 px-2 printcard">

                

                <table class="table border-0 mt-0 mb-0">
                    <tbody><tr>
                        <td colspan="2" class="py-0">
                            <input name="ctl00$ContentPlaceHolder1$mytoken" type="hidden" id="mytoken" value="497f14d1-18c0-46ca-9658-aee9ba7d9e39">
                            <input name="ctl00$ContentPlaceHolder1$qrCodeGen" type="hidden" id="qrCodeGen" value="<?php echo $billNumber; ?>/<?php echo $userGstin; ?>/<?php echo $transDocDate. " ".date('H:i A'); ?>">
                            <input name="ctl00$ContentPlaceHolder1$barcodeGen" type="hidden" id="barcodeGen" value="<?php echo $billNumber; ?>">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$Hdn_Transgstin" id="ctl00_ContentPlaceHolder1_Hdn_Transgstin">
                            <input name="ctl00$ContentPlaceHolder1$seldt" type="hidden" id="seldt">

                            <table id="ctl00_ContentPlaceHolder1_QRcode" class="QRHeader mx-auto border-0">
	<tbody><tr id="ctl00_ContentPlaceHolder1_tr_title">
		<td class=" text-center border-0">
                                        <h3 class="mb-0 font-weight-bold">
                                            <span id="ctl00_ContentPlaceHolder1_lbl_title">e-Way Bill</span>
                                        </h3>
                                    </td>
	</tr>
	<tr>
		<td class="text-center border-0">
                                        <div id="plBarCodeNew"><img src="data:image/gif;base64,R0lGODdhiACIAIAAAAAAAP///ywAAAAAiACIAAAC/4yPqcvtD6OctNqLs86g+w+GIvKRnimOR7mebUel8gyg9A2/tW7f9s+b4IY7AxEHNLqUw2SAxSxGjj4dVRV1HrXLZxdynTljXyuRAa2k0GVJOk3OKcLSsRCbgN/lXn68bta0oOeGZ1fIRzjV1kfF5rcH8giIKPVGwyV2obg2yHipmRUU1SlKahg5yfnZVWXa2IMHKoOxGjKJGyg5Cqs7G3u7yRo8N2yJyTtb2ntKzNyo3Gqc27z7Gu2Mbf283D3tmYh8LR3KLW6eLftdHF7+60t+7B6vfficSZtMr95OCR0PzJEufN76BXz3KiDBMAr1zTMID2LCgQ7pyNumDSG6fP/jIFVbeKVhR44bazESudEWSXwmJao5SXGkymUshbn8A4bfxZmoRra8+DNnun48ndW0kJFhxaMll1a0uA8qU41UAT6FuhPrVKs+ncrUGlFg17FNySYNuSEor4Pr/nlMCzetRrZv68W9G3duWGpu/eH9m2rtXnBZ3wKuRtNr34JAw9plR/Lstq2CzJ6JmeecZJUgI3NdrLMoxqgrFW8xffkjYcZ0/T6oWrmBaEVCPZfDefU2YVU9Fz0sXalzYsi8jUZiPNx3Y8S97bl6+RvraLSQOa/+DLuwdO3PUTrXSZk7WOa6VRO/7jJ7azrreycXHZ5p6/aGX8N0oPc8UmPIz+H/3n/Tbjb589xpALqG32d8/ZdZdP4FdqA9EtpXH3nTXYiSgQ0C19d3FYI2FIaYaTgfesttWFuB4I2Y2obvraifbC2yxmJsJVanoIkTTmReSqQ9dg+FCHYoWIwZknYjkTzK+CGNCdYFo5IgarcjikLmZyWO6YXGZYBPEnifj8ZZNmZZTJ7YXZFZTskXkPIJ+FWZtOU2GWpy5hijZAvCySafbirW5o9hFnfhn2QWGiV8A/ZHVFtAquillH8wSqWfSA5GlnfHdVlpnpda+GaPtYWqHH11ximWmYFGOqpj7gkaG5bxDWiqdRZCeuKquUI45YuNUmdmcj/NmSmtahIr5pCT/4YpK6+2nqmpBsICauySyBrKQXPURngss/x9G+JsUXp4qqpXgosolLG2Fa25X4r7K5jrqitvuc1qWS+lhDq5Zrv3Bgkqn50ROuuteALcp5F0EmyneCHuGbDCqDJ8qKnk7svuwjo2bHG38R5ZJsidSolsuwPXWK7IIv9rssY9TvvypyQPipmuj2ob88coL9uktw8LfO68SACNb5X8VlkrrPb6LOK7B5fsargPLqly0LtSbSKuaWItKtEutkixpBt72nPZQ7JndctdFytxv1lP/bXOTtNrNNMpgj222EVbajbGIXucat1mw6zc1m4bfGffVkM9N4fkkqim4I5vWt7hvf++qnjjjK8J79IfFnwm2tY+jTfXnB+c9M9k5wv35uotPqOj6PqqLMewC30YtDsvivnZpeeeLNJv0317yofd/Pnw9d5dee7I147vs357vl3YWOJa9ej0Smc96b9lj3DnkOd8dcLBbxv+dttjNzv7qqdPPLdfgq816i5b3ur8u0c8c+Z6I5w/3ZEvSUfjG/XUor8BYqp/vpPb6b6XNt7F73IQPFQB93agZ3HPdvy7Fs5CJzupcNB8Hvxb42ymlIot8F+Ek0vvGKQn9KkNLrSDodJINUMXJg56wdKM/db2lxo664Z0MlwAmbe8mhmQX6KDDg+FCEThuC9wvEIiCv2HvaheGS+BhQvhFgEoJNB1zHT1m+DmQCe+H5LwhZEL4wjHCMYOstF0uiKVhkpomwNqsYwOKx8cV/ZB9Tkwi5rrXQwLCSxKsfB3imTaBsl3wbhxqJHJA54lL4nJTGpykxQoAAA7" width="136" height="136"></div>
                                    </td>
	</tr>
</tbody></table>

                        </td>
                    </tr>

                    
                </tbody></table>

                <div class="table-responsive-lg">
                    <table id="ctl00_ContentPlaceHolder1_table_details" class="table table-bordered mb-1 mt-1">
	<tbody><tr>
		<td>
                                <span id="ctl00_ContentPlaceHolder1_lblBillNo">E-Way Bill No:</span></td>
		<td>
                                <span id="ctl00_ContentPlaceHolder1_lblBillNoDetails" style="font-size:18px;font-weight:bold;"><?php echo $billNumber; ?></span></td>
	</tr>
	<tr>
		<td>
                                <span id="ctl00_ContentPlaceHolder1_lblGenDate">E-Way Bill Date:</span></td>
		<td>
                                <span id="ctl00_ContentPlaceHolder1_lblGenDateDetails" style="font-weight:bold;"><?php echo $transDocDate; ?></span></td>
	</tr>
	<tr>
		<td>
                                <span id="ctl00_ContentPlaceHolder1_lglGen">Generated By:</span>
                            </td>
		<td>
                                <span id="ctl00_ContentPlaceHolder1_lblGenDetails" style="font-weight:bold;"> <?php echo $userGstin; ?>   -   <?php echo $fromTrdName; ?></span></td>
	</tr>
	<tr id="ctl00_ContentPlaceHolder1_validate">
		<td>
                                <span id="ctl00_ContentPlaceHolder1_Label1">Valid From:</span>
                            </td>
		<td>
                                <span id="ctl00_ContentPlaceHolder1_lblValidFrom" style="font-weight:bold;"><?php echo $transDocDate. " ".date('H:i A'); ?> [<?php echo $transDistance; ?>Kms]</span></td>
	</tr>
	<tr id="ctl00_ContentPlaceHolder1_validate1">
		<td>
                                <span id="ctl00_ContentPlaceHolder1_Label2">Valid Until:</span>
                            </td>
		<td>
                                <span id="ctl00_ContentPlaceHolder1_lblValidTo" style="font-weight:bold;"><?php echo date('d/m/Y', strtotime(str_replace('/', '-', $transDocDate) . '+1 day')); ?> </span></td>
	</tr>
	<tr class="bg-primary text-white font-weight-bold">
		<td colspan="2">Part - A</td>
	</tr>
	<tr>
		<td>GSTIN of Supplier</td>
		<td>
                                <span id="ctl00_ContentPlaceHolder1_lbl_gstnSupplier" style="font-weight:bold;"><?php echo $userGstin; ?>,<?php echo $fromTrdName; ?></span></td>
	</tr>
	<tr>
		<td>Place of Dispatch</td>
		<td>
                                <span id="ctl00_ContentPlaceHolder1_lbl_placeDispatc" style="font-weight:bold;"><?php echo $fromPlace; ?>,KERALA-<?php echo $fromPincode; ?></span></td>
	</tr>
	<tr>
		<td>GSTIN of Recipient</td>
		<td>
                                <span id="ctl00_ContentPlaceHolder1_txtSypplyTo" style="font-weight:bold;"> <?php echo $toGstin; ?>                
,<?php echo $toTrdName; ?></span>
                            </td>
	</tr>
	<tr>
		<td>Place of Delivery</td>
		<td>
                                <span id="ctl00_ContentPlaceHolder1_lblDeli"><span style="font-weight:bold;"><?php echo $toPlace; ?>,KERALA-<?php echo $toPincode; ?> </span> </span></td>
	</tr>
	<tr>
		<td>Document No.</td>
		<td>
                                <span id="ctl00_ContentPlaceHolder1_lblDocDet"><span style="font-weight:bold;"><?php echo $docNo; ?> </span> </span></td>
	</tr>
	<tr>
		<td>Document Date</td>
		<td>
                                <span id="ctl00_ContentPlaceHolder1_lblDocDt"><span style="font-weight:bold;"><?php echo date('d/m/Y'); ?> </span> </span></td>
	</tr>
	<tr>
		<td>
                                <span id="ctl00_ContentPlaceHolder1_Label3">Transaction Type:</span>
                            </td>
		<td>
                                <span id="ctl00_ContentPlaceHolder1_lblTransType" style="font-weight:bold;">Regular</span></td>
	</tr>
	<tr>
		<td>Value of Goods</td>
		<td>
                                <span id="ctl00_ContentPlaceHolder1_lblVG" class="classfont" style="font-weight:bold;"><?php echo $totInvValue; ?></span></td>
	</tr>
	<tr>
		<td>HSN Code</td>
		<td> <?php 
            $items = array_values(array_filter($itemList));
            $hsn = $items[0]['hsnCode']." - ". $items[0]['productName'];

            if (count($items) > 1) {
                $hsn.= "( +".(count($items) - 1)." )";
            }

                            $supplyTypes = [
                                'O' => 'Outward',
                                'I' => 'Inward'
                            ];

                            $subTypes = [
                                1 => 'Supply',
                                2 => 'Import',
                                3 => 'Export',
                                4 => 'Job Work',
                                5 => 'For Own Use',
                                6 => 'Job work Returns',
                                7 => 'Sales Return',
                                8 => 'Others',
                                9 => 'SKD/CKD/Lots',
                                10 => 'Line Sales',
                                11 => 'Recipient Not Known',
                                12 => 'Exhibition or Fairs'
                            ]
                        ?>
                                <span id="ctl00_ContentPlaceHolder1_lblhsncode" class="form-control1" onkeydown="expandtext(this);" style="font-weight:bold;"><?php echo $hsn; ?>  </span></td>
	</tr>
	<tr>
		<td>Reason for Transportation</td>
		<td>
                                <span id="ctl00_ContentPlaceHolder1_lblTypeDetails" style="font-weight:bold;"><?php echo $supplyTypes[$supplyType]; ?>  -  <?php echo $subTypes[$subSupplyType]; ?></span></td>
	</tr>
	<tr>
		<td>Transporter</td>
		<td>
                                <span id="ctl00_ContentPlaceHolder1_lblTransportor" style="font-weight:bold;"></span></td>
	</tr>
	<tr id="ctl00_ContentPlaceHolder1_emptyVeh1" class="bg-primary text-white font-weight-bold">
		<td colspan="2">Part - B</td>
	</tr>
    <?php 
                            $transportModes = [
                                1 => 'Road',
                                2 => 'Rail',
                                3 => 'Air',
                                4 => 'Ship or Ship Cum Road/Rail'
                            ];
                        ?>
	<tr id="ctl00_ContentPlaceHolder1_emptyGV">
		<td colspan="2">
                                <div>
			<table cellspacing="0" cellpadding="3" rules="all" class="table table-bordered table-striped mb-0" border="1" id="ctl00_ContentPlaceHolder1_GVVehicleDetails" style="font-size:12px;border-collapse:collapse;">
				<tbody><tr class="bg-purple-100">
					<th scope="col">Mode</th><th scope="col">Vehicle / Trans <br> Doc No &amp; Dt.</th><th scope="col">From</th><th scope="col">Entered Date</th><th scope="col">Entered By</th><th scope="col">CEWB No. <br> (If any)</th><th scope="col">Multi Veh.Info <br> (If any)</th>
				</tr><tr>
					<td><?php echo $transportModes[$transMode]?></td><td>
                    <?php echo $vehicleNo; ?> &amp; <?php echo $transDocNo; ?> &amp; <?php echo $transDocDate; ?>
                                            </td><td><?php echo $fromPlace; ?></td><td><?php echo $transDocDate; ?> <?php echo date('H:i A'); ?></td><td><?php echo $userGstin; ?></td><td>
                                                -
                                            </td><td>
                                                -
                                            </td>
				</tr>
			</tbody></table>
		</div>
                            </td>
	</tr>
	<tr id="ctl00_ContentPlaceHolder1_trbarcdoe">
		<td colspan="2" class="text-center">
                                <div id="barcode" class="barcode mx-auto" style="padding: 0px; overflow: auto; width: 121px;"><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 10px"></div><div style="float: left; font-size: 0px; width:0; border-left: 2px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 1px"></div><div style="float: left; font-size: 0px; width:0; border-left: 1px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 2px"></div><div style="float: left; font-size: 0px; width:0; border-left: 3px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 2px"></div><div style="float: left; font-size: 0px; width:0; border-left: 3px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 1px"></div><div style="float: left; font-size: 0px; width:0; border-left: 2px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 1px"></div><div style="float: left; font-size: 0px; width:0; border-left: 1px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 3px"></div><div style="float: left; font-size: 0px; width:0; border-left: 1px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 1px"></div><div style="float: left; font-size: 0px; width:0; border-left: 3px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 2px"></div><div style="float: left; font-size: 0px; width:0; border-left: 2px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 2px"></div><div style="float: left; font-size: 0px; width:0; border-left: 1px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 3px"></div><div style="float: left; font-size: 0px; width:0; border-left: 2px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 1px"></div><div style="float: left; font-size: 0px; width:0; border-left: 1px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 3px"></div><div style="float: left; font-size: 0px; width:0; border-left: 2px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 2px"></div><div style="float: left; font-size: 0px; width:0; border-left: 1px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 2px"></div><div style="float: left; font-size: 0px; width:0; border-left: 1px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 3px"></div><div style="float: left; font-size: 0px; width:0; border-left: 1px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 2px"></div><div style="float: left; font-size: 0px; width:0; border-left: 1px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 1px"></div><div style="float: left; font-size: 0px; width:0; border-left: 4px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 2px"></div><div style="float: left; font-size: 0px; width:0; border-left: 3px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 2px"></div><div style="float: left; font-size: 0px; width:0; border-left: 1px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 2px"></div><div style="float: left; font-size: 0px; width:0; border-left: 2px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 1px"></div><div style="float: left; font-size: 0px; width:0; border-left: 2px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 2px"></div><div style="float: left; font-size: 0px; width:0; border-left: 1px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 1px"></div><div style="float: left; font-size: 0px; width:0; border-left: 1px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 4px"></div><div style="float: left; font-size: 0px; width:0; border-left: 2px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 3px"></div><div style="float: left; font-size: 0px; width:0; border-left: 3px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 1px"></div><div style="float: left; font-size: 0px; width:0; border-left: 1px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 1px"></div><div style="float: left; font-size: 0px; width:0; border-left: 2px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 10px"></div><div style="clear:both; width: 100%; background-color: #FFFFFF; color: #000000; text-align: center; font-size: 10px; margin-top: 5px;"><?php echo $billNumber; ?></div></div>
                            </td>
	</tr>
    <tr id="ctl00_ContentPlaceHolder1_trbarcdoe">
		<td colspan="2" class="text-center">
              <p style="margin-bottom: 0px;
    font-weight: 600;
    color: red;">For Educational Purpose Only</p>  
        </td>
	</tr>
	<tr id="ctl00_ContentPlaceHolder1_printtr" class="printbtntr">
		<td colspan="2" class="text-center">
                                <a href="Javascript:window.print()" class="btn btn-primary btnprint">Print</a>
                                <input type="submit" name="ctl00$ContentPlaceHolder1$btn_detail" value="Detailed Print" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlaceHolder1$btn_detail&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="ctl00_ContentPlaceHolder1_btn_detail" class="btn btn-info btnprint">
                                <a href="/dashboard" class="btn btn-danger btnprint">Exit</a>
                            </td>
	</tr>
</tbody></table>

                </div>

            </div>
        </div>
    </div>

    <br>
    <br>
    <br>
    <br>


            

                <footer class="page-footer">
                    <div class="font-13 text-white text-sm-center text-center">Ver 1.4.0 Rel 0720 </div>
                    <a class="px-4 text-white text-sm-center text-center" href="https://www.nic.in/" target="_blank">©2022 Powered By National Informatics Centre</a>
                    <div class="to-top" style="display: block;"><i class="fa fa-angle-double-up"></i></div>
                </footer>
            
        </div>

        <div class="modal" id="contact" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            ×</button>
                        <h4 class="modal-title">Contact Details</h4>
                    </div>
                    <div class="modal-body">
                        <table class="table table-condensed table-hover table-responsive-lg">
                            <tbody><tr>
                                <td>State</td>
                                <td>
                                    <span id="ctl00_lblState"></span></td>
                            </tr>
                            <tr>
                                <td>Contact No</td>
                                <td>
                                    <textarea name="ctl00$lblContactNo" rows="2" cols="20" readonly="readonly" id="ctl00_lblContactNo" style="border-style:None;height:100px;"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>
                                    <span id="ctl00_lblEmail"></span></td>
                            </tr>
                        </tbody></table>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            Close</button>
                    </div>
                </div>
            </div>
        </div>
    

<script type="text/javascript">
//<![CDATA[

theForm.oldSubmit = theForm.submit;
theForm.submit = WebForm_SaveScrollPositionSubmit;

theForm.oldOnSubmit = theForm.onsubmit;
theForm.onsubmit = WebForm_SaveScrollPositionOnSubmit;
//]]>
</script>
</form>


</body>