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
        <div class="all-articles">
            <?php  /* Start the Loop */ ?>
            <?php $eventNumber = 0; ?>
            <?php while (have_posts()) : the_post(); ?>
            <?php $eventNumber++; ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <div class="content-event">
                        <a href="#" data-event=<?php echo $eventNumber; ?>>
                            <h2 class="entry-title"><?php the_title(); ?></h2>
                        </a>
                        <div class="entry-meta">
                            <p class="event-date"><?php echo CFS()->get('event_date'); ?></p>
                            <p class="event-location"><?php echo CFS()->get('event_location'); ?></p>
                        </div><!-- .entry-meta -->
                    </div>
                    <a href="#" data-event=<?php echo $eventNumber; ?>>
                        <img class="small-angle" src="<?php echo get_template_directory_uri(); ?>/assets/images/LearnArrow.png" alt="Click for Event Info">
                    </a>
                </header><!-- .entry-header -->
                <?php if ($eventNumber % 3 !== 0) : ?>
                <img class="small-chain" src="<?php echo get_template_directory_uri(); ?>/assets/images/LearnChainLink.png" alt="Blockwise chains">
                <?php endif; ?>
            </article><!-- #post-## -->
            <article class="event-pop-up hidden" data-event=<?php echo $eventNumber; ?> id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <a href="" class="go-back"><img class="small-angle" src="<?php echo get_template_directory_uri(); ?>/assets/images/LearnArrow.png" alt="Click for Event Info">See all events</a>
                <header class="entry-header">
                    <h2 class="entry-title"><?php the_title(); ?></h2>
                    <div class="entry-meta">
                        <p class="event-date"><?php echo CFS()->get('event_date'); ?></p>
                        <p class="event-location"><?php echo CFS()->get('event_location'); ?></p>
                    </div><!-- .entry-meta -->
                </header><!-- .entry-header -->

                <div class="entry-content">
                    <?php the_content(); ?>
                    <button class="RSVP" data-event=<?php echo $eventNumber; ?> class="white-btn blockwise-btn">RSVP</button>
                </div><!-- .entry-content -->

            </article><!-- #post-## -->



            <?php endwhile; ?>
        </div>
        <?php blockwise_numbered_pagination(); ?>

        <div class="pop-up hidden">
            <?php echo do_shortcode('[contact-form-7 id="191" title="contact-us"]'); ?>
        </div>

        <?php else : ?>

        <?php get_template_part('template-parts/content', 'none'); ?>

        <?php endif; ?>

    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?> 