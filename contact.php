<?php
/* Template Name: İletişim */
get_header();
?>
	<div class="site-content">
		<div class="section main-content">
			<div class="wrapper">
				<div class="container-fluid">
<?php
$contact_maps = ot_get_option("contact_maps");
while ( have_posts() ) : the_post();
?>
					<div class="row">
						<div class="col-xs-12">
							<div class="inner-page-header">
								<h1 class="page-header"><?php the_title(); ?></h1>
<?php
if( function_exists('bootstrap_breadcrumb') )
	bootstrap_breadcrumb('<i class="fa fa-home"></i>');
?>
							</div>
						</div>
					</div>
					<div class="row">
<?php if ($contact_maps != "") : ?>
						<div class="col-xs-12">
							<?php echo $contact_maps; ?>
						</div>
<?php endif; ?>
						<div class="col-xs-12">
							<?php the_content(); ?>
						</div>
					</div>
<?php endwhile; ?>
				</div>
			</div>
		</div><!-- main-content -->
	</div><!-- site-content -->
<?php get_footer(); ?>