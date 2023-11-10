@extends('layouts.main')

@section('content')
    <main class="blog blog-post">
        <div class="container">
            <h2 class="edica-page-title" data-aos="fade-up">Все новости</h2>
            <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200"></p>
            <div class="breadcrumb">
                <a href="/" class="breadcrumb-item">Главная</a>
                <a href="{{ route("main.post") }}" class="breadcrumb-item">Новости</a>
                <a href="#" class="breadcrumb-item active" >Все новости</a>
            </div>

            <section class="blog-post-featured-img edica-landing-section edica-landing-blog" data-aos="fade-up" data-aos-delay="300">
                <div class="row">
                    <div class="col-md-12 table table-striped" data-aos="fade-up">
                        @foreach($posts as $post)

                            <div class="row mt-1 mb-3 border-bottom">
                               <div class="col-md-9">
                                    <div>
                                        {{ $post->formatedDate }} <span class="lead">{{ $post->title }}</span>
                                    </div>
                                    <div>
                                        {{ str_replace("&nbsp;", " ", $post->shortContent) }}
                                        <a href="{{ route('main.post_show', $post->id )}}">>></a>
                                    </div>
                                </div>

                                <div class="col-md-3 ">
                                    <img src="{{  asset("storage/" . $post->main_image) }}" alt="" class="w-100 p-3" style="border-radius: 20%;object-fit:cover;width:200px;height: 200px ">

                                </div>
                            </div>
                        @endforeach
                        {{$posts->links()}}
                    </div>
                 </div>
            </section>
        </div>
    </main>
@endsection
