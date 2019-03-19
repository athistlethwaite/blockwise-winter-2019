// (function ($) {
//     $('.small-angle').on('click', function (event) {
//       event.preventDefault();
//       var angleClicked = $(this).data('load-post');
//       console.log(angleClicked);
  
//       $.ajax({
//         method: 'GET',
//         url: bw_vars.rest_url + 'wp/v2/lesson/' + itemClicked,
//       }).done(function (data) {
  
//         $('#load-content').html('');
//         $('#load-content').append(data.content.rendered + '<a href="#" class="blockwise-btn white-btn">Back to top</a>');
  
//       }).fail(function () {
//         console.log('Something went wrong.');
//       });
//     });
  
//   })(jQuery);