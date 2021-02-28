$(function () {
    $(document).on('scroll',function () {
      var $nav = $(" .site-navigation");
      var $nav_mob = $(" .title-bar");

      $nav.toggleClass('scrolled', $(this).scrollTop() >10);
      $nav_mob.toggleClass('scrolled', $(this).scrollTop() >10);

    });
  });