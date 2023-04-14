(function ($) {
  'use strict';
  $(window).scroll(function () {
    if ($(this).scrollTop() > 200) {
      $('#backtotop:hidden').stop(true, true).fadeIn();
    } else {
      $('#backtotop').stop(true, true).fadeOut();
    }
  });
  $(function () {
    $('#scroll').on('click', function () {
      $('html,body').animate({ scrollTop: $('#thetop').offset().top }, 'slow');
      return false;
    });
  });
  $('[data-toggle="tooltip"]').tooltip();
  $('[data-background]').each(function () {
    $(this).css('background-image', 'url(' + $(this).attr('data-background') + ')');
  });
  var $text_effect = $('.text_effect_wrap');
  var $window = $(window);
  function scroll_addclass() {
    var window_height = $(window).height() - 100;
    var window_top_position = $window.scrollTop();
    var window_bottom_position = window_top_position + window_height;
    $.each($text_effect, function () {
      var $element = $(this);
      var element_height = $element.outerHeight();
      var element_top_position = $element.offset().top;
      var element_bottom_position = element_top_position + element_height;
      if (element_bottom_position >= window_top_position && element_top_position <= window_bottom_position) {
        $element.addClass('is_show');
      }
    });
  }
  $window.on('scroll resize', scroll_addclass);
  $window.trigger('scroll');
  var $c_slide_effect = $('.c_slide_in');
  var $window = $(window);
  function c_scroll_addclass() {
    var window_height = $(window).height() - 100;
    var window_top_position = $window.scrollTop();
    var window_bottom_position = window_top_position + window_height;
    $.each($c_slide_effect, function () {
      var $element = $(this);
      var element_height = $element.outerHeight();
      var element_top_position = $element.offset().top;
      var element_bottom_position = element_top_position + element_height;
      if (element_bottom_position >= window_top_position && element_top_position <= window_bottom_position) {
        $element.addClass('is_shown');
      }
    });
  }
  $window.on('scroll resize', c_scroll_addclass);
  $window.trigger('scroll');
  Splitting({ target: '[data-splitting]', by: 'chars' });
  $(document).ready(function () {
    $('.close_btn, .overlay').on('click', function () {
      $('#mobile_menu').removeClass('active');
      $('.overlay').removeClass('active');
    });
    $('.menu_btn').on('click', function () {
      $('#mobile_menu').addClass('active');
      $('.overlay').addClass('active');
    });
  });
  $('.mobile_menu .dropdown').on('show.bs.dropdown', function (e) {
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown(400);
  });
  $('.mobile_menu .dropdown').on('hide.bs.dropdown', function (e) {
    $(this).find('.dropdown-menu').first().stop(true, true).slideUp(500);
  });
  $(window).on('scroll', function () {
    if ($(this).scrollTop() > 120) {
      $('.sticky_header').addClass('stuck');
    } else {
      $('.sticky_header').removeClass('stuck');
    }
  });
  if ($('.feature_section .tabs_nav > ul > li > a').length > 0) {
    $('.feature_section .tabs_nav > ul > li > a').click(function () {
      var tab_id = $(this).attr('data-tab');
      $('.feature_image_3').removeClass('active');
      $('#' + tab_id).addClass('active');
    });
  }
  $('.popup_video').magnificPopup({
    type: 'iframe',
    preloader: false,
    removalDelay: 160,
    fixedContentPos: false,
    mainClass: 'mfp-with-zoom mfp-img-mobile',
  });
  $('.zoom-gallery').magnificPopup({
    delegate: '.popup_image',
    type: 'image',
    closeOnContentClick: false,
    closeBtnInside: false,
    mainClass: 'mfp-with-zoom mfp-img-mobile',
    gallery: { enabled: true, navigateByImgClick: true, preload: [0, 1] },
    zoom: {
      enabled: true,
      duration: 300,
      opener: function (element) {
        return element.find('img');
      },
    },
  });
  if ($('.popup_image').length) {
    $('.popup_image').each(function () {
      $('.popup_image').magnificPopup({
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        removalDelay: 300,
        mainClass: 'mfp-with-zoom mfp-img-mobile',
        gallery: { enabled: true, navigateByImgClick: true, preload: [0, 1] },
      });
    });
  }
  $('.tab_btn').on('click', function () {
    $('.tab_switcher, .pricing_tab').toggleClass('active'), $('.amount').toggleClass('change_amount');
  });
  $('.tab_switcher').on('click', function () {
    $(this).toggleClass('active'), $('.pricing_tab').toggleClass('active'), $('.amount').toggleClass('change_amount');
  });
  var $grid = $('.grid').imagesLoaded(function () {
    $grid.masonry({ itemSelector: '.grid-item', percentPosition: true, columnWidth: '.grid-sizer' });
  });
  var $element_grid = $('.element_grid').isotope({ itemSelector: '.element-item', layoutMode: 'fitRows' });
  var filterFns = {
    numberGreaterThan50: function () {
      var number = $(this).find('.number').text();
      return parseInt(number, 10) > 50;
    },
    ium: function () {
      var name = $(this).find('.name').text();
      return name.match(/ium$/);
    },
  };
  $('.filter-btns-group').on('click', 'button', function () {
    var filterValue = $(this).attr('data-filter');
    filterValue = filterFns[filterValue] || filterValue;
    $element_grid.isotope({ filter: filterValue });
  });
  $('.button-group').each(function (i, buttonGroup) {
    var $buttonGroup = $(buttonGroup);
    $buttonGroup.on('click', 'button', function () {
      $buttonGroup.find('.active').removeClass('active');
      $(this).addClass('active');
    });
  });
  function portfolioMasonry() {
    var portfolio = $('.masonry_portfolio');
    if (portfolio.length) {
      portfolio.imagesLoaded(function () {
        portfolio.isotope({
          itemSelector: '.element-item',
          layoutMode: 'masonry',
          filter: '*',
          animationOptions: { duration: 1000 },
          transitionDuration: '0.5s',
          masonry: {},
        });
        $('.filter-btns-group > ul > li > button').on('click', function () {
          $('.filter-btns-group > ul > li > button').removeClass('active');
          $(this).addClass('active');
          var selector = $(this).attr('data-filter');
          portfolio.isotope({
            filter: selector,
            animationOptions: { animationDuration: 750, easing: 'linear', queue: false },
          });
          return false;
        });
      });
    }
  }
  portfolioMasonry();
  $('.item_increase').on('click', function () {
    var getID = $(this).next().attr('id');
    var result = document.getElementById(getID);
    var qty = result.value;
    $('.quantity_input').removeAttr('disabled');
    if (!isNaN(qty)) {
      result.value++;
    } else {
      return false;
    }
  });
  $('.item_decrease').on('click', function () {
    var getID = $(this).prev().attr('id');
    var result = document.getElementById(getID);
    var qty = result.value;
    $('.quantity_input').removeAttr('disabled');
    if (!isNaN(qty) && qty > 0) {
      result.value--;
    } else {
      return false;
    }
  });
  $('.dropdown > a').addClass('dropdown-toggle');
  $('.dropdown-menu .dropdown > a').on('click', function (e) {
    if (!$(this).next().hasClass('show')) {
      $(this).parents('.dropdown-menu').first().find('.show').removeClass('show');
    }
    var $subMenu = $(this).next('.dropdown-menu');
    $subMenu.toggleClass('show');
    $(this)
      .parents('li.dropdown.show')
      .on('.dropdown', function (e) {
        $('.dropdown-menu > .dropdown .show').removeClass('show');
      });
    $('.dropdown-menu li a.dropdown-toggle').removeClass('show_dropdown');
    if ($(this).next().hasClass('show')) {
      $(this).addClass('show_dropdown');
    }
    return false;
  });
  $('#service_carousel').owlCarousel({
    nav: true,
    margin: 30,
    loop: true,
    dots: false,
    smartSpeed: 1000,
    responsive: {
      0: { items: 1 },
      600: { items: 2 },
      767: { items: 2 },
      1000: { items: 3 },
      1560: { items: 3 },
      1920: { items: 4 },
    },
  });
  $('#shop_carousel').owlCarousel({
    nav: true,
    margin: 30,
    loop: true,
    dots: false,
    smartSpeed: 1000,
    responsive: {
      0: { items: 1 },
      580: { items: 2 },
      767: { items: 3 },
      991: { items: 3 },
      1000: { items: 4 },
      1560: { items: 4 },
      1920: { items: 4 },
    },
  });
  $('#testimonial_carousel_1').owlCarousel({
    items: 1,
    loop: true,
    nav: true,
    margin: 30,
    smartSpeed: 1000,
    autoplayTimeout: 6000,
    autoplayHoverPause: false,
  });
  $('#testimonial_carousel_2').owlCarousel({
    nav: true,
    margin: 0,
    loop: true,
    dots: false,
    smartSpeed: 1000,
    responsive: { 0: { items: 1 }, 880: { items: 2 }, 991: { items: 2 }, 1000: { items: 2 } },
  });
  $('#casestudy_carousel').owlCarousel({
    margin: 0,
    loop: true,
    nav: false,
    smartSpeed: 1000,
    responsive: { 0: { items: 1 }, 580: { items: 2 }, 600: { items: 3 }, 1000: { items: 3 } },
  });
  $('.details_images_carousel').owlCarousel({
    items: 1,
    nav: true,
    loop: true,
    margin: 15,
    dots: false,
    smartSpeed: 1000,
  });
  function appScreenshot() {
    if ($('.appScreenshot').length) {
      var swiper = new Swiper('.appScreenshot', {
        effect: 'coverflow',
        loop: true,
        centeredSlides: true,
        slidesPerView: 4,
        initialSlide: 1,
        keyboardControl: true,
        mousewheelControl: false,
        lazyLoading: true,
        preventClicks: false,
        preventClicksPropagation: false,
        lazyLoadingInPrevNext: true,
        nextButton: '.swiper-next',
        prevButton: '.swiper-prev',
        coverflow: { rotate: 0, stretch: -38, depth: 170, modifier: 1, slideShadows: false },
        breakpoints: {
          1199: { slidesPerView: 4, spaceBetween: 0 },
          991: { slidesPerView: 3, spaceBetween: 10 },
          767: { slidesPerView: 2 },
          400: { slidesPerView: 1 },
        },
      });
    }
  }
  appScreenshot();
  function isMobile() {
    return 'ontouchstart' in document.documentElement;
  }
  function init_gmap() {
    if (typeof google == 'undefined') return;
    var options = {
      center: [1.2960841, 103.8458455],
      zoom: 14,
      styles: [
        { elementType: 'geometry', stylers: [{ color: '#eaeaea' }] },
        { elementType: 'labels.text.stroke', stylers: [{ color: '#ffffff' }] },
        { elementType: 'labels.text.fill', stylers: [{ color: '$pure-black' }] },
        { featureType: 'administrative.locality', elementType: 'labels.text.fill', stylers: [{ color: '#d59563' }] },
        { featureType: 'poi', elementType: 'labels.text.fill', stylers: [{ color: '#61605e' }] },
        { featureType: 'poi.park', elementType: 'geometry', stylers: [{ color: '#cbe99f' }] },
        { featureType: 'poi.park', elementType: 'labels.text.fill', stylers: [{ color: '#98786d' }] },
        { featureType: 'road', elementType: 'geometry', stylers: [{ color: '#ffffff' }] },
        { featureType: 'road', elementType: 'geometry.stroke', stylers: [{ color: '#ffffff' }] },
        { featureType: 'road', elementType: 'labels.text.fill', stylers: [{ color: '#39c2f8' }] },
        { featureType: 'road.highway', elementType: 'geometry', stylers: [{ color: '#fedd96' }] },
        { featureType: 'road.highway', elementType: 'geometry.stroke', stylers: [{ color: '#eeca83' }] },
        { featureType: 'road.highway', elementType: 'labels.text.fill', stylers: [{ color: '#965c28' }] },
        { featureType: 'transit', elementType: 'geometry', stylers: [{ color: '#fef5b6' }] },
        { featureType: 'transit.station', elementType: 'labels.text.fill', stylers: [{ color: '#f1e0ca' }] },
        { featureType: 'water', elementType: 'geometry', stylers: [{ color: '#a1cafe' }] },
        { featureType: 'water', elementType: 'labels.text.fill', stylers: [{ color: '$pure-black' }] },
        { featureType: 'water', elementType: 'labels.text.stroke', stylers: [{ color: '#ffffff' }] },
      ],
      mapTypeControl: true,
      mapTypeControlOptions: { style: google.maps.MapTypeControlStyle.DROPDOWN_MENU },
      navigationControl: true,
      scrollwheel: false,
      streetViewControl: true,
    };
    if (isMobile()) {
      options.draggable = false;
    }
    $('#google-map').gmap3({ map: { options: options }, marker: { latLng: [1.2960841, 103.8458455] } });
  }
  init_gmap();
  AOS.init({ once: true, duration: 800 });
  if ($('.scene,.scene_1,.scene_2,.scene_3,.scene_4,.scene_5').length > 0) {
    $('.scene,.scene_1,.scene_2,.scene_3,.scene_4,.scene_5').parallax({ scalarX: 10.0, scalarY: 10.0 });
  }

  particlesJS('particles-js', {
    particles: {
      number: {
        value: 200,
        density: {
          enable: true,
          value_area: 1000,
        },
      },
      color: {
        value: '#ffffff',
      },
      shape: {
        type: 'circle',
        stroke: {
          width: 0,
          color: '#000000',
        },
        polygon: {
          nb_sides: 5,
        },
        image: {
          src: 'img/github.svg',
          width: 100,
          height: 100,
        },
      },
      opacity: {
        value: 0.5,
        random: false,
        anim: {
          enable: false,
          speed: 1,
          opacity_min: 0.1,
          sync: false,
        },
      },
      size: {
        value: 2,
        random: true,
        anim: {
          enable: false,
          speed: 40,
          size_min: 0.1,
          sync: false,
        },
      },
      line_linked: {
        enable: true,
        distance: 150,
        color: '#ffffff',
        opacity: 0.4,
        width: 1,
      },
      move: {
        enable: true,
        speed: 2,
        direction: 'none',
        random: false,
        straight: false,
        out_mode: 'out',
        bounce: false,
        attract: {
          enable: false,
          rotateX: 600,
          rotateY: 1200,
        },
      },
    },
    interactivity: {
      detect_on: 'canvas',
      events: {
        onhover: {
          enable: true,
          mode: 'grab',
        },
        onclick: {
          enable: true,
          mode: 'push',
        },
        resize: true,
      },
      modes: {
        grab: {
          distance: 150,
          line_linked: {
            opacity: 1,
          },
        },
        bubble: {
          distance: 400,
          size: 40,
          duration: 2,
          opacity: 8,
          speed: 3,
        },
        repulse: {
          distance: 200,
          duration: 0.4,
        },
        push: {
          particles_nb: 4,
        },
        remove: {
          particles_nb: 2,
        },
      },
    },
    retina_detect: true,
  });
  //   (function() {
  //     // Add event listener
  //     document.addEventListener("mousemove", parallax);
  //     const elem = document.querySelector("#parallax");
  //     // Magic happens here
  //     function parallax(e) {
  //         let _w = window.innerWidth/2;
  //         let _h = window.innerHeight/2;
  //         let _mouseX = e.clientX;
  //         let _mouseY = e.clientY;
  //         let _depth1 = `${50 - (_mouseX - _w) * 0.01}% ${50 - (_mouseY - _h) * 0.01}%`;
  //         let _depth2 = `${50 - (_mouseX - _w) * 0.02}% ${50 - (_mouseY - _h) * 0.02}%`;
  //         let _depth3 = `${50 - (_mouseX - _w) * 0.06}% ${50 - (_mouseY - _h) * 0.06}%`;
  //         let x = `${_depth3}, ${_depth2}, ${_depth1}`;
  //         console.log(x);
  //         elem.style.backgroundPosition = x;
  //     }

  // })();
  document.addEventListener('mousemove', parallax);
  function parallax(event) {
    this.querySelectorAll('.parallax-wrap div').forEach((shift) => {
      const position = shift.getAttribute('value');
      const x = (window.innerWidth - event.pageX * position) / 120;
      const y = (window.innerHeight - event.pageY * position) / 120;

      shift.style.transform = `translateX(${x}px) translateY(${y}px)`;
    });
  }
  $('.smoothScroll').click(function () {
    console.log(target.offset().top());
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html,body').animate(
          {
            scrollTop: target.offset().top() + '-210px',
          },
          500
        ); // The number here represents the speed of the scroll in milliseconds
        return false;
      }
    }
  });
})(jQuery);
