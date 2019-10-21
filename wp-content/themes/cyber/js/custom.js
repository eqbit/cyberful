$(function () {
  var $successMessage = $('' +
    '<div class="success-message">' +
    '   <div class="success-message__title">Спасибо! Ваше сообщение отправлено</div>' +
    '   <div class="success-message__subtitle">Мы свяжемся с вами в течении рабочего дня</div>' +
    '</div>');
  
  $('[data-form-handle]').on('submit', function (e) {
    e.preventDefault();
    var $form = $(this),
      data = $form.serialize();
    
    $.ajax({
      url: '/wp-admin/admin-ajax.php',
      data: data + '&action=form_handle',
      type: 'POST',
      dataType: 'json',
      success: function () {
        $form.html($successMessage);
        
        setTimeout(() => {
          $form.fadeOut();
          setTimeout(function () {
            $('[data-popup-form-item]').fadeIn();
          }, 200);
        }, 2000);
      },
      error: function (response) {
        console.error(response);
      }
    });
  });
});