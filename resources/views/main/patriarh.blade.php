@extends('layouts.main')

@section('content')
    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Приветствие от Патриарха</h1>
            <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">Патриаршее поздравление по случаю 30-летия Гимназии</p>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img src="{{ asset('assets/images/patriarh.jpg')}}" alt="featured image" class="w-100">
            </section>
            <section class="post-content">
                <div class="row">
                    <div class="col-lg-9 mx-auto" data-aos="fade-up">
                        <h2 class="mb-4" data-aos="fade-up">Святейший Патриарх Московский и всея Руси Кирилл поздравил преподавателей, сотрудников и учащихся Православной классической гимназии «Радонеж» с 30-летием учебного заведения.</h2>

                        <blockquote data-aos="fade-up" class="aos-init">
                            <p>Преподавателям, сотрудникам и учащимся Православной классической гимназии «Радонеж»<br>
                                Уважаемые братья и сестры, дорогие ученики!
                                Сердечно приветствую всех вас и поздравляю с тридцатилетием Православной классической гимназии «Радонеж».
                                Создание этой первой негосударственной школы стало как церковно, так и общественно значимым событием в новой России. За минувшие годы гимназия подготовила ко взрослой жизни немало своих учеников, стремясь давать им не только обширные знания по различным светским предметам, но и должное православное воспитание.
                                Отрадно, что при школе действует домовый храм во имя святого апостола и евангелиста Иоанна Богослова, где дети совершают совместную молитву, возрастая, по слову Писания, в благодати и познании Господа нашего и Спасителя Иисуса Христа (2 Пет. 3:18).
                                Хотел бы пожелать преподавателям, сотрудникам и учащимся гимназии «Радонеж» крепости душевных и телесных сил, помощи от Премудрого Создателя и успехов в добрых делах и начинаниях.
                                Призываю на всех вас Божие благословение.</p>
                            <footer class="blockquote-footer ">+КИРИЛЛ, ПАТРИАРХ МОСКОВСКИЙ И ВСЕЯ РУСИ</footer>
                            <p class="mt-3">Источник: Официальный сайт Московского Патриархата</p>
                        </blockquote>



                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection