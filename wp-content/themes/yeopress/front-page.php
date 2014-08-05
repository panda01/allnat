<?php get_header() ?>
<div id="main" class="container">
  <div class="row">
  <?php if(have_posts()) { ?>
      <?php while(have_posts()) { the_post(); ?>
        <article class="col-xs-12 article">
          <h1><?php the_title(); ?></h3>
          <?php the_content(); ?>
        </article>
      <?php } ?>
  <?php } ?>
  </div>
</div>
<?php get_footer() ?>
