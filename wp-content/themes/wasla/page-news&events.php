<?php

/**
 * Template Name: News & events
 *
 * Created on : March 25, 2022
 * @author    : Nanduni Mihisaree
 */
get_header(); ?>


<!-- Section - 01 (Banner) -->
<section>
    <div class="d-flex justify-content-center align-items-end banner" style="background: url('<?php bloginfo('template_directory'); ?>/assets/images/pexels-pixabay.png') center center no-repeat ; background-size: cover;">

        <p class="fs-40 fw-600 text-center" style="color: #fff">News & Events</p>

    </div>
</section>
<!--/ Section - 01 (Banner) -->

<!-- Section - 02 (Events)  -->
<section class="mt-5" style="background-color: rgba(196, 196, 196, 0.23)">
    <p class="fs-30 fw-600 pt-5 px-3 px-lg-5" style="color: #403c34">Events</p>
    <p class="fs-15 fw-500 pb-5 px-3 px-lg-5" style="color: rgba(100, 100, 100, 0.91);">upcoming events</p>

    <div class="swiper mySwiper3 pb-3 pl-pr-10">
        <div class="swiper-wrapper">
            <div class="swiper-slide my-auto">
                <div class="row justify-content-between m-0">
                    <div class="col-lg-5 ps-0">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/Rectangle310-3.png" class="event-img" alt="" />
                    </div>

                    <div class="col-lg-6 my-auto">
                        <p class="fw-600" style="font-size: 22.7px; color: #000">
                            Summer Event
                        </p>

                        <div class="row g-0">
                            <p class="col-5 d-flex justify-content-between pe-3">
                                Name <span>:</span>
                            </p>
                            <p class="col-6">Proin volutpat</p>

                            <p class="col-5 d-flex justify-content-between pe-3">
                                Date <span>:</span>
                            </p>
                            <p class="col-6">12 January 2022</p>

                            <p class="col-5 d-flex justify-content-between pe-3">
                                Place <span>:</span>
                            </p>
                            <p class="col-6">placerat rutrum</p>

                            <p class="col-5 d-flex justify-content-between pe-3">
                                Description <span>:</span>
                            </p>
                            <p class="col-6">Phasellus quis justo viverra hejk.</p>
                        </div>

                        <div class="d-flex justify-content-center">
                            <a class="me-5" href="#">
                                <button class="nav-butt" style="width: 200px">
                                    More Details
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide my-auto">
                <div class="row justify-content-between m-0">
                    <div class="col-lg-5 ps-0">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/Rectangle310-2.png" class="event-img" alt="" />
                    </div>

                    <div class="col-lg-6 my-auto">
                        <p class="fw-600" style="font-size: 22.7px; color: #000">
                            Summer Event
                        </p>



                        <div class="row g-0">
                            <p class="col-5 d-flex justify-content-between pe-3">
                                Name <span>:</span>
                            </p>
                            <p class="col-6">Proin volutpat</p>

                            <p class="col-5 d-flex justify-content-between pe-3">
                                Date <span>:</span>
                            </p>
                            <p class="col-6">12 January 2022</p>

                            <p class="col-5 d-flex justify-content-between pe-3">
                                Place <span>:</span>
                            </p>
                            <p class="col-6">placerat rutrum</p>

                            <p class="col-5 d-flex justify-content-between pe-3">
                                Description <span>:</span>
                            </p>
                            <p class="col-6">Phasellus quis justo viverra hejk.</p>
                        </div>

                        <div class="d-flex justify-content-center">
                            <a class="me-5" href="#">
                                <button class="nav-butt" style="width: 200px">
                                    More Details
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-end m-0 pe-5 pb-5">
        <div class="swiper-button-prev BP3">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/group51.svg" style="transform: rotate(-180deg)" alt="" />
        </div>
        <div class="swiper-button-next BN3">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/group51.svg" alt="" />
        </div>
    </div>
</section>
<!--/ Section - 02 (Events)  -->

<!-- Section - 03 (News)  -->
<section class="container" style="margin-top: clamp(50px,7vw,93px); margin-bottom: clamp(50px,10vw,144px);">
    <p class="fs-30 fw-600 pt-5" style="color: #403c34">Events</p>
    <p class="fs-15 fw-500 pb-5" style="color: rgba(100, 100, 100, 0.91);">upcoming events</p>

    <div class="row">
        <div class="col">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/Rectangle310-1.png" class="news-event-img1" alt="">
        </div>
        <div class="col" style="padding-left: clamp(50px,9vw,131px);">
            <p class="fs-22 fw-600 mb-1" style="color: rgba(25, 25, 25, 0.94);">Proin luctus rutrum dolo lacinia</p>
            <p class="fs-16 fw-600 mb-5" style="color: #aeaeae;">22 Jully 2022</p>
            <p class="fs-15 fw-500 mb-4" style="color: #696969; max-width: 476px;text-align: justify;">Mauris facilisis libero vitae ex hendrerit, sit amet malesuada justo egestas. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean blandit lorem ut ligula facilisis, sit amet pulvinar eros efficitur. Phasellus sed tempus velit, in porttitor dui. Suspendisse efficitur ligula ac facilisis iaculis. Suspendisse congue, mi et tincidunt condimentum, arcu dolor efficitur nibh, id suscipit libero magna in sem. </p>

            <a href="#" class="fs-15 fw-600" style="color: rgba(48, 48, 48, 0.77); text-decoration: none">Read more
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/next-arrow.svg" class="read-more-arrow ms-2" alt="" />
            </a>


        </div>
    </div>
</section>
<!--/ Section - 03 (News)  -->

<!-- Section - 04 (News2)  -->
<section class="container" style="margin-bottom: clamp(50px,10vw,145px);">

    <div class="row">

        <div class="col" style="padding-left: clamp(50px,9vw,131px);">
            <p class="fs-22 fw-600 mb-1" style="color: rgba(25, 25, 25, 0.94);">Donec nec volutpat ante Suspendisse</p>
            <p class="fs-16 fw-600 mb-5" style="color: #aeaeae;">22 December 2021</p>
            <p class="fs-15 fw-500 mb-4" style="color: #696969; max-width: 476px;text-align: justify;">Mauris facilisis libero vitae ex hendrerit, sit amet malesuada justo egestas. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean blandit lorem ut ligula facilisis, sit amet pulvinar eros efficitur. Phasellus sed tempus velit, in porttitor dui. Suspendisse efficitur ligula ac facilisis iaculis. Suspendisse congue, mi et tincidunt condimentum.
            </p>

            <a href="#" class="fs-15 fw-600" style="color: rgba(48, 48, 48, 0.77); text-decoration: none">Read more
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/next-arrow.svg" class="read-more-arrow ms-2" alt="" />
            </a>

        </div>
        <div class="col ps-5">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/Rectangle310.png" class="news-event-img2" alt="">
        </div>
    </div>
</section>
<!--/ Section - 04 (News2)  -->

<!-- Section - 05 (Old Topics)  -->
<section class="container">
    <p class="fs-15 fw-600 pt-4" style="color: rgba(48, 48, 48, 0.71); border-top: 1px solid rgba(0, 0, 0, 0.1); margin-right: clamp(50px,8vw,115px); margin-bottom: clamp(50px,5vw,66px);">Old Topics</p>

    <div class="swiper mySwiper4" style="margin-right: clamp(50px,8vw,115px);">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class=" position-relative text-start">
                    <div class="gallery-overlay w-100"></div>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/group25-2.png" alt="" />
                    <div class="position-absolute top-0 w-100 px-3">
                        <p class="fs-15 fw-600 pt-4" style="color: #fff;">22 Jull 2021</p>
                    </div>
                    <div class="position-absolute bottom-0 w-100 px-3">
                        <p class="fs-20 fw-500" style="color: rgba(255, 255, 255, 0.94);">Mauris lectus dolor blandit mattis a tincidunt libero sem</p>
                    </div>

                </div>
            </div>
            <div class="swiper-slide">
                <div class=" position-relative text-start">
                    <div class="gallery-overlay w-100"></div>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/group25-1.png" alt="" />
                    <div class="position-absolute top-0 w-100 px-3">
                        <p class="fs-15 fw-600 pt-4" style="color: #fff;">22 May 2021</p>
                    </div>
                    <div class="position-absolute bottom-0 w-100 px-3">
                        <p class="fs-20 fw-500" style="color: rgba(255, 255, 255, 0.94);"> Mauris facilisis libero hendrerit</p>
                        <p class="fs-15 fw-500" style="color: rgba(255, 255, 255, 0.94);">Cras id euismod velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</p>
                    </div>

                </div>
            </div>
            <div class="swiper-slide">
                <div class=" position-relative text-start">
                    <div class="gallery-overlay w-100"></div>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/group25.png" alt="" />
                    <div class="position-absolute top-0 w-100 px-3">
                        <p class="fs-15 fw-600 pt-4" style="color: #fff;">22 March 2021</p>
                    </div>
                    <div class="position-absolute bottom-0 w-100 px-3">
                        <p class="fs-20 fw-500" style="color: rgba(255, 255, 255, 0.94);">Curabitur lacinia justo laoreet</p>
                        <p class="fs-15 fw-500" style="color: rgba(255, 255, 255, 0.94);">Integer pellentesque dui posuere justo congue, eget blandit enim pretium. Aenean vel dui et nulla viverra ultricies .</p>
                    </div>

                </div>
            </div>
            <div class="swiper-slide">
                <div class=" position-relative text-start">
                    <div class="gallery-overlay w-100"></div>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/group25-2.png" alt="" />
                    <div class="position-absolute top-0 w-100 px-3">
                        <p class="fs-15 fw-600 pt-4" style="color: #fff;">22 Jull 2021</p>
                    </div>
                    <div class="position-absolute bottom-0 w-100 px-3">
                        <p class="fs-20 fw-500" style="color: rgba(255, 255, 255, 0.94);">Mauris lectus dolor blandit mattis a tincidunt libero sem</p>
                    </div>

                </div>
            </div>
            <div class="swiper-slide">
                <div class=" position-relative text-start">
                    <div class="gallery-overlay w-100"></div>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/group25-1.png" alt="" />
                    <div class="position-absolute top-0 w-100 px-3">
                        <p class="fs-15 fw-600 pt-4" style="color: #fff;">22 May 2021</p>
                    </div>
                    <div class="position-absolute bottom-0 w-100 px-3">
                        <p class="fs-20 fw-500" style="color: rgba(255, 255, 255, 0.94);"> Mauris facilisis libero hendrerit</p>
                        <p class="fs-15 fw-500" style="color: rgba(255, 255, 255, 0.94);">Cras id euismod velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</p>
                    </div>

                </div>
            </div>
            <div class="swiper-slide">
                <div class=" position-relative text-start">
                    <div class="gallery-overlay w-100"></div>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/group25.png" alt="" />
                    <div class="position-absolute top-0 w-100 px-3">
                        <p class="fs-15 fw-600 pt-4" style="color: #fff;">22 March 2021</p>
                    </div>
                    <div class="position-absolute bottom-0 w-100 px-3">
                        <p class="fs-20 fw-500" style="color: rgba(255, 255, 255, 0.94);">Curabitur lacinia justo laoreet</p>
                        <p class="fs-15 fw-500" style="color: rgba(255, 255, 255, 0.94);">Integer pellentesque dui posuere justo congue, eget blandit enim pretium. Aenean vel dui et nulla viverra ultricies .</p>
                    </div>

                </div>
            </div>
           
        </div>
        <div class="row justify-content-end m-0 pt-5" style="padding-bottom: clamp(50px,6vw,91px);">
            <div class="swiper-button-prev BP4">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/group51.svg" style="transform: rotate(-180deg)" alt="" />
            </div>
            <div class="swiper-button-next BN4">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/group51.svg" alt="" />
            </div>
        </div>
    </div>

</section>
<!--/ Section - 05 (Old Topics)  -->


<?php get_footer() ?>