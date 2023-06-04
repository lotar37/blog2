@extends('layouts.main')

@section('content')
    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Кружки</h1>
            <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">учебный год 2022-23</p>
            <div class="breadcrumb"  data-aos="fade-up" >
                <a href="/" class="breadcrumb-item">Главная</a>
                <a href="#" class="breadcrumb-item  active">Кружки</a>
            </div>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img src="{{ asset('assets/images/circles3.jpg')}}" alt="featured image" class="w-100">
            </section>
            <section class="post-content">
                <div class="row">
{{--                    <div class="col-lg-10 mx-auto" data-aos="fade-up">--}}
                        @foreach($circles as $circle)

                            <div class="col-sm-4">
                                <div class="card">
                                    <img src="{{ asset("storage/".$circle->avatar)}}" class="card-img-top" alt="..."  style="height:16rem">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $circle->name }}</h5>
                                        <p class="card-text">{{ $circle->short_description }}</p>
                                        <a href="{{ route('main.circles.show', $circle->id )}} " class="btn btn-primary text-white">Подробнее</a>
                                    </div>
                                </div>
                            </div>


{{--                            <a href="{{ route('main.circles.show', $circle->id) }}">--}}
{{--                            <div class="row mb-5">--}}
{{--                                <div class="col col-3"><img src="{{ asset("storage/".$circle->avatar)}}" style="height: 100px;border-radius: 30%" alt=""></div>--}}
{{--                                <div class="col"><h1>{{ $circle->name }}</h1></div>--}}
{{--                            </div>--}}
{{--                            </a>--}}
                        @endforeach

{{--                    </div>--}}
                </div>
            </section>
        </div>
    </main>
@endsection
