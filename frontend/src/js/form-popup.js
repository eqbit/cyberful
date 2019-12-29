$(function () {
    let shadow = $('[data-popup-form-shadow]');
    let popup = $('[data-popup-form-item]');

    $('[data-popup-form-toggle]').click(function () {
        let info = $(this).data("info");
        if(info != "") {
            popup.children("h3").text(info)
        }
        shadow.fadeIn();
        setTimeout(function () {
            popup.fadeIn()
        }, 400)
    })

    shadow.add($('[data-popup-form-close]')).click(function (e) {
        popup.fadeOut();
        setTimeout(function () {
            shadow.fadeOut()
        }, 400)
    })
})