<?php

/**
 * Template Name: Contact us
 *
 * Created on : March 25, 2022
 * @author    : Nanduni Mihisaree
 */
get_header(); ?>


<!-- Section - 01 (Banner) -->
<section>
    <div class="d-flex justify-content-end banner flex-column" style="background: url('<?php bloginfo('template_directory'); ?>/assets/images/contact-banner.png') top center no-repeat ; background-size: cover;">

        <p class="fs-40 fw-600 text-center" style="color: #fff">Contact Us</p>
        <p class="fs-16 fw-500 text-center align-self-center" style=" color: #f4f4f4; max-width: 554px">In ultrices a est eget commodo. Morbi luctus eu ipsum.In ultrices a est eget commodo. </p>
    </div>
</section>
<!--/ Section - 01 (Banner) -->


<!-- Section - 02 (contacts) -->
<section style="background-color: rgba(196, 196, 196, 0.09);">
    <div class="row align-items-center container mx-auto" style="min-height: 490px;">
        <div class="col-12 col-sm-4 d-flex justify-content-center pt-5 pt-sm-0">
            <div class="px-4 align-items-center d-flex flex-column justify-content-between" style="height: clamp(205px,17vw,253px);  border-bottom: solid 1px rgba(0, 0, 0, 0.25);">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/4n-contact.png" style=" width: 100px; height: 100px;" alt="">
                <p class="mb-4 fs-18 fw-500" style="color: rgba(35, 35, 35, 0.91);">+94 77 88 93 465</p>
            </div>
        </div>
        <div class="col-12 col-sm-4 d-flex justify-content-center pt-5 pt-sm-0">
            <div class="px-4 align-items-center d-flex flex-column justify-content-between" style="height: clamp(205px,17vw,253px);  border-bottom: solid 1px rgba(0, 0, 0, 0.25);">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/4n-contact.png" style=" width: 100px; height: 100px;" alt="">
                <p class="mb-4 fs-18 fw-500" style="color: rgba(35, 35, 35, 0.91);">+94 77 88 93 465</p>
            </div>
        </div>
        <div class="col-12 col-sm-4 d-flex justify-content-center pt-5 pt-sm-0">
            <div class="px-4 align-items-center d-flex flex-column justify-content-between" style="height: clamp(205px,17vw,253px);  border-bottom: solid 1px rgba(0, 0, 0, 0.25);">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/4n-contact.png" style=" width: 100px; height: 100px;" alt="">
                <p class="mb-4 fs-18 fw-500" style="color: rgba(35, 35, 35, 0.91);">+94 77 88 93 465</p>
            </div>
        </div>
    </div>
</section>
<!--/ Section - 02 (contacts) -->

<!-- Section - 03 (form) -->
<section>
    <div class="position-relative"  style="background: url('<?php bloginfo('template_directory'); ?>/assets/images/events-inner.png') center center no-repeat ;background-size: cover; padding-bottom: clamp(50px,12vw,167px);">
        <div class="events-inner-overlay"></div>
        <div class="position-relative align-items-center d-flex flex-column">
            
            <div class="event-inner-white text-center py-5">
              
                    <p class="fs-30 fw-600">About the Event</p>
                    <hr class="about-underline mx-auto">
                    <p class="fs-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et porttitor mauris. Quisque convallis urna ac lectus pulvinar vulputate. Interdum et malesuada fames ac ante ipsum primis. </p>
                    <p class="fs-22 fw-600">Name </p>
                    <p class="fs-18">Summer event 2022 - vulputate rutrum</p>
                    <p class="fs-22 fw-600">Date </p>
                    <p class="fs-18">Friday 25th Februar 2022</p>
                    <p class="fs-22 fw-600">Place </p>
                    <p class="fs-18">No 3408, placerat nulla posuere</p>
               

            </div>
        </div>


    </div>
</section>
<!-- Section - 03 (form) -->

<?php get_footer() ?>