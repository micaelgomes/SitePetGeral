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
				<h1 class="">ENSINO</h1>
			</div>
			<div class="carousel-item white-text" href="#two!">
				<h1 class="">PESQUISA</h1>
			</div>
			<div class="carousel-item white-text" href="#three!">
				<h1 class="">EXTENSÃO</h1>
			</div>
		</div>
	</div>
</section>
<section>
	<?php
		echo get_stylesheet_uri();
	?>
</section>

<?php get_footer(); ?>
