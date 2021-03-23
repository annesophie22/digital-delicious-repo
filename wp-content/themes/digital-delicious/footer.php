<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Digital_Delicious
 */

?>

<footer id="colophon" class="site-footer">
	<div class="dd-footer__container">
		<?php if (has_nav_menu('footer')) : ?>
			<nav class="dd-footer__navigation" aria-label="<?php esc_attr_e('Footer menu', 'digital-delicious'); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' 	=> 'footer',
						'menu_id'        	=> 'footer-menu',
						'menu_class'     	=> 'nav-menu',
						'container'			=> 'false',
					)
				);
				?>
			</nav><!-- .dd-footer__navigation -->
		<?php endif; ?>
		<div class="dd-footer__contact">
			<ul class="dd-footer__list">
				<li class="dd-footer__list-item"><?php echo file_get_contents(esc_url(get_stylesheet_directory_uri() . '/images/icon_phone.svg')); ?><a href="<?php echo esc_url('tel:#'); ?>"><?php echo esc_html('079 123 45 67'); ?></a></li>
				<li class="dd-footer__list-item"><?php echo file_get_contents(esc_url(get_stylesheet_directory_uri() . '/images/icon_email.svg')); ?><a href="<?php echo esc_url('mailto:#'); ?>"><?php echo esc_html('lastella.thitrang@gmail.com'); ?></a></li>
				<li class="dd-footer__list-item"><?php echo file_get_contents(esc_url(get_stylesheet_directory_uri() . '/images/icon_fb.svg')); ?><a href="<?php echo esc_url('https://www.facebook.com/Home-made-food-383350752019254'); ?>" class="facebook"><?php echo esc_html('Home made food (Pho Bep Oi)'); ?></a></li>
			</ul>
			<ul class="dd-footer__list">
				<li class="dd-footer__list-item"><?php echo esc_html('12h-13h // 18h-19h30'); ?></li>
				<li class="dd-footer__list-item"><?php esc_html_e('Tuesdays, Thursdays and Saturdays', 'digital-delicious'); ?></li>
			</ul>
		</div>
	</div> <!-- end dd-footer__container -->
	<div class="dd-footer__attribution u-center-text">
		<p><?php esc_html_e('Icons by', 'digital-delicious'); ?> <a href="<?php esc_url('https://fontawesome.com/license'); ?>"><?php echo esc_html('Font Awesome. '); ?></a><?php esc_html_e('Only colors may have been changed by us.', 'digital-delicious') ?></p>
	</div>
	<div class="site-info u-center-text">
		<p>
			<?php
			/* translators: 1: Theme name, 2: Theme author. */
			printf(esc_html__('Made with love and care by %2$s', 'digital-delicious'), 'digital-delicious', '<a href=' . esc_url('https://www.digitalseeds.net') . '>' . esc_html('Anne-Sophie - DigitalSeeds') . '</a>');
			?>
		</p>
		<p class="copyright"><?php printf(esc_html__('© Copyright 2021 - All rights reserved - ', 'digital-delicious')); ?><a href="<?php get_privacy_policy_url(); ?>"><?php esc_html_e('Privacy Policy', 'digital-delicious'); ?></a></p>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>