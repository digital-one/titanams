<?php /* Template Name: Case Study */ ?>
<?php get_header() ?>
        <main id="main" role="main" class="container">
            <div class="inner">
           <section id="diagram">
           	<?php list($svg_src,$w,$h) = wp_get_attachment_image_src(get_field('diagram_svg',$post->ID),'full'); ?>
           		<?php list($png_src,$w,$h) = wp_get_attachment_image_src(get_field('diagram_png',$post->ID),'full'); ?>
<img src="<?php echo $png_src ?>"  />
           </section>
           <?php echo $post->post_content ?>
</div>
        </main>
<?php get_footer() ?>
