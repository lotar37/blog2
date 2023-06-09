@extends('layouts.main')
@section('landing_header')
    edica-landing-header
@endsection
@section('carousel')
    <div class="edica-landing-header-content">
        <div id="edicaLandingHeaderCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators ml-3">
                @php $act = 1; @endphp
                @foreach($carouselPosts as $carouselPost)
                <li data-target="#edicaLandingHeaderCarousel" style="font-weight: bold; font-size: 24px; color:#36c59e;" data-slide-to="{{ $act - 1 }}" class="{{ $act == 1 ? 'active' : ''}}"> &nbsp;&nbsp;&nbsp;&nbsp;<></li>
                    @php $act++; @endphp
                @endforeach
        </ol>

            <div class="carousel-inner" role="listbox">
                @php $act = 1; @endphp
                @foreach($carouselPosts as $carouselPost)

                <div class="carousel-item {{ $act ? " active" : ""}}">
                    <div class="row">
                        <div class="col-md-6 carousel-content-wrapper">
                            <h1>{{ $carouselPost->title }}</h1>
                            <p>
                                {!! $carouselPost->mainpage_text !!}
                            </p>
                            <div class="carousel-content-btns">
                                <a href="{{ $carouselPost->inside_link ? route("main.". $carouselPost->inside_link) : route("main.post_show", $carouselPost->id) }}" class="btn btn-success">Подробнее</a>
                            </div>
                        </div>
                        <div class="col-md-6 carousel-img-wrapper">
                            <img src="{{ asset("storage/" . $carouselPost->mainpage_image) }}" alt="carousel-img" class="img-fluid img-shadow"
                                 style="" height="525px"
                                 height="525px">
                        </div>
                    </div>
                </div>
                    @php $act = 0; @endphp
                @endforeach
            </div>
        </div>
    </div>
@endsection
@section('content')
{{--    <section class="blog ">--}}
        <div class="container">

            {{--            <h1 class="edica-page-title" data-aos="fade-up">Гимназия Радонеж</h1>--}}
            {{--            <p class="align-content-center" data-aos="fade-up" data-aos-delay="200">основана в 1990 году</p>--}}
            {{--            <section class="blog-post-featured-img mb-4" data-aos="fade-up" data-aos-delay="300">--}}
            {{--                <img src="{{ asset('assets/images/main.jpg')}}" alt="featured image" class="w-100">--}}
            {{--            </section>--}}

            <section class="edica-landing-section edica-landing-blog">
                <div class="container">
                    <h4 class="edica-landing-section-subtitle-alt">НОВОСТИ</h4>
                    {{--                    <h4 class="edica-landing-section-subtitle" data-aos="fade-up">События</h4>--}}
                    {{--                    <h2 class="edica-landing-section-title" data-aos="fade-up">События </h2>--}}
                    <div class="row">
                        @php
                            $a = ["right","up","left"];
                            $i = 0;
                        @endphp
                        @foreach($posts3 as $post)
                            <div class="col-md-4 landing-blog-post" data-aos="fade-{{ $a[$i]}}">
                                @php $i++ @endphp
                                <img src="{{ asset("storage/" . $post->main_image) }}" alt="blog post"
                                     class="blog-post-thumbnail" style="object-fit: cover;height: 150pt;">
                                {{--                            <p class="blog-post-category">{{ $categories->find($post->category_id)->title }}</p>--}}
                                <h4 class="blog-post-title"><a href="{{ route("main.post_show", $post->id) }}" class="text-black-50">{{ $post->title }}</a></h4>
                                <p class="blog-post-category">{{ $post->date }}</p>
{{--                                <a href="{{ route("main.post_show", $post->id) }}" class="blog-post-link">Подробнее</a>--}}
                            </div>
                        @endforeach
                    </div>
                    <div class="col-lg-12 justify-content-lg-around flex-column"
                         style="display: flex; justify-content: space-around">
                        <a href="{{ route("main.post") }}" class="btn btn-success btn-lg my-4">ВСЕ НОВОСТИ</a>
                    </div>
                </div>
            </section>
            <section class="edica-landing-section edica-landing-blog my-0 py-0">
                <h4 class="edica-landing-section-subtitle-alt">ПОСТУПЛЕНИЕ В ГИМНАЗИЮ</h4>
            </section>

            <section class="edica-footer-banner-section">

                <div class="container">
                    <div class="row" data-aos="fade-up" style="background: #fafafa;padding:30px;border-radius: 1rem; border:1px solid lightgrey">
                        <div class="col-md-5">
                            <img src="{{ asset("assets/images/goschool.jpg") }}" alt="" style="height: 300px;border-radius: 2rem;">
                        </div>
                        <div class="col-md-7 d-flex align-items-center justify-content-center">
                            <div>
                            <h4 class="text-center">Идет набор в классы гимназии Радонеж.</h4>
                            <h3 class="text-center">Запись на собеседование</h3>
                            <h1 class="text-center text-danger">8(495)423-51-22</h1>
                            <div class="banner-btns-wrapper">
                            </div>
                            <p class="banner-text text-center">Позвоните и мы ответим на все Ваши вопросы. <br/>Оставьте заявку и мы Вам
                                перезвоним</p>
                                <div class="text-center">
                                <a href="{{ route("main.admission") }}" class="btn btn-secondary btn-lg text-white">ПОДРОБНЕЕ</a></div>
                            {{--                <button class="btn btn-success"> <img src="{{ asset('assets/images/apple@1x.svg') }}" alt="ios" class="mr-2"> App Store</button>--}}
                            {{--                <button class="btn btn-success"> <img src="{{ asset('assets/images/android@1x.svg') }}" alt="android" class="mr-2"> Google Play</button>--}}
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="edica-landing-section edica-landing-blog">
                <div class="container">
                    <h4 class="edica-landing-section-subtitle-alt">ДОПОЛНИТЕЛЬНЫЕ ЗАНЯТИЯ</h4>
                    {{--                    <h4 class="edica-landing-section-subtitle" data-aos="fade-up">События</h4>--}}
                    {{--                    <h2 class="edica-landing-section-title" data-aos="fade-up">События </h2>--}}
                    <div class="row">
                        <div class="col-md-1 landing-blog-post" data-aos="fade-right"></div>
                        <div class="col-md-2 landing-blog-post" data-aos="fade-right">
                            <img src="assets/images/chor.jpg" alt="blog post" class="blog-post-thumbnail">
                            {{--                            <p class="blog-post-category">{{ $categories->find($post->category_id)->title }}</p>--}}
                            <h4 class="blog-post-title">Хор</h4>
                            <a href="#" class="blog-post-link text-success">Подробнее</a>
                        </div>
                        <div class="col-md-2 landing-blog-post" data-aos="fade-down">
                            <img src="assets/images/math.jpg" alt="blog post" class="blog-post-thumbnail">
                            {{--                            <p class="blog-post-category">{{ $categories->find($post->category_id)->title }}</p>--}}
                            <h4 class="blog-post-title">Математика</h4>
                            <a href="#" class="blog-post-link  text-success">Подробнее</a>
                        </div>
                        <div class="col-md-2 landing-blog-post" data-aos="fade-up">
                            <img src="assets/images/valyanie.png" alt="blog post" class="blog-post-thumbnail">
                            {{--                            <p class="blog-post-category">{{ $categories->find($post->category_id)->title }}</p>--}}
                            <h4 class="blog-post-title">Валяние</h4>
                            <a href="#" class="blog-post-link text-success">Подробнее</a>
                        </div>
                        <div class="col-md-2 landing-blog-post" data-aos="fade-down">
                            <img src="assets/images/vishivka.jpg" alt="blog post" class="blog-post-thumbnail">
                            {{--                            <p class="blog-post-category">{{ $categories->find($post->category_id)->title }}</p>--}}
                            <h4 class="blog-post-title">Вышивка</h4>
                            <a href="#" class="blog-post-link text-success">Подробнее</a>
                        </div>
                        <div class="col-md-2 landing-blog-post" data-aos="fade-left">
                            <img src="assets/images/footbal.jpg" alt="blog post" class="blog-post-thumbnail">
                            {{--                            <p class="blog-post-category">{{ $categories->find($post->category_id)->title }}</p>--}}
                            <h4 class="blog-post-title">Футбол</h4>
                            <a href="#" class="blog-post-link text-success">Подробнее</a>
                        </div>
                        <div class="col-md-1 landing-blog-post" data-aos="fade-right"></div>
                    </div>
                    <div class="col-lg-12 justify-content-lg-around flex-column"
                         style="display: flex; justify-content: space-around">
                        <a href="{{ route("main.circles") }}" class="btn btn-success btn-lg my-4">ВСЕ ЗАНЯТИЯ</a>
                    </div>
                </div>
            </section>

             <section class="edica-landing-section edica-landing-blog" data-aos="fade-up" data-aos-delay="300">
                 <div class="container">
                <h4 class="edica-landing-section-subtitle-alt">ОТЗЫВЫ О НАС</h4>


                    @foreach($reports as $report)
                    <div class="d-flex justify-content-between mb-4 align-items-center">


                        <div class="h5">
                            <img style="width:100px;border-radius: 50%;" class="mr-4" src="{{ asset("storage/".$report->avatar)}}">
                            {{$report->person}}
                        </div>
                        <div class="h5">{{$report->date}}</div>


                    </div>
                    <div  >
                        <div class="mb-4">
                            {!! $report->short !!}
                        </div>
                    </div>
                    @endforeach
                </div>
                 <div class="col-lg-12 justify-content-lg-around flex-column"
                      style="display: flex; justify-content: space-around">
                     <a href="{{ route("main.reports") }}" class="btn btn-success btn-lg my-4">ВСЕ ОТЗЫВЫ</a>
                 </div>


            </section>
            <div class="widget widget-post-carousel">

                <div class="post-carousel">
                    <div id="carouselId" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselId" data-slide-to="1"></li>
                            <li data-target="#carouselId" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <figure class="carousel-item active">
                                <img src="{{ asset('assets/images/about3.jpg') }}" alt="slide 1">
                                <figcaption class="post-title">
                                    <a href="#!"></a>
                                </figcaption>
                            </figure>
                            <figure class="carousel-item">
                                <img src="{{ asset('assets/images/about4.jpg') }}" alt="slide 2">
                                <figcaption class="post-title">
                                    <a href="#!"></a>
                                </figcaption>
                            </figure>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/about5.jpg') }}" alt="slide 3">
                                <figcaption class="post-title">
                                    <a href="#!"></a>
                                </figcaption>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="edica-landing-section edica-landing-blog">
                <h4 class="edica-landing-section-subtitle-alt">ЧАСТО ЗАДАВАЕМЫЕ ВОПРОСЫ</h4>
                <div class="row">

                    <div class="col-md-9">

                        <section class="edica-landing-section edica-landing-blog" data-aos="fade-up"
                                 data-aos-delay="300">

                            <section class="edica-about-faq  mb-5">

                                <p class="faq-section-text" data-aos="fade-up" data-aos-delay="100">
                                    На Ваши вопросы отвечает заведующий учебной частью Гимназии.
                                </p>
                                <div class="accordion" id="edicaAboutFaqCollapse" role="tablist"
                                     aria-multiselectable="true">
                                    <div class="card" data-aos="fade-up" data-aos-delay="200">
                                        <div class="card-header" role="tab" id="edicaAboutFaq1">
                                            <h5 class="mb-0">
                                                <a data-toggle="collapse" data-parent="#edicaAboutFaqCollapse"
                                                   href="#edicaAboutFaqContent1" aria-expanded="true"
                                                   aria-controls="edicaAboutFaqContent1">
                                                    Какие документы необходимо представить для перехода в Вашу школу из
                                                    другой
                                                    образовательной организации?
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="edicaAboutFaqContent1" class="collapse in" role="tabpanel"
                                             aria-labelledby="edicaAboutFaq1">
                                            <div class="card-body">
                                                При переводе обучающегося из другой образовательной организации родители
                                                (законные
                                                представители) должны предоставить следующие документы:
                                                <ul>
                                                    <li> личное дело обучающегося,</li>
                                                    <li>академическую справку по результатам текущей и промежуточной
                                                        аттестации за
                                                        период обучения в другой образовательной организации;
                                                    </li>
                                                    <li>заявление на имя директора школы;</li>
                                                    <li>копию паспорта заявителя;</li>
                                                    <li>медицинские документы (медицинскую карту, прививочный
                                                        сертификат,
                                                        прививочную карту Ф-63, ксерокопию медицинского полиса);
                                                    </li>
                                                    <li>копию свидетельства о рождении ребёнка.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card" data-aos="fade-up" data-aos-delay="300">
                                        <div class="card-header" role="tab" id="edicaAboutFaq2">
                                            <h5 class="mb-0">
                                                <a data-toggle="collapse" data-parent="#edicaAboutFaqCollapse"
                                                   href="#edicaAboutFaqContent2" aria-expanded="false"
                                                   aria-controls="edicaAboutFaqContent1">
                                                    Имеет ли право ученик, закончивший 9 классов, продолжить обучение в
                                                    10 классе в
                                                    вашей школы?
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="edicaAboutFaqContent2" class="collapse" role="tabpanel"
                                             aria-labelledby="edicaAboutFaq2">
                                            <div class="card-body">
                                                Учащийся, успешно освоивший программу основного общего образования,
                                                имеет право
                                                получить среднее общее образование. Не только выпускник, но и его
                                                родители
                                                (поскольку право выбора образовательного учреждения ФЗ «Об образовании»
                                                (п.2 ст. 50)
                                                закреплено за совершеннолетними гражданами) могут написать заявление о
                                                приеме в 10
                                                класс. Отказ в приеме в нашу школу допустим по причине отсутствии
                                                свободных
                                                (вакантных) мест в сформированных классах. Иные мотивы отказа являются
                                                незаконными,
                                                нарушают право ученика на общедоступность образования. Родители имеют
                                                право
                                                обжаловать действия директора лицея в вышестоящих инстанциях, в том
                                                числе и в
                                                судебном порядке. При приеме в общеобразовательную организацию для
                                                получения
                                                среднего общего образования представляется аттестат об основном общем
                                                образовании
                                                установленного образца.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card" data-aos="fade-up" data-aos-delay="400">
                                        <div class="card-header" role="tab" id="edicaAboutFaq3">
                                            <h5 class="mb-0">
                                                <a data-toggle="collapse" data-parent="#edicaAboutFaqCollapse"
                                                   href="#edicaAboutFaqContent3" aria-expanded="false"
                                                   aria-controls="edicaAboutFaqContent1">
                                                    Как узнать, правильно ли учитель учит и объективно ли он оценивает
                                                    уровень
                                                    знаний моего ребенка?
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="edicaAboutFaqContent3" class="collapse" role="tabpanel"
                                             aria-labelledby="edicaAboutFaq3">
                                            <div class="card-body">
                                                Если вас что-то тревожит, обратитесь к администрации школы.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card" data-aos="fade-up" data-aos-delay="500">
                                        <div class="card-header" role="tab" id="edicaAboutFaq4">
                                            <h5 class="mb-0">
                                                <a data-toggle="collapse" data-parent="#edicaAboutFaqCollapse"
                                                   href="#edicaAboutFaqContent4" aria-expanded="false"
                                                   aria-controls="edicaAboutFaqContent1">
                                                    Как организовано питание в школе? Почему учащимся необходимо
                                                    питаться в школьной
                                                    столовой?
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="edicaAboutFaqContent4" class="collapse" role="tabpanel"
                                             aria-labelledby="edicaAboutFaq4">
                                            <div class="card-body">
                                                Школа предоставляет учащимся ежедневное горячее питание: завтраки и
                                                обеды. Имеется
                                                столовая на 80 посадочных мест. В работе по организации питания учащихся
                                                администрация школы руководствуется основными нормативнo-правовыми
                                                актами и
                                                документами, которые можно найти на нашем сайте.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card" data-aos="fade-up" data-aos-delay="500">
                                        <div class="card-header" role="tab" id="edicaAboutFaq5">
                                            <h5 class="mb-0">
                                                <a data-toggle="collapse" data-parent="#edicaAboutFaqCollapse"
                                                   href="#edicaAboutFaqContent5" aria-expanded="false"
                                                   aria-controls="edicaAboutFaqContent1">
                                                    Как заставить ребенка учиться? </a>
                                            </h5>
                                        </div>
                                        <div id="edicaAboutFaqContent5" class="collapse" role="tabpanel"
                                             aria-labelledby="edicaAboutFaq5">
                                            <div class="card-body">
                                                Заставлять ребенка учиться ни в коем случае нельзя, а вот сделать так,
                                                чтобы у него
                                                появилось такое желание просто необходимо. Для того, чтобы у ребенка
                                                возник интерес
                                                к школе, надо, чтобы она не казалась ему страшной. Рассказывайте больше
                                                хорошего о
                                                своей школьной жизни, исключив негативные ситуации, настраивайте себя и
                                                своего
                                                ребенка на положительные эмоции в отношении учебы, учите общаться со
                                                сверстниками,
                                                развивайте любознательность и не высказывайте своих переживаний по
                                                поводу его
                                                будущей школьной жизни.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card" data-aos="fade-up" data-aos-delay="500">
                                        <div class="card-header" role="tab" id="edicaAboutFaq6">
                                            <h5 class="mb-0">
                                                <a data-toggle="collapse" data-parent="#edicaAboutFaqCollapse"
                                                   href="#edicaAboutFaqContent6" aria-expanded="false"
                                                   aria-controls="edicaAboutFaqContent1">
                                                    Надо ли родителям помогать выполнять домашнее задание своему
                                                    ребенку?
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="edicaAboutFaqContent6" class="collapse" role="tabpanel"
                                             aria-labelledby="edicaAboutFaq6">
                                            <div class="card-body">
                                                Некоторые дети изначально рождаются самостоятельными, но это не значит,
                                                что помощь в
                                                выполнении заданий им не требуется. А другие дети постоянно требуют
                                                внимания и
                                                поддержки от взрослых. Независимо от того, какой у вас ребенок, Ваша
                                                поддержка
                                                никогда не будет лишней. Задача родителей – проконтролировать выполнение
                                                домашних
                                                заданий и, возможно, дать полезный совет.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </section>
                    </div>
                    <div class="col-md-3 sidebar pt-3 align-content-center"  style="border:1px solid lightgrey;background:#eeeeee;border-radius: 1rem;">
                        <h5 class="">Новости</h5>
                        @include('main.includes.random_post')
                    </div>
                </div>
            </section>


        </div>

        </main>
@endsection
