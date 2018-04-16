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

    <div class = "row">
        <div class = "col s12 m9 l9 xl9 body-page flow-text">
            <?php 
            if ( have_posts() ) : while ( have_posts() ) : the_post();
                the_content();
                endwhile; 
            else: ?>
                <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>
        </div>
        <div class = "col s12 m2 l2 xl2 body-side-page">            
            <p class="light titulos flow-text"> Categorias </p> 
            <hr>
            <?php
                $categories = get_categories();
                foreach($categories as $category) {
                   echo '
                    <div class="chip border-citacao-post grey darken-2"> <a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>
                   ';
                }
            ?>
            <p class="light titulos flow-text"> Archives </p>
            <hr>
            
            <div class = "body-side-archive nunito border-citacao-post">
                <?php wp_get_archives('type=monthly'); ?>
            </div>
                
        </div>
    </div>

<?php get_footer(); ?>