<?php
/**
 * The template for displaying archive pages.
 *
 * @package Blockwise_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<section>
           <div class="lesson-type">
               <?php $lesson_types = get_terms('lesson_type'); ?>
               <?php foreach ($lesson_types as $lesson_type) : setup_postdata($lesson_type); ?>
               <h3><?php echo $lesson_type->name ?></h3>
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
                       <li><a href=<?php echo get_permalink($lesson->ID); ?>><?php echo $lesson->post_title; ?></a></li>
                   <?php endforeach;
                wp_reset_postdata(); ?>
               </ul>

               <?php endforeach;
            wp_reset_postdata(); ?>
           </div>
       </section>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
