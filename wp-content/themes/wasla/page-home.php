<?php

/**
 * Template Name: Home
 *
 * Created on : March 25, 2022
 * @author    : Nanduni Mihisaree
 */
get_header(); ?>



<!-- Section - 01 (Banner) -->
<section>
    <div class="swiper mySwiper1">
        <div class="swiper-wrapper">

            <?php if (have_rows('home_banner')) : ?>
                <?php while (have_rows('home_banner')) : the_row(); ?>

                    <div class="swiper-slide" style="background: url('<?php the_sub_field("banner_image") ?>') center center no-repeat">
                        <!-- <div class="row"> -->
                          

                            <!-- <div class="col"> -->

                                <div class="pl-pr-10">
                                    <p class="fs-50 fw-bold" style="color: #fcfcfc; max-width: 755px">
                                        <?php the_sub_field("header") ?>
                                    </p>
                                    <p class="fs-20 fw-500" style="color: #fff; max-width: 402px">
                                        <?php the_sub_field("sub_header") ?>
                                    </p>
                                </div>
                            <!-- </div> -->

                        <!-- </div> -->

                        <div class="bottom-0 d-grid mb-2 ms-3 position-absolute d-none d-sm-block" data-aos="fade-up">
                                <div class=""><a href=""><img src="<?php bloginfo('template_directory'); ?>/assets/images/fb.png" class="social-icon-banner"  alt=""></a></div>
                                <div class=""><a href=""><img src="<?php bloginfo('template_directory'); ?>/assets/images/in.png" class="social-icon-banner" alt=""></a></div>
                                <div class=""><a href=""><img src="<?php bloginfo('template_directory'); ?>/assets/images/twitter.png" class="social-icon-banner"  alt=""></a></div>
                            </div>

                    </div>


                <?php endwhile; ?>
            <?php endif; ?>

            <!-- <div class="swiper-slide" style="background: url('<?php bloginfo('template_directory'); ?>/assets/images/banner.png') center center no-repeat">
                <div class="pl-pr-10">
                    <p class="fs-50 fw-bold" style="color: #fcfcfc; max-width: 755px">
                        Maecenas a orci Praesent pulvinar
                    </p>
                    <p class="fs-20 fw-500" style="color: #fff; max-width: 402px">
                        Sed facilisis nibh quis aliquam laoreet. blandit, massa ac cursus
                        egestas.
                    </p>
                </div>
            </div> -->

        </div>
        <div class="position-absolute px-3 top-50 d-flex justify-content-between w-100" style="transform: translateY(-50%); z-index: 1">
            <div class="swiper-button-prev BP"></div>
            <div class="swiper-button-next BN"></div>
        </div>

        <div class="swiper-pagination BPAG"></div>
    </div>
</section>
<!--/ Section - 01 (Banner) -->

<!-- Section - 02 (Next Event) -->

<section class="pl-pr-10">
    <div data-aos="fade-up" class="row justify-content-end m-0" style="transform: translateY(-150px); position: relative; z-index: 1">
        <div class="banner-box col-lg-5 col-md-5 pe-5 ps-4 py-4">
            <p class="fs-18 fw-bold" style="color: #575151">Next Event</p>
            <p class="fs-18 fw-500" style="color: #595959"><?php the_field("next_event_introduction") ?></p>
            <a href="" style="text-decoration: none;">
                <p class="fs-18 fw-600 m-0" style="color: #5d5d5d; text-align: end;">
                    Read More <img src="<?php bloginfo('template_directory'); ?>/assets/images/next-arrow.svg" alt="" />
                </p>
            </a>

        </div>
    </div>
</section>

<!--/ Section - 02 (Next Event) -->

<!-- Section - 03  (BECOME A MEMBER)-->
<section>
    <div class="row m-0" style="background: url('<?php bloginfo('template_directory'); ?>/assets/images/Group40.png') center center no-repeat">
        <div class="col-lg-6 px-0 pe-lg-5">
            <img src=" <?php the_field("section_2_image") ?>" alt="" class="h-100 w-100 pe-lg-5" />
        </div>

        <div class="col-lg-5">
            <p class="fs-48 fw-600" style="color: #373634; margin-bottom: 26px"><?php the_field("topic") ?></p>
            <p class="fs-15" style="color: #413e39; max-width: 649px"> <?php the_field("description") ?></p>
            <div class="row" style="margin-top: clamp(50px, 8vw, 100px)">
                <div class="col-md-5">
                    <a class="" data-bs-toggle="modal" data-bs-target="#ModalBox1" href="#">
                        <button class="nav-butt">BECOME A MEMBER</button>
                    </a>
                </div>
                <div class="col-md-auto align-items-center d-flex">
                    <a href="#" class="fs-15" style="color: #4e4d4c; text-decoration: none">Read more about WASLA
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/Arrow 10.png" class="read-more-arrow" alt="" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Section - 03  (BECOME A MEMBER)-->

<!-- Section - 04  (Our Activities)-->
<section style="margin-top: 127px">
    <div class="row pl-pr-10 pe-lg-5 m-0">
        <div class="col-auto ps-0">
            <p class="fs-30 fw-600 mb-0" style="color: #403c34">Our Activities</p>
        </div>
        <div class="col pe-0">
            <div class="row m-0 align-items-center justify-content-end">
                <hr class="col d-none d-sm-block m-0" />
                <div class="col-auto d-flex pe-0">
                    <div class="swiper-button-prev me-4 BP2">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/group51.svg" style="transform: rotate(-180deg)" alt="" />
                    </div>
                    <div class="swiper-button-next BN2">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/group51.svg" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="swiper mySwiper2 pl-pr-10 pe-3 h-100">
        <div class="swiper-wrapper">

            <?php if (have_rows('our_activities_repeater')) : ?>
                <?php while (have_rows('our_activities_repeater')) : the_row(); ?>

                    <div class="swiper-slide h-auto" style="
                            background: url('<?php the_sub_field("background_image") ?>') center center no-repeat;
                            background-size: cover;">
                        <p class="fs-50 fw-600 mb-4" style="color: #e7c96f"><?php the_sub_field("number") ?></p>
                        <p class="fs-20" style="color: #2e2c2a"><?php the_sub_field("activity_description") ?></p>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>



            <!-- <div class="swiper-slide h-auto" style="
                            background: url('<?php bloginfo('template_directory'); ?>/assets/images/Group\ 48-2.png') center center no-repeat;
                            background-size: cover;
                        ">
                <p class="fs-50 fw-600" style="color: #e7c96f">2.</p>
                <p class="fs-20" style="color: #2e2c2a">
                    Proin egestas ipsum in tellus lacinia pellentesque. Praesent maximus
                    rutrum dolor. Duis quis blandit massa. Cras tempus aliquet massa, in
                    commodo purus consectetur id. Class aptent taciti sociosqu.
                </p>
            </div>

            <div class="swiper-slide h-auto" style="
                            background: url('<?php bloginfo('template_directory'); ?>/assets/images/Group\ 48-1.png') center center no-repeat;
                            background-size: cover;
                        ">
                <p class="fs-50 fw-600 mb-4" style="color: #e7c96f">1.</p>
                <p class="fs-20" style="color: #2e2c2a">
                    Etiam vitae ipsum vel dui molestie ullamcorper. Sed commodo, enim ut
                    sodales iaculis, turpis magna vehicula magna, nec dignissim orci nunc
                    vitae massa. Nunc eget ultrices est. Pellentesque commodo, libero in
                    bibendum aliquet, tortor lorem ultrices lectus.
                </p>
            </div>

            <div class="swiper-slide h-auto" style="
                            background: url('<?php bloginfo('template_directory'); ?>/assets/images/Group\ 48-1.png') center center no-repeat;
                            background-size: cover;
                        ">
                <p class="fs-50 fw-600 mb-4" style="color: #e7c96f">1.</p>
                <p class="fs-20" style="color: #2e2c2a">
                    Etiam vitae ipsum vel dui molestie ullamcorper. Sed commodo, enim ut
                    sodales iaculis, turpis magna vehicula magna, nec dignissim orci nunc
                    vitae massa. Nunc eget ultrices est. Pellentesque commodo, libero in
                    bibendum aliquet, tortor lorem ultrices lectus.
                </p>
            </div>

            <div class="swiper-slide h-auto" style="
                            background: url('<?php bloginfo('template_directory'); ?>/assets/images/Group\ 48-1.png') center center no-repeat;
                            background-size: cover;
                        ">
                <p class="fs-50 fw-600 mb-4" style="color: #e7c96f">1.</p>
                <p class="fs-20" style="color: #2e2c2a">
                    Etiam vitae ipsum vel dui molestie ullamcorper. Sed commodo, enim ut
                    sodales iaculis, turpis magna vehicula magna, nec dignissim orci nunc
                    vitae massa. Nunc eget ultrices est. Pellentesque commodo, libero in
                    bibendum aliquet, tortor lorem ultrices lectus.
                </p>
            </div> -->
        </div>
    </div>
</section>
<!--/ Section - 04  (Our Activities)-->

<!-- Section - 05 (Events)  -->
<section class="" style="background-color: rgba(196, 196, 196, 0.23)">
    <p class="fs-30 fw-600 py-5 px-3 px-lg-5" style="color: #403c34">Events</p>

    <div class="swiper mySwiper3 pb-3 pl-pr-10">
        <div class="swiper-wrapper">


            <?php
            $loop = new WP_Query(array('post_type' => 'event', 'posts_per_page' => -1));  
            $postCount = $loop->post_count;
            while ($loop->have_posts()) : $loop->the_post(); ?>
                <div class="swiper-slide my-auto">
                    <div class="row justify-content-between ">
                        <div class="col-lg-5 ps-lg-0 pt-3 pt-lg-0">
                            <img src="<?php the_field("event_image") ?>" class="event-img" alt="" />
                        </div>

                        <div class="col-lg-6 my-auto">
                            <p class="fw-600" style="font-size: 22.7px; color: #000">
                                <?php the_title() ?>
                            </p>

                            <div class="row g-0">

                                <?php if (have_rows('detail_repeater')) : ?>
                                    <?php while (have_rows('detail_repeater')) : the_row(); ?>

                                        <p class="col-5 d-flex justify-content-between pe-3">
                                            <?php the_sub_field("title") ?> <span>:</span>
                                        </p>
                                        <p class="col-6"><?php the_sub_field("answers") ?> </p>

                                        <!-- <p class="col-5 d-flex justify-content-between pe-3">
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
                                        <p class="col-6">Phasellus quis justo viverra hejk.</p> -->

                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>

                            <div class="d-flex justify-content-center mb-5 mb-lg-0 mt-5">
                                <a class="me-5" href="<?php the_permalink(); ?>">
                                    <button class="nav-butt" style="width: 200px">
                                        More Details
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endwhile;
            wp_reset_query(); ?>

            <!-- <div class="swiper-slide my-auto">
                <div class="row justify-content-between m-0">
                    <div class="col-lg-5 ps-0">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/Group21.png" class="event-img" alt="" />
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
                            <p class="col-6">Phasellus quis justo viverra.</p>
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
            </div> -->
        </div>
    </div>

    <div class="row justify-content-end m-0 pe-5 py-5">
        <div class="swiper-button-prev BP3">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/group51.svg" style="transform: rotate(-180deg)" alt="" />
        </div>
        <div class="swiper-button-next BN3">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/group51.svg" alt="" />
        </div>
    </div>
</section>
<!--/ Section - 05 (Events)  -->

<!-- Section - 06 (Gallery)  -->
<section>
    <!-- <p class="fs-30 fw-600 py-5 px-3 px-lg-5" style="color: #403c34">Gallery</p> -->
    
    <div class="row py-5 align-items-center m-0">
        <div class="col">
            <p class="fs-30 fw-600 px-3 px-lg-5" style="color: #403c34; ">Gallery</p>
        </div>
        <div class="col-auto px-5">
            <a class="text-decoration-none" href="<?php bloginfo('url'); ?>/gallery/">
                <p class="fs-14" style="color: #4e4d4c;">View Gallery <img src="<?php bloginfo('template_directory'); ?>/assets/images/next-arrow-white.svg" alt=""></p>
            </a>
        </div>
    </div>


    <div class="row m-0 px-sm-5">
        <div data-aos="fade-up" class="col-12 col-sm-6 px-0 pe-sm-3 position-relative mb-4 mb-lg-0 px-0 mb-md-0">
            <div class="gallery-overlay"></div>
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/group42.png" class="gallery-img" alt="" />
            <div class="row position-absolute bottom-0 w-100 px-3">
                <div class="col">
                    <a href=""><img src="<?php bloginfo('template_directory'); ?>/assets/images/next-arrow-white.svg" alt="" /></a>
                </div>
                <div class="col">
                    <p class="fs-14 fw-500 text-end" style="color: #f4f4f4">03/10/2021</p>
                    <p class="fs-22 fw-500 text-end" style="color: #fff">
                        quis suscipit augue
                    </p>
                </div>
            </div>
        </div>
        <div data-aos="fade-up" class="col-12 col-sm-6 px-0 ps-sm-3 position-relative">
            <div class="gallery-overlay"></div>
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/group41.png" class="gallery-img" alt="" />
            <div class="row position-absolute bottom-0 w-100 px-3">
                <div class="col">
                    <a href=""><img src="<?php bloginfo('template_directory'); ?>/assets/images/next-arrow-white.svg" alt="" /></a>
                </div>
                <div class="col">
                    <p class="fs-14 fw-500 text-end" style="color: #f4f4f4">03/10/2021</p>
                    <p class="fs-22 fw-500 text-end" style="color: #fff">
                        vulputate gravida
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Section - 06 (Gallery)  -->

<!-- Section - 07 (News & Updates)  -->
<section class="overflow-hidden" style="padding-bottom: clamp(50px,15vw,211px);">
    <div class="row pb-5 align-items-center" style="padding-top: clamp(50px,10vw,137px);">
        <div class="col">
            <p class="fs-30 fw-600 px-3 px-lg-5" style="color: #403c34; ">News & Updates</p>
        </div>
        <div class="col-auto px-5">
            <a class="text-decoration-none" href="<?php bloginfo('url'); ?>/news-and-events/">
                <p class="fs-14" style="color: #4e4d4c;">View News<img src="<?php bloginfo('template_directory'); ?>/assets/images/next-arrow-white.svg" alt=""></p>
            </a>
        </div>
    </div>

    <div class="row px-sm-5">
        <div data-aos="fade-up" class="col-12 col-sm-5 pe-sm-3 position-relative mb-4 mb-lg-0">
            <div class="position-relative">
                <div class="gallery-overlay w-100"></div>
                <img src="<?php the_field("news_1_image") ?>" class="news-img" alt="" />
            </div>
            <div class="position-absolute top-0 px-3">
                <p class="fs-13 fw-600 pt-4" style="color: #fff;"><?php the_field("news_1_date") ?></p>
            </div>
            <div class="position-absolute bottom-0 px-3">
                <p class="fs-20 fw-500" style="color: #fff;"><?php the_field("news_1_header") ?></p>
                <p class="fs-15 fw-500" style="color: #efefef;"><?php the_field("news_1_paragraph") ?></p>
            </div>
        </div>

        <div class="col-sm  position-relative mb-4 mb-lg-0">

            <div data-aos="fade-up" class=" position-relative mb-4">
                <div class="gallery-overlay w-100"></div>
                <img src="<?php the_field("news_2_image") ?>" class="news-img2" alt="" />
                <div class="position-absolute top-0 w-100 px-3">
                    <p class="fs-13 fw-600 pt-4" style="color: #fff;"><?php the_field("news_2_date") ?></p>
                </div>
                <div class="position-absolute bottom-0 w-100 px-3">
                    <p class="fs-20 fw-500" style="color: #fff;"><?php the_field("news_2_header") ?></p>
                </div>

            </div>

            <div data-aos="fade-up" class=" position-relative">
                <div class="gallery-overlay w-100"></div>
                <img src="<?php the_field("news_3_image") ?>" class="news-img2" alt="" />
                <div class="position-absolute top-0 w-100 px-3">
                    <p class="fs-13 fw-600 pt-4" style="color: #fff;"><?php the_field("news_3_date") ?></p>
                </div>
                <div class="position-absolute bottom-0 w-100 px-3">
                    <p class="fs-20 fw-500" style="color: #fff;"><?php the_field("news_3_header") ?></p>

                </div>

            </div>

        </div>

        <div data-aos="fade-up" class="col-sm ps-sm-3 position-relative">
            <div class="position-relative">
                <div class="gallery-overlay w-100"></div>
                <img src="<?php the_field("news_4_image") ?>" class="news-img" alt="" />
            </div>

            <div class="position-absolute top-0 px-3">
                <p class="fs-13 fw-600 pt-4" style="color: #fff;"><?php the_field("news_4_date") ?></p>
            </div>
            <div class="position-absolute bottom-0 px-3">
                <p class="fs-20 fw-500" style="color: #fff;"><?php the_field("news_4_header") ?></p>
                <p class="fs-15 fw-500" style="color: #efefef;"><?php the_field("news_4_paragraph") ?></p>



            </div>
        </div>
    </div>

</section>
<!--/ Section - 07 (News & Updates)  -->


<!-- Section - 08 (Clients)  -->

<section class="py-5" style="background: url('<?php bloginfo('template_directory'); ?>/assets/images/group47.png') center center no-repeat">
    <p class="fs-30 fw-600 px-lg-5 ps-md-4 ps-3" style="color: #fff;">Our Partners and Clients</p>
    <div class="row m-0" style="padding-left: clamp(50px,7vw,88px) ; padding-right: clamp(50px,7vw,88px) ; ">

        <?php if (have_rows('logo_section_repeater', 'option')) : ?>
            <?php while (have_rows('logo_section_repeater', 'option')) : the_row(); ?>
                <div class="col-6 col-sm-2">
                    <img src="<?php the_sub_field("logo_image") ?>" class="client-img" alt="">
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

        <!-- <div class="col-6 col-sm-2">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/client2.png" class="client-img" alt="">
        </div>
        <div class="col-6 col-sm-2">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/client3.png" class="client-img" alt="">
        </div>
        <div class="col-6 col-sm-2">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/client1.png" class="client-img" alt="">
        </div>
        <div class="col-6 col-sm-2">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/client2.png" class="client-img" alt="">
        </div>
        <div class="col-6 col-sm-2">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/client3.png" class="client-img" alt="">
        </div>
        <div class="col-6 col-sm-2">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/client1.png" class="client-img" alt="">
        </div>
        <div class="col-6 col-sm-2">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/client2.png" class="client-img" alt="">
        </div>
        <div class="col-6 col-sm-2">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/client3.png" class="client-img" alt="">
        </div>
        <div class="col-6 col-sm-2">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/client1.png" class="client-img" alt="">
        </div>
        <div class="col-6 col-sm-2">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/client2.png" class="client-img" alt="">
        </div>
        <div class="col-6 col-sm-2">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/client3.png" class="client-img" alt="">
        </div> -->
    </div>

</section>
<!--/ Section - 08 (Clients)  -->



<?php get_footer() ?>