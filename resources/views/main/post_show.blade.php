@extends('layouts.main')

@section('content')
    <main class="blog blog-post">
        <div class="container">
            <h2 class="edica-page-title" data-aos="fade-up">{{ $post->title }}</h2>
            <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">{{ $post->date." ".$post->time }}</p>
            <div class="breadcrumb">
                <a href="/" class="breadcrumb-item">Главная</a>
                <a href="{{ route("main.post") }}" class="breadcrumb-item">Новости</a>
                <a href="#" class="breadcrumb-item active">{{ $post->title }}</a>
            </div>

            <section class="blog-post-featured-img edica-landing-section edica-landing-blog" data-aos="fade-up" data-aos-delay="300">
                <div class="row">
                    <div class="col-md-9 mx-auto" data-aos="fade-up">
                        <div class="row">

                            <div class="col-md-10 mx-auto" data-aos="fade-up">
                        <img src="{{  asset("storage/" . $post->main_image) }}" alt="" class="w-100 mb-md-4">
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-10 mx-auto" data-aos="fade-up">
                                <h4>{!! $post->content  !!}</h4>
                            </div>
                        </div>
                        <div class="row">


                            <div class="col-md-10 mx-auto" data-aos="fade-up">

                                @if($post->report)
                                {!! $post->report  !!}
                                @endif
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-10 mx-auto" data-aos="fade-up">
                                <img src="{{  asset("storage/" . $post->preview_image) }}" alt="" class="w-100">
                            </div>
                        </div>
                        @if($project)
                            <h4 class="edica-landing-section-subtitle-alt mt-5" >МЕРОПРИЯТИЕ ОТНОСИТСЯ К ПРОЕКТУ</h4>
                            <div class="row mt-1">
                            <div class="col-md-3">
                                <img src="{{  asset("storage/" . $project->avatar) }}" alt="" class="w-100">

                            </div>
                            <div class="col-md-8">
                                <div>
                                    Проект: <span class="lead">{{ $project->name }}</span>
                                </div>
                                <div>
                                    {{ $project->short_description }}
                                    <a href="{{ route('main.projects.show', $project->id )}}">Подробнее</a>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="col-md-3 sidebar mr-auto" data-aos="fade-up" >
                        <h6 class="mx-auto">Ещё мероприятия</h6>
                        @include('main.includes.random_post')
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
