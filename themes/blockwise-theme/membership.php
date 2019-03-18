<?php
/**
 * The template for displaying membership page.
 * 
 * Template Name: membership
 *
 * @package Blockwise_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php while (have_posts()) : the_post(); ?>

        <?php get_template_part('template-parts/content', 'page'); ?>

        <?php
        $fields = CFS()->get('membership_options');
        foreach ($fields as $field) {

            echo $field['option_title'];
        } ?>
        <ul>
            <li>
                <?php $options = CFS()->get('membership_options');
                foreach ($options as $option) {

                    echo var_dump($option) . '<br>';
                    echo '<h2> -------------- </h2>';
                } ?>
            </li>
        </ul>

        <?php endwhile; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php  get_footer(); ?>