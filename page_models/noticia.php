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
				<?php 
				// the query
				$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
				
				<?php if ( $wpb_all_query->have_posts() ) : ?>
				
				<ul>
				
				<!-- the loop -->
				<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php endwhile; ?>
				<!-- end of the loop -->
				
				</ul>
				
				<?php wp_reset_postdata(); ?>
				
				<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
			<div class="parallax bannerimg-side"></div>
	</div>
</section>
<section>
    <div class="background-section">

    </div>
</section>
  
<?php get_footer(); ?>