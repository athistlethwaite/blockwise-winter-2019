<?php
/**
 * Template part for displaying partner logos.
 *
 * @package Blockwise_Theme
 */

?>

<div class="mentors-list">
    <?php $logos = get_posts(array('post_type' => 'mentor')); ?>
    <?php foreach ($logos as $logo) : setup_postdata($logo); ?>
    <div>
        <div> <?php the_post_thumbnail('thumbnail'); ?></div>

        <?php if (!is_front_page()) : ?>
        <div>
            <div>
                <h3><?php the_title(); ?></h3>
                <?php the_excerpt(); ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
    <?php endforeach;
wp_reset_postdata(); ?>
</div> 