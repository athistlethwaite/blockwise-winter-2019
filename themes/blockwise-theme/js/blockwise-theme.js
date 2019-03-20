(function ($) {

  //Lesson Content 
  $('.lesson-title').on('click', function (event) {
    event.preventDefault();
    const itemClicked = $(this).data('load-post');

    $.ajax({
      method: 'GET',
      url: bw_vars.rest_url + 'wp/v2/lesson/' + itemClicked,
    }).done(function (data) {

      $('#load-content').html('');
      $('#load-content').append('<a href="" class="back-to-lesson">Back to Lesson</a><h2>' + data.title.rendered + '</h2>' + data.content.rendered + '<a href="#" class="blockwise-btn white-btn">Back to top</a><a href="#" class="back-to-lesson">Back to Lesson</a>');
      $('#load-content').fadeIn();

      $('.back-to-lesson').on('click', function () {
        $('#load-content').fadeOut();
      });

    }).fail(function () {
      alert('Something went wrong.');
    });
  });

  //Remove Chain Link 
  $('.lesson-type-wrapper').on('click', function (event) {
    $('#pseudo').remove();

  });

})(jQuery);