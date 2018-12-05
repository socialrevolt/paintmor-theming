<?php 

get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<div class="theme-page padding-bottom-100">
  <div class="row gray full-width page-header vertical-align-table">
    <div class="row">
      <div class="page-header-left">
        <h1><?php the_title(); ?></h1>
      </div>
      <div class="page-header-right">
        <div class="bread-crumb-container">
          <ul class="bread-crumb">
            <li>
              <a title="Home" href="<?php echo site_url(); ?>">
                Home
              </a>
            </li>
            <li class="separator">
              &#47;
            </li>
            <?php if ($post->parent) { ?>
            <li>
              <a href="<?php echo get_the_permalink($post->post_parent); ?>">
                <?php echo get_the_title($post->post_parent); ?>
              </a>
            </li>
          <?php } ?>
            <li class="separator">
              &#47;
            </li>
            <li>
              <?php echo get_the_title(); ?>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
   <div class="clearfix">
    <div class="row page-margin-top-section">
      <div class="column column-1-4">
        <?php get_sidebar(); ?>
      </div>
      <div class="column column-3-4">
        <div class="row">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php endwhile; ?>
<?php else: ?>
  <article>
    <h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
  </article>
<?php endif; ?>

<?php get_footer(); ?>
