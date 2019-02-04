// TEST

/*$(function() {
  $("#home-icons i").on("click", function() {
    $(".expand").slideToggle(2000);
  });
}); */

/*$(function() {
  var items = $("i");

  items.on("click", function() {
    $(this)
      .find("p")
      .slideToggle(500);
  });
});*/

// HOME-ICONS-SLIDER

$(function() {
  var items = $("#home-icons i, #home-icons h3");

  items.on("click", function() {
    $(this)
      .siblings("div")
      .slideToggle(1000);
  });
});

// QUOTE-SLIDER

$(function() {
  var allQuotes = $(".quote-slider");
  var currentQuote = 0;

  function changeQuote() {
    $(allQuotes[currentQuote]).fadeOut(900);

    if (currentQuote == allQuotes.length - 1) {
      currentQuote = 0;
    } else {
      currentQuote++;
    }

    $(allQuotes[currentQuote]).fadeIn(900);
  }

  var quoteTimer = setInterval(changeQuote, 5000);
});

// HOME-CAROUSEL

$(".carousel").carousel({
  interval: 2000
});

// Get the current year for the copyright ?????????????????

$("#year span").text(new Date().getFullYear());

// TOOLTIP

$(function() {
  $('[data-toggle="tooltip"]').tooltip();
});

$(function() {
  $("#roll").css({
    background: "#758da7",
    color: "white",
    borderRadius: "1em",
    width: "auto"
  });
});

// HOME-LIGHTBOX

$(function() {
  $("#home-lightbox a").magnificPopup({
    type: "image"
  });
});
