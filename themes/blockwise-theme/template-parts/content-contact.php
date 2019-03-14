<?php
/**
 * Template part for displaying posts.
 *
 * @package Blockwise_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
        <form clas="container">
                    <input id="name" type="text" name="name">
                    <br>
                    <input id="company" type="text" name="compagy">
                    <br>
                    <input id="email" type="text" name="email">
                    <br>
                    <input id="phone-number" type="text" name="phone-number">
                    <br>
                    <textarea id="question" type="text">Enter a question</textarea>
                    <button id="submit" type="submit" name="submit" class="full-colored">Submit</button>
        </form>
	</div><!-- .entry-content -->
</article><!-- #post-## -->