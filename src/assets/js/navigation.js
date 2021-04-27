$(function () {
    $(document).on('scroll',function () {
      var $nav = $(" .site-navigation");
      var $nav_mob = $(" .title-bar");

      $nav.toggleClass('scrolled', $(this).scrollTop() >10);
      $nav_mob.toggleClass('scrolled', $(this).scrollTop() >10);

    });
  });

  let menu_items = $('.top-bar .desktop-menu li.menu-item');
  menu_items.each(function(){
    let item_text = $(this).children().first().text();
    $(this).attr("data-text",item_text)
  })

menu_items.on('click', function(){
  let url = $(this).children().first().attr("href")
  // console.log(url)
  $(location).attr('href', url)

})


