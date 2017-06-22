<?php get_header(); ?>
	<div class="site-content">
<?php while ( have_posts() ) : the_post(); ?>
		<div class="section main-content">
			<div class="wrapper">
				<div class="container-fluid">
					<div class="row">
<?php if ( has_post_thumbnail() ) : ?>
						<div class="col-xs-12">
							<div class="featured-image">
								<?php the_post_thumbnail("full", [ "class" => "img-responsive", "alt" => get_the_title() ]); ?>
							</div>
						</div>
<?php endif; ?>
						<div class="col-xs-12 col-sm-9 col-sm-push-3">
							<div class="page-content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<h1><?php the_title(); ?></h1>
								<?php the_content(); ?>
								<hr>
								<div class="sosyal">
									<div class="sosyal1">
										<a href="https://twitter.com/share" class="twitter-share-button" data-lang="tr">Tweet</a>
										<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
									</div>
									<div class="sosyal2">
										<iframe src="//www.facebook.com/plugins/like.php?href=<?php the_permalink(); ?>&amp;width=468&amp;layout=standard&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=20" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:468px; height:20px;" allowTransparency="true"></iframe>
									</div>
								</div>
								<hr>
								<p class="small text-muted"><span class="fa fa-time"></span> <?php the_date(); ?></p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-3 col-sm-pull-9">
						</div>
					</div>
				</div>
			</div>
		</div><!-- main-content -->
<?php endwhile; ?>
<?php get_template_part( 'partials/section', 'cntlinks' ); ?>
	</div><!-- site-content -->
<?php get_footer(); ?>
