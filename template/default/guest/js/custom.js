/******* custom script 

01. Prealoader
02. Sticky header
03. ScrollToTop 
04. Counter up
05. Banner slider
06. Feature carousel
07. Team carousel
08. Testimonial carousel
09. Fancybox 
10. Isotope Project gallery 
11. Faqs accordian
12. Scroll Animation
13. ContactFormValidation


*****/

"use strict";




	//Prealoader
	function prealoader() {
		if($('.preloader').length){
			$('.preloader').delay(2000).fadeOut(500);
		}
	}

	
	//headermain style
	function styckyHeaderFunction() {
		if($('.main-header').length){
			var fixedheader = $(window).scrollTop();
			var headernavbar = $('.main-header');
			var headerstickybar = $('.main-header .sticky-header');
			var onscrollnav = $('.scroll-to-top');
			if (fixedheader > 55) {
				headernavbar.addClass('fixed-header');
				headerstickybar.addClass("animated slideInDown");
				onscrollnav.fadeIn(300);
			} else {
				headernavbar.removeClass('fixed-header');
				headerstickybar.removeClass("animated slideInDown");
				onscrollnav.fadeOut(300);
			}
		}
	}
	
	

	//Submenu Dropdown Toggle
	if($('.main-header li.dropdown ul').length){
		$('.main-header li.dropdown').append('<div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>');
		
		//Dropdown Button
		$('.main-header li.dropdown .dropdown-btn').on('click', function() {
			$(this).prev('ul').slideToggle(500);
		});
		
		//Disable dropdown parent link
		$('.main-header .navigation li.dropdown > a').on('click', function(e) {
			e.preventDefault();
		});
	}


		
       //bottom to top scroll btn show hide
	   
        function scrollTopClick() {
			//alert("working");
          if ($(window).scrollTop() > 200) {
            $('.scroll-totop').fadeIn();
          } else {
            $('.scroll-totop').fadeOut();
          }
        }

        //bottom to top scroll click to go
        $('.scroll-totop').on('click', function() {
          $('html, body').animate({scrollTop : 0},1500);
          return false;
        });	
	
	
	
	

        // Counter up.
		function CounterYourNumber() {	
			if($('.counter-nos').length){	
				$('.counter-nos').counterUp({
					delay: 10,
					time: 1000
				});
			}	
		}		



	
	/*--------------------------
		Banner slider
	---------------------------- */
	


    if ($('.mainslider').length) {
        $('.mainslider').owlCarousel({
            dots: false,
            loop: true,
            margin: 0,
            nav: true,
            navText: [
                '<i class="fas fa-arrow-left"></i>',
                '<i class="fas fa-arrow-right"></i>'
            ],
            autoplayHoverPause: false,
            autoplay: 6000,
            smartSpeed: 1000,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                800:{
                    items:1
                },
                1024:{
                    items:1
                },
                1100:{
                    items:1
                },
                1200:{
                    items:1
                }
            }
        });    		
    }

	if ($('.feature-slide').length) {
        $('.feature-slide').owlCarousel({
            dots: true,
            loop: true,
            margin: 0,
            nav: false,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>'
            ],
            autoplayHoverPause: false,
            autoplay: false,
            smartSpeed: 1000,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                800:{
                    items:2
                },
                1024:{
                    items:2
                },
                1100:{
                    items:3
                },
                1200:{
                    items:3
                }
            }
        });    		
    }	
	
	if ($('.team-slide').length) {
        $('.team-slide').owlCarousel({
            dots: false,
            loop: true,
            margin: 0,
            nav: true,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>'
            ],
            autoplayHoverPause: false,
            autoplay: false,
            smartSpeed: 1000,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                800:{
                    items:2
                },
                1024:{
                    items:2
                },
                1100:{
                    items:2
                },
                1200:{
                    items:2
                }
            }
        });    		
    }


	if ($('.testimonial-slides').length) {
        $('.testimonial-slides').owlCarousel({
            dots: false,
            loop: true,
            margin: 0,
            nav: true,
            navText: [
                '<i class="fas fa-arrow-left"></i>',
                '<i class="fas fa-arrow-right"></i>'
            ],
            autoplayHoverPause: false,
            autoplay: true,
            smartSpeed: 1000,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                800:{
                    items:1
                },
                1024:{
                    items:1
                },
                1100:{
                    items:1
                },
                1200:{
                    items:1
                }
            }
        });    		
    }


	if ($('.news-slide').length) {
        $('.news-slide').owlCarousel({
            dots: false,
            loop: true,
            margin: 30,
            nav: true,
			center: true,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>'
            ],
            autoplayHoverPause: false,
            autoplay: 6000,
            smartSpeed: 1000,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                800:{
                    items:2
                },
                1024:{
                    items:2
                },
                1100:{
                    items:3
                },
                1200:{
                    items:3
                }
            }
        });    		
    }

	// Fancybox
	if($('.fancybox-gallery').length) {
		$('.fancybox-gallery').fancybox({
			openEffect  : 'fade',
			closeEffect : 'fade',
			youtube : {
				controls : 0,
				showinfo : 0
			},
			vimeo : {
				color : 'f00'
			}			
		});
	}
	
	
	
/* ==========================================================================
		Project Gallery
   ========================================================================== */	
	
	 function galleryMasonaryLayout() {
		if ($('.filter-list').length) {
			$('.filter-list').isotope({
				itemSelector: '.gallery-item',
				layoutMode: 'masonry'
			});
			
			
			$('.post-filter').on( 'click', 'li', function() {
			  var filterValue = $(this).attr('data-filter');
			  $('.filter-list').isotope({ filter: filterValue });
			   $(this).addClass("active");
				$(this).siblings().removeClass("active");
			});		
		}

	 }
		
	
	
	
/* ==========================================================================
		Faqs accordian
   ========================================================================== */	
		
			
	if ($('.faq-style').length) {
			
	   function toggleIcon(e) {
		  $(e.target)
			 .prev('.card-header')
			 .find(".faq-indicator")
			 .toggleClass('fa-minus fa-plus')
			 .parents('.card')
			 .toggleClass('active');
	   }
   $('#accordion').on('hidden.bs.collapse', toggleIcon);
   $('#accordion').on('shown.bs.collapse', toggleIcon);

			
 		
	} 		
		
	
	
	// scroll animate
	if($('.wow').length){
		var wow = new WOW(
		  {
			boxClass:     'wow',     
			animateClass: 'animated', 
			offset:       0,          
			mobile:       false,      
			live:         true       
		  }
		);
		//wow.init();
	}	
	
	

			
	/* ==========================================================================
	   Contact Form Validation and Ajax
	   ========================================================================== */	

	$('#contact-form').validate({
		rules: {
			name: {
				required: true
			},
			email: {
				required: true,
				minlength: 5,
				email: true
			},
			phone: {
				required: true
			},
			message: {
				required: true,
				minlength: 10
			}
		},
		messages: {
			name: "Please specify your name",
			email: {
				required: "We need your email address to contact you",
				email: "Your email address must be in the format of name@domain.com"
			},
			phone: "Please specify your phone number",
			message: {
				required: "Please specify your message",
				minlength: jQuery.validator.format("At least {0} characters required!")
			}
		},
		submitHandler: function(e) {
			var $t = $(e);
			$.ajax({
				type: 'POST',
				url: $t.attr('action'),
				data: $t.serialize(),
				beforeSend: function() {
					$("#loading").show();
				},
				complete: function() {
					$("#loading").hide();
				},
				success: function(res) {
					$('.contact-form-message').show().html(res).delay(10000).fadeOut("slow");
					$('input[name=\'name\']').val('');
					$('input[name=\'email\']').val('');
					$('input[name=\'phone\']').val('');
					$('textarea[name=\'message\']').val('');
				}
			});
		}
	});			


	// Dom Ready Function
	jQuery(document).on('ready', function () {
		(function ($) {
			// add your functions
			//searchbox();
		   CounterYourNumber ();
			galleryMasonaryLayout();
	  
			
			
	   
	 
		})(jQuery);
	});



	jQuery(window).on('scroll', function(){
		(function ($) {
		styckyHeaderFunction();
		scrollTopClick();
		
		})(jQuery);
	});



	// Instance Of Fuction while Window Load event
	jQuery(window).on('load', function() {
		(function($) {
			prealoader ();
			
		})(jQuery);
	});

