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
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
        
        
        
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
        
        
        

        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

        <script src="/public/assets/pf/epfo-ui.js"></script>
        <script src="/public/assets/pf/CustomValidation.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js" integrity="sha256-9wRM03dUw6ABCs+AU69WbK33oktrlXamEXMvxUaF+KU=" crossorigin="anonymous"></script>
        
        <script nonce="" type="text/javascript" src="/epfo/scripts/epfo-security.js"></script>
        
        
        
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
                        



    
<link rel = "stylesheet" href = "/epfo/bower_components/jquery-ui/themes/ui-lightness/jquery-ui.min.css" >
<link rel = "stylesheet" type = "text/css" href = "/epfo/bower_components/jqGrid/css/ui.jqgrid.css" >
<script src = "/epfo/bower_components/jqGrid/js/i18n/grid.locale-en.js" ></script >
<script src = "/epfo/bower_components/jqGrid/js/jquery.jqGrid.min.js" ></script >

    
    <script > $(function () {
    $(window) . on("resize", function () {
        var
        $grid = $("#viewMemApprovedActivity"),
                    newWidth = $grid . closest(".ui-jqgrid") . parent() . width();
                    $grid . jqGrid("setGridWidth", newWidth, true);
                });
   

    $(document) . ajaxError(function () {
        alert(applicationForm . messages . error . unexpected);
    });
    $("#viewMemApprovedActivity") . jqGrid({ 
                    mtype:"POST",
                    url:'/epfo/activity/getApprovedActivities?activityId=-1&status=A&_HDIV_STATE_=17-63-156906959C676FC5EC806B283EE5D685', 
                    datatype: "json",
                    height: "100%",
                    autowidth: true,
                    scroll:"1",
                    shrinkToFit:true,
                    loadOnce:true,
                    colNames : ['Activity Id', 'Type', 'View', '', ''],
                    colModel : [
                        {
                            name :
                            'activityId',index :'activityId',align:'center' ,sortable:false},
                        {
                            name :
                            'type',index :'type',align:'center',width:'150px' ,sortable:false},
                        {
                            name :
                            'viewUrl',index :'view',align:'center' ,width:'150px',sortable:false},
                        {
                            name :
                            'dsPdfName',index :'dsPdfName',align:'center' ,width:'0px',hidden:true},
                        {
                            name :
                            'pdfFilePath',index :'pdfFilePath',align:'center' ,width:'0px',hidden:true}
                    ],
                    rowNum : 100,
                    //rowList : [10,20,100],
                    gridview:true,
                    gridComplete: function ()
    {
        var
        ids = jQuery("#viewMemApprovedActivity") . jqGrid('getDataIDs');
        for (var i = 0;i < ids . length;i++){
        var
        rowData = jQuery("#viewMemApprovedActivity") . jqGrid('getRowData', ids[i]);
        var
        noOfMember = rowData . noOfMember;
        /*if(rowData.activityId == 15242){
            alert(rowData.dsPdfName);
        }*/
        var
        viewKycForMr = "";


        if (rowData . dsPdfName != '') {
            //if(rowData.typeId === 1 || rowData.typeId === 2){
            viewKycForMr = "<input style='margin-bottom: 2px;' type='button'  \n\
                                    value='View Member KYC' class='btn btn-default btn-xs' onclick =\"viewProjection('" + rowData . pdfFilePath + "');return false;\" />";
        }
        var
        view = "<input style='margin-bottom: 2px;' type='button'  \n\
                        value='View' class='btn btn-default btn-xs' onclick =\"viewProjection('" + rowData . viewUrl + "');return false;\" />" + " " + viewKycForMr;
        jQuery("#viewMemApprovedActivity") . jqGrid('setRowData', ids[i],{viewUrl:view});
                                }

                        var recs = parseInt($("#viewMemApprovedActivity") . getGridParam("records"), 10);
                        if (isNaN(recs) || recs == 0) {
                            //$("#divApprovedRecords").addClass("hide");
                            $("#divApprovedRecords .panel-body") . html("No records found for approval.");
                        }
                        responsiveJqGrid("viewMemApprovedActivity");
                    },
                    jsonReader : {
        repeatitems :
        false
                    },
                    pager : "#viewMemApprovedActivityPager",
                    viewrecords: true, 
                    sortorder: "desc", 
                   // caption: "Approved",
                    recordpos: 'right',
                    pgbuttons : true,
                    pginput :true,
                    hiddengrid: false,
                    grouping:true,
                    groupingView : 
                        {
                            groupField :
                            ['type'],
                            groupColumnShow : [true], 
                            groupText : ['<b>{0} - {1} Item(s)</b>'], 
                            groupCollapse : false, 
                            groupOrder: ['desc'] 
                        },
                   // rownumbers:true
                });
            });
            function viewProjection(url){
                var
                myWindow = window . open(url, "MemberDetails", "width=900, height=600,scrollbars=1");
                myWindow . focus();
            }
        </script >
        <style >
            .showall{
    padding - top: 2px; padding - bottom: 2px;}
            #viewmemact{padding: 0px;}
        </style >
        <div class="breadcrumb-wrap hidden-xs" >
        <div class="epfo-container" >
            <div class="row" >
                <div class="col-sm-6" >
                     <ol class="breadcrumb" >
                        <li> Activity Details </li >
                        <li> Rejected</li >
                    </ol >
                </div >
                <div class="col-sm-6" >
                    <ol class="breadcrumb pull-right" >
                        <li ><a href = "/pf/member/register-approval" class="showall" > View Pending </a ></li >
                        <li ><a href = "/pf/member/register-rejected" class="showall" > View Rejected </a ></li > 
                         <li ><a href = "/pf/member/register-approved" class="showall" > View Approved </a ></li > 
                    </ol >
                </div >
            </div >
        </div >
        </div >
        <div class="panel panel-primary" id = "divApprovedRecords" >
            <div class="panel-heading " > View Rejected </div >
            <div class="panel-body" id = "viewmemact" >
               <div class="ui-jqgrid ui-widget ui-widget-content ui-corner-all" id="gbox_viewMemApprovedActivity" dir="ltr"
     style="width: 1497px;">
    
   
    <div class="ui-jqgrid-view"   style="width: 1497px;">
        <div class="ui-jqgrid-titlebar ui-jqgrid-caption ui-widget-header ui-corner-top ui-helper-clearfix"
             style="display: none;"><a   class="ui-jqgrid-titlebar-close ui-corner-all HeaderButton"
                                       title="Toggle Expand Collapse Grid" style="right: 0px;"><span
                        class="ui-icon ui-icon-circle-triangle-n"></span></a><span class="ui-jqgrid-title"></span></div>
        <div class="ui-state-default ui-jqgrid-hdiv ui-corner-top" style="width: 1497px;">
            <div class="ui-jqgrid-hbox">
                <table class="ui-jqgrid-htable" style="width: 1497px;" role="presentation" aria -
                       labelledby="gbox_viewMemApprovedActivity" cellspacing="0" cellpadding="0" border="0">
                    <thead>
                    <tr class="ui-jqgrid-labels" role="row">
                        <th style="color:#428bca; font-size:14px;font-weight: 500;text-align:center; ">Activity Id  </th>
                         <th style="color:#428bca; font-size:14px;font-weight: 500;text-align:center; ">Type</th> 
                         <th style="color:#428bca; font-size:14px;font-weight: 500;text-align:center; ">View</th>
                         <th style="color:#428bca; font-size:14px;font-weight: 500;text-align:center; ">Accept/reject</th>
                    </tr>
                                          
                    </thead>
                     <tbody style="font-size:14px;">
                    <tr class="jqgfirstrow" role="row" style="height:15px;">
                        <td colspan="4"></td>
                        
                    </tr>
                     <?php /* if (!empty($users) && is_array($users)): ?>
                    <tr id="viewMemApprovedActivityghead_0_0" style=" margin-top:5px;">
                        <td style="padding-left:0px;" colspan="5">  Individual Registration - <?php echo $users_count; ?> Item(s) </b></td>
                    </tr>
                      <?php endif; */ ?>
                        <?php if(isset($_COOKIE['u_status']) ) {
                                 if($_COOKIE['u_status'] == "2"){ ?>
                                  <tr role="row" id="1" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                    <td role="gridcell" style="text-align:center;" title="148141874" aria -
                            describedby="viewMemApprovedActivity_activityId"> 3412154
                        </td>
                                     <td role="gridcell" style="text-align:center;" title="Individual Registration" aria -
                            describedby="viewMemApprovedActivity_type"> Individual Registration
                        </td>
                        <td>
                             <button style="margin-bottom: 2px;" type="button"   class="btn btn-default btn-xs" onclick="seturl1()"> View </button>
                        </td>
                        <td role="gridcell" style="text-align:center;" title=" " aria -
                            describedby="viewMemApprovedActivity_viewUrl">
                            <input style="margin-bottom: 2px;" type="button" value="Accept" class="btn btn-default btn-xs" onclick="changeStatus1('1');">
                                <input style="margin-bottom: 2px;" type="button" value="Back To Pending" class="btn btn-default btn-xs" onclick="changeStatus1('0');">
                         
                            </td>
                        
                                     </tr>
                                
                                <?php } } ?>
                           
                      
                     <?php /* if (!empty($users) && is_array($users)): ?>
                            
                                <?php foreach ($users as $user): ?>
                                  <tr role="row" id="1" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                    <td role="gridcell" style="text-align:center;" title="148141874" aria -
                            describedby="viewMemApprovedActivity_activityId"> <?= esc($user['activity_id']) ?>
                        </td>
                                     <td role="gridcell" style="text-align:center;" title="Individual Registration" aria -
                            describedby="viewMemApprovedActivity_type"> Individual Registration
                        </td>
                        <td>
                             <button style="margin-bottom: 2px;" type="button"   class="btn btn-default btn-xs" onclick="seturl(<?= esc($user['uan']) ?>)"> View </button>
                        </td>
                        <td role="gridcell" style="text-align:center;" title=" " aria -
                            describedby="viewMemApprovedActivity_viewUrl">
                            <input style="margin-bottom: 2px;" type="button" value="Accept" class="btn btn-default btn-xs" onclick="changeStatus('1','<?= esc($user['PKMemberID']) ?>');return false;">
                             <input style="margin-bottom: 2px;" type="button" value="Reject" class="btn btn-default btn-xs" onclick="changeStatus('2','<?= esc($user['PKMemberID']) ?>');return false;">
                             <input style="margin-bottom: 2px;" type="button" value="Back To Pending" class="btn btn-default btn-xs" onclick="changeStatus('0','<?= esc($user['PKMemberID']) ?>');return false;">
                            </td>
                        
                                     </tr>  
                                <?php endforeach; ?>
                                
                               
                          
                         <?php else:  */?>
                          <?php if(!isset($_COOKIE['u_status'])) { ?>
                            <tr style="height:15px;"><td>No records found for approval.</td></tr>
                           <?php } ?>
                        <?php /* endif; */ ?>
                    
                   
                  
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
    <div class="ui-jqgrid-resize-mark" id="rs_mviewMemApprovedActivity">&nbsp;</div>
  
</div>
                
            </div >
        </div >
    
 
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





<!--Wed 05 Jun 2024 (PV 5.0.21)-->



Fri 04 Oct 2024 (PV 5.0.55)
 </span>
                </div>
            </div>
        </div>
    </div>
</footer>
<script>
function seturl(id){
     window.location.href = `/pf/member/profile?uan_id=${id}`;
}
function seturl1(id){
     window.location.href = `/pf/member/view-profile`;
}
    function changeStatus(id,mid)
    {
          
        $.blockUI({message: '<h4>Loading...</h4>'});
              

  
          $.ajax({
                    url: '/pf/member/updateMemberStatus',  // URL for the server-side route
                    type: 'POST',
                    data: {
                        id: id,  
                        mid: mid,                    },
                    success: function(response) {
                        alert("Successfully upadted your status");
                          $.unblockUI();
                          location.reload();
                    },
                    error: function() {
                        alert('Failed to update status. Please try again.');
                          $.unblockUI();
                    }
                });
    }
      function changeStatus1(id)
    {
          
        $.blockUI({message: '<h4>Loading...</h4>'});
              
document.cookie = "u_status="+id;
  $.unblockUI();
                          location.reload();
  
    }
</script>
    </body>
</html>