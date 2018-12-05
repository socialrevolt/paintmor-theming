<?php 
/*
Template name: About Template
*/

get_header(); ?>

<!-- Begin loop -->
<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<div class="theme-page">
  <div class="row gray full-width page-header vertical-align-table">
    <div class="row">
      <div class="page-header-left">
        <h1><?php echo get_the_title(); ?></h1>
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
  <div class="clearfix">
    <?php the_content(); ?>
  </div>
</div>

<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>