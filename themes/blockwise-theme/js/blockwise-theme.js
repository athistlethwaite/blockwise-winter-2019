(function ($) {


  $('.lesson-title').on('click', function (event) {
    event.preventDefault();
    var itemClicked = $(this).data('load-post');
    console.log(itemClicked);

    $.ajax({
      method: 'GET',
      url: bw_vars.rest_url + 'wp/v2/lesson/' + itemClicked,
    }).done(function (data) {

      $('#load-content').html('');
      $('#load-content').append(data.content.rendered);

    }).fail(function () {
      console.log('something went wrong');
    });
  });

})(jQuery);