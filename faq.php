<?php
/* Template Name: Sıkça Sorulan Sorular */
get_header();
?>
	<div class="site-content">
		<div class="section main-content">
			<div class="wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 col-sm-9 col-sm-push-3">
<?php while ( have_posts() ) : the_post(); ?>
							<img class="img-responsive" src="http://placehold.it/900x300" alt="">
							<h1><?php the_title(); ?></h1>
<div class="panel-group" id="faqAccordion">
							<?php the_content(); ?>
</div>
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
<?php endwhile; ?>
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
