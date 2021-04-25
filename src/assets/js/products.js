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

let url = window.location.pathname;
// console.log(url);
if(url.includes('product-category')){
    // console.log("yes")
    $('.product-categories-tabs .tabs-title.is-active a').trigger('click');
}


$('.product-categories-products-tabs .tabs-title a').on('click', function(event){   
    let tabId = $(this).attr('href');
    setTimeout(function(){
        $('.product-categories-products-tabs-content .tabs-panel'+ tabId+ ' .animatedText ').addClass('show');
        $('.product-categories-products-tabs-content .tabs-panel'+ tabId+ ' .overlay ').addClass('animateImg');
    }, 200)  
});