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
        <header>
            <h1 class="page-title"><?php single_post_title(); ?></h1>
            <p>The Description</p>
        </header>
        <?php endif; ?>

        <?php  /* Start the Loop */ ?>
        <?php while (have_posts()) : the_post(); ?>

        <?php get_template_part('template-parts/content', 'post'); ?>

        <?php endwhile; ?>
        <?php blockwise_numbered_pagination(); ?>



        <?php else : ?>

        <?php get_template_part('template-parts/content', 'none'); ?>

        <?php endif; ?>

    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?> 