<footer class="footer">
    <div class="container">
        <div class="footer__bottom">
            <div class="footer__bottom-base">
                <div class="footer__bottom-base-logo">
                    <a href="/">
                        <img src="{{ asset("/assets/img/logo-footer.svg") }}">
                    </a>
                </div>
                <div class="footer__bottom-base-copy">
                    <p>© <?=date ( 'Y' )?>, Все права защищены</p>
                </div>
            </div>
            <div class="footer__bottom-menu">
                <nav class="footer__nav">
                    @if ($_SERVER["DOCUMENT_ROOT"] === "/")
                    <ul class="footer__nav-list">
                        <li class="footer__nav-item">
                            <a href="#services" class="footer__nav-link">Услуги</a>
                        </li>
                        <li class="footer__nav-item">
                            <a href="#portfolio" class="footer__nav-link">Наши проекты</a>
                        </li>
                        <li class="footer__nav-item">
                            <a href="#partners" class="footer__nav-link">Партнеры</a>
                        </li>
                        <li class="footer__nav-item">
                            <a href="#garant" class="footer__nav-link">Гарантии</a>
                        </li>
                        <li class="footer__nav-item">
                            <a href="#aboutAs" class="footer__nav-link">О компании</a>
                        </li>
                        <li class="footer__nav-item">
                            <a href="#contacts" class="footer__nav-link">Контакты</a>
                        </li>
                    </ul>
                    @else
                        <ul class="footer__nav-list">
                            <li class="footer__nav-item">
                                <a href="{{ route("index") }}#services" class="footer__nav-link">Услуги</a>
                            </li>
                            <li class="footer__nav-item">
                                <a href="{{ route("index") }}#portfolio" class="footer__nav-link">Наши проекты</a>
                            </li>
                            <li class="footer__nav-item">
                                <a href="{{ route("index") }}#partners" class="footer__nav-link">Партнеры</a>
                            </li>
                            <li class="footer__nav-item">
                                <a href="{{ route("index") }}#garant" class="footer__nav-link">Гарантии</a>
                            </li>
                            <li class="footer__nav-item">
                                <a href="{{ route("index") }}#aboutAs" class="footer__nav-link">О компании</a>
                            </li>
                            <li class="footer__nav-item">
                                <a href="{{ route("index") }}#contacts" class="footer__nav-link">Контакты</a>
                            </li>
                        </ul>
                    @endif
                </nav>
            </div>
        </div>

        <div class="footer__development">
            <a href="{{ route('politics') }}">Политика конфиденциальности</a>
            <p class="footer__development-text">Сайт разработан компанией <a class="footer__development-link" href="https://alex-media.ru" target="_blank">ALEX-MEDIA</a></p>
        </div>
    </div>
</footer>
