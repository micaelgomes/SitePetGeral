<?php
/**
 * template de mostragem de resultados (category)
 * Template Name: busca
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
            <h3> Resultados do <?php echo get_the_archive_title(); ?> </h3>
            <div id="search-box-side">
                <div id="search-form-side">
                <form method="post" id="search-form" action= "/wordpress/index.php/busca"/>
                    <input  name = "search" id="search-text-side" type="text" placeholder=" Faça uma busca... ">
                    <button type="submit" id="search-button-side" onclick="">Pesquisar</button>
                </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col s12 m9 l9 xl9 body-side-result">
            <?php while ( have_posts() ) : the_post(); ?>
                    <div class="card-panel card-news">
                        <h4 class="black-text nunito color-link"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
                        <!--<small><?php //the_time('F jS, Y') ?> by <?php //the_author_posts_link() ?></small>-->

                        <div class="body-post black-text inside-news flow-text truncate">
                            <?php //the_content(); ?>
                        </div>
                    </div>
                    <br>
            <?php endwhile; ?>
        </div>

        <div class = "col s12 m2 l2 xl2 body-side-page">
            <?php get_sidebar(); ?>
        </div>

    </div>

<?php get_footer(); ?>
