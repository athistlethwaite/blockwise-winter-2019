(function($) {
  $('.event a').on('click', function() {
    event.preventDefault();
    const eventNum = this.getAttribute('data-event');
    $('.event-pop-up').addClass('hidden');
    $('.event-pop-up[data-event=' + eventNum + ']').removeClass('hidden');
  });
  $('.go-back').on('click', function() {
    event.preventDefault();
    $('.event-pop-up').addClass('hidden');
  });
  $('.rsvp').on('click', function() {
    event.preventDefault();
    $('.pop-up').removeClass('hidden');
  });
})(jQuery);
