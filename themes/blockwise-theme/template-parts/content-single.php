<?php
/**
 * Template part for displaying single posts.
 *
 * @package Blockwise_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<p><?php the_content(); ?></p>
		<p>Date</p>
		<p><?php blockwise_posted_on(); ?></p>
		<p><?php echo CFS()->get('event_location'); ?></p>
	</div><!-- .entry-content -->
	<div class="visit-website">
		<a class="full-colored" href="">RSVP</a>
	</div>

	<footer class="entry-footer">
		<?php blockwise_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
