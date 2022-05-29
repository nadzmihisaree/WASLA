<?php

/**
 * Template Name: Gallery
 *
 * Created on : March 25, 2022
 * @author    : Nanduni Mihisaree
 */
get_header(); ?>


<!-- Section - 01 (Banner) -->
<section>
    <div class="d-flex justify-content-center align-items-end banner" style="background: url('<?php bloginfo('template_directory'); ?>/assets/images/group52.png') top center no-repeat ; background-size: cover;">

        <p class="fs-40 fw-600 text-center" style="color: #fff">Gallery</p>

    </div>
</section>
<!--/ Section - 01 (Banner) -->

<!-- Section - 02 (gallery-nav) -->
<section class="pt-5" style="padding-bottom: clamp(50px, 8vw, 100px)">
    <div class="row justify-content-between m-0 px-lg-5 ">
        <div class="col-auto mb-5 mb-lg-0">

            <select class="gallery-dropdown1 fs-18 fw-600 border-0" style="color: #404040;">
                <option value="*" class="fs-18 fw-600" style="color: #404040;">All Category</option>
                <option value=".Category1" class="fs-18 fw-600" style="color: #404040;">All Category1</option>
                <option value=".Category2" class="fs-18 fw-600" style="color: #404040;">All Category2</option>
                <option value=".Category3" class="fs-18 fw-600" style="color: #404040;">All Category3</option>
            </select>

        </div>
        <div class="col-auto align-items-center d-flex">
            <p class="fs-18 fw-600 m-0" style="color: #404040;">Sort by :</p>
            <select class="gallery-dropdown2 fs-18 fw-600" style="color: rgba(69, 69, 69, 0.71);">>
                <option value="*" class="fs-18 fw-600" style="color: rgba(69, 69, 69, 0.71);">Titles</option>
                <option value=".Title1" class="fs-18 fw-600" style="color: rgba(69, 69, 69, 0.71);">Title1</option>
                <option value=".Title2" class="fs-18 fw-600" style="color: rgba(69, 69, 69, 0.71);">Title2</option>
                <option value=".Title3" class="fs-18 fw-600" style="color: rgba(69, 69, 69, 0.71);">Title3</option>
            </select>
        </div>
    </div>
</section>
<!--/ Section - 02 (gallery-nav) -->

<!-- Section - 03 (gallery) -->
<div class="row container mx-auto m-0 gallery-container px-0">
    <div class="col-12 col-sm-4 gallery-col px-4 ">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/group53.png" class="gallery-img" alt="">
        <p class="pt-4">2020 Summer opening</p>
    </div>
    <div class="col-12 col-sm-4 gallery-col px-4 hidden Title1">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/group54.png" class="gallery-img" alt="">
        <p class="pt-4">Indigo Event Planning</p>
    </div>
    <div class="col-12 col-sm-4 gallery-col px-4 Title2">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/group55.png" class="gallery-img" alt="">
        <p class="pt-4">Origami Crane birthday Party</p>
    </div>
    <div class="col-12 col-sm-4 gallery-col px-4 Title3">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/group58.png" class="gallery-img" alt="">
        <p class="pt-4">2020 Summer opening</p>
    </div>
    <div class="col-12 col-sm-4 gallery-col px-4 Category1">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/group56.png" class="gallery-img" alt="">
        <p class="pt-4">Haloween Event Planning</p>
    </div>
    <div class="col-12 col-sm-4 gallery-col px-4 Category2">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/group57.png" class="gallery-img" alt="">
        <p class="pt-4">Origami Crane anniversary Party</p>
    </div>
    <div class="col-12 col-sm-4 gallery-col px-4 Category3">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/group58.png" class="gallery-img" alt="">
        <p class="pt-4">2020 Summer opening</p>
    </div>
    <div class="col-12 col-sm-4 gallery-col px-4">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/group56.png" class="gallery-img" alt="">
        <p class="pt-4">Haloween Event Planning</p>
    </div>
    <div class="col-12 col-sm-4 gallery-col px-4">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/group57.png" class="gallery-img" alt="">
        <p class="pt-4">Origami Crane anniversary Party</p>
    </div>
    <div class="col-12 col-sm-4 gallery-col px-4">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/group58.png" class="gallery-img" alt="">
        <p class="pt-4">2020 Summer opening</p>
    </div>
    <div class="col-12 col-sm-4 gallery-col px-4">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/group56.png" class="gallery-img" alt="">
        <p class="pt-4">Haloween Event Planning</p>
    </div>
    <div class="col-12 col-sm-4 gallery-col px-4">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/group57.png" class="gallery-img" alt="">
        <p class="pt-4">Origami Crane anniversary Party</p>
    </div>
    <div class="col-12 col-sm-4 gallery-col px-4">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/group53.png" class="gallery-img" alt="">
        <p class="pt-4">2020 Summer opening</p>
    </div>
    <div class="col-12 col-sm-4 gallery-col px-4">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/group54.png" class="gallery-img" alt="">
        <p class="pt-4">Indigo Event Planning</p>
    </div>
    <div class="col-12 col-sm-4 gallery-col px-4">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/group55.png" class="gallery-img" alt="">
        <p class="pt-4">Origami Crane birthday Party</p>
    </div>
    <div class="col-12 col-sm-4 gallery-col px-4">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/group58.png" class="gallery-img" alt="">
        <p class="pt-4">2020 Summer opening</p>
    </div>
    <div class="col-12 col-sm-4 gallery-col px-4">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/group56.png" class="gallery-img" alt="">
        <p class="pt-4">Haloween Event Planning</p>
    </div>
    <div class="col-12 col-sm-4 gallery-col px-4">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/group57.png" class="gallery-img" alt="">
        <p class="pt-4">Origami Crane anniversary Party</p>
    </div>


</div>
<!--/ Section - 03 (gallery) -->

<!-- Section - 04 (load-more) -->
<section class="">
    <div class="d-flex justify-content-center mt-5" style=" margin-bottom: clamp(50px,11vw,167px);">
        <button id="load-more" class="load-more gallery-butt fs-20 fw-600 text-center">
            <p>Load More</p>
        </button>
    </div>
</section>
<!--/ Section - 03 (load-more) -->

<?php get_footer() ?>