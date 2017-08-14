// функция прилипающего меню
$(function(){
    $(window).scroll(function() {
        if($(this).scrollTop() >= 100) {
            $('.menu').addClass('stickytop');
        }
        else{
            $('.menu').removeClass('stickytop');
        }
    });
});
// раскрытие меню
$('menu .buttom_menu').click(function(){
    $('menu .buttom_menu').addClass('active_menu');
    return false;
});
$('body').click(function(){
    $('menu .buttom_menu').removeClass('active_menu');
});

