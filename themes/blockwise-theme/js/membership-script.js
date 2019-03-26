/*
 *   Membership page tab menu for mobile
 */

jQuery(function($) {
  if ($(window).width() < 1000) {
    // mobile member form pop ups
    $('.tablinks li:first-child').addClass('tab-color');
    $('.option-wrapper ul:first-child').addClass('active');
    $('.tablinks li:first-child').click(function() {
      $('.tablinks li:first-child').addClass('tab-color');
      $('.tablinks li:nth-child(2n)').removeClass('tab-color');
      $('.tablinks li:nth-child(3n)').removeClass('tab-color');
      $('.option-wrapper ul:first-child').addClass('active');
      $('.option-wrapper ul:nth-child(2n)').removeClass('active');
      $('.option-wrapper ul:nth-child(3n)').removeClass('active');
    });
    $('.tablinks li:nth-child(2n)').click(function() {
      $('.tablinks li:nth-child(2n)').addClass('tab-color');
      $('.tablinks li:first-child').removeClass('tab-color');
      $('.tablinks li:nth-child(3n)').removeClass('tab-color');
      $('.option-wrapper ul:nth-child(2n)').addClass('active');
      $('.option-wrapper ul:first-child').removeClass('active');
      $('.option-wrapper ul:nth-child(3n)').removeClass('active');
    });
    $('.tablinks li:nth-child(3n)').click(function() {
      $('.tablinks li:nth-child(3n)').addClass('tab-color');
      $('.tablinks li:first-child').removeClass('tab-color');
      $('.tablinks li:nth-child(2n)').removeClass('tab-color');
      $('.option-wrapper ul:nth-child(3n)').addClass('active');
      $('.option-wrapper ul:first-child').removeClass('active');
      $('.option-wrapper ul:nth-child(2n)').removeClass('active');
    });
  } else {
    $('.option-wrapper ul:first-child').addClass('active');
    $('.option-wrapper ul:nth-child(2n)').addClass('active');
    $('.option-wrapper ul:nth-child(3n)').addClass('active');
  }

  // first member pop up mobile on click
  $('.sign-up-pop').click(function() {
    $('.wpcf7-form').addClass('mobile-popup');
  });
  // on submit click remove first popup, show thank you pop up
  $('.wpcf7-submit').click(function() {
    $('.wpcf7-form').removeClass('mobile-popup');
    $('.thank-you').addClass('thank-you-active');
  });
  // on got it button click close thank you popup
  $('.got-it').click(function() {
    $('.thank-you').removeClass('thank-you-active');
  });
  // X button to close mobile sign up form
  $('.close').click(function() {
    event.preventDefault();
    $('.wpcf7-form').removeClass('mobile-popup');
  });
});
