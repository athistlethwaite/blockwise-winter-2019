<?php
/**
 * The template for displaying events archive pages.
 *
 * @package Blockwise_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php if (have_posts()) : ?>

        <header class="page-header">
            <div class="header-content-wrapper">
                <?php
                the_archive_title('<h1 class="page-title">', '</h1>');
                the_archive_description('<div class="taxonomy-description">', '</div>');
                ?>
            </div>
        </header><!-- .page-header -->
        <section class="event-boxes container">
            <?php  /* Start the Loop */ ?>
            <?php while (have_posts()) : the_post(); ?>
            <article data-event=<?php the_ID(); ?> id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <div class="container">
                        <a href="" class="hide-content">See other events</a>
                        <a href="" class="show-content" data-event=<?php the_ID(); ?>>
                            <h2 class="entry-title"><?php the_title(); ?></h2>
                        </a>
                    </div>

                </header><!-- .entry-header -->
                <div class="entry-text-wrapper container">
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div><!-- .entry-content -->
                    <div class="entry-meta">
                        <p class="event-date"><?php echo date('F j, Y', strtotime(CFS()->get('event_date'))); ?></p>
                        <p class="event-location"><?php echo CFS()->get('event_location'); ?></p>
                    </div><!-- .entry-meta -->
                    <div class="event-rsvp">
                        <a data-event=<?php the_ID(); ?> class="yellow-btn blockwise-btn">rsvp</a>
                    </div>
                </div>
            </article><!-- #post-## -->
            <?php endwhile; ?>
        </section>


        <section class="event-single hidden">
        </section>
        <div class="rsvp-pop-up pop-up hidden">
            <?php echo do_shortcode('[contact-form-7 id="249" title="RSVP form"]'); ?>
        </div>
        <div class="pop-up-alert hidden">
            <p>We’ve saved your spot!<br>You should receive an email confirmation with your ticket.</p>
            <button>Got it!</button>
        </div>

        <?php else : ?>

        <?php get_template_part('template-parts/content', 'none'); ?>

        <?php endif; ?>

    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?> 