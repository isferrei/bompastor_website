var g_feedbackUser_autoClose;

function globalFeedbackUser( message, type, auto_close = false ){
  clearTimeout(g_feedbackUser_autoClose);
  $(document).find('.g-feedback-user').html('<div class="alert alert-'+type+' alert-dismissible fade show mb-0 py-2" role="alert">'+message+'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
  if( auto_close ){
    g_feedbackUser_autoClose = setTimeout(function(){
      if( $(document).find('.g-feedback-user').length ){
        $(document).find('.g-feedback-user').find('.alert').alert('close');
      }
    }, auto_close );
  }
}

function formatErrorMessage(jqXHR, exception) {
  if (jqXHR.status === 0 && exception != 'abort') {
      return ('Por favor verifque sua conexão com a internet.');
  } else if (jqXHR.status == 404) {
      return ('Esta página não existe [404]');
  } else if (jqXHR.status == 500) {
      return ('Erro interno no servidor [500]');
  } else if (exception === 'parsererror') {
      return ('Resposta esperada no formato JSON.');
  } else if (exception === 'timeout') {
      return ('Carregamento atingiu o tempo limite.');
  } else if (exception === 'abort') {
      return ('Carregamento de página abortado.');
  } else {
      return ('Uncaught Error.\n' + jqXHR.responseText);
  }      
}