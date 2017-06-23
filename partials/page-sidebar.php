							<div class="aside-content">
								<div class="widget">
									<div class="widget-body">
<?php
wp_nav_menu( array(
	'theme_location'  => 'secondary',
	'menu'            => '',
	'container'       => false,
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'widget-links',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
	'depth'           => 0,
));
?>
									</div>
								</div><!-- widget -->
							</div><!-- aside-content -->