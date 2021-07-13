new WOW().init();

const swiper = new Swiper('.swiper-container', {
    direction: 'horizontal',
    loop: true,
    navigation: {
        nextEl: '.btn-next',
        prevEl: '.btn-prev',
    },
});



$(document).ready(function() {
    $('#geo14').hover(function() {
        $('#geo14').addClass("geo--active");
        $('#geo14').removeClass("geo");
        $('#area14-1').attr("fill","url(#pattern21)");
        $('#area14-2').attr("visibility","visible");
        $('#area14-3').attr("visibility","visible");
    },function(){
        $('#geo14').addClass("geo");
        $('#geo14').removeClass("geo--active");
        $('#area14-1').attr("fill","#002855");
        $('#area14-2').attr("visibility","hidden");
        $('#area14-3').attr("visibility","hidden");
    });
});

