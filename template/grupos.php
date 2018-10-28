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
$pet_fis = rest_api_php_object("https://pet.ufma.br/fisica/wp-json/pethome/v1/pet")[0];
$petianos_fis = rest_api_php_object("https://pet.ufma.br/fisica/wp-json/pethome/v1/petianoss");

// corresponde a chamada da api do dominio biologia
$pet_bio = rest_api_php_object("https://pet.ufma.br/bio/wp-json/pethome/v1/pet")[0];
$petianos_bio = rest_api_php_object("https://pet.ufma.br/bio/wp-json/pethome/v1/petianos");

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
		      <span class="card-title activator grey-text text-darken-4"><?php echo $pet_comp->nome; ?><i class="material-icons right">more_vert</i></span>
		      <p><a href=<?php echo $pet_comp->web; ?>>link do Site do Grupo</a></p>
		    </div>
		    <div class="card-reveal">
		      <span class="card-title grey-text text-darken-4"><?php echo $pet_comp->nome; ?><i class="material-icons right">close</i></span>
		      <p><?php echo $pet_comp->filosofia ?></p>

		      <?php

		      // exibe cada projeto considerando que eles estejam separados cada um por ponto e virgula ";"
		      $array = explode(";", $pet_comp->projetos);
		      foreach ($array as $key => $value) {
		      	echo "<p>".$value."</p>";
		      }

		      ?>

		      <div class="row center">
		      	<a class="waves-effect waves-light btn modal-trigger blue" href="#modal1">Integrantes</a>
		      </div>
		      <div class="row center">
		      	<div class="col xl4 l4 m4 s4"><a href=<?php echo $pet_comp->facebook; ?>><i class="fab fa-facebook"></i></a></div>
		      	<div class="col xl4 l4 m4 s4"><a href=<?php echo $pet_comp->twitter ?>><i class="fab fa-twitter"></i></a></div>
		      	<div class="col xl4 l4 m4 s4"><a href=<?php echo $pet_comp->web ?>><i class="fas fa-sitemap"></i></a></div>		      	
		      </div>
		    </div>


		    <!-- Modal Structure -->
			  <div id="modal1" class="modal">
			    <div class="modal-content">
			      <h4>Petianos</h4>

			      <?php
			      // exibe a foto e o nome de cada petiano
			      foreach ($petianos_comp as $key => $petiano) {
			      	echo '<p><img class="responsive-img" src='.$petiano->imagem.'>'.$petiano->nome.'</p>';
			      }
			      ?>
			    </div>
			    <div class="modal-footer">
			      <a href="#!" class="modal-close waves-effect waves-green btn-flat">voltar</a>
			    </div>
			  </div>


		  </div>	
		</div>
	</div>		



<!--PET FISÍCA-->

	<div class="container">
		<div class="col xl6 l6 m6 s6">
			<div class="card">
		    <div class="card-image waves-effect waves-block waves-light">
		      <img class="activator" src=<?php echo $pet_fis->imagem; ?>>
		    </div>
		    <div class="card-content">
		      <span class="card-title activator grey-text text-darken-4"><?php echo $pet_fis->nome; ?><i class="material-icons right">more_vert</i></span>
		      <p><a href=<?php echo $pet_fis->web; ?>>link do Site do Grupo</a></p>
		    </div>
		    <div class="card-reveal">
		      <span class="card-title grey-text text-darken-4"><?php echo $pet_fis->nome; ?><i class="material-icons right">close</i></span>
		      <p><?php echo $pet_fis->filosofia ?></p>

		      <?php

		      // exibe cada projeto considerando que eles estejam separados cada um por ponto e virgula ";"
		      $array = explode(";", $pet_fis->projetos);
		      foreach ($array as $key => $value) {
		      	echo "<p>".$value."</p>";
		      }

		      ?>

		      <div class="row center">
		      	<!--<a class="waves-effect waves-light btn modal-trigger blue" href="#modal1">Integrantes</a>-->
		      </div>
		      <div class="row center">
		      	<div class="col xl4 l4 m4 s4"><a href=<?php echo $pet_fis->facebook; ?>><i class="fab fa-facebook"></i></a></div>
		      	<div class="col xl4 l4 m4 s4"><a href=<?php echo $pet_fis->twitter ?>><i class="fab fa-twitter"></i></a></div>
		      	<div class="col xl4 l4 m4 s4"><a href=<?php echo $pet_fis->web ?>><i class="fas fa-sitemap"></i></a></div>		      	
		      </div>
		    </div>


		    <!-- Modal Structure -->
			  <div id="modal1" class="modal">
			    <div class="modal-content">
			      <h4>Petianos</h4>

			      <?php
			      // exibe a foto e o nome de cada petiano
			      foreach ($petianos_fis as $key => $petiano) {
			      	echo '<p><img class="responsive-img" src='.$petiano->imagem.'>'.$petiano->nome.'</p>';
			      }
			      ?>
			    </div>
			    <div class="modal-footer">
			      <a href="#!" class="modal-close waves-effect waves-green btn-flat">voltar</a>
			    </div>
			  </div>


		  </div>	
		</div>
	</div>		


<!--PET BIOLOGIA-->

	<div class="container">
		<div class="col xl6 l6 m6 s6">
			<div class="card">
		    <div class="card-image waves-effect waves-block waves-light">
		      <img class="activator" src=<?php echo $pet_bio->imagem; ?>>
		    </div>
		    <div class="card-content">
		      <span class="card-title activator grey-text text-darken-4"><?php echo $pet_bio->nome; ?><i class="material-icons right">more_vert</i></span>
		      <p><a href=<?php echo $pet_bio->web; ?>>link do Site do Grupo</a></p>
		    </div>
		    <div class="card-reveal">
		      <span class="card-title grey-text text-darken-4"><?php echo $pet_bio->nome; ?><i class="material-icons right">close</i></span>
		      <p><?php echo $pet_bio->filosofia ?></p>

		      <?php

		      // exibe cada projeto considerando que eles estejam separados cada um por ponto e virgula ";"
		      $array = explode(";", $pet_bio->projetos);
		      foreach ($array as $key => $value) {
		      	echo "<p>".$value."</p>";
		      }

		      ?>

		      <div class="row center">
		      	<!--<a class="waves-effect waves-light btn modal-trigger blue" href="#modal1">Integrantes</a>-->
		      </div>
		      <div class="row center">
		      	<div class="col xl4 l4 m4 s4"><a href=<?php echo $pet_bio->facebook; ?>><i class="fab fa-facebook"></i></a></div>
		      	<div class="col xl4 l4 m4 s4"><a href=<?php echo $pet_bio->twitter ?>><i class="fab fa-twitter"></i></a></div>
		      	<div class="col xl4 l4 m4 s4"><a href=<?php echo $pet_bio->web ?>><i class="fas fa-sitemap"></i></a></div>		      	
		      </div>
		    </div>


		    <!-- Modal Structure -->
			  <div id="modal1" class="modal">
			    <div class="modal-content">
			      <h4>Petianos</h4>

			      <?php
			      // exibe a foto e o nome de cada petiano
			      foreach ($petianos_bio as $key => $petiano) {
			      	echo '<p><img class="responsive-img" src='.$petiano->imagem.'>'.$petiano->nome.'</p>';
			      }
			      ?>
			    </div>
			    <div class="modal-footer">
			      <a href="#!" class="modal-close waves-effect waves-green btn-flat">voltar</a>
			    </div>
			  </div>


		  </div>	
		</div>
	</div>		
</div>



  <script>
   $(document).ready(function(){
      $('#modal1').modal();
   });
  </script>

<?php get_footer(); ?>