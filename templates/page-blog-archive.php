<?php 
/*
Template name: Blog Archive
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
              Blog
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

<?php endwhile; ?>

<?php endif; ?>


  <div class="clearfix">
    <div class="row page-margin-top-section">
      <div class="column column-3-4">
        <ul class="blog clearfix">

          <?php 

          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 10
          );

          $query = new WP_Query($args);

          if ($query->have_posts()): while ($query->have_posts()) : $query->the_post(); ?>

            <li>
              <a href="<?php echo get_the_permalink(); ?>"  class="post-image" style="height: auto !important;">
                <div class="post-date">
                  <div class="month"><?php the_time('F'); ?></div>
                  <h4><?php the_time('j'); ?></h4>
                </div>
                <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                  <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                <?php endif; ?>
              </a>
              <h2><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
              <div class="post-content-details-container clearfix">
                <ul class="post-content-details left">
                  <li><?php the_time('F j, Y'); ?></li>
                  <li>in <?php get_the_category(); ?></li>
                  <li>by <?php the_author_posts_link(); ?></li>
                </ul>
                <!-- <ul class="post-content-details right">
                  <li class="template-display"><a href="?page=post">250</a></li>
                  <li class="template-comment"><a href="?page=post#comments-list" title="3 comments">3</a></li>
                </ul> -->
              </div>
              <p><?php echo get_the_excerpt(); ?><a href="?page=post">Read more</a></p>
            </li>

          <?php endwhile; ?>

          <?php else: ?>

            <!-- article -->
            <article>
              <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
            </article>
            <!-- /article -->

            <?php wp_reset_postdata(); ?>

          <?php endif; ?>
        </ul>
      </div>
      <div class="column column-1-4 cm-smart-column">
        <div class="cm-smart-column-wrapper">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
  </div>
</div>

</article>


<?php get_footer(); ?>