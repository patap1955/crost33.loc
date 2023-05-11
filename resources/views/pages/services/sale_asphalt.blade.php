@extends("master")
@section('title', 'Продажа асфальтобетона')
@section("description", "Продажа асфальтобетона во Владимире.Наша компания предлагает купить асфальтобетон с доставкой.У нас доступные цены на весь ассортимент своей продукции.")
@section("content")
    <div class="container">
        <h2 class="sections__title animate__animated"><span>&mdash;</span> <span>Продажа асфальтобетона</span> <span>&mdash;</span></h2>
        <div class="services-info">
            <div class="services-info__text animate__animated">
                <p class="about-as__info-text">Наш завод - это комплексная производственная площадка с собственной строительно-дорожной техникой и передовыми технологиями. Мы основательно отбираем материалы, контролируем каждый этап производства, соблюдаем национальные стандарты. </p>
                <p class="about-as__info-text">С продуктивной работой завода мы можем сотрудничать с самыми разными клиентами для производства любого необходимого количества партий асфальтобетона.</p>
                <p class="about-as__info-text">Мы работаем без посредников, поэтому можем предложить лучшую цену за свой продукт на рынке.</p>
                <p class="about-as__info-text">Наши профессионалы скрупулезно следят за пунктуальностью рабочего процесса и контролирует готовую продукцию в своей лаборатории.</p>
                <p class="about-as__info-text">Мы продаем и доставляем асфальт во Владимире и Владимирской области.</p>

            </div>
            <div class="services-info__img animate__animated">
                <img src="{{ asset("/assets/img/sale_asfalt.png") }}">
            </div>
        </div>
        <div class="about-as__base-info">
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
    <div id="prices">
        <div class="container">
            <h2 class="sections__title portfolio__title prices__title animate__animated"><span>&mdash;</span> <span>Прайс-лист</span> <span>&mdash;</span></h2>
            <p class="prices__date">сентябрь 2022</p>
            <table class="prices__table">
                <tr class="prices__table-tr">
                    <th class="prices__table-tr-th">Наименование материала</th>
                    <th class="prices__table-tr-th">Ед. Изм.</th>
                    <th class="prices__table-tr-th">Цена с НДС, руб</th>
                </tr>
                @foreach($prices as $price)
                <tr class="prices__table-tr animate__animated">
                    <td class="prices__table-tr-td">{{ $price->title }}</td>
                    <td class="prices__table-tr-td th-text-center">{{ $price->unit }}</td>
                    <td class="prices__table-tr-td td-price">{{ $price->rate }}</td>
                </tr>
                @endforeach
            </table>
            <div class="prices__table-mobile">
                <div class="prices__table-mobile-line">
                    <h3 class="prices__table-mobile-title">СМЕСЬ АСФАЛЬТОБЕТОННАЯ ТИП Б марка II</h3>
                    <p class="prices__table-mobile-price">4800 ₽ за Т</p>
                </div>
                @foreach($prices as $price)
                <div class="prices__table-mobile-line animate__animated">
                    <h3 class="prices__table-mobile-title">{{ $price->title }}</h3>
                    <p class="prices__table-mobile-price">{{ $price->rate }} ₽ за {{ $price->unit }}</p>
                </div>
                @endforeach
            </div>

            <div class="prices__button">
                <a href="/storage/uploads/downloads/prices/{{ $priceUrl->file }}" class="btn-yellow" download>
                    <img class="btn-border-left" src="{{ asset("/assets/img/border-button-left.png") }}">
                    <img class="btn-border-right" src="{{ asset("/assets/img/border-button-right.png") }}">
                    Скачать прайс
                </a>
            </div>
        </div>
    </div>
@endsection





