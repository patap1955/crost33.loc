@extends("master")
@section('title', 'Строительство дорог')
@section("description", "Строительство дорог во Владимире.Компания «Крост» работает на строительном рынке и производит готовые смеси.Аренда спецтехники.")
@section("content")
    <section class="fotogallery">
        <div class="container">
            <h1 class="sections__title">&mdash; Фотогалерея &mdash;</h1>
            <div class="fotogallery__list">
                @foreach($portfolios as $portfolio)
                    <div class="fotogallery__item">
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

    </section>
@endsection


