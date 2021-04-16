//Smooth scrolling with links
$('.product-categories-tabs .tabs-title a').on('click', function(event){     
    // event.preventDefault();
    // console.log($(this).offset().top)
    $('html,body').animate({scrollTop:$(this).offset().top+400}, 500);
});