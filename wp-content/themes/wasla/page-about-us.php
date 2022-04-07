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
        <div class="col" style="padding-left: clamp(50px,7vw,92px);padding-right: clamp(50px,7vw,85px);">
            <p class="fs-40 fw-600" style="color: #373634;">Who We Are</p>
            <p class="fs-15" style="color: #413e39; text-align:justify">Donec non purus consequat, congue sem id, commodo metus. Proin egestas, elit id elementum tempor, mi sapien accumsan odio, a elementum dui nunc in lacus. Duis dolor sapien, convallis vel elit in, pellentesque gravida risus. Duis a nisl urna. Sed ut tortor at metus pellentesque varius a in tellus. Nullam eleifend feugiat finibus. Aliquam eu diam a arcu interdum faucibus. Mauris dapibus lobortis dapibus. Integer mollis ipsum tortor. Suspendisse potenti. Aliquam hendrerit eros eget dui blandit, sodales facilisis massa faucibus. Nulla facilisi.
                <br><br>
                Nulla feugiat auctor elit vitae vehicula. Nunc sit amet sapien at neque accumsan commodo sit amet a odio. Fusce vitae elit ornare, maximus odio sit amet, maximus lacus. Phasellus ac nisi nec augue vestibulum lacinia id nec justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed ac eros condimentum, rutrum felis sit amet, bibendum felis. In hac habitasse platea dictumst. Sed non posuere sem, vitae aliquam urna. Vivamus at viverra massa, eget laoreet ante. Sed vehicula enim purus, quis porta quam sollicitudin non. In aliquet blandit mollis. Sed vitae auctor turpis. Donec felis lorem, vulputate a venenatis quis, tempor egestas sapien. Sed dignissim non nibh et lacinia. Pellentesque iaculis sodales auctor. Sed ut odio eu massa maximus tristique.
                <br><br>
                Mauris vel nibh vel felis rutrum tempus. Vivamus ac est erat. Donec nisi orci, porta eu pulvinar nec, commodo et lorem. Nam egestas tempor viverra. Integer vitae eleifend metus. Ut nibh urna, lobortis eget tellus at, hendrerit semper est. Donec ultricies, arcu.
            </p>
        </div>
        <div class="col p-0">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/about1.png" class="about1" alt="">
        </div>
    </div>
</section>

<!--/ Section - 02 (Who We Are) -->

<!-- Section - 03 (Our Vision) -->
<section class="py-5" style="background-color: rgba(196, 196, 196, 0.09);    padding-left: clamp(50px,32vw,475px); padding-right: clamp(50px,32vw,475px);">
    <p class="fs-40 fw-600" style="color: #373634;text-align: center;">Our Vision</p>
    <p class="fs-20 mb-5" style="color: #413e39;; font-family: 'Paprika', cursive; text-align: center;">Nulla feugiat auctor elit vitae vehicula. Nunc sit amet sapien at neque accumsan commodo sit amet a odio. Fusce vitae elit ornare, maximus odio sit amet</p>

    <p class="fs-40 fw-600" style="color: #373634;text-align: center;">Our Mission</p>
    <p class="fs-20" style="color: #413e39;; font-family: 'Paprika', cursive; text-align: center;">Donec non purus consequat, congue sem id, commodo metus. Proin egestas, elit id elementum tempor, mi sapien accumsan odio, a elementum dui nunc in lacus</p>

</section>
<!-- Section - 03 (Our Vision) -->


<!-- Section - 04 (swiper) -->
<section style="padding-left: clamp(50px,17vw,213px);padding-right: clamp(50px,17vw,213px);padding-top: clamp(50px,8vw,121px);padding-bottom: clamp(50px,8vw,121px);">

    <p class="fs-30 fw-600 mb-5" style="color: #373634;">Our Management</p>

    <div class="swiper mySwiper5">
        <div class="swiper-wrapper">
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
            </div>
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
    <p class="fs-30 fw-600 px-lg-5" style="color: #fff;">Our Partners and Clients</p>
    <div class="row m-0" style="padding-left: clamp(50px,7vw,88px) ; padding-right: clamp(50px,7vw,88px) ; ">
        <div class="col-2">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/client1.png" class="client-img" alt="">
        </div>
        <div class="col-2">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/client2.png" class="client-img" alt="">
        </div>
        <div class="col-2">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/client3.png" class="client-img" alt="">
        </div>
        <div class="col-2">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/client1.png" class="client-img" alt="">
        </div>
        <div class="col-2">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/client2.png" class="client-img" alt="">
        </div>
        <div class="col-2">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/client3.png" class="client-img" alt="">
        </div>
        <div class="col-2">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/client1.png" class="client-img" alt="">
        </div>
        <div class="col-2">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/client2.png" class="client-img" alt="">
        </div>
        <div class="col-2">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/client3.png" class="client-img" alt="">
        </div>
        <div class="col-2">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/client1.png" class="client-img" alt="">
        </div>
        <div class="col-2">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/client2.png" class="client-img" alt="">
        </div>
        <div class="col-2">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/client3.png" class="client-img" alt="">
        </div>
    </div>

</section>
<!--/ Section - 07 (Clients)  -->

<?php get_footer() ?>