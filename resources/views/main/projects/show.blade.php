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
            <section class="edica-landing-section edica-landing-blog">
                <div class="container">
                    <h4 class="edica-landing-section-subtitle-alt">ОПИСАНИЕ ПРОЕКТА</h4>
                <div class="row">
                    <div class="col-sm-12">{!! nl2br($project->description) !!}  </div>
                </div>
            </section>
            <section class="edica-landing-section edica-landing-blog" style="{{ count($project->posts) == 0 ? "display:none" : "" }}">
                <div class="container">
                    <h4 class="edica-landing-section-subtitle-alt" >ПОСЛЕДНИЕ НОВОСТИ ПРОЕКТА</h4>
                    <div class="row">
                        @php
                            $a = ["right","up","left"];
                            $i = 0;
                        @endphp
                        @foreach($project->posts as $post)
                            <div class="col-md-4 landing-blog-post" data-aos="fade-{{ $a[$i%3] }}">
                                @php $i++ @endphp
                                <img src="{{ asset("storage/" . $post->main_image) }}" alt="blog post"
                                     class="blog-post-thumbnail" style="object-fit: cover;height: 150pt;">
                                {{--                            <p class="blog-post-category">{{ $categories->find($post->category_id)->title }}</p>--}}
                                <h4 class="blog-post-title"><a href="{{ route("main.post_show", $post->id) }}" class="text-black-50">{{ $post->title }}</a></h4>
                                <p class="blog-post-category">{{ $post->date }}</p>
                                {{--                                <a href="{{ route("main.post_show", $post->id) }}" class="blog-post-link">Подробнее</a>--}}
                            </div>
                        @endforeach
                    </div>

                </div>
            </section>
            <section class="post-content">
                <div class="row">
                    <div class="col col-12 p-4">

                        <div class="embed-responsive embed-responsive-16by9">
                        @if($project->video_type == "vk")

                            <div class="pb-4 video-container">
                                <iframe src="{{ $project->video_link }}"

                                        allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;"
                                        frameborder="0" allowfullscreen></iframe>
                            </div>
                            <h3></h3>
                        @endif
                        @if($project->video_type == "rutube")
                            <div class="pb-4 video-container">


                                <iframe class="w-100"
                                        src="{{ $project->video_link }}" frameBorder="0"
                                        allow="clipboard-write; autoplay" webkitAllowFullScreen
                                        mozallowfullscreen allowFullScreen></iframe>

                            </div>
                            <h3></h3>
                        @endif
                        @if($project->video_type == "youtube")
                            <div class="pb-4 video-container">


                                <iframe class="w-100" src="{{ $project->video_link }}"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin"
                                        allowfullscreen></iframe>

                            </div>
                            <h3></h3>
                        @endif



{{--                    <iframe data-src="{{ $project->video_link }}" title="YouTube video player" --}}
{{--                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"--}}
{{--                            allowfullscreen></iframe>--}}
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
