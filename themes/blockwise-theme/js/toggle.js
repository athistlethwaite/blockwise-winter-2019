(function($) {
  //Toggle function for lesson types
  $('#button1').on('click', function() {
    $(this)
      .parent()
      .parent()
      .find('ul')
      .toggle();
    $('#button2')
      .parent()
      .parent()
      .find('ul')
      .fadeOut();
    $('#button3')
      .parent()
      .parent()
      .find('ul')
      .fadeOut();
  });

  $('#button2').on('click', function() {
    $(this)
      .parent()
      .parent()
      .find('ul')
      .toggle();
    $('#button1')
      .parent()
      .parent()
      .find('ul')
      .fadeOut();
    $('#button3')
      .parent()
      .parent()
      .find('ul')
      .fadeOut();
  });

  $('#button3').on('click', function() {
    $(this)
      .parent()
      .parent()
      .find('ul')
      .toggle();
    $('#button1')
      .parent()
      .parent()
      .find('ul')
      .fadeOut();
    $('#button2')
      .parent()
      .parent()
      .find('ul')
      .fadeOut();
  });

  //Load content on page
  $('.back-to-lesson').on('click', function() {
    event.preventDefault();
    $('#load-content').html('');
  });
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
})(jQuery);
