$(document).ready(function () {
        'use strict';
            $("#owl-carousel").owlCarousel({
                items: 5,
                itemsDesktop: [1199, 5],
                itemsDesktopSmall: [979, 3],
                itemsTablet: [768, 2],
                itemsMobile: [479, 1],
                navigation: true,
                navigationText: [
      "<i class='fa fa-chevron-left icon-white'></i>",
      "<i class='fa fa-chevron-right icon-white'></i>"
      ],
                autoPlay: false,
                pagination: false
            });

            $("#slide_pan").owlCarousel({
                items: 1,
                itemsDesktop: [1199, 1],
                itemsDesktopSmall: [979, 1],
                itemsTablet: [768, 1],
                itemsMobile: [479, 1],
                navigation: true,
                navigationText: [
      "<i class='fa fa-chevron-left icon-white'></i>",
      "<i class='fa fa-chevron-right icon-white'></i>"
      ],
                autoPlay: false,
                pagination: false
            });

            $(".testim_sec").owlCarousel({
                items: 2,
                itemsDesktop: [1199, 2],
                itemsDesktopSmall: [979, 2],
                itemsTablet: [768, 1],
                itemsMobile: [479, 1],
                navigation: true,
                navigationText: [
      "<i class='fa fa-chevron-left icon-white'></i>",
      "<i class='fa fa-chevron-right icon-white'></i>"
      ],
                autoPlay: false,
                pagination: false
            });


            $('#slider').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false
            });
        });

$(document).ready(function () {
        'use strict';
            
        $('#prop_slid').bxSlider({
            pagerCustom: '#slid_nav'
        });
    });
$(function () {
             $(".demo1").bootstrapNews({
                 newsPerPage: 4,
                 autoplay: true,
         pauseOnHover:true,
                 direction: 'up',
                 newsTickerInterval: 4000,
                 onToDo: function () {
                     //console.log(this);
                 }
             });
         
         });