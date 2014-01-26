<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<!-- Hi! This site is using SoloFolio, if you were wondering. You can learn more about the SoloFolio platform at Solofolio.net. Cheers! -->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<meta content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />

	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
	<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/solofolio-base.js"></script>
	<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jquery.retina.min.js"></script>

	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<?php if (get_theme_mod( 'solofolio_css' ) != '') { ?>
		<style type="text/css">
			<?php echo get_theme_mod( 'solofolio_css' ) ?>
		</style>
	<?php } ?>

	<?php wp_head(); ?>

	<!--[if IE 7]>
		<link rel="stylesheet" href="<?php echo (bloginfo('template_url').'/fonts/font-awesome-ie7.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo (bloginfo('template_url').'/fonts/font-awesome-more-ie7.min.css'); ?>">
	<![endif]-->

	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->
</head>

<body id="<?php echo get_post_type( $post ); ?>">

<div id="outerWrap">

<div id="header" class="sans">
	<div id="header-inner">
		<a id='menu-icon'><i class="icon-reorder"></i></a>

		<div id="logo">
			<div id="logo-img">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"
					 title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
					 rel="home">
					 <img src="<?php echo get_theme_mod( 'solofolio_logo' ); ?>"
					 			alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
					 			data-retina="<?php echo get_theme_mod( 'solofolio_logo_retina' ); ?>" />
				</a>
			</div>

			<div id="logo-noimg">
				<h1 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"
						 title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
						 rel="home">
						<?php bloginfo( 'name' ); ?>
					</a>
				</h1>
			</div>

			<div id="header-phone">
				<a href="tel:<?php echo get_theme_mod( 'solofolio_phone' ); ?>">
					<?php echo get_theme_mod( 'solofolio_phone', '555-555-5555' ); ?>
				</a>
			</div>
			<div id="header-email">
				<a href="mailto:<?php echo get_theme_mod( 'solofolio_email' ); ?>">
					<?php echo get_theme_mod( 'solofolio_email', 'john@johndoe.com' ); ?>
				</a>
			</div>
			<div id="header-location">
				<?php echo get_theme_mod( 'solofolio_location', 'Athens, Ohio' ); ?>
			</div>
		</div>

		<div id="header-content">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Main Navigation") ) : ?>
				Your site does not have any menus! Add one using the Custom Menu widget in Appearance > Widgets.
			<?php endif; ?>

			<?php if (is_home()){ ?>
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Under Main Navigation on Blog") ) : ?>
				<?php endif; ?>
			<?php } ?>

			<?php if (is_single()){ ?>
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Under Main Navigation on Blog") ) : ?>
				<?php endif; ?>
			<?php } ?>

			<?php if (is_archive()){ ?>
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Under Main Navigation on Blog") ) : ?>
				<?php endif; ?>
			<?php } ?>
		</div>

		<div id="sidebar-footer">
			<p id="info-footer"><?php echo get_theme_mod( 'solofolio_footer_text' ); ?></p>
		</div>

		<div class="clear"></div>
	</div>
</div>

<div id="wrapper">
