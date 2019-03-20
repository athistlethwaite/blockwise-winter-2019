/*
 *   Membership page tab menu for mobile
 */

jQuery(function($) {
  $('.option-wrapper ul:first-child').addClass('active');
  console.log($('.option-wrapper ul:first-child'));
  console.log($('.tablinks ul:first-child'));
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
});