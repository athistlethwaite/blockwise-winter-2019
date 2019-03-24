<?php
/**
 * The template for frontpage.
 *
 * @package Blockwise_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php while (have_posts()) : the_post(); ?>

        <header class="front-page-banner">
            <div class="header-content-wrapper container">
                <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                <p><?php echo CFS()->get('page_subtitle'); ?></p>
            </div>
            <?php get_template_part('template-parts/content', 'partners') ?>
        </header><!-- .entry-header -->

        <?php endwhile; ?>

        <div class='front-page-content container'>
            <h2>Learn, Explore, Connect</h2>
            <section class="upcoming-events">
                <h3>Upcoming Events</h3>
                <div class='front-page-events'>
                    <?php $loop = new WP_Query(array(
                        'post_type' => 'event', 'posts_per_page' => -1, 'orderby' => 'meta_value',
                        'order' => 'ASC',
                        'meta_key', 'event_date'
                    )); ?>
                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                    <?php get_template_part('template-parts/content', 'event'); ?>
                    <?php endwhile;
                wp_reset_query(); ?>
                </div>
            </section>
            <section class='market-trends'>
                <h3>Market Trends</h3>
                <div class='archive-posts'>
                    <?php $loop = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 4, 'order' => 'ASC')); ?>
                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                    <?php get_template_part('template-parts/content', 'post'); ?>
                    <?php endwhile;
                wp_reset_query(); ?>
                </div>
            </section>
        </div>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?> 