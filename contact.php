<?php
/* Template Name: İletişim */
get_header();
?>
	<div class="site-content">
		<div class="section main-content">
			<div class="wrapper">
				<div class="container-fluid">
<?php if (have_posts()) : ?>
					<div class="row">
<?php
while ( have_posts() ) : the_post();
	$contact_maps = ot_get_option("contact_maps");
	if ($contact_maps != "") :
?>
						<div class="col-xs-12">
							<?php echo $contact_maps; ?>
						</div>
<?php endif; ?>
						<div class="col-xs-12">
							<h1><?php the_title(); ?></h1>
							<?php the_content(); ?>
						</div>
<?php endwhile; ?>
					</div>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
				</div>
			</div>
		</div><!-- main-content -->
	</div><!-- site-content -->
<?php get_footer(); ?>