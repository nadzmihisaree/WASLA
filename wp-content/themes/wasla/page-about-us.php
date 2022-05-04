<?php

/**
 * Template Name: About us
 *
 * Created on : March 25, 2022
 * @author    : Nanduni Mihisaree
 */
get_header(); ?>

<!-- Section - 01 (Banner) -->
<section>
    <div class="d-flex justify-content-center align-items-end banner" style="background: url('<?php bloginfo('template_directory'); ?>/assets/images/about-banner.png') top center no-repeat ; background-size: cover;">

        <p class="fs-40 fw-600 text-center" style="color: #fff">About Us</p>

    </div>
</section>
<!--/ Section - 01 (Banner) -->

<!-- Section - 02 (Who We Are) -->
<section style="padding-top: clamp(50px,7vw,88px);padding-bottom: clamp(50px,7vw,78px);">
    <div class="row m-0">
        <div class="col-sm" style="padding-left: clamp(50px,7vw,92px);padding-right: clamp(50px,7vw,85px);">
            <p class="fs-40 fw-600" style="color: #373634;"><?php the_field("heading") ?></p>
            <p class="fs-15" style="color: #413e39; text-align:justify"><?php the_field("paragraph") ?></p>
        </div>
        <div class="col-sm p-0">
            <img src="<?php the_field("image") ?>" class="about1" alt="">
        </div>
    </div>
</section>

<!--/ Section - 02 (Who We Are) -->

<!-- Section - 03 (Our Vision) -->
<section class="py-5" style="background-color: rgba(196, 196, 196, 0.09);">
    <div class="mx-auto" style="max-width: 649px;">
        <div data-aos="zoom-in-up" class="">
            <p class="fs-40 fw-600" style="color: #373634;text-align: center;">Our Vision</p>
            <p class="fs-20 mb-5" style="color: #413e39;; font-family: 'Paprika', cursive; text-align: center;"><?php the_field("vision") ?></p>

        </div>
        <div data-aos="zoom-in-up" class="">
            <p class="fs-40 fw-600" style="color: #373634;text-align: center;">Our Mission</p>
            <p class="fs-20" style="color: #413e39;; font-family: 'Paprika', cursive; text-align: center;"><?php the_field("mission") ?></p>

        </div>


    </div>
</section>
<!-- Section - 03 (Our Vision) -->


<!-- Section - 04 (swiper) -->
<section class="container px-5" style=" padding-top: clamp(50px,8vw,121px);padding-bottom: clamp(50px,8vw,121px);">

    <p class="fs-30 fw-600 mb-5" style="color: #373634;">Our Management</p>

    <div class="swiper mySwiper5">
        <div class="swiper-wrapper">

            <?php if (have_rows('management_repeater')) : ?>
                <?php while (have_rows('management_repeater')) : the_row(); ?>

                    <div class="swiper-slide">
                        <div class=" position-relative text-start">
                            <div class="gallery-overlay w-100"></div>
                            <img src="<?php the_sub_field("person_image") ?>" alt="" />

                            <div class="position-absolute bottom-0 w-100 px-3">
                                <p class="person_name fs-18 fw-bold" style="color: #fff;"><?php the_sub_field("person_name") ?></p>
                                <p class="fs-15" style="color: #fff;"><?php the_sub_field("designation") ?></p>
                            </div>

                        </div>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>

            <!-- <div class="swiper-slide">
                <div class=" position-relative text-start">
                    <div class="gallery-overlay w-100"></div>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/about3.png" alt="" />

                    <div class="position-absolute bottom-0 w-100 px-3">
                        <p class="fs-18 fw-bold" style="color: #fff;">Mr. Mauris tempus</p>
                        <p class="fs-15" style="color: #fff;">Secretary</p>
                    </div>

                </div>
            </div>
            <div class="swiper-slide">
                <div class=" position-relative text-start">
                    <div class="gallery-overlay w-100"></div>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/about4.png" alt="" />

                    <div class="position-absolute bottom-0 w-100 px-3">
                        <p class="fs-18 fw-bold" style="color: #fff;">Ms. tincidunt varius </p>
                        <p class="fs-15" style="color: #fff;">Secretary</p>
                    </div>

                </div>
            </div>
            <div class="swiper-slide">
                <div class=" position-relative text-start">
                    <div class="gallery-overlay w-100"></div>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/about2.png" alt="" />

                    <div class="position-absolute bottom-0 w-100 px-3">
                        <p class="fs-18 fw-bold" style="color: #fff;">Mr. pharetra pulvinar </p>
                        <p class="fs-15" style="color: #fff;">Presiden</p>
                    </div>

                </div>
            </div>
            <div class="swiper-slide">
                <div class=" position-relative text-start">
                    <div class="gallery-overlay w-100"></div>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/about3.png" alt="" />

                    <div class="position-absolute bottom-0 w-100 px-3">
                        <p class="fs-18 fw-bold" style="color: #fff;">Mr. Mauris tempus</p>
                        <p class="fs-15" style="color: #fff;">Secretary</p>
                    </div>

                </div>
            </div>
            <div class="swiper-slide">
                <div class=" position-relative text-start">
                    <div class="gallery-overlay w-100"></div>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/about4.png" alt="" />

                    <div class="position-absolute bottom-0 w-100 px-3">
                        <p class="fs-18 fw-bold" style="color: #fff;">Ms. tincidunt varius </p>
                        <p class="fs-15" style="color: #fff;">Secretary</p>
                    </div>

                </div>
            </div> -->
        </div>

        <div class="row justify-content-end m-0 pt-5">
            <div class="swiper-button-prev BP5">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/group51.svg" style="transform: rotate(-180deg)" alt="" />
            </div>
            <div class="swiper-button-next BN5">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/group51.svg" alt="" />
            </div>
        </div>
        <div class="d-flex justify-content-start swiper-pagination BPAG5"></div>
    </div>

</section>
<!-- Section - 04 (swiper) -->

<!-- Section - 07 (Clients)  -->
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
<!--/ Section - 07 (Clients)  -->

<?php get_footer() ?>