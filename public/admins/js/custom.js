$(function(){
    $('.menu').on('click', function(){
      
        $(this).next('.sub-menu').slideToggle();
        $(this).find('.bx-chevron-right').toggleClass('rotate-90');
    });  
});