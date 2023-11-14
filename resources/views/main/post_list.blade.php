@extends('layouts.main')

@section('content')
    <main class="blog blog-post">
        <div class="container">
            <h2 class="edica-page-title" data-aos="fade-up">Все новости</h2>
            @if($collection_tag)
            <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">{{ $collection_tag->title }}</p>
            @endif
            <div class="breadcrumb">
                <a href="/" class="breadcrumb-item">Главная</a>
{{--                <a href="{{ route("main.post") }}" class="breadcrumb-item">Новости</a>--}}
                @if($collection_tag)
                    <a href="{{ route("main.postlist") }}" class="breadcrumb-item" >Все новости</a>
                    <a href="#" class="breadcrumb-item active" >Все новости с тегом: "{{ $collection_tag->title }}"</a>
                @else
                    <a href="#" class="breadcrumb-item active" >Все новости</a>
                @endif
            </div>

            <section class="blog-post-featured-img edica-landing-section edica-landing-blog" data-aos="fade-up" data-aos-delay="300">
                <div class="row">
                    <div class="col-md-12 table table-striped" data-aos="fade-up">
                        @foreach($posts as $post)
                            <div class=" border-bottom mb-3">
                            <div class="row">
                               <div class="col-md-9">
                                    <div>
                                        {{ $post->formatedDate }} <span class="lead"><a href="{{ route('main.post_show', $post->id )}}">{{ $post->title }}</a></span>
                                    </div>
                                    <div>
                                        {{ str_replace("&nbsp;", " ", $post->shortContent) }}
                                        <a href="{{ route('main.post_show', $post->id )}}">>></a>
                                    </div>
                                </div>

                                <div class="col-md-3 ">
                                    <img src="{{  asset("storage/" . $post->main_image) }}" alt="" class="w-100 p-3" style="border-radius: 2rem;object-fit:cover;width:150px;height: 250px ">

                                </div>
                          </div>
                            @if($post->tags->count())
                                <div class="row ml-3">
                                    Tеги:&nbsp;
                                    @foreach($post->tags as $tag)
                                        <a href="{{ route('main.postlist.tag', $tag->id )}}">{{ $tags->find($tag->id)->title }}</a>&nbsp;

                                    @endforeach
                                </div>
                            @endif
                            </div>
                        @endforeach
                        {{$posts->links()}}
                    </div>
                 </div>
            </section>
        </div>
    </main>
@endsection
