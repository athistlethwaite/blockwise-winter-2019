(function ($) {
  $("#button1").on("click", function () {
    console.log($(this).parent().parent());
    $(this).parent().parent().find('ul').toggle();
    $("#button2").parent().parent().find('ul').fadeOut();
    $("#button3").parent().parent().find('ul').fadeOut();
  });

  $("#button2").on("click", function () {
    console.log($(this).parent().parent());
    $(this).parent().parent().find('ul').toggle();
    $("#button1").parent().parent().find('ul').fadeOut();
    $("#button3").parent().parent().find('ul').fadeOut();
  });

  $("#button3").on("click", function () {
    console.log($(this).parent().parent());
    $(this).parent().parent().find('ul').toggle();
    $("#button1").parent().parent().find('ul').fadeOut();
    $("#button2").parent().parent().find('ul').fadeOut();
  });

  $(".back-to-lesson").on("click", function () {
    event.preventDefault();
    $('#load-content').html("");
  });

})(jQuery);