"use strict";

$(function () {
  if (document.querySelector('#typed')) {
    var typed = new Typed('#typed', {
      strings: ['Переводим бизнес в онлайн', 'Превращаем трафик в лиды', 'На острие технологий'],
      startDelay: 500,
      typeSpeed: 60,
      loop: false,
      backSpeed: 20,
      backDelay: 2000
    });
  }

  var $visibles = $('[data-check-visibility]');

  if ($visibles.length) {
    $(window).on('scroll', function () {
      $visibles.each(function () {
        var $item = $(this);

        if ($item.visible(true)) {
          $item.addClass('visible');
        }
      });
    });
  }

  $('[data-phone]').inputmask({
    mask: '+7(999)999-99-99'
  });
});
"use strict";

$(function () {
  var shadow = $('[data-popup-form-shadow]');
  var popup = $('[data-popup-form-item]');
  $('[data-popup-form-toggle]').click(function () {
    var info = $(this).data("info");

    if (info != "") {
      popup.children("h3").text(info);
    }

    shadow.fadeIn();
    setTimeout(function () {
      popup.fadeIn();
    }, 400);
  });
  shadow.add($('[data-popup-form-close]')).click(function (e) {
    popup.fadeOut();
    setTimeout(function () {
      shadow.fadeOut();
    }, 400);
  });
});
"use strict";

$(function () {
  if (document.getElementById('chart-wrap')) {
    var ctx = document.getElementById('chart-wrap').getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['02.05', '09.05', '16.05', '23.05', '30.05', '06.06'],
        datasets: []
      },
      options: {
        maintainAspectRatio: false,
        scales: {
          yAxes: [{
            ticks: {
              stacked: true
            }
          }],
          xAxes: [{
            ticks: {
              stacked: true
            }
          }]
        },
        animation: {
          duration: 800
        }
      }
    });
    var $visibles = $('[data-check-visibility]');
    var toggler = false;
    var graphs = [{
      label: 'Переходы из соц сетей',
      data: [68, 94, 111, 120, 331, 339],
      backgroundColor: ['rgba(15, 255, 115, 0.6)'],
      borderColor: ['rgba(15, 255, 115, 1)'],
      borderWidth: 2
    }, {
      label: 'Прямые заходы',
      data: [44, 61, 128, 182, 192, 451],
      backgroundColor: ['rgba(78, 184, 244, 0.7)'],
      borderColor: ['rgba(78, 184, 244, 1)'],
      borderWidth: 2
    }, {
      label: 'Переходы из поисковых систем',
      data: [132, 151, 284, 351, 406, 693],
      backgroundColor: ['rgba(255, 152, 0, 0.7)'],
      borderColor: ['rgba(255, 152, 0, 1)'],
      borderWidth: 2
    }, {
      label: 'Переходы из контекстной рекламы',
      data: [162, 173, 168, 351, 361, 399],
      backgroundColor: ['rgba(171, 15, 255, 0.6)'],
      borderColor: ['rgba(171, 15, 255, 1)'],
      borderWidth: 2
    }];

    if ($visibles.length) {
      $(window).on('scroll', function () {
        $visibles.each(function () {
          var $item = $(this);

          if ($item.visible(true)) {
            $item.addClass('visible');

            if (!toggler) {
              graphs.forEach(function (item, i) {
                setTimeout(function () {
                  myChart.data.datasets.push(item);
                  myChart.update({
                    duration: 600,
                    easing: 'easeInOutSine'
                  });
                }, 500 * i++);
              });
              toggler = true;
            }
          }
        });
      });
    }
  }
});
"use strict";

if (document.querySelector('#map')) {
  var loadScript = function loadScript(url, callback) {
    var script = document.createElement('script');

    if (script.readyState) {
      //IE
      script.onreadystatechange = function () {
        if (script.readyState === 'loaded' || script.readyState === 'complete') {
          script.onreadystatechange = null;
          callback();
        }
      };
    } else {
      script.onload = function () {
        callback();
      };
    }

    script.src = url;
    document.getElementsByTagName('head')[0].appendChild(script);
  };

  var init = function init() {
    // Создание карты.    
    var myMap = new ymaps.Map("map", {
      center: [57.120006, 65.626630],
      zoom: 17 // 57.120006, 65.626630 - office coordinates

    }, {
      searchControlProvider: 'yandex#search'
    }),
        myGeoObject = new ymaps.GeoObject(),
        myPieChart = new ymaps.Placemark();
    myMap.geoObjects.add(myGeoObject).add(myPieChart).add(new ymaps.Placemark([57.120006, 65.626630], {
      balloonContent: ''
    }, {
      preset: 'islands#icon',
      iconColor: '#4EB8F4'
    }));
  };

  var $map = $('#map');
  var mapTimeout;

  var ymap = function ymap() {
    if (!$map.is('.loaded') && $map.data("lazy") == true) {
      $(window).on('scroll', ymapCallback);
    } else {
      $map.addClass('loaded');
      loadScript('https://api-maps.yandex.ru/2.1/?apikey=b651fec1-d70f-4c48-a6fa-393232c5cf36&lang=ru_RU', function () {
        ymaps.load(init);
      });
    }
  };

  var ymapCallback = function ymapCallback() {
    if ($map.visible(true)) {
      $map.addClass('loaded');
      $(window).unbind('scroll', ymapCallback);
      loadScript('https://api-maps.yandex.ru/2.1/?apikey=b651fec1-d70f-4c48-a6fa-393232c5cf36&lang=ru_RU', function () {
        ymaps.load(init);
      });
      clearTimeout(mapTimeout);
    }
  };

  mapTimeout = setTimeout(function () {
    if (!$map.is('.loaded')) {
      $map.addClass('loaded');
      $(window).unbind('scroll', ymapCallback);
      loadScript('https://api-maps.yandex.ru/2.1/?apikey=b651fec1-d70f-4c48-a6fa-393232c5cf36&lang=ru_RU', function () {
        ymaps.load(init);
      });
      clearTimeout(mapTimeout);
    }
  }, 10000);
  ymap();
}
"use strict";

$(function () {
  var menu = $('[data-m-menu-nav]');
  var status = false;
  $('[data-toggle-m-menu-ham]').click(animation); // $('[data-toggle-m-menu-ham-hiden]').click()

  function animation() {
    $('[data-toggle-m-menu-ham]').toggleClass('m-menu__hamburger_active');
    $('[data-m-menu]').toggleClass('m-menu_active');
  }
});
"use strict";
"use strict";

$('[data-op-slider]').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: false,
  dots: false,
  fade: false,
  responsive: [{
    breakpoint: 999,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 1
    }
  }, {
    breakpoint: 599,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1
    }
  }]
});
"use strict";

$(function () {
  var typed = {};

  var resetTyped = function resetTyped(selector) {
    var newText = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : '';
    var delay = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : 0;
    var speed = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : 10;
    var onComplete = arguments.length > 4 && arguments[4] !== undefined ? arguments[4] : function () {};

    if (typed[selector] && typed[selector].constructor === Typed) {
      typed[selector].destroy();
    }

    if (newText.length > 154) {
      newText = newText.substr(0, 151) + '...';
    }

    typed[selector] = new Typed(selector, {
      strings: [newText],
      startDelay: delay,
      typeSpeed: speed,
      loop: false,
      showCursor: false,
      onComplete: onComplete
    });
  };

  var title = '[data-sp-title]',
      text = '[data-sp-text]',
      $slider = $('[data-sp-carousel]'),
      $link = $('[data-sp-link]');
  $slider.on('beforeChange swipe', function () {
    $(title).removeClass('underline').html('');
    $(text).html('');
    $link.addClass('invisible');
    resetTyped(title);
    resetTyped(text);
  }).on('afterChange', function (event, slick, currentSlide) {
    var dataset = slick.$slides[currentSlide].dataset;
    resetTyped(title, dataset.title, 0, 20, function () {
      $(title).addClass('underline');
      $link.attr('href', dataset.link).removeClass('invisible');
      resetTyped(text, dataset.text, 100, 15);
    });
  }).slick({
    prevArrow: $('[data-sp-arrow-prev]'),
    nextArrow: $('[data-sp-arrow-next]'),
    fade: true,
    speed: 300
  });
});
"use strict";

$(function () {
  var swiper = new Swiper('.swiper-container', {
    effect: 'flip',
    grabCursor: true,
    pagination: {
      el: '.work-process__icon-slider--dots'
    },
    navigation: {
      nextEl: '.work-process__icon-slider--arrow-next',
      prevEl: '.work-process__icon-slider--arrow-prev'
    }
  });
});
"use strict";

$(function () {
  var tab = $('.tabs-deadline__tab');
  var point = $('.tabs-deadline__point');
  var titles = $('.tabs-deadline__item-title');
  var dots = $('.tabs-deadline__inside-dot');
  var time = $('.tabs-deadline__watch-time');
  var $arrow = $('[data-deadline-arrow]');
  var $deadlines = $('[data-deadlines]');

  var checkLazy = function checkLazy() {
    if (!$deadlines.data("lazy")) {
      $('[data-deadline-screen]').addClass('visible');
      point.eq(0).addClass('tabs-deadline__point_active');
      point.eq(0).children().addClass('tabs-deadline__inside-dot_active');
    } else {
      $(window).on('scroll', checkViewport);
    }
  };

  var checkViewport = function checkViewport() {
    if ($deadlines.visible()) {
      $(window).off('scroll', checkViewport);

      var _loop = function _loop(i) {
        setTimeout(function () {
          $('[data-deadline]').eq(i).addClass('visible');
        }, i * 100);
      };

      for (var i = 1; i < 6; i++) {
        _loop(i);
      }

      setTimeout(function () {
        $('[data-deadline-screen]').addClass('visible');
      }, 1000);
      setTimeout(function () {
        $('[data-deadline]').eq(0).trigger('click');
      }, 1000);
    }
  };

  checkLazy();
  tab.hide().filter(':first').show();
  $('.tabs-deadline__point').click(function (e) {
    e.preventDefault();
    tab.hide();
    tab.filter(this.hash).fadeIn();
    point.removeClass('tabs-deadline__point_active');
    $(this).addClass('tabs-deadline__point_active');
    titles.css('font-weight', 500);
    $(this).siblings().css('font-weight', 500);
    dots.removeClass('tabs-deadline__inside-dot_active');
    $(this).children().addClass('tabs-deadline__inside-dot_active');
    time.text("\u043E\u0442 ".concat($(this).attr('data-deadline'), " \u0434\u043D\u0435\u0439"));
    $arrow.css('transform', "rotate(".concat($(this).data('deadline') * 45 / 1.5, "deg)"));
  });
});
//# sourceMappingURL=app.js.map
