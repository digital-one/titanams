<?php /* Template Name: Contact */ ?>
<?php get_header() ?>
        <main id="main" role="main" class="container">
            <div class="inner">
            <section id="intro">
            <h1>Contact Us</h1>
          <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]') ?>
        </div>
    </section>
  </div>
        </main>
<?php get_footer() ?>
