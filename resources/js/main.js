$(document).ready(function(){
    $(".slider").owlCarousel({
        autoplay:false,
        center: true,
        loop:true,
        margin:0,
        items:3,
        nav:true,
        navText:["<span class='arrow-s left icon-arrow-left'></span>", "<span class='arrow-s right icon-arrow-right'></span>"],
        dots:false,
        transitionStyle : "fade",
        responsive: {
            0: {
                items: 1,
            },
            650: {
                items: 1,
                nav: true,
            },
            768: {
                items: 2,
                nav: true,
            },
            1000: {
                items: 3,
                nav: true,
            }
        }
    });

    /*---------- TESTIMONIALS ----------*/
    $(".profiles").owlCarousel({
        autoplay:true,
        center: true,
        loop:true,
        items:1,
        nav:true,
        navText:["<span class='arrow-s left icon-arrow-left'></span>", "<span class='arrow-s right icon-arrow-right'></span>"],
        dots:false,
        responsive: {
            0: {
                items: 1,
            },
            650: {
                items: 1,
                nav: true,
            },
            768: {
                items: 1,
                nav: true,
            },
            1000: {
                items: 1,
                nav: true,
            }
        }
    });

     $('.b-slide').owlCarousel({
        autoplay:true,
        loop: true,
        items:1,
        dots: true,
        nav:false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }

    });

    /*---------- ACCORDION ----------*/
    $(".accordion .title").bind('click', function(e){
        if(!$(this).parent("li").hasClass("content-visible")){
            $(".accordion li").removeClass("content-visible");
            $(".accordion .desc").slideUp(200);
        }
        $(this).next('.desc').slideToggle(200).end().parent('li').toggleClass('content-visible');
        e.preventDefault();
    });

});
