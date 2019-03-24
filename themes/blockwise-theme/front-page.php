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

        <?php get_template_part('template-parts/content', 'page'); ?>

        <?php endwhile; ?>
        <?php get_template_part('template-parts/content', 'partners') ?>
        <div class='front-page-content container'>
            <h2>Learn, Explore, Connect</h2>
            <section class="upcoming-events">
                <h3>Upcoming Events</h3>
                <div class='front-page-events'>
                    <?php $loop = new WP_Query(array('post_type' => 'event', 'posts_per_page' => -1)); ?>
                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                    <?php get_template_part('template-parts/content', 'event'); ?>
                    <?php endwhile;
                wp_reset_query(); ?>
                </div>
            </section>
            <section class='market-trends'>
                <h3>Market Trends</h3>
                <div class='front-page-articles'>
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