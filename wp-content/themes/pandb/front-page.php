<?php get_header() ?>
	<main id="slider" role="main">
        	<?php
if(get_field('slider',$post->ID)):
while(the_repeater_field('slider',$post->ID)): 
	$size  = wp_is_mobile() ? 'mobile-bg' : 'desktop-bg';
list($src,$w,$h) = wp_get_attachment_image_src(get_sub_field('slide_image'), $size);
?>
           <div class="slide" style="background-image:url(<?php echo $src ?>);"><div><h3><?php echo get_sub_field('slide_text')?></h3></div></div>
       <?php endwhile ?>
   <?php endif ?>
        </main>
<?php get_footer() ?>
