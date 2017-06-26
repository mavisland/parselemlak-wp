	<footer class="site-footer">
		<div class="footer-widgets">
			<div class="wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 col-sm-4">
							<div class="widget">
								<div class="widget-inner">
									<div class="widget-header">
										<h3 class="widget-title">Hakkımızda</h3>
									</div>
									<div class="widget-body">
<?php $footer_about = ot_get_option("footer_about"); ?>
<?php if ($footer_about != ""): ?>
										<?php echo $footer_about; ?>
<?php else : ?>
										<p>Lütfen, Yönetim Paneli üzerinden "Tema Ayarları" sayfasındaki "Alt Bölüm" sekmesinden "Hakkımızda" alanına metin giriniz.</p>
<?php endif; ?>
									</div>
								</div>
							</div>
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
						<div class="col-xs-12 col-sm-4 col-sm-push-4">
							<div class="widget">
								<div class="widget-inner">
									<div class="widget-header">
										<h3 class="widget-title">İletişim</h3>
									</div>
									<div class="widget-body">
<?php
$contact_address = ot_get_option("contact_address");
$contact_phone   = ot_get_option("contact_phone");
$contact_fax     = ot_get_option("contact_fax");
$contact_email   = ot_get_option("contact_email");
?>
										<dl class="widget-contact">
<?php if ($contact_address != ""): ?>
											<dt><i class="fa fa-home"></i></dt>
											<dd><?php echo esc_html($contact_address); ?></dd>
<?php endif; ?>
<?php if ($contact_phone != ""): ?>
											<dt><i class="fa fa-phone"></i></dt>
											<dd><a href="tel:<?php echo str_replace(' ', '', $contact_phone); ?>" title=""><?php echo esc_html($contact_phone); ?></a></dd>
<?php endif; ?>
<?php if ($contact_fax != ""): ?>
											<dt><i class="fa fa-fax"></i></dt>
											<dd><?php echo esc_html($contact_fax); ?></dd>
<?php endif; ?>
<?php if ($contact_email != ""): ?>
											<dt><i class="fa fa-envelope"></i></dt>
											<dd><a href="mailto:<?php echo esc_html($contact_email); ?>"><?php echo esc_html($contact_email); ?></a></dd>
<?php endif; ?>
										</dl>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 col-sm-pull-4">
							<div class="widget">
								<div class="widget-inner">
									<div class="widget-header">
										<h3 class="widget-title">Hızlı Menü</h3>
									</div>
									<div class="widget-body">
<?php
wp_nav_menu( array(
	'theme_location'  => 'footer',
	'menu'            => '',
	'container'       => false,
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'widget-links',
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
		<div class="footer-bottom">
			<div class="wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 col-sm-9">
							<div class="footer-bottom-left">
								<span class="copyright">Tüm soru ve sorunlarınız için bize telefon edebilir, sosyal medyadan ulaşabilirsiniz.</span>
							</div>
						</div>
						<div class="col-xs-12 col-sm-3">
							<div class="footer-bottom-right">
<?php if ($contact_phone != ""): ?>
								<a href="tel:<?php echo str_replace(' ', '', $contact_phone); ?>" class="contact-phone"><?php echo esc_html($contact_phone); ?></a>
<?php endif; ?>
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