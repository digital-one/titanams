<?php /* Template Name: Single Column */ ?>
<?php get_header() ?>
        <main id="main" role="main" class="container">
            <div class="inner">
                <?php
                $gold = get_field('gold_heading',$post->ID);
                ?>
                <?php
if(get_field('sections_rptr',$post->ID)):
while(the_repeater_field('sections_rptr',$post->ID)): 
?>
<section class="section repeater<?php if($gold):?> invert<?php endif ?>">
                <?php echo get_sub_field('section') ?>
          <!--  <h2>Retail investment management facilitation solutions  in a CFD or spreadbet wrapper – a one stop shop umbrella offering</h2>
            <p>If you are an FCA registered firm or a suitably qualified individual being able to hold the CF30 designation, P&amp;B AM can help in the creation of appropriate investment products housed, uniquely, within either a spreadbet or CFD wrapper for roll out to end retail client bases.</p>-->
        </section>
      <?php endwhile ?>
  <?php endif ?>
<?php if(get_field('links',$post->ID)): ?>
<section id="links"><ul>
<?php  while(the_repeater_field('links',$post->ID)): ?>
    <li><a href="<?php echo get_sub_field('button_link') ?>"><?php echo get_sub_field('button_label') ?></a></li>
<?php endwhile ?>
</ul>
    </section>
<?php endif ?>
</div>
</main>
<?php get_footer() ?>
