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
            <section class="post-content" class="" style="display:flex; justify-content: space-around">
                <div class="col-md-10">

                   {!! $page->long_content !!}


                </div>
            </section>
        </div>
    </main>
@endsection
