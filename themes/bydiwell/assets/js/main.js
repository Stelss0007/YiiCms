(function($) {

	"use strict";

    // Preloader
    $(window).load(function(){
      $('#preloader').fadeOut('slow',function(){$(this).remove();});
    });



    // Bootstrap Slider
    (function( $ ) {
        //Function to animate slider captions 
        function doAnimations( elems ) {
            //Cache the animationend event in a variable
            var animEndEv = 'webkitAnimationEnd animationend';
            
            elems.each(function () {
                var $this = $(this),
                    $animationType = $this.data('animation');
                $this.addClass($animationType).one(animEndEv, function () {
                    $this.removeClass($animationType);
                });
            });
        }
        
        //Variables on page load 
        var $myCarousel = $('#carousel-example-generic'),
            $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");
            
        //Initialize carousel 
        $myCarousel.carousel({
            interval: 5000,
        });
        
        //Animate captions in first slide on page load 
        doAnimations($firstAnimatingElems);

        //Other slides to be animated on carousel slide event 
        $myCarousel.on('slide.bs.carousel', function (e) {
            var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
            doAnimations($animatingElems);
        });

        $myCarousel.on('mouseover', function (e) {
             $myCarousel.carousel();
        });
        
    })(jQuery);


    // wow animation script
    // new WOW().init();

    // Smoothly scroll
    $("#scroll").click(function (){
          $('html, body').animate({
              scrollTop: $("#appointment").offset().top
          }, 1200);
      });

    // Navbar Scroll To Fixed
    $('.fixed-header').scrollToFixed();


    // Datepicker
    var date = new Date();
    var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
    $('#datepicker').datepicker({
        format: "dd/mm/yyyy",
        todayHighlight: true,
        autoclose: true
    });
    $('#datepicker').datepicker('setDate', today);


    // Light box - Portfolio Gallery
    lightbox.option({
      'imageFadeDuration': 800,
      'resizeDuration': 500,
      'wrapAround': true
    })

    
    // Doctor Carousel
    if($('.team-carousel').length){
        $('.team-carousel').owlCarousel({
            loop: true,
            margin: 20,
            dots: false,
            nav:true,
            autoplayHoverPause: true,
            autoplay: true,
            autoplayTimeout: 3000,
            smartSpeed: 700,
            navText: [
              '<i class="fa fa-angle-left" aria-hidden="true"></i>',
              '<i class="fa fa-angle-right" aria-hidden="true"></i>'
            ],
            responsive: {
                0: {
                    items: 1,
                    center: false
                },
                480:{
                    items:2,
                    center: false
                },
                600: {
                    items: 2,
                    center: false
                },
                768: {
                    items: 3
                },
                992: {
                    items: 3
                },
                1199: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            }
        })
    }


    // Testimonial carousel
    if($('.testimonial-carousel').length){
        $('.testimonial-carousel').owlCarousel({
            loop: true,
            margin: 30,
            dots: false,
            nav:true,
            animateIn: 'fadeInUp',
            autoplayHoverPause: true,
            autoplay: true,
            autoplayTimeout: 4000,
            smartSpeed: 700,
            navText: [
              '<i class="fa fa-angle-down" aria-hidden="true"></i>',
              '<i class="fa fa-angle-up" aria-hidden="true"></i>'
            ],
            responsive: {
                0: {
                    items: 1,
                    center: false
                },
                480:{
                    items:1,
                    center: false
                },
                600: {
                    items: 1,
                    center: false
                },
                768: {
                    items: 1
                },
                992: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        })
    }

     // Testimonial carousel
    if($('.client-carousel').length){
        $('.client-carousel').owlCarousel({
            loop: true,
            margin: 30,
            dots: false,
            nav:false,
            autoplayHoverPause: false,
            autoplay: true,
            autoplayTimeout: 2000,
            smartSpeed: 700,
            responsive: {
                0: {
                    items: 2,
                },
                480:{
                    items:3,
                },
                600: {
                    items: 3,
                },
                768: {
                    items: 4
                },
                992: {
                    items: 5
                },
                1200: {
                    items: 5
                }
            }
        })
    }


    // Filtering
    if($('.filtr-container').length){
        $('.filtr-container').imagesLoaded(function() {
            var filterizr = $('.filtr-container').filterizr();
        });
    }


    //Scroll-Up
    dyscrollup.init({
        showafter : 500,
        scrolldelay : 1000,
        position : 'right',
        shape : 'squre',
        width : "20",
        height : "20"
    });

    // Parallax background
    $('.jarallax').jarallax({
            speed: 0.5
    })

    // CounterUp
    $('.counter').countUp();

    // Search box popup
     $(function(){
        $("#addClass").on('click', function () {
          $('#qnimate').addClass('popup-box-on');
            });
          
            $("#removeClass").click(function () {
          $('#qnimate').removeClass('popup-box-on');
            });
    })
    


})(window.jQuery);