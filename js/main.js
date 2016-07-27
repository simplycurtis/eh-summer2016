$( document ).ready(function() {

  // input focus
  function inputFocus(){
    $(this).addClass('focused');
    $('.g-recaptcha').addClass('visible');
  }

  // input blur
  function inputBlur(){
    if( $(this).val() === "" ) {
      $(this).removeClass('focused');
      $('.g-recaptcha').removeClass('visible');
    }
  }

  // event listeners
  $("input").on("focus", inputFocus).on("blur", inputBlur);

});