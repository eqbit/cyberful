if (document.querySelector('#map')) {

    function loadScript(url, callback) {

        var script = document.createElement('script');

        if (script.readyState) {  //IE
            script.onreadystatechange = function () {
                if (script.readyState === 'loaded' ||
                    script.readyState === 'complete') {
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
    }

    let $map = $('#map')
    let mapTimeout;

    let ymap = function () {
        if (!$map.is('.loaded') && $map.data("lazy") == true) {
            $(window).on('scroll', ymapCallback);
        }
        else {
            $map.addClass('loaded');
            loadScript('https://api-maps.yandex.ru/2.1/?apikey=b651fec1-d70f-4c48-a6fa-393232c5cf36&lang=ru_RU', function () {
                ymaps.load(init);
            });
        }
    };

    let ymapCallback = function () {
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

    function init() {
        // Создание карты.    
        let myMap = new ymaps.Map("map", {
            center: [57.120006, 65.626630],
            zoom: 17,

            // 57.120006, 65.626630 - office coordinates
        }, {
            searchControlProvider: 'yandex#search'
        }),
            myGeoObject = new ymaps.GeoObject(),
            myPieChart = new ymaps.Placemark();

        myMap.geoObjects
            .add(myGeoObject)
            .add(myPieChart)
            .add(new ymaps.Placemark([57.120006, 65.626630], {
                balloonContent: ''
            }, {
                preset: 'islands#icon',
                iconColor: '#4EB8F4'
            }))
    }

}


