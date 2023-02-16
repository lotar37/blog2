@extends('layouts.main')

@section('content')
    <style>
        .row img{
            padding:10px;
        }
    </style>
    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">{{ $page[0]->title }}</h1>
            <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">{{ $page[0]->subtitle }}</p>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img src="{{ asset('assets/images/museum.jpg')}}" alt="featured image" class="w-100">
{{--                <img src="{{ asset('assets/images/museum.jpg')}}" alt="featured image" class="w-100">--}}
            </section>
            <section class="post-content">
                <div class="row">

                   {!! $page[0]->long_content !!}


                </div>
            </section>
        </div>
    </main>
@endsection
