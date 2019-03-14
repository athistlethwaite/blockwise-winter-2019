<?php
/**
 * The template for displaying the about page.
 * 
 * Template Name: academy
 *
 * @package Blockwise_Theme
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>
			<div class="visit-website">
					<a class="story" href="">Visit Website</a>
			</div>
		</main>
	</div>
<?php get_footer(); ?>
