<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@section('meta-title')@show</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel=stylesheet href="{{asset('css/app.css')}}">
</head>
<body>
    <header class="header">
        <div class="container header__wrap">
            <div class="logo header__logo">
                <div class="logo__img">
                    <a href="">
                        <img src="{{asset('images/logo-main.svg')}}">
                    </a>
                </div>
            </div>
            <div class="menu header__menu">
                <ul class="list horizontal-list">
                    @php($links = \App\Models\Adfm\Menu::getData('main'))
                    @foreach($links[0] as $el)
                    <li class="list__item"><a href="{{$el->link}}">{{$el->title}}</a></li>
                    @endforeach
                    {{-- <li class="list__item"><a href="">Главная</a></li>
                    <li class="list__item"><a href="">Мероприятия</a></li>
                    <li class="list__item"><a href="">Меню</a></li>
                    <li class="list__item"><a href="">Акции</a></li>
                    <li class="list__item"><a href="">Галерея</a></li>
                    <li class="list__item"><a href="">Отзывы</a></li>
                    <li class="list__item"><a href="">Контакты</a></li> --}}
                </ul>
            </div>
            <div class="contacts header__contacts">
                <ul class="list vertical-list">
                    <li class="list__item"><a href="">г. Абакан, ул. Набережная 14</a></li>
                    <li class="list__item"><a href="">+7 913 050 0393</a></li>
                    <li class="list__item"><a href="">+7 913 447 447 8</a></li>
                </ul>
            </div>
        </div>
    </header>
    <section class="main-banner">
        <img src="{{asset('images/banner.jpg')}}">
    </section>

<div class="container">

@yield('content')

</div>

    <footer class="footer">
        <div class="container footer__wrap">
            <div class="logo footer__logo">
                <div class="logo__img">
                    <a href="">
                        <img src="{{asset('images/logo-main.svg')}}">
                    </a>
                </div>
            </div>
            <div class="menu footer__menu">
                <ul class="list horizontal-list">
                    <li class="list__item"><a href="">Главная</a></li>
                    <li class="list__item"><a href="">Мероприятия</a></li>
                    <li class="list__item"><a href="">Меню</a></li>
                    <li class="list__item"><a href="">Акции</a></li>
                    <li class="list__item"><a href="">Галерея</a></li>
                    <li class="list__item"><a href="">Отзывы</a></li>
                    <li class="list__item"><a href="">Контакты</a></li>
                </ul>
            </div>
            <div class="contacts footer__contacts">
                <ul class="list vertical-list">
                    <li class="list__item"><a href="">г. Абакан, ул. Набережная 14</a></li>
                    <li class="list__item"><a href="">+7 913 050 0393</a></li>
                    <li class="list__item"><a href="">+7 913 447 447 8</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
