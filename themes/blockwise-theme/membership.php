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

        <?php endwhile; ?>

        <?php $fields = CFS()->get('membership_options'); ?>
        <section class="all-membership container">
            <ul class="tablinks container">
                <?php foreach ($fields as $field) : ?>

                <li>
                    <?php echo  $field['option_title'] ?>
                </li>

                <?php endforeach; ?>

            </ul>
            <div class="option-wrapper container">
                <?php foreach ($fields as $field) : ?>
                <ul class="list-content">
                    <?php 
                    /*
            * CFS Loop list options
            */
                    $options = $field['options_list_items'];
                    foreach ($options as $option) :

                        echo "<li>" . $option['option'] . "</li>";
                        ?>
                    <?php endforeach; ?>
                </ul>
                <?php endforeach; ?>
            </div>
        </section>
        <section class="form-content container">
            <h2>Take the first step in joining our community</h2>
            <?php echo do_shortcode('[contact-form-7 id="9" title="Membership Form"]'); ?>
            <button class="sign-up-pop">Sign Up</button>
            <div class="thank-you">
                <p>Thank you for your interest in becoming a member. We will reach out shortly to discuss next steps.</p>
                <button class='got-it'>Got it!</button>
            </div>
        </section>



    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?> 