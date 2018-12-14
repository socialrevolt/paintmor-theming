<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<div class="theme-page padding-bottom-100">
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
							<a title="Blog" href="<?php echo site_url(); ?>/blog">
								Blog
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
		<div class="row page-margin-top-section">
			<div class="column column-3-4">
				<div class="blog clearfix">
					<div class="post single">

						<!-- Thumbnail and title -->
						<a href="<?php echo get_the_permalink(); ?>" title="<?php echo get_the_title(); ?>" class="post-image" style="height: auto !important">
							<div class="post-date">
								<div class="month"><?php the_time('F'); ?></div>
								<h4><?php the_time('j'); ?></h4>
							</div>
							<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                <?php the_post_thumbnail(); ?>
              <?php endif; ?>
						</a>
						<h2><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
						<!-- End thumbnail and title -->

						<!-- Post metadata -->
						<div class="post-content-details-container clearfix">
							<ul class="post-content-details left">
								<li><?php the_time('F j, Y'); ?></li>
								<li>in <?php get_the_category(); ?></li>
								<li>by <?php the_author_posts_link(); ?></li>
							</ul>
							<!-- <ul class="post-content-details right">
								<li class="template-display"><a href="?page=post">250</a></li>
								<li class="template-comment"><a class="scroll-to-comments" href="?page=post#comments-list" title="3 comments">3</a></li>
							</ul> -->
						</div>
						<!-- End post metadata -->

						<div class="content-block">
							<?php the_content(); ?>



							<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
						</div>


						<!-- Comments -->
						<div class="row margin-top-65">

							<?php comments_template(); ?>

						</div>
						<!-- End comments -->

					</div>
				</div>
				<div class="column column-1-4 cm-smart-column">
				<?php get_sidebar(); ?>
			</div>
			</div>
			
		</div>
	</div>
</div>

<?php endwhile; ?>

<?php else: ?>

<!-- article -->
<article>

	<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

</article>
<!-- /article -->

<?php endif; ?>

<?php get_footer(); ?>
