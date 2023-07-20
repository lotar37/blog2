@extends('layouts.main')

@section('content')
    <main class="mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 mx-auto pt-5">
                    <h1 class="edica-page-title"  data-aos="fade-up">О нас</h1>
                    <div class="breadcrumb"  data-aos="fade-up" >
                        <a href="/" class="breadcrumb-item">Главная</a>
                        <a href="#" class="breadcrumb-item  active">О нас</a>
                    </div>

                    <section class="edica-about-intro pt-lg-5">
                        <div class="row pt-lg-5">
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="150">
                                <h2 class="intro-title pb-3 pb-md-0 mb-4 mb-md-0">Знакомьтесь, гимназия «Радонеж»! <span></span></h2>
                            </div>
                            <div class="col-md-6 intro-content" data-aos="fade-left" data-aos-delay="150">

                                <p><span class="first-letter">П</span>ервая православная общеобразовательная школа в постсоветской России.
                                    Основана в 1990 году Православным братством «Радонеж» по благословению святейшего
                                    Патриарха Московского и всея Руси Алексия II. Со дня своего основания была ориентирована на детей из
                                    православных семей, родители которых хотели бы дать им классическое образование и православное
                                    воспитание. </p>
                            </div>
                        </div>
                    </section>
                    <section class="edica-about-vision py-5">
                        <div class="row">
                            <div class="col-md-6 d-flex flex-column justify-content-center">
                                <h5 class="vision-title" data-aos="fade-right">Наша миссия</h5>
                                <p class="vision-text" data-aos="fade-right">В своей работе и образовательной программе Гимназия «Радонеж» соединяет лучшие традиции Российского образования с высшими достижениями современной педагогики, проверенные временем образовательные методики с разумным индивидуальным подходом, ориентирована на присвоение детьми высоких образцов отечественной и мировой культуры. </p>
                            </div>
                            <div class="col-md-6 pb-3 pb-md-0 mb-4 mb-md-0" data-aos="fade-left" data-aos-delay="200">
                                <img src="{{ asset('assets/images/about.jpg?v=1')}} " alt="vision" class="img-fluid2" style="width:100%">
                            </div>
                        </div>
                    </section>
                    <section class="edica-about-vision py-5">
                        <div class="row">
                            <div class="col-md-6 pb-3 pb-md-0 mb-4 mb-md-0" data-aos="fade-right" data-aos-delay="200">
                                <img src="{{ asset('assets/images/about2.jpg?v=1')}}" alt="vision" class="img-fluid2"  style="width:100%">
                            </div>
                            <div class="col-md-6 d-flex flex-column justify-content-center">
                                <h5 class="vision-title" data-aos="fade-left">Углублённо </h5>
                                <p class="vision-text" data-aos="fade-left">
                                    изучаются предметы гуманитарного цикла:
                                    изучаются история,
                                    литература,
                                    история искусств,
                                    Закон Божий,
                                    риторика.
                                    Дополнительные модули: сценическая речь, логика, история философии, спецкурсы по истории.




                                </p>
                            </div>
                        </div>
                    </section>
                    <section class="edica-about-counter py-5 d-md-flex justify-content-between" id="counter" data-aos="fade-up">
                        <div class="counter-card mb-3 pb-1 pb-md-0 mb-md-0">
                            <h3 class="counter-count"><span class="count" data-count="50">1990</span></h3>
                            <p class="count-label">Год основания</p>
                        </div>
                        <div class="counter-card mb-3 pb-1 pb-md-0 mb-md-0">
                            <h3 class="counter-count"><span class="count" data-count="10">17</span>0</h3>
                            <p class="count-label">Обучающихся</p>
                        </div>
                        <div class="counter-card mb-3 pb-1 pb-md-0 mb-md-0">
                            <h3 class="counter-count">85%</h3>
                            <p class="count-label">Поступление в ВУЗ</p>
                        </div>
{{--                        <div class="counter-card mb-3 pb-1 pb-md-0 mb-md-0">--}}
{{--                            <h3 class="counter-count"><span class="count" data-count="15">0</span>K+</h3>--}}
{{--                            <p class="count-label">Pro User</p>--}}
{{--                        </div>--}}
{{--                        <div class="counter-card mb-3 pb-1 pb-md-0 mb-md-0">--}}
{{--                            <h3 class="counter-count"><span class="count" data-count="8">0</span>K+</h3>--}}
{{--                            <p class="count-label">Reviews</p>--}}
{{--                        </div>--}}
                    </section>
                    <section class="edica-about-goal py-5 mb-5">
                        <div class="row">
                            <div class="col-md-6 mb-4 mb-md-0 d-flex flex-column justify-content-center" data-aos="fade-right">
                                <h2 class="goal-title">Лингвистическая программа</h2>
                                <p class="vision-text">

                                    предусматривает изучение:
                                <ul>
                                    <li>  английский язык на углублённом уровне,</li>
                                    <li> второй иностранный с 5 класса</li>
                                    <li> немецкий (3часа/неделю),</li>
                                    <li> церковнославянский - 4 года,</li>
                                    <li> латинский - 4 года,</li>
                                    <li> древнегреческий по выбору.</li>
                                </ul>
                                    Точные и естественнонаучные предметы преподаются на базовом уровне.
                                </p>
                            </div>
                            <div class="col-md-6" data-aos="fade-left">
                                <img src="{{ asset('assets/images/about9.jpg?v=1')}}" alt="goal" class="img-fluid2"  style="width:100%">
                            </div>
                        </div>
                    </section>
                    <section class="edica-about-clients mb-5">
                        <h2 class="clients-title mb-5" data-aos="fade-up">Наши выпускники</h2>
                        <div class="row py-4 d-flex justify-content-sm-around" data-aos="fade-up">
                            <div class="mb-4 mb-md-0">
                                <img src="assets/images/out23.jpg" style="border-radius:0.5rem;height: 150px;max-width: 100%" data-aos="flip-right" data-aos-delay="250" class="aos-init aos-animate">
                            </div>
                            <div class="mb-4 mb-md-0">
                                <img src="assets/images/out.jpg" style="border-radius:0.5rem;height: 150px;max-width: 100%" data-aos="flip-right" data-aos-delay="500" class="aos-init aos-animate">
                            </div>
                            <div class="mb-4 mb-md-0">
                                <img src="assets/images/out21.jpg" style="border-radius:0.5rem;height: 150px;max-width: 100%" data-aos="flip-right" data-aos-delay="750" class="aos-init aos-animate">
                            </div>
                            <div class="mb-4 mb-md-0">
                                <img src="assets/images/out20.jpg"  style="border-radius:0.5rem;height: 150px;max-width: 100%" data-aos="flip-right" data-aos-delay="1000" class="aos-init aos-animate">
                            </div>
                         <div class="mb-4 mb-md-0">
                                <img src="assets/images/out19.jpg"  style="border-radius:0.5rem;height: 150px;max-width: 100%" data-aos="flip-right" data-aos-delay="1250" class="aos-init aos-animate">
                            </div>
{{--                            <div class="col-6 col-md-2 mb-4 mb-md-0">--}}
{{--                                <img src="assets/images/out.jpg" alt="client logo" width="140px" class="img-fluid">--}}
{{--                            </div>--}}
{{--                            <div class="col-6 col-md-2 mb-4 mb-md-0">--}}
{{--                                <img src="assets/images/out.jpg" alt="client logo" width="140px" class="img-fluid">--}}
{{--                            </div>--}}
{{--                            <div class="col-6 col-md-2 mb-4 mb-md-0">--}}
{{--                                <img src="assets/images/out.jpg" alt="client logo" width="140px" class="img-fluid">--}}
{{--                            </div>--}}
                         </div>
                    </section>
                    <section class="edica-about-faq py-5 mb-5">
                        <h2 class="faq-title" data-aos="fade-up">Часто задаваемые вопросы</h2>
                        <p class="faq-section-text" data-aos="fade-up" data-aos-delay="100">
                            На Ваши вопросы отвечает заведующий учебной частью Гимназии.
                        </p>
                        <div class="accordion" id="edicaAboutFaqCollapse" role="tablist"
                             aria-multiselectable="true">
                            @php $n = 1; @endphp
                            @foreach($answers as $answer)
                                <div class="card" data-aos="fade-up" data-aos-delay="200">
                                    <div class="card-header" role="tab" id="edicaAboutFaq{{ $n }}">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" data-parent="#edicaAboutFaqCollapse"
                                               href="#edicaAboutFaqContent{{ $n }}" aria-expanded="true"
                                               aria-controls="edicaAboutFaqContent{{ $n }}">
                                                {{ $answer->question }}
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="edicaAboutFaqContent{{ $n }}" class="collapse in" role="tabpanel"
                                         aria-labelledby="edicaAboutFaq{{ $n }}">
                                        <div class="card-body ml-2 font-italic text-gray my-1" style="border-radius: 1rem;border:1px solid lightgray;">
                                            {!! $answer->answer  !!}
                                        </div>
                                    </div>
                                </div>
                                @php $n++; @endphp
                            @endforeach
                        </div>
                    </section>
                    <section  class="edica-about-faq py-5 mb-5">
                        <h2 class="faq-title" data-aos="fade-right">Галерея картинок нашей жизни</h2>
                        <div class="row d-flex">
                            @foreach ($posts->chunk($chunkPosts) as $chunk)
                                <div class="col-4">
                                    @foreach ($chunk as $post)
                                        <div>
                                            <img style="max-width: 100%;border-radius:0.5rem;"   class="mb-4" src="{{  asset("storage/" . $post->preview_image) }}" alt="blog post">
                                        </div>
                                        <div>
                                            <img style="max-width: 100%;border-radius:0.5rem;"   class="mb-4" src="{{  asset("storage/" . $post->main_image) }}" alt="blog post">
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach

                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>

@endsection
