<?php 
/*Template Name: Cele projektu*/
get_header(); 

?>
<div class="container">
  <div class="breadcrumbs-wrap">
    <?php
        if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb( '<div id="breadcrumbs" class="breadcrumbs-class">','</div>' );
        }
    ?>
  </div>
  <?php the_title(); ?>
  <?php the_content(); ?>
</div>
<section class="education">
  <div class="container">
    <div class="col col-12">
      <p class="subject">materiały edukacyjne</p>
    </div>
    <div class="row">
      <div class="col col-md-3">
        <div class="edu-wrap">
          <p class="type">scenariusze lekcji</p>
          <img src="<?php echo get_template_directory_uri(); ?>/images/portret.png" alt="" />
          <a href="https://roznialerazem.pl/scenariusze-lekcji/" class="button">odkryj więcej</a>
        </div>
      </div>
      <div class="col col-md-3">
        <div class="edu-wrap">
          <p class="type">filmy</p>
          <img src="<?php echo get_template_directory_uri(); ?>/images/zulte.png" alt="" />
          <a href="https://roznialerazem.pl/filmy/" class="button">odkryj więcej</a>
        </div>
      </div>
      <div class="col col-md-3">
        <div class="edu-wrap">
          <p class="type">prezentacje</p>
          <img src="<?php echo get_template_directory_uri(); ?>/images/jerzy1.jpg" alt="" />
          <a href="https://roznialerazem.pl/prezentacje/" class="button">odkryj więcej</a>
        </div>
      </div>
      <div class="col col-md-3">
        <div class="edu-wrap">
          <p class="type">bibliografia</p>
          <img src="<?php echo get_template_directory_uri(); ?>/images/wons.png" alt="" />
          <a href="https://roznialerazem.pl/bibliografia/" class="button">odkryj więcej</a>
        </div>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>