<?php
/**
 * template de demostração de petianos
 * Template Name: Grupos PET
 *
 * @package SiteGeralPETUFMA
 * @since SiteGeralPETUFMA 0.1
 *
 */
?>
<?php 

	$grupo = query_pet_home_theme();
	$petianos = query_petianos_theme();
	get_header(); 



?>

  <div class="title-post nunito">
    <div class="container">
      <h3>Grupos PET</h3>
      <p class="light descnews">Segue a lista de Grupos PET UFMA</p>
    </div>
  </div>

  <br />  

  <div class="row">
  
  		<?php 
  		foreach ($grupo as $g) {										
		?>

		<!-- cardStart -->
		<div class="col s12 m6 l4 xl3">
			<div class="card z-depth-3">
				<div class="card-image">

					<img src="<?php echo $g->imagem; ?>">
					<span class="card-title"> <?php echo $g->nome; ?> </span>
				</div>
				<div class="card-content">
					<p><?php echo $g->filosofia; ?></p>
				</div>
				<div class="card-reveal">
					<span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i>Petianos</span>

				<?php
					foreach ($petianos as $p) {
				?>

					<ul class="collection">
						<li class="collection-item avatar">
						<img src="<?php echo $p->imagem; ?>" alt="" class="circle">
						<span class="title"> <?php echo $p->nome; ?> </span>
						
						<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
						</li>
					</ul>

            	<?php
					}
				?>

				</div>
				<div class="card-action center-align">
					<a class="waves-effect waves-light btn button-color-grupo activator"><i class="material-icons right"></i>Integrantes</a>
				</div>
			</div>
		</div>	
		<!-- cardEnd -->

		<?php
		}
		?>

  </div>
  
<?php get_footer(); ?>