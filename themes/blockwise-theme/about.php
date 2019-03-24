<?php
/**
 * The template for displaying the about page.
 * 
 * Template Name: about
 *
 * @package Blockwise_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php while (have_posts()) : the_post(); ?>

        <?php get_template_part('template-parts/content', 'page'); ?>

        <?php endwhile; ?>

        <section class='about-partners container'>
            <h2>Our Partners</h2>
            <div class='about-corporate-members'>
                <h3>Corporate Members</h3>
                <?php get_template_part('template-parts/content', 'partners') ?>
                <a class="yellow-btn blockwise-btn" href=<?php echo get_permalink(get_page_by_title('Membership')); ?>>Become A Member</a>
            </div>
            <div class='about-mentors'>
                <h3>Community Mentors</h3>
                <?php get_template_part('template-parts/content', 'mentors') ?>
                <a class="yellow-btn blockwise-btn" href=<?php echo get_permalink(get_page_by_title('Membership')); ?>>Become A Mentor</a>
            </div>
        </section>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?> 