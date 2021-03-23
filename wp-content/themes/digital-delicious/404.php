<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Digital_Delicious
 */

get_header();
?>

<main id="primary" class="site-main">

	<section class="error-404 not-found">
		<header class="page-header">
			<h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'digital-delicious'); ?></h1>
		</header><!-- .page-header -->

		<div class="page-content">
			<p><?php esc_html_e('It looks like nothing was found at this location.', 'digital-delicious'); ?></p>
			<button class="button-404"><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Back to Home', 'digital-delicious'); ?></a></button>

		</div><!-- .page-content -->
	</section><!-- .error-404 -->

</main><!-- #main -->

<?php
get_footer();
