@extends('layouts.main')

@section('content')
    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">{{ $post->title }}</h1>
            <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">{{ $post->date." ".$post->time }}</p>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img src="{{  asset("storage/" . $post->main_image) }}" alt="{{$post->main_image}}" class="w-100">
            </section>
            <section class="post-content">
                <div class="row">
                    <div class="col-lg-9 mx-auto" data-aos="fade-up">
                        <h2 class="mb-4" data-aos="fade-up">Резюме</h2>
                        {!! $post->content  !!}
                    </div>
                    @if($post->report)
                    <div class="col-lg-9 mx-auto" data-aos="fade-up">
                        <h2 class="mb-4" data-aos="fade-up">Отчет</h2>
                        {!! $post->report  !!}
                    </div>
                    @endif
                </div>

            </section>
        </div>
    </main>
@endsection
