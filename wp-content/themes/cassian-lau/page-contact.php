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


<div class="row justify-content-center gx-4">

    <div class="col-lg-9 col-md-12 col-sm-12 col-12  main-content-div">

        <?php
        echo get_the_content();
        ?>
        <!-- <div>Represented by Madhouse Contemporary <br>

                Room 804, 8/F, Cornell Centre<br>
                50 Wing Tai Road<br>
                Chai Wan, Hong Kong<br>
                <br><br>
                T. (852) 2815 6007<br>
                F. (852) 2815 6017<br>
                E. <a class="email-a" href="mailto:info@madhouse.com.hk" target="_blank">info@madhouse.com.hk</a>


            </div> -->



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