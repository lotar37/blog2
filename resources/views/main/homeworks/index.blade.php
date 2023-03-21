@extends('layouts.main')

@section('content')
    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Домашние задания</h1>
{{--            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">--}}
{{--                <img src="{{ asset('assets/images/homeworks.jpg')}}" alt="featured image" class="w-100">--}}
{{--            </section>--}}



            <section class="edica-about-faq py-2 mb-2"  data-aos="fade-right">
                <div class="btn-group  btn-group-lg btn-group-justified col-12">
                @foreach($data['classes'] as $class)
                <a class="btn btn-outline-{{$data['colors'][$class->id]}}" href="{{ route('main.homework.showClass',$class->id) }}">{{$class->name}}</a>
                    @endforeach
                </div>
                </section>
            <section class="edica-about-faq py-0 card-body py-0 " >
                <div class="row">


                            @foreach($workload as $s_key=>$subject)
                        <div class="col-6 mb-1">
                                <div class="card aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                                    <div class="card-header" role="tab" id="edicaAboutFaq{{ $s_key }}">
                                        <h5 class="mb-0">

                                                {{ $data['subjects']->find($s_key)->name }}

                                        </h5>
                                    </div>
                                        <div class="card-body">
                                            <div class="btn-group  btn-group-md btn-group-justified col-6">
                                                @foreach($subject as $c_key=>$class)
                                                    <a class="btn btn-outline-dark" href="{{route("main.homework.show",[$data['subjects']->find($s_key)->id,$data['classes']->find($c_key)->id])}}">{{ $data['classes']->find($c_key)->name }}</a>
                                                @endforeach
                                            </div>
                                    </div>
                                </div>
                        </div>
                            @endforeach

                    </div>
                </div>
            </section>

        </div>

    </main>
@endsection
