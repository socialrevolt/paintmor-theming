			<div class="margin-top-89">
			<div class="row dark footer-row full-width padding-top-30">
				<div class="row padding-bottom-33">
					<div class="column column-1-3">
						<ul class="contact-details-list">
							<li class="features-map">
								<label>SERVING</label>
								<p>Dallas - Ft. Worth</p>
							</li>
						</ul>
					</div>
					<div class="column column-1-3">
						<ul class="contact-details-list">
							<li class="features-phone">
								<label>GIVE US A CALL</label>
								<p><a href="tel:9723090161">(972) 309-0161</a></p>
							</li>
						</ul>
					</div>
					<div class="column column-1-3">
						<ul class="contact-details-list">
							<li class="features-wallet">
								<label>CONTACT US FOR A</label>
								<p><a href="?page=service_calculator" title="Online Service Calculator">Free Consultation</a></p>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row dark-gray footer-row full-width padding-top-61 padding-bottom-36">
				<div class="row row-4-4">
					<div class="column column-1-4">
						<h6>ABOUT PAINTMOR</h6>
						<p class="margin-top-23">We are a family owned and operated painting company doing business for over 10 years. We take your painting project and make them happen quickly, efficiently, and at an affordable price. Our expert staff will take care of everything you need.</p>
						<div class="margin-top-37 padding-bottom-16">
							<a class="more gray" href="<?php echo site_url(); ?>/about" title="Learn more">Learn more</a>
						</div>
					</div>
					<div class="column column-1-4">
						<h6>SERVICE AREAS</h6>
						<ul class="list margin-top-31">
						<?php 
						
						$items = wp_get_nav_menu_items('Service Areas'); 
						foreach ($items as $item) { ?>
							<li class="template-arrow-horizontal-2"><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
						<?php } ?>

						</ul>
					</div>
					<div class="column column-1-4">
						<h6>LATEST POSTS</h6>
						<ul class="latest-post margin-top-42">
							<?php 

							$args = array(
								'posts_per_page' => 3,
								'post_type' => 'post'
							);

							$query = new WP_Query( $args );

							if ( $query->have_posts() ) {
								while ( $query->have_posts() ) {
									$query->the_post(); ?>
									<li>
										<a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a>
										<abbr title="<?php echo get_the_date(); ?>"><?php echo get_the_date(); ?></abbr>
									</li>
								<?php }
								/* Restore original Post Data */
								wp_reset_postdata();
							} else {
								// no posts found
							} ?>
						</ul>
					</div>
					<div class="column column-1-4">
						<h6>CONTACT INFO</h6>
						<ul class="contact-data margin-top-20">
							<li class="template-location"><div class="value">McKinney, TX 75070</div></li>
							<li class="template-mobile"><div class="value"><a href="tel:9723090161">(972) 309-0161</a></div></li>
							<li class="template-email"><div class="value"><a href="mailto:info@paintmorpainters.com">info@paintmorpainters.com</a></div></li>
							<li class="template-clock"><div class="value">Mon-Saturday: 8:00am - 6:00pm</div></li>
							<li class="template-clock"><div class="value">Sunday: closed</div></li>
						</ul>
					</div>
				</div>
				<div class="row page-padding-top">
					<ul class="social-icons align-center">
						<li>
							<a target="_blank" href="https://twitter.com/QuanticaLabs" class="social-twitter" title="twitter"></a>
						</li>
						<li>
							<a href="https://pinterest.com/quanticalabs/" class="social-pinterest" title="pinterest"></a>
						</li>
						<li>
							<a target="_blank" href="https://facebook.com/QuanticaLabs" class="social-facebook" title="facebook"></a>
						</li>
					</ul>
				</div>
				<div class="row align-center padding-top-30">
					<span class="copyright">© Copyright <?php echo date('Y'); ?> <a href="https://socialrevoltagency.com" title="Social Revolt Agency Website" target="_blank"></a> Managed by <a href="http://quanticalabs.com" title="Social Revolt Agency Website" target="_blank">Social Revolt Agency</a></span>
				</div>
			</div>
		</div>
		<a href="#top" class="scroll-top animated-element template-arrow-vertical-3" title="Scroll to top"></a>
		<div class="background-overlay"></div>
		<!--js-->
		<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jquery-1.12.4.min.js"></script>
		<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jquery-migrate-1.4.1.min.js"></script>
		<!--slider revolution-->
		<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jquery.ba-bbq.min.js"></script>
		<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jquery-ui-1.12.1.custom.min.js"></script>
		<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jquery.ui.touch-punch.min.js"></script>
		<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jquery.isotope.min.js"></script>
		<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jquery.easing.1.3.min.js"></script>
		<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jquery.carouFredSel-6.2.1-packed.js"></script>
		<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jquery.touchSwipe.min.js"></script>
		<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jquery.transit.min.js"></script>
		<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jquery.timeago.js"></script>
		<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jquery.hint.min.js"></script>
		<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jquery.costCalculator.min.js"></script>
		<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jquery.parallax.min.js"></script>
		<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jquery.prettyPhoto.js"></script>
		<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jquery.qtip.min.js"></script>
		<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jquery.blockUI.min.js"></script>
		<script type="text/javascript" src="//maps.google.com/maps/api/js?key=AIzaSyD62c6tPJWeEx4Gxb_cXmLLNPxw3D0huPM"></script>
		<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/main.js"></script>
		<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/odometer.min.js"></script>

		<?php wp_footer(); ?>

	</body>
</html>
