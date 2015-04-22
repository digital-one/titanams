<?php
// Theme support
add_theme_support('post-thumbnails');
add_image_size('bio-tn', 320, 500, false);
add_image_size('desktop-bg',1920,1200,true);
add_image_size('mobile-bg',360,640,true);

set_post_thumbnail_size( 150, 200,false); 

function custom_image_sizes($sizes) {
      unset( $sizes['medium']);
      unset( $sizes['large']);
	 //unset( $sizes['full'] ); // removes full  size if needed
$myimgsizes = array(
	"bio-tn" => __("Bio Thumbnail" ),
  "desktop-bg" => __("Background Image" ),
  "mobile-bg" => __("Mobile Background Image" )
  );
     
       $newimgsizes = array_merge($sizes, $myimgsizes);
	    return $newimgsizes;
}
add_filter('image_size_names_choose', 'custom_image_sizes');



/*
add_filter( 'admin_post_thumbnail_html', 'add_featured_image_instruction');
function add_featured_image_instruction( $content ) {
   
  return $content .= '<p>Upload jpg image 800x1200 pixels (portrait) or 1200x800 pixels (landscape) @72dpi</p>';

}

*/
?>