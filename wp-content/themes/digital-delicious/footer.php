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
				<li class="dd-footer__list-item"><?php echo file_get_contents(get_theme_file_uri("/images/icon_phone.svg")); ?><a href="tel:+#">076 247 34 19</a></li>
				<li class="dd-footer__list-item"><?php echo file_get_contents(get_theme_file_uri("/images/icon_fb.svg")); ?><a href="https://www.facebook.com/Home-made-food-383350752019254" class="facebook">Home made food (Pho bep Oi)</a></li>
			</ul>
			<ul class="dd-footer__list">
				<li class="dd-footer__list-item">12h-13h // 18h-19h30</li>
				<li class="dd-footer__list-item">Tuesdays, Thursdays and Saturdays</li>
			</ul>
		</div>
	</div> <!-- end dd-footer__container -->
	<div class="dd-footer__attribution u-center-text">
		<p>Icons by <a href="https://fontawesome.com/license">Font Awesome</a>. Only colors may have been changed by us.</p>
	</div>
	<div class="site-info u-center-text">
		<p>
			<?php
			/* translators: 1: Theme name, 2: Theme author. */
			printf(esc_html__('Made with love and care by %2$s', 'digital-delicious'), 'digital-delicious', '<a href="https://www.digitalseeds.net">Anne-Sophie - DigitalSeeds</a>');
			?>
		</p>
		<p class="copyright"><?php printf(esc_html__('© Copyright 2021 - All rights reserved', 'digital-delicious')); ?></p>
		<!--
				Modified by SAS on 22.02.21
				/* translators: 1: Theme name, 2: Theme author.*/
				/* printf( esc_html__( 'Theme: %1$s by %2$s.', 'digital-delicious' ), 'digital-delicious', '<a href="https://www.digitalseeds.net">Anne-Sophie Sassard</a>' ); -->
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>