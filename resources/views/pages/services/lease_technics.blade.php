{{--lease_technics--}}
@extends("master")
@section('title', ' Аренда спецтехники')
@section("description", "Аренда спецтехники во Владимире.Компания «Крост» работает на строительном рынке и производит готовые смеси. Наш завод стал известен как надежный и ответственный поставщик строительных материалов.")
@section("content")
    <div class="container">
        <h2 class="sections__title animate__animated"><span>&mdash;</span> <span>Аренда спецтехники у крост</span> <span>&mdash;</span></h2>
        <div class="services-info">
            <div class="services-info__text animate__animated">
                <p class="about-as__info-text">Аренда спецтехники – широко востребованная услуга, так как приобретение дорогостоящей техники для выполнения одноразовых работ нерентабельно, но обойтись без специального оборудования для строительства или ремонтных работ просто нереально.</p>
                <p class="about-as__info-text">Наш асфальтный завод предлагает спецтехнику широкого назначения в аренду во Владимире и области как крупнейшим строительным и производственным компаниям, так и представителям малого бизнеса, частным заказчикам. У нас доступные цены на весь ассортимент своей продукции.</p>
                <p class="about-as__info-text">Мы имеем современный автопарк со строительно-дорожной техникой, что позволяет быстро и качественно выполнять работу. </p>

            </div>
            <div class="services-info__img animate__animated">
                <img src="{{ asset("/assets/img/services-about-as.png") }}">
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



