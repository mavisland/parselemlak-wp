<?php get_header(); ?>
	<div class="site-content">
		<div class="section main-content">
			<div class="wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<div class="inner-page-header">
								<h1 class="page-header"><?php single_cat_title(); ?></h1>
<?php
if( function_exists('bootstrap_breadcrumb') )
	bootstrap_breadcrumb('<i class="fa fa-home"></i>');
?>
							</div>
						</div>
					</div>
<?php
global $wp_query;
$category_id = $wp_query->get_queried_object_id(); ?>
<?php if ( have_posts() ) : ?>
<?php if ( file_exists(get_template_directory() . "/images/kategori/kategori-" . $category_id . ".jpg") ) : ?>
					<div class="row">
						<div class="col-xs-12">
							<div class="featured-image" style="background-image: url(<?php echo get_template_directory_uri() . "/images/kategori/kategori-" . $category_id . ".jpg"; ?>);"></div>
						</div>
<?php endif; ?>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<div class="row">
<?php while ( have_posts() ) : the_post(); ?>
								<div class="col-xs-12 col-sm-6 col-md-3">
									<div class="row archive-item">
										<div class="col-xs-12">
											<a href="<?php the_permalink(); ?>" class="archive-link">
<?php if ( has_post_thumbnail() ): ?>
												<?php the_post_thumbnail( "medium", [ "class" => "img-responsive archive-image", "alt" => get_the_title() ] ); ?>
<?php else : ?>
												<img class="img-responsive archive-image" src="<?php echo get_template_directory_uri(); ?>/images/default-thumb.jpg" alt="<?php the_title_attribute(); ?>">
<?php endif; ?>
											</a>
										</div>
										<div class="col-xs-12">
											<h3 class="archive-title"><?php the_title(); ?></h3>
											<a class="btn btn-primary" href="<?php the_permalink(); ?>">Devamını Oku <span class="fa fa-angle-right"></span></a>
										</div>
									</div>
								</div>
<?php endwhile; ?>
							</div>
<?php else : ?>
							<div class="row">
								<div class="col-xs-12">
									<p>Bu kategoriye henüz yazı eklenmemiş.</p>
								</div>
							</div>
<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div><!-- main-content -->
<?php get_template_part( 'partials/section', 'cntlinks' ); ?>
	</div><!-- site-content -->
<?php get_footer(); ?>