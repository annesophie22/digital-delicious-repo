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
		<div class="dd-footer-container">
			<?php if ( has_nav_menu( 'footer' ) ) : ?>
				<nav class="dd-footer-navigation" aria-label="<?php esc_attr_e( 'Footer menu', 'digital-delicious' ); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'menu_id'        => 'footer-menu',
							'menu_class'     => 'nav-menu',
						)
					);
					?>
				</nav><!-- .dd-footer-navigation -->
			<?php endif; ?>
			<div class="dd-footer-attribution">
				<p>Icons by <a href="https://fontawesome.com/license">Font Awesome</a>. Only colors may have been changed by us.</p>
			</div>
		</div> <!-- end dd-footer-container -->
		<div class="site-info">
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Made with love and care by %2$s', 'digital-delicious' ), 'digital-delicious', '<a href="https://www.digitalseeds.net">Anne-Sophie - DigitalSeeds</a>' );
					?>
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
