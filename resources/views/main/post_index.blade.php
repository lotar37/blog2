@extends('layouts.main')

@section('content')
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Новости</h1>
            <div class="breadcrumb">
                <a href="/" class="breadcrumb-item">Главная</a>
                <a href="{{ route("main.post") }}" class="breadcrumb-item  active">Новости</a>
            </div>
            <section class="featured-posts-section">
                <div class="row">
                    @foreach($posts[0] as $post)
                    <div class="col-md-4 fetured-post blog-post" data-aos="fade-right">
                        <div class="blog-post-thumbnail-wrapper">
                            <img src="{{  asset("storage/" . $post->preview_image) }}" alt="blog post">
                        </div>
                        <div class="blog-post-category"  style="display:flex;justify-content: space-between">
                            <div>{{ $categories->find($post->category_id)->title }}</div>
                            <div><i class="fa-regular far fa-eye"></i> {{ $post->count_views }}</div>

                        </div>
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
                                <div class="blog-post-category"   style="display:flex;justify-content: space-between">
                                    <div>{{ $categories->find($post->category_id)->title }}</div>
                                    <div><i class="fa-regular far fa-eye"></i> {{ $post->count_views }}</div>
                                </div>
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
                                @php  $count = 0   @endphp

                                <ol class="carousel-indicators">
                                    @foreach($randomPosts3 as $post)
                                    <li data-target="#carouselId" data-slide-to="{{ $count }}" class="{{ $count ? "": "active"  }}"></li>
                                        @php $count++ @endphp
                                    @endforeach
                                </ol>

                                @php  $count = 0   @endphp
                                <div class="carousel-inner" role="listbox">
                                    @foreach($randomPosts3 as $post)
                                    <figure class="carousel-item {{ $count == 0 ? ' active' : ''}}">
                                        <img src="{{ asset("storage/" . $post->main_image) }}" alt="First slide">
                                        <figcaption class="post-title"    style="display:flex;justify-content: space-between">
                                            <div><a href="{{ route("main.post_show", $post->id) }}">{{ $post->title }}</a></div>
                                            <div style="white-space: nowrap"><i class="fa-regular fas fa-eye"></i> {{ $post->count_views }}</div>
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
                </div>
            </div>
        </div>

    </main>
@endsection
