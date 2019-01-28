
(function($) {
    "use strict";


  
    // Smooth scrolling avec jquery easing
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: (target.offset().top - 75)
          }, 1000, "easeInOutExpo");
          return false;
        }
      }
    });
	
      

	
	//change la couleur du navbar si lutilisateur clique sur le Hamburger
	$('#mainNav button').click(function(){
		if	($('#navbarResponsive').hasClass('.show').toString()){
			$('#mainNav').css('background-color','rgb(47,51,56)')
		}
		if	($('#navbarResponsive:not(".show")')){
			$('#mainNav').css('background-color','none')
		}
	});


    

    // ajoute une classe à #mainNav quand l'utilisateur scroll
    var navbarCollapse = function() {
      if ($("#mainNav").offset().top > 12) {
        $("#mainNav").addClass("navbar-shrink");
      } else {
        $("#mainNav").removeClass("navbar-shrink");

      }
    };
	
  
    // ferme le menu reponsive quand un scroll trigger link est cliqué
    $('.js-scroll-trigger').click(function() {
      $('.navbar-collapse').collapse('hide');
    });
  
    // actice le scrollspy sur la navbar quand on scroll
    $('body').scrollspy({
      target: '#mainNav',
      offset: 54
    });


    // Collapse si la page est pas au top
    navbarCollapse();
    // Collapse la navbar quand la page n'est pas scrollée
    $(window).scroll(navbarCollapse);

  
  })(jQuery);







  