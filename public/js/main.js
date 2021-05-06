$(document).ready(function(){
    "use strict";
    function flipSearchButton(){
      $('.search-container input').toggle(); 
    }
    $('.btn-search').click(flipSearchButton);
  
  
      
      //slider
      $(".Modern-Slider").slick({
        autoplay: true,
        autoplaySpeed: 10000,
        speed: 900,
        slidesToShow: 1,
        slidesToScroll: 1,
        pauseOnHover: false,
        dots: true,
        pauseOnDotsHover: true,
        cssEase: 'linear',
        fade: true,
        draggable: false,
        prevArrow: '<i class="bi bi-chevron-left"></i>',
        nextArrow: '<i class="bi bi-chevron-right"></i>',
    });

        //animate on scroll
      $('.js--wp-1').waypoint(function (direction) {
        $('.js--wp-1').addClass('animate__animated animate__fadeInUp');
      }, {
        offset: '70%'
      });
  
      $('.js--wp-2').waypoint(function (direction) {
          $('.js--wp-2').addClass('animate__animated animate__fadeIn');
        }, {
          offset: '60%'
        });  
      $('.js--wp-3').waypoint(function (direction) {
        $('.js--wp-3').addClass('animate__animated animate__fadeInUp');
      }, {
        offset: '50%'
      }); 
      $('.js--wp-4').waypoint(function (direction) {
        $('.js--wp-4').addClass('animate__animated animate__fadeInDown');
      }, {
        offset: '50%'
      });  
      $('.js--wp-5').waypoint(function (direction) {
        $('.js--wp-5').addClass('animate__animated animate__backInUp');
      }, {
        offset: '70%'
      }); 

  });
  
//gallery

var slider = new Swiper('.gallery-slider', {
  slidesPerView: 1,
  centeredSlides: true,
  loop: true,
  loopedSlides: 6,
  navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
  },
});

var thumbs = new Swiper('.gallery-thumbs', {
  slidesPerView: 'auto',
  spaceBetween: 10,
  centeredSlides: true,
  loop: true,
  slideToClickedSlide: true,
});

slider.controller.control = thumbs;
thumbs.controller.control = slider;

// nav
$(function () {
  // ------------------------------------------------------- //
  // Multi Level dropdowns
  // ------------------------------------------------------ //
  $("ul.dropdown-menu [data-toggle='dropdown']").on("click", function (event) {
      event.preventDefault();
      event.stopPropagation();

      $(this).siblings().toggleClass("show");


      if (!$(this).next().hasClass('show')) {
          $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
      }
      $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
          $('.dropdown-submenu .show').removeClass("show");
      });

  });
});

//lazy loading
document.addEventListener("DOMContentLoaded", function() {
  var lazyloadImages = document.querySelectorAll("img.lazy");    
  var lazyloadThrottleTimeout;
  
  function lazyload () {
    if(lazyloadThrottleTimeout) {
      clearTimeout(lazyloadThrottleTimeout);
    }    
    
    lazyloadThrottleTimeout = setTimeout(function() {
        var scrollTop = window.pageYOffset;
        lazyloadImages.forEach(function(img) {
            if(img.offsetTop < (window.innerHeight + scrollTop)) {
              img.src = img.dataset.src;
              img.classList.remove('lazy');
            }
        });
        if(lazyloadImages.length == 0) { 
          document.removeEventListener("scroll", lazyload);
          window.removeEventListener("resize", lazyload);
          window.removeEventListener("orientationChange", lazyload);
        }
    }, 20);
  }
  
  document.addEventListener("scroll", lazyload);
  window.addEventListener("resize", lazyload);
  window.addEventListener("orientationChange", lazyload);
});