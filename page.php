<?php get_header(); ?>

<div class="row">
  <div class="span12">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>

    <?php endwhile; else: ?>
      <p><?php _e('Sorry, this page does not exist.'); ?></p>
    <?php endif; ?>
  </div>
</div>

<?php get_footer(); ?>