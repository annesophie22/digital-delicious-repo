<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Digital_Delicious
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'digital-delicious'); ?></a>

		<header id="masthead" class="site-header" role="banner">

			<!-- CONTACT + SOCIAL MEDIA -->
			<div class="dd-header-banner">
				<div class="dd-header-banner__container">

					<!-- CONTACT -->
					<div class="dd-header-banner__contact">
						<span class="dd-header-banner__contact-phone"><?php echo file_get_contents(esc_url(get_stylesheet_directory_uri() . '/images/icon_phone.svg')); ?></span>
						<a class="dd-header-banner__contact-link" href="<?php echo esc_url('tel:#'); ?>"><?php echo esc_html('079 123 45 67'); ?></a>
					</div>

					<!-- SOCIAL MEDIA -->
					<a class="dd-header-banner__social" href="<?php echo esc_url('https://www.facebook.com/Home-made-food-383350752019254'); ?>" class="facebook"><?php echo file_get_contents(esc_url(get_stylesheet_directory_uri() . '/images/icon_fb.svg')); ?></a>

				</div> <!-- end dd-header-banner__container -->
			</div> <!-- end dd-header-banner -->


			<!-- LOGO + NAV -->
			<div class="dd-header-nav-wrapper">
				<div class="dd-header-nav">

					<!-- LOGO -->
					<div class="site-branding dd-header-nav__logo">
						<?php
						the_custom_logo();
						if (is_front_page() && is_home()) :
						?>
							<h1 class="site-title">
								<a href="<?php echo esc_url(home_url('/')); ?>" rel="<?php esc_attr('home'); ?>">
									<span class="dd-site-title__logo"><?php echo file_get_contents(esc_url(get_stylesheet_directory_uri() . '/images/logo.svg')); ?></span>
									<span class="dd-site-title__name"><?php bloginfo('name'); ?></span>
								</a>
							</h1>
						<?php
						else :
						?>
							<p class="site-title">
								<a href="<?php echo esc_url(home_url('/')); ?>" rel="<?php esc_attr('home'); ?>">
									<span class="dd-site-title__logo"><?php echo file_get_contents(esc_url(get_stylesheet_directory_uri() . '/images/logo.svg')); ?></span>
									<span class="dd-site-title__name"><?php bloginfo('name'); ?></span>
								</a>
							</p>
						<?php
						endif;
						$digital_delicious_description = get_bloginfo('description', 'display');
						if ($digital_delicious_description || is_customize_preview()) :
						?>
							<p class="site-description"><?php echo $digital_delicious_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
																	?></p>
						<?php endif; ?>
					</div><!-- .site-branding -->

					<!-- NAV -->
					<?php if (has_nav_menu('primary')) : ?>

						<nav id="site-navigation" class="main-navigation dd-header-nav__nav" role="navigation" aria-label="<?php esc_attr_e('Primary Menu', 'digital-delicious'); ?>">

							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
								<span class="dd-icon-hamburger"><?php echo file_get_contents(esc_url(get_stylesheet_directory_uri() . '/images/icon_hamburger.svg')); ?></span>
							</button>

							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'primary',
									'menu_id'        => 'primary-menu',
									'menu_class'     => 'nav-menu',
									'container_class' => 'primary-menu-container',
								)
							);
							?>
						</nav><!-- #site-navigation -->

					<?php endif; ?>
				</div><!-- end dd-header-nav -->
			</div>
		</header><!-- #masthead -->