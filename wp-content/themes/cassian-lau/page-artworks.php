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

        <h1>Artworks</h1>

        <div class="mt-4"> Years:
        </div>
        <ul class="year-filter-ul">
            <?php
$query_args = array(
	'post_type' => 'work',
);

$the_query = new WP_Query( $query_args );

// The Loop
$first=true;
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
        echo '<li><a href="?y='.get_field('year').'" class="'.($_REQUEST['y']==get_field('year') ? 'active' : '').'">'.get_field('year').'</a></li>';
        $first=false;

        if(!$_REQUEST['y'])
        {
            wp_redirect('?y='.get_field('year'));
            exit();
        }
	}
	wp_reset_postdata();
} else {
	// no posts found
}

?>
            <!-- <li><a href="" class="active">2022</a></li>
                <li><a href="">2021</a></li>
                <li><a href="">2020</a></li>
                <li><a href="">2019</a></li>
                <li><a href="">2019</a></li>
                <li><a href="">2018</a></li> -->
        </ul>
        <div class="row mt-4">



            <?php
          
                ?>

            <?php
$query_args = array(
	'post_type' => 'work',
    'meta_query' => array(
		array(
			'key' => 'year',
			'value' => $_REQUEST['y'],
			'compare' => '=',
		)
	),
);

$the_query = new WP_Query( $query_args );

// The Loop
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
?>




            <?php if( have_rows('groups') ): ?>
            <?php while( have_rows('groups') ): the_row(); 
        ?>

            <div class="col-lg-4 col-md-6 col-sm-6 col-6 mb-4">
                <a href="<?php echo get_site_url();?>/artworks-detail?y=<?php echo $_REQUEST['y'];?>&gn=<?php echo get_sub_field('group_name');?>"
                    class="exhibition-a"><img class="w-100"
                        src="<?php echo wp_get_attachment_image_src(get_sub_field('group_cover_image'),'full')[0];?>"
                        alt="">
                    <div><?php echo get_sub_field('group_name');?></div>
                </a>


            </div>
            <?php endwhile; ?>
            <?php endif; ?>

            <!-- <div class="col-4 mb-4">
                    <a href="<?php echo get_site_url();?>/artworks-detail" class="exhibition-a"><img class="w-100"
                            src="<?php echo wp_get_attachment_image_src(get_field('group_cover_image'),'full')[0];?>"
                            alt="">
                        <div><?php echo get_field('group_name');?></div>
                    </a>


                </div> -->
            <?php
    }
	wp_reset_postdata();
} else {
	// no posts found
}

?>


            <?php
            // }
            ?>
        </div>
    </div>
    <div class="col-lg-2 col-md-12 col-sm-12 col-12 ">

        <?php
echo get_template_part( 'menu' );

?>
    </div>


</div>
</div>
<?php
get_footer();