@extends('layouts.main')

@section('content')
    <main class="blog-post">
        <div class="container">
            <div class="breadcrumb"  data-aos="fade-up" >
                <a href="/" class="breadcrumb-item">Главная</a>
                <a href="{{ route('main.circles') }}" class="breadcrumb-item">Кружки</a>
                <a href="#" class="breadcrumb-item  active">{{ $circle->name }}</a>
            </div>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img src="{{ asset('assets/images/circles3.jpg')}}" alt="featured image" class="w-100">
            </section>
            <div class="row breadcrumb m-0 mb-2" style="border-radius: 1rem;">

                <div class="col-sm-4"><img src="{{ asset("storage/".$circle->avatar)}}" alt="" style="max-width: 100%"></div>
                <div class="col-sm-8"><h1 class="edica-page-title" data-aos="fade-up">{{ $circle->name }}</h1></div>
            </div>
            <div class="row">
                <div class="col-sm-12">{!! $circle->description !!}  </div>
            </div>
            <section class="post-content">
                <div class="row">
                    <div class="col col-10 m-5">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe data-src="{{ $circle->video_link }}" title="YouTube video player"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
{{--                <div class="embed-responsive embed-responsive-16by9">--}}
{{--                    <iframe class="embed-responsive-item" src="{{ $circle->video_link }}" allowfullscreen></iframe>--}}
{{--                </div>--}}
                </div>
                </div>
            </section>
        </div>
    </main>
@endsection
