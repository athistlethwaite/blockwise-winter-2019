<?php
/**
 * The main template file.
 *
 * @package Blockwise_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php if (have_posts()) : ?>

        <?php if (is_home() && !is_front_page()) : ?>
        <header>
            <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
        </header>
        <?php endif; ?>

        <?php  /* Start the Loop */ ?>
        <?php while (have_posts()) : the_post(); ?>

        <header class="entry-header">
            <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
            <div class="entry-content">
                <?php the_excerpt(); ?>
            </div><!-- .entry-content -->
            <div class="partner-logos">
                <ul>
                    <?php $loop = new WP_Query(array('post_type' => 'partner')); ?>
                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                    <li>
                        <?php echo get_the_post_thumbnail(); ?>
                    </li>
                    <?php endwhile;
				wp_reset_query(); ?>
                </ul>
            </div>
        </header>
        <!--.entry-header-->

        <section>
            <h2>Learn, Explore, Connect</h2>
            <div class="upcoming-events">
                <h3>Upcoming Events</h3>
                <ul>
                    <?php $loop = new WP_Query(array('post_type' => 'event', 'posts_per_page' => 4)); ?>
                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                    <li>
                        <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
                        <p><?php echo CFS()->get('event_date'); ?></p>
                    </li>
                    <?php endwhile;
				wp_reset_query(); ?>
                </ul>
            </div>
            <div class="market-trends">
                <h3>Market Trends</h3>
                <ul>
                    <?php $loop = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 4)); ?>
                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                    <li>
                        <?php echo get_the_post_thumbnail(); ?>
                        <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
                    </li>
                    <?php endwhile;
				wp_reset_query(); ?>
                </ul>
            </div>

        </section>

        <?php endwhile; ?>
        <?php else : ?>

        <?php get_template_part('template-parts/content', 'none'); ?>

        <?php endif; ?>

    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?> 