$(function () {
    let menu = $('[data-m-menu-nav]');
    let status = false;

    $('[data-toggle-m-menu-ham]').click(animation);
    // $('[data-toggle-m-menu-ham-hiden]').click()

    function animation() {
        $('[data-toggle-m-menu-ham]').toggleClass('m-menu__hamburger_active')
        $('[data-m-menu]').toggleClass('m-menu_active')
    }
})

