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

    <div class="row justify-content-center gx-4">

        <div class="col-11">
            <div class="cassian-name">
                <span class="">CASSIAN</span> <span class="">LAU</span>

            </div>
        </div>
    </div>


    <div class="row justify-content-center gx-4">

        <div class="col-9 main-content-div">

            <h1>Blog
                <a href="javascript:void(0);" class="return-btn float-end">Return</a>

            </h1>

            <div class="mt-4 exhibition-title">
                Title Title Title Title Title Title Title Title Title Title Title Title Title
                Title Title Title Title Title Title Title Title Title Title Title Title Title
            </div>
            <div class="mt-4">
                <img class="w-100" src="http://64.227.13.14/cassian-lau/wp-content/uploads/2022/06/rect-img.jpg" alt="">
            </div>

            <div class="mt-4">content txt content txt content txt content txt content txt content txt content txt
                content txt content txt content txt content txt content txt content txt content txt content txt content
                txt content txt content txt content txt content txt content txt content txt content txt content txt
                content txt content txt content txt content txt content txt content txt content txt content txt content
                txt content txt content txt content txt content txt content txt content txt content txt content txt
                content txt content txt content txt content txt content txt content txt content txt content txt content
                txt content txt content txt content txt content txt content txt content txt content txt content txt
                content txt content txt content txt content txt content txt content txt content txt content txt content
                txt content txt content txt content txt content txt content txt content txt content txt content txt
                content txt content txt content txt content txt content txt content txt content txt content txt content
                txt content txt content txt content txt content txt content txt content txt content txt content txt
                content txt content txt content txt content txt content txt content txt content txt content txt content
                txt content txt content txt content txt content txt content txt content txt content txt content txt
                content txt content txt content txt content txt content txt content txt content txt content txt content
                txt content txt content txt content txt content txt content txt content txt content txt content txt
                content txt content txt content txt content txt content txt content txt content txt content txt content
                txt content txt content txt content txt content txt content txt content txt content txt content txt
                content txt content txt content txt content txt content txt content txt content txt </div>

        </div>
        <div class="col-2">

            <?php
echo get_template_part( 'menu' );

?>
        </div>


    </div>
</div>
<?php
get_footer();