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

        <?php if (is_home() && !is_front_page()) : ?>
        <header>
            <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
        </header>
        <?php endif; ?>

        <?php  /* Start the Loop */ ?>
        <?php while (have_posts()) : the_post(); ?>

        <header class="entry-header">
            <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
            <div class="entry-content">
                <?php the_content(); ?>
                <?php
                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
                        'after'  => '</div>',
                    ) );
                ?>
            </div>
        </header>
        <!--.entry-header-->

				<?php endwhile; ?>

        <section>
					<h2>Our Partners</h2>
					<div class="corporate-member">	
						<p>Corporate Members</p>
                <ul>
                    <?php $loop = new WP_Query(array('post_type' => 'partner')); ?>
                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
											<?php get_template_part('template-parts/content'); ?>
                    <?php endwhile; wp_reset_query(); ?>
                </ul>
						<div class="become-member">
							<a class="full-colored" href="">Become A Member</a>
						</div>
          </div>
				</section>
				
				<section>
						<div class="corporate-mentor">	
						<p>Community Mentors</p>
                <ul>
                    <?php $loop = new WP_Query(array('post_type' => 'mentor')); ?>
                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
											<?php get_template_part('template-parts/content'); ?>
                    <?php endwhile; wp_reset_query(); ?> 
                </ul>
            </div>
						<div class="become-mentor">
							<a class="full-colored" href="">Become A Mentor</a>
						</div>
				</section>

        <?php else : ?>

        <?php get_template_part('template-parts/content', 'none'); ?>

        <?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
