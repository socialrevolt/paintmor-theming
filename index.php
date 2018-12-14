<?php get_header(); ?>
</div>

<!-- Slider Revolution -->
<div class="revolution-slider-container">
  <div class="revolution-slider" data-version="5.4.5">
    <ul>
      <!-- SLIDE 1 -->
      <li data-transition="fade" data-masterspeed="500" data-slotamount="1" data-delay="6000">
        <!-- MAIN IMAGE -->
        <img src="https://socialrevoltdesigns.com/demo/paintmmor/wp-content/uploads/2018/06/pexels-photo-106399.jpeg" alt="slidebg1" data-bgfit="cover">
        <!-- LAYERS -->
        <!-- LAYER 01 -->
        <div class="tp-caption"
          data-frames='[{"delay":500,"speed":1500,"from":"y:-40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]'
          data-x="center"
          data-y="['211', '257', '160', '218']"
          >
          <h4>Family Owned Professional Painting Services in DFW</h4>
        </div>
        <!-- LAYER 02 -->
        <div class="tp-caption"
          data-frames='[{"delay":900,"speed":2000,"from":"y:40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]'
          data-x="center"
          data-y="['273', '313', '200', '260']"
          >
          <h2><a href="?page=service_calculator" title="Estimate Total Costs">YOUR VISION</a></h2>
        </div>
        <!-- LAYER 03 -->
        <div class="tp-caption"
          data-frames='[{"delay":1100,"speed":2000,"from":"y:40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]'
          data-x="center"
          data-y="['345', '368', '236', '290']"
          >
          <h2 class="slider-subtitle"><strong>PAINTED AND PERFECTED</strong></h2>
        </div>
        <!-- LAYER 04 -->
        <div class="tp-caption"
          data-frames='[{"delay":1500,"speed":1500,"from":"y:40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]'
          data-x="center"
          data-y="['476', '478', '304', '353']"
          >         
          <div class="align-center">
            <a class="more" href="<?php echo site_url(); ?>/contact" title="Service calculator">Get Started</a>
          </div>
        </div>
        <!-- / -->
      </li>
    </ul>
  </div>
</div>

<div class="row page-margin-top-section">
  <ul class="features-list">
    <li class="column column-1-3">
      <div class="icon features-person"></div>
      <h4>WHO WE ARE</h4>
      <p>Family-owned and founded in 1995, we became one of the leading providers of residential and commercial painting solutions in DFW.</p>
    </li>
    <li class="column column-1-3">
      <div class="icon features-task"></div>
      <h4>WHAT WE DO</h4>
      <p>We provide professional painting services designed to keep your home beautiful and maintained, giving you time to focus on the things you love.</p>
    </li>
    <li class="column column-1-3">
      <div class="icon features-home-4"></div>
      <h4>OUR MISSION</h4>
      <p>To provide exceptional residential and commercial painting services the right way, the first time.</p>
    </li>
  </ul>
</div>

<div class="row full-width gray padding-top-89 padding-bottom-96 page-margin-top-section">
  <div class="row">
    <h2 class="box-header">OUR PROFESSIONAL PAINTING SERVICES</h2>
    <p class="description align-center">Your time off is for you and your family. Let us handle your painting service needs.</p>

    <?php 
            
      $items = wp_get_nav_menu_items('Homepage Services'); 
      ?>

    <div class="carousel-container margin-top-65 clearfix">
      <ul class="services-list horizontal-carousel clearfix page-margin-top">



          <?php foreach ($items as $item) { ?>

            <li class="column column-1-3">
              <a href="<?php echo $item->url; ?>">
                <div class="post-image" style="background: url('<?php echo get_the_post_thumbnail_url($item->object_id); ?>') no-repeat center center; background-size: cover; -webkit-background-size: cover; -moz-background-size: cover;"></div>
              </a>
              <h4 class="box-header"><a href="<?php echo $item->url; ?>" title="House Cleaning"><?php echo $item->title; ?></a></h4>
              <p>Interior and exterior painting services with precision for the right price.</p>
            </li>
          <?php } ?>        
      </ul>
      <div class="cm-carousel-pagination"></div>
    </div>
  </div>
</div>

<div class="row full-width gray padding-top-89 padding-bottom-96 parallax parallax-1 overlay">
  <div class="row">
    <h2 class="box-header white">WE KNOW PAINTING. PERIOD.</h2>
    <p class="description align-center white">Let us help you turn your vision into a reality<br>using top of the line products paired with proven processes.</p>
    <div class="tabs white no-scroll margin-top-27 clearfix">
      <ul class="tabs-navigation clearfix">
        <li>
          <a href="#our-customers" title="Our Customers" class="features-team">
            OUR CUSTOMERS
          </a>
        </li>
        <li>
          <a href="#the-environment" title="The Environment" class="features-leaf">
            OUR PRODUCTS
          </a>
        </li>
        <li>
          <a href="#communication" title="Communication" class="features-megaphone">
            OUR COMMITTMENT
          </a>
        </li>
      </ul>
      <div id="our-customers">
        <p>Our services are affordable and our experts are highly trained. If for any reason you aren't happy with our professional painting services,let us know. We are willing to return to address any specific areas that didn't meet your expectations. Nothing is more important to us than your satisfaction.</p>
      </div>
      <div id="the-environment">
        <p>Our painting services are affordable and our painting experts are highly trained. If for any reason you aren't happy with our professional painting services, contact Paintmor. We will come back and handle the specific areas that didn't meet your expectations. Nothing is more important to us than your satisfaction.</p>
      </div>
      <div id="communication">
        <p>Our painting services are affordable and our painting experts are highly trained. If for any reason you aren't happy with our professional painting services, contact Paintmor. We will come back and handle the specific areas that didn't meet your expectations. Nothing is more important to us than your satisfaction.</p>
      </div>
    </div>
  </div>
</div>

<div class="row margin-top-89">
  <div class="row">
    <h2 class="box-header">WHY CHOOSE PAINTMOR?</h2>
    <p class="description align-center">Franchise level operation. Mom and pop service. Over 25 years of painting experience.</p>
    <div class="row page-margin-top">
      <div class="column column-1-4">
        <ul class="features-list align-right margin-top-30">
          <li>
            <div class="icon features-diamond"></div>
            <h4>ATTENTION TO DETAIL</h4>
            <p>From baseboards to ceilings, our professional process works to gauruntee the results you deserve.</p>
          </li>
          <li>
            <div class="icon features-umbrella"></div>
            <h4>INSURED AND LOCAL</h4>
            <p>Our painters are insured and bonded. No need to worry about inviting them into your home or place of business.</p>
          </li>
        </ul>
      </div>
      <div class="column column-1-2 align-center">
        <div class="image-wrapper">
          <img src="https://socialrevoltdesigns.com/demo/paintmmor/wp-content/uploads/2018/09/square.jpg" alt="" class="radius border">
        </div>
      </div>
      <div class="column column-1-4">
        <ul class="features-list margin-top-30">
          <li>
            <div class="icon features-eco"></div>
            <h4>THE RIGHT PRICE</h4>
            <p>We pride ourselves on meeting the goals of our customers with affordability in mind. We'll work with you to get professional painting services at a perfect price.</p>
          </li>
          <li>
            <div class="icon features-maid"></div>
            <h4>RELIABLE CREWS</h4>
            <p>From residential to commercial, our crews are dependable and trained to understand your specific service needs.</p>
          </li>
        </ul>
      </div>
    </div>
    <div class="align-center margin-top-65 padding-bottom-16">
      <a class="more" href="<?php echo site_url(); ?>/about-paintmor" title="Learn more">Learn more</a>
    </div>
  </div>  
</div>


<div class="row full-width flex-box page-margin-top-section">
  <div class="column column-1-2 background-2">
    <a class="flex-hide" href="" title="Window Cleaning">
      <img src="http://placehold.it/960x750" alt="">
    </a>
  </div>
  <div class="column column-1-2 padding-bottom-96">
    <div class="row padding-left-right-100">
      <h2 class="box-header align-left margin-top-89">LET'S GET STARTED</h2>
      <p class="description">Paintmor provides a variety of professional painting services in DFW. Fill out the form below, and we'll handle your request quickly and accordingly!</p>
      <div class="row page-margin-top">
        <form class="contact-form" id="contact-form" method="post" action="contact_form/contact_form.php">
          <div class="row flex-box">
            <fieldset class="column column-1-1">
              <?php echo do_shortcode('[contact-form-7 id="309" title="Contact form 1"]'); ?>
              <!-- <label>YOUR NAME</label>
              <input class="text-input" name="name" type="text" value="">
              <label>YOUR EMAIL</label>
              <input class="text-input" name="email" type="text" value="">
              <label>YOUR PHONE</label>
              <input class="text-input" name="phone" type="text" value="">
              <label>MESSAGE</label>
              <textarea name="message"></textarea> -->
            </fieldset>
          </div>
          <!-- <div class="row margin-top-30">
            <div class="column column-1-1">
              <input type="hidden" name="action" value="contact_form" />
              <div class="row margin-top-15 padding-bottom-16 align-center">
                <a class="more submit-contact-form" href="#" title="Send message">Send message</a>
              </div>
            </div>
          </div> -->
        </form>
      </div>
    </div>
  </div>
</div>

<div class="row page-margin-top-section">
  <div class="column column-1-2">
    <h2 class="box-header">ABOUT PAINTMOR PAINTERS</h2>
    <p class="description align-center">DFW's most trusted painting service for residential and commercial painting.</p>
    <p class="align-center padding-0 margin-top-27 padding-left-right-35">Founded in 1995, Paintmor quickly built a reputation as one of the leading providers of residential and commercial painting solutions. Our continuous pursuit for perfection has resulted in consistent growth each year. Our focus is to listen to our clients, understand their needs, and provide the exceptional level of painting service that are sure to meet and exceed expectations.</p>
    <div class="align-center page-margin-top padding-bottom-16">
      <a class="more" href="<?php echo site_url(); ?>/about-paintmor" title="Learn more">Learn more</a>
    </div>
  </div>
  <div class="column column-1-4">
    <div class="row">
      <a href="" class="prettyPhoto cm-preload">
        <img src='https://socialrevoltdesigns.com/demo/paintmmor/wp-content/uploads/2018/06/159045.jpeg' alt='img'>
      </a>
    </div>
    <div class="row margin-top-30">
      <a href="" class="prettyPhoto cm-preload">
        <img src='https://socialrevoltdesigns.com/demo/paintmmor/wp-content/uploads/2018/06/276508.jpeg' alt='img'>
      </a>
    </div>
  </div>
  <div class="column column-1-4">
    <a href="" class="prettyPhoto cm-preload">
      <img src='https://kimberlypainting.com/wp-content/uploads/2014/11/Painter.png' alt='img'>
    </a>
  </div>
</div>


<div class="row margin-top-89">
  <h2 class="align-center green">Ready for a FREE Consultation?<br>Please call now: <a href="tel:9723090161">(972) 309-0161</a></h2>
  <p class="description align-center margin-top-20">or send us a message</p>
</div>
<div class="row page-margin-top">
  <form class="contact-form" id="contact-form" method="post" action="contact_form/contact_form.php">
    <div class="row flex-box">
      <fieldset class="column column-1-1">
        <?php echo do_shortcode('[contact-form-7 id="309" title="Contact form 1"]'); ?>
        <!-- <label>YOUR NAME</label>
        <input class="text-input" name="name" type="text" value="">
        <label>YOUR EMAIL</label>
        <input class="text-input" name="email" type="text" value="">
        <label>YOUR PHONE</label>
        <input class="text-input" name="phone" type="text" value="">
        <label>MESSAGE</label>
        <textarea name="message"></textarea> -->
      </fieldset>
    </div>
    <!-- <div class="row margin-top-30">
      <div class="column column-1-1">
        <input type="hidden" name="action" value="contact_form" />
        <div class="row margin-top-15 padding-bottom-16 align-center">
          <a class="more submit-contact-form" href="#" title="Send message">Send message</a>
        </div>
      </div>
    </div> -->
  </form>
</div>



<?php get_footer(); ?>
