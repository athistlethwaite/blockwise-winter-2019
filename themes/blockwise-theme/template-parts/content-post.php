<?php
/**
 * Template part for displaying page content in front-page.
 *
 * @package Blockwise_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if (is_sticky()){ ?>
		<?php echo get_the_post_thumbnail(); ?>
		<?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
		<p class="article-authors"><?php echo CFS()->get('article_author'); ?></p>
		<p class="article-details"><?php echo CFS()->get('article_details'); ?></p>
		<a class="border-colored" href="">Read More...</a>
	<?php } ?>
	<li>
		<?php echo get_the_post_thumbnail(); ?>
		<?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
		<p><?php echo CFS()->get('article_author'); ?></p>
	</li>
</article><!-- #post-## -->