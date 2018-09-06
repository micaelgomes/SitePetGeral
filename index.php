<?php
/**
 * Tema do Site Geral dos Grupos PET da UFMA
 *
 * @package SiteGeralPETUFMA
 * @since SiteGeralPETUFMA 0.1
 *
 * Learn more: {@link https://github.com/micaelgoms/SitePetGeral.wiki.git}
 *
 */

?>

<?php get_header(); ?>
<?php $URL = 'https://pet.ufma.br/' ?>
<?php //$URL = 'http://localhost/wordpress/' ?>

<section>
	<div class="parallax-container">
		<div class="parallax"><img src="http://pet.ufma.br/wp-content/uploads/sites/4/2018/09/back.png"></div>
		<div class="carousel carousel-slider center ajuste-slider" data-indicators="true">
			<div class="carousel-fixed-item center">
				<h5 class="white-text nunito">Um ambiente político para todas as pautas.</h5>
			</div>
			<div class="carousel-item white-text" href="#one!">
				<h1 class="nunito ajuste-name-slider">ENSINO</h1>
			</div>
			<div class="carousel-item white-text" href="#two!">
				<h1 class="nunito ajuste-name-slider">PESQUISA</h1>
			</div>
			<div class="carousel-item white-text" href="#three!">
				<h1 class="nunito ajuste-name-slider">EXTENSÃO</h1>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="background-section">
		<div class="container">
			<div class="section border-section">
				<div class="row">
					<div class="col s12 m12 l4 xl4 menus">
            <h2><i class="material-icons md-48">lightbulb_outline</i></h2>
	          <div class="icon-block">
	            <p class="light titulos center flow-text"> Criatividade </p>
	            <blockquote class = "flow-text body-filosofia border-citacao-sobre">
	                O programa incentiva a criação criativa de metodologias de ensino tudo com a atuação dinâmica e incisiva de discentes envolvidos no programa. Os benefícios são a renovação dos currículos, debate aberto e amplo de novas metodologias.
	            </blockquote>
	          </div>
					</div>

					<div class="col s12 m12 l4 xl4 menus">
			      <h2><i class="material-icons md-48">face</i></h2>
	          <div class="icon-block">
	            <p class="light titulos center flow-text"> Cidadania </p>
	            <blockquote class = "flow-text body-filosofia border-citacao-sobre">
	                Os discentes do programa são envolvidos em práticas de pesquisa levando em consideração temas sociais, cidadania, ética, dentre outros de maneira a desenvolver cidadãos conscientes.
	            </blockquote>
	          </div>
					</div>

					<div class="col s12 m12 l4 xl4 menus">
			      <h2><i class="material-icons md-48">supervisor_account</i></h2>
            <div class="icon-block">
              <p class="light titulos center flow-text"> União </p>
              <blockquote class = "flow-text body-filosofia border-citacao-sobre">
                  Ações que proporcionam o desenvolvimento conjunto da sociedade, ampliando o leque de participação da universidade na comunidade e formação alinhada com os problemas sociais do Estado.
              </blockquote>
            </div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container submenu">
		<div class="section">
			<div class="row">
				<div class="col s12 m12 l6 xl6x">
					<div class="icon-block">
						<p class="light titulos center">Notícias Recentes dos PET's</p>
						<?php
							$args = array( 'numberposts' => '5',
											'orderby' => 'post_date',
											'order' => 'DESC',
											'post_type' => 'post'
										);
							$recent_posts = wp_get_recent_posts( $args );
							if($recent_posts){
								foreach( $recent_posts as $recent ){
									echo ' <blockquote class = "border-citacao-post nunito"><p class="light"><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </p></blockquote>';
									echo '<hr>';
								}
								wp_reset_query();
							} else {
								echo '<br />';
								echo '<p class="light center"> Nada Cadastrado </p>';
							}
						?>
					</div>
				</div>

				<div class="col s12 m12 l6 xl6">
					<div class="icon-block">
						  <p class="light titulos center">Eventos Próximos do PET</p>
						  <?php
								$args = array( 'numberposts' => '5',
												'orderby' => 'post_date',
												'order' => 'DESC',
												'post_type' => 'post',
												'cat' => 6
											);
								$recent_events = wp_get_recent_posts( $args );
								if($recent_events){
									foreach( $recent_events as $recent ){
										echo '<blockquote class = "border-citacao-post nunito"> <p class="light"><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </p> </blockquote>';
										echo '<hr>';
									}
									wp_reset_query();
								} else {
									echo '<br />';
									echo '<p class="light center"> Nada Cadastrado </p>';
								}
							?>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
