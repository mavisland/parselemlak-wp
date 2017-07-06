<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" />
<?php wp_head(); ?>
	<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.min.js"></script>
	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5-3.6-respond-1.4.2.min.js"></script>
	<![endif]-->
</head>
<body <?php body_class(); ?>>
	<header class="site-header" id="header">
		<div class="header-top">
			<div class="wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 col-sm-9">
							<div class="header-top-left">
<?php
wp_nav_menu( array(
	'theme_location'  => 'topbar',
	'menu'            => '',
	'container'       => false,
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'topbar-links',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
	'depth'           => 0,
));
?>
							</div><!-- header-top-left -->
						</div>
						<div class="col-xs-12 col-sm-3">
							<div class="header-top-right">
<?php
$contact_phone = ot_get_option("contact_phone");
?>
<?php if ($contact_phone != ""): ?>
								<a href="tel:<?php echo str_replace(' ', '', $contact_phone); ?>" class="contact-phone"><i class="fa fa-phone"></i> <?php echo esc_html($contact_phone); ?></a>
<?php endif; ?>
							</div><!-- header-top-right -->
						</div>
					</div>
				</div>
			</div>
		</div><!-- header-top -->
		<div class="sticky">
			<div class="navbar">
				<div class="wrapper">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12 col-sm-3">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
										<span class="sr-only">Menüyü görüntüle</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
										<span class="label sr-only"><?php bloginfo( 'name' ); ?></span>
										<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>">
									</a>
								</div><!-- navbar-header -->
							</div>
							<div class="col-xs-12 col-sm-9">
<?php
wp_nav_menu( array(
	'menu'            => 'primary',
	'theme_location'  => 'primary',
	'depth'           => 2,
	'container'       => 'div',
	'container_class' => 'collapse navbar-collapse',
	'container_id'    => 'menu',
	'menu_class'      => 'nav navbar-nav navbar-right',
	'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
	'walker'          => new WP_Bootstrap_Navwalker())
);
?>
							</div>
						</div>
					</div>
				</div>
			</div><!-- navbar -->
			<div class="header-bottom" id="subMenu">
				<div class="sm"></div>
				<div class="sm-top"></div>
				<div class="sm-bottom"></div>
<?php clean_custom_menu("primary"); ?>
			</div><!-- header-bottom -->
		</div><!-- sticky -->
	</header><!-- site-header -->
