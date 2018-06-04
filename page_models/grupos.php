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

<?php get_header(); ?>

  <div class="title-post nunito">
    <div class="container">
      <h3>Grupos PET</h3>
      <p class="light descnews">Segue a lista de Grupos PET UFMA</p>
    </div>
  </div>

  <br />  

  <div class="row">
		<!-- cardStart -->
		<div class="col s12 m6 l4 xl3">
			<div class="card z-depth-3">
				<div class="card-image">
					<img src="http://localhost/wordpress/wp-content/uploads/2018/03/pexels-photo-533189.jpeg">
					<span class="card-title">Computação</span>
				</div>
				<div class="card-content">
					<p>I am a very simple card. I am good at containing small bits of information.
					I am convenient because I require little markup to use effectively.</p>
				</div>
				<div class="card-reveal">
					<span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i>Petianos</span>
					
					<ul class="collection">
						<li class="collection-item avatar">
						<img src="http://localhost/wordpress/wp-content/uploads/2018/06/capa.png" alt="" class="circle">
						<span class="title">Title</span>
						<p>First Line <br>
							Second Line
						</p>
						<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
						</li>
						<li class="collection-item avatar">
						<i class="material-icons circle">folder</i>
						<span class="title">Title</span>
						<p>First Line <br>
							Second Line
						</p>
						<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
						</li>
						<li class="collection-item avatar">
						<i class="material-icons circle green">insert_chart</i>
						<span class="title">Title</span>
						<p>First Line <br>
							Second Line
						</p>
						<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
						</li>
						<li class="collection-item avatar">
						<i class="material-icons circle red">play_arrow</i>
						<span class="title">Title</span>
						<p>First Line <br>
							Second Line
						</p>
						<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
						</li>
					</ul>
            
				</div>
				<div class="card-action center-align">
					<a class="waves-effect waves-light btn button-color-grupo activator"><i class="material-icons right"></i>Integrantes</a>
				</div>
			</div>
		</div>	
		<!-- cardEnd -->
  </div>
  
<?php get_footer(); ?>