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

            <h1 class="position-relative">Exhibition

                <a href="javascript:void(0);" class="return-btn float-end">Return</a>
            </h1>


            <div class="mt-4 exhibition-title">
                PAINTINGS FROM ELECTRIC <br>
                CLAUSTROPHOBIA SOLO SHOW
            </div>
            <div class="mt-3">
                A tight, dark corridor was built. 30 paintings of various sizes were crammed into this narrow hallway to
                allow the viewer to sense claustrophobia in the elemental tightness of the paintings’ compositions and
                of its’ show space. Please refer to the “Pictures from EC Show” gallery for views of the installation
                and guest pictures from the opening night. Also, please don’t ask what happened to # 27. I don’t know
                what happened to it.
            </div>
            <div class="row mt-5">

                <?php
            for($i=0;$i<8;$i++)
            {
                ?>
                <div class="col-3 mb-4">
                    <a href="" class="exhibition-a"><img class="w-100"
                            src="http://64.227.13.14/cassian-lau/wp-content/uploads/2022/06/temp-img.png" alt="">
                        <div>One <br>
                            acrylic and marker on canvas 76 cm x 61 cm</div>
                    </a>


                </div>

                <?php
            }
            ?>
            </div>
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