$(document).ready(function(){
    "use strict";
    function flipSearchButton(){
      $('.search-container input').toggle(); 
    }
    $('.btn-search').click(flipSearchButton);
  
  
        //animate on scroll
      $('.js--wp-1').waypoint(function (direction) {
        $('.js--wp-1').addClass('animate__animated animate__fadeInUp');
      }, {
        offset: '70%'
      });
  });
  
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