$(document).ready(function(){
  var animatedText = $(".animatedText");
  if(animatedText.length!=0){
    animatedText.each(function(index){
       var top_of_element = $(this).offset().top;
       var bottom_of_element = $(this).offset() + $(this).outerHeight();
       var top_of_screen = $(window).scrollTop();
       var bottom_of_screen = $(window).scrollTop() + window.innerHeight;
       if((bottom_of_screen > top_of_element) && (top_of_screen < top_of_element)){
           $(this).addClass("show")
       } 
     })
    }

   var animatedImages = $(".section-image");
 if(animatedImages.length!=0){
      animatedImages.each(function(index){
      var top_of_element = $(this).offset().top;
      var bottom_of_element = $(this).offset() + $(this).outerHeight();
      var top_of_screen = $(window).scrollTop();
      var bottom_of_screen = $(window).scrollTop() + window.innerHeight;
      if((bottom_of_screen > top_of_element) && (top_of_screen < top_of_element)){
          $(this).children().first().addClass("animateImg")
      } 
    })
   }
})



//////////////// text animation ///////////////

$(window).on('scroll',function() {

  var animatedText = $(".animatedText");
  if(animatedText.length!=0){
    animatedText.each(function(index){
       var top_of_element = $(this).offset().top;
       var bottom_of_element = $(this).offset() + $(this).outerHeight();
       var top_of_screen = $(window).scrollTop();
       var bottom_of_screen = $(window).scrollTop() + window.innerHeight;
       if((bottom_of_screen > top_of_element) && (top_of_screen < top_of_element)){
           $(this).addClass("show")
       } 
     })
    }

   var animatedImages = $(".section-image");
 if(animatedImages.length!=0){
      animatedImages.each(function(index){
      var top_of_element = $(this).offset().top;
      var bottom_of_element = $(this).offset() + $(this).outerHeight();
      var top_of_screen = $(window).scrollTop();
      var bottom_of_screen = $(window).scrollTop() + window.innerHeight;
      if((bottom_of_screen > top_of_element) && (top_of_screen < top_of_element)){
          $(this).children().first().addClass("animateImg")
      } 
    })
   }
});
//////////////// text animation ///////////////


//////////////// banner slider ///////////////
$('body:not(.rtl) .home-page-container .banner-slider').slick({
  fade: true,
  autoplay: true,
  autoplaySpeed: 5000,
  speed: 1500,
  infinite: true,
  dots: true,
  arrows: false
})
$('.rtl .home-page-container .banner-slider').slick({
  fade: true,
  autoplay: true,
  autoplaySpeed: 5000,
  speed: 1500,
  infinite: true,
  dots: true,
  arrows: false,
  rtl: true
})



// $('.gallery-slider').on('click', function(){
//   let gallery_slides = $('.gallery-slide:not(.active)').length();
//   console.log(gallery_slides)
//   gallery_slides[0].classList+= " active"
// //  gallery_slides.children().first().addClass('active');
//  gallery_slides.shift()
// console.log(gallery_slides)
// })
