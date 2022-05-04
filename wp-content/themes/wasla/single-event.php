<?php

/**
 *
 * Created on : March 25, 2022
 * @author    : Nanduni Mihisaree
 */
get_header(); ?>


<section>
    <div class="position-relative" style="background: url('<?php bloginfo('template_directory'); ?>/assets/images/events-inner.png') center center no-repeat ;background-size: cover; padding-bottom: clamp(50px,12vw,167px);">
        <div class="events-inner-overlay"></div>
        <div class="position-relative align-items-center d-flex flex-column">
            <p class="fs-40 fw-600 text-center pt-5" style=" color: #ffd15a;"><?php the_field("event_inner_title") ?></p>
            <hr class="ei-underline">
            <p class="fs-25 fw-600 text-center" style="color: #fff;"><?php the_field("event_inner_date") ?></p>

            <div class="event-inner-white text-center py-5">
                <div class="mx-auto" style="max-width: 639px;">
                    <p class="fs-30 fw-600"><?php the_field("event_inner_topic") ?></p>
                    <hr class="about-underline mx-auto">
                    <p class="fs-16"><?php the_field("event_inner_about") ?></p>

                    <?php if (have_rows('event_inner_detail_repeater')) : ?>
                        <?php while (have_rows('event_inner_detail_repeater')) : the_row(); ?>
                            <p class="fs-22 fw-600"><?php the_sub_field("title") ?> </p>
                            <p class="fs-18"><?php the_sub_field("answer") ?></p>
                            <!-- <p class="fs-22 fw-600">Date </p>
                            <p class="fs-18">Friday 25th Februar 2022</p>
                            <p class="fs-22 fw-600">Place </p>
                            <p class="fs-18">No 3408, placerat nulla posuere</p> -->


                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
                <P class="fs-16 px-5 pt-5"><?php the_field("event_inner_bottom_text") ?></P>


            </div>
        </div>


    </div>
</section>



<?php get_footer() ?>