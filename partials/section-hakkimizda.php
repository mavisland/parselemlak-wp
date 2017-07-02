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
<?php if ($home_about_title != "") : ?>
									<h2 class="box-title"><?php echo esc_html($home_about_title); ?></h2>
<?php endif; ?>
<?php if ($home_about_text != "") : ?>
									<p class="box-content"><?php echo esc_html($home_about_text); ?></p>
<?php endif; ?>
<?php if ($home_about_link_url != "") : ?>
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
<?php
$home_custom_post_01 = ot_get_option("home_custom_post_01");
$home_custom_post_02 = ot_get_option("home_custom_post_02");
$home_custom_post_03 = ot_get_option("home_custom_post_03");
?>
<?php
if ($home_custom_post_01):
	$home_cp_01 = get_post($home_custom_post_01);
?>
							<div class="col-xs-12 col-sm-4">
								<div class="news-item">
									<div class="news-inner">
										<div class="news-object">
											<a href="<?php echo esc_url(get_permalink($home_cp_01->ID)); ?>">
<?php if (has_post_thumbnail($home_cp_01->ID)): ?>
												<img src="<?php echo get_image_url_by_id( get_post_thumbnail_id($home_cp_01->ID), 'post-thumb' ); ?>" alt="<?php echo esc_html($home_cp_01->post_title); ?>">
<?php else: ?>
												<img src="<?php echo get_template_directory_uri(); ?>/images/default-post-thumb.jpg" alt="<?php echo esc_html($home_cp_01->post_title); ?>">
<?php endif; ?>
											</a>
										</div>
										<div class="news-body">
											<a href="<?php echo esc_url(get_permalink($home_cp_01->ID)); ?>">
												<h4 class="news-title"><?php echo esc_html($home_cp_01->post_title); ?></h4>
												<p class="news-excerpt"><?php echo (!empty($home_cp_01->post_excerpt)) ? esc_html($home_cp_01->post_excerpt) : "Henüz içerik yazısı girilmemiş."; ?></p>
											</a>
										</div>
									</div>
								</div><!-- news-item -->
							</div>
<?php endif; ?>
<?php
if ($home_custom_post_01):
	$home_cp_02 = get_post($home_custom_post_02);
?>
							<div class="col-xs-12 col-sm-4">
								<div class="news-item">
									<div class="news-inner">
										<div class="news-object">
											<a href="<?php echo esc_url(get_permalink($home_cp_02->ID)); ?>">
<?php if (has_post_thumbnail($home_cp_02->ID)): ?>
												<img src="<?php echo get_image_url_by_id( get_post_thumbnail_id($home_cp_02->ID), 'post-thumb' ); ?>" alt="<?php echo esc_html($home_cp_02->post_title); ?>">
<?php else: ?>
												<img src="<?php echo get_template_directory_uri(); ?>/images/default-post-thumb.jpg" alt="<?php echo esc_html($home_cp_02->post_title); ?>">
<?php endif ?>
											</a>
										</div>
										<div class="news-body">
											<a href="<?php echo esc_url(get_permalink($home_cp_02->ID)); ?>">
												<h4 class="news-title"><?php echo esc_html($home_cp_02->post_title); ?></h4>
												<p class="news-excerpt"><?php echo (!empty($home_cp_02->post_excerpt)) ? esc_html($home_cp_02->post_excerpt) : "Henüz içerik yazısı girilmemiş."; ?></p>
											</a>
										</div>
									</div>
								</div><!-- news-item -->
							</div>
<?php endif; ?>
<?php
if ($home_custom_post_01):
	$home_cp_03 = get_post($home_custom_post_03);
?>
							<div class="col-xs-12 col-sm-4">
								<div class="news-item">
									<div class="news-inner">
										<div class="news-object">
											<a href="<?php echo esc_url(get_permalink($home_cp_03->ID)); ?>">
<?php if (has_post_thumbnail($home_cp_03->ID)): ?>
												<img src="<?php echo get_image_url_by_id( get_post_thumbnail_id($home_cp_03->ID), 'post-thumb' ); ?>" alt="<?php echo esc_html($home_cp_03->post_title); ?>">
<?php else: ?>
												<img src="<?php echo get_template_directory_uri(); ?>/images/default-post-thumb.jpg" alt="<?php echo esc_html($home_cp_03->post_title); ?>">
<?php endif; ?>
											</a>
										</div>
										<div class="news-body">
											<a href="<?php echo esc_url(get_permalink($home_cp_03->ID)); ?>">
												<h4 class="news-title"><?php echo esc_html($home_cp_03->post_title); ?></h4>
												<p class="news-excerpt"><?php echo (!empty($home_cp_03->post_excerpt)) ? esc_html($home_cp_03->post_excerpt) : "Henüz içerik yazısı girilmemiş."; ?></p>
											</a>
										</div>
									</div>
								</div>
							</div>
<?php endif; ?>
						</div>
					</div>
				</div>
			</div><!-- recent-news -->
		</div><!-- hakkimizda -->