<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="description" content="" />
        <title>Document</title>
        <link rel="stylesheet" href="{{ mix('/assets/css/main.css') }}">
    </head>
    <body>
    <header>
        <div class="swiper-container">
            <div class="headerSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide swiper-slide__container-1">
                        <div class="container swiper-slide__container">
                            <div class="swiper-slide__info">
                                <h1 class="swiper-slide__info-title">Производство асфальтобетонных смесей</h1>
                                <p class="swiper-slide__info-text">Компания «Крост» работает на строительном рынке и производит готовые смеси. Наш завод стал известен как надежный и ответственный поставщик строительных материалов.</p>
                                <div class="swiper-slide__info-button">
                                    <a href="#form" class="btn-yellow">
                                        <img class="btn-border-left" src="{{ asset("/assets/img/border-button-left.png") }}">
                                        <img class="btn-border-right" src="{{ asset("/assets/img/border-button-right.png") }}">
                                        Оставить заявку
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide__img swiper-slide__img-1">
                                <img class="swiper-slide__img-car1" src="{{ asset("/assets/img/car-1.png") }}">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide__container-2">
                        <div class="container swiper-slide__container">
                            <div class="swiper-slide__info">
                                <h1 class="swiper-slide__info-title">Аренда спецтехнки</h1>
                                <p class="swiper-slide__info-text">Компания «Крост» работает на строительном рынке и производит готовые смеси. Наш завод стал известен как надежный и ответственный поставщик строительных материалов.</p>
                                <div class="swiper-slide__info-button">
                                    <a href="#form" class="btn-yellow">
                                        <img class="btn-border-left" src="{{ asset("/assets/img/border-button-left.png") }}">
                                        <img class="btn-border-right" src="{{ asset("/assets/img/border-button-right.png") }}">
                                        Оставить заявку
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide__img swiper-slide__img-2">
                                <img class="swiper-slide__img-car1" src="{{ asset("/assets/img/car-2.png") }}">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide__container-3">
                        <div class="container swiper-slide__container">
                            <div class="swiper-slide__info">
                                <h1 class="swiper-slide__info-title">Строительство дорог во Владимире</h1>
                                <p class="swiper-slide__info-text">Компания «Крост» работает на строительном рынке и производит готовые смеси. Наш завод стал известен как надежный и ответственный поставщик строительных материалов.</p>
                                <div class="swiper-slide__info-button">
                                    <a href="#form" class="btn-yellow">
                                        <img class="btn-border-left" src="{{ asset("/assets/img/border-button-left.png") }}">
                                        <img class="btn-border-right" src="{{ asset("/assets/img/border-button-right.png") }}">
                                        Оставить заявку
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide__img swiper-slide__img-3">
                                <img class="swiper-slide__img-car1" src="{{ asset("/assets/img/car-3.png") }}">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide__container-4">
                        <div class="container swiper-slide__container">
                            <div class="swiper-slide__info">
                                <h1 class="swiper-slide__info-title">Аренда спецтехнки</h1>
                                <p class="swiper-slide__info-text">Компания «Крост» работает на строительном рынке и производит готовые смеси. Наш завод стал известен как надежный и ответственный поставщик строительных материалов.</p>
                                <div class="swiper-slide__info-button">
                                    <a href="#form" class="btn-yellow">
                                        <img class="btn-border-left" src="{{ asset("/assets/img/border-button-left.png") }}">
                                        <img class="btn-border-right" src="{{ asset("/assets/img/border-button-right.png") }}">
                                        Оставить заявку
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide__img swiper-slide__img-4">
                                <img class="swiper-slide__img-car1" src="{{ asset("/assets/img/car-4.png") }}">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide__container-5">
                        <div class="container swiper-slide__container">
                            <div class="swiper-slide__info">
                                <h1 class="swiper-slide__info-title">Строительство дорог во Владимире</h1>
                                <p class="swiper-slide__info-text">Компания «Крост» работает на строительном рынке и производит готовые смеси. Наш завод стал известен как надежный и ответственный поставщик строительных материалов.</p>
                                <div class="swiper-slide__info-button">
                                    <a href="#form" class="btn-yellow">
                                        <img class="btn-border-left" src="{{ asset("/assets/img/border-button-left.png") }}">
                                        <img class="btn-border-right" src="{{ asset("/assets/img/border-button-right.png") }}">
                                        Оставить заявку
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide__img swiper-slide__img-5">
                                <img class="swiper-slide__img-car1" src="{{ asset("/assets/img/car-5.png") }}">
                            </div>
                        </div>
                    </div>
                </div>
{{--                <div class="swiper-button-next"></div>--}}
{{--                <div class="swiper-button-prev"></div>--}}
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="container header__info">
            <div class="header__info-logo">
                <a href="/"><img src="{{ asset("/assets/img/logo.png") }}"></a>
            </div>
            <div class="header__info-adress">
                <p class="header__info-adress-text">г. Владимир ул. Мостостроевская д.1</p>
                <p class="header__info-adress-mode">Пн-Пт с 9:00 до 21:00</p>
            </div>
            <div class="header__info-email"><a href="mailto:crost2020@yandex.ru">crost2020@yandex.ru</a> </div>
            <div class="header__info-phone">
                <a href="tel:+79190207959">+7 (919) 020 79-59</a>
            </div>
        </div>
        <div id="navbar" class="navbar">
            <div class="container header__nav">
                <nav class="nav" role="navigation">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a class="nav__link" href="#">Услуги</a>
                        </li>
                        <li class="nav__item">
                            <a class="nav__link" href="#">Цены</a>
                        </li>
                        <li class="nav__item">
                            <a class="nav__link" href="#">Наши проекты</a>
                        </li>
                        <li class="nav__item">
                            <a class="nav__link" href="#">Партнеры</a>
                        </li>
                        <li class="nav__item">
                            <a class="nav__link" href="#">Гарантии</a>
                        </li>
                        <li class="nav__item">
                            <a class="nav__link" href="#">О компании</a>
                        </li>
                        <li class="nav__item">
                            <a class="nav__link" href="#">Контакты</a>
                        </li>
                    </ul>
                    <div class="nav__mobile-phone">
                        <a href="tel:+79190207959">+7 (919) 020 79-59</a>
                    </div>
                </nav>
            </div>
        </div>

        <div class="burger">
            <span class="burger__line"></span>
        </div>
    </header>

    <main>
        <section id="aboutAs">
            <div class="container about-as">
                <img class="car-about-as" src="{{ asset("/assets/img/car-aboutr-as.png") }}">
                <h2 class="sections__title">&mdash; О компании &mdash;</h2>
                <div class="about-as__container">
                    <div class="about-as__img">
                        <img src="{{ asset("/assets/img/about-as.png") }}">
                    </div>
                    <div class="about-as__info">
                        <p class="about-as__info-text">Наш асфальтный завод оснащен производственным оборудованием, которое позволяет выпускать высококачественный асфальтобетон, отвечающий всем требованиям отечественных стандартов.</p>
                        <p class="about-as__info-text">Мы производим собственные смеси и работаем на прямую с нашими клиентами, без посредников и сторонних подрядчиков.</p>
                        <p class="about-as__info-text">У нас доступные цены на весь ассортимент своей продукции.</p>
                        <p class="about-as__info-text">Наша фирма имеет современную строительно-дорожную технику, что позволяет быстро и качественно выполнять работу.</p>
                        <p class="about-as__info-text">Все работы, которые проводились на территории Владимирской области, имеют весьма прочное дорожное покрытие из асфальта. Абсолютно вся асфальтобетонная продукция, выпускаемая заводом перед выходом в эксплуатацию, проходит проверку качества на высокотехнологическом оборудовании.</p>
                    </div>
                </div>
                <div class="about-as__base-info">
                    <div class="about-as__base-info-item">
                        <img class="about-as__base-info-icon" src="{{ asset("/assets/img/about-as-icon-1.svg") }}">
                        <h3 class="about-as__base-info-title">с 2010 года</h3>
                        <p class="about-as__base-info-text">Уже более 10 лет опыта в производстве асфальта - гаранд качества!</p>
                    </div>
                    <div class="about-as__base-info-item">
                        <img class="about-as__base-info-icon" src="{{ asset("/assets/img/about-as-icon-2.svg") }}">
                        <h3 class="about-as__base-info-title">Лучшая цена</h3>
                        <p class="about-as__base-info-text">Предлагаем выгодные условия нашей продукции</p>
                    </div>
                    <div class="about-as__base-info-item">
                        <img class="about-as__base-info-icon" src="{{ asset("/assets/img/about-as-icon-3.svg") }}">
                        <h3 class="about-as__base-info-title">1000+ клиентов</h3>
                        <p class="about-as__base-info-text">включая крупные корпорации и администрации городов</p>
                    </div>
                </div>

            </div>
        </section>

        <section id="services">
            <div class="container services">
                <h2 class="sections__title">&mdash; Услуги &mdash;</h2>
                <div class="services__list">
                    <div class="services__item">
                        <div class="services__item-img"><img src="{{ asset('/assets/img/service-item-1.png') }}"> </div>
                        <div class="services__item-info-block">
                            <div class="services__item-info">
                                <h3 class="services__item-info-title">Строительство дорог</h3>
                                <p class="services__item-info-text">Наша компания готова произвести асфальтирование дорог, заездов, детских и спорт площадок, стоянок, площадей предприятий и др</p>
                            </div>
                            <div class="services__item-button">
                                <a href="#form" class="btn btn-yellow">
                                    <img class="btn-border-left" src="{{ asset("/assets/img/border-button-left.png") }}">
                                    <img class="btn-border-right" src="{{ asset("/assets/img/border-button-right.png") }}">
                                    Подробнее
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="services__item">
                        <div class="services__item-img"><img src="{{ asset('/assets/img/service-item-2.png') }}"> </div>
                        <div class="services__item-info-block">
                            <div class="services__item-info">
                                <h3 class="services__item-info-title">Продажа асфальтобетона</h3>
                                <p class="services__item-info-text">Наша компания предлагает купить асфальтобетон с доставкой</p>
                            </div>
                            <div class="services__item-button">
                                <a href="#form" class="btn btn-yellow">
                                    <img class="btn-border-left" src="{{ asset("/assets/img/border-button-left.png") }}">
                                    <img class="btn-border-right" src="{{ asset("/assets/img/border-button-right.png") }}">
                                    Подробнее
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="services__item">
                        <div class="services__item-img"><img src="{{ asset('/assets/img/service-item-3.png') }}"> </div>
                        <div class="services__item-info-block">
                            <div class="services__item-info">
                                <h3 class="services__item-info-title">Аренда спецтехники</h3>
                                <p class="services__item-info-text">В нашем распоряжении целый парк техники и спец агрегатов</p>
                            </div>
                            <div class="services__item-button">
                                <a href="#form" class="btn btn-yellow">
                                    <img class="btn-border-left" src="{{ asset("/assets/img/border-button-left.png") }}">
                                    <img class="btn-border-right" src="{{ asset("/assets/img/border-button-right.png") }}">
                                    Подробнее
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="partners">
            <div class="container partners">
                <h2 class="sections__title">&mdash; Мы партнеры &mdash;</h2>
                <div class="partners__slide">
                    <div class="partnersSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="{{ asset("/assets/img/parters-1.png") }}"></div>
                            <div class="swiper-slide"><img src="{{ asset("/assets/img/parters-2.png") }}"></div>
                            <div class="swiper-slide"><img src="{{ asset("/assets/img/parters-3.png") }}"></div>
                            <div class="swiper-slide"><img src="{{ asset("/assets/img/parters-4.png") }}"></div>

                            <div class="swiper-slide"><img src="{{ asset("/assets/img/parters-1.png") }}"></div>
                            <div class="swiper-slide"><img src="{{ asset("/assets/img/parters-2.png") }}"></div>
                            <div class="swiper-slide"><img src="{{ asset("/assets/img/parters-3.png") }}"></div>
                            <div class="swiper-slide"><img src="{{ asset("/assets/img/parters-4.png") }}"></div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="partners__foto">
                    <div class="partners__foto-list">
                        <div class="partners__foto-item"><img src="{{ asset("/assets/img/partners-foto-1.png") }}"></div>
                        <div class="partners__foto-item"><img src="{{ asset("/assets/img/partners-foto-2.png") }}"></div>
                        <div class="partners__foto-item"><img src="{{ asset("/assets/img/partners-foto-5.png") }}"></div>
                        <div class="partners__foto-item"><img src="{{ asset("/assets/img/partners-foto-3.png") }}"></div>
                        <div class="partners__foto-item"><img src="{{ asset("/assets/img/partners-foto-4.png") }}"></div>
                    </div>
                </div>
                <div class="partners__button">
                    <a href="#form" class="btn btn-yellow">
                        <img class="btn-border-left" src="{{ asset("/assets/img/border-button-left.png") }}">
                        <img class="btn-border-right" src="{{ asset("/assets/img/border-button-right.png") }}">
                        Смотреть больше
                    </a>
                </div>
            </div>
        </section>

        <section id="what-offer">
            <div class="container what-offer">

                <h2 class="sections__title"><span>&mdash;</span> <span>Почему именно мы</span> <span>&mdash;</span></h2>
                <div class="what-offer__list">
                    <div class="what-offer__item">
                        <img class="what-offer__item-icon" src="{{ asset("/assets/img/what-offer-icon-1.svg") }}">
                        <h3 class="what-offer__item-title">Высокое качество</h3>
                    </div>
                    <div class="what-offer__item">
                        <img class="what-offer__item-icon" src="{{ asset("/assets/img/what-offer-icon-2.svg") }}">
                        <h3 class="what-offer__item-title">Лучшая цена</h3>
                    </div>
                    <div class="what-offer__item">
                        <img class="what-offer__item-icon" src="{{ asset("/assets/img/what-offer-icon-3.svg") }}">
                        <h3 class="what-offer__item-title">Быстрая доставка</h3>
                    </div>
                    <div class="what-offer__item">
                        <img class="what-offer__item-icon" src="{{ asset("/assets/img/what-offer-icon-4.svg") }}">
                        <h3 class="what-offer__item-title">Собственная лаборатория</h3>
                    </div>
                    <div class="what-offer__item">
                        <img class="what-offer__item-icon" src="{{ asset("/assets/img/what-offer-icon-5.svg") }}">
                        <h3 class="what-offer__item-title">Гост производство</h3>
                    </div>
                    <div class="what-offer__item">
                        <img class="what-offer__item-icon" src="{{ asset("/assets/img/what-offer-icon-6.svg") }}">
                        <h3 class="what-offer__item-title">Сертифицированный асфальт</h3>
                    </div>

{{--                    <div class="what-offer__list-item">--}}
{{--                        <div class="what-offer__item">--}}
{{--                            <img class="what-offer__item-icon" src="{{ asset("/assets/img/what-offer-icon-1.svg") }}">--}}
{{--                            <h3 class="what-offer__item-title">Высокое качество</h3>--}}
{{--                        </div>--}}
{{--                        <div class="what-offer__item">--}}
{{--                            <img class="what-offer__item-icon" src="{{ asset("/assets/img/what-offer-icon-2.svg") }}">--}}
{{--                            <h3 class="what-offer__item-title">Лучшая цена</h3>--}}
{{--                        </div>--}}
{{--                        <div class="what-offer__item">--}}
{{--                            <img class="what-offer__item-icon" src="{{ asset("/assets/img/what-offer-icon-3.svg") }}">--}}
{{--                            <h3 class="what-offer__item-title">Быстрая доставка</h3>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="what-offer__list-item">--}}
{{--                        <div class="what-offer__item">--}}
{{--                            <img class="what-offer__item-icon" src="{{ asset("/assets/img/what-offer-icon-4.svg") }}">--}}
{{--                            <h3 class="what-offer__item-title">Собственная лаборатория</h3>--}}
{{--                        </div>--}}
{{--                        <div class="what-offer__item">--}}
{{--                            <img class="what-offer__item-icon" src="{{ asset("/assets/img/what-offer-icon-5.svg") }}">--}}
{{--                            <h3 class="what-offer__item-title">Гост производство</h3>--}}
{{--                        </div>--}}
{{--                        <div class="what-offer__item">--}}
{{--                            <img class="what-offer__item-icon" src="{{ asset("/assets/img/what-offer-icon-6.svg") }}">--}}
{{--                            <h3 class="what-offer__item-title">Сертифицированный асфальт</h3>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </section>

        <section id="portfolio" class="portfolio">
            <div class="container portfolio__container">
                <h2 class="portfolio__title">Портфолио</h2>
            </div>
            <div class="portfolioSwiper">
                <div class="portfolioSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide portfolio-slide">
                            <img src="{{ asset("/assets/img/portfolio-1.png") }}">
                        </div>
                        <div class="swiper-slide portfolio-slide">
                            <img src="{{ asset("/assets/img/portfolio-2.png") }}">
                        </div>
                        <div class="swiper-slide portfolio-slide">
                            <img src="{{ asset("/assets/img/portfolio-3.png") }}">
                        </div>
                        <div class="swiper-slide portfolio-slide">
                            <img src="{{ asset("/assets/img/portfolio-1.png") }}">
                        </div>
                        <div class="swiper-slide portfolio-slide">
                            <img src="{{ asset("/assets/img/portfolio-2.png") }}">
                        </div>
                        <div class="swiper-slide portfolio-slide">
                            <img src="{{ asset("/assets/img/portfolio-3.png") }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container portfolio__button">
                <a href="#form" class="btn-yellow">
                    <img class="btn-border-left" src="{{ asset("/assets/img/border-button-left.png") }}">
                    <img class="btn-border-right" src="{{ asset("/assets/img/border-button-right.png") }}">
                    Оставить заявку
                </a>
            </div>
        </section>

        <section id="contacts">
            <div class="container contacts">
                <h2 class="sections__title">&mdash; Контакты &mdash;</h2>
                <div class="contacts__block">
                    <div class="contacts__block-info">
                        <div class="contacts__block-info-item">
                            <p class="contacts__block-info-item-label">Телефон</p>
                            <h3 class="contacts__block-info-item-title"><a href="tel:+79190207959">+7 (919) 020 79-59</a></h3>
                        </div>
                        <div class="contacts__block-info-item">
                            <p class="contacts__block-info-item-label">Почта</p>
                            <h3 class="contacts__block-info-item-title"><a href="mailto:crost2020@yandex.ru">crost2020@yandex.ru</a></h3>
                        </div>
                        <div class="contacts__block-info-item">
                            <p class="contacts__block-info-item-label">Адрес</p>
                            <h3 class="contacts__block-info-item-title">г. Владимир ул. Мостостроевская д.1</h3>
                        </div>
                        <div class="contacts__block-info-item">
                            <p class="contacts__block-info-item-label">Время работы</p>
                            <h3 class="contacts__block-info-item-title">с 8:00 до 21:00</h3>
                        </div>
                    </div>
                    <div id="contacts__block-map" class="contacts__block-map"></div>
                </div>
            </div>
        </section>

    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer__bottom">
                <div class="footer__bottom-base">
                    <div class="footer__bottom-base-logo">
                        <a href="/">
                            <img src="{{ asset("/assets/img/logo.png") }}">
                        </a>
                    </div>
                    <div class="footer__bottom-base-copy">
                        <p>© 2022, Все права защищены</p>
                    </div>
                </div>
                <div class="footer__bottom-menu">
                    <nav class="footer__nav">
                        <ul class="footer__nav-list">
                            <li class="footer__nav-item">
                                <a href="#" class="footer__nav-link">Услуги</a>
                            </li>
                            <li class="footer__nav-item">
                                <a href="#" class="footer__nav-link">Цены</a>
                            </li>
                            <li class="footer__nav-item">
                                <a href="#" class="footer__nav-link">Наши проекты</a>
                            </li>
                            <li class="footer__nav-item">
                                <a href="#" class="footer__nav-link">Партнеры</a>
                            </li>
                            <li class="footer__nav-item">
                                <a href="#" class="footer__nav-link">Гарантии</a>
                            </li>
                            <li class="footer__nav-item">
                                <a href="#" class="footer__nav-link">О компании</a>
                            </li>
                            <li class="footer__nav-item">
                                <a href="#" class="footer__nav-link">Контакты</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="footer__development">
                <p class="footer__development-text">Сайт разработан компанией <a class="footer__development-link" href="https://alex-media.ru" target="_blank">ALEX-MEDIA</a></p>
            </div>
        </div>
    </footer>


        <script src="{{ mix('/assets/js/main.js') }}"></script>
    </body>
</html>
