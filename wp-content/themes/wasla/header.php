<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
    <title>WASLA</title>


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- Swiper  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <!-- Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet" />



    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&family=Paprika&family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">


    <!-- Style sheets -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/style.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/style-md.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/style-xl.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/style-lg.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/style-sm.css" />

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- NavBar  -->
    <header>
        <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-light p-0 fixed-top" style="transition: all 0.3s;">
            <div class="container-fluid">
                <a href="<?php bloginfo('url') ?>">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" class="logo" />
                </a>

                <button class="navbar-toggler border-0" style="outline: none" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="wrapper-menu">
                        <div class="line-menu half start"></div>
                        <div class="line-menu"></div>
                        <div class="line-menu half end"></div>
                    </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php
                    wp_nav_menu(array(
                        'theme_location'  => 'main-menu',
                        'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                        'container'       => '',
                        'container_class' => '',
                        'menu_class'      => 'navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center',
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'          => new WP_Bootstrap_Navwalker(),
                    ));
                    ?>
                    <!-- <li class="nav-item"> -->
                        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#ModalBox1" href="#">
                            <button class="nav-butt">BECOME A MEMBER</button>
                        </a>
                    <!-- </li> -->
                    <!-- <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                        <li class="nav-item">
                            <a class="nav-link active me-lg-4" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-lg-4" href="#">News & Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-lg-4" href="#">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-lg-4" href="#">Contact us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#ModalBox1" href="#">
                                <button class="nav-butt">BECOME A MEMBER</button>
                            </a>
                        </li>
                    </ul> -->

                </div>
            </div>
        </nav>
    </header>
    <!--/ NavBar  -->