<?php 
/*
Template name: Full Width
*/

get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); $title = get_the_title(); ?>

<div class="theme-page">
  <div class="clearfix">

      <?php the_content(); ?>

  </div>
</div>

<?php endwhile; ?>
<?php else: ?>
  <article>
    <h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
  </article>
<?php endif; ?>

<?php get_footer(); ?>