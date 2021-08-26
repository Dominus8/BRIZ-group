const swiper = new Swiper('.swiper', {
    direction: 'horizontal',
    loop: true,
    navigation: {
        nextEl: '.btn-next',
        prevEl: '.btn-prev',
    },
    breakpoints: {
        390: {
            spaceBetween: 200
        },
        320: {
            spaceBetween: 250
        }
    }

});

const swiper2 = new Swiper('.swiper2', {
    direction: 'horizontal',
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        390: {
            spaceBetween: 200
        },
        320: {
            spaceBetween: 250
        }
    }

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
    document.querySelector('.menu-bar').addEventListener('click', function() {
        document.querySelector('.menu-bar span').classList.toggle('active');
        document.querySelector('.menu').classList.toggle('animate');

    })

});