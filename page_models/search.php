
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
<?php 


$pagename = get_query_var('pagename'); 




//echo "<script>alert('value = ".$string."');</script>";

?> 

<div class="title-post nunito">
    <div class="container">
      <div id="search-box-side">
        <form method="post" id="search-form-side" action= "/wordpress/index.php/busca">
            <input  name = "search" id="search-text-side" type="text" placeholder=" Faça uma busca...">
            <button id="search-button">Pesquisar</button>
        </form>
    </div>
    </div>
</div>


<div class="row">
    <div class="col s12 m9 l9 xl9">

    <?php 
    //query
    $posts = my_query_posts($_POST['search']);
   
    if ( $posts!=false){
    	foreach ($posts as $post){
    		
    ?>

      <div class="card-panel card-news nunito">
        <h5 class="black-text"> <?php echo $post->post_title.$post->ID; ?></h5>
        <hr />
          <div class="black-text inside-news"><?php echo $post->post_content; ?>
          </div>
        <hr />
        <?php 
        $tags = my_query_posts($post->ID);
        	foreach ($tags as $tag){
        		if($tag->name!="Sem categoria"){
        ?>

        <div class="chip"> <?php echo $tag->name; ?> <i class="close material-icons">close</i></div>
        
      

    <?php
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
</div>


   <footer class="page-footer footer-comp">
      <div class="container">
          <div class="row">
              <div class="col l6 s10">
                  <div class="white-text"> <img class="logofooter" src="logofooter.png" alt="logo Branco"> </div>
                      <!--<p class="grey-text text-lighten-4">--> <blockquote class="border-citacao text-footer"> O PET é desenvolvido por grupos de estudantes, com tutoria de um docente, organizados a partir de formações em nível de graduação nas Instituições de Ensino Superior do País orientados pelo princípio da indissociabilidade entre ensino, pesquisa e extensão e da educação tutorial.
                      </blockquote> 
              </div>
              <div class="col l4 offset-l2 s10">
                  <h5 class="white-text">Feedback</h5>
                  <hr>
                  <ul>
                      <li><a class="grey-text text-lighten-3" href="#!">petcompufma2015@gmail.com</a></li>
                  </ul> 
              </div>
          </div>
      </div>
      <div class="footer-copyright copyright-comp">
        <div class="container">
          Copyright © 2018 Pet de Computação   
        </div>
      </div>
  </footer>
  </body>
</html>
