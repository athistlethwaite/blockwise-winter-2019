(function($) {
  //Lesson Content
  $('.lesson-title').on('click', function(event) {
    event.preventDefault();
    const itemClicked = $(this).data('load-post');

    $.ajax({
      method: 'GET',
      url: bw_vars.rest_url + 'wp/v2/lesson/' + itemClicked
    })
      .done(function(data) {
        $('#load-content').html('');

        $('#load-content').append(
          '<div class="back-to-lesson-top"><a href="" class="back-to-lesson">See all lessons</a></div>' +
            '<h1>' +
            data.title.rendered +
            '</h1>' +
            data.content.rendered +
            '<div class="back-to-lesson-bottom"><a href="#" class="blockwise-btn white-btn">Back to top</a><a href="#" class="back-to-lesson">See all lessons</a></div>'
        );

        $('#load-content').fadeIn();

        $('.back-to-lesson').on('click', function() {
          $('#load-content').fadeOut();
        });
      })
      .fail(function() {
        alert('Something went wrong.');
      });
  });
})(jQuery);
