<?php get_header(); ?>
	<div class="site-content">
		<div class="section main-content">
			<div class="wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 col-sm-9 col-sm-push-3">
							<h1 class="page-header"><?php the_archive_title(); ?>
								<small><?php the_archive_description(); ?></small>
							</h1>
						</div>
						<div class="hidden-xs col-sm-3 col-sm-pull-9">
							<a href="#" class="sidebar-collapse">
								<i class="fa fa-bars"></i>
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-9 col-sm-push-3" id="content">
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
							<div class="row archive-item">
								<div class="col-xs-12 col-sm-4">
									<a href="<?php the_permalink(); ?>">
<?php if ( has_post_thumbnail() ): ?>
										<?php the_post_thumbnail( "medium", [ "class" => "img-responsive", "alt" => get_the_title() ] ); ?>
<?php else : ?>
										<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/default-thumb.jpg" alt="<?php the_title_attribute(); ?>">
<?php endif; ?>
									</a>
								</div>
								<div class="col-xs-12 col-sm-8">
									<h3><?php the_title(); ?></h3>
									<p><?php the_excerpt(); ?></p>
									<a class="btn btn-primary" href="<?php the_permalink(); ?>">Devamını Oku <span class="fa fa-angle-right"></span></a>
								</div>
							</div>
<?php endwhile; ?>
<?php else : ?>
							<div class="row">
								<div class="col-xs-12">
									<p>Bu kategoriye henüz yazı eklenmemiş.</p>
								</div>
							</div>
<?php endif; ?>
						</div>
						<div class="col-xs-12 col-sm-3 col-sm-pull-9" id="sidebar">
<?php get_template_part( 'partials/page', 'sidebar' ); ?>
						</div>
					</div>
				</div>
			</div>
		</div><!-- main-content -->
<?php get_template_part( 'partials/section', 'cntlinks' ); ?>
	</div><!-- site-content -->
<?php get_footer(); ?>