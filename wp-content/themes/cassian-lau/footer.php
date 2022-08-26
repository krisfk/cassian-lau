<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
</main><!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->

<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

<footer id="colophon" class="site-footer mt-3">

    <div class="container">
        <div class="row justify-content-center gx-4">

            <div class="col-lg-11 col-md-12 col-sm-12 col-12">

                <?php   
                        $footer = get_page_by_path('footer'); 
                        $content = apply_filters( 'the_content', $footer->post_content ); 
                        echo $content;
                        ?>
            </div>



        </div>
    </div>




</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>
<script type="text/javascript">
$(function() {

    $('.parent-a').click(function() {

        $(this).next('.sub-menu').slideDown(200);

    })

    $('.return-btn').click(function() {
        history.back()
    })
})
</script>
</body>

</html>