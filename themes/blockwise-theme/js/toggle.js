(function ($) {
  $(".lesson-type-title").on("click", function () {
    $(this).next().toggle();
  });

  $(".back-to-lesson").on("click", function () {
    event.preventDefault();
    $('#load-content').html('');
  });

  // For Modal Pop-Up on Mobile 
  // $('.lesson-title').on('click', function () {
  //   $('.load-content').show();
  // });
  // console.log('click');

  // $('.md-close').on('click', function () {
  //   $('.load-content').hide();
  // });

})(jQuery);