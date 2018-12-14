<?php 
/*
Template name: Contact Template
*/

get_header(); ?>

<!-- Begin loop -->
<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<div class="theme-page padding-bottom-100">
  <div class="clearfix">
    <div class="row gray full-width">
      <div class="column column-1-2">
        <div class="contact-map" id="map" data-scroll-wheel="0"></div>
      </div>
      <div class="column column-1-2 padding-bottom-70">
        <div class="row padding-left-right-100 page-margin-top-section">
          <ul class="features-list clearfix">
            <li class="column column-1-2">
              <div class="icon features-phone"></div>
              <h4>PHONE</h4>
              <p>Phone: <a href="tel:9723090161">(972) 309-0161</a><br>Mobile: <a href="tel:9723090161">(972) 309-0161</a></p>
            </li>
            <li class="column column-1-2">
              <div class="icon features-email"></div>
              <h4>EMAIL</h4>
              <p><a href="mailto:info@paintmorpainters.com">info@paintmorpainters.com</a><br><a href="mailto:info@paintmorpainters.com">info@cleanmate.com</a></p>
            </li>
          </ul>
          <ul class="features-list page-margin-top clearfix">
            <li class="column column-1-2">
              <div class="icon features-clock"></div>
              <h4>BUSINESS HOURS</h4>
              <p>Weekdays: 8.00 am - 5.00 pm<br>Saturday: 8.00 am - 2.00 pm</p>
            </li>
            <li class="column column-1-2">
              <div class="icon features-map"></div>
              <h4><?php echo get_the_title(); ?> Paintmor</h4>
              <p>McKinney, TX 75070</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row page-margin-top-section">
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


<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>