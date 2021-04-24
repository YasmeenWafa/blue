let rtl = false;
if($('body').hasClass('rtl')){
  rtl = true;
}

$('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    fade: true,
    rtl: rtl,
    asNavFor: '.slider-nav'
  });
  $('.slider-nav').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: false,
    arrows: false,
    // centerMode: true,
    rtl: rtl,
    focusOnSelect: true
  });



  import fancybox from "../../../node_modules/@fancyapps/fancybox/dist/jquery.fancybox";
  $.fancybox.defaults.thumbs.autoStart = true;


  
  // fancybox
  $().fancybox({
    selector : '.about-blue-lower-images .slider-for .slick-slide .pslide',
    buttons: [
      "zoom",
      //"share",
      "slideShow",
      //"fullScreen",
      //"download",
      // "thumbs",
      "close"
    ],
    thumbs : {
      autoStart : false,
  },
  });


const calcHeights = () =>{
  let width = $('.about-blue-lower-images .slider-for .slick-slide').width();
  let height =  (width / 1.068282528);
  $('.about-blue-lower-images .slider-for').css('height',height)
  
  let width2 = $('.about-blue-lower-images .slider-nav .slick-slide').width()
  let height2 = width2;
  $('.about-blue-lower-images .slider-nav').css('height',height2);
}

calcHeights();
window.onresize = function(event) {
  calcHeights();
};