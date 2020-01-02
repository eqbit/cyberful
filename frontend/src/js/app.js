$(function () {
  if (document.querySelector('#typed')) {
    let typed = new Typed('#typed', {
      strings: [
        'Bitrix',
        'React/Typescript/Mobx',
        'Wordpress',
        'Сайты-визитки, лэндинги, корпоративные сайты'
      ],
      startDelay: 500,
      typeSpeed: 60,
      loop: true,
      backSpeed: 20,
      backDelay: 2000
    });
  }
  
  let $visibles = $('[data-check-visibility]');
  
  if ($visibles.length) {
    $(window).on('scroll', function () {
      $visibles.each(function () {
        let $item = $(this);
        
        if ($item.visible(true)) {
          $item.addClass('visible');
        }
      });
    });
  }

  $('[data-phone]').inputmask({mask: '+7(999)999-99-99'})
});