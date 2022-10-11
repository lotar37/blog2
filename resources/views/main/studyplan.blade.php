@extends('layouts.main')

@section('content')
    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Учебный план</h1>
            <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">несколько последних учебных лет</p>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img src="{{ asset('assets/images/studyplan.jpg')}}" alt="featured image" class="w-100">
            </section>
            <section class="post-content">
                <div class="row">
                    <div class="col-lg-9 mx-auto" data-aos="fade-up">
                        <h2 class="mb-4" data-aos="fade-up">Планы по годам</h2>

                    </div>
                </div>>
                <div class="row">
                        <div class="col-lg-9 mx-auto" data-aos="fade-up">
                        <p><a class="nav-link link-dark" href="https://drive.google.com/file/d/1SuhCvaK39VoViiv1WQknsGhVezEiyRNR/view?usp=sharing">Учебный план НОЧУ &laquo;Православная классическая гимназия &laquo;Радонеж&raquo; на 2021-2022 учебный год</a></p>
                        <p><a class="nav-link" href="https://drive.google.com/file/d/1U-k2pbxiM2N5bJJF7csFHQW0NrBT6_yx/view?usp=sharing">Учебный план НОЧУ &laquo;Православная классическая гимназия &laquo;Радонеж&raquo;&nbsp;на 2020-2021 учебный год</a></p>
                        <p><a class="nav-link" href="https://drive.google.com/file/d/1zC9_IXKcZ7O79elhznPnfH0ekzPCC0JS/view?usp=sharing">Учебный план НОЧУ &laquo;Православная классическая гимназия &laquo;Радонеж&raquo;&nbsp;на 2019-2020 учебный год</a></p>
                        </div>

                </div>
            </section>
        </div>
    </main>
@endsection
