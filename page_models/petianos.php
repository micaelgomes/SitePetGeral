<?php
/**
 * template de demostração dos Grupos PET
 * Template Name: Petianos
 *
 * @package SiteGeralPETUFMA
 * @since SiteGeralPETUFMA 0.1
 *
 */
?>

<?php get_header(); ?>
	<script>
		$(document).ready(function(){
		  $('.collapsible').collapsible();
		})
	</script>

	<div class="title-post nunito">
        <div class="container">
        <h3>Petianos Ativos</h3>
            <p class="light descnews">Segue lista de petianos ativos do PET UFMA</p>
        </div>
    </div>

  <br />

  <div class="row">
      <div class="body-post">
    <div class="container-petianos col s12 l8 m12">
      <ul class="collapsible popout" data-collapsible="accordion">
        <li>
          <div class="collapsible-header">Computação</div>
          <div class="collapsible-body reset-padding">
              <ul class="collapsible" data-collapsible="accordion">
                <li>
                  <div class="collapsible-header"><i class="material-icons">person</i>Antonio jose</div>
                  <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
                <li>
                  <div class="collapsible-header"><i class="material-icons">person</i>Rodrigo Alves</div>
                  <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
                <li>
                  <div class="collapsible-header"><i class="material-icons">person</i>Pinto play ao vivo</div>
                  <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
              </ul>  
          </div>
        </li>
        <li>
          <div class="collapsible-header">Biologia</div>
          <div class="collapsible-body">
                <ul class="collection">
                  <li class="collection-item">Alvin Costa</li>
                  <li class="collection-item">Marcelo Caetano</li>
                  <li class="collection-item">Rodrigo Janour</li>
                  <li class="collection-item">Fransico Chico</li>
                </ul>
          </div>
        </li>
        <li>
          <div class="collapsible-header">Direito</div>
          <div class="collapsible-body">
              <div class="collection">
                <a href="#!" class="collection-item">Alvin Costa</a>
                <a href="#!" class="collection-item">Marcelo Caetano</a>
                <a href="#!" class="collection-item">Rodrigo Janour</a>
                <a href="#!" class="collection-item">Fransico Chico</a>
              </div>
          </div>
        </li>
        <li>
          <div class="collapsible-header">Biblioteconomia</div>
          <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
        </li>
        <li>
          <div class="collapsible-header">Conexões de Saberes</div>
          <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
        </li>
        <li>
          <div class="collapsible-header">Física</div>
          <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
        </li>
        <li>
          <div class="collapsible-header">Conexões</div>
          <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
        </li>
      </ul>  
    </div>

    <div class="col s12 l4 sidebar-petianos">
        <h5 class="nunito">Quantos Somos?</h5>
        <hr>
        <p class="">A UFMA possui atualmente 13 (treze) grupos PET junto ao MEC, num total de 156 alunos bolsistas, 13 tutores, além de petianos não bolsistas e voluntários.</p>
    </div>
      </div>
  </div>

  <br />

<?php get_footer(); ?>