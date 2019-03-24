/*
 */
(function($) {
  buildCarosel($('.mentors-list'));
  buildCarosel($('.corporate-partners-list'));

  function buildCarosel(carosel) {
    carosel.addClass('carosel');
    carosel.find('>div').addClass('carosel-item');
    const item = $('.carosel-item');
    item
      .find('p')
      .parent('div')
      .addClass('carosel-content');
    item
      .find('img')
      .parent('div')
      .addClass('carosel-thumbnail');

    const viewPort =
      '<div class="carosel-viewport" style="width:' +
      item.width() * 1.1 +
      'px">' +
      carosel.html() +
      '<a style="left:1rem" class="carosel-nav left">&#10094;</a><a style="right:1rem" class="carosel-nav right">&#10095;</a></div>';
    carosel.html(viewPort);
  }

  $('.carosel').on('click', '.carosel-nav', function() {
    const viewPort = $(this).parent();
    const direction = $(this).attr('class');
    if (direction.includes('right')) {
      caroselSlideRight(viewPort);
    } else if (direction.includes('left')) {
      caroselSlideLeft(viewPort);
    }
  });

  function caroselSlideRight(viewPort) {
    const item = viewPort.children('.carosel-item:first-child');
    item.remove();
    viewPort.append(item);
  }
  function caroselSlideLeft(viewPort) {
    const item = viewPort.children('.carosel-item:last-child');
    item.remove();
    viewPort.prepend(item);
  }
})(jQuery);
