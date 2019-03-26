<!-- This file is used to markup the administration form of the widget. -->
<div class="widget-content">
   <p>
      <label for="<?php echo $this->get_field_id('facebook'); ?>">Facebook URL:</label>
      <input class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" type="text" value="<?php echo $facebook; ?>">
   </p>

   <p> 
      <label for="<?php echo $this->get_field_id('instagram'); ?>">Instagram URL:</label>
      <input class="widefat" id="<?php echo $this->get_field_id('instagram'); ?>" name="<?php echo $this->get_field_name('instagram'); ?>" type="text" value="<?php echo $instagram; ?>">
   </p>

   <p>
      <label for="<?php echo $this->get_field_id('linkedin'); ?>">LinkedIn URL:</label>
      <input class="widefat" id="<?php echo $this->get_field_id('linkedin'); ?>" name="<?php echo $this->get_field_name('linkedin'); ?>" type="text" value="<?php echo $linkedin; ?>">
   </p>

   <p>
      <label for="<?php echo $this->get_field_id('twitter'); ?>">Twitter URL:</label>
      <input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" type="text" value="<?php echo $twitter; ?>">
   </p>

</div>