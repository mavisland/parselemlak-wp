	<footer class="site-footer">
		<div class="footer-links">
			<div class="wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<div class="widget">
								<div class="widget-inner">
									<div class="widget-body">
<?php
wp_nav_menu( array(
	'theme_location'  => 'footer',
	'menu'            => '',
	'container'       => false,
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'widget-links links-3-col',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
	'depth'           => 0,
));
?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-widgets">
			<div class="wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="left-col">
								<div class="widget">
									<div class="widget-inner">
										<div class="widget-body">
<?php
$social_facebook  = ot_get_option("social_facebook");
$social_twitter   = ot_get_option("social_twitter");
$social_instagram = ot_get_option("social_instagram");
$social_youtube   = ot_get_option("social_youtube");
?>
											<ul class="social-links">
<?php if ($social_facebook != ""): ?>
												<li><a href="<?php echo esc_url( $social_facebook ); ?>" title="Facebook"><i class="fa fa-facebook"></i></a></li>
<?php endif; ?>
<?php if ($social_twitter != ""): ?>
												<li><a href="<?php echo esc_url( $social_twitter ); ?>" title="Twitter"><i class="fa fa-twitter"></i></a></li>
<?php endif; ?>
<?php if ($social_instagram != ""): ?>
												<li><a href="<?php echo esc_url( $social_instagram ); ?>" title="Instagram"><i class="fa fa-instagram"></i></a></li>
<?php endif; ?>
<?php if ($social_youtube != ""): ?>
												<li><a href="<?php echo esc_url( $social_youtube ); ?>" title="Youtube"><i class="fa fa-youtube"></i></a></li>
<?php endif; ?>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
<?php
$contact_phone = ot_get_option("contact_phone");
if ($contact_phone != ""): ?>
							<div class="right-col">
								<a href="tel:<?php echo str_replace(' ', '', $contact_phone); ?>" class="contact-phone"><?php echo esc_html($contact_phone); ?></a>
							</div>
<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="left-col">
								<span class="copyright">&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?></span>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="right-col">
								<a href="http://krcmedya.com/" class="madeby" title="KRC Medya Grup">
									<span class="sr-only">KRC Medya Grup</span>
									<img src="<?php echo get_template_directory_uri(); ?>/images/krcmedya.png" alt="KRC Medya Grup">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
<?php wp_footer(); ?>
</body>
</html>