$('.owl-carousel').owlCarousel({
    stagePadding: 50,/*the little visible images at the end of the carousel*/
    loop: true,
    rtl: false,
    lazyLoad: true,
    margin: 0,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        800: {
            items: 1
        },
        1000: {
            items: 2
        },
        1200: {
            items: 4
        },
        1900: {
            items: 5
        },
        1920:{
            items: 4
        }
    }
})