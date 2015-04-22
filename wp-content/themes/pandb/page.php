<?php /* Template Name: Single Column */ ?>
<?php get_header() ?>
        <main id="main" role="main" class="container">
            <div class="inner">
                <?php
                $gold = get_field('gold_heading',$post->ID);
                ?>
            <section id="intro" class="section<?php if($gold):?> invert<?php endif ?>">
                <?php echo get_field('introduction',$post->ID) ?>
          <!--  <h2>Retail investment management facilitation solutions  in a CFD or spreadbet wrapper – a one stop shop umbrella offering</h2>
            <p>If you are an FCA registered firm or a suitably qualified individual being able to hold the CF30 designation, P&amp;B AM can help in the creation of appropriate investment products housed, uniquely, within either a spreadbet or CFD wrapper for roll out to end retail client bases.</p>-->
        </section>
        <?php 
        $left_col = get_field('left_column',$post->ID);
        if(!empty($left_col)):
            ?>
        <section class="section">
        <div class="column">
            <?php echo get_field('left_column',$post->ID) ?>
          <!--  <p>Bespoke solutions including the creation of appropriate mandates for the client risk profile(s), the production of compliant marketing material, ongoing monitoring of the product offering, investment returns reporting and wholesale compliance cover.</p>
<p>Alternately, if you are looking to launch a new managed spreadbet or CFD product and require appointed representative status (as defined by Section 39 of the FSMA) then subject to due diligence, we can facilitate the launch of such a product for both the professional and retail end client bases.</p>-->
        </div>
        <div class="column">
            <?php echo get_field('right_column',$post->ID) ?>
           <!-- <p>Our breadth of knowledge incorporates fund management expertise including portfolio construction, research provision, risk modelling, mandate creation etc etc. aswell as the all-important compliance package to ensure safe and appropriate operation for all parties.</p><p>With our unique spread betting and CFD management licence we can facilitate the creation of hedge fund type products for retail investors that enable management fee uplifts and custom mandate/portfolio construction for HNW’s and family offices to take advantage of the very attractive tax advantages of our structure.</p> -->
        </div>
</section>
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
