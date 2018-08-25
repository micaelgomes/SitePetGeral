<?php
/**
 * template de mostragem de resultados
 * Template Name: busca
 *
 * @package SiteGeralPETUFMA
 * @since SiteGeralPETUFMA 0.1
 *
 */
?>

<?php 
    get_header();
    $URL = 'https://pet.ufma.br/';
    //$URL = 'http://localhost/wordpress/';
    $pagename = get_query_var('pagename');
?>
  
    <div class="parallax-container" style="height: 200px !important;">
      <div class="parallax"><img src=<?php echo $URL.'wp-content/uploads/sites/4/2018/08/sec4.png'; ?>></div>
      <!--<h3 class="center nunito white-text" style="padding: 3.5%; font-size: 60px;"> PET UFMA </h3>-->
      <div class="container">
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


    <div class="title-post nunito">
        <div class="container">
            <h3> Resultados </h3>
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

        <?php
        //query
        $posts = my_query_posts($_POST['search']);

    if ( $posts!=false){
        foreach ($posts as $post){

        ?>

        <div class="card-panel card-news">
            <h4 class="black-text nunito"> <?php echo $post->post_title; ?></h5>

            <div class=" body-post black-text inside-news flow-text truncate">
                <?php echo $post->post_content; ?>
            </div>
            <br>
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
            <h5 class="black-text"> Resultados não foram encontrados! </h5>

        </div>
    <?php
    }
        ?>

        </div>

        <div class = "col s12 m2 l2 xl2 body-side-page">
            <?php get_sidebar(); ?>
        </div>

    </div>

<?php get_footer(); ?>
