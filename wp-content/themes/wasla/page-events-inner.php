<?php

/**
 * Template Name: Events Inner
 *
 * Created on : March 25, 2022
 * @author    : Nanduni Mihisaree
 */
get_header(); ?>


<section>
    <div style="background: url('<?php bloginfo('template_directory'); ?>/assets/images/events-inner.png') center center no-repeat ;background-size: cover; padding-bottom: clamp(50px,12vw,167px);">
        <div class="events-inner-overlay"></div>
        <div class="position-relative">
            <p class="fs-40 fw-600 text-center pt-5" style=" color: #ffd15a;">Summer Event - 2022</p>
            <hr class="ei-underline">
            <p class="fs-25 fw-600 text-center" style="color: #fff;">Feb 25, 2022 12.00 PM</p>

            <div class="event-inner-white text-center py-5">
                <div style="padding: 0 115px;">
                    <p class="fs-30 fw-600">About the Event</p>
                    <p class="fs-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et porttitor mauris. Quisque convallis urna ac lectus pulvinar vulputate. Interdum et malesuada fames ac ante ipsum primis. </p>
                    <p class="fs-22 fw-600">Name </p>
                    <p class="fs-18">Summer event 2022 - vulputate rutrum</p>
                    <p class="fs-22 fw-600">Date </p>
                    <p class="fs-18">Friday 25th Februar 2022</p>
                    <p class="fs-22 fw-600">Place </p>
                    <p class="fs-18">No 3408, placerat nulla posuere</p>
                </div>
                <P class="fs-16 px-5 pt-5">* Nunc nibh lorem, porttitor eu massa nec, convallis imperdiet neque. Pellentesque vel nisl ut est imperdiet posuere. </P>


            </div>
        </div>


    </div>
</section>

<!-- <div class=" position-relative text-start">
    <div class="gallery-overlay w-100"></div>
    <img src="<?php bloginfo('template_directory'); ?>/assets/images/events-inner.png" alt="" />

    <div class="position-absolute bottom-0 w-100 px-3">
        <p class="fs-18 fw-bold" style="color: #fff;">Mr. pharetra pulvinar </p>
        <p class="fs-15" style="color: #fff;">Presiden</p>
    </div>

</div> -->

<?php get_footer() ?>