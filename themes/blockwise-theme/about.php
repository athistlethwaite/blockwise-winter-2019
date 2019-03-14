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
            <?php if (have_posts()) : ?>
                <header>
                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </header>
            <?php endif; ?>

            <?php  /* Start the Loop */ ?>
                <section>
				    <div class="corporate-member">	
					<p>Corporate Members</p>
                        <ul>
                            <?php $loop = new WP_Query(array('post_type' => 'partner')); ?>
                            <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                    <header class="entry-header">
                                        <?php if ( has_post_thumbnail() ) : ?>
                                            <?php the_post_thumbnail( 'large' ); ?>
                                        <?php endif; ?>
                                    </header><!-- .entry-header -->
                                    <div class="entry-content">
                                        <?php the_excerpt(); ?>
                                        <div class="member-website">
                                            <a class="border-colored" href="">Visit Website</a>
                                        </div>
                                        <div class="become-member">
                                            <a class="full-colored" href="<?php echo get_page_link(48); ?>">Become A Member</a>
                                        </div>
                                    </div><!-- .entry-content -->
                                </article><!-- #post-## -->
                            <?php endwhile; wp_reset_query(); ?> 
                        </ul>
                    </div>
                </section>

				<section>
				    <div class="corporate-mentor">	
					<p>Community Mentors</p>
                        <ul>
                            <?php $loop = new WP_Query(array('post_type' => 'mentor')); ?>
                            <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                    <header class="entry-header">
                                        <?php if ( has_post_thumbnail() ) : ?>
                                            <?php the_post_thumbnail( 'large' ); ?>
                                        <?php endif; ?>
                                    </header><!-- .entry-header -->
                                    <div class="entry-content">
                                        <?php the_excerpt(); ?>
                                        <div class="become-mentor">
                                            <a class="full-colored" href="<?php echo get_page_link(48); ?>">Become A Mentor</a>
                                        </div>
                                    </div><!-- .entry-content -->
                                </article><!-- #post-## -->
                            <?php endwhile; wp_reset_query(); ?> 
                        </ul>
                    </div>
                </section>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
