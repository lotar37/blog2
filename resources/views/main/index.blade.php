@extends('layouts.main')
@section('landing_header')
    edica-landing-header
@endsection
@section('carousel')
    <div class="turn_on_class">
        <img src="{{ asset('assets/images/logo2.png') }}" alt="logo" class="pb-2" style="height: 2em">
    </div>
    <div class="turn_off_class">
    <div class="edica-landing-header-content">
        <div id="edicaLandingHeaderCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators ml-3">

                @foreach($carouselPosts as $carouselPost)
                <li data-target="#edicaLandingHeaderCarousel" style="font-weight: bold; font-size: 24px; color:#36c59e;" data-slide-to="{{ $loop->index }}" class="{{ $loop->index == 0 ? 'active' : ''}}"> &nbsp;&nbsp;&nbsp;&nbsp;<></li>

                @endforeach
        </ol>

            <div class="carousel-inner" role="listbox">
                @foreach($carouselPosts as $carouselPost)

                <div class="carousel-item {{ $loop->first ? " active" : ""}}">
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
                                 height="375px">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection
@section('content')

{{--     <component-users  :users="{{ \App\Models\User::all() }}" macs="{{ substr(exec('getmac'),0,17) }}"></component-users>--}}
{{--    {{ \Request::ip() }} - {{ substr(exec('getmac'),0,17) }} ---}}

{{--    <list></list>--}}
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
                                <p class="blog-post-category">{{ $post->formatedDate }}</p>
{{--                                <a href="{{ route("main.post_show", $post->id) }}" class="blog-post-link">Подробнее</a>--}}
                            </div>
                        @endforeach
                    </div>
                    <div class="col-lg-12 justify-content-lg-around flex-column"
                         style="display: flex; justify-content: space-around">
                        <a href="{{ route("main.post") }}" class="btn btn-success btn-lg my-4">ЕЩЁ НОВОСТИ</a>
                    </div>
                </div>
            </section>
            <section class="edica-landing-section edica-landing-blog my-0 py-0">
                <h4 class="edica-landing-section-subtitle-alt">ПОСТУПЛЕНИЕ В ГИМНАЗИЮ</h4>
            </section>

            <section class="edica-footer-banner-section">

                <div class="container">
                    <div class="row" data-aos="fade-up" style="background: #fafafa;padding:30px;border-radius: 1rem; border:1px solid lightgrey;max-width:110%;">
                        <div class="col-md-5">
                            <img src="{{ asset("assets/images/goschool.jpg") }}" alt="" style="max-height: 300px;max-width:100%;border-radius: 2rem;">
                        </div>
{{--                        <div class="col-md-2"> &nbsp;</div>--}}
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
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="edica-landing-section edica-landing-blog">
                <div class="container">
                    <h4 class="edica-landing-section-subtitle-alt">ДОПОЛНИТЕЛЬНЫЕ ЗАНЯТИЯ</h4>
                    <div class="row">
                        <div class="col-md-1 landing-blog-post" data-aos="fade-right"></div>
                        <div class="col-md-2 landing-blog-post" data-aos="fade-right">
                            <img src="assets/images/chor.jpg" alt="blog post" class="blog-post-thumbnail">
                            {{--                            <p class="blog-post-category">{{ $categories->find($post->category_id)->title }}</p>--}}
                            <h4 class="blog-post-title">Хор</h4>
                            <a href="{{ route('main.circles.show', 1 )}}" class="blog-post-link text-success">Подробнее</a>
                        </div>
                        <div class="col-md-2 landing-blog-post" data-aos="fade-down">
                            <img src="assets/images/math.jpg" alt="blog post" class="blog-post-thumbnail">
                            {{--                            <p class="blog-post-category">{{ $categories->find($post->category_id)->title }}</p>--}}
                            <h4 class="blog-post-title">Математика</h4>
                            <a href="{{ route('main.circles.show', 2 )}}" class="blog-post-link  text-success">Подробнее</a>
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
                            <a href="{{ route('main.circles.show', 4 )}}" class="blog-post-link text-success">Подробнее</a>
                        </div>
                        <div class="col-md-2 landing-blog-post" data-aos="fade-left">
                            <img src="assets/images/footbal.jpg" alt="blog post" class="blog-post-thumbnail">
                            {{--                            <p class="blog-post-category">{{ $categories->find($post->category_id)->title }}</p>--}}
                            <h4 class="blog-post-title">Футбол</h4>
                            <a href="{{ route('main.circles.show', 3 )}}" class="blog-post-link text-success">Подробнее</a>
                        </div>
                        <div class="col-md-1 landing-blog-post" data-aos="fade-right"></div>
                    </div>
                    <div class="col-lg-12 justify-content-lg-around flex-column"
                         style="display: flex; justify-content: space-around">
                    </div>
                </div>

            </section>


        <section  class="edica-landing-section pb-0">
            <h4 class="edica-landing-section-subtitle-alt ">ОТЗЫВЫ О НАС</h4>
        </section>
        </div>
        <section class="edica-landing-section edica-landing-testimonials aos-init aos-animate mt-0 mb-4 pb-0" data-aos="fade-up" style="background: #d3f6f1">
                <div class="container">

                    <div id="edicaLandingTestimonialCarousel" class="carousel slide landing-testimonial-carousel" data-ride="carousel">
                        <div class="text-center py-4">
                            <img src="assets/images/quote.svg" alt="quote">
                        </div>
                        <div class="carousel-inner" role="listbox" style="height:10rem;">

                            @foreach($reports as $report)
                            <div class="carousel-item {{ $loop->index == 1 ? "active" : "" }}">
                                <blockquote class="testimonial">
                                    <p style="font-size: x-large">“{!! $report->short !!}...” </p>
                                </blockquote>
                            </div>

                            @endforeach

                        </div>
                        <ol class="carousel-indicators"  style="height:10rem;">

                            @foreach($reports as $report)
                            <li data-target="#edicaLandingTestimonialCarousel" data-slide-to="{{ $loop->index }}" class="{{ $loop->index == 1 ? "active" : "" }}">
                                <img src="{{ asset("storage/".$report->avatar)}}" alt="avatar">
                                <div class="user-details">
                                    <h6>{{$report->person}}</h6>
                                    <p>{{$report->date}}</p>
                                </div>
                            </li>

                            @endforeach
                          </ol>
                    </div>
                </div>
            <div class="justify-content-lg-around m-2"
                 style="display: flex; justify-content: space-around">
                <a href="{{ route("main.reports") }}" class="btn btn-success btn-lg my-4">ВСЕ ОТЗЫВЫ</a>
            </div>
        </section>
        <div class="container">


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

                                    @foreach($answers as $answer)
                                    <div class="card" data-aos="fade-up" data-aos-delay="200">
                                        <div class="card-header" role="tab" id="edicaAboutFaq{{ $loop->index }}">
                                            <h5 class="mb-0">
                                                <a data-toggle="collapse" data-parent="#edicaAboutFaqCollapse"
                                                   href="#edicaAboutFaqContent{{ $loop->index }}" aria-expanded="true"
                                                   aria-controls="edicaAboutFaqContent{{ $loop->index }}">
                                                    {{ $answer->question }}
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="edicaAboutFaqContent{{ $loop->index }}" class="collapse in" role="tabpanel"
                                             aria-labelledby="edicaAboutFaq{{ $loop->index }}">
                                            <div class="card-body ml-2 font-italic text-gray my-1" style="border-radius: 1rem;border:1px solid lightgray;">
                                                {!! $answer->answer  !!}
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach
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
