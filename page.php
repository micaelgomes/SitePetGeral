<?php
/**
 * Página modelo padrão para publicações genéricas
 *
 * @package SiteGeralPETUFMA
 * @since SiteGeralPETUFMA 0.1
 *
 */
?>

<?php get_header(); ?>
	<?php $pagename = get_query_var('pagename'); ?> 
	
	<div class="title-post nunito">
        <div class="container">
        	<h3><?php the_title(); ?></h3>
        </div>
    </div>   

    <div class = "row">
        <div class = "col s12 m9 l9 xl9">
            <p class = "flow-text body-post">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque feugiat nisi eget ante sagittis, eu eleifend dolor scelerisque. Suspendisse id sollicitudin metus. Donec dolor metus, convallis sit amet sodales a, vulputate vel eros. Cras nisl nulla, rutrum in lectus at, condimentum porta ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse velit neque, aliquet tincidunt quam non, tincidunt dignissim lacus. Duis in ipsum non nisl euismod laoreet. Sed posuere volutpat scelerisque. Etiam at aliquet enim. Quisque dolor sapien, blandit vel faucibus vitae, feugiat sit amet erat. Sed eget metus tristique libero lobortis feugiat. Vivamus elementum vestibulum leo eget rutrum. Pellentesque semper lorem auctor lacinia accumsan. Sed aliquam diam vitae purus mattis placerat. Aliquam sollicitudin commodo neque. Integer pellentesque risus placerat fringilla lacinia. Pellentesque eget turpis bibendum, pellentesque tellus quis, aliquam tortor. Praesent tempor ex est, nec ullamcorper magna iaculis nec. Duis convallis sodales risus, sit amet sodales augue semper et. Nullam euismod accumsan ligula, non viverra metus vestibulum efficitur. Integer vulputate dignissim ex luctus ullamcorper. Ut vestibulum sagittis odio, non posuere nisi venenatis vitae. Pellentesque sit amet viverra erat. Praesent cursus nisl ipsum, eget dictum tortor ullamcorper a. Nullam orci augue, tincidunt rutrum ornare pretium, eleifend vitae mi. Cras cursus semper vestibulum. Curabitur nec elit quis purus ultrices bibendum. Quisque suscipit elit lectus, ut maximus nunc commodo ut. Vestibulum id aliquet arcu. Aenean malesuada vulputate magna quis tempor. Cras lobortis consectetur erat eu gravida. In pretium nec orci sit amet semper. Nullam ut placerat nisi, ut bibendum nisl. Sed id tellus a nulla condimentum sodales. Nulla sit amet ante vel est lacinia semper non eget tellus. Donec tempor ante eu sapien efficitur pharetra. Duis sem nibh, posuere a eros quis, cursus sagittis velit. In aliquet pharetra ipsum. Suspendisse id nulla risus. Donec congue eros vel ante luctus, non accumsan dui ultrices. Curabitur erat est, placerat sed lacus vitae, elementum aliquet enim. Praesent posuere turpis eget sagittis vulputate. Vivamus suscipit vestibulum erat, non porta ante finibus volutpat. Donec semper tortor et lacus ullamcorper, nec ultrices libero cursus. Ut dapibus placerat mollis. Aliquam sed lorem vel metus mattis finibus. Maecenas nunc sapien, vulputate quis massa et, pharetra sagittis ex. Curabitur at dolor eu eros porttitor luctus. Vestibulum elit eros, dignissim non mattis eget, tempus eget turpis. Nullam aliquam finibus convallis. Aliquam lobortis mattis ipsum, ut ullamcorper metus pellentesque vel. Curabitur sem nisl, tempor maximus vestibulum pulvinar, gravida gravida justo.     
            </p>
        </div>
        <div class = "col s12 m3 l3 xl3">
            <ul class= "body-post flow-text">
                <li>teste</li>
                <li>teste</li>
                <li>teste</li>
                <li>teste</li>
                <li>teste</li>
            </ul>
        </div>
    </div>

<?php get_footer(); ?>