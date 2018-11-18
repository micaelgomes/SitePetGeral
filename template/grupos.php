<?php
/**
 * template de mostragem de resultados
 * Template Name: grupos
 *
 * @package SiteGeralPETUFMA
 * @since SiteGeralPETUFMA 0.1
 *
 */
?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<?php get_header(); ?>
<?php $URL = 'https://pet.ufma.br/' ?>
<?php //$URL = 'http://localhost/wordpress/' ?>
<?php

function rest_api_php_object($http_request){
	// faz o request do link
	$response = wp_remote_get( $http_request );
	// analisa se há erros
	if( is_wp_error( $response ) ) {
		return;
	}
	// transforma o json em objeto php
	$obj = json_decode( wp_remote_retrieve_body( $response ) );
	return $obj;
}

// corresponde a chamada da api do dominio computação
$pet_comp = rest_api_php_object("https://pet.ufma.br/comp/wp-json/pethome/v1/pet")[0];
$petianos_comp = rest_api_php_object("https://pet.ufma.br/comp/wp-json/pethome/v1/petianos");

// corresponde a chamada da api do dominio fisica
//$pet_fis = rest_api_php_object("https://pet.ufma.br/fisica/wp-json/pethome/v1/pet")[0];
//$petianos_fis = rest_api_php_object("https://pet.ufma.br/fisica/wp-json/pethome/v1/petianoss");

// corresponde a chamada da api do dominio biologia
//$pet_bio = rest_api_php_object("https://pet.ufma.br/bio/wp-json/pethome/v1/pet")[0];
//$petianos_bio = rest_api_php_object("https://pet.ufma.br/bio/wp-json/pethome/v1/petianos");

?>



<div class="parallax-container" style="height: 200px !important;">
	<div class="parallax"><img src="http://pet.ufma.br/wp-content/uploads/sites/4/2018/09/back.png"></div>
	<h3 class="center nunito white-text" style="padding: 3.5%; font-size: 60px;"> Grupos PET </h3>
</div>

<div class="row"></div>

<!--PET COMPUTAÇÃO-->
<div class="row">
	<div class="container">
		<div class="col xl6 l6 m6 s6">
			<div class="card">
		    <div class="card-image waves-effect waves-block waves-light">
		      <img class="activator" src=<?php echo $pet_comp->imagem; ?>>
		    </div>
		    <div class="card-content">
		      <span class="card-title activator grey-text text-darken-4"><a href=<?php echo $pet_comp->web ?>><?php echo $pet_comp->nome; ?></a><i class="material-icons right">more_vert</i></span>
			  <br>
			  <div class="row">
				<span><a href=<?php echo $pet_comp->facebook; ?>><i class="fab fa-facebook"></i></a></span>
				<span><a href=<?php echo $pet_comp->twitter ?>><i class="fab fa-twitter"></i></a></span>
			  </div>
		    </div>
		    <div class="card-reveal">
		      <span class="card-title grey-text text-darken-4"><?php echo "PET de ". $pet_comp->nome; ?><i class="material-icons right">close</i></span>
			  <p><?php echo "<i>Filosofia:</i><br>" . $pet_comp->filosofia ?></p>
		      <?php
			      // exibe cada projeto considerando que eles estejam separados cada um por ponto e virgula ";"
				  $tab = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
				  $values = explode(";", $pet_comp->projetos);
				  echo "<i>Projetos:</i><br>";
				  echo "<ul>";
				  foreach ($values as $value) {
			      	echo "<li>". $tab . $tab . $tab." &#8226; ". $value ."</li>";
				  }
				  echo "</ul>";

				  echo "<i>Integrantes:</i>";
				  echo '<div class="carousel">';
				  foreach ($petianos_comp as $key => $petiano) {
					  if(strcmp($petiano->classificacao, "Petianos") == 0){
						  echo '<a class="carousel-item estilo-img" href="#"><img src='.$petiano->imagem.'></a>';
						  //echo '<p><img class="carousel-item estilo-img" src='.$petiano->imagem.'>'.$petiano->nome.'</p>';
					  }
				  }
				  echo "</div>";
		      ?>

		    </div>
		  </div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
