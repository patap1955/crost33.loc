<div class="container header__services">
    <div class="header__services-logo">
        <a href="{{ route("index") }}"><img src="{{ asset("/assets/img/logo-black.svg") }}"></a>
    </div>
    <div class="header__services-adress">
        <p class="header__services-adress-text">{{ $settings->address }}</p>
        <p class="header__services-adress-mode">Пн-Пт с 9:00 до 21:00</p>
    </div>
    <div class="header__services-email">
        <a href="mailto:{{ $settings->email }}">{{ $settings->email }}</a>
    </div>
    <div class="header__services-phone">
        <a href="tel:{{ $settings->phone }}">{{ $settings->phone }}</a>
    </div>
</div>

<div id="navbar" class="navbar-services">
    <div class="container header__nav">
        <nav class="nav" role="navigation">
            <ul class="nav__list">
                <li class="nav__item">
                    <a class="nav__link-services" href="{{ route("index") }}">Главная</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link-services" href="{{ route("services", ["title" => "building_dorog"]) }}">Строительство дорог</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link-services" href="{{ route("services", ["title" => "sale_asphalt"]) }}">Продажа асфальта</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link-services" href="{{ route("services", ["title" => "lease_technics"]) }}">Аренда спецтехники</a>
                </li>
            </ul>
            <div class="nav__mobile-phone">
                <a href="tel:+79190207959">{{ $settings->phone }}</a>
            </div>
        </nav>
    </div>
</div>
<div class="burger">
    <span class="burger__line"></span>
</div>
@if($_SERVER["REQUEST_URI"] === "/services/lease_technics")
<div class="header__services-first-screen">
    <div class="container services-first-screen">
        <h1 class="services-first-screen__title animate__animated">Аренда спецтехники</h1>
        <p class="services-first-screen__text animate__animated animate__delay-03s">Компания «Крост» работает на строительном рынке и производит готовые смеси. Наш завод стал известен как надежный и ответственный поставщик строительных материалов.</p>
        <div class="services-first-screen__button animate__animated animate__delay-06s">
            <button class="btn-yellow" data-custom-open="modalForm">
                <img class="btn-border-left" src="{{ asset("/assets/img/border-button-left.png") }}">
                <img class="btn-border-right" src="{{ asset("/assets/img/border-button-right.png") }}">
                Оставить заявку
            </button>
        </div>
    </div>
</div>

@elseif($_SERVER["REQUEST_URI"] === "/services/building_dorog")
    <div class="header__services-first-screen building_dorog-fon">
        <div class="container services-first-screen">
            <h1 class="services-first-screen__title animate__animated">Строительство дорог</h1>
            <p class="services-first-screen__text animate__animated animate__delay-03s">Наша компания готова произвести асфальтирование дорог, заездов, детских и спорт площадок, стоянок, площадей предприятий и др</p>
            <div class="services-first-screen__button animate__animated animate__delay-06s">
                <button class="btn-yellow" data-custom-open="modalForm">
                    <img class="btn-border-left" src="{{ asset("/assets/img/border-button-left.png") }}">
                    <img class="btn-border-right" src="{{ asset("/assets/img/border-button-right.png") }}">
                    Оставить заявку
                </button>
            </div>
        </div>
    </div>

@elseif($_SERVER["REQUEST_URI"] === "/services/sale_asphalt")
    <div class="header__services-first-screen sale_asfalt-fon">
        <div class="container services-first-screen">
            <h1 class="services-first-screen__title animate__animated">Продажа асфальтобетона</h1>
            <p class="services-first-screen__text animate__animated animate__delay-03s">Наша компания предлагает купить асфальтобетон с доставкой</p>
            <div class="services-first-screen__button animate__animated animate__delay-06s">
                <button class="btn-yellow" data-custom-open="modalForm">
                    <img class="btn-border-left" src="{{ asset("/assets/img/border-button-left.png") }}">
                    <img class="btn-border-right" src="{{ asset("/assets/img/border-button-right.png") }}">
                    Оставить заявку
                </button>
            </div>
        </div>
    </div>
@endif

