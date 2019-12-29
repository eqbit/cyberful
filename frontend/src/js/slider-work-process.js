$(function() {
    var swiper = new Swiper('.swiper-container' , {
        effect: 'flip',
        grabCursor: true,
        pagination: {
          el: '.work-process__icon-slider--dots',
        },
        navigation: {
          nextEl: '.work-process__icon-slider--arrow-next',
          prevEl: '.work-process__icon-slider--arrow-prev',
        },
      });

})