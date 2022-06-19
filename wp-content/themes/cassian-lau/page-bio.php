<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

<?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
<header class="page-header alignwide">
    <h1 class="page-title"><?php single_post_title(); ?></h1>
</header><!-- .page-header -->
<?php endif; ?>
<div class="container">

    <div class="row justify-content-center gx-5">

        <div class="col-10">
            <div class="cassian-name">
                <span class="blue">CASSIAN</span> <span class="red">LAU</span>

            </div>
        </div>
    </div>


    <div class="row justify-content-center gx-5">

        <div class="col-8 main-content-div">

            <h1>About Myself - BIO</h1>
        </div>
        <div class="col-2">

            <ul class="side-menu">
                <li><a href="#">Home</a></li>
                <li><a href="javascript:void(0);" class="parent-a">About Myself</a>
                    <ul class="sub-menu">
                        <li><a href="#">Bio</a></li>
                        <li><a href="#">CV</a></li>
                    </ul>
                </li>
                <li><a href="#">Exhibition</a></li>
                <li><a href="#">Archieve</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Interview</a></li>
                <li><a href="#">Contact</a></li>
            </ul>

        </div>


    </div>
</div>
<?php
get_footer();