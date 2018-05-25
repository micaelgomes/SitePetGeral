<?php
/**
 * Tema da barra lateral
 *
 *
 * @package SiteGeralPETUFMA
 * @since SiteGeralPETUFMA 0.1
 *
 **/
?>

<p class="light titulos flow-text"> Categorias </p>
<hr>
<?php
    $categories = get_categories();
    foreach($categories as $category) {
        if (strcmp($category->name, "Sem categoria")) {
            echo '
                <div class="chip border-citacao-post grey darken-2"> <a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';
        } else {
            echo '
                <div class="chip border-citacao-post grey darken-2"> <a href="' . get_category_link($category->term_id) . '"> Outros </a></div>
            ';
        }
    }
?>
<p class="light titulos flow-text"> Archives </p>
<hr>

<div class = "body-side-archive nunito border-citacao-post">
    <?php wp_get_archives('type=monthly'); ?>
</div>
