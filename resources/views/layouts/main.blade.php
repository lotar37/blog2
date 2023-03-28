<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="{{ asset("assets/vendors/flag-icon-css/css/flag-icon.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/vendors/font-awesome/css/all.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/vendors/aos/aos.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/style.css?version=0.51") }}">
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
    <div class="container">
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
                            <a class="dropdown-item" href="{{ route("main.teachers") }}">Учителя/Администрация</a>
                            <a class="dropdown-item" href="#">Поступление</a>
                            <a class="dropdown-item" href="{{ route("main.regim") }}">Режим работы</a>
                            <a class="dropdown-item" href="{{ route("main.post") }}">Новости</a>
                            <a class="dropdown-item" href="#">Объявления</a>
                            <a class="dropdown-item" href="#">Летопись/История</a>
                            <a class="dropdown-item" href="{{ route("main.patriarh") }}">Приветствие от Патриарха</a>
                            <a class="dropdown-item" href="https://nouradonezh.mskobr.ru/">Раздел на сайте Департамента
                                образования</a>
                            <a class="dropdown-item" href="{{ route("main.reports") }}">Отзывы</a>
                            <a class="dropdown-item" href="{{ route("main.contacts") }}">Контакты</a>
                            <a class="dropdown-item" href="#">Реквизиты</a>
                            <a class="dropdown-item" href="#">Документы</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="schoolDropdown" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Обучение</a>
                        <div class="dropdown-menu" aria-labelledby="schoolDropdown">
                            <a class="dropdown-item" href="{{ route("main.advice") }}" id="schoolDropdownDown">Гимназия
                                рекомендует</a>
                            <a class="dropdown-item" href="{{ route("main.preschool") }}">Дошкольное отделение</a>
                            <hr class="dropdown-divider">
                            <a class="dropdown-item" href="{{ route("main.extcurr") }}">Внеурочная образовательная
                                деятельность</a>
                            <a class="dropdown-item" href="{{ route("main.homework.index") }}">Дневник</a>
                            <a class="dropdown-item" href="{{ route("main.studyplan") }}">Учебный план</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Храм</a>
                        <div class="dropdown-menu" aria-labelledby="aboutDropdown">
                            <a class="dropdown-item" href="{{ route("main.khram_history") }}">История храма</a>
                            <a class="dropdown-item" href="#">Расписание богослужений</a>
                            <a class="dropdown-item" href="{{ route("main.khram_chtenie") }}">Чтение утреннего
                                правила</a>
                            <a class="dropdown-item" href="#">Новости</a>
                            <a class="dropdown-item" href="{{ route("main.khram_docs") }}">Документы</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown" id="ulll2">
                        <a class="nav-link dropdown-toggle" href="#" id="blogDropdown" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Лагерь в Оптиной</a>
                        <div class="dropdown-menu" aria-labelledby="blogDropdown">
                            <a class="dropdown-item" href="#">Новости 2023</a>
                            <a class="dropdown-item" href="#">История</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="blogDropdown" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Родителям</a>
                        <div class="dropdown-menu" aria-labelledby="blogDropdown">
                            <a class="dropdown-item" href="#">Поступление</a>
                            <a class="dropdown-item" href="#">Детям</a>
                            <a class="dropdown-item" href="{{ route("main.museum") }}">&nbsp;&nbsp;Музеи</a>
                            <a class="dropdown-item" href="{{ route("main.theaters") }}">&nbsp;&nbsp;Театры</a>
                        </div>
                    </li>

                </ul>
                <ul style='justify-content: flex-end' class=" navbar-nav ml-auto mr-2 mt-2 mt-lg-0">
                    @if($role == 0)
                        <li class="nav-item  text-danger">
                            <a class="nav-link text-success" href="{{ route("admin.main.index") }} "
                               alt="Личный кабинет">ЛК({{ $user }})</a>
                        </li>
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <input type="submit" value="Выйти" class="btn btn-outline-danger">
                            </form>
                        </li>
                    @endif
                    @if($role == 1)
                        <li class="nav-item  text-danger">
                            <a class="nav-link text-info" href="{{ route("teacher.main.index") }} "
                               alt="Личный кабинет">{{ $user }}(ЛК)</a>
                        </li>
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <input type="submit" value="Выйти" class="btn btn-outline-danger">
                            </form>
                        </li>
                    @endif
                    @if($role == 2 or $role == 3)
                            <li class="nav-item pl-4">
                                {{ $user }}
                            </li>
                    @endif

                    @if($role>3)
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

</header>

@yield("content")


<footer class="edica-footer mt-1" data-aos="fade-up">
    <div class="container">
        <div class="row footer-widget-area">
            <div class="col-md-3">
                <a href="/" class="px-0 mb-2">
                    <img src="{{ asset('assets/images/logo2.png') }}" alt="logo" class="col-md-9 px-0 pb-2">
                </a>
                <p class="contact-details">hello@radonezh.ru</p>
                <p class="contact-details">+7 495 423 5122</p>
            </div>
            <div class="col-md-3">
                <nav class="footer-nav">
                    <a href="#!" class="nav-link">Гимназия</a>
                    <a href="#!" class="nav-link">Храм</a>
                    <a href="#!" class="nav-link">Мероприятия</a>
                    <a href="#!" class="nav-link">Отзывы</a>
                    <a href="#!" class="nav-link">Фотографии</a>
                    <a href="#!" class="nav-link">Поступающим</a>
                </nav>
            </div>
            <div class="col-md-3">
                <nav class="footer-nav">
                    <a href="#!" class="nav-link">ЧАВО</a>
                    <a href="#!" class="nav-link">Режим работы</a>
                    <a href="#!" class="nav-link">Учтителя</a>
                    <a href="#!" class="nav-link">Учебный план</a>
                    <a href="#!" class="nav-link">Дошкольное отделение</a>
                    <a href="#!" class="nav-link">Контакты</a>
                </nav>
            </div>

        </div>
        <div class="footer-bottom-content">
            <nav class="nav footer-bottom-nav">
            </nav>
            <p class="mb-0">© RADONEZH. 2023. All rights reserved.</p>
        </div>
    </div>
</footer>
<script src="{{ asset('assets/vendors/popper.js/popper.min.js') }}"></script>
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>--}}
<script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendors/aos/aos.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script>
    AOS.init({
        duration: 1000
    });
</script>
</body>

</html>
