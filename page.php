<?php
/**
 * Página modelo padrão para publicações genéricas
 *
 * @package SiteGeralPETUFMA
 * @since SiteGeralPETUFMA 0.1
 *
 */
?>

<?php get_header(); ?>
	<?php $pagename = get_query_var('pagename'); ?> 
	
	<div class="title-post nunito">
        <div class="container">
        	<h3><?php the_title(); ?></h3>
        </div>
    </div>   
	
<?php get_footer(); ?>