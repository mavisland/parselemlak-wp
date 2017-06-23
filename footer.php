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
										<p>Gayrimenkul yatırım fırsatlarını kısa vadede kazanca dönüştürüp, gayrimenkul değerini hızla artırırken, üretim yapmayı ve yatırımınızın bir kısmını geri almayı hedeflemiştir</p>
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
										<dl class="widget-contact">
											<dt><i class="fa fa-home"></i></dt>
											<dd>Körfez Mah. Ahmet Ergüneş Sk. No:21 Kat:2 Daire:9 İzmit / KOCAELİ</dd>
											<dt><i class="fa fa-phone"></i></dt>
											<dd>0262 331 94 11</dd>
											<dt><i class="fa fa-envelope"></i></dt>
											<dd><a href="#">info@parselemlak.com.tr</a></dd>
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
								<a href="#" class="contact-phone">444 9 411</a>
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