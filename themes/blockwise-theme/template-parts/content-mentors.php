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
    <div class='mentors-item'>
        <?php the_post_thumbnail('thumbnail', $post = $logo->ID); ?>
        <?php if (!is_front_page()) : ?>
        <div class="mentor-item-content">
            <?php the_excerpt(); ?>
        </div>
        <?php endif; ?>
    </div>
    <?php endforeach;
wp_reset_postdata(); ?>
</div> 