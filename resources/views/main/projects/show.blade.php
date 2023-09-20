@extends('layouts.main')

@section('content')
    <main class="blog-post">
        <div class="container">
{{--            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">--}}
{{--                <img src="{{ asset('assets/images/circles3.jpg')}}" alt="featured image" class="w-100">--}}
{{--            </section>--}}
            <div class="breadcrumb"  data-aos="fade-up" >
                <a href="/" class="breadcrumb-item">Главная</a>
                <a href="{{ route('main.projects') }}" class="breadcrumb-item">Проекты</a>
                <a href="#" class="breadcrumb-item  active">{{ $project->name }}</a>
            </div>
            <div class="row breadcrumb m-0 mb-2" style="border-radius: 0.3rem; border:1px solid lightgrey;background: #f8f8f8">

                <div class="col-sm-4 p-0"><img src="{{ asset("storage/".$project->avatar)}}" alt="" style="border-radius: 0rem 0 0  0rem;max-width: 100%"></div>
                <div class="col-sm-8"><h1 class="edica-page-title" data-aos="fade-up">{{ $project->name }}</h1></div>
            </div>
            <div class="row">
                <div class="col-sm-12">{!! $project->description !!}  </div>
            </div>
            <section class="post-content">
                <div class="row">
                    <div class="col col-12 p-4">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe data-src="{{ $project->video_link }}" title="YouTube video player"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
{{--                <div class="embed-responsive embed-responsive-16by9">--}}
{{--                    <iframe class="embed-responsive-item" src="{{ $project->video_link }}" allowfullscreen></iframe>--}}
{{--                </div>--}}
                </div>
                </div>
            </section>
        </div>
    </main>
@endsection
