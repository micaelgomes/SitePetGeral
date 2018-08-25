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

<p class="light titulos flow-text nunito"> Categorias </p>
<hr>
<?php
    $categories = get_categories();
    foreach($categories as $category) {
        if (strcmp($category->name, "Sem categoria")) {
            echo '
                <div class="chip border-citacao-post color-link"> <a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';
        } else {
            echo '
                <div class="chip border-citacao-post color-link"> <a href="' . get_category_link($category->term_id) . '"> Outros </a></div>
            ';
        }
    }
?>
<p class="light titulos flow-text nunito"> Archives </p>
<hr>

<div class = "body-side-archive nunito border-citacao-post color-link">
    <?php wp_get_archives('type=monthly'); ?>
</div>
