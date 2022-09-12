$(document).ready(function(){
    var offset = 250;
    var duration = 500;

    $(window).scroll(function(){
        if($(this).scrollTop() > offset){
            $('.scrollup').fadeIn(duration);
        }else{
            $('.scrollup').fadeOut(duration);
        }
    });

    $('.scrollup').click(function(){
        $('html, body').animate({scrollTop: 0}, duration);
    });

});