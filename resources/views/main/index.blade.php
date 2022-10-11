@extends('layouts.main')

@section('content')
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title mb-4" data-aos="fade-up">Гимназия Радонеж</h1>
            <section class="blog-post-featured-img mb-4" data-aos="fade-up" data-aos-delay="300">
                <img src="{{ asset('assets/images/main.jpg')}}" alt="featured image" class="w-100">
            </section>
{{--            <section class="featured-posts-section">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-4 fetured-post blog-post" data-aos="fade-right">--}}
{{--                        <div class="blog-post-thumbnail-wrapper">--}}
{{--                            <img src="{{ asset('assets/images/blog_1.jpg') }}" alt="blog post">--}}
{{--                        </div>--}}
{{--                        <p class="blog-post-category">Blog post</p>--}}
{{--                        <a href="#!" class="blog-post-permalink">--}}
{{--                            <h6 class="blog-post-title">Front becomes an official Instagram Marketing Partner</h6>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-4 fetured-post blog-post" data-aos="fade-up">--}}
{{--                        <div class="blog-post-thumbnail-wrapper">--}}
{{--                            <img src="{{ asset('assets/images/blog_2.jpg') }}" alt="blog post">--}}
{{--                        </div>--}}
{{--                        <p class="blog-post-category">Blog post</p>--}}
{{--                        <a href="#" class="blog-post-permalink">--}}
{{--                            <h6 class="blog-post-title">Front becomes an official Instagram Marketing Partner</h6>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-4 fetured-post blog-post" data-aos="fade-left">--}}
{{--                        <div class="blog-post-thumbnail-wrapper">--}}
{{--                            <img src="{{ asset('assets/images/blog_3.jpg') }}" alt="blog post">--}}
{{--                        </div>--}}
{{--                        <p class="blog-post-category">Blog post</p>--}}
{{--                        <a href="#" class="blog-post-permalink">--}}
{{--                            <h6 class="blog-post-title">Front becomes an official Instagram Marketing Partner</h6>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </section>--}}

            <div class="row">
                <div class="col-md-3 sidebar" >
                    <section>
                        <div class="row blog-post-row">
                            <div class="col-md-12 blog-post" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{ asset('assets/images/about.jpg') }}" alt="blog post">
                                </div>
                                <p class="blog-post-category">Новость</p>
                                <a href="#!" class="blog-post-permalink">
                                    <h6 class="blog-post-title">1 сентября - День знаний. Здравствуй любимая школа!</h6>
                                </a>
                            </div>
                        </div>
                        <div class="row blog-post-row">
                            <div class="col-md-12 blog-post" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{ asset('assets/images/about3.jpg') }}" alt="blog post">
                                </div>
                                <p class="blog-post-category">Новость</p>
                                <a href="#!" class="blog-post-permalink">
                                    <h6 class="blog-post-title">Посещение школы святейшим патриархом Алексием</h6>
                                </a>
                            </div>
                        </div>
{{--                        <div class="row blog-post-row">--}}
{{--                            <div class="col-md-12 blog-post" data-aos="fade-up">--}}
{{--                                <div class="blog-post-thumbnail-wrapper">--}}
{{--                                    <img src="{{ asset('assets/images/blog_9.jpg') }}" alt="blog post">--}}
{{--                                </div>--}}
{{--                                <p class="blog-post-category">Blog post</p>--}}
{{--                                <a href="#!" class="blog-post-permalink">--}}
{{--                                    <h6 class="blog-post-title">Front becomes an official Instagram Marketing Partner</h6>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row blog-post-row">--}}
{{--                            <div class="col-md-12 blog-post" data-aos="fade-up">--}}
{{--                                <div class="blog-post-thumbnail-wrapper">--}}
{{--                                    <img src="{{ asset('assets/images/blog_11.jpg') }}" alt="blog post">--}}
{{--                                </div>--}}
{{--                                <p class="blog-post-category">Blog post</p>--}}
{{--                                <a href="#!" class="blog-post-permalink">--}}
{{--                                    <h6 class="blog-post-title">Front becomes an official Instagram Marketing Partner</h6>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </section>
                </div>
{{--                Post lists--}}
                <div class="col-md-9" >
                    <div class="widget widget-post-list" data-aos="fade-up">
                        <h5 class="widget-title">Ближайшие мероприятия</h5>
                        <ul class="post-list">
                            @foreach($posts as $post)
                            <li class="post">
                                <a href="#!" class="post-permalink media">
                                    <img src="{{ asset("storage/" . $post->preview_image) }}" alt="blog post">
                                    <div class="media-body">
                                        <h6 class="post-title">{{$post->title}}</h6>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                                <li class="post">
                                    <a href="#!" class="post-permalink media">
                                        <img src="{{ asset('assets/images/about5.jpg') }}" alt="blog post">
                                        <div class="media-body">
                                            <h6 class="post-title">День учителя</h6>
                                        </div>
                                    </a>
                                </li>
                                <li class="post">
                                    <a href="#!" class="post-permalink media">
                                        <img src="{{ asset('assets/images/about6.jpg') }}" alt="blog post">
                                        <div class="media-body">
                                            <h6 class="post-title">1 - сентября: День знаний</h6>
                                        </div>
                                    </a>
                                </li>
                        </ul>
                    </div>
                    <div class="widget">
                        <h5 class="widget-title">Категории</h5>
                        <img src="{{ asset('assets/images/about6.jpg') }}" alt="categories" class="w-100">
                    </div>
                </div>
            </div>
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
                                <img src="{{ asset('assets/images/about3.jpg') }}" alt="First slide">
                                <figcaption class="post-title">
                                    <a href="#!">Мероприятия гимназии</a>
                                </figcaption>
                            </figure>
                            <figure class="carousel-item">
                                <img src="{{ asset('assets/images/about4.jpg') }}" alt="First slide">
                                <figcaption class="post-title">
                                    <a href="#!">Мероприятия гимназии</a>
                                </figcaption>
                            </figure>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/about5.jpg') }}" alt="First slide">
                                <figcaption class="post-title">
                                    <a href="#!">Мероприятия гимназии</a>
                                </figcaption>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </main>
@endsection
