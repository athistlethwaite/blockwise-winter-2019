<?php
/**
 * Template part for displaying partner logos.
 *
 * @package Blockwise_Theme
 */

?>

<div class="corporate-partners-list">
    <?php $logos = get_posts(array('post_type' => 'partner', 'order_by' => 'title', 'order' => 'ASC')); ?>
    <?php foreach ($logos as $logo) : setup_postdata($logo); ?>
    <div class='corporate-partners-item'>
        <?php the_post_thumbnail($post = $logo->ID); ?>
        <?php if (!is_front_page()) : ?>
        <div class="partner-item-content">
            <?php the_excerpt(); ?>
            <a target="_blank" class="white-btn blockwise-btn" href=<?php echo CFS()->get('partner_website', $logo->ID); ?>>Visit Website</a>
        </div>
        <?php endif; ?>
    </div>
    <?php endforeach;
wp_reset_postdata(); ?>
</div> 