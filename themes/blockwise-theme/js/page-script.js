/*
 */
(function($) {
  buildCarosel($('.mentors-list'));
  buildCarosel($('.corporate-partners-list'));

  function buildCarosel(carosel) {
    carosel.addClass('carosel');
    carosel.find('>div').addClass('carosel-item');
    const item = $('.carosel-item');
    item.find('>div').addClass('carosel-content');
    item.find('>img').addClass('carosel-thumbnail');
    item.find('>a').addClass('carosel-link');
    const viewPort =
      '<div class="carosel-viewport" style="width:' +
      item.width() * 1.1 +
      'px">' +
      carosel.html() +
      '<a style="left:1rem" class="carosel-nav left">&#10094;</a><a style="right:1rem" class="carosel-nav right">&#10095;</a></div>';
    carosel.html(viewPort);
  }
})(jQuery);
