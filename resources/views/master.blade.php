<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include("layouts.meta")
        @yield("css")
    </head>
    <body>
        <header>
            @if($_SERVER["REQUEST_URI"] === "/")
                @include("layouts.header-index")

            @else
                @include("layouts.header-services")
            @endif
        </header>

        <main>
            @yield("content")
            <section id="contacts">
                <div class="container contacts">
                    <h2 class="sections__title animate__animated">&mdash; Контакты &mdash;</h2>
                    <div class="contacts__block">
                        <div class="contacts__block-info">
                            <div class="contacts__block-info-item">
                                <p class="contacts__block-info-item-label">Телефон</p>
                                <h3 class="contacts__block-info-item-title"><a href="tel:{{ $settings->phone }}">{{ $settings->phone }}</a></h3>
                            </div>
                            <div class="contacts__block-info-item">
                                <p class="contacts__block-info-item-label">Почта</p>
                                <h3 class="contacts__block-info-item-title"><a href="mailto:{{ $settings->email }}">{{ $settings->email }}</a></h3>
                            </div>
                            <div class="contacts__block-info-item">
                                <p class="contacts__block-info-item-label">Адрес</p>
                                <h3 class="contacts__block-info-item-title">{{ $settings->address }}</h3>
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
        <div class="container">
            @include("layouts.modals.modal-form")
        </div>
        @include("layouts.footer")


        <script src="{{ mix('/assets/js/main.js') }}"></script>
        @yield("scripts")
    </body>
</html>

