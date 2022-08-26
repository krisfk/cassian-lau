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

            <h1>About Myself - CV</h1>
            <h2> Cassian Lau 劉啟舜</h2>
            <br>
            1968 : born in Hong Kong <br>
            <br>
            1974 : immigrated to Toronto Canada<br><br>

            1990’s : graduated BFA (honours) , BBA (honours) , York University. Toronto, Ontario, Canada.<br><br>

            2000’s : Established chain of fashion boutiques (Sistyr Moon)<br><br>

            2009 : Solo Exhibition “Electric Claustorphobia” at MADHOUSE Contemporary,
            Hong Kong<br><br>

            2009: Established fashion label, “iiJin”<br><br>

            2010 : Solo Exhibition “Anybody Left Under the Lion Rock” , OC Gallery , Hong Kong<br><br>

            2011: Joint Exhibition “ HK ARTcomics, Hong Kong<br><br>

            2012 : regular comic strip contributor to Apple Daily<br><br>

            2012 : Joint Exhibition “The Repository of Coherent Babbles” , Southsite , Hong Kong<br><br>

            2013-present : Owner/Artistic Director for fashion label "iiJin"<br><br>

            2016 : Joint Exhibition "Fabrik Expo" , Los Angeles , California<br><br>

            2016 : Live Painting Demonstration at Bloomingdales Soho , New York , New York<br><br>

            2021 : Joint Exhibition “Remember Them?”, Art Space K, Hong Kong<br><br>



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