$(function () {
  let tab = $('.tabs-deadline__tab');
  let point = $('.tabs-deadline__point');
  let titles = $('.tabs-deadline__item-title');
  let dots = $('.tabs-deadline__inside-dot');
  let time = $('.tabs-deadline__watch-time');
  let $arrow = $('[data-deadline-arrow]');
  
  let $deadlines = $('[data-deadlines]');

  const checkLazy = () => {
    if(!$deadlines.data("lazy")) {
      $('[data-deadline-screen]').addClass('visible')
      point.eq(0).addClass('tabs-deadline__point_active');
      point.eq(0).children().addClass('tabs-deadline__inside-dot_active');
    }
    else {
      $(window).on('scroll', checkViewport);
    }
  }

  const checkViewport = () => {
    if($deadlines.visible()) {
      $(window).off('scroll', checkViewport);
      
      for(let i = 1; i < 6; i++) {
        setTimeout(() => {
          $('[data-deadline]').eq(i).addClass('visible');
        }, i * 100)
      }
  
      setTimeout(() => {
        $('[data-deadline-screen]').addClass('visible');
      }, 1000);
      
      setTimeout(() => {
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
    const time = parseInt($(this).data('deadline'));
    time.text(`от ${time} ${time === 1 ? 'часа' : 'часов'}`);
    
    $arrow.css('transform', `rotate(${$(this).data('deadline') * 45 / 1.5}deg)`);
  });
});

