<?php
$home_about_title      = ot_get_option("home_about_title");
$home_about_text       = ot_get_option("home_about_text");
$home_about_link_url   = ot_get_option("home_about_link_url");
$home_about_link_title = ot_get_option("home_about_link_title");
?>
		<div class="section hakkimizda">
			<div class="wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="about-box">
								<div class="box-inner">
<?php if ($home_about_title != "") : ?>
									<h2 class="box-title"><?php echo esc_html($home_about_title); ?></h2>
<?php endif; ?>
<?php if ($home_about_text != "") : ?>
									<p class="box-content"><?php echo esc_html($home_about_text); ?></p>
<?php endif; ?>
<?php if ($home_about_link_url != "") : ?>
									<a href="<?php echo esc_url($home_about_link_url); ?>" class="box-link"><?php echo esc_html($home_about_link_title); ?></a>
<?php endif; ?>
								</div><!-- box-inner -->
							</div><!-- about-box -->
						</div>
					</div>
				</div>
			</div>
		</div><!-- hakkimizda -->