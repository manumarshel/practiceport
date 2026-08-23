$(function () {
   console.log(baseUrl);
   $('.datepicker').datepicker();
   function processAjax(action, formData, successElement, successMsg, errElement, errMsg) {
      $.ajax({
         method: "POST",
         url: action,
         dataType: 'json',
         data: formData,
         cache: false
      }).done(function (msg) {
         console.log(msg);
      }).fail(function (msg) {
         console.log(msg);
      });
   }

   function getTemplate(templateName, alternate_title = false) {
      $.ajax({
         method: "GET",
         url: baseUrl + '/gstr1/getTemplate',
         dataType: 'html',
         data: {'templateName': templateName, 'alternate_title' : alternate_title},
         cache: false
      }).done(function (msg) {
         $('.display-item-table').html(msg);
      }).fail(function (msg) {
         // console.log(msg);
      });
   }
   // $("#gstr-b2b-form").on('submit', function(e) {
   //    e.preventDefault();
   //    let formData = $(this).serialize();
   //    console.log(formData);
   //    let action = baseUrl + '/_gstr1/b2b';
   //    processAjax(action, formData);
   //
   // });
   //
   // $("#gstr-b2cl-form").on('submit', function(e) {
   //    e.preventDefault();
   //    let formData = $(this).serialize();
   //    console.log(formData);
   //    let action = baseUrl + '/_gstr1/b2cl';
   //    processAjax(action, formData);
   // });
   //
   // $("#gstr-9bcdn-form").on('submit', function(e) {
   //    e.preventDefault();
   //    let formData = $(this).serialize();
   //    console.log(formData);
   //    let action = baseUrl + '/_gstr1/_9bcdn';
   //    processAjax(action, formData);
   // });

   $('body').on('keyup', '.tax-value', function () {
      let type = $(this).attr('data-taxtype');
      let rate = parseFloat($(this).attr('data-taxrate'));
      let value = parseFloat($(this).val());
      let tblType = $(this).attr('data-tblType');

      if ( tblType === 'igst') {
         let itElem = $('[name="'+ type+'[integrated_tax]' +'"]');
         let result = (value * rate)/100;
         itElem.val(result);

      } else {
         let cgstElem = $('[name="'+ type+'[cgst]' +'"]');
         let sgstElem = $('[name="'+ type+'[sgst]' +'"]');
         let result = (value * rate)/200;
         cgstElem.val(result);
         sgstElem.val(result);
         // console.log('2');
      }
   });

   $('.isIgst').on('change', function(e) {
      let alternate = false;
      if ( $('.alternate') && $('.alternate').length > 0 ) {
         alternate = $('.alternate').val();
      }
      console.log(alternate);
      if ( $('.isIgst').is(":checked") === true ) {
         getTemplate('igst', alternate);
         // $('.display-igst').removeClass('hide');
         // $('.display-cgst-sgst').addClass('hide');
      } else {
         getTemplate('cgst_sgst', alternate);
         // $('.display-igst').addClass('hide');
         // $('.display-cgst-sgst').removeClass('hide');
      }
   });

   $('.is-Igst').on('change', function(e) {
      if ( $(this).is(":checked") === true ) {
         $('.display-igst').removeClass('hide');
         $('.display-cgst-sgst').addClass('hide');
      } else {
         $('.display-igst').addClass('hide');
         $('.display-cgst-sgst').removeClass('hide');
      }
   });

   $('#rate').on('change', function() {
      let rate = parseFloat($(this).val());
      let value = parseFloat($('[name="total_invoice_value"]').val());

      if ( $('.isIgst').is(":checked") === true ) {
         let itElem = $('[name="igst"]');
         let result = (value * rate)/100;
         itElem.val(result);
      } else {
         let cgstElem = $('[name="cgst"]');
         let sgstElem = $('[name="sgst"]');
         let result = (value * rate)/200;
         cgstElem.val(result);
         sgstElem.val(result);
      }
   });

   /*$('.delete-question').on('click', function(e) {
      e.preventDefault();
      let questionId = $(this).attr('data-questionId');
      console.log("questionId: " . questionId);
      let action = baseUrl + "/question/delete";
      console.log("action: " . action);
      if ( questionId ) {
         $.ajax({
            method: "POST",
            url: action,
            // dataType: 'json',
            data: {'questionId': questionId},
            cache: false
         }).done(function (msg) {
            console.log("deleted successfully");
         }).fail(function (response) {
            console.log("error on deletion");
         });
      }
   });*/

   $('.edit-modal-popup').on('click', function(e) {
      e.preventDefault();
      let videoId = $(this).attr('data-videoId');
      let url = $(this).attr('data-url');
      $('#upVideoId').val(videoId);
      $('#youtubeUrl').val(url);
      console.log(videoId);
      $('#editNewModal').modal('show');
   });

   $('.delete-action').on('click', function(e) {
      e.preventDefault();
      let id = $(this).attr('data-id');
      let action = $(this).attr('data-action');
      if ( id && action) {
         action = baseUrl + "/" + action;
         console.log(action);
         let remove = confirm('Are you sure you want to delete this item?');

         if ( remove === true ) {
            $.ajax({
               method: "POST",
               url: action,
               // dataType: 'json',
               data: {'id': id},
               cache: false
            }).done(function (msg) {
               alert("deleted successfully");
               window.location.reload();
            }).fail(function (response) {
               alert("error on deletion");
            });
         }
      }

   });

   $('#question_data').on('change', function() {
      $('.upload-info').text('');
      if ( this.files.length > 0 ) {
         let fileName = this.files[0].name;
         $('.upload-info').text('File Selected : ' + fileName);
      }

   });

   let sectionAItTotal = 0;
   let sectionACtTotal = 0;
   let sectionAStTotal = 0;
   let sectionACsTotal = 0;


   let sectionBItTotal = 0;
   let sectionBCtTotal = 0;
   let sectionBStTotal = 0;
   let sectionBCsTotal = 0;


   let sectionCItTotal = 0;
   let sectionCCtTotal = 0;
   let sectionCStTotal = 0;
   let sectionCCsTotal = 0;

   $('.sectiona').focusout(function (e) {
      e.preventDefault();
      let tempAItTotal = 0;
      let tempACtTotal = 0;
      let tempAStTotal = 0;
      let tempACsTotal = 0;
      $('.sectionait').each(function(i, ele) {
         if ( parseFloat($(ele).val()) ) {
            tempAItTotal += parseFloat($(ele).val());
         }
         sectionAItTotal = tempAItTotal;
      });

      $('.sectionact').each(function(i, ele) {
         if ( parseFloat($(ele).val()) ) {
            tempACtTotal += parseFloat($(ele).val());
         }
         sectionACtTotal = tempACtTotal;
      });

      $('.sectionast').each(function(i, ele) {

         if ( parseFloat($(ele).val()) ) {
            tempAStTotal += parseFloat($(ele).val());
         }
         sectionAStTotal = tempAStTotal;
      });

      $('.sectionacss').each(function(i, ele) {
         if ( parseFloat($(ele).val()) ) {
            tempACsTotal += parseFloat($(ele).val());
         }
         sectionACsTotal = tempACsTotal;
      });


      sectionCItTotal = sectionAItTotal - sectionBItTotal;
      sectionCCtTotal = sectionACtTotal - sectionBCtTotal;
      sectionCStTotal = sectionAStTotal - sectionBStTotal;
      sectionCCsTotal = sectionACsTotal - sectionBCsTotal;

      $('.sectioncit').val(sectionCItTotal);
      $('.sectioncct').val(sectionCCtTotal);
      $('.sectioncst').val(sectionCStTotal);
      $('.sectionccs').val(sectionCCsTotal);
   });
   $('.sectionb').focusout(function (e) {
      e.preventDefault();
      let tempBItTotal = 0;
      let tempBCtTotal = 0;
      let tempBStTotal = 0;
      let tempBCsTotal = 0;
      $('.sectionbit').each(function(i, ele) {
         if ( parseFloat($(ele).val()) ) {
            tempBItTotal += parseFloat($(ele).val());
         }
         sectionBItTotal = tempBItTotal;
      });

      $('.sectionbct').each(function(i, ele) {
         if ( parseFloat($(ele).val()) ) {
            tempBCtTotal += parseFloat($(ele).val());
         }
         sectionBCtTotal = tempBCtTotal;
      });

      $('.sectionbst').each(function(i, ele) {
         if ( parseFloat($(ele).val()) ) {
            tempBStTotal += parseFloat($(ele).val());
         }
         sectionBStTotal = tempBStTotal;
      });

      $('.sectionbcss').each(function(i, ele) {
         if ( parseFloat($(ele).val()) ) {
            tempBCsTotal += parseFloat($(ele).val());
         }
         sectionBCsTotal = tempBCsTotal;
      });

      sectionCItTotal = sectionAItTotal - sectionBItTotal;
      sectionCCtTotal = sectionACtTotal - sectionBCtTotal;
      sectionCStTotal = sectionAStTotal - sectionBStTotal;
      sectionCCsTotal = sectionACsTotal - sectionBCsTotal;
      $('.sectioncit').val(sectionCItTotal);
      $('.sectioncct').val(sectionCCtTotal);
      $('.sectioncst').val(sectionCStTotal);
      $('.sectionccs').val(sectionCCsTotal);
   });
});

$(document).ready(function(){
    $('body').on('click', '.delete-question', function(e) {
      e.preventDefault();
      console.log('error');
      var questionId = $(this).attr('data-questionId');
      console.log("questionId: "+questionId);
      var action = baseUrl + "/delete-question";
      console.log("action: " +action);
      if ( questionId ) {
         $.ajax({
            method: "POST",
            url: action,
            // dataType: 'json',
            data: {'questionId': questionId},
            cache: false
         }).done(function (msg) {
            console.log("deleted successfully");
            window.location.reload();
         }).fail(function (response) {
            console.log("error on deletion");
         });
      }
   });
});
