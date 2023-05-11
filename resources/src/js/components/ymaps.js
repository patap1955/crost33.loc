import ymaps from 'ymaps';
(() => {
    ymaps
        .load("https://api-maps.yandex.ru/2.1/?lang=ru_RU")
        .then(maps => {
            const map = new maps.Map('contacts__block-map', {
                center: [56.094324, 40.355817],
                zoom: 16
            },
                { yandexMapDisablePoiInteractivity: true, },
                {
                    searchControlProvider: 'yandex#search'
                }
            );
            const placemark = new maps.Placemark( map.getCenter(),
                {
                    iconLayout: 'default#image',
                    iconImageSize: [ 50, 50 ],
                    iconImageOffset: [ -8, -72 ]
                }
            );
            map.geoObjects.add( placemark );

        })
        .catch(error => console.log('Failed to load Yandex Maps', error));
})()
