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

        <h1 class="position-relative">Artworks

            <a href="javascript:void(0);" class="return-btn float-end">Return</a>
        </h1>

        <?php
           $query_args = array(
            'post_type' => 'work',
            'meta_query' => array(
                array(
                    'key' => 'year',
                    'value' => trim($_REQUEST['y']),
                    'compare' => '=',
                )
            ),
            );

            $the_query = new WP_Query( $query_args );

            if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                  
                    if( have_rows('groups') )
                    {
                        while( have_rows('groups') )
                        {
                            the_row(); 
                           $group_name= get_sub_field('group_name');
                        //    echo $_REQUEST['gn'].'<br>';
                        //    echo $group_name;

                        //    echo str_replace("world","Peter","Hello world!");

                           if($group_name==trim($_REQUEST['gn']) ||    $group_name==trim(str_replace("\'","'",$_REQUEST['gn'])) )
                           {
                            
                            ?>
        <div class="mt-4 exhibition-title">
            <?php echo $_REQUEST['gn'];?>
        </div>
        <div class="mt-3">
            <?php echo get_sub_field('group_description');?>
        </div>
        <div class="row mt-5">

            <?php
            
            if( have_rows('group_detail') )
            {
                while( have_rows('group_detail') )
                {
                    the_row();
                    ?>
            <div class="col-lg-3 col-md-6 col-sm-6 col-6 mb-4">
                <a href="<?php echo wp_get_attachment_image_src(get_sub_field('drawing_image'),'full')[0];?>"
                    data-lightbox="roadtrip" class="exhibition-a"><img class="w-100"
                        src="<?php echo wp_get_attachment_image_src(get_sub_field('drawing_image'),'full')[0];?>"
                        alt="">
                    <div>
                        <?php
                            
                            echo get_sub_field('description');
                            ?>
                    </div>
                </a>


            </div>
            <?php
                    
                }
            }
            ?>

            <?php
// for($i=0;$i<8;$i++)
// {
?>
            <!-- <div class="col-3 mb-4">
                    <a href="" class="exhibition-a"><img class="w-100"
                            src="http://64.227.13.14/cassian-lau/wp-content/uploads/2022/06/temp-img.png" alt="">
                        <div>One <br>
                            acrylic and marker on canvas 76 cm x 61 cm</div>
                    </a>


                </div> -->

            <?php
// }
?>
        </div>

        <?php
                            
                           }

                        }
                    }
                }
            }
            // The Loop
            // if ( $the_query->have_posts() ) {
            //     while ( $the_query->have_posts() ) {
            //         $the_query->the_post();
                   
                    // if( have_rows('groups') )
                    // {
                    //     while( have_rows('groups') )
                    //     {
                    //        $group_name= get_sub_field('group_name');
                    //        if($group_name==$_REQUEST['gn'])
                    //        {
                    //         echo 1;
                    //        }

                    //     }
                    // }
                    

            //     }
            // }

        
           ?>




    </div>
    <div class="col-lg-2 col-md-12 col-sm-12 col--12 ">

        <?php
echo get_template_part( 'menu' );

?>
    </div>


</div>
</div>
<?php
get_footer();