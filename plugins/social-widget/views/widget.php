<!-- This file is used to markup the public-facing widget. -->
<?php if(strlen( trim( $facebook ) ) > 0) : ?>
<p>
   <span class="social-icons"><a href="<?php echo $facebook; ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook-icon.png" alt="Facebook Icon"></a></span> 
</p>
<?php endif; ?>

<?php if(strlen( trim( $instagram) ) > 0) : ?>
<p>
   <span class="social-icons"><a href="<?php echo $instagram; ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta-icon.png" alt="Instagram Icon"></a></span> 
</p>
<?php endif; ?>

<?php if(strlen( trim( $linkedin) ) > 0) : ?>
<p>
   <span class="social-icons"><a href="<?php echo $linkedin; ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin-icon.png" alt="LinkedIn Icon"></a></span> 
</p>
<?php endif; ?>

<?php if(strlen( trim( $twitter) ) > 0) : ?>
<p>
   <span class="social-icons"><a href="<?php echo $twitter; ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter-icon.png" alt="Twitter Icon"></a></span> 
</p>
<?php endif; ?>
