@extends("master")
@section('title', 'Строительство дорог')
@section("description", "Строительство дорог во Владимире.Компания «Крост» работает на строительном рынке и производит готовые смеси.Аренда спецтехники.")
@section("content")
    <section id="aboutAs">
        <div class="container about-as">
            <img class="car-about-as" src="{{ asset("/assets/img/car-aboutr-as.png") }}">
            <h2 class="sections__title animate__animated">&mdash; О компании &mdash;</h2>
            <div class="about-as__container">
                <div class="animate__animated about-as__img">
                    <img src="{{ asset("/assets/img/about-as.png") }}">
                </div>
                <div class="about-as__info animate__animated">
                    <p class="about-as__info-text">Наш асфальтный завод оснащен производственным оборудованием, которое позволяет выпускать высококачественный асфальтобетон, отвечающий всем требованиям отечественных стандартов.</p>
                    <p class="about-as__info-text">Мы производим собственные смеси и работаем на прямую с нашими клиентами, без посредников и сторонних подрядчиков.</p>
                    <p class="about-as__info-text">У нас доступные цены на весь ассортимент своей продукции.</p>
                    <p class="about-as__info-text">Наша фирма имеет современную строительно-дорожную технику, что позволяет быстро и качественно выполнять работу.</p>
                    <p class="about-as__info-text">Все работы, которые проводились на территории Владимирской области, имеют весьма прочное дорожное покрытие из асфальта. Абсолютно вся асфальтобетонная продукция, выпускаемая заводом перед выходом в эксплуатацию, проходит проверку качества на высокотехнологическом оборудовании.</p>
                </div>
            </div>
            <div id="garant" class="about-as__base-info">
                <div class="about-as__base-info-item grandAnimateLeft animate__animated">
                    <img class="about-as__base-info-icon" src="{{ asset("/assets/img/about-as-icon-1.svg") }}">
                    <h3 class="about-as__base-info-title">с 2010 года</h3>
                    <p class="about-as__base-info-text">Уже более 10 лет опыта в производстве асфальта - гаранд качества!</p>
                </div>
                <div class="about-as__base-info-item grandAnimateCenter animate__animated">
                    <img class="about-as__base-info-icon" src="{{ asset("/assets/img/about-as-icon-2.svg") }}">
                    <h3 class="about-as__base-info-title">Лучшая цена</h3>
                    <p class="about-as__base-info-text">Предлагаем выгодные условия нашей продукции</p>
                </div>
                <div class="about-as__base-info-item grandAnimateRight animate__animated">
                    <img class="about-as__base-info-icon" src="{{ asset("/assets/img/about-as-icon-3.svg") }}">
                    <h3 class="about-as__base-info-title">1000+ клиентов</h3>
                    <p class="about-as__base-info-text">включая крупные корпорации и администрации городов</p>
                </div>
            </div>

        </div>
    </section>

    <section id="services">
        <div class="container services">
            <h2 class="sections__title animate__animated">&mdash; Услуги &mdash;</h2>
            <div class="services__list">
                <div class="services__item servicesItemLeft animate__animated">
                    <div class="services__item-img"><img src="{{ asset('/assets/img/service-item-1.png') }}"> </div>
                    <div class="services__item-info-block">
                        <div class="services__item-info">
                            <h3 class="services__item-info-title">Строительство дорог</h3>
                            <p class="services__item-info-text">Наша компания готова произвести асфальтирование дорог, заездов, детских и спорт площадок, стоянок, площадей предприятий и др</p>
                        </div>
                        <div class="services__item-button">
                            <a href="{{ route("services", ["title" => "building_dorog"]) }}" class="btn btn-yellow">
                                <img class="btn-border-left" src="{{ asset("/assets/img/border-button-left.png") }}">
                                <img class="btn-border-right" src="{{ asset("/assets/img/border-button-right.png") }}">
                                Подробнее
                            </a>
                        </div>
                    </div>
                </div>
                <div class="services__item servicesItemCenter animate__animated">
                    <div class="services__item-img"><img src="{{ asset('/assets/img/service-item-2.png') }}"> </div>
                    <div class="services__item-info-block">
                        <div class="services__item-info">
                            <h3 class="services__item-info-title">Продажа асфальтобетона</h3>
                            <p class="services__item-info-text">Наша компания предлагает купить асфальтобетон с доставкой</p>
                        </div>
                        <div class="services__item-button">
                            <a href="{{ route("services", ["title" => "sale_asphalt"]) }}" class="btn btn-yellow">
                                <img class="btn-border-left" src="{{ asset("/assets/img/border-button-left.png") }}">
                                <img class="btn-border-right" src="{{ asset("/assets/img/border-button-right.png") }}">
                                Подробнее
                            </a>
                        </div>
                    </div>
                </div>
                <div class="services__item servicesItemRight animate__animated">
                    <div class="services__item-img"><img src="{{ asset('/assets/img/service-item-3.png') }}"> </div>
                    <div class="services__item-info-block">
                        <div class="services__item-info">
                            <h3 class="services__item-info-title">Аренда спецтехники</h3>
                            <p class="services__item-info-text">В нашем распоряжении целый парк техники и спец агрегатов</p>
                        </div>
                        <div class="services__item-button">
                            <a href="{{ route("services", ["title" => "lease_technics"]) }}" class="btn btn-yellow">
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
            <h2 class="sections__title animate__animated">&mdash; Мы партнеры &mdash;</h2>
            <div class="partners__slide">
                <div class="partnersSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{{ asset("/assets/img/parters-1.png") }}"></div>
                        <div class="swiper-slide"><img src="{{ asset("/assets/img/parters-2.png") }}"></div>
                        <div class="swiper-slide"><img src="{{ asset("/assets/img/parters-3.png") }}"></div>
                        <div class="swiper-slide"><img src="{{ asset("/assets/img/parters-4.png") }}"></div>

                        <div class="swiper-slide"><img src="{{ asset("/assets/img/promupak.png") }}" alt="Группа компаний ПромуПак"></div>
                        <div class="swiper-slide"><img src="{{ asset("/assets/img/wood_kraft33.png") }}" alt="wood kraft 33"></div>
                        <div class="swiper-slide"><img src="{{ asset("/assets/img/germes.png") }}" alt="Гермес Групп"></div>
                        <div class="swiper-slide"><img src="{{ asset("/assets/img/metallotorg.png") }}" alt="Металлоторг"></div>

                        <div class="swiper-slide"><img src="{{ asset("/assets/img/res_group.jpg") }}" alt="РЭС групп"></div>
                        <div class="swiper-slide"><img src="{{ asset("/assets/img/moloko_zavod.png") }}" alt="Судогодский молочный завод"></div>
                        <div class="swiper-slide"><img src="{{ asset("/assets/img/zao_lenina.jpg") }}" alt="ЗАО им. Ленина"></div>
                        <div class="swiper-slide"><img src="{{ asset("/assets/img/dow_izolan.png") }}" alt="ДАО Изолан"></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="partners__foto">
                <div class="partners__foto-list">
                    <div class="partners__foto-item partnersFotoAnimateLeft animate__animated"><img src="{{ asset("/assets/img/partners-foto-1.png") }}"></div>
                    <div class="partners__foto-item partnersFotoAnimateRight animate__animated"><img src="{{ asset("/assets/img/partners-foto-2.png") }}"></div>
                    <div class="partners__foto-item partnersFotoAnimateCenter animate__animated"><img src="{{ asset("/assets/img/partners-foto-5.png") }}"></div>
                    <div class="partners__foto-item partnersFotoAnimateLeft animate__animated"><img src="{{ asset("/assets/img/partners-foto-3.png") }}"></div>
                    <div class="partners__foto-item partnersFotoAnimateRight animate__animated"><img src="{{ asset("/assets/img/partners-foto-4.png") }}"></div>
                </div>
            </div>
            <div class="partners__button">
                <a href="{{ route("portfolio") }}" class="btn btn-yellow">
                    <img class="btn-border-left" src="{{ asset("/assets/img/border-button-left.png") }}">
                    <img class="btn-border-right" src="{{ asset("/assets/img/border-button-right.png") }}">
                    Смотреть больше
                </a>
            </div>
        </div>
    </section>

    <section id="what-offer">
        <div class="container what-offer">

            <h2 class="sections__title animate__animated"><span>&mdash;</span> <span>Почему именно мы</span> <span>&mdash;</span></h2>
            <div class="what-offer__list">
                <div class="what-offer__item whatOfferAnimateLeft animate__animated">
                    <img class="what-offer__item-icon" src="{{ asset("/assets/img/what-offer-icon-1.svg") }}">
                    <h3 class="what-offer__item-title">Высокое качество</h3>
                </div>
                <div class="what-offer__item whatOfferAnimateCenter animate__animated">
                    <img class="what-offer__item-icon" src="{{ asset("/assets/img/what-offer-icon-2.svg") }}">
                    <h3 class="what-offer__item-title">Лучшая цена</h3>
                </div>
                <div class="what-offer__item whatOfferAnimateRight animate__animated">
                    <img class="what-offer__item-icon" src="{{ asset("/assets/img/what-offer-icon-3.svg") }}">
                    <h3 class="what-offer__item-title">Быстрая доставка</h3>
                </div>
                <div class="what-offer__item whatOfferAnimateLeft animate__animated">
                    <img class="what-offer__item-icon" src="{{ asset("/assets/img/what-offer-icon-4.svg") }}">
                    <h3 class="what-offer__item-title">Собственная лаборатория</h3>
                </div>
                <div class="what-offer__item whatOfferAnimateCenter animate__animated">
                    <img class="what-offer__item-icon" src="{{ asset("/assets/img/what-offer-icon-5.svg") }}">
                    <h3 class="what-offer__item-title">Гост производство</h3>
                </div>
                <div class="what-offer__item whatOfferAnimateRight animate__animated">
                    <img class="what-offer__item-icon" src="{{ asset("/assets/img/what-offer-icon-6.svg") }}">
                    <h3 class="what-offer__item-title">Сертифицированный асфальт</h3>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="portfolio">
        <div class="container portfolio__container">
            <h2 class="portfolio__title animate__animated">Портфолио</h2>
        </div>
        <div class="portfolioSwiper">
            <div class="portfolioSwiper">
                <div class="swiper-wrapper">
                    @foreach($portfolios as $portfolio)
                        <div class="swiper-slide portfolio-slide">
                            <a
                                data-fancybox="gallery"
                                href="{{ asset("storage/" . $portfolio->img) }}"
                            >
                                <img src="{{ asset("storage/" . $portfolio->img) }}" />
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="container portfolio__button">
            <button class="btn-yellow" data-custom-open="modalForm">
                <img class="btn-border-left" src="{{ asset("/assets/img/border-button-left.png") }}">
                <img class="btn-border-right" src="{{ asset("/assets/img/border-button-right.png") }}">
                Оставить заявку
            </button>
        </div>
    </section>
@endsection

