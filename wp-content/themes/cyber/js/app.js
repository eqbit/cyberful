"use strict";

$(function () {
  if (document.querySelector('#typed')) {
    var typed = new Typed('#typed', {
      strings: ['Bitrix', 'React/Typescript/Mobx', 'Wordpress', 'Сайты-визитки, лэндинги, корпоративные сайты'],
      startDelay: 500,
      typeSpeed: 60,
      loop: true,
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
                    duration: 800,
                    easing: 'easeInOutSine'
                  });
                }, 800 * i++);
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

$(function () {
  var quiz = {
    state: {
      currentQuest: 0,
      totalQuest: 0,
      json: "",
      listClassName: "",
      cardClassName: "",
      answers: []
    },
    create: {
      staticItems: {
        createBaseItem: function createBaseItem(json, name, base) {
          // return string value for base template tag
          if (base) {
            return json.base[name];
          } else {
            return json.fin[name];
          }
        },
        createSomeBlocks: function createSomeBlocks(json, name, base) {
          var sub = "";

          if (base) {
            json.base[name].forEach(function (item) {
              sub += item;
            });
          } else {
            json.fin[name].forEach(function (item) {
              sub += item;
            });
          }

          return sub;
        }
      },
      dinamicItems: {
        createCards: function createCards(index, json) {
          // set new class to the list
          quiz.utility.prepareList(index, json); // this function have to return template string with all choices on quiz-page

          var items = "";

          if (quiz.actions.checks.checkRowType(index, json, 'item') == 'quiz-content__variants-item--regular-card') {
            for (var i = 0; i < json.dinamic[index].cardData.cardInfo.length; i++) {
              items += "\n                                    <li class=\"quiz-content__variants-item ".concat(quiz.actions.checks.checkRowType(index, json, 'item'), "\">\n                                        <div class=\"quiz-content__variant-img\">\n                                            <img src=\"").concat(json.dinamic[index].cardData.cardInfo[i][1], "\" alt=\"\">     \n                                        </div>\n                                        <h3 class=\"quiz-content__variant-title\">").concat(json.dinamic[index].cardData.cardInfo[i][0], "</h3>\n                                    </li>  \n                            ");
            }
          } else if (quiz.actions.checks.checkRowType(index, json, 'item') == 'quiz-content__variants-item--linear-card') {
            for (var _i = 0; _i < json.dinamic[index].cardData.cardInfo.length; _i++) {
              items += "\n                                    <li class=\"quiz-content__variants-item ".concat(quiz.actions.checks.checkRowType(index, json, 'item'), "\">\n                                        <h3 class=\"quiz-content__variant-title\">").concat(json.dinamic[index].cardData.cardInfo[_i][0], "</h3>\n                                    </li>  \n                            ");
            }
          }

          $('.quiz-content__variants-list').html(items);
        },
        createQuestTitle: function createQuestTitle(index) {
          var res = quiz.state.json.dinamic[index].cardData['titleQuestion'];
          $('.quiz-content__title-question').text(res);
        },
        createAboutText: function createAboutText(index) {
          var res = "";
          quiz.state.json.dinamic[index].personData['aboutText'].forEach(function (el) {
            res += el;
          });
          $('.quiz-content__about').html(res);
        },
        createCurrentNumber: function createCurrentNumber(index) {
          var res = index + 1;
          $('[data-quiz-current]').text(res);
        },
        createCheckbox: function createCheckbox(parentClassName) {
          $('.' + parentClassName).append("<input type=\"checkbox\" class=\"quiz-content__variant-checkbox\">");
        }
      }
    },
    actions: {
      binds: {
        bindBtnNext: function bindBtnNext(selector) {
          selector.click(function () {
            quiz.utility.setAnswers();
            quiz.state.currentQuest++;
            quiz.utility.hideBtn('quiz-content__btn');
            quiz.update();
          });
        },
        bindBtnBack: function bindBtnBack(selector) {
          selector.click(function () {
            if (quiz.state.currentQuest > 0) {
              quiz.state.currentQuest--;
              quiz.utility.hideBtn('quiz-content__btn');
              quiz.update();
            }
          });
        },
        bindBtnSend: function bindBtnSend(selector) {
          $(document).on('submit', selector, function (e) {
            e.preventDefault();
            quiz.send();
          });
        },
        bindBtnClose: function bindBtnClose(selector) {
          selector.click(function (e) {
            quiz.remove();
          });
        },
        bindCard: function bindCard(className) {
          // multiselect == false
          if (!quiz.state.json.dinamic[quiz.state.currentQuest].cardSettings.multiSelect) {
            $('.' + className).click(function () {
              $('.' + className).removeClass(className + '_active');
              $(this).addClass(className + '_active');
            });
          } // multiselect == true!
          else {
              // append on card checkbox
              quiz.create.dinamicItems.createCheckbox(className);
              $('.' + className).click(function () {
                $(this).toggleClass(className + '_active');

                if ($(this).children('input').prop('checked')) {
                  $(this).children('input').prop('checked', false);
                } else {
                  $(this).children('input').prop('checked', true);
                }
              });
            } // common actions for all types of card


          $('.' + className).click(function () {
            quiz.actions.checks.checkAndPerform(quiz.state.currentQuest == 0, quiz.utility.showBtn.bind(this, 'quiz-content__btn-next'), quiz.utility.showBtn.bind(this, 'quiz-content__btn-back'), true);

            if (!quiz.actions.checks.checkSelectedCards(quiz.state.listClassName, quiz.state.cardClassName + "_active")) {
              quiz.utility.removeClass('quiz-content__btn-next', 'quiz-content__btn-next_active');
            }
          });
        }
      },
      checks: {
        checkRowType: function checkRowType(index, json, elem) {
          if (elem == "list") {
            switch (json.dinamic[index].cardSettings.rowType) {
              case 2:
                quiz.state.listClassName = 'quiz-content__variants-list--regular-list';
                return 'quiz-content__variants-list--regular-list';

              case 'linear':
                quiz.state.listClassName = 'quiz-content__variants-list--linear-list';
                return 'quiz-content__variants-list--linear-list';

              default:
                console.error('error case');
            }
          } else if (elem == "item") {
            switch (json.dinamic[index].cardSettings.rowType) {
              case 2:
                quiz.state.cardClassName = 'quiz-content__variants-item--regular-card';
                return 'quiz-content__variants-item--regular-card';

              case 'linear':
                quiz.state.cardClassName = 'quiz-content__variants-item--linear-card';
                return 'quiz-content__variants-item--linear-card';

              default:
                console.error('error case');
            }
          }
        },
        checkAmountQuests: function checkAmountQuests(json) {
          quiz.state.totalQuest = json.dinamic.length;
          return json.dinamic.length;
        },
        checkCurrentQuest: function checkCurrentQuest() {
          return quiz.state.currentQuest;
        },
        checkProgress: function checkProgress() {
          var amount = quiz.state.totalQuest;
          var current = quiz.state.currentQuest;
          var progress = current * (100 / amount);
          $('[data-quiz-progress]').css('width', progress + '%');
          return progress;
        },
        checkSelectedCards: function checkSelectedCards(parentClassName, activeChildrenClassName) {
          return $('.' + parentClassName).children('.' + activeChildrenClassName).length > 0;
        },
        checkAndPerform: function checkAndPerform(check, firstFn, secondFn, flag) {
          if (check) {
            firstFn();
          } else {
            if (!flag) {
              secondFn();
            } else {
              firstFn();
              secondFn();
            }
          }
        }
      }
    },
    baseRender: function baseRender(json) {
      var progress = this.actions.checks.checkProgress();

      if (progress != 100) {
        // function getBaseTemplate will return completed base template
        var templ = getBaseTemplate(json);
        $('#quiz').html(templ);
        this.actions.checks.checkAmountQuests(json); // binding static btns for events

        this.actions.binds.bindBtnNext($('[data-quiz-next]'));
        this.actions.binds.bindBtnBack($('[data-quiz-back]'));
        this.actions.binds.bindBtnClose($('[data-quiz-close]'));
        this.actions.checks.checkProgress();
      } else {
        // function getFinTemplate will return completed base fin-template
        var _templ = getFinTemplate(json);

        $('#quiz').html(_templ); // binding static btns for events

        this.actions.binds.bindBtnSend($('[data-quiz-send]'));
        this.actions.binds.bindBtnClose($('[data-quiz-close]'));
        this.actions.checks.checkProgress();
      }
    },
    dinamicRender: function dinamicRender() {
      quiz.create.dinamicItems.createAboutText(quiz.state.currentQuest);
      quiz.create.dinamicItems.createCards(quiz.state.currentQuest, quiz.state.json);
      quiz.create.dinamicItems.createCurrentNumber(quiz.state.currentQuest);
      quiz.create.dinamicItems.createQuestTitle(quiz.state.currentQuest); // binding dinamic cards for event

      this.actions.binds.bindCard(this.state.cardClassName); // activate cards and btns if we have relevant state

      if (quiz.state.answers[quiz.state.currentQuest] != undefined) {
        this.utility.activateCards(this.state);
      }

      if (quiz.actions.checks.checkSelectedCards(quiz.state.listClassName, quiz.state.cardClassName + "_active")) {
        $(".quiz-content__btn-next").addClass('quiz-content__btn-next_active');
      }
    },
    update: function update() {
      var progress = this.actions.checks.checkProgress();

      if (progress != 100) {
        this.dinamicRender();
        this.utility.removeClass('quiz-content__btn-next', 'quiz-content__btn-next_active');
        this.actions.checks.checkAndPerform(quiz.state.currentQuest == 0, this.utility.showBtn.bind(this, 'quiz-content__btn-next'), this.utility.showBtn.bind(this, 'quiz-content__btn-back'), true);
      } else {
        this.baseRender(quiz.state.json);
      }

      console.log(quiz.state.answers);
    },
    utility: {
      showBtn: function showBtn(className) {
        $('.' + className).show();

        if (quiz.actions.checks.checkSelectedCards(quiz.state.listClassName, quiz.state.cardClassName + "_active")) {
          $('.' + className).addClass(className + "_active");
        }
      },
      hideBtn: function hideBtn(className) {
        $('.' + className).hide();
      },
      removeClass: function removeClass(elemClassName, willRemoveClass) {
        $('.' + elemClassName).removeClass(willRemoveClass);
      },
      pushToStateAnswers: function pushToStateAnswers(value) {
        quiz.state.answers.push(value);
      },
      replaceStateAnswers: function replaceStateAnswers(value, index) {
        quiz.state.answers[index] = value;
      },
      setAnswers: function setAnswers() {
        var res = [];
        var titles = $('.quiz-content__title-question').text();
        var children = $('.' + quiz.state.cardClassName + '_active').children('.quiz-content__variant-title');
        var answ = [];
        children.each(function (i, elem) {
          answ.push($(elem).text());
        });
        res.push(titles, answ);
        quiz.actions.checks.checkAndPerform(quiz.state.answers[quiz.state.currentQuest] != undefined, quiz.utility.replaceStateAnswers.bind(this, res, quiz.state.currentQuest), quiz.utility.pushToStateAnswers.bind(this, res));
      },
      prepareList: function prepareList(index, json) {
        var list = $('[data-quiz-list]');
        list.removeClass();
        list.addClass('quiz-content__variants-list').addClass(quiz.actions.checks.checkRowType(index, json, "list"));
      },
      activateCards: function activateCards(state) {
        var arr = state.answers[state.currentQuest][1];
        $(arr).each(function (i, item) {
          $('.' + state.cardClassName).children('h3:contains' + "(" + item + ")").parent("li").addClass(state.cardClassName + "_active");
        });
      }
    },
    send: function send() {
      $.ajax({
        complete: function complete() {
          console.log('ajax complete');
          console.log(quiz.state.answers);
          $('[data-quiz-form]').fadeOut();
          setTimeout(function () {
            $('[data-quiz-text-container]').append("<h2 class=\"quiz-content__contacts-title\">\n                                                                    \u0421\u043F\u0430\u0441\u0438\u0431\u043E, \u0447\u0442\u043E \u043E\u0441\u0442\u0430\u0432\u0438\u043B\u0438 \u0434\u0430\u043D\u043D\u044B\u0435\n                                                                </h2>\n                                                                <p class=\"quiz-content__contacts-subtitle\">\n                                                                    \u041D\u0430\u0448\u0438 \u0441\u043F\u0435\u0446\u0438\u0430\u043B\u0438\u0441\u0442\u044B \u0441\u0432\u044F\u0436\u0443\u0442\u0441\u044F \u0441 \u0432\u0430\u043C\u0438 \u043A\u0430\u043A \u043C\u043E\u0436\u043D\u043E \u0441\u043A\u043E\u0440\u0435\u0435\n                                                                </p>");
          }, 500);
        }
      });
    },
    init: function init(json) {
      $('body').addClass('quiz-noscroll');
      this.state.totalQuest = json.dinamic.length;
      this.state.json = json;
      this.baseRender(json);
      this.dinamicRender();
    },
    remove: function remove() {
      $('body').removeClass('quiz-noscroll');
      $('#quiz').html('');
    }
  };

  function getBaseTemplate(json) {
    return "\n            <div class=\"quiz-wrapper\" data-quiz-wrapper>\n                    <span class=\"quiz-shadow\"></span>\n                <div class=\"quiz\">\n                    <div class=\"quiz-container\">\n                        <div class=\"quiz-content\">\n                            <h1 class=\"quiz-content__title-know\">\n                                ".concat(quiz.create.staticItems.createBaseItem(json, 'titleKnow', true), "\n                            </h1>\n                            <button class=\"quiz-content__btn-close\" data-quiz-close>\n                                <span></span>\n                                <span></span>\n                            </button>\n                            <div class=\"quiz-content__card\">\n                                <div class=\"quiz-content__card-side quiz-content__card-side--left\">\n                                    <h1 class=\"quiz-content__title-question\">\n                                        \n                                    </h1>\n                                    <ul class=\"quiz-content__variants-list quiz-content__variants-list--regular-list\" data-quiz-list>\n        \n                                    </ul>\n                                    <div class=\"quiz-content__progress\">\n                                        <div class=\"quiz-content__progress-bar\">\n                                            <span class=\"quiz-content__progress-bar--line\" data-quiz-progress></span>\n                                        </div>\n                                        <p class=\"quiz-content__progress-info\"><span data-quiz-current>1</span>-\u0439 \u0432\u043E\u043F\u0440\u043E\u0441 \u0438\u0437 ").concat(quiz.actions.checks.checkAmountQuests(json), "</p>\n                                    </div>\n                                    <div class=\"quiz-content__btns\">\n                                        <button class=\"quiz-btn quiz-content__btn quiz-content__btn-back\" data-quiz-back>\n                                            \u041D\u0430\u0437\u0430\u0434\n                                        </button>\n                                        <button class=\"quiz-btn quiz-content__btn quiz-content__btn-next\" data-quiz-next>\n                                            \u0414\u0430\u043B\u0435\u0435\n                                        </button>\n                                    </div>\n        \n                                </div>\n                                <div class=\"quiz-content__card-side quiz-content__card-side--right\">\n                                    <div class=\"quiz-content__person\">\n                                        <div class=\"quiz-content__person-img\">\n                                            <img src=\"").concat(quiz.create.staticItems.createBaseItem(json, 'srcImgPerson', true), "\" alt=\"person\">\n                                        </div>\n                                        <div class=\"quiz-content__person-desc\">\n                                            <h3>\n                                                ").concat(quiz.create.staticItems.createBaseItem(json, 'namePerson', true), "\n                                            </h3>\n                                            <small>\n                                                ").concat(quiz.create.staticItems.createBaseItem(json, 'descPerson', true), "\n                                            </small>\n                                        </div>\n                                    </div>\n                                    <svg class=\"quiz-content__polyline-wrap\">\n                                        <path d=\"M-2.40416e-06 29.5004L100 29.5004L100 2L130 29.5004L330 29.5004\" fill=\"none\" stroke=\"black\"/>                      \n                                    </svg>\n                                    <div class=\"quiz-content__about\">\n        \n                                    </div>\n                                    <div class=\"quiz-content__comp-logo\">\n                                        <img src=\"").concat(quiz.create.staticItems.createBaseItem(json, 'srcLogoPerson', true), "\" alt=\"company logo\">\n                                    </div>\n                                </div>\n                            </div>\n                        </div>\n                    </div>\n                </div>\n            </div>\n        ");
  }

  function getFinTemplate(json) {
    return "\n        <div class=\"quiz-wrapper\" data-quiz-wrapper data-quiz-wrapper>\n            <span class=\"quiz-shadow\"></span>\n            <div class=\"quiz\">\n                <div class=\"quiz-container\">\n                    <div class=\"quiz-content\">\n                        <h1 class=\"quiz-content__title-know quiz-content__title-know--fin\">\n                            ".concat(quiz.create.staticItems.createBaseItem(json, 'titleKnow', false), "\n                        </h1>\n                        <button class=\"quiz-content__btn-close quiz-content__btn-close--fin\" data-quiz-close>\n                            <span></span>\n                            <span></span>\n                        </button>\n                        <div class=\"quiz-content__card quiz-content__card--fin\">\n                            <div class=\"quiz-content__card-side quiz-content__card-side--left quiz-content__card-side--left-fin\">\n                                <div class=\"quiz-content__gratitude\">\n                                    ").concat(quiz.create.staticItems.createSomeBlocks(json, 'gratitude-text', false), "\n                                </div>\n                                <img class=\"quiz-content__fin-bg\" src=\"").concat(quiz.create.staticItems.createBaseItem(json, 'fin-bg', false), "\" alt=\"\">\n                            </div>\n                            <div class=\"quiz-content__card-side quiz-content__card-side--right quiz-content__card-side--right-fin\" data-quiz-text-container>\n                                <div class=\"quiz-content__contacts\">\n                                    <div class=\"quiz-content__contacts-add\">\n                                        <img class=\"quiz-content__sketch\" src=\"").concat(quiz.create.staticItems.createBaseItem(json, 'sketch-img', false), "\" alt=\"sketch\">\n                                        <h4>\n                                            ").concat(quiz.create.staticItems.createBaseItem(json, 'titleAdd', false), "\n                                        </h4>\n                                        ").concat(quiz.create.staticItems.createSomeBlocks(json, 'subtitleAdd', false), "\n                                    </div>\n    \n                                    <form action=\"\" class=\"quiz-content__contacts-form\" data-quiz-form>\n                                    <h2 class=\"quiz-content__contacts-title quiz-content__contacts-title--form\">\n                                        ").concat(quiz.create.staticItems.createBaseItem(json, 'titleContacts', false), "\n                                    </h2>\n                                    <p class=\"quiz-content__contacts-subtitle quiz-content__contacts-subtitle--form\">\n                                        ").concat(quiz.create.staticItems.createBaseItem(json, 'subtitleContacts', false), "\n                                    </p>\n                                        <input class=\"quiz-input\" type=\"tel\" placeholder=\"\u0422\u0435\u043B\u0435\u0444\u043E\u043D *\" required>\n                                        <input class=\"quiz-input\" type=\"email\" placeholder=\"Email *\" required>\n                                        <button class=\"quiz-btn\" type=\"submit\" data-quiz-send>").concat(quiz.create.staticItems.createBaseItem(json, 'btnForm', false), "</button>\n                                    </form>\n                                </div>\n                            </div>\n                        </div>\n                    </div>\n                </div>\n            </div>\n        </div>\n        \n        ");
  }

  $('[data-quiz-toggle]').click(function () {
    $.getJSON($(this).data('quiz-url'), function (data) {
      quiz.init(data);
    });
  });
});
"use strict";

$('[data-op-slider]').slick({
  slidesToShow: 4,
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
  var card = $('.tech-stack__item');

  function createTooltip(item) {
    var title = item.children('h4').text();
    var text = item.data('info');

    if (text) {
      return "<div class=\"tech-stack__tooltip-wrap\" data-ts-tooltip-wrap>\n                        <div class=\"tech-stack__tooltip\">\n                            <h5>\n                                ".concat(title, "\n                            </h5>\n                            <p>\n                                ").concat(text, "\n                            </p>\n                        </div>\n                    </div>");
    }
  }

  function removeTooltip(tooltip) {
    tooltip.slideUp();
    setTimeout(function () {
      tooltip.remove();
    }, 250);
  }

  function checkTooltip(target) {
    return $('[data-ts-tooltip-wrap]').is(target) || $('[data-ts-tooltip-wrap]').has(target).length == 0;
  }

  function appendTooltip(target) {
    if (card.is(target)) {
      if ($(target).children('.tech-stack__tooltip-wrap').length == 0 && checkTooltip(target)) {
        removeTooltip($('[data-ts-tooltip-wrap]'));
        $(target).append(createTooltip($(target)));
        $('[data-ts-tooltip-wrap]').slideDown();
      }
    } else if (card.has(target).length != 0) {
      if ($(target).parent().children('.tech-stack__tooltip-wrap').length == 0 && checkTooltip(target)) {
        removeTooltip($('[data-ts-tooltip-wrap]'));
        $($(target).parent()).append(createTooltip($(target).parent()));
        $('[data-ts-tooltip-wrap]').slideDown();
      }
    } else {
      removeTooltip($('[data-ts-tooltip-wrap]'));
    }
  }

  $('body').on('click', function (e) {
    var target = e.target;
    appendTooltip(target);
  });
});
// $(function() {
//     const quiz = {
//         state: {
//             currentQuest: 0,
//             totalQuest: 0,
//             json: "",
//             cardClassName: "",
//             answers: []
//         },
//         create: {
//             staticItems: {
//                 createBaseItem(json, name, base) {
//                     // return string value for base template tag
//                     if(base) {
//                         return json.base[name]
//                     }
//                     else {
//                         return json.fin[name]
//                     }
//                 },
//                 createSomeBlocks(json, name, base) {
//                     let sub = ``;
//                     if(base) {
//                         json.base[name].forEach(function(item) {
//                             sub += item;
//                         })
//                     }
//                     else {
//                         json.fin[name].forEach(function(item) {
//                             sub += item;
//                         })
//                     }
//                     console.log(sub)
//                     return sub
//                 }
//             },
//             dinamicItems: {
//                 createCards(index, json) {
//                     quiz.utility.prepareList(index, json);
//                     // this function have to return template string with all choices on quiz-page
//                     let items = ``;
//                     if(quiz.checks.checkRowType(index, json, 'item') == 'quiz-content__variants-item--regular-card') {
//                         for (let i = 0; i < json.dinamic[index].cardData.cardInfo.length; i++) {
//                             items += `
//                                     <li class="quiz-content__variants-item ${quiz.checks.checkRowType(index, json, 'item')}">
//                                         <div class="quiz-content__variant-img">
//                                             <img src="${json.dinamic[index].cardData.cardInfo[i][1]}" alt="">     
//                                         </div>
//                                         <h3 class="quiz-content__variant-title">${json.dinamic[index].cardData.cardInfo[i][0]}</h3>
//                                     </li>  
//                             `
//                         }
//                     }
//                     else if(quiz.checks.checkRowType(index, json, 'item') == 'quiz-content__variants-item--linear-card') {
//                         for (let i = 0; i < json.dinamic[index].cardData.cardInfo.length; i++) {
//                             items += `
//                                     <li class="quiz-content__variants-item ${quiz.checks.checkRowType(index, json, 'item')}">
//                                         <h3 class="quiz-content__variant-title">${json.dinamic[index].cardData.cardInfo[i][0]}</h3>
//                                     </li>  
//                             `
//                         }
//                     }
//                     $('.quiz-content__variants-list').html(items);
//                 },
//                 createQuestTitle(index) {
//                     let res = quiz.state.json.dinamic[index].cardData['titleQuestion']
//                     $('.quiz-content__title-question').text(res)
//                 },
//                 createAboutText(index) {
//                     let res = ``;
//                     quiz.state.json.dinamic[index].personData['aboutText'].forEach(el => {
//                         res += el;
//                     });
//                     $('.quiz-content__about').html(res)
//                 },
//                 createCurrentNumber(index) {
//                     let res = index + 1
//                     $('[data-quiz-current]').text(res)
//                 },
//                 createCheckbox(parentClassName) {
//                     $('.' + parentClassName).append(`<input type="checkbox" class="quiz-content__variant-checkbox">`)
//                 }
//             }
//         },
//         checks: {
//             checkRowType(index, json, elem) {
//                 if (elem == "list") {
//                     switch(json.dinamic[index].cardSettings.rowType) {
//                         case 2:
//                             return 'quiz-content__variants-list--regular-list'
//                         case 'linear':
//                             return 'quiz-content__variants-list--linear-list'
//                         default:
//                             console.error('error case')
//                     }
//                 }
//                 else if (elem == "item") {
//                     switch(json.dinamic[index].cardSettings.rowType) {
//                         case 2:
//                             quiz.state.cardClassName = 'quiz-content__variants-item--regular-card'
//                             return 'quiz-content__variants-item--regular-card'
//                         case 'linear':
//                             quiz.state.cardClassName = 'quiz-content__variants-item--linear-card'
//                             return 'quiz-content__variants-item--linear-card'
//                         default:
//                             console.error('error case')
//                     }
//                 }
//             },
//             checkAmountQuests(json) {
//                 quiz.state.totalQuest = json.dinamic.length;
//                 return json.dinamic.length
//             },
//             checkCurrentQuest() {
//                 return quiz.state.currentQuest
//             },
//             checkProgress() {
//                 let amount = quiz.state.totalQuest;
//                 let current = quiz.state.currentQuest;
//                 let progress = (current * (100 / amount))
//                 $('[data-quiz-progress]').css('width', progress + '%')
//                 return progress;
//             }
//         },
//         baseRender(json) {
//             let progress = this.checks.checkProgress();
//             if(progress != 100) {
//                 // function getBaseTemplate will return completed base template
//                 let templ = getBaseTemplate(json);
//                 $('#quiz').html(templ);
//                 this.checks.checkAmountQuests(json);
//                 // binding static btns for events
//                 this.actions.binds.bindBtnNext($('[data-quiz-next]'));
//                 this.actions.binds.bindBtnBack($('[data-quiz-back]'));
//                 this.actions.binds.bindBtnClose($('[data-quiz-close]'));
//                 this.checks.checkProgress()
//             }
//             else {
//                 // function getFinTemplate will return completed base fin-template
//                 let templ = getFinTemplate(json);
//                 $('#quiz').html(templ);
//                 // binding static btns for events
//                 this.actions.binds.bindBtnSend($('[data-quiz-send]'));
//                 this.actions.binds.bindBtnClose($('[data-quiz-close]'));
//                 this.checks.checkProgress()
//             }
//         },
//         dinamicRender() {
//             quiz.create.dinamicItems.createAboutText(quiz.state.currentQuest);
//             quiz.create.dinamicItems.createCards(quiz.state.currentQuest, quiz.state.json);
//             quiz.create.dinamicItems.createCurrentNumber(quiz.state.currentQuest);
//             quiz.create.dinamicItems.createQuestTitle(quiz.state.currentQuest);
//             // binding dinamic cards for event
//             this.actions.binds.bindCard(this.state.cardClassName);
//         },
//         update() {
//             let progress = this.checks.checkProgress();
//             if(progress != 100) {
//                 this.dinamicRender();
//             }
//             else {
//                 this.baseRender(quiz.state.json);
//             }
//         },
//         actions: {
//             binds: {
//                 bindBtnNext(selector) {
//                     selector.click(function() {
//                         quiz.state.currentQuest++;
//                         quiz.utility.setAnswers();
//                         quiz.update();
//                         quiz.utility.hideBtn('quiz-content__btn')
//                     })
//                 },
//                 bindBtnBack(selector) {
//                     selector.click(function() {
//                         if(quiz.state.currentQuest > 0) {
//                             quiz.state.currentQuest--;
//                             quiz.state.answers.pop()
//                             quiz.update();
//                             quiz.utility.hideBtn('quiz-content__btn')
//                         }
//                     })
//                 },
//                 bindBtnSend(selector) {
//                     selector.click(function(e) {
//                         e.preventDefault();
//                         quiz.send();
//                     })
//                 },
//                 bindBtnClose(selector) {
//                     selector.click(function(e) {
//                         quiz.remove();
//                     })
//                 },
//                 bindCard(className) {
//                     // multiselect == false
//                     if (!quiz.state.json.dinamic[quiz.state.currentQuest].cardSettings.multiSelect) {
//                         $('.' + className).click(function () {
//                             $('.' + className).removeClass(className + '_active')
//                             $(this).addClass(className + '_active')
//                             quiz.utility.showBtn('quiz-content__btn')
//                         })
//                     }
//                     // multiselect == true!
//                     else {
//                         // append on card checkbox
//                         quiz.create.dinamicItems.createCheckbox(className);
//                         $('.' + className).click(function () {
//                             $(this).toggleClass(className + '_active')
//                             if($(this).children('input').prop('checked')) {
//                                 $(this).children('input').prop('checked', false)
//                             }
//                             else {
//                                 $(this).children('input').prop('checked', true)
//                             }    
//                             quiz.utility.showBtn('quiz-content__btn')
//                         })
//                     }
//                 }
//             },
//         },
//         utility: {
//             showBtn(className) {
//                 $('.' + className).addClass(className + '_active');
//             },
//             hideBtn(className) {
//                 $('.' + className).removeClass(className + '_active');
//             },
//             setAnswers() {
//                 let res = [];
//                 let titles = $('.quiz-content__title-question').text();
//                 let children = $('.' + quiz.state.cardClassName + '_active').children('.quiz-content__variant-title');
//                 let answ = [];
//                 children.each(function(i, elem) {
//                     answ.push($(elem).text());
//                 })
//                 res.push(titles, answ);
//                 quiz.state.answers.push(res);
//             },
//             prepareList(index, json) {
//                 let list = $('[data-quiz-list]')
//                 list.removeClass();
//                 list.addClass('quiz-content__variants-list').addClass(quiz.checks.checkRowType(index, json, "list"))
//             }
//         },
//         send() {
//             $.ajax({
//                 complete: function() {
//                     console.log('ajax complete');
//                     console.log(quiz.state.answers);
//                     $('[data-quiz-form]').fadeOut()
//                     setTimeout(function() {
//                         $('[data-quiz-text-container]').append(`<h2 class="quiz-content__contacts-title">
//                                                                     Спасибо, что оставили данные
//                                                                 </h2>
//                                                                 <p class="quiz-content__contacts-subtitle">
//                                                                     Наши специалисты свяжутся с вами как можно скорее
//                                                                 </p>`)
//                     }, 500).fadeIn()
//                 }
//              });
//         },
//         init(json) {
//             $('body').addClass('quiz-noscroll')
//             this.state.totalQuest = json.dinamic.length;
//             this.state.json = json;
//             this.baseRender(json);
//             this.dinamicRender();
//         },
//         remove() {
//             $('body').removeClass('quiz-noscroll')
//             $('#quiz').html('')
//         }
//     }
//     function getBaseTemplate(json) {
//         return `
//             <div class="quiz-wrapper" data-quiz-wrapper>
//                     <span class="quiz-shadow"></span>
//                 <div class="quiz">
//                     <div class="quiz-container">
//                         <div class="quiz-content">
//                             <h1 class="quiz-content__title-know">
//                                 ${quiz.create.staticItems.createBaseItem(json, 'titleKnow', true)}
//                             </h1>
//                             <button class="quiz-content__btn-close" data-quiz-close>
//                                 <span></span>
//                                 <span></span>
//                             </button>
//                             <div class="quiz-content__card">
//                                 <div class="quiz-content__card-side quiz-content__card-side--left">
//                                     <h1 class="quiz-content__title-question">
//                                     </h1>
//                                     <ul class="quiz-content__variants-list quiz-content__variants-list--regular-list" data-quiz-list>
//                                     </ul>
//                                     <div class="quiz-content__progress">
//                                         <div class="quiz-content__progress-bar">
//                                             <span class="quiz-content__progress-bar--line" data-quiz-progress></span>
//                                         </div>
//                                         <p class="quiz-content__progress-info"><span data-quiz-current>1</span>-й вопрос из ${quiz.checks.checkAmountQuests(json)}</p>
//                                     </div>
//                                     <div class="quiz-content__btns">
//                                         <button class="quiz-btn quiz-content__btn quiz-content__btn-back" data-quiz-back>
//                                             Назад
//                                         </button>
//                                         <button class="quiz-btn quiz-content__btn quiz-content__btn-next" data-quiz-next>
//                                             Далее
//                                         </button>
//                                     </div>
//                                 </div>
//                                 <div class="quiz-content__card-side quiz-content__card-side--right">
//                                     <div class="quiz-content__person">
//                                         <div class="quiz-content__person-img">
//                                             <img src="${quiz.create.staticItems.createBaseItem(json, 'srcImgPerson', true)}" alt="person">
//                                         </div>
//                                         <div class="quiz-content__person-desc">
//                                             <h3>
//                                                 ${quiz.create.staticItems.createBaseItem(json, 'namePerson', true)}
//                                             </h3>
//                                             <small>
//                                                 ${quiz.create.staticItems.createBaseItem(json, 'descPerson', true)}
//                                             </small>
//                                         </div>
//                                     </div>
//                                     <svg class="quiz-content__polyline-wrap">
//                                         <path d="M-2.40416e-06 29.5004L100 29.5004L100 2L130 29.5004L330 29.5004" fill="none" stroke="black"/>                      
//                                     </svg>
//                                     <div class="quiz-content__about">
//                                     </div>
//                                     <div class="quiz-content__comp-logo">
//                                         <img src="${quiz.create.staticItems.createBaseItem(json, 'srcLogoPerson', true)}" alt="company logo">
//                                     </div>
//                                 </div>
//                             </div>
//                         </div>
//                     </div>
//                 </div>
//             </div>
//         `
//     }
//     function getFinTemplate(json) {
//         return `
//         <div class="quiz-wrapper" data-quiz-wrapper data-quiz-wrapper>
//             <span class="quiz-shadow"></span>
//             <div class="quiz">
//                 <div class="quiz-container">
//                     <div class="quiz-content">
//                         <h1 class="quiz-content__title-know quiz-content__title-know--fin">
//                             ${quiz.create.staticItems.createBaseItem(json, 'titleKnow', false)}
//                         </h1>
//                         <button class="quiz-content__btn-close quiz-content__btn-close--fin" data-quiz-close>
//                             <span></span>
//                             <span></span>
//                         </button>
//                         <div class="quiz-content__card quiz-content__card--fin">
//                             <div class="quiz-content__card-side quiz-content__card-side--left quiz-content__card-side--left-fin">
//                                 <div class="quiz-content__gratitude">
//                                     ${quiz.create.staticItems.createSomeBlocks(json, 'gratitude-text', false)}
//                                 </div>
//                                 <img class="quiz-content__fin-bg" src="${quiz.create.staticItems.createBaseItem(json, 'fin-bg', false)}" alt="">
//                             </div>
//                             <div class="quiz-content__card-side quiz-content__card-side--right quiz-content__card-side--right-fin" data-quiz-text-container>
//                                 <div class="quiz-content__contacts">
//                                     <div class="quiz-content__contacts-add">
//                                         <img class="quiz-content__sketch" src="${quiz.create.staticItems.createBaseItem(json, 'sketch-img', false)}" alt="sketch">
//                                         <h4>
//                                             ${quiz.create.staticItems.createBaseItem(json, 'titleAdd', false)}
//                                         </h4>
//                                         ${quiz.create.staticItems.createSomeBlocks(json, 'subtitleAdd', false)}
//                                     </div>
//                                     <form action="" class="quiz-content__contacts-form" data-quiz-form>
//                                     <h2 class="quiz-content__contacts-title quiz-content__contacts-title--form">
//                                         ${quiz.create.staticItems.createBaseItem(json, 'titleContacts', false)}
//                                     </h2>
//                                     <p class="quiz-content__contacts-subtitle quiz-content__contacts-subtitle--form">
//                                         ${quiz.create.staticItems.createBaseItem(json, 'subtitleContacts', false)}
//                                     </p>
//                                         <input class="quiz-input" type="tel" placeholder="Телефон *">
//                                         <input class="quiz-input" type="email" placeholder="Email *">
//                                         <button class="quiz-btn" type="submit" data-quiz-send>${quiz.create.staticItems.createBaseItem(json, 'btnForm', false)}</button>
//                                     </form>
//                                 </div>
//                             </div>
//                         </div>
//                     </div>
//                 </div>
//             </div>
//         </div>
//         `
//     }
//     $('[data-quiz-toggle]').click(function() {
//         $.getJSON($(this).data('quiz-url'), function(data) {
//             quiz.init(data)
//         })
//     })
// })
"use strict";
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
    var hours = parseInt($(this).data('deadline'));
    time.text("\u043E\u0442 ".concat(hours, " ").concat(hours === 1 ? 'часа' : 'часов'));
    $arrow.css('transform', "rotate(".concat($(this).data('deadline') * 45 / 1.5, "deg)"));
  });
});
//# sourceMappingURL=app.js.map
