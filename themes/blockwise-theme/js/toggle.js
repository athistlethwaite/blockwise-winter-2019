(function ($) {

  $(document).ready(function () {
    $(".lesson-type-title").click(function () {
      $(this).next().toggle();
    });
  });

})(jQuery);