<?php
/**
 * The template for displaying lessons archive pages.
 *
 * @package Blockwise_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php if (have_posts()) : ?>

        <header class="page-header">
            <div class="header-content-wrapper">
                <h1 class="page-title">What is Blockchain?</h1>
                <?php
                the_archive_description('<h4 class="taxonomy-description">', '</h4>');
                ?>
            </div>
        </header><!-- .page-header -->

        <h4>Select a Lesson:</h4>

        <section class="lessons">
            <?php $lesson_types = get_terms('lesson_type'); ?>
            <?php $x=0;?>
            <?php foreach ($lesson_types as $lesson_type) : setup_postdata($lesson_type); ?>
            <?php $x++; ?>
            <div class="lesson-type-wrapper chain">
                <div class="lesson-type-title">
                    <h3 id="button<?php echo $x ?>"><?php echo $lesson_type->name ?></h3>
                    <div class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/learn-arrow.png" alt="Click to see Lesson"></div>
                </div>

                <ul>
                    <?php $lessons = get_posts(array(
                        'post_type' => 'lesson',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'lesson_type',
                                'field' => 'term_id',
                                'terms' => $lesson_type->term_id,
                            )
                        )
                    )); ?>
                    
                    <?php foreach ($lessons as $lesson) : setup_postdata($lesson); ?>

                    <?php $the_post_id = $lesson->ID; ?>

                    <li>
                        <a class="lesson-title" href='#' data-load-post="<?php echo $the_post_id; ?>"><?php echo $lesson->post_title; ?></a>
                    </li>

                    <?php endforeach;
                wp_reset_postdata(); ?>
                </ul>
            </div>
            <?php endforeach;
        wp_reset_postdata(); ?>

        </section>


        <?php else : ?>

        <?php get_template_part('template-parts/content', 'none'); ?>

        <?php endif; ?>

        <div id="load-content" class="load-content"></div>

    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?> 