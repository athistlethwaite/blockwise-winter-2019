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
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook-icon.png" alt="Facebook Icon"></a>
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta-icon.png" alt="Instagram Icon"></a>
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin-icon.png" alt="LinkedIn Icon"></a>
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter-icon.png" alt="Twitter Icon"></a>
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