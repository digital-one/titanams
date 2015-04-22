<!-- footer -->
        <footer id="footer">
            <div class="container">
                <div class="contacts">
            <p><span>London Office: <a href="tel:02035420970">+44 (0)203 542 0970</a></span><span>Harrogate Office: <a href="tel:01423816155">+44 (0)1423 816 155</a></p>
            <p><span><a href="mailto:info@titanams.co.uk" target="_blank">info@titanams.co.uk</a></span></p>
        </div>
           <p><small>&copy;2015 Titan Asset Management Solutions. All rights reserved</small></p>
           <p><small>Titan Asset Management Solutions is a trading name of Titan Investment Partners Ltd.<br />30 St James’s Square, London, SW1Y 4JH<br />Company Registration number - 08091367<br />Authorised and regulated by the Financial Conduct Authority. Registration No. 590782</small></p>
           <p><small>Investors' capital is at risk. Spread betting and CFD trading are leveraged products and may result in losses that exceed initial deposits. They may not be suitable for everyone.<br />Note: Tax rules are subject to change and vary according to one's individual circumstance. Independent advice should be sought if necessary.</small></p>
</div>
        </footer>
        <!-- /footer -->
        <!--scripts-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<!-- Load jQuery from a local copy if loading from Google fails -->
<!--<script>window.jQuery || document.write('<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.10.1.min.js"><\/script>')</script>--> 
<script src="<?php echo get_template_directory_uri(); ?>/js/slick/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/imagesLoaded.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
<?php
    $src="";
    $images = array();
    if(!is_front_page()):
    $size  = wp_is_mobile() ? 'mobile-bg' : 'desktop-bg';
    list($src,$w,$h) = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),$size);
    $images[] = $src;
    else:

    if(get_field('slider',$post->ID)):
        $slider_images = array();
while(the_repeater_field('slider',$post->ID)): 
    $size  = wp_is_mobile() ? 'mobile-bg' : 'desktop-bg';
list($src,$w,$h) = wp_get_attachment_image_src(get_sub_field('slide_image'), $size);
$slider_images[] = $src;
endwhile;
endif;
$images = $slider_images;
endif;
?>
<script>
$(function(){
var _src = <?php echo JSON_encode($images);?>;
<?php if(!is_front_page()): ?>
preloadBgImages(_src);
<?php else: ?>
preloadBgImages(_src,initHomeSlider);
<?php endif ?>
});
</script>
</body>
     </html>