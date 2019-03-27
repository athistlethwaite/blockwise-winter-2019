(function($) {
  const popUpEvent = $('.event-single'),
    popUpForm = $('.rsvp-pop-up');
  $('body.post-type-archive-event').ready(function() {
    const eventId = window.location.hash.substring(1);
    if (eventId) {
      const articleMarkUp = getArticle(eventId);
      popUpEvent.removeClass('hidden');
      popUpEvent.html(articleMarkUp);
    }
  });
  $('.event-boxes').on('click', '.show-content', function() {
    event.preventDefault();
    const articleMarkUp = getArticle(this.getAttribute('data-event'));
    popUpEvent.removeClass('hidden');
    popUpEvent.html(articleMarkUp);
  });
  popUpEvent.on('click', '.show-content', function() {
    event.preventDefault();
  });
  popUpEvent.on('click', '.hide-content', function() {
    event.preventDefault();
    popUpEvent.addClass('hidden');
  });
  popUpEvent.on('click', '.event-rsvp', function() {
    event.preventDefault();
    popUpEvent.addClass('hidden');
    $('#event-id').val(this.getAttribute('data-event'));
    popUpForm.removeClass('hidden');
  });

  $(window).on('wpcf7:mailsent', function() {
    popUpForm.addClass('hidden');
    $('.wpcf7-form').removeClass('mobile-popup');
    $('.pop-up-alert').removeClass('hidden');
  });

  function getArticle(articleNum) {
    const article = $('article[data-event="' + articleNum + '"]');
    const articleContent = article.html();
    const articleClass = article.attr('class');
    const articleId = article.attr('id');
    return (
      '<article id="' +
      articleId +
      '" class="' +
      articleClass +
      '">' +
      articleContent +
      '</article>'
    );
  }

  //Membership Page
  // first member pop up mobile on click
  $('.sign-up-pop').click(function() {
    $('.wpcf7-form').addClass('mobile-popup');
  });

  // on got it button click close thank you popup
  $('.pop-up-alert').on('click', 'button', function() {
    $('.pop-up-alert').addClass('hidden');
  });
  // X button to close mobile sign up form
  $('.close').click(function() {
    event.preventDefault();
    $('.wpcf7-form').removeClass('mobile-popup');
  });
})(jQuery);
