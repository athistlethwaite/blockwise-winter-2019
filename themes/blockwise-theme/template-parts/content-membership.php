<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package Blockwise_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <div class="header-content-wrapper">
            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
            <P>The Description</P>
        </div>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <section class="option-wrapper">
            <?php
    /*
     * CFS Loop membership_options Title
     */
            $fields = CFS()->get('membership_options');
            foreach ($fields as $field) : ?>

            <?php echo "<div class='option-title-list'><h4>" . $field['option_title'] . "</h4>"; ?>

            <ul>
                <?php 
                /*
         * CFS Loop list options
         */
                $options = $field['options_list_items'];
                foreach ($options as $option) {

                    echo "<li>" . $option['option'] . "</li>";
                } ?>

            </ul>
    </div>
    <?php endforeach; ?>
        <?php the_content(); ?>
    <?php
    wp_link_pages(array(
        'before' => '<div class="page-links">' . esc_html('Pages:'),
        'after'  => '</div>',
    ));
    ?>
    </div><!-- .entry-content -->
</article><!-- #post-## --> 