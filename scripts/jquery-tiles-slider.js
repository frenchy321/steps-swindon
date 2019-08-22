var tile = $('.tiles-slider li:last-child');
var shrink = $('.tiles-slider li');
timeout = 5000;

function changeTile() {
  tile.fadeOut(300, function() {
    tile.insertBefore('.tiles-slider li:first-child');
    shrink.addClass('shrink-tile');
  });

  tile.fadeIn(300, function() {
    tile.removeClass('shrink-tile');
  });
  shrink.fadeIn(300, function() {
    shrink.removeClass('shrink-tile');
  });

  tile = $('.tiles-slider li:last-child');
}

var interval = setInterval(changeTile, timeout);

$('.tiles-slider').hover(
  function() {
    clearInterval(interval);
  },
  function() {
    interval = setInterval(changeTile, timeout);
  }
);
