<?php /* Template Name: Bios */ ?>
<?php get_header() ?>
        <main id="main" role="main" class="container">
            <div id="bios" class="inner">
                <section id="slider">
<?php
      $args = array(
     'post_type' => 'page',
     'child_of' => $post->ID,
     'sort_order' => 'ASC',
     'posts_per_page' => -1,
     'post_status' => 'publish',
     'sort_column' => 'menu_order'
     );

if($bios = get_pages($args)):
    foreach($bios as $bio):
        list($src,$w,$h) = wp_get_attachment_image_src(get_post_thumbnail_id($bio->ID),'bio-tn');
        ?>
                    <!-- slide -->
                    <div class="slide">
                    <aside><figure><img src="<?php echo $src ?>" alt="<?php echo $bio->post_title ?>" /></figure></aside>
                    <div class="column"><h3><?php echo $bio->post_title ?></h3>
                        <h4><?php echo get_field('job_title',$bio->ID) ?></h4>
                      <?php echo $bio->post_content ?>
<?php
if($email = get_field('bio_email_address',$bio->ID)):
?>
<p>Email – <a href="mailto:<?php echo $email ?>"><?php echo $email ?></a></p>
<?php endif ?>
</div>
</div>
<!-- /slide -->
 <?php endforeach ?>
<?php endif ?>
<?php /*
<button class="slick-prev" data-role="none" type="button" style="display: block;">Previous</button>
<button class="slick-next" data-role="none" type="button" style="display: block;">Next</button>
*/ ?>
 </section>
         
</div>
        </main>
<?php get_footer() ?>
