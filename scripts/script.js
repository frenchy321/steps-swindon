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
    type: "image",
    gallery: { enabled: true }
  });
});

// QUESTIONS-AND-ANSWERS-SECTION

$(function() {
  $("#questions-and-answers").css({ background: "#2710a7" });
  $("#questions-and-answers h3").css({ color: "#fff" });
});

// SPINNER-PLUGIN

(function($) {
  $.fn.letterDrop = function() {
    // Chainability
    return this.each(function() {
      var obj = $(this);

      var drop = {
        arr: obj.text().split(""),

        range: {
          min: 1,
          max: 9
        },

        styles: function() {
          var dropDelays = "\n",
            addCSS;

          for (i = this.range.min; i <= this.range.max; i++) {
            dropDelays += ".ld" + i + " { animation-delay: 1." + i + "s; }\n";
          }

          addCSS = $("<style>" + dropDelays + "</style>");
          $("head").append(addCSS);
        },

        main: function() {
          var dp = 0;
          obj.text("");

          $.each(this.arr, function(index, value) {
            dp = dp.randomInt(drop.range.min, drop.range.max);

            if (value === " ") value = "&nbsp"; //Add spaces

            obj.append(
              '<span class="letterDrop ld' + dp + '">' + value + "</span>"
            );
          });
        }
      };

      Number.prototype.randomInt = function(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
      };

      // Create styles
      drop.styles();

      // Initialise
      drop.main();
    });
  };
})(jQuery);

// USAGE
$("#spinner").letterDrop();

// END-OF-SPINNER-PLUGIN

$(function() {
  // $("#somecomponent").locationpicker();
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
