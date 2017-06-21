<?php get_header(); ?>
	<div class="site-content">
		<div class="section main-content">
			<div class="wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 col-sm-9 col-sm-push-3">
<?php if ( have_posts() ) : ?>
							<div class="row">
								<div class="col-xs-12">
									<h1 class="page-header"><?php the_archive_title(); ?>
										<small><?php the_archive_description(); ?></small>
									</h1>
								</div>
							</div>
<?php while ( have_posts() ) : the_post(); ?>
							<div class="row">
								<div class="col-xs-12 col-sm-5">
									<a href="<?php the_permalink(); ?>">
										<img class="img-responsive" src="http://placehold.it/700x300" alt="<?php the_title_attribute(); ?>">
									</a>
								</div>
								<div class="col-xs-12 col-sm-7">
									<h3><?php the_title(); ?></h3>
									<p><?php the_excerpt(); ?></p>
									<a class="btn btn-primary" href="<?php the_permalink(); ?>">Devamını Oku <span class="fa fa-angle-right"></span></a>
								</div>
							</div>
<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>
						</div>
						<div class="col-xs-12 col-sm-3 col-sm-pull-9">
<?php get_sidebar(); ?>
						</div>
					</div>
				</div>
			</div>
		</div><!-- main-content -->
<?php get_template_part( 'partials/section', 'cntlinks' ); ?>
	</div><!-- site-content -->
<?php get_footer(); ?>