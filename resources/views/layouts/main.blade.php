<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Православная классическая гимназия "Радонеж"</title>
{{--    <link rel="stylesheet" href="{{ asset("css/app.css") }}">--}}
    <link rel="stylesheet" href="{{ asset("assets/vendors/flag-icon-css/css/flag-icon.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/vendors/font-awesome/css/all.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/vendors/aos/aos.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/style.css?v=0.101123") }}">
    <link rel="icon" type="image/png" href='{{ asset("assets/images/favicon.png?vers=3") }}'>
    {{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">--}}
    <script src="{{ asset("assets/vendors/jquery/jquery.min.js") }}"></script>
    <script src="{{ asset("assets/js/loader.js") }}"></script>
</head>

<body>
<div class="edica-loader"></div>
<header class="edica-header
 @yield("landing_header")
 ">
    <div class="">
        <div class="big_small_view container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav"
                        aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="edicaMainNav">
                    <ul class="navbar-nav mx-0 mt-2 mt-lg-0">
                        <li class="nav-item dropdown">
                            {{--                        <div class="row pr-0 mr-0 d-flex">--}}
                            <div class="col-1 py-0 pl-0 d-flex"><a class="mr-0 pt-0 navbar-brand"
                                                                   href="{{ route("main.index") }}"><img
                                        src="{{ asset('assets/images/logo3.png ') }}" alt="Edica" width="24px"></a>
                                <a class="pr-0 pl-2  m-0  nav-link dropdown-toggle" href="/" id="aboutDropdown"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <a class="pr-0 pl-2  m-0  nav-link dropdown-toggle" href="/">Гимназия Радонеж</a></a>
                            </div>
                            <div class="dropdown-menu" aria-labelledby="aboutDropdown">
                                <a class="dropdown-item" href="{{ route("main.about") }}">О нас</a>
                                <a class="dropdown-item" href="{{ route("main.preschool") }}">Детский сад "Огоньки"</a>

                                <a class="dropdown-item" href="{{ route("main.teachers") }}">Учителя</a>
                                <a class="dropdown-item" href="{{ route("main.management") }}">Администрация</a>
                                <a class="dropdown-item" href="{{ route("main.admission") }}">Поступление</a>
                                <a class="dropdown-item" href="{{ route("main.regim") }}">Режим работы</a>
                                <a class="dropdown-item" href="{{ route("main.post") }}">Новости</a>
                                <a class="dropdown-item" href="{{ route("main.announcement") }}">Объявления</a>
                                <a class="dropdown-item" href="{{ route("main.letopis") }}">Летопись/История</a>
                                <a class="dropdown-item" href="{{ route("main.patriarh") }}">Приветствие от Патриарха</a>
                                <a class="dropdown-item" href="https://nouradonezh.mskobr.ru/">Раздел на сайте Департамента
                                    образования</a>
                                <a class="dropdown-item" href="{{ route("main.reports") }}">Отзывы</a>
                                <a class="dropdown-item" href="{{ route("main.contacts") }}">Контакты</a>
                                <a class="dropdown-item" href="{{ route("main.requisites") }}">Реквизиты</a>
                                <a class="dropdown-item" href="{{ route("main.docs") }}">Документы</a>
                                <a class="dropdown-item" href="/old">Архив</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="schoolDropdown" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">Обучение</a>
                            <div class="dropdown-menu" aria-labelledby="aboutDropdown">
                            <a class="dropdown-item" href="{{ route("main.studyplan") }}">Учебный план</a>
                            <a class="dropdown-item" href="{{ route("main.homework.index") }}">Дневник</a>
                            <a class="dropdown-item" href="{{ route("main.admission") }}">Поступление</a>
                            <a class="dropdown-item" href="{{ route("main.preschool") }}">Дошкольное отделение</a>
                            <a class="dropdown-item" href="{{ route("main.extcurr") }}">Внеурочное образование</a>
                            <a class="dropdown-item" href="{{ route("main.projects") }}">Проекты</a>
                            <a class="dropdown-item" href="{{ route("main.innovations") }}">Инновации</a>
                            <a class="dropdown-item" href="{{ route("main.gia") }}">Про ГИА и ЕГЭ</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">Храм</a>
                            <div class="dropdown-menu" aria-labelledby="aboutDropdown">
                                <a class="dropdown-item" href="{{ route("main.khram_history") }}">История храма</a>
                                <a class="dropdown-item" href="{{ route("main.temple_schedule") }}">Расписание богослужений</a>
                                <a class="dropdown-item" href="{{ route("main.khram_chtenie") }}">Чтение утреннего
                                    правила</a>
                                <a class="dropdown-item" href="#">Новости</a>
                                <a class="dropdown-item" href="{{ route("main.khram_docs") }}">Документы</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown" id="ulll2">
                            <a class="nav-link dropdown-toggle" href="#" id="blogDropdown" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">Лето в Оптиной</a>
                            <div class="dropdown-menu" aria-labelledby="blogDropdown">
                                <a class="dropdown-item" href="#">Новости 2023</a>
                                <a class="dropdown-item" href="#">История</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="blogDropdown" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">Родителям</a>
                            <div class="dropdown-menu" aria-labelledby="blogDropdown">
                                <a class="dropdown-item" href="{{ route("main.admission") }}">Поступление</a>
                                <a class="dropdown-item" href="{{ route("main.homework.index") }}">Журнал</a>
                                <a class="dropdown-item" href="#">Экскурсия по школе</a>
                                <a class="dropdown-item" href="{{ route("main.preschool") }}">Детский сад "Огоньки"</a>
    {{--                            <div class="dropdown-menu" aria-labelledby="schoolDropdown">--}}
                                    <a class="dropdown-item" href="{{ route("main.advice") }}" id="schoolDropdown">Гимназия
                                        рекомендует</a>
    {{--                                <hr class="dropdown-divider">--}}
                                    <a class="dropdown-item" href="{{ route("main.museum") }}"> <i class="fas fa-landmark  nav-icon"></i></i>&nbsp;Музеи</a>
                                    <a class="dropdown-item" href="{{ route("main.theaters") }}"><i class="fas fa-mask nav-icon"></i>Театры</a>

    {{--                            </div>--}}

                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="blogDropdown" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">Детям</a>
                            <div class="dropdown-menu" aria-labelledby="blogDropdown">
                                <a class="dropdown-item" href="{{ route("main.homework.index") }}">Дневник</a>
                                <a class="dropdown-item" href="{{ route("main.admission") }}">Поступление</a>
                                <a class="dropdown-item" href="{{ route("main.circles") }}">Кружки</a>
                                <a class="dropdown-item" href="#">Курсы</a>
                                <a class="dropdown-item" href="#">Доп.занятия</a>
                                <a class="dropdown-item" href="{{ route("main.summer_reading.index") }}">Что читать летом?</a>
                            </div>
                        </li>

                    </ul>

                    <ul style='justify-content: flex-end' class=" navbar-nav ml-auto mr-2 mt-2 mt-lg-0">
                        @if($sys_role() == 0)
                            <li class="nav-item  text-danger">
                                <a class="nav-link text-success" href="{{ route("admin.main.index") }} "
                                   alt="Личный кабинет">ЛК({{ $sys_user() }})</a>
                            </li>
                            <li class="nav-item">
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <input type="submit" value="Выйти" class="btn btn-outline-danger">
                                </form>
                            </li>
                        @endif
                        @if($sys_role() == 1)
                            <li class="nav-item  text-danger">
                                <a class="nav-link text-info" href="{{ route("teacher.main.index") }} "
                                   alt="Личный кабинет">{{ $sys_user() }}(ЛК)</a>
                            </li>
                            <li class="nav-item">
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <input type="submit" value="Выйти" class="btn btn-outline-danger">
                                </form>
                            </li>
                        @endif
                        @if($sys_role() == 2 or $sys_role() == 3)
                                <li class="nav-item pl-4">
                                    {{ $sys_user() }}
                                </li>
                        @endif

                        @if($sys_role() > 3)
                            <li class="nav-item pl-4">
                                <a class="nav-link" href="{{ route('login') }}" style="text-align: right; padding-right: 0px;">Войти </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </nav>
            @yield("carousel")
            {{--        <hr class="container">--}}
        </div>
    </div>
</header>

<div id="app">
    @yield("content")
</div>

<footer class="edica-footer mt-1" data-aos="fade-up">
    <div class="container">
        <div class="row footer-widget-area">
            <div class="col-md-3">
                <a href="/" class="px-0 mb-2">
                    <img src="{{ asset('assets/images/logo2.png') }}" alt="logo" class="col-md-9 px-0 pb-2">
                </a>
                <p class="mt-2">info@gymnasia-radonezh.ru</p>
                <p class="contact-details">+7 495 423 5122</p>
                <nav class="footer-social-links">
                    <a href="#!"><i class="fab fa-telegram fa-2x"></i></i></a>
                    <a href="https://vk.com/gymnasiaradonezh"><i class="fab fa-vk  fa-2x"></i></a>
                </nav>
                <p>

                </p>
            </div>
            <div class="col-md-3">
                <nav class="footer-nav">
                    <a href="{{ route("main.about") }}" class="nav-link">Гимназия</a>
                    <a href="{{ route("main.temple_schedule") }}" class="nav-link">Храм</a>
                    <a href="{{ route("main.post") }}" class="nav-link">Мероприятия</a>
                    <a href="{{ route("main.reports") }}" class="nav-link">Отзывы</a>
                    <a href="{{ route("main.admission") }}" class="nav-link">Поступающим</a>
                </nav>
            </div>
            <div class="col-md-3">
                <nav class="footer-nav">
                    <a href="{{ route("main.regim") }}" class="nav-link">Режим работы</a>
                    <a href="{{ route("main.teachers") }}" class="nav-link">Учителя</a>
                    <a href="{{ route("main.studyplan") }}" class="nav-link">Учебный план</a>
                    <a href="{{ route("main.preschool") }}" class="nav-link">Дошкольное отделение</a>
                    <a href="{{ route("main.contacts") }}" class="nav-link">Контакты</a>
                    <a href="/old" class="nav-link">Архив</a>
                </nav>
            </div>

        </div>

        <div class="footer-bottom-content">
            <nav class="nav footer-bottom-nav">
            </nav>
            <p class="mb-0">© Гимназия "Радонеж". 2023. Все права защищены.</p>
        </div>
    </div>
</footer>
<script src="{{ asset('assets/vendors/popper.js/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendors/aos/aos.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script>
    AOS.init({
        duration: 1000
    });
</script>
<script>
    function init() {
        var vidDefer = document.getElementsByTagName('iframe');
        for (var i=0; i<vidDefer.length; i++) {
            if(vidDefer[i].getAttribute('data-src')) {
                vidDefer[i].setAttribute('src',vidDefer[i].getAttribute('data-src'));
            }
        }
    }
    window.onload = init;
</script>


<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();
        for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(93272361, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/93272361" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->



</body>

</html>
