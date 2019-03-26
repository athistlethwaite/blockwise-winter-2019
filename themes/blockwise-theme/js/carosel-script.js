/*
 */
(function($) {
  buildCarosel($('.mentors-list'));
  buildCarosel($('.corporate-partners-list'));

  function buildCarosel(carosel) {
    carosel.addClass('carosel');
    carosel.find('>div').addClass('carosel-item');
    const item = $('.carosel-item');
    console.log(item.width());
    item
      .find('p')
      .parent('div')
      .addClass('carosel-content');
    item
      .find('img')
      .parent('div')
      .addClass('carosel-thumbnail');
    const viewPort =
      '<a style="left:30px" class="carosel-nav left">&#10094;</a><a style="right:30px" class="carosel-nav right">&#10095;</a><div class="carosel-viewport" style="width:' +
      item.width() * carosel.find('>.carosel-item').length * 1.2 +
      'px">' +
      carosel.html() +
      '</div>';
    carosel.html(viewPort);
  }

  $('.carosel').on('click', '.carosel-nav', function() {
    const viewPort = $(this).siblings('div');
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
