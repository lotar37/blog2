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
    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">--}}
    <script src="{{ asset("assets/vendors/jquery/jquery.min.js") }}"></script>
    <script src="{{ asset("assets/js/loader.js") }}"></script>
</head>

<body>
<div class="edica-loader"></div>
<header class="edica-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{ route("main.index") }}"><img src="{{ asset('assets/images/logo.png ') }}" alt="Edica" width="250px"></a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="edicaMainNav">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route("main.index") }}">Главная <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="schoolDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Школа</a>
                        <div class="dropdown-menu" aria-labelledby="schoolDropdown" >
                            <a class="dropdown-item" href="{{ route("main.regim") }}">Режим работы</a>
                            <a class="dropdown-item" href="{{ route("main.teachers") }}">Наши учителя</a>
                            <a class="dropdown-item" href="{{ route("main.advice") }}" id="schoolDropdownDown">Гимназия рекомендует</a>
                            <hr class="dropdown-divider">
                            <a class="dropdown-item" href="{{ route("main.museum") }}">&nbsp;&nbsp;Музеи</a>
                            <a class="dropdown-item" href="{{ route("main.theaters") }}">&nbsp;&nbsp;Театры</a>
                            <hr class="dropdown-divider">
                            <a class="dropdown-item" href="https://nouradonezh.mskobr.ru/">Раздел на сайте Департамента образования</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">О нас</a>
                        <div class="dropdown-menu" aria-labelledby="aboutDropdown">
                            <a class="dropdown-item" href="{{ route("main.about") }}">О гимназии</a>
                            <a class="dropdown-item" href="{{ route("main.reports") }}">Отзывы</a>
                            <a class="dropdown-item" href="{{ route("main.patriarh") }}">Приветствие от Патриарха</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="blogDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Образование</a>
                        <div class="dropdown-menu" aria-labelledby="blogDropdown">
                            <a class="dropdown-item" href="{{ route("main.preschool") }}">Дошкольное отделение</a>
                            <a class="dropdown-item" href="{{ route("main.extcurr") }}">Внеурочная образовательная деятельность</a>
                            <a class="dropdown-item" href="{{ route("main.studyplan") }}">Учебный план</a>
                            <a class="dropdown-item" href="{{ route("main.homework.index") }}">Разное</a>
                        </div>
                    </li>
{{--                    @if($role == 0)--}}
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a class="nav-link " href="{{ route("admin.main.index") }}"  aria-haspopup="true" >Admin</a>--}}
{{--                    </li>--}}
{{--                    @endif--}}
{{--                    <li class="nav-item">--}}
                        <a class="nav-link" href="{{ route("main.contacts") }}">Контакты</a>
                    </li>
{{--                </ul>--}}
{{--                <ul class="navbar-nav mt-2 mt-lg-0">--}}
                    @if($role == 0)
                        <li class="nav-item  text-danger">
                            <a class="nav-link text-danger" href="{{ route("admin.main.index") }} " alt="Личный кабинет">Admin({{ $user }})</a>
                        </li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <input type="submit" value="Выйти" class="btn btn-outline-secondary">
                        </form>
                    </li>
                    @endif
                    @if($role == 1)
                        <li class="nav-item  text-danger">
                            <a class="nav-link text-danger" href="{{ route("teacher.main.index") }} " alt="Личный кабинет">Учитель({{ $user }})</a>
                        </li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <input type="submit" value="Выйти" class="btn btn-outline-secondary">
                        </form>
                    </li>
                    @endif
                    @if($role > 1)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Войти </a>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>
        <hr class="container">
    </div>

</header>

@yield("content")


<footer class="edica-footer mt-4" data-aos="fade-up">
    <div class="container">
        <div class="row footer-widget-area">
            <div class="col-md-3">
                <a href="index.html" class="footer-brand-wrapper" >
                    <img src="{{ asset('assets/images/logo.png') }}" alt=" logo">
                </a>
                <p class="contact-details">hello@radonezh.ru</p>
                <p class="contact-details">+7 495 423 5122</p>
                <nav class="footer-social-links">
                    <a href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a href="#!"><i class="fab fa-twitter"></i></a>
                    <a href="#!"><i class="fab fa-behance"></i></a>
                    <a href="#!"><i class="fab fa-dribbble"></i></a>
                </nav>
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
            <p class="mb-0">© RADONEZH. 2023.  All rights reserved.</p>
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
