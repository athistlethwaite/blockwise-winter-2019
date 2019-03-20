(function ($) {
  $(".lesson-type-title").on("click", function () {
    $(this).next().toggle();
  });

  $(".back-to-lesson").on("click", function () {
    event.preventDefault();
    $('#load-content').html('');
  });

})(jQuery);