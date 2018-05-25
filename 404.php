<?php
/**
 * Template 404 (Not Found)
 *
 * @package SiteGeralPETUFMA
 * @since SiteGeralPETUFMA 0.1
 *
 * Learn more: {@link https://github.com/micaelgoms/SitePetGeral.wiki.git}
 *
 */

get_header(); ?>

	<div class="center background-section-sobre-404 nunito">
		<h2><?php _e( 'A sua busca não retornou resultados'); ?></h2>
		<?php get_search_form(); ?>
	</div>

<?php get_footer(); ?>
