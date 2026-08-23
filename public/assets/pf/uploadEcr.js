/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var refreshId;
$(document).ready(function () {
    initdatepicker();
    initAjax(); 
    loadGrid();
    initEventListeneres(); 
    //refreshId = setInterval(reloadGrid, 60000);
});

function initAjax()
{
  /*  $(document).ajaxStart(function () {
        $.blockUI({message: '<h4>Please wait Data is loading...</h4>'});
    });dataurl

    $(document).ajaxStop(function () {
        $.unblockUI();
    });*/
}
function initEventListeneres()
{
    $("#wageMonth").focus(function () {
        $(".messages-wagemonth").children().remove();
    });
    $("#multiFile").focus(function () {
        $(".messages-multiFile").children().remove();
    });
    $("i.fa.fa-calendar").click(function () {
        var dataTarget = $(this).parent().attr("data-target");
        $("#"+dataTarget).datepicker("show");
    });
    $(".btn-filter").click(function () {
        $("#viewEcrBulkUpload").trigger('reloadGrid');
    });
    $(".btn-reset").click(function () {
        $(':input','#ecrFilterForm')
        .not(':button, :submit, :reset, :hidden')
        .val('')
        .removeAttr('checked')
        .removeAttr('selected');
        $("#viewEcrBulkUpload").trigger('reloadGrid');
    });
    $("#ecrFilterForm").submit(function(){
        return false;
    });
    
}
function initdatepicker() {
        var prevMonthStartDate = new Date();
        prevMonthStartDate.setDate(1);
        prevMonthStartDate.setMonth(prevMonthStartDate.getMonth()-1); 
        $("#wageMonth").datepicker({
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
            dateFormat: 'MM yy',
            maxDate: new Date(),
            defaultDate:prevMonthStartDate,
            onClose: function (dateText, inst) {
                var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
                var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                $("#wageMonth").datepicker('setDate', new Date(year, month, 1));
                $("#salaryDate").datepicker( "option", "minDate", new Date(year, month, 1));
            }
        });
        
        $("#salaryDate").datepicker({ 
            dateFormat: 'dd/mm/yy',
            maxDate: new Date(),
            beforeShow  :  function (ele ,  datepicker ) {
                setTimeout(function(){
                    $(".ui-datepicker-calendar").show();
                },50);
            },
            onChangeMonthYear :  function (ele ,  datepicker ) {
                setTimeout(function(){
                    $(".ui-datepicker-calendar").show();
                },50);
            },
            onClose: function (dateText, inst) {
                 $(".ui-datepicker-calendar").hide();
            }
        });
        
        $("#oldWageMonth").datepicker({
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
            dateFormat: 'MM yy',            
            onClose: function (dateText, inst) {
                var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
                var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                $("#oldWageMonth").datepicker('setDate', new Date(year, month, 1));
            }
        });
        
        
        $("#copyWageMonth").datepicker({
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
            dateFormat: 'MM yy',
            
            onClose: function (dateText, inst) {
                var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
                var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                $("#copyWageMonth").datepicker('setDate', new Date(year, month, 1));
            }
        });
        
        $("#filterWageMonth").datepicker({
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
            dateFormat: 'MM yy',
             
            onClose: function (dateText, inst) {
                var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
                var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                $("#filterWageMonth").datepicker('setDate', new Date(year, month, 1));
            },
        });
        
        $("#filterReturnMonth").datepicker({
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
            dateFormat: 'MM yy', 
            onClose: function (dateText, inst) {
                var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
                var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                $("#filterReturnMonth").datepicker('setDate', new Date(year, month, 1));
            }
        });
}


function validate() {
    var sucMsg = true;
    if ($("#wageMonth").val() === '') {
        //$(".messages-wagemonth").html("<div class='alert alert-warning p-0'><i class='fa fa-exclamation-triangle'></i> "+resources.messages.validation.wagemonth.required+"</div>");
        $(".messages-wagemonth").html("<div class='alert alert-warning p-0'><i class='fa fa-exclamation-triangle'></i> Select wage month</div>");
        sucMsg = false;
    }
    else
    {
        $(".messages-wagemonth").html("");
    }
    
    if ($("#salaryDate").val() === '') {
        //$(".messages-salaryDate").html("<div class='alert alert-warning p-0'><i class='fa fa-exclamation-triangle'></i> "+resources.messages.validation.salaryDate.required+"</div>");
        $(".messages-salaryDate").html("<div class='alert alert-warning p-0'><i class='fa fa-exclamation-triangle'></i> Enter salary disbursement date.</div>");
        sucMsg = false;
    }
    else
    {
        $(".messages-salaryDate").html("");
    }
    
    if ($("#multiFile").val() === '') {
        //$(".messages-multiFile").html("<div class='alert alert-warning p-0'><i class='fa fa-exclamation-triangle'></i> "+resources.messages.validation.multiFile.required+"</div>");
        $(".messages-multiFile").html("<div class='alert alert-warning p-0'><i class='fa fa-exclamation-triangle'></i> Select file for upload.</div>");
        sucMsg = false;
    }
    else
    {
        var fileName = $("#multiFile")[0].files[0];
        if (/\s/.test(fileName.name)) {

            //$(".messages-multiFile").html("<div class='alert alert-warning p-0'><i class='fa fa-exclamation-triangle'></i> "+resources.messages.validation.multiFile.required+"</div>");
            $(".messages-multiFile").html("<div class='alert alert-warning p-0'><i class='fa fa-exclamation-triangle'></i> File name cannot have spaces.</div>");
            sucMsg = false;
        }
        else
        {
            $(".messages-multiFile").html("");
        }
    }
    
    
    if (!$("[name='ecrFileType']:checked").val()) {
        //$(".messages-ecrFileType").html("<div class='alert alert-warning p-0'><i class='fa fa-exclamation-triangle'></i> "+resources.messages.validation.ecrFileType.required+"</div>");
        $(".messages-ecrFileType").html("<div class='alert alert-warning p-0'><i class='fa fa-exclamation-triangle'></i> Select file type.</div>");
        sucMsg = false;
    }
    else
    {
        $(".messages-ecrFileType").html("");
    }
    
    if ($("#contributionRate").val() === '10' && $("#contributionRateReasonCode").val() === '1') {
        //$(".messages-multiFile").html("<div class='alert alert-warning p-0'><i class='fa fa-exclamation-triangle'></i> "+resources.messages.validation.multiFile.required+"</div>");
        $(".messages-contributionRateReasonCode").html("<div class='alert alert-warning p-0'><i class='fa fa-exclamation-triangle'></i> Select reason for lower contribution rate..</div>");
        sucMsg = false;
    }
    else
    {
        $(".messages-contributionRateReasonCode").html("");
    }
    
    if ($("#ecrFileUploadRemarks").val() === '') {
        //$(".messages-multiFile").html("<div class='alert alert-warning p-0'><i class='fa fa-exclamation-triangle'></i> "+resources.messages.validation.multiFile.required+"</div>");
        $(".messages-ecrFileUploadRemarks").html("<div class='alert alert-warning p-0'><i class='fa fa-exclamation-triangle'></i> Enter remarks.</div>");
        sucMsg = false;
    }
    else
    {
        $(".messages-ecrFileUploadRemarks").html("");
    }
    return sucMsg;
}

/***
 * Confirm DialogBox Function 
 * @param {type} title : title to the confirm box
 * @param {type} msg : msg to be shown
 * @param {type} $true : true button value e.g OK / Yes
 * @param {type} $false : false button value e.g Cancel 
 * @returns {undefined}
 */
function Confirm(title, msg, $true, $false) { /*change*/
    var $content =  "<div class='dialog-ovelay'>" +
                        "<div class='dialog'><header>" +
                         " <h3><B> " + title + "</B> </h3> " +
                         "<i class='fa fa-close'></i>" +
                     "</header>" +
                     "<div class='dialog-msg'>" +
                         " <p> " + msg + " </p> " +
                     "</div>" +
                     "<footer>" +
                         "<div class='controls'>" +
                             " <button class='btn btn-danger cancelAction'>" + $false + "</button> " +
                             " <button class='btn btn-success doAction'>" + $true + "</button> " +
                             
                         "</div>" +
                     "</footer>" +
                  "</div>" +
                "</div>";
         $('body').prepend($content);
          $('.doAction').click(function () {
              var form1 = $('form')[1];
               $("#btnUploadECRFile").text("Wait...");
               $("#btnUploadECRFile").attr("disabled", true);
               form1.submit();            
        $(this).parents('.dialog-ovelay').fadeOut(500, function () {
          $(this).remove();
          
        });
      });
        $('.cancelAction, .fa-close').click(function () {
        console.log(" ecr upload process cancel");
        $(this).parents('.dialog-ovelay').fadeOut(500, function () {
          $(this).remove();
        });
      });
      
   }
   
   function processFileUpload()
{
    if (validate() === true) { 
        var form = $('form')[1];
        var confirmMsg="<B>Recovery amount under PMRPY against ineligible employees is pending. To avail PMRPY benefit in current ECR, please first deposit the recovery amount.</B>"+"\n\n"+"<br>Do you want to continue with ecr upload ?";
        if(pmrpyBalanceAmt > 0){
           Confirm('ECR File Upload', confirmMsg, 'Yes', 'Cancel');
//           if(confirm(confirmMsg)){
//               $("#btnUploadECRFile").text("Wait...");
//               $("#btnUploadECRFile").attr("disabled", true);
//               form.submit(); 
//            }
//           else{
//               console.log(" ecr upload process");
//            }
        }
        else{
               $("#btnUploadECRFile").text("Wait...");
               $("#btnUploadECRFile").attr("disabled", true);
               form.submit(); 
        }
        
    }
    return false;
}
 
 
function loadGrid() {
     
        var abc = '';
}


 function getFirstDateForMonthYear(datePickerFilter) {
    var datePicker = $(datePickerFilter);
    var format = datePicker.datepicker("option", "dateFormat")+ " dd";
    var text = datePicker.val()+" 01"; 
    return $.datepicker.parseDate(format, text);
}

function textWithWhitespace(str, n) {
    var ret = [];
    var i;
    var len;
    for(i = 0, len = str.length; i < len; i += n) {
       ret.push(str.substr(i, n))
    }
    return ret.join('<BR/>')
}
