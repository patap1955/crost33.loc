@extends("master")
@section('title', ' Услуги')
@section("description", "Строительство дорог во Владимире")
@section("content")
    <div class="container">
        <h2 class="sections__title"><span>&mdash;</span> <span>Аренда спецтехники у крост</span> <span>&mdash;</span></h2>
        <div class="services-info">
            <div class="services-info__text">
                <p class="about-as__info-text">Наш асфальтный завод предлагает спецтехнику широкого назначения в аренду во Владимире и области как крупнейшим строительным и производственным компаниям, так и представителям малого бизнеса, частным заказчикам.</p>
                <p class="about-as__info-text">У нас доступные цены на весь ассортимент своей продукции.</p>
                <p class="about-as__info-text">Наша фирма имеет современную строительно-дорожную технику, что позволяет быстро и качественно выполнять работу.</p>
                <p class="about-as__info-text">Все работы, которые проводились на территории Владимирской области, имеют весьма прочное дорожное покрытие из асфальта. Абсолютно вся асфальтобетонная продукция, выпускаемая заводом перед выходом в эксплуатацию, проходит проверку качества на высокотехнологическом оборудовании.</p>

            </div>
            <div class="services-info__img">
                <img src="{{ asset("/assets/img/services-about-as.png") }}">
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
    <div id="prices">
        <div class="container">
            <h2 class="sections__title portfolio__title prices__title"><span>&mdash;</span> <span>Прайс-лист</span> <span>&mdash;</span></h2>
            <p class="prices__date">сентябрь 2022</p>
            <table class="prices__table">
                <tr class="prices__table-tr">
                    <th class="prices__table-tr-th">Наименование материала</th>
                    <th class="prices__table-tr-th">Ед. Изм.</th>
                    <th class="prices__table-tr-th">Цена с НДС, руб</th>
                </tr>
                <tr class="prices__table-tr">
                    <td class="prices__table-tr-td">Экскаватор гусеничный Хитачи</td>
                    <td class="prices__table-tr-td">час</td>
                    <td class="prices__table-tr-td td-price">2520</td>
                </tr>
                <tr class="prices__table-tr">
                    <td class="prices__table-tr-td">Экскаватор погрузчик</td>
                    <td class="prices__table-tr-td">час</td>
                    <td class="prices__table-tr-td td-price">2700</td>
                </tr>
                <tr class="prices__table-tr">
                    <td class="prices__table-tr-td">Экскаватор погрузчик с бурильной установкой</td>
                    <td class="prices__table-tr-td">час</td>
                    <td class="prices__table-tr-td td-price">3200</td>
                </tr>
                <tr class="prices__table-tr">
                    <td class="prices__table-tr-td">Экскаватор погрузчик с гидромолотом</td>
                    <td class="prices__table-tr-td">час</td>
                    <td class="prices__table-tr-td td-price">3700</td>
                </tr>
                <tr class="prices__table-tr">
                    <td class="prices__table-tr-td">Экскаватор гусеничный 18т Komatsu</td>
                    <td class="prices__table-tr-td">час</td>
                    <td class="prices__table-tr-td td-price">3300</td>
                </tr>
                <tr class="prices__table-tr">
                    <td class="prices__table-tr-td">Экскаватор гусеничный 29т Caterpillar</td>
                    <td class="prices__table-tr-td">час</td>
                    <td class="prices__table-tr-td td-price">3600</td>
                </tr>
                <tr class="prices__table-tr">
                    <td class="prices__table-tr-td">Фронтальный погрузчик</td>
                    <td class="prices__table-tr-td">час</td>
                    <td class="prices__table-tr-td td-price">2400</td>
                </tr>
                <tr class="prices__table-tr">
                    <td class="prices__table-tr-td">Бульдозер Т170</td>
                    <td class="prices__table-tr-td">час</td>
                    <td class="prices__table-tr-td td-price">2280</td>
                </tr>
                <tr class="prices__table-tr">
                    <td class="prices__table-tr-td">Грейдер ГС1402</td>
                    <td class="prices__table-tr-td">час</td>
                    <td class="prices__table-tr-td td-price">3500</td>
                </tr>
                <tr class="prices__table-tr">
                    <td class="prices__table-tr-td">Каток двухвальцовый 15т</td>
                    <td class="prices__table-tr-td">час</td>
                    <td class="prices__table-tr-td td-price">2700</td>
                </tr>
                <tr class="prices__table-tr">
                    <td class="prices__table-tr-td">Каток комбинированный 10т</td>
                    <td class="prices__table-tr-td">час</td>
                    <td class="prices__table-tr-td td-price">2400</td>
                </tr>
                <tr class="prices__table-tr">
                    <td class="prices__table-tr-td">Каток грунтовый Бомаг 18т</td>
                    <td class="prices__table-tr-td">час</td>
                    <td class="prices__table-tr-td td-price">2600</td>
                </tr>
                <tr class="prices__table-tr">
                    <td class="prices__table-tr-td">Асфальтоукладчик</td>
                    <td class="prices__table-tr-td">час</td>
                    <td class="prices__table-tr-td td-price">6000</td>
                </tr>
                <tr class="prices__table-tr">
                    <td class="prices__table-tr-td">Автокран 25т</td>
                    <td class="prices__table-tr-td">час</td>
                    <td class="prices__table-tr-td td-price">2400</td>
                </tr>
                <tr class="prices__table-tr">
                    <td class="prices__table-tr-td">Манипулятор 2,5т дл. 5,5м</td>
                    <td class="prices__table-tr-td">час</td>
                    <td class="prices__table-tr-td td-price">5000</td>
                </tr>
                <tr class="prices__table-tr">
                    <td class="prices__table-tr-td">Манипулятор стрела 11м г/п стр. 3т г/п куз 7т</td>
                    <td class="prices__table-tr-td">час</td>
                    <td class="prices__table-tr-td td-price">1800</td>
                </tr>
                <tr class="prices__table-tr">
                    <td class="prices__table-tr-td">Длинномер 20т дл. 16.6</td>
                    <td class="prices__table-tr-td">час</td>
                    <td class="prices__table-tr-td td-price">1800</td>
                </tr>
                <tr class="prices__table-tr">
                    <td class="prices__table-tr-td">Автотрал 30т дл. 11м</td>
                    <td class="prices__table-tr-td">час</td>
                    <td class="prices__table-tr-td td-price">3000</td>
                </tr>
                <tr class="prices__table-tr">
                    <td class="prices__table-tr-td">Камаз 15т/10м3</td>
                    <td class="prices__table-tr-td">час</td>
                    <td class="prices__table-tr-td td-price">1400</td>
                </tr>
                <tr class="prices__table-tr">
                    <td class="prices__table-tr-td">Самосвал 10т дл. 7.5 м3</td>
                    <td class="prices__table-tr-td">час</td>
                    <td class="prices__table-tr-td td-price">1500</td>
                </tr>
                <tr class="prices__table-tr">
                    <td class="prices__table-tr-td">Самосвал 30т 20м3</td>
                    <td class="prices__table-tr-td">час</td>
                    <td class="prices__table-tr-td td-price">2100</td>
                </tr>
                <tr class="prices__table-tr">
                    <td class="prices__table-tr-td">Автомобиль с прицепом до 24т</td>
                    <td class="prices__table-tr-td">час</td>
                    <td class="prices__table-tr-td td-price">1700</td>
                </tr>
                <tr class="prices__table-tr">
                    <td class="prices__table-tr-td">Подъемник Genie Z 60/34 высота 22м</td>
                    <td class="prices__table-tr-td">час</td>
                    <td class="prices__table-tr-td td-price">5000</td>
                </tr>
            </table>
            <div class="prices__table-mobile">
                <div class="prices__table-mobile-line">
                    <h3 class="prices__table-mobile-title">СМЕСЬ АСФАЛЬТОБЕТОННАЯ ТИП В марка III</h3>
                    <p class="prices__table-mobile-price">4250 ₽ за Т</p>
                </div>
                <div class="prices__table-mobile-line">
                    <h3 class="prices__table-mobile-title">СМЕСЬ АСФАЛЬТОБЕТОННАЯ ТИП В марка III</h3>
                    <p class="prices__table-mobile-price">4250 ₽ за Т</p>
                </div>
                <div class="prices__table-mobile-line">
                    <h3 class="prices__table-mobile-title">СМЕСЬ АСФАЛЬТОБЕТОННАЯ ТИП В марка III</h3>
                    <p class="prices__table-mobile-price">4250 ₽ за Т</p>
                </div>
                <div class="prices__table-mobile-line">
                    <h3 class="prices__table-mobile-title">СМЕСЬ АСФАЛЬТОБЕТОННАЯ ТИП В марка III</h3>
                    <p class="prices__table-mobile-price">4250 ₽ за Т</p>
                </div>
                <div class="prices__table-mobile-line">
                    <h3 class="prices__table-mobile-title">СМЕСЬ АСФАЛЬТОБЕТОННАЯ ТИП В марка III</h3>
                    <p class="prices__table-mobile-price">4250 ₽ за Т</p>
                </div>
                <div class="prices__table-mobile-line">
                    <h3 class="prices__table-mobile-title">СМЕСЬ АСФАЛЬТОБЕТОННАЯ ТИП В марка III</h3>
                    <p class="prices__table-mobile-price">4250 ₽ за Т</p>
                </div>
            </div>

            <div class="prices__button">
                <a href="/storage/downloads/prices/prices.docx" class="btn-yellow" download>
                    <img class="btn-border-left" src="{{ asset("/assets/img/border-button-left.png") }}">
                    <img class="btn-border-right" src="{{ asset("/assets/img/border-button-right.png") }}">
                    Скачать прайс
                </a>
            </div>
        </div>
    </div>
@endsection


