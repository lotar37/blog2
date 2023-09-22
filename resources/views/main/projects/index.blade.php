@extends('layouts.main')

@section('content')
    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Проекты</h1>
            <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">учебный год 2023-24</p>
            <div class="breadcrumb"  data-aos="fade-up" >
                <a href="/" class="breadcrumb-item">Главная</a>
                <a href="#" class="breadcrumb-item  active">Проекты</a>
            </div>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img src="{{ asset('assets/images/project.jpg')}}" alt="featured image" class="w-100">
            </section>
            <section class="post-content">
                <div class="row">
                        @foreach($projects as $project)

                            <div class="col-sm-4">
                                <div class="card">
                                    <img src="{{ asset("storage/".$project->avatar)}}" class="card-img-top" alt="..."  >
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $project->name }}</h5>
                                        <p class="card-text">{{ $project->short_description }} ...</p>
                                        <div class="d-flex justify-content-end">
                                            <a href="{{ route('main.projects.show', $project->id )}} " class="btn btn-warning text-white" >Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach

                </div>
            </section>
        </div>
    </main>
@endsection
