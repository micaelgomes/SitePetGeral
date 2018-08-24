<?php/*<!--
  $args = array( 'numberposts' => '3',
          'orderby' => 'post_date',
          'order' => 'DESC',
          'post_type' => 'post',
          'cat' => 1
        );
  $recent_posts = wp_get_recent_posts( $args );
  $cont = 1;
  echo '  <div class="carousel carousel-slider center" data-indicators="true">';
  if($recent_posts){
    foreach( $recent_posts as $recent ){
      echo '	<div class="carousel-item bannerimg white-text" href="#" >';
      echo '		<h1 class = "nunito slider-box">' .strtolower($recent["post_title"]).' <p class = "light titulos center">'; //por <autor>' . get_the_author_meta('display_name', $recent["ID"]) .'</autor></p></h1>';
      echo '  	<div class="center carousel-fixed-item">
              <a class="btn waves-effect white black-text darken-text-2" href="' . get_permalink($recent["ID"]) . '"> Leia Mais </a>
            </div>';
      echo '	</div>';
    }
    wp_reset_query();
    echo '</div>';
  } else {
    echo '	<div class="carousel-item bannerimg white-text" href="#" >';
    echo '		<h1 class = "nunito slider-box">Nada Cadastrado</h1>';
    echo '	</div>';
    echo '</div>';
  }
-->*/?>
