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
<section>
	<!-- PARALAX SECTION -->
	<div class="header-container">
		<div class="section  no-pad-bot">
			<div class="container">
				<div id="search-box">
					<form method="post" id="search-form">
						<input  id="search-text" type="text" placeholder=" Faça uma busca... ">
						<button id="search-button">Pesquisar</button>
					</form>
				</div>
			</div>
		</div>
		<div class="parallax bannerimg"></div>
	</div>
</section>
<section>
	<div class="background-section">
		<div class="container">
			<div class="section border-section">
				<div class="row">
					<!-- BLOCOS -->
					<div class="col s12 m12 l4 xl4 menus">
						<a href="http://localhost/wordpress/index.php/noticia/">
							<div class="icon-block areabuttom">
								<h2 class="center"><i class="material-icons icon-color">flash_on</i></h2>
								<h5 class="center">Notícias</h5>
								<?php $quant_posts = $wpdb->get_var("SELECT count FROM wp_term_taxonomy WHERE term_taxonomy_id = '1' "); ?>
								<p class="light center"> <?php echo $quant_posts; ?> notícias cadastradas</p>
							</div>
						</a>
					</div>
					<div class="col s12 m12 l4 xl4 menus">
						<a href="#">
							<div class="icon-block areabuttom">
								<h2 class="center"><i class="material-icons icon-color">forum</i></h2>
								<h5 class="center">Fórum</h5>
								<p class="light center">14 ambientes de discursão</p>
							</div>
						</a>
					</div>
					<div class="col s12 m12 l4 xl4 menus">
						<a href="#">
							<div class="icon-block areabuttom">
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
				<div class="col s12 m12 l4">
					<div class="icon-block">
						<p class="light titulos center">Notícias Recentes</p>
						<?php
							$args = array( 'numberposts' => '3',
											'orderby' => 'post_date',
											'order' => 'DESC',
											'post_type' => 'post',
											'cat' => 1  
										);
							$recent_posts = wp_get_recent_posts( $args );
							foreach( $recent_posts as $recent ){
								echo ' <p class="light"><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </p>';
								echo '<hr>';
							}
							wp_reset_query();
						?>
					</div>
				</div>

				<div class="col s12 m12 l4">
					<div class="icon-block">
						  <p class="light titulos center">Tópicos Recentes do Fórum</p>
						  <?php
								$args = array( 'numberposts' => '3',
												'orderby' => 'post_date',
												'order' => 'DESC',
												'post_type' => 'post',
												'cat' => 7 
											);
								$recent_posts = wp_get_recent_posts( $args );
								foreach( $recent_posts as $recent ){
									echo ' <p class="light"><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </p>';
									echo '<hr>';
								}
								wp_reset_query();
							?>
						</div>
				</div>
				
				<div class="col s12 m12 l4">
					<div class="icon-block">
						  <p class="light titulos center">Eventos Próximos</p>
						  <?php
								$args = array( 'numberposts' => '3',
												'orderby' => 'post_date',
												'order' => 'DESC',
												'post_type' => 'post',
												'cat' => 6 
											);
								$recent_posts = wp_get_recent_posts( $args );
								foreach( $recent_posts as $recent ){
									echo ' <p class="light"><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </p>';
									echo '<hr>';
								}
								wp_reset_query();
							?>
					</div>
				</div>
          
			</div>
		</div>
	</div>
</section>
	
<?php get_footer(); ?>
