/*
 *   Membership page tab menu for mobile
 */

jQuery(function($) {
  if ($(window).width() < 600) {
    //wrap in new function call at beginning
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

  // form display none
  // on click give class active
  $('.sign-up-pop').click(function() {
    $('.wpcf7-form').addClass('mobile-popup');
    // show pop up
  });
  $('.membership').click(function() {
    $('.wpcf7-form').removeClass('mobile-popup');
    $('.thank-you').addClass('thank-you-active');
  });
  $('.thank-you').click(function() {
    $('.thank-you').removeClass('thank-you-active');
  });
  // on click of button in pop up
  // give display none to first pop up
  // give active class to second pop up

  //   let resizeEvent = 0;

  //   if ($(window).width() < 600) {
  //     console.log('mobile size');
  //   } else {
  //     console.log('>mobile size');
  //     resizeEvent = 1;
  //   }

  //   $(window).on('resize', function() {
  //     if (!resizeEvent) {
  //       if ($(window).width() < 600) {
  //         $('.option-wrapper ul:first-child').addClass('active');
  //         $('.tablinks li:first-child').click(function() {
  //           $('.option-wrapper ul:first-child').addClass('active');
  //           $('.option-wrapper ul:nth-child(2n)').removeClass('active');
  //           $('.option-wrapper ul:nth-child(3n)').removeClass('active');
  //         });
  //         $('.tablinks li:nth-child(2n)').click(function() {
  //           $('.option-wrapper ul:nth-child(2n)').addClass('active');
  //           $('.option-wrapper ul:first-child').removeClass('active');
  //           $('.option-wrapper ul:nth-child(3n)').removeClass('active');
  //         });
  //         $('.tablinks li:nth-child(3n)').click(function() {
  //           $('.option-wrapper ul:nth-child(3n)').addClass('active');
  //           $('.option-wrapper ul:first-child').removeClass('active');
  //           $('.option-wrapper ul:nth-child(2n)').removeClass('active');
  //         });
  //       } else {
  //         $('.option-wrapper ul:first-child').addClass('active');
  //         $('.option-wrapper ul:nth-child(2n)').addClass('active');
  //         $('.option-wrapper ul:nth-child(3n)').addClass('active');
  //       }
  //     }
  //   });
});
