<?php
/**
 * The template for posts page.
 *
 * @package Blockwise_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php if (have_posts()) : ?>

        <?php if (is_home() && !is_front_page()) : ?>
        <header class="page-header">
            <div class="header-content-wrapper">
                <h1 class="page-title"><?php single_post_title(); ?></h1>
                <p><?php echo CFS()->get('page_subtitle'); ?></p>
            </div>
        </header>
        <?php endif; ?>

        <?php  /* Start the Loop */ ?>
        <section class="archive-posts container">
            <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/content', 'post'); ?>
            <?php endwhile; ?>
        </section>
        <?php blockwise_numbered_pagination(); ?>


        <?php else : ?>

        <?php get_template_part('template-parts/content', 'none'); ?>

        <?php endif; ?>

    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?> 