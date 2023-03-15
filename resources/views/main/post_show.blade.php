@extends('layouts.main')

@section('content')
    <main class="blog blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">{{ $post->title }}</h1>
            <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">{{ $post->date." ".$post->time }}</p>

            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <div class="row">
                    <div class="col-md-9 mx-auto" data-aos="fade-up">
                <img src="{{  asset("storage/" . $post->main_image) }}" alt="{{$post->main_image}}" class="w-100">
                    </div>
                </div>
            </section>
            <section class="edica-landing-section edica-landing-blog">
{{--            <section class="post-content">--}}
                <div class="row">
                    <div class="col-md-9 mx-auto" data-aos="fade-up">
                        <h4>{!! $post->content  !!}</h4>
                    </div>
                </div>
                <div class="row">


                    <div class="col-md-7 ml-auto" data-aos="fade-up">

                        @if($post->report)
                        {!! $post->report  !!}
                        @endif
                    </div>

                    <div class="col-md-2 sidebar mr-auto" data-aos="fade-up" >
                        @include('main.includes.random_post')
                    </div>
                </div>

            </section>
        </div>
    </main>
@endsection
