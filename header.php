<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<header class="site-header" role="banner">
		<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle(); ?>>
			<div class="title-bar-left">
				
				<span class="site-mobile-title title-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img class="logo" src="<?php echo get_stylesheet_directory_uri();?>/src/assets/images/header-logo.png" alt="">
					</a>
				</span>

				<button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" data-open="menuModal"  class="menu-icon" type="button">
					<?php echo file_get_contents(get_stylesheet_directory_uri()."/src/assets/images/menu.svg")?>
				</button>

			</div>
		</div>

		<nav class="site-navigation top-bar" role="navigation" id="<?php foundationpress_mobile_menu_id(); ?>">
			<div class="top-bar-left">
				<div class="site-desktop-title top-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<?php //bloginfo( 'name' ); ?>
					<img class="logo" src="<?php echo get_stylesheet_directory_uri();?>/src/assets/images/header-logo.png" alt="">
				</a>
				</div>
			</div>
			<div class="top-bar-right">
				<?php foundationpress_top_bar_r(); ?>

				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
			</div>
			<div class="top-bar-end">
				<?php do_action('wpml_add_language_selector');?>
			</div>
			
		</nav>

	</header>
	<div class="tiny reveal" id="menuModal" data-reveal data-close-on-click="true" data-animation-in="slide-in-right" data-animation-out="slide-out-right">

		<div class="menu-upper">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img class="logo" src="<?php echo get_stylesheet_directory_uri();?>/src/assets/images/header-logo.png" alt="">
			</a>
			<button class="close-button" data-close aria-label="Close reveal" type="button">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="menu-center">
			<!-- <?php //foundationpress_top_bar_r(); ?> -->
			<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>

		</div>
		<div class="menu-footer">
			<div class="social-media">
				<a href=""><i class="icon-facebook"></i></a>
				<a href=""><i class="icon-instagram"></i></a>
				<a href=""><i class="icon-youtube-play"></i></a>
			</div>
			<?php do_action('wpml_add_language_selector');?>
		</div>
	</div>