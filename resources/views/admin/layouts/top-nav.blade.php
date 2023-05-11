<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route("index") }}" class="nav-link" target="_blank">Сайт</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <form action="{{ route("logout") }}" method="post">
                @csrf
                <button type="submit" class="nav-link">Выйти</button>
            </form>

        </li>
    </ul>

    <!-- Right navbar links -->
    {{--        <ul class="navbar-nav ml-auto">--}}
    {{--            <li class="nav-item">--}}
    {{--                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">--}}
    {{--                    <i class="fas fa-th-large"></i>--}}
    {{--                </a>--}}
    {{--            </li>--}}
    {{--        </ul>--}}
</nav>


