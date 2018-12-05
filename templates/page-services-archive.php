<?php 
/*
Template name: Services Archive
*/

get_header(); ?>


<!-- Begin loop -->
<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<!-- Begin article -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

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
              <li>
                <?php echo get_the_title(); ?>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <?php the_content(); ?>
    <div class="clearfix">
      <div class="row page-margin-top-section">
        <ul class="services-list gray clearfix">
          <?php $args = array(
            'posts_per_page'   => -1,
            'post_type'        => 'page',
            'post_parent'      => get_the_ID()
          );
          $posts_array = get_posts( $args ); 

            foreach ( $posts_array as $post ) :
            setup_postdata( $post ); ?>

            <li>
              <a href="<?php the_permalink(); ?>">
                <img src="<?php echo get_the_post_thumbnail_url($post->object_id) ?>" alt="">
              </a>
              <h4 class="box-header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
              <p>Complete apartment and house cleaning services by professional cleaners.</p>
            </li>

            <?php 
            endforeach;
            wp_reset_postdata();
          ?>
        </ul>
      </div>
    </div>
  </div>
</article>

<!-- End article -->
<?php edit_post_link(); ?>

<?php endwhile; ?>

<?php else: ?>
  <article>
    <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
  </article>
<?php endif; ?>
<!-- End loop -->

<?php get_footer(); ?>
