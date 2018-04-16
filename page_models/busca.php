<?php
/**
 * template de demostração de petianos
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
            <h3> Resultados </h3>
            <div id="search-box-side">
                <div id="search-form-side">
                    <input  id="search-text-side" type="text" placeholder=" Faça uma busca... ">
                    <button type="submit" id="search-button-side" onclick="">Pesquisar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col s12 m9 l9 xl9 body-side-result">

        <?php 
        //query
        $posts = my_query_posts($_POST['search']);
    
        if ( $posts!=false){
        foreach ($posts as $post){
            
        ?>

        <div class="card-panel card-news nunito">
            <h5 class="black-text"> <?php echo $post->post_title; ?></h5>
            <hr />
            <div class="black-text inside-news"><?php echo $post->post_content; ?>
            </div>
            <hr />
            <?php 
            $category = my_query_categories($post->ID);
            if ( $category!=false){
            foreach ($category as $cat){
                if($tag->name!="Sem categoria"){
            ?>

            <div class="chip"> <?php echo $cat->name; ?></div>
            
        

        <?php
            }
            }
        }
        ?>

        </div>

        <?php
        }
    }else{
        ?>
        <div class="card-panel card-news nunito">
            <h5 class="black-text"> Mano, não foi encontrado! </h5>
    
        </div>
    <?php
    }
        ?>

        </div>

        <div class = "col s12 m2 l2 xl2 body-side-page">            
            <p class="light titulos flow-text"> Categorias </p> 
            <hr>
            <?php
                $categories = get_categories();
                foreach($categories as $category) {
                    if (strcmp($category->name, "Sem categoria")) {
                        echo '
                            <div class="chip border-citacao-post grey darken-2"> <a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>
                        ';
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
                
        </div>

    </div>

<?php get_footer(); ?>