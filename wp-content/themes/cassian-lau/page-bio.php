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
        <!-- <h1>About Myself - BIO</h1>

            <img class="float-end float-end ps-4 pb-4" style="width:300px"
                src="http://64.227.13.14/cassian-lau/wp-content/uploads/2022/06/158019336_10158032193583097_235722443919379221_n.jpeg"
                alt="">

            Cassian Lau was born in Hong Kong on April 26, 1968. According to his siblings, Cassian's interest in art
            started at an early age because he was an annoying and needy child. His sisters would give Cassian stacks of
            paper everyday and asked him to make drawings on all the paper in order to keep him occupied and off their
            backs. At the age of 6, Cassian moved to Toronto, Canada. He learned English by reading American comic books
            and watching American television. As such, Cassian acquired a love of North American popular culture. This
            love of pop culture would extend into a love of many world cultures which would later strongly influence his
            art work.
            <br><br>
            Canada provided a strong educational system which helped Cassian develop a life long curiosity to keep
            learning. Canada also instilled a sense of multiculturalism in Cassian that is exemplified by the various
            references to different cultures and styles including influences from Australian and Canadian aboriginal
            art, European artistic heritage, American popular culture, Asian art, manga, etc. Canada's multicultural
            population has allowed Cassian's work to mix various themes and influences from all over the world.
            <br><br>
            Growing up in a western country had Cassian questioning his identity as an ethnic Hong Kong Chinese and as a
            Canadian from an early age. A yearning to learn more about Chinese culture stemmed from this conflict of
            west versus east which would later become a merging of western and eastern images, cultures, iconography,
            words, literature, music and many other facets of both sides in his work.
            <br><br>
            Cassian attended York Mills Collegiate in Toronto and obtained his degrees in Fine Arts and Business
            Administration at York University, Toronto, Ontario, Canada. Upon the completion of his studies, Cassian
            returned to Hong Kong to be with his family and was expected to enter the business community by his family.
            Cassian started a chain of retail shops selling imported designer clothing from all around the world. He was
            afforded the opportunity to view the works of great masters and contemporary art at many museums and
            galleries in the fashion capitals of the world. This first career of Cassian's took him and his now wife all
            around the world many times each year. On these buying trips, Cassian would meet many tremendous artists,
            musicians and designers which fuelled his love of all arts.
            <br><br>
            After the financial crisis of 2008, Cassian's business fell upon difficult times and it was this pivotal
            year in which he made a critical decision. Although Cassian loved fashion and the creative aspects of
            retail, he reflected on his role in life, his purpose and the value of what he was doing. When one falls,
            does one pick oneself up and continue drudging along the same path or does one have an opportunity to change
            the direction of one's life? Cassian decided that he could wait no more and made the choice to embark on his
            second career as an artist.
            <br><br>
            Cassian's art encompasses many styles and influences. He finds inspiration from any and everywhere. Although
            Cassian's work can be considered Pop art, the elements in the work and the messages he tries to convey go
            far beyond this categorisation.
            <br><br>
            Cassian is developing in various styles at the moment. His two main styles are 1) of the allegorical
            tradition akin to the tradition of Hans Holbein Jr in which many events are happening in a painting of many
            details, using visual metaphors and iconography to push story narratives and 2) of the Pop tradition using
            popular images, calligraphy, to collage or “copy and paste” paint of various visual elements.
            <br><br>
            Cassian's work also includes strong social messages. As a painter, he records and expresses what he feels
            are social injustices in the world. In many of his works, he quotes many ancient scholars extolling their
            wisdom. It is important to him that the ethics and morals of his Chinese heritage should be refreshed and
            reminded again for those of us today. We must care more. We must love more and we must help more. However,
            Cassian is the first to admit that he is by no means a virtuous or sanctimonious man. He knows his faults
            but he, “..strives to be better, if even just a little, day by day”.

            <hr class="mt-4 mb-4">

            <h3> Cassian Lau 劉啟舜</h3>
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
 -->


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