jQuery(document).ready(function() {

  var numberSpinner = (function() {
    $('.number-spinner>.ns-btn>a').click(function() {
      var btn = $(this),
        oldValue = btn.closest('.number-spinner').find('input').val().trim(),
        newVal = 0;

      if (btn.attr('data-dir') === 'up') {
        newVal = parseInt(oldValue) + 1;
      } else {
        if (oldValue > 1) {
          newVal = parseInt(oldValue) - 1;
        } else {
          newVal = 1;
        }
      }
      btn.closest('.number-spinner').find('input').val(newVal);
    });
    $('.number-spinner>input').keypress(function(evt) {
      evt = (evt) ? evt : window.event;
      var charCode = (evt.which) ? evt.which : evt.keyCode;
      if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
      }
      return true;
    });
  })();

  $('#js-mg-totop').on('click', function(e) {
    e.preventDefault();
    $('body,html').animate({
      scrollTop: 0
    }, 800);
  });

  if ($('#mg-main-slider').length) {
    $('#mg-main-slider').slick({
      dots: true,
      draggable: false,
      prevArrow: '<button class="slick-prev slick-arrow" aria-label="Previous" type="button"><i class="mg-icon icon-angle-left"></i></button>',
      nextArrow: '<button class="slick-next slick-arrow" aria-label="Next" type="button"><i class="mg-icon icon-angle-right"></i></button>'
    });
  }

  if ($('.mg-main-slider-banner').length) {
    $('.mg-main-slider-banner').slick({
      arrows: false,
      dots: true,
      draggable: false,
      slidesToShow: 3,
      slidesToScroll: 3,
      responsive: [
        {
          breakpoint: 1199,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
  }

  if ($('.mg-main-slider-popular').length) {
    $('.mg-main-slider-popular').slick({
      arrows: false,
      dots: true,
      draggable: false,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [
        {
          breakpoint: 1199,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            centerMode: true,
            variableWidth: true
          }
        }
      ]
    });
  }

  if ($('.mg-main-slider-product').length) {
    $('.mg-main-slider-product').slick({
      arrows: false,
      dots: true,
      draggable: false,
      slidesToShow: 3,
      slidesToScroll: 3,
      responsive: [
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
  }

  if ($('.mg-main-slider-brends').length) {
    $('.mg-main-slider-brends').slick({
      draggable: false,
      slidesToShow: 6,
      slidesToScroll: 1,
      prevArrow: '<button class="slick-prev slick-arrow" aria-label="Previous" type="button"><i class="mg-icon icon-angle-left"></i></button>',
      nextArrow: '<button class="slick-next slick-arrow" aria-label="Next" type="button"><i class="mg-icon icon-angle-right"></i></button>',
      responsive: [
        {
          breakpoint: 1199,
          settings: {
            slidesToShow: 5
          }
        },
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 4,
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 2,
          }
        }
      ]
    });
  }



  if ($('.mg-main-slider-customers').length) {
    $('.mg-main-slider-customers').slick({
      arrows: false,
      dots: true,
      draggable: false,
      slidesToShow: 3,
      slidesToScroll: 3,
      responsive: [
        {
          breakpoint: 1199,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
  }


  if ($('.mg-main-slider-category').length) {
    $('.mg-main-slider-category').slick({
      arrows: false,
      dots: true,
      draggable: false,
      slidesToShow: 3,
      slidesToScroll: 3,
      responsive: [
        {
          breakpoint: 1199,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
  }





  $('#js-mg-finder-btn').on('click', function(e) {
    e.preventDefault();
    $(this).parents('form').toggleClass('mf-header__finder--active');
  });

  $(document).on( 'click', '.mg-clicker-link, .mg-ask',function(e){
    e.preventDefault();
    if ($(this).parents('.mg-profile-faq__item').hasClass('mg-profile-faq__item--active')) {
      $(this).parents('.mg-profile-faq__item').removeClass('mg-profile-faq__item--active');
    } else {
      $('.mg-profile-faq__item').removeClass('mg-profile-faq__item--active');
      $(this).parents('.mg-profile-faq__item').addClass('mg-profile-faq__item--active');
    }
  });

  $(document).on( 'click', '.mg-profile-faq__more-link',function(e){
    e.preventDefault();
    $(this).attr('style','display:none !important;');
    $('.mg-profile-faq__item').removeClass('d-none d-lg-block');
  });



});

jQuery(window).scroll(function(){

});

jQuery(window).load(function() {

});

jQuery(window).resize(function() {

});


