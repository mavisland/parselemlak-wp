<?php get_header(); ?>
	<div class="site-content">
<?php while ( have_posts() ) : the_post(); ?>
		<div class="section main-content">
			<div class="wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="hidden-xs col-sm-2">
							<a href="#" class="sidebar-collapse">
								<i class="fa fa-bars"></i>
							</a>
						</div>
						<div class="col-xs-12 col-sm-8">
							<div class="inner-page-header">
								<h1 class="page-header"><?php the_title(); ?></h1>
<?php
if( function_exists('bootstrap_breadcrumb') )
	bootstrap_breadcrumb('<i class="fa fa-home"></i>');
?>
							</div>
						</div>
					</div>
<?php if ( has_post_thumbnail() ) : ?>
					<div class="row">
						<div class="col-xs-12">
							<div class="featured-image" style="background-image: url(<?php echo get_image_url_by_id( get_post_thumbnail_id( get_the_id() ), 'featured' ); ?>);"></div>
						</div>
					</div>
<?php endif; ?>
					<div class="row">
						<div class="col-xs-12 col-sm-9 col-sm-push-3" id="content">
							<div class="page-content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<?php the_content(); ?>
							</div><!-- page-content -->
						</div>
						<div class="col-xs-12 col-sm-3 col-sm-pull-9" id="sidebar">
<?php get_template_part( 'partials/page', 'sidebar' ); ?>
						</div>
					</div>
				</div>
			</div>
		</div><!-- main-content -->
<?php endwhile; ?>
<?php get_template_part( 'partials/section', 'cntlinks' ); ?>
	</div><!-- site-content -->
<?php get_footer(); ?>
