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
    <title><?php echo( get_bloginfo( 'title' ) ); ?></title>
    <link rel="shortcut icon" href="logotitle.png">

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

<body <?php body_class(); ?>>
<header>
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
            <div id="mainlogo">
                <a id="logo-container" href="#" class="brand-logo imagemlogo hidden-mobile">
                    <?php
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        if($custom_logo_id)
                        {
                            $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                            echo '<img src="'.$image[0].'">';
                        }
                        else
                        {
                            echo '<p class="blog-title">'.bloginfo('name').'</p>';
                        }					
                    ?>	        	
                </a>   
            </div>
            <!-- visualização Desktop -->
            <ul class="right hide-on-med-and-down menuheader nunito">
                <li><a href="#">HOME</a></li>
                <li><a href="#">ESTATUTO</a></li>
                <li><a href="#">GRUPOS PET</a></li>
                <li><a href="petianos_ativos.html">PETIANOS</a></li>
            </ul>  
            <!-- visualização Mobile -->
            <ul id="nav-mobile" class="side-nav nunito">
                <br>
                <li><a href="#">HOME</a></li>
                <li><a href="#">ESTATUTO</a></li>
                <li><a href="#">GRUPOS PET</a></li>
                <li><a href="#">PETIANOS</a></li>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons" style="color: black">menu</i></a>
        </div>
    </nav>
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
	</header>