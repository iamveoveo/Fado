$('.js-carousel').owlCarousel({
    loop:true,
    autoplay: true,
    stagePadding: 7,
    margin: 20,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    nav: true,
    autoplayHoverPause: true,
    item:6,
    responsive:{
        0:{
            item:1,
            nav: false
        },
        200:{
            item:2,
            nav: false
        },
        400:{
            item:3,
            nav: false
        },
        600:{
            item:4,
            nav: false
        },
        800:{
            item:5,
            nav: false
        },
        1000:{
            item:6,
            nav: true,
            loop: false
        },
    }
})

