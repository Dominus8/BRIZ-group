new WOW().init();

const swiper = new Swiper('.swiper-container', {
    direction: 'horizontal',
    loop: true,
    navigation: {
        nextEl: '.btn-next',
        prevEl: '.btn-prev',
    },breakpoints: {
        390:{
            spaceBetween: 200
        },
        320:{
            spaceBetween: 250
        }   
    }

});



$(document).ready(function() {
    $('#geo14').hover(function() {
        $('#geo14').addClass("geo--active");
        $('#geo14').removeClass("geo");
        $('#area14-1').attr("fill", "url(#pattern21)");
        $('#area14-2').attr("visibility", "visible");
        $('#area14-3').attr("visibility", "visible");
    }, function() {
        $('#geo14').addClass("geo");
        $('#geo14').removeClass("geo--active");
        $('#area14-1').attr("fill", "#002855");
        $('#area14-2').attr("visibility", "hidden");
        $('#area14-3').attr("visibility", "hidden");
    });
});


$(document).ready(function() {

    $("#hd1").click(function() {
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#head1").offset().top - 117
        }, 600);
    });

    $("#b1").click(function() {
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#el1").offset().top - 117
        }, 600);
    });

    $("#b2").click(function() {
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#el2").offset().top - 117
        }, 600);
    });

    $("#b3").click(function() {
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#el3").offset().top - 117
        }, 600);
    });
});

$(document).ready(function() {

    $("#hd1").click(function() {
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#head1").offset().top - 117
        }, 600);
    });

    $("#mb1").click(function() {
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#el1").offset().top - 117
        }, 600);
    });

    $("#mb2").click(function() {
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#el2").offset().top - 117
        }, 600);
    });

    $("#mb3").click(function() {
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#el3").offset().top - 117
        }, 600);
    });
});


$(document).ready(function() {
    document.querySelector('.menu-bar').addEventListener('click', function(){
        document.querySelector('.menu-bar span').classList.toggle('active');
        document.querySelector('.menu').classList.toggle('animate');
        
})

});

$( document ).ready(function(){

    let width = $( ".directions-item__image" ).width();
    let height = $( ".directions-item__image" ).height();

    // $.post({
    //     URL:'/',
    //     dataType:'json',
    //     data:{
    //         width:190,
    //         height:190,
    //     },
    // })
});