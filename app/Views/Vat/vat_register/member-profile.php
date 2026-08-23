<html lang="en"><head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <title>EPFO: Member registration - Practicepot</title>
        
        

        <!-- Latest compiled and minified CSS -->
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

        
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" integrity="sha256-rByPlHULObEjJ6XQxW/flG2r+22R5dKiAoef+aXWfik=" crossorigin="anonymous">
        
        <link href="/public/assets/pf/epfo-style.css" rel="stylesheet">
        <link href="/public/assets/pf/logo.jpg.gif" rel="shortcut icon">
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        
        
        
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
        
        
        

        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

        <script src="/public/assets/pf/epfo-ui.js"></script>
        <script src="/public/assets/pf/CustomValidation.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js" integrity="sha256-9wRM03dUw6ABCs+AU69WbK33oktrlXamEXMvxUaF+KU=" crossorigin="anonymous"></script>
        
        <script nonce="" type="text/javascript" src="/public/assets/pf1/epfo-security.js"></script>
        
        
        
        <script nonce="" type="text/javascript">
            var logoutUrl = "/pf/restoreSession/logout?_HDIV_STATE_=12-1-17D33EE66731EC80724A8F35ECF87D3E";
            var validateSessionUrl = "/pf/restoreSession/validateActivity?_HDIV_STATE_=12-2-17D33EE66731EC80724A8F35ECF87D3E";
            var logoutFuncUrl = "/pf/logout?_HDIV_STATE_=12-0-17D33EE66731EC80724A8F35ECF87D3E";
        </script>
        <style>
            .error {
            color: red;
            font-size: 0.9em;
        }
        .input-error {
            border-color: red;
        }
        </style>
    </head>
    <body class="epfo-body session-disp" style="font-size: 15px;"> 
        &nbsp;
  






<script type="text/javascript">
    //set hostname for all js Used in all 
    var hostname = '/epfo';
    $(function () {
       
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
                  <?php include('header.php') ;?>        
        </div>
    </div>
</div>


        <div class="epfo-container displayDiv" style = "margin-top: 80px;" >
            <div class="row" >
                <div class="divide10" ></div >
                <div class="col-md-12 displayDiv" style = "min-height: 560px;" >
                    <noscript >
                    <div class="alert alert-danger" style = "padding-left: 20px; padding-right: 0px; margin-left: 0px;" > Please enable JavaScript in your browser </div >
                    </noscript >
                        



    
<link rel = "stylesheet" href = "/public/assets/pf/jquery-ui.min.css" >
<link rel = "stylesheet" type = "text/css" href = "/epfo/bower_components/jqGrid/css/ui.jqgrid.css" >
<script src = "/epfo/bower_components/jqGrid/js/i18n/grid.locale-en.js" ></script >
<script src = "/epfo/bower_components/jqGrid/js/jquery.jqGrid.min.js" ></script >

    
   
        <style >
            .showall{
    padding - top: 2px; padding - bottom: 2px;}
            #viewmemact{padding: 0px;}
        </style >
         <form id="searchMember" name="searchMember" role="form" class="form-horizontal" action="/epfo/memberProfile/profileDetails" method="post">

        <div class="panel panel-primary" id = "divApprovedRecords" >
              <div class="panel-heading">
        <h3 class="panel-title">Search</h3>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
        <div class="panel-body" id="memberDetails">

            <div class="form-group">
                <div class="col-sm-12">
                    <div class="col-sm-4">
                        <div class="col-sm-2">
                            <label class="control col-sm-1" style="text-align: right">UAN&nbsp;</label>
                        </div>
                        <div class="col-sm-10">
                            <input id="uan_number" name="uan" style="width: 200px;" type="text" class="input-sm form-control" value="CBTRY1853889" maxlength="12" fdprocessedid="vlteqc">
                            <span id="emptyUan"></span>
                            <span id="uan_errors" class="error"> </span>
                        </div>
                    </div>

                    <div class="col-sm-8">
                        <div class="col-sm-2">
                            <label class="control col-sm-1" style="text-align: center">Or</label>
                        </div>
                        <div class="col-sm-2">
                            <label class="control" style="text-align: right">Member Id&nbsp;</label>
                        </div>
                        <div class="col-sm-7" style="text-align: left">
                            <input id="estRegionCode" name="estIdSplit.estRegionCode" style="width: 25px;text-align: center;" disabled="disabled" type="text" value="CB" maxlength="2" fdprocessedid="ousrmq">
                            <input id="estOfficeCode" name="estIdSplit.estOfficeCode" style="width: 35px;text-align: center;" disabled="disabled" type="text" value="TRY" maxlength="3" fdprocessedid="vwghwp">
                            <input id="estExtPrefix" name="estIdSplit.estExtPrefix" style="width: 70px;text-align: center;" disabled="disabled" type="text" value="1853889" maxlength="7" fdprocessedid="cabo3">
                            <input id="estExtension" name="estIdSplit.estExtension" style="width: 32px;text-align: center;" disabled="disabled" type="text" value="000" maxlength="3" fdprocessedid="in4p3">
                            <input id="memberId" name="memberId" style="width: 62px;text-align: right;" placeholder="0000000" type="text" value="" maxlength="7" disabled>
                            <span id="emptyMemId"></span>

                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group"></div>
            <div class="form-group">
                <div class="control col-sm-12 pull-right">

                    <input type="submit" class="btn btn-primary" value="Search" fdprocessedid="k1zwm3">


                    <a href="/epfo/memberProfile/viewMemberProfile?_HDIV_STATE_=13-65-C0F560EE09A847C762D79804275F5E95" class="btn btn-primary">
                        Cancel
                    </a>
                    <span id="emptyUan"></span>
                </div>
            </div>
        </div>
    </div>
           
        </div >
    
 </form>
 
 <div id="personProfile" style="display:block;"> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="/public/assets/pf/uan.css" rel="stylesheet">
<!--        <style>
        .uan-face {
                font-family: "Arial","Helvetica Neue",Helvetica,Arial,sans-serif;
                background-color: #b12a30;
                font-size: 1.4vw;
                font-style: normal;
                font-weight: bold;
                letter-spacing: 0;
                line-height: 1.3;
                padding-left: 0.25em;
                padding-bottom: 0.25em;
                text-transform: none;
                text-decoration: underline;
                color: white;
        }
        </style>-->
        <title>Personal Profile</title>
    
    
        
       
            <ul class="nav nav-tabs">
                
                
                
                
                
                
                
                <li role="presentation" class="active"><a href="#" onclick="loadMenu('',this);return false;">Profile</a></li>
                
                 
                
                <li role="presentation" class="kyc_tab"><a href="#" onclick="loadMenu('',this);return false;" data-toggle="tab">KYC</a></li>
                
                <li role="presentation" class=""><a href="#" onclick="loadMenu('/epfo/memberExit/viewExitMemberIncl?q=CIfssmjEK66ZNSdq5yhJn_ZIBJWwcDKQvM2XaJD4rrosC4oKuKHTTlLU0Lnfx6DnF8S6wuPGwoncMtYhuYS-D2woBhx--WlTh3a9dqILcbpTJCDHXs2jqG-ifdZxsjJjkfpc2DVUUSm6aj7xJojN5g&amp;_HDIV_STATE_=18-73-85C06A6C842D967667C06B4EE859B664',this);return false;" data-toggle="tab">Mark Exit</a></li>                
                
                <li role="presentation">
                    <!--<div class="container-fluid" style="width:280px; border: 2px solid;  border-radius: 75px; border-color: red">-->
                    <div class="container-fluid div-uan">
                        
                        <div class="uanCss">
                            
                            <span class="uan-face" id="uan-face">2145365245145</span>

                            <p class="small" id="u_name"><?php echo $_COOKIE['name']; ?></p>
                        </div>
                        
                    </div>
                </li>            
            </ul>
            <div id="mainDiv" style="margin-top: 2px;" class="tab-pane">







    
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 
        <title>Member details pending for approval</title>
        <!--Member Registration Details-->
        <style>.label_head { font-weight: bold; }</style>
    
    
        <div class="panel panel-primary ">
            <div class="panel-heading p-5">
                <h4 class="panel-title">Member Details</h4>
                <!--Member Details-->
            </div>
            <div class="panel-body">
                <div id="result" style="color:red;"></div>
                 <table class="table table-striped table-condensed table-bordered" id="profile_table">
                     <tbody><tr>
                        <td id="memberID" style="width: 30%" class="label_head">Member ID</td><td colspan="3">3412154</td>
                    </tr>
                    <tr>
                        <td id="username" style="width: 30%" class="label_head">Name</td><td colspan="3"> <?php echo $_COOKIE['name']; ?></td>
                    </tr>
                    <tr>
                        <td style="width: 20%" class="label_head">
                            Date of Birth
                        </td>
                        <td style="width: 30%" id="dob"> <?php echo $_COOKIE['dob']; ?></td>
                        <td style="width: 20%" class="label_head">
                            <span>Date of Joining</span>
                        </td>
                        <td style="width: 30%" id="doj"> <?php echo $_COOKIE['doj']; ?> </td>
                        
                    </tr>
                    
                    <tr>
                        <td style="width: 20%" class="label_head">Gender</td>
                        <td style="width: 30%" id="gender">Male </td>
                        <td style="width: 20%" class="label_head">
                            <span>Marital Status</span>
                        </td>
                        <td style="width: 30%"><?php  if($_COOKIE['maritalStatus'] =="M"){ echo "Married"; }elseif($_COOKIE['maritalStatus'] =="U"){ echo "Un-married"; }elseif($_COOKIE['maritalStatus'] =="D"){ echo "Divorced"; }else{ echo "Widow/Widower"; } ?></td> 
                    </tr>
                    <tr>
                        <td class="label_head">Father/Husband Name</td> 
                  <td id="father_name">
                             <?php echo $_COOKIE['guardian']; ?> 
                        </td>
                        <td class="label_head">Relation</td>
                        <td id="relation"> <?php if($_COOKIE['relation'] =="H"){ echo "Husband"; }else{ echo "Father"; } ?> </td>
                        
                    </tr>
                    <tr>
                        <td class="label_head">Mobile</td>
                        <!--Mobile-->
                        <td id="mobile"><?php echo $_COOKIE['mobileNo']; ?>  </td>
                        <td class="label_head">Email Id</td>
                        <!--e-Mail ID-->
                        <td id="email"><?php echo $_COOKIE['emailId']; ?> </td>
                     </tr>
                     <tr>
                        <td class="label_head">International Worker</td>
                        <td colspan="3"> 
                            No 
                         </td>  
                    </tr> 
                        <tr>
                            <td class="label_head">Differently Abled</td>
                            <td>No</td>
                            <td class="label_head">Wages</td>
                            <!--Marital Status-->
                          <td id="wage"><?php echo $_COOKIE['wages12']; ?>
                          </td>
                        </tr>
                         
                 </tbody>
                     </table>
            </div>
        </div>
                    
    

</div>
       
    


            
        </div>
 
                    </div >
                </div >
            </div >
       
        <footer id="footer" class="row">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="footer-btm">
                    <div>
                            <span id="footer_msg_1">Designed, Developed and Hosted by: Employees' Provident Fund Organisation, India</span>
                    </div>
                    <span><span id = "last_updated">Last Updated</span>

 
 </span>
                </div>
            </div>
        </div>
    </div>
</footer>
 <script>
      document.getElementById('searchMember').addEventListener('submit', function(event) {
            // Prevent form submission
            event.preventDefault();
            

            // Clear previous error messages
            document.getElementById('uan_errors').innerText = ''; 

            let isValid = true;

            // Validate Name
            const uan_no = document.getElementById('uan_number').value.trim(); 
            if (uan_no === '') {
                document.getElementById('uan_errors').innerText = 'Enter valid UAN.';
                isValid = false;
            }

           

            // If form is valid, proceed with form submission
            if (isValid) { 
                $.ajax({
                    url: '/pf/member/uansearch',  // URL for the server-side route
                    type: 'POST', 
                    dataType: 'json', 
                    data: {uan_no:uan_no},
                    success: function(response) {
                    if (response.message) {
                        $('#result').html('<p>' + response.message + '</p>');
                    } else { 
                        $('#personProfile').show();
                        $('#memberID').html(response.memberID);
                        $('#username').html(response.username);
                        $('#wage').html(response.wage);
                        $('#mobile').html(response.mobile);
                        $('#email').html(response.email);
                        $('#relation').html(response.relation);
                        $('#father_name').html(response.father_name);
                        $('#gender').html(response.gender);
                        $('#dob').html(response.dob);
                        $('#doj').html(response.doj);
                        $('#uan-face').html(response.uan);
                        $('#u_name').html(response.username);
                    }
                    },
                    error: function() {
                        
                        $('#result').html('<p>An error occurred while fetching the user.</p>');
                    }
                   
                });
            }
        });
        
        
   document.addEventListener('DOMContentLoaded', function () {
    // Parse the URL to get the `user_id` parameter
    const urlParams = new URLSearchParams(window.location.search);
    const userId = urlParams.get('uan_id');

    if (userId) {
        $.ajax({
                    url: '/pf/member/uansearch',  // URL for the server-side route
                    type: 'POST', 
                    dataType: 'json', 
                    data: {uan_no:userId},
                    success: function(response) {
                    if (response.message) {
                        $('#result').html('<p>' + response.message + '</p>');
                    } else { 
                        $('#personProfile').show();
                        $('#memberID').html(response.memberID);
                        $('#username').html(response.username);
                        $('#wage').html(response.wage);
                        $('#mobile').html(response.mobile);
                        $('#email').html(response.email);
                        $('#relation').html(response.relation);
                        $('#father_name').html(response.father_name);
                        $('#gender').html(response.gender);
                        $('#dob').html(response.dob);
                        $('#doj').html(response.doj);
                        $('#uan-face').html(response.uan);
                        $('#u_name').html(response.username);
                    }
                    },
                    error: function() {
                        
                        $('#result').html('<p>An error occurred while fetching the user.</p>');
                    }
                   
                });
    }
});
        
        
 </script>
    </body>
</html>