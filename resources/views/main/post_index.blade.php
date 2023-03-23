@extends('layouts.main')

@section('content')
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">События</h1>
            <section class="featured-posts-section">
                <div class="row">
                    @foreach($posts[0] as $post)
                    <div class="col-md-4 fetured-post blog-post" data-aos="fade-right">
                        <div class="blog-post-thumbnail-wrapper">
                            <img src="{{  asset("storage/" . $post->preview_image) }}" alt="blog post">
                        </div>
                        <p class="blog-post-category">{{ $categories->find($post->category_id)->title }}</p>
                        <a href="{{ route("main.post_show", $post->id) }}" class="blog-post-permalink">
                            <h6 class="blog-post-title">{{ $post->title }}</h6>
                        </a>
                    </div>
                    @endforeach
                </div>
            </section>
            <div class="row">
                <div class="col-md-8">
                    <section>
                        @foreach($posts[1] as $two_posts)
                        <div class="row blog-post-row">
                            @foreach($two_posts as $post)
                            <div class="col-md-6 blog-post" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{  asset("storage/" . $post->preview_image) }}" alt="blog post">
                                </div>
                                <p class="blog-post-category">{{ $categories->find($post->category_id)->title }}</p>
                                <a href="{{ route("main.post_show", $post->id) }}" class="blog-post-permalink">
                                    <h6 class="blog-post-title">{{ $post->title }}</h6>
                                </a>
                            </div>
                            @endforeach
                        </div>
                        @endforeach

                    </section>
                </div>
                <div class="col-md-4 sidebar" data-aos="fade-left">
                    <div class="widget widget-post-carousel">
                        <h5 class="widget-title">Популярные</h5>
                        <div class="post-carousel">
                            <div id="carouselId" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselId" data-slide-to="1"></li>
                                    <li data-target="#carouselId" data-slide-to="2"></li>
                                </ol>
                                @php
                                $count = 0
                                @endphp
                                <div class="carousel-inner" role="listbox">
                                    @foreach($randomPosts3 as $post)
                                    <figure class="carousel-item {{ $count == 0 ? ' active' : ''}}">
                                        <img src="{{ asset("storage/" . $post->main_image) }}" alt="First slide">
                                        <figcaption class="post-title">
                                            <a href="{{ route("main.post_show", $post->id) }}">{{ $post->title }}</a>
                                        </figcaption>
                                    </figure>
                                        @php $count++ @endphp
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget widget-post-list">
                        <h5 class="widget-title">Случайные</h5>
                        <ul class="post-list">
                            @foreach($randomPosts4 as $post)
                            <li class="post">
                                <a href="{{ route("main.post_show", $post->id) }}" class="post-permalink media">
                                    <img src="{{ asset("storage/" . $post->preview_image) }}" alt="blog post">
                                    <div class="media-body">
                                        <h6 class="post-title">{{$post->title}}</h6>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
{{--                    <div class="widget">--}}
{{--                        <h5 class="widget-title">Categories</h5>--}}
{{--                        <img src="assets/images/blog_widget_categories.jpg" alt="categories" class="w-100">--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>

    </main>
{{--    <main class="blog blog-post">--}}
{{--        <div class="container">--}}
{{--            <h2 class="edica-page-title" data-aos="fade-up">{{ $post->title }}</h2>--}}
{{--            <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">{{ $post->date." ".$post->time }}</p>--}}

{{--            <section class="blog-post-featured-img edica-landing-section edica-landing-blog" data-aos="fade-up" data-aos-delay="300">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-9 mx-auto" data-aos="fade-up">--}}
{{--                        <div class="row">--}}

{{--                            <div class="col-md-10 mx-auto" data-aos="fade-up">--}}
{{--                        <img src="{{  asset("storage/" . $post->main_image) }}" alt="{{$post->main_image}}" class="w-100 mb-md-4">--}}
{{--                            </div>--}}
{{--                        </div>--}}


{{--                        <div class="row">--}}
{{--                            <div class="col-md-10 mx-auto" data-aos="fade-up">--}}
{{--                                <h4>{!! $post->content  !!}</h4>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row">--}}


{{--                            <div class="col-md-10 mx-auto" data-aos="fade-up">--}}

{{--                                @if($post->report)--}}
{{--                                {!! $post->report  !!}--}}
{{--                                @endif--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-10 mx-auto" data-aos="fade-up">--}}
{{--                                <img src="{{  asset("storage/" . $post->preview_image) }}" alt="{{$post->main_image}}" class="w-100">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3 sidebar mr-auto" data-aos="fade-up" >--}}
{{--                        <h6 class="mx-auto">Ещё мероприятия</h6>--}}
{{--                        @include('main.includes.random_post')--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </section>--}}
{{--        </div>--}}
{{--    </main>--}}
@endsection
