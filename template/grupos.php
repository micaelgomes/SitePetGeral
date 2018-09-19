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

<div class="parallax-container" style="height: 200px !important;">
	<div class="parallax"><img src="http://pet.ufma.br/wp-content/uploads/sites/4/2018/09/back.png"></div>
	<h3 class="center nunito white-text" style="padding: 3.5%; font-size: 60px;"> Grupos PET </h3>
</div>

<div class="row"></div>

<div class="row">
	<div class="container">
		<div class="col xl6 l6 m6 s6">
			<div class="card">
		    <div class="card-image waves-effect waves-block waves-light">
		      <img class="activator" src="https://pet.ufma.br/comp/wp-content/uploads/sites/1/2018/09//comp.png">
		    </div>
		    <div class="card-content">
		      <span class="card-title activator grey-text text-darken-4">Nome Grupo PET<i class="material-icons right">more_vert</i></span>
		      <p><a href="#">link do Site do Grupo</a></p>
		    </div>
		    <div class="card-reveal">
		      <span class="card-title grey-text text-darken-4">Nome do grupo PET<i class="material-icons right">close</i></span>
		      <p>(Filosofia) Here is some more information about this product that is only revealed once clicked on.</p>
		      <p>&rarr; projeto A</p>
		      <p>&rarr; projeto B</p>
		      <p>&rarr; projeto C</p>
		      <div class="row center">
		      	<a class="waves-effect waves-light btn modal-trigger blue" href="#modal1">Integrantes</a>
		      </div>
		      <div class="row center">
		      	<div class="col xl4 l4 m4 s4"><a href="#"><i class="fab fa-facebook"></i></a></div>
		      	<div class="col xl4 l4 m4 s4"><a href="#"><i class="fab fa-twitter"></i></a></div>
		      	<div class="col xl4 l4 m4 s4"><a href="#"><i class="fas fa-sitemap"></i></a></div>		      	
		      </div>
		    </div>
		    <!-- Modal Structure -->
			  <div id="modal1" class="modal">
			    <div class="modal-content">
			      <h4>Petianos</h4>
			      <p><img class="responsive-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQsTgAzQ8RBcwIvuwyRLNLvy6ZD-LzR02KjV_ckb7h97Hrh1LXkbQ"> José augusto</p>
			      <p><img class="responsive-img" src="cool_pic.jpg">Inácio Fonseca</p>
			      <p> <img class="responsive-img" src="cool_pic.jpg">Plínio Saudável</p>
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