<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="x-rim-auto-match" content="none">

    <?php wp_head(); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <link rel='stylesheet' id='' href='<?php echo get_template_directory_uri();?>/lightbox.css' media='all' />

    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/lightbox.js"></script>


    <script type="text/javascript">
    $(function() {
        $('.hamburger-lines').click(function() {

            $(this).toggleClass('active');

            if ($(this).hasClass('active')) {

                $('.side-menu').slideDown(200);
            } else {
                $('.side-menu').fadeOut(0);

            }

        })

        $(window).resize(function() {

            $('.hamburger-lines').removeClass('active');


            if ($(window).width() > 991) {
                $('.side-menu').fadeIn(0);

            } else {

                $('.side-menu').fadeOut(0);
            }

        })


    })
    </script>
</head>


<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>


    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content">
            <?php esc_html_e( 'Skip to content', 'twentytwentyone' ); ?></a>

        <?php //get_template_part( 'template-parts/header/site-header' ); ?>

        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">

                    <div class="container">

                        <div class="row justify-content-center gx-4">

                            <div class="col-lg-11 col-md-12 col-sm-12 col-12 position-relative">
                                <div class="cassian-name">
                                    <span class="">CASSIAN</span> <span class="">LAU</span>


                                    <div class="hamburger-lines">
                                        <span class="line line1"></span>
                                        <span class="line line2"></span>
                                        <span class="line line3"></span>
                                    </div>

                                </div>






                            </div>


                        </div>