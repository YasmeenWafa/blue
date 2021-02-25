$(function () {
    $(document).on('scroll',function () {
      var $nav = $(" .site-navigation");
      $nav.toggleClass('scrolled', $(this).scrollTop() >10);
    });
  });