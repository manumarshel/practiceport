<html lang="en"><head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <title>EPFO: Home</title>
        
        

        <!-- Latest compiled and minified CSS -->
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

        
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" integrity="sha256-rByPlHULObEjJ6XQxW/flG2r+22R5dKiAoef+aXWfik=" crossorigin="anonymous">
        
        <link href="/public/assets/pf/epfo-style.css" rel="stylesheet">
        <link href="/public/assets/pf/logo.jpg.gif" rel="shortcut icon">
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
        
        
        
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
        
        
        

        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

        <script src="/public/assets/pf/epfo-ui.js"></script>
        <script src="/public/assets/pf/CustomValidation.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js" integrity="sha256-9wRM03dUw6ABCs+AU69WbK33oktrlXamEXMvxUaF+KU=" crossorigin="anonymous"></script>
        
        <script nonce="" type="text/javascript" src="/epfo/scripts/epfo-security.js"></script>
        
        
        
        <script nonce="" type="text/javascript">
            var logoutUrl = "/pf/logout";
            var validateSessionUrl = "/pf/logout";
            var logoutFuncUrl = "/pf/logout";
        </script>
        
    </head>
    <body class="epfo-body session-disp" style="font-size: 15px;"> 
        &nbsp;
        






<script type="text/javascript">
    //set hostname for all js Used in all 
    var hostname = '/epfo';
    $(function () {
        /*$.ajax({
            url: '/epfo/no-auth/Employeralerts/version?_HDIV_STATE_=12-3-17D33EE66731EC80724A8F35ECF87D3E',
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
                        <img class="header-logo" id="header-icon-img" src="/public/assets/pf/logo.jpg.gif">
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 content-pad-0" style="margin-left:-20px;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <a class="navbar-brand navbar-left" href="#" style="margin-top:5px; padding:0px 0px">
                               <span class="header-text"> Employees' Provident Fund Organisation, India </span><br>
                                <span class="hidden-xs header-sub-text" style=""> Ministry of Labour &amp; Employment, Government of India</span>
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
                    <div style="height: 20px;">
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
                        <span class="hidden-xs" style="color:#3654AE" title="CROSSLITE INFRA PRIVATE LIMITED">	
                          
                          Name : <?php echo session('company_name'); ?>
                          
                       </span>
                    </div>
                  
                </div>
                
            </div>
                
                <div class="col-md-4" style="float: right;text-align:right;font-size: 11px;margin-right: 10px;">
                    <div>
                        <span class="hidden-xs" style="color:#FFF;padding:5px 5px;border-right:1px solid #3654AE;">
                            <a href="#" id="btnFontMinus" style="color:#FFF;font-weight:bold;background-color:#3654AE;padding:0 2px;">-A</a>  
                            <a href="#" id="btnFontReset" style="color:#FFF;font-weight:bold;background-color:#3654AE;padding:0 4px;" "="">A</a>
                            <a href="#" id="btnFontPlus" style="color:#FFF;font-weight:bold;background-color:#3654AE;padding:0 1px;" "="">A+</a>
                        </span>
                        <span class="hidden-xs" style="padding:5px 5px;color:#05326D;">
                            <i class="fa fa-envelope icon-orange"></i> employerfeedback[at]epfindia[dot]gov[dot]in
                        </span>
                    </div>
                    <div>
                     
                       <span style="color:#FFF;padding:3px 3px;margin-top:5px;">
                           <a href="/pf/logout"><i class="fa fa-sign-out fa-2"></i> Logout</a>
                       </span>
                       

                    </div>
                    <div style="text-align:right;font-size:10px;height: 20px;" id="versionDiv"> 
Mon 12, Aug 2024 (PV 5.0.41) 

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
            <ul class="nav navbar-nav navbar-left menu-ul" style="margin-left:-22px;" id="menu"> 
                    
                        
                        <li class="active" style="display: inline-flex;">
                            <i class="fa fa-home" style="margin-top: 9px;color: white;"></i><a href="/pf/dashboard" style="padding-left: 4px;" title="Click to go to Home Page">Home</a>
                            </li>
                     
                    
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Member
                                    <span class="caret"></span>
                                </a>
                                    
                                        <ul class="dropdown-menu m1"> 
                                                    <li> 
                                                        
                                                <a href="/pf/member/profile">Member Profile</a>
                                            </li>             
                                                    <li> 
                                                <a href="/pf/member/register">REGISTER-INDIVIDUAL</a>
                                            </li>            
                                                    <li> 
                                                        
                                                <a href="#">REGISTER-BULK</a>
                                            </li>         
                                                
                                                    <li> 
                                                        
                                                <a href="#">KYC-BULK</a>
                                            </li>        
                                                    <li> 
                                                <a href="#">EXIT-BULK</a>
                                            </li>    
                                                
                                                    <li>
                                                 
                                                <a href="/pf/member/register-approval">APPROVALS</a>
                                            </li>  
                                                    <li> 
                                                <a href="#">AADHAAR VERIFICATION</a>
                                            </li>                                           
                                         
                                                    <li>
                                                 
                                                <a href="#">APPROVE KYC PENDING FOR DS</a>
                                            </li>         
                                                
                                                    <li> 
                                                        
                                                <a href="#">Basic Details Change Requests</a>
                                            </li>         
                                                    <li>
                                                 
                                                <a href="#">APPROVE KYC SEEDED BY MEMBER</a>
                                            </li>                                           
                                         
                                                    <li>
                                                 
                                                <a href="#">UAN ALLOTMENT FOR EXISTING MEMBER</a>
                                            </li>                                           
                                         
                                                    <li> 
                                                <a href="#">International Worker &lt;-&gt; Domestic Worker Change</a>
                                            </li>         
                                                
                                                    <li> 
                                                <a href="#">Approve POHW Request <span class="badge alert-d" style="animation-name:t;animation-duration:1s;animation-iteration-count:infinite">new</span></a>
                                            </li>          
                                                
                                                    <li>
                                                 
                                                <a href="#">Joint Declaration Change Requests <span class="badge alert-d" style="animation-name:t;animation-duration:1s;animation-iteration-count:infinite">new</span></a>
                                            </li>           
                                                    <li> 
                                                <a href="#">Joint Declaration Filing <span class="badge alert-d" style="animation-name:t;animation-duration:1s;animation-iteration-count:infinite">new</span></a>
                                            </li>                                           
                                        
                                         
                                    </ul>
                                    
                            </li> 
                    
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Establishment
                                    <span class="caret"></span>
                                </a>
                                    
                                        <ul class="dropdown-menu m1"> 
                                                
                                                    <li> 
                                                <a href="#">VIEW PROFILE</a>
                                            </li>                                           
                                         
                                                    <li>
                                                 
                                                <a href="#">CONTACT DETAILS</a>
                                            </li>   
                                                    <li> 
                                                <a href="#">EXEMPTED RETURNS</a>
                                            </li>     
                                                    <li>
                                                 
                                                <a href="#">VIEW ADDRESS</a>
                                            </li>                                           
                                         
                                                    <li> 
                                                <a href="#">DSC / e-Sign</a>
                                            </li>      
                                                    <li> 
                                                <a href="#">FORM-5A</a>
                                            </li>                                           
                                         
                                                    <li> 
                                                <a href="#">BRANCHES[FORM 2A]</a>
                                            </li>                                           
                                         
                                                    <li> 
                                                <a href="#">DOWNLOAD PDFS</a>
                                            </li>        
                                                    <li> 
                                                <a href="#">MEMBER LOCATION MAPPING</a>
                                            </li>    <li> 
                                                <a href="#">Modify Establishment Details</a>
                                            </li>                                           
                                         
                                                    <li> 
                                                <a href="#">e-Inspection Notice</a>
                                            </li>    
                                                    <li> 
                                                <a href="#">PMGKY Bank Account Registration</a>
                                            </li>                                           
                                         
                                                    <li>
                                                 
                                                <a href="#">CONTRACTOR <style>.alert-d{background-color: red; color: #fff}@keyframes t{from{opacity:0}to{opacity:1}}</style><span class="badge alert-d" style="animation-name:t;animation-duration:1s;animation-iteration-count:infinite">new</span></a>
                                            </li>       
                                                 
                                                    <li>
                                                 
                                                <a href="#">PRINCIPAL EMPLOYERS <span class="badge alert-d" style="animation-name:t;animation-duration:1s;animation-iteration-count:infinite">new</span></a>
                                            </li>         
                                                    <li>
                                                 
                                                <a href="#">Closure Declaration</a>
                                            </li>    
                                                    <li> 
                                                <a href="#">EDLI DETAILS FILING <span class="badge alert-d" style="animation-name:t;animation-duration:1s;animation-iteration-count:infinite">new</span></a>
                                            </li>   
                                    </ul>
                                    
                            </li>
                     
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Payments
                                    <span class="caret"></span>
                                </a>
                                    
                                        <ul class="dropdown-menu m1"> 
                                                
                                                    <li> 
                                                        
                                                <a href="/pf/member/ecr-filing">ECR/RETURN FILING</a>
                                            </li>                                           
                                         
                                                    <li> 
                                                <a href="#">PAYMENT (ECR)</a>
                                            </li>                                           
                                         
                                                    <li>
                                                 
                                                <a href="#">PAYMENT (DIRECT CHALLAN)</a>
                                            </li>      
                                    </ul>
                                    
                            </li>
                     
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Dashboards
                                    <span class="caret"></span>
                                </a>
                                    
                                        <ul class="dropdown-menu m1"> 
                                                    <li>
                                                <a href="#">MISSING DETAILS</a>
                                            </li>   
                                                    <li>
                                                <a href="#">ACTIVE MEMBER</a>
                                            </li>       
                                                    <li> 
                                                <a href="#">EXITED MEMBER</a>
                                            </li>    
                                                    <li> 
                                                        
                                                <a href="#">MEMBER SERVICE DETAILS</a>
                                            </li>    
                                                    <li> 
                                                <a href="#">Members completing 58 years</a>
                                            </li>        
                                                    <li> 
                                                <a href="#">J&amp;K Member Mapping</a>
                                            </li>      
                                                    <li> 
                                                <a href="#">PMGKY Eligible Members</a>
                                            </li>   
                                                    <li>
                                                 
                                                <a href="#">PMGKY Reimbursement Benefit Details</a>
                                            </li>   
                                    </ul> 
                            </li>
                     
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    User
                                    <span class="caret"></span>
                                </a>
                                    
                                        <ul class="dropdown-menu m1"> 
                                                    <li>
                                                 
                                                <a href="#">MY PROFILE</a>
                                            </li>          
                                                    <li> 
                                                <a href="#">CHANGE PASSWORD</a>
                                            </li>                                           
                                         
                                    </ul>
                                    
                            </li> 
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Admin
                                    <span class="caret"></span>
                                </a>
                                    
                                        <ul class="dropdown-menu m1"> 
                                                    <li> 
                                                        
                                                <a href="#">USER MANAGER</a>
                                            </li>     
                                    </ul>
                                    
                            </li>
                     
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Online Services
                                    <span class="caret"></span>
                                </a>
                                    
                                        <ul class="dropdown-menu m1"> 
                                                    <li>
                                                 
                                                <a href="#">Stop Auto Transfer Request</a>
                                            </li>                                           
                                         
                                                    <li> 
                                                        
                                                <a href="#">TRANSFER CLAIMS</a>
                                            </li>       
                                                    <li>
                                                 
                                                <a href="#">Annexure K</a>
                                            </li>                                           
                                         
                                                    <li> 
                                                <a href="#">PDF-Pending Cases </a>
                                            </li>                                           
                                         
                                                    <li> 
                                                <a href="#">Exempted To Unexempted PF Tranfer</a>
                                            </li>                                           
                                         
                                                    <li>
                                                
                                            
                                                        
                                                <a href="#">Exempted To Unexempted PF Transfer - Bulk </a>
                                            </li>                                           
                                         
                                                    <li>
                                                 
                                                <a href="#">Unexempted To Exempted Annexure K</a>
                                            </li>      
                                                    <li>
                                                 
                                                <a href="#">Surrender PF Exemption</a>
                                            </li>     
                                                    <li> 
                                                <a href="#">Track Surrender Exemption Application</a>
                                            </li>                                           
                                        
                                         
                                    </ul>
                                    
                            </li>
                    
                
            
                
                    
                    
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    ABRY
                                    <span class="caret"></span>
                                </a>
                                    
                                        <ul class="dropdown-menu m1"> 
                                                    <li>
                                                 
                                                <a href="#">Member Registration</a>
                                            </li>    
                                                    <li>
                                                 
                                                <a href="#">Establishment Registration</a>
                                            </li>                                           
                                         
                                    </ul>
                                    
                            </li>
                    
                
            
                            
                            <li>
                                
<!--                                <a href="/epfo/membermapping/viewForm?_MODIFY_HDIV_STATE_=&_HDIV_STATE_=12-62-17D33EE66731EC80724A8F35ECF87D3E">                                        
                                    Member Mapping for branches that are not alloted code
                                </a>-->
                            </li>
                             

            </ul>
                            
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
                    








 
<script>
//    checkReValidationUrl = '';
//    pohwhomeUrl = '';
      checkForLinkValidityUrl = '/epfo/pohw/checkForLinkValidity?_HDIV_STATE_=12-63-17D33EE66731EC80724A8F35ECF87D3E';
    $(document).ready(function () {
//        $('#ABRYModal').modal('show');
        $("#btnSave").click(function () {
            blockUI('loading data.. please wait...');
            setTimeout(function () {
                unBlockUI();
            }, 2000);
        });

    });

//function loadAbryMessage(){
//     $("#abryAlertMsgModal").show();
//}
    function actvMembPdf(url) {
        var mine = window.open(url, '', 'top=10,left=10,resizable=1,height=500,width=740, scrollbars=1, status=yes');
        if (!mine)
            alert("Popup Blocked. Please Disable Pop Up Blocker.");
    }
</script>
<style>
    .ui-widget.ui-widget-content{
        border: 2px solid #c5c5c5;
        border-radius: 15px;
        max-width: 50%;
        top: 35%;
        left:15%;
    }
    .ui-dialog-titlebar-close{
        display: none;
    }
    .ui-dialog-titlebar{
        background-color:#2d679b;
        border-radius: 4px;
    }
    .ui-dialog-title{
        color: white;
        font-weight: bolder;
    }

</style>

<div class="divide10"></div>
<div class="row">    
    <div class="col-md-4" style="padding-left:5px; float:right;">
        <div class="col-md-12 data-box">
            <div class="col-md-12 content-pad-0 data-box-header">
                <div class="col-md-1 content-pad-0 box-icon">
                    <span><i class="fa fa-user-plus"></i></span>
                </div>
                <div class="col-md-11 content-pad-0 box-icon-title">
                    Employer Profile
                </div>
            </div>
            <div class="col-md-12 content-pad-0 box-icon-body">

                <div class="info-box-1" id="estbInfo" style="text-align: center; display: none;">
                    <img src="/epfo/images/loader.gif">
                </div>
               <div id="pohwRevalidationPndng" style="display: none; width: 200;padding-top: 10px;">
                    
                    <h4 style="font-weight: bold;color: red;align-self:center">Alert / आवश्यक सूचना:</h4>
                    <p style="font-weight: bold"><span aria-hidden="true" class="glyphicon glyphicon-exclamation-sign"></span><span> The last date for forwarding Applications for Validation of Option / Joint Options with complete wage details to Field Offices is </span><span id="lastDateFromDb" style="color:red"></span>
                        <span>.Hence, you are requested to forward Applications for Validation of Option / Joint Options with complete wage details to the Field Office at the earliest and</span><span style="color:black"> must</span><span> within the due date.</span></p>
                    <div id="alertButtton" style="float:right">
                       
                        <a class="btn btn-danger" onclick="closeAlert();" style="color: white">Ok</a>
                    </div> 
                </div>
                
                <div id="digitalJeevanAlertBox" style="display: none; width: 200">
                    <div style="font-weight: bold"><span aria-hidden="true" class="glyphicon glyphicon-exclamation-sign"></span> Appeal to Facilitate Your Retired Employees to Submit Digital Jeevan Praman Patra From Their Mobile.</div>
                    <div style="font-weight: bold">Click <a href="/epfo/djppResourceDownload/getDjppPdf?_HDIV_STATE_=12-64-17D33EE66731EC80724A8F35ECF87D3E" title="Click here to download file" style="color: red; text-decoration: none; outline: none; " onclick="closeAlertBox();">here</a> for more details. </div><br>
                    <div id="alertButtton" style="float:right">
                        <a class="btn btn-danger" onclick="closeAlertBox();" style="color: white">Ok</a>
                    </div> 
                </div> 
                
                    
                    
                        
                        
                        <script type="text/javascript">
                         
                         
                        </script>
                    
                    
                   
                <table id="estbInfoTable" class="table table-striped table-bordered form-group" style="margin-left: 0px; margin-right: 20px;border:none;"><tbody><tr>
                                                        <td colspan="2" style="text-align: center;border-top:none;"><b><?php echo session('company_name'); ?></b>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 30%;"><b>Est. Id</b>
                                                        </td><td style="width: 70%;"><?php echo session('establishment_id'); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>LIN</b></td>
                                                        <td><?php echo session('lin_id'); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>PAN</b></td>
                                                        <td><?php echo session('pan'); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>PF</b></td>
                                                        <td>Un-Exempted</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Pension</b></td>
                                                        <td>Un-Exempted</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>EDLI</b></td>
                                                        <td>Un-Exempted</td>
                                                    </tr><tr>
                                                        <td><b>National Industrial Classification Code (NIC)</b></td>
                                                        <td><a href="/epfo/nicRegistration/edit?_HDIV_STATE_=12-66-17D33EE66731EC80724A8F35ECF87D3E">Update NIC2008 Code</a> </td>
                                                        </tr><tr>
                                                        <td><b>Address</b></td>
                                                        <td><?php echo session('address2'); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border-bottom:none;"><b>PF Office</b></td>
                                                        <td style="border-bottom:none;">KOZHIKODE (CALICUT) [KKD]</td>
                                                    </tr></tbody></table>
            </div>
        </div>
    </div>

    
    
        
            
            <div class="col-md-8" style="padding-right:0px;">
                <div class="col-md-12 data-box">
                    <div class="col-md-12 content-pad-0 data-box-header">
                        <div class="col-md-1 content-pad-0 box-icon">
                            <span><i class="fa fa-info"></i></span>
                        </div>
                        <div class="col-md-11 content-pad-0 box-icon-title">
                            Alerts and To Do Tasks
                        </div>
                    </div>
                    

                    <div class="col-md-12 box-icon-body">

                        
                        
                        <script language="javascript" src="/epfo/scripts/alert.js"></script>
                        <script>
                            var alertURL = '/epfo/no-auth/Employeralerts/getAlerts?_HDIV_STATE_=12-69-17D33EE66731EC80724A8F35ECF87D3E';
                        </script>
                        <div class="alert-container">

                        </div>
                        

                        
                        

                        
                        <hr>
                        
                            <div class="alert alert-danger" style="text-align: left;height: 50px;">
                                <span aria-hidden="true" class="glyphicon glyphicon-exclamation-sign"></span> <span class="label label-danger">NEW! </span>&nbsp;<strong> Dear Employer, You are liable to pay damages(14B) on belated payment of dues. To avoid inquiries under section 14B, Click <a href="/epfo/Damages/DueDamages?_HDIV_STATE_=12-70-17D33EE66731EC80724A8F35ECF87D3E" style="padding-top: 1px; padding-bottom: 2px;" title="Click here to pay damages(14B) on belated payment of dues.">here</a> to pay.</strong>
                            </div>
                        
                        
                            <div class="alert alert-danger" style="text-align: left;height: 50px;">
                                <span aria-hidden="true" class="glyphicon glyphicon-exclamation-sign"></span> <span class="label label-danger">NEW! </span>&nbsp;<strong> Dear Employer, You are liable to pay interest(7Q) on belated remittance of contribution, Click <a href="/epfo/Damages/DueDamages?_HDIV_STATE_=12-71-17D33EE66731EC80724A8F35ECF87D3E" style="padding-top: 1px; padding-bottom: 2px;" title="Click here to pay interest(7Q) on belated remittance of contribution.">here</a> to pay.</strong>
                            </div>
                        
                        <hr>
                        <div class="alert alert-danger" style="text-align: left;height: 50px;">
                            <span aria-hidden="true" class="glyphicon glyphicon-exclamation-sign"></span> <span class="label label-danger">NEW! </span>&nbsp;<strong> Dear Employer, Kindly note, the existing digital signature process has been changed. Click <a href="/epfo/newDscResourcesDownloadingController/downloadHelpFile?_HDIV_STATE_=12-72-17D33EE66731EC80724A8F35ECF87D3E" style="padding-top: 1px; padding-bottom: 2px;">here</a> to know the detailed process.</strong>
                        </div> 

                         

                                               

                        
                        
                                                                   
                            
                            
                         
                    </div>
                </div>
            </div>

            
                <div class="col-md-8" style="padding-right:0px">
                    <div class="col-md-12 data-box">
                        

                        <div class="col-md-12 box-icon-body">
                            
                            <script>
                                $(function () {
                                    /*$.ajax({
                                     url: '/epfo/no-auth/Employeralerts/messageP?_HDIV_STATE_=12-79-17D33EE66731EC80724A8F35ECF87D3E',
                                     type: "POST",
                                     success: function (result) {
                                     if (result.err !== undefined) {
                                     alert(result.err);
                                     } else {
                                     $('#memberAlert').html(result);
                                     }
                                     },
                                     error: function (result, status, error) {
                                     
                                     }
                                     });*/
                                });
                            </script>
                            <div id="memberAlert">
                                
                            </div>
                            <ul style="list-style:none;margin-left:-25px;">
                                
                                
                                
                            </ul>
                        </div>
                    </div>
                </div>
            
                                    
        
        
        
              
            

    
        
            <div class="col-md-4" style="padding-left:5px; float:right;">
                <div class="col-md-12 data-box">
                    <div class="col-md-12 content-pad-0 data-box-header">
                        <div class="col-md-1 content-pad-0 box-icon">
                            <span><i class="fa fa-info"></i></span>
                        </div>
                        <div class="col-md-11 content-pad-0 box-icon-title">
                            Online Services
                        </div>
                    </div>
                    
                </div>
            </div>
        
        
     

    
        
</div>




<!--START modal for PMGKY - added by utkarsh-->
<!--commented on 15/Oct/2020 by utkarsh j wrt whatsapp communication with harsh sir. -->



<!--END modal for PMGKY - added by utkarsh-->
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                
                <h4 class="modal-title">KYC Pending for Approval</h4>
            </div>
            <div class="modal-body" style="min-height: 20px;text-align:  center;">
                <div>
                    
                    <p> There are KYC pending for approval.<br>
                        Click OK button to proceed for approval.</p>
                </div>
                <br>
                <div class="col-sm-offset-1 col-sm-offset-1">
                    <a href="/epfo/activity/viewDscFailedKycList?_HDIV_STATE_=12-81-17D33EE66731EC80724A8F35ECF87D3E" class="btn btn-danger" title="OK">OK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-square-o-right size-12"></i></a>
                </div>
            </div>


        </div>
    </div>
</div>


<script type="text/javascript">
    /*$.ajax({
     url: '/epfo/activity/getDSCFaileKycActivities?_HDIV_STATE_=12-82-17D33EE66731EC80724A8F35ECF87D3E',
     type: "POST",
     success: function (result) {
     if (result.records > 0) {
     $("#myModal").modal({
     backdrop: 'static',
     keyboard: false
     });
     }
     },
     error: function (result, status, error) {
     alert(result + "" + status + "" + error);
     }
     });*/

    $('#registerncsbutton').click(function () {
        var data = $("input[name='ncsregisterationradio']:checked").val();
        if (data !== 'I') {
            alert('Please select \'YES\' for NCS Portal registration.');
            return;
        } else if (data === 'I') {
            window.location.href = '/epfo/ncs/estConsent?_HDIV_STATE_=12-83-17D33EE66731EC80724A8F35ECF87D3E';
        } else
            return false;

    

    });

    function loadPopUp() {
        $('#NCSModal').modal('show');
    }

</script>


<div id="NCSModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span style="font-weight: bold;">×</span></button>
                <!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>-->
                <h4 class="modal-title">National Career Service Portal</h4>
            </div>
            <div class="modal-body" style="width: 101%">
                National Career Service (NCS) Portal(<span style="color: blue">www.ncs.gov.in</span>) is an initiative by the Directorate General of Employment, Ministry of Labour and Employment (MoLE) Government of India.<br><br>
                <b>From entry-level workers to mid management level executives</b>, NCS enables employers to find the right fit for their organization through a country-wide database of over 1 crore candidates.<br>
                <br>The employers can
                <ul>
                    <li>Post jobs on the portal free of cost</li>
                    <li>Search suitable candidates from a pool  of 1 crore+ jobseekers</li>
                    <li>Shortlist candidates by using a wide variety of filtering criterion available on the portal</li>
                    <li>Send interview invites to shortlisted candidates through automated email &amp; SMS</li>
                    <li>Participate in events. job fairs and recruitment drives</li>
                </ul>
                <b>
                    To Register on National Career Service Portal, please select âYesâ and click on Register button.</b>
                When you click on Register button, your registration request will be sent to NCS for further processing and the user credentials will be shared on your registered mobile number within 10 days.

            </div>


        </div>
    </div>
</div>

<!--added by amolw-->

<custom-link for="updateMobUrl" link="/epfo/updateEstMobileNo?_HDIV_STATE_=12-84-17D33EE66731EC80724A8F35ECF87D3E"></custom-link>
    
    <div id="EstConfirmMobileNoModal" class="modal fade" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <!--                <button type="button" class="close" data-dismiss="modal"><span style="font-weight: bold;">&times;</span></button>-->
                    <h4 class="modal-title"><i class="fa fa-phone"></i>  Confirm Mobile Number</h4>
                </div>
                <div class="modal-body" style="width: 101%" id="modal_est_msg">
                    Dear employer your registered mobile number is <b><span class="btn-link" id="est_mob_no"><u> </u></span>.</b> Kindly Confirm.<br>
                You can change your contact details from <b>Menu -&gt;Establishment -&gt; Contact Details</b> 
            </div>
            <div class="modal-footer text-right">
                <button href="updateMobUrl" class="btn btn-primary" id="confirmMobNo" data-dismiss="modal"><i class="fa fa-phone"></i> Confirm</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $("body").on("click", ".notifclose", function () {
            $(this).parent().hide();
        });

        //show notification for est contact update

        $("#pmgkyDescriptionModal").on('hide.bs.modal', function () {
            $.ajax({
                url: '/epfo/checkMobileNo?_HDIV_STATE_=12-85-17D33EE66731EC80724A8F35ECF87D3E',
                type: "POST",
                success: function (result) {
                    if (result.shownotif === "Y") {
                        $("#EstConfirmMobileNoModal").modal({
                            backdrop: 'static',
                            keyboard: false
                        });
                        $('#modal_est_msg').find("span").text(result.est_mobile_no);
                    }
                },
                error: function (result, status, error) {
                    alert(result + "" + status + "" + error);
                }
            });
        });
    });

    //update contact details of establishment
    $("#confirmMobNo").on("click", function () {
        var json = {"mobileNo": $('#est_mob_no').text()};

        blockUI("Loading...please wait");
        $.ajax({
            url: $("custom-link[for='updateMobUrl']").attr('link'),
            type: 'POST',
            contentType: 'application/json',
            data: JSON.stringify(json),
            success: function (result) {
                unBlockUI();
            },
            error: function (jqXHR, textStatus, errorThrown) {
                unBlockUI();
            }
        });
    });
</script>
 
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
                    <span><span id="last_updated">Last Updated</span>






Mon 12, Aug 2024 (PV 5.0.41) 
 </span>
                </div>
            </div>
        </div>
    </div>
</footer>
    
<span id="PING_IFRAME_FORM_DETECTION" style="display: none;"></span></body></html>