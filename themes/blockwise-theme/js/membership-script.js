/*
 *   Membership page tab menu for mobile
 */

jQuery(function($) {
  $(window).resize(function() {
    if ($(window).width() < 600) {
      $('.option-wrapper ul:first-child').addClass('active');
      $('.tablinks li:first-child').click(function() {
        $('.option-wrapper ul:first-child').addClass('active');
        $('.option-wrapper ul:nth-child(2n)').removeClass('active');
        $('.option-wrapper ul:nth-child(3n)').removeClass('active');
      });
      $('.tablinks li:nth-child(2n)').click(function() {
        $('.option-wrapper ul:nth-child(2n)').addClass('active');
        $('.option-wrapper ul:first-child').removeClass('active');
        $('.option-wrapper ul:nth-child(3n)').removeClass('active');
      });
      $('.tablinks li:nth-child(3n)').click(function() {
        $('.option-wrapper ul:nth-child(3n)').addClass('active');
        $('.option-wrapper ul:first-child').removeClass('active');
        $('.option-wrapper ul:nth-child(2n)').removeClass('active');
      });
    } else {
      $('.option-wrapper ul:first-child').addClass('active');
      $('.option-wrapper ul:nth-child(2n)').addClass('active');
      $('.option-wrapper ul:nth-child(3n)').addClass('active');
    }
  });
});
