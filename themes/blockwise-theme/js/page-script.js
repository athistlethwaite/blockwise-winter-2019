(function($) {
  const popUpEvent = $('.event-single'),
    popUpForm = $('.pop-up');

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
})(jQuery);
