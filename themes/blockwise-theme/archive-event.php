<?php
/**
 * The template for displaying archive pages.
 *
 * @package Blockwise_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php the_archive_title( '<h1 class="page-title">', '</h1>' );?>
				<h3 class="event-subtitle">Connecting BC’s Blockchain community one event at a time.</h3>
			</header><!-- .page-header -->
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
						<p class="event-date"><?php echo CFS()->get('event_date'); ?></p>
						<p class="event-location"><?php echo CFS()->get('event_location'); ?></p>
						<p class="event-host"><?php echo CFS()->get('event_host'); ?></p>
					</header>
				</article>
			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content'); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
