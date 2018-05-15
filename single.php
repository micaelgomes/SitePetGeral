<?php
/**
 * Exibição padrão para Posts genéricas
 *
 * @package SiteGeralPETUFMA
 * @since SiteGeralPETUFMA 0.1
 *
 */
?>

<?php 
    get_header(); 
    $post = get_post();
?>

<div class="title-post nunito">
    <div class="container">
        <h3><?php echo $post->post_title; ?></h3>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="body-post flow-text"> 
            <p class="light horarionews"><?php echo $post->post_date .' | '. $post->post_author; ?></p>
            <p> <?php echo $post->post_content; ?> </p>
        </div>
    </div>  
</div>

<?php
    if ( comments_open() || get_comments_number() ) :
        comments_template();
    endif;
?>

<?php get_footer(); ?>

