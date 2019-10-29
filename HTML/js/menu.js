 $(document).ready(function() { 
      $('.menu-icon').click(function(){
        $('.nav').toggle();
        $(this).closest('.menu').toggleClass('menu-state-open'); 
       });
     $('ul li a').click(function() {
        if ( $('.menu').hasClass('menu-state-open')) {
         $('.nav').toggle();
         $('.menu').toggleClass('menu-state-open');
        }
     }) 
 });