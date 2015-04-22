<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js<?php if(is_front_page()):?> home<?php endif ?>"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php wp_title() ?></title> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon-16x16.png" sizes="16x16" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
        <?php gravity_form_enqueue_scripts(1, true); ?>    
        <?php wp_head() ?>
    </head>
    <?php
    /*
    $src="";
    if(!is_front_page()):
    $size  = wp_is_mobile() ? 'mobile-bg' : 'desktop-bg';
    list($src,$w,$h) = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),$size);
    endif;
    */
    ?>
    <?php
    $id = !is_front_page() ? $post->post_name : "home"; 
    ?>
    <body id="<?php echo $id ?>">
     <div id="wrap">
        <!-- header -->
             <header id="header">
                <div class="container">
               <nav id="nav"><a id="mobile-menu">Menu</a>
<?php
  wp_nav_menu( array(
        'menu'=>'Main Navigation',
        'container' => false, 
        'fallback_cb' => 'wp_page_menu'//,
        //'walker' => new subMenu()
        //'menu_class' => 'inline',
        //'link_after' => '<span></span>'
        )
    );
    ?>
<!-- <ul><li class="current-menu-item"><a href="">HOME</a></li><li><a href="">ABOUT US</a></li><li><a href="">MANAGEMENT BIOS</a></li><li><a href="">HNW / PRIVATE CLIENT OFFERINGS</a></li><li><a href="">WORKING WITH US</a></li><li><a href="">ADDITIONAL SERVICES</a></li><li><a href="">CONTACT</a></li></ul>-->
</nav>
               <?php if(is_front_page()):?>
<h1 id="home-link">TITAN ASSET MANAGEMENT SOLUTIONS</h1> 
<?php else: ?>
                    <a href="<?php echo home_url() ?>" id="home-link">TITAN ASSET MANAGEMENT SOLUTIONS</a> 
                <?php endif ?>
</div>
            </header>
            <!-- /header -->