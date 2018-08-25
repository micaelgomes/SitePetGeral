<?php
/**
 * Tema do Site Geral dos Grupos PET da UFMA
 *
 * @package SiteGeralPETUFMA
 * @since SiteGeralPETUFMA 0.1
 *
 */
?>
<?php $URL = 'https://pet.ufma.br/' ?>
<?php //$URL = 'http://localhost/wordpress/' ?>

<footer class="page-footer footer-comp">
	<div class="container">
		<div class="row">
			<div class="col l6 s10">
				<div class="white-text"> <img class="logofooter" src=<?php echo $URL.'wp-content/uploads/sites/4/2018/08/logofooter.png'?> alt="logo Branco"> </div>
				<blockquote class="border-citacao text-footer"> O PET é desenvolvido por grupos de estudantes, com tutoria de um docente, organizados a partir de formações em nível de graduação nas Instituições de Ensino Superior do País orientados pelo princípio da indissociabilidade entre ensino, pesquisa e extensão e da educação tutorial.
					</blockquote>
				</div>
				<div class="col l4 offset-l2 s10">
					<h5 class="white-text">Feedback & Dúvidas</h5>
					<hr>
					<ul>
						<li><a class="grey-text text-lighten-3" href="#!">petcompufma2015@gmail.com</a></li>
					</ul>
			</div>
		</div>
	</div>
	<div class="footer-copyright copyright-comp">
		<div class="container">
		Copyright © 2018 Pet de Computação
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
