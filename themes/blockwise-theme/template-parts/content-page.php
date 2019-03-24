<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package Blockwise_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <div class="header-content-wrapper">
            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
            <p><?php echo CFS()->get('page_subtitle'); ?></p>
        </div>
    </header><!-- .entry-header -->

    <div class="entry-content container">
        <?php the_content(); ?>
        <?php
        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html('Pages:'),
            'after'  => '</div>',
        ));
        ?>
    </div><!-- .entry-content -->
</article><!-- #post-## --> 