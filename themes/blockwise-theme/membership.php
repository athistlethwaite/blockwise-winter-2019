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
        <section class="option-wrapper">

            <?php
        /*
         * CFS Loop membership_options Title
         */
            $fields = CFS()->get('membership_options');
            foreach ($fields as $field) : ?>

            <?php echo "<div class='option-title-list'><h4>" . $field['option_title'] . "</h4>"; ?>

            <ul>
                <?php 
                /*
             * CFS Loop list options
             */
                $options = $field['options_list_items'];
                foreach ($options as $option) {

                    echo "<li>" . $option['option'] . "</li>";
                } ?>

            </ul>
</div>
<?php endforeach; ?>
<?php endwhile; ?>

</section>
</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?> 