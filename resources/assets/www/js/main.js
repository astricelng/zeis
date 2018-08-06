
function main() {

(function () {
   'use strict';

	// Hide .navbar first
	$(".navbar").hide();

	
	// Preloader */
	  	//$(window).load(function() {
    $(window).on('load', function() {

   	// will first fade out the loading animation 
    	$("#status").fadeOut("slow"); 

    	// will fade out the whole DIV that covers the website. 
    	$("#preloader").delay(500).fadeOut("slow").remove();      

  	}) 

   

/*
   $('body').scrollspy({ 
        target: '.navbar-default',
        offset: 80
    })*/

  	$(document).ready(function() {

      $(window).scroll(function () {
            // set distance user needs to scroll before we fadeIn navbar
        if ($(this).scrollTop() > 200) {
          $('.navbar').fadeIn();
        } else {
          $('.navbar').fadeOut();
        }
      });


        // Page scroll
        $('a.page-scroll').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
              if (target.length) {
                $('html,body').animate({
                  scrollTop: target.offset().top - 40
                }, 900);
                return false;
              }
            }
          });

        // Show Menu on Book
        $(window).bind('scroll', function() {
            var navHeight = $(window).height() - 100;
            if ($(window).scrollTop() > navHeight) {
                $('.navbar-default').addClass('on');
            } else {
                $('.navbar-default').removeClass('on');
            }
        });

  	});


}());


}
main();