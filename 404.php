<?php get_header(); ?>
	<div class="site-content">
		<div class="section main-content">
			<div class="wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-sm-offset-3">
							<div class="page-content not-found">
								<h1 class="page-title">Sayfa bulunamadı.</h1>
								<hr>
								<p class="p404">404</p>
								<hr>
								<p>Ulaşmak istediğiniz sayfa bulunamadı. Sayfa değiştirilmiş veya silinmiş olabilir.</p>
								<p>İsterseniz <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><strong>anasayfa</strong></a>'ya dönerek siteyi dolaşmaya devam edebilirsiniz.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- main-content -->
<?php get_template_part( 'partials/section', 'cntlinks' ); ?>
	</div><!-- site-content -->
<?php get_footer(); ?>