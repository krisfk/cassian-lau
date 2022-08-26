<ul class="side-menu">

    <?php
    
    $main_menu = wp_get_menu_array('main menu');
    foreach ($main_menu as $menu_item) {
    
    $url = $menu_item['url'];
    $title = $menu_item['title'];
    ?>
    <li><a href="<?php echo $url;?>"><?php echo $title;?></a></li>
    <?php
    }
    ?>

    <!-- <li><a href="<?php echo get_site_url()?>">Home</a></li>
    <li><a href="<?php echo get_site_url()?>/bio">Bio</a>
         <ul class="sub-menu">
            <li><a href="<?php echo get_site_url()?>/bio">Bio</a></li>
            <li><a href="<?php echo get_site_url()?>/cv">CV</a></li>
        </ul> 
    </li>

    <li><a href="<?php echo get_site_url()?>/artworks">Artworks</a></li>
    <li><a href="javascript:void(0);">Shop</a></li>
     <li><a href="<?php echo get_site_url()?>/blog">Blog</a></li> 
     <li><a href="<?php echo get_site_url()?>/interview">Interview</a></li> 
    <li><a href="<?php echo get_site_url()?>/contact">Contact</a></li>
 -->

</ul>