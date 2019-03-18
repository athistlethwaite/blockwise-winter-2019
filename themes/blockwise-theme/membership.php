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
        /*
         * CFS Loop membership_options Title
         */
        $fields = CFS()->get('membership_options');
        foreach ($fields as $field) :
            echo "<h4>" . $field['option_title'] . "</h4>";
            // var_dump($field);
            ?>

        <ul>
            <?php 
            /*
                    * CFS Loop options title
                    */
            // $options = CFS()->get('options_list_items');
            $options = $field['options_list_items'];
            foreach ($options as $option) {
                // var_dump($option);
                echo "<li>" . $option['option'] . "</li>";
                // echo $option['options_list_items'];
                // echo $option['option '];
            } ?>

        </ul>
        <?php endforeach; ?>
        <?php endwhile; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?> 