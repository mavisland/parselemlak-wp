		<div class="section content-links">
			<div class="wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="content-box content-box-video">
								<div class="content-header">
									<div class="content-title">Tanıtım Videomuz</div>
								</div>
								<div class="content-inner">
									<div class="content-body">
										<div class="content-excerpt">Parsel Emlak hizmetleri ile ilgili detaylı bilgi sahibi olabileceğiniz tanıtım videomuzu izlediniz mi?</div>
									</div>
									<div class="content-object">
<?php
$home_video_url = ot_get_option("home_video_url");
if ($home_video_url != ""): ?>
										<div class="promotional-video">
											<a href="<?php echo esc_url($home_video_url); ?>" class="popup-youtube" title="Tanıtım Videomuzu İzleyin!">
												<img src="<?php echo get_template_directory_uri(); ?>/images/tanitim_videosu.jpg" alt="Tanıtım Videomuzu İzleyin!">
												<i class="fa fa-play"></i>
											</a>
										</div>
<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="content-box recent-news">
								<div class="content-header">
									<div class="content-title">Bizden Haberler</div>
								</div>
								<div class="content-inner">
<?php
// Recent News in Footer
$news_category = ot_get_option("footer_recent_news");

if ($news_category != "") {
	$news_category_id = $news_category;
} else {
	$news_category_id = 1;
}

$recent_news = new WP_Query(array(
	'post_type'      => 'post',
	'post_status'    => 'publish',
	'posts_per_page' => '4',
	'tax_query'      => array(
		array(
			'taxonomy' => 'category',
			'field'    => 'term_id',
			'terms'    => $news_category_id
		)
	)
));
?>
<?php if ($recent_news->have_posts()) : ?>
									<div class="owl-carousel" id="recentNews">
<?php while ($recent_news->have_posts()) : $recent_news->the_post(); ?>
										<div class="news">
											<div class="news-object">
												<a href="<?php echo esc_url(get_permalink($recent_news->ID)); ?>">
<?php if (has_post_thumbnail($recent_news->ID)) : ?>
													<img src="<?php echo get_image_url_by_id( get_post_thumbnail_id($recent_news->ID), 'post-thumb' ); ?>" alt="<?php echo esc_html(get_the_title($recent_news->ID)); ?>">
<?php else : ?>
													<img src="<?php echo get_template_directory_uri(); ?>/images/default-post-thumb.jpg" alt="<?php echo esc_html(get_the_title($recent_news->ID)); ?>">
<?php endif; ?>
												</a>
											</div>
											<div class="news-body">
												<a href="<?php echo esc_url(get_permalink($recent_news->ID)); ?>">
													<span class="news-title"><?php echo get_the_title($recent_news->ID); ?></span>
													<span class="news-excerpt"><?php echo get_the_excerpt($recent_news->ID); ?></span>
												</a>
											</div>
										</div>
<?php endwhile; ?>
									</div>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- content-links -->
