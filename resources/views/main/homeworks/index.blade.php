@extends('layouts.main')

@section('content')
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Домашние задания</h1>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img src="{{ asset('assets/images/homeworks.jpg')}}" alt="featured image" class="w-100">
            </section>
            <section class="edica-about-faq py-5 mb-5">
                <div class="accordion" id="reportCollapse" role="tablist" aria-multiselectable="true">
                    <div class="card" data-aos="fade-up" data-aos-delay="200">
                        @foreach($workload as $s_key=>$subject)
                        <div class="card-header" role="tab" id="subject{{ $s_key }}">
                            <h5 class="mb-0">
                                {{ $data['subjects']->find($s_key)->name }}
{{--                                <a data-toggle="collapse" data-parent="#reportCollapse" href="#reportContent{{ $report->id }}" aria-expanded="true" aria-controls="reportContent{{ $report->id }}">--}}
{{--                                    {{$report->person}}, {{$report->date}}--}}
{{--                                </a>--}}
                            </h5>
                        </div>
{{--                        <div id="subjectContent{{ $subject->id }}" class="collapse in" role="tabpanel" aria-labelledby="report{{ $report->id }}">--}}
{{--                            <div class="card-body">--}}
{{--                                {!! $report->content !!}--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        @endforeach
                    </div>
                </div>
            </section>

        </div>

    </main>
@endsection
