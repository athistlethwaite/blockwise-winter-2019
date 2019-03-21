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

        <?php
 /*
 * CFS Loop membership_options Title
 */
        $fields = CFS()->get('membership_options'); ?>
        <section class="all-membership">
            <ul class="tablinks">
                <?php foreach ($fields as $field) : ?>

                <li>
                    <?php echo  $field['option_title'] ?>
                </li>

                <?php endforeach; ?>

            </ul>
            <div class="option-wrapper">
                <?php foreach ($fields as $field) : ?>
                <ul class="list-content">
                    <?php 
                    /*
            * CFS Loop list options
            */
                    $options = $field['options_list_items'];
                    foreach ($options as $option) :

                        echo "<li>" . $option['option'] . "</li>";
                        ?>
                    <?php endforeach; ?>
                </ul>
                <?php endforeach; ?>
            </div>
        </section>
        <?php the_content(); ?>
        <button class="sign-up-pop">Sign Up</button>
        <?php
        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html('Pages:'),
            'after'  => '</div>',
        ));
        ?>
    </div><!-- .entry-content -->
</article><!--  #post-## --> 