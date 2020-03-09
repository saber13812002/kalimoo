$('.owl-carousel').owlCarousel({
    loop:false,
    margin:10,
    responsiveClass:true,
    dots: false,
    lazyLoad : true,
    responsive:{
        0:{
            items:1,
            nav:false,
            dots:true
        },
        600:{
            items:5,
            nav:false
        },
        900:{
            items:4,
            nav:false
        },
        1200:{
            items:5,
            nav:false,
        },
    }
})