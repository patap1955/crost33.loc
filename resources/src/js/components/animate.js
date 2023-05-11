document.addEventListener("DOMContentLoaded", () => {
    // Логическая функция вывода анимация
    // elem - массив блоков или отдельный блок для анимации
    // className - класс отвечающий за анимацию

    function animate(elem, className = "animate") {
        let windowCenter = (window.innerHeight / 1.1) + window.scrollY; // ширина экрана * 1.1 + высота на сколько просролили экран
        elem.forEach(el => {

            let observer = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        return entry.target.classList.add(className);
                    }
                });
            });

            let scrollOffset = el.offsetParent.offsetTop + (el.offsetHeight / 2);
            if (windowCenter >= scrollOffset) {
                observer.observe(el);
            }
        });
    }

    // animate__backInDown
    const sectionsTitle = document.querySelectorAll('.sections__title')
    const portfolioTitle = document.querySelectorAll('.portfolio__title')
    const aboutAsImg = document.querySelectorAll('.about-as__img')
    const aboutAsInfo = document.querySelectorAll('.about-as__info')
    const aboutAsBaseInfoItem = document.querySelectorAll('.about-as__base-info-item')
    const grandAnimateLeft = document.querySelectorAll('.grandAnimateLeft')
    const grandAnimateRight = document.querySelectorAll('.grandAnimateRight')
    const grandAnimateCenter = document.querySelectorAll('.grandAnimateCenter')
    const servicesItemLeft = document.querySelectorAll('.servicesItemLeft')
    const servicesItemCenter = document.querySelectorAll('.servicesItemCenter')
    const servicesItemRight = document.querySelectorAll('.servicesItemRight')
    const partnersFotoAnimateLeft = document.querySelectorAll('.partnersFotoAnimateLeft')
    const partnersFotoAnimateCenter = document.querySelectorAll('.partnersFotoAnimateCenter')
    const partnersFotoAnimateRight = document.querySelectorAll('.partnersFotoAnimateRight')
    const whatOfferAnimateLeft = document.querySelectorAll('.whatOfferAnimateLeft')
    const whatOfferAnimateCenter = document.querySelectorAll('.whatOfferAnimateCenter')
    const whatOfferAnimateRight = document.querySelectorAll('.whatOfferAnimateRight')
    const swiperSlideInfoTitle = document.querySelectorAll('.swiper-slide__info-title')
    const swiperSlideInfoText = document.querySelectorAll('.swiper-slide__info-text')
    const swiperSlideInfoButton = document.querySelectorAll('.swiper-slide__info-button')
    const servicesFirstScreenTitle = document.querySelectorAll('.services-first-screen__title')
    const servicesFirstScreenText = document.querySelectorAll('.services-first-screen__text')
    const servicesFirstScreenButton = document.querySelectorAll('.services-first-screen__button')
    const servicesInfoText = document.querySelectorAll('.services-info__text')
    const servicesInfoImg = document.querySelectorAll('.services-info__img')
    const pricesTableTr = document.querySelectorAll('.prices__table-tr')
    const pricesTableMobileLine = document.querySelectorAll('.prices__table-mobile-line')

    if (sectionsTitle) animate(sectionsTitle, 'animate__backInDown')
    if (portfolioTitle) animate(portfolioTitle, 'animate__backInDown')
    if (aboutAsImg) animate(aboutAsImg, 'animate__backInLeft')
    if (aboutAsInfo) animate(aboutAsInfo, 'animate__backInRight')
    if (grandAnimateLeft) animate(grandAnimateLeft, 'animate__backInLeft')
    if (grandAnimateRight) animate(grandAnimateRight, 'animate__backInRight')
    if (grandAnimateCenter) animate(grandAnimateCenter, 'animate__zoomIn')
    if (servicesItemLeft) animate(servicesItemLeft, 'animate__backInLeft')
    if (servicesItemCenter) animate(servicesItemCenter, 'animate__zoomIn')
    if (servicesItemRight) animate(servicesItemRight, 'animate__backInRight')
    if (partnersFotoAnimateLeft) animate(partnersFotoAnimateLeft, 'animate__backInLeft')
    if (partnersFotoAnimateCenter) animate(partnersFotoAnimateCenter, 'animate__zoomIn')
    if (partnersFotoAnimateRight) animate(partnersFotoAnimateRight, 'animate__backInRight')
    if (whatOfferAnimateLeft) animate(whatOfferAnimateLeft, 'animate__backInLeft')
    if (whatOfferAnimateCenter) animate(whatOfferAnimateCenter, 'animate__zoomIn')
    if (whatOfferAnimateRight) animate(whatOfferAnimateRight, 'animate__backInRight')
    if (swiperSlideInfoTitle) animate(swiperSlideInfoTitle, 'animate__zoomIn')
    if (swiperSlideInfoText) animate(swiperSlideInfoText, 'animate__zoomIn')
    if (swiperSlideInfoButton) animate(swiperSlideInfoButton, 'animate__zoomIn')
    if (servicesFirstScreenTitle) animate(servicesFirstScreenTitle, 'animate__zoomIn')
    if (servicesFirstScreenText) animate(servicesFirstScreenText, 'animate__zoomIn')
    if (servicesFirstScreenButton) animate(servicesFirstScreenButton, 'animate__zoomIn')
    if (servicesInfoText) animate(servicesInfoText, 'animate__backInLeft')
    if (servicesInfoImg) animate(servicesInfoImg, 'animate__backInRight')
    if (pricesTableTr) animate(pricesTableTr, 'animate__zoomIn')
    if (pricesTableMobileLine) animate(pricesTableMobileLine, 'animate__zoomIn')

    window.addEventListener("scroll", () => {
        if (sectionsTitle) animate(sectionsTitle, 'animate__backInDown')
        if (portfolioTitle) animate(portfolioTitle, 'animate__backInDown')
        if (aboutAsImg) animate(aboutAsImg, 'animate__backInLeft')
        if (aboutAsInfo) animate(aboutAsInfo, 'animate__backInRight')
        if (grandAnimateLeft) animate(grandAnimateLeft, 'animate__backInLeft')
        if (grandAnimateRight) animate(grandAnimateRight, 'animate__backInRight')
        if (grandAnimateCenter) animate(grandAnimateCenter, 'animate__zoomIn')
        if (servicesItemLeft) animate(servicesItemLeft, 'animate__backInLeft')
        if (servicesItemCenter) animate(servicesItemCenter, 'animate__zoomIn')
        if (servicesItemRight) animate(servicesItemRight, 'animate__backInRight')
        if (partnersFotoAnimateLeft) animate(partnersFotoAnimateLeft, 'animate__backInLeft')
        if (partnersFotoAnimateCenter) animate(partnersFotoAnimateCenter, 'animate__zoomIn')
        if (partnersFotoAnimateRight) animate(partnersFotoAnimateRight, 'animate__backInRight')
        if (whatOfferAnimateLeft) animate(whatOfferAnimateLeft, 'animate__backInLeft')
        if (whatOfferAnimateCenter) animate(whatOfferAnimateCenter, 'animate__zoomIn')
        if (whatOfferAnimateRight) animate(whatOfferAnimateRight, 'animate__backInRight')
        if (swiperSlideInfoTitle) animate(swiperSlideInfoTitle, 'animate__zoomIn')
        if (swiperSlideInfoText) animate(swiperSlideInfoText, 'animate__zoomIn')
        if (swiperSlideInfoButton) animate(swiperSlideInfoButton, 'animate__zoomIn')
        if (servicesFirstScreenTitle) animate(servicesFirstScreenTitle, 'animate__zoomIn')
        if (servicesFirstScreenText) animate(servicesFirstScreenText, 'animate__zoomIn')
        if (servicesFirstScreenButton) animate(servicesFirstScreenButton, 'animate__zoomIn')
        if (servicesInfoText) animate(servicesInfoText, 'animate__backInLeft')
        if (servicesInfoImg) animate(servicesInfoImg, 'animate__backInRight')
        if (pricesTableTr) animate(pricesTableTr, 'animate__zoomIn')
        if (pricesTableMobileLine) animate(pricesTableMobileLine, 'animate__zoomIn')
    });
});
