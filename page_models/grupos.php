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

	//$URL = 'https://pet.ufma.br/' ;
	//$URL = 'http://localhost/wordpress/';

?>

  <div class="title-post nunito">
    <div class="container">
      <h3>Grupos PET</h3>
      <p class="light descnews">Segue a lista de Grupos PET UFMA</p>
    </div>
  </div>

  <div class="row">

		<!-- O código deve ficar dentro desta DIV -->

  </div>

<?php get_footer(); ?>
