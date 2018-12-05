<?php 
/*
Template name: Services Interior / Single
*/

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
            <li>
              <a href="<?php echo get_the_permalink($post->post_parent); ?>">
                <?php echo get_the_title($post->post_parent); ?>
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
      <div class="column column-1-4">
        <?php get_sidebar(); ?>
      </div>
      <div class="column column-3-4">
        <div class="row">
        <?php 

        $images = get_field('top_images');
        $size = 'full'; // (thumbnail, medium, large, full or custom size)

        if( $images ): ?>
            <?php foreach( $images as $image ): ?>
                <div class="column column-1-2">
                  <a href="<?php echo wp_get_attachment_image_url( $image['ID'], $size ); ?>" class="prettyPhoto cm-preload" title="">
                    <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
                  </a>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
        </div>
        <div class="row content">
          <?php the_content(); ?>
        </div>
        <div class="row page-margin-top">
          <div class="column column-1-2">
            <h4>WE GUARANTEE</h4>
            <p class="margin-top-14">Our continuous pursuit for perfection has resulted in consistent growth each year. Our focus is to listen to our clients, understand their needs and provide the exceptional level of residential and commercial painting services.</p>
            <p>If for any reason you aren't happy with our painting services please contact us. We will come back and correct the specific areas that didn't meet your expectations. In case you need a special painting service we are happy to fulfill every request in order to exceed your expectations.</p>
          </div>
          <div class="column column-1-2">
            <h4>OUR MISSION</h4>
            <p class="margin-top-14">Founded in 1995 we became one of the leading providers of residential and commercial painting solutions in DFW. Our mission is to:</p>
            <ul class="list margin-top-10">
              <li class="template-tick-1">Deliver high quality and consistent services.</li>
              <li class="template-tick-1">Use environmentally friendly painting products.</li>
              <li class="template-tick-1">Provide stable jobs with resonable wages.</li>
              <li class="template-tick-1">Concentrate our resources on maintaining standards.</li>
              <li class="template-tick-1">Make you an extremely satisfied customer.</li>
            </ul>
          </div>
        </div>
        <div class="row margin-top-89">
          <h2 class="align-center green">Interested in <?php echo get_the_title(); ?>?<br>Please call now: <a href="tel:2507257052">250 725 7052</a></h2>
          <p class="description align-center margin-top-20">or send us a message</p>
        </div>
        <div class="row page-margin-top">
          <form class="contact-form" id="contact-form" method="post" action="contact_form/contact_form.php">
            <div class="row flex-box">
              <fieldset class="column column-1-2">
                <label>YOUR NAME</label>
                <input class="text-input" name="name" type="text" value="">
                <label>YOUR EMAIL</label>
                <input class="text-input" name="email" type="text" value="">
                <label>YOUR PHONE</label>
                <input class="text-input" name="phone" type="text" value="">
              </fieldset>
              <fieldset class="column column-1-2">
                <label>MESSAGE</label>
                <textarea name="message"></textarea>
              </fieldset>
            </div>
            <div class="row margin-top-30">
              <div class="column column-1-1">
                <input type="hidden" name="action" value="contact_form" />
                <div class="row margin-top-15 padding-bottom-16 align-center">
                  <a class="more submit-contact-form" href="#" title="Send message">Send message</a>
                </div>
              </div>
            </div>
          </form>
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