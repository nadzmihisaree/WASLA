 <!-- modal box -->
 <div class="modal fade" id="ModalBox1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="my-0 modal-dialog">
         <div class="modal-content">

             <section>
                 <div class="position-relative" style="background: url('<?php bloginfo('template_directory'); ?>/assets/images/member.png') center center no-repeat ;background-size: cover; padding-bottom: clamp(50px,12vw,167px);">
                     <div class="events-inner-overlay"></div>
                     <div class="position-relative px-sm-5">

                         <!-- Section - 01 (header) -->
                         <div class="row pt-5">
                             <div class="col-12 col-sm-2">
                                 <a href="#">
                                     <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" class="logo" />
                                 </a>
                             </div>
                             <div class="col-sm align-items-center d-flex flex-column pt-5">
                                 <p class="fs-33 fw-500" style="color: #ffd15a;">Please Fill Up the Membership Form Below</p>
                                 <p class="fs-18" style=" color: rgba(255, 255, 255, 0.71);">Membership opens the door to all possibilities...</p>
                             </div>
                         </div>

                         <!--/ Section - 01 (header) -->



                         <!--/ Section - 02 (cross) -->
                         <div class="modal-header border-0  p-0 position-relative" style="margin-bottom: 85px;">
                             <a class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                 <img src="<?php bloginfo('template_directory'); ?>/assets/images/close.png" alt="">
                             </a>
                         </div>
                         <!--/ Section - 02 (cross) -->

                         <?php echo do_shortcode('[contact-form-7 id="209" title="Become a member form"]') ?>
                         <?php /*
                         <form action="">
                             <!-- Section - 03 (white box) -->
                             <div class="row">
                                 <div class="col-xl pb-4 pb-xl-0">

                                     <div class="member-inner-white p-5">
                                         <div class="">
                                             <p class="fs-20 fw-600" style="color: #232323;">Member Details</p>
                                             <p class="fs-15 fw-600" style="color: rgba(53, 53, 53, 0.92);">Title :</p>
                                             <div class="member-radio d-sm-flex justify-content-evenly mb-3">
                                                 <div class="d-flex align-items-center ">
                                                     <input type="radio" name="age4">
                                                     <label for="age4">
                                                         <p class="fs-15 fw-500 m-0 ms-2" style="color: rgba(56, 56, 56, 0.92);">Mr</p>
                                                     </label>
                                                 </div>
                                                 <div class="d-flex align-items-center ">
                                                     <input type="radio" name="age4">
                                                     <label for="age5">
                                                         <p class="fs-15 fw-500 m-0 ms-2" style="color: rgba(56, 56, 56, 0.92);">Mrs</p>
                                                     </label>
                                                 </div>
                                                 <div class="d-flex align-items-center ">
                                                     <input type="radio" name="age4">
                                                     <label for="age6">
                                                         <p class="fs-15 fw-500 m-0 ms-2" style="color: rgba(56, 56, 56, 0.92);">Ms</p>
                                                     </label>
                                                 </div>
                                                 <div class="d-flex align-items-center ">
                                                     <input type="radio" name="age4">
                                                     <label for="age7">
                                                         <p class="fs-15 fw-500 m-0 ms-2" style="color: rgba(56, 56, 56, 0.92);">Miss</p>
                                                     </label>
                                                 </div>
                                                 <div class="align-items-center d-flex text-start">
                                                     <label for="other" class="fs-15 fw-500 me-3" style="color: rgba(56, 56, 56, 0.92);">
                                                         <p class="m-0">Other : </p>
                                                     </label>
                                                     <input type="name" class="form-control member-input" id="other">
                                                 </div>
                                             </div>

                                             <div class="row">
                                                 <div class="col-sm">
                                                     <div class="text-start">
                                                         <label for="exampleInput1stName" class="fs-15 fw-600" style="color: rgba(53, 53, 53, 0.92);">
                                                             <p>First Name</p>
                                                         </label>
                                                         <input type="name" class="form-control member-input2" id="exampleInput1stName">
                                                     </div>
                                                 </div>
                                                 <div class="col-sm">
                                                     <div class="text-start">
                                                         <label for="exampleInputLastName" class="fs-15 fw-600" style="color: rgba(53, 53, 53, 0.92);">
                                                             <p>Last Name</p>
                                                         </label>
                                                         <input type="name" class="form-control member-input2" id="exampleInputLastName">
                                                     </div>
                                                 </div>
                                             </div>

                                             <div class="row">
                                                 <div class="col-sm">
                                                     <div class="text-start">
                                                         <label for="exampleInputNumb" class="fs-15 fw-600" style="color: rgba(53, 53, 53, 0.92);">
                                                             <p>Phone Number</p>
                                                         </label>
                                                         <input type="name" class="form-control member-input2" id="exampleInputNumb">
                                                     </div>
                                                 </div>
                                                 <div class="col-sm">
                                                     <div class="text-start">
                                                         <label for="exampleInputEmail2" class="fs-15 fw-600" style="color: rgba(53, 53, 53, 0.92);">
                                                             <p>Email Address </p>
                                                         </label>
                                                         <input type="name" class="form-control member-input2" id="exampleInputEmail2">
                                                     </div>
                                                 </div>
                                             </div>

                                             <div class="row">
                                                 <div class="col-12 col-sm-9">
                                                     <div class="text-start">
                                                         <label for="exampleInputAddress" class="fs-15 fw-600" style="color: rgba(53, 53, 53, 0.92);">
                                                             <p>Address </p>
                                                         </label>
                                                         <input type="name" class="form-control member-input2" id="exampleInputAddress">
                                                     </div>
                                                 </div>
                                                 <div class="col-sm">
                                                     <div class="text-start">
                                                         <label for="exampleInputPost" class="fs-15 fw-600" style="color: rgba(53, 53, 53, 0.92);">
                                                             <p>Post Code </p>
                                                         </label>
                                                         <input type="name" class="form-control member-input2" id="exampleInputPost">
                                                     </div>
                                                 </div>
                                             </div>

                                             <p class="fs-20 fw-600" style="color: #232323;">Family Member Details</p>

                                             <div class="row">
                                                 <div class="col-sm">
                                                     <div class="text-start">
                                                         <label for="exampleInputPartner" class="fs-15 fw-600" style="color: rgba(53, 53, 53, 0.92);">
                                                             <p>Spouse / Partner </p>
                                                         </label>
                                                         <input type="name" class="form-control member-input2" id="exampleInputPartner">
                                                     </div>
                                                 </div>
                                                 <div class="col-sm">
                                                     <div class="text-start">
                                                         <label for="exampleInputChildren" class="fs-15 fw-600" style="color: rgba(53, 53, 53, 0.92);">
                                                             <p>Children </p>
                                                         </label>
                                                         <input type="name" class="form-control member-input2" id="exampleInputChildren">
                                                     </div>
                                                 </div>
                                             </div>

                                             <p class="fs-20 fw-600" style="color: #232323;">Student Membership Details</p>

                                             <div class="text-start">
                                                 <label for="exampleInputSchool" class="fs-15 fw-600" style="color: rgba(53, 53, 53, 0.92);">
                                                     <p>School or University</p>
                                                 </label>
                                                 <input type="name" class="form-control member-input2" id="exampleInputSchool">
                                             </div>
                                         </div>
                                     </div>
                                 </div>

                                 <div class="col-xl pb-4 pb-xl-0">

                                     <div class="member-inner-white p-5">
                                         <p class="fs-15 fw-600" style="color: rgba(53, 53, 53, 0.92);">Membership Type : </p>

                                         <div class="row mb-4">
                                             <div class="col">
                                                 <div class="d-flex align-items-center me-5">
                                                     <input type="radio" name="age8">
                                                     <label for="age8">
                                                         <p class="fs-15 fw-500 m-0 ms-2" style="color: rgba(56, 56, 56, 0.92);">New Membership </p>
                                                     </label>
                                                 </div>
                                             </div>
                                             <div class="col">
                                                 <div class="d-flex align-items-center ">
                                                     <input type="radio" name="age8">
                                                     <label for="age9">
                                                         <p class="fs-15 fw-500 m-0 ms-2" style="color: rgba(56, 56, 56, 0.92);">Renewal of Membership</p>
                                                     </label>
                                                 </div>
                                             </div>
                                         </div>


                                         <div class="row mb-4">
                                             <div class="col-sm">
                                                 <div class="text-start">
                                                     <label for="exampleInputIntroduced" class="fs-15 fw-600" style="color: rgba(53, 53, 53, 0.92);">
                                                         <p>Introduced By </p>
                                                     </label>
                                                     <input type="name" class="form-control member-input2" id="exampleInputIntroduced">
                                                 </div>
                                             </div>
                                             <div class="col-sm">
                                                 <div class="text-start">
                                                     <label for="exampleInputProposed" class="fs-15 fw-600" style="color: rgba(53, 53, 53, 0.92);">
                                                         <p>Proposed by Commitee Member </p>
                                                     </label>
                                                     <input type="name" class="form-control member-input2" id="exampleInputProposed">
                                                 </div>
                                             </div>
                                         </div>

                                         <p class="fs-15 fw-600" style="color: rgba(53, 53, 53, 0.92);">Membership Subscrip-on Types :</p>
                                         <!-- ------------------------------------------------------------------ -->
                                         <div class="row">
                                             <div class="col-12 col-sm-3 mb-3">
                                                 <div class="d-flex align-items-center">
                                                     <input type="radio" name="age10">
                                                     <label for="age10">
                                                         <p class="fs-15 fw-500 m-0 ms-2" style="color: rgba(56, 56, 56, 0.92);">Family $25</p>
                                                     </label>
                                                 </div>

                                             </div>
                                             <div class="col-12 col-sm-5 mb-3">
                                                 <div class="d-flex align-items-center ">
                                                     <input type="radio" name="age10">
                                                     <label for="age11">
                                                         <p class="fs-15 fw-500 m-0 ms-2" style="color: rgba(56, 56, 56, 0.92);">Pensioner—Family $15</p>
                                                     </label>
                                                 </div>

                                             </div>
                                             <div class="col-12 col-sm-4 mb-3">
                                                 <div class="d-flex align-items-center ">
                                                     <input type="radio" name="age10">
                                                     <label for="age12">
                                                         <p class="fs-15 fw-500 m-0 ms-2" style="color: rgba(56, 56, 56, 0.92);">Pensioner—Single $10</p>
                                                     </label>
                                                 </div>
                                             </div>
                                             <div class="col-12 col-sm-3 mb-3">
                                                 <div class="d-flex align-items-center">
                                                     <input type="radio" name="age10">
                                                     <label for="age12">
                                                         <p class="fs-15 fw-500 m-0 ms-2" style="color: rgba(56, 56, 56, 0.92);">Single $15</p>
                                                     </label>
                                                 </div>
                                             </div>
                                             <div class="col-12 col-sm-5 mb-3">
                                                 <div class="d-flex align-items-center ">
                                                     <input type="radio" name="age10">
                                                     <label for="age13">
                                                         <p class="fs-15 fw-500 m-0 ms-2" style="color: rgba(56, 56, 56, 0.92);">Student—Single $10</p>
                                                     </label>
                                                 </div>
                                             </div>
                                         </div>


                                         <div class="p-4 mt-5" style="border-radius: 3px;  border: solid 1px rgba(159, 159, 159, 0.7);">
                                             <p class="fs-15 fw-500" style="color: #686868;">* By signing below I confirm that I wish to become a member of the West Australian—Sri Lanka (Ceylon) Association, Inc. and
                                                 agree to abide by its constitution and by laws.</p>

                                             <p class="fs-20 fw-600" style="color: #232323;">Payments for Subscription</p>

                                             <ul id="member">
                                                 <li class="fs-15 fw-600 mb-2" style="color: rgba(0, 0, 0, 0.75);">Cash or EFT accepted</li>
                                                 <li class="fs-15 fw-600 mb-2" style="color: rgba(0, 0, 0, 0.75);">Account Number - 518950</li>
                                                 <li class="fs-15 fw-600 mb-2" style="color: rgba(0, 0, 0, 0.75);">Payee Details : BSB - 036062</li>
                                                 <li class="fs-15 fw-600 mb-2" style="color: rgba(0, 0, 0, 0.75);">Payment Reference : SUBS Surname Initials</li>
                                             </ul>
                                         </div>



                                     </div>

                                 </div>
                             </div>
                             <!--/ Section - 03 (white box) -->

                             <!-- Section - 04 (buttons) -->
                             <div class="row mt-5 justify-content-between justify-content-sm-end">
                                 <div class="col-auto">
                                     <a href="#">
                                         <button class="member-butt">Submit</button>
                                     </a>
                                 </div>
                                 <div class="col-auto">
                                     <a href="#">
                                         <button class="member-butt2"  data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                     </a>
                                 </div>
                             </div>
                             <!--/ Section - 04 (buttons) -->
                         </form>

                          */ ?>

                     </div>
                 </div>
             </section>

         </div>
     </div>
 </div>
 <!--/ modal box -->

 <!-- Footer  -->
 <footer class="footer">
     <div class="row justify-content-between">
         <div class="col-md">
             <p class="fs-20 fw-500" style="color: #b5b5b5">
                 <?php the_field("footer_line_1", 'option') ?>
             </p>
             <p class="fs-40 fw-500 mb-5" style="color: #f9f9f9"> <?php the_field("footer_line_2", 'option') ?></p>
         </div>

         <div class="col-lg-3">
             <button class="footer-but " data-bs-toggle="modal" data-bs-target="#ModalBox1">
                 <p class="fw-600 fs-14 m-0">BECOME A MEMBER</p>
             </button>
         </div>
     </div>

     <div class="row footer-row">

         <?php if (have_rows('contact_repeater', 'option')) : ?>
             <?php while (have_rows('contact_repeater', 'option')) : the_row(); ?>

                 <div class="col-lg-3 d-flex py-lg-0 py-4">
                     <img src="<?php the_sub_field("logo") ?>" class="footer-img" />
                     <p class="footer-p3 fw-500 fs-18" style="width: 192px">
                         <?php the_sub_field("text") ?>
                     </p>
                 </div>

             <?php endwhile; ?>
         <?php endif; ?>

         <!-- <div class="col-lg-3 d-flex py-lg-0 py-4">
             <img src="<?php bloginfo('template_directory'); ?>/assets/images/4n.png" class="footer-img" />
             <div>
                 <p class="footer-p3 fw-500 fs-18 m-0">+94 77 88 93 465</p>
                 <p class="footer-p3 fw-500 fs-18 m-0">+94 77 88 93 465</p>
             </div>
         </div>
         <div class="col-lg-3 d-flex py-lg-0 py-4">
             <img src="<?php bloginfo('template_directory'); ?>/assets/images/mail.png" class="footer-img" />
             <p class="footer-p3 fw-500 fs-18 m-0">wasla@gmail.com</p>
         </div> -->
         <div class="col-lg-3 py-lg-0 py-4">
             <p class="footer-p fs-25 fw-600">Mission</p>
             <p class="footer-p3 fw-500 fs-18 m-0">
                 <?php the_field("mission", 'option') ?>
             </p>
         </div>
     </div>

     <div class="d-flex" style="margin-top: clamp(50px, 7vw, 106px); margin-bottom: clamp(20px, 5vw, 57px)">

         <?php if (have_rows('social_media_repeater', 'option')) : ?>
             <?php while (have_rows('social_media_repeater', 'option')) : the_row(); ?>

                 <div><a href="<?php the_sub_field("social_media_url") ?>"><img src="<?php the_sub_field("social_media_icon") ?>" class="social-icon" /></a></div>

             <?php endwhile; ?>
         <?php endif; ?>


         <!-- <div><img src="<?php bloginfo('template_directory'); ?>/assets/images/fb.png" class="social-icon" /></div>
         <div><img src="<?php bloginfo('template_directory'); ?>/assets/images/in.png" class="social-icon" /></div>
         <div><img src="<?php bloginfo('template_directory'); ?>/assets/images/twitter.png" class="social-icon" /></div> -->
     </div>

     <div class="row align-items-center justify-content-between">
         <p class="col-lg-auto all-rights fs-15 fw-500">© All Right Reserverd WASLA 2021</p>
         <p class="col-lg-auto all-rights fs-15 fw-500">
             Designed and developed by
             <img src="<?php bloginfo('template_directory'); ?>/assets/images/wad.png" class="wad-logo" />
         </p>
     </div>
 </footer>
 <!--/ Footer  -->


 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>


 <script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>




 <?php wp_footer(); ?>
 </body>

 </html>