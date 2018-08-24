<?php
/**
 * Tema do Site Geral dos Grupos PET da UFMA
 * Arquivo que contém as configurações do HEADER dá pagina
 *
 * @package SiteGeralPETUFMA
 * @since SiteGeralPETUFMA 0.1
 *
 **/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo( get_bloginfo( 'title' ) ); ?></title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    <link href="https://fonts.googleapis.com/css?family=Nunito:700" rel="stylesheet">

    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>

    <?php wp_head(); ?>

</head>

<?php $URL = 'https://pet.ufma.br/' ?>

<body <?php body_class(); ?>>
<header>
    <div class="normalize">
      <div class="row">
        <div class="col s12 m12 l12 xl12 center">
          <div class="red darken-2">
            <span class="white-text"> Este Site está em BETA </span>
          </div>
        </div>
      </div>
    </div>
	<nav class="white" role="navigation">
    <div class="nav-wrapper container negrito">
      <a id="logo-container" href=<?php echo $URL; ?> class="brand-logo new-icon">
				<?php
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					if($custom_logo_id){
							$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
							echo '<img src="'.$image[0].'">';
					}
					else{
							echo '<p class="blog-title">'.bloginfo('name').'</p>';
					}
				?>
			</a>

			<!-- Desktop -->
			<ul class="right hide-on-med-and-down">
        <?php wp_nav_menu( array('theme_location' => 'primary')); ?>
      </ul>

		  <!-- Mobile -->
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
			<ul id="nav-mobile" class="side-nav">
				<?php wp_nav_menu( array('theme_location' => 'primary')); ?>
      </ul>
		</div>
  </nav>
</header>
