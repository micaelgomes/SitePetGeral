<?php
/**
 * template de demostração de petianos
 * Template Name: noticia
 *
 * @package SiteGeralPETUFMA
 * @since SiteGeralPETUFMA 0.1
 *
 */
?>

<?php get_header(); ?>
<?php $pagename = get_query_var('pagename'); ?> 

<section>
	<!-- PARALAX SECTION -->
	<div class="header-container">
			<div class="section  no-pad-bot">
					<div class="container">
              <div class = "title-post nunito">
                <h3><?php echo $pagename ?></h3>
              </div>
							<div id="search-box-side">
									<form method="post" id="search-form-side">
											<input  id="search-text-side" type="text" placeholder=" Faça uma busca... ">
											<button id="search-button-side">Pesquisar</button>
									</form>
							</div>
					</div>
			</div>
			<div class="parallax bannerimg-side"></div>
	</div>
</section>
<section>
    <div class="background-section">

    </div>
</section>
  
<?php get_footer(); ?>