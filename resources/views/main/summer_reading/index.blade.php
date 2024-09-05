@extends('layouts.main')

@section('content')
    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Что читать летом?</h1>
{{--            <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">учебный год {{ $school_year }}</p>--}}
            <section class="post-content">


               <div class="row col-md-12 d-flex justify-content-center">
                   <div class="col-md-12 ">
                       <div class="row  col-md-12 align-items-end" >
                           @foreach($class_db as $class)
{{--                               <a href="{{ route("main.summer_reading.show", $class->id) }}"><div class="col-1  mx-auto"><h3 class="btn btn-secondary mx-auto">{{ $class->name }}</h3></div></a>--}}
                               <a href="{{ route("main.summer_reading.show", $class->id) }}">
                                   <div class="  mx-auto">
                                       <h3 class="btn btn-secondary mx-auto">{{ $class->name }}</h3>
                                   </div>
                               </a>
                           @endforeach
                       </div>
                   </div>
                   <div class="row col-md-12">
                       <div class="col-12 p-4" style="border-radius: 1rem; border:1px solid lightgrey;background: #f0f0f0">
                            {!! $text !!}
{{--                           Чтение расширяет кругозор, развивает воображение, регулярно читающий человек не только грамотен,--}}
{{--                           но и обладает хорошо развитыми речевыми навыками, позволяющими ему чётко, красиво и доступно--}}
{{--                           излагать свои мысли, чтение развивает мышление: читая книги, мы активно думаем, чтобы понять--}}
{{--                           тут или иную идею произведения, чтение развивает память, улучшает концентрацию, увеличивает--}}
{{--                           словарный запас и помогает отдохнуть от напряженности современной жизни.--}}
                       </div>
                   </div>
               </div>




            </section>
        </div>
    </main>
@endsection
