<?php
/**
 * Template part for displaying event posts.
 *
 * @package Blockwise_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <a href="#">
            <h2 class="entry-title"><?php the_title(); ?></h2>
        </a>
        <div class="entry-meta">
            <p class="event-date"><?php echo date('F j, Y', strtotime(CFS()->get('event_date'))); ?></p>
            <p class="event-location"><?php echo CFS()->get('event_location'); ?></p>
        </div><!-- .entry-meta -->
    </header><!-- .entry-header -->
</article><!-- #post-## --> 