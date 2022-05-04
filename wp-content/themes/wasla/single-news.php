<?php

/**
 * 
 * Created on : March 25, 2022
 * @author    : Nanduni Mihisaree
 */
get_header(); ?>

<div class=" row news-article mx-auto" style=" max-width: 892px;padding-bottom: clamp(50px,14vw,212px); padding-top: clamp(20px,4vw,68px);">

    <!-- Section - 01 (head) -->
    <p class="fs-35 fw-600 mb-4" style="color: #484848;"><?php the_title()?></p>
    <p class="fs-20 fw-500" style=" color: rgba(139, 139, 139, 0.95); margin-bottom: clamp(20px,4vw,68px);"><?php the_field("date") ?></p>

    <img src="<?php the_field("news_main_image") ?>" class="news-inner-img mb-5" alt="">
    <!--/ Section - 01 (head) -->

    <!-- Section - 02 (content) -->
    <p class="fs-18" style="color: #3c3c3c;text-align: justify;"><?php the_field("news_content") ?></p>
    
    <!--/ Section - 02 (content) -->
</div>


<?php get_footer() ?>