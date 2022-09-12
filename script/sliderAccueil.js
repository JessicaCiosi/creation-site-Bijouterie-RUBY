$(document).ready(function(){

    var imgItems = $('.slider li').length; // Numéros de slide
    var imgPos = 1;
    // 
    for(i = 1; i <= imgItems ; i++){
        $('.pagination').append('<li><i class="fa fa-circle"></i></li>');
    }

    $('.slider li').hide(); // Caches tous les slides
    $('.slider li:first').show(); // Montre le premier slide

    $('.pagination li:first').css({'color': '#ff69B4'}); // Style à la premier puce item

    // Execution de toutes les fonctions
    $('.pagination li').click(pagination);
    $('.right i').click(nextSlider);
    $('.left i').click(prevSlider);

    // Délai d'une nouvelle image du slider
    setInterval(function(){
        nextSlider();
    }, 3600);

    function pagination(){
        var paginationPos = $(this).index() + 1;

        $('.slider li').hide();
        $('.slider li:nth-child('+ paginationPos +')').fadeIn();

        $('.pagination li').css({"color": "#cecece"});
        $(this).css({"color": "#ff69B4"});

    }

    function nextSlider(){
        if(imgPos >= imgItems){ imgPos = 1; }
        else{ imgPos++; }

        $('.pagination li').css({"color": "#cecece"});
        $('.pagination li:nth-child('+ imgPos +')').css({"color": "#ff69B4"});

        $('.slider li').hide();
        $('.slider li:nth-child('+ imgPos +')').fadeIn();
    }

    function prevSlider(){
        if(imgPos <= 1){ imgPos = imgItems; }
        else{ imgPos--; }

        $('.pagination li').css({"color": "#cecece"});
        $('.pagination li:nth-child('+ imgPos +')').css({"color": "#ff69B4"});

        $('.slider li').hide();
        $('.slider li:nth-child('+ imgPos +')').fadeIn();
    }

});