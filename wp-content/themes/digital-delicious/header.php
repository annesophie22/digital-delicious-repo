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
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'digital-delicious' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="dd-header-banner">
			<div class="dd-header-banner__container">
				<a class="dd-header-banner__contact" href="tel:#">076 247 34 19</a>
				<a class="dd-header-banner__social" href="https://www.facebook.com/Home-made-food-383350752019254" class="facebook">F</a>
			</div>
		</div>

		<div class="dd-header-nav">
			<div class="site-branding dd-header-nav__logo">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$digital_delicious_description = get_bloginfo( 'description', 'display' );
				if ( $digital_delicious_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $digital_delicious_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation dd-header-nav__nav" role="navigation" aria-label="<?php esc_attr_e( 'Primary menu', 'digital-delicious' ); ?>">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'digital-delicious' ); ?></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_id'        => 'primary-menu',
						'menu_class'     => 'nav-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
		</div><!-- end dd-header-nav -->
		
	</header><!-- #masthead -->
