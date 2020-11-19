
$('.carousel').carousel({
    interval: 2000
  })
  $(window).scroll(function() {     
    var scroll = $(window).scrollTop();
    if (scroll > 30) {
        $(".my-nav").addClass("bg-white");
        $(".my-nav .link ").addClass("nav-color");


    }
    else {
        $(".my-nav").removeClass("bg-white");
        $(".my-nav .link").removeClass("nav-color");


    }
});
$(document).ready(function() {
	
    var headerHeight = $('nav').outerHeight(); // Target your header navigation here
      
    $('.my-nav a').click(function(e) {
        
        var targetHref   = $(this).attr('href');
        
      $('html, body').animate({
          scrollTop: $(targetHref).offset().top - headerHeight // Add it to the calculation here
      }, 1000);
      
      e.preventDefault();
    });
    $('.btn-package').click(function(e) {
        
        var targetHref = $(this).attr('href');
        
      $('html, body').animate({
          scrollTop: $(targetHref).offset().top - headerHeight // Add it to the calculation here
      }, 1000);
      
      e.preventDefault();
    });
  });
 

