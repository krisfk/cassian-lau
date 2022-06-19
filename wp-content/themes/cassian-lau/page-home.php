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

        <div class="col-8">
            <div class="w-100 position-relative">
                <div class="slideshow w-100 position-relative">
                    <div> <img class="w-100"
                            src="http://64.227.13.14/cassian-lau/wp-content/uploads/2022/06/158896603_10158032193383097_5747288509285760327_n.jpeg"
                            alt="">
                    </div>
                    <div>2</div>
                    <div>3</div>
                    <!--
                    <img class="w-100" src="http://64.227.13.14/cassian-lau/wp-content/uploads/2022/06/slide2.jpg"
                        alt=""> -->
                    <!--  <img class="w-100" src="http://64.227.13.14/cassian-lau/wp-content/uploads/2022/06/slide3.jpg"
                        alt=""> -->

                </div>
            </div>
        </div>
        <div class="col-2">


            <?php
echo get_template_part( 'menu' );

?>
        </div>


    </div>
</div>

<script type="text/javascript">
$(function() {

    $('.slideshow').slick({
        slidesToShow: 1,
        dots: true,
        arrows: false
    });

})
</script>
<?php
get_footer();