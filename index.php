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
		<div class="parallax"><img src=<?php echo $URL.'wp-content/uploads/2018/04/sec2.jpg'; ?>></div>
	</div>
</section>
<section>
	<div class="background-section">
		<div class="container">
			<div class="section border-section">
				<div class="row">
					<!-- BLOCOS -->
					<div class="col s12 m12 l6 xl6 menus">
						<a href=<?php echo $URL.'busca'; ?>>
							<div class="icon-block areabuttom">
								<h2 class="center"><i class="material-icons icon-color">flash_on</i></h2>
								<h5 class="center">Notícias</h5>
								<?php
									$quant_posts = $wpdb->get_var("SELECT count FROM wp_term_taxonomy");
								?>
								<p class="light center"> <?php echo $quant_posts; ?> notícias cadastradas</p>
							</div>
						</a>
					</div>

					<!--
					<div class="col s12 m12 l4 xl4 menus">
						<a href="#">
							<div class="icon-block areabuttom">
								<h2 class="center"><i class="material-icons icon-color">forum</i></h2>
								<h5 class="center">Fórum</h5>
								<p class="light center">14 ambientes de discursão</p>
							</div>
						</a>
					</div>
					-->

					<div class="col s12 m12 l6 xl6 menus">
						<a href="#">
							<div class="icon-block areabuttom1">
								<h2 class="center"><i class="material-icons icon-color">event</i></h2>
								<h5 class="center">Eventos</h5>
								<p class="light center">Realizações futuras</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container submenu">
		<div class="section">
			<div class="row">
				<div class="col s12 m12 l6 xl6">
					<div class="icon-block">
						<p class="light titulos center">Notícias Recentes</p>
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

				<!--
				<div class="col s12 m12 l4">
					<div class="icon-block">
						  <p class="light titulos center">Tópicos Recentes do Fórum</p>
						  <?php
								$args = array( 'numberposts' => '5',
												'orderby' => 'post_date',
												'order' => 'DESC',
												'post_type' => 'post',
												'cat' => 12
											);
								$recent_topic = wp_get_recent_posts( $args );
								if($recent_topic){
									foreach( $recent_topic as $recent ){
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
				-->

				<div class="col s12 m12 l6 xl6">
					<div class="icon-block">
						  <p class="light titulos center">Eventos Próximos</p>
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
