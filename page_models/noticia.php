<?php
/**
 * template de demostração de petianos
 * Template Name: noticia
 *
 * @package SiteGeralPETUFMA
 * @since SiteGeralPETUFMA 0.1
 *
 */
?>

<?php get_header(); ?>

    <div class="title-post nunito">
        <div class="container">
            <h3> Notícias </h3>
            <div id="search-box-side">
                <div id="search-form-side">
                    <form method="post" id="search-form" action= "/wordpress/index.php/busca"/>
                        <input  name = "search" id="search-text" type="text" placeholder=" Faça uma busca... ">
                        <button id="search-button">Pesquisar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
  
<?php get_footer(); ?>
