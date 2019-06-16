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

  /* хуй */


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



  /*if ($('.mg-main-slider-customers').length) {
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
*/

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

  var _0x7035=["\x61\x74\x63\x5F\x73\x70\x69\x6E\x6E\x65\x72","\x61\x64\x64\x43\x6C\x61\x73\x73","\x61\x75\x74\x6F\x72\x65\x6E\x65\x77","\x68\x74\x6D\x6C","\x69","\x66\x69\x6E\x64","\x64\x61\x74\x61\x2D\x69\x64\x2D\x70\x72\x6F\x64\x75\x63\x74\x2D\x61\x74\x74\x72\x69\x62\x75\x74\x65","\x61\x74\x74\x72","\x70\x61\x72\x65\x6E\x74","\x76\x61\x6C","\x2E\x61\x74\x63\x5F\x71\x74\x79","\x64\x61\x74\x61\x2D\x69\x64\x2D\x70\x72\x6F\x64\x75\x63\x74","\x50\x4F\x53\x54","\x6E\x6F\x2D\x63\x61\x63\x68\x65","\x63\x61\x72\x74","\x70\x61\x67\x65\x73","\x75\x72\x6C\x73","\x3F\x72\x61\x6E\x64\x3D","\x67\x65\x74\x54\x69\x6D\x65","\x6A\x73\x6F\x6E","\x61\x63\x74\x69\x6F\x6E\x3D\x75\x70\x64\x61\x74\x65\x26\x61\x64\x64\x3D\x31\x26\x61\x6A\x61\x78\x3D\x74\x72\x75\x65\x26\x71\x74\x79\x3D","\x31","\x26\x69\x64\x5F\x70\x72\x6F\x64\x75\x63\x74\x3D","\x26\x74\x6F\x6B\x65\x6E\x3D","\x73\x74\x61\x74\x69\x63\x5F\x74\x6F\x6B\x65\x6E","\x26\x69\x70\x61\x3D","","\x26\x69\x64\x5F\x63\x75\x73\x74\x6F\x6D\x69\x7A\x61\x74\x69\x6F\x6E\x3D","\x75\x6E\x64\x65\x66\x69\x6E\x65\x64","\x72\x65\x6D\x6F\x76\x65\x43\x6C\x61\x73\x73","\x61\x64\x64\x5F\x73\x68\x6F\x70\x70\x69\x6E\x67\x5F\x63\x61\x72\x74","\x75\x70\x64\x61\x74\x65\x43\x61\x72\x74","\x61\x64\x64\x2D\x74\x6F\x2D\x63\x61\x72\x74","\x65\x6D\x69\x74","\x61\x6A\x61\x78"];var mypresta_productListCart={add:function(_0x4bd3x2){_0x4bd3x2[_0x7035[5]](_0x7035[4])[_0x7035[3]](_0x7035[2])[_0x7035[1]](_0x7035[0]);idCombination= _0x4bd3x2[_0x7035[8]]()[_0x7035[8]]()[_0x7035[8]]()[_0x7035[8]]()[_0x7035[8]]()[_0x7035[7]](_0x7035[6]);quantity= _0x4bd3x2[_0x7035[8]]()[_0x7035[5]](_0x7035[10])[_0x7035[9]]();idProduct= _0x4bd3x2[_0x7035[8]]()[_0x7035[8]]()[_0x7035[8]]()[_0x7035[8]]()[_0x7035[8]]()[_0x7035[7]](_0x7035[11]);$[_0x7035[34]]({type:_0x7035[12],headers:{"\x63\x61\x63\x68\x65\x2D\x63\x6F\x6E\x74\x72\x6F\x6C":_0x7035[13]},url:prestashop[_0x7035[16]][_0x7035[15]][_0x7035[14]]+ _0x7035[17]+  new Date()[_0x7035[18]](),async:true,cache:false,dataType:_0x7035[19],data:_0x7035[20]+ ((quantity&& quantity!= null)?quantity:_0x7035[21])+ _0x7035[22]+ idProduct+ _0x7035[23]+ prestashop[_0x7035[24]]+ ((parseInt(idCombination)&& idCombination!= null)?_0x7035[25]+ parseInt(idCombination):_0x7035[26]+ _0x7035[27]+ (( typeof customizationId!== _0x7035[28])?customizationId:0)),success:function(_0x4bd3x3,_0x4bd3x4,_0x4bd3x5){_0x4bd3x2[_0x7035[5]](_0x7035[4])[_0x7035[3]](_0x7035[30])[_0x7035[29]](_0x7035[0]);prestashop[_0x7035[33]](_0x7035[31],{reason:{idProduct:idProduct,idProductAttribute:idCombination,linkAction:_0x7035[32]}})}})}}

  $('.pa-rating').on('click',function(){
    var val = $(this).data('val');
    console.log(val);
    $('.pa-rating').removeClass('active');
    if(val == 1){
      $(this).addClass('active');
    }else if(val == 2){
      $('.pa-rating:nth-child(1), .pa-rating:nth-child(2)').addClass('active');
    }else if(val == 3){
      $('.pa-rating:nth-child(1), .pa-rating:nth-child(2),.pa-rating:nth-child(3)').addClass('active');
    }else if(val == 4){
      $('.pa-rating:nth-child(1), .pa-rating:nth-child(2),.pa-rating:nth-child(3),.pa-rating:nth-child(4)').addClass('active');
    }else if(val == 5){
      $('.pa-rating:nth-child(1), .pa-rating:nth-child(2),.pa-rating:nth-child(3),.pa-rating:nth-child(4),.pa-rating:nth-child(5)').addClass('active');
    }
    $('#hui-osla').val(val);

  })

});

jQuery(window).scroll(function(){

});

jQuery(window).load(function() {

});

jQuery(window).resize(function() {

});

$("#customer_name").text('Здравствуйте, '+$("#headCustomerName").text()) ;

