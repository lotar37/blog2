@extends('layouts.main')

@section('content')
    <style>
        .row img{
            padding:10px;
        }
    </style>

    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">{{ $page->title }}</h1>
            <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">{{ $page->subtitle }}</p>
            <div class="breadcrumb"  data-aos="fade-up" >
                <a href="/" class="breadcrumb-item">Главная</a>
                <a href="#" class="breadcrumb-item  active">{{ $page->title }}</a>
            </div>
            @if(isset($page->main_image))
                <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">

                    <img src="{{ asset("storage/".$page->main_image)}}" alt="featured image" class="w-100">
                    {{--                <img src="{{ asset('assets/images/museum.jpg')}}" alt="featured image" class="w-100">--}}
                </section>
            @endif
            <section class="edica-landing-section edica-landing-blog">
                <div class="container">
                    <h4 class="edica-landing-section-subtitle-alt">НОВОСТИ ДОШКОЛЬНИКОВ</h4>
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
                                <h4 class="blog-post-title"><a href="{{ route("main.post_show", $post->id) }}"
                                                               class="text-black-50">{{ $post->title }}</a></h4>
                                <p class="blog-post-category">{{ $post->formatedDate }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <section class="post-content" class="" style="display:flex; justify-content: space-around">
                <div class="col-md-10">

                    {!! $page->long_content !!}


                </div>
            </section>
        </div>
    </main>
@endsection
