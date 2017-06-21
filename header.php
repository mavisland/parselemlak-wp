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
						<div class="col-xs-12 col-sm-6">
							<div class="header-top-left">
								<ul class="social-links">
									<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
									<li><a href="#" title="Youtube"><i class="fa fa-youtube"></i></a></li>
								</ul>
							</div><!-- header-top-left -->
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="header-top-right">
								<a href="#" class="contact-phone"><i class="fa fa-phone"></i>444 9 411</a>
							</div><!-- header-top-right -->
						</div>
					</div>
				</div>
			</div>
		</div><!-- header-top -->
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
			<div class="wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<div class="collapse fade" id="subMenu01">
								<ul class="submenu">
									<li><a href="#">Hakkımızda</a></li>
									<li><a href="#">Vizyon &amp; Misyon</a></li>
									<li><a href="#">Basın Odası</a></li>
									<li><a href="#">Belgelerimiz</a></li>
									<li><a href="#">İnsan Kaynakları</a></li>
								</ul>
							</div><!-- collapse -->
							<div class="collapse fade" id="subMenu02">
								<ul class="submenu">
									<li><a href="#">Bahçe Bakımı</a></li>
									<li><a href="#">Arazi Alış &amp; Satış</a></li>
									<li><a href="#">Fidan Satışı</a></li>
									<li><a href="#">Bahçe Kurulumu</a></li>
								</ul>
							</div><!-- collapse -->
						</div>
					</div>
				</div>
			</div>
		</div><!-- header-bottom -->
	</header><!-- site-header -->
