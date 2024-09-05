@extends('layouts.main')

@section('content')
    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Что читать летом?</h1>
{{--            <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">учебный год {{ $school_year }}</p>--}}
{{--            <div class="breadcrumb"  data-aos="fade-up" >--}}
{{--                <a href="/" class="breadcrumb-item">Главная</a>--}}
{{--                <a href="#" class="breadcrumb-item  active">Что читать летом?</a>--}}
{{--            </div>--}}
            <section class="post-content">
             <div class="row col-md-12 d-flex justify-content-center">
                 <div class="col-md-12 ">
                     <div class="row  col-md-12 align-items-end" >
                     @foreach($class_db as $class)
                         @if($class->id === $data['class']->id)
                             <a href="{{ route("main.summer_reading.show", $class->id) }}"><div class=""><h2  class="btn btn-info">{{ $class->name }}</h2></div></a>
                             @else
                                 <a href="{{ route("main.summer_reading.show", $class->id) }}"><div class="  mx-auto"><h3 class="btn btn-secondary mx-auto">{{ $class->name }}</h3></div></a>
                             @endif

                                 @endforeach
                     </div>
                 </div>
                 <div class="row col-md-12">
                     <div class="col-12 p-4" style="border-radius: 1rem; border:1px solid lightgrey;background: #f0f0f0">
                         <h4 class="m-4">Чтение на лето для перешедших в {{ $data['class']->name }} класс</h4>
    {!! isset($data['homework']) ? $data['homework']->content : "Нет информации, но скоро будет" !!}

                     </div>
                 </div>
             </div>
            </section>
        </div>
    </main>
@endsection
