$(document).ready(function(){
  $.validate({
    form : '.genericFormUpdate',
    onSuccess : function($form) {
      $.ajax({
        type : 'POST',
        dataType : 'json',
        url : $form.find('input[name="action_url"]').val(),
        data : $form.serialize(),
        success : function( response ){
          if( response.retorno ){
            globalFeedbackUser( response.message,'success', 3000 );
          }else{
            globalFeedbackUser( response.message,'danger', 5000 );
          }
        },
        error : function( xhr, err ){
          var responseTitle = $(xhr.responseText).filter('title').get(0);
          globalFeedbackUser( formatErrorMessage(xhr, err), 'warning', 5000 ); 
        }
      });
      return false;
    }
  });
});