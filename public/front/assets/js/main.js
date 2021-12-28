(function ($) {
    "user strict";

    $(document).ready(function () {

        $(window).scroll(function () {   
                   
         if($(window).scrollTop() > 200) {
            $('#sidebar').css('position','fixed');
            $('#sidebar').css('top','0'); 
         }

         else if ($(window).scrollTop() <= 200) {
            $('#sidebar').css('position','');
            $('#sidebar').css('top','');
         }  
            if ($('#sidebar').offset().top + $("#sidebar").height() > $("#footer").offset().top) {
                $('#sidebar').css('top',-($("#sidebar").offset().top + $("#sidebar").height() - $("#footer").offset().top));
            }
        });


        // Defining the local dataset
            var cars = ['Audi', 'BMW', 'Bugatti', 'Ferrari', 'Ford', 'Lamborghini', 'Mercedes Benz', 'Porsche', 'Rolls-Royce', 'Volkswagen'];
            
            // Constructing the suggestion engine
            var cars = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.whitespace,
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                local: cars
            });
            
            // Initializing the typeahead
            $('.typeahead').typeahead({
                hint: true,
                highlight: true, /* Enable substring highlighting */
                minLength: 1 /* Specify minimum characters required for showing result */
            },
            {
                name: 'cars',
                source: cars
            });
        
        // Nice Select
        $('.select-bar').niceSelect();
        // Lightcase
        $('.video-popup').magnificPopup({
            type: 'iframe',
        });
        $('.img-popup').magnificPopup({
            type: 'image'
        });


        // Toggle serch
        $('.serch-icon').on('click', function () {
            $('.search-overlay').show('slow');
        });

        $('.search-overlay .close').on('click', function () {
            $('.search-overlay').hide('slow');
        })


        $("body").each(function () {
            $(this).find(".img-pop").magnificPopup({
                type: "image",
                gallery: {
                    enabled: true
                }
            });
        });

        //Faq
        $('.faq-wrapper .faq-title').on('click', function (e) {
            var element = $(this).parent('.faq-item');
            if (element.hasClass('open')) {
                element.removeClass('open');
                element.find('.faq-content').removeClass('open');
                element.find('.faq-content').slideUp(300, "swing");
            } else {
                element.addClass('open');
                element.children('.faq-content').slideDown(300, "swing");
                element.siblings('.faq-item').children('.faq-content').slideUp(300, "swing");
                element.siblings('.faq-item').removeClass('open');
                element.siblings('.faq-item').find('.faq-title, .faq-title-two').removeClass('open');
                element.siblings('.faq-item').find('.faq-content').slideUp(300, "swing");
            }
        });

        //MenuBar
        $('.header-bar').on('click', function () {
            $(".menu").toggleClass("active");
            $(".header-bar").toggleClass("active");
            $('.overlay').toggleClass('active');
        });
        $('.overlay').on('click', function () {
            $(".menu").removeClass("active");
            $(".header-bar").removeClass("active");
            $('.overlay').removeClass('active');
        });
        //Menu Dropdown Icon Adding
        $("ul>li>.submenu").parent("li").addClass("menu-item-has-children");
        // drop down menu width overflow problem fix
        $('ul').parent('li').hover(function () {
            var menu = $(this).find("ul");
            var menupos = $(menu).offset();
            if (menupos.left + menu.width() > $(window).width()) {
                var newpos = -$(menu).width();
                menu.css({
                    left: newpos
                });
            }
        });
        $('.menu li a').on('click', function (e) {
            var element = $(this).parent('li');
            if (element.hasClass('open')) {
                element.removeClass('open');
                element.find('li').removeClass('open');
                element.find('ul').slideUp(300, "swing");
            } else {
                element.addClass('open');
                element.children('ul').slideDown(300, "swing");
                element.siblings('li').children('ul').slideUp(300, "swing");
                element.siblings('li').removeClass('open');
                element.siblings('li').find('li').removeClass('open');
                element.siblings('li').find('ul').slideUp(300, "swing");
            }
        })
        // Scroll To Top
        var scrollTop = $(".scrollToTop");
        $(window).on('scroll', function () {
            if ($(this).scrollTop() < 500) {
                scrollTop.removeClass("active");
            } else {
                scrollTop.addClass("active");
            }
        });
        
        //Click event to scroll to top
        $('.scrollToTop').on('click', function () {
            $('html, body').animate({
                scrollTop: 0
            }, 500);
            return false;
        });
        // Header Sticky Here
        var headerOne = $(".header-section");
        $(window).on('scroll', function () {
            if ($(this).scrollTop() < 1) {
                headerOne.removeClass("header-active");
            } else {
                headerOne.addClass("header-active");
            }
        });
        $('.window-warning .lay').on('click', function () {
            $('.window-warning').addClass('inActive');
        })
        $('.seat-plan-wrapper li .movie-schedule .item').on('click', function () {
            $('.window-warning').removeClass('inActive');
        })

        //Odometer
        $(".counter-item").each(function () {
            $(this).isInViewport(function (status) {
                if (status === "entered") {
                    for (var i = 0; i < document.querySelectorAll(".odometer").length; i++) {
                        var el = document.querySelectorAll('.odometer')[i];
                        el.innerHTML = el.getAttribute("data-odometer-final");
                    }
                }
            });
        });


        //Count Down JAva Script
        $('.countdown').countdown({
                date: '10/15/2022 05:00:00',
                offset: +2,
                day: 'Day',
                days: 'Days'
            },
            function () {
                alert('Done!');
            });

        // Registered Slider
        $('.registered-slider').owlCarousel({
            loop: true,
            responsiveClass: true,
            nav: true,
            dots: false,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            smartSpeed: 2000,
            responsive: {
                0: {
                    items: 1,
                },
                576: {
                    items: 2,
                },
                768: {
                    items: 3,
                },
                992: {
                    items: 4,
                },
                1200: {
                    items: 5,
                },
                1500: {
                    items: 6
                }
            }
        });

        // Registered Slider two
        $('.registered-slider2').owlCarousel({
            loop:true,
            responsiveClass:true,
            nav:false,
            dots:false,
            margin: 30,
            autoplay:true,
            autoplayTimeout:2000,
            autoplayHoverPause:true,
            smartSpeed: 2000,
            responsive:{
                0:{
                    items:1,
                },
                576:{
                    items:2,
                },
                768:{
                    items:2,
                },
                992:{
                    items:3,
                },
                1200:{
                    items:3,
                }
            }
          });
          
        // You may like Slider
        $('.p-u-p-list-slider').owlCarousel({
            loop: true,
            responsiveClass: true,
            nav: true,
            dots: false,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            margin: 30,
            autoplay: false,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            smartSpeed: 2000,
            center: true,
            responsive: {
                0: {
                    items: 1,
                }
            }
        });

        /** Product Details  carousel **/
        var $product_slider = $('.all-slider');
        $product_slider.owlCarousel({
            loop: false,
            dots: false,
            nav: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            margin: 0,
            autoplay: false,
            items: 4,
            autoplayTimeout: 6000,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 4
                },
                768: {
                    items: 4
                }
            }
        });

        /** Product Details  carousel **/
        var $related_product_slider = $('.related-product-slider');
        $related_product_slider.owlCarousel({
            loop: true,
            dots: false,
            nav: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            margin: 30,
            autoplay: false,
            items: 4,
            autoplayTimeout: 6000,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 1,
                },
                576: {
                    items: 2,
                },
                768: {
                    items: 3,
                },
                992: {
                    items: 3,
                },
                1200: {
                    items: 4,
                }
            }
        });
        //Widget Slider
        $('.widget-slider').owlCarousel({
            loop:true,
            nav:false,
            dots: false,
            items:1,
            autoplay:true,
            autoplayTimeout:2500,
            autoplayHoverPause:true,
            margin: 30,
        });

        var width = $(window).width()
        if (width <= 991) {

            $(document).on('mouseover', function (e) {
                var container = $(".xzoom-preview");

                // if the target of the click isn't the container nor a descendant of the container
                if (!container.is(e.target) && container.has(e.target).length === 0) {
                    $(".xzoom-preview").css('display', 'none');
                }
            });

        }
    });

    // Preloader Js
    $(window).on('load', function () {
        $('.preloader').fadeOut(1000);
        var img = $('.bg_img');
        img.css('background-image', function () {
            var bg = ('url(' + $(this).data('background') + ')');
            return bg;
        });

        // Wow js active
        new WOW().init();

    });

    $(function(){
      registerSummernote('#summernote', 'Please write your answer here', 370, function(max) {
        $('#maxContentPost').text(max)
      });
    });

      function registerSummernote(element, placeholder, max, callbackMax) {
        $(element).summernote({
          toolbar: [
              
              ['font', ['bold','italic','underline']],
              ['para', ['ul', 'ol', 'paragraph']],
              ['insert', ['picture']],
              ['table',['table']],
              
            ],
            tabsize: 2,
            height: 200,
            placeholder,
        });
      }
    $(document).ready(function() {
    // Configure/customize these variables.
    var showChar = 150;  // How many characters are shown by default
    var ellipsestext = "";
    var moretext = "Read More";
    var lesstext = "Read Less";


    $('.more').each(function() {
        var content = $(this).html();

        if(content.length > showChar) {

            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);

            var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

            $(this).html(html);
        }

    });

    $(".morelink").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
});

      $('#blogcomentform').on('submit', function(e) {
                                  if(grecaptcha.getResponse() == "") {
                                    e.preventDefault();
                                    $('#rc-anchor-container').css('border-color' , 'red');
                                    $('#recaptcha-checkbox-border').css('border-color' , 'red');
                                  }
                                });


                                /* JQuery Code from:
 http://www.findsourcecode.com/jquery/how-to-count-number-of-characters-in-textarea-jquery/ */

$( document ).ready(function() {
  var maxChars = 300;
  var textLength = 0;
  var comment = "";
  var outOfChars = 'You have reached the limit of ' + maxChars + ' characters';

  /* initalize for when no data is in localStorage */
  var count = maxChars;
  $('#characterLeft').text(count + ' characters left');

  /* fix val so it counts carriage returns */
  $.valHooks.textarea = {
    get: function(e) {
      return e.value.replace(/\r?\n/g, "\r\n");
    }
  };

  function checkCount() {
    textLength = $('#comment').val().length;
    if (textLength >= maxChars) {
      $('#characterLeft').text(outOfChars);
      $("#characterLeft").css("color", "red");
      $('#disabledcomentbutton').attr('disabled' , true);
    }
    else {
      count = maxChars - textLength;
      $('#characterLeft').text(count + ' characters left');
      $("#characterLeft").css("color", "green");
      $('#disabledcomentbutton').attr('disabled' , false);
    }
  }

  /* on keyUp: update #characterLeft as well as count & comment in localStorage */
  $('#comment').keyup(function() {
    checkCount();
    comment = $(this).val();
    localStorage.setItem("comment", comment);
  });

  /* on pageload: get check for comment text in localStorage, if found update comment & count */
  if (localStorage.getItem("comment") != null) {
    $('#comment').text(localStorage.getItem("comment"));
    checkCount();
  }
});


})(jQuery);
