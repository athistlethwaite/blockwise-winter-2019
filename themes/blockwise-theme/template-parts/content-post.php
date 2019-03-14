<?php
/**
 * Template part for displaying page content in front-page.
 *
 * @package Blockwise_Theme
 */

?>


<?php if (is_sticky()) : ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php echo get_the_post_thumbnail(); ?>
    <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
    <p class="article-authors">By <?php echo CFS()->get('article_author'); ?></p>
    <a class="border-colored" href="<?php echo CFS()->get('article_url'); ?>">Read More...</a>
</article><!-- #post-## -->
<?php else : ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php echo get_the_post_thumbnail(); ?>
    <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
    <p class="article-authors">By <?php echo CFS()->get('article_author'); ?></p>
</article><!-- #post-## -->
<?php endif; ?> 