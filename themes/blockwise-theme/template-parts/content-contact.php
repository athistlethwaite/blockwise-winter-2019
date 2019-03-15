<?php
/**
 * Template part for displaying posts.
 *
 * @package Blockwise_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->
        <div class="entry-content">
                <?php the_content(); ?>
                <?php
		        wp_link_pages(array(
			'before' => '<div class="page-links">' . esc_html('Pages:'),
			'after'  => '</div>',
			));
		?>
</article><!-- #post-## -->