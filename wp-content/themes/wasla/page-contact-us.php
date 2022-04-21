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
    <div class="position-relative" style="background: url('<?php bloginfo('template_directory'); ?>/assets/images/contact-image.png') center center no-repeat ;background-size: cover; padding-bottom: clamp(50px,12vw,167px);">
        <div class="events-inner-overlay"></div>
        <div class="row position-relative align-items-center d-flex flex-column m-0">

            <div class="contact-inner-white text-center pt-5 px-5" style="padding-bottom: 114px;">
                <p class="fs-25 fw-bold text-start" style="color: rgba(0, 0, 0, 0.95); padding-bottom: 79px;">Send Us a Message</p>

                <form>
                    <div class="mb-3 text-start">
                        <label for="exampleInputName" class="fs-18 fw-600" style="color: rgba(0, 0, 0, 0.8);">
                            <p>Name</p>
                        </label>
                        <input type="name" class="form-control form-input" id="exampleInputName">
                    </div>
                    <div class="row" style="padding-bottom: 63px;">
                        <div class="col-sm">
                            <div class="mb-3 text-start">
                                <label for="exampleInputPhone" class="fs-18 fw-600" style="color: rgba(0, 0, 0, 0.8);">
                                    <p>Phone</p>
                                </label>
                                <input type="name" class="form-control form-input" id="exampleInputPhone">
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="mb-3 text-start">
                                <label for="exampleInputEmail1" class="fs-18 fw-600" style="color: rgba(0, 0, 0, 0.8);">
                                    <p>Email address</p>
                                </label>
                                <input type="email" class="form-control form-input" id="exampleInputEmail1" aria-describedby="emailHelp">

                            </div>
                        </div>
                    </div>

                    <div class="text-start">
                        <p class="fs-18 fw-600" style="color: rgba(0, 0, 0, 0.8);">Contact</p>
                        <div class="d-flex align-items-center mb-3">
                            <input type="radio" name="age">
                            <label for="age1">
                                <p class="fs-16 fw-500 m-0 ms-3" style=" color: rgba(35, 35, 35, 0.71);">President - president@gmail.com</p>
                            </label>
                        </div>

                        <div class="d-flex align-items-center mb-3">
                            <input type="radio" name="age">
                            <label for="age2">
                                <p class="fs-16 fw-500 m-0 ms-3" style=" color: rgba(35, 35, 35, 0.71);">Secretary - secretary@gmail.com</p>
                            </label>
                        </div>

                        <div class="d-flex align-items-center mb-3">
                            <input type="radio" name="age">
                            <label for="age3">
                                <p class="fs-16 fw-500 m-0 ms-3" style=" color: rgba(35, 35, 35, 0.71);">Editor - editor@gmail.com</p>
                            </label>
                        </div>


                    </div>

                    <div class="mb-3 text-start" style="padding: 63px 0;">
                        <label for="exampleInputMessage" class="fs-18 fw-600" style="color: rgba(0, 0, 0, 0.8);">
                            <p>Message</p>
                        </label>

                        <div class="form-floating">
                            <textarea class="form-control form-input" id="floatingTextarea2" style="height: 100px"></textarea>

                        </div>

                    </div>

                    <div class="row ps-3">
                        <button type="submit" class="btn submit-btn">Submit</button>
                    </div>

                </form>

            </div>


        </div>


    </div>
</section>
<!-- Section - 03 (form) -->

<?php get_footer() ?>