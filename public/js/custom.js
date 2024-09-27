
$(window).scroll(function(){
  var header = $("header"),
      scroll = $(window).scrollTop();
  if (scroll > 100) header.addClass("fixed");
  else header.removeClass("fixed");
});



    $(document).ready(function() {
     
      $(".owl_demo").owlCarousel({
     
          autoPlay: 3000, //Set AutoPlay to 3 seconds
     
          items : 1,
          itemsDesktop : [1199,1],
          itemsDesktopSmall : [979,1]
     
      });
     
    });

