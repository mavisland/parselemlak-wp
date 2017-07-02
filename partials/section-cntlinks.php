<?php
// Recent News in Footer
$news_category_id = ($news_category_id != "") ? ot_get_option("footer_recent_news") : 1;

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
		<div class="section content-links">
			<div class="wrapper">
				<div class="container-fluid">
					<div class="row">
<?php while ($recent_news->have_posts()) : $recent_news->the_post(); ?>
						<div class="col-xs-12 col-sm-3">
							<div class="link-item">
								<a href="<?php echo esc_url(get_permalink($recent_news->ID)); ?>">
<?php if (has_post_thumbnail($recent_news->ID)) : ?>
									<img src="<?php echo get_image_url_by_id( get_post_thumbnail_id($recent_news->ID), 'post-thumb' ); ?>" alt="<?php echo esc_html(get_the_title($recent_news->ID)); ?>">
<?php else : ?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/default-post-thumb.jpg" alt="<?php echo esc_html(get_the_title($recent_news->ID)); ?>">
<?php endif; ?>
									<span><?php echo get_the_title($recent_news->ID); ?></span>
								</a>
							</div><!-- link-item -->
						</div>
<?php endwhile; ?>
					</div>
				</div>
			</div>
		</div><!-- content-links -->
<?php endif; ?>
<?php wp_reset_postdata(); ?>