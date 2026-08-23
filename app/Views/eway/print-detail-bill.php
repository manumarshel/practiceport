<!DOCTYPE html>
<!-- saved from url=(0080)https://ewaybillgst.gov.in/BillGeneration/EwayBillPrint.aspx?ewb_no=571537098126 -->
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

    
   <link href="../public/assets/eway/Print.css" rel="stylesheet" media="print">
    <script type="text/javascript" src="../public/assets/eway/qrcode.js"></script>
    <script type="text/javascript" src="../public/assets/eway/jquery-barcode.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            generateQRCode();
            generatebarcode();
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
            $("#barcode").barcode(document.getElementById('barcodeGen').value, "code128");
        }
    </script>
    <?php //print_r(session()->get('eway-bill-'.$billNumber));?>
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

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="D876A469">
	<input type="hidden" name="__SCROLLPOSITIONX" id="__SCROLLPOSITIONX" value="0">
	<input type="hidden" name="__SCROLLPOSITIONY" id="__SCROLLPOSITIONY" value="0">
	<input type="hidden" name="__VIEWSTATEENCRYPTED" id="__VIEWSTATEENCRYPTED" value="">
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="FLAPrVz93kXOFPDmq5ELTemXIQcnD6PExVqlFPjhj3rQPrurDgy78kffo9hcMQTfnGzFiwXjt22EbMm2Zbdi45iasbopzMMDBSSAgxh/DB3RwxPSo5tYC101WIxzkDZfch2SJVYWvWiRStpkisS8IfWmnR3iA9M0W5PHXajV/S+KGcADv/3y2gbLlI37IsOIdPJIviPDRr+/JiwDCN//MHa7FFHOZOc92TPSi+ycA2WseetIW9K0sbXv6XxSawQw7YIDFMS8BBKVp45G2VVPT0WwS8g1rJ2vJTK80VJpUtFCN5KprnWt+jAwXIgle3/8JK+PtXixRJg3XAnHOjWHAA0nyCXijOLa8Gv54+BmyyWIicIfVGh+nMn+9wytYxR1">
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
                        <a class="link form-inline brandlink p-0" href="../eway-simulation/print-detail-bill?ewb_no=<?php echo $billNumber; ?>&amp;cal=1#">
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
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="../eway-simulation/print-detail-bill?ewb_no=<?php echo $billNumber; ?>&amp;cal=1#"><i class="fa fa-question-circle"></i></a>
                                    <ul class="dropdown-menu helpsection">
                                        <li><a href="https://docs.ewaybillgst.gov.in/Documents/Generating%20EWB.pdf" target="_blank" rel="noopener noreferrer">Generating EWB</a></li>
                                        <li><a href="https://docs.ewaybillgst.gov.in/Documents/Generating%20CEWB.pdf" target="_blank" rel="noopener noreferrer">Generating CEWB</a></li>
                                        <li><a href="https://docs.ewaybillgst.gov.in/Documents/Modes%20of%20EWB%20generation.pdf" target="_blank" rel="noopener noreferrer">Modes of EWB generation</a></li>
                                        <li><a href="https://docs.ewaybillgst.gov.in/Documents/Rejecting%20EWB.pdf" target="_blank" rel="noopener noreferrer">Rejecting EWB</a></li>
                                        <li><a href="https://docs.ewaybillgst.gov.in/Documents/Managing%20Users.pdf" target="_blank" rel="noopener noreferrer">Managing Users</a></li>
                                        <li><a href="https://docs.ewaybillgst.gov.in/Documents/Managing%20Masters.pdf" target="_blank" rel="noopener noreferrer">Managing Masters</a></li>
                                    </ul>
                                </li>
                                <li style="display: none"><a href="../eway-simulation/print-detail-bill?ewb_no=<?php echo $billNumber; ?>&amp;cal=1#" class="glyphicon glyphicon-phone-alt" data-toggle="modal" data-target="#contact"><i class="fa fa-phone"></i></a></li>
                                <li>
                                    <a id="ctl00_headercont_lnk_Signout" href="javascript:__doPostBack(&#39;ctl00$headercont$lnk_Signout&#39;,&#39;&#39;)"><i class="fa fa-sign-out"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            

            

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="card col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3 p-2 printcard">

                <input name="ctl00$ContentPlaceHolder1$mytoken" type="hidden" id="mytoken" value="4c075cf1-d651-427f-b090-7b45d0332e27">

                

                <div id="ctl00_ContentPlaceHolder1_QRcode" border="0" class="QRHeader">
                    <div class="text-center float-left">
                        <h3 class="font-weight-bold pt-5 mt-3">e-Way Bill </h3>
                    </div>
                    <div class="text-center border-0 float-right">
                        <input name="ctl00$ContentPlaceHolder1$qrCodeGen" type="hidden" id="qrCodeGen" value="<?php echo $billNumber; ?>/<?php echo $userGstin; ?>/<?php echo $transDocDate. " ".date('H:i A'); ?>">
                        <div id="plBarCodeNew"><img src="data:image/gif;base64,R0lGODdhiACIAIAAAAAAAP///ywAAAAAiACIAAAC/4yPqcvtD6OctNqLs86g+w+GIvKRnimOR7mebUel8gyg9A2/tW7f9s+b4IY7AxEHNLqUw2SAxSxGjj4dVRV1HrXLZxdynTljXyuRAa2k0GVJOk3OKcLSsRCbgN/lXn68bta0oOeGZ1fIRzjV1kfF5rcH8giIKPVGwyV2obg2yHipmRUU1SlKahg5yfnZVWXa2IMHKoOxGjKJGyg5Cqs7G3u7yRo8N2yJyTtb2ntKzNyo3Gqc27z7Gu2Mbf283D3tmYh8LR3KLW6eLftdHF7+60t+7B6vfficSZtMr95OCR0PzJEufN76BXz3KiDBMAr1zTMID2LCgQ7pyNumDSG6fP/jIFVbeKVhR44bazESudEWSXwmJao5SXGkymUshbn8A4bfxZmoRra8+DNnun48ndW0kJFhxaMll1a0uA8qU41UAT6FuhPrVKs+ncrUGlFg17FNySYNuSEor4Pr/nlMCzetRrZv68W9G3duWGpu/eH9m2rtXnBZ3wKuRtNr34JAw9plR/Lstq2CzJ6JmeecZJUgI3NdrLMoxqgrFW8xffkjYcZ0/T6oWrmBaEVCPZfDefU2YVU9Fz0sXalzYsi8jUZiPNx3Y8S97bl6+RvraLSQOa/+DLuwdO3PUTrXSZk7WOa6VRO/7jJ7azrreycXHZ5p6/aGX8N0oPc8UmPIz+H/3n/Tbjb589xpALqG32d8/ZdZdP4FdqA9EtpXH3nTXYiSgQ0C19d3FYI2FIaYaTgfesttWFuB4I2Y2obvraifbC2yxmJsJVanoIkTTmReSqQ9dg+FCHYoWIwZknYjkTzK+CGNCdYFo5IgarcjikLmZyWO6YXGZYBPEnifj8ZZNmZZTJ7YXZFZTskXkPIJ+FWZtOU2GWpy5hijZAvCySafbirW5o9hFnfhn2QWGiV8A/ZHVFtAquillH8wSqWfSA5GlnfHdVlpnpda+GaPtYWqHH11ximWmYFGOqpj7gkaG5bxDWiqdRZCeuKquUI45YuNUmdmcj/NmSmtahIr5pCT/4YpK6+2nqmpBsICauySyBrKQXPURngss/x9G+JsUXp4qqpXgosolLG2Fa25X4r7K5jrqitvuc1qWS+lhDq5Zrv3Bgkqn50ROuuteALcp5F0EmyneCHuGbDCqDJ8qKnk7svuwjo2bHG38R5ZJsidSolsuwPXWK7IIv9rssY9TvvypyQPipmuj2ob88coL9uktw8LfO68SACNb5X8VlkrrPb6LOK7B5fsargPLqly0LtSbSKuaWItKtEutkixpBt72nPZQ7JndctdFytxv1lP/bXOTtNrNNMpgj222EVbajbGIXucat1mw6zc1m4bfGffVkM9N4fkkqim4I5vWt7hvf++qnjjjK8J79IfFnwm2tY+jTfXnB+c9M9k5wv35uotPqOj6PqqLMewC30YtDsvivnZpeeeLNJv0317yofd/Pnw9d5dee7I147vs357vl3YWOJa9ej0Smc96b9lj3DnkOd8dcLBbxv+dttjNzv7qqdPPLdfgq816i5b3ur8u0c8c+Z6I5w/3ZEvSUfjG/XUor8BYqp/vpPb6b6XNt7F73IQPFQB93agZ3HPdvy7Fs5CJzupcNB8Hvxb42ymlIot8F+Ek0vvGKQn9KkNLrSDodJINUMXJg56wdKM/db2lxo664Z0MlwAmbe8mhmQX6KDDg+FCEThuC9wvEIiCv2HvaheGS+BhQvhFgEoJNB1zHT1m+DmQCe+H5LwhZEL4wjHCMYOstF0uiKVhkpomwNqsYwOKx8cV/ZB9Tkwi5rrXQwLCSxKsfB3imTaBsl3wbhxqJHJA54lL4nJTGpykxQoAAA7" width="136" height="136"></div>
                    </div>
                </div>

                

                <div id="ctl00_ContentPlaceHolder1_table_details" class="card mt-1">

                    <div class="bg-primary font-weight-bold card-header p-2">
                        1. E-WAY BILL Details
                    </div>

                    <div class="card-body p-2">

                        <div class="form-row">
                            <div class="col-sm-4">
                                <span id="ctl00_ContentPlaceHolder1_lblBillNo">eWay Bill No:</span>
                                <span id="ctl00_ContentPlaceHolder1_lblBillNoDetails" style="font-weight:bold;"> <?php echo $billNumber; ?></span>
                            </div>
                            <div class="col-sm-4">
                                <span id="ctl00_ContentPlaceHolder1_lblGenDate">Generated Date:</span><span id="ctl00_ContentPlaceHolder1_lblGenDateDetails" style="font-weight:bold;"><?php echo $transDocDate. " ".date('H:i A'); ?></span>
                            </div>
                            <div class="col-sm-4">
                                <span id="ctl00_ContentPlaceHolder1_lglGen">Generated By:</span>
                                <span id="ctl00_ContentPlaceHolder1_lblGenDetails" style="font-weight:bold;"> <?php echo $userGstin; ?></span><br>
                                <span id="ctl00_ContentPlaceHolder1_lblValidUPto">Valid Upto:</span>
                                <span id="ctl00_ContentPlaceHolder1_lblValidUPtoDetails" style="font-weight:bold;"><?php echo date('d/m/Y', strtotime(str_replace('/', '-', $transDocDate) . '+1 day')); ?></span>
                            </div>
                        </div>

                        <hr class="my-2">
                        <?php 
                            $transportModes = [
                                1 => 'Road',
                                2 => 'Rail',
                                3 => 'Air',
                                4 => 'Ship or Ship Cum Road/Rail'
                            ];
                        ?>

                        <div class="form-row">
                            <div class="col-sm-4">
                                <span id="ctl00_ContentPlaceHolder1_lblMode">Mode:</span>
                                <span id="ctl00_ContentPlaceHolder1_lblModeDetails" style="font-weight:bold;"><?php echo $transportModes[$transMode]?></span>
                            </div>
                            <div class="col-sm-4">
                                <span id="ctl00_ContentPlaceHolder1_lblApxDist">Approx Distance:</span>
                                <span id="ctl00_ContentPlaceHolder1_lblApxDistDetails" style="font-weight:bold;"><?php echo $transDistance;?>km</span>
                            </div>
                            <div class="col-sm-4">
                                <span id="ctl00_ContentPlaceHolder1_lblMultiVehicle" style="font-weight:bold;"></span>
                            </div>
                        </div>

                        <hr class="my-2">
                        <?php 
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
                        <div class="form-row">
                            <div class="col-sm-4">
                                <span id="ctl00_ContentPlaceHolder1_lblType">Type:</span>
                                <span id="ctl00_ContentPlaceHolder1_lblTypeDetails" style="font-weight:bold;"><?php echo $supplyTypes[$supplyType]; ?>  -  <?php echo $subTypes[$subSupplyType]; ?></span>
                            </div>
                            <div class="col-sm-4">
                                <span id="ctl00_ContentPlaceHolder1_lblDoc">Document Details:</span>
                                <span id="ctl00_ContentPlaceHolder1_lblDocDet"><span style="font-weight:bold;"> Tax Invoice   -  <?php echo $docNo; ?> -  <?php echo $transDocDate; ?> </span> </span>
                            </div>
                            <div class="col-sm-4">
                                <span id="ctl00_ContentPlaceHolder1_Label2">Transaction type:</span>
                                <span id="ctl00_ContentPlaceHolder1_lblTransType" style="font-weight:bold;">Regular</span>
                            </div>
                        </div>

                        <hr class="my-2">

                        

                    </div>

                    <div class="bg-primary font-weight-bold card-header p-2">
                        2.Address Details
                    </div>

                    <div class="card-body p-2">

                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="bg-primary font-weight-bold card-header p-2">From </div>
                                <textarea name="ctl00$ContentPlaceHolder1$txtGenBy" rows="2" cols="20" readonly="readonly" id="ctl00_ContentPlaceHolder1_txtGenBy" class="form-control textboxfromto" style="height:170px !important">GSTIN : <?php echo $userGstin; ?>

<?php echo $fromTrdName; ?>

KERALA

:: Dispatch From :: 
<?php echo $fromAddr1; ?>

<?php echo $fromAddr2; ?>

<?php echo $fromPlace; ?>,KERALA-<?php echo $fromPincode; ?></textarea>
                            </div>
                            <div class="col-sm-6">
                                <div class="bg-primary font-weight-bold card-header p-2">To</div>
                                <textarea name="ctl00$ContentPlaceHolder1$txtSypplyTo" rows="2" cols="20" readonly="readonly" id="ctl00_ContentPlaceHolder1_txtSypplyTo" class="form-control textboxfromto" style="height:170px !important">GSTIN : <?php echo $toGstin; ?>                
<?php echo $toTrdName; ?>

KERALA

 :: Ship To :: 
<?php echo $toAddr1; ?>

<?php echo $toAddr2; ?>

<?php echo $toPlace; ?>,KERALA-<?php echo $toPincode; ?></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="bg-primary font-weight-bold card-header p-2">
                        3. Goods Details 
                    </div>

                    <div class="card-body p-2">
                        <div class="form-row">
                            
                        </div>
                    </div>
                    <?php $items = array_values(array_filter($itemList)); ?>

                    <div id="ctl00_ContentPlaceHolder1_trewbItem" class="px-2">
                        <div>
	<table class="table table-bordered table-striped" cellspacing="0" rules="all" border="1" id="ctl00_ContentPlaceHolder1_GVItemList" style="border-collapse:collapse;">
		<tbody><tr class="bg-purple-200 text-white">
			<th scope="col">HSN Code</th><th scope="col">Product Name &amp; Desc.</th><th scope="col">Quantity</th><th scope="col">Taxable Amount Rs.</th><th scope="col">Tax Rate (C+S+I+Cess+Cess Non.Advol)</th>
		</tr>
        <?php foreach($items as $item) { ?>
            <tr>
                <td><?php echo $item['hsnCode']; ?></td><td style="width:450px;">
                <?php echo $item['productName']; ?> &amp; <?php echo $item['productDesc']; ?>
                                            
                                        </td><td align="left">
                                        <?php echo $item['quantity']; ?>  <?php echo $item['qtyUnit']; ?>
                                        </td><td align="right"><?php echo $item['taxableAmount']; ?></td><td align="right">
                                        <?php echo $item['cgstRate']; ?>+<?php echo $item['sgstRate']; ?>+<?php echo $item['igstRate'] == -1 ? 0 : $item['igstRate']; ?>+<?php echo $item['cessRate']; ?>+<?php echo $item['cessNonAdvol']; ?>
                                            
                                        </td>
            </tr>
        <?php } ?>
	</tbody></table>
</div>
                    </div>

                    <div class="px-2">
                        <table class="table table-bordered mb-0" style="width:100%">
                            <thead>
                                <tr class="text-white bg-purple-200">
                                    <th>Tot. Tax'ble Amt</th>
                                    <th>CGST Amt</th>
                                    <th>SGST Amt</th>
                                    <th>IGST Amt</th>
                                    <th>CESS Amt</th>
                                    <th>CESS Non.Advol Amt</th>
                                    <th>Other Amt</th>
                                    <th>Total Inv.Amt</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span id="ctl00_ContentPlaceHolder1_lblvalue" class="form-control"><?php echo $totalValue; ?></span></td>
                                    <td>
                                        <span id="ctl00_ContentPlaceHolder1_lblcgst" class="form-control"><?php echo $cgstValue; ?></span></td>
                                    <td>
                                        <span id="ctl00_ContentPlaceHolder1_lblsgst" class="form-control"><?php echo $sgstValue; ?></span></td>
                                    <td>
                                        <span id="ctl00_ContentPlaceHolder1_lbligst" class="form-control"><?php echo $igstValue; ?></span></td>
                                    <td>
                                        <span id="ctl00_ContentPlaceHolder1_lblcess" class="form-control"><?php echo $cessValue; ?></span></td>
                                    <td>
                                        <span id="ctl00_ContentPlaceHolder1_lblCessNonAdvol" class="form-control"><?php echo $TotNonAdvolVal; ?></span></td>
                                    <td>
                                        <span id="ctl00_ContentPlaceHolder1_lblOther" class="form-control"><?php echo $OthValue; ?></span></td>
                                    <td>
                                        <span id="ctl00_ContentPlaceHolder1_lblTotInvVal" class="form-control"><?php echo $totInvValue; ?></span></td>
                                </tr>
                            </tbody>

                        </table>

                    </div>

                    <div class="bg-primary font-weight-bold card-header p-2">
                        4.  Transportation Details
                    </div>

                    <div class="card-body p-2">
                        <div class="form-row">

                            <div class="col-sm-6">
                                <span id="ctl00_ContentPlaceHolder1_Label1">Transporter  ID &amp; Name  :</span>
                                <span id="ctl00_ContentPlaceHolder1_lblTransportor" style="font-weight:bold;"><?php echo $transporterId; ?> &amp; <?php echo $transporterName; ?></span>
                            </div>

                            <div class="col-sm-6">
                                <span id="ctl00_ContentPlaceHolder1_Label3">Transporter Doc. No &amp; Date   :</span>
                                <span id="ctl00_ContentPlaceHolder1_lblDocNo" style="font-weight:bold;"><?php echo $transDocNo; ?> &amp; <?php echo $transDocDate; ?></span>
                            </div>

                        </div>

                    </div>

                    <div class="bg-primary font-weight-bold card-header p-2">
                        5.  Vehicle Details 
                    </div>


                    <div class="card-body p-2">
                        <div class="px-2 table-responsive-lg">
                            <div>
	<table cellspacing="0" cellpadding="3" rules="all" class="table table-bordered mb-2" border="1" id="ctl00_ContentPlaceHolder1_GVVehicleDetails" style="font-size:12px;width:100%;border-collapse:collapse;">
		<tbody><tr class="bg-purple-100">
			<th scope="col">Mode</th><th scope="col">Vehicle / Trans <br> Doc No &amp; Dt.</th><th scope="col">From</th><th scope="col">Entered Date</th><th scope="col">Entered By</th><th scope="col">CEWB No. <br> (If any)</th><th scope="col">Multi Veh.Info <br> (If any)</th>
		</tr><tr>
			<td><?php echo $transportModes[$transMode]?></td><td>
            <?php echo $vehicleNo; ?> &amp; <?php echo $docNo; ?> &amp; <?php echo $docDate; ?>
                                        </td><td><?php echo $fromPlace; ?></td><td><?php echo $transDocDate; ?> <?php echo date('H:i A'); ?></td><td><?php echo $userGstin; ?></td><td>
                                            -
                                        </td><td>
                                            -
                                        </td>
		</tr>
	</tbody></table>
</div>
                        </div>

                        <div class="justify-content-center">
                            <input name="ctl00$ContentPlaceHolder1$barcodeGen" type="hidden" id="barcodeGen" value="571537098126">
                            <div id="barcode" class="text-center col-12 mx-auto" style="padding: 0px; overflow: auto; width: 121px;"><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 10px"></div><div style="float: left; font-size: 0px; width:0; border-left: 2px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 1px"></div><div style="float: left; font-size: 0px; width:0; border-left: 1px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 2px"></div><div style="float: left; font-size: 0px; width:0; border-left: 3px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 2px"></div><div style="float: left; font-size: 0px; width:0; border-left: 3px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 1px"></div><div style="float: left; font-size: 0px; width:0; border-left: 2px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 1px"></div><div style="float: left; font-size: 0px; width:0; border-left: 1px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 3px"></div><div style="float: left; font-size: 0px; width:0; border-left: 1px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 1px"></div><div style="float: left; font-size: 0px; width:0; border-left: 3px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 2px"></div><div style="float: left; font-size: 0px; width:0; border-left: 2px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 2px"></div><div style="float: left; font-size: 0px; width:0; border-left: 1px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 3px"></div><div style="float: left; font-size: 0px; width:0; border-left: 2px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 1px"></div><div style="float: left; font-size: 0px; width:0; border-left: 1px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 3px"></div><div style="float: left; font-size: 0px; width:0; border-left: 2px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 2px"></div><div style="float: left; font-size: 0px; width:0; border-left: 1px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 2px"></div><div style="float: left; font-size: 0px; width:0; border-left: 1px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 3px"></div><div style="float: left; font-size: 0px; width:0; border-left: 1px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 2px"></div><div style="float: left; font-size: 0px; width:0; border-left: 1px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 1px"></div><div style="float: left; font-size: 0px; width:0; border-left: 4px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 2px"></div><div style="float: left; font-size: 0px; width:0; border-left: 3px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 2px"></div><div style="float: left; font-size: 0px; width:0; border-left: 1px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 2px"></div><div style="float: left; font-size: 0px; width:0; border-left: 2px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 1px"></div><div style="float: left; font-size: 0px; width:0; border-left: 2px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 2px"></div><div style="float: left; font-size: 0px; width:0; border-left: 1px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 1px"></div><div style="float: left; font-size: 0px; width:0; border-left: 1px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 4px"></div><div style="float: left; font-size: 0px; width:0; border-left: 2px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 3px"></div><div style="float: left; font-size: 0px; width:0; border-left: 3px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 1px"></div><div style="float: left; font-size: 0px; width:0; border-left: 1px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 1px"></div><div style="float: left; font-size: 0px; width:0; border-left: 2px solid #000000; height: 50px;"></div><div style="float: left; font-size: 0px; background-color: #FFFFFF; height: 50px; width: 10px"></div><div style="clear:both; width: 100%; background-color: #FFFFFF; color: #000000; text-align: center; font-size: 10px; margin-top: 5px;"><?php echo $docNo; ?></div></div>
                        </div>

                        <div class="justify-content-center">
                        <p style="margin-bottom: 0px;
    font-weight: 600;
    color: red;text-align:center;">For Educational Purpose Only</p>  
                        </div>

                    </div>


                    <div class="card-footer p-2">
                        <div class="text-center">
                            <a href="Javascript:window.print()" class="btn btn-primary btnprint">Print</a>
                            <a href="/dashboard" class="btn btn-danger btnprint">Exit</a>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
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