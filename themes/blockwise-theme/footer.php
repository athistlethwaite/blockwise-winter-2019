<?php
/**
 * The template for displaying the footer.
 *
 * @package Blockwise_Theme
 */
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container">
        <div class="site-info">
            <div class="social-icons">
                <?php dynamic_sidebar( 'sidebar-2' ); ?>
            </div>
            <div class="footer-menu">
                <?php wp_nav_menu(array('theme_location' => 'secondary')); ?>
            </div>
        </div><!-- .site-info -->
        <p class="copyright">&copy; 2019 Blockwise. All Rights Reserved.</p>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html> 