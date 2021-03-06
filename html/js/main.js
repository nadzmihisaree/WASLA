// Nav bar toggle 
var wrapperMenu = document.querySelector('.wrapper-menu');
wrapperMenu.addEventListener('click', function () {
    wrapperMenu.classList.toggle('open');
})

// home-page-banner-swiper-------------------------
var swiper = new Swiper(".mySwiper1", {
    navigation: {
        nextEl: ".BN",
        prevEl: ".BP",
    },
    pagination: {
        el: ".BPAG",
    },

});


//  home-page-activities-swiper-----------------
var swiper2 = new Swiper(".mySwiper2", {
    slidesPerView: 1,
    spaceBetween: 15,
    // slidesPerGroup: 3,
    // loop: true,
    // loopFillGroupWithBlank: true,
    pagination: {
        el: ".BPAG2",
        clickable: true,
    },
    navigation: {
        nextEl: ".BN2",
        prevEl: ".BP2",
    },
    breakpoints: {
        768: {
            slidesPerView: 2,
            spaceBetween: 30
        },
        992: {
            slidesPerView: 3,
            spaceBetween: 30
        }
    }
});


// home-page-events-swiper-----------------
var swiper3 = new Swiper(".mySwiper3", {
    slidesPerView: 1,
    spaceBetween: 15,
    // slidesPerGroup: 3,
    loop: true,
    // loopFillGroupWithBlank: true,
    navigation: {
        nextEl: ".BN3",
        prevEl: ".BP3",
    },
    breakpoints: {
        575: {
            slidesPerView: 1.5,
            spaceBetween: 30
        }
    }
});