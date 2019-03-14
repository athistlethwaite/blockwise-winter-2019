<?php
/**
 * The template for displaying the footer.
 *
 * @package Blockwise_Theme
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="site-info">
        <div class="copyright-social-icons">
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-square"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-twitter-square"></i></a>
            </div>
            <span class="copyright">&copy; 2019 Blockwise. All Rights Reserved.</span>
        </div>
        <div class="bottom-menu">
            <?php wp_nav_menu(array('theme_location' => 'secondary')); ?>
        </div>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html> 