
$('.form-container .submit-form').on('click', function(){
    $('.gform_wrapper .gform_footer .gform_button').trigger('click');
})

$(document).bind('gform_confirmation_loaded', function(){
    // console.log("hi")
    $('.contact-us-form').css('align-self', 'flex-start')
    $('.form-container .form-title').css('display',"none");
    $('.form-container .submit-form').css('display','none');
});

$(document).ready(function(){
    $(document).on('gform_post_render', function(event, formId){
          $('.contact-us-form .gfield select').select2()
    
    });
  })