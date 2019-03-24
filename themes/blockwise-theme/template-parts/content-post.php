<?php
/**
 * Template part for displaying posts.
 *
 * @package Blockwise_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('large'); ?>
        <?php endif; ?>
        <div class="entry-text-wrapper">
            <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
            <?php if ('post' === get_post_type()) : ?>
            <div class="entry-meta">
                <p>by <?php echo CFS()->get('article_author'); ?></p>
            </div><!-- .entry-meta -->
            <?php endif; ?>
        </div>
    </header><!-- .entry-header -->

    <?php if (blockwise_is_latest_post(get_the_ID())) : ?>
    <div class="entry-content">
        <?php the_excerpt(); ?>
        <a class="white-btn blockwise-btn" target='_blank' href="<?php echo CFS()->get('article_url'); ?>">Read More...</a>
    </div><!-- .entry-content -->
    <?php endif; ?>

</article><!-- #post-## --> 