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
                    <form method="post" id="search-form" action= "/wordpress/index.php/busca"/>
                        <input  name = "search" id="search-text" type="text" placeholder=" Faça uma busca... ">
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
								<p class="light center">34 notícias cadastradas</p>
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
						  <p class="light titulos center">Notícias Populares</p>
						  <p class="light">Sei la men</p>
						  <hr>
						  <p class="light">Outro Teste</p>
					</div>
				</div>

				<div class="col s12 m12 l4">
					<div class="icon-block">
						  <p class="light titulos center">Tópicos Populares do Fórum</p>
						  <p class="light">Sei la men</p>
						  <hr>
						  <p class="light">Outro Teste</p>
						</div>
				</div>
				
				<div class="col s12 m12 l4">
					<div class="icon-block">
						  <p class="light titulos center">Eventos Próximos</p>
						  <p class="light">Sei la men</p>
						  <hr>
						  <p class="light">Outro Teste</p>
					</div>
				</div>
          
			</div>
		</div>
	</div>
</section>
	
<?php get_footer(); ?>
