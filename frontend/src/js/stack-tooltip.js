$(function () {
    let card = $('.tech-stack__item');

    function createTooltip(item) {
        let title = item.children('h4').text();
        let text = item.data('info');
        if(text) {
            return  `<div class="tech-stack__tooltip-wrap" data-ts-tooltip-wrap>
                        <div class="tech-stack__tooltip">
                            <h5>
                                ${title}
                            </h5>
                            <p>
                                ${text}
                            </p>
                        </div>
                    </div>`
        }
    }

    function removeTooltip(tooltip) {
        tooltip.slideUp()
        setTimeout(() => {
            tooltip.remove()
        }, 250);
    }

    function checkTooltip(target) {
        return $('[data-ts-tooltip-wrap]').is(target) || $('[data-ts-tooltip-wrap]').has(target).length == 0
    }

    function appendTooltip(target) {
        if(card.is(target)) {
            if($(target).children('.tech-stack__tooltip-wrap').length == 0 && checkTooltip(target)) {
                removeTooltip($('[data-ts-tooltip-wrap]'));
                $(target).append(createTooltip($(target)));
                $('[data-ts-tooltip-wrap]').slideDown();
            }
        }
        else if(card.has(target).length != 0) {
            if($(target).parent().children('.tech-stack__tooltip-wrap').length == 0 && checkTooltip(target)) {
                removeTooltip($('[data-ts-tooltip-wrap]'));
                $($(target).parent()).append(createTooltip($(target).parent()))
                $('[data-ts-tooltip-wrap]').slideDown()
            }
        }
        else {
            removeTooltip($('[data-ts-tooltip-wrap]'));
        }
    }

    $('body').on('click', function(e) {
        let target = e.target
        appendTooltip(target)
    })
})