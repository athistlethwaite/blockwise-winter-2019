/*
 */
(function($) {
  buildCarosel($('.mentors-list'));
  buildCarosel($('.corporate-partners-list'));

  function buildCarosel(carosel) {
    carosel.css('position', 'relative');
    carosel.find('>div').addClass('carosel-item');
    const items = $('.carosel-item');
    items
      .find('p')
      .parent('div')
      .addClass('carosel-content');
    items
      .find('img')
      .parent('div')
      .addClass('carosel-thumbnail');

    const caroselHTML =
      '<div class="carosel"><div class="carosel-viewport" >' +
      carosel.html() +
      '</div></div><a class="carosel-nav left">&#10094;</a><a class="carosel-nav right">&#10095;</a>';
    carosel.html(caroselHTML);
  }

  $('.carosel-nav').on('click', function() {
    event.preventDefault();
    const viewPort = $(this)
      .siblings('.carosel')
      .children('.carosel-viewport');
    const direction = $(this).attr('class');
    if (direction.includes('right')) {
      caroselSlideRight(viewPort);
    } else if (direction.includes('left')) {
      caroselSlideLeft(viewPort);
    }
  });

  $('.carosel-viewport').on('click', '.carosel-item', function() {
    const viewPort = $(this).parent();
    const items = viewPort.find('.carosel-item');
    if (items.index(this) >= items.length / 2) {
      caroselSlideRight(viewPort);
    } else {
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
