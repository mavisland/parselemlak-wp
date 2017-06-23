<?php
$slider = new WP_Query( array(
	'post_type'      => 'slider',
	'post_status'    => 'publish',
	'posts_per_page' => 5,
	'orderby'        => 'menu_order',
));
?>
	<div class="slider owl-carousel" id="featuredSlider">
<?php while ( $slider->have_posts() ) : $slider->the_post(); ?>
<?php
$title_first  = get_post_meta( get_the_id(), 'title_first', true );
$title_second = get_post_meta( get_the_id(), 'title_second', true );
$btn_link     = get_post_meta( get_the_id(), 'btn_link', true );
$btn_text     = get_post_meta( get_the_id(), 'btn_text', true );
$image        = get_post_meta( get_the_id(), 'image', true );
?>
		<div class="item" style="background-image: url(<?php echo $image; ?>);">
			<div class="wrapper">
				<div class="container-fluid">
					<div class="caption">
						<div class="content">
<?php if ($title_first != ""): ?>
							<h2 class="text">
								<?php if ($title_first != ""): ?><span><em><?php echo $title_first; ?></em></span>
<?php endif; ?>
								<?php if ($title_second != ""): ?><span><em><?php echo $title_second; ?></em></span>
<?php endif; ?>
							</h2>
<?php endif; ?>
<?php if ($btn_link != ""): ?>
							<a href="#" class="link"><span><?php echo ($btn_text != "" ? $btn_text : "Detaylı Bilgi"); ?></span></a>
<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php endwhile; ?>
	</div>
<?php wp_reset_postdata(); ?>
