(function ($) {

  //Toggle function for lesson types
  $("#button1").on("click", function () {
    $(this).parent().parent().find('ul').toggle();
    $("#button2").parent().parent().find('ul').fadeOut();
    $("#button3").parent().parent().find('ul').fadeOut();
  });

  $("#button2").on("click", function () {
    $(this).parent().parent().find('ul').toggle();
    $("#button1").parent().parent().find('ul').fadeOut();
    $("#button3").parent().parent().find('ul').fadeOut();
  });

  $("#button3").on("click", function () {
    $(this).parent().parent().find('ul').toggle();
    $("#button1").parent().parent().find('ul').fadeOut();
    $("#button2").parent().parent().find('ul').fadeOut();
  });

  //Load content on page
  $(".back-to-lesson").on("click", function () {
    event.preventDefault();
    $('#load-content').html("");
  });

})(jQuery);