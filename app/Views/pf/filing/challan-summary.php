


<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <title>EPFO: ECR Summary</title>
        
        

        <!-- Latest compiled and minified CSS -->
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

        
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" integrity="sha256-rByPlHULObEjJ6XQxW/flG2r+22R5dKiAoef+aXWfik=" crossorigin="anonymous" />
        
         <link href="/public/assets/pf/epfo-style.css" rel="stylesheet">
        <link href="/public/assets/pf/logo.jpg.gif" rel="shortcut icon">
        <script nonce="E2FYPM7ZknJhjbIq" src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        
        
        
        <script  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="  crossorigin="anonymous"></script>
        
        
        

        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
     <script src="/public/assets/pf/epfo-ui.js"></script>
        <script src="/public/assets/pf/CustomValidation.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js"  integrity="sha256-9wRM03dUw6ABCs+AU69WbK33oktrlXamEXMvxUaF+KU="  crossorigin="anonymous"></script>
        
        <script nonce="E2FYPM7ZknJhjbIq" type="text/javascript" src="/epfo/scripts/epfo-security.js"></script>
        
        
        
        <script nonce="E2FYPM7ZknJhjbIq" type="text/javascript">
            var logoutUrl = "/epfo/restoreSession/logout?_HDIV_STATE_=8-1-25CDB7ED346161625AD757B8F666CA7A";
            var validateSessionUrl = "/epfo/restoreSession/validateActivity?_HDIV_STATE_=8-2-25CDB7ED346161625AD757B8F666CA7A";
            var logoutFuncUrl = "/epfo/logout?_HDIV_STATE_=8-0-25CDB7ED346161625AD757B8F666CA7A";
        </script>
        
    </head>
    <body class="epfo-body session-disp"> 
        &nbsp;
        






<script type="text/javascript">
    //set hostname for all js Used in all 
    var hostname = '/epfo';
    $(function () {
        /*$.ajax({
            url: '/epfo/no-auth/Employeralerts/version?_HDIV_STATE_=8-3-25CDB7ED346161625AD757B8F666CA7A',
            type: "POST",
            success: function (result) {
                if (result.err !== undefined) {
                    alert(result.err);
                } else {
                    $('#versionDiv').html("Version :"+result.version);
                }
            },
            error: function (result, status, error) {
                //alert(result + "" + status + "" + error);
            }
        });*/
    });
</script>
<header>
    <nav class="navbar navbar-default navbar-fixed-top" style="z-index: 1;" role="navigation">
        <div class="row row-fluid">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                <div class="navbar-header col-lg-12 col-md-12 col-sm-12 col-xs-12 content-pad-0">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 content-pad-0" style="text-align:center;max-width:90px;">
                      <img class="header-logo" id="header-icon-img" src="/public/assets/pf/logo.jpg.gif"/>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 content-pad-0" style="margin-left:-20px;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <a  class="navbar-brand navbar-left" href="#" style="margin-top:5px; padding:0px 0px">
                               <span class="header-text"> Employees' Provident Fund Organisation, India </span><br />
                                <span class="hidden-xs header-sub-text" style=""> Ministry of Labour & Employment, Government of India</span>
		                    </a>
                        </div>
                        
                        <div class="navbar-header col-lg-2 col-md-2 col-sm-4 col-xs-6">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
	                    </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="width:265px;text-align: right;font-size:11px;">
                <div class="row row-fluid" style="font-weight:600;">
                    <div  style="height: 20px;">
                        <span style="color:#05326D;padding:5px 5px;border-right:1px solid #FFF;font-weight:bold;">
                            
                            <i class="fa fa-user icon-orange"></i> Welcome:<span style="color:#F39C12;">  <?php echo session('establishment_id'); ?> </span>
                        </span>
                       
                    </div>
                    <div>
                        <span class="hidden-xs" style="color:#3654AE;text-align: left;">	
                            
                                Est. Id: <?php echo session('establishment_id'); ?>
                            
                        </span>
                    </div>
                    <div>
                        <span class="hidden-xs" style="color:#3654AE" title="FINPROV LEARNING PRIVATE LIMITED">	
                          
                        Name : <?php echo session('company_name'); ?>
                          
                       </span>
                    </div>
                  
                </div>
                
            </div>
                
                <div class="col-md-4" style="float: right;text-align:right;font-size: 11px;margin-right: 10px;" >
                    <div>
                        <span class="hidden-xs"  style="color:#FFF;padding:5px 5px;border-right:1px solid #3654AE;">
                            <a href="#" id="btnFontMinus" style="color:#FFF;font-weight:bold;background-color:#3654AE;padding:0 2px;">-A</a>  
                            <a href="#" id="btnFontReset" style="color:#FFF;font-weight:bold;background-color:#3654AE;padding:0 4px;"">A</a>
                            <a href="#" id="btnFontPlus" style="color:#FFF;font-weight:bold;background-color:#3654AE;padding:0 1px;"">A+</a>
                        </span>
                        <span  class="hidden-xs" style="padding:5px 5px;color:#05326D;">
                            <i class="fa fa-envelope icon-orange"></i> employerfeedback[at]epfindia[dot]gov[dot]in
                        </span>
                    </div>
                    <div>
                     
                       <span style="color:#FFF;padding:3px 3px;margin-top:5px;">
                           <a href="/pf/logout"><i class="fa fa-sign-out fa-2"></i> Logout</a>
                       </span>
                       

                    </div>
                    <div style="text-align:right;font-size:10px;height: 20px;" id="versionDiv">
                        




Fri 04 Oct 2024 (PV 5.0.55)

                    </div>
                        
                </div>
               
        </div>
    </nav>
</header>
        






<style>
    .m1{
            overflow-y: scroll;
            max-height: 650px;
            scrollbar-width: auto; 
    }
</style>

<div class="navbar navbar-default-custom navbar-static-top" role="navigation" style="margin-top:0px;z-index: 1;">
    <div class="collapse navbar-collapse main-nav" style="min-height:32px !important;width: 100%;">
        <div id="divMenuBar" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content-pad-0" style="margin-left:30px;z-index: 10000;">
             
              <?php include('header.php');?>
                            
        </div>
    </div>
</div>

        
        <div class="epfo-container displayDiv" style="margin-top: 80px;">
            <div class="row">
                <div class="divide10"></div>
                <div class="col-md-12 displayDiv" style="min-height: 560px;">
                    <noscript>
                    <div class="alert alert-danger" style="padding-left: 20px; padding-right: 0px; margin-left: 0px;" >Please enable JavaScript in your browser</div>
                    </noscript>
                    





<link rel="stylesheet" type="text/css" href="/public/assets/pf/jqueryCSS.custom.css" />
<link rel="stylesheet" type="text/css" href="/epfo/styles/Ecr/UploadFileChallanSummary.css"/>
<script src="/epfo/scripts/Ecr/UploadFileChallanSummary.js"></script>
<script>
    function submitForm() {
        var edliContributionRemittedValue = $("#edliContributionRemitted").val();
        var epfInspectionChargesValue = $("#epfInspectionCharges").val();
        var edliAdministrationChargesValue = $("#edliAdministrationCharges").val();
        var edliInspectionChargesValue = $("#edliInspectionCharges").val();
        if (edliContributionRemittedValue === '') {
            alert("Enter EDLI Contribution.");
            $("#edliContributionRemitted").focus();
            return false;
        }
        
        if (epfInspectionChargesValue === '') {
            alert("Enter EPF Inspection charges.");
            $("#epfInspectionCharges").focus();
            return false;
        }
        if (edliAdministrationChargesValue === '') {
            alert("Enter EDLI Admin charges.");
            $("#edliAdministrationCharges").focus();
            return false;
        }
        if (edliInspectionChargesValue === '') {
            alert("Enter EDLI Inspection charges.");
            $("#edliInspectionCharges").focus();
            return false;
        }

        if ($("#totalNumberOfEmployeesInMonth").val() === '') {
            alert("Enter total number of employees for the month.");
            $("#totalNumberOfEmployeesInMonth").focus();
            return false;
        }
        if ($("#totalNumberOfExcludedEmployeesInMonth").val() === '') {
            alert("Enter total number of excluded employees for the month.");
            $("#totalNumberOfExcludedEmployeesInMonth").focus();
            return false;
        }
        if ($("#totalGrossWagesOfExcludedEmployeesInMonth").val() === '') {
            alert("Enter total gross wages of excluded employees for the month.");
            $("#totalGrossWagesOfExcludedEmployeesInMonth").focus();
            return false;
        }

        var edliContributionRemitted = document.getElementById('edliContributionRemitted');

 //   
   // 
        var epfInspectionCharges = document.getElementById('epfInspectionCharges');
        var edliAdminCharges = document.getElementById('edliAdministrationCharges');
        var edliInspectionCharges = document.getElementById('edliInspectionCharges');
        var result = '';
        result += validate_expression(edliContributionRemitted, 'd', "Only digits are allowed in EDLI Contribution.\n");

   // 
  //  
        result += validate_expression(epfInspectionCharges, 'd', "Only digits are allowed in EPF Inspection charges.\n");
        result += validate_expression(edliAdminCharges, 'd', "Only digits are allowed in EPF EDLI charges.\n");
        result += validate_expression(edliInspectionCharges, 'd', "Only digits are allowed in EDLI Inspection charges.\n");
        if (result !== '') {
            alert(result);
            return false;
        }
        var totalRemitted = $("#totalRemitted").html();
        totalRemitted = totalRemitted.replace(/,/g, "");
        //alert("totalRemitted= " + totalRemitted);
        var totalRemitAmt = 0;
        totalRemitAmt = parseNumber(parseInt(totalRemitted))
                - parseNumber(parseInt($("#edliContributionRemitted").attr("init-value")))
            
                - parseNumber(parseInt($("#epfInspectionCharges").attr("init-value")))
                - parseNumber(parseInt($("#edliAdministrationCharges").attr("init-value")))
                - parseNumber(parseInt($("#edliInspectionCharges").attr("init-value")))
                + parseNumber(parseInt($("#edliContributionRemitted").val()))
            
                + parseNumber(parseInt($("#epfInspectionCharges").val()))
                + parseNumber(parseInt($("#edliAdministrationCharges").val()))
                + parseNumber(parseInt($("#edliInspectionCharges").val())); 
        //if(totalRemitAmt > 0) {
        var totalNetPayableAmountSpan1 = parseNumber($("#totalNetPayableAmountSpan").html());
        if (totalNetPayableAmountSpan1 > 0) {
            if (confirm("Total net payable amount is Rs." + $("#totalNetPayableAmountSpan").html() + ".\n Are you sure to proceed ? ")) {
                document.forms[0].submit();
            }
        } else {
            alert("Total Amount being remitted must be greater than zero.");
        }
    }
    
    function getTotalRemitted() {
        var sum = 0;
        var totalRemitted = $("#totaleECRRemittedAmount").val();
        totalRemitted = totalRemitted.replace(/,/g, "");


        sum = parseNumber(parseInt(totalRemitted))
                - parseNumber(parseInt($("#edliContributionRemitted").attr("init-value")))
            
                - parseNumber(parseInt($("#epfInspectionCharges").attr("init-value")))
                - parseNumber(parseInt($("#edliAdministrationCharges").attr("init-value")))
                - parseNumber(parseInt($("#edliInspectionCharges").attr("init-value")))
                + parseNumber(parseInt($("#edliContributionRemitted").val()))
            
                + parseNumber(parseInt($("#epfInspectionCharges").val()))
                + parseNumber(parseInt($("#edliAdministrationCharges").val()))
                + parseNumber(parseInt($("#edliInspectionCharges").val()));


        //$("#totalRemitted").html(sum);
        $("#totalAmountECR").html(sum);
        $("#netEdliNetpayable").html($("#edliContributionRemitted").val());
    //
    
        $("#netEpfInspectionCharges").html($("#epfInspectionCharges").val());
        $("#netEdliAdministrationCharges").html($("#edliAdministrationCharges").val());
        $("#netEdliInspectionCharges").html($("#edliInspectionCharges").val());
        var totalNetPayableAmount = $("#totalNetPayableAmount").val();
        totalNetPayableAmount = totalNetPayableAmount.replace(/,/g, "");
        var sumNetPayableAmount = 0;
        sumNetPayableAmount = parseNumber(parseInt(totalNetPayableAmount))
                - parseNumber(parseInt($("#edliContributionRemitted").attr("init-value")))
        
                - parseNumber(parseInt($("#epfInspectionCharges").attr("init-value")))
                - parseNumber(parseInt($("#edliAdministrationCharges").attr("init-value")))
                - parseNumber(parseInt($("#edliInspectionCharges").attr("init-value")))
                + parseNumber(parseInt($("#edliContributionRemitted").val()))
        
                + parseNumber(parseInt($("#epfInspectionCharges").val()))
                + parseNumber(parseInt($("#edliAdministrationCharges").val()))
                + parseNumber(parseInt($("#edliInspectionCharges").val()));   
        $("#totalNetPayableAmountSpan").html(sumNetPayableAmount);
    }
</script>

<form id="frmChallanSummary" name="frmChallanSummary" action="/pf/member/generate-challan" method="post">
    
    
        <ul class="breadcrumb">

        
            <li><a href='/epfo/home?_HDIV_STATE_=8-67-25CDB7ED346161625AD757B8F666CA7A' style="padding-left: 4px;" title="Click to go to Home Page">Home</a></li>
        <li><a href="/epfo/ecr/ecrEstHomePage?_HDIV_STATE_=8-66-25CDB7ED346161625AD757B8F666CA7A" title="Click to go to ECR Home Page">ECR Home Page</a></li>
        <li><a href="/epfo/ecr/init/?_HDIV_STATE_=8-65-25CDB7ED346161625AD757B8F666CA7A" >ECR Upload</a></li>

        <li class="active">ECR Summary</li>

    </ul>
    
        
        
    <div id="dvDraftChallanList">
        <h3>Summary of uploaded Electronic Challan cum Return (ECR): </h3>
        <div>
             
            <div class="form-group">
                <div class="col-sm-12">                    
                    <table class="table table-striped table-condensed table-bordered">
                        <tr class="info">
                            <th colspan="4">ECR Details:- (TRRN: <?php echo $_COOKIE['trrn']; ?>)                            
                                <input id="ecrId" name="ecrId" type="hidden" value="112446757"/>
                                <input id="trrn" name="trrn" type="hidden" value="2732410007888"/>
                                <input id="ecrTypeStr" name="ecrTypeStr" type="hidden" value="ECR"/>
                                <input id="epfExemptionStatus" name="epfExemptionStatus" type="hidden" value="N"/>
                                
                            </th>                           
                        </tr>
                        <tr>
                            <th>Establishment Name</th>
                            <td>
                               <?php echo session('company_name'); ?>
                            </td>
                            <th>Establishment Id</th>
                            <td><?php echo session('establishment_id'); ?></td>
                        </tr>
                        <tr>
                            <th>Wage Month</th>
                            <td><?php echo $_COOKIE['wageMonth']; ?></td>
                            <th>Return Month</th>
                            <td>OCT-2024</td>
                        </tr>
                        <tr>
                            <th>CONTRIBUTION RATE (%)</th>
                            <td><?php echo $_COOKIE['contributionRate']; ?></td>
                            <th>Exemption Status</th>
                            <td>Unexempted</td>
                        </tr>
                        <tr>
                            <th>Upload Date Time</th>
                            <td><?php echo date('d-M-Y H:i'); ?></td>
                            <th>Total Number of UAN's</th>
                            <td>35</td>
                        </tr>
                        <tr>
                            <th>ECR File Type</th>
                            <td colspan="3">ECR</td>                            
                        </tr> 
                        <tr>
                            <th>Remarks</th>
                            <td colspan="3">ECRSEP</td>                            
                        </tr>    
                        
                    </table>                        
                    <table style="width: 100%;">
                        <caption class="algnleft"><h4>ECR Summary</h4></caption>
                        <tr>
                            <td class="tds">
                                <table class="table table-striped table-condensed table-bordered">
                                    <tr class="info">
                                        <td></td>
                                        <th >Total</th>
                                    </tr> 
                                    <tr>
                                        <th>Gross Wages (<i class="fa fa-rupee">)</td>
                                            <td class="algnright">       <?php echo $_COOKIE['grossWage']; ?></td>
                                    </tr> 
                                    <tr>
                                        <th>EPF Wages (<i class="fa fa-rupee">)</td>
                                                <td class="algnright">       <?php echo $_COOKIE['grossWage']; ?></td>
                                    </tr> 
                                    <tr>
                                        <th>EPS Wages (<i class="fa fa-rupee">)</td>
                                                <td class="algnright">       <?php echo $_COOKIE['grossWage']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>EDLI Wages (<i class="fa fa-rupee">)</td>
                                                <td sclass="algnright">       <?php echo $_COOKIE['grossWage']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>NCP Days</td>
                                        <td class="algnright">              0</td>
                                    </tr>
                                </table>
                            </td>
                            <td>&nbsp;</td>
                            <td class="tds">
                                <table class="table table-striped table-condensed table-bordered">
                                    <tr class="info">
                                        <td></td>
                                        <th >UAN Count</th>
                                        <th >Contribution Remitted (<i class="fa fa-rupee">)</th>
                                    </tr> 
                                    <tr>
                                        <th>EPF EE Share</td>
                                        <td class="algnright">31</td>
                                        <td class="algnright">        <?php echo $_COOKIE['epf_ee']; ?></td>
                                    </tr> 
                                    <tr>
                                        <th>EPF ER Share</td>
                                        <td class="algnright">31</td>
                                        <td class="algnright">        <?php echo $_COOKIE['epf_er']; ?></td>
                                    </tr> 
                                    <tr>
                                        <th>EPS Contribution</td>
                                        <td class="algnright">31</td>
                                        <td class="algnright">         <?php echo $_COOKIE['eps_c']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>EDLI Contribution</td>
                                        <td class="algnright">31</td>
                                        <td class="algnright"><?php echo $_COOKIE['chrage1']; ?></td>
                                    </tr>                                                    
                                    <tr>
                                        <th>Total Refund of Advance</td>
                                        <td class="algnright"></td>
                                        <td class="algnright">              0</td>
                                    </tr>
                                    <tr>
                                        <th>Total Contribution Remitted</td>
                                        <td class="algnright"></td>
                                        <td class="algnright"><label id="totalRemitted">         <?php  echo $_COOKIE['net_total'];  ?>  </label></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <input id="edliExemptionStatus" name="edliExemptionStatus" type="hidden" value="N"/>
                    <table class="table table-striped table-condensed table-bordered">
                        <thead>
                            <tr class="bg-info">                        
                                <th rowspan="2" colspan="2" class="vertmid">Details:-</th>                                                                        
                                <th class="algncenter" >Remitted as per ECR</th>                            
                                <th class="algncenter" >PMRPY/PMPRPY Benefit</th>
                                    
                                <th class="algncenter" >ABRY Benefit</th>
                                <th class="algncenter" >Net Payable</th>
                            </tr>  
                            <tr class="bg-info">                            
                                <th class="algncenter" >(<i class="fa fa-rupee">)</th>
                                <th class="algncenter" >(<i class="fa fa-rupee">)</th>                            
                                <th class="algncenter" >(<i class="fa fa-rupee">)</th>
                                <th class="algncenter" >(<i class="fa fa-rupee">)</th>
                            </tr>  
                        </thead>    
                        <tbody>
                            <tr>
                                <th  class=" vertmidleft" colspan="2">Total EPF Contribution EE Share (A/C 1)</th>                            
                                <td  class=" vertmidright" >         <?php echo $_COOKIE['epf_ee']; ?></td>                            
                                <td  class=" vertmidcenter" >-</td>
                                
                                <td  class=" vertmidright">              0</td>
                                <td  class=" vertmidright" > <?php echo $_COOKIE['epf_ee']; ?></td>
                            </tr>
                            <tr>
                                <th class=" vertmidleft" colspan="2">Total EPS Contribution (A/C 10)</th>                            
                                <td class=" vertmidright">          <?php echo $_COOKIE['eps_c']; ?></td>                            
                                <td class=" vertmidright">              0</td>
                                
                                <td class=" vertmidright">              0</td>
                                <td class=" vertmidright" > <?php echo $_COOKIE['eps_c']; ?></td>
                            </tr>
                            <tr>
                                <th class=" vertmidleft" colspan="2" >Total Difference Between EPF & EPS (ER Share A/C 1)</th>                            
                                <td class=" vertmidright">        <?php echo $_COOKIE['epf_er']; ?></td>                                                        
                                <td class=" vertmidright">              0</td>  
                                
                                <td class=" vertmidright">              0</td>
                                <td class=" vertmidright"><?php echo $_COOKIE['epf_er']; ?></td>                            
                            </tr>

                            <tr>
                                <th class=" vertmidleft" colspan="2">Total EDLI Contribution (ER Share A/C 21)  <label class="lbl">*</label></th>                            
                                <td class=" vertmidright"><input id="edliContributionRemitted" name="edliContributionRemitted" onkeypress="return isNumber(event);" type="text" class="form-control inpt" init-value="" onblur="getTotalRemitted();" value="<?php echo $_COOKIE['chrage1']; ?>"/></td>                            
                                <td class=" vertmidcenter">-</td>
                                <td class="vertmidcenter">-</td>
                                    <td class=" vertmidright" ><label id="netEdliNetpayable"><?php echo $_COOKIE['chrage1']; ?></label></td>                            
                            </tr>
                            <tr>
                                <th class=" vertmidleft" rowspan="2">Total EPF Charges (A/C 2) </th>   
                                <th class=" vertmidleft">Administration  <label class="lbl">*</label>
                                    
                                
                                </th>
                                    
                                        <td class=" vertmidright"><?php echo $_COOKIE['chrage1']; ?></td>
                                        <input id="epfAdministrationCharges" name="epfAdministrationCharges" type="hidden" value="1554"/>
                                    
                                    
                                    <td class=" vertmidcenter">-</td>
                                    <td class=" vertmidcenter">-</td>
                                    <td class=" vertmidright"><label id="netEpfAdministrationCharges"><?php echo $_COOKIE['chrage1']; ?></label></td>                            
                            </tr>

                            <tr>
                                <th>Inspection  <label class=" lbl">*</label></th>
                                <td class=" vertmidright"><input id="epfInspectionCharges" name="epfInspectionCharges" onkeypress="return isNumber(event);" type="text" class="form-control inpt" init-value="0" onblur="getTotalRemitted();" value="0"/></td>                            
                                    <td class=" vertmidcenter">-</td>                            
                                    <td class=" vertmidcenter">-</td>  
                                    <td class=" vertmidright"><label id="netEpfInspectionCharges">0</label></td>                            
                            </tr>
                            <tr>
                                <th class=" vertmidleft" rowspan="2">Total EDLI Charges (A/C 22)</th>   
                                <th>Administration  <label class=" lbl">*</label></th>
                                <td class=" vertmidright"><input id="edliAdministrationCharges" name="edliAdministrationCharges" onkeypress="return isNumber(event);" type="text" class="form-control inpt" init-value="0" onblur="getTotalRemitted();" value="0"/></td>

                                    <td class=" vertmidcenter">-</td>                            
                                    <td class=" vertmidcenter">-</td> 
                                    <td class=" vertmidright"><label id="netEdliAdministrationCharges">0</label></td>                            
                            </tr>
                            <tr>
                                <th>Inspection  <label class=" lbl">*</label></th>
                                <td class=" vertmidright"><input id="edliInspectionCharges" name="edliInspectionCharges" onkeypress="return isNumber(event);" type="text" class="form-control inpt" init-value="0" onblur="getTotalRemitted();" value="0"/></td>

                                    <td class=" vertmidcenter">-</td>                            
                                    <td class=" vertmidcenter">-</td> 
                                    <td class=" vertmidright"><label id="netEdliInspectionCharges">0</label></td>                            
                            </tr>
                            <tr>
                                <th class=" vertmidleft" colspan="2" >Total Refund of Advance (A/C 1)</th>   
                                <td class=" vertmidright">              0</td>                            
                                <td class=" vertmidcenter">-</td>
                                <td class=" vertmidcenter">-</td>
                                <td  class=" vertmidright">              0</td>                                                                        
                            </tr>
                            <tr class="bg-success"> 
                          
                                <th class=" vertmidleft" colspan="2" >Total</th>                            
                                <th class=" vertmidright"><span id="totalAmountECR"><?php echo $_COOKIE['sub_total']; ?></span>
                                    <input id="totaleECRRemittedAmount" name="totaleECRRemittedAmount" type="hidden"  />
                                </th>                            
                                <th class=" vertmidright">0</th>
                                    
                                <th class=" vertmidright">0</th>
                                <th  class=" vertmidright"><span id="totalNetPayableAmountSpan"><?php echo $_COOKIE['sub_total']; ?></span>
                                    <input id="totalNetPayableAmount" name="totalNetPayableAmount" type="hidden" />
                                </th>
                            </tr>
                        <tbody>

                    </table>   
                            
                                     
                    
                        <table class="table table-striped table-condensed table-bordered">
                            <thead>
                                <tr class="bg-info"> 
                                    <th class=" vertmidleft" colspan="2" >Employer Details :-</th>                                                        
                                </tr>
                            </thead>
                            <tbody>
                                
                                    <tr>
                                        <th class=" vertmidleft">Total number of Employees in the month <label class=" lbl">*</label></th>                            

                                        <td class=" vertmidcenter"><input id="totalNumberOfEmployeesInMonth" name="totalNumberOfEmployeesInMonth" onkeypress="return isNumber(event);" type="number" class="form-control inpt" value="" required/></td>                            
                                        </tr>
                                        <tr>
                                            <th class=" vertmidleft">Number of excluded employees <label class=" lbl">*</label></th>                            

                                            <td class=" vertmidcenter"><input id="totalNumberOfExcludedEmployeesInMonth" name="totalNumberOfExcludedEmployeesInMonth" onkeypress="return isNumber(event);" type="number" class="form-control inpt" value="" required/></td>                            
                                        </tr>
                                        <tr>
                                            <th class=" vertmidleft">Gross wages of the Excluded Employees (<i class="fa fa-rupee">) <label class=" lbl">*</label></th>                            

                                            <td class=" vertmidcenter"><input id="totalGrossWagesOfExcludedEmployeesInMonth" name="totalGrossWagesOfExcludedEmployeesInMonth" onkeypress="return isNumber(event);" type="number" class="form-control inpt" value="" required /></td>                            
                                        </tr>
                                
                                  
                            </tbody>    
                        </table>
                        
                            
                        
                    
                </div>
                <div class="col-sm-12"><hr></div>
                <div class="col-sm-12">
                    <div class="col-sm-5">
                    </div>
                    <div class="col-sm-7">
                        <button id="submitEcr" name="submitEcr" title="Click to generate challan." class="btn btn-primary btn-create-challan" type="submit" value="Submit">
                            
                            Generate Challan
                        </button>

                        
                        <a class="btn btn-default"  href="#" title="Click to go to ECR upload page.">
                            Cancel
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div>
<input type="hidden" name="_HDIV_STATE_" value="8-64-2D55CBA0E28FEAD0EC7D03599F303589" />
</div></form>
 
                    </div>
                </div>
            </div>
        <footer id="footer" class="row">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="footer-btm">
                    <div>
                            <span id="footer_msg_1">Designed, Developed and Hosted by: Employees' Provident Fund Organisation, India</span>
                    </div>
                    <span><span id = "last_updated">Last Updated</span>


 

Fri 04 Oct 2024 (PV 5.0.55)
 </span>
                </div>
            </div>
        </div>
    </div>
</footer>
    </body>
</html>