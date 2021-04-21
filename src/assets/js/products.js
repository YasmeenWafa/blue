//Smooth scrolling with links
$('.product-categories-tabs .tabs-title a').on('click', function(event){     
    // event.preventDefault();
    // console.log($(this).offset().top)
    // console.log(window.screen.width)
    if(window.screen.width >1023){
        $('html,body').animate({scrollTop:$(this).offset().top+400}, 500);
    }else{
        $('html,body').animate({scrollTop:$(this).offset().top}, 500);
    }
});