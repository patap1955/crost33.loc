{{--lease_technics--}}
@extends("master")
@section('title', ' Строительство дорог')
@section("description", "Строительство дорог во Владимире.Наша компания готова произвести асфальтирование дорог, заездов, детских и спорт площадок, стоянок, площадей предприятий и др")
@section("content")
    <div class="container">
        <h2 class="sections__title animate__animated"><span>&mdash;</span> <span>Строительство дорог</span> <span>&mdash;</span></h2>
        <div class="services-info">
            <div class="services-info__text animate__animated">
                <p class="about-as__info-text">Асфальтный завод ООО «Крост» занимается строительством дорог во Владимирской области, предлагая клиентам комплексные решения: от создания проекта дороги до укладки дорожного покрытия и благоустройства территорий.</p>
                <p class="about-as__info-text">Все работы, проводимые во Владимирской области, имеют очень прочное асфальтовое покрытие. Вся асфальтовая продукция, произведенная на заводе, проходит абсолютную проверку качества на высокотехнологичном оборудовании перед тем, как поступить в эксплуатацию.</p>
                <p class="about-as__info-text">Мы работаем строго по договору, предоставляя вам подробную и прозрачную смету. Это означает, что вы можете быть уверены в том, что срок поставки будет на 100% соблюден, а ваш бюджет останется неизменным.</p>


            </div>
            <div class="services-info__img animate__animated">
                <img src="{{ asset("/assets/img/building_dorog.png") }}">
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
@endsection




