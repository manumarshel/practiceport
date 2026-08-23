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


        
        <div class="epfo-container displayDiv" style="margin-top: 80px;">
            <div class="row">
                <div class="divide10"></div>
                <div class="col-md-12 displayDiv" style="min-height: 560px;">
                    <noscript>
                    <div class="alert alert-danger" style="padding-left: 20px; padding-right: 0px; margin-left: 0px;" >Please enable JavaScript in your browser</div>
                    </noscript>
                    





<link rel="stylesheet" href="/epfo/bower_components/jquery-ui/themes/ui-lightness/jquery-ui.min.css">
<link rel="stylesheet" type="text/css" href="/epfo/bower_components/jqGrid/css/ui.jqgrid.css" />
<script src="/epfo/bower_components/jqGrid/js/i18n/grid.locale-en.js"></script>
<script src="/epfo/bower_components/jqGrid/js/jquery.jqGrid.min.js"></script>

<div id="mainDiv">
    


<script language="javascript" src="/epfo/scripts/Uan/MemberRegistration/NewMember/NewMemberRegistraion.js"></script>
<style>
    .longGridName { text-overflow: ellipsis; }
    .approveMember { padding-top: 2px; padding-bottom: 2px;}   
    #viewRegMem1{padding: 0px;}
    #viewRegMem2{padding: 0px;}
    #transferMember{margin: 10px;}
    #individualReg{text-align: center;}
</style>
  
    
    
        
    

<form id="memRegDetails" name="memRegDetails" role="form" class="form-horizontal" action="/pf/member/register-save" method="post">
    <div class="breadcrumb-wrap hidden-xs" >
        <div class="epfo-container">
            <div class="row">
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li>Member Registration</li>
                    </ol>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb pull-right">
                        <li><a href="/epfo/activity/viewPending/-1?_HDIV_STATE_=13-65-31C45EF7EE5944E342807A0AF2F8BF2C" class='approveMember' >Approve Member</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-primary panel-memRegistration" id="memRegDiv" name="memRegDiv">
        <div class="panel-heading">
            <h3 class="panel-title">
                Member Registration
            </h3>
            <div class="panel-icons">
                <a class="toggle-icon btn-round collapse in" data-target=".panel-memRegistration .panel-body, .panel-memRegistration .toggle-icon" data-toggle="collapse">
                    <i class="fa fa-minus-square "></i>
                </a>
                <a class="toggle-icon btn-round collapse" data-target=".panel-memRegistration .panel-body, .panel-memRegistration .toggle-icon" data-toggle="collapse">
                    <i class="fa fa-plus-square "></i>
                </a>
            </div>
        </div>
        <div class="panel-body panel-collapse collapse in">
            <div class="form-group">
                <label class="control col-sm-3">
                    <h5>&nbsp;&nbsp;<label><u>Previous Employment/UAN</u></label>&nbsp;</h5>
                </label>
                <div class="radio-inline">
                    <div class="col-sm-9">
                        
                        
                        <label class="data-label"><input id="previousEmployementNo" name="isPreviousEmployee" onclick="freshEmployement(&#39;/epfo/uanmember/viewFreshEmployement?_MODIFY_HDIV_STATE_=13-64-B27EEFA28A33BDC6367761FBAEB78444&amp;_HDIV_STATE_=13-66-31C45EF7EE5944E342807A0AF2F8BF2C&#39;);" name="previousEmployement" checked="true" type="radio" value="N"/>
                            No</label>
                    </div>
                </div>
                <div class="radio-inline">
                    
                    <label class="data-label"><input id="previousEmployementYes" name="isPreviousEmployee" onclick="previousEmployement(&#39;/epfo/uanmember/viewPreviousEmployment?_MODIFY_HDIV_STATE_=13-64-B27EEFA28A33BDC6367761FBAEB78444&amp;_HDIV_STATE_=13-67-31C45EF7EE5944E342807A0AF2F8BF2C&#39;);" name="isPreviousEmployee" type="radio" value="Y"/>
                        Yes    </label>                            
                </div>
                
            </div>
            
                
                
                    




<script type="text/javascript">
    $(function () { 
        //scrolling page to the top        
        $(document).scrollTop(0);
    });   
</script>
<style>
.oneWidth { width : 200px; }   
.longText { word-wrap: break-word; }
.input-group-addon{padding: 0px 12px;}
#salutations{padding-right: 0px;}
#memberName{width: 532px;}
#dob{min-width:100px;}
#doj{min-width:100px;}
#kycDetailsDiv{margin-left: 0px;}
#memreg1{margin-left: 0px; text-align: center;}
#memreg2{float:right;}
#passportValidTillerr{text-align: left;}
#passportValidTill{min-width:100px;}
#passportValidFromerr{text-align: left;}
#passportValidFrom{min-width:100px;}  
#wages{text-align:right;}
</style>
<div class="form-group">
        <label class="control-label col-sm-3">
             &nbsp;&nbsp;Name&nbsp;( As on AADHAAR )&nbsp;<font style="color: red;" >*</font>
        </label>
        <div class="col-sm-1" id='salutations'>
            <select id="salutation" name="currentDetails.salutation" name="salutation" class="form-control">
                <option value="1">Mr.</option>
                <option value="2">Ms.</option>
                <option value="3">Mrs.</option>
            </select>
        </div>
        <div class="col-sm-8 ">
            <input id="memberName" name="currentDetails.name" name="currentDetails.name" placeholder="Enter full name" type="text" class="form-control" onblur="this.value=this.value.toUpperCase(); validateName();" value="" maxlength="85"/>
            <p class="error" id="membername_error"></p>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3">
            &nbsp;&nbsp;Date of Birth&nbsp;( As on AADHAAR )&nbsp;<font style="color: red;" >*</font>
        </label>
        <div class="control col-sm-2">
        <div class="input-group">
            <input id="dob" name="currentDetails.dob" name="dob" placeholder="DD/MM/YYYY" type="date" class="oneWidthDate form-control" value=""/>
           <!-- <a class="input-group-addon">
                <i class="fa fa-calendar" data-target="dob"></i>
            </a>
            -->
        </div>
        </div>
        <div class="col-sm-12">
            <div class="col-sm-3"></div>
            <div class="col-sm-6" id="doberr">
                <p class="error" id="dobError"></p>
            </div>
        </div>
    </div>
    <div class="form-group">
    <label class="control-label col-sm-3">
        &nbsp;&nbsp;Gender&nbsp;<font style="color: red;" >*</font>
    </label>
    <div class="col-sm-3">
        
        <div class="radio-inline">
            <label class="control-label"><input id="currentDetails.genderCode1" name="currentDetails.genderCode" onclick="validateGender();" checked="checked" required="required" type="radio" value="M"/>
             Male</label> 
        </div>
        <div class="radio-inline">
            <label class="control-label"><input id="currentDetails.genderCode2" name="currentDetails.genderCode" required="required" type="radio" value="F"/>
             Female</label>
        </div>
         <div class="radio-inline">
            <label class="control-label"><input id="currentDetails.genderCode3" name="currentDetails.genderCode" required="required" type="radio" value="T"/>
            Transgender</label> 
         </div>
         
    </div>
    
        <label class="control-label col-sm-2">
            &nbsp;&nbsp;Nationality&nbsp;<font style="color: red;" >*</font>
        </label>
        <div class="col-sm-3">
            
            <select id="nationality" name="currentDetails.nationality" class="oneWidth form-control" onblur="validateNationalityDropDown();">
            <option value="77">INDIAN</option>
            <option value="1">Afghan</option><option value="2">Albanian</option><option value="3">Algerian</option><option value="4">Andorran</option><option value="5">Angolan</option><option value="6">of Antigua and Barbuda</option><option value="7">Argentinian</option><option value="8">Armenian</option><option value="9">Australian</option><option value="10">Austrian</option><option value="11">Azerbaijani</option><option value="12">Bahamian</option><option value="13">Bahraini</option><option value="14">Bangladeshi</option><option value="15">Barbadian</option><option value="16">Belarusian&iquest;&iquest;or&iquest;&iquest;Belarusan</option><option value="17">Belgian</option><option value="18">Belizean</option><option value="19">Beninese</option><option value="20">Bhutanese</option><option value="21">Bolivian</option><option value="22">Bosnian</option><option value="23">Botswanan</option><option value="24">Brazilian</option><option value="25">Bruneian</option><option value="26">Bulgarian</option><option value="27">Burkinese</option><option value="28">Burundian</option><option value="29">Cambodian</option><option value="30">Cameroonian</option><option value="31">Canadian</option><option value="32">Cape Verdean</option><option value="33">Central African</option><option value="34">Chadian</option><option value="35">Chilean</option><option value="36">Chinese</option><option value="37">Colombian</option><option value="38">Comorian</option><option value="39">Congolese</option><option value="40">Costa Rican</option><option value="41">Ivoirian</option><option value="42">Croat&iquest;&iquest;or&iquest;&iquest;Croatian</option><option value="43">Cuban</option><option value="44">Cypriot</option><option value="45">Czech</option><option value="48">Danish</option><option value="49">Djiboutian</option><option value="50">Dominican</option><option value="51">Dominican</option><option value="52">Ecuadorean</option><option value="53">Egyptian</option><option value="54">Salvadorean</option><option value="55">Equatorial Guinean</option><option value="56">Eritrean</option><option value="57">Estonian</option><option value="58">Ethiopian</option><option value="59">Fijian</option><option value="60">Finnish</option><option value="61">French</option><option value="62">Gabonese</option><option value="63">Gambian</option><option value="64">Georgian</option><option value="65">German</option><option value="66">Ghanaian</option><option value="67">Greek</option><option value="68">Grenadian</option><option value="69">Guatemalan</option><option value="70">Guinean</option><option value="71">Guinean</option><option value="72">Guyanese</option><option value="73">Haitian</option><option value="74">Honduran</option><option value="75">Hungarian</option><option value="76">Icelandic</option><option value="77">Indian</option><option value="78">Indonesian</option><option value="79">Iranian</option><option value="80">Iraqi</option><option value="81">Irish</option><option value="82">Israeli</option><option value="83">Italian</option><option value="84">Jamaican</option><option value="85">Japanese</option><option value="86">Jordanian</option><option value="87">Kazakh</option><option value="88">Kenyan</option><option value="89">Kiribati</option><option value="90">Kuwaiti</option><option value="91">Kyrgyzstani</option><option value="193">LAOS</option><option value="93">Latvian</option><option value="94">Lebanese</option><option value="95">Mosotho </option><option value="96">Liberian</option><option value="97">Libyan</option><option value="98">Liechtensteiner</option><option value="99">Lithuanian</option><option value="100">Luxembourger</option><option value="101">Malagasy&iquest;&iquest;or&iquest;&iquest;Madagascan</option><option value="102">Malawian</option><option value="103">Malaysian</option><option value="104">Maldivian</option><option value="105">Malian</option><option value="106">Maltese</option><option value="107">Marshallese </option><option value="108">Mauritanian</option><option value="109">Mauritian</option><option value="110">Mexican</option><option value="112">Mon&iquest;&iquest;gasque&iquest;&iquest;or&iquest;&iquest;Monacan</option><option value="113">Mongolian</option><option value="114">Moroccan</option><option value="115">Mozambican</option><option value="116">Burmese </option><option value="117">Namibian</option><option value="118">Nauruan </option><option value="119">Nepalese</option><option value="120">Dutch</option><option value="121">New Zealander</option><option value="122">Nicaraguan</option><option value="123">Nigerien</option><option value="124">Nigerian</option><option value="125">Norwegian</option><option value="126">Omani</option><option value="127">Pakistani</option><option value="128">Palauans </option><option value="129">Panamanian</option><option value="130">Papua New Guinean&iquest;&iquest;or&iquest;&iquest;Guinean</option><option value="131">Paraguayan</option><option value="132">Peruvian</option><option value="133">Philippine</option><option value="134">Polish</option><option value="135">Portuguese</option><option value="136">Qatari</option><option value="767">Qu&egrave;b&egrave;cois</option><option value="137">Korean</option><option value="138">Moldovan </option><option value="139">Romanian</option><option value="140">Russian</option><option value="141">Rwandan</option><option value="142">Nevisian</option><option value="143">St. Lucian</option><option value="145">SAMOAN</option><option value="146">Sammarinese</option><option value="147">Sao Tomean</option><option value="148">Saudi Arabian&iquest;&iquest;or&iquest;&iquest;Saudi</option><option value="149">Senegalese</option><option value="150">Serb&iquest;&iquest;or&iquest;&iquest;Serbian</option><option value="151">Seychellois</option><option value="152">Sierra Leonian</option><option value="153">Singaporean</option><option value="154">Slovak</option><option value="155">Slovene&iquest;&iquest;or&iquest;&iquest;Slovenian</option><option value="156">Solomon Islander</option><option value="157">Somali</option><option value="158">South African</option><option value="159">Spanish</option><option value="160">Sri Lankan</option><option value="161">Sudanese</option><option value="162">Surinamese</option><option value="163">Swazi</option><option value="164">Swedish</option><option value="165">Swiss</option><option value="166">Syrian</option><option value="766">Taiwanese</option><option value="167">Tajik&iquest;&iquest;or&iquest;&iquest;Tadjik</option><option value="168">Thai</option><option value="170">Timorese</option><option value="171">Togolese</option><option value="172">Tongan</option><option value="173">Trinidadian</option><option value="174">Tunisian</option><option value="175">Turkish</option><option value="176">Turkmen&iquest;&iquest;or&iquest;&iquest;Turkoman</option><option value="177">Tuvaluan</option><option value="178">Ugandan</option><option value="179">Ukrainian</option><option value="180">Emirian</option><option value="765">Briton</option><option value="182">Tanzanian</option><option value="183">American</option><option value="184">Uruguayan</option><option value="185">Uzbek</option><option value="186">Vanuatuan</option><option value="192">Vanticanien.</option><option value="187">Venezuelan</option><option value="188">Vietnamese</option><option value="189">Yemeni</option><option value="190">Zambian</option><option value="191">Zimbabwean</option>
        </select> 
            
          
            
        </div>
    
</div>
<div class="form-group">
    <label class="control-label col-sm-3">
         &nbsp;&nbsp;Father's/Husband's Name&nbsp;<font style="color: red;" >*</font></label>
    <div class="col-sm-3">
        <input id="fatherHusbandName" name="currentDetails.fatherHusbandName" name="fatherHusbandName" placeholder="Father/Husband Name" type="textbox" class="oneWidth form-control" onblur="this.value=this.value.toUpperCase(); validateFatherHusbandName();" value="" maxlength="85"/>
        <p class="error" id="fatherError"></p>
    </div>
    <label class="control-label col-sm-2">
        &nbsp;&nbsp;Relation<font style="color: red;" >*</font>
    </label>
    <div class="col-sm-4">
        <select id="relation" name="currentDetails.relationCode" name="relation" placeholder="Enter Relation" class="oneWidth form-control" onblur="validateRelation();">
            <option value="">--Select--</option>
            <option value="F">
                Father
            </option>
            <option value="H">
                Husband
            </option>
        </select>
        <p class="error" id="relationError"></p>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-3">
        &nbsp;&nbsp;Marital Status&nbsp;<font style="color: red;" >*</font>
    </label>
    <div class="col-sm-3">
        <select id="maritalStatus" name="currentDetails.maritalStatusCode" class="oneWidth form-control" onblur="validateMaritalStatus();">
            <option value="">--Select--</option>
            <option value="M">MARRIED</option><option value="U">UN-MARRIED</option><option value="W">WIDOW/WIDOWER</option><option value="D">DIVORCEE</option>
        </select>
        
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-3">
        &nbsp;&nbsp;Mobile&nbsp;</label> 
    <div class="col-sm-3">
        <input id="mobileNo" name="currentDetails.mobileNo" name="mobileNo" placeholder="Enter Mobile No." type="textbox" class="oneWidth form-control" value="" maxlength="10"/> 
        
    </div>
    <label class="control-label col-sm-2">
        &nbsp;&nbsp;Email Id&nbsp;
    </label>
    <div class="col-sm-4">
        <input id="emailId" name="currentDetails.emailId" name="emailId" placeholder="Enter Email ID" type="email" class="oneWidth form-control" onblur="validateEmailId();" value="" maxlength="100"/>
        
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-3">
        &nbsp;&nbsp;Qualification&nbsp;
    </label>
    <div class="col-sm-3">
         <select id="qualification" name="currentDetails.qualificationCode" class="oneWidth form-control"> 
            <option value="X">--Select--</option>
            <option value="1">ILLITERATE</option><option value="3">NON-MATRIC</option><option value="4">MATRIC</option><option value="5">SENIOR-SECONDARY</option><option value="6">GRADUATE</option><option value="7">POST-GRADUATE</option><option value="8">DOCTORATE</option><option value="9">TECHNICAL (PROFESSIONAL)</option>
        </select>                                                      
        
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-3">&nbsp;&nbsp;Date of Joining&nbsp;<font style="color: red;" >*</font></label>
    <div class="control  col-sm-2">
        <div class="input-group">
            <input id="doj" name="currentDetails.doj" name="doj" placeholder="DD/MM/YYYY" type="date" class="form-control" value=""/>
            <a class="input-group-addon">
                <i class="fa fa-calendar" data-target="doj"></i>
            </a>
        </div>
        
        
    </div>
    
        <label class="control-label col-sm-3  ">&nbsp;&nbsp;Monthly EPF Wages as on Joining&nbsp;<font style="color: red;" >*</font></label>
    
    <div class="col-sm-3">
        <input id="wages" name="currentDetails.wages" name="wages" placeholder="Enter EPF Wages" type="text" class="oneWidth form-control" value="" maxlength="8"/>
        <p class="error" id="wageError"></p>
    </div>
    <div class="col-sm-12">
        <div class="col-sm-3"></div>
        <div class="col-sm-6" id="dojerr">
            <p class="error" id="djError"></p>
        </div>
    </div>
    
</div>
<div class="form-group">
    <label class="control-label col-sm-3">
        &nbsp;&nbsp;International Worker
    </label>
    <div class="col-sm-9">
        <input id="isInternationalWorker" name="currentDetails.internationalWorkerDetails.isInternationalWorker" onclick="onInternationWorkerClick();" type="checkbox" value="Y"/><input type="hidden" name="_currentDetails.internationalWorkerDetails.isInternationalWorker" value="on"/>&nbsp;
    </div>
</div>


<div class="form-group hide" id="tdIntrWorker1" >
    <label class="control-label col-sm-3">
        &nbsp;&nbsp;Country of Origin&nbsp;<font style="color: red;" >*</font>
    </label>
    <div class="col-sm-3">
        

        <select id="countryOfOrigin" name="currentDetails.internationalWorkerDetails.countryOfOriginCode" class="oneWidth form-control" onblur="onCountryOfOrigin();">
            <option value="X">--Select--</option>
            <option value="1">AFGHANISTAN </option><option value="2">ALBANIA </option><option value="3">ALGERIA </option><option value="4">ANDORRA </option><option value="5">ANGOLA </option><option value="6">ANTIGUA AND BARBUDA </option><option value="7">ARGENTINA </option><option value="8">ARMENIA </option><option value="9">AUSTRALIA </option><option value="10">AUSTRIA</option><option value="11">AZERBAIJAN </option><option value="12">BAHAMAS </option><option value="13">BAHRAIN </option><option value="14">BANGLADESH </option><option value="15">BARBADOS </option><option value="16">BELARUS </option><option value="17">BELGIUM </option><option value="18">BELIZE </option><option value="19">BENIN </option><option value="20">BHUTAN </option><option value="21">BOLIVIA </option><option value="22">BOSNIA AND HERZEGOVINA </option><option value="23">BOTSWANA </option><option value="24">BRAZIL </option><option value="25">BRUNEI DARUSSALAM </option><option value="26">BULGARIA </option><option value="27">BURKINA FASO </option><option value="28">BURUNDI </option><option value="29">CAMBODIA </option><option value="30">CAMEROON </option><option value="31">CANADA </option><option value="32">CAPE VERDE </option><option value="33">CENTRAL AFRICAN REPUBLIC </option><option value="34">CHAD </option><option value="35">CHILE </option><option value="36">CHINA </option><option value="37">COLOMBIA </option><option value="38">COMOROS </option><option value="39">CONGO </option><option value="40">COSTA RICA </option><option value="41">COTE D&#39;IVOIRE </option><option value="42">CROATIA </option><option value="43">CUBA </option><option value="44">CYPRUS </option><option value="45">CZECH REPUBLIC </option><option value="48">DENMARK </option><option value="49">DJIBOUTI </option><option value="50">DOMINICA </option><option value="51">DOMINICAN REPUBLIC </option><option value="52">ECUADOR </option><option value="53">EGYPT </option><option value="54">EL SALVADOR </option><option value="55">EQUATORIAL GUINEA </option><option value="56">ERITREA </option><option value="57">ESTONIA </option><option value="58">ETHIOPIA </option><option value="59">FIJI </option><option value="60">FINLAND </option><option value="61">FRANCE</option><option value="62">GABON </option><option value="63">GAMBIA </option><option value="64">GEORGIA </option><option value="65">GERMANY </option><option value="66">GHANA </option><option value="67">GREECE </option><option value="68">GRENADA </option><option value="69">GUATEMALA </option><option value="70">GUINEA </option><option value="71">GUINEA BISSAU </option><option value="72">GUYANA </option><option value="73">HAITI </option><option value="74">HONDURAS </option><option value="75">HUNGARY </option><option value="76">ICELAND </option><option value="77">INDIA </option><option value="78">INDONESIA </option><option value="79">IRAN (ISLAMIC REPUBLIC OF) </option><option value="80">IRAQ </option><option value="81">IRELAND </option><option value="82">ISRAEL </option><option value="83">ITALY </option><option value="84">JAMAICA </option><option value="85">JAPAN </option><option value="86">JORDAN </option><option value="87">KAZAKHSTAN </option><option value="88">KENYA </option><option value="89">KIRIBATI </option><option value="90">KUWAIT </option><option value="91">KYRGYZSTAN </option><option value="193">LAOS</option><option value="93">LATVIA </option><option value="94">LEBANON </option><option value="95">LESOTHO </option><option value="96">LIBERIA </option><option value="97">LIBYAN ARAB JAMAHIRIYA </option><option value="98">LIECHTENSTEIN</option><option value="99">LITHUANIA </option><option value="100">LUXEMBOURG</option><option value="101">MADAGASCAR </option><option value="102">MALAWI </option><option value="103">MALAYSIA</option><option value="104">MALDIVES</option><option value="105">MALI </option><option value="106">MALTA </option><option value="107">MARSHALL ISLANDS </option><option value="108">MAURITANIA </option><option value="109">MAURITIUS </option><option value="110">MEXICO </option><option value="112">MONACO </option><option value="113">MONGOLIA </option><option value="114">MOROCCO </option><option value="115">MOZAMBIQUE </option><option value="116">MYANMAR (BURMA)</option><option value="117">NAMIBIA </option><option value="118">NAURU </option><option value="119">NEPAL </option><option value="120">NETHERLANDS </option><option value="121">NEW ZEALAND </option><option value="122">NICARAGUA </option><option value="123">NIGER </option><option value="124">NIGERIA </option><option value="125">NORWAY </option><option value="126">OMAN </option><option value="127">PAKISTAN </option><option value="128">PALAU </option><option value="129">PANAMA </option><option value="130">PAPUA NEW GUINEA </option><option value="131">PARAGUAY </option><option value="132">PERU </option><option value="133">PHILIPPINES </option><option value="134">POLAND </option><option value="135">PORTUGAL </option><option value="136">QATAR </option><option value="767">QUEBEC</option><option value="137">REPUBLIC OF KOREA </option><option value="138">REPUBLIC OF MOLDOVA </option><option value="139">ROMANIA </option><option value="140">RUSSIAN FEDERATION </option><option value="141">RWANDA </option><option value="142">SAINT KITTS AND NEVIS </option><option value="143">SAINT LUCIA </option><option value="145">SAMOA </option><option value="146">SAN MARINO </option><option value="147">SAO TOME AND PRINCIPE </option><option value="148">SAUDI ARABIA </option><option value="149">SENEGAL </option><option value="150">SERBIA AND MONTENEGRO </option><option value="151">SEYCHELLES </option><option value="152">SIERRA LEONE </option><option value="153">SINGAPORE </option><option value="154">SLOVAKIA </option><option value="155">SLOVENIA </option><option value="156">SOLOMON ISLANDS </option><option value="157">SOMALIA </option><option value="158">SOUTH AFRICA </option><option value="159">SPAIN </option><option value="160">SRI LANKA </option><option value="161">SUDAN </option><option value="162">SURINAME </option><option value="163">SWAZILAND </option><option value="164">SWEDEN </option><option value="165">SWITZERLAND </option><option value="166">SYRIAN ARAB REPUBLIC </option><option value="766">TAIWAN ( REPUBLIC OF CHAINA )</option><option value="167">TAJIKISTAN </option><option value="168">THAILAND </option><option value="170">TIMOR LESTE </option><option value="171">TOGO </option><option value="172">TONGA </option><option value="173">TRINIDAD AND TOBAGO </option><option value="174">TUNISIA </option><option value="175">TURKEY </option><option value="176">TURKMENISTAN </option><option value="177">TUVALU </option><option value="178">UGANDA </option><option value="179">UKRAINE</option><option value="180">UNITED ARAB EMIRATES </option><option value="765">UNITED KINGDOM</option><option value="182">UNITED REPUBLIC OF TANZANIA </option><option value="183">UNITED STATES OF AMERICA </option><option value="184">URUGUAY </option><option value="185">UZBEKISTAN </option><option value="186">VANUATU </option><option value="192">VATICAN</option><option value="187">VENEZUELA </option><option value="188">VIET NAM </option><option value="189">YEMEN </option><option value="190">ZAMBIA </option><option value="191">ZIMBABWE </option>
        </select>
        
    </div>
    <label class="control-label col-sm-2">
        &nbsp;&nbsp;Passport No&nbsp;<font style="color: red;" >*</font>
    </label>
    <div class="col-sm-4">
        <input id="passportNumber" name="currentDetails.internationalWorkerDetails.passportNumber" type="textbox" class="oneWidth form-control" onblur="this.value=this.value.toUpperCase();onPassportNumberValidate();" value="" maxlength="10"/>
        
    </div>
</div>
<div class="form-group hide" id="tdIntrWorker2">
    <label class="control-label col-sm-3">
        &nbsp;&nbsp;Passport Valid From&nbsp;<font style="color: red;" >*</font>
    </label>
    <div class="col-sm-2">
        <div class="input-group">
        <input id="passportValidFrom" name="currentDetails.internationalWorkerDetails.passportValidFrom" placeholder="DD/MM/YYYY" type="textbox" class="oneWidthDate form-control" value=""/>
       <a class="input-group-addon">
                <i class="fa fa-calendar" data-target="passportValidFrom"></i>
            </a>
            
        </div>
        <div class="col-sm-12" id="passportValidFromerr">
            
        </div>
    </div>
        <div class="col-sm-1"></div>
    <label class="control-label col-sm-2">
        &nbsp;&nbsp;Passport Valid Till&nbsp;<font style="color: red;" >*</font>
    </label>
    <div class="col-sm-2">
        <div class="input-group">
        <input id="passportValidTill" name="currentDetails.internationalWorkerDetails.passportValidTill" placeholder="DD/MM/YYYY" type="textbox" class="oneWidthDate form-control" value=""/>
       <a class="input-group-addon">
                <i class="fa fa-calendar" data-target="passportValidTill"></i>
            </a>
            
        </div>
        <div class="col-sm-12" id="passportValidTillerr" >
            
        </div>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-3">
        &nbsp;&nbsp;Differently Abled
    </label>
    <div class="col-sm-3">
        <input id="isPhisicalHandicap" name="currentDetails.isPhysicalHandicap" onclick="handicappedClicked(); " name="isPhisicalHandicap" type="checkbox" value="Y"/><input type="hidden" name="_currentDetails.isPhysicalHandicap" value="on"/>
        
    </div>
    <script>
        if((document.getElementById("isPhisicalHandicap").checked)){
            $("#tdphisicalHandicapType").removeClass("hide");
        }
        function handicappedClicked(){
            if((document.getElementById("isPhisicalHandicap").checked)){
                $("#tdphisicalHandicapType").removeClass("hide");
            }
            if(!(document.getElementById("isPhisicalHandicap").checked)){
                $("#tdphisicalHandicapType").addClass("hide");
                $('#physicalHandicapLocomotive').attr('checked', false);
                $('#physicalHandicapVisual').attr('checked', false);
                $('#physicalHandicapHearing').attr('checked', false);
                $('#phisicalHandicapType').parent().find("P").remove();
            }
        }     
        function toggleMinMax(icon){
            var box =$("#kycDetailsDiv");
            if (!box.hasClass("hide")) {
                box.addClass("hide");
                $("#minMaxIcon").removeClass("fa-minus").addClass("fa-plus");
            } else {
                box.removeClass("hide");
                $("#minMaxIcon").removeClass("fa-plus").addClass("fa-minus");
            }
           // $("#minMaxIcon").removeClass("fa-minus").addClass("fa-plus");
        }
        
        //unselect disability type
        $(document).ready(function () {
            $('#isPhisicalHandicap').click(function () {        
                if ($(this).prop("checked") !== true)
                    $('#phisicalHandicapType').prop('selectedIndex',0);
            });                                                
        });
    </script>          
   
    <div id="tdphisicalHandicapType" class="hide">
        <label class="control-label col-sm-2">
            &nbsp;&nbsp;Disability Type&nbsp;<font style="color: red;" >*</font>
        </label>
        <div class="col-sm-4"> 
            
                <div class="col-sm-12">
                    <label><input id="physicalHandicapLocomotive" name="currentDetails.physicalHandicapLocomotive" type="checkbox" value="Yes"/><input type="hidden" name="_currentDetails.physicalHandicapLocomotive" value="on"/>
                    &nbsp;&nbsp;&nbsp;Locomotive</label>
                </div>
                <div class="col-sm-12">
                    <label><input id="physicalHandicapVisual" name="currentDetails.physicalHandicapVisual" type="checkbox" value="Yes"/><input type="hidden" name="_currentDetails.physicalHandicapVisual" value="on"/>
                    &nbsp;&nbsp;&nbsp;Visual</label>
                </div>
                <div class="col-sm-12">
                    <label><input id="physicalHandicapHearing" name="currentDetails.physicalHandicapHearing" type="checkbox" value="Yes"/><input type="hidden" name="_currentDetails.physicalHandicapHearing" value="on"/>
                    &nbsp;&nbsp;&nbsp;Hearing</label>
                </div>
                <div class="col-sm-12"  id="phisicalHandicapType"></div>
        </div>
    </div>
</div>
    
        
        
<!--<div class="form-group">
    <label class="control-label col-sm-3">
        &nbsp;&nbsp;
        
        
        
        
        
        Member is from Assam, Meghalaya, Nagaland, Nepal & Bhutan
    </label>
    <div class="col-sm-9">
        
    </div>
</div>     -->   
        
        
            
<!--<div class="form-group">
    <label class="control col-sm-3">
        &nbsp;&nbsp;New Member Id&nbsp;<font style="color: red;" >*</font>
        
    </label>
    <div class="col-sm-9">
        
        
        
        
        
        
    </div>
</div>-->

    <div class="panel panel-primary panel-kycInfo">
        <div class="panel-heading">
        <h4 class="epfo-box-title">KYC Details</h4>
        <div class="panel-icons">
            <a class="toggle-icon btn-round collapse in" data-target=".panel-kycInfo .panel-body, .panel-kycInfo .toggle-icon" data-toggle="collapse">
                <i class="fa fa-minus-square "></i>
            </a>
            <a class="toggle-icon btn-round collapse" data-target=".panel-kycInfo .panel-body, .panel-kycInfo .toggle-icon" data-toggle="collapse">
                <i class="fa fa-plus-square "></i>
            </a>
        </div>
        </div>
    
    
    <div class="panel-body panel-collapse collapse in" id="kycDetailsDiv" >
        






<style>
    .input-sm { text-transform:uppercase; }
</style>
<script language="javascript" src="/epfo/scripts/common/AadhaarConsentAudio.js"></script>
<script>
    $(function () {
        //set maxlength to aadhaar, pan
        $('#docNo1').attr("maxlength", 12);//aadhaar
        $('#docNo0').attr("maxlength", 10);//pan
        $('#docNo2').attr("maxlength", 10);//passport
        $('.showDate').datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'dd/mm/yy',
            minDate: '0'
                    //yearRange: "-100:+50",
        });


        $('input:checkbox[id^="chkDocTypeId_"]:checked').each(function() {
            var indexValue = $(this).attr("id").substring(($(this).attr("id").indexOf("_") + 1));
            if(document.getElementById("isPreviousKycAvailable_"+indexValue).value === 'true') {
                $("#docNo"+indexValue).val(atob($("#docNo"+indexValue).val()));
            }
        });
    });
    function toggleAadhaar(ele) {
        alert(ele);
        if (ele === 'AE') {
            $("#aadhaar").show();
            $("#aadhaarEnr").hide();
        } else if (ele === 'A') {
            $("#aadhaar").hide();
            $("#aadhaarEnr").removeClass("hide");
            $("#aadhaarEnr").show();
        }
    }
    function checkTrue(id) {

        if (document.getElementById(id).checked) {
            var componentIndex = id.substring(13);
            if ($("#docNo" + componentIndex).attr("disabled")) {
                $("#docNo" + componentIndex).prop("disabled", false);
            } else {
                $("#docNo" + componentIndex).prop("disabled", true);
                $("#docNo" + componentIndex).val("");
            }
            if ($("#nameOnDoc" + componentIndex).attr("disabled")) {
                $("#nameOnDoc" + componentIndex).prop("disabled", false);
            } else {
                $("#nameOnDoc" + componentIndex).prop("disabled", true);
                $("#nameOnDoc" + componentIndex).val("");
            }
            if ($("#ifsc" + componentIndex).attr("disabled")) {

                $("#ifsc" + componentIndex).prop("disabled", false);
            } else {

                $("#ifsc" + componentIndex).prop("disabled", true);
                $("#ifsc" + componentIndex).val("");
            }
            if ($("#expiryDate" + componentIndex).attr("disabled")) {
                $("#expiryDate" + componentIndex).prop("disabled", false);
            } else {
                $("#expiryDate" + componentIndex).prop("disabled", true);
                $("#expiryDate" + componentIndex).val("");
            }
            $("#expiryDate" + componentIndex).datepicker({
                changeMonth: true,
                changeYear: true,
                dateFormat: 'dd/mm/yy',
                minDate: '0'
                        //yearRange: "-100:+50",

            });

            if (componentIndex == 1) {
                $('#aadhaarConsentDiv').show();
            }

        } else {
            var componentIndex = id.substring(13);
            if (componentIndex == 1) {
                $('#aadhaarConsentDiv').hide();
            }
            if ($("#docNo" + componentIndex).attr("disabled")) {
                $("#docNo" + componentIndex).prop("disabled", false);
            } else {
                $("#docNo" + componentIndex).prop("disabled", true);
                $("#docNo" + componentIndex).val("");
            }
            if ($("#nameOnDoc" + componentIndex).attr("disabled")) {
                $("#nameOnDoc" + componentIndex).prop("disabled", false);
            } else {
                $("#nameOnDoc" + componentIndex).prop("disabled", true);
                $("#nameOnDoc" + componentIndex).val("");
            }
            if ($("#ifsc" + componentIndex).attr("disabled")) {
                $("#ifsc" + componentIndex).prop("disabled", false);
            } else {
                $("#ifsc" + componentIndex).prop("disabled", true);
                $("#ifsc" + componentIndex).val("");
            }
            if ($("#expiryDate" + componentIndex).attr("disabled")) {
                $("#expiryDate" + componentIndex).prop("disabled", false);
            } else {
                $("#expiryDate" + componentIndex).prop("disabled", true);
                $("#expiryDate" + componentIndex).val("");
            }
            $("#expiryDate" + componentIndex).datepicker({
                changeMonth: true,
                changeYear: true,
                dateFormat: 'dd/mm/yy',
                minDate: '0'
                        // yearRange: "-100:+50",                                        
            });
        }
    }
</script>
<div modelAttribute="kycDocumentList"> 
    <div class="form-group" id="drivingLicense">
        <label class="control col-sm-1">
            Select
            <!--Select-->
        </label>
        <label class="control col-sm-3">
            Document Type
            <!--Document Type-->
        </label>
        <label class="control col-sm-3">
            Document Number
            <!--Document Number-->
        </label>
        <label class="control col-sm-3">
            Name as per Document
            <!--Name as per Document-->
        </label>
        <label class="control col-sm-2">
            Other
            <!--Other-->
        </label> 
    </div>
    
    
    
        <div class="form-group">
            
        </div>
        <div class="form-group" > 
            <div class="col-sm-1">
                
                    
                    
                        <input id="chkDocTypeId_0" name="currentDetails.kycDocumentList[0].checked" onclick="checkTrue(&#39;chkDocTypeId_0&#39;);" style="text-align:center;" type="checkbox" value="Y"/><input type="hidden" name="_currentDetails.kycDocumentList[0].checked" value="on"/>&nbsp;
                    
                 
                
            </div>
            <div class="col-sm-3" >
                
                <label class="control">PAN</label>
            </div>
            <div class="col-sm-3">

                
                <input id="currentDetails.kycDocumentList0.typeId" name="currentDetails.kycDocumentList[0].typeId" type="hidden" value="2"/>
                <input id="currentDetails.kycDocumentList0.typeName" name="currentDetails.kycDocumentList[0].typeName" type="hidden" value="PAN"/>
                <input id="isPreviousKycAvailable_0" name="currentDetails.kycDocumentList[0].isPreviousKycAvailable" type="hidden" value="false"/>
                <input id="currentDetails.kycDocumentList0.status" name="currentDetails.kycDocumentList[0].status" type="hidden" value=""/>
                
                    
                        

                        <input id="docNo0" name="currentDetails.kycDocumentList[0].number" placeholder="Document Number" class="input-sm form-control" disabled="disabled" type="text" value="" maxlength="32"/>
                    
                    
                
            </div>
            <div class="col-sm-3">
                
                
                    
                     

                        <input id="nameOnDoc0" name="currentDetails.kycDocumentList[0].memberNameAsPerDoc" placeholder="Name as per Document" type="text" class="input-sm form-control" disabled="disabled" value="" maxlength="100"/>
                    
                    
                
            </div> 
            <div class="col-sm-2">
                
                
                

            </div> 
        </div>
        
    
        <div class="form-group">
            
        </div>
        <div class="form-group" > 
            <div class="col-sm-1">
                
                    
                    
                        <input id="chkDocTypeId_1" name="currentDetails.kycDocumentList[1].checked" onclick="checkTrue(&#39;chkDocTypeId_1&#39;);" style="text-align:center;" type="checkbox" value="Y"/><input type="hidden" name="_currentDetails.kycDocumentList[1].checked" value="on"/>&nbsp;
                    
                 
                
            </div>
            <div class="col-sm-3" >
                <font style="color: red;"> *</font>
                <label class="control">AADHAAR</label>
            </div>
            <div class="col-sm-3">

                
                <input id="currentDetails.kycDocumentList1.typeId" name="currentDetails.kycDocumentList[1].typeId" type="hidden" value="3"/>
                <input id="currentDetails.kycDocumentList1.typeName" name="currentDetails.kycDocumentList[1].typeName" type="hidden" value="AADHAAR"/>
                <input id="isPreviousKycAvailable_1" name="currentDetails.kycDocumentList[1].isPreviousKycAvailable" type="hidden" value="false"/>
                <input id="currentDetails.kycDocumentList1.status" name="currentDetails.kycDocumentList[1].status" type="hidden" value=""/>
                
                    
                        

                        <input id="docNo1" name="currentDetails.kycDocumentList[1].number" placeholder="Document Number" class="input-sm form-control" disabled="disabled" type="text" value="" maxlength="32"/>
                    
                    
                
            </div>
            <div class="col-sm-3">
                
                
                    
                     

                        <input id="nameOnDoc1" name="currentDetails.kycDocumentList[1].memberNameAsPerDoc" placeholder="Name as per Document" type="text" class="input-sm form-control" disabled="disabled" value="" maxlength="100"/>
                    
                    
                
            </div> 
            <div class="col-sm-2">
                
                
                

            </div> 
        </div>
        
    
        <div class="form-group">
            
        </div>
        <div class="form-group" > 
            <div class="col-sm-1">
                
                    
                    
                        <input id="chkDocTypeId_2" name="currentDetails.kycDocumentList[2].checked" onclick="checkTrue(&#39;chkDocTypeId_2&#39;);" style="text-align:center;" type="checkbox" value="Y"/><input type="hidden" name="_currentDetails.kycDocumentList[2].checked" value="on"/>&nbsp;
                    
                 
                
            </div>
            <div class="col-sm-3" >
                
                <label class="control">Passport</label>
            </div>
            <div class="col-sm-3">

                
                <input id="currentDetails.kycDocumentList2.typeId" name="currentDetails.kycDocumentList[2].typeId" type="hidden" value="4"/>
                <input id="currentDetails.kycDocumentList2.typeName" name="currentDetails.kycDocumentList[2].typeName" type="hidden" value="Passport"/>
                <input id="isPreviousKycAvailable_2" name="currentDetails.kycDocumentList[2].isPreviousKycAvailable" type="hidden" value="false"/>
                <input id="currentDetails.kycDocumentList2.status" name="currentDetails.kycDocumentList[2].status" type="hidden" value=""/>
                
                    
                        

                        <input id="docNo2" name="currentDetails.kycDocumentList[2].number" placeholder="Document Number" class="input-sm form-control" disabled="disabled" type="text" value="" maxlength="32"/>
                    
                    
                
            </div>
            <div class="col-sm-3">
                
                
                    
                     

                        <input id="nameOnDoc2" name="currentDetails.kycDocumentList[2].memberNameAsPerDoc" placeholder="Name as per Document" type="text" class="input-sm form-control" disabled="disabled" value="" maxlength="100"/>
                    
                    
                
            </div> 
            <div class="col-sm-2">
                
                
                
                    
                    
                        
                         
                            <input id="expiryDate2" name="currentDetails.kycDocumentList[2].expiryDate" style="width:100px;" placeholder="Expiry Dt" class="input-sm form-control showDate" disabled="disabled" type="text" value="" maxlength="10"/>
                        
                        
                    

                

            </div> 
        </div>
        
    
    <div class="alert alert-success" role="alert">
        <span class="glyphicon glyphicon-info-sign"></span>
        <font style="color: green;" > Aadhaar number and Aadhaar information provided here will be used for doing authentication of the member using the tools provided by the UIDAI.<br>&nbsp;&nbsp;&nbsp; Please correct your details against Aadhaar or against UAN wherever it is incorrect.<br>&nbsp;&nbsp;&nbsp;Aadhaar number or Aadhaar Enrollment Number is mandatory</font>
        <br/>
        <span class="glyphicon glyphicon-info-sign"></span>
        <font style="color: green;" > DSC/eSign is not required in case of verified Aadhaar. </font>
        <br/>
        <span class="glyphicon glyphicon-info-sign text-danger"></span>
        <font style="color: red;" > Member registration cases will be invalidated if registration process against the same is not duely completed within 60 days. </font>
        <br/>
        <span class="glyphicon glyphicon-info-sign text-danger"></span>
        <font style="color: red;" > KYC seeded will be invalidated automatically if not approved digitally within 60 days. </font>
    </div>
    
    
        <div id="aadhaarConsentDiv">
            <input id="aadhaarConsentChkBox" name="aadhaarConsent.consentStatus" type="checkbox" value="Y"/><input type="hidden" name="_aadhaarConsent.consentStatus" value="on"/>
            <strong id="consentTextHin" > 
                मैंने EPF & MP अधिनियम और इसकी योजना के तहत पंजीकरण और विभिन्न लाभों के लिए अपनी पहचान स्थापित करने के उद्देश्य से ईपीएफओ को अपना आधार साझा करने के लिए सदस्य की सहमति ली है। आधार धारक इस बात से अवगत है कि उसके द्वारा प्रदान की गई जानकारी का उपयोग आधार प्रमाणीकरण प्रणाली के माध्यम से ऊपर बताए गए उद्देश्य के लिए पहचान को प्रमाणित करने के लिए किया जाएगा और किसी अन्य उद्देश्य के लिए नहीं किया जाएगा।
                <b id="VersionID"> Version :  [ 








 



<!--Wed 05 Jun 2024 (PV 5.0.21)-->













Thu 22, Aug 2024 (PV 5.0.44)
 ] </b>
            </strong>
            <br>
            <strong id="consentTextEng">I have taken the consent of the member for sharing his/her aadhaar to EPFO for the purpose of establishing his/her identity for registration and various benefits under EPF & MP Act and its schemes. Aadhaar holder is aware that information provided by him/her will be used for authenticating identity through Aadhaar Authentication system for the purpose stated above and no other purpose
              . Version :  [ 


  
<!--Wed 05 Jun 2024 (PV 5.0.21)-->








Thu 22, Aug 2024 (PV 5.0.44)
 ]
            </strong> 
            <br><br>
            <button type="button" id="playBtn" class="btn btn-lg btn-info" onclick="toggleButton('/epfo/uanmember/playAudioMemberRegIndividual?_HDIV_STATE_=13-68-31C45EF7EE5944E342807A0AF2F8BF2C')">
                <i class="fa fa-play" aria-hidden="true" id="listenId"></i> &nbsp; Listen to Consent 
            </button>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <select id="consentLang" class="btn btn-lg" onchange="checkFile(this.value,false);">
                <option value="eng">English</option>
                <option value="hin">Hindi</option>
            </select>
        </div>
        <input id="aadhaarConsent.consentRefId" name="aadhaarConsent.consentRefId" type="hidden" value="11"/><br/>
        <input id="aadhaarConsent.consentStatus" name="aadhaarConsent.consentStatus" type="hidden" value=""/>
        <input id="aadhaarConsent.consentEnglish" name="aadhaarConsent.consentEnglish" type="hidden" value="I have taken the consent of the member for sharing his/her aadhaar to EPFO for the purpose of establishing his/her identity for registration and various benefits under EPF &amp; MP Act and its schemes. Aadhaar holder is aware that information provided by him/her will be used for authenticating identity through Aadhaar Authentication system for the purpose stated above and no other purpose"/>
    
<!--</div>-->

</div>    
<script>
    $(function () {
        var ele = document.getElementById('aadhaarConsentDiv').innerHTML;
        if (document.getElementById('chkDocTypeId_1').checked){
            $('#aadhaarConsentDiv').show();
        }else{
            $('#aadhaarConsentDiv').hide();
        }
    });
</script>
    </div>
    </div>  
<div class="form-group" id='memreg1'>
    <div class="control col-sm-12 " id='memreg2'>                            
        
            
            
                <input type="submit" class="btn btn-primary" name="save" value="Save" onclick="saveMemberRegistration('fresh');return false;"> 
            
           
        
        <button onclick="cancelMemberRegistration(&#39;/epfo/uanmember/viewFreshEmployement?_HDIV_STATE_=13-69-31C45EF7EE5944E342807A0AF2F8BF2C&#39;);return false;" class="btn btn-primary" type="submit" value="Submit">Cancel</button>
                  
    </div>
</div>



                
            
        </div>
    </div>
    <div id='individualReg'>
        <h6 class="panel-title pull-right" >
            <a href="/pf/member/register-approval" class='approveMember'>View All&nbsp;&nbsp;</a>
        </h6>
    </div>
    <div class="panel panel-primary panel-memRegTable">
        <div class="panel-heading">
            <h3 class="panel-title"> 
                Member details pending for approval  
            </h3>
            <div class="panel-icons">
                <a class="toggle-icon btn-round collapse in" data-target=".panel-memRegTable .panel-body, .panel-memRegTable .toggle-icon" data-toggle="collapse">
                    <i class="fa fa-minus-square "></i>
                </a>
                <a class="toggle-icon btn-round collapse" data-target=".panel-memRegTable .panel-body, .panel-memRegTable .toggle-icon" data-toggle="collapse">
                    <i class="fa fa-plus-square "></i>
                </a>
            </div>
            
        </div>
        <div class="panel-body panel-collapse collapse in" id='viewRegMem1'>
            <table class="table table-striped table-bordered" id="viewMemRegDet" ></table>
            <div id="viewMemRegDetPager" class="panel-body" >
                <table class="table table-bordered">
                    <thead>
                    <tr>
                    <th>Name</th> 
                    <th>Father/Husband name</th>
                    <th>Relation</th>
                    <th>Gender</th>
                    <th>Date of Birth</th>
                    <th>Date of Joining</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>View</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    </tr></thead>
                    <tbody>
                      
                        <?php if (!empty($users) && is_array($users)): ?>
                            <ul>
                                <?php /* foreach ($users as $user): ?>
                                  <tr>
                                    <td>
                                       <?= esc($user['username']) ?> 
                                    </td> 
                                    <td> <?= esc($user['father_name']) ?>  </td>
                                    <td><?= esc($user['relation']) ?>  </td>
                                    <td><?= esc($user['gender']) ?>  </td>
                                    <td><?= esc($user['dob']) ?>  </td>
                                    <td> <?= esc($user['doj']) ?>  </td>
                                    <td> <?= esc($user['mobile']) ?>  </td>
                                    <td> <?= esc($user['email']) ?>  </td>
                                    <td><i class="fa fa-exclamation-circle" aria-hidden="true"></i></td>
                                    <td><i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
                                    <td><i class="fa fa-times" aria-hidden="true"></i></td>
                                     </tr>
                                <?php endforeach; */ ?>
                                
                                <?php if(isset($_COOKIE['wages12'])) { ?>
                                <tr>
                                    <td>
                                       <?= esc($_COOKIE['name']) ?> 
                                    </td> 
                                    <td> <?= esc($_COOKIE['guardian']) ?>  </td>
                                    <td><?php if($_COOKIE['relation'] == "H"){ echo "Husband"; }else{ echo "Father"; } ?>  </td>
                                    <td>MALE  </td>
                                    <td><?= esc($_COOKIE['dob']) ?>  </td>
                                    <td> <?= esc($_COOKIE['doj']) ?>  </td>
                                    <td> <?= esc($_COOKIE['mobileNo']) ?>  </td>
                                    <td> <?= esc($_COOKIE['emailId']) ?>  </td>
                                    <td><i class="fa fa-exclamation-circle" aria-hidden="true"></i></td>
                                    <td><i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
                                    <td><i class="fa fa-times" aria-hidden="true"></i></td>
                                     </tr>
                                <?php } ?>
                            </ul>
                        <?php else: ?>
                            <tr><td>No records found for approval.</td></tr>
                        <?php endif; ?>
                   
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>

      
    <div class="panel panel-primary panel-memRegTableNew">
        <div class="panel-heading">
            <h3 class="panel-title">
                Member details in-process of approval
            </h3>
            <div class="panel-icons">
                <a class="toggle-icon btn-round collapse" data-target=".panel-memRegTableNew .panel-body, .panel-memRegTableNew .toggle-icon" data-toggle="collapse">
                    <i class="fa fa-minus-square "></i>
                </a>
                <a class="toggle-icon btn-round collapse in" id="btnLoadGrid" onclick="showmemRegTableNew();" data-target=".panel-memRegTableNew .panel-body, .panel-memRegTableNew .toggle-icon" data-toggle="collapse">
                    <i class="fa fa-plus-square "></i>
                </a>
            </div>
            
        </div>
        <div class="panel-body panel-collapse collapse" id='viewRegMem2'>
            <div class="alert alert-info" ><i class="glyphicon glyphicon-info-sign"></i>&nbsp;Member details in-process of approval cannot be edited.</div>
            <table class="table table-striped table-bordered" id="viewMemRegInprocessDet" ></table>
            <div id="viewMemRegInprocessDetPager" ></div>
        </div>
    </div>
    
    <script>
        
     $(document).ready(function() {
            $('#memRegDetails').submit(function(event) {
                // Prevent default form submission
                event.preventDefault();
 let formData = $(this).serialize();
                // Clear previous error messages
                $('.error').text('');
                $('input').removeClass('input-error');

                // Get the field values
                let name = $('#memberName').val().trim();  
                let dob = $('#dob').val().trim();
                let guardian = $('#fatherHusbandName').val().trim();  
                let relation = $('#relation').val().trim();
                let wages = $('#wages').val().trim();
                let doj = $('#doj').val().trim();
                let doc1 = $('#chkDocTypeId_1').is(':checked');
                let aadhaarConsentChkBox = $('#aadhaarConsentChkBox').is(':checked');
                
                let mobileNo = $('#mobileNo').val().trim();
                let maritalStatus = $('#maritalStatus').val().trim();
                let emailId = $('#emailId').val().trim();
                
                
                let docNo1 = $('#docNo1').val().trim();
                let nameOnDoc1 = $('#nameOnDoc1').val().trim();
                let isValid = true;

                // Validate Name field
                if (name === '') {
                    $('#membername_error').text("Enter Member's Name.");
                    isValid = false;
                }

                // Validate Email field
                if (dob === '') {
                    $('#dobError').text('Enter Date of Birth.');
                    isValid = false;
                }

                // Validate Age field
                if (guardian === '') {
                    $('#fatherError').text("Enter Father's or Husband's Name.");
                    isValid = false;
                } // Validate Age field
                if (relation === '') {
                    $('#relationError').text('Select Relation.');
                    isValid = false;
                }
                if (wages === '') {
                    $('#wageError').text('Enter EPF Wages.');
                    isValid = false;
                } 
                if (doj === '') {
                    $('#djError').text('Enter Date of Joining.');
                    isValid = false;
                }
               
                if (isValid) {
                     
                    if (!doc1) {
                       alert("You must enter Aadhar details");
                        exit;
                    }else{
                        
                        if(docNo1=='' && nameOnDoc1==''){
                            alert("You must enter Aadhar details"); exit;
                       
                        }else{
                            if (!aadhaarConsentChkBox) {
                               alert("You must Accept consent");
                                exit;
                            }else{
                            
                            // For example, you can send the form data via AJAX or do something else here
                                 var userConfirmed = confirm("Are you sure you want to save the Member Detail ?");
                                    if (userConfirmed) {
                                      alert("Member Record Saved Successfully");
                                     
                                     
                                      $.ajax({
            url: '/pf/member/register-save', // Replace with your controller/method
            type: 'POST',
            data: {name:name,dob:dob,doj:doj,guardian:guardian,relation:relation,wages:wages,mobileNo:mobileNo,maritalStatus:maritalStatus,emailId:emailId},
            success: function (response) {
               // alert(response);
                window.location.href = "<?= base_url('pf/member/register-pending') ?>";
            },
             
        });
                                     
                                     
                                     // window.location.href = "<?= base_url('pf/member/register-pending') ?>";

                                    } else {
                                       return false;
                                    }
                                //return true;
                            }
                        }
                    }

                // If the form is valid, submit it (or proceed further)
               
                    
                }
            });
               document.getElementById("memberName").addEventListener("input", function() {
            document.getElementById("membername_error").textContent = ''; 
        });
          document.getElementById("dob").addEventListener("input", function() {
            document.getElementById("dobError").textContent = ''; 
        });
         document.getElementById("fatherHusbandName").addEventListener("input", function() {
            document.getElementById("fatherError").textContent = ''; 
        });
         document.getElementById("relation").addEventListener("input", function() {
            document.getElementById("relationError").textContent = ''; 
        });
         document.getElementById("wages").addEventListener("input", function() {
            document.getElementById("wageError").textContent = ''; 
        });

          document.getElementById("doj").addEventListener("input", function() {
            document.getElementById("djError").textContent = ''; 
        });
        });
    </script>
    
    
     
    <script>
        var uanMemberListUrl = '/epfo/uanmember/getPendingMemberDetails?_HDIV_STATE_=13-71-31C45EF7EE5944E342807A0AF2F8BF2C';
        var uanInProcessMemberListUrl = '/epfo/uanmember/getInprocessMemberDetails?_HDIV_STATE_=13-72-31C45EF7EE5944E342807A0AF2F8BF2C';
        $(document).ready(function () {
            loadGrid(uanMemberListUrl);
            $(window).on("resize", function () {
                var $grid = $("#viewMemRegDet"),
                        newWidth = $grid.closest(".ui-jqgrid").parent().width();
                $grid.jqGrid("setGridWidth", newWidth, true);
            });
        });

        function showmemRegTableNew() {
            loadInProcessGrid(uanInProcessMemberListUrl);

            $(window).on("resize", function () {
                var $grid = $("#viewMemRegInprocessDet"),
                        newWidth = $grid.closest(".ui-jqgrid").parent().width();
                $grid.jqGrid("setGridWidth", newWidth, true);
            });


        }
    </script> 
<div>
<input type="hidden" name="_HDIV_STATE_" value="13-64-B27EEFA28A33BDC6367761FBAEB78444" />
</div></form>
</div>   

 
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