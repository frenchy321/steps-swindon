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

// CAROUSELS ( HOME AND GROUPS)

$(".carousel").carousel({
  interval: 4000
});

// Get the current year for the copyright ?????????????????

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

// QUESTIONS-AND-ANSWERS-SECTION

$(function() {
  $("#questions-and-answers").css({ background: "#2710a7" });
  $("#questions-and-answers h3").css({ color: "#fff" });
});

$(function() {
  $("#somecomponent").locationpicker();
});

// CONTACT-FORM

// When you submit the form
// If any of the input boxes or textareas are empty
// Then highlight the empty input in red
// ...and don't let the form submit

// Level 1 - when the JS file is evaluated

$(function() {
  // Level 2 - when jQuery tells us that the document is ready

  $("#container-contact form").submit(function(e) {
    // Level 3 - when jQuery tells us that a form submit event has happened
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
    }
    e.preventDefault();

    // Level 3 - when jQuery tells us that a form submit event has happened
  });

  // Level 2 - when jQuery tells us that the document is ready
});

// Level 1 - when the JS file is evaluated

// SCROLL-SPY

$("body").scrollspy({ target: "#list-example" });

// ABOUT PAGE

// LATEST NEWS

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
