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
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
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
    centeredSlides: true,
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
    },
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },

});



// gallery-load-more------
// $(function () {
//     $(".gallery-col").slice(0, 6).show();
//     $("body").on('click touchstart', '.load-more', function (e) {
//         e.preventDefault();
//         $(".gallery-col").find(".hidden").removeClass("hidden");
//         // $(".gallery-col:hidden").slice(0, 6).slideDown();
//         if ($(".gallery-col:hidden").length == 0) {
//             $(".load-more").css('visibility', 'hidden');
//         }
//         // $('html,body').animate({
//         //     scrollTop: $(this).offset().top
//         // }, 1000);
//     });
// });

// news & events swiper----------------
var swiper4 = new Swiper(".mySwiper4", {
    slidesPerView: 'auto',
    spaceBetween: 30,
    navigation: {
        nextEl: ".BN4",
        prevEl: ".BP4",
    },
    breakpoints: {
        768: {
            slidesPerView: 3,
            spaceBetween: 30
        },

    }
});

// about us swiper------------------
var swiper5 = new Swiper(".mySwiper5", {
    slidesPerView: 'auto',
    spaceBetween: 80,
    pagination: {
        el: ".BPAG5",
        clickable: true,
    },
    navigation: {
        nextEl: ".BN5",
        prevEl: ".BP5",
    },
    breakpoints: {
        768: {
            slidesPerView: 3,
            spaceBetween: 30
        },

    }
});


// navbar----------------
var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("main-navbar").style.top = "0";
    }
    else if (document.body.scrollTop >= 50 || document.documentElement.scrollTop >= 50) {
        document.getElementById("main-navbar").style.top = "-110px";
    }
    prevScrollpos = currentScrollPos;
}
$(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
        $('#main-navbar').addClass('nav-shadow');
    } else {
        $('#main-navbar').removeClass('nav-shadow');
    }
});


//   isotope- dropdown 2 ----------------

var $grid = $(".gallery-container").isotope({
    itemSelector: ".gallery-col",
});

$(".gallery-dropdown2").on("change", function () {
    var filterValue = this.value;
    $grid.isotope({ filter: filterValue });
});

$(document).ready(function () {
    // init Isotope
    var $container = $(".gallery-container").isotope({
        itemSelector: ".gallery-col",
        layoutMode: "fitRows",
    });
    // bind filter button click
    // $(".gallery-dropdowns").on("change", function () {
    //     var filterValue = this.value;
    //     // use filterFn if matches value
    //     $container.isotope({
    //         filter: filterValue,
    //     });
    // });

    // change is-checked class on buttons
    // $(".gallery-dropdown").each(function (i, buttonGroup) {
    //     var $buttonGroup = $(buttonGroup);
    //     $buttonGroup.on("click", "button", function () {
    //         $buttonGroup.find(".is-checked").removeClass("is-checked");
    //         $(this).addClass("is-checked");
    //     });
    // });

    //****************************
    // Isotope Load more button
    //****************************
    var initShow = 6; //number of items loaded on init & onclick load more button
    var counter = initShow; //counter for load more button
    var iso = $container.data("isotope"); // get Isotope instance

    loadMore(initShow); //execute function onload

    function loadMore(toShow) {
        $container.find(".hidden").removeClass("hidden");

        var hiddenElems = iso.filteredItems
            .slice(toShow, iso.filteredItems.length)
            .map(function (item) {
                return item.element;
            });
        $(hiddenElems).addClass("hidden");
        $container.isotope("layout");

        //when no more to load, hide show more button
        if (hiddenElems.length == 0) {
            jQuery("#load-more").hide();
        } else {
            jQuery("#load-more").show();
        }
    }

    //append load more button
    // $container.after('<button id="load-more"> Load More</button>');

    //when load more button clicked
    $("#load-more").click(function () {
        if ($(".gallery-dropdown2").data("clicked")) {
            //when filter button clicked, set initial value for counter
            counter = initShow;
            $(".gallery-dropdown2").data("clicked", false);
        } else {
            counter = counter;
        }
        counter = counter + initShow;
        loadMore(counter);
    });

    //when filter button clicked
    $(".gallery-dropdown2").click(function () {
        $(this).data("clicked", true);
        loadMore(initShow);
    });
});


//   isotope- dropdown 1 ----------------

var $grid = $(".gallery-container").isotope({
    itemSelector: ".gallery-col",
});

$(".gallery-dropdown1").on("change", function () {
    var filterValue = this.value;
    $grid.isotope({ filter: filterValue });
});

$(document).ready(function () {
    // init Isotope
    var $container = $(".gallery-container").isotope({
        itemSelector: ".gallery-col",
        layoutMode: "fitRows",
    });
    // bind filter button click
    // $(".gallery-dropdowns").on("change", function () {
    //     var filterValue = this.value;
    //     // use filterFn if matches value
    //     $container.isotope({
    //         filter: filterValue,
    //     });
    // });

    // change is-checked class on buttons
    // $(".gallery-dropdown").each(function (i, buttonGroup) {
    //     var $buttonGroup = $(buttonGroup);
    //     $buttonGroup.on("click", "button", function () {
    //         $buttonGroup.find(".is-checked").removeClass("is-checked");
    //         $(this).addClass("is-checked");
    //     });
    // });

    //****************************
    // Isotope Load more button
    //****************************
    var initShow = 6; //number of items loaded on init & onclick load more button
    var counter = initShow; //counter for load more button
    var iso = $container.data("isotope"); // get Isotope instance

    loadMore(initShow); //execute function onload

    function loadMore(toShow) {
        $container.find(".hidden").removeClass("hidden");

        var hiddenElems = iso.filteredItems
            .slice(toShow, iso.filteredItems.length)
            .map(function (item) {
                return item.element;
            });
        $(hiddenElems).addClass("hidden");
        $container.isotope("layout");

        //when no more to load, hide show more button
        if (hiddenElems.length == 0) {
            jQuery("#load-more").hide();
        } else {
            jQuery("#load-more").show();
        }
    }

    //append load more button
    // $container.after('<button id="load-more"> Load More</button>');

    //when load more button clicked
    $("#load-more").click(function () {
        if ($(".gallery-dropdown1").data("clicked")) {
            //when filter button clicked, set initial value for counter
            counter = initShow;
            $(".gallery-dropdown1").data("clicked", false);
        } else {
            counter = counter;
        }
        counter = counter + initShow;
        loadMore(counter);
    });

    //when filter button clicked
    $(".gallery-dropdown1").click(function () {
        $(this).data("clicked", true);
        loadMore(initShow);
    });
});

// AOS Animation-------------
  AOS.init({
      once: true,
      
  });
