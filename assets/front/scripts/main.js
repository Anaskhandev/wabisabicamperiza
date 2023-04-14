jQuery(document).ready(function (jQuery) {
  $(window).on('load', function () {
    if ($.cookie('modal_shown') == null) {
      $('#cookieModal').modal('show');
    }
  });

  $('#accept_c').click(function () {
    $.cookie('modal_shown', 'yes to cookies', { expires: 2, path: '/' });
  });

  $('#reject_c').click(function () {
    $.cookie('modal_shown', 'No cookie', { expires: 2, path: '/' });
  });

  $('.review_carousel').owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    mouseDrag: true,
    dots: false,
    nav: true,
    navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
    slideTransition: 'linear',
    // smartSpeed:450,
    autoplayTimeout: 5000,
    autoplaySpeed: 1000,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 1,
      },
    },
  });

  $('.logos_carousel').owlCarousel({
    loop: false,
    margin: 10,
    autoplay: true,
    mouseDrag: false,
    dots: false,
    nav: false,
    navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
    slideTransition: 'linear',
    // smartSpeed:450,
    autoplayTimeout: 5000,
    autoplaySpeed: 1000,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 4,
      },
    },
  });
  var groups = {};
  $('.galleryItem').each(function () {
    var id = parseInt($(this).attr('data-group'), 10);

    if (!groups[id]) {
      groups[id] = [];
    }

    groups[id].push(this);
  });

  //   $('.a_change').click(function () {
  //     if ($('#book-type').val() == 'Libro de tapa dura') {
  //       // $('.a_change').attr('href', `<?= base_url('/checkout/book') ?>`);
  //     }
  //   });

  $('#book-type').on('change', function () {
    $('.warning_text').css('display', 'none');
    $('.a_change').removeClass('disabled');

    if ($(this).val() == 'Libro tapa de blanda') {
      $('.a_change').attr('href', 'https://wabisabicamperiza.com/checkout/book');
    } else {
      $('.a_change').attr({
        target: '_blank',
        href: 'https://play.google.com/store/books/details?id=LKWfEAAAQBAJ',
      });
    }
  });

  $.each(groups, function () {
    $(this).magnificPopup({
      type: 'image',
      closeOnContentClick: true,
      closeBtnInside: false,
      gallery: { enabled: true },
    });
  });

  $(document).on('change', '#quantity', function () {
    if ($('#isLogin').val() == 'false') {
      swal('Cart', 'Please login first!', 'error');
      $('#quantity').val(1);
      return false;
    }
    $('.num_items').text($('#quantity').val());
    let quantity = $('#quantity').val();
    let unit_value = parseFloat($('#unit_value').text());
    if (quantity == 0) {
      swal('Cart', 'Sorry! quantity can not be 0.', 'error');
      $('#quantity').val(1);
      $('#total_payment').text(unit_value);
      $.ajax({
        url: '<?php echo base_url(); ?>Manual/totalAmout',
        type: 'POST',
        data: { total_payment: unit_value, quantity: 1 },
        dataType: 'json',
        success: function (data) {
          alert(data);
        },
        error: function (data) {
          alert(data);
        },
      });
      return false;
    }
    let total_payment = quantity * unit_value;
    $('#total_payment').empty();
    $('#total_payment').text(total_payment);
    $.ajax({
      url: '<?php echo base_url(); ?>Manual/totalAmout',
      type: 'POST',
      data: { total_payment: total_payment, quantity: quantity },
      dataType: 'json',
      success: function (data) {
        //alert(data);
      },
      error: function (data) {
        //alert(data);
      },
    });
    return false;
  });
  //   $(document).on("change", "#book-type", function () {
  //     if ($("#isLogin").val() == "false") {
  //       swal("Cart", "Please login first!", "error");
  //       return false;
  //     }
  //     let book_type = $(this).val();
  //     if (book_type == "Libro electrónico (Ebook)") {
  //       $("#isCheckoutDiv").css("display", "none");
  //       $("#iseBooKDiv").css("display", "block");
  //       return false;
  //     } else {
  //       $("#isCheckoutDiv").css("display", "block");
  //       $("#iseBooKDiv").css("display", "none");
  //     }
  //     $.ajax({
  //       url: "<?php echo base_url(); ?>Manual/bookType",
  //       type: "POST",
  //       data: { book_type: book_type },
  //       dataType: "json",
  //       success: function (data) {
  //         //alert(data);
  //       },
  //       error: function (data) {
  //         //alert(data);
  //       },
  //     });
  //   });

  $('.num_items').text($('#quantity').val());

  $('#sf_value').click(function () {
    var s_value = $('#s_value').val();
    var f_value = $('#f_value').val();

    var x = f_value / s_value;

    if (x <= 90) {
      $('#panel_d').removeClass('d-none');
      $('.panel_text').text('1 PANEL SOLAR DE 90 W');
      $('.panel_2').css('display', 'none');
      $('#panel_a').attr('href', 'https://amzn.to/3JQK8vv');
    } else if (x <= 167) {
      $('#panel_d').removeClass('d-none');
      $('.panel_text').text('1 PANEL SOLAR DE 160 W ');
      $('.panel_2').css('display', 'none');
      $('#panel_a').attr('href', 'https://amzn.to/3vL0mQC');
    } else if (x <= 300) {
      $('#panel_d').removeClass('d-none');
      $('.panel_text').text('2 PANELES SOLARES DE 160 W');
      $('.panel_2').css('display', 'block');
      $('#panel_a').attr('href', 'https://amzn.to/3vL0mQC');
    } else if (x <= 360) {
      $('#panel_d').removeClass('d-none');
      $('.panel_text').text('1 PANEL SOLAR DE 360 W ');
      $('.panel_2').css('display', 'none');
      $('#panel_a').attr('href', 'https://amzn.to/3Sx41eR');
    } else if (x > 360) {
      $('#panel_d').removeClass('d-none');
      $('.panel_text').text('2 PANELES SOLARES DE 360 W');
      $('.panel_2').css('display', 'block');
      $('#panel_a').attr('href', 'https://amzn.to/3Sx41eR');
    }
  });

  // $('.site-footer .checkboxes-data label:before').on('click',function(){
  //     $('#acceptance').prop('checked', true)
  // })

  $('.click2').click(function () {
    $('#acceptance:checked').each(function () {
      // alert(this.value)
      if (this.value == 'on') {
        document.getElementById('link1').click();
      }
    });
  });

  $('.click1').click(function () {
    $('.acceptance:checked').each(function () {
      // alert(this.value)
      if (this.value == 'on') {
        document.getElementById('link2').click();
      }
    });
  });

  var calculated = [];

  $('.calculate').click(function () {
    $('input[name="sino"]:checked').each(function () {
      var val = this.value;
      if (val == 'si') {
        $('input[name="abcd"]:checked').each(function () {
          var value = parseInt(this.value);
          calculated.push(value);
        });
        var Result = calculated.reduce((a, b) => a + b, 0);
        console.log(calculated.reduce((a, b) => a + b, 0));

        $('.result_cal').removeClass('d-none');
        $('.result_cal').addClass('d-flex');

        if (Result < 375) {
          $('#si_img').attr(
            'src',
            'http://wabisabicamperiza.com/assets/front/img/Phoenix_Inverter_12_375.PNG.webp'
          );
          $('.calculador_res').text('1 INVERSOR 375 W');
          $('.calculated_btn').attr('href', 'https://amzn.to/3vMdGV6');
        } else if (Result < 499) {
          $('#si_img').attr(
            'src',
            'http://wabisabicamperiza.com/assets/front/img/Phoenix_Inverter_12_500.webp'
          );
          $('.calculador_res').text('1 INVERSOR 500 W');
          $('.calculated_btn').attr('href', 'https://amzn.to/3SBBg0K');
        } else if (Result < 799) {
          $('#si_img').attr(
            'src',
            'http://wabisabicamperiza.com/assets/front/img/Phoenix_Inverter_12_800.webp'
          );
          $('.calculador_res').text('1 INVERSOR 800 W');
          $('.calculated_btn').attr('href', 'https://amzn.to/3dfuVry');
        } else if (Result < 1199) {
          $('#si_img').attr(
            'src',
            'http://wabisabicamperiza.com/assets/front/img/Phoenix_Inverter_12_1200.webp'
          );
          $('.calculador_res').text('1 INVERSOR 1200 W');
          $('.calculated_btn').attr('href', 'https://amzn.to/3bDzADc');
        } else if (Result < 1599) {
          $('#si_img').attr(
            'src',
            'http://wabisabicamperiza.com/assets/front/img/Phoenix_Inverter_smart_12_1600.webp'
          );
          $('.calculador_res').text('1 INVERSOR 1600 W');
          $('.calculated_btn').attr('href', 'https://amzn.to/3SBAVv0');
        } else if (Result < 1999) {
          $('#si_img').attr(
            'src',
            'http://wabisabicamperiza.com/assets/front/img/Phoenix_Inverter_smart_12_2000.webp'
          );
          $('.calculador_res').text('1 INVERSOR 2000 W');
          $('.calculated_btn').attr('href', 'https://amzn.to/3d0PDuX');
        }

        calculated.splice(0, calculated.length);
      } else if (val == 'no') {
        $('.no_result').removeClass('d-none');
        $('.no_result').addClass('d-flex');
      }
    });
  });

  $('.click_menu .nav-tgl').click(function () {
    $('.click_menu .main-menu').toggleClass('active');
  });

  // Added sticky-header class on header
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 10) {
      jQuery('.site-header').addClass('sticky-header');
      $('.add_cart').addClass('sticky');
    } else {
      jQuery('.site-header').removeClass('sticky-header');
      $('.add_cart').removeClass('sticky');
    }
  });
  $(document).ready(function () {
    //     $("#onclick").click(function(){
    //     alert('¡ GRACIAS POR TU MENSAJE ! EN BREVES NOS PONDREMOS EN CONTACTO CONTIGO.');
    //   });
    $('.image-popup-vertical-fit').magnificPopup({
      type: 'image',
      closeOnContentClick: true,
      mainClass: 'mfp-img-mobile',
      image: {
        verticalFit: true,
      },
    });
  });
  $(document).ready(function () {
    $('.minus').click(function () {
      var $input = $(this).parent().find('input');
      var count = parseInt($input.val()) - 1;
      count = count < 1 ? 1 : count;
      $input.val(count);
      $input.change();
      return false;
    });
    $('.plus').click(function () {
      var $input = $(this).parent().find('input');
      $input.val(parseInt($input.val()) + 1);
      $input.change();
      return false;
    });
  });
  $('.close_btn').click(function () {
    $('.add_cart').removeClass('active');
  });
  $('.smoothScroll').click(function () {
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html,body').animate(
          {
            scrollTop: target.offset().top - 120,
          },
          500
        ); // The number here represents the speed of the scroll in milliseconds
        return false;
      }
    }
  });

  //   $('.smoothScroll2').click(function () {
  //     // $('html,body').animate(
  //     // {
  //     width = $(window).width();
  //     if (width < 900) {
  //       $(window).scrollTop(400);
  //     }
  //     //   },
  //     //   500
  //     // ); // The number here represents the speed of the scroll in milliseconds
  //   });

  $('.btn-tab_trig').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
    $('.nav-tabs .nav-link, .nav-tabs .nav-item').removeClass('active');
  });

  $('.btn-tab_trig').on('click', function (e) {
    var href = $(this).attr('href');
    $('html, body').animate(
      {
        scrollTop: $(href).offset().top,
      },
      'slow'
    );
    e.preventDefault();
  });

  jQuery('.counter-count').each(function () {
    jQuery(this)
      .prop('Counter', 0)
      .animate(
        {
          Counter: jQuery(this).text(),
        },
        {
          //chnage count up speed here
          duration: 4000,
          easing: 'swing',
          step: function (now) {
            jQuery(this).text(Math.ceil(now));
          },
        }
      );
    $('menu_animate').click(function () {
      $('menu_header').slideToggle('slow').addclass();
    });
  });

  jQuery('.function-box').matchHeight({
    byRow: true,
  });
  jQuery('.steps-boxes').matchHeight({
    byRow: true,
  });
  jQuery('.course-box').matchHeight({
    byRow: true,
  });

  jQuery("a.page-scroll[href^='#']").click(function (e) {
    e.preventDefault();
    jQuery(document).off('scroll');
    jQuery('a.page-scroll').each(function () {
      jQuery(this).removeClass('active');
    });
    jQuery(this).addClass('active');

    document.getElementById('mySidenav').style.left = '-100%';

    var position = jQuery(jQuery(this).attr('href')).offset().top - 100;

    jQuery('body, html').animate(
      {
        scrollTop: position,
      },
      1000
    );
  });

  jQuery('.all-product-slider .owl-carousel').owlCarousel({
    stagePadding: 0,
    center: true,
    loop: true,
    margin: 15,
    autoplay: false,
    autoplayTimeout: 2000,
    nav: true,
    items: 1,
    lazyLoad: true,
    dots: false,
    responsive: {
      0: {
        items: 1,
        stagePadding: 40,
        nav: true,
      },
      767: {
        items: 3,
        stagePadding: 0,
        nav: true,
      },
      992: {
        items: 5,
        stagePadding: 0,
        nav: true,
      },
    },
  });

  jQuery('.courses-slider .owl-carousel').owlCarousel({
    stagePadding: 0,
    center: true,
    loop: true,
    margin: 25,
    nav: true,
    items: 1,
    lazyLoad: true,
    dots: false,
    responsive: {
      0: {
        items: 1,
        stagePadding: 40,
      },
      767: {
        items: 2,
        stagePadding: 0,
      },
      992: {
        items: 3,
        center: false,
        stagePadding: 0,
      },
    },
  });

  jQuery('.modules-slider .owl-carousel').owlCarousel({
    stagePadding: 60,
    center: true,
    loop: true,
    margin: 15,
    nav: true,
    items: 1,
    lazyLoad: true,
    dots: false,
    responsive: {
      0: {
        items: 1,
        stagePadding: 40,
      },
      767: {
        items: 2,
        stagePadding: 40,
        nav: false,
      },
      992: {
        items: 3,
        center: false,
        stagePadding: 0,
      },
    },
  });

  /* Product Slider on FAQ Sec */
  jQuery('.products-slider .owl-carousel').owlCarousel({
    stagePadding: 350,
    center: true,
    loop: true,
    margin: 10,
    nav: true,
    items: 1,
    lazyLoad: true,
    dots: true,
    responsive: {
      0: {
        items: 1,
        stagePadding: 60,
      },
      767: {
        items: 1,
        stagePadding: 250,
      },
      992: {
        items: 1,
      },
      1200: {
        items: 3,
        stagePadding: 100,
      },
      1600: {
        items: 3,
        stagePadding: 350,
      },
    },
  });

  jQuery('.testi-slider .owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    items: 1,
    lazyLoad: true,
    dots: false,
    nav: true,
    navText: [
      "<span class='fas fa-angle-left'></span>",
      "<span class='fas fa-angle-right'></span>",
    ],
    autoplay: false,
    autoplayTimeout: 3000,
    responsive: {
      0: {
        items: 1,
        // nav     : false,
      },
      767: {
        items: 1,
        // nav     : false,
      },
      992: {
        items: 1,
        // nav     : false,
      },
      1200: {
        items: 1,
      },
      1600: {
        items: 1,
      },
    },
  });

  jQuery('.blog-banner-slider').owlCarousel({
    loop: true,
    margin: 10,
    items: 1,
    lazyLoad: true,
    nav: false,
    navText: [
      "<span class='fas fa-angle-left'></span>",
      "<span class='fas fa-angle-right'></span>",
    ],
    autoplay: true,
    autoplayTimeout: 10000,
    dots: false,
  });

  jQuery('.banner-slider .owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    items: 1,
    lazyLoad: true,
    dots: true,
    autoplayHoverPause: true,
    nav: true,
    navText: [
      "<span class='fas fa-angle-left'></span>",
      "<span class='fas fa-angle-right'></span>",
    ],
    autoplay: true,
    autoplayTimeout: 10000,
  });

  jQuery('.blog_banner .owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    items: 1,
    lazyLoad: true,
    dots: true,
    nav: true,
    navText: [
      "<span class='fas fa-angle-left navs_style'></span>",
      "<span class='fas fa-angle-right navs_style'></span>",
    ],
    autoplay: false,
    autoplayTimeout: 3000,
  });

  $('.video-popup-vertical-fit').magnificPopup({
    type: 'iframe',
    closeOnContentClick: true,
    iframe: {
      markup:
        '<div class="mfp-iframe-scaler">' +
        '<div class="mfp-close"></div>' +
        '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
        '</div>',

      patterns: {
        youtube: {
          index: 'youtube.com/',
          id: 'v=',
          src: 'https://www.youtube.com/embed/%id%?autoplay=1',
        },
        vimeo: {
          index: 'vimeo.com/',
          id: '/',
          src: '//player.vimeo.com/video/%id%?autoplay=1',
        },
        gmaps: {
          index: '//maps.google.',
          src: '%id%&output=embed',
        },
      },
      srcAction: 'iframe_src',
    },
  });

  jQuery('.btn-cart-show').click(function () {
    $('.add_cart').toggleClass('active');
  });

  // Filter option in Mobile Open and close
  jQuery('.fixed-filter .filter-icon').click(function () {
    jQuery('#mobile-filter').css({
      left: '0',
    });
  });
  jQuery('#mobile-filter .close-icon ').click(function () {
    jQuery('#mobile-filter').css({
      left: '-100%',
    });
  });

  // Filter option in Mobile Open and close
  jQuery('.fixed-filter .compra-filter-icon').click(function () {
    jQuery('#compra-mobile-filter').css({
      left: '0',
    });
  });
  jQuery('#mobile-filter .compra-close-icon ').click(function () {
    jQuery('#compra-mobile-filter').css({
      left: '-100%',
    });
  });
});

var width = screen.width;
if (width < 800) {
  $('.main_sec').removeClass('container');
  $('.main_sec').addClass('container-fluid');
} else {
  $('.main_sec').addClass('container');
  $('.main_sec').removeClass('container-fluid');
}

// mobile menu open close
function openNav() {
  document.getElementById('mySidenav').style.left = '0';
}

function closeNav() {
  document.getElementById('mySidenav').style.left = '-100%';
}

$('#home-tab').click(function () {
  setTimeout(() => {
    $('.wizard .nav-tabs li:first-child').addClass('active');
    $('.wizard .nav-tabs li').addClass('disabled');
    $('#main_form .tab-pane').removeClass('active');
    $('#main_form .tab-pane:first-child').addClass('active');
    $('.tabs_of_right .right-content').removeClass('abcd');
  }, 200);
});

$('.stop').click(function () {
  $('.right-side .nav-link').removeClass('active');
  $('#profile-tab').addClass('active');
  setTimeout(() => {
    $('.tab-content .right-content').removeClass('active');
    $('.tab-content .right-content').removeClass('show');
    $('.tab-content .right-content:nth-child(2)').addClass('active show');
    $('.tabs_of_right .right-content').removeClass('abcd');
  }, 200);
});
$('.cars').click(function () {
  $('.right-side .nav-link').removeClass('active');
  $('#home-tab').addClass('active');
  setTimeout(() => {
    $('.tab-content .right-content').removeClass('active');
    $('.tab-content .right-content').removeClass('show');
    $('.tab-content .right-content:first-child').addClass('active show');
    $('.wizard .nav-tabs li:first-child').addClass('active');
    $('.wizard .nav-tabs li').addClass('disabled');
    $('#main_form .tab-pane').removeClass('active');
    $('#main_form .tab-pane:first-child').addClass('active');
    $('.tabs_of_right .right-content').removeClass('abcd');
  }, 200);
});
$('.dig').click(function () {
  $('.right-side .nav-link').removeClass('active');
  $('#vid_main-tab').addClass('active');
  setTimeout(() => {
    $('.tab-content .right-content').removeClass('active');
    $('.tab-content .right-content').removeClass('show');
    $('.tab-content .right-content:nth-child(3)').addClass('active show');
    $('.tabs_of_right .right-content').removeClass('abcd');
  }, 200);
});
$('.kangaroo').click(function () {
  $('.right-side .nav-link').removeClass('active');
  $('#calc_main-tab').addClass('active');
  setTimeout(() => {
    $('.tab-content .right-content').removeClass('active');
    $('.tab-content .right-content').removeClass('show');
    $('.tab-content .right-content:nth-child(4)').addClass('active show');
    $('.tabs_of_right .right-content').removeClass('abcd');
  }, 200);
});
$('.pump').click(function () {
  $('.right-side .nav-link').removeClass('active');
  $('#PROFESOR-tab').addClass('active');
  setTimeout(() => {
    $('.tab-content .right-content').removeClass('active');
    $('.tab-content .right-content').removeClass('show');
    $('.tab-content .right-content:nth-child(5)').addClass('active show');
    $('.tabs_of_right .right-content').removeClass('abcd');
  }, 200);
});

$('.next_tabs').click(function () {
  $('.tabs_of_right .right-content').removeClass('abcd');
  $('.tabs_of_right .right-content.active').addClass('abcd');
  if ($('.abcd').next().text() != '') {
    $('.abcd').next().addClass('active');
    $('.abcd').next().addClass('show');
    $('.abcd').removeClass('active');
    $('.abcd').removeClass('show');
    $('.tabs-home a').removeClass('abcd2');
    $('.tabs-home .active').addClass('abcd2');
    $('.abcd2').parent().next().children().addClass('active');
    $('.abcd2').removeClass('active');
  }
});

$('.prev_tabs').click(function () {
  $('.abcd').removeClass('abcd');
  $('.tabs_of_right .right-content.active').addClass('abcd');
  if ($('.abcd').prev().text() != '') {
    $('.abcd').prev().addClass('show');
    $('.abcd').removeClass('active');
    $('.abcd').removeClass('show');
    $('.tabs-home a').removeClass('abcd2');
    $('.tabs-home .active').addClass('abcd2');
    $('.abcd2').parent().prev().children().addClass('active');
    $('.abcd2').removeClass('active');

    $('.tabs_of_right .right-content').removeClass('active');
    $('.abcd').prev().addClass('active');
    $('#main_form .tab-pane').removeClass('active');
    $('#main_form .tab-pane:first-child').addClass('active');
  }
});
