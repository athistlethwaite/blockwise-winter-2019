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
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/MembershipDropArrow.png" alt="Click for Event Info">
        </a>
        <div class="entry-meta">
            <p class="event-date"><?php echo CFS()->get('event_date'); ?></p>
            <p class="event-location"><?php echo CFS()->get('event_location'); ?></p>
        </div><!-- .entry-meta -->
    </header><!-- .entry-header -->
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/LearnChainLink.png" alt="Blockwise chains">
</article><!-- #post-## --> 