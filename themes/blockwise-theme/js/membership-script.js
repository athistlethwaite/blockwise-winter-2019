/*
 *   Membership page tab menu for mobile
 */

jQuery(function($) {
  //   $('.tabcontent').hide();
  $('.option-title-list').click(function() {
    $(this)
      .children()
      .next()
      .toggle();
  });
});
