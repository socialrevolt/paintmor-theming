<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <meta charset="UTF-8" />

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.2" />
        <meta name="description" content="<?php bloginfo('description'); ?>">

        <meta name="format-detection" content="telephone=no" />
    		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <!--slider revolution-->
        <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css">
        <!--style-->
        <link href='//fonts.googleapis.com/css?family=Raleway:300,400,500&amp;subset=latin-ext' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Lato:300,400,700,900&amp;subset=latin-ext' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/style/reset.css">
        <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/style/superfish.css">
        <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/style/prettyPhoto.css">
        <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/style/jquery.qtip.css">
        <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/style/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/style/animations.css">
        <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/style/responsive.css">
        <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/style/odometer-theme-default.css">
        <!--fonts-->
        <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/fonts/features/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/fonts/template/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/style/custom.css">
        <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/fonts/social/style.css">

		<?php wp_head(); ?>

	</head>
	<body class="site-container" <?php body_class(); ?>>
		<!-- <div class="header-top-bar-container clearfix">
        <div class="header-top-bar">
          <ul class="contact-details clearfix">
            <li class="template-location">
              745 Adelaide Street, Ottawa
            </li>
            <li class="template-mobile">
              <a href="tel:2507257052">250 725 7052</a>
            </li>
            <li class="template-clock">
              08.00 am - 05.00 pm
            </li>
          </ul>
          <ul class="social-icons">
            <li class="show-on-mobiles">
              <a class="template-search" href="#" title="Search"></a>
              <form class="search">
                <input type="text" name="s" placeholder="Type and hit enter..." value="Type and hit enter..." class="search-input hint">
                <fieldset class="search-submit-container">
                  <span class="template-search"></span>
                  <input type="submit" class="search-submit" value="">
                </fieldset>
                <input type="hidden" name="page" value="search">
              </form>
            </li>
            <li class="show-on-mobiles">
              <a href="#" class="template-cart"><span class="cart-items-number">2<span class="cart-items-number-arrow"></span></span></a>
            </li>
            <li>
              <a target="_blank" href="https://facebook.com/QuanticaLabs" class="social-facebook" title="facebook"></a>
            </li>
            <li>
              <a target="_blank" href="https://twitter.com/QuanticaLabs" class="social-twitter" title="twitter"></a>
            </li>
            <li>
              <a href="https://pinterest.com/quanticalabs/" class="social-pinterest" title="pinterest"></a>
            </li>
          </ul>
        </div>
        <a href="#" class="header-toggle template-arrow-vertical-3"></a>
      </div> -->
      <div class="header-container sticky">
        <div class="header clearfix">
          <div class="menu-container first-menu clearfix">

            <!-- Add menu here -->

          </div>
          <div class="logo">
            <h1>
              <a href="<?php echo site_url(); ?>" title="<?php wp_title(''); ?>">
                <!-- Add logo -->
                Paintmor Painters
              </a> 
            </h1>
          </div>
          <a href="#" class="mobile-menu-switch">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
          </a>
          <div class="menu-container clearfix">
            <!-- Add menu -->
            <nav>
              <?php wp_nav_menu(['menu' => 'Header Menu','menu_class' => 'sf-menu']); ?>
            </nav>
          </div>
          <div class="header-icons-container hide-on-mobiles">
            <a class="template-search" href="#" title="Search"></a>
            <form class="search">
              <input type="text" name="s" placeholder="Type and hit enter..." value="Type and hit enter..." class="search-input hint">
              <fieldset class="search-submit-container">
                <span class="template-search"></span>
                <input type="submit" class="search-submit" value="">
              </fieldset>
              <input type="hidden" name="page" value="search">
            </form>
          </div>
        </div>
      </div>

