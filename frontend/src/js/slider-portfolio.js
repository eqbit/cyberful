$(function() {
    let typed = {};

    const resetTyped = (selector, newText = '', delay = 0, speed = 10, onComplete = () => {}) => {
        if(typed[selector] && typed[selector].constructor === Typed) {
            typed[selector].destroy();
        }

        if(newText.length > 154) {
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

    let title = '[data-sp-title]',
        text = '[data-sp-text]',
        $slider = $('[data-sp-carousel]'),
        $link = $('[data-sp-link]');

    $slider.on('beforeChange swipe', () => {
        $(title).removeClass('underline').html('');
        $(text).html('');

        $link.addClass('invisible');

        resetTyped(title);
        resetTyped(text);
    }).on('afterChange', (event, slick, currentSlide) => {
        let dataset = slick.$slides[currentSlide].dataset;

        resetTyped(title, dataset.title, 0, 20, () => {
            $(title).addClass('underline');
            $link.attr('href', dataset.link).removeClass('invisible');
            resetTyped(text, dataset.text, 100, 15);
        });
    })
        .slick({
        prevArrow: $('[data-sp-arrow-prev]'),
        nextArrow: $('[data-sp-arrow-next]'),
        fade: true,
        speed: 300
    });
});