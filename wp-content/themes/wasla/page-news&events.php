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
            </div> -->
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
<section class="container px-5" id="news-container" style="margin-top: clamp(50px,7vw,93px); margin-bottom: clamp(50px,10vw,144px);">
    <p class="fs-30 fw-600 pt-5" style="color: #403c34">News</p>
    <p class="fs-15 fw-500 pb-5" style="color: rgba(100, 100, 100, 0.91);">Lates updates</p>

    <?php
    $loop = new WP_Query(array('post_type' => 'news', 'posts_per_page' => 2));
    $postCount = $loop->post_count;
    while ($loop->have_posts()) : $loop->the_post(); ?>

        <!-- <div class="row">
            <div class=" col-sm mb-5 mb-sm-0">
                <img src="<?php the_field("news_image") ?>" class="news-event-img1" alt="">
            </div>
            <div class=" col-sm news-event-para1">
                <p class="fs-22 fw-600 mb-1" style="color: rgba(25, 25, 25, 0.94);"><?php the_field("news_1_topic") ?></p>
                <p class="fs-16 fw-600 mb-5" style="color: #aeaeae;"><?php the_field("date") ?></p>
                <p class="fs-15 fw-500 mb-4" style="color: #696969; text-align: justify;"><?php the_field("paragraph") ?></p>

                <a href="#" class="fs-15 fw-600" style="color: rgba(48, 48, 48, 0.77); text-decoration: none">Read more
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/next-arrow.svg" class="read-more-arrow ms-2" alt="" />
                </a>


            </div>
        </div> -->

        <div class="row latest-news">
            <div class="latest-news-col-1 col-sm mb-5 mb-sm-0">
                <img src="<?php the_field("news_main_image") ?>" class="news-event-img1" alt="">
            </div>
            <div data-aos="fade-up" class="latest-news-col-2 col-sm news-event-para1">
                <p class="fs-22 fw-600 mb-1" style="color: rgba(25, 25, 25, 0.94);"><?php the_title()?></p>
                <p class="fs-16 fw-600 mb-5" style="color: #aeaeae;"><?php the_field("date") ?></p>
                <p class="fs-15 fw-500 mb-4 text-trunkater" style="color: #696969; text-align: justify;"><?php echo wp_strip_all_tags(get_field("news_content"), true);  ?></p>

                <a href="<?php the_permalink(); ?>" class="fs-15 fw-600" style="color: rgba(48, 48, 48, 0.77); text-decoration: none">Read more
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/next-arrow.svg" class="read-more-arrow ms-2" alt="" />
                </a>


            </div>
        </div>

    <?php endwhile;
    wp_reset_query(); ?>



</section>
<!--/ Section - 03 (News)  -->

<!-- Section - 04 (News2)  -->
<!-- <section class="container px-5" style="margin-bottom: clamp(50px,10vw,145px);">
    <div class="row">
        <div class="col-sm news-event-para1 mb-5 mb-sm-0">
            <p class="fs-22 fw-600 mb-1" style="color: rgba(25, 25, 25, 0.94);"><?php the_field("news_2_topic") ?></p>
            <p class="fs-16 fw-600 mb-5" style="color: #aeaeae;"><?php the_field("date_2") ?></p>
            <p class="fs-15 fw-500 mb-4" style="color: #696969;text-align: justify;"><?php the_field("paragraph_2") ?></p>

            <a href="#" class="fs-15 fw-600" style="color: rgba(48, 48, 48, 0.77); text-decoration: none">Read more
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/next-arrow.svg" class="read-more-arrow ms-2" alt="" />
            </a>

        </div>
        <div class="col-sm news-event-pic2 align-items-end d-flex flex-column">
            <img src="<?php the_field("news_image_2") ?>" class="news-event-img2" alt="">
        </div>
    </div>
</section> --> 
<!--/ Section - 04 (News2)  -->

<!-- Section - 05 (Old Topics)  -->
<section class="container px-5">
    <p class="fs-15 fw-600 pt-4" style="color: rgba(48, 48, 48, 0.71); border-top: 1px solid rgba(0, 0, 0, 0.1); margin-right: clamp(50px,8vw,115px); margin-bottom: clamp(50px,5vw,66px);">Old Topics</p>

    <div class="swiper mySwiper4">
        <div class="swiper-wrapper">

            <?php
            $loop = new WP_Query(array('post_type' => 'news', 'posts_per_page' => -1));
            $postCount = $loop->post_count;
            while ($loop->have_posts()) : $loop->the_post(); ?>

                <div class="swiper-slide">
                    <a href="<?php the_permalink(); ?>">
                        <div class=" position-relative text-start">
                            <div class="gallery-overlay w-100"></div>
                            <img src="<?php the_field("old_topic_image") ?>" alt="" />
                            <div class="position-absolute top-0 w-100 px-3">
                                <p class="fs-15 fw-600 pt-4" style="color: #fff;"><?php the_field("old_topic_date") ?></p>
                            </div>
                            <div class="position-absolute bottom-0 w-100 px-3">
                                <p class="fs-20 fw-500" style="color: rgba(255, 255, 255, 0.94);"><?php the_title() ?></p>
                                <p class="fs-15 fw-500" style="color: rgba(255, 255, 255, 0.94);"><?php the_field("old_topic_paragraph") ?></p>

                            </div>

                        </div>
                    </a>
                </div>

            <?php endwhile;
            wp_reset_query(); ?>



            <!-- <div class="swiper-slide">
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
            </div> -->

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