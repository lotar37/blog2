@extends('layouts.main')

@section('content')
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Отзывы</h1>
            <div class="breadcrumb"  data-aos="fade-up" >
                <a href="/" class="breadcrumb-item">Главная</a>
                <a href="#" class="breadcrumb-item  active">Отзывы наших учеников и их родителей</a>
            </div>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img src="{{ asset('assets/images/otz.jpg')}}" alt="featured image" class="w-100">
            </section>
            <section class="edica-about-faq py-5 mb-5">
{{--                <h2 class="faq-title" data-aos="fade-up">Отзывы наших учеников и их родителей</h2>--}}

                    <div class="" data-aos="fade-up">
                        @foreach($reports as $report)
                        <div class="d-flex justify-content-between mb-4 align-items-center">


                            <div class="h4">
                                <img style="width:100px;border-radius: 50%;" src="{{ asset("storage/".$report->avatar)}}">
                                {{$report->person}}
                            </div>
                            <div class="h4">{{$report->date}}</div>


                        </div>
                        <div  >
                            <div class="mb-4">
                                {!! $report->content !!}
                            </div>
                        </div>
                        @endforeach
                    </div>

            </section>

        </div>

    </main>
@endsection
