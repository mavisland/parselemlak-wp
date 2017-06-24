<?php
$home_about_title      = ot_get_option("home_about_title");
$home_about_text       = ot_get_option("home_about_text");
$home_about_link_url   = ot_get_option("home_about_link_url");
$home_about_link_title = ot_get_option("home_about_link_title");
$home_video_url        = ot_get_option("home_video_url");
?>
		<div class="section hakkimizda">
			<div class="wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="about-box">
								<div class="box-inner">
<?php if ($home_about_title != ""): ?>
									<h2 class="box-title"><?php echo esc_html($home_about_title); ?></h2>
<?php endif; ?>
<?php if ($home_about_text != ""): ?>
									<p class="box-content"><?php echo esc_html($home_about_text); ?></p>
<?php endif; ?>
<?php if ($home_about_link_url != ""): ?>
									<a href="<?php echo esc_url($home_about_link_url); ?>" class="box-link"><?php echo esc_html($home_about_link_title); ?></a>
<?php endif; ?>
								</div><!-- box-inner -->
							</div><!-- about-box -->
						</div>
<?php if ($home_video_url != ""): ?>
						<div class="col-xs-12 col-sm-6">
							<div class="promotional-video">
								<a href="<?php echo esc_url($home_video_url); ?>" class="video-play-button popup-youtube" title="Tanıtım Videomuzu İzleyin!">
									<span></span>
								</a>
							</div>
						</div>
<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="recent-news">
				<div class="wrapper">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12 col-sm-4">
								<div class="news-item">
									<div class="news-inner">
										<div class="news-object">
											<a href="#">
												<img src="<?php echo get_template_directory_uri(); ?>/images/haber02.jpg" alt="Başlık Başlık Başlık Başlık">
											</a>
										</div>
										<div class="news-body">
											<a href="#">
												<h4 class="news-title">Başlık Başlık Başlık Başlık</h4>
												<p class="news-excerpt">dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda birçok masaüstü yayıncılık paketi ve web sayfa düzenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır.</p>
											</a>
										</div>
									</div>
								</div><!-- news-item -->
							</div>
							<div class="col-xs-12 col-sm-4">
								<div class="news-item">
									<div class="news-inner">
										<div class="news-object">
											<a href="#">
												<img src="<?php echo get_template_directory_uri(); ?>/images/haber02.jpg" alt="Başlık Başlık Başlık Başlık">
											</a>
										</div>
										<div class="news-body">
											<a href="#">
												<h4 class="news-title">Başlık Başlık Başlık Başlık</h4>
												<p class="news-excerpt">dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda birçok masaüstü yayıncılık paketi ve web sayfa düzenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır.</p>
											</a>
										</div>
									</div>
								</div><!-- news-item -->
							</div>
							<div class="col-xs-12 col-sm-4">
								<div class="news-item">
									<div class="news-inner">
										<div class="news-object">
											<a href="#">
												<img src="<?php echo get_template_directory_uri(); ?>/images/haber02.jpg" alt="Başlık Başlık Başlık Başlık">
											</a>
										</div>
										<div class="news-body">
											<a href="#">
												<h4 class="news-title">Başlık Başlık Başlık Başlık</h4>
												<p class="news-excerpt">dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda birçok masaüstü yayıncılık paketi ve web sayfa düzenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır.</p>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- recent-news -->
		</div><!-- hakkimizda -->