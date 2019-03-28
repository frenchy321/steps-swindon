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

// CAROUSELS (HOME AND GROUPS)

$(".carousel").carousel({
  interval: 4000
});

// Get the current year for the copyright

$("#year span").text(new Date().getFullYear());

// TOOLTIP

$(function() {
  $('[data-toggle="tooltip"]').tooltip();
});

// HOME-LIGHTBOX

$(function() {
  $("#home-lightbox a").magnificPopup({
    type: "image",
    gallery: { enabled: true }
  });
});

// GOOGLE-MAP

$(function() {
  $("#google-map").locationpicker();
});

// CONTACT-FORM

$(function() {
  $("#contact-form").submit(function(e) {
    var textInputs = $(this).find("input[type='text'], textarea");
    let isValid = true;
    textInputs.each(function(index) {
      if ($(this).val() === "") {
        $(this).css({ border: "1px solid red" });
        isValid = false;
      } else {
        $(this).css({ border: "none" });
      }
    });

    if (!isValid) {
      e.preventDefault();
    }
  });
});

// ABOUT MODAL PLUGIN

// Instantiate new modal
var modal = new Custombox.modal({
  content: {
    effect: "fadein",
    target: "#modal"
  }
});

// Open
modal.open();
