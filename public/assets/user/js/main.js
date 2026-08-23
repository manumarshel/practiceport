$(function () {
   console.log(baseUrl);

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
   $("#gstr-b2b-form").on('submit', function(e) {
      e.preventDefault();
      let formData = $(this).serialize();
      let action = baseUrl + '/_gstr1/b2b';
      processAjax(action, formData);

   });
});
