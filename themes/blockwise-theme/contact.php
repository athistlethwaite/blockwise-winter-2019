<?php
/**
 * The template for displaying the contact us page.
 * 
 * Template Name: contact
 *
 * @package Blockwise_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php while (have_posts()) : the_post(); ?>

        <?php get_template_part('template-parts/content', 'page'); ?>

        <?php endwhile; ?>
        <div class="pop-up-alert hidden">
            <p>Thank you for your inquiry. We will get back to you within 48 hours.</p>
            <button>Got it!</button>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?> 