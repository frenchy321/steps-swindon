// COVID-19

const btn = document.querySelector('.covid-btn');
const covid = document.querySelector('.covid');
const covidx = document.querySelector('.popup-close');

// DISPLAY COVID-19 POPUP

btn.addEventListener('click', () => {
  covid.classList.toggle('d-none');
});

// REMOVE COVID-19 POPUP

covidx.addEventListener('click', () => {
  covid.style.display = 'none';
});

covidx.addEventListener('click', () => {
  covid.style.display = 'none';
  location.reload(true);
});

covid.addEventListener('click', () => {
  covid.style.display = 'none';
  location.reload(true);
});

// HOME-ICONS-SLIDER

$(function () {
  var items = $('#home-icons i, #home-icons h3');

  items.on('click', function () {
    $(this).siblings('div').slideToggle(1000);
  });
});

// QUOTE-SLIDER

$(function () {
  var allQuotes = $('.quote-slider');
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

$('.carousel').carousel({
  interval: 4000,
});

// Get the current year for the copyright

$('#year span').text(new Date().getFullYear());

// TOOLTIP

$(function () {
  $('[data-toggle="tooltip"]').tooltip();
});

// HOME-LIGHTBOX

$(function () {
  $('#home-lightbox a').magnificPopup({
    type: 'image',
    gallery: { enabled: true },
  });
});

// GOOGLE-MAP

$(function () {
  if ($.prototype.locationpicker) {
    $('#google-map').locationpicker({
      location: {
        latitude: 51.5655819,
        longitude: -1.7444095,
      },
      enableReverseGeocode: false,
    });
  }
});

// CONTACT-FORM

$(function () {
  $('#contact-form').submit(function (e) {
    var textInputs = $(this).find("input[type='text'], textarea");
    let isValid = true;
    textInputs.each(function (index) {
      if ($(this).val() === '') {
        $(this).css({ border: '1px solid red' });
        isValid = false;
      } else {
        $(this).css({ border: 'none' });
      }
    });

    if (!isValid) {
      e.preventDefault();
    }
  });
});
