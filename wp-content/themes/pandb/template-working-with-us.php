<?php /* Template Name: Working With Us */ ?>
<?php get_header() ?>
        <main id="main" role="main" class="container">
            <div class="inner">
           <section id="diagram">
           	<?php list($svg_src,$w,$h) = wp_get_attachment_image_src(get_field('diagram_svg',$post->ID),'full'); ?>
           		<?php list($png_src,$w,$h) = wp_get_attachment_image_src(get_field('diagram_png',$post->ID),'full'); ?>
<img src="<?php echo $svg_src ?>"  onerror="this.src=<?php echo $png_src ?>" />
           </div>
</div>
        </main>
<?php get_footer() ?>
